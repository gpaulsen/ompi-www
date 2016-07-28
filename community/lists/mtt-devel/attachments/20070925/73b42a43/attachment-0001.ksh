#======================================================================
# Generic OMPI core performance testing template configuration
#======================================================================

[MTT]
# Leave this string so that we can identify this data subset in the
# database
# OMPI Core: Use a "test" label until we're ready to run real results
description = [testbake]
#description = [2007 collective performance bakeoff]
# OMPI Core: Use the "trial" flag until we're ready to run real results
trial = 1

# Put other values here as relevant to your environment.

#----------------------------------------------------------------------

[Lock]
# Put values here as relevant to your environment.

#======================================================================
# MPI get phase
#======================================================================

[MPI get: ompi-nightly-trunk]
mpi_details = OMPI

module = OMPI_Snapshot
ompi_snapshot_url = http://www.open-mpi.org/nightly/trunk

#----------------------------------------------------------------------

[MPI get: MPICH2]
mpi_details = MPICH2

module = Download
download_url = http://www-unix.mcs.anl.gov/mpi/mpich2/downloads/mpich2-1.0.5p4.tar.gz

#----------------------------------------------------------------------

[MPI get: MVAPICH2]
mpi_details = MVAPICH2

module = Download
download_url = http://mvapich.cse.ohio-state.edu/download/mvapich2/mvapich2-0.9.8p3.tar.gz

#======================================================================
# Install MPI phase
#======================================================================

# All flavors of Open MPI
[MPI install: OMPI/GNU-standard]
mpi_get = ompi-nightly-trunk
save_stdout_on_success = 1
merge_stdout_stderr = 0

module = OMPI
ompi_compiler_name = gnu
ompi_compiler_version = &get_gcc_version()
# Adjust these configure flags for your site
ompi_configure_arguments = CFLAGS=-O3 --enable-mpirun-prefix-by-default --enable-branch-probabilities --disable-heterogeneous --without-mpi-param-check --enable-sparse-groups --with-openib=/usr/local/ofed

#----------------------------------------------------------------------

[MPI install: MPICH2]
mpi_get = mpich2
save_stdout_on_success = 1
merge_stdout_stderr = 0
# Adjust this for your site (this is what works at Cisco).  Needed to
# launch in SLURM; adding this to LD_LIBRARY_PATH here propagates this
# all the way through the test run phases that use this MPI install,
# where the test executables will need to have this set.
prepend_path = LD_LIBRARY_PATH /opt/SLURM/lib

module = MPICH2
mpich2_compiler_name = gnu
mpich2_compiler_version = &get_gcc_version()
mpich2_configure_arguments = --disable-f90 CFLAGS=-O3 --enable-fast --with-device=ch3:nemesis
# These are needed to launch through SLURM; adjust as appropriate.
mpich2_additional_wrapper_ldflags = -L/opt/SLURM/lib
mpich2_additional_wrapper_libs = -lpmi

#----------------------------------------------------------------------

[MPI install: MVAPICH2]
mpi_get = mvapich2
save_stdout_on_success = 1
merge_stdout_stderr = 0
# Adjust this for your site (this is what works at Cisco).  Needed to
# launch in SLURM; adding this to LD_LIBRARY_PATH here propagates this
# all the way through the test run phases that use this MPI install,
# where the test executables will need to have this set.
prepend_path = LD_LIBRARY_PATH /opt/SLURM/lib

module = MVAPICH2
# Adjust this to be where your OFED is installed
mvapich2_setenv = OPEN_IB_HOME /usr/local/ofed
mvapich2_setenv = F77 gfortran
mvapich2_setenv = LIBS -L/usr/local/ofed/lib64 -libverbs -lpthread
mvapich2_build_script = make.mvapich2.ofa
mvapich2_compiler_name = gnu
mvapich2_compiler_version = &get_gcc_version()
# These are needed to launch through SLURM; adjust as appropriate.
mvapich2_additional_wrapper_ldflags = -L/opt/SLURM/lib
mvapich2_additional_wrapper_libs = -lpmi

#======================================================================
# MPI run details
#======================================================================

[MPI Details: OMPI]
# Check &test_alloc() for byslot or bynode
exec = mpirun @alloc@ -np &test_np() @mca@ &test_executable() &test_argv()
parameters = &MPI::OMPI::find_mpirun_params(&test_command_line(), \
                                            &test_executable())
network = &MPI::OMPI::find_network(&test_command_line(), &test_executable())

alloc = &if(&eq(&test_alloc(), "node"), "--bynode", "--byslot")
mca = &enumerate( \
        "--mca btl sm,tcp,self ", \
        "--mca btl tcp,self ", \
        "--mca btl sm,openib,self ", \
        "--mca btl sm,openib,self --mca mpi_leave_pinned 1 ", \
        "--mca btl openib,self ", \
        "--mca btl openib,self --mca mpi_leave_pinned 1 ", \
        "--mca btl openib,self --mca mpi_leave_pinned_pipeline 1 ", \
        "--mca btl openib,self --mca btl_openib_use_srq 1 ")

# It is important that the after_each_exec step is a single
# command/line so that MTT will launch it directly (instead of via a
# temporary script).  This is because the "srun" command is
# (intentionally) difficult to kill in some cases.  See
# https://svn.open-mpi.org/trac/mtt/changeset/657 for details.

after_each_exec = &if(&ne("", &getenv("SLURM_NNODES")), "srun -N " . &getenv("SLURM_NNODES")) /home/mschaara/mtt-testing/after_each_exec.pl

#----------------------------------------------------------------------

[MPI Details: MPICH2]

# Launching through SLURM.  If you use mpdboot instead, you need to
# ensure that multiple mpd's on the same node don't conflict (or never
# happen).
exec = srun @alloc@ -n &test_np() &test_executable() &test_argv()

# If not using SLURM, you'll need something like this (not tested).
# You may need different hostfiles for running by slot/by node.
#exec = mpiexec -np &test_np() --host &hostlist() &test_executable()

network = loopback,ethernet,shmem

# In this SLURM example, if each node has 4 CPUs, telling SLURM to
# launching "by node" means specifying that each MPI process will use 4
# CPUs.
alloc = &if(&eq(&test_alloc(), "node"), "-c 2", "")

#----------------------------------------------------------------------

[MPI Details: MVAPICH2]

# Launching through SLURM.  If you use mpdboot instead, you need to
# ensure that multiple mpd's on the same node don't conflict (or never
# happen).
exec = srun @alloc@ -n &test_np() &test_executable() &test_argv()

# If not using SLURM, you'll need something like this (not tested).
# You may need different hostfiles for running by slot/by node.
#exec = mpiexec -np &test_np() --host &hostlist() &test_executable()

network = loopback,verbs,shmem

# In this example, each node has 4 CPUs, so to launch "by node", just
# specify that each MPI process will use 4 CPUs.
alloc = &if(&eq(&test_alloc(), "node"), "-c 2", "")

#======================================================================
# Test get phase
#======================================================================

[Test get: netpipe]
module = Download
download_url = http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz

#----------------------------------------------------------------------

[Test get: osu]
module = SVN
svn_url = https://svn.open-mpi.org/svn/ompi-tests/trunk/osu

#----------------------------------------------------------------------

[Test get: imb]
module = SVN
svn_url = https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3

#----------------------------------------------------------------------

[Test get: skampi]
module = SVN
svn_url = https://svn.open-mpi.org/svn/ompi-tests/trunk/skampi-5.0.1

#======================================================================
# Test build phase
#======================================================================

[Test build: netpipe]
test_get = netpipe
save_stdout_on_success = 1
merge_stdout_stderr = 1
stderr_save_lines = 100

module = Shell
shell_build_command = <<EOT
make mpi
EOT

#----------------------------------------------------------------------

[Test build: osu]
test_get = osu
save_stdout_on_success = 1
merge_stdout_stderr = 1
stderr_save_lines = 100

module = Shell
shell_build_command = <<EOT
make osu_latency osu_bw osu_bibw
EOT

#----------------------------------------------------------------------

[Test build: imb]
test_get = imb
save_stdout_on_success = 1
merge_stdout_stderr = 1

module = Shell
shell_build_command = <<EOT
cd src
make clean IMB-MPI1
EOT

#----------------------------------------------------------------------

[Test build: skampi]
test_get = skampi
save_stdout_on_success = 1
merge_stdout_stderr = 1
stderr_save_lines = 100

module = Shell
# Set EVERYONE_CAN_MPI_IO for HP MPI
shell_build_command = <<EOT
make CFLAGS="-O2 -DPRODUCE_SPARSE_OUTPUT -DEVERYONE_CAN_MPI_IO"
EOT

#======================================================================
# Test Run phase
#======================================================================

[Test run: netpipe]
test_build = netpipe
pass = &and(&cmd_wifexited(), &eq(&cmd_wexitstatus(), 0))
# Timeout hueristic: 10 minutes
timeout = 10:00
save_stdout_on_pass = 1
# Ensure to leave this value as "-1", or performance results could be lost!
stdout_save_lines = -1
merge_stdout_stderr = 1
np = 2
alloc = node

specify_module = Simple
analyze_module = NetPipe

simple_pass:tests = NPmpi

#----------------------------------------------------------------------

[Test run: osu]
test_build = osu
pass = &and(&cmd_wifexited(), &eq(&cmd_wexitstatus(), 0))
# Timeout hueristic: 10 minutes
timeout = 10:00
save_stdout_on_pass = 1
# Ensure to leave this value as "-1", or performance results could be lost!
stdout_save_lines = -1
merge_stdout_stderr = 1
np = 2
alloc = node

specify_module = Simple
analyze_module = OSU

simple_pass:tests = osu_bw osu_latency osu_bibw

#----------------------------------------------------------------------

[Test run: imb]
test_build = imb
pass = &and(&cmd_wifexited(), &eq(&cmd_wexitstatus(), 0))
# Timeout hueristic: 10 minutes
timeout = 10:00
save_stdout_on_pass = 1
# Ensure to leave this value as "-1", or performance results could be lost!
stdout_save_lines = -1
merge_stdout_stderr = 1
np = &env_max_procs()

argv = -npmin &test_np() &enumerate("PingPong", "PingPing", "Sendrecv", "Exchange", "Allreduce", "Reduce", "Reduce_scatter", "Allgather", "Allgatherv", "Alltoall", "Bcast", "Barrier") 

specify_module = Simple
analyze_module = IMB

simple_pass:tests = src/IMB-MPI1

#----------------------------------------------------------------------

[Test run: skampi]
test_build = skampi
pass = &and(&cmd_wifexited(), &eq(&cmd_wexitstatus(), 0))
# Timeout hueristic: 10 minutes
timeout = 10:00
save_stdout_on_pass = 1
# Ensure to leave this value as "-1", or performance results could be lost!
stdout_save_lines = -1
merge_stdout_stderr = 1
np = &env_max_procs()

argv = -i &find("mtt_.+.ski", "input_files_bakeoff")

specify_module = Simple
analyze_module = SKaMPI

simple_pass:tests = skampi

#======================================================================
# Reporter phase
#======================================================================

[Reporter: IU database]
module = MTTDatabase

mttdatabase_realm = OMPI
mttdatabase_url = https://www.open-mpi.org/mtt/submit/
# Change this to be the username and password for your submit user.
# Get this from the OMPI MTT administrator.
mttdatabase_username = uh
mttdatabase_password = &stringify(&cat("/home/mschaara/mtt-testing/mtt-db-password.txt"))
# Change this to be some short string identifying your cluster.
mttdatabase_platform = shark

mttdatabase_debug_filename = mttdb_debug_file_perf
mttdatabase_keep_debug_files = 1

#----------------------------------------------------------------------

# This is a backup reporter; it also writes results to a local text
# file

[Reporter: text file backup]
module = TextFile

textfile_filename = $phase-$section-$mpi_name-$mpi_version.txt

textfile_summary_header = <<EOT
Hostname: &shell("hostname")
uname: &shell("uname -a")
Username: &shell("who am i")
EOT

textfile_summary_footer =
textfile_detail_header =
textfile_detail_footer =

textfile_textwrap = 78

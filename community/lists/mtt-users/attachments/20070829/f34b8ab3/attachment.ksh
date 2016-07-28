#
# Copyright (c) 2006-2007 Cisco Systems, Inc.  All rights reserved.
# Copyright (c) 2006-2007 Sun Microystems, Inc.  All rights reserved.
#

# Template MTT configuration file for Open MPI core testers.  The
# intent for this template file is to establish at least some loose
# guidelines for what Open MPI core testers should be running on a
# nightly basis.  This file is not intended to be an exhaustive sample
# of all possible fields and values that MTT offers.  Each site will
# undoubtedly have to edit this template for their local needs (e.g.,
# pick compilers to use, etc.), but this file provides a baseline set
# of configurations that we intend you to run.

# OMPI core members will need to edit some values in this file based
# on your local testing environment.  Look for comments with "OMPI
# Core:" for instructions on what to change.

# Note that this file is artificially longer than it really needs to
# be -- a bunch of values are explicitly set here that are exactly
# equivalent to their defaults.  This is mainly because there is no
# reliable form of documentation for this ini file yet, so the values
# here comprise a good set of what options are settable (although it
# is not a comprehensive set).

# Also keep in mind that at the time of this writing, MTT is still
# under active development and therefore the baselines established in
# this file may change on a relatively frequent basis.

# The guidelines are as follows:
#
# 1. Download and test nightly snapshot tarballs of at least one of
#    the following:
#    - the trunk (highest preference)
#    - release branches (highest preference is the most recent release
#      branch; lowest preference is the oldest release branch)
# 2. Run all 4 correctness test suites from the ompi-tests SVN
#    - trivial, as many processes as possible
#    - intel tests with all_tests_no_perf, up to 64 processes
#    - IBM, as many processes as possible
#    - IMB, as many processes as possible
# 3. Run with as many different components as possible
#    - PMLs (ob1, dr)
#    - BTLs (iterate through sm, tcp, whatever high speed network(s) you
#      have, etc. -- as relevant)

#======================================================================
# Overall configuration
#======================================================================

[MTT]

# OMPI Core: if you are not running in a scheduled environment and you
# have a fixed hostfile for what nodes you'll be running on, fill in
# the absolute pathname to it here.  If you do not have a hostfile,
# leave it empty.  Example:
#     hostfile = /home/me/mtt-runs/mtt-hostfile
# This file will be parsed and will automatically set a valid value
# for &env_max_np() (it'll count the number of lines in the hostfile,
# adding slots/cpu counts if it finds them).  The "hostfile" value is
# ignored if you are running in a recognized scheduled environment.
hostfile =

# OMPI Core: if you would rather list the hosts individually on the
# mpirun command line, list hosts here delimited by whitespace (if you
# have a hostfile listed above, this value will be ignored!).  Hosts
# can optionally be suffixed with ":num", where "num" is an integer
# indicating how many processes may be started on that machine (if not
# specified, ":1" is assumed).  The sum of all of these values is used
# for &env_max_np() at run time.  Example (4 uniprocessors):
#    hostlist = node1 node2 node3 node4
# Another example (4 2-way SMPs):
#    hostlist = node1:2 node2:2 node3:2 node4:2
# The "hostlist" value is ignored if you are running in a scheduled
# environment or if you have specified a hostfile.
hostlist =

# OMPI Core: if you are running in a scheduled environment and want to
# override the scheduler and set the maximum number of processes
# returned by &env_max_procs(), you can fill in an integer here.
max_np = 

# OMPI Core: Output display preference; the default width at which MTT
# output will wrap.
textwrap = 76

# OMPI Core: After the timeout for a command has passed, wait this
# many additional seconds to drain all output, and then kill it with
# extreme prejiduce.
drain_timeout = 5

# OMPI Core: Whether this invocation of the client is a test of the
# client setup itself.  Specifically, this value should be set to true
# (1) if you are testing your MTT client and/or INI file and do not
# want the results included in normal reporting in the MTT central
# results database.  Results submitted in "trial" mode are not
# viewable (by default) on the central database, and are automatically
# deleted from the database after a short time period (e.g., a week).
# Setting this value to 1 is exactly equivalent to passing "--trial"
# on the MTT client command line.  However, any value specified here
# in this INI file will override the "--trial" setting on the command
# line (i.e., if you set "trial = 0" here in the INI file, that will
# override and cancel the effect of "--trial" on the command line).
# trial = 1

# OMPI Core: Set the scratch parameter here (if you do not want it to
# be automatically set to your current working directory). Setting
# this parameter accomplishes the same thing that the --scratch option
# does.
# scratch = &getenv("HOME")/mtt-scratch

# OMPI Core: Set local_username here if you would prefer to not have
# your local user ID in the MTT database
# local_username =

# OMPI Core: --force can be set here, instead of at the command line.
# Useful for a developer workspace in which it makes no sense to not
# use --force
# force = 1

# OMPI Core: Specify a list of sentinel files that MTT will regularly
# check for.  If these files exist, MTT will exit more-or-less
# immediately (i.e., after the current test completes) and report all
# of its results.  This is a graceful mechanism to make MTT stop right
# where it is but not lose any results.
# terminate_files = &getenv("HOME")/mtt-stop,&scratch_root()/mtt-stop

# OMPI Core: Specify a default description string that is used in the
# absence of description strings in the MPI install, Test build, and
# Test run sections.  The intent of this field is to record variable
# data that is outside the scope, but has effect on the software under
# test (e.g., firmware version of a NIC).  If no description string is
# specified here and no description strings are specified below, the
# description data field is left empty when reported.  
# description = NIC firmware: &system("get_nic_firmware_rev")

#----------------------------------------------------------------------

[Lock]
# The only module available is the MTTLockServer, and requires running
# the mtt-lock-server executable somewhere.  You can leave this
# section blank and there will be no locking.
#module = MTTLockServer
#mttlockserver_host = hostname where mtt-lock-server is running
#mttlockserver_port = integer port number of the mtt-lock-server

#======================================================================
# MPI get phase
#======================================================================

[MPI get: ompi-nightly-trunk]
mpi_details = Open MPI

module = OMPI_Snapshot
ompi_snapshot_url = http://www.open-mpi.org/nightly/trunk

#----------------------------------------------------------------------

#======================================================================
# Install MPI phase
#======================================================================

[MPI install: gcc warnings]
mpi_get = ompi-nightly-trunk
save_stdout_on_success = 1
merge_stdout_stderr = 0
bitness = 32

module = OMPI
ompi_vpath_mode = none
# OMPI Core: This is a GNU make option; if you are not using GNU make,
# you'll probably want to delete this field (i.e., leave it to its
# default [empty] value).
ompi_make_all_arguments = -j 4
ompi_make_check = 1
# OMPI Core: You will likely need to update these values for whatever
# compiler you want to use.  You can pass any configure flags that you
# want, including those that change which compiler to use (e.g., CC=cc
# CXX=CC F77=f77 FC=f90).  Valid compiler names are: gnu, pgi, intel,
# ibm, kai, absoft, pathscale, sun.  If you have other compiler names
# that you need, let us know.  Note that the compiler_name flag is
# solely for classifying test results; it does not automatically pass
# values to configure to set the compiler.
ompi_compiler_name = gnu
ompi_compiler_version = &get_gcc_version()
ompi_configure_arguments = CFLAGS=-pipe --enable-picky --enable-debug --enable-sparse-groups --with-openib=/usr/local/ofed

#----------------------------------------------------------------------

# Sun MPI install section illustrating the use of
# $var style substitution and &perl()
[MPI install: sun-autotools]

configure_arguments = \
        $prepend_configure_arguments \
        $compiler_names \
        $compiler_flags \
        $append_configure_arguments \
        $with_mx_lib_argument \
        $with_tm_argument

# ompi-nightly-*
mpi_get =

# 32|64
bitness =

# --whatever, ...
prepend_configure_arguments = 

# --whatever, ...
append_configure_arguments =

# Files and directories
arch = &shell("uname -p")
home = &getenv("HOME")

mtt_utils_dir       = $home/mtt-utils
ompi_build_dir      = $home/ompi-tools/share/ompi-build
compiler_names      = CC=cc CXX=CC FC=f90 F77=f77
compiler_flags_file = $ompi_build_dir/comp-flags.sos.$arch.$bitness.opt
compiler_flags      = &shell("cat $compiler_flags_file")

# Only use this option if the MX directory exists 
mx_lib = /opt/mx/lib
with_mx_lib_argument = <<EOT
&perl("
    if (-d '$mx_lib') {
        return '--with-mx-lib=$mx_lib';
    } else {
        return '';
    }
")
EOT

# Only use this option if the OpenPBS directory exists 
tm = /hpc/rte/OpenPBS-$arch
with_tm_argument = <<EOT
&perl("
    if (-d '$tm') {
        return '--with-tm=$tm';
    } else {
        return '';
    }
")
EOT

# Other settings
save_stdout_on_success = 1
merge_stdout_stderr = 1
vpath_mode = none
make_all_arguments = -j 4
make_check = 0
compiler_name = sun
compiler_version = &get_sun_cc_version()
module = OMPI


# Other compiler version funclets that are available:
#    &get_pgcc_version : PGI compiler suite
#    &get_pathcc_version : Pathscale compiler suite
#    &get_sun_version : Sun compiler suite

#======================================================================
# MPI run details
#======================================================================

[MPI Details: Open MPI]

# MPI tests
exec = mpirun @hosts@ -np &test_np() @mca@ --prefix &test_prefix() &test_executable() &test_argv()

# ORTE tests
exec:rte = &test_executable() --host &env_hosts() --prefix &test_prefix() &test_argv()

# Yes, all these quotes are necessary.  Don't mess with them!
hosts = &if(&have_hostfile(), "&join("--hostfile ", "&hostfile()")", \
            "&if(&have_hostlist(), "&join("--host ", "&hostlist()")", "")")

# Example showing conditional substitution based on the MPI get
# section name (e.g., different versions of OMPI have different
# capabilities / bugs).
mca = &enumerate( \
        "--mca btl sm,tcp,self", \
        "--mca btl tcp,self")

# Boolean indicating IB connectivity
is_up = &check_ipoib_connectivity()

# Figure out which mca's to use
mca = <<EOT
&perl('

     # Return cached mca, if we have it
     if (defined(@mca)) {
         return \@mca;
     }

     my @hosts = split /\s+|,/, hostlist_hosts();

     if (scalar(@hosts) < 2) {
         push(@mca, "--mca btl self,sm");
     } else {
         if ($ib_up) {
             push(@mca, "--mca btl self,udapl");
         } else {
             push(@mca, "--mca btl self,tcp");
         }
     }
     return \@mca;
')
EOT

#----------------------------------------------------------------------
# WARNING: THIS DEFAULT after_each_exec STEP IS PRONE TO FAILURE!
# Given that part of what we are testing is ORTE itself, using orterun
# to launch something to cleanup can be problematic.  We *HIGHLY*
# recommend that you replace the after_each_exec section default value
# below with something that your run-time system can performan
# natively.  For example, putting "srun -N $SLURM_NNODES killall -9
# mpirun orted &test_executable()" works nicely on SLURM / Linux
# systems -- assuming that your MTT run has all nodes exclusively to
# itself (i.e., that the "killall" won't kill some legitimate jobs).
#----------------------------------------------------------------------

# A helper script is installed by the "OMPI" MPI Install module named
# "mtt_ompi_cleanup.pl".  This script is orterun-able and will kill
# all rogue orteds on a node and whack any session directories.
# Invoke via orterun just to emphasize that it is not an MPI
# application.  The helper script is installed in OMPI's bin dir, so
# it'll automatically be found in the path (because OMPI's bin dir is
# in the path).

after_each_exec = <<EOT
# We can exit if the test passed or was skipped (i.e., there's no need
# to cleanup).
if test "$MTT_TEST_RUN_RESULT" = "passed" -o "$MTT_TEST_RUN_RESULT" = "skipped"; then
    exit 0
fi

if test "$MTT_TEST_HOSTFILE" != ""; then
    args="--hostfile $MTT_TEST_HOSTFILE"
elif test "$MTT_TEST_HOSTLIST" != ""; then
    args="--host $MTT_TEST_HOSTLIST"
fi
orterun $args -np $MTT_TEST_NP --prefix $MTT_TEST_PREFIX mtt_ompi_cleanup.pl
EOT

#======================================================================
# Test get phase
#======================================================================

[Test get: ibm]
module = SVN
svn_url = https://svn.open-mpi.org/svn/ompi-tests/trunk/ibm
svn_post_export = <<EOT
./autogen.sh
EOT

#----------------------------------------------------------------------

[Test get: onesided]
module = SVN
svn_url = https://svn.open-mpi.org/svn/ompi-tests/trunk/onesided
svn_post_export = <<EOT
./autogen.sh
EOT

#----------------------------------------------------------------------

[Test get: mpicxx]
module = SVN
svn_url = https://svn.open-mpi.org/svn/ompi-tests/trunk/cxx-test-suite
svn_post_export = <<EOT
./autogen.sh
EOT

#----------------------------------------------------------------------

[Test get: imb]
module = SVN
svn_url = https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3

#----------------------------------------------------------------------

[Test get: netpipe]
module = SVN
svn_url = https://svn.open-mpi.org/svn/ompi-tests/trunk/NetPIPE_3.6.2

#----------------------------------------------------------------------

[Test get: orte]
module = SVN
svn_url = https://svn.open-mpi.org/svn/ompi-tests/trunk/orte

#======================================================================
# Test build phase
#======================================================================

[Test build: ibm]
test_get = ibm
save_stdout_on_success = 1
merge_stdout_stderr = 1
stderr_save_lines = 100

module = Shell
shell_build_command = <<EOT
./configure CC=mpicc CXX=mpic++ F77=mpif77
make
EOT

#----------------------------------------------------------------------

[Test build: onesided]
test_get = onesided
save_stdout_on_success = 1
merge_stdout_stderr = 1
stderr_save_lines = 100
# Have the onesided tests skip the OMPI 1.1 testing; MPI-2 one-sided
# just plain doesn't work there and won't be fixed.
# skip_mpi_get = ompi-nightly-v1.1
# Can also have a skip_mpi_install for the same purpose (skip specific
# installs)

module = Shell
shell_build_command = <<EOT
./configure
make
EOT

#----------------------------------------------------------------------

[Test build: mpicxx]
test_get = mpicxx
save_stdout_on_success = 1
merge_stdout_stderr = 1

module = Shell
shell_build_command = <<EOT
./configure CC=mpicc CXX=mpic++
make
EOT

#----------------------------------------------------------------------

[Test build: imb]
test_get = imb
save_stdout_on_success = 1
merge_stdout_stderr = 1
stderr_save_lines = 100

module = Shell
shell_build_command = <<EOT
cd src
make clean IMB-MPI1
EOT

#----------------------------------------------------------------------

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

[Test build: orte]
test_get = orte
save_stdout_on_success = 1
merge_stdout_stderr = 1
stderr_save_lines = 100

module = Shell
shell_build_command = <<EOT
gmake
EOT

#======================================================================
# Test Run phase
#======================================================================

[Test run: ibm]
test_build = ibm
pass = &and(&cmd_wifexited(), &eq(&cmd_wexitstatus(), 0))
skipped = &and(&cmd_wifexited(), &eq(&cmd_wexitstatus(), 77))
timeout = &max(30, &multiply(10, &test_np()))
save_stdout_on_pass = 1
merge_stdout_stderr = 1
stdout_save_lines = 100
np = &env_max_procs()

specify_module = Simple
# Similar rationale to the intel test run section
simple_first:tests = &find_executables("collective", "communicator", \
                                       "datatype", "dynamic", "environment", \
                                       "group", "info", "io", "onesided", \
                                       "pt2pt", "topology")

# Similar rationale to the intel test run section
simple_fail:tests = environment/abort environment/final
simple_fail:pass = &and(&cmd_wifexited(), &ne(&cmd_wexitstatus(), 0))
simple_fail:exclusive = 1
simple_fail:np = &env_max_procs()

#----------------------------------------------------------------------

[Test run: onesided]
test_build = onesided
pass = &and(&cmd_wifexited(), &eq(&cmd_wexitstatus(), 0))
timeout = &max(30, &multiply(10, &test_np()))
save_stdout_on_pass = 1
merge_stdout_stderr = 1
stdout_save_lines = 100
np = &if(&gt(&env_max_procs(), 0), &step(2, &max(2, &env_max_procs()), 2), 2)

specify_module = Simple
simple_pass:tests = &cat("run_list")
specify_module = Simple

#----------------------------------------------------------------------

[Test run: mpicxx]
test_build = mpicxx
pass = &and(&cmd_wifexited(), &eq(&cmd_wexitstatus(), 0))
timeout = &max(30, &multiply(10, &test_np()))
save_stdout_on_pass = 1
merge_stdout_stderr = 1
argv = &if(&eq("&mpi_get_name()", "ompi-nightly-v1.1"), "-nothrow", "")
np = &env_max_procs()

specify_module = Simple
simple_pass:tests = src/mpi2c++_test src/mpi2c++_dynamics_test

#----------------------------------------------------------------------
     
[Test run: imb correctness]
test_build = imb
pass = &and(&cmd_wifexited(), &eq(&cmd_wexitstatus(), 0))
timeout = &max(1800, &multiply(50, &test_np()))
save_stdout_on_pass = 1
merge_stdout_stderr = 1
stdout_save_lines = 100
np = &env_max_procs()

specify_module = Simple
simple_only:tests = src/IMB-MPI1

#----------------------------------------------------------------------

[Test run: imb performance]
test_build = imb
pass = &eq(&cmd_wexitstatus(), 0)
timeout = -1
save_stdout_on_pass = 1
# Ensure to leave this value as "-1", or performance results could be lost!
stdout_save_lines = -1
merge_stdout_stderr = 1

argv = -npmin &test_np() &enumerate("PingPong", "PingPing", "Sendrecv", "Exchange", "Allreduce", "Reduce", "Reduce_scatter", "Allgather", "Allgatherv", "Alltoall", "Bcast", "Barrier") 

specify_module = Simple
analyze_module = IMB
simple_pass:tests = src/IMB-MPI1

#----------------------------------------------------------------------

[Test run: netpipe]
test_build = netpipe
pass = &eq(&cmd_wexitstatus(), 0)
timeout = -1
save_stdout_on_pass = 1
# Ensure to leave this value as "-1", or performance results could be lost!
stdout_save_lines = -1
merge_stdout_stderr = 1
# NetPIPE is ping-pong only, so we only need 2 procs
np = 2

specify_module = Simple
analyze_module = NetPipe
simple_pass:tests = NPmpi

#----------------------------------------------------------------------

[Test run: orte]
test_build = orte
pass = &eq(&test_wexitstatus(), 0)

# Give these tests a good long time to run.
# (E.g., one orte test runs through a long series of
# hostname patterns)
timeout = 300
save_stdout_on_pass = 1
merge_stdout_stderr = 1
np = &if(&gt(&env_max_procs(), 0), &step(2, &max(2, &env_max_procs()), 2), 2)

module = Simple
specify_module = Simple

mpi_details_exec = rte

simple_only:tests = &find_executables("./wrappers")
simple_only_if_exec_exists = 1

#======================================================================
# Reporter phase
#======================================================================

[Reporter: IU database]
module = MTTDatabase

mttdatabase_realm = OMPI
mttdatabase_url = https://www.open-mpi.org/mtt/submit/
# OMPI Core: Change this to be the username and password for your
# submit user.  Get this from the OMPI MTT administrator.
mttdatabase_username = 
mttdatabase_password = 
# OMPI Core: Change this to be some short string identifying your
# cluster.
mttdatabase_platform = shark

#----------------------------------------------------------------------

# This is a backup for while debugging MTT; it also writes results to
# a local text file

[Reporter: text file backup]
module = TextFile

textfile_filename = $phase-$section-$mpi_name-$mpi_version.txt

textfile_summary_header = <<EOT
hostname: &shell("hostname")
uname: &shell("uname -a")
who am i: &shell("who am i")
EOT

textfile_summary_footer =
textfile_detail_header =
textfile_detail_footer =

textfile_textwrap = 78

<?php
$topdir = "../../..";
$title = "MPI_Info_env(3) man page (version 1.10.0)";
$meta_desc = "Open MPI v1.10.0 man page: MPI_INFO_ENV(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
     <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_INFO_ENV</b> - Static MPI_Info object containing info about the

<p>application
<p>
<h2><a name='sect1' href='#toc1'>Description</a></h2>
The MPI-3 standard established a static MPI_Info
object named <i>MPI_INFO_ENV</i> that can be used to access information about
how the application was executed from the run-time.
<p>
<h2><a name='sect2' href='#toc2'>Supported Fields</a></h2>

<dl>

<dt>command
</dt>
<dd>If available, the value will be set to argv[0]. Note that the value may
not always be available - e.g., it is valid for a program to call <a href="../man3/MPI_Init.3.php">MPI_Init</a>
with NULL parameters, in which case argv[0] will not be set if run as a
singleton. This value will never be set in a Fortran program as the argv
are not available. </dd>

<dt>argv     </dt>
<dd>The argv given for the application. If no arguments
are passed to the application, then this value will not be set. It will
also not be set in the case of a singleton that calls <a href="../man3/MPI_Init.3.php">MPI_Init</a> with NULL
parameters, or a Fortran program. </dd>

<dt>maxprocs </dt>
<dd>The number of processes in the
job. </dd>

<dt>soft </dt>
<dd>Open MPI does not support the <i>soft</i> option for specifying the number
of processes to be executed, so this value is set to the same as <i>maxprocs</i>.
</dd>

<dt>host </dt>
<dd>The name of the host this process is executing upon - the value returned
from <i>gethostname()</i>. </dd>

<dt>arch </dt>
<dd>The architecture of the host this process is executing
upon. This value indicates the underlying chip architecture (e.g., x86_64),
if it can be determined. </dd>

<dt>wdir </dt>
<dd>The working directory at the time of process
launch by mpiexec. Note that this value will not be set for processes launched
as singletons as there is no reliable way for the MPI library to determine
the location. </dd>

<dt>file </dt>
<dd>Although specified by the MPI-3 standard, no value is
currently set for this field. </dd>

<dt>thread_level </dt>
<dd>The requested MPI thread level
- note that this may differ from the <i>actual</i> MPI thread level of the application.
</dd>

<dt>ompi_num_apps </dt>
<dd>The number of application contexts in an MPMD job.   This
is an Open MPI-specific field and value. </dd>

<dt>ompi_np </dt>
<dd>The number of processes
in each application context, provided as a space-delimited list of integers.
This is an Open MPI-specific field and value. </dd>

<dt>ompi_first_rank </dt>
<dd>The MPI rank
of the first process in each application context, provided as a space-delimited
list of integers This is an Open MPI-specific field and value. </dd>

<dt>ompi_positioned_file_dir
</dt>
<dd>If Open MPI was asked to pre-position files, this field provides the top-level
directory where those files were place. This is an Open MPI-specific field
and value.
<p> </dd>
</dl>

<h2><a name='sect3' href='#toc3'>Errors</a></h2>
When calling <i><a href="../man3/MPI_Info_get.3.php">MPI_INFO_GET</a>(3)</i>, the <i>flag</i> parameter will
be set to zero (false) if a value for the field has not been set. <br>

<p>
<h2><a name='sect4' href='#toc4'>See Also</a></h2>
<a href="../man3/MPI_Info_get.3.php">MPI_Info_get</a> <p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Description</a></li>
<li><a name='toc2' href='#sect2'>Supported Fields</a></li>
<li><a name='toc3' href='#sect3'>Errors</a></li>
<li><a name='toc4' href='#sect4'>See Also</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");

<?php
$topdir = "../../..";
$title = "MPI_Comm_split_type(3) man page (version 1.10.0)";
$meta_desc = "Open MPI v1.10.0 man page: MPI_COMM_SPLIT_TYPE(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
      <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Comm_split_type </b> - Creates new communicators based on colors
and keys.
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Comm_split_type(MPI_Comm comm, int split_type, int key,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_Info info, MPI_Comm *newcomm)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
MPI_COMM_SPLIT_TYPE(COMM, SPLIT_TYPE, KEY, INFO, NEWCOMM, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;COMM, SPLIT_TYPE, KEY, INFO, NEWCOMM, IERROR
</pre>
<h2><a name='sect4' href='#toc4'>Input Parameters</a></h2>

<dl>

<dt>comm </dt>
<dd>Communicator (handle). </dd>

<dt>split_type </dt>
<dd>Type of processes
to be grouped together (integer). </dd>

<dt>key </dt>
<dd>Control of rank assignment (integer).
</dd>

<dt>info </dt>
<dd>Info argument (handle).
<p> </dd>
</dl>

<h2><a name='sect5' href='#toc5'>Output Parameters</a></h2>

<dl>

<dt>newcomm </dt>
<dd>New communicator
(handle). </dd>

<dt>IERROR </dt>
<dd>Fortran only: Error status (integer).
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Description</a></h2>
This function
partitions the group associated with <i>comm</i> into disjoint subgroups, based
on the type specied by <i>split_type</i>. Each subgroup contains all processes
of the same type. Within each subgroup, the processes are ranked in the
order defined by the value of the argument <i>key</i>, with ties broken according
to their rank in the old group. A new communicator is created for each subgroup
and returned in newcomm. This is a collective call; all processes must provide
the same <i>split_type</i>, but each process is permitted to provide different
values for key. An exception to this rule is that a process may supply the
type value MPI_UNDEFINED, in which case newcomm returns MPI_COMM_NULL.
<p>

<h2><a name='sect7' href='#toc7'>Split Types</a></h2>

<p>
<dl>

<dt>MPI_COMM_TYPE_SHARED </dt>
<dd>This type splits the communicator into
subcommunicators, each of which can create a shared memory region.
<p> </dd>
</dl>

<h2><a name='sect8' href='#toc8'>Errors</a></h2>
Almost
all MPI routines return an error value; C routines as the value of the
function and Fortran routines in the last argument. <p>
Before the error value
is returned, the current MPI error handler is called. By default, this error
handler aborts the MPI job, except for I/O function errors. The error handler
may be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler
MPI_ERRORS_RETURN may be used to cause error values to be returned. Note
that MPI does not guarantee that an MPI program can continue past an error.

<p>
<h2><a name='sect9' href='#toc9'>See Also</a></h2>
<p>
<a href="../man3/MPI_Comm_create.3.php">MPI_Comm_create</a> <br>
<a href="../man3/MPI_Intercomm_create.3.php">MPI_Intercomm_create</a> <br>
<a href="../man3/MPI_Comm_dup.3.php">MPI_Comm_dup</a> <br>
<a href="../man3/MPI_Comm_free.3.php">MPI_Comm_free</a> <br>

<p><a href="../man3/MPI_Comm_split.3.php">MPI_Comm_split</a>
<p> <p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Syntax</a></li>
<li><a name='toc2' href='#sect2'>C Syntax</a></li>
<li><a name='toc3' href='#sect3'>Fortran Syntax</a></li>
<li><a name='toc4' href='#sect4'>Input Parameters</a></li>
<li><a name='toc5' href='#sect5'>Output Parameters</a></li>
<li><a name='toc6' href='#sect6'>Description</a></li>
<li><a name='toc7' href='#sect7'>Split Types</a></li>
<li><a name='toc8' href='#sect8'>Errors</a></li>
<li><a name='toc9' href='#sect9'>See Also</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");

<?php
$topdir = "../../..";
$title = "MPI_Comm_idup(3) man page (version 1.10.0)";
$meta_desc = "Open MPI v1.10.0 man page: MPI_COMM_IDUP(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
      <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Comm_idup </b> -  Start the nonblocking duplication of an existing
communicator with all its cached information.
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Comm_idup(MPI_Comm comm, MPI_Comm *newcomm, MPI_Request *request)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
MPI_COMM_IDUP(COMM, NEWCOMM, REQUEST, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;COMM, NEWCOMM, REQUEST, IERROR
</pre>
<h2><a name='sect4' href='#toc4'>Input Parameter</a></h2>

<dl>

<dt>comm </dt>
<dd>Communicator (handle).
<p> </dd>
</dl>

<h2><a name='sect5' href='#toc5'>Output Parameters</a></h2>

<dl>

<dt>newcomm </dt>
<dd>Copy
of comm (handle). </dd>

<dt>request </dt>
<dd>Communication request (handle). </dd>

<dt>IERROR </dt>
<dd>Fortran
only: Error status (integer).
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Description</a></h2>
MPI_Comm_idup starts the nonblocking
duplication of an existing communicator comm with associated key values.
For each key value, the respective copy callback function determines the
attribute value associated with this key in the new communicator; one particular
action that a copy callback may take is to delete the attribute from the
new communicator. Returns in newcomm a new communicator with the same group,
any copied cached information, but a new context (see Section 5.7.1 of the
MPI-1 Standard, "Functionality"). The communicator returned in <i>newcomm</i> will
not be available until the request is complete. <p>
The completion of a communicator
duplication request can be determined by calling any of <a href="../man3/MPI_Wait.3.php">MPI_Wait</a>, <a href="../man3/MPI_Waitany.3.php">MPI_Waitany</a>,
<a href="../man3/MPI_Test.3.php">MPI_Test</a>, or <a href="../man3/MPI_Testany.3.php">MPI_Testany</a> with the request returned by this function.
<p>
<h2><a name='sect7' href='#toc7'>Notes</a></h2>
This
operation is used to provide a parallel library call with a duplicate communication
space that has the same properties as the original communicator. This includes
any attributes (see below) and topologies (see Chapter 6, "Process Topologies,"
in the MPI-1 Standard). This call is valid even if there are pending point-to-point
communications involving the communicator comm. A typical call might involve
an MPI_Comm_idup at the beginning of the parallel call, and an <a href="../man3/MPI_Comm_free.3.php">MPI_Comm_free</a>
of that duplicated communicator at the end of the call. Other models of
communicator management are also possible. <p>
This call applies to both intra-
and intercommunicators.
<p> Note that it is not defined by the MPI standard
what happens if the attribute copy callback invokes other MPI functions.
 In Open MPI, it is not valid for attribute copy callbacks (or any of their
children) to add or delete attributes on the same object on which the attribute
copy callback is being invoked.
<p>
<h2><a name='sect8' href='#toc8'>Errors</a></h2>
Almost all MPI routines return an
error value; C routines as the value of the function and Fortran routines
in the last argument. <p>
Before the error value is returned, the current MPI
error handler is called. By default, this error handler aborts the MPI job,
except for I/O function errors. The error handler may be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>;
the predefined error handler MPI_ERRORS_RETURN may be used to cause error
values to be returned. Note that MPI does not guarantee that an MPI program
can continue past an error.
<p>
<p>
<h2><a name='sect9' href='#toc9'>See Also</a></h2>
<a href="../man3/MPI_Comm_dup.3.php">MPI_Comm_dup</a> <a href="../man3/MPI_Comm_dup_with_info.3.php">MPI_Comm_dup_with_info</a>
<p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Syntax</a></li>
<li><a name='toc2' href='#sect2'>C Syntax</a></li>
<li><a name='toc3' href='#sect3'>Fortran Syntax</a></li>
<li><a name='toc4' href='#sect4'>Input Parameter</a></li>
<li><a name='toc5' href='#sect5'>Output Parameters</a></li>
<li><a name='toc6' href='#sect6'>Description</a></li>
<li><a name='toc7' href='#sect7'>Notes</a></li>
<li><a name='toc8' href='#sect8'>Errors</a></li>
<li><a name='toc9' href='#sect9'>See Also</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");

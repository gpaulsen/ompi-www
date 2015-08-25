<?php
$topdir = "../../..";
$title = "MPI_File_create_errhandler(3) man page (version 1.10.0)";
$meta_desc = "Open MPI v1.10.0 man page: MPI_FILE_CREATE_ERRHANDLER(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
     <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_File_create_errhandler </b> - Creates an MPI-style error handler
that can be attached to a file.
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_File_create_errhandler(MPI_File_errhandler_function *function,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_Errhandler *errhandler)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
MPI_FILE_CREATE_ERRHANDLER(FUNCTION, ERRHANDLER, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;EXTERNAL<tt> </tt>&nbsp;<tt> </tt>&nbsp;FUNCTION
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;ERRHANDLER, IERROR
</pre>
<h2><a name='sect4' href='#toc4'>C++ Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
static MPI::Errhandler
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI::File::Create_errhandler(MPI::File::Errhandler_function*
<tt> </tt>&nbsp;<tt> </tt>&nbsp;function)
</pre>
<h2><a name='sect5' href='#toc5'>Deprecated Type Name Note</a></h2>
MPI-2.2 deprecated the MPI_File_errhandler_fn and
MPI::file::Errhandler_fn types in favor of MPI_File_errhandler_function
and MPI::File::Errhandler_function, respectively.  Open MPI supports both
names (indeed, the _fn names are typedefs to the _function names).
<p>
<h2><a name='sect6' href='#toc6'>Input
Parameter</a></h2>

<dl>

<dt>function </dt>
<dd>User-defined error handling procedure (function).
<p> </dd>
</dl>

<h2><a name='sect7' href='#toc7'>Output
Parameters</a></h2>

<dl>

<dt>errhandler </dt>
<dd>MPI error handler (handle). </dd>

<dt>IERROR </dt>
<dd>Fortran only: Error
status (integer).
<p> </dd>
</dl>

<h2><a name='sect8' href='#toc8'>Description</a></h2>
Registers the user routine <i>function</i> for use
as an MPI exception handler. Returns in errhandler a handle to the registered
exception handler.  <p>
In the C language, the user routine <i>function</i> should
be a C function of type MPI_File_errhandler_function, which is defined
as <p>
<br>
<pre>    typedef void (MPI_File_errhandler_function)(MPI_File *, int *,
    ...);
</pre><p>
The first argument to <i>function</i> is the file in use. The second is the error
code to be returned by the MPI routine that raised the error.  <p>
In the Fortran
language, the user routine should be of the form: <p>
<br>
<pre>    SUBROUTINE FILE_ERRHANDLER_FUNCTION(FILE, ERROR_CODE, ...)
        INTEGER FILE, ERROR_CODE
</pre><p>
In C++, the user routine <i>function</i> should be of the form: <p>
<br>
<pre>    typedef void MPI::File::Errhandler_function(MPI::File &amp;, int *,
    ...);
</pre><p>

<p>
<h2><a name='sect9' href='#toc9'>Errors</a></h2>
Almost all MPI routines return an error value; C routines as the
value of the function and Fortran routines in the last argument. C++ functions
do not return errors. If the default error handler is set to MPI::ERRORS_THROW_EXCEPTIONS,
then on error the C++ exception mechanism will be used to throw an MPI::Exception
object. <p>
Before the error value is returned, the current MPI error handler
is called. For MPI I/O function errors, the default error handler is set
to MPI_ERRORS_RETURN. The error handler may be changed with <a href="../man3/MPI_File_set_errhandler.3.php">MPI_File_set_errhandler</a>;
the predefined error handler MPI_ERRORS_ARE_FATAL may be used to make I/O
errors fatal. Note that MPI does not guarantee that an MPI program can continue
past an error.
<p>
<p> <p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Syntax</a></li>
<li><a name='toc2' href='#sect2'>C Syntax</a></li>
<li><a name='toc3' href='#sect3'>Fortran Syntax</a></li>
<li><a name='toc4' href='#sect4'>C++ Syntax</a></li>
<li><a name='toc5' href='#sect5'>Deprecated Type Name Note</a></li>
<li><a name='toc6' href='#sect6'>Input Parameter</a></li>
<li><a name='toc7' href='#sect7'>Output Parameters</a></li>
<li><a name='toc8' href='#sect8'>Description</a></li>
<li><a name='toc9' href='#sect9'>Errors</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");

<?php
$topdir = "../../..";
$title = "MPI_Type_create_struct(3) man page (version 1.10.0)";
$meta_desc = "Open MPI v1.10.0 man page: MPI_TYPE_CREATE_STRUCT(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
      <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Type_create_struct</b> - Creates a structured data type.
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C
Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Type_create_struct(int count, int array_of_blocklengths[],
<tt> </tt>&nbsp;<tt> </tt>&nbsp;const MPI_Aint array_of_displacements[], const MPI_Datatype array_of_types[],
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_Datatype *newtype)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax (see FORTRAN 77 NOTES)</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
MPI_TYPE_CREATE_STRUCT(COUNT, ARRAY_OF_BLOCKLENGTHS,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;ARRAY_OF_DISPLACEMENTS, ARRAY_OF_TYPES, NEWTYPE, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;COUNT, ARRAY_OF_BLOCKLENGTHS(*), ARRAY_OF_TYPES(*),
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER NEWTYPE, IERROR
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER(KIND=MPI_ADDRESS_KIND) ARRAY_OF_DISPLACEMENTS(*)
</pre>
<h2><a name='sect4' href='#toc4'>C++ Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
static MPI::Datatype MPI::Datatype::Create_struct(int count,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;const int array_of_blocklengths[], const MPI::Aint
<tt> </tt>&nbsp;<tt> </tt>&nbsp;array_of_displacements[], const MPI::Datatype
<tt> </tt>&nbsp;<tt> </tt>&nbsp;array_of_types[])
</pre>
<h2><a name='sect5' href='#toc5'>Input Parameters</a></h2>

<dl>

<dt>count </dt>
<dd>Number of blocks (integer) -- also number of entries
in arrays <i>array_of_types</i>, <i>array_of_displacements</i>, and <i>array_of_blocklengths</i>.
 </dd>

<dt>array_of_blocklengths </dt>
<dd>Number of elements in each block (array of integers).
</dd>

<dt>array_of_displacements </dt>
<dd>Byte displacement of each block (array of integers).
</dd>

<dt>array_of_types </dt>
<dd>Type of elements in each block (array of handles to data-type
objects).
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Output Parameters</a></h2>

<dl>

<dt>newtype </dt>
<dd>New data type (handle). </dd>

<dt>IERROR </dt>
<dd>Fortran
only: Error status (integer).
<p> </dd>
</dl>

<h2><a name='sect7' href='#toc7'>Description</a></h2>
MPI_Type_create_struct creates
a structured data type. This routine replaces <a href="../man3/MPI_Type_struct.3.php">MPI_Type_struct</a>, which is
now deprecated.  <p>
NOTE - This routine replaces <a href="../man3/MPI_Type_struct.3.php">MPI_Type_struct</a>, which is deprecated.
See the man page <i><a href="../man3/MPI_Type_struct.3.php">MPI_Type_struct</a>(3)</i> for information about that routine.

<p>
<h2><a name='sect8' href='#toc8'>Fortran 77 Notes</a></h2>
The MPI standard prescribes portable Fortran syntax for
the <i>ARRAY_OF_DISPLACEMENTS</i>(*) argument only for Fortran 90.  FORTRAN 77
users may use the non-portable syntax <p>
<br>
<pre>     INTEGER*MPI_ADDRESS_KIND ARRAY_OF_DISPLACEMENTS(*)
</pre><p>
where MPI_ADDRESS_KIND is a constant defined in mpif.h and gives the length
of the declared integer in bytes.
<p>
<h2><a name='sect9' href='#toc9'>Errors</a></h2>
Almost all MPI routines return
an error value; C routines as the value of the function and Fortran routines
in the last argument. C++ functions do not return errors. If the default
error handler is set to MPI::ERRORS_THROW_EXCEPTIONS, then on error the
C++ exception mechanism will be used to throw an MPI::Exception object.
<p>
Before the error value is returned, the current MPI error handler is called.
By default, this error handler aborts the MPI job, except for I/O function
errors. The error handler may be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the
predefined error handler MPI_ERRORS_RETURN may be used to cause error values
to be returned. Note that MPI does not guarantee that an MPI program can
continue past an error.
<p>
<h2><a name='sect10' href='#toc10'>See Also</a></h2>
<p>
<a href="../man3/MPI_Type_struct.3.php">MPI_Type_struct</a> <br>

<p><a href="../man3/MPI_Type_create_hindexed.3.php">MPI_Type_create_hindexed</a>
<p> <p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Syntax</a></li>
<li><a name='toc2' href='#sect2'>C Syntax</a></li>
<li><a name='toc3' href='#sect3'>Fortran Syntax (see FORTRAN 77 NOTES)</a></li>
<li><a name='toc4' href='#sect4'>C++ Syntax</a></li>
<li><a name='toc5' href='#sect5'>Input Parameters</a></li>
<li><a name='toc6' href='#sect6'>Output Parameters</a></li>
<li><a name='toc7' href='#sect7'>Description</a></li>
<li><a name='toc8' href='#sect8'>Fortran 77 Notes</a></li>
<li><a name='toc9' href='#sect9'>Errors</a></li>
<li><a name='toc10' href='#sect10'>See Also</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");

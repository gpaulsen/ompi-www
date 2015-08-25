<?php
$topdir = "../../..";
$title = "MPI_Type_create_darray(3) man page (version 1.10.0)";
$meta_desc = "Open MPI v1.10.0 man page: MPI_TYPE_CREATE_DARRAY(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
      <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Type_create_darray</b> - Creates a distributed array datatype;

<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Type_create_darray(int size, int rank, int ndims,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;const int array_of_gsizes[], const int array_of_distribs[],
<tt> </tt>&nbsp;<tt> </tt>&nbsp;const int array_of_dargs[], const int array_of_psizes[],
<tt> </tt>&nbsp;<tt> </tt>&nbsp;int order, MPI_Datatype oldtype, MPI_Datatype *newtype)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
MPI_TYPE_CREATE_DARRAY(SIZE, RANK, NDIMS, ARRAY_OF_GSIZES,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;ARRAY_OF_DISTRIBS, ARRAY_OF_DARGS, ARRAY_OF_PSIZES, ORDER,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;OLDTYPE, NEWTYPE, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;SIZE, RANK, NDIMS, ARRAY_OF_GSIZES(*), ARRAY_OF_DISTRIBS(*),
<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;ARRAY_OF_DARGS(*), ARRAY_OF_PSIZES(*), ORDER, OLDTYPE,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;NEWTYPE, IERROR
</pre>
<h2><a name='sect4' href='#toc4'>C++ Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
MPI::Datatype MPI::Datatype::Create_darray(int size, int rank,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;int ndims, const int array_of_gsizes[],
<tt> </tt>&nbsp;<tt> </tt>&nbsp;const int array_of_distribs[], const int array_of_dargs[],
<tt> </tt>&nbsp;<tt> </tt>&nbsp;const int array_of_psizes[], int order) const
</pre>
<h2><a name='sect5' href='#toc5'>Input Parameters</a></h2>

<dl>

<dt>size </dt>
<dd>Size of process group (positive integer). </dd>

<dt>rank </dt>
<dd>Rank
in process group (nonnegative integer). </dd>

<dt>ndims </dt>
<dd>Number of array dimensions
as well as process grid dimensions (positive integer). <p>
</dd>

<dt>array_of_gsizes </dt>
<dd>Number
of elements of type <i>oldtype</i> in each dimension of global array (array of
positive integers).  <p>
</dd>

<dt>array_of_distribs </dt>
<dd>Distribution of array in each dimension
(array of state). </dd>

<dt>array_of_dargs </dt>
<dd>Distribution argument in each dimension
(array of positive integers). <p>
</dd>

<dt>array_of_psizes </dt>
<dd>Size of process grid in each
dimension (array of positive integers). <p>
</dd>

<dt>order </dt>
<dd>Array storage order flag (state).
</dd>

<dt>oldtype </dt>
<dd>Old data type (handle).
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Output Parameters</a></h2>

<dl>

<dt>newtype </dt>
<dd>New data type
(handle). </dd>

<dt>IERROR </dt>
<dd>Fortran only: Error status (integer).
<p> </dd>
</dl>

<h2><a name='sect7' href='#toc7'>Description</a></h2>

<p> MPI_Type_create_darray
can be used to generate the data types corresponding to the distribution
of an ndims-dimensional array of <i>oldtype</i> elements onto an <i>ndims</i>-dimensional
grid of logical processes. Unused dimensions of <i>array_of_psizes</i> should be
set to 1. For a call to MPI_Type_create_darray to be correct, the equation
 <p>
<br>
<pre>    ndims-1
  pi              array_of_psizes[i] = size
    i=0
</pre><p>
must be satisfied. The ordering of processes in the process grid is assumed
to be row-major, as in the case of virtual Cartesian process topologies
in MPI-1.  <p>
Each dimension of the array can be distributed in one of three
ways:    <p>
<br>
<pre>- MPI_DISTRIBUTE_BLOCK - Block distribution
- MPI_DISTRIBUTE_CYCLIC - Cyclic distribution
- MPI_DISTRIBUTE_NONE - Dimension not distributed.
</pre><p>
The constant MPI_DISTRIBUTE_DFLT_DARG specifies a default distribution
argument. The distribution argument for a dimension that is not distributed
is ignored. For any dimension <i>i</i> in which the distribution is MPI_DISTRIBUTE_BLOCK,
it erroneous to specify <i>array_of_dargs[i]</i> <i>*</i> <i>array_of_psizes[i]</i> &lt; <i>array_of_gsizes[i]</i>.
<p>
For example, the HPF layout ARRAY(CYCLIC(15)) corresponds to MPI_DISTRIBUTE_CYCLIC
with a distribution argument of 15, and the HPF layout ARRAY(BLOCK) corresponds
to MPI_DISTRIBUTE_BLOCK with a distribution argument of MPI_DISTRIBUTE_DFLT_DARG.
 <p>
The <i>order</i> argument is used as in <a href="../man3/MPI_Type_create_subarray.3.php">MPI_TYPE_CREATE_SUBARRAY</a> to specify the
storage order. Therefore, arrays described by this type constructor may
be stored in Fortran (column-major) or C (row-major) order. Valid values for
order are MPI_ORDER_FORTRAN and MPI_ORDER_C.  <p>
This routine creates a new
MPI data type with a typemap defined in terms of a function called "cyclic()"
(see below).  <p>
Without loss of generality, it suffices to define the typemap
for the MPI_DISTRIBUTE_CYCLIC case where MPI_DISTRIBUTE_DFLT_DARG is not
used.  <p>
MPI_DISTRIBUTE_BLOCK and MPI_DISTRIBUTE_NONE can be reduced to the
MPI_DISTRIBUTE_CYCLIC case for dimension <i>i</i> as follows. <p>
MPI_DISTRIBUTE_BLOCK
with <i>array_of_dargs[i]</i> equal to MPI_DISTRIBUTE_DFLT_DARG is equivalent
to MPI_DISTRIBUTE_CYCLIC with <i>array_of_dargs[i]</i> set to <p>
<br>
<pre>   (array_of_gsizes[i] + array_of_psizes[i] - 1)/array_of_psizes[i]
</pre><p>
If <i>array_of_dargs[i]</i> is not MPI_DISTRIBUTE_DFLT_DARG, then MPI_DISTRIBUTE_BLOCK
and DISTRIBUTE_CYCLIC are equivalent. <p>
MPI_DISTRIBUTE_NONE is equivalent
to MPI_DISTRIBUTE_CYCLIC with <i>array_of_dargs[i]</i> set to <i>array_of_gsizes[i]</i>.
<p>
Finally, MPI_DISTRIBUTE_CYCLIC with <i>array_of_dargs[i]</i> equal to MPI_DISTRIBUTE_DFLT_DARG
is equivalent to MPI_DISTRIBUTE_CYCLIC with <i>array_of_dargs[i]</i> set to 1.
<p>

<p>
<h2><a name='sect8' href='#toc8'>Notes</a></h2>
For both Fortran and C arrays, the ordering of processes in the process
grid is assumed to be row-major. This is consistent with the ordering used
in virtual Cartesian process topologies in MPI-1. To create such virtual
process topologies, or to find the coordinates of a process in the process
grid, etc., users may use the corresponding functions provided in MPI-1.

<p>
<h2><a name='sect9' href='#toc9'>Errors</a></h2>
Almost all MPI routines return an error value; C routines as the
value of the function and Fortran routines in the last argument. C++ functions
do not return errors. If the default error handler is set to MPI::ERRORS_THROW_EXCEPTIONS,
then on error the C++ exception mechanism will be used to throw an MPI::Exception
object. <p>
Before the error value is returned, the current MPI error handler
is called. By default, this error handler aborts the MPI job, except for
I/O function errors. The error handler may be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>;
the predefined error handler MPI_ERRORS_RETURN may be used to cause error
values to be returned. Note that MPI does not guarantee that an MPI program
can continue past an error.
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
<li><a name='toc5' href='#sect5'>Input Parameters</a></li>
<li><a name='toc6' href='#sect6'>Output Parameters</a></li>
<li><a name='toc7' href='#sect7'>Description</a></li>
<li><a name='toc8' href='#sect8'>Notes</a></li>
<li><a name='toc9' href='#sect9'>Errors</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");

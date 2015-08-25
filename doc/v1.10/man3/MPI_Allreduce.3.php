<?php
$topdir = "../../..";
$title = "MPI_Allreduce(3) man page (version 1.10.0)";
$meta_desc = "Open MPI v1.10.0 man page: MPI_ALLREDUCE(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
      <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Allreduce, <a href="../man3/MPI_Iallreduce.3.php">MPI_Iallreduce</a></b> - Combines values from all processes
and distributes the result back to all processes.
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Allreduce(const void *sendbuf, void *recvbuf, int count,
                  MPI_Datatype datatype, MPI_Op op, MPI_Comm comm)
int <a href="../man3/MPI_Iallreduce.3.php">MPI_Iallreduce</a>(const void *sendbuf, void *recvbuf, int count,
                   MPI_Datatype datatype, MPI_Op op, MPI_Comm comm,
                   MPI_Request *request)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
MPI_ALLREDUCE(SENDBUF, RECVBUF, COUNT, DATATYPE, OP, COMM, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;&lt;type&gt;<tt> </tt>&nbsp;<tt> </tt>&nbsp;SENDBUF(*), RECVBUF(*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;COUNT, DATATYPE, OP, COMM, IERROR
<a href="../man3/MPI_Iallreduce.3.php">MPI_IALLREDUCE</a>(SENDBUF, RECVBUF, COUNT, DATATYPE, OP, COMM, REQUEST, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;&lt;type&gt;<tt> </tt>&nbsp;<tt> </tt>&nbsp;SENDBUF(*), RECVBUF(*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;COUNT, DATATYPE, OP, COMM, REQUEST, IERROR
</pre>
<h2><a name='sect4' href='#toc4'>C++ Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
void MPI::Comm::Allreduce(const void* sendbuf, void* recvbuf,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;int count, const MPI::Datatype&amp; datatype, const
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI::Op&amp; op) const=0
</pre>
<h2><a name='sect5' href='#toc5'>Input Parameters</a></h2>

<dl>

<dt>sendbuf </dt>
<dd>Starting address of send buffer (choice). </dd>

<dt>count
</dt>
<dd>Number of elements in send buffer (integer). </dd>

<dt>datatype </dt>
<dd>Datatype of elements
of send buffer (handle). </dd>

<dt>op </dt>
<dd>Operation (handle). </dd>

<dt>comm </dt>
<dd>Communicator (handle).

<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Output Parameters</a></h2>

<dl>

<dt>recvbuf </dt>
<dd>Starting address of receive buffer (choice). </dd>

<dt>request
</dt>
<dd>Request (handle, non-blocking only). </dd>

<dt>IERROR </dt>
<dd>Fortran only: Error status (integer).

<p> </dd>
</dl>

<h2><a name='sect7' href='#toc7'>Description</a></h2>
Same as <a href="../man3/MPI_Reduce.3.php">MPI_Reduce</a> except that the result appears in the receive
buffer of all the group members.  <p>
<b>Example 1:</b> A routine that computes the
product of a vector and an array that are distributed across a group of
processes and returns the answer at all nodes (compare with Example 2,
with <a href="../man3/MPI_Reduce.3.php">MPI_Reduce</a>, below). <p>
<br>
<pre>SUBROUTINE PAR_BLAS2(m, n, a, b, c, comm)
REAL a(m), b(m,n)    ! local slice of array
REAL c(n)            ! result
REAL sum(n)
INTEGER n, comm, i, j, ierr

! local sum
DO j= 1, n
  sum(j) = 0.0
  DO i = 1, m
    sum(j) = sum(j) + a(i)*b(i,j)
  END DO
END DO

! global sum
CALL MPI_ALLREDUCE(sum, c, n, MPI_REAL, MPI_SUM, comm, ierr)

! return result at all nodes
RETURN
</pre><p>
<b>Example 2:</b> A routine that computes the product of a vector and an array
that are distributed across a group of processes and returns the answer
at node zero. <p>
<br>
<pre>SUBROUTINE PAR_BLAS2(m, n, a, b, c, comm)
REAL a(m), b(m,n)    ! local slice of array
REAL c(n)            ! result
REAL sum(n)
INTEGER n, comm, i, j, ierr

! local sum
DO j= 1, n
  sum(j) = 0.0
  DO i = 1, m
    sum(j) = sum(j) + a(i)*b(i,j)
  END DO
END DO
! global sum
CALL <a href="../man3/MPI_Reduce.3.php">MPI_REDUCE</a>(sum, c, n, MPI_REAL, MPI_SUM, 0, comm, ierr)

! return result at node zero (and garbage at the other nodes)
RETURN
</pre>
<h2><a name='sect8' href='#toc8'>Use of In-place Option</a></h2>
When the communicator is an intracommunicator, you
can perform an all-reduce operation in-place (the output buffer is used as
the input buffer).  Use the variable MPI_IN_PLACE as the value of <i>sendbuf</i>
at all processes.  <p>
Note that MPI_IN_PLACE is a special kind of value; it
has the same restrictions on its use as MPI_BOTTOM. <p>
Because the in-place
option converts the receive buffer into a send-and-receive buffer, a Fortran
binding that includes INTENT must mark these as INOUT, not OUT.    <p>

<h2><a name='sect9' href='#toc9'>When
Communicator is an Inter-communicator</a></h2>
When the communicator is an inter-communicator,
the reduce operation occurs in two phases.  The data is reduced from all
the members of the first group and received by all the members of the second
group.  Then the data is reduced from all the members of the second group
and received by all the members of the first.  The operation exhibits a
symmetric, full-duplex behavior.   <p>
When the communicator is an intra-communicator,
these groups are the same, and the operation occurs in a single phase.
<h2><a name='sect10' href='#toc10'>Notes
on Collective Operations</a></h2>

<p> The reduction functions ( <i>MPI_Op</i> ) do not return
an error value.  As a result, if the functions detect an error, all they
can do is either call  <i><a href="../man3/MPI_Abort.3.php">MPI_Abort</a></i> or silently skip the problem.  Thus, if
you change the error handler from <i>MPI_ERRORS_ARE_FATAL</i> to something else,
for example,  <i>MPI_ERRORS_RETURN</i> , then no error may be indicated.
<p>
<h2><a name='sect11' href='#toc11'>Errors</a></h2>
Almost
all MPI routines return an error value; C routines as the value of the
function and Fortran routines in the last argument. C++ functions do not
return errors. If the default error handler is set to MPI::ERRORS_THROW_EXCEPTIONS,
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
<li><a name='toc8' href='#sect8'>Use of In-place Option</a></li>
<li><a name='toc9' href='#sect9'>When Communicator is an Inter-communicator</a></li>
<li><a name='toc10' href='#sect10'>Notes on Collective Operations</a></li>
<li><a name='toc11' href='#sect11'>Errors</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");

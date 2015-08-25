<?php
$topdir = "../../..";
$title = "MPI_Intercomm_create(3) man page (version 1.10.0)";
$meta_desc = "Open MPI v1.10.0 man page: MPI_INTERCOMM_CREATE(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
     <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Intercomm_create</b> - Creates an intercommunicator from two intracommunicators.

<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Intercomm_create(MPI_Comm local_comm, int local_leader,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_Comm peer_comm, int remote_leader, int tag, MPI_Comm *newintercomm)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
MPI_INTERCOMM_CREATE(LOCAL_COMM, LOCAL_LEADER, PEER_COMM,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;REMOTE_LEADER, TAG, NEWINTERCOMM, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;LOCAL_COMM, LOCAL_LEADER, PEER_COMM, REMOTE_LEADER
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;TAG, NEWINTERCOMM, IERROR
</pre>
<h2><a name='sect4' href='#toc4'>C++ Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
Intercomm Intracomm::Create_intercomm(int local_leader, const
<tt> </tt>&nbsp;<tt> </tt>&nbsp;Comm&amp; peer_comm, int remote_leader, int tag) const
</pre>
<h2><a name='sect5' href='#toc5'>Input Parameters</a></h2>

<dl>

<dt>local_comm </dt>
<dd>The communicator containing the process that
initiates the inter-communication (handle). </dd>

<dt>local_leader </dt>
<dd>Rank of local group
leader in local_comm (integer). </dd>

<dt>peer_comm </dt>
<dd>"Peer" communicator; significant
only at the local_leader (handle). </dd>

<dt>remote_leader </dt>
<dd>Rank of remote group leader
in peer_comm; significant only at the local_leader (integer). </dd>

<dt>tag </dt>
<dd>Message
tag used to identify new intercommunicator (integer).
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Output Parameters</a></h2>

<dl>

<dt>newintercomm
</dt>
<dd>Created intercommunicator (handle). </dd>

<dt>IERROR </dt>
<dd>Fortran only: Error status (integer).

<p> </dd>
</dl>

<h2><a name='sect7' href='#toc7'>Description</a></h2>
This call creates an intercommunicator. It is collective over
the union of the local and remote groups. Processes should provide identical
local_comm and local_leader arguments within each group. Wildcards are not
permitted for remote_leader, local_leader, and tag. <p>
This call uses point-to-point
communication with communicator peer_comm, and with tag tag between the
leaders. Thus, care must be taken that there be no pending communication
on peer_comm that could interfere with this communication.
<p> If multiple
MPI_Intercomm_creates are being made, they should use different tags (more
precisely, they should ensure that the local and remote leaders are using
different tags for each MPI_intercomm_create).
<p>
<h2><a name='sect8' href='#toc8'>Notes</a></h2>
We recommend using
a dedicated peer communicator, such as a duplicate of MPI_COMM_WORLD, to
avoid trouble with peer communicators. <p>
The MPI 1.1 Standard contains two
mutually exclusive comments on the input intracommunicators.  One says that
their respective groups must be disjoint; the other that the leaders can
be the same process.  After some discussion by the MPI Forum, it has been
decided that the groups must be disjoint.  Note that the  <b>reason</b> given for
this in the standard is <b>not</b> the reason for this choice; rather, the  <b>other</b>
operations on intercommunicators (like  <i><a href="../man3/MPI_Intercomm_merge.3.php">MPI_Intercomm_merge</a></i> ) do not make
sense if the groups are not disjoint.
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
<a href="../man3/MPI_Intercomm_merge.3.php">MPI_Intercomm_merge</a> <br>
<a href="../man3/MPI_Comm_free.3.php">MPI_Comm_free</a> <br>
<a href="../man3/MPI_Comm_remote_group.3.php">MPI_Comm_remote_group</a> <br>

<p><a href="../man3/MPI_Comm_remote_size.3.php">MPI_Comm_remote_size</a>
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
<li><a name='toc10' href='#sect10'>See Also</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");

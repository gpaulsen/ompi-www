<?php
$topdir = "../../..";
$title = "mpif90(1) man page (version 1.10.0)";
$meta_desc = "Open MPI v1.10.0 man page: mpif90(1)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
  <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
mpif77, mpif90 -- Deprecated Open MPI Fortran wrapper compilers
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>
mpif90
...
<h2><a name='sect2' href='#toc2'>Description</a></h2>
<p>
The <i>mpif77</i> and <i>mpif90</i> wrapper compiler names are deprecated,
and will disappear in a future version of Open MPI.  You should use the
<i>mpifort</i> wrapper compiler, instead.  While they are deprecated, <i>mpif77</i> and
<i>mpif90</i> accept all the same parameters as <i>mpifort</i>, and behaves the same
as <i>mpifort</i>.  <p>
With <i>mpifort</i>, you can compile any Fortran program that uses
the "mpif.h", "use mpi", and/or "use mpi_f08" MPI Fortran interfaces.  <p>
See
<i>mpifort(1)</i> for more details.
<h2><a name='sect3' href='#toc3'>See Also</a></h2>
<i>mpifort(1)</i>  <p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Syntax</a></li>
<li><a name='toc2' href='#sect2'>Description</a></li>
<li><a name='toc3' href='#sect3'>See Also</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");

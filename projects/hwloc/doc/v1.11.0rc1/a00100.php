<?php
$topdir = "../../../..";
# Note that we must use the PHP "$$" indirection to assign to the
# "title" variable, because if we list "$ title" (without the space)
# in this file, Doxygen will replace it with a string title.
$ver = basename(getcwd());
$thwarting_doxygen_preprocessor = "title";
$$thwarting_doxygen_preprocessor = "Portable Hardware Locality (hwloc) Documentation: $ver";
$header_include_file = "$topdir/projects/hwloc/doc/$ver/www.open-mpi.org-css.inc";
include_once("$topdir/projects/hwloc/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/code.inc");
?>
<!-- Generated by Doxygen 1.8.9.1 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#nested-classes">Data Structures</a> &#124;
<a href="#typedef-members">Typedefs</a> &#124;
<a href="#enum-members">Enumerations</a>  </div>
  <div class="headertitle">
<div class="title">Components and Plugins: Discovery components</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Data Structures</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00035.php">hwloc_disc_component</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="typedef-members"></a>
Typedefs</h2></td></tr>
<tr class="memitem:ga5c6112c1a7497e5f481b9634059d47b1"><td class="memItemLeft" align="right" valign="top">typedef enum <a class="el" href="a00100.php#ga0dceb95fada01e5e4558429912053ca7">hwloc_disc_component_type_e</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00100.php#ga5c6112c1a7497e5f481b9634059d47b1">hwloc_disc_component_type_t</a></td></tr>
<tr class="separator:ga5c6112c1a7497e5f481b9634059d47b1"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="enum-members"></a>
Enumerations</h2></td></tr>
<tr class="memitem:ga0dceb95fada01e5e4558429912053ca7"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00100.php#ga0dceb95fada01e5e4558429912053ca7">hwloc_disc_component_type_e</a> { <a class="el" href="a00100.php#gga0dceb95fada01e5e4558429912053ca7aa09e6a39b61eda5364eada626da88ecc">HWLOC_DISC_COMPONENT_TYPE_CPU</a>, 
<a class="el" href="a00100.php#gga0dceb95fada01e5e4558429912053ca7a7d7e7114cca4165eee72efb9b39b3d6d">HWLOC_DISC_COMPONENT_TYPE_GLOBAL</a>, 
<a class="el" href="a00100.php#gga0dceb95fada01e5e4558429912053ca7aaf4d61f8e2c7c28e88cd81bb565695b7">HWLOC_DISC_COMPONENT_TYPE_MISC</a>
 }</td></tr>
<tr class="separator:ga0dceb95fada01e5e4558429912053ca7"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<h2 class="groupheader">Typedef Documentation</h2>
<a class="anchor" id="ga5c6112c1a7497e5f481b9634059d47b1"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">typedef enum <a class="el" href="a00100.php#ga0dceb95fada01e5e4558429912053ca7">hwloc_disc_component_type_e</a>  <a class="el" href="a00100.php#ga5c6112c1a7497e5f481b9634059d47b1">hwloc_disc_component_type_t</a></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Discovery component type. </p>

</div>
</div>
<h2 class="groupheader">Enumeration Type Documentation</h2>
<a class="anchor" id="ga0dceb95fada01e5e4558429912053ca7"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="a00100.php#ga0dceb95fada01e5e4558429912053ca7">hwloc_disc_component_type_e</a></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Discovery component type. </p>
<table class="fieldtable">
<tr><th colspan="2">Enumerator</th></tr><tr><td class="fieldname"><a class="anchor" id="gga0dceb95fada01e5e4558429912053ca7aa09e6a39b61eda5364eada626da88ecc"></a>HWLOC_DISC_COMPONENT_TYPE_CPU&#160;</td><td class="fielddoc">
<p>CPU-only discovery through the OS, or generic no-OS support. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="gga0dceb95fada01e5e4558429912053ca7a7d7e7114cca4165eee72efb9b39b3d6d"></a>HWLOC_DISC_COMPONENT_TYPE_GLOBAL&#160;</td><td class="fielddoc">
<p>xml, synthetic or custom, platform-specific components such as bgq. Anything the discovers CPU and everything else. No misc backend is expected to complement a global component. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="gga0dceb95fada01e5e4558429912053ca7aaf4d61f8e2c7c28e88cd81bb565695b7"></a>HWLOC_DISC_COMPONENT_TYPE_MISC&#160;</td><td class="fielddoc">
<p>OpenCL, Cuda, etc. </p>
</td></tr>
</table>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");

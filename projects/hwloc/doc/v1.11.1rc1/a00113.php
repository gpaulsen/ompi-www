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
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">Interoperability with OpenGL displays</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:ga4d66a77e4fe4051d6e5b772c1b8fcec5"><td class="memItemLeft" align="right" valign="top">static <a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00113.php#ga4d66a77e4fe4051d6e5b772c1b8fcec5">hwloc_gl_get_display_osdev_by_port_device</a> (<a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, unsigned port, unsigned device)</td></tr>
<tr class="separator:ga4d66a77e4fe4051d6e5b772c1b8fcec5"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga2d36ef441d1dfddf49cfb5c01bd58d8e"><td class="memItemLeft" align="right" valign="top">static <a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00113.php#ga2d36ef441d1dfddf49cfb5c01bd58d8e">hwloc_gl_get_display_osdev_by_name</a> (<a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, const char *name)</td></tr>
<tr class="separator:ga2d36ef441d1dfddf49cfb5c01bd58d8e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga936665ab5f0d29a081c4b78d11f4ad07"><td class="memItemLeft" align="right" valign="top">static int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00113.php#ga936665ab5f0d29a081c4b78d11f4ad07">hwloc_gl_get_display_by_osdev</a> (<a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> osdev, unsigned *port, unsigned *device)</td></tr>
<tr class="separator:ga936665ab5f0d29a081c4b78d11f4ad07"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<p>This interface offers ways to retrieve topology information about OpenGL displays.</p>
<p>Only the NVIDIA display locality information is currently available, using the NV-CONTROL X11 extension and the NVCtrl library. </p>
<h2 class="groupheader">Function Documentation</h2>
<a class="anchor" id="ga936665ab5f0d29a081c4b78d11f4ad07"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static int hwloc_gl_get_display_by_osdev </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>osdev</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned *&#160;</td>
          <td class="paramname"><em>port</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned *&#160;</td>
          <td class="paramname"><em>device</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the OpenGL display port and device corresponding to the given hwloc OS object. </p>
<p>Return the OpenGL display port (server) in <code>port</code> and device (screen) in <code>screen</code> that correspond to the given hwloc OS device object. Return <code>-1</code> if there is none.</p>
<p>The topology <code>topology</code> does not necessarily have to match the current machine. For instance the topology may be an XML import of a remote host. I/O devices detection and the GL component must be enabled in the topology. </p>

</div>
</div>
<a class="anchor" id="ga2d36ef441d1dfddf49cfb5c01bd58d8e"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static <a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_gl_get_display_osdev_by_name </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const char *&#160;</td>
          <td class="paramname"><em>name</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the hwloc OS device object corresponding to the OpenGL display given by name. </p>
<p>Return the OS device object describing the OpenGL display whose name is <code>name</code>, built as ":port.device" such as ":0.0" . Return NULL if there is none.</p>
<p>The topology <code>topology</code> does not necessarily have to match the current machine. For instance the topology may be an XML import of a remote host. I/O devices detection and the GL component must be enabled in the topology.</p>
<dl class="section note"><dt>Note</dt><dd>The corresponding PCI device object can be obtained by looking at the OS device parent object. </dd></dl>

</div>
</div>
<a class="anchor" id="ga4d66a77e4fe4051d6e5b772c1b8fcec5"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static <a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_gl_get_display_osdev_by_port_device </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>port</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>device</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the hwloc OS device object corresponding to the OpenGL display given by port and device index. </p>
<p>Return the OS device object describing the OpenGL display whose port (server) is <code>port</code> and device (screen) is <code>device</code>. Return NULL if there is none.</p>
<p>The topology <code>topology</code> does not necessarily have to match the current machine. For instance the topology may be an XML import of a remote host. I/O devices detection and the GL component must be enabled in the topology.</p>
<dl class="section note"><dt>Note</dt><dd>The corresponding PCI device object can be obtained by looking at the OS device parent object. </dd></dl>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");

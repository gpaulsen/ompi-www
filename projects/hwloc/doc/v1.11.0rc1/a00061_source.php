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
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_d44c64559bbebec7f509842c48db8b23.php">include</a></li><li class="navelem"><a class="el" href="dir_5cb306d949c7931a3b6c77517393dd34.php">hwloc</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">gl.h</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">/*</span></div>
<div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;<span class="comment"> * Copyright © 2012 Blue Brain Project, EPFL. All rights reserved.</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment"> * Copyright © 2012-2013 Inria.  All rights reserved.</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment"> * See COPYING in top-level directory.</span></div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment"> */</span></div>
<div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;</div>
<div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="preprocessor">#ifndef HWLOC_GL_H</span></div>
<div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="preprocessor">#define HWLOC_GL_H</span></div>
<div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;</div>
<div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="preprocessor">#include &lt;hwloc.h&gt;</span></div>
<div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;</div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="preprocessor">#include &lt;stdio.h&gt;</span></div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="preprocessor">#include &lt;string.h&gt;</span></div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;</div>
<div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;</div>
<div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;<span class="preprocessor">#ifdef __cplusplus</span></div>
<div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="keyword">extern</span> <span class="stringliteral">&quot;C&quot;</span> {</div>
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;</div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div>
<div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;<span class="keyword">static</span> __hwloc_inline <a class="code" href="a00038.php">hwloc_obj_t</a></div>
<div class="line"><a name="l00054"></a><span class="lineno"><a class="line" href="a00113.php#ga4d66a77e4fe4051d6e5b772c1b8fcec5">   54</a></span>&#160;<a class="code" href="a00113.php#ga4d66a77e4fe4051d6e5b772c1b8fcec5">hwloc_gl_get_display_osdev_by_port_device</a>(<a class="code" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology,</div>
<div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;                                          <span class="keywordtype">unsigned</span> port, <span class="keywordtype">unsigned</span> device)</div>
<div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;{</div>
<div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;        <span class="keywordtype">unsigned</span> x = (unsigned) -1, y = (<span class="keywordtype">unsigned</span>) -1;</div>
<div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;        <a class="code" href="a00038.php">hwloc_obj_t</a> osdev = NULL;</div>
<div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;        <span class="keywordflow">while</span> ((osdev = <a class="code" href="a00097.php#ga8b4584c8949e2c5f1c97ba7fe92b8145">hwloc_get_next_osdev</a>(topology, osdev)) != NULL) {</div>
<div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;                <span class="keywordflow">if</span> (<a class="code" href="a00076.php#gga64f5d539df299c97ae80ce53fc4b56c0aa3a09798ef2836abb236dc3a645ffc90">HWLOC_OBJ_OSDEV_GPU</a> == osdev-&gt;<a class="code" href="a00038.php#accd40e29f71f19e88db62ea3df02adc8">attr</a>-&gt;<a class="code" href="a00039.php#a22904c25fe44b323bab5c9bc52660fca">osdev</a>.<a class="code" href="a00043.php#a31e019e27e54ac6138d04be639bb96f9">type</a></div>
<div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;                    &amp;&amp; osdev-&gt;<a class="code" href="a00038.php#abb709ec38f2970677e4e57d1d30be96d">name</a></div>
<div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;                    &amp;&amp; sscanf(osdev-&gt;<a class="code" href="a00038.php#abb709ec38f2970677e4e57d1d30be96d">name</a>, <span class="stringliteral">&quot;:%u.%u&quot;</span>, &amp;x, &amp;y) == 2</div>
<div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;                    &amp;&amp; port == x &amp;&amp; device == y)</div>
<div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;                        <span class="keywordflow">return</span> osdev;</div>
<div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;        }</div>
<div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;        errno = EINVAL;</div>
<div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;        <span class="keywordflow">return</span> NULL;</div>
<div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;}</div>
<div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;</div>
<div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;<span class="keyword">static</span> __hwloc_inline <a class="code" href="a00038.php">hwloc_obj_t</a></div>
<div class="line"><a name="l00085"></a><span class="lineno"><a class="line" href="a00113.php#ga2d36ef441d1dfddf49cfb5c01bd58d8e">   85</a></span>&#160;<a class="code" href="a00113.php#ga2d36ef441d1dfddf49cfb5c01bd58d8e">hwloc_gl_get_display_osdev_by_name</a>(<a class="code" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology,</div>
<div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;                                   <span class="keyword">const</span> <span class="keywordtype">char</span> *name)</div>
<div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;{</div>
<div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;        <a class="code" href="a00038.php">hwloc_obj_t</a> osdev = NULL;</div>
<div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;        <span class="keywordflow">while</span> ((osdev = <a class="code" href="a00097.php#ga8b4584c8949e2c5f1c97ba7fe92b8145">hwloc_get_next_osdev</a>(topology, osdev)) != NULL) {</div>
<div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;                <span class="keywordflow">if</span> (<a class="code" href="a00076.php#gga64f5d539df299c97ae80ce53fc4b56c0aa3a09798ef2836abb236dc3a645ffc90">HWLOC_OBJ_OSDEV_GPU</a> == osdev-&gt;<a class="code" href="a00038.php#accd40e29f71f19e88db62ea3df02adc8">attr</a>-&gt;<a class="code" href="a00039.php#a22904c25fe44b323bab5c9bc52660fca">osdev</a>.<a class="code" href="a00043.php#a31e019e27e54ac6138d04be639bb96f9">type</a></div>
<div class="line"><a name="l00091"></a><span class="lineno">   91</span>&#160;                    &amp;&amp; osdev-&gt;<a class="code" href="a00038.php#abb709ec38f2970677e4e57d1d30be96d">name</a></div>
<div class="line"><a name="l00092"></a><span class="lineno">   92</span>&#160;                    &amp;&amp; !strcmp(name, osdev-&gt;<a class="code" href="a00038.php#abb709ec38f2970677e4e57d1d30be96d">name</a>))</div>
<div class="line"><a name="l00093"></a><span class="lineno">   93</span>&#160;                        <span class="keywordflow">return</span> osdev;</div>
<div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;        }</div>
<div class="line"><a name="l00095"></a><span class="lineno">   95</span>&#160;        errno = EINVAL;</div>
<div class="line"><a name="l00096"></a><span class="lineno">   96</span>&#160;        <span class="keywordflow">return</span> NULL;</div>
<div class="line"><a name="l00097"></a><span class="lineno">   97</span>&#160;}</div>
<div class="line"><a name="l00098"></a><span class="lineno">   98</span>&#160;</div>
<div class="line"><a name="l00110"></a><span class="lineno">  110</span>&#160;<span class="keyword">static</span> __hwloc_inline <span class="keywordtype">int</span></div>
<div class="line"><a name="l00111"></a><span class="lineno"><a class="line" href="a00113.php#ga936665ab5f0d29a081c4b78d11f4ad07">  111</a></span>&#160;<a class="code" href="a00113.php#ga936665ab5f0d29a081c4b78d11f4ad07">hwloc_gl_get_display_by_osdev</a>(<a class="code" href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology __hwloc_attribute_unused,</div>
<div class="line"><a name="l00112"></a><span class="lineno">  112</span>&#160;                              <a class="code" href="a00038.php">hwloc_obj_t</a> osdev,</div>
<div class="line"><a name="l00113"></a><span class="lineno">  113</span>&#160;                              <span class="keywordtype">unsigned</span> *port, <span class="keywordtype">unsigned</span> *device)</div>
<div class="line"><a name="l00114"></a><span class="lineno">  114</span>&#160;{</div>
<div class="line"><a name="l00115"></a><span class="lineno">  115</span>&#160;        <span class="keywordtype">unsigned</span> x = -1, y = -1;</div>
<div class="line"><a name="l00116"></a><span class="lineno">  116</span>&#160;        <span class="keywordflow">if</span> (<a class="code" href="a00076.php#gga64f5d539df299c97ae80ce53fc4b56c0aa3a09798ef2836abb236dc3a645ffc90">HWLOC_OBJ_OSDEV_GPU</a> == osdev-&gt;<a class="code" href="a00038.php#accd40e29f71f19e88db62ea3df02adc8">attr</a>-&gt;<a class="code" href="a00039.php#a22904c25fe44b323bab5c9bc52660fca">osdev</a>.<a class="code" href="a00043.php#a31e019e27e54ac6138d04be639bb96f9">type</a></div>
<div class="line"><a name="l00117"></a><span class="lineno">  117</span>&#160;            &amp;&amp; sscanf(osdev-&gt;<a class="code" href="a00038.php#abb709ec38f2970677e4e57d1d30be96d">name</a>, <span class="stringliteral">&quot;:%u.%u&quot;</span>, &amp;x, &amp;y) == 2) {</div>
<div class="line"><a name="l00118"></a><span class="lineno">  118</span>&#160;                *port = x;</div>
<div class="line"><a name="l00119"></a><span class="lineno">  119</span>&#160;                *device = y;</div>
<div class="line"><a name="l00120"></a><span class="lineno">  120</span>&#160;                <span class="keywordflow">return</span> 0;</div>
<div class="line"><a name="l00121"></a><span class="lineno">  121</span>&#160;        }</div>
<div class="line"><a name="l00122"></a><span class="lineno">  122</span>&#160;        errno = EINVAL;</div>
<div class="line"><a name="l00123"></a><span class="lineno">  123</span>&#160;        <span class="keywordflow">return</span> -1;</div>
<div class="line"><a name="l00124"></a><span class="lineno">  124</span>&#160;}</div>
<div class="line"><a name="l00125"></a><span class="lineno">  125</span>&#160;</div>
<div class="line"><a name="l00129"></a><span class="lineno">  129</span>&#160;<span class="preprocessor">#ifdef __cplusplus</span></div>
<div class="line"><a name="l00130"></a><span class="lineno">  130</span>&#160;} <span class="comment">/* extern &quot;C&quot; */</span></div>
<div class="line"><a name="l00131"></a><span class="lineno">  131</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00132"></a><span class="lineno">  132</span>&#160;</div>
<div class="line"><a name="l00133"></a><span class="lineno">  133</span>&#160;</div>
<div class="line"><a name="l00134"></a><span class="lineno">  134</span>&#160;<span class="preprocessor">#endif </span><span class="comment">/* HWLOC_GL_H */</span><span class="preprocessor"></span></div>
<div class="line"><a name="l00135"></a><span class="lineno">  135</span>&#160;</div>
<div class="ttc" id="a00113_php_ga4d66a77e4fe4051d6e5b772c1b8fcec5"><div class="ttname"><a href="a00113.php#ga4d66a77e4fe4051d6e5b772c1b8fcec5">hwloc_gl_get_display_osdev_by_port_device</a></div><div class="ttdeci">static hwloc_obj_t hwloc_gl_get_display_osdev_by_port_device(hwloc_topology_t topology, unsigned port, unsigned device)</div><div class="ttdoc">Get the hwloc OS device object corresponding to the OpenGL display given by port and device index...</div><div class="ttdef"><b>Definition:</b> gl.h:54</div></div>
<div class="ttc" id="a00097_php_ga8b4584c8949e2c5f1c97ba7fe92b8145"><div class="ttname"><a href="a00097.php#ga8b4584c8949e2c5f1c97ba7fe92b8145">hwloc_get_next_osdev</a></div><div class="ttdeci">static hwloc_obj_t hwloc_get_next_osdev(hwloc_topology_t topology, hwloc_obj_t prev)</div><div class="ttdoc">Get the next OS device in the system. </div><div class="ttdef"><b>Definition:</b> helper.h:1231</div></div>
<div class="ttc" id="a00043_php_a31e019e27e54ac6138d04be639bb96f9"><div class="ttname"><a href="a00043.php#a31e019e27e54ac6138d04be639bb96f9">hwloc_obj_attr_u::hwloc_osdev_attr_s::type</a></div><div class="ttdeci">hwloc_obj_osdev_type_t type</div><div class="ttdef"><b>Definition:</b> hwloc.h:534</div></div>
<div class="ttc" id="a00113_php_ga2d36ef441d1dfddf49cfb5c01bd58d8e"><div class="ttname"><a href="a00113.php#ga2d36ef441d1dfddf49cfb5c01bd58d8e">hwloc_gl_get_display_osdev_by_name</a></div><div class="ttdeci">static hwloc_obj_t hwloc_gl_get_display_osdev_by_name(hwloc_topology_t topology, const char *name)</div><div class="ttdoc">Get the hwloc OS device object corresponding to the OpenGL display given by name. ...</div><div class="ttdef"><b>Definition:</b> gl.h:85</div></div>
<div class="ttc" id="a00076_php_gga64f5d539df299c97ae80ce53fc4b56c0aa3a09798ef2836abb236dc3a645ffc90"><div class="ttname"><a href="a00076.php#gga64f5d539df299c97ae80ce53fc4b56c0aa3a09798ef2836abb236dc3a645ffc90">HWLOC_OBJ_OSDEV_GPU</a></div><div class="ttdoc">Operating system GPU device. For instance ":0.0" for a GL display, "card0" for a Linux DRM device...</div><div class="ttdef"><b>Definition:</b> hwloc.h:270</div></div>
<div class="ttc" id="a00039_php_a22904c25fe44b323bab5c9bc52660fca"><div class="ttname"><a href="a00039.php#a22904c25fe44b323bab5c9bc52660fca">hwloc_obj_attr_u::osdev</a></div><div class="ttdeci">struct hwloc_obj_attr_u::hwloc_osdev_attr_s osdev</div></div>
<div class="ttc" id="a00038_php_accd40e29f71f19e88db62ea3df02adc8"><div class="ttname"><a href="a00038.php#accd40e29f71f19e88db62ea3df02adc8">hwloc_obj::attr</a></div><div class="ttdeci">union hwloc_obj_attr_u * attr</div><div class="ttdoc">Object type-specific Attributes, may be NULL if no attribute value was found. </div><div class="ttdef"><b>Definition:</b> hwloc.h:351</div></div>
<div class="ttc" id="a00038_php_abb709ec38f2970677e4e57d1d30be96d"><div class="ttname"><a href="a00038.php#abb709ec38f2970677e4e57d1d30be96d">hwloc_obj::name</a></div><div class="ttdeci">char * name</div><div class="ttdoc">Object description if any. </div><div class="ttdef"><b>Definition:</b> hwloc.h:347</div></div>
<div class="ttc" id="a00038_php"><div class="ttname"><a href="a00038.php">hwloc_obj</a></div><div class="ttdoc">Structure of a topology object. </div><div class="ttdef"><b>Definition:</b> hwloc.h:340</div></div>
<div class="ttc" id="a00113_php_ga936665ab5f0d29a081c4b78d11f4ad07"><div class="ttname"><a href="a00113.php#ga936665ab5f0d29a081c4b78d11f4ad07">hwloc_gl_get_display_by_osdev</a></div><div class="ttdeci">static int hwloc_gl_get_display_by_osdev(hwloc_topology_t topology, hwloc_obj_t osdev, unsigned *port, unsigned *device)</div><div class="ttdoc">Get the OpenGL display port and device corresponding to the given hwloc OS object. </div><div class="ttdef"><b>Definition:</b> gl.h:111</div></div>
<div class="ttc" id="a00078_php_ga9d1e76ee15a7dee158b786c30b6a6e38"><div class="ttname"><a href="a00078.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a></div><div class="ttdeci">struct hwloc_topology * hwloc_topology_t</div><div class="ttdoc">Topology context. </div><div class="ttdef"><b>Definition:</b> hwloc.h:597</div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");

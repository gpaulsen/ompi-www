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
<!-- Generated by Doxygen 1.8.8 -->
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
<div class="title">cuda.h</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">/*</span></div>
<div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;<span class="comment"> * Copyright © 2010-2013 Inria.  All rights reserved.</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment"> * Copyright © 2010-2011 Université Bordeaux 1</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment"> * Copyright © 2011 Cisco Systems, Inc.  All rights reserved.</span></div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment"> * See COPYING in top-level directory.</span></div>
<div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment"> */</span></div>
<div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;</div>
<div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="preprocessor">#ifndef HWLOC_CUDA_H</span></div>
<div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="preprocessor">#define HWLOC_CUDA_H</span></div>
<div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;</div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="preprocessor">#include &lt;hwloc.h&gt;</span></div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="preprocessor">#include &lt;hwloc/autogen/config.h&gt;</span></div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="preprocessor">#include &lt;hwloc/helper.h&gt;</span></div>
<div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="preprocessor">#ifdef HWLOC_LINUX_SYS</span></div>
<div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;<span class="preprocessor">#include &lt;hwloc/linux.h&gt;</span></div>
<div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;</div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#include &lt;cuda.h&gt;</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div>
<div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;</div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="preprocessor">#ifdef __cplusplus</span></div>
<div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;<span class="keyword">extern</span> <span class="stringliteral">&quot;C&quot;</span> {</div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;</div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;</div>
<div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;<span class="keyword">static</span> __hwloc_inline <span class="keywordtype">int</span></div>
<div class="line"><a name="l00047"></a><span class="lineno"><a class="line" href="a00108.php#ga1084285e8ff8b7df91c28917637481c6">   47</a></span>&#160;<a class="code" href="a00108.php#ga1084285e8ff8b7df91c28917637481c6">hwloc_cuda_get_device_pci_ids</a>(<a class="code" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology __hwloc_attribute_unused,</div>
<div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;                              CUdevice cudevice, <span class="keywordtype">int</span> *domain, <span class="keywordtype">int</span> *bus, <span class="keywordtype">int</span> *dev)</div>
<div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;{</div>
<div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;  CUresult cres;</div>
<div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;</div>
<div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;<span class="preprocessor">#ifdef CU_DEVICE_ATTRIBUTE_PCI_DOMAIN_ID</span></div>
<div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;  cres = cuDeviceGetAttribute(domain, CU_DEVICE_ATTRIBUTE_PCI_DOMAIN_ID, cudevice);</div>
<div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;  <span class="keywordflow">if</span> (cres != CUDA_SUCCESS) {</div>
<div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;    errno = ENOSYS;</div>
<div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;    <span class="keywordflow">return</span> -1;</div>
<div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;  }</div>
<div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;<span class="preprocessor">#else</span></div>
<div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;  *domain = 0;</div>
<div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;  cres = cuDeviceGetAttribute(bus, CU_DEVICE_ATTRIBUTE_PCI_BUS_ID, cudevice);</div>
<div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;  <span class="keywordflow">if</span> (cres != CUDA_SUCCESS) {</div>
<div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;    errno = ENOSYS;</div>
<div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;    <span class="keywordflow">return</span> -1;</div>
<div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;  }</div>
<div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;  cres = cuDeviceGetAttribute(dev, CU_DEVICE_ATTRIBUTE_PCI_DEVICE_ID, cudevice);</div>
<div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;  <span class="keywordflow">if</span> (cres != CUDA_SUCCESS) {</div>
<div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;    errno = ENOSYS;</div>
<div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;    <span class="keywordflow">return</span> -1;</div>
<div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;  }</div>
<div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;</div>
<div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;  <span class="keywordflow">return</span> 0;</div>
<div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;}</div>
<div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;</div>
<div class="line"><a name="l00091"></a><span class="lineno">   91</span>&#160;<span class="keyword">static</span> __hwloc_inline <span class="keywordtype">int</span></div>
<div class="line"><a name="l00092"></a><span class="lineno"><a class="line" href="a00108.php#gaec41c6b4dc3361156beb7dea2a74f5a3">   92</a></span>&#160;<a class="code" href="a00108.php#gaec41c6b4dc3361156beb7dea2a74f5a3">hwloc_cuda_get_device_cpuset</a>(<a class="code" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology __hwloc_attribute_unused,</div>
<div class="line"><a name="l00093"></a><span class="lineno">   93</span>&#160;                             CUdevice cudevice, <a class="code" href="a00073.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> set)</div>
<div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;{</div>
<div class="line"><a name="l00095"></a><span class="lineno">   95</span>&#160;<span class="preprocessor">#ifdef HWLOC_LINUX_SYS</span></div>
<div class="line"><a name="l00096"></a><span class="lineno">   96</span>&#160;  <span class="comment">/* If we&#39;re on Linux, use the sysfs mechanism to get the local cpus */</span></div>
<div class="line"><a name="l00097"></a><span class="lineno">   97</span>&#160;<span class="preprocessor">#define HWLOC_CUDA_DEVICE_SYSFS_PATH_MAX 128</span></div>
<div class="line"><a name="l00098"></a><span class="lineno">   98</span>&#160;  <span class="keywordtype">char</span> path[HWLOC_CUDA_DEVICE_SYSFS_PATH_MAX];</div>
<div class="line"><a name="l00099"></a><span class="lineno">   99</span>&#160;  FILE *sysfile = NULL;</div>
<div class="line"><a name="l00100"></a><span class="lineno">  100</span>&#160;  <span class="keywordtype">int</span> domainid, busid, deviceid;</div>
<div class="line"><a name="l00101"></a><span class="lineno">  101</span>&#160;</div>
<div class="line"><a name="l00102"></a><span class="lineno">  102</span>&#160;  <span class="keywordflow">if</span> (<a class="code" href="a00108.php#ga1084285e8ff8b7df91c28917637481c6">hwloc_cuda_get_device_pci_ids</a>(topology, cudevice, &amp;domainid, &amp;busid, &amp;deviceid))</div>
<div class="line"><a name="l00103"></a><span class="lineno">  103</span>&#160;    <span class="keywordflow">return</span> -1;</div>
<div class="line"><a name="l00104"></a><span class="lineno">  104</span>&#160;</div>
<div class="line"><a name="l00105"></a><span class="lineno">  105</span>&#160;  <span class="keywordflow">if</span> (!<a class="code" href="a00077.php#ga68ffdcfd9175cdf40709801092f18017">hwloc_topology_is_thissystem</a>(topology)) {</div>
<div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;    errno = EINVAL;</div>
<div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;    <span class="keywordflow">return</span> -1;</div>
<div class="line"><a name="l00108"></a><span class="lineno">  108</span>&#160;  }</div>
<div class="line"><a name="l00109"></a><span class="lineno">  109</span>&#160;</div>
<div class="line"><a name="l00110"></a><span class="lineno">  110</span>&#160;  sprintf(path, <span class="stringliteral">&quot;/sys/bus/pci/devices/%04x:%02x:%02x.0/local_cpus&quot;</span>, domainid, busid, deviceid);</div>
<div class="line"><a name="l00111"></a><span class="lineno">  111</span>&#160;  sysfile = fopen(path, <span class="stringliteral">&quot;r&quot;</span>);</div>
<div class="line"><a name="l00112"></a><span class="lineno">  112</span>&#160;  <span class="keywordflow">if</span> (!sysfile)</div>
<div class="line"><a name="l00113"></a><span class="lineno">  113</span>&#160;    <span class="keywordflow">return</span> -1;</div>
<div class="line"><a name="l00114"></a><span class="lineno">  114</span>&#160;</div>
<div class="line"><a name="l00115"></a><span class="lineno">  115</span>&#160;  <a class="code" href="a00103.php#gaa5a608236c3c0757b0b79818f1d429fb">hwloc_linux_parse_cpumap_file</a>(sysfile, set);</div>
<div class="line"><a name="l00116"></a><span class="lineno">  116</span>&#160;  <span class="keywordflow">if</span> (<a class="code" href="a00096.php#ga5b64be28f5a7176ed8ad0d6a90bdf108">hwloc_bitmap_iszero</a>(set))</div>
<div class="line"><a name="l00117"></a><span class="lineno">  117</span>&#160;    <a class="code" href="a00096.php#ga036068a22d1aa5cb9ff1df348b525ff3">hwloc_bitmap_copy</a>(set, <a class="code" href="a00092.php#ga69fbad44c685e46d80ecf51a714ba9ce">hwloc_topology_get_complete_cpuset</a>(topology));</div>
<div class="line"><a name="l00118"></a><span class="lineno">  118</span>&#160;</div>
<div class="line"><a name="l00119"></a><span class="lineno">  119</span>&#160;  fclose(sysfile);</div>
<div class="line"><a name="l00120"></a><span class="lineno">  120</span>&#160;<span class="preprocessor">#else</span></div>
<div class="line"><a name="l00121"></a><span class="lineno">  121</span>&#160;  <span class="comment">/* Non-Linux systems simply get a full cpuset */</span></div>
<div class="line"><a name="l00122"></a><span class="lineno">  122</span>&#160;  <a class="code" href="a00096.php#ga036068a22d1aa5cb9ff1df348b525ff3">hwloc_bitmap_copy</a>(set, <a class="code" href="a00092.php#ga69fbad44c685e46d80ecf51a714ba9ce">hwloc_topology_get_complete_cpuset</a>(topology));</div>
<div class="line"><a name="l00123"></a><span class="lineno">  123</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00124"></a><span class="lineno">  124</span>&#160;  <span class="keywordflow">return</span> 0;</div>
<div class="line"><a name="l00125"></a><span class="lineno">  125</span>&#160;}</div>
<div class="line"><a name="l00126"></a><span class="lineno">  126</span>&#160;</div>
<div class="line"><a name="l00137"></a><span class="lineno">  137</span>&#160;<span class="keyword">static</span> __hwloc_inline <a class="code" href="a00036.php">hwloc_obj_t</a></div>
<div class="line"><a name="l00138"></a><span class="lineno"><a class="line" href="a00108.php#ga11fed607fa404e29e8da010f3ec128e4">  138</a></span>&#160;<a class="code" href="a00108.php#ga11fed607fa404e29e8da010f3ec128e4">hwloc_cuda_get_device_pcidev</a>(<a class="code" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, CUdevice cudevice)</div>
<div class="line"><a name="l00139"></a><span class="lineno">  139</span>&#160;{</div>
<div class="line"><a name="l00140"></a><span class="lineno">  140</span>&#160;  <span class="keywordtype">int</span> domain, bus, dev;</div>
<div class="line"><a name="l00141"></a><span class="lineno">  141</span>&#160;</div>
<div class="line"><a name="l00142"></a><span class="lineno">  142</span>&#160;  <span class="keywordflow">if</span> (<a class="code" href="a00108.php#ga1084285e8ff8b7df91c28917637481c6">hwloc_cuda_get_device_pci_ids</a>(topology, cudevice, &amp;domain, &amp;bus, &amp;dev))</div>
<div class="line"><a name="l00143"></a><span class="lineno">  143</span>&#160;    <span class="keywordflow">return</span> NULL;</div>
<div class="line"><a name="l00144"></a><span class="lineno">  144</span>&#160;</div>
<div class="line"><a name="l00145"></a><span class="lineno">  145</span>&#160;  <span class="keywordflow">return</span> <a class="code" href="a00095.php#gacdbaf0db98872e224b7883a84bfb0455">hwloc_get_pcidev_by_busid</a>(topology, domain, bus, dev, 0);</div>
<div class="line"><a name="l00146"></a><span class="lineno">  146</span>&#160;}</div>
<div class="line"><a name="l00147"></a><span class="lineno">  147</span>&#160;</div>
<div class="line"><a name="l00161"></a><span class="lineno">  161</span>&#160;<span class="keyword">static</span> __hwloc_inline <a class="code" href="a00036.php">hwloc_obj_t</a></div>
<div class="line"><a name="l00162"></a><span class="lineno"><a class="line" href="a00108.php#ga252cb72175f1a2d682f883a0add80a66">  162</a></span>&#160;<a class="code" href="a00108.php#ga252cb72175f1a2d682f883a0add80a66">hwloc_cuda_get_device_osdev</a>(<a class="code" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, CUdevice cudevice)</div>
<div class="line"><a name="l00163"></a><span class="lineno">  163</span>&#160;{</div>
<div class="line"><a name="l00164"></a><span class="lineno">  164</span>&#160;        <a class="code" href="a00036.php">hwloc_obj_t</a> osdev = NULL;</div>
<div class="line"><a name="l00165"></a><span class="lineno">  165</span>&#160;        <span class="keywordtype">int</span> domain, bus, dev;</div>
<div class="line"><a name="l00166"></a><span class="lineno">  166</span>&#160;</div>
<div class="line"><a name="l00167"></a><span class="lineno">  167</span>&#160;        <span class="keywordflow">if</span> (<a class="code" href="a00108.php#ga1084285e8ff8b7df91c28917637481c6">hwloc_cuda_get_device_pci_ids</a>(topology, cudevice, &amp;domain, &amp;bus, &amp;dev))</div>
<div class="line"><a name="l00168"></a><span class="lineno">  168</span>&#160;                <span class="keywordflow">return</span> NULL;</div>
<div class="line"><a name="l00169"></a><span class="lineno">  169</span>&#160;</div>
<div class="line"><a name="l00170"></a><span class="lineno">  170</span>&#160;        osdev = NULL;</div>
<div class="line"><a name="l00171"></a><span class="lineno">  171</span>&#160;        <span class="keywordflow">while</span> ((osdev = <a class="code" href="a00095.php#ga8b4584c8949e2c5f1c97ba7fe92b8145">hwloc_get_next_osdev</a>(topology, osdev)) != NULL) {</div>
<div class="line"><a name="l00172"></a><span class="lineno">  172</span>&#160;                <a class="code" href="a00036.php">hwloc_obj_t</a> pcidev = osdev-&gt;<a class="code" href="a00036.php#adc494f6aed939992be1c55cca5822900">parent</a>;</div>
<div class="line"><a name="l00173"></a><span class="lineno">  173</span>&#160;                <span class="keywordflow">if</span> (strncmp(osdev-&gt;<a class="code" href="a00036.php#abb709ec38f2970677e4e57d1d30be96d">name</a>, <span class="stringliteral">&quot;cuda&quot;</span>, 4))</div>
<div class="line"><a name="l00174"></a><span class="lineno">  174</span>&#160;                        <span class="keywordflow">continue</span>;</div>
<div class="line"><a name="l00175"></a><span class="lineno">  175</span>&#160;                <span class="keywordflow">if</span> (pcidev</div>
<div class="line"><a name="l00176"></a><span class="lineno">  176</span>&#160;                    &amp;&amp; pcidev-&gt;<a class="code" href="a00036.php#acc4f0803f244867e68fe0036800be5de">type</a> == <a class="code" href="a00074.php#ggacd37bb612667dc437d66bfb175a8dc55a5d8117a54df1fbd3606ab19e42cb0ea9">HWLOC_OBJ_PCI_DEVICE</a></div>
<div class="line"><a name="l00177"></a><span class="lineno">  177</span>&#160;                    &amp;&amp; (<span class="keywordtype">int</span>) pcidev-&gt;<a class="code" href="a00036.php#accd40e29f71f19e88db62ea3df02adc8">attr</a>-&gt;<a class="code" href="a00037.php#a4203d713ce0f5beaa6ee0e9bdac70828">pcidev</a>.<a class="code" href="a00042.php#a8fba44988deb98613c1505a4019a34dc">domain</a> == domain</div>
<div class="line"><a name="l00178"></a><span class="lineno">  178</span>&#160;                    &amp;&amp; (<span class="keywordtype">int</span>) pcidev-&gt;<a class="code" href="a00036.php#accd40e29f71f19e88db62ea3df02adc8">attr</a>-&gt;<a class="code" href="a00037.php#a4203d713ce0f5beaa6ee0e9bdac70828">pcidev</a>.<a class="code" href="a00042.php#aae99e035e8d1387d7b8768aaa8eceb0a">bus</a> == bus</div>
<div class="line"><a name="l00179"></a><span class="lineno">  179</span>&#160;                    &amp;&amp; (<span class="keywordtype">int</span>) pcidev-&gt;<a class="code" href="a00036.php#accd40e29f71f19e88db62ea3df02adc8">attr</a>-&gt;<a class="code" href="a00037.php#a4203d713ce0f5beaa6ee0e9bdac70828">pcidev</a>.<a class="code" href="a00042.php#a3d70c84a12f7e93d14c8d47bf4fd9dc5">dev</a> == dev</div>
<div class="line"><a name="l00180"></a><span class="lineno">  180</span>&#160;                    &amp;&amp; pcidev-&gt;<a class="code" href="a00036.php#accd40e29f71f19e88db62ea3df02adc8">attr</a>-&gt;<a class="code" href="a00037.php#a4203d713ce0f5beaa6ee0e9bdac70828">pcidev</a>.<a class="code" href="a00042.php#a695f32df53f4ef728670bfcf31b74e0f">func</a> == 0)</div>
<div class="line"><a name="l00181"></a><span class="lineno">  181</span>&#160;                        <span class="keywordflow">return</span> osdev;</div>
<div class="line"><a name="l00182"></a><span class="lineno">  182</span>&#160;        }</div>
<div class="line"><a name="l00183"></a><span class="lineno">  183</span>&#160;</div>
<div class="line"><a name="l00184"></a><span class="lineno">  184</span>&#160;        <span class="keywordflow">return</span> NULL;</div>
<div class="line"><a name="l00185"></a><span class="lineno">  185</span>&#160;}</div>
<div class="line"><a name="l00186"></a><span class="lineno">  186</span>&#160;</div>
<div class="line"><a name="l00202"></a><span class="lineno">  202</span>&#160;<span class="keyword">static</span> __hwloc_inline <a class="code" href="a00036.php">hwloc_obj_t</a></div>
<div class="line"><a name="l00203"></a><span class="lineno"><a class="line" href="a00108.php#ga12ee892994ed037e8f64bbffda02cf2e">  203</a></span>&#160;<a class="code" href="a00108.php#ga12ee892994ed037e8f64bbffda02cf2e">hwloc_cuda_get_device_osdev_by_index</a>(<a class="code" href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <span class="keywordtype">unsigned</span> idx)</div>
<div class="line"><a name="l00204"></a><span class="lineno">  204</span>&#160;{</div>
<div class="line"><a name="l00205"></a><span class="lineno">  205</span>&#160;        <a class="code" href="a00036.php">hwloc_obj_t</a> osdev = NULL;</div>
<div class="line"><a name="l00206"></a><span class="lineno">  206</span>&#160;        <span class="keywordflow">while</span> ((osdev = <a class="code" href="a00095.php#ga8b4584c8949e2c5f1c97ba7fe92b8145">hwloc_get_next_osdev</a>(topology, osdev)) != NULL) {</div>
<div class="line"><a name="l00207"></a><span class="lineno">  207</span>&#160;                <span class="keywordflow">if</span> (<a class="code" href="a00074.php#gga64f5d539df299c97ae80ce53fc4b56c0a46f8927e1c3e137eaa86cc8f6861fb83">HWLOC_OBJ_OSDEV_COPROC</a> == osdev-&gt;<a class="code" href="a00036.php#accd40e29f71f19e88db62ea3df02adc8">attr</a>-&gt;<a class="code" href="a00037.php#a22904c25fe44b323bab5c9bc52660fca">osdev</a>.<a class="code" href="a00041.php#a31e019e27e54ac6138d04be639bb96f9">type</a></div>
<div class="line"><a name="l00208"></a><span class="lineno">  208</span>&#160;                    &amp;&amp; osdev-&gt;<a class="code" href="a00036.php#abb709ec38f2970677e4e57d1d30be96d">name</a></div>
<div class="line"><a name="l00209"></a><span class="lineno">  209</span>&#160;                    &amp;&amp; !strncmp(<span class="stringliteral">&quot;cuda&quot;</span>, osdev-&gt;<a class="code" href="a00036.php#abb709ec38f2970677e4e57d1d30be96d">name</a>, 4)</div>
<div class="line"><a name="l00210"></a><span class="lineno">  210</span>&#160;                    &amp;&amp; atoi(osdev-&gt;<a class="code" href="a00036.php#abb709ec38f2970677e4e57d1d30be96d">name</a> + 4) == (<span class="keywordtype">int</span>) idx)</div>
<div class="line"><a name="l00211"></a><span class="lineno">  211</span>&#160;                        <span class="keywordflow">return</span> osdev;</div>
<div class="line"><a name="l00212"></a><span class="lineno">  212</span>&#160;        }</div>
<div class="line"><a name="l00213"></a><span class="lineno">  213</span>&#160;        <span class="keywordflow">return</span> NULL;</div>
<div class="line"><a name="l00214"></a><span class="lineno">  214</span>&#160;}</div>
<div class="line"><a name="l00215"></a><span class="lineno">  215</span>&#160;</div>
<div class="line"><a name="l00219"></a><span class="lineno">  219</span>&#160;<span class="preprocessor">#ifdef __cplusplus</span></div>
<div class="line"><a name="l00220"></a><span class="lineno">  220</span>&#160;} <span class="comment">/* extern &quot;C&quot; */</span></div>
<div class="line"><a name="l00221"></a><span class="lineno">  221</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00222"></a><span class="lineno">  222</span>&#160;</div>
<div class="line"><a name="l00223"></a><span class="lineno">  223</span>&#160;</div>
<div class="line"><a name="l00224"></a><span class="lineno">  224</span>&#160;<span class="preprocessor">#endif </span><span class="comment">/* HWLOC_CUDA_H */</span><span class="preprocessor"></span></div>
<div class="ttc" id="a00036_php"><div class="ttname"><a href="a00036.php">hwloc_obj</a></div><div class="ttdoc">Structure of a topology object. </div><div class="ttdef"><b>Definition:</b> hwloc.h:339</div></div>
<div class="ttc" id="a00042_php_a8fba44988deb98613c1505a4019a34dc"><div class="ttname"><a href="a00042.php#a8fba44988deb98613c1505a4019a34dc">hwloc_obj_attr_u::hwloc_pcidev_attr_s::domain</a></div><div class="ttdeci">unsigned short domain</div><div class="ttdef"><b>Definition:</b> hwloc.h:504</div></div>
<div class="ttc" id="a00096_php_ga036068a22d1aa5cb9ff1df348b525ff3"><div class="ttname"><a href="a00096.php#ga036068a22d1aa5cb9ff1df348b525ff3">hwloc_bitmap_copy</a></div><div class="ttdeci">void hwloc_bitmap_copy(hwloc_bitmap_t dst, hwloc_const_bitmap_t src)</div><div class="ttdoc">Copy the contents of bitmap src into the already allocated bitmap dst. </div></div>
<div class="ttc" id="a00103_php_gaa5a608236c3c0757b0b79818f1d429fb"><div class="ttname"><a href="a00103.php#gaa5a608236c3c0757b0b79818f1d429fb">hwloc_linux_parse_cpumap_file</a></div><div class="ttdeci">int hwloc_linux_parse_cpumap_file(FILE *file, hwloc_cpuset_t set)</div><div class="ttdoc">Convert a linux kernel cpumap file file into hwloc CPU set. </div></div>
<div class="ttc" id="a00042_php_a3d70c84a12f7e93d14c8d47bf4fd9dc5"><div class="ttname"><a href="a00042.php#a3d70c84a12f7e93d14c8d47bf4fd9dc5">hwloc_obj_attr_u::hwloc_pcidev_attr_s::dev</a></div><div class="ttdeci">unsigned char dev</div><div class="ttdef"><b>Definition:</b> hwloc.h:505</div></div>
<div class="ttc" id="a00108_php_ga12ee892994ed037e8f64bbffda02cf2e"><div class="ttname"><a href="a00108.php#ga12ee892994ed037e8f64bbffda02cf2e">hwloc_cuda_get_device_osdev_by_index</a></div><div class="ttdeci">static hwloc_obj_t hwloc_cuda_get_device_osdev_by_index(hwloc_topology_t topology, unsigned idx)</div><div class="ttdoc">Get the hwloc OS device object corresponding to the CUDA device whose index is idx. </div><div class="ttdef"><b>Definition:</b> cuda.h:203</div></div>
<div class="ttc" id="a00092_php_ga69fbad44c685e46d80ecf51a714ba9ce"><div class="ttname"><a href="a00092.php#ga69fbad44c685e46d80ecf51a714ba9ce">hwloc_topology_get_complete_cpuset</a></div><div class="ttdeci">static hwloc_const_cpuset_t hwloc_topology_get_complete_cpuset(hwloc_topology_t topology)</div><div class="ttdoc">Get complete CPU set. </div><div class="ttdef"><b>Definition:</b> helper.h:782</div></div>
<div class="ttc" id="a00042_php_a695f32df53f4ef728670bfcf31b74e0f"><div class="ttname"><a href="a00042.php#a695f32df53f4ef728670bfcf31b74e0f">hwloc_obj_attr_u::hwloc_pcidev_attr_s::func</a></div><div class="ttdeci">unsigned char func</div><div class="ttdef"><b>Definition:</b> hwloc.h:505</div></div>
<div class="ttc" id="a00095_php_ga8b4584c8949e2c5f1c97ba7fe92b8145"><div class="ttname"><a href="a00095.php#ga8b4584c8949e2c5f1c97ba7fe92b8145">hwloc_get_next_osdev</a></div><div class="ttdeci">static hwloc_obj_t hwloc_get_next_osdev(hwloc_topology_t topology, hwloc_obj_t prev)</div><div class="ttdoc">Get the next OS device in the system. </div><div class="ttdef"><b>Definition:</b> helper.h:1231</div></div>
<div class="ttc" id="a00036_php_adc494f6aed939992be1c55cca5822900"><div class="ttname"><a href="a00036.php#adc494f6aed939992be1c55cca5822900">hwloc_obj::parent</a></div><div class="ttdeci">struct hwloc_obj * parent</div><div class="ttdoc">Parent, NULL if root (system object) </div><div class="ttdef"><b>Definition:</b> hwloc.h:365</div></div>
<div class="ttc" id="a00074_php_gga64f5d539df299c97ae80ce53fc4b56c0a46f8927e1c3e137eaa86cc8f6861fb83"><div class="ttname"><a href="a00074.php#gga64f5d539df299c97ae80ce53fc4b56c0a46f8927e1c3e137eaa86cc8f6861fb83">HWLOC_OBJ_OSDEV_COPROC</a></div><div class="ttdoc">Operating system co-processor device. For instance "mic0" for a Xeon Phi (MIC) on Linux...</div><div class="ttdef"><b>Definition:</b> hwloc.h:278</div></div>
<div class="ttc" id="a00108_php_ga252cb72175f1a2d682f883a0add80a66"><div class="ttname"><a href="a00108.php#ga252cb72175f1a2d682f883a0add80a66">hwloc_cuda_get_device_osdev</a></div><div class="ttdeci">static hwloc_obj_t hwloc_cuda_get_device_osdev(hwloc_topology_t topology, CUdevice cudevice)</div><div class="ttdoc">Get the hwloc OS device object corresponding to CUDA device cudevice. </div><div class="ttdef"><b>Definition:</b> cuda.h:162</div></div>
<div class="ttc" id="a00036_php_acc4f0803f244867e68fe0036800be5de"><div class="ttname"><a href="a00036.php#acc4f0803f244867e68fe0036800be5de">hwloc_obj::type</a></div><div class="ttdeci">hwloc_obj_type_t type</div><div class="ttdoc">Type of object. </div><div class="ttdef"><b>Definition:</b> hwloc.h:341</div></div>
<div class="ttc" id="a00073_php_ga4bbf39b68b6f568fb92739e7c0ea7801"><div class="ttname"><a href="a00073.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a></div><div class="ttdeci">hwloc_bitmap_t hwloc_cpuset_t</div><div class="ttdoc">A CPU set is a bitmap whose bits are set according to CPU physical OS indexes. </div><div class="ttdef"><b>Definition:</b> hwloc.h:122</div></div>
<div class="ttc" id="a00108_php_ga1084285e8ff8b7df91c28917637481c6"><div class="ttname"><a href="a00108.php#ga1084285e8ff8b7df91c28917637481c6">hwloc_cuda_get_device_pci_ids</a></div><div class="ttdeci">static int hwloc_cuda_get_device_pci_ids(hwloc_topology_t topology, CUdevice cudevice, int *domain, int *bus, int *dev)</div><div class="ttdoc">Return the domain, bus and device IDs of the CUDA device cudevice. </div><div class="ttdef"><b>Definition:</b> cuda.h:47</div></div>
<div class="ttc" id="a00036_php_accd40e29f71f19e88db62ea3df02adc8"><div class="ttname"><a href="a00036.php#accd40e29f71f19e88db62ea3df02adc8">hwloc_obj::attr</a></div><div class="ttdeci">union hwloc_obj_attr_u * attr</div><div class="ttdoc">Object type-specific Attributes, may be NULL if no attribute value was found. </div><div class="ttdef"><b>Definition:</b> hwloc.h:347</div></div>
<div class="ttc" id="a00037_php_a22904c25fe44b323bab5c9bc52660fca"><div class="ttname"><a href="a00037.php#a22904c25fe44b323bab5c9bc52660fca">hwloc_obj_attr_u::osdev</a></div><div class="ttdeci">struct hwloc_obj_attr_u::hwloc_osdev_attr_s osdev</div></div>
<div class="ttc" id="a00041_php_a31e019e27e54ac6138d04be639bb96f9"><div class="ttname"><a href="a00041.php#a31e019e27e54ac6138d04be639bb96f9">hwloc_obj_attr_u::hwloc_osdev_attr_s::type</a></div><div class="ttdeci">hwloc_obj_osdev_type_t type</div><div class="ttdef"><b>Definition:</b> hwloc.h:528</div></div>
<div class="ttc" id="a00108_php_ga11fed607fa404e29e8da010f3ec128e4"><div class="ttname"><a href="a00108.php#ga11fed607fa404e29e8da010f3ec128e4">hwloc_cuda_get_device_pcidev</a></div><div class="ttdeci">static hwloc_obj_t hwloc_cuda_get_device_pcidev(hwloc_topology_t topology, CUdevice cudevice)</div><div class="ttdoc">Get the hwloc PCI device object corresponding to the CUDA device cudevice. </div><div class="ttdef"><b>Definition:</b> cuda.h:138</div></div>
<div class="ttc" id="a00037_php_a4203d713ce0f5beaa6ee0e9bdac70828"><div class="ttname"><a href="a00037.php#a4203d713ce0f5beaa6ee0e9bdac70828">hwloc_obj_attr_u::pcidev</a></div><div class="ttdeci">struct hwloc_obj_attr_u::hwloc_pcidev_attr_s pcidev</div></div>
<div class="ttc" id="a00036_php_abb709ec38f2970677e4e57d1d30be96d"><div class="ttname"><a href="a00036.php#abb709ec38f2970677e4e57d1d30be96d">hwloc_obj::name</a></div><div class="ttdeci">char * name</div><div class="ttdoc">Object description if any. </div><div class="ttdef"><b>Definition:</b> hwloc.h:343</div></div>
<div class="ttc" id="a00077_php_ga68ffdcfd9175cdf40709801092f18017"><div class="ttname"><a href="a00077.php#ga68ffdcfd9175cdf40709801092f18017">hwloc_topology_is_thissystem</a></div><div class="ttdeci">int hwloc_topology_is_thissystem(hwloc_topology_t restrict topology)</div><div class="ttdoc">Does the topology context come from this system? </div></div>
<div class="ttc" id="a00108_php_gaec41c6b4dc3361156beb7dea2a74f5a3"><div class="ttname"><a href="a00108.php#gaec41c6b4dc3361156beb7dea2a74f5a3">hwloc_cuda_get_device_cpuset</a></div><div class="ttdeci">static int hwloc_cuda_get_device_cpuset(hwloc_topology_t topology, CUdevice cudevice, hwloc_cpuset_t set)</div><div class="ttdoc">Get the CPU set of logical processors that are physically close to device cudevice. </div><div class="ttdef"><b>Definition:</b> cuda.h:92</div></div>
<div class="ttc" id="a00074_php_ggacd37bb612667dc437d66bfb175a8dc55a5d8117a54df1fbd3606ab19e42cb0ea9"><div class="ttname"><a href="a00074.php#ggacd37bb612667dc437d66bfb175a8dc55a5d8117a54df1fbd3606ab19e42cb0ea9">HWLOC_OBJ_PCI_DEVICE</a></div><div class="ttdoc">PCI device. These objects have neither CPU sets nor node sets. They are not added to the topology unl...</div><div class="ttdef"><b>Definition:</b> hwloc.h:228</div></div>
<div class="ttc" id="a00096_php_ga5b64be28f5a7176ed8ad0d6a90bdf108"><div class="ttname"><a href="a00096.php#ga5b64be28f5a7176ed8ad0d6a90bdf108">hwloc_bitmap_iszero</a></div><div class="ttdeci">int hwloc_bitmap_iszero(hwloc_const_bitmap_t bitmap)</div><div class="ttdoc">Test whether bitmap bitmap is empty. </div></div>
<div class="ttc" id="a00042_php_aae99e035e8d1387d7b8768aaa8eceb0a"><div class="ttname"><a href="a00042.php#aae99e035e8d1387d7b8768aaa8eceb0a">hwloc_obj_attr_u::hwloc_pcidev_attr_s::bus</a></div><div class="ttdeci">unsigned char bus</div><div class="ttdef"><b>Definition:</b> hwloc.h:505</div></div>
<div class="ttc" id="a00076_php_ga9d1e76ee15a7dee158b786c30b6a6e38"><div class="ttname"><a href="a00076.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a></div><div class="ttdeci">struct hwloc_topology * hwloc_topology_t</div><div class="ttdoc">Topology context. </div><div class="ttdef"><b>Definition:</b> hwloc.h:585</div></div>
<div class="ttc" id="a00095_php_gacdbaf0db98872e224b7883a84bfb0455"><div class="ttname"><a href="a00095.php#gacdbaf0db98872e224b7883a84bfb0455">hwloc_get_pcidev_by_busid</a></div><div class="ttdeci">static hwloc_obj_t hwloc_get_pcidev_by_busid(hwloc_topology_t topology, unsigned domain, unsigned bus, unsigned dev, unsigned func)</div><div class="ttdoc">Find the PCI device object matching the PCI bus id given domain, bus device and function PCI bus id...</div><div class="ttdef"><b>Definition:</b> helper.h:1194</div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");

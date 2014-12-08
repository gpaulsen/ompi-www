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
      <li class="current"><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li class="current"><a href="functions.php"><span>Data&#160;Fields</span></a></li>
    </ul>
  </div>
  <div id="navrow3" class="tabs2">
    <ul class="tablist">
      <li class="current"><a href="functions.php"><span>All</span></a></li>
      <li><a href="functions_vars.php"><span>Variables</span></a></li>
    </ul>
  </div>
  <div id="navrow4" class="tabs3">
    <ul class="tablist">
      <li><a href="#index_a"><span>a</span></a></li>
      <li><a href="#index_b"><span>b</span></a></li>
      <li><a href="#index_c"><span>c</span></a></li>
      <li><a href="#index_d"><span>d</span></a></li>
      <li><a href="#index_e"><span>e</span></a></li>
      <li><a href="#index_f"><span>f</span></a></li>
      <li><a href="#index_g"><span>g</span></a></li>
      <li><a href="#index_i"><span>i</span></a></li>
      <li><a href="#index_l"><span>l</span></a></li>
      <li><a href="#index_m"><span>m</span></a></li>
      <li><a href="#index_n"><span>n</span></a></li>
      <li><a href="#index_o"><span>o</span></a></li>
      <li><a href="#index_p"><span>p</span></a></li>
      <li><a href="#index_r"><span>r</span></a></li>
      <li><a href="#index_s"><span>s</span></a></li>
      <li><a href="#index_t"><span>t</span></a></li>
      <li><a href="#index_u"><span>u</span></a></li>
      <li class="current"><a href="#index_v"><span>v</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<div class="contents">
<div class="textblock">Here is a list of all struct and union fields with links to the structures/unions they belong to:</div>

<h3><a class="anchor" id="index_a"></a>- a -</h3><ul>
<li>abi
: <a class="el" href="a00032.php#a3250bd6fc9713946991d805e48091b2e">hwloc_component</a>
</li>
<li>alloc_membind
: <a class="el" href="a00053.php#ae551abb27d2aa9ce008583488b845b98">hwloc_topology_membind_support</a>
</li>
<li>allowed_cpuset
: <a class="el" href="a00036.php#afa3c59a6dd3da8ffa48710780a1bfb34">hwloc_obj</a>
</li>
<li>allowed_nodeset
: <a class="el" href="a00036.php#a19e3d0a5951a7510fc4fc4722a9bf531">hwloc_obj</a>
</li>
<li>arity
: <a class="el" href="a00036.php#aac3f6da35c9b57599909a44ce2b716c1">hwloc_obj</a>
</li>
<li>associativity
: <a class="el" href="a00031.php#ad06525e474d1e2d1423ed71bb998592d">hwloc_obj_attr_u::hwloc_cache_attr_s</a>
</li>
<li>attr
: <a class="el" href="a00036.php#accd40e29f71f19e88db62ea3df02adc8">hwloc_obj</a>
</li>
</ul>


<h3><a class="anchor" id="index_b"></a>- b -</h3><ul>
<li>bind_membind
: <a class="el" href="a00053.php#ae7cdb1f1b5f0242a69f85b5a5538c764">hwloc_topology_membind_support</a>
</li>
<li>bridge
: <a class="el" href="a00037.php#adbdf280699dd84c7619cd8d9edc0d958">hwloc_obj_attr_u</a>
</li>
<li>bus
: <a class="el" href="a00042.php#aae99e035e8d1387d7b8768aaa8eceb0a">hwloc_obj_attr_u::hwloc_pcidev_attr_s</a>
</li>
</ul>


<h3><a class="anchor" id="index_c"></a>- c -</h3><ul>
<li>cache
: <a class="el" href="a00037.php#ab5a8ae3bf490e6b1071fea53f7382836">hwloc_obj_attr_u</a>
</li>
<li>children
: <a class="el" href="a00036.php#a04d05403da37bfe17cd63b7c7dd07b1f">hwloc_obj</a>
</li>
<li>class_id
: <a class="el" href="a00042.php#aee735352d9f1686fd290fc6d6397c334">hwloc_obj_attr_u::hwloc_pcidev_attr_s</a>
</li>
<li>complete_cpuset
: <a class="el" href="a00036.php#a91788a9da687beb7224cc1fd7b75208c">hwloc_obj</a>
</li>
<li>complete_nodeset
: <a class="el" href="a00036.php#ac38c4012127525ef74c5615c526f4c2e">hwloc_obj</a>
</li>
<li>count
: <a class="el" href="a00039.php#aa5b9fa36f1dc47ff3c345fe4dd06b260">hwloc_obj_memory_s::hwloc_obj_memory_page_type_s</a>
</li>
<li>cpubind
: <a class="el" href="a00054.php#adef2bb91f74c3e70a2a071393caf5f56">hwloc_topology_support</a>
</li>
<li>cpuset
: <a class="el" href="a00036.php#a67925e0f2c47f50408fbdb9bddd0790f">hwloc_obj</a>
</li>
</ul>


<h3><a class="anchor" id="index_d"></a>- d -</h3><ul>
<li>data
: <a class="el" href="a00032.php#a4b8cffd1d943c29fdc102b841b8598d4">hwloc_component</a>
</li>
<li>depth
: <a class="el" href="a00036.php#a9d82690370275d42d652eccdea5d3ee5">hwloc_obj</a>
, <a class="el" href="a00030.php#a336c8b22893d5d734d8c9dfca4066b46">hwloc_obj_attr_u::hwloc_bridge_attr_s</a>
, <a class="el" href="a00031.php#a5c8f7f39193736c2187ed626940835d5">hwloc_obj_attr_u::hwloc_cache_attr_s</a>
, <a class="el" href="a00035.php#ad914eac61c77481e1b7037877bcc5579">hwloc_obj_attr_u::hwloc_group_attr_s</a>
</li>
<li>dev
: <a class="el" href="a00042.php#a3d70c84a12f7e93d14c8d47bf4fd9dc5">hwloc_obj_attr_u::hwloc_pcidev_attr_s</a>
</li>
<li>device_id
: <a class="el" href="a00042.php#a35b66064ab7d768caf7154e410caf0fa">hwloc_obj_attr_u::hwloc_pcidev_attr_s</a>
</li>
<li>diff
: <a class="el" href="a00046.php#a91f0645f9062e892652357cd141c8ebb">hwloc_topology_diff_u::hwloc_topology_diff_obj_attr_s</a>
</li>
<li>disable
: <a class="el" href="a00029.php#aea8210bbb2a885cbe2f3d213b00966a0">hwloc_backend</a>
</li>
<li>discover
: <a class="el" href="a00029.php#a1adfa49eb1eb832b56d097df8d37a660">hwloc_backend</a>
</li>
<li>discovery
: <a class="el" href="a00054.php#aea3fbd7653d987d81f848636c420504d">hwloc_topology_support</a>
</li>
<li>distances
: <a class="el" href="a00036.php#a9a5dd75596edc48fe834f81988cdc0d6">hwloc_obj</a>
</li>
<li>distances_count
: <a class="el" href="a00036.php#a8be6f63eca4da91000c832280db927b7">hwloc_obj</a>
</li>
<li>domain
: <a class="el" href="a00030.php#a2c31e565a5f0d23d0a0a3dd3ec8f4b17">hwloc_obj_attr_u::hwloc_bridge_attr_s</a>
, <a class="el" href="a00042.php#a8fba44988deb98613c1505a4019a34dc">hwloc_obj_attr_u::hwloc_pcidev_attr_s</a>
</li>
<li>downstream
: <a class="el" href="a00030.php#acaf1ae02e37182bbb6966f8c4f35e499">hwloc_obj_attr_u::hwloc_bridge_attr_s</a>
</li>
<li>downstream_type
: <a class="el" href="a00030.php#ac6a169b672d0e9f75756fd5665828b93">hwloc_obj_attr_u::hwloc_bridge_attr_s</a>
</li>
</ul>


<h3><a class="anchor" id="index_e"></a>- e -</h3><ul>
<li>excludes
: <a class="el" href="a00033.php#a34144f4d59bf46524e4875194652412b">hwloc_disc_component</a>
</li>
</ul>


<h3><a class="anchor" id="index_f"></a>- f -</h3><ul>
<li>finalize
: <a class="el" href="a00032.php#a8e6a3fbd401292460d8142210c7e5d32">hwloc_component</a>
</li>
<li>first_child
: <a class="el" href="a00036.php#af51d08a0a79dba517c06c5afedc8d2dc">hwloc_obj</a>
</li>
<li>firsttouch_membind
: <a class="el" href="a00053.php#a221098c339dbfab27bd2c9f5d32f123b">hwloc_topology_membind_support</a>
</li>
<li>flags
: <a class="el" href="a00029.php#aaa8eafe495aadd81c2e3c4ec527c10ba">hwloc_backend</a>
, <a class="el" href="a00032.php#ab8043c5b4cc0e81aabba586ccb194335">hwloc_component</a>
</li>
<li>func
: <a class="el" href="a00042.php#a695f32df53f4ef728670bfcf31b74e0f">hwloc_obj_attr_u::hwloc_pcidev_attr_s</a>
</li>
</ul>


<h3><a class="anchor" id="index_g"></a>- g -</h3><ul>
<li>generic
: <a class="el" href="a00048.php#a68039c178e9961023345e0728382773b">hwloc_topology_diff_obj_attr_u</a>
, <a class="el" href="a00051.php#af1882d9c9d37c735a0e9b04069fab01f">hwloc_topology_diff_u</a>
</li>
<li>get_area_membind
: <a class="el" href="a00053.php#a0a84e24a06f2fa487fe8c9605c6f68b3">hwloc_topology_membind_support</a>
</li>
<li>get_obj_cpuset
: <a class="el" href="a00029.php#a5715ebb86f3290a1d8c86fbec8a7dae7">hwloc_backend</a>
</li>
<li>get_proc_cpubind
: <a class="el" href="a00043.php#aae705bc447adc163ead377362c4dfe9f">hwloc_topology_cpubind_support</a>
</li>
<li>get_proc_last_cpu_location
: <a class="el" href="a00043.php#a2554620148b7992a5093f338f5ae254f">hwloc_topology_cpubind_support</a>
</li>
<li>get_proc_membind
: <a class="el" href="a00053.php#a9880cd2d605e316fc020167c49ca69ad">hwloc_topology_membind_support</a>
</li>
<li>get_thisproc_cpubind
: <a class="el" href="a00043.php#a77a09ddd78ee3e9ff5f532a6ac74f7eb">hwloc_topology_cpubind_support</a>
</li>
<li>get_thisproc_last_cpu_location
: <a class="el" href="a00043.php#ad2d5c94b738d92b7d2ede87e4e96321d">hwloc_topology_cpubind_support</a>
</li>
<li>get_thisproc_membind
: <a class="el" href="a00053.php#a3fd51e6fa5f0dd800322301b46b08559">hwloc_topology_membind_support</a>
</li>
<li>get_thisthread_cpubind
: <a class="el" href="a00043.php#a80d762e532d677dff262d83cc7bb1c60">hwloc_topology_cpubind_support</a>
</li>
<li>get_thisthread_last_cpu_location
: <a class="el" href="a00043.php#a6be1f042fdce6bf41b4ea39f6f193808">hwloc_topology_cpubind_support</a>
</li>
<li>get_thisthread_membind
: <a class="el" href="a00053.php#a63b0b2e26157b472f5717ee93cc7c535">hwloc_topology_membind_support</a>
</li>
<li>get_thread_cpubind
: <a class="el" href="a00043.php#a8dd4d8531ed2eebdce1507e7d104154e">hwloc_topology_cpubind_support</a>
</li>
<li>group
: <a class="el" href="a00037.php#ae4ba157cc313e2cdd9a82f1c1df7aaa6">hwloc_obj_attr_u</a>
</li>
</ul>


<h3><a class="anchor" id="index_i"></a>- i -</h3><ul>
<li>index
: <a class="el" href="a00049.php#adb772c3f1761ecadf496c80ae14afce3">hwloc_topology_diff_obj_attr_u::hwloc_topology_diff_obj_attr_uint64_s</a>
</li>
<li>infos
: <a class="el" href="a00036.php#ad59bcd73a10260a0e239be5c4b5888bb">hwloc_obj</a>
</li>
<li>infos_count
: <a class="el" href="a00036.php#a9843acc28cfbba903b63ea14b137ff70">hwloc_obj</a>
</li>
<li>init
: <a class="el" href="a00032.php#a610b612f198afa7324c3e720149e416b">hwloc_component</a>
</li>
<li>instantiate
: <a class="el" href="a00033.php#ad724ca2e525851042a70cab48481d048">hwloc_disc_component</a>
</li>
<li>interleave_membind
: <a class="el" href="a00053.php#a3c44c6012860bbeba8a0f4c19710858d">hwloc_topology_membind_support</a>
</li>
<li>is_custom
: <a class="el" href="a00029.php#a5209e6508c110dcd4c3c296466f07cb3">hwloc_backend</a>
</li>
<li>is_thissystem
: <a class="el" href="a00029.php#ab8806f6db077f1bb2e9d63ec99223f7a">hwloc_backend</a>
</li>
</ul>


<h3><a class="anchor" id="index_l"></a>- l -</h3><ul>
<li>last_child
: <a class="el" href="a00036.php#a84bd65634dbc55f4158b74443a9bd04f">hwloc_obj</a>
</li>
<li>latency
: <a class="el" href="a00034.php#a0f70f48d1bfb18e5e2008825da2967c9">hwloc_distances_s</a>
</li>
<li>latency_base
: <a class="el" href="a00034.php#a204416418049a272bfb51602fc676342">hwloc_distances_s</a>
</li>
<li>latency_max
: <a class="el" href="a00034.php#aab61bd1d1ae2e121bfe793c973ec829e">hwloc_distances_s</a>
</li>
<li>linesize
: <a class="el" href="a00031.php#a801e8a668e28caf06c8b88e9ae5c10db">hwloc_obj_attr_u::hwloc_cache_attr_s</a>
</li>
<li>linkspeed
: <a class="el" href="a00042.php#a59b2fce35f7cbde86c4fd305d0ccda5f">hwloc_obj_attr_u::hwloc_pcidev_attr_s</a>
</li>
<li>local_memory
: <a class="el" href="a00040.php#aace044c7f3fd9dffe50202296bf1dc5a">hwloc_obj_memory_s</a>
</li>
<li>logical_index
: <a class="el" href="a00036.php#a0d07fb7b8935e137c94d75a3eb492ae9">hwloc_obj</a>
</li>
</ul>


<h3><a class="anchor" id="index_m"></a>- m -</h3><ul>
<li>membind
: <a class="el" href="a00054.php#ac6eb62ae8bc0a68dce679a7107a36194">hwloc_topology_support</a>
</li>
<li>memory
: <a class="el" href="a00036.php#a1dc830816716213b5f797e4052487864">hwloc_obj</a>
</li>
<li>migrate_membind
: <a class="el" href="a00053.php#aafa7683871a6a760246f9b35209caec5">hwloc_topology_membind_support</a>
</li>
</ul>


<h3><a class="anchor" id="index_n"></a>- n -</h3><ul>
<li>name
: <a class="el" href="a00033.php#a4064c3b5d9213027e87caebef380a840">hwloc_disc_component</a>
, <a class="el" href="a00036.php#abb709ec38f2970677e4e57d1d30be96d">hwloc_obj</a>
, <a class="el" href="a00038.php#a115dde58f40338a2d3276d59c099857d">hwloc_obj_info_s</a>
, <a class="el" href="a00047.php#a7ef48c66ccddf34d90edb4e4314b41c6">hwloc_topology_diff_obj_attr_u::hwloc_topology_diff_obj_attr_string_s</a>
</li>
<li>nbobjs
: <a class="el" href="a00034.php#a4ca2af858cebbce7324ec49903d09474">hwloc_distances_s</a>
</li>
<li>newvalue
: <a class="el" href="a00047.php#a75f37f4add21cece50fee2701c3b77db">hwloc_topology_diff_obj_attr_u::hwloc_topology_diff_obj_attr_string_s</a>
, <a class="el" href="a00049.php#ae63aa59ad65aa783b730a4f213304eb4">hwloc_topology_diff_obj_attr_u::hwloc_topology_diff_obj_attr_uint64_s</a>
</li>
<li>next
: <a class="el" href="a00044.php#a720aa94eb73cddfd8d6bf9fcbbfc035e">hwloc_topology_diff_u::hwloc_topology_diff_generic_s</a>
, <a class="el" href="a00046.php#acb9170a8eb3392656d70f7f3ef3e3eed">hwloc_topology_diff_u::hwloc_topology_diff_obj_attr_s</a>
, <a class="el" href="a00050.php#a375afbaa043b109be689a7d9a3c7d153">hwloc_topology_diff_u::hwloc_topology_diff_too_complex_s</a>
</li>
<li>next_cousin
: <a class="el" href="a00036.php#a85a788017457129589318b6c39451acf">hwloc_obj</a>
</li>
<li>next_sibling
: <a class="el" href="a00036.php#a7f2343ed476fe4942e6fffd4cade1b40">hwloc_obj</a>
</li>
<li>nexttouch_membind
: <a class="el" href="a00053.php#ab0921af6e0cd6975812a80b8e5c7435c">hwloc_topology_membind_support</a>
</li>
<li>nodeset
: <a class="el" href="a00036.php#a08f0d0e16c619a6e653526cbee4ffea3">hwloc_obj</a>
</li>
<li>notify_new_object
: <a class="el" href="a00029.php#afade8464c2b52d0cc63a705f556e81ed">hwloc_backend</a>
</li>
</ul>


<h3><a class="anchor" id="index_o"></a>- o -</h3><ul>
<li>obj_attr
: <a class="el" href="a00051.php#a7245713f0f49e9f08fda28401a4f98fd">hwloc_topology_diff_u</a>
</li>
<li>obj_depth
: <a class="el" href="a00046.php#aa28a121d9e158b1e610fb844ae1c8824">hwloc_topology_diff_u::hwloc_topology_diff_obj_attr_s</a>
, <a class="el" href="a00050.php#a77e9eac7db8b073c9bf996f19eda1631">hwloc_topology_diff_u::hwloc_topology_diff_too_complex_s</a>
</li>
<li>obj_index
: <a class="el" href="a00046.php#adb9f4d414470b6670cde8d90759a6c1c">hwloc_topology_diff_u::hwloc_topology_diff_obj_attr_s</a>
, <a class="el" href="a00050.php#a6dc6b3c4adb10db74d993e37afaa0580">hwloc_topology_diff_u::hwloc_topology_diff_too_complex_s</a>
</li>
<li>oldvalue
: <a class="el" href="a00047.php#a33cc281d4417129064295a6ae7b79818">hwloc_topology_diff_obj_attr_u::hwloc_topology_diff_obj_attr_string_s</a>
, <a class="el" href="a00049.php#a44c0894dce563335d347fde6595c49c9">hwloc_topology_diff_obj_attr_u::hwloc_topology_diff_obj_attr_uint64_s</a>
</li>
<li>online_cpuset
: <a class="el" href="a00036.php#a8842d56c2975380f327ea401c5f53564">hwloc_obj</a>
</li>
<li>os_index
: <a class="el" href="a00036.php#a61a7a80a68eaccbaaa28269e678c81a9">hwloc_obj</a>
</li>
<li>os_level
: <a class="el" href="a00036.php#a68766f0b1c4d61b5bad87e3b81dacfde">hwloc_obj</a>
</li>
<li>osdev
: <a class="el" href="a00037.php#a22904c25fe44b323bab5c9bc52660fca">hwloc_obj_attr_u</a>
</li>
</ul>


<h3><a class="anchor" id="index_p"></a>- p -</h3><ul>
<li>page_types
: <a class="el" href="a00040.php#a865eba7b12b986d72dbe7a2cfd97c50d">hwloc_obj_memory_s</a>
</li>
<li>page_types_len
: <a class="el" href="a00040.php#a208c27f4491077d7fb9ba5db8b29cb57">hwloc_obj_memory_s</a>
</li>
<li>parent
: <a class="el" href="a00036.php#adc494f6aed939992be1c55cca5822900">hwloc_obj</a>
</li>
<li>pci
: <a class="el" href="a00030.php#ab5c564e7c95b747dae9eb84ec0a2c31e">hwloc_obj_attr_u::hwloc_bridge_attr_s</a>
</li>
<li>pcidev
: <a class="el" href="a00037.php#a4203d713ce0f5beaa6ee0e9bdac70828">hwloc_obj_attr_u</a>
</li>
<li>prev_cousin
: <a class="el" href="a00036.php#ac715989f55ff5a0eb6be2969ee477ec0">hwloc_obj</a>
</li>
<li>prev_sibling
: <a class="el" href="a00036.php#a7b89e8c189876c0158a9282aaaf17f50">hwloc_obj</a>
</li>
<li>priority
: <a class="el" href="a00033.php#ae86d283c272c5ae24073a235efbf6b59">hwloc_disc_component</a>
</li>
<li>private_data
: <a class="el" href="a00029.php#a2ea5bd36b7f06efdb65b98b32af16c68">hwloc_backend</a>
</li>
<li>pu
: <a class="el" href="a00052.php#ad7bb4ecf7a82f5a04fc632e9592ad3ab">hwloc_topology_discovery_support</a>
</li>
</ul>


<h3><a class="anchor" id="index_r"></a>- r -</h3><ul>
<li>relative_depth
: <a class="el" href="a00034.php#a6fe066eaf62ee448aa05bab8e7217ff7">hwloc_distances_s</a>
</li>
<li>replicate_membind
: <a class="el" href="a00053.php#afe608fb85eb2aa9706221ccb5fc4d415">hwloc_topology_membind_support</a>
</li>
<li>revision
: <a class="el" href="a00042.php#a13ad54c93d08d8ac808e4de9674c5ee7">hwloc_obj_attr_u::hwloc_pcidev_attr_s</a>
</li>
</ul>


<h3><a class="anchor" id="index_s"></a>- s -</h3><ul>
<li>secondary_bus
: <a class="el" href="a00030.php#ae2d9dd73ef1d32045c584a8e66d2f83f">hwloc_obj_attr_u::hwloc_bridge_attr_s</a>
</li>
<li>set_area_membind
: <a class="el" href="a00053.php#a476c06f96b65c08b287cf2369966123b">hwloc_topology_membind_support</a>
</li>
<li>set_proc_cpubind
: <a class="el" href="a00043.php#aa166223d1c2a6de7256ab2d8b675a87e">hwloc_topology_cpubind_support</a>
</li>
<li>set_proc_membind
: <a class="el" href="a00053.php#a756f44912894b176bf979a1b65f12aac">hwloc_topology_membind_support</a>
</li>
<li>set_thisproc_cpubind
: <a class="el" href="a00043.php#a9403d51657a4d546b3ea9553a2973a27">hwloc_topology_cpubind_support</a>
</li>
<li>set_thisproc_membind
: <a class="el" href="a00053.php#a36b3e388df9c6a249427cab7e3724749">hwloc_topology_membind_support</a>
</li>
<li>set_thisthread_cpubind
: <a class="el" href="a00043.php#a57a89a4b5f1f74fa6cfe176f1e8b0798">hwloc_topology_cpubind_support</a>
</li>
<li>set_thisthread_membind
: <a class="el" href="a00053.php#a0697af2e41f2e82b8ce71e3cc13f7eac">hwloc_topology_membind_support</a>
</li>
<li>set_thread_cpubind
: <a class="el" href="a00043.php#a46fba33e307909ce256624687799dd6d">hwloc_topology_cpubind_support</a>
</li>
<li>sibling_rank
: <a class="el" href="a00036.php#aaa6043eee6f55869933c1d974efd9acd">hwloc_obj</a>
</li>
<li>size
: <a class="el" href="a00031.php#abe5e788943ed04302976740c829674c0">hwloc_obj_attr_u::hwloc_cache_attr_s</a>
, <a class="el" href="a00039.php#a3f1d261766352288791512974665ce01">hwloc_obj_memory_s::hwloc_obj_memory_page_type_s</a>
</li>
<li>string
: <a class="el" href="a00048.php#a518a48e13168c31957589ce78820163e">hwloc_topology_diff_obj_attr_u</a>
</li>
<li>subdevice_id
: <a class="el" href="a00042.php#acac741aecd7a6db64f33409427e3971f">hwloc_obj_attr_u::hwloc_pcidev_attr_s</a>
</li>
<li>subordinate_bus
: <a class="el" href="a00030.php#af3f3f7d76bf03e8d2afa721c2b8d6771">hwloc_obj_attr_u::hwloc_bridge_attr_s</a>
</li>
<li>subvendor_id
: <a class="el" href="a00042.php#a499db3d8cc89eaba04fcaef3df1cba97">hwloc_obj_attr_u::hwloc_pcidev_attr_s</a>
</li>
<li>symmetric_subtree
: <a class="el" href="a00036.php#a0f41a1d67dc6b661906f2217563637f3">hwloc_obj</a>
</li>
</ul>


<h3><a class="anchor" id="index_t"></a>- t -</h3><ul>
<li>too_complex
: <a class="el" href="a00051.php#adaaabee4029a455119ec3695c19632d6">hwloc_topology_diff_u</a>
</li>
<li>total_memory
: <a class="el" href="a00040.php#a8befd0b3f4f8b695cafed04b31f36a44">hwloc_obj_memory_s</a>
</li>
<li>type
: <a class="el" href="a00032.php#a789208ada7e17492cfd3a5a88a6bb0ee">hwloc_component</a>
, <a class="el" href="a00033.php#ad070350354cbd665803fc86fe48cdb3d">hwloc_disc_component</a>
, <a class="el" href="a00036.php#acc4f0803f244867e68fe0036800be5de">hwloc_obj</a>
, <a class="el" href="a00031.php#ad8edc8ded2b7a70d6abbc874801930f4">hwloc_obj_attr_u::hwloc_cache_attr_s</a>
, <a class="el" href="a00041.php#a31e019e27e54ac6138d04be639bb96f9">hwloc_obj_attr_u::hwloc_osdev_attr_s</a>
, <a class="el" href="a00045.php#a43f8133b7c30129b002c2d295e6580fc">hwloc_topology_diff_obj_attr_u::hwloc_topology_diff_obj_attr_generic_s</a>
, <a class="el" href="a00047.php#a784ab5827c1bf531b86d1f02f199d04d">hwloc_topology_diff_obj_attr_u::hwloc_topology_diff_obj_attr_string_s</a>
, <a class="el" href="a00049.php#afe262b9aa558fe7bfecbd37a7a129197">hwloc_topology_diff_obj_attr_u::hwloc_topology_diff_obj_attr_uint64_s</a>
, <a class="el" href="a00044.php#a373005489fcddeba6319163e60263ae8">hwloc_topology_diff_u::hwloc_topology_diff_generic_s</a>
, <a class="el" href="a00046.php#a70a118ad288bd98f18c8ce6dc52e2d10">hwloc_topology_diff_u::hwloc_topology_diff_obj_attr_s</a>
, <a class="el" href="a00050.php#a92084295a4d6faf17a95a7eea526ddbd">hwloc_topology_diff_u::hwloc_topology_diff_too_complex_s</a>
</li>
</ul>


<h3><a class="anchor" id="index_u"></a>- u -</h3><ul>
<li>uint64
: <a class="el" href="a00048.php#abb15bfa7039ca8c97cd7ddfbdf779efa">hwloc_topology_diff_obj_attr_u</a>
</li>
<li>upstream
: <a class="el" href="a00030.php#a00ce9d99fc8792d1044fe25dc58605fe">hwloc_obj_attr_u::hwloc_bridge_attr_s</a>
</li>
<li>upstream_type
: <a class="el" href="a00030.php#a265dd2164aa2df4972e25a029da72125">hwloc_obj_attr_u::hwloc_bridge_attr_s</a>
</li>
<li>userdata
: <a class="el" href="a00036.php#a76fd3ac94401cf32dfccc3a3a8de68a5">hwloc_obj</a>
</li>
</ul>


<h3><a class="anchor" id="index_v"></a>- v -</h3><ul>
<li>value
: <a class="el" href="a00038.php#a522efd7f5262a4493a73fa3476a041ce">hwloc_obj_info_s</a>
</li>
<li>vendor_id
: <a class="el" href="a00042.php#aad970ad19b62eb2d5df30e4802da4f4c">hwloc_obj_attr_u::hwloc_pcidev_attr_s</a>
</li>
</ul>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");

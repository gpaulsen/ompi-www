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
<div class="title">Manipulating Object Type, Sets and Attributes as Strings</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:ga5ca0bf94bbbb080d0eff17a57bd90422"><td class="memItemLeft" align="right" valign="top">const char *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00081.php#ga5ca0bf94bbbb080d0eff17a57bd90422">hwloc_obj_type_string</a> (<a class="el" href="a00076.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type)</td></tr>
<tr class="separator:ga5ca0bf94bbbb080d0eff17a57bd90422"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga8f8452fa8e707cad59b8a73a6fa06059"><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00081.php#ga8f8452fa8e707cad59b8a73a6fa06059">hwloc_obj_type_sscanf</a> (const char *string, <a class="el" href="a00076.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> *typep, int *depthattrp, void *typeattrp, size_t typeattrsize)</td></tr>
<tr class="separator:ga8f8452fa8e707cad59b8a73a6fa06059"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gadb8765c260edea80c52cd06a76639ba4"><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00081.php#gadb8765c260edea80c52cd06a76639ba4">hwloc_obj_type_snprintf</a> (char *restrict string, size_t size, <a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> obj, int verbose)</td></tr>
<tr class="separator:gadb8765c260edea80c52cd06a76639ba4"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga870e876931c282a1c7aee2f031912ce3"><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00081.php#ga870e876931c282a1c7aee2f031912ce3">hwloc_obj_attr_snprintf</a> (char *restrict string, size_t size, <a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> obj, const char *restrict separator, int verbose)</td></tr>
<tr class="separator:ga870e876931c282a1c7aee2f031912ce3"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga8e0472dfa655c68c0c9072e1ee3a1e03"><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00081.php#ga8e0472dfa655c68c0c9072e1ee3a1e03">hwloc_obj_cpuset_snprintf</a> (char *restrict str, size_t size, size_t nobj, const <a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> *restrict objs)</td></tr>
<tr class="separator:ga8e0472dfa655c68c0c9072e1ee3a1e03"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gab358661a92bb27d8542b255cc9f6f25e"><td class="memItemLeft" align="right" valign="top">static const char *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00081.php#gab358661a92bb27d8542b255cc9f6f25e">hwloc_obj_get_info_by_name</a> (<a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> obj, const char *name)</td></tr>
<tr class="separator:gab358661a92bb27d8542b255cc9f6f25e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga7e90c5398a9d77df31d7d45faf0f316b"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00081.php#ga7e90c5398a9d77df31d7d45faf0f316b">hwloc_obj_add_info</a> (<a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> obj, const char *name, const char *value)</td></tr>
<tr class="separator:ga7e90c5398a9d77df31d7d45faf0f316b"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<h2 class="groupheader">Function Documentation</h2>
<a class="anchor" id="ga7e90c5398a9d77df31d7d45faf0f316b"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void hwloc_obj_add_info </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>obj</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const char *&#160;</td>
          <td class="paramname"><em>name</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const char *&#160;</td>
          <td class="paramname"><em>value</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Add the given info name and value pair to the given object. </p>
<p>The info is appended to the existing info array even if another key with the same name already exists.</p>
<p>The input strings are copied before being added in the object infos.</p>
<dl class="section note"><dt>Note</dt><dd>This function may be used to enforce object colors in the lstopo graphical output by using "lstopoStyle" as a name and "Background=#rrggbb" as a value. See CUSTOM COLORS in the lstopo(1) manpage for details.</dd>
<dd>
If <code>value</code> contains some non-printable characters, they will be dropped when exporting to XML, see <a class="el" href="a00086.php#ga2bf166eda4d3605362ac86f77684002a" title="Export the topology into an XML file. ">hwloc_topology_export_xml()</a>. </dd></dl>

</div>
</div>
<a class="anchor" id="ga870e876931c282a1c7aee2f031912ce3"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int hwloc_obj_attr_snprintf </td>
          <td>(</td>
          <td class="paramtype">char *restrict&#160;</td>
          <td class="paramname"><em>string</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">size_t&#160;</td>
          <td class="paramname"><em>size</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>obj</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const char *restrict&#160;</td>
          <td class="paramname"><em>separator</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"><em>verbose</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Stringify the attributes of a given topology object into a human-readable form. </p>
<p>Attribute values are separated by <code>separator</code>.</p>
<p>Only the major attributes are printed in non-verbose mode.</p>
<p>If <code>size</code> is 0, <code>string</code> may safely be <code>NULL</code>.</p>
<dl class="section return"><dt>Returns</dt><dd>the number of character that were actually written if not truncating, or that would have been written (not including the ending \0). </dd></dl>

</div>
</div>
<a class="anchor" id="ga8e0472dfa655c68c0c9072e1ee3a1e03"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int hwloc_obj_cpuset_snprintf </td>
          <td>(</td>
          <td class="paramtype">char *restrict&#160;</td>
          <td class="paramname"><em>str</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">size_t&#160;</td>
          <td class="paramname"><em>size</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">size_t&#160;</td>
          <td class="paramname"><em>nobj</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> *restrict&#160;</td>
          <td class="paramname"><em>objs</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Stringify the cpuset containing a set of objects. </p>
<p>If <code>size</code> is 0, <code>string</code> may safely be <code>NULL</code>.</p>
<dl class="section return"><dt>Returns</dt><dd>the number of character that were actually written if not truncating, or that would have been written (not including the ending \0). </dd></dl>

</div>
</div>
<a class="anchor" id="gab358661a92bb27d8542b255cc9f6f25e"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static const char* hwloc_obj_get_info_by_name </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>obj</em>, </td>
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

<p>Search the given key name in object infos and return the corresponding value. </p>
<p>If multiple keys match the given name, only the first one is returned.</p>
<dl class="section return"><dt>Returns</dt><dd><code>NULL</code> if no such key exists. </dd></dl>

</div>
</div>
<a class="anchor" id="gadb8765c260edea80c52cd06a76639ba4"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int hwloc_obj_type_snprintf </td>
          <td>(</td>
          <td class="paramtype">char *restrict&#160;</td>
          <td class="paramname"><em>string</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">size_t&#160;</td>
          <td class="paramname"><em>size</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00077.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>obj</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"><em>verbose</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Stringify the type of a given topology object into a human-readable form. </p>
<p>It differs from <a class="el" href="a00081.php#ga5ca0bf94bbbb080d0eff17a57bd90422" title="Return a stringified topology object type. ">hwloc_obj_type_string()</a> because it prints type attributes such as cache depth and type.</p>
<p>If <code>size</code> is 0, <code>string</code> may safely be <code>NULL</code>.</p>
<dl class="section return"><dt>Returns</dt><dd>the number of character that were actually written if not truncating, or that would have been written (not including the ending \0). </dd></dl>

</div>
</div>
<a class="anchor" id="ga8f8452fa8e707cad59b8a73a6fa06059"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int hwloc_obj_type_sscanf </td>
          <td>(</td>
          <td class="paramtype">const char *&#160;</td>
          <td class="paramname"><em>string</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00076.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> *&#160;</td>
          <td class="paramname"><em>typep</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int *&#160;</td>
          <td class="paramname"><em>depthattrp</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">void *&#160;</td>
          <td class="paramname"><em>typeattrp</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">size_t&#160;</td>
          <td class="paramname"><em>typeattrsize</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Return an object type and attributes from a type string. </p>
<p>Convert strings such as "Package" or "Cache" into the corresponding types. Matching is case-insensitive, and only the first letters are actually required to match.</p>
<p>Types that have specific attributes, for instance caches and groups, may be returned in <code>depthattrp</code> and <code>typeattrp</code>. They are ignored when these pointers are <code>NULL</code>.</p>
<p>For instance "L2i" or "L2iCache" would return type HWLOC_OBJ_CACHE in <code>typep</code>, 2 in <code>depthattrp</code>, and HWLOC_OBJ_CACHE_TYPE_INSTRUCTION in <code>typeattrp</code> (this last pointer should point to a hwloc_obj_cache_type_t). "Group3" would return type HWLOC_OBJ_GROUP type and 3 in <code>depthattrp</code>. Attributes that are not specified in the string (for instance "Group" without a depth, or "L2Cache" without a cache type) are set to -1.</p>
<p><code>typeattrp</code> is only filled if the size specified in <code>typeattrsize</code> is large enough. It is currently only used for caches, and the required size is at least the size of hwloc_obj_cache_type_t.</p>
<dl class="section return"><dt>Returns</dt><dd>0 if a type was correctly identified, otherwise -1.</dd></dl>
<dl class="section note"><dt>Note</dt><dd>This is an extended version of the now deprecated hwloc_obj_type_of_string() </dd></dl>

</div>
</div>
<a class="anchor" id="ga5ca0bf94bbbb080d0eff17a57bd90422"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">const char* hwloc_obj_type_string </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00076.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td>
          <td class="paramname"><em>type</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Return a stringified topology object type. </p>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");

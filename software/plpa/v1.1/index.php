<?php
$topdir = "../../..";

include_once("$topdir/software/plpa/v1.1/version.inc");
$title = "Portable Linux Processor Affinity (PLPA): Version $ver_v1_1";

include_once("$topdir/projects/plpa/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/downloads.inc");

$md5 = read_checksums("downloads/md5sums.txt");
$sha1 = read_checksums("downloads/sha1sums.txt");

#############################################################################
#
# Current stable release
#
#############################################################################

$t_stable = new downloadTable("./downloads", "./downloads", 
			      dirname($_SERVER["PHP_SELF"]));

if (isset($t_stable)) {
    $src = "Version $ver_v1_1";
    $name = "plpa-$ver_v1_1.tar";
    $t_stable->addFile($src, "$name.bz2", $md5["$name.bz2"], $sha1["$name.bz2"]);
    $t_stable->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
}

#############################################################################
#
# Prereleases
#
#############################################################################

#$t_prerelease = new downloadTable("./downloads", "./downloads",
#				  dirname($_SERVER["PHP_SELF"]));

if (isset($t_prerelease)) {
    $s = "v1.1.1 pre-release";
    $fp = fopen("downloads/latest_snapshot.txt", "r");
    $v = fgets($fp);
    fclose($fp);
    $v = substr($v, 0, strlen($v) - 1);

    $name = "plpa-$v.tar";
    $t_prerelease->addFile($s, "$name.bz2", $md5["$name.bz2"], 
			   $sha1["$name.bz2"]);
    $t_prerelease->addFile($s, "$name.gz", $md5["$name.gz"], 
			   $sha1["$name.gz"]);
}

#############################################################################
#
# Older releases
#
#############################################################################

$t_older = new downloadTable("./downloads", "./downloads",
			     dirname($_SERVER["PHP_SELF"]));

if (isset($t_older)) {
    $ver = "1.1";
    $src = "Version $ver";
    $name = "plpa-$ver.tar";
    $t_older->addFile($src, "$name.bz2", $md5["$name.bz2"], $sha1["$name.bz2"]);
    $t_older->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
}

#############################################################################
#
# Main display part of the page
#
#############################################################################

$project = "PLPA";
include_once("$topdir/projects/plpa/deprecated.inc");
?>

<P><?php $dir = "svn.open-mpi.org/svn/plpa/branches/v1.1/NEWS";
      print("<a href=\"http://$dir\">"); ?>This
file</a> contains a list of changes between the releases in the PLPA
releases in the v1.1 series</p>

<?php
if (isset($t_stable)) {
    print("<p>Current stable release:</p>\n\n<p>\n<div align=center>\n\n");
    $t_stable->printMe();
}
if (isset($t_prerelease)) {
    print("</div>\n\n<p>Prerelease:</p>\n\n<p>\n<div align=center>\n\n");
     $t_prerelease->printMe();
}
if (isset($t_older)) {
    print("</div>\n\n<p>Previous releases:</p>\n\n<p>\n<div align=center>\n\n");
    $t_older->printMe();
}
?>
</div>
</p>

<?php 
  include_once("$topdir/includes/footer.inc");

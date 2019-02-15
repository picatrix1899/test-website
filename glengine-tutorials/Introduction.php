<?php
include '../md-reader.php';
include 'glengine-tutorials.php';

$currentId = 'introduction';
$breadcrumbs[] = array('name' => 'Introduction', 'link' => 'glengine-tutorials/Introduction.php');

$content = getHTMLFromMD('Introduction.md');

include '../sitetemplate.php';
?>
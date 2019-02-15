<?php
include '../md-reader.php';
include 'glengine-tutorials.php';

$breadcrumbs[] = array('name' => 'Window', 'link' => 'glengine-tutorials/Window.php');
$currentId = 'window';

$content = getHTMLFromMD('Window.md');

include '../sitetemplate.php';
?>
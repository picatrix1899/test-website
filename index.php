<?php
  
include 'md-reader.php';

  $content = getHTMLFromMD('home.md');

  $links = array();  

  $breadcrumbs = array(
    array('name' => 'Home', 'link' => '', 'current' => true),
  );



  include 'sitetemplate.php';
?>
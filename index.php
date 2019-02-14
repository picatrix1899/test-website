<?php
  
  $content = '';

  $handle = fopen("home.md", "r");
  if ($handle) {
      while (($line = fgets($handle)) !== false) {
         $content = $content . $line;
      }
  
      fclose($handle);
  } else {
      die("Error opening File!");
  } 

  $links = array();  

  $breadcrumbs = array(
    array('name' => 'Home', 'link' => '', 'current' => true),
  );



  include 'sitetemplate.php';
?>
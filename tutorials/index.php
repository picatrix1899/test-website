<?php
  $links = array(
    array('name' => 'Tutorial 1', 'link' => 'tutorials/tutorial1.php', 'current' => false),
    array('name' => 'Tutorial 2', 'link' => 'tutorials/tutorial2.php', 'current' => false),
  );  

  $breadcrumbs = array(
    array('name' => 'Tutorials', 'link' => 'tutorials/', 'current' => true),
  );

  $content = '# Tutorials';

  include '../sitetemplate.php';
?>
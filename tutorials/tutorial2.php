<?php
  $links = array(
    array('name' => 'Tutorial 1', 'link' => 'tutorials/tutorial1.php', 'current' => false),
    array('name' => 'Tutorial 2', 'link' => 'tutorials/tutorial2.php', 'current' => true),
  );  

  $breadcrumbs = array(
    array('name' => 'Tutorials', 'link' => 'tutorials/', 'current' => false),
    array('name' => 'Tutorial 2', 'link' => '', 'current' => true),
  );

  $content = '# Tutorial 2';

  include '../sitetemplate.php';
?>
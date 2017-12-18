<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo !empty($title) ? $title : "PC PEDIA | Windows Troubleshooting and Maintainence Guide";?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/template.css">
  <?php if(!empty($stylesheets)){foreach($stylesheets as $stylesheet) {?>
  <link rel="stylesheet" href="css/<?php echo $stylesheet?>.css">
  <?php }}?>
</head>
<body>
<header>
  <nav class="font-primary">
    <a href="index.php"><?php echo file_get_contents("img/logo-default.svg"); ?></a>
    <div class="nav-menu background-primary">
      <a href="#" class="nav-item">Video Tutorials<?php if($page == "tutorial") echo '<span id="active"></span>';?></a>
      <a href="about.php" class="nav-item">About Me<?php if($page == "about") echo '<span id="active"></span>';?></a>
      <a href="windows-help-and-support.php" class="nav-item">Get Help<?php if($page == "help") echo '<span id="active"></span>';?></a>
      <a href="make-a-donation.php" class="donate">Donate<?php if($page == "donate") echo '<span id="active"></span>';?></a>
    </div>
  </nav>
</header>
<main>

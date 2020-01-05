<?php if (!isset($page_title)) {
  $page_title = "Staff Area";
} ?>
<!doctype html>

<html lang="en">

<head>
  <title>GBI - <?php echo $page_title; ?></title>
  <meta charset="utf-8">
  <link rel="stylesheet" media="all" href="<?= url_for('/stylesheets/staff.css') ?>" />
</head>

<body>
  <header>
    <h1>GBI Staff Area</h1>
  </header>

  <nav>
    <ul>
      <li><a href="<?= url_for('/staff/index.php') ?>">Menu</a></li>
    </ul>
  </nav>
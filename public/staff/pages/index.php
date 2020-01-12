<?php require_once("../../../private/initialize.php") ?>

<?php
$pages = [
  ['id' => '1', 'position' => '1', 'visible' => '1', 'menu_name' => 'Globe Bank'],
  ['id' => '2', 'position' => '2', 'visible' => '1', 'menu_name' => 'History'],
  ['id' => '3', 'position' => '3', 'visible' => '1', 'menu_name' => 'Leadership'],
  ['id' => '4', 'position' => '4', 'visible' => '1', 'menu_name' => 'Contact Us'],
];
?>


<?php $page_title = "Pages"; ?>

<?php include(SHARED_PATH . '/staff_header.php') ?>


<div id="content">
  <div class='pages listing'>
    <h2>Pages</h2>
    <div class="actions">
      <a class='actions' href="">Create New Page</a>
    </div>

    <table class="list">
      <tr>
        <th>Id</th>
        <th>Position</th>
        <th>Visible</th>
        <th>Page Name</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>
      <?php foreach ($pages as $page) : ?>
        <tr>
          <td><?= h($page['id']) ?></td>
          <td><?= h($page['position']) ?></td>
          <td><?= $page['visible'] == '1' ? true : false; ?></td>
          <td><?= h($page['menu_name']) ?></td>
          <td><a href="<?= url_for('/staff/pages/show.php?id=') . h(u($page['id'])); ?>">Show</a></td>
          <td><a href="">Edit</a></td>
          <td><a href="">Delete</a></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
</div>

<?php include(SHARED_PATH . "/staff_footer.php"); ?>
<?php require_once("../../../private/initialize.php") ?>

<?php
$page_set = find_all_pages();

?>


<?php $page_title = "Pages"; ?>

<?php include(SHARED_PATH . '/staff_header.php') ?>


<div id="content">
  <div class='pages listing'>
    <h2>Pages</h2>
    <div class="actions">
      <a class='actions' href="<?= url_for('staff/pages/new.php') ?>">Create New Page</a>
    </div>

    <table class="list">
      <tr>
        <th>Id</th>
        <th>Subject Id</th>
        <th>Position</th>
        <th>Visible</th>
        <th>Page Name</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>
      <?php while ($page = mysqli_fetch_assoc($page_set)) : ?>
        <tr>
          <td><?= h($page['id']) ?></td>
          <td><?= h($page['subject_id']) ?></td>
          <td><?= h($page['position']) ?></td>
          <td><?= $page['visible'] == '1' ? true : false; ?></td>
          <td><?= h($page['menu_name']) ?></td>
          <td><a href="<?= url_for('/staff/pages/show.php?id=') . h(u($page['id'])); ?>">Show</a></td>
          <td><a href="<?= url_for('/staff/pages/edit.php?id=') . h(u($page['id'])); ?>">Edit</a></td>
          <td><a href="">Delete</a></td>
        </tr>
      <?php endwhile; ?>
    </table>
  </div>
</div>
<?php mysqli_free_result($page_set); ?>

<?php include(SHARED_PATH . "/staff_footer.php"); ?>
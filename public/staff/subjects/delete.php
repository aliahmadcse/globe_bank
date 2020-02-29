<?php

require_once('../../../private/initialize.php');

require_login();

if (!isset($_GET['id'])) {
  redirect_to(url_for('/staff/subjects/index.php'));
}
$id = $_GET['id'];


if (is_post_request()) {
  $result = delete_subject($id);
  if ($result === true) {
    $_SESSION['message'] = "Subject deleted successfully";
    redirect_to(url_for('/staff/subjects/index.php'));
  } else {
    $errors = $result;
  }
}
$subject = find_subject_by_id($id);

?>

<?php $page_title = 'Delete Subject'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject delete">
    <h1>Delete Subject</h1>
    <?php echo display_errors($errors); ?>
    <p>Are you sure you want to delete this subject?</p>
    <p class="item"><?php echo h($subject['menu_name']); ?></p>

    <form action="<?php echo url_for('/staff/subjects/delete.php?id=' . h(u($subject['id']))); ?>" method="post">
      <div id="operations">
        <input type="submit" name="commit" value="Delete Subject" />
      </div>
    </form>
  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
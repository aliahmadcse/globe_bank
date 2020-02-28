<?php require_once('../../../private/initialize.php');

if (!isset($_GET['id'])) {
    redirect_to(url_for('/staff/subjects/index.php'));
}

$id = $_GET['id'];

if (is_post_request()) {
    // Handle form values sent by new.php
    $subject = [];
    $subject['menu_name'] = $_POST['menu_name'] ?? '';
    $subject['position'] = $_POST['position'] ?? '';
    $subject['visible'] = $_POST['visible'] ?? '';
    $subject['id'] = $id;

    $result = update_subject($subject);
    if ($result === true) {
        $_SESSION['message'] = "Subject updated successfully";
        redirect_to(url_for('/staff/subjects/show.php?id=' . $subject['id']));
    } else {
        $errors = $result;
        // var_dump($errors);
    }
} else {
    $subject = find_subject_by_id($id);
}

$subject_set = find_all_subjects();
$subject_count = mysqli_num_rows($subject_set);
mysqli_free_result($subject_set);
?>

<?php $page_title = 'Edit Subject'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

    <a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>

    <div class="subject edit">
        <h1>Edit Subject</h1>

        <?php echo display_errors($errors); ?>

        <form action=" <?= url_for('/staff/subjects/edit.php?id=' . h(u($id))); ?>" method="post">
            <dl>
                <dt>Menu Name</dt>
                <dd><input type="text" name="menu_name" value="<?= h($subject['menu_name']) ?>" /></dd>
            </dl>
            <dl>
                <dt>Position</dt>
                <dd>
                    <select name="position">
                        <?php for ($i = 1; $i <= $subject_count; $i++) : ?>
                            <option value="<?= $i; ?>" <?php if ($subject['position'] == $i) {
                                                            echo "selected";
                                                        }; ?>><?= $i; ?></option>
                        <?php endfor; ?>
                    </select>
                </dd>
            </dl>
            <dl>
                <dt>Visible</dt>
                <dd>
                    <input type="hidden" name="visible" value="0" />
                    <input type="checkbox" name="visible" value="1" <?php if ($subject['visible'] == 1) {
                                                                        echo "checked";
                                                                    } ?> />
                </dd>
            </dl>
            <div id="operations">
                <input type="submit" value="Edit Subject" />
            </div>
        </form>

    </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
<?php require_once('../../../private/initialize.php'); ?>

<?php

require_login();

$subject_set = find_all_subjects();

?>

<?php $page_title = 'Subjects'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
    <div class="subjects listing">
        <h1>Subjects</h1>

        <div class="actions">
            <a class="action" href="<?= url_for('/staff/subjects/new.php'); ?>">Create New Subject</a>
        </div>

        <table class="list">
            <tr>
                <th>ID</th>
                <th>Position</th>
                <th>Visible</th>
                <th>Name</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>

            <?php while ($subject = mysqli_fetch_assoc($subject_set)) { ?>
                <tr>
                    <!-- h id htmlspecialchars() -->
                    <td><?php echo h($subject['id']); ?></td>
                    <td><?php echo h($subject['position']); ?></td>
                    <td><?php echo $subject['visible'] == 1 ? 'true' : 'false'; ?></td>
                    <td><?php echo h($subject['menu_name']); ?></td>
                    <td><a class="action" href="<?= url_for('/staff/subjects/show.php?id=') . h(u($subject['id'])); ?>">View</a></td>
                    <td><a class="action" href="<?= url_for('/staff/subjects/edit.php?id=') . h(u($subject['id'])); ?>">Edit</a></td>
                    <td><a class="action" href="<?= url_for('/staff/subjects/delete.php?id=' . h(u($subject['id']))); ?>">Delete</a></td>
                </tr>
            <?php } ?>
        </table>

    </div>

</div>
<?php
mysqli_free_result($subject_set);
?>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
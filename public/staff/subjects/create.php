<?php require_once('../../../private/initialize.php');

if (is_post_request()) {
    // Handle form values sent by new.php

    $menu_name = $_POST['menu_name'] ?? '';
    $position = $_POST['position'] ?? '';
    $visible = $_POST['visible'] ?? '';

    $result = insert_subject($menu_name, $position, $visible);
    $new_id = mysqli_insert_id($db);
    redirect_to(url_for('/staff/subjects/show.php?id=' . $new_id));
    
} else {
    redirect_to(url_for('/staff/subjects/new.php'));
}

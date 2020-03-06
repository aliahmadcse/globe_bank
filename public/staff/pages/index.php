<?php require_once('../../../private/initialize.php'); ?>

<?php
require_login();

redirect_to(url_for('/staff/index.php'));

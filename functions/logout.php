<?php
require '../includes/core.inc.php';
session_destroy();
header('Location: ../index.php');
?>
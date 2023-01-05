<?php
# These lines include the model and controller files
include 'model/user.php';
include 'controller/user.php';

# These lines represent the creation and usage of created controller
$controller = new UserController();
if (isset($_GET['action']) && $_GET['action'] == 'details') {
  $id = intval($_GET['id']);
  echo $controller->details($id);
} else {
  echo $controller->list();
}
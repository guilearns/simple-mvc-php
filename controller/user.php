<?php

class UserController {
  
  public function list() {
    $model = new UserModel();
    $users = $model->getUsers();
    $title = 'List All Users';
    $view = 'view/user/list.php';
    
    # load the page template
    include 'templates/main.php';
  }

  public function details($id) {
    $model = new UserModel();
    $user = $model->getUser($id);
    $title = 'User Details';
    $view = 'view/user/details.php';

    # load the page template
    include 'templates/main.php';
  }
  
}
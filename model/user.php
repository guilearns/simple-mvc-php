<?php
class UserModel {
  public function getUsers() {
    # retrieve data (The data can also come from a database)
    $users = array(
      array('id' => 1, 'name' => 'John', 'email' => 'john@example.com'),
      array('id' => 2, 'name' => 'Jane', 'email' => 'jane@example.com')
    );
    return $users;
  }

  public function getUser($id) {
    # retrieve data (The data can also come from a database)
    $users = $this->getUsers();
    foreach ($users as $user) {
      if ($user['id'] == $id) {
        return $user;
      }
    }
    return null;
  }
}
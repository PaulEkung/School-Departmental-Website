<?php
class Test extends Dbh{
  public function insertUsersData($fullname, $email, $password){
      $sql = "INSERT INTO `nacossusers` (name, email, password) VALUES (?,?,?)";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$fullname, $email, $password]);

  }  
}


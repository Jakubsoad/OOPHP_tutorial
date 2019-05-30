<?php

//require_once 'user.inc.php';

class ViewUser extends User
{
    public function showAllUsers()
    {
         $datas = $this->getAllUsers();
         foreach($datas as $data)
         {
             echo $data['id'] . ". ";
             echo $data['name'] . "<br>";
             echo "color: " . $data['color'] . "<br>";
             echo "music: " . $data['music'] . "<br><br>";

         }
    }

}

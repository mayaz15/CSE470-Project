<?php
namespace app;
class user{
    public $id=1;
    public $email="admin";
    public $password="admin";



     public function login($email,$credentials)
     {
         if ($this->email==$email and $this->password==$credentials)
         {
             return True;
         }
         else{
             return False;
         }
     }
}

<?php
 print("Hello world");
class User
{
    public $email;
    public $password;
    public function __construct ($netfang,$lykilord) {
        $this->username = $netfang;
        $this->password = $lykilord;
    }
    public function setPassword($newpassword)
    {
        $this->password = $newpassword;
    }
    public function setEmail($newEmail)
    {
        $this->email = $newEmail;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getEmail()
    {
        return $this->email;
    }

}
$user = new User('gary@gmail.com','chicken');
print ($user->getEmail());
?>
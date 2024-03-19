<?php
class User {
    private $id;
    private $name;
    private $lastName;
    private $email;
    private $cellphone;
    private $message;
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function getEmail() {
        return $this->email;
    }
    
    public function setEmail($email) {
        $this->email = $email;
    }

    public function getCellphone() {
        return $this->cellphone;
    }
    
    public function setCellphone($cellphone) {
        $this->cellphone = $cellphone;
    }

    public function getMessage() {
        return $this->message;
    }

    public function setMessage($message) {
        $this->message = $message;
    }
    

    public function toString() {
        return 'Id='.$this->getId()."<br>".
        ', Name='.$this->getName()."<br>".
        ', Last Name='.$this->getLastName()."<br>".
        ', Email='.$this->getEmail()."<br>".
        ', Cellphone='.$this->getCellphone()."<br>".
        ', Message='.$this->getMessage()
        ;
    }
}
?>

<?php
    $users = new User();
    $users->setId(1);
    $users->setName($_POST['name']);
    $users->setLastName($_POST['lastName']);
    $users->setEmail($_POST['email']);
    $users->setCellphone($_POST['cellphone']);
    $users->setMessage($_POST['message']);
    echo $users->toString();
?>


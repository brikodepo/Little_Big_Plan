<?php

class User {
    private $firstName;
    private $lastName;
    private $email;
    private $password;

    public function setFirstName($firstname) {
        $this->firstName = $firstname;
    }

    public function setLastName($lastname) {
        $this->lastName = $lastname;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = hash('sha256', $password);
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getEmail() {
        return $this->email;
    }

    public function checkPassword($tryPassword) {
        if (hash('sha256', $tryPassword) == $this->password) {
            return True;
        }
        return False;
    }
}
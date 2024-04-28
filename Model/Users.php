<?php 

// Declarando a classe
class Users {

    //atributos

    private int $id;
    private string $name;
    private string $mail;
    private string $password;
    private string $status;

    // metodos setters e getters

    public function getId(): int {
        return $this->id;
    }
    public function getName(): string {
        return $this->name;
    }
    public function getMail(): string {
        return $this->mail;
    }
    public function getPassword(): string {
        return $this->password;
    }
    public function getStatus(): string {
        return $this->status;
    }

    public function setId (string $id) : void {
        $this->id = $id;
    }
    public function setName (string $name) : void {
        $this->name = $name;
    }
    public function setMail (string $mail) : void {
        $this->mail = $mail;
    }
    public function setPassword (string $password) : void {
        $this->password = $password;
    }
    public function setStatus (string $status) : void {
        $this->status = $status;
    }
}

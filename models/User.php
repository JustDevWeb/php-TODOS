<?php

class User
{
   private int $id;
   private string $userName;
   private string $name = 'unknown';


    public function __construct(string $userName)
    {
        $this->userName = $userName;
    }

    public function getName (): ?string {
        return $this->name;
    }

    public function setName (string $name): self {
        $this->name = $name;
        return $this;
    }

    public function getUserName ():string {
        return $this->userName;
    }

    public function getId (): ?int {
        return $this->id;
    }

    public function setId ($id): self {
        $this->id = $id;
        return $this;
    }

    public function setUserName (string $username): self {
        $this->userName = $username;
        return $this;
    }

}
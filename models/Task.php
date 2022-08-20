<?php

require_once 'User.php';

class Task {
    private string $description;
    private bool $isDone = false;


    public function  __construct(string $description){
        $this->description = $description;
    }


    public function getDescription(): string {
        return $this->description ?? "Task hasn't description";
    }


    public function getIsDone(): bool{
        return $this->isDone;
    }



    public function setDescription(string $text): void {
        $this->description = $text;
    }



    public function markAsDone(): void {
        $this->isDone = true;
    }

}




<?php

class TaskProvider {

    private PDO $pdo;
    private User $user;

    public function __construct (PDO $pdo, User $user){
        $this->pdo = $pdo;
        $this->user = $user;
    }

    public function addTask(string $description ): bool{
        $task = new Task($description);
        $statement = $this->pdo->prepare(
            'INSERT INTO tasks (description, isDone, user_id) VALUES (:description, :isDone, :user_id)');
        return $statement->execute(
            [
            'description'=>$task->getDescription(),
            'isDone'=>(int) $task->getIsDone(),
            'user_id'=>$this->user->getId()
            ]
        );
    }

    public function getUndoneList(): ?array{
        $statement = $this->pdo->prepare(
            'SELECT * FROM tasks WHERE isDone = :isDone AND user_id = :user_id'
        );
        $statement->execute(
            [
                'isDone'=> 0,
                'user_id'=> $this->user->getId()
            ]
        );

        $result = $statement->fetchAll();

        if($result){
           return $result;
           }else{
            return null;
        }

    }

    public function markAsDone ($id): bool {
        $statement = $this->pdo->prepare(
            'UPDATE tasks SET isDone = :isDone WHERE id = :id'
        );
       return  $statement->execute(['isDone' => 1,'id' => $id]);
    }
}
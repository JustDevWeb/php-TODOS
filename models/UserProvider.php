<?php

class UserProvider {

    private PDO $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function registerUser (User $user , string $plainPassword): bool {
        $statement = $this->pdo->prepare(
            'INSERT INTO users (name, username,password) VALUES (:name , :username , :password)');

        return $statement->execute([
            'name'=> $user->getName(),
            'username'=> $user->getUserName(),
            'password'=> password_hash($plainPassword,PASSWORD_DEFAULT)
            ]);
    }

    public function getByUserNameAndPassword (string $userName , string $password): ?User {
        $statement = $this->pdo->prepare(
            'SELECT * FROM users WHERE username = :username LIMIT 1'
        );

        $statement->execute(['username'=>$userName]);

        $result = $statement->fetch();

        if($result){
            if(password_verify($password,$result['password'])){
                $user = new User ($userName);
                return $user->setId($result['id']);
            }else {;
                return null;
            }
        }else {
            return null;
        }

    }


}
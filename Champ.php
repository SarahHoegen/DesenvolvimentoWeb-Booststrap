<?php
declare(strict_types=1);

class Champ
{
    private $conexao;

    public function __construct()
    {
        try {
            $this->conexao = new PDO('mysql:host=localhost;dbname=sarahgenshin','sarinha','sarah');
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function list(): array
    {
        $sql = 'select * from champion';
        $prepare = $this->conexao->prepare($sql);
        $prepare->execute();
        $champions = [];
        
        $exe = $this->conexao->query($sql, PDO::FETCH_ASSOC);
        
        if (!empty($exe)) {
            foreach ($exe as $value) {
                array_push($champions, $value);
            }
        }
        
        return $champions;
    }

    public function insert(string $nome, string $elemento, string $classe) 
    {
        //$pdo = require 'connect.php';
        $sql = 'insert into champion(nome, elemento, classe) values(?,?,?)';

        $prepare = $this->conexao->prepare($sql);

        $prepare->bindParam(1, $nome);
        $prepare->bindParam(2, $elemento);
        $prepare->bindParam(3, $classe);
        $prepare->execute();

        return $prepare->rowCount();
    }

    public function update(int $id, string $nome, string $elemento, string $classe) 
    {
        $sql = 'update champion set nome = ?, elemento = ?, classe = ? where id = ?';

        $prepare = $this->conexao->prepare($sql);

        $prepare->bindParam(1, $nome);
        $prepare->bindParam(2, $elemento);
        $prepare->bindParam(3, $classe);
        $prepare->bindParam(4, $id);
        $prepare->execute();

        return $prepare->rowCount();
    }

    public function delete(int $id): int 
    {
        $sql = 'delete from champion where id='.$id;

        $prepare = $this->conexao->prepare($sql);

        $prepare->execute();

        return $prepare->rowCount();
    }




}

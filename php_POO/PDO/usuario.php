<?php

declare(strict_types=1);

// tipagem forte

class Usuario
{
    private $conexao;

    public function __construct()
    {
        try {
            $this->conexao = new PDO('mysql:host=localhost; dbname=usuarios', 'root', 'root');
        } catch (\Throwable $th) {
            throw $th;
            die();
        }
    }

    public function list(): array
    {
        $sql = 'SELECT * FROM usuarios';

        $usuarios = [];

        foreach ($this->conexao->query($sql) as $key => $value) {
            array_push($usuarios, $value);
        }

        return $usuarios;
    }

    public function insert(string $nome): string
    {
        try {
            $sql = 'INSERT INTO usuarios (nome_user) VALUES (?)';
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindParam(1, $nome);
            $stmt->execute();
            if ($stmt->rowCount() != 0) {
                return 'inserido com sucesso!';
            } else {
                return 'falha ao inserir!';
            }
        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function update(string $nome, int $id): string
    {
        try {
            $sql = 'UPDATE usuarios SET nome_user = ? WHERE id_usuario = ?';
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindParam(1, $nome);
            $stmt->bindParam(2, $id);
            $stmt->execute();
            if ($stmt->rowCount() != 0) {
                return 'atualizado com sucesso!';
            } else {
                return 'falha ao atualizar!';
            }
        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function delete(int $id): string
    {
        try {
            $sql = 'DELETE FROM usuarios  WHERE id_usuario = ?';
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindParam(1, $id);
            $stmt->execute();
            if ($stmt->rowCount() != 0) {
                return 'deletado com sucesso!';
            } else {
                return 'falha ao deletar!';
            }
        } catch (\Throwable $th) {
            return $th;
        }
    }
}

<?php


class User extends Conn
{
    public object $conn;
    public array $formData;


    public function create(){
        //Conexão com o  banco
        $this->conn = $this->connect();
        //Query sql
        $query="INSERT INTO usuario(Nome, Cpf, Telefone, Endereco, Email, Senha) VALUES (:name, :cpf, :telefone, :endereco, :email, :password)";
        //Preparo da query para inserção
        $addUser=$this->conn->prepare($query);
        //Substituição de parâmetros pelo array
        $addUser->bindParam(':name',$this->formData['nome']);

        $addUser->bindParam(':cpf',$this->formData['cpf']);

        $addUser->bindParam(':telefone',$this->formData['telefone']);

        $addUser->bindParam(':endereco',$this->formData['endereco']);

        $addUser->bindParam(':email',$this->formData['email']);

        $addUser->bindParam(':password',$this->formData['password']);
        $addUser->execute();
        //Validação
        if($addUser->rowCount()){
            return true;
        }
        else{
            return false;
        }
    }
}
<?php
require_once('Conn.php');
class Agendamento extends Conn
{
    public object $conn;
    public array $formData;
    public int $id;

     function listAgendamento(): array
    {
        $this->conn = $this->connect();
        $query_Agendamento = "SELECT * FROM agendamento ORDER BY id ASC LIMIT 40";
        $result_Agendamento = $this->conn->prepare($query_Agendamento);
        $result_Agendamento->execute();
        $retorno = $result_Agendamento->fetchAll();
        //var_dump($retorno);
        return $retorno;
    }

     function create(): bool
    {
        //var_dump($this->formData);
        $this->conn = $this->connect();
        $query_Agendamento = "INSERT INTO agendamento ( nome, data, hora, funcionario, servico, pagamento) VALUES (:nome, :data, :hora, :funcionario, :servico, :pagamento)";
        $add_Agendamento = $this->conn->prepare($query_Agendamento);
        $add_Agendamento->bindParam(':nome', $this->formData['nome']);
        $add_Agendamento->bindParam(':data', $this->formData['data']);
        $add_Agendamento->bindParam(':hora', $this->formData['hora']);
        $add_Agendamento->bindParam(':funcionario', $this->formData['funcionario']);
        $add_Agendamento->bindParam(':servico', $this->formData['servico']);
        $add_Agendamento->bindParam(':pagamento', $this->formData['pagamento']);
       

        $add_Agendamento->execute();

        if ($add_Agendamento->rowCount()) {
            return true;
        } else {
            return false;
        }
    }

     function view()
    {
        $this->conn = $this->connect();
        $query_Agendamento = "SELECT id, nome, data, hora, funcionario, servico, pagamento
                        FROM agendamento
                        WHERE id =:id
                        LIMIT 1";
        $result_Agendamento = $this->conn->prepare($query_Agendamento);
        $result_Agendamento->bindParam(':id', $this->id);
        $result_Agendamento->execute();
        $value = $result_Agendamento->fetch();
        return $value;
    }
}
    
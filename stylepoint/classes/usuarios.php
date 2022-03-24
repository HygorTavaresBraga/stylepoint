<?php

    class usuario{

        private $pdo;
        public $msgErro = ""; // OK!

        public function conectar($nome, $host, $usuario, $senha)
        {
            global $pdo;
            
            try
            {
            $pdo = new PDO("mysql:dbname=".$nome.";host=".$host, $usuario, $senha);
            }
            catch (PDOException $e) {
                $msgErro = $e->getMessage();
            }
        }

        public function cadastrar($nome, $telefone, $email, $senha)
        {
            global $pdo;
            //verifica se o id do usuário já está cadastrado
            $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
            $sql->bindValue(":e", $email);
            $sql->execute();
            if($sql->rowCount() > 0)
            {
                return false; // Já possui Cadastro.
            }
            else //caso não esteja, cadastrar...
            {
                $sql = $pdo->prepare("INSERT INTO usuarios(nome, telefone, email, senha) VALUES (:n, :t, :e, :s)");

                $sql->bindValue(":n", $nome);
                $sql->bindValue(":t", $telefone);
                $sql->bindValue(":e", $email);
                $sql->bindValue(":s",md5($senha));

                $sql->execute();

                return true;
            }

        }

        public function logar($email, $senha)
        {
            global $pdo;
            //verefica se o e-mail e senha estão cadastrados
            $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e AND senha = :s");
            $sql->bindValue(":e",$email);
            $sql->bindValue(":s",md5($senha));
            $sql->execute();

            if($sql->rowCount() > 0)
            {
                //entra na conta (inicia sessão)
                $dado = $sql->fetch();
                session_start();
                $_SESSION['id_usuario'] = $dado['id_usuario'];

                return true; //logado com sucesso

            }
            else
            {

                return false; //não foi possível logar

            }

        }
    }

?>
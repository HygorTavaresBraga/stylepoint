<?php
  require_once 'classes/usuarios.php';
  $u = new usuario;
?>

<head>

<meta charset="utf-8"/>
<title>Cadastrar</title>
<link rel="stylesheet" href="login.css">
<link rel="shortcut icon" href="img/icones/SP_com_fundo.png">

</head>

<body>

    <header>
        <div class="menu-login">
            <a id="logo-menu-login" href="/../stylepoint">
            <img src="img/icones/SP_com_fundo.png" width="50" height="50">
            </a>
        </div>
    </header>

    <main>
        <div id= "container-formulario">
            <h1 class="titulo-formulario">CADASTRO</h1></a>

            <form method="POST">

                <div class = "mb-3">

                    <input type="text" name="nome" placeholder="Nome completo" maxlength="30">

                    <input type="text" name="telefone" placeholder="Telefone" maxlength="30">
                    
                    <input type="email" name="email" placeholder="E-mail" class="form-control" id="exampleInputEmail1" aria-describeby="emailHelp" maxlength="40">
                
                    <input type="password" name="senha" placeholder="Senha" class="form-control" id="exampleInputPassword1" maxlength="32">

                </div>

                <button type="submit" class="btn-login">Cadastrar</button>

                <h1 class="box-cad">
                    Já possui um cadastro? <br> 
                    clique  <a style="color:black; text-decoration: none;" href="login.php">
                                aqui
                            </a> e entre!
                </h1>
    
            </form>
        </div>
    </main>

    <footer>
        <?php
            //Verificar se clicou no botao
            if(isset($_POST['nome']))
            {

                $nome = addslashes($_POST['nome']);
                $telefone = addslashes($_POST['telefone']);
                $email = addslashes($_POST['email']);
                $senha = addslashes($_POST['senha']);

            //Verifica se preencheu tudo

            if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha))
            {
                $u->conectar("stylepoint","localhost","root","");

            if($u->msgErro == "") //Se estiver ok..
                {

                if($u->cadastrar($nome,$telefone,$email,$senha))
                {
        ?>
                <div id="msg-success">
                    Cadastrado com sucesso! Acesse sua conta na área de Login.
                </div>
        <?php
                } else {
        ?>
                    <div class="msg-fail">
                        Este e-mail já está cadastrado.
                    </div>

        <?php
                }
                } else {
        ?>
                    <div class="msg-fail">
                        <?php echo "Erro: ".$u->msgErro; ?>
                    </div>

        <?php
                }
                } else {
        ?>
                    <div class="msg-fail">
                        Preencha todo o formulário!
                    </div>
        <?php
                }
            }
        ?>

    </footer>

</body>
<?php
  require_once 'classes/usuarios.php';
  $u = new usuario;
?>

<head>

<meta charset="utf-8"/>
<title>Login</title>
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
    <div id="container-formulario">
      <h1 class="titulo-formulario">LOGIN</h1>

      <form method="POST">

        <div class="mb-3">
    
          <input type="email" name="email" placeholder="E-mail" class="form-control" id="exampleInputEmail1" aria-describeby="emailHelp" maxlength="40">

          <input type="password" name="senha" placeholder="Senha" class="form-control" id="exampleInputPassword1" maxlength="32">

        </div>
        <!-- CAIXA PARA MANTER LOGADO -->
    <!--<div class ="mb-3 form-check">
          <div class="pos-box">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <h1 class="txt-box">Desejo permanecer conectado</h1>
          </div>
        </div> -->

        <button type="submit" class="btn-login">Entrar</button>

        <h1 class="box-cad">
          Não possui um cadastro? <br> 
          Clique <a style="color:black; text-decoration: none;" href="cadastrar.php">
                  aqui
                </a> e cadastre-se!
        </h1>

      </form>
    </div>
  </main>
  
  <footer>
    <?php
      if (isset($_POST['email'])) {

        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);

        //Verificar se preencheu tudo

        if (!empty($email) && !empty($senha)) {
          $u->conectar("stylepoint", "localhost", "root", "");

          if ($u->logar($email, $senha)) {
            header("location: logados");
          } else {
    ?>
          <div class="msg-fail">
            Email e/ou senha estão incorretos!
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
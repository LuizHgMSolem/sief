<?php
  session_start();
// Função Validar Reginstro
function ValidarRegistro(){
  // Validação do Registro.
  if (!$_SESSION['tipoUsuario'] == 1){
    header('Location: ../login.php');        
  }
}
ValidarRegistro();
  // Deseleciona Qualquer Regiestro Existente.
  // unset($_SESSION['tipoUsuario'])
?>

<!-- INICANDO CODIGO PRICIPAL -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/Style-Forms.css">
  <title>Área de Matricula</title>
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Cadastro</a></li>
      </ul>
    </nav>
  </header>  
  <main>
    <section class="Main-Section">
      <div class="main-container">
        <div class="Main-Title">
          <div class="Title-Container">
            <h1 title="Matricula" >MATRICULA</h1>
          </div>
        </div>
        <div class="Main-Forms">
          <div class="Forms-Container">
            <form action="Admin.php" method="post">
              <div class="form-inputs">
                <div class="input-items">
                  <label for="nome">Nome Completo:</label>
                  <input type="text" id="nome" class="txtnome" name="Nome">
                </div>
                <div class="input-items">
                  <label for="DataNCT">Data de Nascimento:</label>
                  <input type="date" id="DataNCT" class="txtDataNCT" name="DataNCT">
                </div>
                <div class="input-items">
                  <label for="Sexo">Sexo:</label>
                  <input type="text" id="Sexo" class="txtSexo" name="Sexo">
                </div>
                <div class="input-items rg">
                  <label for="RG" id="rg-label">RG:</label>
                  <input type="Number" id="RG" class="txtRG " name="RG">
                  <small id="emailHelp" class="form-text text-muted"> CPF Sem pontos ou traço.</small>
                </div>
                <div class="input-items cpf">
                  <label for="nome" id="cpf-label">CPF</label>
                  <input type="Number" id="CPF" class="txtCPF " name="CPF">
                  <small id="emailHelp" class="form-text text-muted"> CPF Sem pontos ou traço.</small>
                </div>
                <div class="input-items">
                  <label for="Cidade">Cidade</label>
                  <input type="text" id="Cidade" class="txtCidade " name="Cidade">
                </div>
                <div class="input-items">
                  <label for="nome">Bairro</label>
                  <input type="text" id="Bairro" class="txtBairro " name="Bairro">
                </div>
                <div class="input-items">
                  <label for="nome">Endereço</label>
                  <input type="text" id="Endereço" class="txtEndereço " name="Endereço ">
                </div>

                <div class="input-items">
                  <label for="Numero">Numero</label>
                  <input type="text" id="Numero" class="txtNumero " name="Numero">
                </div>
                <div class="input-items">
                  <label for="Celular">Celular</label>
                  <input type="text" id="Celular" class="txtCelular " name="Celular">
                </div>
                <div class="input-items">
                  <label for="E-Mail">E-Mail</label>
                  <input type="text" id="E-Mail" class="txtE-Mail " name="E-Mail">
                </div>

              </div>
              <div class="button">
                <input type="submit" class="btn btn-primary matricular" value="Matricular" name="Matrricula">
                <input type="reset" class="btn btn-secondary desmarcar" value="desmarcar" name="desmarcar">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>
</html>

<?php
  $dadosMatricula = filter_input_array(INPUT_POST, FILTER_DEFAULT);





?>
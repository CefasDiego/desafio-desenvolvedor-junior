<?php

?>

<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>cadastro!</title>
  </head>
  <body>


  <?php
  //incluir conexao
  include "conexao.php";
  $id = $_GET ['id'] ?? '';
  $resultpet_1="SELECT * FROM pet_1 WHERE cod_pet =$id";
  $resultadopet_1= mysqli_query($conn,$resultpet_1);
  $row_usuario = mysqli_fetch_assoc( $resultadopet_1);



  ?>
      <div class="container-fluid">
          <div class="row">
              <div class="col">
             <h1>Edição de Cadastro</h1>

                <form action="cadastro_script.php" method="POST">
                    <div class="form-group">
                        <label for="nome">Nome Do pet</label>
                        <input type="text" class="form-control" name="nome_pet" required
                        value="<?php echo $row_usuario['nome_pet']
                        ?>" >
                    </div>
                    <div class="form-group">
                        <label for="nome">Especie do Pet</label>
                        <input type="text" class="form-control" name="especie_pet" required 
                        value="<?php echo $row_usuario['especie_pet']
                        ?>" >
                    </div>
                    <div class="form-group">
                        <label for="nome">Raça Do pet</label>
                        <input type="text" class="form-control" name="raca_pet" required 
                        value="<?php echo $row_usuario['raca_pet']
                        ?>">
                    </div>
                    <div class="form-group">
                        <label for="nome">Idade Do pet</label>
                        <input type="text" class="form-control" name="idade_pet" required 
                        value="<?php echo $row_usuario['idade_pet']
                        ?>" >
                    </div>
                    <div class="form-group">
                        <label for="nome">Número de rastreio do pet</label>
                        <input type="text" class="form-control" name="num_rastreio" 
                        value="<?php echo $row_usuario['num_rastreio']
                        ?>" >
                    </div>
                    <div class="form-group">
                        <label for="nome">Numero para Contato</label>
                        <input type="text" class="form-control" name="num_contato"required 
                        value="<?php echo $row_usuario['num_contato']
                        ?> ">
                    </div>
                    <div class="form-group">
                        <label for="nome">Nome do Tutor</label>
                        <input type="text" class="form-control" name="nome_tutor" required 
                        value="<?php echo $row_usuario['nome_tutor']
                        ?>" >
                    </div><br>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success"  value="Salvar Alterações" >
                        
                    </div><br>
                    <a href="index1.php" class="btn btn-primary">Página Inicial</a>
                </form>
            
              </div>
          </div>
      </div>
    

 
  </body>
</html>
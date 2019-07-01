<?php 

include "controle/lancamento.php";

if( !empty( $_POST['nome'] ) ) cadastrar($_POST['nome'], $_POST['valor']);

$colecao = pesquisar();

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
	<link href="css/fontawesome.css" rel="stylesheet">
    <link href="css/brands.css" rel="stylesheet">
    <link href="css/solid.css" rel="stylesheet">
	
	
	
	<title>Mobile first</title>
</head>
<body class="fundo">

<div class="container-fluid">
	<div class="col-12 mt-5">
				<table class="table table-hover tabelaHeader">
					<thead>
						<tr class="topoTabela">
                            <th>Gastos Totais</th>
                            <?php
                            $total = 0;
                            foreach($colecao as $row) {
                                $total += $row['valor'];
                            }
                            ?>
							<th>R$ <?php echo $total ?>,00</th>
						</tr>
					</thead>					
				</table>
				<div class="row">
				<div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered verticle-middle" >
                                        <thead class="tabelaHeader">
                                            <tr>
                                                <th scope="col">Nome</th>
                                                <th scope="col">Valor</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php foreach($colecao as $row):?> 
                                            <tr>
                                                <td><?php echo $row['nome'] ?></td>
                                                <td style="background: rgba(76, 175, 80, .1)"><?php echo $row['valor'] ?>,00</td>   
                                            </tr>
											<?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
				
									
									<!-- Modal pequeno -->
<button type="button" class="btn btn-primary float-right mt-5 btnAdd" data-toggle="modal" data-target=".bd-example-modal-sm">+</button>

<div class="modal fade bd-example-modal-sm " tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
	<form class="modalImput" action="" method="post">
  <div class="form-group ">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" name="nome" id="nome" aria-describedby="emailHelp" placeholder="Nome">
    
  </div>
  <div class="form-group">
    <label for="valor">Valor</label>
    <input type="number" class="form-control" id="valor" name="valor" placeholder="Valor">
  </div>
  
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
    </div>
  </div>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
</body>
</html>
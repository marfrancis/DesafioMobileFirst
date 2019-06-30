<?php 
include_once 'conexao.php';

function cadastrar($nome, $valor) {
    global $conexao;
    $query = $conexao->prepare('INSERT INTO lancamentos (nome, valor) VALUES (:nome,:valor)');
    $inserir = $query->execute(["nome"=>$nome,"valor"=>$valor]);
}

function pesquisar() {
    global $conexao;
    $statement = $conexao->prepare('SELECT nome, valor FROM lancamentos;');
    $statement->execute();
    
    $colecao = [];
    while( $row = $statement->fetch() ) {
        $colecao[] = $row;
    }

    return $colecao;
}

function pesquisarPorNome($nome) {
    global $conexao;
    $query = $conexao->prepare('SELECT nome, valor FROM lancamentos WHERE nome = ?;');
    return $query->execute([$nome]);
}

// try {

// if($inserir){
//     header('Location: sucesso.php'); 
// } else {
//     echo "<H1>Erro de cadastro</H1>";
// }

// }catch(PDOException $ex){
//     echo 'Serviço indisponível';
// }

<?php
session_start();
$nome_postador = $_SESSION['nome_usuario'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $conn = mysqli_connect('localhost', 'root', '', 'breaksilence');
    
    $topico_relacionado = "Aborto";
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $id_postador = "2";
    
    $query = "INSERT INTO posts (top_relacionado, titulo, descricao, id_postador, nome_postador) 
              VALUES ('$topico_relacionado', '$titulo', '$descricao', '$id_postador', '$nome_postador')";
    
   
    if (mysqli_query($conn, $query)) {
        header('Location: index.php');
        exit;
    } else {
        
        echo "Erro ao inserir post: " . mysqli_error($conn);
    }
}

?>
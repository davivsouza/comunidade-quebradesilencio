<?php
// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Inclui o arquivo de conexão com o banco de dados
    require_once 'conexao.php';
    
    // Obtém os valores do formulário
    $topico_relacionado = $_POST['topico_relacionado'];
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $id_postador = $_POST['id_postador'];
    $nome_postador = $_POST['nome_postador'];
    
    // Prepara a query de inserção
    $query = "INSERT INTO posts (topico_relacionado, titulo, descricao, id_postador, nome_postador) 
              VALUES ('$topico_relacionado', '$titulo', '$descricao', '$id_postador', '$nome_postador')";
    
    // Executa a query e verifica se foi bem-sucedida
    if (mysqli_query($conexao, $query)) {
        // Redireciona o usuário de volta para a página de visualização de posts
        header('Location: index.php');
        exit;
    } else {
        // Exibe uma mensagem de erro caso a query tenha falhado
        echo "Erro ao inserir post: " . mysqli_error($conexao);
    }
}

?>
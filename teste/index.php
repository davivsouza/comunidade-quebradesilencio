<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal Centralizado</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <button id="openModalButton">Criar Novo Post</button>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Criar Novo Post</h2>
            <form action="processar-post.php" method="post">
                <label for="titulo">Título:</label><br>
                <input type="text" id="titulo" name="titulo"><br>
                <label for="descricao">Descrição:</label><br>
                <textarea id="descricao" name="descricao"></textarea><br><br>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
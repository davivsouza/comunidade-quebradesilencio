<?php
session_start();
$_SESSION['nome_usuario'] = "Larissa";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BreakSilence</title>
</head>
<body>
    <div class="container">
        <header>
            <nav class="navigation">
                <p> Quebra de Silêncio</p>
                <ul class="navigationList">
                    <li><a href="#">Início</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="#">Ajuda</a></li>
                </ul>
            </nav>
        </header>
        <main class='forum-area'>
            <aside class="forums">
                <nav>
                    <h3>Tópicos</h3>
                    <ul>
                        <li><a href="#">Aborto</a></li>
                        <li><a href="#">Assédio</a></li>
                        <li><a href="#">Gestação</a></li>
                        <li><a href="#">Pegar mãe é errado?</a></li>
                        <li><a href="#">Kaique dá a bunda?</a></li>
                    </ul>
                </nav>
            </aside>
            <section class="comments">
                <h2 class="comments-title">Aborto</h2>
                  <?php
                    $conn = mysqli_connect('localhost', 'root', '', 'breaksilence');
                if (!$conn) {
                    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
                }

                $query = "SELECT * FROM posts WHERE top_relacionado = 'Aborto'";

                $result = mysqli_query($conn, $query);
                if ($result === false) {
    die("Erro ao executar a consulta SQL: " . mysqli_error($conn));
}

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="userComment">';
                        echo '<h3> '.$row['titulo'].' </h3>';
                        echo '<div class="userInfo">';

                        echo '<img class="profileIcon" src="./img/userIcon.jpg" alt="User Profile Icon">';
                        echo $row['nome_postador'];
                        echo '</div>';
                        echo '<div class="comment">';
                        echo $row['descricao'];
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>Nenhum post encontrado.</p>';
                }

                mysqli_close($conn);
            ?>
        </section>
        <aside class="profile">
            <div class="userInfo">
                <img class="profileIcon" src="./img/userIcon.jpg" alt="User Profile Icon">
                <?php echo $_SESSION['nome_usuario'] ?>
            </div>
            <a href="#">Ver perfil</a>
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

    
        </aside>
    </main>
</div>

<script src="script.js"></script>
</body>
</html>
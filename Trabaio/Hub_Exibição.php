<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Navegação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <header class="text-center bg-primary text-white shadow-lg p-3 mb-5">
        <h1>Navegação Exercícios</h1>
        <h2>índice dos exercicios</h2>
    </header>
    <main>
        <div class="conteiner">
            <nav class="modulos">
                <div class="card mx-5 border-primary " style="width: 18rem;">
                    <div class="card-header bg-primary text-white">Funções</div>
                    <div class="card-body">
                        <ul>
                            <li>
                                <a href="exercicios.php?dir=funcoes&file=funcoes">Minha primeira função</a>
                            </li>
                            <li>
                                <a href="exercicios.php?dir=funcoes&file=teste">Teste de navegação</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </nav>
        </div>
    </main>
    <footer><p>Todos os direitos reservados SÂMECK  &copy;</p><?=  date('Y'); ?></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Simples</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 alert alert-info">
                <h2 class="text-dark text-center border-bottom">
                    Trabalhando com Array
                </h2>
                <h4 class="text-dark mt-3">Declarando um Array em PHP</h4>
                <h5 class="text-dark">
                    Primeira Maneira
                </h5>
                <p class="text-dark mt-3">
                    $dados = array('Banana', 'Maça', 'Goiaba');
                </p>
                <h5 class="text-dark mt-3">
                    Segunda Maneira (Simplificada)
                </h5>
                <p class="text-dark">
                    $dados = ['Banana', 'Maça', 'Goiaba'];
                </p>
                <h5 class="text-dark mt-3">
                    Verificando o conteúdo do Array
                </h5>
                <p class="text-dark">
                    var_dump($dados);
                </p>
                <p class="text-dark">
                    <?php
                        $dados = ['Banana', 'Maça', 'Goiaba'];
                        var_dump($dados);
                    ?>
                </p>
                <h5 class="text-dark mt-3">
                    Adicionando elemento ao Array
                </h5>
                <p class="text-dark">
                    $dados[] = 'Melão';
                </p>
                <p class="text-dark">
                    <?php
                        $dados[] = 'Melão';
                        var_dump($dados);
                    ?>
                </p>
                <h5 class="text-dark mt-3">
                    Imprimindo um índice em específico
                </h5>
                <p class="text-dark">
                    echo $dados[2];
                </p>
                <p class="text-dark">
                    <?php
                        echo $dados[2];
                    ?>
                </p>
                <h5 class="text-dark mt-3">
                    Imprimindo todos os elementos do Array
                </h5>
                <p class="text-dark">
                    foreach($dados as $dado){
                        echo $dado.'<br>';
                    }
                </p>
                <p class="text-dark">
                    <ul class="text-dark">
                        <?php
                            foreach($dados as $dado){
                                echo "<li>$dado</li>";
                            }
                        ?>
                    </ul>
                </p>
            </div>
        </div>
    </div>
    
</body>
</html>
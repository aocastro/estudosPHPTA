<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-6">
                <form method="post">
                    <div class="form-group">
                        <label>Selecione seu animal de preferência</label>
                        <select name="animal" id="animal" class="form-control form-control-lg">
                            <option value="">Selecione ....</option>
                            <option value="1">Cachorro</option>
                            <option value="2">Gato</option>
                        </select>
                    </div>
                    <div class="form-group row justify-content-end">
                        <div class="col-12 col-sm-6 col-md-4">
                            <button type="submit" class="btn btn-outline-info btn-lg btn-block">
                                Enviar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-sm-8 col-md-6 border rounded">
                <?php
                    if(isset($_POST['animal'])){

                        if($_POST['animal'] == '1'){
                            echo '<img src="img/cachorro.jpg" alt="Aminal" class="img-fluid rounded mt-3 mb-3">';
                        }else{
                            echo '<img src="img/gato.jpg" alt="Aminal" class="img-fluid rounded  mt-3 mb-3">';
                        }

                    }else{
                        echo "Selecione um animal ...";
                    }
                ?>
            </div>
        </div>
    </div>

</body>
</html>
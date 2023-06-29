<?php
    require_once "Champ.php";

    $champ = new Champ();
    $lista = $champ->list();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Editar</title>
</head>
<body>
    <header class="navbar-expand flex-column  bd-navbar">
        <nav class="navbar d-print navbar-expand-lg navbar-light">
            <img src="imgs/eula.png" alt='Logo'  width='89px' height='74.5px'>
            <a class='navbar-brand' style="margin-left: 30px;" href="index.php">Minhas Waifus</a>
        </nav>
    </header>

    <div class="container bah">
        <div class="row">
            <div class="col-md-12 margin">
                <h3 class="text-center">
                    Editar campeão
                </h3>

                <form action="action.php" method="get">
                    <input type="hidden" class="form-control" id ="id" name="id" value="<?= $_REQUEST['id']; ?>"/>
                    <label for="nome">
                        Nome
                    </label>
                    <input type="text" class="form-control" id ="nome" name="nome" />

                    <label for="elemento">
                        Elemento
                    </label>
                    <input type="text" class="form-control" id="elemento" name="elemento" />
                    
                    <label for="classe">
                        Classe
                    </label>
                    <input type="text" class="form-control" id="classe" name="classe" />

                    <input type="hidden" class="form-control" id="acao" name="acao" value='update'/>
                    <a href="http://localhost/TrabDesWeb/action.php">
                        <button type="submit" class="btn btn-primary margin">
                            Editar
                        </button>
                    </a>
                </form>
                
                <blockquote class="blockquote margin">
                    <p class="mb-2">
                        The Knights of Favonius values one's abilities and deeds more than their background and lineage. Eula is indeed an outstanding knight, and there is no need to hold her identity as a descendant of the ancient nobles against her.
                    </p>
                    <footer class="blockquote-footer">
                        <cite>Jean Gunnhildr</cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>
</body>
</html>
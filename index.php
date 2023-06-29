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
    <title>Sarah</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header class="navbar-expand flex-column  bd-navbar">
        <nav class="navbar d-print navbar-expand-lg navbar-light">
            <img src="imgs/eula.png" alt='Logo' width='89px' height='74.5px'>
            <a class='navbar-brand' style="margin-left: 30px;" href="#">Minhas Waifus</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav total">
                    <li class="nav-item">
                        <a class="nav-link" href="#lore">Lore</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#status">Status</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#citacao">Citaçao</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#champions">Campeões</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="newchamp.html">Cadastro de Campeões</a>
                    </li>
                    <li class="nav-item" style="margin-left:60%;">
                        <a class="nav-link" href="login.html">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light">
            
        </nav>
        
    </header>

    <main>
        <section id='lore'>
            <div class="container-fluid lore cita text-center">
                <h3 class="margin">Lore</h3>
                <img class="margin rounded-circle img-fluid" src="imgs/eularosto.jpg" width="300" height="300">
                <p class="margin">
                    A rebellious descendant of the old aristocracy who is always out on the battlefield.
                    As one born into the old aristocracy, carrying the bloodline of sinners, Eula has needed a unique approach to the world to navigate the towering walls of prejudice peacefully. Of course, this did not prevent her from severing ties with her clan. As the outstanding Spindrift Knight, she hunts down Mondstadt's enemies in the wild to exact her unique "vengeance."</p>
                <p>
                    Eula is a descendant of Mondstadt's old aristocracy, being from the now-overthrown Lawrence Clan infamous for their tyrannical rule over Mondstadt. She dislikes people who view her similarly to the rest of her clan due to this mistrust, which has not been forgotten. She has a habit of declaring and getting "vengeance" against her enemies to redeem her family name.
                </p>
                <p>
                    Eula is one of the few Lawrence Clan nobles who realize that their actions against the people of Mondstadt were unjustified, rather than the other way around. As a young child, she was forced by her family to learn noble etiquette as part of an educational regime so harsh that it is considered borderline abusive. Although Eula considers most of her clan's customs despicable, she personally enjoys the traditional "Dance of Sacrifice" and incorporates it into her style of "Favonius Bladework." She has a strained relationship with her family, who denounce her as a traitor for leaving the clan. She has stated that she would not hesitate to destroy her own family if they endangered Mondstadt, even finding it fitting. While she still tends to act like a clan noble on the outside, inside she is actually a kind-hearted person, echoed by both Amber and Sara.
                </p>
                </div>
        </section>

        <section id='status'>
            <div class="container-fluid lore text-center margin">
                <h3 class="margin">Status</h3>
                <div class="container margin">
                    <div class="row margin">
                        <div class="col-lg-4">
                            <img class='img-fluid' src="imgs/card.jpg">
                        </div>
                        <div class="col-lg-4">
                            <img class='img-fluid' src="imgs/card2.jpg">
                        </div>
                        <div class="col-lg-4">
                            <img class='img-fluid' src="imgs/card3.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id='citacao'>
            <div class="container-fluid lore text-center margin cita">
                <h3 class="margin">Citation</h3>
                <img class="margin rounded-circle img-fluid" src="imgs/eula2.png" width="500" height="300">
                <p class="margin">The Spindrift Knight, a scion of the old aristocracy, and the Captain of the Knights of Favonius Reconnaissance Company. The reason for which a descendant of the ancient nobles might join the Knights remains a great mystery in Mondstadt to this very day.</p>
            </div>
        </section>
      
        <section id='champions'>
            <div class="container-fluid lore text-center margin cita">
                <h3 class="margin">Champions</h3>
                <div class="container margin">
                    <div class="row margin">
                        <?php foreach ($lista as $value) { ?>
                            <div class="col-lg-4 border border-primary">
                                <form action="action.php" method="get">
                                    <input type="hidden" class="form-control" id="id" name="id" value='<?= $value['id']; ?>'/>
                                    <input type="hidden" class="form-control" id="nome" name="nome" value='<?= $value['nome']; ?>'/>
                                    <input type="hidden" class="form-control" id="elemento" name="elemento" value='<?= $value['elemento']; ?>'/>
                                    <input type="hidden" class="form-control" id="classe" name="classe" value='<?= $value['classe']; ?>'/>

                                    <p class="margin">Id: <?= $value['id']; ?></p>
                                    <p class="margin">Nome: <?= $value['nome']; ?></p>
                                    <p class="margin">Elemento: <?= $value['elemento']; ?></p>
                                    <p class="margin">Classe: <?= $value['classe']; ?></p>

                                    <input type="hidden" class="form-control" id="acao" name="acao" value='delete'/>
                                    <a href="http://localhost/TrabDesWeb/action.php">
                                        <button type="submit" class="btn btn-primary margin">
                                            Deletar
                                        </button>
                                    </a>
                                </form>
                                <form action="editchamp.php" method="get">
                                        <input type="hidden" class="form-control" id="id" name="id" value='<?= $value['id']; ?>'/>
                                        <input type="hidden" class="form-control" id="nome" name="nome" value='<?= $value['nome']; ?>'/>
                                        <input type="hidden" class="form-control" id="elemento" name="elemento" value='<?= $value['elemento']; ?>'/>
                                        <input type="hidden" class="form-control" id="classe" name="classe" value='<?= $value['classe']; ?>'/>
                                    <a href="http://localhost/TrabDesWeb/editchamp.php">
                                        <button type="submit" class="btn btn-primary margin">
                                            Editar
                                        </button>
                                    </a>
                                </form>
                            </div>
                        <?php } ?>
                    </div></div>
                    
                
     
            </div>
        </section>

    </main>

    <footer class="container-fluid text-center bg-footer margin">
        <div style="color:darkgrey">  
            <p>2021. Desenvolvido por Sarah Hoegen. (sarihosenpai@gmail.com)</p>
        </div>
    </footer>
</body>
</html>
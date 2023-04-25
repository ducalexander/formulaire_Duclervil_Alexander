<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles2.css"> <!--permet de relier le html et le css-->
</head>
<body>
    <form>
        <div class="h1-h2">
        <div class="h1">
            <h1>
                Votre demande :
            </h1>
        </div>
        <div class="h1-h2">
            <div class="h2">
            <h2> 
                <?php
                echo $_POST['intitule'];
                ?><!-- echo permet de afficher les données-->
            </h2>
            </div>
        </div>
        </div>
        <div class="principale"><!-- encadrer centrale -->
            <div class="separe"><!--permet de faire les encadrer de chaque parti de l'encadrer principale-->
                <div class="haut">
                    <div class="gris">
                        <label class="vert">Nom</label><!-- permet de nommé -->
                        <div class="bleu">
                        <?php
                        echo $_POST['nom'];
                        ?><!-- echo permet de afficher les données-->
                        </div>
                    </div>
                    <div class="gris">
                    <label class="vert">Prenom</label><!-- permet de nommé -->
                    <div class="bleu">
                        <?php
                        echo $_POST['prenom'];
                        ?><!-- echo permet de afficher les données-->
                    </div>
                    </div>
                    <div class="gris">
                    <label class="vert">Email</label><!-- permet de nommé -->
                    <div class="bleu">
                        <?php
                        echo $_POST['email'];
                        ?><!-- echo permet de afficher les données-->
                    </div>
                    </div>
                </div>
                <div class="bas">
                    <div class="haut">
                        <label class="vert">Echeance</label><!-- permet de nommé -->
                        <div class="gris">
                            <div class="bleu">
                            <?php
                               echo $_POST['radio'];
                            ?>
                            </div><!-- echo permet de afficher les données-->
                        </div>
                    </div>
                    <div class="bas">
                    <div class= >
                        <label class="vert">Nature de la demande</label><!-- permet de nommé -->
                        <div class="bleu">
                          <?php
                             echo $_POST['checkbox'];
                          ?>
                        </div><!-- echo permet de afficher les données-->
                        <br>
                        <div class="gris">
                        <label>Réponse souhaitée sous: </label><!-- permet de nommé -->
                         <?php
                          echo $_POST['reponse'];
                         ?><!-- echo permet de afficher les données-->
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="separe">
                <div class="bas">
                    <div>
                        <label class="vert">
                            Description du projet
                        </label><!-- permet de nommé -->
                    </div>
                        <div class="description">
                        <br>
                        <textarea readonly id="description">
                            <?php
                            echo $_POST['description'];
                            ?>
                        </textarea><!-- echo permet de afficher les données-->
                        </div>
                </div>
                </div>
            </div>
        </div> <!--fin de l'encadrer principale-->   
    </form>
</body>
</html>
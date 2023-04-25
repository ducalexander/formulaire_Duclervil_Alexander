<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css"> <!--permet de relier le html et le css-->
</head>
<body>
    <form method="POST" action="resulta-formu.php"><!-- post sert a receptioner les données/ action permet de determiner sur quel page les données seront envoyer-->
        <div class="h1-h2">
        <div class="h1">
            <h1>
                edition de script
            </h1>
        </div>
        <div class="h1-h2">
            <div class="h2">
            <h2>
                nous soumettre votre projet
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
                        <input type="text"
                        name="nom"
                        placeholder="nom"
                        pattern="[a-A-@]*"><!--permet de creer des champ pour ecrire les REPONSE/ name permet d'enregistrer les données-->
                        </div>
                    </div>
                    <div class="gris">
                    <label class="vert">Prenom</label><!-- permet de nommé -->
                    <div class="bleu">
                        <input type="text"
                        name="prenom"
                        placeholder="prenom"
                        pattern="[a-A-@]*"><!--permet de creer des champ pour ecrire les REPONSE/ name permet d'enregistrer les données-->
                    </div>
                    </div>
                    <div class="gris">
                    <label class="vert">Email</label><!-- permet de nommé -->
                    <div class="bleu">
                        <input type="email"
                        name="email"
                        placeholder="Email"
                        pattern="[a-A-@]"><!--permet de creer des champ pour ecrire les REPONSE/ name permet d'enregistrer les données-->
                    </div>
                    </div>
                </div>
                <div class="bas">
                    <div class="haut">
                        <label class="vert">Echeance</label><!-- permet de nommé -->
                        <div class="gris">
                            <div class="bleu">
                            <input type="radio" 
                             name="radio">
                                <label>sous 3 mois</label>
                                <br>
                                <input type="radio"
                                name="radio">
                                <label>3 à 6 mois</label>
                                <br>
                                <input type="radio"
                                name="radio">
                                <label>plus de 6 mois</label><!--permet de creer des champ pour cocher les REPONSE/ name permet d'enregistrer les données-->
                            </div>
                        </div>
                    </div>
                    <div class="bas">
                    <div class= >
                    <label class="vert">Nature de la demande</label><!-- permet de nommé -->
                    <br>
                        <div class="gris">
                        <label>
                        <input type="checkbox"
                        name="checkbox"
                        class="nom"
                        value="investissement">
                        investissement</label>
                        </div>
                        <br>
                        <div class="gris">
                        <label>
                        <input type="checkbox"
                        name="checkbox"
                        class="gris"
                        value="prestation de conseil"/>
                        prestation de conseil</label><!--permet de creer des champ pour cocher les REPONSE/ name permet d'enregistrer les données-->
                        </div>
                        <br>
                        <div class="gris">
                        <label>Réponse souhaitée sous: <sup></sup></label><!-- permet de nommé -->

                            <select
                            name="reponse"><!--/ name permet d'enregistrer les données-->
                                <option>
                                    8 jours
                                </option>
                                <option>
                                    2 semaine
                                </option>
                                <option>
                                    3 semaine
                                </option>
                                <option>
                                   1 mois
                                </option>
                                <option>
                                   2 mois
                                </option>
                            </select><!--permet de creer des champ pour choisir dans une liste les REPONSE-->
                       
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="separe">
                <div class="haut">
                    <div class="">
                        <label class="vert">intitulé du projet</label><!-- permet de nommé -->
                        <div class="bleu">
                        <input type="text"
                        name="intitule"
                                placeholder="intitulé du projet"
                                pattern="[a-@]*"><!--permet de creer des champ pour ecrire les REPONSE/ name permet d'enregistrer les données-->
                        </div>
                        </div>
                </div>
                <div class="bas">
                    <div>
                        <label class="vert">
                            Description du projet
                        </label><!-- permet de nommé -->
                    </div>
                        <div class="description">
                        <br>
                        <input type="text"
                            placeholder="description"
                            name="description"
                            pattern="[a-@]*"
                            class="taille"><!--permet de creer des champ pour ecrire les REPONSE/ name permet d'enregistrer les données-->
                        </div>
                </div>
                <div class="droite-boutton">
                    <section>
                        <div class="controle">
                            <input type="submit" value="Envoyer">
                            <input type="reset" value="Renitialiser">
                        </div>
                    </section><!--permet de creer des boutton pour envoyer ou renitialiser -->
                </div>
                </div>
            </div>
        </div> <!--fin de l'encadrer principale-->   
    </form>
</body>
</html>
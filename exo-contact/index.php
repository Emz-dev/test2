<?php
/*
créer une classe Message
avec comme attributs :
- auteur
- email
- sujet
- contenu
respecter le principe d'encapsulation (getters/setters)

faire un formulaire avec des champs correspondants à chaque attribut
en retour de formulaire : 
- instancier un objet Message
- setter les valeurs de ses attributs avec les données venant du formulaire
- afficher les données à partir de l'objet
*/
require_once 'Message.php';

if (!empty($_POST)) {
    $message = new Message();

    $message
        ->setContenu($_POST['contenu'])
        ->setEmail($_POST['email'])
        ->setSujet($_POST['sujet'])
        ->setAuteur($_POST['auteur'])
    ;
}
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        if (isset($message)) :
        ?>
            Auteur : <?= $message->getAuteur() ?><br>
            Email : <?= $message->getEmail() ?><br>
            Sujet : <?= $message->getSujet() ?><br>
            Contenu :<br> <?= nl2br($message->getContenu()) ?><br>
        <?php
        endif;
        ?>
        <form method="post">
            <div>
                <label>Auteur</label>
                <input type="text" name="auteur">
            </div>
            <div>
                <label>Email</label>
                <input type="text" name="email">
            </div>
            <div>
                <label>Sujet</label>
                <input type="text" name="sujet">
            </div>
            <div>
                <label>Contenu</label>
                <textarea name="contenu"></textarea>
            </div>
            <button type="submit">Envoyer</button>
        </form>
    </body>
</html>
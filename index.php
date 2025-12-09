<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="slide" id="contact">
    <div class="gauche"></div>
    <div class="droite">
        <h3>Contact</h3>
        <?php
            if(isset($_GET['success']))
            {
                echo "<div class='message-success'>Votre message à bien été envoyé! Merci</div>";
            }

            if(isset($_GET['error']))
            {
                echo "<div class='message-error'>Une erreur est survenue</div>";
            }

        ?>
        <form action="treatmentContact.php" method="POST">
            <div class="form-group">
                <label for="nom">Nom: </label>
                <input type="text" name="nom" id="nom">
            </div>
            <div class="form-group">
                <label for="email">E-mail: </label>
                <input type="email" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="message">Message: </label>
                <textarea name="message" id="message"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Envoyer">
            </div>
        </form>
    </div>
</div>
</body>
</html>
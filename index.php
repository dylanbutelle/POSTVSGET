<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css"/>
    <title>POST VS GET</title>
</head>
<body>
    <div id="post">
        <h1>
            POST
        </h1>
        <form method="post">
            <label for="nom">Nom</label>
            <input type="text" name="nom"/>
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom"/>
            <input type="submit" name="submitpost" value="Send"/>
        </form>

        <?php
        if(isset($_POST['submitpost'])){
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            echo "<h3>Résultat</h3>";
            echo "<div class='result'>Bonjour ". $prenom." ".strtoupper($nom)."</div>";
        }
        ?>
    </div>

<div id="GET">
    <h1>
        GET
    </h1>
    <form method="get">
        <label for="nom">Nom</label>
        <input type="text" name="nom"/>
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom"/>
        <input type="submit" name="submitget" value="Send"/>
    </form>

    <?php
    if(isset($_GET['submitget'])){
        $nom = $_GET['nom'];
        $prenom = $_GET['prenom'];
        echo "<h3>Résultat</h3>";
        echo "<div class='result'>Bonjour ". $prenom." ".strtoupper($nom)."</div>";
    }
    ?>
</div>

</body>
</html>
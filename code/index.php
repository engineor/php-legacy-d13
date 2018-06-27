<?

session_start();

if ('identification' == $_GET['page'] and isset($_SESSION['identifie']) && true === $_SESSION['identifie'])
header('Location: index.php');

    require 'include/connexion.php';
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
        <meta charset="utf-8">
        <title>Travailler avec du legacy</title>
        <link href="css/principal.css" media="screen" rel="stylesheet" type="text/css">
    </head>
	<body>
        <? require 'include/menu.php' ?>
        <div id="contenu">
            <?php
            if (!empty($_GET['page'])) include ('/root/include/' . basename($_GET['page']));
            else
                include ('/root/include/collection.php'); ?>
        </div>
    </body>
</html>
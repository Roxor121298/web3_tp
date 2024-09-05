<?php
    session_start();

    echo $_SESSION["nomUsager"];

    //$_SESSION["nomUsager"] = "John"; // pour enregistrer des variable de session (associer au cookie)

    echo "1";

    session_destroy(); // pour supprimer les variable permanente

<?php
    session_start();
    //session_destroy();
    if(!isset($_SESSION["loggedin"])) {
        echo "<p>Du bist nicht angemeldet!</p>";
    } else {
        if($_SESSION["loggedin"] == true) {
            session_destroy();
            echo "<p>Du wurdest erfolgreich abgemeldet!</p>";
        }
    }
?>
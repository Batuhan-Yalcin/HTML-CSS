<?php

    session_start();
    $_SESSION = array();
    session_destroy();

    header("location:panelgiris.php"); /*  Kullanıcı ve şifre girmesi için panelgiris.php ye yönlendirme */
    

?>
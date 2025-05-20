<?php

    session_start();

    // $_SESSION["logado"] = false;
    // $_SESSION["usuario"] = null;
    unset($_SESSION["logado"]);
    unset($_SESSION["usuario"]);

    var_dump($_SESSION);

?>
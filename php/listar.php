<?php
    include("header.php");
    include("check.php");
    include("session.php");
    include("sidebar.php");
    include("navbar.php");
    include("db.php");
    $busca = 0;
    include('listar_'.$type.'.php');
    include("popup.php");
    include("endfile.php");
?>
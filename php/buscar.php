        <?php
        include("header.php");
        include("check.php");
        include("session.php");
        include("sidebar.php");
        include("navbar.php");
        include("popup.php");
        include("db.php");
        $busca = $_GET["busca"];
        include('listar_'.$type.'.php');
        include("endfile.php");
        ?>
        
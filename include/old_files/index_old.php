<?php
    header ("Content-Type:text/html;charset=UTF-8");
    include ("{$_SERVER['DOCUMENT_ROOT']}/include/db_connect.php");
    

    include ("{$_SERVER['DOCUMENT_ROOT']}/include/head.php");
    include ("{$_SERVER['DOCUMENT_ROOT']}/include/header.php");
    include ("{$_SERVER['DOCUMENT_ROOT']}/include/left_menu.php");
    
    include ("{$_SERVER['DOCUMENT_ROOT']}/include/content_dreamteam.php");
    include ("{$_SERVER['DOCUMENT_ROOT']}/include/content_dreamteam-admin.php");

    include ("{$_SERVER['DOCUMENT_ROOT']}/include/app-customizer.php");
    include ("{$_SERVER['DOCUMENT_ROOT']}/include/footer.php");

?>
    <?php

   
    require_once ("{$_SERVER['DOCUMENT_ROOT']}/include/db_connect.php");

    ?>
   
    <!DOCTYPE html>
<html lang="en">
    
    <?php
    
    require_once ("{$_SERVER['DOCUMENT_ROOT']}/include/head.php");
    
    ?>
    <body>
        <div id="block-body">

    <?php
    require_once ("{$_SERVER['DOCUMENT_ROOT']}/include/header.php");
    ?>
        <div id="left-block">
    <?php
    require_once ("{$_SERVER['DOCUMENT_ROOT']}/include/admin_left_menu.php");
    ?>
        </div>
        <div id="content">
    <?php
    require_once ("{$_SERVER['DOCUMENT_ROOT']}/include/admin_content.php");
    ?>
        </div>
   
        <div id="app_customizer">
    <?php
    require_once ("{$_SERVER['DOCUMENT_ROOT']}/include/app_customizer.php");
    ?>
        </div>
        <div id="footer">
        <?php
    require_once ("{$_SERVER['DOCUMENT_ROOT']}/include/footer.php");
        ?>
        </div>
        
        </div>
         <script src="../assets/js/functions_score.js"></script>
    </body>

</html>
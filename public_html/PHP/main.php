<?php    
    // load up your config file
    require_once("../../resources/config.php");
     
    require_once(TEMPLATES_PATH . "/header.php");
    require_once(LIBRARY_PATH . "/functions.php")
?>

<container>
    <?php
        require_once(TEMPLATES_PATH . "/nav.php");
    ?>
        <content>
        <?php
        include("test.php");
        ?>
        </content>

</container>
<?php
    require_once(TEMPLATES_PATH . "/footer.php");
?>

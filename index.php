<?php

include_once("includes/head.php");

require ("config.php");
?>
<html>
    <body>


    <div class="row">
        <div class="col-md-12 themed-grid-col"><?php include("includes/welcome.php"); ?></div>
        <div class="col-md-12 themed-grid-col"><?php include("includes/cards.php"); ?></div>
        <div class="col-md-12 themed-grid-col"><?php include("includes/team.php"); ?></div>
    </div>

    </body>
</html>

<?php
include_once("includes/footer.php");
?>
<?php
error_reporting(E_ALL);
ini_set("display_errors",1);

require __DIR__ ."/vendor/autoload.php";
require __DIR__ ."/web/template/header.php";
?>
<div class="container">
    <div class="row justify-content-center align-items-center">
        <?= "“Hello, NIX Education”.";?>
    </div>
</div>
<?php require __DIR__ ."/web/template/footer.php";?>


<?php
header('Content-Type: text/html;charset=UTF-8');
require __DIR__ ."../../vendor/autoload.php";
require __DIR__ . "/template/header.php";

if(!empty($_POST['name'])){
    $conversely = null;
    $count = mb_strlen($_POST['name']);
    for ($i = 1; $i <= $count; $i++) {
        $conversely .= mb_substr($_POST['name'], -$i, 1);
    }
    $str = $conversely;
}else{
    $str = Null;
}
?>
<div class="container">
    <div class="row justify-content-center align-items-center">
        <form action="lesson3.php" method="post" role="form">
            <br style="clear:both">
            <h3 style="margin-bottom: 25px; text-align: center;">Form</h3>
            <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="Привет NIX Education" required>
            </div>
            <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Submit Form</button>
        </form>
        <div>
            <?php if($str):?>
            <?=$str?>
            <?php endif;?>
        </div>
    </div>
</div>


<?php require __DIR__ . "/template/footer.php"; ?>

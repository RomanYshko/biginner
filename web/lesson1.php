<?php
require __DIR__ ."../../vendor/autoload.php";
require __DIR__ . "/template/header.php";

const number = 1;

use Liw\app\One;
use Liw\app\Two;
use Liw\app\Three;
use Liw\app\Four;
use Liw\app\Five;
use Liw\app\Six;
use Liw\app\Seven;
use Liw\app\Eight;
use Liw\app\Nine;
use Liw\app\Ten;

$numbers[] = new One();
$numbers[] = new Two();
$numbers[] = new Three();
$numbers[] = new Four();
$numbers[] = new Five();
$numbers[] = new Six();
$numbers[] = new Seven();
$numbers[] = new Eight();
$numbers[] = new Nine();
$numbers[] = new Ten();
?>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <?php foreach ($numbers as $number):
                    if($number instanceof \Liw\app\Multiplication):
                        $arrayTables = $number->multiplicationAction();?>
                        <div class="col-xs-12 col-sm-2 col-md-2">
                            <div class="well well-sm">
                                <?php foreach ($arrayTables as $key=>$value):?>
                                    <p><?php  echo $key + number.') ' . $value;?></p>
                                <?php endforeach; ?>
                            </div>
                        </div>
                     <?php endif;
                endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?php require __DIR__ . "/template/footer.php";?>
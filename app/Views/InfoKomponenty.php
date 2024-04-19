<!DOCTYPE html>
<?=$this->extend("layout/template");?>
<?=$this->section("content");?>

<div class="container">
<div class="p3">
    <div class = "row">
    <?php 
        foreach ($info as $row){
    ?>
        <div class = "col-xxl-3 col-sm-12 col-lg-6">
            <div class="card m-5 bg-secondary">
            <div class="card-body">
            <p class="card-text text-center"> Název: <?= $row->nazev ?></p>
            <p class="card-text text-center"> <?= $row->pic ?></p>
            <p class="card-text text-center"> Odkaz: <?= $row->odkaz ?></p>
            <p class="card-text text-center"> Název výrobce: <?= $row->nazev ?></p>
            </div>
            </div>
        </div>
    <?php } ?>

</div>
</div>
<?=$this->endSection();?>
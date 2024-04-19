<!DOCTYPE html>
<?=$this->extend("layout/template");?>
<?=$this->section("content");?>

<div class="container">
<div class="p3">
    <div class = "row">
    <div class = "col-xxl-3 col-m-1 col-sm-0 col-lg-2">
    </div>
    <?php 
        
    ?>
        <div class = "col-xxl-6 col-m-10 col-sm-12 col-lg-8">
            <div class="card m-2 bg-secondary">
            <div class="card-body">
            <p class="card-text text-center"> Název: <?= $info->nazev ?></p>
            <p class="card-text text-center"> <img style="width:300px"src= "<?= base_url('obrazky/komponenty/komponenty/'. $info->pic) ?>"></p>
            <p class="card-text text-center"> Odkaz: <?= $info->odkaz ?></p>
            <p class="card-text text-center"> Název výrobce: <?= $info->vyrobce ?></p>
            </div>
            </div>
        </div>
        <div class = "col-xxl-3 col-m-1 col-lg-2">
    </div>

</div>
</div>
<?=$this->endSection();?>
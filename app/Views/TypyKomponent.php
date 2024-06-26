<!DOCTYPE html>
<?=$this->extend("layout/template");?>
<?=$this->section("content");?>

<div class="container">
<div class="p3">
    <div class = "row">
    <a href="<?= base_url('addCategory') ?>" class="btn btn-primary">Přidej kategorii</a>
    <?php 
        foreach ($typy as $row){
    ?>
        <div class = "col-xxl-3 col-sm-12 col-lg-6">
            <div class="card m-5 bg-secondary">
            <h4 style="height:60px mt-2" class="card-title text-center mt-2 "> <?= anchor('vypisKomponent/'.$row->url, $row->typKomponent) ?></h4>
            <div class="card-body">
            </div>
            </div>
        </div>
    <?php } ?>

</div>
</div>
<?=$this->endSection();?>
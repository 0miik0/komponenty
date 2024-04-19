<!DOCTYPE html>
<?=$this->extend("layout/template");?>
<?=$this->section("content");?>

<div class="container">
<div class="p3">
    <div class = "row">
    <?php 
        foreach ($komponenty as $row){
    ?>
        <div class = "col-xxl-3 col-sm-12 col-lg-6">
            <div class="card m-5 bg-secondary">
            <h4 class="card-title text-center mt-2"><?= anchor('infoKomponenty/'.$row->typKomponent_id, $row->nazev) ?></h4>
            <div class="card-body">
            </div>
            </div>
        </div>
    <?php } ?>

</div>
</div>
<?=$this->endSection();?>
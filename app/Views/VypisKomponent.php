<!DOCTYPE html>
<?=$this->extend("layout/template");?>
<?=$this->section("content");?>

<style>
.pagination {

}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  border-radius: 5px;
}
.pagination a.active {
  background-color: #4CAF50;
  color: white;
  border-radius: 5px;
}

.pagination a:hover:not(.active) {background-color: #6495ED;}
</style>

<div class="container">
<div class="p3">
    <div class = "row">
    <?php 
        foreach ($komponenty as $row){
    ?>
        <div class = "col-xxl-3 col-sm-12 col-lg-6">
            <div class="card m-5 bg-secondary">
            <h4 class="card-title text-center mt-2"><?= anchor('infoKomponenty/'.$row->id, $row->nazev) ?></h4>
            <div class="card-body">
            </div>
            </div>
        </div>
    <?php } ?>

    <footer>
        <div class="d-flex">
            <div class="mx-auto text-center pagination a"> <?= $pager->links(); ?> </div>
        </div>
    </footer>

</div>
</div>
<?=$this->endSection();?>
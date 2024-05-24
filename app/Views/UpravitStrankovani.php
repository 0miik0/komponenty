<!DOCTYPE html>
<?=$this->extend("layout/template");?>
<?=$this->section("content");?>

<style>
.bntColour {
    background-color: #f1f1f1;
    color: black;
    border: none;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    border-radius: 5px;
}
.buttons {
  background-color: #008CBA;
  color: white;
  border-radius: 5px;
}
.buttons:hover {
  background-color: #2471A3;
  color: white;
}
.btnColour a:hover:not(.active) {background-color: #6495ED;}
</style>

<div class = "py-4 d-flex">
    <div class = "mx-auto text-center">
        <button class= "bntColour buttons mx-5" type="submit" value="10">Show 10 per page</button>
        <button class= "bntColour buttons" type="submit" value="20">Show 20 per page</button>
    </div>
</div>

<?=$this->endSection();?>
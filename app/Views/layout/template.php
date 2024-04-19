<html>
    <head> 
        <title>Typy Komponent</title>
        <?= $this->include("layout/assets");?> 
    </head> 
    <body>
        <?= $this->include("layout/navbar");?>
        <?= $this->renderSection("content"); ?> 
    <body>
</html>
<?php 
    include("/forms/functions.php");
    $id = $_GET['id'];
    $actu = getImages($id);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>TODO write content</div>
        <h2>Fiche</h2>
        <p>id : <?php echo $actu['id']; ?></p>
        <p>date : <?php echo $actu['img']; ?></p>
        <p>date : <?php echo $actu['descri']; ?></p>
	</form>
    </body>
</html>

<?php 
include("connection.php");

function getRechauffement() {

    $sql="SELECT * FROM rechauffement";
    $req=mysqli_query(connect(),$sql);
    $result=$req->fetch_all(MYSQLI_ASSOC);
    //mysqli_free_result($req);    
    return $result;
}

function getImages() {

    $sql="SELECT * FROM images";
    $req=mysqli_query(connect(),$sql);
    $result=$req->fetch_all(MYSQLI_ASSOC);
    //mysqli_free_result($req);    
    return $result;
}

function getCas() {

    $sql="SELECT * FROM cas";
    $req=mysqli_query(connect(),$sql);
    $result=$req->fetch_all(MYSQLI_ASSOC);
    //mysqli_free_result($req);    
    return $result;
}

function insertCas($descri, $continent) {

    $ajout = "INSERT INTO cas(descri,continent) VALUES ('%s','%s')";
    $ajout = sprintf ($ajout,$descri, $continent);
    $resultat = mysqli_query(connect(),$ajout);
    header('Location:back.php?reussi=0');

}

function deleteCas($id) {

    $suppr = "DELETE FROM cas where id=%s";
    $suppr = sprintf ($suppr,$id);
    $resultat = mysqli_query(connect(),$suppr);
    header('Location:back.php?reussi=0');
}

function updateCas($newdescri,$newcontinent,$descri,$continent) {

    $update = "UPDATE cas SET descri=%s , continent=%s WHERE descri=%s , continent=%s";
    $update = sprintf ($update,$newdescri,$newcontinent,$descri,$continent);
    $resultat = mysqli_query(connect(),$update);
}

function insertActu($img, $descri) {

    $ajout = "INSERT INTO images(img,descri) VALUES ('%s','%s')";
    $ajout = sprintf ($ajout,$img, $descri);
    $resultat = mysqli_query(connect(),$ajout);
    header('Location:back.php?reussi=0');

}
function deleteActu($id) {

    $suppr = "DELETE FROM images where id=%s";
    $suppr = sprintf ($suppr,$id);
    $resultat = mysqli_query(connect(),$suppr);
    header('Location:back.php?reussi=0');
}

function slugify($text, $divider ) {
    
    // replace non letter or digits by divider
    $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, $divider);

    // remove duplicate divider
    $text = preg_replace('~-+~', $divider, $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
    return 'n-a';
    }

    return $text;
}

?>
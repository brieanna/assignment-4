<?php



// database functions ************************************************

function fInsertMovieToDatabase($myDB, $asin, $title, $price) {
  $image = '"http://images.amazon.com/images/P/' . $asin . '.01.MZZZZZZZ.jpg"';
  $sql = $myDB->prepare("INSERT INTO dvdtitles (asin, title, price) VALUES (:asin, :title, :price)");
  $sql->bindParam(":asin", $asin);
  $sql->bindParam(":title", $title);
  $sql->bindParam(":price", $price);
  $sql->execute();
  echo '<img src=' . $image . '>';
}

function fInsertActorToDatabase($myDB, $fname, $lname){

}

function fDeleteMovieFromDatabase($myDB, $asin) {
  $sql = $myDB->prepare("DELETE FROM dvdtitles WHERE asin=:asin");
  $sql->bindParam(":asin", $asin);
  $sql->execute();

}

function fListFromDatabase($myDB) {
  $sql = $myDB->prepare("SELECT asin, title , price FROM dvdtitles ORDER BY title");
  $info = $sql->execute();
echo $info;
  print_r($info);
}
?>


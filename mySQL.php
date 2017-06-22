<?php



// database functions ************************************************

function fInsertToDatabase($myDB, $asin, $title, $price) {
  $image = '"http://images.amazon.com/images/P/' . $asin . '.01.MZZZZZZZ.jpg"';
  $sql = $myDB->prepare("INSERT INTO dvdtitles (asin, title, price) VALUES (:asin, :title, :price)");
  $sql->bindParam(":asin", $asin);
  $sql->bindParam(":title", $title);
  $sql->bindParam(":price", $price);
  $sql->execute();
  echo '<img src=' . $image . '>';
}

function fInsertActors($myDB, $fname, $lname){

}

function fDeleteFromDatabase($myDB, $deleteID) {
  $sql = $myDB->prepare("DELETE FROM dvdtitles WHERE CustID=$deleteID");
  $sql->bindParam(":deleteID", $deleteID);

    // TODO: Fill in the rest of the function
}

function fListFromDatabase() {
  $sql = 'SELECT custID, nameF, nameL FROM tblCustomers ORDER BY CustID';
  // TODO: Fill in the rest of the function
}
?>


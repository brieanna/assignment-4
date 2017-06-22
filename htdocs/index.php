<?php
        #require "../mySQL.php";
include "../mySQL.php";
include "../dbConnect.php";

$myDBConnection = fConnectToDatabase();
    // Wonder Woman
$asin = 'B0714QRG4Z';
$title = 'Wonder Woman';
$price = 19.99;
$fname1 = 'Gal';
$lname1 = 'Gadot';
$fname2 = 'Chris';
$lname2 = 'Pine';

fInsertMovieToDatabase($myDBConnection, $asin, $title, $price);
fListMoviesFromDatabase($myDBConnection);
fInsertActorToDatabase($myDBConnection, $fname1, $lname1);
fListActorsFromDatabase($myDBConnection);
fDeleteActorFromDatabase($myDBConnection, fGetActorID($myDBConnection));
fInsertActorToDatabase($myDBConnection, $fname2, $lname2);
fListActorsFromDatabase($myDBConnection);
fDeleteActorFromDatabase($myDBConnection, fGetActorID($myDBConnection));
fDeleteMovieFromDatabase($myDBConnection, $asin);



    // Doctor Who
$asin = 'B0089AD8IO';
$title = 'Doctor Who';
$price = 33.99;
$fname1 = 'Christopher';
$lname1 = 'Eccleston';
$fname2 = 'Billie';
$lname2 = 'Piper';

fInsertMovieToDatabase($myDBConnection, $asin, $title, $price);
fListMoviesFromDatabase($myDBConnection);
fInsertActorToDatabase($myDBConnection, $fname1, $lname1);
fListActorsFromDatabase($myDBConnection);
fDeleteActorFromDatabase($myDBConnection, fGetActorID($myDBConnection));
fInsertActorToDatabase($myDBConnection, $fname2, $lname2);
fListActorsFromDatabase($myDBConnection);
fDeleteActorFromDatabase($myDBConnection, fGetActorID($myDBConnection));
fDeleteMovieFromDatabase($myDBConnection, $asin);


    // Pride and Prejudice
$asin = 'B000E1ZBGS';
$title = 'Pride and Prejudice';
$price = 13.99;
$fname1 = 'Keira';
$lname1 = 'Knightley';
$fname2 = 'Matthew';
$lname2 = 'Macfadyen';

fInsertMovieToDatabase($myDBConnection, $asin, $title, $price);
fListMoviesFromDatabase($myDBConnection);
fInsertActorToDatabase($myDBConnection, $fname1, $lname1);
fListActorsFromDatabase($myDBConnection);
fDeleteActorFromDatabase($myDBConnection, fGetActorID($myDBConnection));
fInsertActorToDatabase($myDBConnection, $fname2, $lname2);
fListActorsFromDatabase($myDBConnection);
fDeleteActorFromDatabase($myDBConnection, fGetActorID($myDBConnection));
fDeleteMovieFromDatabase($myDBConnection, $asin);

    // Bride and Prejudice
$asin = 'B00094AS9U';
$title = 'Bride and Prejudice';
$price = 7.99;
$fname1 = 'Aishwarya';
$lname1 = 'Rai';
$fname2 = 'Martin';
$lname2 = 'Henderson';

fInsertMovieToDatabase($myDBConnection, $asin, $title, $price);
fListMoviesFromDatabase($myDBConnection);
fInsertActorToDatabase($myDBConnection, $fname1, $lname1);
fListActorsFromDatabase($myDBConnection);
fDeleteActorFromDatabase($myDBConnection, fGetActorID($myDBConnection));
fInsertActorToDatabase($myDBConnection, $fname2, $lname2);
fListActorsFromDatabase($myDBConnection);
fDeleteActorFromDatabase($myDBConnection, fGetActorID($myDBConnection));
fDeleteMovieFromDatabase($myDBConnection, $asin);

    // Lego Batman
$asin = 'B06XJKXY4R';
$title = 'Lego Batman';
$price = 19.99;
$fname1 = 'Will';
$lname1 = 'Arnett';
$fname2 = 'Zach';
$lname2 = 'Galifianakis';

fInsertMovieToDatabase($myDBConnection, $asin, $title, $price);
fListMoviesFromDatabase($myDBConnection);
fInsertActorToDatabase($myDBConnection, $fname1, $lname1);
fListActorsFromDatabase($myDBConnection);
fDeleteActorFromDatabase($myDBConnection, fGetActorID($myDBConnection));
fInsertActorToDatabase($myDBConnection, $fname2, $lname2);
fListActorsFromDatabase($myDBConnection);
fDeleteActorFromDatabase($myDBConnection, fGetActorID($myDBConnection));
fDeleteMovieFromDatabase($myDBConnection, $asin);





echo '<!DOCTYPE html><html><head><title></title></head><body><p> Movies de Brie </p></body></html>';


//http://images.amazon.com/images/P/B0714QRG4Z.01.MZZZZZZZ.jpg wonder woman 19.99
//http://images.amazon.com/images/P/B003G94BZC.01.MZZZZZZZ.jpg doctor who 33.99
//http://images.amazon.com/images/P/B002APU580.01.MZZZZZZZ.jpg pride and prejudice 13.99
//http://images.amazon.com/images/P/B008RPRNGE.01.MZZZZZZZ.jpg bride and prejudice 7.99
//http://images.amazon.com/images/P/B01MUI1NPD.01.MZZZZZZZ.jpg lego batman 19.99


//$stmt = $myDBConnection->prepare("INSERT INTO BriesTestTable (name) VALUES (:name)");
//$stmt->bindParam(":name", $name);
//$stmt->execute();
//
//$stmt = $myDBConnection->prepare("SELECT * FROM BriesTestTable");
//$stmt->execute();
//while($row = $stmt->fetch()){
//    print_r($row);
//}
//
//print_r($myDBConnection);
<?php

    $conn = new PDO("mysql:dbname=stage;host=db","root","azerty") or die('Pb connexion: ');

    $req = "SELECT * FROM t1";

    $sth = $conn->prepare($req);
    $sth->execute();

    while ($ligne = $sth->fetch(PDO::FETCH_ASSOC)) {
	    echo "Prénom: ".$ligne['prenom']."<br>";
    }
?>

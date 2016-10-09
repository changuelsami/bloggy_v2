<pre>
<?php
$user = $pass = "root";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=bloggy_v1', $user, $pass);
print_r($dbh);    
    //$res = $dbh->query('SELECT * FROM contact; delete from contact'); // ça marche
    $res = $dbh->query('SELECT * FROM contact');
    if (!$res )
    	exit("NADA ::");
    print "Resultat : ";
    foreach($res as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>

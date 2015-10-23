

<?php
$q = intval($_GET['q']);
//echo q;

$database = new PDO('mysql:host=localhost;dbname=ship', 'root', 'root');
    $res = $database->query("select Yaw, Pitch, Roll, Heave from yawpitchrolldata where FileId = '".$q."'");
    //echo "var Data = [";
   // echo "[";
    if($res && $row = $res->fetch(PDO::FETCH_NUM)) {
        echo "$row[0], $row[1], $row[2], $row[3]";
    }
    while($res && $row = $res->fetch(PDO::FETCH_NUM)) {
        echo ",   $row[0], $row[1], $row[2], $row[3]";
    }
   //echo "];";
    //echo "var boatData = [0,0,0,0,  0.2, 0.1, -0.1, 1,   0.35, 0.15,-0.2, 1.5,   0.30, 0.2, -0.15, 2,   0.20, 0.0, -0.05, 0.5,  0.1, -0.05, 0.05, -0.5 ];";
    $res->closeCursor();
    $database = null;
?>

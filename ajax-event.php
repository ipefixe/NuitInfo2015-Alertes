<?php
/**
 * Created by PhpStorm.
 * User: nomce
 * Date: 04/12/15
 * Time: 03:35
 */
require("library.php");
$con = connectToDatabase();

if (isset($_GET['event'])){
    $local = mysqli_real_escape_string($con, htmlentities($_GET['event']));
    $sql = "SELECT titre_alerte, niveau_alerte,message_alerte FROM ALERTE ORDER BY date_alerte DESC LIMIT $local";

    $req = mysqli_query($con, $sql);


    while($row = $req->fetch_assoc()) {
        $result[] =htmlentities(mb_convert_encoding($row, 'UTF-8', 'ASCII'), ENT_SUBSTITUTE, "UTF-8");
        //$result[] = htmlspecialchars($row, ENT_QUOTES,"UTF-8");
    }
    echo json_encode($result);

}else{
    echo $_GET['event'];
}
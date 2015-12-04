<?php
/**
 * Created by PhpStorm.
 * User: nomce
 * Date: 04/12/15
 * Time: 03:35
 */
require("library.php");
$con = connectToDatabase();

$func = function($value) {
    return htmlentities($value, ENT_QUOTES);
};

if (isset($_GET['event'])){
    $local = mysqli_real_escape_string($con, htmlentities($_GET['event']));
    $sql = "SELECT * FROM ALERTE ORDER BY date_soumission_alerte DESC LIMIT $local";

    $req = mysqli_query($con, $sql);


    while($row = $req->fetch_assoc()) {
        $result[] = array_map($func, $row);// Array(, htmlspecialchars($row[1]), htmlspecialchars($row[2]), htmlspecialchars($row[3]));
        //$result[] = htmlspecialchars($row, ENT_QUOTES,"UTF-8");
    }
    //var_dump($result);
    echo json_encode($result);

}else{
    echo $_GET['event'];
}
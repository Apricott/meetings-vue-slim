<?php
class MyDB extends SQLite3 {
    function __construct() {
        $this->open('participants.db');
    }
}
$db = new MyDB();
if(!$db) {
    echo $db->lastErrorMsg();
    exit();
}
$sql = "SELECT id, firstname, lastname FROM participant";
$result = $db->query($sql);
while($row = $result->fetchArray(SQLITE3_ASSOC) ) {
    echo "id = ". $row['id'] . ", ";
    echo "firstname = ". $row['firstname'] . ", ";
    echo "lastname = ". $row['lastname'] ."<br>";
}
$db->close();
?>
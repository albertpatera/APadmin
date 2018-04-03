<?php
/*
$id = $_POST["id"];
$mysqli = new mysqli("localhost", "root", "", "test");

if($mysqli->connect_errno)
{
	echo "Could not connecte to database" . $mysqli->connect_error();
}


$stmt = $mysqli->prepare("SELECT * FROM clanky WHERE `id` = 1");
$stmt->execute();
$result = $stmt->get_result();
if($stmt->num_rows() == 0) {
	echo "DB is empty";
}
$result = array();

while($row = $result->fetch_assocs())
{
	array_push($result, array('id' => $row["id"],
						'title' => $row["title"])
						);
	echo json_encode(array('result' => $result));


}




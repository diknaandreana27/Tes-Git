<?php

$mysqli = new mysqli("localhost","root","","data_db");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$hasil = $mysqli -> query("SELECT * FROM data");
if(mysqli_num_rows($hasil) > 0 ){
  $response = array();
  $response["data"] = array();
  while($x = mysqli_fetch_array($hasil)){
    $h['id'] = $x["id"];
    $h['name'] = $x["name"];
    $h['address'] = $x["address"];
    $h['age'] = $x["age"];
    $h['hobbies'] = $x["hobbies"];
    $h['is_married'] = $x["is_married"];
    $h['list_school'] = $x["list_school"];
    $h['skills'] = $x["skills"];
    $h['interest_in_coding'] = $x["interest_in_coding"];
    array_push($response["data"], $h);
  }
  echo json_encode($response);
}else {
  $response["message"]="tidak ada data";
  echo json_encode($response);
}
?>

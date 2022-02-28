<?php
$servername = "localhost";
$username = "root";
$password = "";
$Database ="Fauziya";

// Create connection
$conn = new mysqli($servername, $username, $password, $Database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connection successful";

// Create database
//$sql = "CREATE DATABASE Fauziya";
//if ($conn->query($sql) === TRUE) {
 // echo "Database created successfully";
//} else {
  //echo "Error creating database: " . $conn->error;
//}

// sql to create table
//$sql = "CREATE TABLE patientsRecord (
  //  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //fname VARCHAR(30) NOT NULL,
    //sname VARCHAR(30) NOT NULL,
    //date1 DATE,
    //age  INT,
    //phone VARCHAR(15) NOT NULL UNIQUE ,
    //gender TEXT,
    //country VARCHAR(20) NOT NULL
    //)";

//if ($conn->query($sql) === TRUE) {
  //  echo "Table patientsRecord created successfully";
  //} else {
    //echo "Error creating table: " . $conn->error;
  //}
  //POSTING WHAT IS IN THE FORM TO THE DATABASE
        //$id = $_REQUEST['id'];
        //$fname =  $_REQUEST['fname'];
        //$sname = $_REQUEST['sname'];
        

        //$sql = "INSERT INTO patientsRecord VALUES('','$fname', '$sname')";
        
         //if(mysqli_query($conn, $sql)){
            //echo "<h3>data stored in a database successfully." 
               // . " Please browse your localhost php my admin" 
             //   . " to view the updated data</h3>"; 
              // } else{
            //echo "ERROR: Hush! Sorry $sql. " 
          //      . mysqli_error($conn);
        //}
    //sql delete record works when insert is commented
  //      $sql = "DELETE FROM patientsRecord WHERE id=3";
//if ($conn->query($sql) === TRUE) {
  //echo "Record deleted successfully";
//} else {
  //echo "Error deleting record: " . $conn->error;
//}

//sql update changes the data in tables
//$sql = "UPDATE patientsRecord SET sname='Mbarak' WHERE id=1";

//if ($conn->query($sql) === TRUE) {
  //echo "Record updated successfully";
//} else {
  //echo "Error updating record: " . $conn->error;
//}

//select displays data from the db on the web
$sql = "SELECT id, fname, sname FROM patientsRecord";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["fname"]. " " . $row["sname"]. "<br>";
  }
} else {
  echo "0 results";
}
        mysqli_close($conn);
?>
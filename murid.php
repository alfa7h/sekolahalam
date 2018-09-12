<!DOCTYPE html>
<html>
<head>
	<title>Data Murid</title>
</head>
<body  style="background-color: #00897b">

<?php require_once('navbar.php'); ?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT nis, nama, kelas FROM inputs";
$result = $conn->query($sql);

//if ($result->num_rows > 0) {
  //  echo "<table><tr><th>NIS</th><th>Nama</th><th>Kelas</th></tr>";
    // output data of each row
    //while($row = $result->fetch_assoc()) {
      //  echo "<tr><td>" . $row["nis"]. "</td><td>" . $row["nama"]. "</td><td> " . $row["kelas"]. "</td></tr>";
    //}
    //echo "</table>";
//} else {
  //  echo "0 results";
//}

//$conn->close();
//?> 
	
	<div class="container">
	<div class=" artikel-jarak">
  	<div class="row">
    <div class="col s12 m12 l12">
    <div class="artikel-form">
    <h4>Data Murid</h4>
    <?php
    if ($result->num_rows > 0) {
    echo"
      <table >
        <thead>
          <tr>
              <th>No</th>
              <th>Nis</th>
              <th>Nama</th>
              <th>Kelas</th>
          </tr>
        </thead>
        ";
        $x=1;
        while($row = $result->fetch_assoc()) {
        echo"
        <tbody>
          <tr>
          	<td>$x</td>
          	<td>".$row["nis"]."</td>
            <td>".$row["nama"]."</td>
            <td>".$row["kelas"]."</td>
          </tr>
          </tbody>
          "; $x = $x+1; }
        echo "</table>";
        } else {
    echo "0 results";
}

$conn->close();
?> 

      </div>
    </div>
    <ul class="center pagination">
    	<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    	<li class="active"><a href="#!">1</a></li>
    	<li class="waves-effect"><a href="#!">2</a></li>
    	<li class="waves-effect"><a href="#!">3</a></li>
    	<li class="waves-effect"><a href="#!">4</a></li>
    	<li class="waves-effect"><a href="#!">5</a></li>
    	<li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  	</ul>
    </div>
    </div>
    </div>

<?php require_once('footer.php'); ?>
</body>
</html>

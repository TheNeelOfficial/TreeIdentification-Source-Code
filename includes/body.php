
<body>
<div id="logo" class="logo"><img src="http://www.gusac.org/images/gusac/gusac-main.png" alt="GUSAC logo" height="50px"></div>
<div id="header" class="header">
<h1>GITAM TREE IDENTIFICATION</h1>
</div>

<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "trees";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
} 



$sql = "SELECT 
name,img,botname,kingdom,division,class,ord,genus,species,family,description,uses,img FROM trees where sno=$_GET[tree]";

$result = $conn->query($sql);
if ($result->num_rows>0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
echo '<div class="content-tablet">'.
"<h3 id=".name.">".$row["name"]."</h3>".
"<img id=".image." src=".$row['img']." alt=".tree."/>".
'<table>'.
'<tr><td id="bold">BOTANICAL NAME</td> <td id="colun"> - </td>'."<td id=".text.">".$row["botname"]."</td>".'</tr>'.
'<tr><td id="bold">KINGDOM </td><td id="colun"> - </td>'."<td id=".text.">".$row["kingdom"]."</td>".'</tr>'.
'<tr><td id="bold">DIVISION </td><td id="colun"> - </td>'."<td id=".text.">".$row["division"]."</td>".'</tr>'.
'<tr><td id="bold">CLASS </td><td id="colun"> - </td>'."<td id=".text.">".$row["class"]."</td>".'</tr>'.
'<tr><td id="bold">ORDER </td><td id="colun"> - </td>'."<td id=".text.">".$row["ord"]."</td>".'</tr>'.
'<tr><td id="bold">GENUS </td><td id="colun"> - </td>'."<td id=".text.">".$row["genus"]."</td>".'</tr>'.
'<tr><td id="bold">SPECIES </td><td id="colun"> - </td>'."<td id=".text.">".$row["species"]."</td>".'</tr>'.
'<tr><td id="bold">FAMILY </td><td id="colun"> - </td>'."<td id=".text.">".$row["family"]."</td>".'</tr>'.
'<tr><td id="bold">DESCRIPTION</td> <td id="colun"> - </td>'."<td id=".text.">".$row["description"]."</td>".'</tr>'.
'<tr><td id="bold">USES </td><td id="colun"> -  </td>'."<td id=".text.">".$row["uses"]."</td>".'</tr>
</table>
</div>'.

"<div class=".content.">".
"<h3 id=".name.">".$row["name"]."</h3>".
"<img id=".image." src=".$row['img']." alt=".tree."/>".
'<p id="bold">BOTANICAL NAME</p>'.
"<p id=".text.">".$row["botname"]."</p>".
'<p id="bold">KINGDOM</p>'.
"<p id=".text.">".$row["kingdom"]."</p>".
'<p id="bold">DIVISION</p>'.
"<p id=".text.">".$row["division"]."</p>".
'<p id="bold">CLASS</p>'.
"<p id=".text.">".$row["class"]."</p>".
'<p id="bold">ORDER</p>'.
"<p id=".text.">".$row["ord"]."</p>".
'<p id="bold">GENUS</p>'.
"<p id=".text.">".$row["genus"]."</p>".
'<p id="bold">SPECIES</p>'.
"<p id=".text.">".$row["species"]."</p>".
'<p id="bold">FAMILY</p>'.
"<p id=".text.">".$row["family"]."</p>".
'<p id="bold">DESCRIPTION</p>'.
"<p id=".text.">".$row["description"]."</p>".
'<p id="bold">USES</p>'.
"<p id=".text.">".$row["uses"]."</p>".
'</div>';

}
} 
else {
	  echo "no results found";
}

$conn->close();

?>

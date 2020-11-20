<head>
	<title>Table With Database</title>
	<style type="text/css">
		table{
			border-collapse: collapse;
			width: 100%;
			color: black;
			font-family: monospace;
			font-size: 25px;
			text-align: left;
			outline-style:ridge;

		}
		th{
			
			background-color: black;
			color: white;

		}
		body
		{background-color:#fefbd8;
		}
	</style>
</head>
<body>


<table>
	<tr>
		
		
	</tr>
<?php
	//create connection
$connection = mysqli_connect("localhost", "root", "", "customer detail");

//test if connection failed
if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}

//get results from database
$result = mysqli_query($connection,"SELECT * FROM customer");
$all_property = array();  //declare an array for saving property

//showing property
echo '<table class="data-table">
        <tr class="data-heading">';  //initialize table tag
while ($property = mysqli_fetch_field($result)) {
    echo '<td>' . $property->name . '</td>';  //get field name for header
    array_push($all_property, $property->name);  //save those to array
}
echo '</tr>'; //end tr tag

//showing all data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    foreach ($all_property as $item) {
        echo '<td>' . $row[$item] . '</td>'; //get items using property value
    }
    echo '</tr>';
}
echo "</table>";
?>

<html>
<br>
<br>
<a href="Home.html">Go Back To Home</a>
</html>

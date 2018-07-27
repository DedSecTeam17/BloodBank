 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodbank";

//$name = $_POST["name"];
$bloodtype = $_POST["bloodtype"];
//$phonenumber = $_POST["phonenumber"];
//$gender = $_POST["gender"];
$city = $_POST["city"];
//$joindate = date("y-m-d");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, bloodtype, phonenumber, gender, city ,joindate FROM bloodbank WHERE bloodtype='".$bloodtype."' AND city='".$city."'";

		$txt1 = '<div class="container f mt-3 rtl">
  <h2 class="mx-auto text-center">قائمة المتبرعين</h2>     
  <table class="table table-dark table-striped table-hover text-center">
	 <thead> <tr class="bg-success"><th>تاريخ التسجيل</th><th>رقم الهاتف</th><th>المدينة</th><th>الفصيلة</th><th>اسم المتبرع</th></tr></thead>
    <tbody>';
	$txt2="";
	$txt3 = '</tbody>
	</table>
</div>';
	

$sql = $conn->query($sql);
if ($sql->num_rows > 0) {
    while($row = $sql->fetch_assoc()) {
        $name = $row["name"];
		$bloodtype = $row["bloodtype"];
		$phonenumber = $row["phonenumber"];
		$gender = $row["gender"];
		$city = $row["city"];
		$joindate = $row["joindate"];
		//echo $name;
		//echo $name." | ".$bloodtype." | ".$phonenumber." | ".$gender." |".$city." | ".$joindate."</br>";
	$txt2 .="<tr>
    <td>$joindate</td>
    <td>$phonenumber</td>
	<td>$city</td>
	<td>$bloodtype</td>
	<td>$name</td>
	</tr>";
	
    }
	echo $txt1.$txt2.$txt3;
}
else
{
	echo'<div class="container f mt-3 rtl">
  <h2 class="mx-auto text-center">قائمة المتبرعين</h2>     
 <table class="table table-dark table-striped table-hover text-center">
	 <thead> <tr class="bg-success"><th>تاريخ التسجيل</th><th>رقم الهاتف</th><th>المدينة</th><th>الفصيلة</th><th>اسم المتبرع</th></tr></thead>
    <tbody class="mx-auto text-center">
	<tr>
	<td>لا يوجد نتائج</td>
	</tr>
	</tbody>
	</table>
</div>';
}

$conn->close();
?> 
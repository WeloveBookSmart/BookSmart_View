<?php
$con = mysqli_connect("localhost","root","","testing");

$sql = "SELECT s.service_name,t.package_name,u.username,b.user_book,b.payment_status,p.status 
		FROM tbl_service AS s, tbl_package AS t,payment AS p, service_booked AS b, user AS u
		WHERE u.username = b.user_book ON (u.uid = b.uid) AND p.status = b.payment_status ON (p.p_id = b.p_id) AND t.package_name = b.package_name ON(t.package_id = b.package_id)";
$res = mysqli_query($con,$sql);

if($res == true)
{
	$sql = "INSERT INTO service_booked(package_id,package_name,package_price,user_book,payment_status) VALUE('$package_id','$package_name','$package_price,'$user_book','$payment_status')";
	$result = mysqli_query($con,$sql);

}
else
{
	echo "<script>alert(Error Data Inserted)</script>";
}

$close = mysqli_close($con);
?>
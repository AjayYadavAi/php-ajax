<?php
$connect = new mysqli("avatar.com",'root','','testing');
$request = mysqli_real_escape_string($connect,$_POST['query']);
$query = "select * from countries where name like '%$request%'";
$result = mysqli_query($connect,$query);
$data = array();
if(mysqli_num_rows($result) > 0){
	while ($row = mysqli_fetch_assoc($result)) {
		# code...
		$data[] = $row['name'];
	}
	echo json_encode($data);
}

?>
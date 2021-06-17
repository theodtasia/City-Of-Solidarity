<?php
require('connection.php');
//if(isset($_REQUEST['query'])){
	$inputText=$_REQUEST['query'];
	$query="SELECT a.name_organ FROM user_info a , usertable b WHERE b.id=a.user_id and b.isvolun=2 and a.lang='el'";
	$res=mysqli_query($conn,$query);
	$rset = array();
	while($row=mysqli_fetch_assoc($res)){
			$rset[]=$row['name_organ'];
	}
	echo json_encode($rset,JSON_UNESCAPED_UNICODE);
//}
?>
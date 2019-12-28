<?PHP

	require_once('connect.php');
	
	//$sql = "delete from reg where username = 'da1'";
	//$query = mysql_query($sql);
	
	$sql = "update reg set username = 'da1' where id = 4";
	$query = mysql_query($sql);
	
	$sql = "select * from reg limit 2";
	$query = mysql_query($sql);
	
	//print_r($query);
	//print_r(mysql_num_rows($query));
	
	//$row = mysql_fetch_row($query);
	//print_r($row);
	
	/*while($row = mysql_fetch_row($query)){    //数组下标的方式输入
		print_r($row);
	}*/
	
	/*while($row = mysql_fetch_assoc($query)){    //数组键值的方式输入
		print_r($row);
	}*/
	
	/*while($row = mysql_fetch_array($query)){    //数组整体的方式输入
		print_r($row);
	}*/
	
	/*while($row = mysql_fetch_object($query)){    //对象键值的方式输入
		print_r($row);
	}*/
	/*while($row = mysql_fetch_assoc($query)){    //数组键值的方式输入
		print_r($row['username']);
	}*/
	/*while($row = mysql_fetch_object($query)){    //对象键值的方式输入
		print_r($row -> username);
	}*/
	while($row = mysql_fetch_assoc($query)){    //数组键值的方式输入
		$data[] = $row;
	}
	
	//print_r(json_encode($data));
	
	echo json_encode($data);
	
?>
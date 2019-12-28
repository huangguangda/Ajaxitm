<?PHP

	header("Content-type: text/html; charset=utf-8");
	$con = mysql_connect('localhost','root','');
	mysql_select_db('ajaxitem');
	mysql_query('set names utf8');

?>
<?php
	header("Content-type:text/html;charset=utf8");
	require_once('mysqliDb.class.php');
	$mysqlidb = new mysqliDb();
	
	$config=array(
		'dbhost' => 'localhost',
		'dbuser' => 'root',
		'dbpsw' => '',
		'dbname' => 'tempdata',
		'dbcharset' => 'utf8'
	);
	$mysqlidb->connect($config);
/*添加数据
	$arr=array(
		'temperature'=>12.63
	);
	$mysqlidb->insert('temperature',$arr);*/
/*修改数据
	$arr=array(
		'temperature'=>'23.22'
	);
	$mysqlidb->update('temperature',$arr,'1');*/
	
/*删除
	$mysqlidb->del('temperature','1');*/
	
	$result = $mysqlidb->query("SELECT * FROM temperature");
	$data = $mysqlidb->findAll($result);
	var_dump($data);
	echo '<br />';
	
?>
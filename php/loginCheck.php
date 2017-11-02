<?php
	header("Content-type:text/html;charset=utf-8");
	//1、接收用户的数据
	$userNum = $_POST['userNum'];
	$passWord = $_POST['passWord'];
	
	//2、处理(连接数据库)
	//1)、连接数据库服务器
	$con = mysql_connect("localhost:3306","root","93zd");
	if(!$con){
		die("连接失败".mysql_error());
	}else{
		//2)、选择数据库
		mysql_select_db("project10",$con);
		//3）、执行sql语句（添加）
		$sqlStr = "select * from userRegister where phoneNum='".$userNum ."' and setPass='".$passWord."'";
		//查找时的输出的是表格所以要获取行数
		$result = mysql_query($sqlStr,$con);
		
		$rows = mysql_num_rows($result);
		//4)、关闭数据库
		mysql_close($con);
		//3、响应
		echo $rows;
	}
?>
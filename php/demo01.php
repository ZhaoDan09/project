<?php
	header("content-type:text/hmtl;charset=utf-8");

	//1)搭桥
	$con=mysql_connect("localhost","root","93zd");
	if(!$con){
		die("连接失败".mysql_error());
	}else{
		echo "连接成功"; 
	}
	//选择数据库
	mysql_select_db("project10",$con);
	//执行SQL
	//定义了一个字符串
	$sqlStr="insert into userRegister(phoneNum,setPass,confirmPass) value('13312345678','1234aa','1234aa')";
	//执行
	
	mysql_query($sqlStr,$con);
	//关闭数据库
	/*if($rowCount==1){
	echo"添加成功";
	}else{
	echo"添加失败";
	}*/
	mysql_close($con);
?>
<?php
	header("Content-type:text/html;charset=utf-8");
	//1:接收用户数据
	$phoneNum=$_GET['phoneNum'];
	//2.处理数据
	//1)连接数据库
	$con=mysql_connect("localhost","root","93zd");
	if(!$con){
		die("连接失败".error());
	}else{
		//2)选择数据库
		mysql_select_db("project10",$con);
		//3)执行(查找)
		//定义一个字符串
		$sqlStr="select * from userRegister where phoneNum='".$phoneNum."'";
		$result=mysql_query($sqlStr,$con);
		//若表中存在的话则表添加一行
		$rows=mysql_num_rows($result);
		//4)关闭数据库
		mysql_close($con);
		
		if($rows==1){
			echo "1";
		}else if($rows==0){
			echo "0";
		}
	}
	
?>
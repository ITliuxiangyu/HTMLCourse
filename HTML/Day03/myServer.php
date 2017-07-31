<?php 

	header("Content-Type: text/html; charset=utf-8");
	// 输出内容
	echo("Hello, world!");

	// 获取用户名
	// echo("前端输入的用户名为：".$_GET['user']."密码为：".$_GET['password']);
	echo("前端输入的用户名为：".$_POST['user']."密码为：".$_POST['password']);

	// if ($_GET["user"] == "waige" && $_GET["password"] == 123456) {
	// 	echo("登录成功！！！");
	// } else {
	// 	echo("账号或密码不正确！！！");
	// }

 ?>
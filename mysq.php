<?php
   $db=new mysqli("localhost","root","","info");// 地址 用户名 密码 数据库名
 
   $db->query("set names utf8"); // 执行数据库语言
   $result=$db->query("select * from student"); // 得到一个结果集(查询时)
   
   $str="<table>"; // 当前每行的数据
   while($row=$result->fetch_assoc()){
   
   	$str.="<tr>";
	   	$str.="<td>".$row["name"]."</td>";
	   	$str.="<td>".$row["sex"]."</td>";
	   	$str.="<td>".$row["age"]."</td>";
   	$str.="</tr>";
   
   }
   	$str.="</table>";
   	echo $str;
    // include "一个文件"
    // ($db->affected_rows>0)
?>
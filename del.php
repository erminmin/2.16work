<?php
   $db=new mysqli("localhost","root","","info");
   $db->query("set names utf8");
   $id=$_GET["id"];
   $sql="delete from student where id=".$id;
   echo $sql;
   $db->query($sql);
   if($db->affected_rows>0){
     echo "<script>alert('删除成功！');location.href='student.php'</script>";
      
   } 
  ?>

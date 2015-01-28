<?php
$answers1=array();
$num_t = 0;
	for($i=0;true;$i++,$num_t++) {
  	if(array_key_exists("vote".$i,$_POST)){
    	 $answers1[$i]=$_POST["vote".$i];
    	 }
  	else
    	 break;
	}
	echo "<>"."The ********* is:".$i."<hr>";
	echo "<>"."The ********* is:".$num_t."<hr>";
	for($i = 0;$i < $num_t;$i++){
		echo $answers1[$i]."<br>";
	}

	 $hostname = 'localhost';
     $user='root';
     $password = 'panpan';
   
     $link = mysql_connect($hostname,$user,$password);
     if($link)
       echo 'database is connectted!';
     else 
       echo 'Fail ';
     $database = mysql_select_db('EXAM',$link);
     mysql_query('set names gb2312');
     mysql_query("insert into sel_user(id,title,answer,answer2,answer3,answer4,right_ans,score) values("."\'".{$answers1[0]}.","."\'".{$answers1[1]}.","."\'".{$answers1[2]}.","."\'".{$answers1[3]}.","."\'".{$answers1[4]}.","."\'".{$answers1[5]}.","."\'".{$answers1[6]}.","."\'".{$answers1[7]}."\'".")");
?>
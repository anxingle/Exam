<?php
$answers=array();
$num_t = 0;
	for($i=0;true;$i++,$num_t++) {
  	if(array_key_exists("vote".$i,$_POST))
    	 $answers[$i]=$_POST["vote".$i];
  	else
    	 break;
	}
	echo "<>"."The ********* is:".$num_t."<hr>";
	for($i = 0;$i < $num_t;$i++){
		echo $answers[$i]."<br>";
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
     mysql_query("update score_byuser set score = 20 where id = 1");
?>
<?php
namespace data_link;
header("Content-type: text/html; charset=utf-8");

   class db{
   	private $hostname='localhost';
   	private $user ='root';
   	private $pwd = 'panpan';
   	private $link;
   	private $database;
   	private $result;
   	private $num;
   	private $info;
   	function __construct($hostname,$user,$pwd){
   		//echo "The database connected!"."<hr>";
   		$this->hostname = $hostname;
   		$this->user = $user;
   		$this->pwd = $pwd;

   		$this->link = mysql_connect($hostname,$user,$pwd);
   		mysql_query('set names gb2312');
   		//$this->link = mysql_connect($hostname,$user,$password);
   	}
   	function __destruct(){
   		mysql_close($this->link);
   	}
   	function sel_db($database){
   		$this->database = mysql_select_db($database,$this->link);
   	}

   	function exec($sql){
   		$this->result = mysql_query($sql,$this->link);
   	}
   	function show_numbers(){
   		$this->num = mysql_num_rows($this->result);
   	}
   	function show_array($result){
   		$this->info = mysql_fetch_row($result);
   	}
   	function get_result(){
   		return $this->result;
   	}
   	function get_info(){
   		return $this->info;
   	}
   	function show(){
   		echo "$this->hostname"."<hr>";
   		echo "$this->link"."<hr>";
   	}
   }



?>


<html>
    <head>  <meta http-equiv="Content-Type" content="text/html";charset="utf-8">
    <style> 
    .bor{border:1px dashed #F00;width:400px;height:60px;margin-top:10px;margin-left:25%;} 
    </style>
    <title>Online exam</title> 
    </head>
<body bgcolor="#FFE6CC">
	<p align="center"><img src="title_1.png"></p>

	<form name="admin" action="process.php" method="post" style="margin-bottom:5px;">
	  <table width="450" border="0" align="left" cellpadding="5" cellspacing="1" bgcolor="#CCCCCC">  
    	<tr align = "left">
        	<td height="50" align="left" bgcolor="#F0F000"><strong>
        	please input the id of question: 
        	</strong></td>
        	<td height="50" align="left" bgcolor="#F0F000"><strong>
        	<input name= "<?php echo 'vote'.'0' ?>" type ='text' value='question id' size = '12'>
        	<input name = 'okid' type = 'button' value = 'OK'>
        	</strong></td>

    	</tr>   
    	<tr align = "left">
        	<td height="50" align="left" bgcolor="#F0F000"><strong>
        	please input the title of question: 
        	</strong></td>
        	<td height="70" weight='400' align="left" bgcolor="#F0F000"><strong>
        	<input name= "<?php echo 'vote'.'1' ?>" type ='text' value='question title' size = '32' maxlength='2000'>
        	<input name = 'oktitle' type = 'button' value = 'OK'>
        	</strong></td>
    	</tr> 
    	<tr align = "left">
        	<td height="50" align="left" bgcolor="#F0F000"><strong>
        	please input A answer: 
        	</strong></td>
        	<td height="70" weight='400' align="left" bgcolor="#F0F000"><strong>
        	<input name= "<?php echo 'vote'.'2' ?>" type ='text' value='question title' size = '32' maxlength='2000'>
        	<input name = 'okA' type = 'button' value = 'OK'>
        	</strong></td>
    	</tr> 
    	<tr align = "left">
        	<td height="50" align="left" bgcolor="#F0F000"><strong>
        	please input B answer: 
        	</strong></td>
        	<td height="70" weight='400' align="left" bgcolor="#F0F000"><strong>
        	<input name= "<?php echo 'vote'.'3' ?>" type ='text' value='question title' size = '32' maxlength='2000'>
        	<input name = 'okB' type = 'button' value = 'OK'>
        	</strong></td>
    	</tr> 
    	<tr align = "left">
        	<td height="50" align="left" bgcolor="#F0F000"><strong>
        	please input C answer: 
        	</strong></td>
        	<td height="70" weight='400' align="left" bgcolor="#F0F000"><strong>
        	<input name= "<?php echo 'vote'.'4' ?>" type ='text' value='question title' size = '32' maxlength='2000'>
        	<input name = 'okC' type = 'button' value = 'OK'>
        	</strong></td>
    	</tr> 
    	<tr align = "left">
        	<td height="50" align="left" bgcolor="#F0F000"><strong>
        	please input D answer: 
        	</strong></td>
        	<td height="70" weight='400' align="left" bgcolor="#F0F000"><strong>
        	<input name= "<?php echo 'vote'.'5' ?>" type ='text' value='question title' size = '32' maxlength='2000'>
        	<input name = 'okD' type = 'button' value = 'OK'>
        	</strong></td>
        	<input type='submit' name='Submit' value="submit">
    	</tr> 
       </table>
  </form> 


</body>
</html>
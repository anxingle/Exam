<script type="text/javascript">
	 function check()
	 {
  		node=frm.vote;
  		flag=false;
	 	 for(i=0;i<node.length;i++)
		 {
			 if(node[i].checked)
		   {
			   	flag=true;
			 }
		 }
		if(!flag)
		{
			alert("您还没有答完!")
			return false;
		}
	}
</script>
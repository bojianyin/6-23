<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="__PUBLIC__/css/index.css">
	<script src="http://www.jq22.com/jquery/jquery-2.1.1.js"></script>
</head>
<body>
	<div id="insert">
		<input type="text" name="user">
		<input type="password" name="pwd">
		<button>注册</button>
	</div>
	<script>
	$("button").click(function(){
		var use=$("input[type=text]");
		var pwd=$("input[type=password]");
		if(use.val()==""){
			use.focus();
		}else if(pwd.val()==""){
			pwd.focus();
		}else{
			alert()
			$.post("<?php echo U('Index/Index/handle',"","");?>",{"username":use.val(),"pass":pwd.val()},function(req){
				if(req.status=="1"){
					alert("注册成功");
				}else{
					alert("注册失败");
				}
			},'json')
		}

	})
	</script>
</body>
</html>
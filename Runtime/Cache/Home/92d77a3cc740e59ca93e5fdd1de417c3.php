<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
	<meta name="author" content="" />

    <script src="/Tpl-website/pc/res/js/lib/jquery-3.1.1.min.js"></script>

</head>
<body>
<form action="<?php echo U('/vod/talk');?>" method="post">
    <!-- ppt:<input type="file" name="imgfile11" /><br/> -->
    <!-- 文件<input type="file" name="file" ><br/> -->
    <!-- id:<input type="text" name="vodID" value="e3f2950e62644b17b7863281be42d201"><br/> -->
    $lesson_id:<input type="text" name="lesson_id" value="24"><br/>
    <!-- $identify:<input type="text" name="identify" value="18813975741"><br/> -->
    <!-- code:<input type="text" name="code" value="454653"><br/> -->
    talk:<input type="text" name="talk" id="asd" value=""><br/>
    <!-- exp_lesson:<input type="text" name="exp_lesson" value="15"><br/> -->
    <input type="submit" value="提交">
</form>
<h1>6666</h1>
<form action="<?php echo U('/forget/change_password');?>" method="get">
    <!-- ppt:<input type="file" name="imgfile11" /><br/> -->
    <!-- 文件<input type="file" name="file" ><br/> -->
    mobile:<input type="text" name="mobile" value="18813975741"><br/>
    <!-- new_password:<input type="text" name="new_password" value="123123"><br/> -->
    <!-- $talk:<input type="text" name="talk" id="asd" value=""><br/> -->
    <!-- password:<input type="text" name="password" value="a123123"><br/> -->
    <!-- summary:<input type="text" name="summary" value="445554444"><br/> -->
    <!-- exp_lesson:<input type="text" name="exp_lesson" value="15"><br/> -->
    <input type="submit" value="提交">
</form>
<!-- <video src="http://vod.zier21.com/9442d5454250460ba63f22b85dfb958e/a234d167fd7d48718dfa13adda9fa50f-5287d2089db37e62345123a1be272f8b.mp4"  controls></video>
</object> -->

</body>
</html>
<script>
    var id = document.getElementById('asd');
    var number = Math.random();
    number = Math.ceil(number * 100);
    id.value = number;
</script>
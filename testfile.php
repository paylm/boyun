<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>图片上传预览</title>
</head>
<body>
    <img id="preview" />
    <br />
    <!--<input type="file" name="upfile" onchange="imgPreview(this)" />-->
　　<div id="test-image-preview"></div>
    <form action="<?php echo "http://".$_SERVER['HTTP_HOST']."/Artchen/index.php?m=Staff&a=updateImg"; ?>" method="post" enctype="multipart/form-data">
		<input type="file" name="img" id="img" multiple="multiple"/>
		<input type="submit" value="上传文件" />
    </form>	
</body>
</html>
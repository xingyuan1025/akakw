<?php


        $name = $_FILES["file"]["name"];
        $type = $_FILES["file"]["type"];
        $size = ($_FILES["file"]["size"] / 1024 );
        $dir = "/jp/".$_FILES["file"]["name"];
        
		if(file_exists("jp/")){
		/*判断目录是否存在*/


		if (file_exists("jp/" . $_FILES["file"]["name"]))
		{
			$msg = "文件已经存在。";
			
		}
		else
		{
			// 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
			move_uploaded_file($_FILES["file"]["tmp_name"], "jp/" . $_FILES["file"]["name"]);
			$msg = "文件上传成功！";
		}

}else{
mkdir("jp/",0777,true);//创建目录

		if (file_exists("jp/" . $_FILES["file"]["name"]))
		{
			$msg = "文件已经存在。";
		}
		else
		{
			// 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
			move_uploaded_file($_FILES["file"]["tmp_name"], "jp" . $_FILES["file"]["name"]);
				$msg = "文件上传成功 ！";
		}
}

$data = [
    "code" => "1",
    "msg"=>$msg,
    "name"=>$name,
    "type"=>$type,
    "size"=>$size,
    "dir"=>$dir
];

die(json_encode($data,JSON_UNESCAPED_UNICODE));
?>
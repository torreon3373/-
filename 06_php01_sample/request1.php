<?php 

// var_dump($_POST);
// exit();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP入門</title>
    <style>
     dt {
 float:left;	
}
dd {
  padding-left: 8em;	
}
</style>
</head>
<body>  
<h3>ご回答ありがとうございます</h3>
<p>以下の内容で送信致します</P>
<dl>
<dt>名前：</dt>   
<dd><?php echo $_POST['name']; ?></dd>
<dt>メールアドレス：</dt>      
<dd><?php echo $_POST['email']; ?></dd>
<dt>郵便番号：</dt>
<dd><?php echo $_POST['zip']; ?></dd>
<dt>性別：</dt>
<dd><?php echo $_POST['sex']; ?></dd>
<dt>年齢</dt>
<dd><?php echo $_POST['age']; ?></dd>
<dt>ご使用のOS：</dt>
<dd><?php if(isset($_POST['os']) === TRUE) {
	 echo implode(',', $_POST['os']); } ?></dd>
<dt>サイトへのご意見：</dt>
<dd><?php echo $_POST['memo']; ?></dd>
<dt>アンケート番号：</dt>
<dd><?php echo $_POST['quest_num']; ?></dd>
</dl>




</body>
</html>

<!-- <?php
// include("./library/funcs.php");

// var_dump($_POST);
// var_dump($_POST["message"]);
// var_dump(strpos($_POST["message"], "()"));
// $message = $_POST["message"];
// checkJs($message);
// var_dump(strpos($_POST["message"], "location"));
?> -->
<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>
<h1>Javascriptを実行</h1>
<ul>
<li><a href="test.html">戻る</a></li>
</ul>
<?php
include("./library/funcs.php");
// exec('php aaa.php > /dev/null &');

// var_dump($_POST);
// var_dump($_POST["message"]);
// var_dump(strpos($_POST["message"], "()"));
$message = $_POST["message"];
checkAndEchoJs($message);
// var_dump($message);
// if(strpos($message, "script>") !== false){
//     $message = "";
// }
// if(strpos($message, "import") !== false){
//     $message = "";
// }
// if(strpos($message, "require") !== false){
//     $message = "";
// }
// if(strpos($message, "location") !== false){
//     $message = "";
// }
// if(strpos($message, "localStorage") !== false){
//     $message = "";
// }
// if(strpos($message, "sessionStorage") !== false){
//     $message = "";
// }
// function checkAndEchoJs($s){
//     var_dump($s);
//     if(strpos($s, "script>") !== false || strpos($s, "import") !== false || strpos($s, "require") !== false || strpos($s, "location") !== false || strpos($s, "localStorage") !== false || strpos($s, "sessionStorage") !== false){
//         $s = "";
//     var_dump("aaa");
//     }
//     var_dump($s);
//     echo "<script>".$s."</script>";
// }
// checkJs($message);

// var_dump($message);
// // var_dump(strpos($_POST["message"], "location"));
// // var_dump($message);
// ?>
</body>
</html>
<?php
// xss対応対策
function h($s){
    return htmlspecialchars($s, ENT_QUOTES);
}
// console出力
function console_log($input){
    echo "<script>";
    echo "console.log(".json_encode($input).")";
    echo "</script>";
}

// XSSやフィッシング等の原因になるJSのコードが送信された場合、送信されたものを空白にする関数
function checkJs($s){
    var_dump($s);
    if(strpos($s, "script>") !== false){
        $s = "";
    var_dump("aaa");
    }
    if(strpos($s, "import") !== false){
        $s = "";
    }
    if(strpos($s, "require") !== false){
        $s = "";
    }
    if(strpos($s, "location") !== false){
        $s = "";
    }
    if(strpos($s, "localStorage") !== false){
        $s = "";
    }
    if(strpos($s, "sessionStorage") !== false){
        $s = "";
    }
    var_dump($s);
}

// XSSやフィッシング等の原因になるJSのコードが送信された場合、送信されたものを空白にしたうえでscriptタグを生成する関数
function checkAndEchoJs($s){
    var_dump($s);
    if(strpos($s, "script>") !== false || strpos($s, "import") !== false || strpos($s, "require") !== false || strpos($s, "location") !== false || strpos($s, "localStorage") !== false || strpos($s, "sessionStorage") !== false){
        $s = "";
    var_dump("aaa");
    }
    var_dump($s);
    echo "<script>".$s."</script>";
}
?>
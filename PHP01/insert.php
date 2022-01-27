<?php
//入力チェック(受信確認処理追加)
if(
  !isset($_POST["mokuteki"]) || $_POST["mokuteki"]=="" ||
  !isset($_POST["name"]) || $_POST["name"]=="" ||
  !isset($_POST["pass"]) || $_POST["pass"]=="" ||
  !isset($_POST["pass2"]) || $_POST["pass2"]=="" ||
  !isset($_POST["tel"]) || $_POST["tel"]=="" ||
  !isset($_POST["birth"]) || $_POST["birth"]=="" ||
  !isset($_POST["address"]) || $_POST["address"]=="" ||
  !isset($_POST["kazoku"]) || $_POST["kazoku"]=="" ||
  !isset($_POST["line"]) || $_POST["line"]=="" ||
  !isset($_POST["mail"]) || $_POST["mail"]==""
){
  exit('入力内容に誤りか、足りない項目がございます。恐れ入りますが再度ご入力ください。');
}


//1. POSTデータ取得
$mokuteki = $_POST['mokuteki'];
$name = $_POST['name'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];
$tel = $_POST['tel'];
$birth = $_POST['birth'];
$address = $_POST['address'];
$kazoku = $_POST['kazoku'];
$line = $_POST['line'];
$mail = $_POST['mail'];

//2. DB接続します(エラー処理追加)
try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost',"root",'root');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}



//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO php01(id, mokuteki, name, pass, pass2, tel, birth, address, kazoku, line, mail,
indate )VALUES(NULL, :a1, :a2 ,:a3, :a4, :a5, :a6,:a7,:a8, :a9 ,:a10,sysdate())");
$stmt->bindValue(':a1', $mokuteki, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $pass, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a4', $pass2, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a5', $tel, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a6', $birth, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a7', $address, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a8', $kazoku, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a9', $line, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a10', $mail, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);

}else{
  //５．index.phpへリダイレクト
  header("Location: kanryou.html");
  exit;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>利用登録</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Machi-Kaji</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="kanryou.css">
</head>
<header id="vw">
  <a href="index.html">
   <h1 class="title">Machi-Kaji</h1>
  </a>
  <h4 class="subtitle">~ママ同士の家事代行マッチングサイト~</h4>
  <nav class="nav">
  <ul class="menu-group">
  <li class="menu-item"><a href="#">Machi-Kajiとは</a></li>
  <li class="menu-item"><a href="#">ログイン</a></li>
  <li class="menu-item"><a href="index.php">利用登録の方はこちら</a></li>
  <li class="menu-item"><a href="#">お知らせ</a></li>
  <li class="menu-item"><a href="toiawase.php">お問い合わせ</a></li>
  </ul>
  </nav>
</header>
<body>
<!-- <div style = text-align:center; margin-left:auto; margin-right:auto;
text-align:left;
> -->
<script type="text/javascript">
  var css = document.createElement('link');
  css.rel = 'stylesheet';
  css.href = 'touroku.css';
  css.type = 'text/css';
  var head = document.getElementsByTagName('head')[0];
  head.appendChild(css);
</script>
<form action="insert.php" method="post" >
  <fieldset>
   <h3 class="label-title">◯　登録はこちら　◯</h3><br><br>
  <div class="item">
    <label class="label_left" for="name">お名前</label>
    <input id="name" type="text" name="name" placeholder="お名前" autocomplete="name" required autofocus /><br>
  </div>
  <div class="item">
    <label class="label_left" for="pass2">お電話番号</label>
    <input type="tel" name="tel" placeholder="例) 09012345678" required autofocus><br>
  </div>
  <div class="item">
    <label class="label_left" for="address">住所</label>
    <input type="text" name="address" size="50" placeholder="例) 北海道札幌市中央区北1条西1丁目1-1-111" required autofocus/><br>
  </div>
  <div class="item">
    <label class="label_left" for="pass2">生年月日</label>
    <input type="date" name="birth" placeholder="" required autofocus><br>
  </div>
  <div class="item">
    <label class="label_left" for="mail">mail</label>
    <input type="email" name="mail" size="30" value="" placeholder="メールアドレス" autocomplete="email" required autofocus/><br>
  </div>
  <div class="item">
    <label class="label_left" for="line">LINE ID</label>
    <input type="text" name="line" size="30" value="" placeholder="連絡手段がLINE希望の場合" /><br>
  </div>
    <div class="item">
    <fieldset>
       <legend>利用目的(複数選択可)</legend>
       <label for="mokuteki[]">料理</label>
       <input type="checkbox" name="mokuteki[]" value="料理"><br>
       <label for="mokuteki[]">掃除</label>
       <input type="checkbox" name="mokuteki[]" value="掃除"><br>
       <label for="mokuteki[]">お片付け</label>
       <input type="checkbox" name="mokuteki[]" value="お片付け"><br>
    </fieldset>
  </div>
  <div class="item">
    <fieldset>
       <legend>世帯構成</legend>
       <label for="kazoku[]">夫</label>
       <input type="checkbox" name="kazoku[]" value="夫"><br>
       <label for="kazoku[]">未就学のお子さま</label>
       <input type="checkbox" name="kazoku[]" value="未就学のお子さま"><br>
       <label for="kazoku[]">就学中のお子さま</label>
       <input type="checkbox" name="kazoku[]" value="就学中のお子さま"><br>
       <label for="kazoku[]">ご両親</label>
       <input type="checkbox" name="kazoku[]" value="ご両親"><br>
       <label for="kazoku[]">その他</label>
       <input type="checkbox" name="kazoku[]" value="その他"><br>
    </fieldset>
  </div>
  <div class="item">
    <label class="label_left" for="pass">パスワードを入力してください。</label>
    <input type="password" name="pass" placeholder="英数字8桁以上推奨" required autofocus><br> <!--入力された値はpassword型。アスタリスク表示される。値はpassと名づける。-->
  </div>
  <div class="item">
    <label class="label_left" for="pass2">パスワード再入力</label>
    <input type="password" name="pass2" placeholder="確認の為再入力" required autofocus><br> <!--入力された値はtext型。値はpass2と名づける-->
  </div>
  <div class="btns">
      <input type="submit" value="登録"><br>
      <input type="reset" value="リセット">
  </div>
  </fieldset>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!--自作のJS-->  <!--自作のJS-->
<script>
  window.addEventListener("beforeunload", function(e) {
    var confirmationMessage = "入力内容を破棄します。";
    e.returnValue = confirmationMessage;
    return confirmationMessage;
  });
</script>
</body>
</html>
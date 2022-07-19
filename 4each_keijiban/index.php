<!DOCTYPE html>
<html lang="ja">

<head>
<meta charaset="UTF-8">    
<title>4eachblog 掲示板</title>
<link rel ="stylesheet" type="text/css" href="style.css">
</head>

    <body>

    <?php

        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
        $stmt = $pdo->query("select * from 4each_keijiban");

    ?>

        <header>
            <img src="4eachblog_logo.jpg">
            <div class="menu">
                <ul>
                    <li>トップ</li>
                    <li>プロフィール</li>
                    <li>4eachについて</li>
                    <li>登録フォーム</li>
                    <li>問い合わせ</li>
                    <li>その他</li>
                </ul>
            </div>
        </header>

        <main>
            <div class="left">

             <h1 class="pro">プログラミングに役立つ掲示板</h1>

                <div class="form">
                    <h1>入力フォーム</h1>
                    <form method="post" action="insert.php">
                        <div>
                            <label>ハンドルネーム</label>
                            <br>
                            <input type="text" class="text" size="35" name="handlename">
                        </div>
                        
                        <div>
                            <label>タイトル</label>
                            <br>
                            <input type="text" class="text" size="35" name="title">
                        </div>

                        <div>
                            <label>コメント</label>
                            <br>
                            <textarea cols="70" rows="7" name="comments"></textarea>
                        </div>

                        <div>
                            <input type="submit" class="submit" value="投稿する">
                        </div> 
                    </form>

                </div>
                <?php

                    while ($row = $stmt->fetch()){

                        echo"<div class='kizi1'>";
                        echo"<h3 class='sub'>".$row['title']."</h3>";
                            echo"<div class='contents'>";
                            echo $row['comments'];
                            echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                            echo "</div>";
                        echo "</div>";
                    }

                ?>

            </div>

            <div class="right">
            <h2 class="1">人気の記事</h2>
            <ul class="kizi">
                <li>PHPオススメ本</li>
                <li>PHP MyAdminの使い方</li>
                <li>今人気のエディタ　Top5</li>
                <li>HTMLの基礎</li>
            </ul>
            <h2 class="2">オススメリンク</h2>
            <ul class="link">
                <li>インターノウス株式会社</li>
                <li>XAMPPのダウンロード</li>
                <li>Eclipseのダウンロード</li>
                <li>Bracketsのダウンロード</li>
            </ul>
            <h2 class="3">カテゴリ</h2>
            <ul>
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
            </ul>
      </div>
  </main>
  
  <footer>
      <p>copyright©internous | 4each blog the which provides A to Z about programming</p>
  </footer>

        </main>

    </body>
</html>
<?php
mb_internal_encoding('utf8');

$temp_pic_name = $_FILES['picture']['tmp_name'];
$original_pic_name = $_FILES['picture']['name'];
$path_filename='./image/'.$original_pic_name;

move_uploaded_file($temp_pic_name,'./image/'.$original_pic_name);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>登録確認ページ</title>
    <link rel="stylesheet" type="text/css" href="register_confirm.css">
</head>

<body>

    <header>
        <img src="4eachblog_logo.jpg" id="img">
        <a href="login.php">ログイン</a>
    </header>

    <main>
        <h2>会員登録　確認</h2>
        <p class="p">こちらの内容で登録しても宜しいでしょうか？</p>

        <div class="contents">


            <div class="box">
                <p>氏名：
                    <?php echo $_POST['name']; ?></p>
            </div>

            <div class="box">
                <p>メールアドレス：
                    <?php echo $_POST['mail']; ?></p>
            </div>

            <div class="box">
                <p>パスワード：
                    <?php echo $_POST['password']; ?></p>
            </div>



            <div class="box">
                <p>プロフィール写真：
                    <?php echo $_FILES['picture']['name']; ?></p>
            </div>

            <div class="box">
                <p>コメント：
                    <?php echo $_POST['comments']; ?></p>
            </div>

            <div class="button">
                <div class="back_button"><a href="register.php">戻って修正する</a></div>
               
                <form method="post" action="register_insert.php">
                    <input type="submit" name="enroll" size="20" value="登録する" class="submit_button">
                    
                    <input type="hidden" name="name" value="<?php echo $_POST['name'];?>">
                    
                    <input type="hidden" name="password" value="<?php echo $_POST['password'];?>">
                    
                    <input type="hidden" name="mail" value="<?php echo $_POST['mail'];?>">
                    
                    <input type="hidden" name="$path_filename" value="<?php echo $path_filename; ?>">
                    
                    <input type="hidden" name="comments" value="<?php echo $_POST['comments'];?>">
                    
                </form>
            </div>



        </div>
    </main>
    <footer>
        ©2018 InterNous.inc All rights reserved
    </footer>
</body>

</html>

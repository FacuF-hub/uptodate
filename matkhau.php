<?php
// Tôi chọn password là "kangourou"
if(isset($_POST['mat_khau'])) // Nếu biến này tồn tại
{
    // Mình hãy tạo một biến $mat_khau chứa cái password mà người ta gõ vào nhé
    $mat_khau = $_POST['mat_khau'];
}
else // biến chưa tồn tại
{
    $mat_khau = ""; // Tạo một biến rỗng
}

if ($mat_khau == "kangourou") // nếu mật khẩu đúng
{
// Mình cho hiện ra nội dung trang web
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./login3.css">
    <script src="https://kit.fontawesome.com/c9f5871d83.js" crossorigin="anonymous"></script>
    <link rel="icon" href="d/files/favicon.ico" type="image/x-icon">
    <title>Uptodate by MinhZ</title>
    <link rel="matkhau.php">
</head>
<body>
        <header class="header">
            <nav class="nav">
                <a href="d/di.htm"> Drug Interactions </a>
                <a href="d/toc.htm?path=calculators/categorized"> Calculators </a>
                <a href="d/toc.htm"> Contents </a>
                <a href="https://forms.gle/bQpg7ErsbV2HMjAn6"> Report & Feedback </a>
            </nav>
        </header>
        <div class="background"></div>
        <section class="home">
            <div class="content">
                <a href="#" class="logo"> <i class="fa-solid fa-paper-plane"></i>MINHZ</a>
                <h2> Welcome!</h2>
                <h3> To My Website </h3>
               <pre>  </pre>
            </div>
        <form action="matkhau.php" method="post">
            <div class="login">
                <h2> Login </h2>
                <div class="input">
                    <input type="password" class="input1" placeholder="Password" required>
                    <i class="fa-solid fa-lock"></i> 
                </div>
                <div class="button">
                    <button class="btn"> Login </button>
                </div>           
            </div>
        </form>
        </section>
</body>
</html>
<?php
}
else // nếu mật khẩu không đúng
{
// Mình cho hiện ra vùng text để gõ lại mật khẩu.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./login3.css">
    <script src="https://kit.fontawesome.com/c9f5871d83.js" crossorigin="anonymous"></script>
    <link rel="icon" href="d/files/favicon.ico" type="image/x-icon">
    <title>Uptodate by MinhZ</title>
    <link rel="matkhau.php">
</head>
<body>
        <header class="header">
            <nav class="nav">
                <a href="d/di.htm"> Drug Interactions </a>
                <a href="d/toc.htm?path=calculators/categorized"> Calculators </a>
                <a href="d/toc.htm"> Contents </a>
                <a href="https://forms.gle/bQpg7ErsbV2HMjAn6"> Report & Feedback </a>
            </nav>
        </header>
        <div class="background"></div>
        <section class="home">
            <div class="content">
                <a href="#" class="logo"> <i class="fa-solid fa-paper-plane"></i>MINHZ</a>
                <h2> Welcome!</h2>
                <h3> To My Website </h3>
               <pre>  </pre>
            </div>
        <form action="matkhau.php" method="post">
            <div class="login">
                <h2> Login </h2>
                <div class="input">
                    <input type="password" class="input1" placeholder="Password" required>
                    <i class="fa-solid fa-lock"></i> 
                </div>
                <div class="button">
                    <button class="btn"> Login </button>
                </div>           
            </div>
        </form>
        </section>
</body>
</html>
<?php
} // kết thúc else
// kết thúc code :)
?>
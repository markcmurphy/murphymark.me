<html>
  <head>
    <title>Google recapcha demo - Codeforgeek</title>
    <?php
require_once __DIR__ . '/../src/autoload.php';
$siteKey = '6Lfx0RwUAAAAAJfd4SDNXcCCCyg7IAmuOf3IwkJF';
$secret = '6Lfx0RwUAAAAAPZxd4s5SfY3_3VOYHPF1bSH2e0A';
$lang = 'en';
?>
  </head>
  <body>
  
  <?php
$recaptcha = new \ReCaptcha\ReCaptcha($secret);
$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
if ($resp->isSuccess()) {
   
} else {
    $errors = $resp->getErrorCodes();
}
?>

    <h1>Google reCAPTHA Demo</h1>
    <form action="" method="POST">
    <input type="text" name="name" value="" />
    <input type="text" name="email" value="" />
    <textarea type="text" name="message"></textarea>
    <div class="g-recaptcha" data-sitekey="$siteKey"></div>
    <input type="submit" name="submit" value="SUBMIT">
</form>


  </body>
</html>
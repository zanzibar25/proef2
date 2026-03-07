 <?php
session_start();

 
if(!isset($_POST['username']) || !isset($_POST['password'])){
    echo "Geen login data ontvangen";
    exit;
}

 
$user = trim($_POST['username']);
$pass = trim($_POST['password']);

 
$lines = file("users.txt");
$login_success = false;

foreach($lines as $line){
    list($u,$p) = explode(":", trim($line));
    if($user === $u && $pass === $p){
        $_SESSION['user'] = $user;
        echo "success";  
        $login_success = true;
        break;
    }
}

if(!$login_success){
    echo '<div style="position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); width: 600px; height: 800px;
    backdrop-filter: blur(10px);  z-index: 9999;  color: blue; font-size:1.5em; margin-top: 10%; text-align: center; padding: 20px; border-radius: 10px;">
      Hmm… that didn’t work. <br>
      Give it another try!
        <a href="index.php" style="color:blue; text-decoration:underline;">
    </div>';
    
}
?>
 <?php session_start(); ?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>login</title>
<link rel="stylesheet" href="index.css">
 
 
 
<body>

<form id="loginForm"  autocomplete="off">
    <input type="text" id="username" placeholder="Username" autocomplete="off"   required><br><br>
    <input type="password" id="password" placeholder="Password" autocomplete="new-password"   required><br><br>
    <button type="submit" id="button">Inloggen</button>
</form>

<div id="result"></div>

<script>
document.getElementById("loginForm").addEventListener("submit", function(e){

    e.preventDefault();

    let user = document.getElementById("username").value;
    let pass = document.getElementById("password").value;

    fetch("login.php", {
        method: "POST",
        headers: {"Content-Type": "application/x-www-form-urlencoded"},
        body: "username=" + encodeURIComponent(user) + "&password=" + encodeURIComponent(pass)
    })
    .then(response => response.text())
    .then(data => {

        data = data.trim();
        console.log("Response:", data);

        if (data === "success") {

            
            window.location.href = "review.php";

        } else {

            
            document.getElementById("result").innerHTML = data;

        }

    })
    .catch(err => {

        console.error("Fetch error:", err);
        document.getElementById("result").innerHTML = "Fout bij verbinden met server";

    });

});
</script>

</body>
</html>
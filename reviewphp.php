 <?php

$file = "data.json";

 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["naam"], $_POST["review"])) {

    
    $naam = htmlspecialchars(trim($_POST["naam"]));
    $review = htmlspecialchars(trim($_POST["review"]));

     
    if (file_exists($file)) {
        $json = file_get_contents($file);
        $data = json_decode($json, true);

         
        if (!is_array($data)) {
            $data = [];
        }
    } else {
        $data = [];
    }

     
    $data[] = [
        "naam" => htmlspecialchars(trim($_POST["naam"])),
        "land" => htmlspecialchars(trim($_POST["land"])),
        "review" => htmlspecialchars(trim($_POST["review"])),
        "sterren" => htmlspecialchars(trim($_POST["sterren"])),
        "datum" => date("Y-m-d H:i:s")
    ];

     
    file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
 
    echo "Review opgeslagen!";
    header("Location: reviewscore.html");  
    exit();  

} else {
    echo "Geen review ontvangen.";
}

?>
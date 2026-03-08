<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="review.css">
    
    <title>Document</title>
</head>
<body>
    <div class="container">
         <h1>Review Page</h1>
     
 
             <h2>Leave a review</h2>

            <form method="POST" action="reviewphp.php">
              Name:<br>
              <input type="text" name="naam" id="naam" required><br><br>
              Country:<br>
              <input type="text" name="land" id="land" required><br><br>
    
              Review:<br>
              <textarea name="review" rows="8" cols="50" id="review" required></textarea><br><br>


            <label>Beoordeling</label><br>

                <select name="sterren">
                    <option value="5">★★★★★</option>
                    <option value="4">★★★★</option>
                    <option value="3">★★★</option>
                    <option value="2">★★</option>
                    <option value="1">★</option>
                </select>

            <br><br>
             <button type="submit">Opslaan</button>
            </form>
        </div>
</body>
</html>

    

</body>
</html>
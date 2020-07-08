<?php 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
</head>
<body>
    
    <form action="core.php" method="POST">
        <div class="header">
            <h2>Fill in your details</h2>
        </div>
        <div class="form-container">
            <input type="text" name="firstname" id="firstname" placeholder="Firstname" required> <br>
            <input type="text" name="lastname" id="lastname" placeholder="Lastname" required>
            <button type="submit" name="submit">Submit</button>
        </div>
    </form>

</body>
</html>

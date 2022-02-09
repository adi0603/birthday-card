<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="image/icon.png">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script src="https://kit.fontawesome.com/ab99e84824.js" crossorigin="anonymous"></script>
    <title>Birthday Card</title>
</head>
<body>
    <center>
        <h1 style="color: tomato;">Birthday Card</h1>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <h3 style="color: darkblue;">Enter Name:</h3>
            <input type="text" name="name" style="width: 280px;border-radius: 10px;font-size: 20px;" required="">
            <h3 style="color: darkblue;">Select Image Files to Upload:</h3>
            <input type="file" name="files[]" multiple style="background: tomato; color: white; border-radius: 10px;font-size: 20px; width: 280px;" required=""><br><br>
            <input type="submit" name="submit" value="SUBMIT" style="background: dodgerblue; color: white; border-radius: 10px;font-size: 20px; width: 280px;">
        </form>
        <br><br>
    </center>
    <center><p>Design & Developed By <span style="color: blue;">Aditya Pandey</span></p></center>
</body>
</html>
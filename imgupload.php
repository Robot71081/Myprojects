<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>File Upload Form</h2>
<form method = "POST" action = "uploadfile.php" enctype="multipart/form-data">
   <label for="file">File name:</label>
   <input type="file" name="uploadfile" />
   <input type="submit" name="submit" value="Upload" />
</form>
</body>
</html>
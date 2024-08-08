<!DOCTYPE html>
<html lang = en>
    <style>
        #form{
            margin-left: 400px;
    
        }
        #title{
            margin-left: 480px;
            margin-top: 300px;
        }
    </style>
    <h2 id = "title">Upload an Image</h2>
    <form id = "form" action = "upload_back.php" method = "post" enctype = "multipart/form-data">
        Choose File 
        <input type = "file" name = "upload_file" required>
        <input type = "submit" value = "submit" required>
    </form>

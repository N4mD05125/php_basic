<!DOCTYPE html>
<html lang = "en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        input[type="password"] {
            width: 300px;
            margin-left: 60px;
            padding: 7px; 
            border: 1px solid #ccc; 
            border-radius: 5px; 
            box-sizing: border-box; 
        }
        input[type="text"] {
            width: 300px;
            margin-left: 60px;
            padding: 7px; 
            border: 1px solid #ccc; 
            border-radius: 5px; 
            box-sizing: border-box; 
        }
        input[type="email"] {
            width: 300px;
            margin-left: 60px;
            padding: 7px; 
            border: 1px solid #ccc; 
            border-radius: 5px; 
            box-sizing: border-box; 
        }
        label {
            margin-left: 60px;
            font-weight: bold;
           
        }
        input[type="checkbox"] {
            margin-left: 60px;
            padding: 10px; 
            border: 1px solid #ccc; 
            border-radius: 5px; 
            box-sizing: border-box; 
        }
        input[type="submit"] {
            margin-left: 182px;
            padding: 7px; 
            border: 1px solid #ccc; 
            border-radius: 5px; 
            box-sizing: border-box; 
        }
    
        #login_title {
            margin-left: 17px;
        }
        select{
            margin-left: 60px;
            width: 80px;
            height: 30px; 
            border: 2px solid #ccc;
            border-radius: 7px; 
            font-size: 15px; 
            cursor: pointer; 
            background-color: #F0F0F0;
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
        }
        #fullname {
            margin-left: 15px;
            width: 201px;
        }
        #fullnametext{
            margin-left: 18px;
        }
        #fade{
            opacity: 0.5;
            margin-left: 0px;
            font-size: 0.9em;
        }
        #company{
            margin-left: 60px;
        }
        #provide_text{
            margin-left: 60px;
        }
        #register{
            margin-left: 182px;
            padding: 7px; 
            border: 1px solid #ccc; 
            border-radius: 5px; 
            box-sizing: border-box; 
            margin-top: 10px;
            color: #DAA520;
        }
        #login{
            margin-left: 200px;
        }
        #signup{
            margin-top: -280px; 
            margin-left: 1000px;
        }
    </style>
</head>
<body>
    
    <form id = "login" action = "back.php" method = "post">
        <div id = "login_title" ><h3> Login </h3><br></div>
        <label >Username</label><br>
        <input type = "text" name = "username" required><br><br>
        <label>Password</label><br>
        <input type = "password" name = "pass" required><br><br>
        <input type = "checkbox" name = "check" > Remember Me<br><br>
        <input type = "submit"  value = "Log in" required>
    </form><br>
    </body>
    </html>

    <form id = "signup" action = "back_signup.php" method = "post">
        <div id = "signup_title"><h3> Signup for New Account?</h3> </div><br><br>
        <label> User name </label><br>
        <input type = "text" name = "username" required><br><br>
        <label> User Email * </label><br>
        <input type = "email" name = "email" required><br><br>
        <label>Select Title</label>
        <label id = "fullnametext">Full name *</label>
        <label id = "fade">BLOCK letters</label><br>
        <select name="gender">
            <option value="mr">Mr.</option>
            <option value="mrs">Mrs.</option>
            <option value="ms">Ms.</option>
            <option value="sir">Sir</option>
        </select>
        <input id = "fullname" type = "text" name = "fullname" required><br><br>
        <label><h3  id = "company">Company detail</h3></label><br><br>
        <div id = "provide_text">Provide detail about your company</div><br>
        <label>Company name</label><br>
        <input type = "text" name = "name_company" required><br>
        <input type = "checkbox" required> I am agree with registration<br>
        <input id = "register" type = "submit" value = "Register">
    </form>





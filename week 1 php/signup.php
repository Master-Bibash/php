<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body{
            text-align: center;
            align-items: center;
    align-content: center;

        }
        h1{
            background-color: black;
            color: aliceblue;
        }
        form{
            padding-top: 20px;
            margin: 20px;
            border: 1px solid black;
            width: 500px;
            height: 159px;
            
        }

    </style>
</head>
<body>
    <h1>Sign-Up Page</h1>
    <form action="adddata.php" method="POST">
        <label>User-Name</label><br>
        <input type="text" name="username" required>
        <br><label>Password</label><br>
        <input type="password" name="password" required>
        <br>
        <label>Email</label><br>
        <input type="email" name="email"><br>
        <br>
        <input type="submit" value="submit"><br>


    </form>
    
</body>
</html>
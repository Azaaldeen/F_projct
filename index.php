<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Login</title>
</head>
<body>
      <div class="container">
        <div class="box form-box">
        
           <h1>log in</h1>
            <form action="icludes/login.inc.php" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password"  required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                <div class="links">
                    OR <a href="register.html">Register</a>
                </div>
            </form>
        </div>
       
      </div>
      <style>
        .container{
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 90vh;
}
.field{
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 20px;
        }

        .field input {
            border: 2px #aaa solid;
            border-radius: 10px;
            padding: 10px;
            width: 80%;
        }
      </style>
</body>
</html>
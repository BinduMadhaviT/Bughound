<!DOCTYPE html>
<html style="background-image: url('backgrnd.jpg');">
<head>
    <title>Add an Employee!</title>
</head>
<body>
<main>
    <form action="register.php" method="post">
        <h1 style="color: white">Employee Addition</h1>
        

            <label for="empname" style="color: white">Employee Name</label>
            <input type="text" name="empname" id="empname">
        
            </br></br></br>

            <label for="username" style="color: white">Username</label>
            <input type="text" name="username" id="username">
        
            </br></br></br>

            <label for="password" style="color: white">Password:</label>
            <input type="password" name="password" id="password">
        
            </br></br></br>

            <label for="password2" style="color: white">Password Again:</label>
            <input type="password" name="password2" id="password2">
        
            </br></br></br>


            <label for="emplevel" style="color: white">Employee Level</label>
            <input type="text" name="emplevel" id="emplevel">

            </br></br></br>

        <button type="submit">Register</button>
        </br></br></br>
    </form>
</main>
</body>
</html>
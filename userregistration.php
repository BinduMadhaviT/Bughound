<!DOCTYPE html>
<html style="background-image: url('backgrnd.jpg');">
<head>
    <title>User Registration</title>
</head>
<body>
<main>
    <form action="userregister.php" method="post">
        <h1 style="color: white">Sign Up</h1>
        
        
            <label for="empname" style="color: white">Full Name</label>
            <input type="text" name="usrname" id="usrname">
        
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

            <label for="dob" style="color: white">Date of Birth</label>
            <input type="date" name="dob" id="dob">
        
            </br></br></br>

        <button type="submit">Register</button>
        </br></br></br>
        <footer>Already a member? <a href="ulogin.php">Login here</a></footer>
    </form>
</main>
</body>
</html>
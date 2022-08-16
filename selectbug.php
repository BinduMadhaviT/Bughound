<html>
    <body>
        <form action="selectbuguser.php" method="post">
            <h3>Search Using User Name</h3>
            <label for="username">Enter User Name</label>
            <input type="text" name="usrname" id="username">
            <input type="submit" value="Submit">
            </br>
            </br>
            </br>
        </form>

        <form action="selectbugprg.php" method="post">
            <h3>Search Using Program Name</h3>
            <label for="prgname">Enter the Program Name</label>
            <input type="text" name="prname" id="prgname">
            <input type="submit" value="Submit">
            </br>
            </br>
            </br>
        </form>

        <form action="selectbugUS.php" method="post">
            <h3>Search Using User and Severity</h3>
            <label for="usname">Enter the User Name</label>
            <input type="text" name="uname" id="usname">
            </br>
            <label for="sevlevel">Enter Severity Level</label>
            <input type="text" name="slevel" id="sevlevel">
            <input type="submit" value="Submit">
            </br>
            </br>
            </br>
        </form>

        <form action="selectbugSev.php" method="post">
            <h3>Search Using Severity</h3>
            <label for="severitylevel">Enter Severity Level</label>
            <input type="text" name="svrlevel" id="severitylevel">
            <input type="submit" value="Submit">
            </br>
            </br>
            </br>
        </form>

        <form action="selectbugstatus.php" method="post">
            <h3>Search Using status</h3>
            <label for="status">Select Bug Status to View</label>
            <select id="status" name="bugstatus">
                <option value="Open">Open</option>
                <option value="Closed">Closed</option>
            </select>
            <input type="submit" value="Submit">
            </br>
            </br>
            </br>
        </form>
    </body>
</html>
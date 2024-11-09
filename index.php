<html>
    <head>
        <title>Form Create</title>
        
    </head>
    <body>
        <form action="insert.php" method="POST">
        <h1>Registration  Form</h1>

        <label>First Name:</label>
        <input type="text" name="fnm"><br><br>

        <label>Last name:</label>
        <input type="text" name="lnm"><br><br>

        <label>Gender:</label>
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female<br><br>

        <label>Address:</label>
        <input type="textarea" name="address"><br><br>

        <label>Hobby:</label>
        <input type="checkbox" name="hobby[]" value="reading">Reading
        <input type="checkbox" name="hobby[]" value="swimming">Swimming
        <input type="checkbox" name="hobby[]" value="dancing">Dancing<br><br>

        <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>


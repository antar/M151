<!DOCTYPE html>
<html>
<head>
    <title>M151</title>

    <style>
        form label, form input {
            margin: 3px 0 3px 0;
        }
    </style>
</head>
<body>
    <div align="center">
    <h1>Welcome to M151!</h1>
        <form action="submit.php" method="post">
            <label for="firstname">Firstname:</label>
            <input type="text" id="firstname" name="firstname" required><br>
        
            <label for="lastname">Lastname:</label>
            <input type="text" id="lastname" name="lastname" required><br>
        
            <label for="birthday">Birthday:</label>
            <input type="date" id="birthday" name="birthday" required><br>
        
            <label for="email">E-Mail:</label>
            <input type="email" id="email" name="email"><br>
        
            <label for="ahv">AHV-Nummer:</label>
            <input type="text" id="ahv" name="ahv" required pattern="^\s*\d{3}.\d{4}.\d{4}.\d{2}\s*$" title="Must match 'www.xxxx.yyyy.zz' pattern"><br>
        
            <label for="personal">Personal Number:</label>
            <input type="number" id="personal" name="personal" required><br>
        
            <label for="telephone">Telephone:</label>
            <input type="tel" id="telephone" name="telephone"><br>
        
            <label for="company">Company Name:</label>
            <input type="text" id="company" name="company" required><br>
        
            <label for="department">Department:</label>
            <input type="text" id="department" name="department" required><br>
        
            <label for="jobtitle">Job Title:</label>
            <input type="text" id="jobtitle" name="jobtitle" required><br>
        
            <label for="jobdesc">Job Description:</label>
            <input type="text" id="jobdesc" name="jobdesc"><br>        
            
            <input type="submit">
        </form>
    </div>
</body>
</html>
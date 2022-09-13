<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
</head>
<body>
    <form action="action.php" method="post" enctype="multipart/form">
        <table border="1" align="center">
            <h2 align="center">Student Information</h2>
            <tr>
                <td>Item</td>
                <td>Value</td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td>Father Name:</td>
                <td><input type="text" name="fname" id="fname"></td>
            </tr>
            <tr>
                <td>Mother Name:</td>
                <td><input type="text" name="mname" id="mname"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="gender" id="gender" value="male">Male
                    <input type="radio" name="gender" id="gender" value="female">Female
                    <input type="radio" name="gender" id="gender" value="other">Others
                </td>
            </tr>
            <tr>
                <td>Cars:</td>
                <td>
                    <select name="cars" id="cars">
                        <option value="Audi">Audi</option>
                        <option value="Fiat">Fiat</option>
                        <option value="Volvo">Volvo</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>
                    <input type="checkbox" name="sub" id="sub" value="cse">CSE<br>
                    <input type="checkbox" name="sub" id="sub" value="cse">EEE<br>
                    <input type="checkbox" name="sub" id="sub" value="cse">ESE
                </td>
            </tr>
            <tr>
                <td>Submit:</td>
                <td><input type="submit" name="submit" id="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>
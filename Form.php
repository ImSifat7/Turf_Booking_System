<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customer</title>
    <link rel="stylesheet" href="Mystyle.css">
    <script src="script.js"></script>
</head>
<body>
    <h1>Customer Registration</h1>
    <form action="submit.php" method="post">
        <fieldset>
            <legend><h3>Customer Information:</h3></legend>

            <div>
                <label for="fname">First Name:</label>
                <input type="text" id="fname" placeholder="First Name">
            </div>

            <div>
                <label for="lname">Last Name:</label>
                <input type="text" id="lname" placeholder="Last Name">
            </div>

            <div>
                <label for="PhoneNo">Phone No:</label>
                <input type="number" id="PhoneNo" placeholder="01*********">
            </div>

            <div>
                <label for="adress">Address:</label>
                <input type="text" id="adress" placeholder="Present Address">
            </div>

            <div>
                <label>Gender:</label>
                <input type="radio" id="Gender1" name="gender"> Male
                <input type="radio" id="Gender2" name="gender"> Female
                <input type="radio" id="Gender3" name="gender"> Other
            </div>

            <div>
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob">
            </div>

            <div>
                <label for="email">Email Address:</label>
                <input type="email" id="email" placeholder="*********@gmail.com">
            </div>

            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" placeholder="Password">
            </div>

            <div>
                <label for="nid">NID (copy's):</label>
                <input type="file" id="nid">
            </div>

            <div>
                <label for="location">Location:</label>
                <select id="location">
                    <option>-select-</option>
                    <option>Bashundhara</option>
                    <option>Uttara</option>
                    <option>Mirpur</option>
                    <option>Gulshan</option>
                </select>
            </div>

        </fieldset>

        <br>

        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</body>
</html>

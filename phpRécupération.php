<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="phpThanks.php" method="POST">
        <div>
            <label for="surname">Surname</label>
            <input type="text" id="surname" name="surname" placeholder="Enter Surname" required>
        </div>
        <br>
        <div>
            <label for="firstname">Firstname</label>
            <input type="text" id="firstname" name="firstname" placeholder="Enter Firstname" required>
        </div>
        <br>
        <div>
            <label for="email">Email address</label>
            <input type="text" id="email" name="email" placeholder="Enter Email address" required>
        </div>
        <br>
        <div>
            <label for="telephone">Telephone Number</label>
            <input type="text" id="telephone" name="telephone" placeholder="Enter Telephone number" required>
        </div>
        <br>
        <div>
            <label for="subject">Subject</label>
            <select name="subject" id="subject" required>
                <option value="subject">Choose subject</option>
                <option value="Product">Product</option>
                <option value="Services">Services</option>
                <option value="other">Other</option>
            </select>
        </div>
        <br>
        <label for="message">Messaage:</label><br>
        <textarea name="message" id="message" cols="30" rows="10">Enter message here</textarea>
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>


</body>

</html>
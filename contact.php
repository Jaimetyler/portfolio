
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Contact form to email</title>
</head>

<body>
 <?php

if($_POST["submit"]) {
    $recipient="your@email.address";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>

    <?=$thankYou ?>

    <form method="post" action="contact.php">
        <label>Name:</label>
        <input name="sender">

        <label>Email address:</label>
        <input name="senderEmail">

        <label>Message:</label>
        <textarea rows="5" cols="20" name="message"></textarea>

        <input type="submit" name="submit">
    </form>

</body>

</html>
 
 



<!--<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="assets/css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <ul class="nav nav-pills" id="nav-bar">
        <div class="row" id="nav-links">
            <li class="nav-item">
                <a class="nav-link active" href="index.html" id="about">About</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link active" href="./portfolio.html" id="portfolio">Portfolio</a>
            </li>
            </li>
            <li class="nav-item ">
                <a class="nav-link active" href="./contact.html" id="contact">Contact</a>
            </li>
        </div>
    </ul>
    <div class="container" id="contact-form">
        <form method="post" action="contact.php">
            <div class="form-group" id="form-firstName">
                <label for="first-name">
                    <h4>Name</h4>
                </label>
                <input type="text" class="form-control" id="firstName-input" placeholder="Bob" name="name">
            </div>
           
               
                <div class="form-group" id="form-email">
                    <label for="email">
                        <h4>Email address</h4>
                    </label>
                    <input type="email" class="form-control" id="email-input" placeholder="name@example.com" name="emaill">
                </div>
                <div class="form-group" id="form-comments">
                    <label for="comments">
                        <h4>Discuss Project</h4>
                    </label>
                    <textarea class="form-control" id="comments-input" rows="3" name="message"></textarea>
                </div>
                <button type="button" class="btn btn-outline-danger" id="submit" name="submit">Submit</button>
        </form>
</div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script type="text/javascript" src="assets/javascript/app.js"></script>
</body>

</html> -->
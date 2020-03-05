<html>
    <head>
        <link rel="stylesheet" type="text/css" href="final.css">
    </head>
    <body class="submission">
        <h1 class="sub">Your Submission</h1>
        <p>
            <ul>
                <li>First Name: <?php print $_POST['firstname']?></li>
                <li>Last Name: <?php print $_POST['lastname']?></li>
                <li>Phone Number: <?php print $_POST['phone']?></li>
                <li>Email: <?php print $_POST['email']?></li>
                <li>Gender: <?php print $_POST['gender']?></li>
                <li>State: <?php print $_POST['state']?></li>
                <li>Comments: <?php print $_POST['comments']?></li>
            </ul>
        </p>
        <?php
        $message="First Name:" .$_POST['firstname']."\n";
        $message.="Last Name:" .$_POST['lastname']."\n";
        $message.="Phone Number:" .$_POST['phone']."\n";
        $message.="Email:" .$_POST['email']."\n";
        $message.="Gender:" .$_POST['gender']."\n";
        $message.="State:" .$_POST['state']."\n";
        $message.="Comments:" .$_POST['comments']."\n";
        mail("kiarawasano@go.byuh.edu","Feedback",$message,"From:kiarawasano@go.byuh.edu")
        ?>
    </body>
</html>
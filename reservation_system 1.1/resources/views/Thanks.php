
<html>
    <head>
        <link rel="stylesheet" href="Style.css">
    </head>
    <nav class="bar">
       <h2>
        <ul>
            <li>
                <a href="Intropage.php">Home Page</a>
            </li>
            <li>
               <a href="MRP.php">Member Registration page</a>
            </li>
            <li>
                <a href>Login to Reserve Page</a>
            </li>
        </ul>
    </h2>
    </nav>
    <nav class="title">
    <h4>Ready to start your adventure?</h4>
    <h4>Thanks for youe support!</h4>
</nav>
<div class="display">
    <?php 
    echo "Your Email Is: ",$_email;
    echo "reservation details: ","Date: ",/*date*/,"Timeslot: ",/*timeslot*/,"Room: ",/*room*/;
    ?>
</div>
<nav class="OK">
    <a href="Intropage.php"><p>Returrn To Home Page</p></a>
</nav>
    </html>
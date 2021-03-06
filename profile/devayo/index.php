<!DOCTYPE html>
<?php
    // Retrieving password
    $db = 'hng';
    $pwd = '@hng.intern1';
    $username = 'intern';
    $host = 'localhost';
    $connection = mysqli_connect($host, $username, $pwd, $db)
        or die('Failed to connect to database');

    $query = 'SELECT * FROM password LIMIT 1';

    $result = mysqli_query($connection, $query)
        or die('Error Connecting to database');

    $info = mysqli_fetch_array($result);
    $password = $info['password'];
    setcookie('phrase', $password);
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Devayo - Hng Internship Profile</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="notification" class="clearfix">
        <p></p>
    </div>
    <div class="container">
        <div class="" id="profile">
            <div class="heading">
                <p>Intern Profile</p>
            </div>
            <div>
                <img src="https://image.ibb.co/b1H445/pic.jpg" alt="profile picture" width="400" height="400">   
            </div>
            <div class="card-footer">
                <a href="https://github.com/Hamdal/hng-internship-stage1"><span class="fa fa-external-link"><span id="stage1"> First stage task</span></span></a>
                <p id="slack-username"><span class="fa fa-slack"> Slack: </span> @devayo</p> 
            </div>
        </div>
        <!--<div class="flex-"> -->
            <div id="bio">
                <div class="heading">
                    <p>About me</p>
                </div>
                <p id="bio-text">
                    My name is Hameed Abdul-lateef Ayomide, an undergraduate at L.A.U.T.E.C.H. I am a web developer and programmer, I'm proficient in modern web technologies such as
                    <b>HTML5</b>, <b>CSS3</b>, <b>JavaScript</b>, <b>Jquery</b>, <b>materialise css</b>, <b>Twitter bootstrap</b> and learning some 
                    frameworks and libraries <b>(Angular, React and so on)</b>.
                    <br>
                    I also code in <b>Java</b> (for android development), <b>PHP</b> for web back-end development and also a <b>Python</b> learner.
                    <br>
                    I haven't had much experience working together with other devs like myself, as a result of that, i see this internship as a great 
                    opportunity for gaining experience in team development.
                </p>
            </div>
             <!-- </div> -->  
            
            <div id="contact">
                <div class="heading">
                    <p>Contact me</p>
                </div>
                <form>
                    <input type="text" name="name" id="name" placeholder="Your name">
                    <input type="text" name="message" id="message" placeholder="Message">                                        
                    <input type="email" name="email" id="email" placeholder="Your Email">                    
                    <input type="text" name="subject" id="subject" placeholder="Subject">
                    <input type="submit" name="submit" id="submit" value="Send mail"> 
                </form>
            </div>
    </div>

    <div id="footer">
        <a href="instagram.com/hamdalofficial/"><span class="fa fa-instagram icons"></span></a>
        <a href="https://twitter.com/hamdalofficial"><span class="fa fa-twitter icons"></span></a>
        <a href="https://hnginterns.slack.com/team/devayo"><span class="fa fa-slack icons"></span></a>
        <a href="https://github.com/Hamdal/"><span class="fa fa-github icons"></span></a>
        <a href="mailto:hameedayomide@gmail.com"><span class="fa fa-envelope icons"></span></a>        
    </div>

    <script src="script.js"></script>
</body>
</html>

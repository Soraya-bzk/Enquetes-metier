<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes enquête métier</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>

    <header>
        <nav class="navbar">
            <div class="logo"><a href="index.html">
                    <img src="logo.jpg" alt="MyLogo" width="120px">
                </a></div>
            <ul class="nav-ul">
                <li><a href="index.html">
                        <img src="home icon.jpg" alt="home" width="40px">
                    </a></li>
                <li><a href="enquête1.html">Enquête 1</a></li>
                <li><a href="enquête2.html">Enquête 2</a></li>
                <li><a href="enquête3.html">Enquête 3</a></li>
                <li><a href="Contact.html">Contact</a></li>

            </ul>
        </nav>

    </header>

    <?php
    // si le formulaire a été soumis
    if(isset($_post["message"])) {
        $retour = mail("soraya-bar@outlook.fr", $_post["sujet"], $_post
        ["message"], "from:contact@enquête.fr\r\nReply-to:" . $_post["email"]);
        if ($retour){
            echo "<p>L'email a bien été envoyé.<p>";
        }
    }
    ?>
   
    <footer>
        <div class="copyS"></div>&COPY; Soraya BARZIK</div>
        <ul>
            <li><a
                    href="https://www.linkedin.com/in/soraya-barzik-551661298?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">linkedin</a>
            </li>
            <li><a href="https://www.facebook.com/s0s0bzk">Facebook</a></li>
            <li><a href="https://www.instagram.com/s0w.bzk?igsh=MXFscDhqZ3Nyb3c4cw==">Instagram</a></li>
        </ul>
    </footer>
</body>

</html>
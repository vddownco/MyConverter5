<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" type="image/x-icon" href="assets/LogoWeb.png" />
        <title>My Youtube to MP4 - Convert Youtube in MP4 or MP3</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body id="main">
    <section id="header">
        <div id="logo">
            <img id="i" src="assets/logo1.png" alt="Ícono">
        </div>
        <div id="options">
            <div class="apppbar">
                <span id="alert4"><a  id="alert4" style="font-weight: 600;" onclick="cambiaventana(1)"> Youtube Downloader</a> </span>
            </div>
            <div class="apppbar">
            <span id="alert4"><a  id="alert4" style="font-weight: 600;" onclick="cambiaventana(1)"> Youtube Converter Mp3</a> </span>            </div>
            <div class="apppbar">
                <span id="alert4"><a id="alert4" style="font-weight: 600;" onclick="cambiaventana(2)"> Youtube Converter Mp4</a></span>
            </div>
        </div>
        <div id="logofc">

        </div>
    </section>
    <section class="body1">
        <div class="gj"></div>
        <div class="gg"><span id="alert2">MyYoutube&nbsp;</span><span id="alert3">Converter</span></div>
        <div class="gg"><span id="alert1">Log in for save downloads</span></div>
    </section>
    <div class="in-flex"></div>
    
    <div class="in-flex">
        <div class="titlea">
            <span class="titleconfiggg">
                Username.
            </span>
        </div>
    </div>
    <form action="./Logic/insertarproducto.php" method="POST"></form>
    <section class="home">
        
        <div class="in-flex">
            <div class="container">
                <div class="linktextt">
<input type="text" id="inputtext" placeholder="Write your email or username">
                </div>
                <div>

                </div>
            </div>
        </div>
    </section>

    <div class="in-flex"></div>
    <div class="in-flex">
        <div class="titlea">
            <span class="titleconfiggg">
                password.
            </span>
        </div>
    </div>
    <section class="home">
        
        <div class="in-flex">
            <div class="container">
                <div class="linktextt">
<input type="password" id="inputtext2" placeholder="Write your password">

                </div>
                <div>

                </div>
            </div>
        </div>
    </section>
</form>    
    <div class="in-flex"></div>
    <div class="in-flex">
        <div class="title">
            <div class="bbuttontext"   onclick="Buscarusuario()">
                    
        <div class="title">
            <div class="gg"><span id="alert2">Log&nbsp;</span><span id="alert3">In</span></div>

        </div>
            
            </div>
        </div>

    </div>
    <div class="in-flex">
        <div class="title">
            <div class="gg"><span id="alert1">Not register yet?&nbsp;</span><span id="aalert2" onclick="cambiaventana(0)">Register&nbsp;</span></div>
        </div>

    </div>
    <div class="igj"></div>
    <section id="header">
        <div id="options">
            <div class="appppbar">
                <span id="alert5"><a onclick="cambiaventana(4)">Contact Us</a> &nbsp; &nbsp; | &nbsp; &nbsp; <a onclick="cambiaventana(5)">Copyright clam</a> &nbsp; &nbsp; | &nbsp; &nbsp; <a onclick="cambiaventana(6)">privacy policy</a> &nbsp; &nbsp; | &nbsp; &nbsp; <a onclick="cambiaventana(7)">Terms of use</a> </span>
                <hr>
                
                <div id="div6"><span id="alert6"><b>CopyRight © 2023 - MyYoutubeConverter.com</b></span></div>
            </div>
            
        </div>
    </section>
    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
$htmlCode = '<script>
    const section = document.querySelector("#logofc");
    section.innerHTML = \'<img id="ii" src="assets/login.png" alt="Ícono" onclick="cambiaventana(8)">\';
</script>';

echo $htmlCode;
echo '<script>';
echo 'var email = "' . $email . '";';
echo 'var name = "' . $pass . '";';
echo 'var password = "' . $pass . '";';
echo '</script>';
} else {
$htmlCode = '<script>
    const section = document.querySelector("#logofc");
    section.innerHTML = \'<img id="ii" src="assets/notlogged.png" alt="Ícono" onclick="cambiaventana(1)">\';
</script>';
echo $htmlCode;
}
?>
    <script src="BackEnd.js"></script>
    </body>
</html>
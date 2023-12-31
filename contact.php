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
                    <span id="alert4"><a id="alert4" style="font-weight: 600;" onclick="cambiaventana(1)">Youtube Downloader</a></span>
                </div>
                <div class="apppbar">
                    <span id="alert4"><a id="alert4" style="font-weight: 600;" onclick="cambiaventana(1)"> Youtube Converter Mp3</a> </span>
                </div>
                <div class="apppbar">
                    <span id="alert4"><a id="alert4" style="font-weight: 600;" onclick="cambiaventana(2)"> Youtube Converter Mp4</a></span>
                </div>
            </div>
            <div id="logofc">
            </div>
        </section>
    </section>
    <div class="in-flex"></div>
    <div class="in-flex">
        <div class="title">
            <span class="titleconfig">
                Contact Information.
            </span>
        </div>
    </div>
    <div class="in-flex">
            <div class="textt">
                <span class="texting">For business inquiries, send a message to this email:<a href="mailto:alanaxelcastroresendiz@gmail.com" class="texting">myyoutubeconverter@gmail.com</a> or fill out the form. Thank you!</span>
            </div>
    </div>
    <section class="body1">
        <div class="jjj"></div>
        <div class="ggg">
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScwdTbypqaJr-ORlwCnq1lzjhBSugedg8XxVvrSDOszw0aTZw/viewform?embedded=true" width="640" height="768" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
        </div>
        <div class="jjj"></div>
    </section>

    <script src="BackEnd.js"></script>
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
    section.innerHTML = \'<img id="ii" src="assets/notlogged.png" alt="Ícono" onclick="cambiaventana(3)">\';
</script>';
echo $htmlCode;
}
?>
</body>
</html>
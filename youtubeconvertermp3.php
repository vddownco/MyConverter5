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
                <span id="alert4"><a  id="alert4" style="font-weight: 600;" onclick="cambiaventana(1)">Youtube Downloader</a></span>
            </div>
            <div class="apppbar">
                <span id="alert4"><a  id="alert4" style="font-weight: 600;" onclick="cambiaventana(1)"> Youtube Converter Mp3</a> </span>
            </div>
            <div class="apppbar">
                <span id="alert4"><a id="alert4" style="font-weight: 600;" onclick="cambiaventana(2)"> Youtube Converter Mp4</a></span>
            </div>
        </div>
        <div id="logofc">
        
        </div>
    </section>
    <section class="body1">
        <div class="gj"></div>
        <div class="gg"><span id="alert2">Youtube&nbsp;</span><span id="alert3">video downloader</span></div>
        <div class="gg"><span id="alert1">Download Youtube videos to MP3</span></div>
    </section>
    <section class="home">
        
        <div class="in-flex">
            <div class="container">
                <div class="linktext">
<input type="text" id="inputtext" placeholder="Paste the Youtube URL">
                </div>
                <div>

                </div>
                
                <div class="buttontext"   onclick="createContentinner2()">
                    
                    <img class="icon" src="assets/download.png" alt="Ícono">
                
                </div>
            </div>
        </div>
    </section>
    <section class="convertedvideo">
 
    </section>
    <div class="in-flex"></div>
    <div class="in-flex">
        <div class="title">
            <span class="titleconfig">
                Simple and fast conversions.
            </span>
        </div>
    </div>
    <div class="in-flex">
            <div class="textt">
                <span class="texting">With the link converter, you can download various video links in MP4 and MP3 formats, with fast and secure conversions in the highest qualities up to 720p. Enjoy watching videos or listening to music online and on your device.</span>
            </div>
    </div>
    <section id="characteristics">
        <div class="bulletkeys">
            <div class="keyfeaturess">
                <span class="titleconfig">Key characteristics</span>
            </div>
            <div class="spacing">
                
            </div>
            <div class="listt">
                
                <ul>
                    <li class="greyy"><p><span class="listing">Download Youtube mp3, convert Youtube to high quality mp3: 320kbps, 256kbps, 192kbps, 128kbps.</span></p></li><br>
                    <li class="greyy"><span class="listing">You can copy the URL of the YouTube video and paste into the search field, choose the format you want to download.</span></li><br>
                    <li class="greyy"><span class="listing">My youtubeconverter always FREE. All you need is a web browser and an internet connection to download videos. Also, you can't register an account<br></span></li><br>
                </ul>
            </div>

        </div>
        <div class="bulletspacing"></div>
        <div class="bulletkeys">
            <div class="keyfeaturess">
                <span class="titleconfig">How to download videos?</span>
            </div>
            <div class="spacing">
                
            </div>
            <div class="listt">
                
                <ul>
                    <li class="greyy"><span class="listing"><b>Step 1:</b> Access Youtube from your browser, find the video you want to download, and then copy the URL of the YouTube video<br></span></li><br>
                    <li class="greyy"><span class="listing"><b>Step 2:</b> Paste the URL of the YouTube video into the input box, then press the button icon and wait for a moment<br></span></li><br>
                    <li class="greyy"><span class="listing"><b>Step 3:</b> Select the audio/video format you want to download and hit the "Download Now" button.<br></span></li><br>    
                </ul>
            </div>

 
    </section>
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

    <script src="BackEnd.js"></script>
    </body>
</html>
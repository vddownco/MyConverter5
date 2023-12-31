<?php require "./CRUD/Logic/conexionmyc.php";
?>

<?php 
    $ema = $_POST['email'];
    $consulta = "SELECT * FROM downloads WHERE useremail = '$ema'";
    $query = mysqli_query($conexion,$consulta);
?>

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
        <div class="gg"><span id="alert2">Welcome!!&nbsp;</span><span id="alert3">Converter</span></div>
        <div class="gg"><span id="alert1">check all your downloads</span></div>
    </section>
    <div class="in-flex"></div>
    
    <div class="in-flex">
        <div class="titlea">
            <span class="titleconfiggg">
                Username.
            </span>
        </div>
    </div>
    <?php 
        while($row = mysqli_fetch_array($query)){
?>
    <?php 
echo '<script>';
echo 'function obtenerPorcentaje(data){
    console.log(data[0])
    var formData = new FormData();
    formData.append("imgurl", data[0]);
    // Realiza la solicitud POST usando fetch
    fetch("./CRUD/Logic/getvotes.php", {
      method: "POST",
      body: formData
    })
    .then(response => response.json())
    .then(data => {
        
    
        if (data.success) {
            console.log("Mensaje de éxito:", data.message);
            return data.message
        } else {
            // Operación fallida, muestra el mensaje de error
            console.error("Error del servidor:", data.message);
        }
    })
    .catch(error => {
        console.error("Error al enviar la solicitud:", error);
    });
}';
echo '
    var porcentaje = obtenerPorcentaje(["'.$row['imgurl'].'"]);
    console.log("hola");
    function seleccionarElementosPorTexto(contenido) {
    var elementos = document.body.getElementsByTagName("*");
    var elementosConTexto = [];

    for (var i = 0; i < elementos.length; i++) {
        if (elementos[i].innerText.includes(contenido)) {
            elementosConTexto.push(elementos[i]);
        }
    }

    return elementosConTexto;
}

var elementosConTexto = seleccionarElementosPorTexto("porcentaje");
elementosConTexto.forEach(function(elemento) {
    console.log("hola");
});';
echo '</script>';
$url = $row['imgurl'];
$consultalikes = "SELECT * FROM downloadsvotes WHERE imgurl = '$url'";
$query22 = mysqli_query($conexion,$consultalikes);
$row2 = mysqli_fetch_array($query22);
$htmlCode = '<section class="convertedvideo">       <div class="videocontainer">    <div class="videocontainercont">        <div class="thumbnailimage"  onclick="obtenervideo(event)">            <img class="thumbnail" src="' . $row['imgurl'] . '" alt="icono">        </div>        <div class="metadatavideo">            <div class="metadatacontainer">                <div class="Titlevideo">                    <span class="thumbnailtext">' . $row['title'] . '</span>                </div>                <div class="Titlevideo">                    <span class="thumbnailduration"><b>Duration:<b></span>                    <br><span class="thumbnaildurationtext"><b>' . $row['duration'] . '</b></span>                </div>                <div class="Downloadbuttons">                    <div class="Buttons">                        <div class="DownloadContainer">                            <div class="Download">                                <span id="alert54">Download</span>                            </div>         <div class="Download"><span id="alert54"> '. $row2['likes'] .' </span> <img id="i" src="assets/like.png" alt="Ícono" onclick="enviavoto(['. $row['id'] .',1])"><img id="i" src="assets/dislik.png" alt="Ícono" onclick="enviavoto(['. $row['id'] .',0])"> <span id="alert54"> '. $row2['dislikes'] .' </span> </div>               </div>                        <div class="qualityContainer">                            <div class="quality" onclick="redirigirAPagina("' . $row['linkone'] . '")">                                <span id="alert54">720p (' . $row['sizeone'] . ' mb)</span>                            </div>                            <div class="quality-sep">                            </div>                            <div class="quality" onclick="redirigirAPagina("' . $row['linktwo'] . '")">                                <span id="alert54">480p (' . $row['sizetwo'] . ' mb)</span>                            </div>                            <div class="quality-sep">                            </div>                            <div class="quality" onclick="redirigirAPagina("' . $row['linktwo'] . '")">                                <span id="alert54">360p (' . $row['sizetwo'] . ' mb)</span>                            </div>                        </div>                    </div>                </div>            </div>        </div>    </div></div></section>';

echo $htmlCode;
    ?>
    <?php
}
    ?>

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
    document.getElementById("alert3").textContent = "' . $email . '";
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
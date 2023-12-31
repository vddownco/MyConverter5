const createContentButton = document.getElementById("createContentButton");
const pages = ["register.php","youtubeconvertermp3.php", "youtubeconvertermp4.php","login.php","contact.php","copyrightclaim.php","privacypolicy.php","termsofuse.php","profile.php"];
console.log(obtenerPorcentaje(["https://i.ytimg.com/vi/6G_edNNmzeU/sddefault.jpg"]))
// Agrega un evento de clic al botón
createContentButton.addEventListener("click", createContent);
async function createContentinner()
{
    var resultado9 = []
    var urltext="";
    var boleano=0;
    // Obtén el elemento que quieres eliminar
    var elementoAEliminar = document.getElementById("videocontainer");

    // Verifica si el elemento existe antes de intentar eliminarlo
    if (elementoAEliminar) {
      // Obtén el padre del elemento
      var padre = elementoAEliminar.parentNode;

      // Elimina el elemento del DOM
      padre.removeChild(elementoAEliminar);
    } else {
      console.log("El elemento no existe.");
    }
    const section = document.querySelector(".convertedvideo");
    section.innerHTML = '<section class="convertedvideo"></section>'

    var url = document.getElementById("inputtext").value;
    if (url.trim() === "") {

        return;
    }else
    {
        urltext = url.trim();
        var nueva_ventana = await window.open("index.php?parametro=" + url.trim(),'_blank');
        window.addEventListener('message', function (event) {
            // Asegurarse de que el mensaje provenga de la ventana secundaria
            if (event!=undefined && event.source === nueva_ventana && boleano==0) {
                // Manejar el mensaje recibido
                boleano=1;
                //alert(event.data);
                
                var separador = "+\\+";
                // Dividir el texto usando el separador
                resultado9 = event.data.split(separador);
                
                // Imprimir el resultado
                console.log(resultado9);
                //alert(resultado9);
                if (typeof password !== 'undefined' && password !== null){
                    enviadescarga(resultado9); 
                    }            
            }
        });
        nueva_ventana.onload = function(){
       // downloadURL()

       const section = document.querySelector(".convertedvideo");
    section.innerHTML = '<section class="convertedvideo">       <div class="videocontainer">    <div class="videocontainercont">        <div class="thumbnailimage"  onclick="obtenervideo(event)">            <img class="thumbnail" src='+resultado9[5]+' alt="icono">        </div>        <div class="metadatavideo">            <div class="metadatacontainer">                <div class="Titlevideo">                    <span class="thumbnailtext">' + resultado9[0] + '</span>                </div>                <div class="Titlevideo">                    <span class="thumbnailduration"><b>Duration:<b></span>                    <br><span class="thumbnaildurationtext"><b>'+ resultado9[1] + '</b></span>                </div>                <div class="Downloadbuttons">                    <div class="Buttons">                        <div class="DownloadContainer">                            <div class="Download">                                <span id="alert54">Download</span>                            </div>                       </div>                        <div class="qualityContainer">                            <div class="quality" onclick="redirigirAPagina('+"'"+resultado9[6]+"'"+')">                                <span id="alert54">720p ('+resultado9[2] +' mb)</span>                            </div>                            <div class="quality-sep">                            </div>                            <div class="quality" onclick="redirigirAPagina('+"'"+resultado9[7]+"'"+')">                                <span id="alert54">480p (' +resultado9[3] + ' mb)</span>                            </div>                            <div class="quality-sep">                            </div>                            <div class="quality" onclick="redirigirAPagina('+"'"+resultado9[7]+"'"+')">                                <span id="alert54">360p ('+resultado9[4] +' mb)</span>                            </div>                        </div>                    </div>                </div>            </div>        </div>    </div></div></section>'

}
}
}
async function createContentinner2()
{
   // cambiaventana('contact.html');
    var resultado9 = [];
    var urltext="";
    var boleano=0;
    // Obtén el elemento que quieres eliminar
    var elementoAEliminar = document.getElementById("videocontainer");

    // Verifica si el elemento existe antes de intentar eliminarlo
    if (elementoAEliminar) {
      // Obtén el padre del elemento
      var padre = elementoAEliminar.parentNode;

      // Elimina el elemento del DOM
      padre.removeChild(elementoAEliminar);
    } else {
      console.log("El elemento no existe.");
    }
    const section = document.querySelector(".convertedvideo");
    section.innerHTML = '<section class="convertedvideo"></section>'

    var url = document.getElementById("inputtext").value;
    if (url.trim() === "") {

        return;
    }else
    {
        urltext = url.trim();
        var nueva_ventana = await window.open("downloadvideo1.php?parametro=" + url.trim(),'_blank');
        window.addEventListener('message', function (event) {
            // Asegurarse de que el mensaje provenga de la ventana secundaria
            if (event!=undefined && event.source === nueva_ventana && boleano==0 ) {
                // Manejar el mensaje recibido
                boleano=1;
                //alert(event.data);
                
                var separador = "+\\+";
                // Dividir el texto usando el separador
                resultado9 = event.data.split(separador);
                
                // Imprimir el resultado
                console.log(resultado9);
                if (typeof password !== 'undefined' && password !== null){
                enviadescarga(resultado9); 
                }
                //alert(resultado9);
                
            }
        });
        nueva_ventana.onload = function(){
       // downloadURL()

       const section = document.querySelector(".convertedvideo");
    section.innerHTML = '<section class="convertedvideo">       <div class="videocontainer">    <div class="videocontainercont">        <div class="thumbnailimage"  onclick="obtenervideo(event)">            <img class="thumbnail" src='+resultado9[5]+' alt="icono">        </div>        <div class="metadatavideo">            <div class="metadatacontainer">                <div class="Titlevideo">                    <span class="thumbnailtext">' + resultado9[0] + '</span>                </div>                <div class="Titlevideo">                    <span class="thumbnailduration"><b>Duration:<b></span>                    <br><span class="thumbnaildurationtext"><b>'+ resultado9[1] + '</b></span>                </div>                <div class="Downloadbuttons">                    <div class="Buttons">                        <div class="DownloadContainer">                            <div class="Download">                                <span id="alert54">Download</span>                            </div>                        </div>                        <div class="qualityContainer">                            <div class="quality" onclick="redirigirAPagina('+"'"+resultado9[6]+"'"+')">                                <span id="alert54">192kbps ('+resultado9[2] +' mb)</span>                            </div>                            <div class="quality-sep">                            </div>                            <div class="quality" onclick="redirigirAPagina('+"'"+resultado9[7]+"'"+')">                                <span id="alert54">128kbps (' +resultado9[3] + ' mb)</span>                            </div>                            <div class="quality-sep">                            </div>                            <div class="quality" onclick="redirigirAPagina('+"'"+resultado9[7]+"'"+')">                                <span id="alert54">96kbps ('+resultado9[4] +' mb)</span>                            </div>                        </div>                    </div>                </div>            </div>        </div>    </div></div></section>'

}
}
}
function redirigirAPagina(url) {
    //alert(url);
    window.open(url, '_blank');
}

async function downloadmedia()
{

    if (urltext.trim() === "") {
        return;
    }else
    {
        var nueva_ventana = await window.open("downloadvideo1.php?parametro=" + urltext.trim(),'_blank');
        nueva_ventana.onload = function(){
       // downloadURL()
    const section = document.querySelector(".convertedvideo");
    section.innerHTML = '<section class="convertedvideo">  <div class="videocontainer">    <div class="videocontainercont">        <div class="thumbnailimage"  onclick="obtenervideo(event)">            <img class="thumbnail" src="'+resultado9[5]+'" alt="icono">        </div>        <div class="metadatavideo">            <div class="metadatacontainer">                <div class="Titlevideo">                    <span class="thumbnailtext">Hot to make awesome thumbnails?</span>                </div>                <div class="Titlevideo">                    <span class="thumbnailduration"><b>Duration:<b></span>                    <br><span class="thumbnaildurationtext"><b>2:08</b></span>                </div>                <div class="Downloadbuttons">                    <div class="Buttons">                        <div class="DownloadContainer">                            <div class="Download">                                <span id="alert54">Download</span>                            </div>                        </div>                        <div class="qualityContainer">                            <div class="quality">                                <span id="alert54">720p (6.7 mb)</span>                            </div>                            <div class="quality-sep">                            </div>                            <div class="quality">                                <span id="alert54">480p (3.4 mb)</span>                            </div>                            <div class="quality-sep">                            </div>                            <div class="quality">                                <span id="alert54">360p (1.2 mb)</span>                            </div>                        </div>                    </div>                </div>            </div>        </div>    </div></div></section>'
    }
}
}
async function downloadURL() {
    const urlInput = document.getElementById("inputtext");
    try {
        const response = await fetch(urlInput.value);
        const file = await response.blob();
        const link = document.createElement("a");
        link.href = URL.createObjectURL(file);
        link.download = new Date().getTime().toString();
        link.click();
    } catch (error) {
        alert("Fallo al descargar el archivo.");
    }
}

function executepythonscript(){
    const { exec } = require('child_process');
    const parametro1 = urlInput.value;
    const parametro2 = '1';
    // Comando para ejecutar el script de Python
    const pythonScript = 'downloader.py '+ parametro1 + " " + parametro2;
    console.log(`Salida del script: ${pythonScript}`);
    exec(pythonScript, (error, stdout, stderr) => {
        if (error) {
            console.error(`Error al ejecutar el script: ${error}`);
            return;
        }
        console.log(`Salida del script: ${stdout}`);
    });    
}
async function downloadPytube() {
    const urlInput = document.getElementById("inputtext");
    try {
        const url = await fetch(urlInput.value);
        const fetch = require('node-fetch');  // Si estás en un entorno Node.js

        fetch(url)
          .then(response => {
            if (!response.ok) {
              throw new Error('Network response was not ok');
            }
            return response.arrayBuffer();
          })
          .then(buffer => {
            // Convierte el buffer en un Blob
            const blob = new Blob([buffer]);
            
            // Crea un enlace para descargar el archivo
            const link = document.createElement('a');
            link.href = window.URL.createObjectURL(blob);
            link.download = 'video.mp4';
            link.click();
          })
          .catch(error => {
            console.error('Error al descargar el archivo:', error);
          });
        
    } catch (error) {
        alert("Fallo al descargar el archivo.");
    }
}

// Función para crear el contenido dentro de la sección
function createContent() {
    // Crea la sección
    const section = document.querySelector(".convertedvideo");

    // Crea todos los elementos y sus atributos
    const videoContainer = document.createElement("div");
    videoContainer.className = "videocontainer";

    const videoContainerCont = document.createElement("div");
    videoContainerCont.className = "videocontainercont";

    const thumbnailImage = document.createElement("div");
    thumbnailImage.className = "thumbnailimage";
    thumbnailImage.onclick = obtenervideo;

    const thumbnailImg = document.createElement("img");
    thumbnailImg.className = "thumbnail";
    thumbnailImg.src = "assets/thumbnail.jpg";
    thumbnailImg.alt = "Ícono";

    const metadataVideo = document.createElement("div");
    metadataVideo.className = "metadatavideo";

    // Agrega el título del video
    const titleVideo = document.createElement("div");
    titleVideo.className = "Titlevideo";
    const titleSpan = document.createElement("span");
    titleSpan.className = "thumbnailtext";
    titleSpan.textContent = "How to make awesome thumbnails?";
    titleVideo.appendChild(titleSpan);
    metadataVideo.appendChild(titleVideo);

    // Agrega la duración del video
    const durationContainer = document.createElement("div");
    durationContainer.className = "Titlevideo";
    const durationLabel = document.createElement("span");
    durationLabel.className = "thumbnailduration";
    durationLabel.innerHTML = "<b>Duration:</b>";
    const durationText = document.createElement("span");
    durationText.className = "thumbnaildurationtext";
    durationText.innerHTML = "<b>2:08</b>";
    durationContainer.appendChild(durationLabel);
    durationContainer.appendChild(document.createElement("br"));
    durationContainer.appendChild(durationText);
    metadataVideo.appendChild(durationContainer);

    // Agrega botones de descarga
    const downloadButtons = document.createElement("div");
    downloadButtons.className = "Downloadbuttons";
    const buttonsContainer = document.createElement("div");
    buttonsContainer.className = "Buttons";

    const downloadContainer = document.createElement("div");
    downloadContainer.className = "DownloadContainer";
    const downloadButton = document.createElement("div");
    downloadButton.className = "Download";
    const downloadSpan = document.createElement("span");
    downloadSpan.id = "alert54";
    downloadSpan.textContent = "Download";
    downloadButton.appendChild(downloadSpan);
    downloadContainer.appendChild(downloadButton);
    buttonsContainer.appendChild(downloadContainer);

    // Agrega opciones de calidad
    const qualityContainer = document.createElement("div");
    qualityContainer.className = "qualityContainer";

    const qualities = ["720p (6.7 mb)", "480p (3.4 mb)", "360p (1.2 mb)"];

    for (const quality of qualities) {
        const qualityDiv = document.createElement("div");
        qualityDiv.className = "quality";
        const qualitySpan = document.createElement("span");
        qualitySpan.id = "alert54";
        qualitySpan.textContent = quality;
        qualityDiv.appendChild(qualitySpan);
        qualityContainer.appendChild(qualityDiv);

        if (quality !== qualities[qualities.length - 1]) {
            const qualitySeparator = document.createElement("div");
            qualitySeparator.className = "quality-sep";
            qualityContainer.appendChild(qualitySeparator);
        }
    }

    buttonsContainer.appendChild(qualityContainer);
    downloadButtons.appendChild(buttonsContainer);
    metadataVideo.appendChild(downloadButtons);
    
    // Agrega estos elementos al DOM
    thumbnailImage.appendChild(thumbnailImg);
    videoContainerCont.appendChild(thumbnailImage);
    videoContainerCont.appendChild(metadataVideo);
    videoContainer.appendChild(videoContainerCont);
    section.appendChild(videoContainer);
}

function obtenervideo(event) {
    // Aquí puedes poner la lógica que deseas cuando se hace clic en el elemento
    console.log("Se hizo clic en la imagen del video.");
}
function enviarDatos() {
    // Obtén los valores de los inputs
    var input1Value = document.getElementById('inputtext').value;
    var input2Value = document.getElementById('inputtext2').value;
    var input3Value = document.getElementById('inputtext3').value;
  
    // Crea un objeto FormData y añade los valores
    var formData = new FormData();
    formData.append('email', input1Value);
    formData.append('name', input2Value);
    formData.append('password', input3Value);
  
    // Realiza la solicitud POST usando fetch
    fetch('./CRUD/Logic/newuser.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(data => {
        
    
        if (data.success) {
            // Operación exitosa, puedes hacer algo aquí si es necesario
            console.log('Mensaje de éxito:', data.message);
            console.log('Mensaje de éxito:', data.email);
            console.log('Mensaje de éxito:', data.pass);
            // Crea un formulario oculto
            var form = document.createElement('form');
            form.method = 'post';
            form.action = 'youtubeconvertermp3.php'; // Reemplaza 'ruta_de_redireccion' con la URL a la que deseas redirigir
        
            // Agrega un campo oculto para cada parámetro que deseas pasar
            var param1 = document.createElement('input');
            param1.type = 'hidden';
            param1.name = 'email';
            param1.value = data.email;
            form.appendChild(param1);
        
            var param2 = document.createElement('input');
            param2.type = 'hidden';
            param2.name = 'pass';
            param2.value = data.pass;
            form.appendChild(param2);
        
            // Agrega el formulario al cuerpo del documento
            document.body.appendChild(form);
        
            // Envía automáticamente el formulario
            form.submit();
        } else {
            // Operación fallida, muestra el mensaje de error
            console.error('Error del servidor:', data.message);
        }
    })
    .catch(error => {
        console.error('Error al enviar la solicitud:', error);
    });
  }
function Buscarusuario() {
    // Obtén los valores de los inputs
    var input1Value = document.getElementById('inputtext').value;
    var input2Value = document.getElementById('inputtext2').value;
    console.log(input1Value);
    console.log(input2Value);
    // Crea un objeto FormData y añade los valores
    var formData = new FormData();
    formData.append('email', input1Value);
    formData.append('password', input2Value);
  
    // Realiza la solicitud POST usando fetch
    fetch('./CRUD/Logic/searchaccount.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(data => {
        
    
        if (data.success) {
            // Operación exitosa, puedes hacer algo aquí si es necesario
            console.log('Mensaje de éxito:', data.message);
            console.log('Mensaje de éxito:', data.email);
            console.log('Mensaje de éxito:', data.pass);
            console.log('Mensaje de éxito:', data.id);
            console.log('Mensaje de éxito:', data.username);
            // Crea un formulario oculto
            var form = document.createElement('form');
            form.method = 'post';
            form.action = 'youtubeconvertermp3.php'; // Reemplaza 'ruta_de_redireccion' con la URL a la que deseas redirigir
        
            // Agrega un campo oculto para cada parámetro que deseas pasar
            var param1 = document.createElement('input');
            param1.type = 'hidden';
            param1.name = 'email';
            param1.value = data.email;
            form.appendChild(param1);
        
            var param2 = document.createElement('input');
            param2.type = 'hidden';
            param2.name = 'pass';
            param2.value = data.pass;
            form.appendChild(param2);
        
            // Agrega el formulario al cuerpo del documento
            document.body.appendChild(form);
        
            // Envía automáticamente el formulario
            form.submit();
        } else {
            // Operación fallida, muestra el mensaje de error
            console.error('Error del servidor:', data.message);
        }
    })
    .catch(error => {
        console.error('Error al enviar la solicitud:', data.message);
    });
  }
function cambiaventana(event){
    if (typeof password !== 'undefined' && password !== null) {
        // Si la variable password está definida y no es nula, realiza una solicitud POST
        console.log("existe");
        console.log(event);
        
        var form = document.createElement('form');
        form.method = 'post';
        form.action = pages[event]; // Reemplaza 'ruta_de_redireccion' con la URL a la que deseas redirigir
    
        // Agrega un campo oculto para cada parámetro que deseas pasar
        var param1 = document.createElement('input');
        param1.type = 'hidden';
        param1.name = 'email';
        param1.value = email;
        form.appendChild(param1);
    
        var param2 = document.createElement('input');
        param2.type = 'hidden';
        param2.name = 'pass';
        param2.value = password;
        form.appendChild(param2);
    
        // Agrega el formulario al cuerpo del documento
        document.body.appendChild(form);
    
        // Envía automáticamente el formulario
        form.submit();
    } else {
        console.log("no existe");
        // Si password no está definida o es nula, abre la URL normalmente
        window.location.href = pages[event];
    }
}  
function cambiachancla(event){

        window.location.href = pages[event];
}  
function enviadescarga(data){
    var formData = new FormData();
    formData.append('title', data[0]);
    formData.append('duration', data[1]);
    formData.append('linkone', data[2]);
    formData.append('linktwo', data[3]);
    formData.append('sizeone', data[6]);
    formData.append('sizetwo', data[7]);
    formData.append('imgurl', data[5]);
    formData.append('useremail', email);
    console.log(data);
    console.log(email);
    // Realiza la solicitud POST usando fetch
    fetch('./CRUD/Logic/newdownload.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(data => {
        
    
        if (data.success) {
            console.log('Mensaje de éxito:', data.message);
        } else {
            // Operación fallida, muestra el mensaje de error
            console.error('Error del servidor:', data.message);
        }
    })
    .catch(error => {
        console.error('Error al enviar la solicitud:', error);
    });
}
function enviavoto(data){
    console.log(data[0])
    console.log(data[1])
    var formData = new FormData();
    formData.append('id', data[0]);
    formData.append('id_user', data[1]);
    // Realiza la solicitud POST usando fetch
    fetch('./CRUD/Logic/vote.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(data => {
        
    
        if (data.success) {
            console.log('Mensaje de éxito:', data.message);
        } else {
            // Operación fallida, muestra el mensaje de error
            console.error('Error del servidor:', data.message);
        }
    })
    .catch(error => {
        console.error('Error al enviar la solicitud:', error);
    });
}
async function obtenerPorcentaje(data){
    console.log(data[0])
    var formData = new FormData();
    formData.append('imgurl', data[0]);
    // Realiza la solicitud POST usando fetch
    fetch('./CRUD/Logic/getvotes.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(data => {
        
    
        if (data.success) {
            console.log('Mensaje de éxito:', data.message);
            return data.message
        } else {
            // Operación fallida, muestra el mensaje de error
            console.error('Error del servidor:', data.message);
        }
    })
    .catch(error => {
        console.error('Error al enviar la solicitud:', error);
    });
}
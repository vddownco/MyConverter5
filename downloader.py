from pytube import YouTube
import os
from tkinter import *
from tkinter import messagebox as MessageBox
import requests
def accion(enlace,opcion):
    video = YouTube(enlace)
    if opcion==1:
        descarga = video.streams.get_highest_resolution()
        descarga2 = video.streams.get_lowest_resolution()
        descarga3 = video.streams.get_by_resolution("480p")
        if descarga3==None:
            descarga3 =video.streams.get_lowest_resolution()
        portada = video.thumbnail_url
        #response = requests.get(portada)
        output_filename = "C:\\xampp\\htdocs\\ejerciciosparcial3\\assets\\thumbnaildownloaded.jpg"
        # Verifica si la solicitud se realizó con éxito
        """
        if response.status_code == 200:
            # Guarda la miniatura en un archivo local
            with open(output_filename, 'wb') as file:
                file.write(response.content)
            #print(f"La miniatura se ha descargado exitosamente como '{output_filename}'")
        else:
            print("No se pudo descargar la miniatura. Código de estado:", response.status_code)
        """
        
        duracion_en_segundos = video.length
        minutos, segundos = divmod(duracion_en_segundos, 60)
        print(f"{descarga2.default_filename}" + "+\\+"+f"{int(minutos)}:{int(segundos)}" + "+\\+" +f"{descarga.filesize_mb}" + "+\\+" + f"{descarga3.filesize_mb}"+ "+\\+" +f"{descarga2.filesize_mb}"+"+\\+"+f"{portada}"+"+\\+"+f"{descarga.url}"+"+\\+"+f"{descarga2.url}"+"+\\+"+f"{descarga3.url}")
        
    elif opcion==2:
        # Ruta para la carpeta de videos
        carpeta_videos = "C:\\xampp\\htdocs\\ejerciciosparcial3\\video"
        descarga = video.streams.get_highest_resolution()
        print(str(descarga.filesize_mb))
        print("hola")
        print(str(descarga.default_filename))
        # Verifica si la carpeta ya existe
        if os.path.exists(carpeta_videos):
            # Si existe, elimina todos los archivos en la carpeta
            for archivo in os.listdir(carpeta_videos):
                archivo_path = os.path.join(carpeta_videos, archivo)
                os.remove(archivo_path)
        else:
            # Si no existe, crea la carpeta
            os.makedirs(carpeta_videos)
        
        descarga = video.streams.get_lowest_resolution()
        print(descarga.url)
        # Nombre del archivo de salida
        output_filename = os.path.join(carpeta_videos)
        descarga.download(output_filename)
        
    elif opcion==3:
        # Ruta para la carpeta de videos
        carpeta_videos = "C:\\xampp\\htdocs\\ejerciciosparcial3\\video"
        
        # Verifica si la carpeta ya existe
        if os.path.exists(carpeta_videos):
            # Si existe, elimina todos los archivos en la carpeta
            for archivo in os.listdir(carpeta_videos):
                archivo_path = os.path.join(carpeta_videos, archivo)
                os.remove(archivo_path)
        else:
            # Si no existe, crea la carpeta
            os.makedirs(carpeta_videos)
        
        descarga = video.streams.get_lowest_resolution()
        # Nombre del archivo de salida
        output_filename = os.path.join(carpeta_videos)
        descarga.download(output_filename)
    elif opcion==4:
        # Ruta para la carpeta de videos
        carpeta_videos = "C:\\xampp\\htdocs\\ejerciciosparcial3\\video"
        
        # Verifica si la carpeta ya existe
        if os.path.exists(carpeta_videos):
            # Si existe, elimina todos los archivos en la carpeta
            for archivo in os.listdir(carpeta_videos):
                archivo_path = os.path.join(carpeta_videos, archivo)
                os.remove(archivo_path)
        else:
            # Si no existe, crea la carpeta
            os.makedirs(carpeta_videos)
        
        streams = video.streams.filter(only_audio=True)

        # Seleccionar la primera corriente de audio disponible (puede variar según la calidad)
        audio_stream = streams.first()

        # Descargar el audio en formato MP3
        audio_stream.download(output_path=os.path.join(carpeta_videos), filename='audio.mp3')

    if opcion==8:
        
        descarga = video.streams.filter(only_audio=True, file_extension='mp4').first()
        descarga2 = video.streams.filter(only_audio=True, file_extension='mp4').first()
        descarga3 = video.streams.filter(only_audio=True).first()
        """
        if descarga3==None:
            descarga3 =video.streams.get_lowest_resolution()
        """
        portada = video.thumbnail_url
        #response = requests.get(portada)
        output_filename = "C:\\xampp\\htdocs\\ejerciciosparcial3\\assets\\thumbnaildownloaded.jpg"
        # Verifica si la solicitud se realizó con éxito
        """
        if response.status_code == 200:
            # Guarda la miniatura en un archivo local
            with open(output_filename, 'wb') as file:
                file.write(response.content)
            #print(f"La miniatura se ha descargado exitosamente como '{output_filename}'")
        else:
            print("No se pudo descargar la miniatura. Código de estado:", response.status_code)
        """
        
        duracion_en_segundos = video.length
        minutos, segundos = divmod(duracion_en_segundos, 60)
  #      print(f"{descarga2.default_filename}" + "+\\+"+f"{int(minutos)}:{int(segundos)}" + "+\\+" +f"{descarga.filesize_mb}" + "+\\+" + f"{descarga3.filesize_mb}"+ "+\\+" +f"{descarga2.filesize_mb}"+"+\\+"+f"{portada}"+"+\\+"+f"{descarga.url}"+"+\\+"+f"{descarga2.url}"+"+\\+"+f"{descarga3.url}")
        print(f"{descarga.default_filename}" + "+\\+"+f"{int(minutos)}:{int(segundos)}" + "+\\+" +f"{descarga.filesize_mb}" + "+\\+" + f"{descarga3.filesize_mb}"+ "+\\+" +f"{descarga2.filesize_mb}"+"+\\+"+f"{portada}"+"+\\+"+f"{descarga.url}"+"+\\+"+f"{descarga2.url}"+"+\\+"+f"{descarga3.url}")
        # Nombre del archivo de salida
#enlace = str(input())
#op = int(input())
import sys

# El primer elemento de sys.argv es el nombre del script
nombre_script = sys.argv[0]

# Los argumentos proporcionados al script comienzan desde el segundo elemento
if len(sys.argv) >= 3:
    parametro1 = sys.argv[1]
    parametro2 = sys.argv[2]
    #print("Parametro 1:", parametro1)
    #print("Parametro 2:", parametro2)
else:
    print("Se requieren al menos dos argumentos.")


accion(str(parametro1),int(parametro2))
# Nombre del archivo de salida


# Realiza la solicitud GET para descargar la miniatura




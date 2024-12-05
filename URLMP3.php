<?php


declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';




use YoutubeDl\Options;
use YoutubeDl\YoutubeDl;
echo "\n\n\e[0;31mURLMP3\e\n\n\n";
echo "\e[0;33mInf/URLMP3:\e\n\n\e[0;32m• Es un extractor y recodificador de urlstream a archivos multimedia almacenables.\n\n• URLMP3 recodifica urls de plataformas de streaming en archivos de audio en formato 'MP3'.\e\n\n";
echo "\e[0;33mEjecución:\e";
echo "\n\n\033[32m~ $ yes | termux-setup-storage\n\033m";
echo "~ $ yes | pkg update && pkg upgrade";
echo "\n~ $ pkg install php";
echo "\n~ $ pkg install git";
echo "\n~ $ mkdir storage/download/URLMP3";
echo "\n~ $ cd storage/downloads/URLMP3";
echo "\n~/.../downloads/URLMP3 $ composer require norkunas/youtube-dl-php:dev-master";
echo "\n~/.../downloads/URLMP3 $ git clone ";
echo "\n~/.../downloads/URLMP3 $ php -f URLMP3.php <==> Comando de ejecución de URLMP3";
echo "\n\n\e[0;33mEjemplo/ruta de almacenamiento:\e\n\n\e[0;32m~ $ yes | termux-setup-storage\n~ $ cd storage/downloads/URLMP3\n~ $ pwd\n/data/data/com.termux/files/home/storage/downloads/URLMP3\e\n";
echo "\n\n\e[0;33m##################################\e";
echo "\n\e[0;33m# Frase de gracia, devoción y fe \e\e[0;33m#\e\n\e[0;34m#'El Rey Jesucristo viene pronto'#\n\e[0;31m#   Mateo 24:25, Author: 魔鬼;   #\e";
echo "\n\e[0;31m##################################\e\n";
echo "\n\n\e[0;33m-->Ruta de almacenamiento:\e";
echo "\e[0;32m /data/data/com.termux/files/home/storage/downloads/URLMP3\e";
echo "\n\n\033[34m==>Ruta de almacenaje:\033[0m";
echo "\033[32m \033m";
fscanf(STDIN, "%s", $d);
echo "\n\n\e[0;33mExample:\e\n\n";
echo"\n\n\e[0;33m-->URL:\e";
echo "\e[0;35m https://m.youtube.com/watch?v=YqeW9_5kURI\e\n\n";

echo "\033[34m==>URL:\033[0m";
echo "\033[32m \033m";
fscanf(STDIN, "%s", $u);

$y = new YoutubeDl();
$collection = $y->download(
    Options::create()
        ->downloadPath($d)
        ->extractAudio(true)
        ->audioFormat('mp3')
        ->audioQuality('0')
        ->output('%(title)s.%(ext)s')
        ->url($u)
);

foreach ($collection->getVideos() as $EVC) {
    

    
    if ($EVC->getError() !== null) {
        
        echo "\n\n\e[0;33m==>[Error/descarga]\e";
      echo "\n\n\e[0;33m[Errores/estadísticos]:\e";
      echo "\n\n\e[0;32m• Url no extraible por audilocked urlstream.\n• Bugscripts.\n• Url ingresada no valida.\n• Directorio invalido.\e";
          
       /**
        echo "\e[0;33m[Error/diagnóstico]\e | \e[0;32m{$EVC->getError()}.\e\n\n";  **/
        
     echo "\n\n\033[33mRecomendación: \033[0m";
        echo "\n\n\e[0;32m• Se recomienda reintentar con el mismo 'ID' de la urlstream ingresada nuevamente preferiblemente de una plataforma de streaming diferente.\n• Verifique la url y constate que no contenga errores involutarios la url obtenida del sitio de URLSTREAMING del cual intenta extraer y recodificar en formato Mp3 mediante URLMP3 através del proceso de extracción y recodificación e almacenamiento en un formato legible de audio en formato Mp3 mediante URLMP3.\n• Verifique la dirección del directorio ingresado y constate mediante el comando 'pwd' desde termux para verificar si posiblemente es el error.\e\n\n";
        echo "\e[0;33mEjemplo:\e\n\n";
        echo "\e[0;32m~ $ cd storage/downloads/URLMP3\n\n~/.../downloads/URLMP3 $ pwd\n/data/data/com.termux/files/home/storage/downloads/URLMP3\e\n\n";
        
    } else {
        $EVC->getFile();
        echo "\n\n\n\e[0;33m[Descarga/completada]\e\n\n";
        
    echo "\e[0;33mAudio descargado:\e";    
        echo "\033[32m\n\n\033m";
        echo $EVC->getTitle();
  
  echo "\n\n\e[0;33mAlmacenado en:\e";
  echo "\n\n\033[32m$d\033m\n\n";
 
 
 
    }



 
 
 
    
}
?>

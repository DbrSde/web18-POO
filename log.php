<?php
class Log {
    public static function logWrite() {
        //Chemin vers le répertoire logs
        $directory = "/logs/";

        // On définit le nom du fichier de log en fonction de la date
        $file = date('Y-m-d') . ".log";

        //On définit le nom du fichier avec on chemin complet.
        $path=dirname(__DIR__) . $directory . $file;

        //Horodatag du message d'erreur passé en argument
        $data = date('H:i:s') . " " . data;

        // Création de "ressource" après ouverture du fichier horodoté
        $handle = fopen($path, "a");

        //Si la ressource est dispo
        if (flock($handle, LOCK_EX)) {

            // On écrit dans le fichier
            fwrite($handle, $data . PHP_EOL);

            //Et on débloque le fichier.
            flock($handle, LOCK_UN);
        }
    }
}
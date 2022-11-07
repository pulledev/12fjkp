<?php

class Tools
{
    public function hashString($string){
        $salt = 'bQ423hbHM8Sbdb9pjquUQU1IWxcxnybBSjqnyBJ23HjqnI3WbkxUQsxnPw813jkq';
        return hash('sha512', $string . $salt);
    }
    public function randomCode($laenge): string
    {
        $letters = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","1","2","3","4","5","6","7","8","9","0","!","§","$","%","&","/","(",")","=","?","!","[");
        $ausgabe = "";
        $i = 0;
        while ($i < $laenge) {
            $ausgabe .= $letters[rand(0,count($letters)-1)];
            $i++;
        }
        return $ausgabe;
    }
    public function decodeRank($number): string

    {
        $output = "Oh ein fehler in der Matrix, welche Pulle äääh Pille nimmst du?(Error Code: 69.001)";
        switch ($number){
            case 0:
                $output = "Jäger";
                break;
            case 1:
                $output = "Gefreiter";
                break;
            case 2:
                $output = "Obergefreiter";
                break;
            case 3:
                $output = "Hauptgefreiter";
                break;
            case 4:
                $output = "Stabsgefreiter";
                break;
            case 5:
                $output = "Oberstabsgefreiter";
                break;
            case 6:
                $output = "Korporal";
                break;
            case 7:
                $output = "Stabskorporal";
                break;
            case 8:
                $output = "Unteroffizier";
                break;
            case 9:
                $output = "Stabsunteroffizier";
                break;
            case 10:
                $output = "Fahnenjunker";
                break;
            case 11:
                $output = "Feldwebel";
                break;
            case 12:
                $output = "Oberfeldwebel";
                break;
            case 13:
                $output = "Hauptfeldwebel";
                break;
            case 14:
                $output = "Stabsfeldwebel";
                break;
            case 15:
                $output = "Oberstabsfeldwebel";
                break;
            case 16:
                $output = "Fähnrich";
                break;
            case 17:
                $output = "Oberfähnrich";
                break;
            case 18:
                $output = "Leutnant";
                break;
            case 19:
                $output = "Oberleutnant";
                break;
            case 20:
                $output = "Hauptmann";
                break;
            case 21:
                $output = "Stabshauptmann";
                break;
            case 22:
                $output = "Major";
                break;
            case 23:
                $output = "Oberstleutnant";
                break;
            case 24:
                $output = "Oberst";
                break;
            case 25:
                $output = "Brigade General";
                break;
            case 26:
                $output = "General Major";
                break;
            case 27:
                $output = "General Leutnant";
                break;
            case 28:
                $output = "General";
                break;
            case 29:
                $output = "Jäger (Aufklärer)";
                break;
            case 30:
                $output = "Gefreiter (Aufklärer)";
                break;
            case 31:
                $output = "Obergefreiter (Aufklärer)";
                break;
            case 32:
                $output = "Hauptgefreiter (Aufklärer)";
                break;
            case 33:
                $output = "Stabsgefreiter (Aufklärer)";
                break;
            case 34:
                $output = "Oberstabsgefreiter (Aufklärer)";
                break;
            case 35:
                $output = "Korporal (Aufklärer)";
                break;
            case 36:
                $output = "Stabskorporal (Aufklärer)";
                break;
            case 37:
                $output = "Unteroffizier (Aufklärer)";
                break;
            case 38:
                $output = "Stabsunteroffizier (Aufklärer)";
                break;
        }
        return $output;
    }
    public function decodePost($number): string
    {
        $output = "Bist du Neo? Mein Code ist IMMER Fehlerfrei!!!1! (Error Code: 1)";
        switch ($number) {
            case 0:
                $output = "Soldat";
                break;
            case 1:
                $output = "Gruppenführer";
                break;
            case 2:
                $output = "Stlv. Gruppenführer";
                break;
            case 3:
                $output = "Kompaniechef";
                break;
            case 4:
                $output = "Kompanieführer";
                break;
            case 5:
                $output = "Stellvertretender Zugführer";
                break;
            case 6:
                $output = "Zugführer";
                break;
            case -1:
                $output = "Beobachter";
                break;
        }
        return $output;
    }
    public function decodePosition($number): string
    {
        $output = "Oh ein Fehler in der Matrix(Error Code: 1)";
        switch($number) {
            case 0:
                $output = "Alpha";
                break;
            case 1:
                $output = "Bravo";
                break;
            case 2:
                $output = "Charlie";
                break;
            case 3:
                $output = "Sierra";
                break;
            case 4:
                $output = "Kommandantur";
                break;
            case 5:
                $output = "Reservist";
                break;
            case 6:
                $output = "Zugführer des I. Zuges";
                break;
        }
        return $output;
    }
    public function decodeSpecialPosts($number): string
    {
        $output = "Sonderposten sind irrelevant->ignorieren, nein Spaß(Error Code: 1)";
        switch($number){
            case 0:
                $output = "kein Sonderposten";
                break;
            case 1:
                $output = "Kompaniefeldwebel";
                break;
            case 2:
                $output = "Verwaltungs Soldat I";
                break;
            case 3:
                $output = "Leiter S2";
                break;
            case 4:
                $output = "Medien Soldat";
                break;
            case 5:
                $output = "Leiter S3";
                break;
            case 6:
                $output = "S3 Sklave";
                break;
        }
        return $output;
    }
    public function decodeAdminRank($number): string
    {
        $output = "Irgendwas stimmt gar nicht mit diesem Admin(Error Code: 1)";
        switch ($number) {
            case 1:
                $output = "Admin";
                break;
            case 2:
                $output = "Spieß";
                break;
            case 3:
                $output = "Developer";
                break;
            case 4:
                $output = "Super Admin";
                break;

        }
        return $output;
    }
}

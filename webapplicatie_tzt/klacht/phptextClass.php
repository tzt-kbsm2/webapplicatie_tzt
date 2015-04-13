<?php

session_start();

class phptextClass {

    public function phptext($text, $textColor, $backgroundColor = '', $fontSize, $imgWidth, $imgHeight, $dir, $fileName) {
        /* instellingen */
        $font = './calibri.ttf'; /* definiëren lettertype */
        $textColor = $this->hexToRGB($textColor);

        $im = imagecreatetruecolor($imgWidth, $imgHeight);
        $textColor = imagecolorallocate($im, $textColor['r'], $textColor['g'], $textColor['b']);

        if ($backgroundColor == '') {/* Willekeurige kleur selecteren */
            $colorCode = array('#56aad8', '#61c4a8', '#d3ab92');
            $backgroundColor = $this->hexToRGB($colorCode[rand(0, count($colorCode) - 1)]);
            $backgroundColor = imagecolorallocate($im, $backgroundColor['r'], $backgroundColor['g'], $backgroundColor['b']);
        } else {/* Selecteer achtergrondkleur zoals voorzien */
            $backgroundColor = $this->hexToRGB($backgroundColor);
            $backgroundColor = imagecolorallocate($im, $backgroundColor['r'], $backgroundColor['g'], $backgroundColor['b']);
        }

        imagefill($im, 0, 0, $backgroundColor);
        list($x, $y) = $this->ImageTTFCenter($im, $text, $font, $fontSize);
        imagettftext($im, $fontSize, 0, $x, $y, $textColor, $font, $text);
        if (imagejpeg($im, $dir . $fileName, 90)) {/* Plaatje opslaan als JPG */
            return json_encode(array('status' => TRUE, 'image' => $dir . $fileName));
            imagedestroy($im);
        }
    }

    public function phpcaptcha($textColor, $backgroundColor, $imgWidth, $imgHeight, $noiceLines = 0, $noiceDots = 0, $noiceColor = '#162453') {
        /* Settings */
        $text = $this->random();
        $font = 'font/monofont.ttf'; /* Lettertype */
        $textColor = $this->hexToRGB($textColor);
        $fontSize = $imgHeight * 0.75;

        $im = imagecreatetruecolor($imgWidth, $imgHeight);
        $textColor = imagecolorallocate($im, $textColor['r'], $textColor['g'], $textColor['b']);

        $backgroundColor = $this->hexToRGB($backgroundColor);
        $backgroundColor = imagecolorallocate($im, $backgroundColor['r'], $backgroundColor['g'], $backgroundColor['b']);

        /* Willekeurige lijnen op de achtergrond van het plaatje genereren */
        if ($noiceLines > 0) {
            $noiceColor = $this->hexToRGB($noiceColor);
            $noiceColor = imagecolorallocate($im, $noiceColor['r'], $noiceColor['g'], $noiceColor['b']);
            for ($i = 0; $i < $noiceLines; $i++) {
                imageline($im, mt_rand(0, $imgWidth), mt_rand(0, $imgHeight), mt_rand(0, $imgWidth), mt_rand(0, $imgHeight), $noiceColor);
            }
        }

        if ($noiceDots > 0) {/* Willekeurige puntjes op de achtergrond genereren */
            for ($i = 0; $i < $noiceDots; $i++) {
                imagefilledellipse($im, mt_rand(0, $imgWidth), mt_rand(0, $imgHeight), 3, 3, $textColor);
            }
        }

        imagefill($im, 0, 0, $backgroundColor);
        list($x, $y) = $this->ImageTTFCenter($im, $text, $font, $fontSize);
        imagettftext($im, $fontSize, 0, $x, $y, $textColor, $font, $text);

        imagejpeg($im, NULL, 90); /* Plaatje laten zien */
        header('Content-Type: image/jpeg'); /* definiëren van het type afbeelding in browservenster worden getoond */
        imagedestroy($im); /* Plaatje meteen vernietigen */
        if (isset($_SESSION)) {
            $_SESSION['captcha_code'] = $text; /* Willekeurige text in session voor captcha zetten */
        }
    }

    /* Voor willekeurige string */

    protected function random($characters = 6, $letters = '23456789bcdfghjkmnpqrstvwxyz') {
        $str = '';
        for ($i = 0; $i < $characters; $i++) {
            $str .= substr($letters, mt_rand(0, strlen($letters) - 1), 1);
        }
        return $str;
    }

    /* functie om hex waarde aan rgb-array te zetten */

    protected function hexToRGB($colour) {
        if ($colour[0] == '#') {
            $colour = substr($colour, 1);
        }
        if (strlen($colour) == 6) {
            list( $r, $g, $b ) = array($colour[0] . $colour[1], $colour[2] . $colour[3], $colour[4] . $colour[5]);
        } elseif (strlen($colour) == 3) {
            list( $r, $g, $b ) = array($colour[0] . $colour[0], $colour[1] . $colour[1], $colour[2] . $colour[2]);
        } else {
            return false;
        }
        $r = hexdec($r);
        $g = hexdec($g);
        $b = hexdec($b);
        return array('r' => $r, 'g' => $g, 'b' => $b);
    }

    /* Functie om middelste positie op het plaatje te krijgen */

    protected function ImageTTFCenter($image, $text, $font, $size, $angle = 8) {
        $xi = imagesx($image);
        $yi = imagesy($image);
        $box = imagettfbbox($size, $angle, $font, $text);
        $xr = abs(max($box[2], $box[4]));
        $yr = abs(max($box[5], $box[7]));
        $x = intval(($xi - $xr) / 2);
        $y = intval(($yi + $yr) / 2);
        return array($x, $y);
    }

}

?>
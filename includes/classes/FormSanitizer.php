<?php
class FormSanitizer {

    public static function sanitiseformString($inputText) {
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ","",$inputText);
        $inputText = strtolower($inputText);
        $inputText = ucfirst($inputText);
        return $inputText;
    }

    public static function sanitiseformUsername($inputText) {
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ","",$inputText);
        
        return $inputText;
    }

    public static function sanitiseformPassword($inputText) {
        $inputText = strip_tags($inputText);   

        return $inputText;
    }

    public static function sanitiseformEmail($inputText) {
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ","",$inputText);
        
        return $inputText;
    }

}

?>
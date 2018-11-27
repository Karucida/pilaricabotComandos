<?php

/**
 * Atributos del objeto command
 *
 * @author karu
 */
class commandData extends messageOptions{

    private $type = COMMAND_TYPE_TEXT;
    private $text = false;
    private $description = array();
    public $commandBoolean = false;
    
    /**
     * Texto a enviar, devuelve falso si el texto esta vacio
     * @param type $rawtext
     * @return boolean
     */
    public function setText($rawtext) {
        $text = trim($rawtext);
        if (strlen($text) > 0) {
            $this->text = $text;
            return true;
        }
    }

    /**
     * Devuelve el texto a enviar
     * @return type string
     */
    public function getText() {
        return $this->text;
    }

    /**
     * Sin implementar
     * Texto,Audio,Imagén,Archivo
     * @param type $type
     */
    public function setType($type) {
        $this->type = $type;
    }

    /**
     * Sin implementar
     * Obtiene el tipo de comando Texto,Audio,Imagén,Archivo
     * @return type
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Guarda en un array la descripción del comando según el código del idioma
     * @param string $languageCode 
     * @param string $description
     */
    public function setDescription($languageCode, $description) {
        $this->description[$languageCode] = $description;
    }

    public function getDescription($languageCode) {
        return $this->description[$languageCode];
    }
    
    public function isCommand(){
        return $this->commandBoolean;
    }
}

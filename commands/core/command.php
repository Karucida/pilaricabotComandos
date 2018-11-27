<?php
require_once 'messageOptions.php';
require_once 'commandConstant.php';
require_once 'commandData.php';

/**
 * Description of commandObj
 *
 * @author karu
 */
abstract class command extends commandData{

    /**
     * 
     * @param array $telegramMessage
     */
    final function __construct($telegramMessage) {
        $text = $telegramMessage['message']['text'];
        list($command,$textOnCommand) = explode(' ', $text, 2);
        
        if($this->getCommand()===strtolower($command)){
            $this->commandBoolean = true;
            $this->doMagic($textOnCommand);
            //SI LA RESPUESTA ES TIPO TEXTO
            if($this->getType()===COMMAND_TYPE_TEXT){
             //COMPROBACIONES FUTURAS   
            }
        }else{
            $this->commandBoolean = false;
        }
    }
    
    final function getCommand(){
        return '!'.  strtolower(get_class($this));
    }
    
    /**
     * Código del comando
     */
    abstract function doMagic($textOnCommand = null);
    
}
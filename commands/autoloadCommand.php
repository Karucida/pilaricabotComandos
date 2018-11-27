<?php

require_once 'core/command.php';
$pathCommand = __DIR__;
$dir = scandir($pathCommand);

foreach ($dir as $command) {
    if ($command !== "." && $command !== ".." && $command !== "core" && $command != "autoloadCommand.php") {
        $class = $command;
        $file = "{$pathCommand}/{$command}/{$command}.php";
        if (file_exists($file)) {
            //CARGAMOS LOS COMANDOS
            require_once $file;
            $commandClass = new $class($telegramMessage);
            //COMPROBAMOS QUE HEREDA DE command
            if (is_subclass_of($commandClass, "command")) {

                //COMPROBAMOS QUE ES COMANDO
                if ($commandClass->isCommand()) {
                    //GUARDAMOS EL COMANDO
                    if (isset($user) && method_exists($user, 'comando')) {
                        $user->comando($text);
                    }
                    //SI ES TEXTO
                    if ($commandClass->getType() === COMMAND_TYPE_TEXT) {
                        //COMPRABAMOS QUE EXISTE LA FUNCIÓN DE ENVIAR MENSAJE
                        if (function_exists("sendMessage")) {
                            sendMessage($url, $chatID, $commandClass->getText(), $commandClass->getParsemode(), $commandClass->getReplyId(), $commandClass->getDisable_web_page_preview(), $commandClass->getDisable_notification(), $commandClass->getKeyboard());
                        } else {
                            echo $commandClass->getText();
                        }
                    } else {
                        unset($commandClass);
                    }
                }
            }
        }
    }
}

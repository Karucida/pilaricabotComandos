<?php

require_once 'core/command.php';

$dir = scandir(getcwd());

foreach ($dir as $command) {
    if ($command !== basename(__FILE__, '.php')) {
        if ($command !== "." && $command !== ".." && $command !== "core") {
            $class = $command;
            $file = "{$command}/{$command}.php";
            if (file_exists($file)) {
                //CARGAMOS LOS COMANDOS
                require_once $file;
                $commandClass = new $class($telegramMessage);
                //COMPROBAMOS QUE HEREDA DE command
                if (is_subclass_of($commandClass, "command")) {
                    //GUARDAMOS EL COMANDO
                    if (isset($user) && method_exists($user, 'comando')) {
                        $user->comando('pilarica elige', $text);
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
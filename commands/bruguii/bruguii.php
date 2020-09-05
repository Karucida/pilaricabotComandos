<?php

/**
 * Responde a !bruguii con @bruguii hdp
 *
 * @author MrMarble
 */
class bruguii extends command{

    public function doMagic($textOnCommand = null) {
        $text="bruguii hdp";
        $this->setText($text);
    }

}

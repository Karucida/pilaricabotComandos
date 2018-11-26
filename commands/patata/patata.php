<?php

/**
 * Description of patata
 *
 * @author karu
 */
class patata extends command{

    public function doMagic($textOnCommand = null) {
        $text="🍟";//icon patata
        $this->setText($text);
    }

}

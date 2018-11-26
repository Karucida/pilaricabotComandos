<?php

class messageOptions {
    private $parsemode=NULL;
    private $replyId=NULL;
    private $disable_web_page_preview=NULL;
    private $disable_notification=NULL;
    private $keyboard=NULL;
    
    function getParsemode() {
        return $this->parsemode;
    }

    function getReplyId() {
        return $this->replyId;
    }

    function getDisable_web_page_preview() {
        return $this->disable_web_page_preview;
    }

    function getDisable_notification() {
        return $this->disable_notification;
    }

    function getKeyboard() {
        return $this->keyboard;
    }

    function setParsemode($parsemode) {
        $this->parsemode = $parsemode;
    }

    function setReplyId($replyId) {
        $this->replyId = $replyId;
    }

    function setDisable_web_page_preview($disable_web_page_preview) {
        $this->disable_web_page_preview = $disable_web_page_preview;
    }

    function setDisable_notification($disable_notification) {
        $this->disable_notification = $disable_notification;
    }

    function setKeyboard($keyboard) {
        $this->keyboard = $keyboard;
    }


}

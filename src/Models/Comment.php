<?php

namespace AjaxExecutePhpFunction\Models;

/** Class Comment **/
class Comment 
{
    private $id;
    private $comment_content;

    public function getId()
    {
        return $this->id;
    }
    public function getContent()
    {
        return $this->comment_content;
    }

    public function setId(String $id){
        $this->id = $id;
    }
    public function setContent(String $content){
        $this->comment_content = $content;
    }

}
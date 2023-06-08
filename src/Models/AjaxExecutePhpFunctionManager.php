<?php

namespace AjaxExecutePhpFunction\Models;

use AjaxExecutePhpFunction\Models\Comment;
use AjaxExecutePhpFunction\Models\Bdd;

/** Class AjaxExecutePhpFunctionManager **/
class AjaxExecutePhpFunctionManager extends Bdd
{
    public function getComments()
    {
        $stmt = $this->bdd->query('SELECT * FROM comments');
        return $stmt->fetchAll(\PDO::FETCH_CLASS, "AjaxExecutePhpFunction\Models\Comment");
    }

    public function addComment()
    {
        $stmt = $this->bdd->prepare("INSERT INTO comments(comment_content) VALUES (?)");
        $stmt->execute(array(
            $_POST['content'],
        ));
    }

}
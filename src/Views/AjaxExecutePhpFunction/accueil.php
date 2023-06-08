<?php
ob_start();
?>
<section>
    <div id="comments">
        <?php foreach ($comments as $comment) { ?>
            <div><?= $comment->getContent() ?></div>
        <?php } ?>
    </div>
    <form method="post">
        <input type="text" name="commentContent" id="commentContent">
        <button id="btnAddComment">Ajouter</button>
    </form>
</section>
<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';
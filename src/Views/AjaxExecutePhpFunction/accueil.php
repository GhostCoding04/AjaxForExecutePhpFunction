<?php
ob_start();
?>
<section>
</section>
<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';
<?php session_start();

require '../../config.php';  
require '../functions/functions.php';
require '../classes/classes.php'; ?>

<div class="row">
<h2>Research</h2>
<?php
getResearchArticles();
?>
</div>
<br /><br /><br />
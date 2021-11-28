<?php

// Page logic, checks before loading page
$hello = 'Hello world, ' . date('Y-m-d H:i:s');

// Start page with head and body HTML tags
require_once './templates/header.php'
?>


<!-- HTML + PHP LOGIC -->
<div class="container">
    <div class="col">
        <?php echo $hello; ?>
    </div>
</div>

<?php

// End page with closing tags and JS 
require_once './templates/footer.php'

?>
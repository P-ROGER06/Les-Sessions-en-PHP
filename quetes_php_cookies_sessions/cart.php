<?php
require_once 'inc/head.php';
require 'inc/data/products.php';  ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php
            echo $catalog[$_COOKIE['id']]['name'];
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
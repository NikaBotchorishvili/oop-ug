<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?= HOST ?>/assets/admin/css/style.css">
</head>
<body>
    
<?php

include "common/header.php";

?>

<div class="main">

    <?php

        include "pages/" . $this->tpl . ".php";
        
    ?>

</div>

<script>
    var siteUrl = "<?= HOST ?>"
</script>
<script src="<?= HOST ?>assets/admin/js/script.js"></script>
</body>
</html>
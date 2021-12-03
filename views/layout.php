<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body class="<?= $this->tpl != "home"? "inner-page": ''?>">

    <?php 
    

    include "common/header.php";

    //$this->tpl Is An Accessible Variable Because layout.php Is Included In Controller.
    include "pages/" . $this->tpl . ".php";

    include "common/footer.php";
    
    
    ?>

</body>
</html>
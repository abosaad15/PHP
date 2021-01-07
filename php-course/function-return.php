<?php

    function makeFrame( $name ) {
        $frame = "<div class ='nice' >";
        $frame .= $name;
        $frame .= "</div>";

        return $frame;
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<style>
    .nice {
        margin : 30px auto;
        padding : 30px;
        background-color : lightblue;
        color: black;
    }
</style>
<body>
    <?php echo makeFrame('I AM A BOSS') ?>
</body>
</html>
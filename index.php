<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP with Iframe</title>
</head>
<body>

<h1>Embedded YouTube Video in PHP</h1>

<?php
        // YouTube video URL
        $videoId = "Bcc97YC18Z0";
    ?>

<!-- Iframe inside PHP file -->
<iframe width="560" height="315"
        src="https://www.youtube.com/embed/<?php echo $videoId; ?>?list=PL2WFgdVk-usFBEBfk6TVrlHyyaFg0Z1Kg"
        title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen>
</iframe>

</body>
</html>

<?php
$newvideo = $_POST['newvid'];

echo("
<div id='tiki'>
<video width='640' height='1024' autoplay loop controls>
    <source src='$newvideo' type='video/mp4'>
    Your browser does not support the video tag.
</video>
</div>
");
?>
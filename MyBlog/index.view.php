<?php require 'partials/header.php' ?>
<?php require 'partials/form.php' ?>
<?php foreach ($posts as $post): ?>
    <h3 class='title'><?= $post->title; ?></h3>
    <br>
    <div class='text'><?= $post->text; ?></div>
    <div class='datetime'><?= $post->datetime; ?></div>
<?php endforeach; ?>
</body>
</html>

<?php require 'partials/form.php' ?>
  <div class="container row mb-2">
    <?php foreach ($posts as $post): ?>
      <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
          <div class="card-body d-flex flex-column align-items-start">
            <h3 class='mb-0 text-dark'><?= $post->title; ?></h3><br>
            <p class='card-text mb-auto'><?= $post->text; ?></p><br>
            <div class='mb-1 text-muted'><?= $post->datetime; ?></div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>
<!--  -->

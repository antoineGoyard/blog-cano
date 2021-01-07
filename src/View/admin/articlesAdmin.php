<?php require __DIR__ . '/../template/header.php'; ?>

<select class="form-select" aria-label="Default select example">
  <option selected>Choisir un article</option>
  <?php foreach ( $articlesAdmin  as $article) : ?>
    <option value="<?php echo $article->getId_article();?>"> <?php echo $article->getName_article();?> </option>
  <?php endforeach; ?>
</select>

<?php require __DIR__ . '/../template/footer.php'; ?>
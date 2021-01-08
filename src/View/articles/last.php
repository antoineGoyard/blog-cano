<div class='test1'>
    <div class="row row-cols-1 row-cols-md-1 g-1">
        <?php foreach ($last3 as $article) : ?>
            <div class="col">
                <div class="card">
                    <img src="/assets/back.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $article->getName_article();?></h5>
                        <p class="card-text"><?php echo $article->getShort_content_article();?></p>
                        <p class="card-text"><small class="text-muted">Publiée le: <?php echo $article->getDate_article();?></small></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
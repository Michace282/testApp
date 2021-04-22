<?php
    use yii\helpers\Url;
?>
	
    <div class="entry-media">
        <a href="/film/<?=$model->seo_url?>" class="post-thumbnail hover-zoom">
            <img width="100%" src="<?=(!empty($model->main_image)? $model->main_image : '/frontend/web/img/logo_films.jpg')?>" alt="">
        </a>

   
    </div>

    <div class="entry-header">
        <div class="entry-title h2"><a href="/film/<?=$model->seo_url?>"><?php echo $model->name; ?></a></div>
    </div>

    <div class="entry-content">
        <?php echo $model->content; ?>
    </div>

<!-- END / POST ITEM -->

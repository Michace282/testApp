<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Film */


$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Films'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->name;
\yii\web\YiiAsset::register($this);
?>
<div class="film-view">

    <?php 
	if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/\s]{11})%i', $model->link_trayler, $match)) {
	   echo '<iframe width="100%" height="415" src="https://www.youtube.com/embed/'.$match[1].'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
    }
	?>
	
	<div class="col-md-6"><img width="100%" src="<?=(!empty($model->main_image)? $model->main_image : '/frontend/web/img/logo_films.jpg')?>"/></div>
	<div class="col-md-6"><h1><?= $model->name ?></h1>
	<?=$model->content ?>
	<br>
	Тип видео: <?=($model->type_3d) ? '3D' : '';?> <?=($model->type_2d) ? '2D' : '';?> <?=($model->type_imax) ? 'IMAX' : '';?>
	</div>
</div>

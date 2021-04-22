<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Film */


$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Films'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->name;
\yii\web\YiiAsset::register($this);
?>
<div class="afisha-view">
	
	<div class="col-md-6"><img width="100%" src="<?=(!empty($model->image)? $model->image : '/frontend/web/img/logo_films.jpg')?>"/></div>
	<div class="col-md-6"><h1><?= $model->name ?></h1>
	<?=$model->content ?>
	</div>
</div>

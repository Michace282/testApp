<?php

use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\widgets\ListView;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Films');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="film-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php Pjax::begin(); ?>

    <?= ListView::widget([
       'dataProvider' => $dataProvider,
       'itemView' => '_item', 
       'itemOptions' => [
          'tag' => 'div',
          'class' => 'col-md-2',
        ],    
     ]); ?>

    <?php Pjax::end(); ?>

</div>

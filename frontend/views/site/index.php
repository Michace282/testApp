<?php
    use yii\widgets\Pjax;
    use yii\widgets\ListView;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
		
            <?php Pjax::begin(); ?>
			
			<div class="col-md-12">
			<h2>Фильмы</h2>

            <?= ListView::widget([
                'dataProvider' => $dataProviderFilm,
                'itemView' => '_item', 
                'itemOptions' => [
                  'tag' => 'div',
                   'class' => 'col-md-2',
                ],    
            ]); ?>
			 </div>
			<div class="col-md-12">
			<h2>Афиша</h2>

            <?= ListView::widget([
                'dataProvider' => $dataProviderAfisha,
                'itemView' => '_item', 
                'itemOptions' => [
                  'tag' => 'div',
                   'class' => 'col-md-2',
                ],    
            ]); ?>
			 </div>

    <?php Pjax::end(); ?>
        </div>

    </div>
</div>

<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Lookup;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchPost */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '文章';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('创建文章', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'title',
            'content:ntext',
            'tags:ntext',
            [
            	'attribute' => 'status',
            	'value' => function ($model){
	            	$lookup = new Lookup();
	            	$lookupModel = $lookup->findOne($model->status);
	    			return $lookupModel->name;
   				}	
    		], 
    		[
    				'attribute' => 'create_time',
    				'format' => ['date', 'php:Y-m-d']
    		],
            'author_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

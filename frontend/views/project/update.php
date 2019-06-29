<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Project */
/* @var  $photographer array*/
/* @var $user array*/

$this->title = 'Update Project: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="project-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'photographer' => $photographer,
        'user' => $user,
    ]) ?>

</div>

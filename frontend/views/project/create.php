<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Project */
/* @var $photographer array */
/* @var $user array*/

$this->title = 'Create Project';
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'photographer' => $photographer,
        'user' => $user,
    ]) ?>

</div>

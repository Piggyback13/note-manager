<?php
/** @var $model \app\models\Note */
?>

<div>
    <a href="<?php echo \yii\helpers\Url::to(['/note/view', 'slug' => $model->slug]) ?>">
        <h3><?php echo \yii\helpers\Html::encode($model->title) ?></h3>
    </a>
    <div>
        <?php echo \yii\helpers\StringHelper::truncateWords($model->getEncodedBody(),40) ?>
    </div>
    <p class="text-muted text-right">
        <small>Created <b><?php echo Yii::$app->formatter->asRelativeTime($model->created_at) ?></b>
            by <b><?php echo $model->createdBy->username ?></b>
        </small>
    </p>
    <hr>
</div>

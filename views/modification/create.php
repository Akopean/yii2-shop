<?php
use yii\helpers\Html;

$this->title = 'Добавить модификацию';
\pistol88\shop\assets\BackendAsset::register($this);
?>
<div class="product-modification-create">

    <?= $this->render('_form', [
        'model' => $model,
        'productModel' => $productModel,
        'module' => $module,
    ]) ?>

</div>
<?php
use yii\helpers\Url;
?>
<ul style="display: flex; list-style: none;">
    <li style="margin: 10px;"><a href="<?= Url::to(['category/view', 'id' => 0])?>" style="padding: 10px 20px; background-color: white; border-radius: 10px; color: orange;">All</a></li>
    <?php foreach ($categoryList as $item): ?>
        <li style="margin: 10px;"><a href="<?= Url::to(['category/view', 'id' => $item['id']])?>" style="padding: 10px 20px; background-color: white; border-radius: 10px; color: orange;"><?= $item['title']?></a></li>
    <?php endforeach;?>
</ul>


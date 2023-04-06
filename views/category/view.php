<?php
use yii\helpers\Url;
use yii\bootstrap4\LinkPager;
/** @var yii\web\View $this */
$this->title = 'Главная';
?>
<section class="u-align-center u-clearfix u-grey-10 u-section-1" id="carousel_f6e2">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-custom-font u-font-oswald u-text u-text-default u-text-palette-3-base u-text-1">Menu</h1>
        <p class="u-text u-text-2">Unique wood fired pizzas or be tempted by our pasta, antipasto, focaccias, salads and Bruschetta dishes. Relax in the friendly ambience as you enjoy the aromas of the wood ovens or sit al fresco and soak up the Mildura sunshine.</p>
        <div class="u-expanded-width u-list u-list-1">
            <?= app\components\CategoryWidget::widget()?>
            <div class="u-repeater u-repeater-1" style="margin-bottom: 20px">
                <?php foreach ($model as $item): ?>
                    <div class="u-container-style u-list-item u-repeater-item u-white ">
                        <div class="u-container-layout u-similar-container u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xl u-container-layout-1">
                            <img alt="" class="u-expanded-width-xs u-image u-image-default u-image-1" src="<?= $item['img'] ?>">
                            <div class="u-align-left-xs u-container-style u-expanded-width-xs u-group u-video-cover u-group-1">
                                <div class="u-container-layout u-valign-middle-xs u-container-layout-2">
                                    <h3 class="u-custom-font u-font-oswald u-text u-text-3"><?= $item['name'] ?></h3>
                                    <p class="u-text u-text-default u-text-4"><?= $item['description'] ?></p>
                                    <h6 class="u-text u-text-palette-3-base u-text-5">$<?= $item['price'] ?></h6>
                                    <a href="<?= Url::to(['my/view', 'id' => $item['id']])?>"  class="u-btn u-btn-rectangle u-button-style u-grey-10 u-btn-1">Get more details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
    <div style="display: flex; justify-content: center; align-items: center;">
        <?= LinkPager::widget([
            'pagination' => $pages,
            'options' => ['class' => 'bs-warning'],
        ])?>
    </div>

</section>
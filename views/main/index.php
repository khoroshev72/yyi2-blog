<?
use yii\widgets\LinkPager;
use yii\helpers\Url;
use app\components\SidebarWidget;

?>

<div class="row">
    <div class="col-md-8">
        <? foreach ($posts as $post): ?>
            <article class="post">
            <div class="post-thumb">
                <a href="<?=Url::to(['main/single', 'slug' => $post->slug]) ?>"><img src="<?=$post->getImage() ?>" alt="<?=$post->title ?>"></a>

                <a href="<?=Url::to(['main/single', 'slug' => $post->slug]) ?>" class="post-thumb-overlay text-center">
                    <div class="text-uppercase text-center">View Post</div>
                </a>
            </div>
            <div class="post-content">
                <header class="entry-header text-center text-uppercase">
                    <h6><a href="<?=Url::to(['main/category', 'slug' => $post->category->slug]) ?>"> <?=$post->category->title ?></a></h6>

                    <h1 class="entry-title"><a href="<?=Url::to(['main/single', 'slug' => $post->slug]) ?>"><?=$post->title ?></a></h1>


                </header>
                <div class="entry-content">
                    <p><?=$post->description ?></p>
                    <p>Views: <?=$post->views ?></p>
                    <div class="btn-continue-reading text-center text-uppercase">
                        <a href="<?=Url::to(['main/single', 'slug' => $post->slug]) ?>" class="more-link">Continue Reading</a>
                    </div>
                </div>
                <div class="social-share">
<!--                    February 12, 2016-->
                    <span class="social-share-title pull-left text-capitalize">By <a href="#">Rubel</a> On <?=Yii::$app->formatter->asDate($post->created_at, 'php:F d, Y') ?></span>
                    <ul class="text-center pull-right">
                        <li><a class="s-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="s-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="s-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a class="s-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a class="s-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </article>
        <? endforeach ?>
        <?=LinkPager::widget([
                'pagination' => $pages
        ]) ?>
    </div>
    <?= SidebarWidget::widget()?>
</div>

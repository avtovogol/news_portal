<?php
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel frontend\models\search\ArticleSearch */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use common\widgets\MyLinkPager;
use yii\widgets\LinkPager;

$this->title = 'Статьи'
?>

<div id="article-index">
    <div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
        <div class="container padding_786">
            <nav class="navbar navbar-toggleable-md navbar-light ">
                <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                <a class="navbar-brand" href="#"><img src="/images/logo.png" alt="img" class="mobile_logo_width"/></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Главная <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/article">Новости <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/article/treta-stata">Статья <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">Категории <span class="sr-only">(current)</span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                                <?php foreach ($categories as $category) {
                                    echo \yii\helpers\Html::a($category->title,  ['/article/index', 'ArticleSearch[category_id]' => $category->id],['class'=>'dropdown-item']);
                                }?>
                            </div>
                            <!--                        </li>-->
                            <!--                        <li class="nav-item dropdown">-->
                            <!--                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton3" data-toggle="dropdown"-->
                            <!--                               aria-haspopup="true" aria-expanded="false">Community<span class="sr-only">(current)</span></a>-->
                            <!--                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">-->
                            <!--                                <a class="dropdown-item" href="#">Action in</a>-->
                            <!--                                <a class="dropdown-item" href="#">Another action</a>-->
                            <!--                                <a class="dropdown-item" href="#">Something else here</a>-->
                            <!--                            </div>-->
                            <!--                        </li>-->
                            <!--                        <li class="nav-item ">-->
                            <!--                            <a class="nav-link" href="Contact_us.html">Contact <span class="sr-only">(current)</span></a>-->
                            <!--                        </li>-->
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="container-fluid pb-4 pt-4 paddding">
        <div class="container paddding">
            <div class="row mx-0">
                <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                    <div>
                        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">
                                <?php echo 'Статьи' ?>
<!--                            <span class="glyphicon glyphicon-search" data-toggle="collapse" data-target="#search-form"></span>
                            <div  id="search-form">
                                <?php /*$form = ActiveForm::begin([
                                    'method' => 'GET',
                                    'options' => ['class' => 'form-inline']
                                ]) */?>
                                <div>
                                    <?php /*echo $form->field($searchModel, 'title')->label(false)->error(false) */?>
                                    <?php /*echo Html::submitButton('Search', ['class' => 'btn btn-default']) */?>
                                </div>
                                <?php /*ActiveForm::end() */?>
                            </div>-->
                        </div>
                    </div>
                    <?php echo \yii\widgets\ListView::widget([
                        'dataProvider' => $dataProvider,
                        'layout'=>"{summary}\n{items}",
                        'itemView' => '_item'
                    ])?>

                </div>
                <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                    <div>
                        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Теги</div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="fh5co_tags_all">
                        <?php  foreach($tags as $tag) {
                            echo Html::a($tag->name, ['index', 'ArticleSearch[tags]' => $tag->id],['class'=>'fh5co_tagg']);
                        }?>
                    </div>
                    <div>
                        <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Популярное</div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-5 align-self-center">
                            <img src="images/download (1).jpg" alt="img" class="fh5co_most_trading"/>
                        </div>
                        <div class="col-7 paddding">
                            <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.</div>
                            <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-5 align-self-center">
                            <img src="images/allef-vinicius-108153.jpg" alt="img" class="fh5co_most_trading"/>
                        </div>
                        <div class="col-7 paddding">
                            <div class="most_fh5co_treding_font"> Enim ad minim veniam nostrud xercitation ullamco.</div>
                            <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-5 align-self-center">
                            <img src="images/download (2).jpg" alt="img" class="fh5co_most_trading"/>
                        </div>
                        <div class="col-7 paddding">
                            <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.</div>
                            <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-5 align-self-center"><img src="images/seth-doyle-133175.jpg" alt="img"
                                                                  class="fh5co_most_trading"/></div>
                        <div class="col-7 paddding">
                            <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.</div>
                            <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mx-0">
                <div class="col-12 text-center pb-4 pt-4">
                    <?php echo MyLinkPager::widget([
                        'pagination' => $dataProvider->pagination,
                        'options' =>[
                        ],
                        'disableCurrentPageButton' => 'true',
                        'nextPageLabel' => 'Следующая <i class="fa fa-long-arrow-right"></i>',
                        'prevPageLabel' => '<i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp; Предыдущая',
                        'activePageCssClass'=>'btn_pagging',
                        'linkOptions' => ['class' => 'btn_mange_pagging'],
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
</div>

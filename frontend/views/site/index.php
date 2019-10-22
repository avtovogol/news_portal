<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $article common\models\Article */
$this->title = Yii::$app->name;
?>
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
                                echo \yii\helpers\Html::a($category->title, ['/article/index', 'ArticleSearch[category_id]' => $category->id],['class'=>'dropdown-item']);
                            }?>
                        </div>
                </ul>
            </div>
        </nav>
    </div>
    </div>
    <div class="container-fluid paddding mb-5">
        <div class="row mx-0">
            <div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
                <div class="fh5co_suceefh5co_height"><img
                            src="<?= $articles[0]->thumbnail_base_url . $articles[0]->thumbnail_path ?>" alt="img"/>
                    <div class="fh5co_suceefh5co_height_position_absolute"></div>
                    <div class="fh5co_suceefh5co_height_position_absolute_font">
                        <div class=""><a href="/article/<?= $articles[0]->slug ?>" class="color_fff"> <i
                                        class="fa fa-clock-o"></i>&nbsp;<?php echo Yii::$app->formatter->asDate($articles[0]->created_at,"long"); ?>
                            </a></div>
                        <div class="">
                            <a href="/article/<?= $articles[0]->slug ?>" class="fh5co_good_font"> <?php echo $articles[0]->title; ?> </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                        <div class="fh5co_suceefh5co_height_2"><img
                                    src="<?= $articles[1]->thumbnail_base_url . $articles[1]->thumbnail_path ?>" alt="img"/>
                            <div class="fh5co_suceefh5co_height_position_absolute"></div>
                            <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                                <div class=""><a href="/article/<?= $articles[1]->slug ?>" class="color_fff"> <i
                                                class="fa fa-clock-o"></i>&nbsp;<?php echo Yii::$app->formatter->asDate($articles[1]->created_at,"long"); ?>
                                    </a></div>
                                <div class=""><a href="/article/<?= $articles[1]->slug ?>"
                                                 class="fh5co_good_font_2"> <?php echo $articles[1]->title; ?></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                        <div class="fh5co_suceefh5co_height_2"><img
                                    src="<?= $articles[2]->thumbnail_base_url . $articles[2]->thumbnail_path ?>" alt="img"/>
                            <div class="fh5co_suceefh5co_height_position_absolute"></div>
                            <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                                <div class=""><a href="/article/<?= $articles[2]->slug ?>" class="color_fff"> <i
                                                class="fa fa-clock-o"></i>&nbsp;<?php echo Yii::$app->formatter->asDate($articles[2]->created_at,"long"); ?>
                                    </a></div>
                                <div class=""><a href="/article/<?= $articles[2]->slug ?>"
                                                 class="fh5co_good_font_2"> <?php echo $articles[2]->title; ?></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                        <div class="fh5co_suceefh5co_height_2"><img
                                    src="<?= $articles[3]->thumbnail_base_url . $articles[3]->thumbnail_path ?>" alt="img"/>
                            <div class="fh5co_suceefh5co_height_position_absolute"></div>
                            <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                                <div class=""><a href="/article/<?= $articles[3]->slug ?>" class="color_fff"> <i
                                                class="fa fa-clock-o"></i>&nbsp;<?php echo Yii::$app->formatter->asDate($articles[3]->created_at,"long"); ?>
                                    </a></div>
                                <div class=""><a href="/article/<?= $articles[3]->slug ?>"
                                                 class="fh5co_good_font_2"> <?php echo $articles[3]->title; ?></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                        <div class="fh5co_suceefh5co_height_2"><img
                                    src="<?= $articles[4]->thumbnail_base_url . $articles[4]->thumbnail_path ?>" alt="img"/>
                            <div class="fh5co_suceefh5co_height_position_absolute"></div>
                            <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                                <div class=""><a href="/article/<?= $articles[4]->slug ?>" class="color_fff"> <i
                                                class="fa fa-clock-o"></i>&nbsp;<?php echo Yii::$app->formatter->asDate($articles[4]->created_at,"long"); ?>
                                    </a></div>
                                <div class=""><a href="/article/<?= $articles[4]->slug ?>"
                                                 class="fh5co_good_font_2"> <?php echo $articles[4]->title; ?></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-3">
        <div class="container animate-box" data-animate-effect="fadeIn">
            <div>
                <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">В тренде</div>
            </div>
            <div class="owl-carousel owl-theme js" id="slider1">
                <div class="item px-2">
                    <div class="fh5co_latest_trading_img_position_relative">
                        <div class="fh5co_latest_trading_img"><img src="<?= $articles[5]->thumbnail_base_url . $articles[5]->thumbnail_path ?>" alt=""
                                                                   class="fh5co_img_special_relative"/></div>
                        <div class="fh5co_latest_trading_img_position_absolute"></div>
                        <div class="fh5co_latest_trading_img_position_absolute_1">
                            <a href="/article/<?= $articles[5]->slug ?>" class="text-white"><?php echo $articles[5]->title; ?> </a>
                            <div class="fh5co_latest_trading_date_and_name_color"> Walter Johson - <?php echo date("d-m-Y", ($articles[5]->published_at)); ?></div>
                        </div>
                    </div>
                </div>
                <div class="item px-2">
                    <div class="fh5co_latest_trading_img_position_relative">
                        <div class="fh5co_latest_trading_img"><img src="<?= $articles[6]->thumbnail_base_url . $articles[6]->thumbnail_path ?>" alt=""
                                                                   class="fh5co_img_special_relative"/></div>
                        <div class="fh5co_latest_trading_img_position_absolute"></div>
                        <div class="fh5co_latest_trading_img_position_absolute_1">
                            <a href="/article/<?= $articles[6]->slug ?>" class="text-white"> Here's a new way to take better photos for
                                instagram </a>
                            <div class="fh5co_latest_trading_date_and_name_color"> Walter Johson - March 7,2017</div>
                        </div>
                    </div>
                </div>
                <div class="item px-2">
                    <div class="fh5co_latest_trading_img_position_relative">
                        <div class="fh5co_latest_trading_img"><img src="images/ryan-moreno-98837.jpg" alt=""
                                                                   class="fh5co_img_special_relative"/></div>
                        <div class="fh5co_latest_trading_img_position_absolute"></div>
                        <div class="fh5co_latest_trading_img_position_absolute_1">
                            <a href="single.html" class="text-white"> Here's a new way to take better photos for
                                instagram </a>
                            <div class="fh5co_latest_trading_date_and_name_color"> Walter Johson - March 7,2017</div>
                        </div>
                    </div>
                </div>
                <div class="item px-2">
                    <div class="fh5co_latest_trading_img_position_relative">
                        <div class="fh5co_latest_trading_img"><img src="images/science-578x362.jpg" alt=""
                                                                   class="fh5co_img_special_relative"/></div>
                        <div class="fh5co_latest_trading_img_position_absolute"></div>
                        <div class="fh5co_latest_trading_img_position_absolute_1">
                            <a href="single.html" class="text-white"> Here's a new way to take better photos for
                                instagram </a>
                            <div class="fh5co_latest_trading_date_and_name_color"> Walter Johson - March 7,2017</div>
                        </div>
                    </div>
                </div>
                <div class="item px-2">
                    <div class="fh5co_latest_trading_img_position_relative">
                        <div class="fh5co_latest_trading_img"><img src="images/nick-karvounis-78711.jpg" alt=""
                                                                   class="fh5co_img_special_relative"/></div>
                        <div class="fh5co_latest_trading_img_position_absolute"></div>
                        <div class="fh5co_latest_trading_img_position_absolute_1">
                            <a href="single.html" class="text-white"> Here's a new way to take better photos for
                                instagram </a>
                            <div class="fh5co_latest_trading_date_and_name_color"> Walter Johson - March 7,2017</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pb-4 pt-5">
        <div class="container animate-box">
            <div>
                <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Новости</div>
            </div>
            <div class="owl-carousel owl-theme" id="slider2">
                <div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_news_img"><img src="images/39-324x235.jpg" alt=""/></div>
                        <div>
                            <a href="single.html" class="d-block fh5co_small_post_heading"><span class="">The top 10 best computer speakers in the market</span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                        </div>
                    </div>
                </div>
                <div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_news_img"><img src="images/joe-gardner-75333.jpg" alt=""/></div>
                        <div>
                            <a href="single.html" class="d-block fh5co_small_post_heading"><span class="">The top 10 best computer speakers in the market</span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                        </div>
                    </div>
                </div>
                <div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_news_img"><img src="images/ryan-moreno-98837.jpg" alt=""/></div>
                        <div>
                            <a href="single.html" class="d-block fh5co_small_post_heading"><span class="">The top 10 best computer speakers in the market</span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                        </div>
                    </div>
                </div>
                <div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_news_img"><img src="images/seth-doyle-133175.jpg" alt=""/></div>
                        <div>
                            <a href="single.html" class="d-block fh5co_small_post_heading"><span class="">The top 10 best computer speakers in the market</span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid fh5co_video_news_bg pb-4">
        <div class="container animate-box" data-animate-effect="fadeIn">
            <div>
                <div class="fh5co_heading fh5co_heading_border_bottom pt-5 pb-2 mb-4  text-white">Видео новости</div>
            </div>
            <div>
                <div class="owl-carousel owl-theme" id="slider3">
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_hover_news_img_video_tag_position_relative">
                                <div class="fh5co_news_img">
                                    <iframe id="video" width="100%" height="200"
                                            src="https://www.youtube.com/embed/aM9g4r9QUsM?rel=0&amp;showinfo=0"
                                            frameborder="0" allowfullscreen></iframe>
                                </div>
                                <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide">
                                    <img src="/images/ariel-lustre-208615.jpg" alt=""/>
                                </div>
                                <div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide" id="play-video">
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
                                        <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
                                            <span><i class="fa fa-play"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                                    <span class="">Топ 10 самых смешных видео c youtube</span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                            </div>
                        </div>
                    </div>
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_hover_news_img_video_tag_position_relative">
                                <div class="fh5co_news_img">
                                    <iframe id="video_2" width="100%" height="200"
                                            src="https://www.youtube.com/embed/aM9g4r9QUsM?rel=0&amp;showinfo=0"
                                            frameborder="0" allowfullscreen></iframe>
                                </div>
                                <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide_2">
                                    <img src="/images/39-324x235.jpg" alt=""/></div>
                                <div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide_2"
                                     id="play-video_2">
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
                                        <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
                                            <span><i class="fa fa-play"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                                    <span class="">The top 10 embedded YouTube videos this month</span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                            </div>
                        </div>
                    </div>
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_hover_news_img_video_tag_position_relative">
                                <div class="fh5co_news_img">
                                    <iframe id="video_3" width="100%" height="200"
                                            src="https://www.youtube.com/embed/aM9g4r9QUsM?rel=0&amp;showinfo=0"
                                            frameborder="0" allowfullscreen></iframe>
                                </div>
                                <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide_3">
                                    <img src="/images/joe-gardner-75333.jpg" alt=""/></div>
                                <div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide_3"
                                     id="play-video_3">
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
                                        <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
                                            <span><i class="fa fa-play"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                                    <span class="">The top 10 best computer speakers in the market</span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                            </div>
                        </div>
                    </div>
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_hover_news_img_video_tag_position_relative">
                                <div class="fh5co_news_img">
                                    <iframe id="video_4" width="100%" height="200"
                                            src="https://www.youtube.com/embed/aM9g4r9QUsM?rel=0&amp;showinfo=0"
                                            frameborder="0" allowfullscreen></iframe>
                                </div>
                                <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide_4">
                                    <img src="/images/vil-son-35490.jpg" alt=""/>
                                </div>
                                <div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide_4"
                                     id="play-video_4">
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
                                        <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
                                            <span><i class="fa fa-play"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                                    <span class="">The top 10 best computer speakers in the market</span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pb-4 pt-4 paddding">
        <div class="container paddding">
            <div class="row mx-0">
                <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                    <div>
                        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">
                            <?php echo 'Статьи' ?>
                        </div>
                    </div>
                    <?php echo \yii\widgets\ListView::widget([
                        'dataProvider' => $dataProvider,
                        'layout'=>"{summary}\n{items}",
                        'itemView' => '/article/_item'
                    ])?>

                </div>
                <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                    <div>
                        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Теги</div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="fh5co_tags_all">
                        <?php  foreach($tags as $tag) {
                            echo Html::a($tag->name, ['/article/index', 'ArticleSearch[tags]' => $tag->id],['class'=>'fh5co_tagg']);
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
                    <?php echo \common\widgets\MyLinkPager::widget([
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



<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use common\models\ArticleCategory;

/* @var $this \yii\web\View */
/* @var $content string */

$this->beginContent('@frontend/views/layouts/_clear.php')
?>
    <div class="container-fluid fh5co_header_bg">
        <div class="container">
            <div class="row">
                <div class="col-12 fh5co_mediya_center"><a href="#" class="color_fff fh5co_mediya_setting"><i
                                class="fa fa-clock-o"></i>&nbsp;&nbsp;&nbsp;<?php setlocale(LC_ALL, 'ru_RU', 'ru_RU.UTF-8', 'ru', 'russian');
                        echo strftime("%A,%e %b %Y", time());
                        ?></a>
                    <div class="d-inline-block fh5co_trading_posotion_relative"><a href="#" class="treding_btn">В тренде</a>
                        <div class="fh5co_treding_position_absolute"></div>
                    </div>
                    <a href="#" class="color_fff fh5co_mediya_setting">Ссылка</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3 fh5co_padding_menu">
                    <img src="/images/logo.png" alt="img" class="fh5co_logo_width"/>
                </div>
                <div class="col-12 col-md-9 align-self-center fh5co_mediya_right">
                    <div class="text-center d-inline-block">
                        <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-search"></i></div></a>
                    </div>
                    <div class="text-center d-inline-block">
                        <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div></a>
                    </div>
                    <div class="text-center d-inline-block">
                        <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div></a>
                    </div>
                    <div class="text-center d-inline-block">
                        <a href="https://twitter.com/fh5co" target="_blank" class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div></a>
                    </div>
                    <div class="text-center d-inline-block">
                        <a href="https://fb.com/fh5co" target="_blank" class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

    <?php echo $content;?>

    <div class="container-fluid fh5co_footer_bg pb-3">
        <div class="container animate-box">
            <div class="row">
                <div class="col-12 spdp_right py-5"><img src="/images/white_logo.png" alt="img" class="footer_logo"/></div>
                <div class="clearfix"></div>
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="footer_main_title py-3"> О нас</div>
                    <div class="footer_sub_about pb-3"> Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </div>
                    <div class="footer_mediya_icon">
                        <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                                <div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div>
                            </a></div>
                        <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                                <div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div>
                            </a></div>
                        <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                                <div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div>
                            </a></div>
                        <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                                <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                            </a></div>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-lg-2">
                    <div class="footer_main_title py-3"> Категории</div>
                    <ul class="footer_menu">
                        <?php foreach ($this->params['categories'] as $category) {
                            echo '<li>'. \yii\helpers\Html::a(
                                    '<i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;'.$category->title,
                                    ['/article/index', 'ArticleSearch[category_id]' => $category->id]).
                                '</li>';
                        }?>
                    </ul>
                </div>
                <div class="col-12 col-md-5 col-lg-3 position_footer_relative">
                    <div class="footer_main_title py-3"> Самые просматриваемые статьи</div>
                    <div class="footer_makes_sub_font"> Dec 31, 2016</div>
                    <a href="#" class="footer_post pb-4"> Success is not a good teacher failure makes you humble </a>
                    <div class="footer_makes_sub_font"> Dec 31, 2016</div>
                    <a href="#" class="footer_post pb-4"> Success is not a good teacher failure makes you humble </a>
                    <div class="footer_makes_sub_font"> Dec 31, 2016</div>
                    <a href="#" class="footer_post pb-4"> Success is not a good teacher failure makes you humble </a>
                    <div class="footer_position_absolute"><img src="/images/footer_sub_tipik.png" alt="img" class="width_footer_sub_img"/></div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 ">
                    <div class="footer_main_title py-3"> Последние добавленные статьи</div>
                    <a href="#" class="footer_img_post_6"><img src="/images/allef-vinicius-108153.jpg" alt="img"/></a>
                    <a href="#" class="footer_img_post_6"><img src="/images/32-450x260.jpg" alt="img"/></a>
                    <a href="#" class="footer_img_post_6"><img src="/images/download (1).jpg" alt="img"/></a>
                    <a href="#" class="footer_img_post_6"><img src="/images/science-578x362.jpg" alt="img"/></a>
                    <a href="#" class="footer_img_post_6"><img src="/images/vil-son-35490.jpg" alt="img"/></a>
                    <a href="#" class="footer_img_post_6"><img src="/images/zack-minor-15104.jpg" alt="img"/></a>
                    <a href="#" class="footer_img_post_6"><img src="/images/download.jpg" alt="img"/></a>
                    <a href="#" class="footer_img_post_6"><img src="/images/download (2).jpg" alt="img"/></a>
                    <a href="#" class="footer_img_post_6"><img src="/images/ryan-moreno-98837.jpg" alt="img"/></a>
                </div>
            </div>
            <div class="row justify-content-center pt-2 pb-4">
                <div class="col-12 col-md-8 col-lg-7 ">
                    <div class="input-group">
                        <span class="input-group-addon fh5co_footer_text_box" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                        <input type="text" class="form-control fh5co_footer_text_box" placeholder="Введите свой email..." aria-describedby="basic-addon1">
                        <a href="#" class="input-group-addon fh5co_footer_subcribe" id="basic-addon12"> <i class="fa fa-paper-plane-o"></i>&nbsp;&nbsp;Подписаться</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid fh5co_footer_right_reserved">
        <div class="container">
            <div class="row  ">
                <div class="col-12 col-md-6 py-4 Reserved"> © Copyright 2019, Все права защищены. Разработал <a href="https://vk.com/georgio" title="GeorgiO - разработка сайтов">GeorgiO</a>. </div>
                <div class="col-12 col-md-6 spdp_right py-4">
                    <a href="#" class="footer_last_part_menu">Главная</a>
                    <a href="Contact_us.html" class="footer_last_part_menu">О нас</a>
                    <a href="Contact_us.html" class="footer_last_part_menu">Контакты</a>
                    <a href="blog.html" class="footer_last_part_menu">Последние новости</a></div>
            </div>
        </div>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
    </div>

    <script>$(".nav .nav-link").on("click", function(){
            $(".nav").find(".active").removeClass("active");
            $(this).addClass("active");
        });</script>
<!--    <script>if (!navigator.userAgent.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile/i)){$(window).stellar();}</script>-->


<?php $this->endContent() ?>
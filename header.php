<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <?php $meta_tags = get_field('meta_tags'); ?>
    <? if ($meta_tags['title']) { ?>
        <title><?= $meta_tags['title']; ?></title>
        <meta name="description" content="<?= $meta_tags['description']; ?>">
    <? } else {?>
        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>">
    <?}?>
    <? if ($meta_tags['keywords']) { ?>
        <meta name="keywords" content="<?= $meta_tags['keywords']; ?>">
    <? } ?>


    <link rel="apple-touch-icon" sizes="180x180" href="<?= get_stylesheet_directory_uri(); ?>/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_stylesheet_directory_uri(); ?>/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_stylesheet_directory_uri(); ?>/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= get_stylesheet_directory_uri(); ?>/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?= get_stylesheet_directory_uri(); ?>/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/static/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/static/css/style.css">
    <script src="<?= get_stylesheet_directory_uri(); ?>/static/js/swiper-bundle.min.js"></script>
    <script src="<?= get_stylesheet_directory_uri(); ?>/static/js/script.min.js" defer></script>
    <style>

        .wp_general-column table {
            display: flex !important;
            flex-direction: column !important;
            width: 100% !important;
        }
        .position-r {
            position: relative;
        }
        .wpcf7-spinner {
            top: 7px;
            right: 0;
            position: absolute !important;
        }
        .product_section-content_title-line:before {
            background: url("<?= get_stylesheet_directory_uri(); ?>/static/imgs/productTitle-line.png") no-repeat center center;
        }
        .tarif_section_content_item_wrapper_item-list_li:before {
            background: url("<?= get_stylesheet_directory_uri(); ?>/static/imgs/good.png") no-repeat center center;
        }
        .footer:before {
            background-size: contain;
            background: url("<?= get_stylesheet_directory_uri(); ?>/static/imgs/footer1.png") no-repeat center center;
        }
        .footer:after {
            background-size: contain;
            background: url("<?= get_stylesheet_directory_uri(); ?>/static/imgs/footer2.png") no-repeat center center;
        }
        .footer_wrapper_content_line:before {
            background: url("<?= get_stylesheet_directory_uri(); ?>/static/imgs/lineFooter.png") no-repeat center center;
        }
        .animate_figure-white {
            background: url('<?= get_stylesheet_directory_uri(); ?>/static/imgs/cfiS3.png') no-repeat center;
        }
        .animate_figure-blue {
            background: url('<?= get_stylesheet_directory_uri(); ?>/static/imgs/cfiS2.png') no-repeat center;
        }
        .animate_figure-whiteBig {
            background: url('<?= get_stylesheet_directory_uri(); ?>/static/imgs/cfiS1.png') no-repeat center;
        }
        .animate_figure {
            top: 0;
            position: absolute;
            z-index: -1;
            max-width: 1440px;
            margin-left: 50%;
            transform: translateX(-50%);
            width: 100%;
            height: 100%;
        }
        .animate_figure-white {
            top: 5%;
            left: 4%;
        }
        .animate_figure-blue {
            top: 14%;
            left: 74%;
        }
        .animate_figure-whiteBig {
            top: 44%;
            left: 36%;
        }
        .client-img {
            max-width: 224px;
            width: 100%;
            height: auto;
        }
        .jcSB {
            justify-content: space-between;
        }
        .slider_text {
            margin-left: 32px;
            text-align: left
        }
        .header_fullScreen_menu {
            overflow-x: scroll;
        }
        .header_fullScreen_menu .btn-mini-white, .header_fullScreen_menu .btn-mini-blue {
            width: 100%;
        }
        .header_fullScreen_menu .btn-mini-white {
            margin-bottom: 16px;
        }
        .header_nav_platform {
            margin-top: 16px;
            padding-right: 24px;
            padding-left: 24px;
            margin-bottom: 40px;
        }
        .header_fullScreen_menu .btn-mini-white {
            box-shadow: 0 1px 1px 0 #0000000F;
            border: 1px solid #E6E7E9
        }
        .btn-mini, .btn-mini > p > label {
            cursor: pointer;
        }
        .btn-mini > p >input {
            display: none;
        }
        .footer_wrapper_content_feedback_wrapper > p > label {
            display: block;
            margin-right: 8px;
        }
        .footer_wrapper_content_feedback_wrapper input {
            width: 20px;
            height: 24px;
        }
        .footer_wrapper_content_feedback_input > span > input {
            outline: none;
            padding: 12px 10px;
            border: none;
            width: 100%;
            color: var(--main_color-black);
            font-size: 16px;
            font-weight: 400;
            border-bottom: 1px solid var(--main_color-black);
        }
        .footer_wrapper_content_feedback_input > span > input:focus {
            border-bottom: 1px solid #339DFF;
        }
        .footer_wrapper_content_feedback_wrapper {
            justify-content: normal;
        }
        .fw-600 {
            font-weight: 600;
        }
        .fw-500 {
            font-weight: 500;
        }
        .color-prefix {
            color: #404B56;
        }
        .swiper-button-prev.swiper-button-disabled, .swiper-button-next.swiper-button-disabled {
            color: #8C9399;
        }
        .swiper-pagination {
            margin-bottom: 0;
        }
        .max-width-product {
            max-width: 288px;
            width: 100%;
        }
        .bgc-section {
            background: #F6F5F8;
        }
        .header-fixed {
            transition: background .2s linear;
            width: 100%;
            position: fixed;
            top: 0;
            z-index: 2;
            left: 50%;
            transform: translateX(-50%);
            background-color: #F6F5F8;
        }
        .header-fixed-blue {
            background: #0085FF;
        }
        .header-fixed-blue svg > g > path {
            fill: white;
        }
        .header-fixed-blue ul > li > a {
            color: white !important;
        }
        .header-fixed-blue .header_fullScreen_menu ul > li > a {
            color: black !important;
        }
        .header-fixed-blue .header_fullScreen_menu .btn-mini-blue {
            background: var(--main_color-blue);
        }
        .header-fixed-blue .header_fullScreen_menu .btn-mini-blue > a {
            color: white;
        }
        .header-fixed-blue .btn-mini-blue {
            background: white;
        }
        .header-fixed-blue .btn-mini-blue > a {
            color: black;
        }
        .header-fixed-blue .header {
            border-bottom: 2px solid white;
        }
        .header-fixed-blue .header_nav:after , .header-fixed-blue .header_nav:before {
            border: 1px solid white;
        }
        .header-fixed-blue .header_nav_burger_line-1, .header-fixed-blue .header_nav_burger_line-2, .header-fixed-blue .header_nav_burger_line-3  {
            border: 1px solid white;
        }
        #home {
            margin-top: 192px;
        }
        @media all and (max-width: 1439px){
            .header_nav:before, .header_nav:after {
                bottom: -22px;
            }
        }
        @media all and (max-width: 1345px){
            .header_nav:before, .header_nav:after {
                bottom: -23px;
            }
        }
        @media all and (max-width: 1269px){
            .swiper-pagination {
                margin-bottom: 0;
            }
            #home {
                margin-top: 179px;
            }
            .animate_figure-blue {
                width: 125px;
                height: 106px;
                background-size: contain;
                top: 12%;
                left: auto;
                right: 25px;
            }
            .animate_figure-whiteBig {
                top: 49%;
                left: 12%;
            }
        }
        @media all and (max-width: 767px) {
            .swiper-button-prev {
                left: auto;
                margin-top: -30px;
                right: 70px;
                top: auto;
            }
            .swiper-button-next {
                top: auto;
                margin-top: -30px;
            }
            .animate_figure-blue {
                width: 107px;
                height: 99px;
                right: -33px;
            }
        }
        @media all and (max-width: 1239px){

        .slider_text {
            margin-left: 20px;
        }
        @media all and (max-width: 929px){
            .animate_figure-whiteBig {
                top: 44%;
            }
        }
        @media all and (max-width: 705px){
            .slider_text {
                margin-left: 0;
                margin-bottom: 20px;
            }
        }
        @media all and (max-width: 650px) {
            .animate_figure-whiteBig {
                display: none;
            }
        }
        @media all and (max-width: 639px) {
            .footer_develop {
                padding: 32px 24px;
            }
            .product_section_content_item-list {
                margin-left: 23px;
            }
            .why_cfi_content_table-title {
                max-width: 200px;
                width: 100%;
            }
            #home {
                margin-top: 159px;
            }
            .max-width-product {
                max-width: none;
            }
            .header_fullScreen_menu > ul {
                padding: 0 24px 24px 24px;
            }
            .header_nav_platform {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
            }
        }

    </style>
    <?php wp_head()?>
</head>

<body>

<article class="animate_figure">
    <div class="animate_figure-white"></div>
    <div class="animate_figure-blue"></div>
    <div class="animate_figure-whiteBig"></div>
</article>

<?php
$services_data = get_field('header');
?>
<header id="header" class="header-fixed">
    <div class="container header">
        <a class="header_logo" href="/">
            <svg width="72" height="30" viewBox="0 0 72 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_2139_655)">
                    <path d="M69.205 26.0893H68.5354L67.8123 27.1607V26.0893H67.116V28.1518H67.7855L68.5086 27.0804V28.1518H69.205V26.0893ZM66.5804 26.0893H65.9108L65.1877 27.1607V26.0893H64.4914V28.1518H65.1609L65.8572 27.0804V28.1518H66.5536L66.5804 26.0893ZM64.0896 27.6161H63.8218V26.0893H63.1255V27.6161H62.4559V26.0893H61.7596V28.1786H63.4736V28.5804H64.1164L64.0896 27.6161ZM61.4114 28.1518L60.5008 26.0893H59.8045L58.8939 28.1518H59.5903L59.7242 27.8036H60.4741L60.608 28.1518H61.4114ZM58.519 28.1518V26.0893H57.9298L57.2602 27.1875L56.5907 26.0893H56.0283V28.1518H56.671V27.2411L57.1263 27.9643H57.4209L57.8762 27.2143V28.1518H58.519ZM54.6624 27.6429C55.2516 27.6429 55.6265 27.3482 55.6265 26.8661C55.6265 26.3839 55.2516 26.0893 54.6624 26.0893H53.6714V28.1786H54.3678V27.6697H54.6624M52.0645 28.2054C52.2788 28.1786 52.4663 28.0982 52.6537 27.9911C52.8144 27.8572 52.9483 27.6964 53.0287 27.4822C53.109 27.2947 53.109 27.0536 53.0555 26.8661C53.0019 26.6518 52.8948 26.4643 52.7341 26.3304C52.5734 26.1964 52.3859 26.0893 52.1717 26.0625C51.9574 26.0357 51.7431 26.0625 51.5557 26.1429C51.3682 26.2232 51.2075 26.3572 51.0736 26.5447C50.9665 26.7322 50.8861 26.9197 50.8861 27.1339C50.8861 27.2947 50.9129 27.4286 50.9665 27.5625C51.02 27.6964 51.1272 27.8304 51.2343 27.9375C51.3414 28.0447 51.4753 28.125 51.6092 28.1786C51.7699 28.2054 51.9038 28.2322 52.0645 28.2054ZM49.4935 28.0447C50.1898 27.9911 50.5647 27.6697 50.5647 27.1072C50.5647 26.5714 50.1898 26.25 49.4935 26.1964V25.9822H48.8507V26.1964C48.1544 26.25 47.7794 26.5714 47.7794 27.1072C47.7794 27.6429 48.1544 27.9643 48.8507 28.0179V28.2589H49.4935V28.0447ZM47.3509 26.0893H46.6546V26.8125H46.0118V26.0893H45.3155V28.1786H46.0118V27.4018H46.6546V28.1786H47.3509V26.0893ZM44.7531 26.0893H44.0835L43.3604 27.1607V26.0893H42.6641V28.1518H43.3336L44.0567 27.0804V28.1518H44.7531V26.0893ZM41.0571 26.0893H40.3876L39.6645 27.1607V26.0893H38.9682V28.1518H39.6377L40.3608 27.0804V28.1518H41.0571V26.0893ZM37.388 28.2054C37.6023 28.1786 37.7897 28.0982 37.9772 27.9911C38.1379 27.8572 38.2718 27.6964 38.3522 27.4822C38.4325 27.2947 38.4325 27.0536 38.379 26.8661C38.3254 26.6518 38.2183 26.4643 38.0576 26.3304C37.8969 26.1964 37.7094 26.0893 37.4951 26.0625C37.2809 26.0357 37.0666 26.0625 36.8792 26.1429C36.6917 26.2232 36.531 26.3572 36.3971 26.5447C36.29 26.7322 36.2096 26.9197 36.2096 27.1339C36.2096 27.2947 36.2364 27.4286 36.3167 27.5625C36.3703 27.6964 36.4774 27.8304 36.5846 27.9375C36.6917 28.0447 36.8256 28.125 36.9595 28.1786C37.0934 28.2054 37.2541 28.2322 37.388 28.2054ZM35.058 28.1518C35.5936 28.1518 35.915 27.9107 35.915 27.5357C35.915 27.4286 35.8882 27.3214 35.8079 27.2411C35.7543 27.1607 35.6472 27.0804 35.5401 27.0536C35.6204 27 35.7008 26.9464 35.7275 26.8661C35.7811 26.7857 35.8079 26.7054 35.8079 26.5982C35.8079 26.25 35.5133 26.0625 34.9509 26.0625H33.9331V28.1518H35.058ZM32.3262 28.2054C32.5405 28.1786 32.728 28.0982 32.9154 27.9911C33.0761 27.8572 33.21 27.6964 33.2904 27.4822C33.3707 27.2947 33.3707 27.0536 33.3172 26.8661C33.2636 26.6518 33.1565 26.4643 32.9958 26.3304C32.8351 26.1964 32.6476 26.0893 32.4334 26.0625C32.2191 26.0357 32.0048 26.0625 31.8174 26.1429C31.6299 26.2232 31.4692 26.3572 31.3353 26.5447C31.2282 26.7322 31.1478 26.9197 31.1478 27.1339C31.1478 27.2947 31.1746 27.4286 31.2282 27.5625C31.2817 27.6964 31.3889 27.8304 31.496 27.9375C31.6031 28.0447 31.737 28.125 31.8709 28.1786C32.0316 28.2054 32.1923 28.2322 32.3262 28.2054ZM30.023 27.6429C29.8891 27.6429 29.7552 27.5893 29.648 27.4822C29.5409 27.375 29.4873 27.2411 29.4873 27.1072C29.4873 26.9732 29.5409 26.8393 29.648 26.7322C29.7552 26.625 29.8891 26.5714 30.023 26.5714C30.1033 26.5714 30.2105 26.5982 30.2908 26.625C30.3711 26.6786 30.4247 26.7322 30.4783 26.8125L30.9336 26.4107C30.8264 26.2768 30.6657 26.1697 30.5051 26.0893C30.3444 26.0089 30.1569 25.9822 29.9962 25.9822C29.8623 25.9822 29.7016 26.0089 29.5677 26.0625C29.4338 26.1161 29.3267 26.1964 29.2195 26.3036C29.1124 26.4107 29.032 26.5179 28.9785 26.6518C28.9249 26.7857 28.8981 26.9197 28.8981 27.0804C28.8981 27.2411 28.9249 27.375 28.9785 27.5089C29.032 27.6429 29.1124 27.75 29.2195 27.8572C29.3267 27.9643 29.4338 28.0447 29.5677 28.0982C29.7016 28.1518 29.8355 28.1786 29.9962 28.1786C30.1837 28.1786 30.3444 28.1518 30.5051 28.0714C30.6657 27.9911 30.7997 27.8839 30.9336 27.75L30.4783 27.3482C30.4247 27.4286 30.3711 27.4822 30.2908 27.5357C30.2105 27.6161 30.1301 27.6429 30.023 27.6429ZM28.3893 26.0893H27.693V26.8125H27.0502V26.0893H26.3539V28.1786H27.0502V27.4018H27.7197V28.1786H28.4161V26.0893H28.3893ZM25.9789 28.1518L25.0683 26.0893H24.372L23.4614 28.1518H24.1845L24.3184 27.8036H25.1219L25.2558 28.1518H25.9789ZM23.0597 26.0893H22.3633V26.8125H21.7474V26.0893H21.051V28.1518H21.7474V27.375H22.3901V28.1518H23.0865L23.0597 26.0893ZM20.4618 26.0893H19.7923L19.0692 27.1607V26.0893H18.3996V28.1518H19.0692L19.7923 27.0804V28.1518H20.4618V26.0893ZM16.8998 28.0447C17.5962 27.9911 17.9711 27.6697 17.9711 27.1072C17.9711 26.5714 17.5962 26.25 16.8998 26.1964V25.9822H16.2571V26.1964C15.5607 26.25 15.1858 26.5714 15.1858 27.1072C15.1858 27.6429 15.5607 27.9643 16.2571 28.0179V28.2589H16.8998V28.0447ZM12.8825 27.6429C13.4717 27.6429 13.8467 27.3482 13.8467 26.8661C13.8467 26.3839 13.4717 26.0893 12.8825 26.0893H11.8648V28.1786H12.5611V27.6697L12.8825 27.6429ZM11.4631 26.0625H9.53479V26.5982H10.1508V28.1518H10.8471V26.625H11.4631V26.0625ZM9.15984 26.0625H8.43673V26.7857H7.79396V26.0625H7.09763V28.1518H7.79396V27.375H8.43673V28.1518H9.13306L9.15984 26.0625ZM6.58878 27.6161H5.57106V27.3482H6.42808V26.8393H5.57106V26.5982H6.56199V26.0625H4.84795V28.1518H6.56199L6.58878 27.6161ZM4.44622 27.6161H4.1784V26.0893H3.48207V27.6161H2.81252V26.0893H2.14297V28.1518H3.85702V28.5536H4.49978L4.44622 27.6161ZM39.3967 25.4464C39.3967 25.7679 39.5574 25.9554 40.0394 25.9554C40.5215 25.9554 40.709 25.7679 40.709 25.4464H40.2269C40.2269 25.5804 40.1733 25.6339 40.0394 25.6339C39.9055 25.6339 39.852 25.5804 39.852 25.4464H39.3967ZM71.1868 24.3214V27.9107C71.1868 28.4732 70.9726 28.9822 70.5709 29.3839C70.1691 29.7857 69.6603 30 69.0978 30H2.06262C1.79481 30 1.52699 29.9464 1.25917 29.8393C0.991347 29.7322 0.777091 29.5714 0.589618 29.3839C0.402144 29.1964 0.241452 28.9554 0.134325 28.7143C0.0271967 28.4732 -0.0263672 28.1786 -0.0263672 27.9107V24.3214H71.1868ZM54.6356 26.625H54.3678V27.1072H54.6356C54.8231 27.1072 54.9302 27 54.9302 26.8661C54.9302 26.7322 54.8231 26.625 54.6356 26.625ZM59.9384 27.2947H60.3402L60.1259 26.7857L59.9384 27.2947ZM35.0312 27.3482H34.6295V27.6697H35.0312C35.058 27.6697 35.0848 27.6697 35.1116 27.6697C35.1383 27.6697 35.1651 27.6429 35.1651 27.6429C35.1919 27.6161 35.1919 27.6161 35.1919 27.5893C35.1919 27.5625 35.1919 27.5357 35.1919 27.5089C35.1919 27.4822 35.1919 27.4554 35.1919 27.4554C35.1919 27.4286 35.1651 27.4286 35.1651 27.4018C35.1383 27.375 35.1383 27.375 35.1116 27.375C35.058 27.3482 35.058 27.3482 35.0312 27.3482ZM52.0645 26.625C51.9574 26.625 51.8503 26.625 51.7699 26.6786C51.6896 26.7322 51.6092 26.8125 51.5557 26.8929C51.5021 27 51.5021 27.0804 51.5021 27.1875C51.5289 27.2947 51.5557 27.4018 51.636 27.4554C51.7164 27.5357 51.7967 27.5893 51.9038 27.6161C52.011 27.6429 52.1181 27.6429 52.1984 27.5893C52.3056 27.5625 52.3859 27.4822 52.4395 27.4018C52.493 27.3214 52.5198 27.2143 52.5198 27.1072C52.5198 27.0536 52.5198 26.9732 52.493 26.9197C52.4663 26.8661 52.4395 26.8125 52.3859 26.7589C52.3323 26.7054 52.2788 26.6786 52.2252 26.6518C52.1984 26.625 52.1449 26.625 52.0645 26.625ZM24.5059 27.2947H24.9076L24.7202 26.7589L24.5059 27.2947ZM15.9089 27.1072C15.9089 27.3214 16.0428 27.4286 16.3106 27.4822V26.7322C16.0428 26.7857 15.9089 26.8929 15.9089 27.1072ZM12.8558 26.625H12.5879V27.1072H12.8558C13.0432 27.1072 13.1504 27 13.1504 26.8661C13.1504 26.7322 13.07 26.625 12.8558 26.625ZM16.9534 26.7322V27.4822C17.2212 27.4822 17.3551 27.3214 17.3551 27.1072C17.3551 26.8929 17.2212 26.7857 16.9534 26.7322ZM48.4757 27.1072C48.4757 27.3214 48.6097 27.4286 48.8775 27.4822V26.7322C48.5829 26.7857 48.4757 26.8929 48.4757 27.1072ZM49.5202 26.7322V27.4822C49.8148 27.4822 49.922 27.3214 49.922 27.1072C49.922 26.8929 49.7881 26.7857 49.5202 26.7322ZM37.4148 26.5982C37.3077 26.5982 37.2006 26.5982 37.1202 26.6518C37.0399 26.7054 36.9595 26.7857 36.9059 26.8661C36.8524 26.9732 36.8524 27.0536 36.8524 27.1607C36.8792 27.2679 36.9059 27.375 36.9863 27.4286C37.0666 27.5089 37.147 27.5625 37.2541 27.5893C37.3612 27.6161 37.4684 27.6161 37.5487 27.5625C37.6558 27.5357 37.7362 27.4554 37.7898 27.375C37.8433 27.2947 37.8701 27.1875 37.8701 27.0804C37.8701 27.0268 37.8701 26.9464 37.8433 26.8929C37.8165 26.8393 37.7897 26.7589 37.7362 26.7322C37.6826 26.6786 37.6291 26.6518 37.5755 26.625C37.5219 26.625 37.4684 26.5982 37.4148 26.5982ZM32.353 26.5982C32.2459 26.5982 32.1388 26.5982 32.0584 26.6518C31.9781 26.7054 31.8977 26.7857 31.8442 26.8661C31.7906 26.9732 31.7906 27.0536 31.7906 27.1607C31.7906 27.2679 31.8442 27.375 31.9245 27.4286C32.0048 27.5089 32.0852 27.5625 32.1923 27.5893C32.2994 27.6161 32.4066 27.6161 32.4869 27.5625C32.5941 27.5357 32.6744 27.4554 32.728 27.375C32.7815 27.2947 32.8083 27.1875 32.8083 27.0804C32.8083 27.0268 32.8083 26.9464 32.7815 26.8929C32.7547 26.8393 32.728 26.7857 32.6744 26.7322C32.6208 26.6786 32.5673 26.6518 32.5137 26.625C32.4601 26.625 32.4066 26.5982 32.353 26.5982ZM35.1116 26.7322C35.1116 26.8393 35.058 26.8929 34.9509 26.8929H34.6563V26.5714H34.9509C35.058 26.5714 35.1116 26.625 35.1116 26.7322Z" fill="#1272CC"/>
                    <path d="M4.76719 22.5804H20.8096V19.0446H18.6135V6.48215H14.3551V19.0446H5.86525C5.4903 19.0446 5.11535 18.8839 4.84753 18.6161C4.57971 18.3482 4.41902 17.9732 4.41902 17.5982V8.70536C4.41902 8.11608 4.17798 7.55358 3.77626 7.15179C3.37453 6.75 2.8121 6.50893 2.2229 6.50893H0V16.4464C0 17.3304 0.0535639 18.2143 0.187474 19.0982C0.642767 21.4554 2.03543 22.4464 4.76719 22.5804Z" fill="#0085FF"/>
                    <path d="M44.9136 16.3661C44.9136 18.0804 44.3512 19.125 42.7711 19.125H38.3253V10.0446H42.7175C44.2173 10.0446 44.8869 10.4732 44.8869 12.5357L44.9136 16.3661ZM34.0937 19.0982H29.6479C28.0678 19.0982 27.5054 18.0536 27.5054 16.3393V12.5625C27.5054 10.5 28.1749 10.0714 29.6747 10.0714H34.0937V19.0982ZM42.8514 6.53571H38.3521V4.3125H36.2631C35.9685 4.3125 35.6739 4.36607 35.4061 4.47321C35.1382 4.58036 34.8972 4.74107 34.6829 4.95536C34.4955 5.16964 34.3348 5.41071 34.2276 5.67857C34.1205 5.94643 34.067 6.24107 34.067 6.50893H29.514C25.0414 6.50893 23.0596 8.22321 23.0596 12.75V16.125C23.0596 20.3036 24.3451 22.3929 28.3356 22.5804H44.0031C47.9936 22.3929 49.2791 20.3036 49.2791 16.125V12.8036C49.3059 8.25 47.2972 6.5625 42.8514 6.53571Z" fill="#0085FF"/>
                    <path d="M64.1463 7.56508C63.6288 7.95206 63.0606 8.64021 62.4514 9.46039L56.8851 18.8838V6.5088H52.5732V22.5802H59.6437L66.848 10.232V6.50884C66.848 6.50884 65.5935 6.48309 64.1463 7.56508Z" fill="#0085FF"/>
                    <path d="M71.1592 20.3839C71.1592 20.9732 70.9449 21.5089 70.5164 21.9375C70.0879 22.3661 69.5523 22.5804 68.9898 22.5804H66.8473V6.50894H71.1592V20.3839Z" fill="#0085FF"/>
                </g>
                <defs>
                    <clipPath id="clip0_2139_655">
                        <rect width="71.1864" height="30" fill="white"/>
                    </clipPath>
                </defs>
            </svg>
        </a>
        <nav class="header_nav">
            <div onclick="open_menu(true)" class="header_nav_burger">
                <span class="header_nav_burger_line-1"></span>
                <span class="header_nav_burger_line-2"></span>
                <span class="header_nav_burger_line-3"></span>
            </div>
            <div class="header_nav_wrapper">
                <div class="header_fullScreen_menu_head">
                    <div class="header_fullScreen_menu_head-exit" onclick="open_menu(false)"></div>
                </div>
                <ul style="height: auto">
                    <?php foreach ($services_data['nav'] as $nav_key => $nav_item) {?>
                        <li>
                        <span class="header_fullScreen_menu_numeric flex-numeric little-text">
                            <span class="numeric-section color-black">0<?= $nav_key + 1?></span>
                        </span>
                            <a class="header_link hover-text nav-link" href="<?= $nav_item['link_section']?>"><?= $nav_item['title']?></a>
                        </li>
                    <?php }?>
                </ul>
                <div class="header_nav_platform">
                    <?php foreach ($services_data['btn_text'] as $btn_key => $btn_item) {?>
                        <div class="<?=$btn_item['white_btn'] ? 'btn-mini-white' : 'btn-mini-blue'?> btn-mini  header_platform_feedback">
                            <a class="<?=$btn_item['white_btn'] ? 'color-black' : 'color-white'?>" href="<?= $btn_item['link']?>"><?= $btn_item['title']?></a>
                        </div>
                    <?php }?>
                </div>
            </div>
        </nav>
        <div class="header_platform">
            <?php foreach ($services_data['btn_text'] as $btn_key => $btn_item) {?>
                <div class="<?=$btn_item['white_btn'] ? 'btn-mini-white' : 'btn-mini-blue'?> btn-mini  ">
                    <a class="<?=$btn_item['white_btn'] ? 'color-black' : 'color-white'?> nav-link" href="<?= $btn_item['link']?>"><?= $btn_item['title']?></a>
                </div>
            <?php }?>
        </div>
    </div>
</header>


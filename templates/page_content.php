<? $content_group_inner = $args; ?>
<!--data-trigger="animate_0" data-animate="zoom-in"-->
<? foreach ($content_group_inner as $key => $item) {
    if($item["acf_fc_layout"] == 'home_block') { ?>
        <section id="home" class="mt-section-120 container cfi_section ">
            <h1>
                <span class="cfi_section_title home-title"><?= $item['title'] ?></span>
                <span class="cfi_section_subtitle">
                    <span class="animate_gif">
                        <span class="animate_gif-1"></span>
                        <span class="animate_gif-2"></span>
                        <span class="animate_gif-3"></span>
                        <span class="animate_gif-4"></span>
                    </span>
                    <span class="cfi_section_subtitle-text home-title"><?= $item['subtitle'] ?></span>
                </span>
            </h1>
            <div class="cfi_section-ps">
                <span>
                    <?= $item['ps'] ?>
                </span>
            </div>
            <div class="cfi_section-img">
                <img src="<?= $item['general_img'] ?>" alt="cfiUi">
            </div>
        </section>
    <? } ?>

    <? if($item["acf_fc_layout"] == 'why_cfi') { ?>
        <section id="why_cfi" class="mt-section-120 container why_cfi">
            <div class="why_cfi_numeric">
                <div class="flex-numeric little-text">
                    <div class="numeric-section">
                        0<?= $key ?>
                    </div>
                    <span class="fw-600"><?= $item['block_name'] ?></span>
                </div>
                <div class="desktop_platform-btn btn-big btn-mini-blue little-text">
                    Перейти на платформу
                </div>
            </div>
            <div class="why_cfi_content">
                <h2 class="title-section" style="margin-left: -4px; margin-top: -4px ">
                    <span class="paragraph-section-text"><?= $item['title_paragraph'] ?></span>
                    <?= $item['title'] ?>
                </h2>
                <div  class="borderB-black border-section"></div>
                <div>
                    <div class="why_cfi_content_table">
                        <? foreach ($item['group_list'] as $groupKey  => $groupItem) { ?>
                            <div class="why_cfi_content_table_wrapper <?=$groupKey >= 1 ? 'mt-48' : '' ?>">
                                <span
                                    style="position: fixed"
                                ></span>
                                <div class="why_cfi_content_table-textLeft why_cfi_content_table-title">
                                    <span class="little-title-section fw-500">
                                         <?= $groupItem['title'] ?>
                                    </span>
                                </div>
                                <div class="why_cfi_content_table-text-line"></div>
                                <div class="why_cfi_content_table-textLeft">
                                    <span class="little-text why_cfi_content_table-text">
                                         <?= $groupItem['inforamtions'] ?>
                                    </span>
                                </div>
                            </div>
                        <? } ?>
                    </div>
                </div>
            </div>
            <div class="table_and_phone_platform-btn btn-big btn-mini-blue little-text">
                Перейти на платформу
            </div>
        </section>
    <? } ?>

    <? if($item["acf_fc_layout"] == 'client') { ?>
        <section id="client" class="mt-section-120 blue-section">
            <div class="container client_section">
                <div class="flex-numeric little-text">
                    <div class="numeric-section color-white numeric-section-white">0<?= $key ?></div>
                    <span class="color-white fw-600"><?= $item['block_name'] ?></span>
                </div>
                <div class="client_section_content">
                    <h2 class="title-section color-white" style="margin-left: -4px">
                        <span class="paragraph-section-text"><?= $item['title_paragraph'] ?></span>
                        <?= $item['title'] ?>
                    </h2>
                    <div class="border-section borderB-white"></div>
                    <div>
                        <div id="grid_table-client" class="client_section_content_flex">
                            <? foreach ($item['client_card'] as $client_key => $client_item) { ?>
                                <div class="client-cart jcSB">
                                    <div class="little-title-section"><?= $client_item['title'] ?></div>
                                    <div class="m-center">
                                        <img class="client-img"  src="<?= $client_item['img'] ?>" alt="<?= $client_item['title'] ?>">
                                    </div>
                                </div>
                            <? } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <? } ?>

    <? if($item["acf_fc_layout"] == 'advantages') { ?>
        <section id="advantages" class="mt-section-120 container advantages_section">
            <div class="advantages_section_numeric">
                <div class="flex-numeric little-text">
                    <div class="numeric-section">0<?= $key ?></div>
                    <span class="fw-600"><?= $item['block_name'] ?></span>
                </div>
                <div class="desktop_platform-btn btn-big btn-mini-blue little-text">
                    <?= $item['btn_link'] ?>
                </div>
            </div>
            <div class="advantages_section_wrapper">
                <h2 class="title-section" style="margin-left: -3px;">
                    <span class="paragraph-section-text"><?= $item['title_paragraph'] ?></span>
                    <?= $item['title'] ?>
                </h2>
                <div class="borderB-black border-section"></div>
                <? foreach ($item['advantages_card'] as $advantages_key => $advantages_item) {?>
                    <?if (isset($advantages_item['card']) && is_array($advantages_item['card'])) {?>
                    <div class="advantages_section_card">
                        <div  class="advantages_section_card-title">
                            <span class="little-title-section mr-8 advantages_section_card-title-text fw-500"><?= $advantages_item['title'] ?></span>
                            <span class="main-line"></span>
                        </div>
                            <div class="<?=count($advantages_item['card']) === 2 ? 'advantages_section_card_content-two' : 'advantages_section_card_content' ?>">
                                <? foreach ($advantages_item['card'] as $advantages_item_key => $advantages_item_card) {?>
                                    <div  class="advantages_section_card_content_item max-width-none">
                                        <div class="advantages-title-section little-text advantages_section_card_content_item-title"><?= $advantages_item_card['title'] ?></div>
                                        <div class="little-text advantages_section_card_content_item-text">
                                            <div class="advantages_section_card_content_item-text-pref color-prefix"><?= $advantages_item_card['preffix'] ?> </div>
                                            <span><?= $advantages_item_card['text'] ?></span>
                                        </div>
                                    </div>
                                <? } ?>
                            </div>
                    </div>
                    <?} else {?>
                        <div class="advantages_section_card mt-70">
                            <div class="advantages_section_card-title">
                                <span class="little-title-section mr-8 advantages_section_card-title-text fw-500"><?= $advantages_item['title'] ?></span>
                                <span class="main-line"></span>
                                <p class="little-text">
                                    <?= $advantages_item['text_no_card'] ?>
                                </p>
                            </div>
                        </div>
                    <? } ?>
                <? } ?>
            </div>
            <div class="table_and_phone_platform-btn btn-big btn-mini-blue little-text">
                Попробовать бесплатно
            </div>
        </section>
    <? } ?>

    <? if($item["acf_fc_layout"] == 'why_work') { ?>
        <section id="howWorks" class="mt-section-120 container howWorks_section">
            <div class="flex-numeric little-text">
                <div class="numeric-section">0<?= $key ?></div>
                <span class="fw-600"><?= $item['block_name'] ?></span>
            </div>
            <div class="howWorks_section_content">
                <h2 class="title-section" style="margin-top: 3px;">
                    <span class="paragraph-section-text"><?= $item['title_paragraph'] ?></span>
                    <?= $item['title'] ?>
                </h2>
                <div class="borderB-black border-section"></div>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <? foreach ($item['slide'] as $slide_key => $slide_item) {?>
                            <div class="swiper-slide">
                                <div class="howWorks_section_content_slide">
                                    <img src="<?= $slide_item['img']['url'] ?>" alt="slide">
                                    <?if ($slide_item['list_flag']) {?>
                                        <div  class="little-text text-left ml-32">
                                            <?= $slide_item['text'] ?>
                                            <div class="howWorks_section_content_slide_info">
                                                <?= $slide_item['title_list'] ?>
                                                <ul>
                                                    <? foreach ($slide_item['ul_block'] as $ul_block_key => $ul_block_item) {?>
                                                        <li><?= $ul_block_item['elem_list'] ?></li>
                                                    <?}?>
                                                </ul>
                                            </div>
                                        </div>
                                    <?} else {?>
                                        <div  class="little-text slider_text">
                                            <?= $slide_item['text'] ?>
                                        </div>
                                    <?}?>
                                </div>
                            </div>
                        <?}?>
                    </div>
                    <div class="howWorks_section-pagination">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination little-text"></div>
                    </div>
                </div>
            </div>
        </section>
    <? } ?>

    <? if($item["acf_fc_layout"] == 'products') { ?>
        <section id="product" class="mt-section-120 blue-section">
            <div class="container product_section">
                <div class="product_section_numeric">
                    <div class="flex-numeric little-text">
                        <div class="numeric-section color-white numeric-section-white">0<?= $key ?></div>
                        <span class="color-white fw-600"><?= $item['block_name'] ?></span>
                    </div>
                    <div class="desktop_platform-btn btn-big btn-mini-white color-black little-text">Перейти на платформу</div>
                </div>
                <div class="product_section_content">
                    <h2  class="title-section color-white" style="margin-top: -2px;">
                        <span class="paragraph-section-text"><?= $item['title_paragraph'] ?></span>
                        <?= $item['title'] ?>
                    </h2>
                    <? foreach ($item['products_group'] as $products_key => $products_item) {?>
                        <div  class="mt-64 product_section_content_item color-white">
                            <div class="<?= $products_item['visibility_card'] ? '' : 'product_section_content_item_content_noCard'?>">
                                <div   class="product_section_content_item-title">
                                    <div class="product_section_content_item-title-text little-title-section fw-500">
                                        <?= $products_item['title'] ?>
                                    </div>
                                    <div class="main-line main-line_white ml-26"></div>
                                </div>
                                <? foreach ($products_item['card'] as $card_products_key => $card_products_item) {?>
                                    <div class=" <?= $products_item['visibility_card'] ? 'product_section_content_item_content' : ''?>  ">
                                        <?if (isset($card_products_item['card']) && is_array($card_products_item['card'])) {?>
                                            <? foreach ($card_products_item['card'] as $cards_products_key => $cards_products_item) {?>
                                                <div class="product-cart max-width-product main-line_white product_section_content_item_content_title">
                                                    <div class="little-text" style="font-weight: 300;"><?= $cards_products_item['title'] ?></div>
                                                    <div class="product_section_content_item_content_title-text text-right"><?= $cards_products_item['text'] ?></div>
                                                </div>

                                            <?}?>
                                        <?}?>
                                        <div class="<?= $products_item['visibility_card'] ? '' : 'product_section_content_item-list'?>">
                                            <ul>
                                                <? foreach ($card_products_item['points'] as $points_products_key => $points_products_item) {?>
                                                    <li class="little-text <?=$points_products_key >= 1 ? 'mt-10' : ''?>"><?= $points_products_item['li_item'] ?></li>
                                                <?}?>
                                            </ul>
                                        </div>
                                    </div>
                                <?}?>
                            </div>
                            </div>

                        <?if ($products_key < count($item['products_group']) - 1) {?>
                            <div class="borderB-black border-section-mini main-line_white"></div>
                        <?}?>
                    <?}?>
                </div>
                <div class="table_and_phone_platform-btn btn-big btn-mini-white color-black little-text">Перейти на платформу</div>
            </div>
        </section>
    <? } ?>

    <? if($item["acf_fc_layout"] == 'tariff_block') { ?>
        <section id="tarif" class="mt-section-120 container tarif_section">
            <div class="flex-numeric little-text">
                <div class="numeric-section">0<?= $key ?></div>
                <span class="fw-600"><?= $item['block_name'] ?></span>
            </div>
            <div class="tarif_section_content">
                <h2  class="title-section">
                    <span class="paragraph-section-text" style="top: 0"><?= $item['block_title'] ?></span>
                </h2>
                <div class="borderB-black border-section"></div>
                <? foreach ($item['card_group_list'] as $card_key => $card_item) { ?>
                    <div class="tarif_section_content_item <?=$card_key > 0 ? 'mt-80' : ''?>">
                        <div  class="tarif_section_content_item_title little-title-section fw-500"><?= $card_item['group_title'] ?><div class="main-line"></div></div>
                        <div class="tarif_section_content_item_wrapper">

                            <? foreach ($card_item['cards_list'] as $cards_list_key => $cards_list_item) { ?>
                                <div class="tarif_section_content_item_wrapper_item mr-24">
                                    <div class="tarif_section_content_item_wrapper_item-padding tarif_section_content_item_wrapper_item-position">
                                        <div class="tarif_section_content_item_wrapper_item-title little-text"><?= $cards_list_item['tariff_name'] ?></div>
                                        <div class="tarif_section_content_item_wrapper_item-price"><?= $cards_list_item['price'] ?>
                                            <div class="tarif_section_content_item_wrapper_item-price_pref">
                                                <span class="tarif_section_content_item_wrapper_item-price_pref-R">₽</span>
                                                <span>/мес.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding: 0 10px">
                                        <div class="tarif_section_content_item_wrapper_hr"></div>
                                    </div>
                                    <div class="tarif_section_content_item_wrapper_item-padding tarif_section_content_item_wrapper_item-list">
                                        <? foreach ($cards_list_item['description_list'] as $description_key => $description_item) { ?>
                                            <div class="tarif_section_content_item_wrapper_item-list_li">
                                                <span class="little-text"><?= $description_item['elem'] ?></span>
                                            </div>
                                        <?}?>
                                    </div>
                                </div>
                            <?}?>
                        </div>
                    </div>
                <?}?>
            </div>
        </section>
    <? } ?>
<? } ?>

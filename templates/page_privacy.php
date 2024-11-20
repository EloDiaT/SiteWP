<? $content_group_inner = $args; ?>

<style>
    #animate_figure {
        display: none;
    }
    .policy {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .policy > h2 > a {
        font-size: 24px;
        text-decoration: none;
        color: var(--main_color-black);
    }
    .policy > h2:last-child {
        margin-left: 64px;
    }
    .policy > h2:first-child > a {
        color: var(--main_color-blue);
    }
   .policy_content > ul{
       margin-left: 18px;
   }
    .policy_content > ul > li{
       margin-top: 10px;
   }
    .policy_content > ul > li:last-child{
       margin-bottom: 10px;
   }
   .policy_content {
       line-height: 24px;
       font-size: 16px;
   }
    .policy_content > h2 {
        margin: 24px 0;
    }
    @media all and (max-width: 871px){
        .policy {
            flex-direction: column;
        }
        .policy > h2:last-child {
            margin-top: 10px;
            margin-left: 0;
        }
    }
</style>
<?php foreach ($content_group_inner as $key => $item) { ?>
     <?php if ($item["acf_fc_layout"] == 'privacy_policy') { ?>
            <section id="home" class="mt-section-120 container">
                <div class="policy">
                    <?php foreach ($item['group_tile'] as $tile_key => $tile_item) { ?>
                    <h2>
                        <a class="hover-text" href="<?= $tile_item['link']?>"><?= $tile_item['title']?></a>
                    </h2>
                    <?php } ?>
                </div>
                <div class="borderB-black border-section"></div>
                <div class="policy_content">
                   <?= $item['policy_content'] ?>
                </div>
            </section>
    <?php } ?>
<?php } ?>

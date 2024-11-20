<?php
/*
Template Name: Политика конфиденциальности
Template Post Type: post, page, portfolio
*/
get_header();
$services_data = get_field('privacy_content');
if (isset($services_data['content_group_inner']) && is_array($services_data['content_group_inner'])) {
    $content_group_inner = $services_data['content_group_inner'];
}
?>

<main class="main">
    <? get_template_part('templates/page_privacy', get_post_type(), $services_data); ?>
</main>

<?php
get_footer();
?>

<?php
/*
The main template file
Template Name: Посадочная страница
Template Post Type: post, page, portfolio
*/
get_header();
$services_data = get_field('content_group');
if (isset($services_data['content_group_inner']) && is_array($services_data['content_group_inner'])) {
    $content_group_inner = $services_data['content_group_inner'];
}
?>

    <main class="main">
        <? get_template_part('templates/page_content', get_post_type(), $content_group_inner); ?>
    </main>

<?php
get_footer();
?>

<?php
    global $post;
    $template_uri = get_template_directory_uri();
    $pfx_title = get_field('page_title_prefix', 'option');
    $slug = get_post_field('post_name', get_post());
    $page_title = empty($post) ? (empty($slug) ? 'ページ' : $slug) : $post->post_title;
    $title = ( empty($pfx_title) ? (get_bloginfo('name') . '：') : $pfx_title ) .
        ( empty($page_title) ? '' : $page_title );

    $fontawesome_link = '';
    $fontawesome_url = get_field('fontawesome_url', 'options');
    $fontawesome_sum = get_field('fontawesome_sum', 'options');
    $fontawesome_crs = get_field('fontawesome_crs', 'options');
    if (! empty($fontawesome_url)) {
        $fontawesome_link = '<link rel="stylesheet" href="' . $fontawesome_url . '"';
        if (! empty($fontawesome_sum)) {
            $fontawesome_link .= ' integrity="' . $fontawesome_sum . '"';
        }
        if (! empty($fontawesome_crs)) {
            $fontawesome_link .= ' crossorigin="' . $fontawesome_crs . '"';
        }
        $fontawesome_link .= '>';
    }
?><!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
<?php
if (! empty($fontawesome_link)) {
    echo $fontawesome_link;
}

    wp_head();
?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php
    /*
    -- If you want breadcrumbs the same on every page, you can use the breadcrumb pack
    -- to add it here. Otherwise, you can make the call within Page templates, if the
    -- pages behave differently with respect to the breadcrumbs [e.g., some page that
    -- does not want the breadcrumbs displayed.
    --
    --    echo oc_breadcrumbs();
    --
    */
    $main_menu_args = array(
        'theme_location' => 'primary',
        'menu_id'        => 'primary',
        'container'      => '',
        'items_wrap' => '%3$s',
        'walker'         => new OC_Custom_Menu_Walker()
    );
?>
    <header id="header">
        <a href="<?php echo home_url('/'); ?>" class="header-logo">
           <span class="pc">
                <img src="<?php echo $template_uri; ?>/img/common/logo.png" alt="DENTAL CLINIC AOKI">
           </span>
           <span class="sp">
                <img src="<?php echo $template_uri; ?>/img/common/logo.png" alt="DENTAL CLINIC AOKI">
           </span>
        </a>
        <nav class="header-nav">
            <ul class="header-nav__menu">
                <?php wp_nav_menu($main_menu_args); ?>
            </ul>
            <div class="header-note sp-tb">
                <p> 当院は予約制となっております。<br> ご来院の前にご予約をお願いいたします。 </p>
                <a href="tel:0973800X0X" class="header-note__tel">
                    <span>09-7380-0X0X</span>
                </a>
                <a href="" class="header-note__email">
                    <span>お問い合わせはこちら</span>
                </a>
            </div>
        </nav>
        <div class="header-item">
            <a href="" class="header-item__tel js-openpopup">
                <img src="<?php echo $template_uri; ?>/img/common/icon-01.png" alt="tel">
            </a>
            <a href="" class="header-item__web pc-tb">
                <img src="<?php echo $template_uri; ?>/img/common/icon-02.png" alt="Web予約">
                <span>Web予約</span>
            </a>
        </div>
        <span class="js-mobile">
            <span></span>
        </span>
    </header>

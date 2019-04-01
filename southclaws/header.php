<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <meta name="theme-color" content="#ff3200" />
    <meta name="msapplication-TileColor" content="#ff3200" />
    <meta property="og:image" content="https://www.southcla.ws/static/southclaws-bold-light-0100.png" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Southclaws" />
    <meta property="og:url" content="https://blog.southcla.ws" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@Southclaws" />
    <meta name="twitter:creator" content="@Southclaws" />
    <meta name="hostname" content="southcla.ws" />
    <meta name="expected-hostname" content="southcla.ws" />
    <link rel="stylesheet" href="https://use.typekit.net/vnc0psu.css" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="wrapper" class="hfeed">
        <header id="header">
            <section id="branding">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" width="100" height="100">
                        <title>southclaws-bold-linework-svg</title>
                        <g id="bold-linework">
                            <g id="shape_copy_15" data-name="shape copy 15">
                                <path id="mainShapeOutline" class="cls-1" d="M250,487.3s-46.92-175.09-50.53-188.52l-57.3,17.73,30.06-86.28-64-163.78L250,169.51,391.82,66.45,327.77,230.23l30.06,86.27-57.3-17.72ZM250,393c2.58-12,36.45-117.32,36.45-117.32l40.84,12.63-14.81-57.1,28.25-97.31L250,194.07l-90.73-60.15,28.25,97.31-14.81,57.1,40.83-12.63S247.42,381,250,393Z" />
                                <polygon id="eyeShape" class="cls-2" points="295.14 229.53 250 259.76 204.86 229.52 295.14 229.53" />
                            </g>
                        </g>
                    </svg>
                </div>
                <div>
                    <div>
                        <h1 class="strip">
                            <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_html(get_bloginfo('name')); ?>" rel="home">
                                <?php echo esc_html(get_bloginfo('name')); ?>
                            </a>
                        </h1>
                    </div>
                    <div>
                        <h2 class="strip">code - video - art</h2>
                    </div>
                    <div>
                        <h2><?php bloginfo('description'); ?></h2>
                    </div>
                </div>
            </section>
            <!-- <nav id="menu">
                <div id="search"><?php get_search_form(); ?></div>
                <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
            </nav> -->
        </header>
        <hr />
        <div id="container"> 
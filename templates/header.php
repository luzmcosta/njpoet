<div class="social-navbar">
    <div class="social">
        <?php dynamic_sidebar('sidebar-social'); ?>
    </div>

    <div class="share">
        <?php dynamic_sidebar('sidebar-share'); ?>
    </div>

    <div class="search">
        <?php dynamic_sidebar('sidebar-search'); ?>
    </div>
</div>

<header class="banner navbar navbar-default navbar-static-top" role="banner">
    <div class="container-fluid">
        <div class="overlay"></div>

        <div class="header-brand">
            <div>
                <a href="<?php echo esc_url(home_url('/')); ?>">#njpoet</a>
            </div>
        </div>

        <div class="header-navbar">
            <nav class="collapse navbar-collapse" role="navigation">
            <?php
                if (has_nav_menu('primary_navigation')) {
                    $walker = new Menu_With_Description;
                    wp_nav_menu( array( 'theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav', 'walker' => $walker ) );
                }
            ?>
            </nav>
        </div>

        <div class="menu-icon">
            <a href="//twitter.com/charlesbivona">
                <i class="fa fa-twitter fa-2x"></i>
            </a>
            <a href="//facebook.com/charlesbivona">
                <i class="fa fa-facebook fa-2x"></i>
            </a>
            <i class="fa fa-search fa-2x"></i>
        </div>
    </div>

    <div class="twitter">
        <?php dynamic_sidebar('sidebar-twitter'); ?>
    </div>
</header>

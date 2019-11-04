<header>
    <div class="container">
        <div class="topleft-menu col-md-5">
            <?php if (!empty($page['topleftmenu'])): ?>
                <?php print render($page['topleftmenu']); ?>
            <?php endif; ?>
        </div>
        <div class="topright-menu col-md-7">
            <div class="col-sm-6 col-xs-12">
                <?php if (!empty($page['toprightmenu'])): ?>
                    <?php print render($page['toprightmenu']); ?>
                <?php endif; ?>
            </div>
            <div class="social-icons col-sm-6 col-xs-12">
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
                <a href="#"><i class="fa fa-vimeo-square"></i></a>
                <a href="#"><i class="fa fa-tumblr"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
            </div>
        </div>
    </div>
    <div class="main-logo">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
            <span class="page-logo">
                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </span>
        </a>
    </div>
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="menu-main">
            <div class="navbar-collapse collapse">
                <nav role="navigation">
                    <?php if (!empty($primary_nav)): ?>
                        <?php print render($primary_nav); ?>
                    <?php endif; ?>
                </nav>
            </div>
        </div>
    </div>
    <div class="separator"></div>
</header>

<div class="main-container container">
    <div class="row">
        <div class="col-xs-12">
            <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
            <?php print $messages; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 section-title">
            <?php if (!empty($title)): ?>
                <h1 class="page-header"><?php print $title; ?></h1>
            <?php endif; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 explanation">
            <?php print render($page['content']); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 main-content">
            <?php print render($page['slider']); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 paged-content">
            <?php print render($page['paged']); ?>
        </div>
    </div>
    
    <div class="row section-area">
        <div class="col-sm-4 col-xs-6">
            <?php print render($page['r1c1']); ?>
        </div>
        <div class="col-sm-4 col-xs-6">
            <?php print render($page['r1c2']); ?>
        </div>
        <div class="col-sm-4 col-xs-12">
            <?php print render($page['r1c3']); ?>
        </div>
    </div>
    <div class="row section-area">
        <div class="col-sm-4">
            <?php print render($page['r2c1']); ?>
        </div>
        <div class="col-sm-4">
            <?php print render($page['r2c2']); ?>
        </div>
        <div class="col-sm-4">
            <?php print render($page['r2c3']); ?>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <?php print render($page['footer']); ?>
            </div>
            <div class="col-sm-6 social-media-footer">
                Follow us:
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                    <a href="#"><i class="fa fa-vimeo-square"></i></a>
                    <a href="#"><i class="fa fa-tumblr"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
            </div>
        </div>
    </div>
</footer>

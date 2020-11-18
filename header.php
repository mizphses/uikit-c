<html>
  <head>
    <title><?php add_theme_support( 'title-tag' ); ?></title>
    <meta name="robots" content="index, follow">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <meta name="format-detection" content="telephone=no">

    <!--ファビコンやブックマークアイコンの指定-->
    <link rel="SHORTCUT ICON" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png" />
    <meta name="thumbnail" content="<?php echo get_template_directory_uri(); ?>/metathum.jpg" />
    <?php wp_head(); ?>
  </head>
<body>
  <nav class="uk-navbar-container uk-margin" uk-navbar="mode: click">
    <div class="uk-navbar-left">
      <a class="uk-navbar-item uk-logo" href="#"><?php bloginfo( 'name' ); ?></a>
      </ul>
    </div>
    <div class="uk-navbar-right">

      <ul class="uk-navbar-nav">
          <li>
            <a class="uk-navbar-toggle" uk-navbar-toggle-icon href="#"></a>
              <div class="uk-navbar-dropdown">
                  <ul class="uk-nav uk-navbar-dropdown-nav">
                      <li class="uk-active"><a href="#">Active</a></li>
                      <li><a href="#">Item</a></li>
                      <li class="uk-nav-header">Header</li>
                      <li><a href="#">Item</a></li>
                      <li><a href="#">Item</a></li>
                      <li class="uk-nav-divider"></li>
                      <li><a href="#">Item</a></li>
                  </ul>
              </div>
          </li>
      </ul>
    </div>
  </nav>
  <div class="uk-container uk-container-expand">
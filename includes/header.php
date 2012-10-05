<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo page_title('Page can’t be found'); ?> · <?php echo site_name(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo site_description(); ?>">
    <meta name="author" content="@KostyaKozak">

    <!-- Le styles -->
    <link href="<?php echo theme_url('/assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo theme_url('/assets/css/bootstrap-responsive.css'); ?>" rel="stylesheet">
    <link href="<?php echo theme_url('/assets/css/docs.css'); ?>" rel="stylesheet">
    <link href="<?php echo theme_url('/assets/js/google-code-prettify/prettify.css'); ?>" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

	<?php if(customised()): ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>
    		
    		<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		<?php endif; ?>
	
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo theme_url('/assets/ico/apple-touch-icon-144-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo theme_url('/assets/ico/apple-touch-icon-114-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo theme_url('/assets/ico/apple-touch-icon-72-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo theme_url('/assets/ico/apple-touch-icon-57-precomposed.png'); ?>">

  </head>

  <body data-spy="scroll" data-target=".bs-docs-sidebar">

    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="./index.html">AnchorCMS</a>
          <div class="nav-collapse collapse">
            
			<?php if(has_menu_items()): ?>
			<ul class="nav">
              <?php while(menu_items()): ?>
			  <li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
                <a href="<?php echo menu_url(); ?>"><?php echo menu_name(); ?></a>
              </li>
			  <?php endwhile; ?>
            </ul>
			<?php endif; ?>
          </div>
        </div>
      </div>
    </div>
	
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h1>Blog</h1>
    <p class="lead"><?php echo site_description(); ?></p>
  </div>
</header>
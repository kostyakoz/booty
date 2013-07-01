<!DOCTYPE html>
<html lang="en">
    <head>
    
        <meta charset="utf-8">
        <title><?php echo page_title('Page can’t be found'); ?> — <?php echo site_name(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo site_description(); ?>">
        <meta name="author" content="@KostyaKozak">

        <link href="<?php echo theme_url('/css/bootstrap.css'); ?>" rel="stylesheet">
        <link href="<?php echo theme_url('/css/bootstrap-responsive.css'); ?>" rel="stylesheet">
        <link href="<?php echo theme_url('/css/docs.css'); ?>" rel="stylesheet">
        <link href="<?php echo theme_url('/js/google-code-prettify/prettify.css'); ?>" rel="stylesheet">

        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700|Goudy+Bookletter+1911' rel='stylesheet' type='text/css'>
        
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
	
        <link rel="shortcut icon" href="<?php echo theme_url('/ico/favicon.ico'); ?>">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo theme_url('/ico/apple-touch-icon-144-precomposed.png'); ?>">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo theme_url('/ico/apple-touch-icon-114-precomposed.png'); ?>">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo theme_url('/ico/apple-touch-icon-72-precomposed.png'); ?>">
        <link rel="apple-touch-icon-precomposed" href="<?php echo theme_url('/ico/apple-touch-icon-57-precomposed.png'); ?>">

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
          
          <!-- Uncomment it, if you are want using site name
          ================================================== -->
                    
          <a class="brand" style="display:none;" href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a>
          
          <!--
          ================================================== -->
                    
          <form class="navbar-search pull-right" action="<?php echo search_url(); ?>" method="post">
          
              <input type="text" name="term" class="search-query" placeholder="To search, type and hit enter →" value="<?php echo search_term(); ?>">
              
          </form>          
          
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
    
	<div class="jumbotron masthead">

        <div class="container">
        
            <h1><?php echo blog_title('title'); ?></h1>
            
                <p class="lead"><?php echo site_description(); ?></p>
    
                    <ul class="masthead-links">
                        <li>
                            <a href="//git.io/9fHAOA" >Get on GitHub</a>
                        </li>
                        
                        <li>
                            <a href="<?php echo base_url(); ?>about">About Booty</a>
                        </li>
                        
                        <li>
                            <a href="//anchorthemes.com/" >More Themes</a>
                        </li>
                        
                        <li>
                            Proudly Anchor 0.9
                        </li>
                   </ul>
    
        </div>
        
    </div>
    
    <div class="bs-docs-social">
    
        <div class="container">
        
            <ul class="bs-docs-social-buttons">
      
      
      <li class="follow-btn">
        <a href="https://twitter.com/<?php echo twitter_account(); ?>" class="twitter-follow-button" data-link-color="#0069D6" data-show-count="true">Follow @<?php echo twitter_account(); ?></a>
      </li>
      
      <li class="tweet-btn">
        <a href="https://twitter.com/share" class="twitter-share-button" data-url="https://github.com/Koskz/Booty" data-count="horizontal" data-via="twbootstrap" data-related="mdo:Booty theme for @anchorcms">Tweet</a>
      </li>
      
            </ul>
            
        </div>
        
    </div>

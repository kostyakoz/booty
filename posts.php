<?php theme_include('header'); ?>

<main class="bs-docs-masthead" id="content" role="main">
 <div style="padding: 30px 15px; "><div style="padding: 50px 0;">
  
  <div class="container">
    <h1><?php echo site_name(); ?></h1>
    <p class="lead"><?php echo site_description(); ?></p>
  </div>
  
 </div></div>
</main>

        <div class="container">

            <?php if(has_posts()): ?>
                    
                <?php while(posts()): ?>

                <div class="row">
                    <div class="col-md-12">
                         
                        <article>

                            <h2><a href="<?php echo article_url(); ?>"> <?php echo article_title(); ?></a></h2>
                    
                            <p><?php echo article_markdown(); ?></p>
                                
                            <div class="date">Written <?php echo relative_time(article_time()); ?></div>
        
                        </article>
      
                        <div class="divider"></div>

                    </div>

                </div>
                 
                <?php endwhile; ?>

                <?php if(has_pagination()): ?>
                    
                    <ul class="pager">
		                <li class="next"><?php echo posts_next('Newer &rarr;'); ?></li>
				        <li class="previous"><?php echo posts_prev('&larr; Older'); ?></li>
                    </ul>
                
                <?php endif; ?>
        
                <?php else: ?>
		
		        <div class="row">
                    <div class="col-md-12">
        
                        <article><p>Looks like you have some writing to do!</p></article>

				    </div>
                </div>    
            
                <?php endif; ?>       

        </div>
<?php theme_include('footer'); ?>
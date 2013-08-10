<?php theme_include('header'); ?>

    <div class="container">

        <?php if(has_posts()): ?>
                    
            <div class="posts">
                        
            <div class="row-fluid">
                
                <?php while(posts()): ?>
      
                    <div class="span12">
        
                    <h2><a href="<?php echo article_url(); ?>"> <?php echo article_title(); ?></a></h2>
                    <p><?php echo article_markdown(); ?></p>
                                
                    <div class="and">This article was posted by <?php echo article_author('real_name'); ?> & <?php echo relative_time(article_time()); ?></div>
                            
                    </div>
      
                <?php endwhile; ?>
             
                <?php if(has_pagination()): ?>
                
		        <div class="pagination" style="text-align:center;margin:15px;font-size:20px;">
		            
		            <div class="wrap pagination">
		            
				        <?php echo posts_next('← Newest'); ?>
				        
				        <?php echo posts_prev('Oldest →'); ?>
				        
			       </div>
		 
		        </div>
		
		        <?php endif; ?>
        
                <?php else: ?>
		
		        <div class="span12">
        
                    <h2>Looks like you have some writing to do!</h2>

				</div>
            
                <?php endif; ?>       
    
            </div>
    
        </div>

    </div>

<?php theme_include('footer'); ?>
<?php theme_include('header'); ?>

    <!-- SEARCH DON'T WORK NOW. IN NEXT UPDATE MAYBE... -->
    
    <div class="container">

         <div class="posts">
                        
             <div class="row-fluid">
                        
                 <div class="span12">

                 <h2>You searched for &ldquo;<?php echo search_term(); ?>&rdquo;.</h1>
                 
                 <p>We found <?php echo total_search_results(); ?> <?php echo pluralise(total_search_results(), 'result'); ?> for &ldquo;<?php echo search_term(); ?>&rdquo;. See it below.</p>
                
                 </div>
                 
             </div>
    
            <?php if(has_search_results()): ?>
        
            <div class="row-fluid">
            
                <?php while(search_results()): ?>
            
                <div class="span12">
        
                <h2><a href="<?php echo article_url(); ?>"> <?php echo article_title(); ?></a></h2>
                <p><?php echo article_markdown(); ?></p>
                        
                <div class="and"><?php echo article_author('real_name'); ?> & <?php echo relative_time(article_time()); ?></div>
      
                </div>
                
                <?php endwhile; ?>

            <div class="pagination" style="text-align:center;margin:15px;font-size:20px;">
        
			    <div class="wrap">
			
				    <?php echo posts_next('← Newest'); ?>
				    
				    <?php echo posts_prev('Oldest →'); ?>
				
			    </div>
			
		    </div>
		
        <?php else: ?>
        
		    <div class="span12">
        
                    <h2>Looks like you have some writing to do!</h2>

		    </div>
	    
	    <?php endif; ?>
	           
            </div>
    
        </div>

    </div>

<?php theme_include('footer'); ?>
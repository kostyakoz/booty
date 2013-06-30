<?php theme_include('header'); ?>

    <div class="container">

        <div class="marketing">

            <h1>You searched for &ldquo;<?php echo search_term(); ?>&rdquo;.</h1>
            
                <p class="marketing-byline">We found <?php echo total_search_results(); ?> <?php echo pluralise(total_search_results(), 'result'); ?> for &ldquo;<?php echo search_term(); ?>&rdquo;.</p>
                
        </div>
    
        <?php if(has_search_results()): ?>
        
        <div class="posts">
        
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
			
				<?php echo search_prev('→'); ?>
				<?php echo search_next('←'); ?>
				
			</div>
			
		</div>
		
        <?php else: ?>
        
		    <div class="marketing">
		    
                <p class="marketing-byline">Looks like you have some writing to do!</p>
                
            </div>
	    
	    <?php endif; ?>
	           
            </div>
    
        </div>

    </div>

<?php theme_include('footer'); ?>
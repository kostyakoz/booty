<div class="container">
    <div class="row">
        <div class="span9">
        <?php if(has_posts()): ?>
        <?php while(posts()): ?>
        <div class="page-header">
            <h2><a href="<?php echo article_url(); ?>" style="color:#333;"><?php echo article_title(); ?></a> <small><?php echo relative_time(article_time()); ?></small></h2>
        </div>
		<p><?php echo article_description(); ?></p>
        <?php endwhile; ?>
        <hr><br>
        <div class="pagination" >
            <ul>
                <li><?php echo posts_prev('&larr; Old things'); ?></li> 
                <li><?php echo posts_next('Let&#8217;s go to Next &rarr;'); ?></li>
            </ul>
        </div>
		<?php else: ?>
		<p>Looks like you have some writing to do!</p>
	    <?php endif; ?>  
	    </div>
    </div>
</div>
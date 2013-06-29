<?php theme_include('header'); ?>

<div class="container">


<div class="marketing">

    <h1>Posts</h1>
    <p class="marketing-byline">So cute things and thoughts in my head.</p></div><?php if(has_posts()): ?>
    <div class="posts">
        <div class="row-fluid">
            <?php while(posts()): ?>
      <div class="span12">
        <h2><a href="<?php echo article_url(); ?>"> <?php echo article_title(); ?></a></h2>
        <p><?php echo article_markdown(); ?></p><div class="and"><?php echo article_author('real_name'); ?> & <?php echo relative_time(article_time()); ?></div>
      </div>
      <?php endwhile; ?>
             <?php if(has_pagination()): ?>
		<div class="pagination" style="text-align:center;margin:15px;font-size:20px;">
			<div class="wrap">
				<?php echo posts_prev('→'); ?>
				<?php echo posts_next('←'); ?>
			</div>
		</div>
		<?php endif; ?>
        
        
		<?php else: ?>
		<p>Looks like you have some writing to do!</p>
	    <?php endif; ?>       
    </div>
</div></div>

<?php theme_include('footer'); ?>
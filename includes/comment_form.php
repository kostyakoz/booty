<?php if(comments_open()): ?>
    <h3 style="padding-bottom:15px;padding-top:15px;">Add a note</h3>
    <form id="comment" class="commentform" method="post" action="<?php echo current_url(); ?>#comment">
        <div class="control-group" style="margin-left:20px;">
        <p class="text-success"><?php echo comment_form_notifications(); ?></p><br>
        <div class="controls">
            <div class="input-prepend">
            <span class="add-on"><i class="icon-user"></i></span>
            <?php echo comment_form_input_name('class="input-large" id="inputIcon" type="text" placeholder="My name is..."'); ?>
            </div>
	    </div>
        <div class="controls">
        <div class="input-prepend">
        <span class="add-on"><i class="icon-envelope"></i></span>
        <?php echo comment_form_input_email('class="input-large" id="inputIcon" type="text" placeholder="My mail is..."'); ?>
        </div>
        
		<textarea name="text" rows="8" cols="50" class="input-xxlarge" placeholder="Your message please..."></textarea>
  
        <button type="submit" class="btn btn-success btn-primary btn-large">Send my comment <i class="icon-share-alt icon-white"></i></button>
        </div>
        </div>
    </form>

	<?php if(has_comments()): ?>
	<h3 style="padding-bottom:10px;padding-top:15px;">Some notes</h3>
	<?php while(comments()): ?>
	<div class="span6"><?php echo comment_text(); ?><hr></div>
    <div class="span2"><p class="text-info"><strong><?php echo comment_name(); ?></strong></p></div>
	<?php endwhile; ?>
	<?php endif; ?>
<?php endif; ?>
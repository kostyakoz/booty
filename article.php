<div class="container">
    <div class="row">
        <div class="span9">
            <div class="page-header">
            <h1><?php echo article_title(); ?> <small><?php echo relative_time(article_time()); ?></small></h1>
            </div>
            <p><?php echo article_html(); ?></p>
            <?php include 'includes/comment_form.php'; ?>
		</div>
    </div>
</div>
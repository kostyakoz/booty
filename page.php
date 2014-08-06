<?php theme_include('header'); ?>
<main class="bs-docs-masthead" id="content" role="main" <?php if (($img = article_custom_field('cover_img')) || ($img = page_custom_field('cover_img'))): ?>style="background: url(<?php echo $img; ?>);background-position: center center;
background-size: cover;"<?php endif; ?>>

  <div style="padding: 30px 15px; <?php if (($img = article_custom_field('cover_img')) || ($img = page_custom_field('cover_img'))): ?>background: url(<?php echo theme_url('/img/overlay.png'); ?>);<?php endif; ?>"><div style="padding: 50px 0;">
  
    <div class="container">
      <h1><?php echo page_title(); ?></h1>
    </div>
    
  </div></div>
</main>

    <div class="container">
    
          <div class="row">
                    <div class="col-md-12">
                         
                      <article>
                        
                        <p><?php echo page_content(); ?></p>

                      </article>

                    </div>
          </div>
            
    </div>
<?php theme_include('footer'); ?>
<?php theme_include('header'); ?>
  <main class="bs-docs-masthead" id="content" role="main" <?php if (($img = article_custom_field('cover_img')) || ($img = page_custom_field('cover_img'))): ?>style="background: url(<?php echo $img; ?>);background-position: center center;
background-size: cover;"<?php endif; ?>><div style="padding: 30px 15px; <?php if (($img = article_custom_field('cover_img')) || ($img = page_custom_field('cover_img'))): ?>background: url(<?php echo theme_url('/img/overlay.png'); ?>);<?php endif; ?>"><div style="padding: 50px 0;">
    <div class="container">
      <h1><?php echo article_title(); ?></h1>
      <p class="lead"><?php echo article_description(); ?></p>
      <p class="version">Written <?php echo relative_time(article_time()); ?></p>
    </div>
  </div></div>
</main>

    <div class="container">
    
         <div class="row">
                    <div class="col-md-12">
                         
                        <article>
                    
                          <p><?php echo article_markdown(); ?></p>
                            
                             <?php if(comments_open()): ?>

                        <div class="divider"></div>
                        
                    <div id="disqus_thread"></div>
                    
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'athlk'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
          
                    <?php endif; ?>
                        
                </article>
      
            </div>
            
        </div>
        
    </div>
<?php theme_include('footer'); ?>
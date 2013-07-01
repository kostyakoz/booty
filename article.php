<?php theme_include('header'); ?>

    <div class="container">

        <div class="marketing">

        <!-- Page with one post (article)
        ================================================== -->
                
            <h1>Post</h1>
    
                <p class="marketing-byline">One of many thought.</p></div>
    
            <div class="posts">
            
                <div class="row-fluid">
            
                    <div class="span12">
                    
                        <h2><?php echo article_title(); ?></h2>
                        
                            <p><?php echo article_markdown(); ?></p>
                            
                            <div class="and"><?php echo article_author('real_name'); ?> & <?php echo relative_time(article_time()); ?></div>
                            
                        <?php if(comments_open()): ?>
                        
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
                        
                </div>
      
            </div>
            
        </div>
        
    </div>

<?php theme_include('footer'); ?>
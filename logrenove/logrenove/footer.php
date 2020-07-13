<?php require 'includes/footer.php'; ?>

    </div><!-- End page -->

    <?php 
        
        if(is_page( 'service' )){
            require 'includes/js-footer2.php';

        }else{
            require 'includes/js-footer.php';
        }
    ?>

    <?php if(is_single()): ?>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v6.0&appId=569070580366459&autoLogAppEvents=1"></script>
        <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
        <script>window.twttr = (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0],
            t = window.twttr || {};
            if (d.getElementById(id)) return t;
            js = d.createElement(s);
            js.id = id;
            js.src = "https://platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js, fjs);

            t._e = [];
            t.ready = function(f) {
                t._e.push(f);
            };

            return t;
        }(document, "script", "twitter-wjs"));</script>
    <?php endif; ?>

    <?php wp_footer(); ?>
    <?php do_action( 'footer_extra_script'); ?>
</body>

</html>
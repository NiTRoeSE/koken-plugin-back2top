<?php
 
class kokenback2top extends KokenPlugin {

  function __construct()
  {
    $this->register_hook('before_closing_head', 'back2top');
    
  }
  function back2top()
  {     
        
        ?>
        <link rel="stylesheet" type="text/css" href="/storage/plugins/koken-plugin-back2top/css/back2top.css">
        <script>
        $(document).ready(function(){

            /* create the button and bind it to the end of body*/
            var back_to_top_button = ['<a href="#top" class="back2top_button"></a>'].join("");
            $("body").append(back_to_top_button)

            /*hide the button*/
            $(".back2top_button").hide();

            /* function for scroll */
            $(function () {
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 200) { /* if 200 pixel scrolled down, fade in button */
                        $('.back2top_button').fadeIn();
                    } else {
                        $('.back2top_button').fadeOut();
                    }
                });

                $('.back2top_button').click(function () { /* click the button */
                    $('body,html').animate({
                        scrollTop: 0
                    }, 800);
                    return false;
                });
            });

        });
        </script>
        <?php
        
  }
}
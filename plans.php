<?php
include_once 'sidebar_menu.php'
 ?>
    <div class="main_content">
        <div class="main_header">
            <h1 style="text-align:center;"><u>Travel with us!</u></h1>
        </div>
        <div class="popup" style="margin-bottom: 20px;padding-top: 2%;padding-left: 6%;align-items:center;padding-right:-50px;">
            <img src="ship1.jpg" class="images_for_pop">
            <img src="ship2.jpg" class="images_for_pop">
            <img src="ship3.jpg" class="images_for_pop">
            <img src="ship4.jpg" class="images_for_pop">
            <img src="ship5.jpg" class="images_for_pop">
            <img src="ship6.jpg" class="images_for_pop">
        </div>
        <div class="show">
            <div class="overlay"></div>
            <div class="img-show">
                <span>X</span>
                <img src="">
            </div>
        </div>
        <!--End image popup-->
        <script>
            $(function () {
                "use strict";

                //pop the clicked image
                $(".popup img").click(function () {
                    var $src = $(this).attr("src");
                    $(".show").fadeIn();
                    $(".img-show img").attr("src", $src);
                });

                $(".popup video").click(function () {
                    var $src = $(this).attr("src");
                    $(".show").fadeIn();
                    $(".img-show video").attr("src", $src);
                    $('.popup video').trigger('play');
                });
                //close the pop up image
                $("span, .overlay").click(function () {
                    $(".show").fadeOut();
                    $('.popup video').trigger('pause');
                    //used to pop the image
                    tabs.each(function () {
                        if (!jQuery(this).hasClass(activeClass)) {
                            jQuery(this).hide();
                        }
                    });


                });

            });
        </script>
        <?php
        include_once 'footer.php'
         ?>
    </div>
</body>
</html>

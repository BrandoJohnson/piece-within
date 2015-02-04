<!-- QUOTE AREA -->
<section>
    <div class="quote-container section-content align-center">
        <h3>Need a quote?</h3>
        <p>We do custom work! Please use the <a href="contact">contact page</a> to get ahold of us. Include some personal information and your project description and budget.</p>
        <p><a href="<?php echo home_url(); ?>/contact">Get a free quote &rarr;</a></p>
    </div>
</section>

<section>
    <!-- FOOTER -->
    <footer class="main-footer section-content align-center" id="contact-info">
        <h3>Questions or Comments?</h3>
        <p>You can reach us by phone, email or connect with us through our social networks.</p>
        <p>242.123.4567 </br> <a href="#">hello@metta.com</a></p>

        <ul class="social-icons inline">
            <li><a href="" class="icon-facebook"></a></li>
            <li><a href="" class="icon-twitter"></a></li>
        </ul>
        <hr class="footerhr"/>

        <p>&copy; Copyright <?php echo date('Y'); ?> <?php echo bloginfo('name'); ?><br/>
            Portfolio theme by Brandon Johnson.</p>
        <img class="trees" src="<?php print IMAGES; ?>/trees.png" alt="trees"/>
    </footer>

    <?php wp_footer(); ?>

</section>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
</body>
</html>
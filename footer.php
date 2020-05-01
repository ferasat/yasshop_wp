<footer id="footer" class="container-fluid padd0">
<div class="container bgwhite">
<div class="row">
<div class="col-md-3 col-xs-12 col-sm-12">
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('پانویس 1')) :  endif; ?>
</div>
<div class="col-md-3 col-xs-12 col-sm-12">
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('پانویس 2')) :  endif; ?>
</div>
<div class="col-md-3 col-xs-12 col-sm-12">
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('پانویس 3')) :  endif; ?>
</div>
<div class="col-md-3 col-xs-12 col-sm-12">
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('پانویس 4')) :  endif; ?>
</div>
<div class="footernavar">
<div class="txtlogofo" title="<?php bloginfo('name'); ?>">
<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"> <?php bloginfo('name'); ?></a>
</div>
</div>
</div>
</div>
<div class="navar-abi-f">
<span> طراحی و اجرا <h6 title="طراح سایت طراحی سایت">
<a href="http://tarahsite.net/">طراح سایت</a>
</h6></span>
</div>
</footer>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>
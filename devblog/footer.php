<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<footer class="footer text-center py-2 theme-bg-dark">
 <small class="copyright">&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('由 <a href="http://www.typecho.org">Typecho</a> 强力驱动'); ?>. </small>
		   
	    </footer>
    
    </div> 
   
       
    <!-- Javascript -->       
    <script src="<?php $this->options->themeUrl('assets/plugins/jquery-3.3.1.min.js'); ?>"></script>   
    <script src="<?php $this->options->themeUrl('assets/plugins/popper.min.js'); ?>"></script> 
    <script src="<?php $this->options->themeUrl('assets/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script> 
     <script src="<?php $this->options->themeUrl('assets/js/demo/style-switcher.js'); ?>"></script> 
 <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js" crossorigin="anonymous"></script>    
    
<?php $this->footer(); ?>
</body>
</html> 


<footer id="footer">
    <div class="container">
    <div class="footer_widget">    
            <div class="footer_widget_1"><?php dynamic_sidebar( 'footer-1' ); ?></div>
            <div class="footer_widget_2"><?php dynamic_sidebar( 'footer-2' ); ?></div>
        </div>
    </div>
        <div class="bottom_widget">
            <div class="container">
                <div class="footer">
                    <p><?php echo get_theme_mod('thebox-footer_section');?></p>
                </div>
            </div>
        </div>
     </footer>
     <?php wp_footer(); ?>    
</body>
</html>

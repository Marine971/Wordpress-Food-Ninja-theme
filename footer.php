<footer id="footer_page">
    <div class="container-fluid">
        <section clss="row">
            <div class="col-md-12">
                <div class="d-flex flex-column">
                    <ul class="d-flex justify-content-center">
                    <?php 
                        wp_nav_menu( 
                            array( 
                                'theme_location' => 'my-custom-menu-2',
                                'menu_id' => 'footer_menu',

                            ) 
                        ); 
                    ?>
                    </ul>
                    <p class="d-flex justify-content-center"><?php echo get_theme_mod('Copyright_text_block','Copyright © 2021 Food Ninja Blog. All Rights Reserved.'); ?></p>
                </div>
            </div>
        </section>
    </div>
</footer>
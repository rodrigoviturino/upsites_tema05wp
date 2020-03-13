<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row wrapper">

            <!-- About Logo -->
            <div class="footer__logo col-md-3 d-flex align-items-center flex-column justify-content-center">
                <!-- Logo -->
                <a href="<?php bloginfo('url'); ?>">
                    <?php
                        if( function_exists ('the_custom_logo') ) {
                            the_custom_logo();
                        }
                    ?>
                </a>
                <!-- end Logo -->

                <!-- Rede Social -->
                <ul class="list-rede-social list-unstyled">
                    <li>
                        <?php if(get_theme_mod('up_facebook') ) : ?>
                            <a href="<?php echo get_theme_mod('up_facebook'); ?>">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        <?php endif; ?>

                        <?php if(get_theme_mod('up_twitter') ) : ?>
                            <a href="<?php echo get_theme_mod('up_twitter'); ?>">
                                <i class="fab fa-twitter"></i>
                            </a>
                        <?php endif;?>
                        
                        <?php if( get_theme_mod('up_linkedin') ) : ?>
                            <a href="<?php echo get_theme_mod('up_linkedin'); ?>">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        <?php endif; ?>

                        <?php if( get_theme_mod('up_instagram') ) : ?>
                            <a href="<?php echo get_theme_mod('up_instagram'); ?>">
                                <i class="fab fa-instagram"></i>
                            </a>
                        <?php endif; ?>

                    </li>
                </ul>
                <!-- end Rede Social -->

            </div>
            <!-- end About Logo -->

            <!-- Menu -->
            <div class="footer__menu col-md-2">

                <?php if(get_theme_mod('up_title_menu') ) : ?>
                    <h3 class="title"> <?php echo get_theme_mod('up_title_menu'); ?> </h3>     
                <?php endif; ?>
                
                <?php
                        if( has_nav_menu('main-menu') ) {
                            wp_nav_menu([
                                'theme_location' => 'footer-menu',
                                'fallback_cb' => false,
                                'container_class' => null,
                                'container_id' => 'navbarResponsive',
                                'menu_class' => 'navbar list-unstyled'
                            ]);
                        }
                    ?>

                <!-- <ul class="list-unstyled">
                    <li>
                        <a href="#">
                            About        
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            Our Story
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            Projects
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            Terms of Use
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            Privacy Policy
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            Contact
                        </a>
                    </li>

                </ul> -->

            </div>
            <!-- end Menu -->

            <!-- Courses -->
            <div class="footer__courses col-md-2">

                <?php if(get_theme_mod('up_title_courses') ) : ?>
                    <h3 class="title">
                        <?php echo get_theme_mod('up_title_courses'); ?>
                    </h3>
                <?php endif; ?>

                <ul class="list-unstyled">
                    <li>
                        <a href="#">
                            Painting        
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            Sketch
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            Drawubg
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            Sculpture
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            Digital
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            Lorem
                        </a>
                    </li>

                </ul>
            </div>
            <!-- end Courses -->

            <!-- Topics -->
            <div class="footer__topics col-md-2">
                <?php if(get_theme_mod('up_title_topics') ) : ?>
                    <h3 class="title"> 
                        <?php echo get_theme_mod('up_title_topics'); ?> 
                    </h3>     
                <?php endif; ?>

                <ul class="list-unstyled">
                    <li>
                        <a href="#">
                            Accreditation        
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            Disclosures
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            Student Code
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            Job Opportunitties
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            Campus Safety
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            Contact
                        </a>
                    </li>

                </ul>
            </div>
            <!-- end Topics -->

            <!-- Infos -->
            <div class="footer__info col-md-2">

                <?php if(get_theme_mod('up_title_info') ) : ?>
                    <h3 class="title"> 
                        <?php echo get_theme_mod('up_title_info'); ?> 
                    </h3>     
                <?php endif; ?>             

                <ul class="list-unstyled">
                    <li>
                        <a href="#">
                            Prospective Student        
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            Parents & Families
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            Transfer Students
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            Industry Leader
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            Military Student
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            Contact
                        </a>
                    </li>

                </ul>
            </div>
            <!-- end Infos -->

        </div>
    </div>

    <section class="copyright">
        <?php if(get_theme_mod('up_copyright') ) : ?>
            <p> <?php echo get_theme_mod('up_copyright'); ?> <span class="company">Upsites</span>  - <?php echo Date('Y'); ?></p>
        <?php endif; ?>
    </section>

</footer>
<!-- end Footer -->

<!-- Scripts -->
    <script src=" <?php echo get_template_directory_uri() ?>'/node_modules/bootstrap/dist/js/bootstrap.min.js' "></script>
<!-- end Scripts -->
<script>
let menu = document.querySelector('.header');
let headerClassList = menu.classList

window.addEventListener('scroll', () => {
    if (window.scrollY >= 100) {
        if(!headerClassList.contains('scrollHide')) {
            headerClassList.add('scrollHide')
        }
    } else {
        headerClassList.remove('scrollHide');
    }
});

</script>


</body>
</html>
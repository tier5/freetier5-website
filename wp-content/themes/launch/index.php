<?php get_header(); ?>
        <!-- Intro: Your intro text and MailChimp form. -->
        <div class="row" id="intro">
            <div class="content">
                <!-- Pre-Submission: This is what's displayed before the subscription form has been submitted. -->
                <div id="pre-subscribe">
                    <div class="row" id="copy">
                    <?php
                        $launch_heading = get_theme_mod('launch_heading', __('<h1>Something <strong>really good</strong> is coming <strong>very soon</strong>.</h1>', 'launch'));
                        if(!empty($launch_heading)) :
                            echo $launch_heading;  
                        endif;
                    ?>
                    <?php
                        $launch_text = get_theme_mod('launch_text', __('If you have something new you’re looking to launch, you’re going to want to start building a community of people interested in what you’re launching. The Launch template by is the best way to do just that.', 'launch'));
                        if(!empty($launch_text)) :
                            echo '<p>'.$launch_text.'</p>';  
                        endif;
                    ?>
                    </div>

                    <?php
                        $launch_mailchimp_display = get_theme_mod('launch_mailchimp_display');
                        if( isset($launch_mailchimp_display) && $launch_mailchimp_display != 1 ) :
                            include get_template_directory() . "/assets/helpers/mailchimp.php";
                        endif;
                    ?>
                </div>

                <div class="row" id="social">
                    <?php
                        $launch_social_twitter = get_theme_mod('launch_social_twitter', 'https://www.twitter.com/circathemes');
                        if(!empty($launch_social_twitter)) :
                    ?>
                        <a class="icon twitter" href="<?php echo $launch_social_twitter; ?>"></a>
                    <?php endif; ?>

                    <?php
                        $launch_social_facebook = get_theme_mod('launch_social_facebook', 'https://www.facebook.com/circathemes');
                        if(!empty($launch_social_facebook)) :
                    ?>
                        <a class="icon facebook" href="<?php echo $launch_social_facebook; ?>"></a>
                    <?php endif; ?>

                    <?php
                        $launch_social_email = get_theme_mod('launch_social_email', 'you@domain.com');
                        if(!empty($launch_social_email)) :
                    ?>
                        <a class="icon email" href="mailto:<?php echo $launch_social_email; ?>"></a>
                    <?php endif; ?>
                </div>
                <?php
                    $launch_footer_text = get_theme_mod('launch_footer_text',  __('Powered by <a href="https://www.tier5.us/" rel="" target="_blank" style="font-weight: bold"><strong> Tier5</strong></a>', 'launch'));
                    if(!empty($launch_footer_text)) :
                        echo '<footer class="row">'.$launch_footer_text.'</footer>';  
                    endif;
                ?>
            </div>
        </div>
<?php get_footer(); ?>

<?php
/*
Template Name: About Page
*/
get_header();

echo do_shortcode("[rev_slider alias=\"about-page\"]");

?>

    <div class="container-fluid about-blockOne-container">
        <div class="container">
            <?php if ( have_rows( 'block_one' ) ) : ?>
                <?php while ( have_rows( 'block_one' ) ) : the_row(); ?>
                    <h1 class="about-blockOne-heading"><?php the_sub_field( 'heading' ); ?></h1>
                    <?php the_sub_field( 'body_text' ); ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <br/>
            <br/>
            <?php if ( have_rows( 'block_two' ) ) : ?>
                <?php while ( have_rows( 'block_two' ) ) : the_row(); ?>
                    <h2 class="about-blockTwo-heading"><?php the_sub_field( 'heading' ); ?></h2>
                    <p class="about-blockOne-bodyText"><?php the_sub_field( 'body_text' ); ?></p>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

    <div class="container-fluid about-blockTwo-container">
        <div class="container">
            <?php if ( have_rows( 'block_three' ) ) : ?>
                <?php while ( have_rows( 'block_three' ) ) : the_row(); ?>
                    <h2 class="about-blockTwo-heading"><?php the_sub_field( 'heading' ); ?></h2>
                    <p class="about-blockTwo-bodyText"><?php the_sub_field( 'body_text' ); ?></p>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

    <div class="container-fluid about-blockThree-container">
        <div class="container">
            <?php if ( have_rows( 'block_four' ) ) : ?>
                <?php while ( have_rows( 'block_four' ) ) : the_row(); ?>
                    <h2 class="about-blockThree-heading"><?php the_sub_field( 'heading' ); ?></h2>
                    <div class="row display-flex">
                        <div class="col-md">
                            <div class="featured-fix about-blockThree-containers z-depth-2">
                                <h3 class="about-blockThree-names"><?php the_sub_field( 'team_member_one_name' ); ?></h3>
                                <p class="about-blockThree-bodyText"><?php the_sub_field( 'team_member_one_description_' ); ?></p>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="featured-fix about-blockThree-containers z-depth-2">
                                <h3 class="about-blockThree-names"><?php the_sub_field( 'team_member_two_name' ); ?></h3>
                                <p class="about-blockThree-bodyText"><?php the_sub_field( 'team_member_two_description' ); ?></p>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div align="center">
                        <?php $button_text_and_link = get_sub_field( 'button_text_and_link' ); ?>
                        <?php if ( $button_text_and_link ) { ?>
                            <a href="<?php echo $button_text_and_link['url']; ?>" target="<?php echo $button_text_and_link['target']; ?>"><button type="button" class="btn about-blockThree-button"><?php echo $button_text_and_link['title']; ?></button></a>
                        <?php } ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>


    <div class="container-fluid about-blockFour-container">
        <div class="container">
            <h2 class="about-blockFour-heading">Contact Us</h2>
            <p class="about-blockFour-text">
                <i class="fas fa-envelope-open fa-lg about-blockFour-icons"></i> E-mail: <a class="about-blockFour-text" href="mailto:homeresettlement@gmail.com">homeresettlement@gmail.com</a>
            </p>
            <p class="about-blockFour-text">
                <i class="fas fa-phone fa-lg about-blockFour-icons"></i> Phone: <a class="about-blockFour-text" href="tel:618-484-8487">618-484-8487</a>
            </p>
        </div>
    </div>



<?php
get_footer();
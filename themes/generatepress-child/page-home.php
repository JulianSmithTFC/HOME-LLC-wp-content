<?php
/*
Template Name: Home Page
*/
get_header();

echo do_shortcode("[rev_slider alias=\"Home Page\"]");

if ( have_rows( 'block_one' ) ) : ?>
    <?php while ( have_rows( 'block_one' ) ) : the_row(); ?>
        <div class="container-fluid home-blockOne-container">
            <div class="row">
                <div class="col-md">
                    <div class="home-blockOne-containers">
                        <h3 class="home-blockOne-headings"><?php the_sub_field( 'heading_one' ); ?></h3>
                        <p class="home-blockOne-bodyText"><?php the_sub_field( 'body_text_one' ); ?></p>
                    </div>
                </div>
                <div class="col-md">
                    <div class="home-blockOne-containers">
                        <h3 class="home-blockOne-headings"><?php the_sub_field( 'heading_two' ); ?></h3>
                        <p class="home-blockOne-bodyText"><?php the_sub_field( 'body_text_two' ); ?></p>
                    </div>
                </div>
                <div class="col-md">
                    <div class="home-blockOne-containers">
                        <h3 class="home-blockOne-headings"><?php the_sub_field( 'heading_three' ); ?></h3>
                        <p class="home-blockOne-bodyText"><?php the_sub_field( 'body_text_three' ); ?></p>
                    </div>
                </div>

            </div>
            <div align="center">
                <?php $button_text_and_link = get_sub_field( 'button_text_and_link' ); ?>
                <?php if ( $button_text_and_link ) { ?>
                    <a href="<?php echo $button_text_and_link['url']; ?>" target="<?php echo $button_text_and_link['target']; ?>"><button type="button" class="btn home-blockOne-button"><?php echo $button_text_and_link['title']; ?></button></a>
                <?php } ?>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows( 'block_two' ) ) : ?>
    <?php while ( have_rows( 'block_two' ) ) : the_row(); ?>
        <div class="container-fluid home-blockTwo-container">
            <div class="container">
                <h2 class="home-blockTwo-heading" align="center"><?php the_sub_field( 'heading' ); ?></h2>

                <br/>

                <div class="card-deck">
                    <div class="card mb-4 home-blockTwo-cards">
                        <div class="home-blockTwo-bodyText">
                            <h3 class="home-blockTwo-headings" align="center">Basic</h3>
                            <ul class="fa-ul">
                                <li class="home-blockTwo-listText"><span class="fa-li" ><i class="fas fa-check-square home-blockTwo-icons"></i></span>Informational package</li>
                                <li class="home-blockTwo-listText"><span class="fa-li" ><i class="fas fa-check-square home-blockTwo-icons"></i></span>Demographics</li>
                                <li class="home-blockTwo-listText"><span class="fa-li" ><i class="fas fa-check-square home-blockTwo-icons"></i></span>School grade</li>
                                <li class="home-blockTwo-listText"><span class="fa-li" ><i class="fas fa-check-square home-blockTwo-icons"></i></span>Crime statistics</li>
                                <li class="home-blockTwo-listText"><span class="fa-li" ><i class="fas fa-check-square home-blockTwo-icons"></i></span>Local attractions</li>
                                <li class="home-blockTwo-listText"><span class="fa-li"><i class="far fa-square home-blockTwo-icons"></i></span>Assist in finding homes</li>
                                <li class="home-blockTwo-listText"><span class="fa-li"><i class="far fa-square home-blockTwo-icons"></i></span>Resource package</li>
                                <li class="home-blockTwo-listText"><span class="fa-li"><i class="far fa-square home-blockTwo-icons"></i></span>Scout home</li>
                                <li class="home-blockTwo-listText"><span class="fa-li"><i class="far fa-square home-blockTwo-icons"></i></span>Find homes</li>
                                <li class="home-blockTwo-listText"><span class="fa-li"><i class="far fa-square home-blockTwo-icons"></i></span>Home view</li>
                            </ul>
                            <h4 class="home-blockTwo-pricingText" align="center">$100</h4>
                        </div>
                    </div>


                    <div class="card mb-4 home-blockTwo-cards">
                        <div class="home-blockTwo-bodyText">
                            <h3 class="home-blockTwo-headings" align="center">Standard</h3>
                            <ul class="fa-ul">
                                <li class="home-blockTwo-listText"><span class="fa-li" ><i class="fas fa-check-square home-blockTwo-icons"></i></span>Informational package</li>
                                <li class="home-blockTwo-listText"><span class="fa-li" ><i class="fas fa-check-square home-blockTwo-icons"></i></span>Demographics</li>
                                <li class="home-blockTwo-listText"><span class="fa-li" ><i class="fas fa-check-square home-blockTwo-icons"></i></span>School grade</li>
                                <li class="home-blockTwo-listText"><span class="fa-li" ><i class="fas fa-check-square home-blockTwo-icons"></i></span>Crime statistics</li>
                                <li class="home-blockTwo-listText"><span class="fa-li" ><i class="fas fa-check-square home-blockTwo-icons"></i></span>Local attractions</li>
                                <li class="home-blockTwo-listText"><span class="fa-li" ><i class="fas fa-check-square home-blockTwo-icons"></i></span>Assist in finding homes</li>
                                <li class="home-blockTwo-listText"><span class="fa-li" ><i class="fas fa-check-square home-blockTwo-icons"></i></span>Resource package</li>
                                <li class="home-blockTwo-listText"><span class="fa-li" ><i class="fas fa-check-square home-blockTwo-icons"></i></span>Scout home</li>
                                <li class="home-blockTwo-listText"><span class="fa-li"><i class="far fa-square home-blockTwo-icons"></i></span>Find homes</li>
                                <li class="home-blockTwo-listText"><span class="fa-li"><i class="far fa-square home-blockTwo-icons"></i></span>Home view</li>
                            </ul>
                            <h4 class="home-blockTwo-pricingText" align="center">$250</h4>
                        </div>
                    </div>

                    <div class="card mb-4 home-blockTwo-cards">
                        <div class="home-blockTwo-bodyText">
                            <h3 class="home-blockTwo-headings" align="center">Premium</h3>
                            <ul class="fa-ul">
                                <li class="home-blockTwo-listText"><span class="fa-li" ><i class="fas fa-check-square home-blockTwo-icons"></i></span>Informational package</li>
                                <li class="home-blockTwo-listText"><span class="fa-li" ><i class="fas fa-check-square home-blockTwo-icons"></i></span>Demographics</li>
                                <li class="home-blockTwo-listText"><span class="fa-li" ><i class="fas fa-check-square home-blockTwo-icons"></i></span>School grade</li>
                                <li class="home-blockTwo-listText"><span class="fa-li" ><i class="fas fa-check-square home-blockTwo-icons"></i></span>Crime statistics</li>
                                <li class="home-blockTwo-listText"><span class="fa-li" ><i class="fas fa-check-square home-blockTwo-icons"></i></span>Local attractions</li>
                                <li class="home-blockTwo-listText"><span class="fa-li" ><i class="fas fa-check-square home-blockTwo-icons"></i></span>Assist in finding homes</li>
                                <li class="home-blockTwo-listText"><span class="fa-li" ><i class="fas fa-check-square home-blockTwo-icons"></i></span>Resource package</li>
                                <li class="home-blockTwo-listText"><span class="fa-li" ><i class="fas fa-check-square home-blockTwo-icons"></i></span>Scout home</li>
                                <li class="home-blockTwo-listText"><span class="fa-li" ><i class="fas fa-check-square home-blockTwo-icons"></i></span>Find homes</li>
                                <li class="home-blockTwo-listText"><span class="fa-li" ><i class="fas fa-check-square home-blockTwo-icons"></i></span>Home view</li>
                            </ul>
                            <h4 class="home-blockTwo-pricingText" align="center">$325</h4>
                        </div>
                    </div>

                </div>

                <div align="center">
                    <?php $button_text_and_link = get_sub_field( 'button_text_and_link' ); ?>
                    <?php if ( $button_text_and_link ) { ?>
                        <a href="<?php echo $button_text_and_link['url']; ?>" target="<?php echo $button_text_and_link['target']; ?>"><button type="button" class="btn home-blockTwo-button"><?php echo $button_text_and_link['title']; ?></button></a>
                    <?php } ?>
                </div>

            </div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>

<?php
get_footer();
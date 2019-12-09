<?php
/*
Template Name: Plans Page
*/
get_header();

echo do_shortcode("[rev_slider alias=\"plans-page\"]");

?>

    <div class="container-fluid plans-blockOne-container">
        <div class="container">
            <?php if ( have_rows( 'block_one' ) ) : ?>
                <?php while ( have_rows( 'block_one' ) ) : the_row(); ?>
                    <h1 class="plans-blockOne-heading"><?php the_sub_field( 'heading' ); ?></h1>
                    <p class="plans-blockOne-bodyText"><?php the_sub_field( 'body_text' ); ?></p>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

    <div class="container-fluid home-blockTwo-container">
    <div class="container">

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

    <div class="container-fluid plans-blockTwo-container">
        <div class="container">
            <?php if ( have_rows( 'block_two' ) ) : ?>
                <?php while ( have_rows( 'block_two' ) ) : the_row(); ?>
                    <h2 class="plans-blockTwo-heading"><?php the_sub_field( 'heading' ); ?></h2>
                    <?php the_sub_field( 'body_text' ); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

    <div class="container-fluid plans-blockThree-container">
        <div class="container">
            <form id="contact-form" name="contact-form" action="<?php echo get_stylesheet_directory_uri(); ?>/mail.php" method="POST">

                <div class="row">
                    <div class="col">
                        <label class="plans-blockThree-inputLables" for="fname">First *</label>
                        <input type="text" id="fname" name="fname" class="form-control rounded-0 plans-blockThree-inputText" placeholder="First name" required>
                    </div>
                    <div class="col">
                        <label class="plans-blockThree-inputLables" for="lname">Last *</label>
                        <input type="text" id="lname" name="lname" class="form-control rounded-0 plans-blockThree-inputText" placeholder="Last name" required>
                    </div>
                </div>
                <br/>

                <label class="plans-blockThree-inputLables" for="email">Email *</label>
                <input type="email" id="email" name="email" class="form-control mb-4 rounded-0 plans-blockThree-inputText" placeholder="ex. john@email.com" required>

                <label class="plans-blockThree-inputLables" for="phone">Phone # *</label>
                <input type="text" id="phone" name="phone" class="form-control mb-4 rounded-0 plans-blockThree-inputText" placeholder="Phone Number" required>

                <div class="row">
                    <div class="col">
                        <label class="plans-blockThree-inputLables" for="priceRangeFrom">From</label>
                        <input type="text" id="priceRangeFrom" name="priceRangeFrom" class="form-control" placeholder="$0.00">
                    </div>
                    <div class="col">
                        <label class="plans-blockThree-inputLables" for="priceRangeTo">To</label>
                        <input type="text" id="priceRangeTo" name="priceRangeTo" class="form-control" placeholder="$10,000.00">
                    </div>
                </div>

                <br/>

                <label class="plans-blockThree-inputLables" for="maxDistance">Maximum distance from job</label>
                <select id="maxDistance" name="maxDistance" class="form-control rounded-0 plans-blockThree-inputText">
                    <option selected>10 miles</option>
                    <option>20 miles</option>
                    <option>30 miles</option>
                </select>

                <br/>

                <label class="plans-blockThree-inputLables" for="homeType">What type of home are you looking for (house, apartment, etc.)</label>
                <input type="text" id="homeType" name="homeType" class="form-control mb-4 rounded-0 plans-blockThree-inputText" placeholder="house, apartment, etc.">

                <label class="plans-blockThree-inputLables" for="bedroomNum">Number of bedrooms</label>
                <select id="bedroomNum" name="bedroomNum" class="form-control rounded-0 plans-blockThree-inputText">
                    <option selected>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </select>

                <br/>

                <label class="plans-blockThree-inputLables" for="bathroomNum">Number of bathrooms</label>
                <select id="bathroomNum" name="bathroomNum" class="form-control rounded-0 plans-blockThree-inputText">
                    <option selected>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </select>

                <br/>

                <label class="plans-blockThree-inputLables" for="specialEquip">Do you need special equipment?</label>
                <textarea class="form-control rounded-0 plans-blockThree-inputText"  id="specialEquip" name="specialEquip" rows="3" placeholder="Wheel chair ramp, etc."></textarea>

                <br/>

                <label class="plans-blockThree-inputLables" for="garageSize">Garage size</label>
                <select id="garageSize" name="garageSize" class="form-control rounded-0 plans-blockThree-inputText">
                    <option selected>1 car</option>
                    <option>2 car</option>
                    <option>3 car</option>
                    <option>4 car</option>
                    <option>no preference</option>
                </select>

                <br/>

                <label class="plans-blockThree-inputLables" for="comments">Any other request or comments</label>
                <textarea class="form-control rounded-0 plans-blockThree-inputText"  id="comments" name="comments" rows="3" placeholder="Any other request or comments"></textarea>

            </form>
            <br/>
            <p>
                *Please remember that when renting a house often times the utilities are not included.
            </p>
            <div class="text-center text-md-left">
                <a class="btn plans-blockThree-formButton" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>

        </div>
    </div>

<?php
get_footer();
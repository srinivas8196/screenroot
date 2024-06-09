<?php
/*
Template name: Home page
*/

get_header();

?>



<!-- Desktop Slider Section -->
<section class="slider desktop-slider">

                    <?php
                    $banner1 = get_field('banner1');
                    $banner2 = get_field('banner2');
                    $banner3 = get_field('banner3img');

                    ?> 
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('<?php echo $banner1['url']; ?>');">
                <div class="slide-content">
                    <h1>Breakaway from old. <br><span class="highlight">Upgrade.</span></h1>
                    <p>Power your breakaway digital banking model with world's leading Temenos partner</p>
                    <button class="cta-button">Book your consultation</button>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url('<?php echo $banner2['url']; ?>');">
                <div class="slide-content">
                    <h1>Lower risks and improve your <span class="highlight">Efficiency</span></h1>
                    <p>with our Temenos <br> Upgrade Studio</p>
                    <button class="cta-button">Read More</button>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url('<?php echo $banner3['url']; ?>');">
                <div class="slide-content">
                    <h1>Social Development Bank in Europe achieves Temenos T24 upgrade in just <br><span class="highlight">Four</span> Months</h1>
                    <p>See how our T24 upgrade helped the bank overcome regulatory challenges, expand the business
                        and improve service management</p>
                    <button class="cta-button">Read Case Study</button>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<!-- Mobile Slider Section -->
<section class="slider mobile-slider">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/banner-img01.jpg');">
                <div class="slide-content">
                    <h1>Breakaway from old.<br><span class="highlight">Upgrade.</span></h1>
                    <p>Power your breakaway digital banking model with world's leading Temenos partner</p>
                    <button class="cta-button">Book your consultation</button>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/banner-img02.jpg');">
                <div class="slide-content">
                    <h1>Lower risks and improve your <span class="highlight">Efficiency</span></h1>
                    <p>with our Temenos <br> Upgrade Studio</p>
                    <button class="cta-button">Read More</button>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/banner-img03.jpg');">
                <div class="slide-content">
                    <h1>Social Development Bank in Europe achieves Temenos T24 upgrade in just <span class="highlight"> <br>Four</span> Months</h1>
                    <p>See how our T24 upgrade helped the bank overcome regulatory challenges, expand the business
                        and improve service management</p>
                    <button class="cta-button">Read Case Study</button>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<section class="breakaway">
    <div class="shadow-section">
        <div class="container">
            <div class="breakaway-content">
                <div class="left">
                    <h1>Your big break to <br><span class="highlight">breakaway</span></h1>
                    <p>Future-ready your banking enterprise with LTI and Syncordis</p>
                </div>
                <div class="right">
                    <p>Keeping Temenos up to date is key for digital transformation of any banking enterprise. You
                        need a partner with both deep domain expertise and experience in serving enterprises your
                        size. Syncordis has been exclusively implementing Temenos core banking solutions for close
                        to two decades. We are dedicated to succeed, with you in the center. In fact, our deep
                        domain understanding in automating banking products and processes makes us poised to upgrade
                        you to T24 faster, and more cost effectively, than ever.</p>
                    <a href="#" class="read-more">Read More</a>
                </div>
            </div>

            <hr style="margin-bottom: 20px;">

            <div class="offerings">
                <h2>Here’s a glimpse of our upgrade offerings:</h2>
                <div class="offering">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/strategy.png" alt="Upgrade strategy and management">
                    <p>Upgrade strategy and management</p>
                </div>
                <div class="offering">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/business.png" alt="Business change management">
                    <p>Business change management</p>
                </div>
                <div class="offering">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/management.png" alt="Environment and software management">
                    <p>Environment and software management</p>
                </div>
                <div class="offering">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/service.png" alt="Technical upgrade services">
                    <p>Technical upgrade services</p>
                </div>
                <div class="offering">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/functional.png" alt="Functional upgrade services">
                    <p>Functional upgrade services</p>
                </div>
                <div class="offering">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/testing.png" alt="Testing and post-upgrade support">
                    <p>Testing and post-upgrade support</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="t24-upgrade">
    <div class="container">
        <h2>Up your ante with a Temenos <br> <span class="highlight"> T24 upgrade</span> </h2>
        <p>Banking is an ever-evolving field. It is imperative for banking enterprises to keep up with the ongoing technology evolutions.
            Enhancements that come with a T24 upgrade do just that: they let you take advantage of the latest technology and functional offerings developed by the R&D team at Temenos,
            maximizing the value of your Temenos software by amplifying its outcomes. We at Syncordis are equipped to accelerate said outcomes with our T24 upgrade tools and accelerators.</p>

        <div class="accelerators-header">
            <h3>Our accelerators</h3>
            <!-- Add Navigation -->
            <!-- <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div> -->
        </div>

        <div class="swiper-container1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="accelerator">
                        <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-auto-discovery.png" alt="Auto Discovery"></div>
                        <div class="info">
                            <h3>Auto Discovery</h3>
                            <p>Automates manual upgrade assessment on L3 analysis</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="accelerator">
                        <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-auto-conversion.png" alt="Auto Conversion"></div>
                        <div class="info">
                            <h3>Auto Conversion</h3>
                            <p>Automates code conversion across L3, reducing manual effort by 30-40%</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="accelerator">
                        <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-auto-authorize.png" alt="Auto Authorize"></div>
                        <div class="info">
                            <h3>Auto Authorize</h3>
                            <p>Automates authorization of records released during upgrade</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="accelerator">
                        <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-intelligent.png" alt="Auto Authorize"></div>
                        <div class="info">
                            <h3>Auto intelligent</h3>
                            <p>Automates authorization of records released during upgrade</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <!-- <div class="swiper-pagination"></div> -->
        </div>
    </div>
</section>


<section class="reach-out">
    <div class="container">
        <h2>Upgrade to the T with <br> <span class="highlight"> a breakthrough T24 partner </span></h2>
        <p> <b>What makes LTI and Syncordis a breakaway choice</b></p>
        <p>Apart from LTI's deep industry expertise in banking and Syncordis's dedicated domain expertise in Temenos; we are positioned to manage upgrades better via our active collaborations with Temenos Upgrade Services. While our dedicated Upgrade Factory enables us with in-depth Temenos expertise and resources; it also effectively helps us serve you flexibly, keeping in mind your enterprise's constraints, existing frameworks, and expected outcomes.</p>
    </div>
</section>

<section class="form-container">
        <h3>Reach out to solve</h3>
        <p>Are you ready for a seamless T24 upgrade?</p>
        <form action="#">
            <div class="form-row">
                <input type="text" name="name" placeholder="Name">
                <input type="text" name="organization" placeholder="Organization">
            </div>
            <div class="form-row">
                <input type="email" name="email" placeholder="Email">
                <input type="text" name="phone" placeholder="Phone">
            </div>
            <div class="form-row">
                <select id="country" name="country">
                    <option value="India">&nbsp;India</option>
                    <option value="USA">&nbsp;USA</option>
                    <option value="Australia">&nbsp;Australia</option>
                </select>

            </div>
            <button type="submit">Book a Assessment</button>
        </form>
    </section>
<?php

get_footer();
?>
<?php 
// Template Name: Home
get_header();
?>
<section id="section-home-hero">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>I’m Chris Richter ­— <br/>
                    a Designer and Developer<br/>
                    from Charleston, SC.
                </h1>
            </div>
        </div>
    </div>
</section>
<section id="section-home-contact">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4">
                <h2>Let's Talk.</h2>
                <p>I’m available for freelance and consultation work. Drop me a line and let's build something awesome together. </p>
            </div>
            <div class="col-12 col-lg-6 offset-lg-2">
                <?php echo do_shortcode('[contact-form-7 id="10" title="Contact form 1"]'); ?>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>
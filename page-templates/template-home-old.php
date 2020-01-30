<?php 
// Template Name: Home - Old
get_header();
?>
<style>
#section-home-work {
    padding: 4rem 0;
}
.work-cat-preview {
    width: 100%;
    padding-top: 80%;
    background: #231F20;
}
</style>
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
<section id="section-home-work">
    <div class="container">
        <div class="row align-items-center py-5">
            <div class="col-12 col-lg-6">
                <div class="work-cat-preview work-cat-preview-web">

                </div>
            </div>
            <div class="col-12 col-lg-4 offset-lg-1">
                <h3>Project Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</p>
            </div>
        </div>
        <div class="row align-items-center py-5">
            <div class="col-12 col-lg-4 offset-lg-1">
                <h3>Logos</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</p>
            </div>
            <div class="col-12 col-lg-6 offset-lg-1">
                <div class="work-cat-preview work-cat-preview-web">

                </div>
            </div>
        </div>
        <div class="row align-items-center py-5">
            <div class="col-12 col-lg-6">
                <div class="work-cat-preview work-cat-preview-web">

                </div>
            </div>
            <div class="col-12 col-lg-4 offset-lg-1">
                <h3>Project Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</p>
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
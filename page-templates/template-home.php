<?php 
// Template Name: Home
get_header();


if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        the_content();
    endwhile; 
endif; 

?>
<style>
.home-blog {
    display: grid;
    grid-template-columns: 10% 30% auto 10%;
    grid-template-rows: auto auto auto auto;
    grid-column-gap: 40px;
    grid-row-gap: 40px;
    width: 100%;
    overflow: hidden;
}
.home-blog__post {
    position: relative;
}
.home-blog__post img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.home-blog__post h3 {
    color: white;
    position: absolute;
    bottom: 1.5rem;
    left: 2rem;
}
.home-blog__post-title {
    font-size: 1.25rem;
}
.home-blog__post:nth-child(1) {
    grid-column-start: 3;
    grid-column-end: 5;
    grid-row-start: 1;
    grid-row-end: 3;
}
.home-blog__post:nth-child(2) {
    grid-column-start: 1;
    grid-column-end: 3;
    grid-row-start: 2;
    grid-row-end: 4;
}
.home-blog__post:nth-child(3) {
    grid-column-start: 3;
    grid-column-end: 4;
    grid-row-start: 3;
    grid-row-end: 5;
}
.home-blog__text {
    grid-column-start: 2;
    grid-column-end: 3;
    grid-row-start: 4;
    grid-row-end: 5;
    height: 200px;
}
.home-contact {
    padding: 14rem 30% 10rem;
    text-align: center;
}
</style>
<div class="home-blog">
    <div class="home-blog__post">
        <img src="/wp-content/uploads/2019/11/Screen-Shot-2018-12-13-at-8.43.09-AM.png" alt="" />
        <h3 class="home-blog__post-title">This is the title of the 1 work item</h3>
    </div>
    <div class="home-blog__post">
        <img src="/wp-content/uploads/2019/11/Screen-Shot-2018-12-13-at-8.43.09-AM.png" alt="" />
        <h3 class="home-blog__post-title">This is the title of the 2 work item</h3>
    </div>
    <div class="home-blog__post">
        <img src="/wp-content/uploads/2019/11/Screen-Shot-2018-12-13-at-8.43.09-AM.png" alt="" />
        <h3 class="home-blog__post-title">This is the title of the 3 work item</h3>
    </div>
    <div class="home-blog__text">
        <h2>Recent Work</h2>
        <a href="/work">View All Work</a>
    </div>
</div>
<div class="home-contact">
    <h2>Let’s build something awesome together.</h2>
    <a href="">Get in touch</a>
</div>
<div class="colophon" style="text-align: center; padding: 1rem 0;">
Copyright 2019 Chris Richter. All Rights reserved.
</div>

<?php
get_footer();
?>
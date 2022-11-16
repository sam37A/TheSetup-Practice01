<?php  
/**  
* Template Name: Home
*  
* @package TheSetup-Practice01
 
*  
*/  
?>  
<?php get_header(); ?>
<!-- code goes here -->

<!-- another way is using variable and if condition -->
 
<!-- one way to get data using custom field is the_field('') function -->
<div class="hero-container">
<h1 class="hero-title"><?php the_field('page_title')?></h1>
 <p class="paragraph-acf">
    <?php the_field('description_paragraph')?>
 </p>
 <div class="image-container">
    <img  class ="hero-image"src="<?php the_field('upload_image')?>" alt=""> 
 </div>

</div>

 
 <!-- for description paragraph use this if condition -->
 
 
 
 
 
 
 


<?php get_template_part('template-parts/hero')?>  




<?php get_footer();?>

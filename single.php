<?php $categories = get_the_category($post->ID);//$post->ID?>
<?php $thumbnail = get_the_post_thumbnail($post->ID);
$author_id = $post->post_author;
?>
<?php get_header();?>
<section class="col-md-8 offset-md-2">
    <div class="container_single">
        <div class="container_category col-md-1 col-sm-2 col-xl-1">
            <p id="category"><?php foreach($categories as $category){
                echo $category->name; }?></p>
        </div>
        <h2 class = "post-title"><?php the_title(); ?></h2>
        <p id="date" ><?php echo get_the_date( 'M dS Y' ); ?></p>
        <figure>
            <?= $thumbnail ?>
        </figure>
        <div id="card-avatar" >
        <img id='avatar' src="<?= get_avatar_url($author_id) ?>" alt="<?= $author_name ?>">
            <p> <?php
                $author_name = get_the_author_meta('nickname', $author_id); 
                echo $author_name;?> 
            </p>
            
        </div>
        
    
    </div>   
        
    

</section>

<?php  get_footer();?>

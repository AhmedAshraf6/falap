<?php get_header() ?>
<div class="container singlepost mt-5">

  <?php 
        
        if(have_posts()){
          while(have_posts()){  
            the_post(); ?>
  <div class="card single-post">
    <?php edit_post_link('Edit <i class="fas fa-pencil"></i>') ?>
    <!-- <img src=<?php the_post_thumbnail(); ?> class="card-img-top" alt="..."> -->
    <?php the_post_thumbnail('',['class'=>'card-img-top img-thumbnail custom-image-height w-50 ']); ?>
    <div class="card-body">
      <h3 class="card-title">
        <a href="<?php the_permalink() ?>">
          <?php the_title()?>
        </a>
      </h3>
      <p class="card-text"><?php the_excerpt(); ?></p>
    </div>
    <ul class="list-group list-group-flush ">
      <li class="list-group-item d-flex align-items-center   gap-2">
        <i class="fas fa-user fa-fw fa-lg"></i>
        <span><?php the_author_posts_link() ?></span>
      </li>
      <li class="list-group-item d-flex  align-items-center  gap-2">
        <i class="fas fa-calendar fa-fw fa-lg"></i>
        <span><?php the_date('F j, Y') ?></span>
      </li>
      <li class="list-group-item d-flex  align-items-center  gap-2">
        <i class="fas fa-comments fa-fw fa-lg"></i>
        <?php comments_popup_link() ?>
      </li>
    </ul>
    <div class="card-body">
      <i class="fas fa-tags fa-fw fa-lg"></i>
      <?php the_category(', ') ?>
      <!-- <a href="#" class="card-link d-flex  align-items-center  gap-2">
            <span>item2</span>
          </a> -->
    </div>
  </div>
  <?php
          }
        }
        comments_template();
 ?>

  <p class="author-stats">
    user Posts count <span class="post-count"><?php echo count_user_posts(get_the_author_meta('ID')) ?></span>
    user profile link: <?php the_author_posts_link() ?>
  </p>

</div>

<?php get_footer() ?>
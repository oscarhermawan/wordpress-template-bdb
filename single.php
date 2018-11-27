<!-- SINGLE PHP -->
<?php
  get_header();?>
  <div class="row bg">
    <div class="col-md-1"> </div>
    <div class="col-md-10">

      <?php
        if(have_posts()):
          while(have_posts()): the_post(); ?>
            <div class="col-md-12">
                <div class="titlePage-single-post">
                  <?php the_title();?>
                </div>
                <div class="content-page">
                  <?php the_content();?>
                </div>
            </div>
      <?php
        endwhile;
      else:
        echo 'nothing has post';
      endif;
      ?>

    </div>
    <div class="col-md-1"> </div> <!-- JUST FOR 1-10- AND 1 FOR CLOSE TAG GRID -->
  </div>

<?php
  get_footer();
?>

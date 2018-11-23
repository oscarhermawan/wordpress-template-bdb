<?php
  get_header();?>
  <div class="row">

    <div class="col-md-1">
    </div>
    <div class="col-md-10">
      <div class="titlePage">
        <p><?php bloginfo('name'); ?></p>
      </div>
      <div class="descriptionPage">
        <p><?php bloginfo('description'); ?></p>
      </div>
      <div class="row">
        <?php
        global $query_string;
        query_posts( 'category_name=News&posts_per_page=3' );
          if(have_posts()):
            while(have_posts()): the_post(); ?>
              <div class="col-md-4">
                <div class="news-post">
                  <?php
                   if (has_post_thumbnail( get_the_ID() ) ): ?>
                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' ); ?>
                    <img src="<?php echo $image[0]; ?>" />
                  <?php endif; ?>
                  <div>News</div>
                  <h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
                </div>
              </div>
        <?php
          endwhile;
        else:
          echo 'nothing has post';
        endif;
        ?>
      </div>
      <center><button type="button" class="margin-top-btn"><a href="">SEE ALL NEWS</a></button></center>
    </div>
    <div class="col-md-1">
    </div>


    <!-- DATE AND PERSON FROM HEADER -->
    <div class="col-md-12 background-dark-gray">
       <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
          FOR UP TO DATE PRICING ENTER YOUR DATES BELOW <br/> <br/>
          <form action="action">
            <div class="form-row">
              <div class="form-group col-md-3">
                  <input type="text" name="tanggal" class="tanggal" />
              </div>

              <div class="form-group col-md-7">
                <div class="input-group mb-3">
                  <select class="custom-select" id="inputGroupSelect02">
                    <option selected>Total Person</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                  </select>
                  <div class="input-group-append">
                    <label class="input-group-text" for="inputGroupSelect02">Options</label>
                  </div>
                </div>
              </div>

              <div class="form-group col-md-2">
                <button type="button" id="check-tour-btn" class="btn btn-danger">CHECK </button>
              </div>
            </div>
          </form>
        </div>

        <div class="col-md-2">
        </div>
      </div>
    </div>
    <!-- END DATE AND PERSON FROM HEADER -->


    <div class="col-md-1"> </div>
    <div class="col-md-10">
      <!-- PACKAGES -->
      <div class="row" id="tour-packages">
        <div class="col-md-6">
          <div class="box-for-padding">
            <img src="http://cdnmedia.endeavorsuite.com/images/organizations/bc96f21d-28fb-46c2-bfb3-8e7292427224/inventory/2035437/176131_KTM-350-EXC-F-front-left-MY-2018-studio-e1494915765993.jpg" alt="1/2 Day Tabanan Jungle" width="100%"> <br/>
            <div class="box-packages">
              <i>From Rp. 23000</i>
              <p>1/2 Day Tabanan Jungle<p>
                <ul>
                  <li> Located in Tabanan, beautiful city </li>
                  <li> World Class Motorbike</li>
                  <li> Nice Istructor will teach you</li>
                  <li> Located in Tabanan, beautiful city</li>
                  <li> World Class Motorbike</li>
                  <li> Nice Istructor will teach you</li>
                </ul>
              <button type="button" class="btn btn-light">SEE DETAILS</button>
              <button type="button" class="btn btn-danger">BOOK NOW</button>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="box-for-padding">
            <img src="http://wallpaperlepi.com/wp-content/uploads/2014/09/KTM-RC8-Motor-Sport-Wallpaper.jpg" alt="1/2 Day Tabanan Jungle" width="100%"> <br/>
            <div class="box-packages">
              <i>From Rp. 23000</i>
              <p>1/2 Day Tabanan Jungle<p>
                <ul>
                  <li> Located in Tabanan, beautiful city </li>
                  <li> World Class Motorbike</li>
                  <li> Nice Istructor will teach you</li>
                  <li> Located in Tabanan, beautiful city</li>
                  <li> World Class Motorbike</li>
                  <li> Nice Istructor will teach you</li>
                </ul>
              <button type="button" class="btn btn-light">SEE DETAILS</button>
              <button type="button" class="btn btn-danger">BOOK NOW</button>
            </div>
          </div>
        </div>
      </div>
      <!-- END PACKAGES -->

      <!-- FOR GALLERY -->
      <div class="row">
        <div class="col-md-12">
          <div class="box-gallery">
            <img src="http://webneel.com/wallpaper/sites/default/files/images/08-2018/3-nature-wallpaper-mountain.jpg" alt="img">
          </div>

          <div class="box-gallery">
            <img src="https://images.pexels.com/photos/68147/waterfall-thac-dray-nur-buon-me-thuot-daklak-68147.jpeg?cs=srgb&dl=landscape-nature-water-68147.jpg&fm=jpg" alt="img">
          </div>

          <div class="box-gallery">
            <img src="https://images.pexels.com/photos/257360/pexels-photo-257360.jpeg?auto=compress&cs=tinysrgb&h=350" alt="img">
          </div>

          <div class="box-gallery">
            <img src="https://images.template.net/wp-content/uploads/2016/04/16084008/Whistler-Coast-Mountains-Dock-Nature-Wallpaper.jpg" alt="img">
          </div>

          <div class="box-gallery">
            <img src="https://images.pexels.com/photos/257360/pexels-photo-257360.jpeg?auto=compress&cs=tinysrgb&h=350" alt="img">
          </div>

          <div class="box-gallery">
            <img src="http://webneel.com/wallpaper/sites/default/files/images/08-2018/3-nature-wallpaper-mountain.jpg" alt="img">
          </div>

          <div class="box-gallery">
            <img src="https://images.template.net/wp-content/uploads/2016/04/16084008/Whistler-Coast-Mountains-Dock-Nature-Wallpaper.jpg" alt="img">
          </div>

          <div class="box-gallery">
            <img src="https://images.pexels.com/photos/68147/waterfall-thac-dray-nur-buon-me-thuot-daklak-68147.jpeg?cs=srgb&dl=landscape-nature-water-68147.jpg&fm=jpg" alt="img">
          </div>
        </div>
      </div>
      <!-- END FOR GALLERY -->

    </div>
    <div class="col-md-1"> </div> <!-- JUST FOR 1-10- AND 1 FOR CLOSE TAG GRID -->
  </div>

<?php
  get_footer();
?>

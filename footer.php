  <footer>
    <div class="row background-color-gray padding-footer">
      <div class="col-md-1">

      </div>
      <div class="col-md-10">
        <div class="seperlima-box">
          BALI DIRT BIKES
          <div>
            Call Us from Mon - Sun 08.00 - 23.00 (GMT +8) <br/>
            <img src="https://cdn2.iconfinder.com/data/icons/pittogrammi/142/04-512.png" width="15px" alt="logo-hp"/> 089768239 <br/>
            <img src="https://cdn3.iconfinder.com/data/icons/social-media/512/Skype_A-512.png" width="15px" alt="logo-skype"/> Kimasurfaris <br/>
            <img src="https://cdn3.iconfinder.com/data/icons/linecons-free-vector-icons-pack/32/mail-512.png" width="15px" alt="logo-email"/> info@kimasurf.com <br/>
          </div>
        </div>
        <div class="seperlima-box">
          PACKAGES
          <div>
            <?php
              $args = array('theme_location' => 'packages');
              wp_nav_menu($args);
            ?>
          </div>
        </div>
        <div class="seperlima-box">
          ABOUT
          <div>
            <?php
              $args = array('theme_location' => 'about');
              wp_nav_menu($args);
            ?>
          </div>
        </div>
        <div class="seperlima-box">
          BALI INFO
          <div>
            Bali Life <br/>
            Bali Bikes
          </div>
        </div>
        <div class="seperlima-box">
          LANGUAGE
          <div>
            EN | DE
          </div>
        </div>
        <div class="clearfloat">
        </div>

        <span class="copyrigth">
          &copy; 2018 Bali Dirt Bikes
        </span>
        <span class="copyrigth">
          Term &amp; Conditions
        </span>
        <span class="copyrigth">
          GDPR Statement
        </span>
        <span class="copyrigth">
          Data Privacy Policy
        </span>
        <span class="copyrigth">
          Find Us on &nbsp; &nbsp; <img src="https://seeklogo.com/images/I/instagram-new-2016-logo-4773FE3F99-seeklogo.com.png" width="20px" alt="ig-logo" />&nbsp; &nbsp;<img src="https://seeklogo.com/images/F/facebook-logo-C64946D6D2-seeklogo.com.png" width="20px" alt="ig-logo" />
        </span>
      </div>
      <div class="col-md-1">

      </div>
    </div>
  </footer>
    <?php wp_footer(); ?>
  </body>
</html>

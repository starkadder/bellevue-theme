<!--  Sidebar -->

        <div class="col-sm-3 col-sm-offset-1 band-sidebar">

	   <?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
	       <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		  <?php dynamic_sidebar( 'home_right_1' ); ?>
	   </div><!-- #primary-sidebar -->
	   <?php endif; ?>

          <div class="sidebar-module">
            <a href="<?php echo wp_login_url(); ?>">Site Admin</a>
           </div>
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
          <div class="sidebar-module">
          <h4>Archives</h4>
            <ol class="list-unstyled">
             <?php wp_get_archives( 'type=monthly' ); ?>
            </ol>
          </div>
          <div class="sidebar-module">


            <ol class="list-unstyled">
              <!--
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              -->
              <li>
                  <a href="https://www.facebook.com/group.php?gid=123858433381&amp;ref=ts&amp;v=info">
                      <img title="Facebook" alt="Facebook" src="https://socialmediawidgets.files.wordpress.com/2014/03/facebook1.png" width="35" height="35" />
                  </a>
              </li>
            </ol>
          </div>


        </div><!-- /.band-sidebar -->


<div class="col-md-12 nav-link-wrap mb-5">
  <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <?php
          // Check rows exists.
          if( have_rows('meals', 'option') ):

          // Loop through rows.
          while( have_rows('meals', 'option') ) : the_row();

              // Load sub field value.
              $category_name = get_sub_field('category_name');
              ?>
    <a class="nav-link <?php if(get_row_index() == 1) echo 'active'?>" id="v-pills-<?php echo get_row_index(); ?>-tab"
      data-toggle="pill" href="#v-pills-<?php echo get_row_index(); ?>" role="tab"
      aria-controls="v-pills-<?php echo get_row_index(); ?>" aria-selected="true"><?php echo $category_name; ?></a>
    <?php 
                    endwhile;
                  endif;
          ?>
  </div>
</div>


<div class="col-md-12 d-flex align-items-center">

  <div class="tab-content ftco-animate" id="v-pills-tabContent">
    <?php
          // Check rows exists.
          if( have_rows('meals', 'option') ):

          // Loop through rows.
          while( have_rows('meals', 'option') ) : the_row();
              ?>
    <div class="tab-pane fade <?php if(get_row_index() == 1) echo 'active show'; ?>"
      id="v-pills-<?php echo get_row_index(); ?>" role="tabpanel"
      aria-labelledby="v-pills-<?php echo get_row_index(); ?>-tab">
      <div class="row">

        <?php
                // Check rows exists.
                if( have_rows('category', 'option') ):

                  // Loop through rows.
                  while( have_rows('category', 'option') ) : the_row();
        
                      // Load sub field value.
                      $image = get_sub_field('image')['url'];
                      $title = get_sub_field('title');
                      $description = get_sub_field('description');
                      $price = get_sub_field('price');
                      $button_name = get_sub_field('button_name');
                      $button_url = get_sub_field('button_url');
                      ?>

        <div class="col-md-4 text-center">
          <div class="menu-wrap">
            <a href="#" class="menu-img img mb-4" style="background-image: url(<?php echo $image; ?>);"></a>
            <div class="text">
              <h3><a href="#"><?php echo $title; ?></a></h3>
              <p><?php echo $description; ?></p>
              <p class="price"><span>$<?php echo $price; ?></span></p>
              <p><a href="<?php echo $button_url; ?>"
                  class="btn btn-white btn-outline-white"><?php echo $button_name; ?></a></p>
            </div>
          </div>
        </div>


        <?php
                    // End loop.
                  endwhile;
                  endif; ?>

      </div>
    </div>

    <?php 
                    endwhile;
                  endif;
          ?>

  </div>
</div>
</div>
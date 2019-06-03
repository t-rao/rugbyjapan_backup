<?php

/*Template Name: City Template*/
get_header(); ?>


  <section class="container-fluid city_hero_container

  <?php if(is_page('yokohama')){?>yokohama<?php }?>
  <?php if(is_page('saitama')){?>saitama<?php }?>

  ">

    <div class="hero_text">
      <h2>Things to do in
        <?php if(is_page('yokohama')){?>Yokohama<?php }?>
        <?php if(is_page('saitama')){?>Saitama<?php }?>
      </h2>
    </div>
  </section>

  <section class="container city">
  <a id="topbutton"  href="#"></a>
    <div class="tab_container">
      <div class="inner_tab_container">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="pills-venu-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><img src="<?php echo get_theme_file_uri('/img/picture_view.png');?>" alt=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-map-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><img src="<?php echo get_theme_file_uri('/img/map_viewdisable.png');?>" alt=""></a>
          </li>
        </ul>
        <div class="drop_down_filter" id="refine">
          <select name='org_id' class="fillters category">
            <option value="showall">Category</option>
            <option value="showall">All</option>
            <option value="restaurant_cafe" >Restaurant/Cafe</option>
            <option value="art_culture">Art & Culture</option>
            <option value="shopping" >Shopping</option>
            <option value="nightlife" >Bars & Nightlife</option>
            <option value="things_to_do" >Things to do</option>
          </select>
        </div>
        <p class="plus">+</p>
        <div class="checkbox">
          <input type='checkbox' name='thing' value='kidplay' id="thing"/><label for="thing"></label>
        </div>
        <p class="kids_lable">Family-friendly <img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?> " alt=""></p>
      </div>
        </div>
  </section>

  <?php
  if(is_page('yokohama')){
     include 'yokohama_ve.php';
   } elseif(is_page('saitama')){
     include 'saitama_ve.php';
   }?>


<?php get_footer(); ?>

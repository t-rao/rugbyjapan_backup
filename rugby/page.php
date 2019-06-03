<?php get_header(); ?>

<section class="container main_map">
  <div class="row">
    <div class="col-lg-8 col-md-12 col-sm-12 map">
      <div class="inner_map">
        <h1> <?php bloginfo('name');?> </h1>
        <h3><?php bloginfo('description')?> </h3>
        <a href="" class="waterdrop twelve animated12 fadeInDown" data-toggle="modal" data-target="#oitastad"><img src="/wp-content/uploads/2019/05/pin-12.png" alt=""></a>
          <a href="" class="waterdrop eleven animated11 fadeInDown" data-toggle="modal" data-target="#kumaotostad"><img src="/wp-content/uploads/2019/05/pin-11.png" alt=""></a>
          <a href="" class="waterdrop ten animated10 fadeInDown" data-toggle="modal" data-target="#fukuokastad"><img src="/wp-content/uploads/2019/05/pin-10.png" alt=""></a>
          <a href="" class="waterdrop nine animated9 fadeInDown" data-toggle="modal" data-target="#kobestad"><img src="/wp-content/uploads/2019/05/pin-9.png" alt=""></a>
          <a href="" class="waterdrop eight animated8 fadeInDown" data-toggle="modal" data-target="#hanazonostad"><img src="/wp-content/uploads/2019/05/pin-8.png" alt=""></a>
          <a href="" class="waterdrop seven animated7 fadeInDown" data-toggle="modal" data-target="#toyotastad"><img src="/wp-content/uploads/2019/05/pin-7.png" alt=""></a>
          <a href="" class="waterdrop six animated6 fadeInDown" data-toggle="modal" data-target="#shizukastad"><img src="/wp-content/uploads/2019/05/pin-6.png" alt=""></a>
          <a href="" class="waterdrop five animated5 fadeInDown" data-toggle="modal" data-target="#yokohamastad"><img src="/wp-content/uploads/2019/05/pin-5.png" alt=""></a>
          <a href="" class="waterdrop four animated4 fadeInDown" data-toggle="modal" data-target="#tokyostad"><img src="/wp-content/uploads/2019/05/pin-4.png" alt=""></a>
          <a href="" class="waterdrop three animated3 fadeInDown" data-toggle="modal" data-target="#kumagayastad"><img src="/wp-content/uploads/2019/05/pin-3.png" alt=""></a>
          <a href="" class="waterdrop two animated2 fadeInDown" data-toggle="modal" data-target="#kamaishistad"><img src="/wp-content/uploads/2019/05/pin-2.png" alt=""></a>
          <a href="" class="waterdrop one animated1 fadeInDown" data-toggle="modal" data-target="#sapporastad"><img src="/wp-content/uploads/2019/05/pin-1.png" alt=""></a>
      </div>
    </div>
    <div class="col-lg-4 col-md-12 col-sm-12 stadium_list">
      <ul class="row">
            <li class="col-lg-12">
              <a href="#"data-toggle="modal" data-target="#sapporastad"><span>1</span> Sapporo Dome </a>
            </li>
            <li class="col-lg-12">
              <a href="#" data-toggle="modal" data-target="#kamaishistad"><span>2</span> Kamaishi Recovery Memorial Stadium</a>
            </li>
            <li class="col-lg-12">
              <a href="#" data-toggle="modal" data-target="#kumagayastad"><span>3</span> Kumagaya Rugby Stadium</a>
            </li>
            <li class="col-lg-12">
              <a href="#"data-toggle="modal" data-target="#tokyostad"><span>4</span> Tokyo Stadium</a>
            </li>
            <li class="col-lg-12">
              <a href="#"data-toggle="modal" data-target="#yokohamastad"><span>5</span> International Stadium Yokohama</a>
            </li>
            <li class="col-lg-12">
              <a href="#"data-toggle="modal" data-target="#shizukastad"><span>6</span> Shizuoka Stadium Ecopa</a>
            </li>

            <li class="col-lg-12">
              <a href="#" data-toggle="modal" data-target="#toyotastad"><span>7</span> City of Toyota Stadium</a>
            </li>
            <li class="col-lg-12">
              <a href="#" data-toggle="modal" data-target="#hanazonostad"><span>8</span> Hanazono Rugby Stadium</a>
            </li>
            <li class="col-lg-12">
              <a href="#" data-toggle="modal" data-target="#kobestad"><span>9</span> Kobe Misaki Stadium</a>
            </li>
            <li class="col-lg-12">
              <a href="#" data-toggle="modal" data-target="#fukuokastad"><span>10</span> Fukuoka Hakatanomori Stadium</a>
            </li>
            <li class="col-lg-12">
              <a href="#" data-toggle="modal" data-target="#kumaotostad"><span>11</span> Kumamoto Stadium</a>
            </li>
            <li class="col-lg-12">
              <a href="#" data-toggle="modal" data-target="#oitastad"><span>12</span> Oita Stadium</a>
            </li>
      </ul>
    </div>
  </div>
  <div class="row matches_info">
    <div class="col-12 col-lg-9 col-md-12 col-sm-8">
      <section id="postsCarousel">
        <div class="counter_num">
          <div class="count_dates">
            <p><span class="day"></span><strong class="date"></strong><span class="month"></span></p>
          </div>
          <div class="cout_days">
          <p id="demo"></p>
          </div>
          <div class="days_text text-white">
            <p>Days to go!</p>
          </div>
        </div>
        <h4 class="text-center rec_ven">Recommended Venue</h4>
        <div class="row mt-1">
        <div class="col-12 ">
          <div class="multiple-items">
          <div class="success-box_cvenue">
            <div class="venu_grid">
              <div class="venu_img"><img src="<?php echo get_theme_file_uri('/img/namibia_canada.jpg');?>" class="img-fluid" alt=""></div>
              <div>
                <h3>Stay beneath the railway tracks</h3>
                <p><img src="<?php echo get_theme_file_uri('/img/location_icon2x.png');?>" alt="">Tinys Yokohama Hinodecho</p>
                <a href="" class="more_btn" data-toggle="modal" data-target="#venu">MORE</a>
              </div>
            </div>
          </div>
          <div class="danger-box_cvenue">
            <div class="venu_grid">
              <div class="venu_img"><img src="<?php echo get_theme_file_uri('/img/mingil.jpg');?>" class="img-fluid" alt=""></div>
              <div>
                <h3>Mingle with local fans</h3>
                <p><img src="<?php echo get_theme_file_uri('/img/location_icon2x.png');?>" alt="">Oriental Table</p>
                <a href="" class="more_btn" data-toggle="modal" data-target="#venu">MORE</a>
              </div>
            </div>
          </div>
          <div class="success-box_cvenue">
            <div class="venu_grid">
              <div class="venu_img"><img src="<?php echo get_theme_file_uri('/img/namibia_canada.jpg');?>" class="img-fluid" alt=""></div>
              <div>
                <h3>Stay beneath the railway tracks</h3>
                <p><img src="<?php echo get_theme_file_uri('/img/location_icon2x.png');?>" alt="">Tinys Yokohama Hinodecho</p>
                <a href="" class="more_btn" data-toggle="modal" data-target="#venu">MORE</a>
              </div>
            </div>
          </div>
          <div class="danger-box_cvenue">
            <div class="venu_grid">
              <div class="venu_img"><img src="<?php echo get_theme_file_uri('/img/mingil.jpg');?>" class="img-fluid" alt=""></div>
              <div>
                <h3>Mingle with local fans</h3>
                <p><img src="<?php echo get_theme_file_uri('/img/location_icon2x.png');?>" alt="">Oriental Table</p>
                <a href="" class="more_btn" data-toggle="modal" data-target="#venu">MORE</a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>

<!-- <div class="match_update row">
    <div class="col-2 offset-1 date_p">
      <div class="today_date">
        <span class="day"></span>
        <p class="date"></p>
        <span class="month"></span>
      </div>

    </div>
    <h2 class="col-6">Today’s Match & Featured Venue</h3>
      <div class="col-3">
        <ul class="row match_dates" >
          <li>Match:</li>
          <li><p>37</p></li>
          <li><p>38</p></li>
          <li><p>39</p></li>
          <li><p>40</p></li>
        </ul>
      </div>
  </div> -->
       <!-- <div class="row mt-1">
          <div class="col-12 ">
            <div class="multiple-items">
            <div class="success-box">
              <p class="match_pool">Pool B, Match 37</p>
               <div class="match_titles"><h2><img src="<?php echo get_theme_file_uri('/img/namibia_flag.png');?>" alt="">NAMIBIA</h2> <h2>V</h2> <h2>CANADA <img src="<?php echo get_theme_file_uri('/img/Canada_flag.png');?>" alt=""></h2></div>
              <address>
                Local time kick off 12:15 <br>
                Kamaishi Recovery Memorial Stadium, <br>
                Iwate Prefecture, Kamaishi City
              </address>
              <div class="dotted_border"></div>
              <div class="venu_grid">
                <div class="venu_img"><img src="<?php echo get_theme_file_uri('/img/namibia_canada.jpg');?>" class="img-fluid" alt=""></div>
                <div>
                  <h3>Stay beneath the railway tracks</h3>
                  <p><img src="<?php echo get_theme_file_uri('/img/location_icon2x.png');?>" alt="">Tinys Yokohama Hinodecho</p>
                  <a href="" class="more_btn" data-toggle="modal" data-target="#venu">MORE</a>
                </div>
              </div>
            </div>
            <div class="danger-box">
              <p class="match_pool">Pool C, Match 38</p>
               <div class="match_titles"><h2><img src="<?php echo get_theme_file_uri('/img/usa_flag.png');?>" alt="">USA</h2> <h2>V</h2> <h2>TONGA <img src="<?php echo get_theme_file_uri('/img/tonga_flag.png');?>" alt=""></h2></div>
              <address>
                Local time kick off 14:45 <br>
                Hanazono Rugby Stadium, <br>
                Osaka Prefecture, Higashiosaka City
              </address>
              <div class="dotted_border"></div>
              <div class="venu_grid">
                <div class="venu_img"><img src="<?php echo get_theme_file_uri('/img/mingil.jpg');?>" class="img-fluid" alt=""></div>
                <div>
                  <h3>Mingle with local fans</h3>
                  <p><img src="<?php echo get_theme_file_uri('/img/location_icon2x.png');?>" alt="">Oriental Table</p>
                  <a href="" class="more_btn" data-toggle="modal" data-target="#venu">MORE</a>
                </div>
              </div>
            </div>
            <div class="success-box"><p class="match_pool">Pool B, Match 37</p>
             <div class="match_titles"><h2><img src="<?php echo get_theme_file_uri('/img/namibia_flag.png');?>" alt="">NAMIBIA</h2> <h2>V</h2> <h2>CANADA <img src="<?php echo get_theme_file_uri('/img/Canada_flag.png');?>" alt=""></h2></div>
            <address>
              Local time kick off 12:15 <br>
              Kamaishi Recovery Memorial Stadium, <br>
              Iwate Prefecture, Kamaishi City
            </address>
            <div class="dotted_border"></div>
            <div class="venu_grid">
              <div class="venu_img"><img src="<?php echo get_theme_file_uri('/img/namibia_canada.jpg');?>" class="img-fluid" alt=""></div>
              <div>
                <h3>Stay beneath the railway tracks</h3>
                <p><img src="<?php echo get_theme_file_uri('/img/location_icon2x.png');?>" alt="">Tinys Yokohama Hinodecho</p>
                <a href="" class="more_btn" data-toggle="modal" data-target="#venu">MORE</a>
              </div>
            </div></div>
            <div class="danger-box">
              <p class="match_pool">Pool C, Match 38</p>
               <div class="match_titles"><h2><img src="<?php echo get_theme_file_uri('/img/usa_flag.png');?>" alt="">USA</h2> <h2>V</h2> <h2>TONGA <img src="<?php echo get_theme_file_uri('/img/tonga_flag.png');?>" alt=""></h2></div>
              <address>
                Local time kick off 14:45 <br>
                Hanazono Rugby Stadium, <br>
                Osaka Prefecture, Higashiosaka City
              </address>
              <div class="dotted_border"></div>
              <div class="venu_grid">
                <div class="venu_img"><img src="<?php echo get_theme_file_uri('/img/mingil.jpg');?>" class="img-fluid" alt=""></div>
                <div>
                  <h3>Mingle with local fans</h3>
                  <p><img src="<?php echo get_theme_file_uri('/img/location_icon2x.png');?>" alt="">Oriental Table</p>
                  <a href="" class="more_btn" data-toggle="modal" data-target="#venu">MORE</a>
                </div>
              </div>
            </div>
            </div>
          </div>
          </div> -->

      </section>
    </div>
    <div class="col-12 col-lg-3 col-md-12 col-sm-4">
      <div class="banner">
        <a href="https://tickets.rugbyworldcup.com/?changeLanguageTo=en&tkhrts=1505965573&crk=&key=&tkhrrt=Safetynet&tkhrq=2e449c42-67d8-4133-89e9-92d3e3b3d7a2&tkhrp=bdf92389-909a-4891-b9a6-5c91339747ae&uc=&tkhrh=190d434078078acbf265b2d934f3f474&n=&tkhre=rwc2019&tkhrc=tickethour&e=
" target="_blank">          <img src="<?php echo get_theme_file_uri('/img/banner-012x.jpg');?>" alt="" /></a>
      </div>
    </div>
  </div>
</section>
<section class="container mb-4">
  <div class="row">
    <div class="col-12 text-center about" id="about">
      <h3><span>About</span> Japan Rugby Special</h3>
      <p>As Japan gears up for the Rugby World Cup 2019, there's no better time to explore the country and everything it has to offer. There will be a total of 48 rugby matches playing at 12 different stadiums across Japan – including in Saitama and Yokohama
        – and each venue is surrounded by a host of restaurants, cafés, bars and attractions. So to keep the excitement alive before and after the matches, go explore these rugby destinations with our top picks and you’ll have the time of your life.</p>
    </div>
  </div>
</section>
<?php get_footer(); ?>

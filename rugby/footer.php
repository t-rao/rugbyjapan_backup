
<?php if (is_front_page() || is_home() ) { ?>
<footer class="text-center align-middle home_footer">
<div class="container">
  <p class="align-middle">Copyright Ⓒ <?php echo Date('Y');?> ORIGINAL Inc. </p>
</div>
</footer>
<?php }  else {?>
  <footer class="text-center align-middle">
      <div class="container">
        <div class="row">
          <div class="col-md-2 col-12">
            <div class="footer_logo">
             <a href="https://www.timeout.com/tokyo?cid=rugbyjp" target="_blank">
             <!-- <img src="<?php echo get_theme_file_uri('/img/footer_logo2x.png');?>" alt="" class="img-fluid"> -->
             <object width="80px;" height="80px;" data="<?php echo get_theme_file_uri('/img/produceby.svg');?>" type="image/svg+xml"></object>
            </a>
            </div>
          </div>
          <div class="col-md-8 col-12 text-center copy_r">
            <div>
              <p class="align-middle">Copyright Ⓒ 2019 ORIGINAL Inc. </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
<?php }?>


<?php if (!is_home() ) : ?>

<?php endif;?>







<!-- Mirai Yokochoa -->
<div class="modal fade" id="venumirai" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header ml-auto">
        <button type="button" class="close " data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="<?php echo get_theme_file_uri('/img/close.png');?>" class="img-responsive" alt=""></span>
        </button>
      </div>
      <div class="modal-body p-2">
        <div>
          <div class="row">
            <div class="col-12 ">
              <div class="filler_info">
                <p class="resta">Restaurant/Cafe</p>
                <!-- <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div> -->
              </div>
              <div class="modal_container_venu">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="venu_pic">
                      <img src="/wp-content/uploads/2019/05/13.jpg" class="img-responsive" alt="">
                    </div>
                    <h3>Eat out at a yokocho</h3>
                    <p>Hungry? If you are at Minato Mirai, check out the alleyway-inspired dining floors at Dockyard Garden. Spread across B1 and B2 of the Landmark Tower, you’ll find a variety of restaurants serving international cuisines as well as classic Japanese dishes such as gyoza, udon and yakitori. At the World Beer Bar & Restaurant, you can enjoy over 250 kinds of international beer, of which 20 are on tap.</p>
                  </div>
                  <div class="col-12 col-md-6" >
                    <div class="venu_name">
                      <p>Venue name:</p>
                      <p>Mirai Yokocho</p>
                    </div>
                    <div class="venu_contact">
                      <p>Contact:</p>
                      <a class="button_purple" href="https://www.yokohama-landmark.jp/food/" target="_blank">VISIT WEBSITE</a>
                      <a class="button_purple" href="tel:045 788 8888">CALL VENUE</a>
                    </div>
                    <div class="venu_address">
                      <p>Address:</p>
                      <p>Yokohama Landmark Tower, Dockyard Garden B1-2F, 2-2-1 Minatomirai, Nishi-ku, Yokohama-shi Kanagawa</p>
                      <a class="button_purple" href="https://www.google.com/maps?q=35.454972, 139.631250" target="_blank">Google MAP</a>
                    </div>
                    <div class="venu_open">
                      <p>Opening hours:</p>
                      <p>Hours vary by venue</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
      </div>
    </div>
  </div>
</div>

<!-- Yokohama Museum of Art -->
<div class="modal fade" id="venumuse" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header ml-auto">
        <button type="button" class="close " data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="<?php echo get_theme_file_uri('/img/close.png');?>" class="img-responsive" alt=""></span>
        </button>
      </div>
      <div class="modal-body p-2">
        <div>
          <div class="row">
            <div class="col-12">
              <div class="filler_info">
                <p class="aculture">Art & Culture</p>
                <!-- <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div> -->
              </div>
              <div class="modal_container_venu">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="venu_pic">
                      <img src="/wp-content/uploads/2019/05/8.jpg" class="img-responsive" alt="">
                    </div>
                    <h3>See worlds collide through art</h3>
                    <p>Yokohama has played a major role in the history of Japanese photography so it’s fitting that this art museum holds a substantial photo collection. This art-enthusiast hotspot displays works showing an interplay of European and Japanese modern and contemporary art.</p>
                  </div>
                  <div class="col-12 col-md-6" >
                    <div class="venu_name">
                      <p>Venue name:</p>
                      <p>Yokohama Museum of Art</p>
                    </div>
                    <div class="venu_contact">
                      <p>Contact:</p>
                      <a class="button_purple" href="https://yokohama.art.museum/" target="_blank">VISIT WEBSITE</a>
                      <a class="button_purple" href="tel:045 221 0300">CALL VENUE</a>
                    </div>
                    <div class="venu_address">
                      <p>Address:</p>
                      <p>3-4-1 Minatomirai, Nishi-ku, Yokohama-shi Kanagawa</p>
                      <a class="button_purple" href="https://www.google.com/maps?q=35.457056, 139.630972" target="_blank">Google MAP</a>
                    </div>
                    <div class="venu_open">
                      <p>Opening hours:</p>
                      <p>10am- 6pm</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="venumarine" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header ml-auto">
        <button type="button" class="close " data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="<?php echo get_theme_file_uri('/img/close.png');?>" class="img-responsive" alt=""></span>
        </button>
      </div>
      <div class="modal-body p-2">
        <div>
          <div class="row">
            <div class="col-12">
              <div class="filler_info">
                <p class="shopping">Shopping</p>
                <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>
              </div>
              <div class="modal_container_venu">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="venu_pic">
                      <img src="/wp-content/uploads/2019/05/30.png" class="img-responsive" alt="">
                    </div>
                    <h3>Shop in the sea breeze</h3>
                    <p>Located by the seaside in Minato Mirai, this open-air mall is like a small town complete with a selection of unique shops, cosy mini-parks and trendy restaurants. It's also a favourite for locals walking their dogs, while another sort of animal-related quirk awaits by the bathrooms.</p>
                  </div>
                  <div class="col-12 col-md-6" >
                    <div class="venu_name">
                      <p>Venue name:</p>
                      <p>Marine & Walk Yokohama</p>
                    </div>
                    <div class="venu_contact">
                      <p>Contact:</p>
                      <a class="button_purple" href="https://www.marineandwalk.jp/" target="_blank">VISIT WEBSITE</a>
                    <a class="button_purple" href="tel:045 680 6101">CALL VENUE</a>
                    </div>
                    <div class="venu_address">
                      <p>Address:</p>
                      <p>1-3-1 Shinko, Naka-ku, Yokohama Kanagawa</p>
                      <a class="button_purple" href="https://www.google.com/maps?q=35.454611, 139.642139" target="_blank">Google MAP</a>
                    </div>
                    <div class="venu_open">
                      <p>Opening hours:</p>
                      <p>N/A</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="venurugby7" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header ml-auto">
        <button type="button" class="close " data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="<?php echo get_theme_file_uri('/img/close.png');?>" class="img-responsive" alt=""></span>
        </button>
      </div>
      <div class="modal-body p-2">
        <div>
          <div class="row">
            <div class="col-12">
              <div class="filler_info">
                <p class="nlife">Bars & Nightlife</p>
                <!-- <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div> -->
              </div>
              <div class="modal_container_venu">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="venu_pic">
                      <img src="/wp-content/uploads/2019/05/9.jpg" class="img-responsive" alt="">
                    </div>
                    <h3>Kick off your rugby night</h3>
                    <p>As its name suggests, this sports bar is where rugby fans gather. You can combine craft beer, meals and your passion for rugby here: watch the games on its four screens while enjoying a premium selection of craft beer from around the world, including those from the current top rugby countries.</p>
                  </div>
                  <div class="col-12 col-md-6" >
                    <div class="venu_name">
                      <p>Venue name:</p>
                      <p>Rugby Diner 7 oath's</p>
                    </div>
                    <div class="venu_contact">
                      <p>Contact:</p>
                      <a class="button_purple" href="https://www.7-oaths.com/" target="_blank">VISIT WEBSITE</a>
                    <a class="button_purple" href="tel:045 319 4259">CALL VENUE</a>
                    </div>
                    <div class="venu_address">
                      <p>Address:</p>
                      <p>3F, 2-29 Bentendori, Naka-ku, Yokohama-shi Kanagawa</p>
                      <a class="button_purple" href="https://www.google.com/maps?q=35.447556, 139.638944" target="_blank">Google MAP</a>
                    </div>
                      <div class="venu_open">
                      <p>Opening hours:</p>
                      <p>11.30am-1.30pm, 5pm-11pm, closed Mon & Sun</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
      </div>
    </div>
  </div>
</div>
<!-- Mirai Yokochoa -->
<div class="modal fade" id="rail" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header ml-auto">
        <button type="button" class="close " data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="<?php echo get_theme_file_uri('/img/close.png');?>" class="img-responsive" alt=""></span>
        </button>
      </div>
      <div class="modal-body p-2">
        <div>
          <div class="row">
            <div class="col-12">
              <div class="filler_info">
                <p class="things_do">Things to do</p>
                <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>
              </div>
              <div class="modal_container_venu">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="venu_pic">
                      <img src="/wp-content/uploads/2019/05/saitama_031.jpg" class="img-responsive" alt="">
                    </div>
                    <h3>Drive the shinkansen</h3>
                    <p>Heaven on earth for train geeks, this massive museum tells the history of Japan's railways from steam locomotives to the shinkansen through exhibits that include 36 actual railway cars, a spacious kids' area and a bullet train simulator, plus a shop selling 12 kinds of authentic station bento boxes.</p>
                  </div>
                  <div class="col-12 col-md-6" >
                    <div class="venu_name">
                      <p>Venue name:</p>
                      <p>The Railway Museum</p>
                    </div>
                    <div class="venu_contact">
                      <p>Contact:</p>
                      <a class="button_purple" href="http://www.railway-museum.jp/en" target="_blank">VISIT WEBSITE</a>
                    <a class="button_purple" href="tel:048 651 0088">CALL VENUE</a>
                    </div>
                    <div class="venu_address">
                      <p>Address:</p>
                      <p>3-47 Onaricho, Omiya, Saitama 330-0852</p>
                      <a class="button_purple" href="https://www.google.com/maps?q=35.921444, 139.617917" target="_blank">Google MAP</a>
                    </div>
                    <div class="venu_open">
                      <p>Opening hours:</p>
                      <p>10am-6pm</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
      </div>
    </div>
  </div>
</div>

<!-- Yokohama Museum of Art -->
<div class="modal fade" id="geo" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header ml-auto">
        <button type="button" class="close " data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="<?php echo get_theme_file_uri('/img/close.png');?>" class="img-responsive" alt=""></span>
        </button>
      </div>
      <div class="modal-body p-2">
        <div>
          <div class="row">
            <div class="col-12">
              <div class="filler_info">
                <p class="things_do">Things to do</p>
                <!-- <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div> -->
              </div>
              <div class="modal_container_venu">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="venu_pic">
                      <img src="/wp-content/uploads/2019/05/saitama_040.jpg" class="img-responsive" alt="">
                    </div>
                    <h3>Opt for a wilder view</h3>
                    <p>Thrill-seekers of all ages will find plenty to get excited about at the new Chichibu Geo Gravity Park, where you can experience the natural beauty of the Arakawa Valley by zip-lining across it or traversing the 50m-high, 100m-long suspension bridge. Entry is ¥3,000.</p>
                  </div>
                  <div class="col-12 col-md-6" >
                    <div class="venu_name">
                      <p>Venue name:</p>
                      <p>Chichibu Geo Gravity Park</p>
                    </div>
                    <div class="venu_contact">
                      <p>Contact:</p>
                      <a class="button_purple" href="http://gravitypark.jp/" target="_blank">VISIT WEBSITE</a>
                    <a class="button_purple" href="tel:050 5305 6176">CALL VENUE</a>
                    </div>
                    <div class="venu_address">
                      <p>Address:</p>
                      <p>730-4 Arakawaniegawa, Chichibu, Saitama 369-1911</p>
                      <a class="button_purple" href="https://www.google.com/maps?q=35.962167, 138.975583" target="_blank">Google MAP</a>
                    </div>
                    <div class="venu_open">
                      <p>Opening hours:</p>
                      <p>9am-5pm daily</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="hakkai" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header ml-auto">
        <button type="button" class="close " data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="<?php echo get_theme_file_uri('/img/close.png');?>" class="img-responsive" alt=""></span>
        </button>
      </div>
      <div class="modal-body p-2">
        <div>
          <div class="row">
            <div class="col-12">
              <div class="filler_info">
                <p class="resta">Restaurant/Cafe</p>
                <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>
              </div>
              <div class="modal_container_venu">
                <div class="row">
                  <div class="col-md-6 col-12">
                    <div class="venu_pic">
                      <img src="/wp-content/uploads/2019/05/saitama_009.jpg" class="img-responsive" alt="">
                    </div>
                    <h3>Enjoy the big game over dinner</h3>
                    <p>A self-proclaimed ‘rugby izakaya’ on the fifth floor of a building connected to the Kumagaya Station complex, this spacious spot lets you catch the action on a TV screen while munching on teppanyaki treats from steak to ‘tonpeiyaki’ (pork omelette). The restaurant is also open for lunch.</p>
                  </div>
                  <div class="col-md-6 col-12" >
                    <div class="venu_name">
                      <p>Venue name:</p>
                      <p>Teppachi Hakkai</p>
                    </div>
                    <div class="venu_contact">
                      <p>Contact:</p>
                      <!-- <a class="button_purple" href="https://www.marineandwalk.jp/" target="_blank">VISIT WEBSITE</a> -->
                      <a class="button_purple" href="tel:048 528 8000 ">CALL VENUE</a>                    </div>
                    <div class="venu_address">
                      <p>Address:</p>
                      <p>AZ Kumagai 5F, 2-115 Tsukuba, Kumagaya 360-0037, Saitama</p>
                      <a class="button_purple" href="https://www.google.com/maps?q=36.139833, 139.390389" target="_blank">Google MAP</a>
                    </div>
                    <div class="venu_open">
                      <p>Opening hours:</p>
                      <p>Mon-Fri 11am-3pm & 4pm-11.30pm, Sat 4pm-11.30pm, Sun 11am-11pm</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="valley" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header ml-auto">
        <button type="button" class="close " data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="<?php echo get_theme_file_uri('/img/close.png');?>" class="img-responsive" alt=""></span>
        </button>
      </div>
      <div class="modal-body p-2">
        <div>
          <div class="row">
            <div class="col-12">
              <div class="filler_info">
                <p class="things_do">Things to dos</p>
                <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>
              </div>
              <div class="modal_container_venu">
                <div class="row">
                  <div class="col-md-6 col-12">
                    <div class="venu_pic">
                      <img src="/wp-content/uploads/2019/05/saitama_025.jpg" class="img-responsive" alt="">
                    </div>
                    <h3>Meet the Moomins</h3>
                    <p>Saitama's latest family-friendly attraction opened on March 16, 2019 and is a must-visit for fans of the adorable Moomintrolls. Highlights include an interactive theatre, a 400m zip line stretching across the surface of Lake Miyazawa, and the obligatory studio for snapping photos with the Moomins themselves.</p>
                  </div>
                  <div class="col-md-6 col-12" >
                    <div class="venu_name">
                      <p>Venue name:</p>
                      <p>Moomin Valley Park</p>
                    </div>
                    <div class="venu_contact">
                      <p>Contact:</p>
                      <a class="button_purple" href="https://metsa-hanno.com/moominvalleypark/" target="_blank">VISIT WEBSITE</a>
                    <a class="button_purple" href="tel:0570 001 630">CALL VENUE</a>
                    </div>
                    <div class="venu_address">
                      <p>Address:</p>
                      <p>431-3-58 Miyazawa, Hanno, Saitama 357-0001</p>
                      <a class="button_purple" href="https://www.google.com/maps?q=35.872389, 139.329361" target="_blank">Google MAP</a>
                    </div>
                      <div class="venu_open">
                      <p>Opening hours:</p>
                      <p>10am-8pm daily</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
      </div>
    </div>
  </div>
</div>



<!-- // stadium modals start -->

<!-- //Sapporo Dome -->
<div class="modal" id="sapporastad" tabindex="-1" role="dialog">
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header text-center">
      <h5 class="modal-title"><span>  <img src="<?php echo get_theme_file_uri('/img/01_sapporo_pin.png');?>" alt=""></span>Sapporo Dome</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><img src="<?php echo get_theme_file_uri('/img/close.png');?>" class="img-responsive" alt=""></span>
      </button>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-md-8 offset-md-2 col-12">
          <div class="modal-stadium-pic">
            <img src="https://dev-rugbyjapan.timeout.jp/wp-content/uploads/2019/05/01_sapporo.jpg" class="img-responsive" alt="">
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-8 offset-md-2 col-12">
          <div class="modal-stadium-info">
            <!-- <img src="https://dev-rugbyjapan.timeout.jp/wp-content/uploads/2019/05/01_Sapporo_root.jpg" class="img-responsive" alt=""> -->
            <object   data="<?php echo get_theme_file_uri('/img/stadium/Sapporo.svg');?>" type="image/svg+xml"></object>
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-12">
          <div class="modal-schedule">
            <h3><img src="<?php echo get_theme_file_uri('/img/line_section.png');?>" alt="">Schedule<img src="<?php echo get_theme_file_uri('/img/line_section.png');?>" alt=""></h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <table class="modal-schedule-table">
            <colgroup>
              <col style="width:130px;">
              <col style="width:80px;">
              <col style="width:110px;">
            </colgroup>
            <tr>
              <th>Date</th>
              <th>Time</th>
              <th>Pool</th>
              <th>Match</th>
            </tr>
            <tr>
              <td>
                <p><span>21</span>September</p>
              </td>
              <td>
                <p>13:45</p>
              </td>
              <td>
                <p>D</p>
              </td>
              <td>
                <p>Australia v Fiji</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>22</span>September</p>
              </td>
              <td>
                <p>19:15</p>
              </td>
              <td>
                <p>C</p>
              </td>
              <td>
                <p>England v Tonga</p>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="modal-footer text-center">
      <a class="btn btn-primary modal_button-02" target="_blank" href="https://www.sapporo-dome.co.jp/foreign/index-en.html" >Official Website</a>
    </div>
  </div>
</div>
</div>

<!-- //kamaishi -->
<div class="modal" id="kamaishistad" tabindex="-1" role="dialog">
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header text-center">
      <h5 class="modal-title"><span>  <img src="<?php echo get_theme_file_uri('/img/02_kamaishi_pin.png');?>" alt=""></span>Kamaishi Recovery Memorial
Stadium </h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><img src="<?php echo get_theme_file_uri('/img/close.png');?>" class="img-responsive" alt=""></span>
      </button>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-md-8 offset-md-2 col-12">
          <div class="modal-stadium-pic">
            <img src="https://dev-rugbyjapan.timeout.jp/wp-content/uploads/2019/05/02_kamaishi.jpg" class="img-responsive" alt="">
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-8 offset-md-2 col-12">
          <div class="modal-stadium-info">
            <!-- <img src="https://dev-rugbyjapan.timeout.jp/wp-content/uploads/2019/05/02_Kamaishi_root.jpg" class="img-responsive" alt=""> -->
            <object   data="<?php echo get_theme_file_uri('/img/stadium/Kamaishi.svg');?>" type="image/svg+xml"></object>
          </div>
        </div>
      </div>
      <!-- <div class="row mt-4">
        <div class="col-md-8 offset-md-2 text-center">
          <a href="" class="btn btn-info modal_button-01">Things To Do in Kamaishi</a>
        </div>
      </div> -->
      <div class="row mt-3">
        <div class="col-12">
          <div class="modal-schedule">
            <h3><img src="<?php echo get_theme_file_uri('/img/line_section.png');?>" alt="">Schedule<img src="<?php echo get_theme_file_uri('/img/line_section.png');?>" alt=""></h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <table class="modal-schedule-table">
            <colgroup>
              <col style="width:130px;">
              <col style="width:80px;">
              <col style="width:110px;">
            </colgroup>
            <tr>
              <th>Date</th>
              <th>Time</th>
              <th>Pool</th>
              <th>Match</th>
            </tr>
            <tr>
              <td>
                <p><span>25</span>September</p>
              </td>
              <td>
                <p>14:15</p>
              </td>
              <td>
                <p>D</p>
              </td>
              <td>
                <p>Fiji V Uruguay </p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>13</span>October</p>
              </td>
              <td>
                <p>12:15</p>
              </td>
              <td>
                <p>B</p>
              </td>
              <td>
                <p>Namibia v Canada</p>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="modal-footer text-center">
      <a class="btn btn-primary modal_button-02" target="_blank" href="https://kamaishi-stadium.jp/english/">Official Website</a>
    </div>
  </div>
</div>
</div>

<!-- //kumagaya -->
<div class="modal" id="kumagayastad" tabindex="-1" role="dialog">
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header text-center">
      <h5 class="modal-title"><span>  <img src="<?php echo get_theme_file_uri('/img/03_kumagaya_pin.png');?>" alt=""></span>Kumagaya Rugby Stadium</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><img src="<?php echo get_theme_file_uri('/img/close.png');?>" class="img-responsive" alt=""></span>
      </button>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-md-8 offset-md-2 col-12">
          <div class="modal-stadium-pic">
            <img src="https://dev-rugbyjapan.timeout.jp/wp-content/uploads/2019/05/03_kumagaya.jpg" class="img-responsive" alt="">
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-8 offset-md-2 col-12">
          <div class="modal-stadium-info">
            <!-- <img src="https://dev-rugbyjapan.timeout.jp/wp-content/uploads/2019/05/03_Kumagaya_root.jpg" class="img-responsive" alt=""> -->
            <object   data="<?php echo get_theme_file_uri('/img/stadium/Kumagaya.svg');?>" type="image/svg+xml"></object>

          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-8 offset-md-2 text-center">
          <a href="https://dev-rugbyjapan.timeout.jp/city/saitama/" class="btn btn-info modal_button-01">Things To Do in Saitama</a>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-12">
          <div class="modal-schedule">
            <h3><img src="<?php echo get_theme_file_uri('/img/line_section.png');?>" alt="">Schedule<img src="<?php echo get_theme_file_uri('/img/line_section.png');?>" alt=""></h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <table class="modal-schedule-table">
            <colgroup>
              <col style="width:130px;">
              <col style="width:80px;">
              <col style="width:110px;">
            </colgroup>
            <tr>
              <th>Date</th>
              <th>Time</th>
              <th>Pool</th>
              <th>Match</th>
            </tr>
            <tr>
              <td>
                <p><span>24</span>September</p>
              </td>
              <td>
                <p>19:15</p>
              </td>
              <td>
                <p>A</p>
              </td>
              <td>
                <p>Russia v Samoa </p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>29</span>September</p>
              </td>
              <td>
                <p>14:15</p>
              </td>
              <td>
                <p>D</p>
              </td>
              <td>
                <p>Georgia v Uruguay</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>9</span>October</p>
              </td>
              <td>
                <p>13:45</p>
              </td>
              <td>
                <p>C</p>
              </td>
              <td>
                <p>Argentina v USA</p>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="modal-footer text-center">
      <a class="btn btn-primary modal_button-02" target="_blank" href="https://www.kumagaya-rugby.jp/en/kumagaya/">Official Website</a>
    </div>
  </div>
</div>
</div>


<!-- //Tokyo -->
<div class="modal" id="tokyostad" tabindex="-1" role="dialog">
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header text-center">
      <h5 class="modal-title"><span>  <img src="<?php echo get_theme_file_uri('/img/04_tokyo_pin.png');?>" alt=""></span>Tokyo Stadium (Ajinomoto
Stadium)</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><img src="<?php echo get_theme_file_uri('/img/close.png');?>" class="img-responsive" alt=""></span>
      </button>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-md-8 offset-md-2 col-12">
          <div class="modal-stadium-pic">
            <img src="https://dev-rugbyjapan.timeout.jp/wp-content/uploads/2019/05/04_tokyo.jpg" class="img-responsive" alt="">
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-8 offset-md-2 col-12">
          <div class="modal-stadium-info">
            <!-- <img src="https://dev-rugbyjapan.timeout.jp/wp-content/uploads/2019/05/04_Tokyo_root.jpg" class="img-responsive" alt=""> -->
            <object   data="<?php echo get_theme_file_uri('/img/stadium/Tokyo.svg');?>" type="image/svg+xml"></object>
          </div>
        </div>
      </div>
      <!-- <div class="row mt-4">
        <div class="col-md-8 offset-md-2 text-center">
          <a href="" class="btn btn-info modal_button-01">Things To Do in Tokyo</a>
        </div>
      </div> -->
      <div class="row mt-3">
        <div class="col-12">
          <div class="modal-schedule">
            <h3><img src="<?php echo get_theme_file_uri('/img/line_section.png');?>" alt="">Schedule<img src="<?php echo get_theme_file_uri('/img/line_section.png');?>" alt=""></h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <table class="modal-schedule-table">
            <colgroup>
              <col style="width:130px;">
              <col style="width:80px;">
              <col style="width:110px;">
            </colgroup>
            <tr>
              <th>Date</th>
              <th>Time</th>
              <th>Pool</th>
              <th>Match</th>
            </tr>
            <tr>
              <td>
                <p><span>20</span>September</p>
              </td>
              <td>
                <p>18:30</p>
              </td>
              <td>
                <p></p>
              </td>
              <td>
                <p>Opening Ceremony</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>20</span>September</p>
              </td>
              <td>
                <p>19:45</p>
              </td>
              <td>
                <p>A</p>
              </td>
              <td>
                <p>Japan v Russia</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>21</span>September</p>
              </td>
              <td>
                <p>16:15</p>
              </td>
              <td>
                <p>C</p>
              </td>
              <td>
                <p>France v Argentina</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>29</span>September</p>
              </td>
              <td>
                <p>16:45</p>
              </td>
              <td>
                <p>D</p>
              </td>
              <td>
                <p>Australia v Wales</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>5</span>October</p>
              </td>
              <td>
                <p>17:00</p>
              </td>
              <td><p>C</p></td>
              <td>
                <p>England v Argentina</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>6</span>October</p>
              </td>
              <td>
                <p>13:45</p>
              </td>
              <td><p>B</p></td>
              <td>
                <p>New Zealand v Namibia</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>19</span>October</p>
              </td>
              <td>
                <p>19:15</p>
              </td>
              <td></td>
              <td>
                <p>QF: W Pool B vs. RU Pool A</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>20</span>October</p>
              </td>
              <td>
                <p>19:15</p>
              </td>
              <td></td>
              <td>
                <p>QF: W Pool A vs. RU Pool B</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>1</span>November</p>
              </td>
              <td>
                <p>18:00</p>
              </td>
              <td></td>
              <td>
                <p>Bronze final</p>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="modal-footer text-center">
      <a class="btn btn-primary modal_button-02" target="_blank" href="https://www.ajinomotostadium.com/english/">Official Website</a>
    </div>
  </div>
</div>
</div>

<!-- Yokohama -->
<div class="modal" id="yokohamastad" tabindex="-1" role="dialog">
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header text-center">
      <h5 class="modal-title"><span>  <img src="<?php echo get_theme_file_uri('/img/05_yokohama_pin.png');?>" alt=""></span>International Stadium Yokohama</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><img src="<?php echo get_theme_file_uri('/img/close.png');?>" class="img-responsive" alt=""></span>
      </button>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-md-8 offset-md-2 col-12">
          <div class="modal-stadium-pic">
            <img src="https://dev-rugbyjapan.timeout.jp/wp-content/uploads/2019/05/05_yokohama.jpg" class="img-responsive" alt="">
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-8 offset-md-2 col-12">
          <div class="modal-stadium-info">
            <!-- <img src="https://dev-rugbyjapan.timeout.jp/wp-content/uploads/2019/05/05_Yokohama_root.jpg" class="img-responsive" alt=""> -->
            <object   data="<?php echo get_theme_file_uri('/img/stadium/Yokohama.svg');?>" type="image/svg+xml"></object>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-8 offset-md-2 text-center">
          <a href="https://dev-rugbyjapan.timeout.jp/city/yokohama/" class="btn btn-info modal_button-01">Things To Do in Yokohama</a>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-12">
          <div class="modal-schedule">
            <h3><img src="<?php echo get_theme_file_uri('/img/line_section.png');?>" alt="">Schedule<img src="<?php echo get_theme_file_uri('/img/line_section.png');?>" alt=""></h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <table class="modal-schedule-table">
            <colgroup>
              <col style="width:130px;">
              <col style="width:80px;">
              <col style="width:110px;">
            </colgroup>
            <tr>
              <th>Date</th>
              <th>Time</th>
              <th>Pool</th>
              <th>Match</th>
            </tr>
            <tr>
              <td>
                <p><span>21</span>September</p>
              </td>
              <td>
                <p>18:45</p>
              </td>
              <td>
                <p>B</p>
              </td>
              <td>
                <p>New Zealand v South Africa</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>22</span>September</p>
              </td>
              <td>
                <p>16:45</p>
              </td>
              <td>
                <p>A</p>
              </td>
              <td>
                <p>Ireland v Scotland</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>12</span>October</p>
              </td>
              <td>
                <p>17:15</p>
              </td>
              <td>
                <p>C</p>
              </td>
              <td>
                <p>England v France</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>13</span>October</p>
              </td>
              <td>
                <p>19:45</p>
              </td>
              <td>
                <p>A</p>
              </td>
              <td>
                <p>Japan v Scotland</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>26</span>October</p>
              </td>
              <td>
                <p>17:00</p>
              </td>
              <td></td>
              <td>
                <p>SF: W QF1 v W QF2</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>27</span>October</p>
              </td>
              <td>
                <p>18:00</p>
              </td>
              <td></td>
              <td>
                <p>SF: W QF3 v W QF4</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>2</span>November</p>
              </td>
              <td>
                <p>18:00</p>
              </td>
              <td></td>
              <td>
                <p>Final</p>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="modal-footer text-center">
      <a class="btn btn-primary modal_button-02" target="_blank" href="https://www.nissan-stadium.jp/english/">Official Website</a>
    </div>
  </div>
</div>
</div>

<!-- //Shizuoka -->
<div class="modal" id="shizukastad" tabindex="-1" role="dialog">
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header text-center">
      <h5 class="modal-title"><span>  <img src="<?php echo get_theme_file_uri('/img/06_shizuoka_pin.png');?>" alt=""></span>Shizuoka Stadium Ecopa</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><img src="<?php echo get_theme_file_uri('/img/close.png');?>" class="img-responsive" alt=""></span>
      </button>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-md-8 offset-md-2 col-12">
          <div class="modal-stadium-pic">
            <img src="https://dev-rugbyjapan.timeout.jp/wp-content/uploads/2019/05/06_shizuoka.jpg" class="img-responsive" alt="">
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-8 offset-md-2 col-12">
          <div class="modal-stadium-info">
            <!-- <img src="https://dev-rugbyjapan.timeout.jp/wp-content/uploads/2019/05/06_Shizuoka_root.jpg" class="img-responsive" alt=""> -->
            <object   data="<?php echo get_theme_file_uri('/img/stadium/Shizuoka.svg');?>" type="image/svg+xml"></object>
          </div>
        </div>
      </div>
      <!-- <div class="row mt-4">
        <div class="col-md-8 offset-md-2 text-center">
          <a href="" class="btn btn-info modal_button-01">Things To Do in Shizuoka</a>
        </div>
      </div> -->
      <div class="row mt-3">
        <div class="col-12">
          <div class="modal-schedule">
            <h3><img src="<?php echo get_theme_file_uri('/img/line_section.png');?>" alt="">Schedule<img src="<?php echo get_theme_file_uri('/img/line_section.png');?>" alt=""></h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <table class="modal-schedule-table">
            <colgroup>
              <col style="width:130px;">
              <col style="width:80px;">
              <col style="width:110px;">
            </colgroup>
            <tr>
              <th>Date</th>
              <th>Time</th>
              <th>Pool</th>
              <th>Match</th>
            </tr>
            <tr>
              <td>
                <p><span>28</span>September</p>
              </td>
              <td>
                <p>16:15</p>
              </td>
              <td>
                <p>A</p>
              </td>
              <td>
                <p>Japan v Ireland</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>4</span>October</p>
              </td>
              <td>
                <p>18:45</p>
              </td>
              <td>
                <p>B</p>
              </td>
              <td>
                <p>South Africa v Italy</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>9</span>October</p>
              </td>
              <td>
                <p>16:15</p>
              </td>
              <td>
                <p>A</p>
              </td>
              <td>
                <p>Scotland v Russia</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>11</span>October</p>
              </td>
              <td>
                <p>19:15</p>
              </td>
              <td>
                <p>D</p>
              </td>
              <td>
                <p>Australia v Georgia</p>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="modal-footer text-center">
      <a class="btn btn-primary modal_button-02" target="_blank" href="https://www.ecopa.jp/english/">Official Website</a>
    </div>
  </div>
</div>
</div>


<!-- //toyota -->
<div class="modal" id="toyotastad" tabindex="-1" role="dialog">
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header text-center">
      <h5 class="modal-title"><span>  <img src="<?php echo get_theme_file_uri('/img/07_toyota_pin.png');?>" alt=""></span>City of Toyota Stadium</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><img src="<?php echo get_theme_file_uri('/img/close.png');?>" class="img-responsive" alt=""></span>
      </button>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-md-8 offset-md-2 col-12">
          <div class="modal-stadium-pic">
            <img src="https://dev-rugbyjapan.timeout.jp/wp-content/uploads/2019/05/07_toyota.jpg" class="img-responsive" alt="">
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-8 offset-md-2 col-12">
          <div class="modal-stadium-info">
            <!-- <img src="https://dev-rugbyjapan.timeout.jp/wp-content/uploads/2019/05/07_City_Of_Toyota_root.jpg" class="img-responsive" alt=""> -->
            <object   data="<?php echo get_theme_file_uri('/img/stadium/City_Of_Toyota.svg');?>" type="image/svg+xml"></object>
          </div>
        </div>
      </div>
      <!-- <div class="row mt-4">
        <div class="col-md-8 offset-md-2 text-center">
          <a href="" class="btn btn-info modal_button-01">Things To Do in Toyota</a>
        </div>
      </div> -->
      <div class="row mt-3">
        <div class="col-12">
          <div class="modal-schedule">
            <h3><img src="<?php echo get_theme_file_uri('/img/line_section.png');?>" alt="">Schedule<img src="<?php echo get_theme_file_uri('/img/line_section.png');?>" alt=""></h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <table class="modal-schedule-table">
            <colgroup>
              <col style="width:130px;">
              <col style="width:80px;">
              <col style="width:110px;">
            </colgroup>
            <tr>
              <th>Date</th>
              <th>Time</th>
              <th>Pool</th>
              <th>Match</th>
            </tr>
            <tr>
              <td>
                <p><span>23</span>September</p>
              </td>
              <td>
                <p>19:15</p>
              </td>
              <td>
                <p>D</p>
              </td>
              <td>
                <p>Wales v Georgia</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>28</span>September</p>
              </td>
              <td>
                <p>18:45</p>
              </td>
              <td>
                <p>B</p>
              </td>
              <td>
                <p>South Africa v Namibia</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>5</span>October</p>
              </td>
              <td>
                <p>19:30</p>
              </td>
              <td>
                <p>A</p>
              </td>
              <td>
                <p>Japan v Samoa</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>12</span>October</p>
              </td>
              <td>
                <p>13:45</p>
              </td>
              <td>
                <p>B</p>
              </td>
              <td>
                <p>New Zealand v Italy</p>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="modal-footer text-center">
      <a class="btn btn-primary modal_button-02" target="_blank" href="http://www.toyota-stadium.co.jp/en/">Official Website</a>
    </div>
  </div>
</div>
</div>

<!-- //hanazono -->
<div class="modal" id="hanazonostad" tabindex="-1" role="dialog">
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header text-center">
      <h5 class="modal-title"><span>  <img src="<?php echo get_theme_file_uri('/img/08_hanazono_pin.png');?>" alt=""></span>Hanazono Rugby Stadium</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><img src="<?php echo get_theme_file_uri('/img/close.png');?>" class="img-responsive" alt=""></span>
      </button>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-md-8 offset-md-2 col-12">
          <div class="modal-stadium-pic">
            <img src="https://dev-rugbyjapan.timeout.jp/wp-content/uploads/2019/05/08_hanazono.jpg" class="img-responsive" alt="">
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-8 offset-md-2 col-12">
          <div class="modal-stadium-info">
            <!-- <img src="https://dev-rugbyjapan.timeout.jp/wp-content/uploads/2019/05/08_Hanazono_root.jpg" class="img-responsive" alt=""> -->
            <object   data="<?php echo get_theme_file_uri('/img/stadium/Hanazono.svg');?>" type="image/svg+xml"></object>
          </div>
        </div>
      </div>
      <!-- <div class="row mt-4">
        <div class="col-md-8 offset-md-2 text-center">
          <a href="" class="btn btn-info modal_button-01">Things To Do in Hanazono</a>
        </div>
      </div> -->
      <div class="row mt-3">
        <div class="col-12">
          <div class="modal-schedule">
            <h3><img src="<?php echo get_theme_file_uri('/img/line_section.png');?>" alt="">Schedule<img src="<?php echo get_theme_file_uri('/img/line_section.png');?>" alt=""></h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <table class="modal-schedule-table">
            <colgroup>
              <col style="width:130px;">
              <col style="width:80px;">
              <col style="width:110px;">
            </colgroup>
            <tr>
              <th>Date</th>
              <th>Time</th>
              <th>Pool</th>
              <th>Match</th>
            </tr>
            <tr>
              <td>
                <p><span>22</span>September</p>
              </td>
              <td>
                <p>14:15</p>
              </td>
              <td>
                <p>B</p>
              </td>
              <td>
                <p>Italy v Namibia</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>28</span>September</p>
              </td>
              <td>
                <p>13:45</p>
              </td>
              <td>
                <p>C</p>
              </td>
              <td>
                <p>Argentina v Tonga</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>3</span>October</p>
              </td>
              <td>
                <p>14:15</p>
              </td>
              <td>
                <p>D</p>
              </td>
              <td>
                <p>Georgia v Fiji</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>13</span>October</p>
              </td>
              <td>
                <p>14:45</p>
              </td>
              <td>
                <p>C</p>
              </td>
              <td>
                <p>USA v Tonga</p>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="modal-footer text-center">
      <a class="btn btn-primary modal_button-02" target="_blank" href="https://www.rugby-osaka.hanazono.pref.osaka.jp/english/index.html">Official Website</a>
    </div>
  </div>
</div>
</div>

<!-- //kobe -->
<div class="modal" id="kobestad" tabindex="-1" role="dialog">
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header text-center">
      <h5 class="modal-title"><span>  <img src="<?php echo get_theme_file_uri('/img/09_kobe_pin.png');?>" alt=""></span>Kobe Misaki Stadium</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><img src="<?php echo get_theme_file_uri('/img/close.png');?>" class="img-responsive" alt=""></span>
      </button>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-md-8 offset-md-2 col-12">
          <div class="modal-stadium-pic">
            <img src="https://dev-rugbyjapan.timeout.jp/wp-content/uploads/2019/05/09_kobe.jpg" class="img-responsive" alt="">
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-8 offset-md-2 col-12">
          <div class="modal-stadium-info">
            <!-- <img src="https://dev-rugbyjapan.timeout.jp/wp-content/uploads/2019/05/09_Kobe_root.jpg" class="img-responsive" alt=""> -->
            <object   data="<?php echo get_theme_file_uri('/img/stadium/Kobe.svg');?>" type="image/svg+xml"></object>
          </div>
        </div>
      </div>
      <!-- <div class="row mt-4">
        <div class="col-md-8 offset-md-2 text-center">
          <a href="" class="btn btn-info modal_button-01">Things To Do in kobe</a>
        </div>
      </div> -->
      <div class="row mt-3">
        <div class="col-12">
          <div class="modal-schedule">
            <h3><img src="<?php echo get_theme_file_uri('/img/line_section.png');?>" alt="">Schedule<img src="<?php echo get_theme_file_uri('/img/line_section.png');?>" alt=""></h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <table class="modal-schedule-table">
            <colgroup>
              <col style="width:130px;">
              <col style="width:80px;">
              <col style="width:110px;">
            </colgroup>
            <tr>
              <th>Date</th>
              <th>Time</th>
              <th>Pool</th>
              <th>Match</th>
            </tr>
            <tr>
              <td>
                <p><span>26</span>September</p>
              </td>
              <td>
                <p>19:45</p>
              </td>
              <td>
                <p>C</p>
              </td>
              <td>
                <p>England v USA</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>30</span>September</p>
              </td>
              <td>
                <p>19:15</p>
              </td>
              <td>
                <p>A</p>
              </td>
              <td>
                <p>Scotland v Samo</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>3</span>October</p>
              </td>
              <td>
                <p>19:15</p>
              </td>
              <td>
                <p>A</p>
              </td>
              <td>
                <p>Ireland v Russia</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>8</span>October</p>
              </td>
              <td>
                <p>19:15</p>
              </td>
              <td>
                <p>B</p>
              </td>
              <td>
                <p>South Africa v Canada</p>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="modal-footer text-center">
      <a class="btn btn-primary modal_button-02" target="_blank" href="https://www.noevir-stadium.jp/">Official Website</a>
    </div>
  </div>
</div>
</div>
<!-- //fukuoka -->
<div class="modal" id="fukuokastad" tabindex="-1" role="dialog">
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header text-center">
      <h5 class="modal-title"><span>  <img src="<?php echo get_theme_file_uri('/img/10_fukuoka_pin.png');?>" alt=""></span>Fukuoka Hakatanomori Stadium</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><img src="<?php echo get_theme_file_uri('/img/close.png');?>" class="img-responsive" alt=""></span>
      </button>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-md-8 offset-md-2 col-12">
          <div class="modal-stadium-pic">
            <img src="https://dev-rugbyjapan.timeout.jp/wp-content/uploads/2019/05/10_fukuoka.jpg" class="img-responsive" alt="">
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-8 offset-md-2 col-12">
          <div class="modal-stadium-info">
            <!-- <img src="https://dev-rugbyjapan.timeout.jp/wp-content/uploads/2019/05/10_Fukuoka_root.jpg" class="img-responsive" alt=""> -->
            <object   data="<?php echo get_theme_file_uri('/img/stadium/Fukuoka.svg');?>" type="image/svg+xml"></object>
          </div>
        </div>
      </div>
      <!-- <div class="row mt-4">
        <div class="col-md-8 offset-md-2 text-center">
          <a href="" class="btn btn-info modal_button-01">Things To Do in Fukuoka</a>
        </div>
      </div> -->
      <div class="row mt-3">
        <div class="col-12">
          <div class="modal-schedule">
            <h3><img src="<?php echo get_theme_file_uri('/img/line_section.png');?>" alt="">Schedule<img src="<?php echo get_theme_file_uri('/img/line_section.png');?>" alt=""></h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <table class="modal-schedule-table">
            <colgroup>
              <col style="width:130px;">
              <col style="width:80px;">
              <col style="width:110px;">
            </colgroup>
            <tr>
              <th>Date</th>
              <th>Time</th>
              <th>Pool</th>
              <th>Match</th>
            </tr>
            <tr>
              <td>
                <p><span>26</span>September</p>
              </td>
              <td>
                <p>16:45</p>
              </td>
              <td>
                <p>B</p>
              </td>
              <td>
                <p>Italy v Canada</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>2</span>October</p>
              </td>
              <td>
                <p>16:45</p>
              </td>
              <td>
                <p>C</p>
              </td>
              <td>
                <p>France v USA</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>12</span>October</p>
              </td>
              <td>
                <p>19:45</p>
              </td>
              <td>
                <p>A</p>
              </td>
              <td>
                <p>Ireland v Samoa</p>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="modal-footer text-center">
      <a class="btn btn-primary modal_button-02" target="_blank" href="https://www.avispa.co.jp/game_practice/stadium">Official Website</a>
    </div>
  </div>
</div>
</div>
<!-- //kumaoto -->
<div class="modal" id="kumaotostad" tabindex="-1" role="dialog">
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header text-center">
      <h5 class="modal-title"><span>  <img src="<?php echo get_theme_file_uri('/img/11_kumamoto_pin.png');?>" alt=""></span>Kumamoto Stadium</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><img src="<?php echo get_theme_file_uri('/img/close.png');?>" class="img-responsive" alt=""></span>
      </button>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-md-8 offset-md-2 col-12">
          <div class="modal-stadium-pic">
            <img src="https://dev-rugbyjapan.timeout.jp/wp-content/uploads/2019/05/11_kumamoto.jpg" class="img-responsive" alt="">
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-8 offset-md-2 col-12">
          <div class="modal-stadium-info">
            <!-- <img src="https://dev-rugbyjapan.timeout.jp/wp-content/uploads/2019/05/11_Kumamoto_root.jpg" class="img-responsive" alt=""> -->
            <object   data="<?php echo get_theme_file_uri('/img/stadium/Kumamoto.svg');?>" type="image/svg+xml"></object>
          </div>
        </div>
      </div>
      <!-- <div class="row mt-4">
        <div class="col-md-8 offset-md-2 text-center">
          <a href="" class="btn btn-info modal_button-01">Things To Do in Kumamoto</a>
        </div>
      </div> -->
      <div class="row mt-3">
        <div class="col-12">
          <div class="modal-schedule">
            <h3><img src="<?php echo get_theme_file_uri('/img/line_section.png');?>" alt="">Schedule<img src="<?php echo get_theme_file_uri('/img/line_section.png');?>" alt=""></h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <table class="modal-schedule-table">
            <colgroup>
              <col style="width:130px;">
              <col style="width:80px;">
              <col style="width:110px;">
            </colgroup>
            <tr>
              <th>Date</th>
              <th>Time</th>
              <th>Pool</th>
              <th>Match</th>
            </tr>
            <tr>
              <td>
                <p><span>6</span>October</p>
              </td>
              <td>
                <p>16:45</p>
              </td>
              <td>
                <p>C</p>
              </td>
              <td>
                <p>France v Tonga</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>13</span>October</p>
              </td>
              <td>
                <p>17:15</p>
              </td>
              <td>
                <p>D</p>
              </td>
              <td>
                <p>Wales v Uruguay</p>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="modal-footer text-center">
      <a class="btn btn-primary modal_button-02" target="_blank" href="http://www.kspa.or.jp/rikujo.html">Official Website</a>
    </div>
  </div>
</div>
</div>

<!-- //oita -->
<div class="modal" id="oitastad" tabindex="-1" role="dialog">
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header text-center">
      <h5 class="modal-title"><span>  <img src="<?php echo get_theme_file_uri('/img/12_oita_pin.png');?>" alt=""></span>Oita Stadium</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><img src="<?php echo get_theme_file_uri('/img/close.png');?>" class="img-responsive" alt=""></span>
      </button>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-md-8 offset-md-2 col-12">
          <div class="modal-stadium-pic">
            <img src="https://dev-rugbyjapan.timeout.jp/wp-content/uploads/2019/05/12_oita.jpg" class="img-responsive" alt="">
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-8 offset-md-2 col-12">
          <div class="modal-stadium-info">
            <!-- <img src="https://dev-rugbyjapan.timeout.jp/wp-content/uploads/2019/05/11_Kumamoto_root.jpg" class="img-responsive" alt=""> -->
            <object   data="<?php echo get_theme_file_uri('/img/stadium/Oita.svg');?>" type="image/svg+xml"></object>
          </div>
        </div>
      </div>
      <!-- <div class="row mt-4">
        <div class="col-md-8 offset-md-2 text-center">
          <a href="" class="btn btn-info modal_button-01">Things To Do in Oita</a>
        </div>
      </div> -->
      <div class="row mt-3">
        <div class="col-12">
          <div class="modal-schedule">
            <h3><img src="<?php echo get_theme_file_uri('/img/line_section.png');?>" alt="">Schedule<img src="<?php echo get_theme_file_uri('/img/line_section.png');?>" alt=""></h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <table class="modal-schedule-table">
            <colgroup>
              <col style="width:130px;">
              <col style="width:80px;">
              <col style="width:110px;">
            </colgroup>
            <tr>
              <th>Date</th>
              <th>Time</th>
              <th>Pool</th>
              <th>Match</th>
            </tr>
            <tr>
              <td>
                <p><span>2</span>October</p>
              </td>
              <td>
                <p>19:15</p>
              </td>
              <td>
                <p>B</p>
              </td>
              <td>
                <p>New Zealand v Canada</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>5</span>October</p>
              </td>
              <td>
                <p>14:15</p>
              </td>
              <td>
                <p>D</p>
              </td>
              <td>
                <p>Australia v Uruguay</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>9</span>October</p>
              </td>
              <td>
                <p>18:45</p>
              </td>
              <td>
                <p>D</p>
              </td>
              <td>
                <p>Wales v Fiji</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>19</span>October</p>
              </td>
              <td>
                <p>16:15</p>
              </td>
              <td>
                <p></p>
              </td>
              <td>
                <p>QF: W Pool C v RU Pool D</p>
              </td>
            </tr>
            <tr>
              <td>
                <p><span>20</span>October</p>
              </td>
              <td>
                <p>16:15</p>
              </td>
              <td></td>
              <td>
                <p>QF: W Pool D v RU Pool C</p>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="modal-footer text-center">
      <a class="btn btn-primary modal_button-02" target="_blank" href="http://www.oita-sportspark.jp/english/">Official Website</a>
    </div>
  </div>
</div>
</div>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAV_Ml8jJ5VFEJUgV0Oo_rlOLMoJoTe9KM&callback=initMap"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139056125-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'UA-139056125-1');
</script>
<script>
  var yokohama_stadium = "/wp-content/uploads/2019/05/05_yokohama.jpg";
  var saitama_stadium = "/wp-content/uploads/2019/05/03_kumagaya.jpg";
</script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery-3.4.1.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/slick.js" charset="utf-8"></script>
<script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
<script>
var templateUrl = '<?= get_bloginfo("template_url"); ?>';
$('.multiple-items').slick({
infinite: true,
slidesToShow: 2,
slidesToScroll: 2,
autoplay: true,
autoplaySpeed: 8000,
prevArrow:"<img class='a-left control-c prev slick-prev' src='"+ templateUrl+"/img/left_arrow2x.png'>",
nextArrow:"<img class='a-right control-c next slick-next' src='"+ templateUrl+"/img/right_arrow2x.png'>",
responsive: [
              {
                breakpoint: 500,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              }
            ]
});
</script>
      <script type="text/javascript">
      $(document).ready(function() {
        $('#pills-map-tab').click(function() {
           initMap();
          $('#pills-map-tab img').attr('src', '<?php echo get_theme_file_uri("/img/map_view.png");?>');
          $('#pills-venu-tab img').attr('src', '<?php echo get_theme_file_uri("/img/picture_view_disable.png");?>');
          $('.drop_down_filter').css('display', 'none');
          $('.plus').css('display', 'none');
          $('.checkbox').css('display', 'none');
          $('.kids_lable').css('display', 'none');
          if ($(window).width() < 500) {
            $('.tab_container').css('width', '80px');
          } else if ($(window).width() > 500) {
            $('.tab_container').css('width', '180px');
          }

        });
        $('#pills-venu-tab').click(function() {
          $('#pills-map-tab img').attr('src', '<?php echo get_theme_file_uri("/img/map_viewdisable.png");?>');
          $('#pills-venu-tab img').attr('src', '<?php echo get_theme_file_uri("/img/picture_view.png");?>');
          $('.drop_down_filter').show();
          $('.plus').show();
          $('.checkbox').show();
          $('.kids_lable').show();

          if ($(window).width() < 500) {
            $('.tab_container').css('width', '100%');
          } else if ($(window).width() > 500 && $(window).width() <= 768) {
            $('.tab_container').css('width', '400px');
          } else if ($(window).width() > 769 && $(window).width() <= 1200) {
            $('.tab_container').css('width', '600px');
          } else if ($(window).width() > 1200) {
            $('.tab_container').css('width', '660px');
          }
        });
      })
      </script>


       <script type="text/javascript">
       var map_lng_lt,contentString, pin;
       var markers_lg_lt=[];
       var nissan_stadium, oriental_table, montbell, YCAT, Cupnoodles_Museum, Hard_Rock, Osanbashi_Terminal, Yokohama_Museum ;
       var  Rugby_Diner_7_oath, Hamagyu, Orbi, Hakkeijima, mirai_Yokocho, Bennys_place, Hotel_New_Grand, Sojiji_Temple, Sheraton_Hotel ;
       var Kinpira_Kitchen, Sainkeien_Garden, Stove_s, Yokohama_Cosmoworld, Yokohama_Sky_Cruise, InterCon_Hotel, Noh_Theatre;
       var Bay_Hotel_Tokyu, full_monty , green_sheep, Marine_walk_Yokohama;



       <?php if(is_page('yokohama')){?>
         $(document).ready(function() {
           $('.yokohama_ve_cont').css('display','block');
           $('.saitama_ve_cont').css('display','none');

           // Goole map values start
            map_lng_lt = { lat: 35.509999,lng: 139.606394};

            contentString = '<div class="contentyoko">' +
                                    '<div class="marker_img"><img src="'+yokohama_stadium+'" alt=""/></div>' +
                                    '<div><h2>International Stadium Yokohama</h2><a class="mark_offical_btn" href="https://www.nissan-stadium.jp/" target="_blank">offical Website</a></div>'+
                                '</div>';
            pin ='05_yokohama_pin.png';

            oriental_table = '<div class="multi_market">\
                                  <div class="filler_info">\
                                      <p class="resta">Restaurant/Cafe</p>\
                                    </div>\
                                    <div class="container_venu">\
                                  <div class="venu_pic">\
                                    <img src="/wp-content/uploads/2019/05/2.jpg" class="img-responsive" alt="">\
                                  </div>\
                                  <h3>Mingle with local fans</h3>\
                                  <p>A cheerful diner and bar near the International Stadium Yokohama, which gets especially crowded whenever a match, event or concert is happening at the stadium. A buffet lunch here will only set you back ¥1,000, while the nighttime all-you-can-drink plan is priced from ¥3,980.</p>\
                                  <div class="">\
                                  <div class="venu_name">\
                                    <p>Venue name:</p>\
                                    <p>Oriental Table</p>\
                                  </div>\
                                  <div class="venu_contact">\
                                    <p>Contact:</p>\
                                    <a class="button_purple" href="https://orientaltable.owst.jp/" target="_blank">VISIT WEBSITE</a>\
                                    <a class="button_purple" href="tel:045 476 4884">CALL VENUE</a>\
                                  </div>\
                                  <div class="venu_address">\
                                    <p>Address:</p>\
                                    <p>1F, 2-6-15 Shin-Yokohama, Kohoku-ku, Yokohama-shi Kanagawa</p>\
                                    <a class="button_purple" href="https://www.google.com/maps?q=35.508667, 139.614833" target="_blank">Google MAP</a>\
                                  </div>\
                                  <div class="venu_open">\
                                    <p>Opening hours:</p>\
                                    <p>Mon-Thu, day before hols 11.30am-2.30pm (L.O. 2pm), 5.30pm-2am (1am), Fri 11.30am-2.30pm (2pm), 5.30pm-4am (3am), Sat 5.30pm-4am (3am), hols 5.30pm-12midnight (11pm), closed Sun</p>\
                                  </div>\
                                </div>\
                                </div>\
                                </div>';

                  montbell = '<div class="multi_market">\
                                  <div class="filler_info">\
                                    <p class="shopping">Shopping</p>\
                                  </div>\
                                  <div class="container_venu">\
                                    <div class="venu_pic">\
                                      <img src="/wp-content/uploads/2019/05/3.jpg" class="img-responsive" alt="">\
                                    </div>\
                                    <h3>Hunt for Japanese outdoor items</h3>\
                                    <p>Check out the nation&apos;s beloved outdoor brand&apos;s seaside branch. In this spacious shop, you can find top-notch equipment for marine activities and hiking. For ¥3,900 a day, you can rent the brand&apos;s bikes and cycle around the city in style. Taking advantage of its waterfront location, the shop also offers kayaking lessons.</p>\
                                    <div class="">\
                                      <div class="venu_name">\
                                        <p>Venue name:</p>\
                                        <p>Montbell Yokohama Shin-Yamashita</p>\
                                      </div>\
                                      <div class="venu_contact">\
                                        <p>Contact:</p>\
                                        <a class="button_purple" href="https://www.montbell.jp/" target="_blank">VISIT WEBSITE</a>\
                                        <a class="button_purple" href="tel:045 628 2466">CALL VENUE</a>\
                                      </div>\
                                      <div class="venu_address">\
                                        <p>Address:</p>\
                                        <p>3-4-19 Shin-Yamashita, Naka-ku, Yokohama-shi Kanagawa</p>\
                                        <a class="button_purple" href="https://www.google.com/maps?q=35.441278, 139.660750" target="_blank">Google MAP</a>\
                                      </div>\
                                      <div class="venu_open">\
                                        <p>Opening hours:</p>\
                                        <p>10am-8pm daily</p>\
                                      </div>\
                                    </div>\
                                  </div>\
                                </div>';

                    YCAT = '<div class="multi_market">\
                                  <div class="filler_info">\
                                    <p class="things_do">Things to do</p>\
                                  </div>\
                                  <div class="container_venu">\
                                    <div class="venu_pic">\
                                      <img src="/wp-content/uploads/2019/05/4.jpg" class="img-responsive" alt="">\
                                    </div>\
                                    <h3>Make your connection</h3>\
                                    <p>The Yokohama City Air Terminal (YCAT) is a one-stop centre for all your travel needs. There are shuttle bus services to Narita and Haneda international airports, as well as highway buses to cities like Kyoto, Osaka, Nagoya, Kobe and Hamamatsu. You’ll also find currency exchange, a café and a convenience/drug/gift store here.</p>\
                                    <div class="">\
                                      <div class="venu_name">\
                                        <p>Venue name:</p>\
                                        <p>Yokohama City Air Terminal (YCAT)</p>\
                                      </div>\
                                      <div class="venu_contact">\
                                        <p>Contact:</p>\
                                        <a class="button_purple" href="http://www.ycat.co.jp/en/" target="_blank">VISIT WEBSITE</a>\
                                        <a class="button_purple" href="tel:045 459 4800">CALL VENUE</a>\
                                      </div>\
                                      <div class="venu_address">\
                                        <p>Address:</p>\
                                        <p>Sky Bldg 1F, 2-19-12 Takashima, Nishi-ku, Yokohama-shi Kanagawa</p>\
                                        <a class="button_purple" href="https://www.google.com/maps?q=35.464722, 139.624806" target="_blank">Google MAP</a>\
                                      </div>\
                                      <div class="venu_open">\
                                        <p>Opening hours:</p>\
                                        <p>N/A</p>\
                                      </div>\
                                    </div>\
                                  </div>\
                            </div>';

                  Cupnoodles_Museum = '<div class="multi_market">\
                              <div class="filler_info">\
                              <p class="things_do">Things to do</p>\
                              <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>\
                            </div>\
                            <div class="container_venu">\
                              <div class="venu_pic">\
                                <img src="/wp-content/uploads/2019/05/5.jpg" class="img-responsive" alt="">\
                              </div>\
                              <h3>Customise your Cup Noodles</h3>\
                              <p>Instant noodles are big in Japan. At this interactive museum you get to have fun while learning about the creative-thinking process of Momofuku Ando, the inventor of instant noodles, by seeing, touching, playing and eating. You can also make your own original Cup Noodles at My Cupnoodles Factory.</p>\
                              <div class="">\
                                <div class="venu_name">\
                                  <p>Venue name:</p>\
                                  <p>Cupnoodles Museum</p>\
                                </div>\
                                <div class="venu_contact">\
                                  <p>Contact:</p>\
                                  <a class="button_purple" href="https://www.cupnoodles-museum.jp/english/" target="_blank">VISIT WEBSITE</a>\
                                  <a class="button_purple" href="tel:045 345 0918">CALL VENUE</a>\
                                </div>\
                                <div class="venu_address">\
                                  <p>Address:</p>\
                                  <p>2-3-4 Shinko, Naka-ku, Yokohama Kanagawa</p>\
                                  <a class="button_purple" href="https://www.google.com/maps?q=35.455500, 139.638917" target="_blank">Google MAP</a>\
                                </div>\
                                <div class="venu_open">\
                                  <p>Opening hours:</p>\
                                  <p>10am-6pm (last admission 5pm), closed Tue (Wed if Tue is hols)</p>\
                                </div>\
                              </div>\
                            </div>\
                  </div>';

                  Hard_Rock = '<div class="multi_market">\
                                          <div class="filler_info">\
                                        <p class="resta">Restaurant/Cafe</p>\
                                        <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>\
                                      </div>\
                                      <div class="container_venu">\
                                        <div class="venu_pic">\
                                          <img src="/wp-content/uploads/2019/05/6.jpg" class="img-responsive" alt="">\
                                        </div>\
                                        <h3>Visit an international icon</h3>\
                                        <p>Hard Rock Cafe&apos;s Yokohama branch is unmissable, thanks to the huge guitarshaped neon sign at the entrance of Queens Tower. Live music performances take place regularly, and don&apos;t forget to order the Yokohama-exclusive sukiyaki burger. The attached shop carries a sizeable memorabilia collection of top musicians.</p>\
                                        <div class="">\
                                          <div class="venu_name">\
                                            <p>Venue name:</p>\
                                            <p>Hard Rock Cafe Yokohama</p>\
                                          </div>\
                                          <div class="venu_contact">\
                                            <p>Contact:</p>\
                                            <a class="button_purple" href="https://www.hardrock.com/cafes/yokohama" target="_blank">VISIT WEBSITE</a>\
                                            <!-- <a class="button_purple" href="tel:045 628 2466">CALL VENUE</a> -->\
                                          </div>\
                                          <div class="venu_address">\
                                            <p>Address:</p>\
                                            <p>Queen&apos;s Tower 1F, 2-3-1 Minatomirai Nishi-ku, Yokohama-shi Kanagawa</p>\
                                            <a class="button_purple" href="https://www.google.com/maps?q=35.455806, 139.633083" target="_blank">Google MAP</a>\
                                          </div>\
                                          <div class="venu_open">\
                                            <p>Opening hours:</p>\
                                            <p>11am-11pm (L.O. 10pm)</p>\
                                          </div>\
                                        </div>\
                                    </div>\
                                </div>';
          Osanbashi_Terminal = '<div class="multi_market">\
                                    <div class="filler_info">\
                                          <p class="things_do">Things to do</p>\
                                          <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>\
                                        </div>\
                                        <div class="container_venu">\
                                          <div class="venu_pic">\
                                            <img src="/wp-content/uploads/2019/05/7.jpg" class="img-responsive" alt="">\
                                          </div>\
                                          <h3>Gaze out from a ship-deck rooftop</h3>\
                                          <p>Known as the whale&apos;s back&apos; among locals, this international port sees passenger ships arrive and depart, but the real reason to visit is the sweeping view of Minato Mirai, the city’s seaside urban area. The rooftop is designed to look like a ship’s deck and invites you to linger longer with wooden pathways.</p>\
                                          <div class="">\
                                            <div class="venu_name">\
                                              <p>Venue name:</p>\
                                              <p>Osanbashi Yokohama International Passenger Terminal</p>\
                                            </div>\
                                            <div class="venu_contact">\
                                              <p>Contact:</p>\
                                              <a class="button_purple" href="https://osanbashi.jp/english/" target="_blank">VISIT WEBSITE</a>\
                                              <a class="button_purple" href="tel:045 211 2304">CALL VENUE</a>\
                                            </div>\
                                            <div class="venu_address">\
                                              <p>Address:</p>\
                                              <p>1 Kaigan-dori, Naka-ku, Yokohama-shi Kanagawa</p>\
                                              <a class="button_purple" href="https://www.google.com/maps?q=35.451194, 139.647417" target="_blank">Google MAP</a>\
                                            </div>\
                                            <div class="venu_open">\
                                              <p>Opening hours:</p>\
                                              <p>N/A</p>\
                                            </div>\
                                          </div>\
                                      </div>\
                               </div>';

          Yokohama_Museum = '<div class="multi_market">\
                                <div class="filler_info">\
                                      <p class="aculture">Art & Culture</p>\
                                 </div>\
                                    <div class="container_venu">\
                                      <div class="venu_pic">\
                                        <img src="/wp-content/uploads/2019/05/8.jpg" class="img-responsive" alt="">\
                                      </div>\
                                      <h3>See worlds collide through art</h3>\
                                      <p>Yokohama has played a major role in the history of Japanese photography so it’s fitting that this art museum holds a substantial photo collection. This art-enthusiast hotspot displays works showing an interplay of European and Japanese modern and contemporary art.</p>\
                                      <div class="">\
                                        <div class="venu_name">\
                                          <p>Venue name:</p>\
                                          <p>Yokohama Museum of Art</p>\
                                        </div>\
                                        <div class="venu_contact">\
                                          <p>Contact:</p>\
                                          <a class="button_purple" href="https://yokohama.art.museum/eng/index.html" target="_blank">VISIT WEBSITE</a>\
                                          <a class="button_purple" href="tel:045 221 0300">CALL VENUE</a>\
                                        </div>\
                                        <div class="venu_address">\
                                          <p>Address:</p>\
                                          <p>3-4-1 Minatomirai, Nishi-ku, Yokohama-shi Kanagawa</p>\
                                          <a class="button_purple" href="https://www.google.com/maps?q=35.457056, 139.630972" target="_blank">Google MAP</a>\
                                        </div>\
                                        <div class="venu_open">\
                                          <p>Opening hours:</p>\
                                          <p>10am- 6pm</p>\
                                        </div>\
                                      </div>\
                                    </div>\
                                </div>';

          Rugby_Diner_7_oath = '<div class="multi_market">\
                                  <div class="filler_info">\
                                        <p class="nlife">Bars & Nightlife</p>\
                                      </div>\
                                      <div class="container_venu">\
                                        <div class="venu_pic">\
                                          <img src="/wp-content/uploads/2019/05/9.jpg" class="img-responsive" alt="">\
                                        </div>\
                                        <h3>Kick off your rugby night</h3>\
                                        <p>As its name suggests, this sports bar is where rugby fans gather. You can combine craft beer, meals and your passion for rugby here: watch the games on its four screens while enjoying a premium selection of craft beer from around the world, including those from the current top rugby countries.</p>\
                                        <div class="">\
                                          <div class="venu_name">\
                                            <p>Venue name:</p>\
                                            <p>Rugby Diner 7 oath&apos;s</p>\
                                          </div>\
                                          <div class="venu_contact">\
                                            <p>Contact:</p>\
                                            <a class="button_purple" href="https://www.7-oaths.com/" target="_blank">VISIT WEBSITE</a>\
                                            <a class="button_purple" href="tel:045 319 4259">CALL VENUE</a>\
                                          </div>\
                                          <div class="venu_address">\
                                            <p>Address:</p>\
                                            <p>3F, 2-29 Bentendori, Naka-ku, Yokohama-shi Kanagawa</p>\
                                            <a class="button_purple" href="https://www.google.com/maps?q=35.447556, 139.638944" target="_blank">Google MAP</a>\
                                          </div>\
                                          <div class="venu_open">\
                                            <p>Opening hours:</p>\
                                            <p>11.30am-1.30pm, 5pm-11pm, closed Mon & Sun</p>\
                                          </div>\
                                        </div>\
                                      </div>\
                                  </div>';

                    Hamagyu = '<div class="multi_market">\
                                    <div class="filler_info">\
                                      <p class="resta">Restaurant</p>\
                                    </div>\
                                    <div class="container_venu">\
                                      <div class="venu_pic">\
                                        <img src="/wp-content/uploads/2019/05/10.jpg" class="img-responsive" alt="">\
                                      </div>\
                                      <h3>Grill beef with the locals</h3>\
                                      <p>ACraving chunks of meat and mega-sized high balls? This tiny yakiniku (beef barbecue) joint is the place to be. Start your evening by lining your stomach here, strike up a conversation with some locals, and then continue your adventures in the alleys of Noge. Yokohama nightlife in a nutshell.</p>\
                                      <div class="">\
                                        <div class="venu_name">\
                                          <p>Venue name:</p>\
                                          <p>Hamagyu</p>\
                                        </div>\
                                        <div class="venu_contact">\
                                          <p>Contact:</p>\
                                          <a class="button_purple" href="http://negihama.jp/" target="_blank">VISIT WEBSITE</a>\
                                          <a class="button_purple" href="tel:045 341 4829">CALL VENUE</a>\
                                        </div>\
                                        <div class="venu_address">\
                                          <p>Address:</p>\
                                          <p>2-76-3 Nogecho, Naka-ku, Yokohama-shi Kanagawa</p>\
                                          <a class="button_purple" href="https://www.google.com/maps?q=35.447944, 139.629917" target="_blank">Google MAP</a>\
                                        </div>\
                                        <div class="venu_open">\
                                          <p>Opening hours:</p>\
                                          <p>Mon, Wed, Thu 5pm-11pm, Fri 5pm-11.30pm, Sat 4pm-11.30pm,Sun 4pm-11pm, closed Tue</p>\
                                        </div>\
                                      </div>\
                                  </div>\
                              </div>';


                    Orbi = '<div class="multi_market">\
                                    <div class="filler_info">\
                                <p class="things_do">Things to do</p>\
                                <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>\
                              </div>\
                              <div class="container_venu">\
                                <div class="venu_pic">\
                                  <img src="/wp-content/uploads/2019/05/11.jpg" class="img-responsive" alt="">\
                                </div>\
                                <h3>Jump into the jungle</h3>\
                                <p>Did you know there&apos;s a jungle in this port town? At Orbi Yokohama, Sega’s entertainment technology gives you the chance to experience the wonder of the wild with all your senses. Go on, pet a capybara or armadillo – if you dare…</p>\
                                <div class="">\
                                  <div class="venu_name">\
                                    <p>Venue name:</p>\
                                    <p>Orbi Yokohama</p>\
                                  </div>\
                                  <div class="venu_contact">\
                                    <p>Contact:</p>\
                                    <a class="button_purple" href="http://orbiearth.com/en" target="_blank">VISIT WEBSITE</a>\
                                    <a class="button_purple" href="tel:045 319 6543">CALL VENUE</a>\
                                  </div>\
                                  <div class="venu_address">\
                                    <p>Address:</p>\
                                    <p>5-6F Mark Is Minatomirai, 3-5-1 Minato Mirai, Nishi-ku, Yokohama Kanagawa </p>\
                                    <a class="button_purple" href="https://www.google.com/maps?q=35.457250, 139.632222" target="_blank">Google MAP</a>\
                                  </div>\
                                  <div class="venu_open">\
                                    <p>Opening hours:</p>\
                                    <p>10am-11pm (last entry 9pm) daily</p>\
                                  </div>\
                                </div>\
                              </div>\
                           </div>';

          Hakkeijima = '<div class="multi_market">\
                          <div class="filler_info">\
                                <p class="things_do">Things to do</p>\
                                <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>\
                              </div>\
                              <div class="container_venu">\
                                <div class="venu_pic">\
                                  <img src="/wp-content/uploads/2019/05/12.jpg" class="img-responsive" alt="">\
                                </div>\
                                <h3>Run over the sea</h3>\
                                <p>You can see more than 120,000 creatures large and small at the Aquamuseum and touch marine animals at this ‘leisure land’, which consists of an amusement park and aquarium. At the attraction area, don&apos;t forget to ride the sea-crossing Surf Coaster.</p>\
                                <div class="">\
                                  <div class="venu_name">\
                                    <p>Venue name:</p>\
                                    <p>Hakkeijima Sea Paradise</p>\
                                  </div>\
                                  <div class="venu_contact">\
                                    <p>Contact:</p>\
                                    <a class="button_purple" href="http://www.seaparadise.co.jp/english/" target="_blank">VISIT WEBSITE</a>\
                                    <a class="button_purple" href="tel:045 788 8888">CALL VENUE</a>\
                                  </div>\
                                  <div class="venu_address">\
                                    <p>Address:</p>\
                                    <p>Hakkeijima, Kanazawa-ku, Yokohama-shi Kanagawa</p>\
                                    <a class="button_purple" href="https://www.google.com/maps?q=35.337389, 139.645889" target="_blank">Google MAP</a>\
                                  </div>\
                                  <div class="venu_open">\
                                    <p>Opening hours:</p>\
                                    <p>9.30am-8pm</p>\
                                  </div>\
                                </div>\
                              </div>\
                          </div>';

         mirai_Yokocho = '<div class="multi_market">\
                              <div class="filler_info">\
                                    <p class="resta">Restaurant/cafe</p>\
                                  </div>\
                                  <div class="container_venu">\
                                    <div class="venu_pic">\
                                      <img src="/wp-content/uploads/2019/05/13.jpg" class="img-responsive" alt="">\
                                    </div>\
                                    <h3>Eat out at a yokocho</h3>\
                                    <p>Hungry? If you are at Minato Mirai, check out the alleyway-inspired dining floors at Dockyard Garden. Spread across B1 and B2 of the Landmark Tower, you’ll find a variety of restaurants serving international cuisines as well as classic Japanese dishes such as gyoza, udon and yakitori. At the World Beer Bar & Restaurant, you can enjoy over 250 kinds of international beer, of which 20 are on tap.</p>\
                                    <div class="">\
                                      <div class="venu_name">\
                                        <p>Venue name:</p>\
                                        <p>Mirai Yokocho</p>\
                                      </div>\
                                      <div class="venu_contact">\
                                        <p>Contact:</p>\
                                        <a class="button_purple" href="https://www.yokohama-landmark.jp/food/" target="_blank">VISIT WEBSITE</a>\
                                        <a class="button_purple" href="tel:045 788 8888">CALL VENUE</a>\
                                      </div>\
                                      <div class="venu_address">\
                                        <p>Address:</p>\
                                        <p>Yokohama Landmark Tower, Dockyard Garden B1-2F, 2-2-1 Minatomirai, Nishi-ku, Yokohama-shi Kanagawa</p>\
                                        <a class="button_purple" href="https://www.google.com/maps?q=35.454972, 139.631250" target="_blank">Google MAP</a>\
                                      </div>\
                                      <div class="venu_open">\
                                        <p>Opening hours:</p>\
                                        <p>Hours vary by venue</p>\
                                      </div>\
                                    </div>\
                                  </div>\
                          </div>';

          Bennys_place = '<div class="multi_market">\
                        <div class="filler_info">\
                              <p class="nlife">Bars & Nightlife</p>\
                          </div>\
                            <div class="container_venu">\
                              <div class="venu_pic">\
                                <img src="/wp-content/uploads/2019/05/14.jpg" class="img-responsive" alt="">\
                              </div>\
                              <h3>Hang out with other sports fans</h3>\
                              <p>If you&apos;re looking to watch a sports game at bar, head to Benny&apos;s Place. It also serves a range of American diner-style dishes, such as the popular chunky sparerib steak, which you&apos;d need to pre-order in advance. After the game, stick around and play a few rounds of darts.</p>\
                              <div class="">\
                                <div class="venu_name">\
                                  <p>Venue name:</p>\
                                  <p>Benny&apos;s Place</p>\
                                </div>\
                                <div class="venu_contact">\
                                  <p>Contact:</p>\
                                  <a class="button_purple" href="https://www.facebook.com/Bennys-Place-Yokohama-760881383947224" target="_blank">VISIT WEBSITE</a>\
                                  <a class="button_purple" href="tel:045 671 0818">CALL VENUE</a>\
                                </div>\
                                <div class="venu_address">\
                                  <p>Address:</p>\
                                  <p>Mitsubo Bldg 2F, Ishikawacho, Naka-ku, Yokohama-shi Kanagawa </p>\
                                  <a class="button_purple" href="https://www.google.com/maps?q=35.437833, 139.645361" target="_blank">Google MAP</a>\
                                </div>\
                                <div class="venu_open">\
                                  <p>Opening hours:</p>\
                                  <p>Tue-Thu 6pm-12midnight, Fri, Sat 6pm-2am, closed Mon & Sun</p>\
                                </div>\
                              </div>\
                             </div>\
                          </div>';

          Hotel_New_Grand = '<div class="multi_market">\
                              <div class="filler_info">\
                                    <p class="resta">Restaurant/cafe</p>\
                                  </div>\
                                  <div class="container_venu">\
                                    <div class="venu_pic">\
                                      <img src="/wp-content/uploads/2019/05/15.jpg" class="img-responsive" alt="">\
                                    </div>\
                                    <h3>Dine out in style</h3>\
                                    <p>The upscale Hotel New Grand has seen many a famous figure pass through its doors, and its restaurants offer a variety of dishes and drinks. At Il Giardino, you can enjoy authentic Italian cuisine. For a relaxing dining experience, opt for the terrace seats facing the hotel&apos;s central courtyard.</p>\
                                    <div class="">\
                                      <div class="venu_name">\
                                        <p>Venue name:</p>\
                                        <p>Hotel New Grand</p>\
                                      </div>\
                                      <div class="venu_contact">\
                                        <p>Contact:</p>\
                                        <a class="button_purple" href="https://www.hotel-newgrand.co.jp/english/" target="_blank">VISIT WEBSITE</a>\
                                        <a class="button_purple" href="tel:045 681 1841">CALL VENUE</a>\
                                      </div>\
                                      <div class="venu_address">\
                                        <p>Address:</p>\
                                        <p>10 Yamashitacho, Naka-ku, Yokohama-shi Kanagawa  </p>\
                                        <a class="button_purple" href="https://www.google.com/maps?q=35.444833, 139.649639" target="_blank">Google MAP</a>\
                                      </div>\
                                      <div class="venu_open">\
                                        <p>Opening hours:</p>\
                                        <p>Hours vary by venue</p>\
                                      </div>\
                                    </div>\
                                  </div>\
                              </div>';

          Sojiji_Temple = '<div class="multi_market">\
                            <div class="filler_info">\
                                  <p class="aculture">Art & Culture</p>\
                             </div>\
                                <div class="container_venu">\
                                  <div class="venu_pic">\
                                    <img src="/wp-content/uploads/2019/05/16.jpg" class="img-responsive" alt="">\
                                  </div>\
                                  <h3>Experience zazen meditation</h3>\
                                  <p>Originally founded in Ishikawa prefecture about 700 years ago, this temple was relocated in 1911 to its present place in Yokohama. This temple welcomes guests from around the world for zazen meditation training (English sessions are offered at ¥500 once a month. See sojiji.jp/english for details). </p>\
                                  <div class="">\
                                    <div class="venu_name">\
                                      <p>Venue name:</p>\
                                      <p>Sotoshu Daihonzan Sojiji Temple</p>\
                                    </div>\
                                    <div class="venu_contact">\
                                      <p>Contact:</p>\
                                      <a class="button_purple" href="http://www.sojiji.jp/english/index.html" target="_blank">VISIT WEBSITE</a>\
                                      <a class="button_purple" href="tel:045 581 6021">CALL VENUE</a>\
                                    </div>\
                                    <div class="venu_address">\
                                      <p>Address:</p>\
                                      <p>2-1-1 Tsurumi, Tsurumi-ku, Yokohama Kanagawa </p>\
                                      <a class="button_purple" href="https://www.google.com/maps?q=35.506861, 139.670833" target="_blank">Google MAP</a>\
                                    </div>\
                                    <div class="venu_open">\
                                      <p>Opening hours:</p>\
                                      <p>10am-4.30pm / closed Thu & Fri (open if holiday)</p>\
                                    </div>\
                                  </div>\
                                </div>\
                            </div>';

          Sheraton_Hotel = '<div class="multi_market">\
                              <div class="filler_info">\
                                    <p class="resta">Restaurant</p>\
                               </div>\
                                  <div class="container_venu">\
                                    <div class="venu_pic">\
                                      <img src="/wp-content/uploads/2019/05/17.jpg" class="img-responsive" alt="">\
                                    </div>\
                                    <h3>Appreciate wagyu with a view</h3>\
                                    <p>With its accessible location connected to Yokohama Station, this hotel has become a destination for both tourists and locals keen on quality food without wanting to stray too far. At teppanyaki restaurant Sagami, you can enjoy prime wagyu beef alongside romantic views of the Yokohama skyline. </p>\
                                    <div class="">\
                                      <div class="venu_name">\
                                        <p>Venue name:</p>\
                                        <p>Yokohama Bay Sheraton Hotel & Towers</p>\
                                      </div>\
                                      <div class="venu_contact">\
                                        <p>Contact:</p>\
                                        <a class="button_purple" href="https://www.yokohamabay-sheraton.co.jp/language/english/" target="_blank">VISIT WEBSITE</a>\
                                        <a class="button_purple" href="tel:045 411 1111">CALL VENUE</a>\
                                      </div>\
                                      <div class="venu_address">\
                                        <p>Address:</p>\
                                        <p>1-3-23 Kitasaiwai, Nishi-ku, Yokohama-shi Kanagawa  </p>\
                                        <a class="button_purple" href="https://www.google.com/maps?q=35.466750, 139.620194" target="_blank">Google MAP</a>\
                                      </div>\
                                      <div class="venu_open">\
                                        <p>Opening hours:</p>\
                                        <p> Hours vary by venue</p>\
                                      </div>\
                                    </div>\
                                  </div>\
                              </div>';
          Kinpira_Kitchen = '<div class="multi_market">\
                              <div class="filler_info">\
                                    <p class="resta">Restaurant</p>\
                               </div>\
                                  <div class="container_venu">\
                                    <div class="venu_pic">\
                                      <img src="/wp-content/uploads/2019/05/18.jpg" class="img-responsive" alt="">\
                                    </div>\
                                    <h3>Wine and dine the French way</h3>\
                                    <p>Located at the middle of Noge alley, this pretty bistro offers authentic French dishes as well as a variety of wines from around the world. Try the sautￃﾩed sea bream: the rich sauce is a perfect complement to the delicate sea bream, and it￢ﾀﾙs served with grilled vegetables and mashed potatoes.</p>\
                                    <div class="">\
                                      <div class="venu_name">\
                                        <p>Venue name:</p>\
                                        <p>Kinpira Kitchen</p>\
                                      </div>\
                                      <div class="venu_contact">\
                                        <p>Contact:</p>\
                                        <a class="button_purple" href="https://www.ami-yokohama.co.jp" target="_blank">VISIT WEBSITE</a>\
                                        <a class="button_purple" href="tel:045 341 4575">CALL VENUE</a>\
                                      </div>\
                                      <div class="venu_address">\
                                        <p>Address:</p>\
                                        <p>2-77-1 Nogecho, Naka-ku, Yokohama-shi Kanagawa</p>\
                                        <a class="button_purple" href="https://www.google.com/maps?q=35.447611, 139.629833" target="_blank">Google MAP</a>\
                                      </div>\
                                      <div class="venu_open">\
                                        <p>Opening hours:</p>\
                                        <p>Tue-Sat 12noon-3pm (L.O. 2pm), 5.30pm-12midnight (L.O. 11pm), Sun 12noon-3pm (L.O. 2pm), 5.30pm-11pm (L.O. 10pm), closed Mon</p>\
                                      </div>\
                                    </div>\
                                  </div>\
                              </div>';

          Sainkeien_Garden = '<div class="multi_market">\
                                <div class="filler_info">\
                                      <p class="aculture">Art & Culture</p>\
                                      <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>\
                                    </div>\
                                    <div class="container_venu">\
                                      <div class="venu_pic">\
                                        <img src="/wp-content/uploads/2019/05/19.jpg" class="img-responsive" alt="">\
                                      </div>\
                                      <h3>Take a stroll in a historic garden</h3>\
                                      <p>We have silk trader Sankei Hara to thank for this beautiful Japanese garden built in 1906. Besides pretty ponds and paths, it features precious historic buildings, including a three-storey pagoda from Kyoto and a daimyo’s (military lord) house, and stays open until dark during cherry blossom- and firefly-viewing seasons. At the memorial hall, you can participate in a tea ceremony and drink a cup of matcha (green tea) for only ¥500.</p>\
                                      <div class="">\
                                        <div class="venu_name">\
                                          <p>Venue name:</p>\
                                          <p>Sankeien Garden</p>\
                                        </div>\
                                        <div class="venu_contact">\
                                          <p>Contact:</p>\
                                          <a class="button_purple" href="https://www.sankeien.or.jp/en-about/" target="_blank">VISIT WEBSITE</a>\
                                          <a class="button_purple" href="tel:045 621 0634">CALL VENUE</a>\
                                        </div>\
                                        <div class="venu_address">\
                                          <p>Address:</p>\
                                          <p>58-1 Honmoku-Sannotani, Naka-ku Kanagawa </p>\
                                          <a class="button_purple" href="https://www.google.com/maps?q=35.417972, 139.661306" target="_blank">Google MAP</a>\
                                        </div>\
                                        <div class="venu_address">\
                                          <p>Price:</p>\
                                          <p>¥700, children aged 14 and younger ¥200</p>\
                                        </div>\
                                        <div class="venu_open">\
                                          <p>Opening hours:</p>\
                                          <p>9am-5pm (last entry 4.30pm)</p>\
                                        </div>\
                                      </div>\
                                   </div>\
                                </div>';
                   Stove_s = '<div class="multi_market">\
                                <div class="filler_info">\
                              <p class="resta">Restaurant</p>\
                              <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>\
                            </div>\
                            <div class="container_venu">\
                              <div class="venu_pic">\
                                <img src="/wp-content/uploads/2019/05/21.jpg" class="img-responsive" alt="">\
                              </div>\
                              <h3>Savour local veggies</h3>\
                              <p>Located on the west side of Yokohama Station, this restaurant is a local favourite and has been in business over 25 years. Meals are made with local vegetables, while every bit of their burgers are homemade: even the pickles are their original recipe. Irregular live or DJ performances are also held.</p>\
                              <div class="">\
                                <div class="venu_name">\
                                  <p>Venue name:</p>\
                                  <p>Stove&apos;s</p>\
                                </div>\
                                <div class="venu_contact">\
                                  <p>Contact:</p>\
                                  <a class="button_purple" href="http://www.stovesyokohama.com/stoves/ " target="_blank">VISIT WEBSITE</a>\
                                  <a class="button_purple" href="tel:045 312 2278">CALL VENUE</a>\
                                </div>\
                                <div class="venu_address">\
                                  <p>Address:</p>\
                                  <p>Saito Bldg 1F, 2-1-3 Minamisaiwai, Nishi-ku, Yokohama-shi Kanagawa </p>\
                                  <a class="button_purple" href="https://www.google.com/maps?q=35.463722, 139.619278" target="_blank">Google MAP</a>\
                                </div>\
                                <div class="venu_open">\
                                  <p>Opening hours:</p>\
                                  <p>Sun-Thu 12noon-2am (L.O. 1.20am), Fri & Sat 12noon-4am (L.O. 2.20am)</p>\
                                </div>\
                              </div>\
                              <a href="" class="readmore sp">Read more</a>\
                            </div>\
                        </div>';

                        Yokohama_Cosmoworld = '<div class="multi_market">\
                                   <div class="filler_info">\
                                      <p class="things_do">Things to do</p>\
                                      <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>\
                                    </div>\
                                    <div class="container_venu">\
                                      <div class="venu_pic">\
                                        <img src="/wp-content/uploads/2019/05/22.jpg" class="img-responsive" alt="">\
                                      </div>\
                                      <h3>Ride the giant clock</h3>\
                                      <p>Holding a Guinness World Record for being the tallest Ferris wheel with a clock, Cosmo Clock 21 is a top tourist attraction, offering splendid vistas of the city during its 15-minute ride. Ride one of the transparent gondolas to enjoy 360-degree views of Yokohama. </p>\
                                      <div class="">\
                                        <div class="venu_name">\
                                          <p>Venue name:</p>\
                                          <p>Yokohama Cosmoworld</p>\
                                        </div>\
                                        <div class="venu_contact">\
                                          <p>Contact:</p>\
                                          <a class="button_purple" href="http://cosmoworld.jp/ " target="_blank">VISIT WEBSITE</a>\
                                          <a class="button_purple" href="tel:045 641 6591">CALL VENUE</a>\
                                        </div>\
                                        <div class="venu_address">\
                                          <p>Address:</p>\
                                          <p>2-8-1 Shinko, Naka-ku, Yokohama-shi Kanagawa</p>\
                                          <a class="button_purple" href="https://www.google.com/maps?q=35.455222, 139.636889" target="_blank">Google MAP</a>\
                                        </div>\
                                        <div class="venu_open">\
                                          <p>Opening hours:</p>\
                                          <p>10am- 5pm</p>\
                                        </div>\
                                      </div>\
                                   </div>\
                        </div>';

                        Yokohama_Sky_Cruise = '<div class="multi_market">\
                                           <div class="filler_info">\
                                            <p class="things_do">Things to do</p>\
                                            <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>\
                                          </div>\
                                          <div class="container_venu">\
                                            <div class="venu_pic">\
                                              <img src="/wp-content/uploads/2019/05/23.jpg" class="img-responsive" alt="">\
                                            </div>\
                                            <h3>Cruise the sky</h3>\
                                            <p>Yokohama is a port city packed with sightseeing tours – including this aerial one. Hop on a helicopter to get the best views ever and make your Yokohama experience unforgettable. Flights are offered on Fridays, weekends and holidays. </p>\
                                            <div class="">\
                                              <div class="venu_name">\
                                                <p>Venue name:</p>\
                                                <p>Yokohama Sky Cruise</p>\
                                              </div>\
                                              <div class="venu_contact">\
                                                <p>Contact:</p>\
                                                <a class="button_purple" href="http://www.skycruise.jp/  " target="_blank">VISIT WEBSITE</a>\
                                                <a class="button_purple" href="tel:045 223 1155">CALL VENUE</a>\
                                              </div>\
                                              <div class="venu_address">\
                                                <p>Address:</p>\
                                                <p>Minato Mirai Heliport, 1-7 Minato Mirai, Nishi-ku, Yokohama Kanagawa</p>\
                                                <a class="button_purple" href="https://www.google.com/maps?q=35.463111, 139.637583" target="_blank">Google MAP</a>\
                                              </div>\
                                              <div class="venu_address">\
                                                <p>Price:</p>\
                                                <p>From ¥9,000</p>\
                                              </div>\
                                              <div class="venu_open">\
                                                <p>Opening hours:</p>\
                                                <p>N/A</p>\
                                              </div>\
                                            </div>\
                                          </div>\
                                    </div>';

                        InterCon_Hotel = '<div class="multi_market">\
                                              <div class="filler_info">\
                                                <p class="things_do">Things to do</p>\
                                             </div>\
                                              <div class="container_venu">\
                                                <div class="venu_pic">\
                                                  <img src="/wp-content/uploads/2019/05/24.jpg" class="img-responsive" alt="">\
                                                </div>\
                                                <h3>Treat yourself to some view therapy</h3>\
                                                <p>Modelled after a yacht&apos;s billowing sail, this hotel occupies one of the most iconic buildings in Yokohama and houses an exclusive spa where you can enjoy both a massage and gorgeous ocean vistas at the same time. </p>\
                                                <div class="">\
                                                  <div class="venu_name">\
                                                    <p>Venue name:</p>\
                                                    <p>InterContinental Yokohama Grand</p>\
                                                  </div>\
                                                  <div class="venu_contact">\
                                                    <p>Contact:</p>\
                                                    <a class="button_purple" href="https://www.ihg.com/intercontinental/hotels/gb/en/yokohama/yokha/hoteldetail  " target="_blank">VISIT WEBSITE</a>\
                                                    <a class="button_purple" href="tel:045 223 2222">CALL VENUE</a>\
                                                  </div>\
                                                  <div class="venu_address">\
                                                    <p>Address:</p>\
                                                    <p>1-1-1 Minatomirai, Nishi-ku, Yokohama Kanagawa </p>\
                                                    <a class="button_purple" href="https://www.google.com/maps?q=35.457611, 139.637222" target="_blank">Google MAP</a>\
                                                  </div>\
                                                  <div class="venu_open">\
                                                    <p>Opening hours:</p>\
                                                    <p>Spa hours 11am-7pm</p>\
                                                  </div>\
                                                </div>\
                                                </div>\
                                           </div>';

                        Noh_Theatre = '<div class="multi_market">\
                                            <div class="filler_info">\
                                    <p class="aculture">Art & Culture</p>\
                                    <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>\
                                  </div>\
                                  <div class="container_venu">\
                                    <div class="venu_pic">\
                                      <img src="/wp-content/uploads/2019/05/25.jpg" class="img-responsive" alt="">\
                                    </div>\
                                    <h3>Watch the ancient art of noh</h3>\
                                    <p>Noh and kyogen are both forms of classic drama and considered two of the world&apos;s oldest performing arts. Watch them here along with other traditional Japanese arts like Ryukyu buyo as well as new works through international collaborations. The second Sunday of every month is Kyogen Day, when tickets go for just ¥2,000.</p>\
                                    <div class="">\
                                      <div class="venu_name">\
                                        <p>Venue name:</p>\
                                        <p>Yokohama Noh Theater</p>\
                                      </div>\
                                      <div class="venu_contact">\
                                        <p>Contact:</p>\
                                        <a class="button_purple" href="http://ynt.yafjp.org/en/" target="_blank">VISIT WEBSITE</a>\
                                        <a class="button_purple" href="tel:045 263 3055">CALL VENUE</a>\
                                      </div>\
                                      <div class="venu_address">\
                                        <p>Address:</p>\
                                        <p>27-2 Momijigaoka, Nishi-ku, Yokohama Kanagawa</p>\
                                        <a class="button_purple" href="https://www.google.com/maps?q=35.452556, 139.625250" target="_blank">Google MAP</a>\
                                      </div>\
                                      <div class="venu_open">\
                                        <p>Opening hours:</p>\
                                        <p>N/A</p>\
                                      </div>\
                                  </div>\
                              </div>\
                        </div>';

                        Bay_Hotel_Tokyu = '<div class="multi_market">\
                                            <div class="filler_info">\
                                                    <p class="things_do">Things to do</p>\
                                                </div>\
                                                  <div class="container_venu">\
                                                    <div class="venu_pic">\
                                                      <img src="/wp-content/uploads/2019/05/26.jpg" class="img-responsive" alt="">\
                                                    </div>\
                                                    <h3>Sleep in marine surrounds</h3>\
                                                    <p>All rooms on this hotel&apos;s Bay Club floor are designed with an ocean theme – think blue carpets and white beds – while the suites offer eye-popping panoramic views of Yokohama&apos;s port. Sleeping by the sea doesn&apos;t get more comfy than this.</p>\
                                                    <div class="">\
                                                      <div class="venu_name">\
                                                        <p>Venue name:</p>\
                                                        <p>The Yokohama Bay Hotel Tokyu</p>\
                                                      </div>\
                                                      <div class="venu_contact">\
                                                        <p>Contact:</p>\
                                                        <a class="button_purple" href="https://ybht.co.jp/en/" target="_blank">VISIT WEBSITE</a>\
                                                        <a class="button_purple" href="tel:045 682 2222">CALL VENUE</a>\
                                                      </div>\
                                                      <div class="venu_address">\
                                                        <p>Address:</p>\
                                                        <p>2-3-7 Minatomirai, Nishi-ku, Yokohama-shi Kanagawa </p>\
                                                        <a class="button_purple" href="https://www.google.com/maps?q=35.456861, 139.635167" target="_blank">Google MAP</a>\
                                                      </div>\
                                                      <div class="venu_open">\
                                                        <p>Opening hours:</p>\
                                                        <p>N/A</p>\
                                                      </div>\
                                                    </div>\
                                                  </div>\
                                            </div>';
                      full_monty = '<div class="multi_market">\
                                       <div class="filler_info">\
                                  <p class="nlife">Bars & Nightlife</p>\
                                </div>\
                                <div class="container_venu">\
                                  <div class="venu_pic">\
                                    <img src="/wp-content/uploads/2019/05/27.jpg" class="img-responsive" alt="">\
                                  </div>\
                                  <h3>Grab a British pint</h3>\
                                  <p>This authentic British pub is the country’s oldest cider house. Here you can enjoy a selection of ciders from around the world, as well as a good range of craft beer. Besides their popular food menu, don’t miss the Fish & Chips Night every Wednesday as this classic dish is offered at only ¥500.</p>\
                                  <div class="">\
                                    <div class="venu_name">\
                                      <p>Venue name:</p>\
                                      <p>Full Monty British Pub and Cider House</p>\
                                    </div>\
                                    <div class="venu_contact">\
                                      <p>Contact:</p>\
                                      <a class="button_purple" href="http://fullmontyyokohama.com/ " target="_blank">VISIT WEBSITE</a>\
                                      <a class="button_purple" href="tel:045 334 8787">CALL VENUE</a>\
                                    </div>\
                                    <div class="venu_address">\
                                      <p>Address:</p>\
                                      <p>Kitahara Bldg 102, 41 Nishi-dori, Fukutomicho, Naka-ku, Yokohama-shi Kanagawa</p>\
                                      <a class="button_purple" href="https://www.google.com/maps?q=35.445583, 139.629083" target="_blank">Google MAP</a>\
                                    </div>\
                                    <div class="venu_open">\
                                      <p>Opening hours:</p>\
                                      <p>Mon, Tue, Thu 5pm-11pm, Wed, Fri, Sat 5pm-12midnight, Sun 4pm-10pm</p>\
                                    </div>\
                                  </div>\
                                </div>\
                               </div>';

                               green_sheep = '<div class="multi_market">\
                                                <div class="filler_info">\
                                                <p class="nlife">Bars & Nightlife</p>\
                                                </div>\
                                              <div class="container_venu">\
                                                <div class="venu_pic">\
                                                  <img src="/wp-content/uploads/2019/05/28.jpg" class="img-responsive" alt="">\
                                                </div>\
                                                <h3>Have a toast with Kilkenny</h3>\
                                                <p>If you crave an authentic shepherd’s pie or fish and chips, come to The Green Sheep, the only Irish pub in Yokohama. It opens till late and the bar is spacious enough to accommodate a big crowd. Do note that it gets especially crowded on game nights.</p>\
                                                <div class="">\
                                                  <div class="venu_name">\
                                                    <p>Venue name:</p>\
                                                    <p>The Green Sheep</p>\
                                                  </div>\
                                                  <div class="venu_contact">\
                                                    <p>Contact:</p>\
                                                    <a class="button_purple" href="http://foodcom.jp/green-sheep/ " target="_blank">VISIT WEBSITE</a>\
                                                    <a class="button_purple" href="tel:045 321 0950">CALL VENUE</a>\
                                                  </div>\
                                                  <div class="venu_address">\
                                                    <p>Address:</p>\
                                                    <p>1F, 2-10-17 Minamisaiwai, Nishi-ku, Yokohama-shi Kanagawa</p>\
                                                    <a class="button_purple" href="https://www.google.com/maps?q=35.463056, 139.617444" target="_blank">Google MAP</a>\
                                                  </div>\
                                                  <div class="venu_open">\
                                                    <p>Opening hours:</p>\
                                                    <p>Mon-Fri 5.30pm-2am (L.O. 1.30am), Sat 3pm-2am (1.30am), Sun 3pm-1am (12.30am)</p>\
                                                  </div>\
                                                </div>\
                                               </div>\
                               </div>';

                        Marine_walk_Yokohama = '<div class="multi_market">\
                                          <div class="filler_info">\
                                        <p class="shopping">Shopping</p>\
                                        <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>\
                                      </div>\
                                      <div class="container_venu">\
                                        <div class="venu_pic">\
                                          <img src="/wp-content/uploads/2019/05/30.png" class="img-responsive" alt="">\
                                        </div>\
                                        <h3>Shop in the sea breeze</h3>\
                                        <p>Located by the seaside in Minato Mirai, this open-air mall is like a small town complete with a selection of unique shops, cosy mini-parks and trendy restaurants. It&apos;s also a favourite for locals walking their dogs, while another sort of animal-related quirk awaits by the bathrooms.</p>\
                                        <div class="">\
                                          <div class="venu_name">\
                                            <p>Venue name:</p>\
                                            <p>Marine & Walk Yokohama</p>\
                                          </div>\
                                          <div class="venu_contact">\
                                            <p>Contact:</p>\
                                            <a class="button_purple" href="https://www.marineandwalk.jp/en/" target="_blank">VISIT WEBSITE</a>\
                                            <a class="button_purple" href="tel:045 680 6101">CALL VENUE</a>\
                                          </div>\
                                          <div class="venu_address">\
                                            <p>Address:</p>\
                                            <p>1-3-1 Shinko, Naka-ku, Yokohama Kanagawa</p>\
                                            <a class="button_purple" href="https://www.google.com/maps?q=35.454611, 139.642139" target="_blank">Google MAP</a>\
                                          </div>\
                                          <div class="venu_open">\
                                            <p>Opening hours:</p>\
                                            <p>N/A</p>\
                                          </div>\
                                        </div>\
                                      </div>\
                                  </div>';

            var sakuragicho_station = '<div class="multi_market">'+
'                  <div class="filler_info">'+
'                <p class="nlife">Bars & Nightlife</p>'+
'           </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/29.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Go bar-hopping</h3>'+
'                <p>Yokohama\'s drinkers love this: Noge-Tegata is a special coupon created to let you bar-hop at ease. For a mere ¥3,000, you\'ll get special offers at almost 70 shops which display a special flag. Buy yours at JR Sakuragicho Station\'s New Days or the Family Mart on Noge Naka-dori.</p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Sakuragicho JR station</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="http://noge-tegata.com/ " target="_blank">VISIT WEBSITE</a>'+
'                    <a class="button_purple" href="tel:045 321 0950">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>N/A</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.450889, 139.631056" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>Hours vary by venue</p>'+
'                  </div>'+
'                </div>'+
'                 </div>'+
'                  </div>';

                  var stadium_y = '<div class="multi_market">'+
'                   <div class="filler_info">'+
'                <p class="things_do">Things to do</p>'+
'                </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/31.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Watch a ball game over beer</h3>'+
'                <p>The home ground of the professional baseball team Yokohama DeNA Baystars, Yokohama Stadium has a capacity for 30,000 people. Sip the team’s original brews, such as the Bay Star’s Lager, while enjoying the game and take in the slight sea breeze from the nearby Yokohama Port. </p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Yokohama Stadium</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="https://www.yokohama-stadium.co.jp/ " target="_blank">VISIT WEBSITE</a>'+
'                    <a class="button_purple" href="tel:">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>Yokohama Park, Naka-ku, Yokohama-shi Kanagawa</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.443333, 139.640083" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>N/A</p>'+
'                  </div>'+
'                </div>'+
'                 </div>'+
'         </div>';

      var the_space = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="things_do">Things to do</p>'+
'                 </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/32.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Jog through the port town</h3>'+
'                <p>Runners flock to the area known as Minato Mirai because of its wide streets and upbeat atmosphere. The Space has changing rooms, and you can rent running gear and shoes here too. Lockers and showers are also available for ¥650 </p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>The Space</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="https://thespace.jp/" target="_blank">VISIT WEBSITE</a>'+
'                    <a class="button_purple" href="tel:045 264 4888">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p> Kannai Capital Bldg 201, 2-25 Bentendori, Naka-ku, Yokohama-shi Kanagawa</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.447361, 139.639306" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>N/A</p>'+
'                  </div>'+
'                </div>'+
'                </div>'+
'         </div>';

var motion_blue = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="nlife">Bars & Nightlife</p>'+
'                 </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/33.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Dive into the jazz scene</h3>'+
'                <p>With its rich reference to the old and new, Japanese jazz has evolved into a genre of its own. This is the best venue to catch live gigs featuring both aspiring and big-name musicians. </p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Motion Blue Yokohama</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="http://www.motionblue.co.jp/ " target="_blank">VISIT WEBSITE</a>'+
'                    <a class="button_purple" href="tel:045 226 1919">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>3F Yokohama Red Brick Warehouse, 1-1-2 Shinko, Naka-ku, Yokohama-shi Kanagawa</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.452694, 139.643333" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>6pm-10.30pm; Sat, Sun & hols 3pm-9.30pm</p>'+
'                  </div>'+
'                </div>'+
'               </div>'+
'         </div>';

var sake_bar = '<div class="multi_market">'+
'                 <div class="filler_info">'+
'                <p class="nlife">Bars & Nightlife</p>'+
'                 </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/34.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Sip some sake</h3>'+
'                <p>Don\'t know much about sake but are curious to learn more? Head to this standing bar that serves 100-plus types of sake. The staff here are knowledgeable and can give recommendations based on your preference. It\'s just ¥300-400 per glass, so be careful</p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Sake Bar Yokohama</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="https://sake-bar-yokohama.com/  " target="_blank">VISIT WEBSITE</a>'+
'                    <a class="button_purple" href="tel:045 624 8186">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>2F, 2-18-3 Minamisaiwai, Nishi-ku, Yokohama-shi Kanagawa</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.463694, 139.615500" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>5pm-10pm, closed Sun & hols</p>'+
'                  </div>'+
'                </div>'+
'                </div>'+
'         </div>';


var ramen_museum = '<div class="multi_market">'+
'              <div class="filler_info">'+
'                <p class="things_do">Things to do</p>'+
'                 <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/36.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Taste ramen from all around Japan</h3>'+
'                <p>The world\'s one and only ramen museum is actually more of an eatery/shop: you can sample ramen by nine different restaurants (including vegetarian options) from all over the nation, and buy ramen-related utensils or instant ramen to enjoy at home.</p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Shinyokohama Raumen Museum</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="http://www.raumen.co.jp/english/" target="_blank">VISIT WEBSITE</a>'+
'                    <a class="button_purple" href="tel:045 471 0503">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>2-14-21 Shin-Yokohama, Kohoku-ku, Yokohama-shi Kanagawa</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.509861, 139.614556" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>11am-9.30pm, Sun & hols 10.30am-9.30pm</p>'+
'                  </div>'+
'                </div>'+
'               </div>'+
'         </div>';


var sky_duck_counter = '<div class="multi_market">'+
'              <div class="filler_info">'+
'                <p class="things_do">Things to do</p>'+
'                     <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/37.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Hop aboard an amphibious bus</h3>'+
'                <p>A swimming bus tour seems like the perfect way to make the most of this historic port town, inviting you to enjoy the city and the refreshing breeze from the water.</p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Sky Duck Yokohama</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="https://www.facebook.com/SKYDuckYOKOHAMA" target="_blank">VISIT WEBSITE</a>'+
'                    <a class="button_purple" href="tel:03 3215 0008">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>Nipponmaru Memorial Park 2-1 Minato Mirai, Nishi-ku, Yokohama-shi Kanagawa</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.452750, 139.632500" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>N/A</p>'+
'                  </div>'+
'                </div>'+
'                </div>'+
'         </div>';


var kirin_brewery = '<div class="multi_market">'+
'             <div class="filler_info">'+
'                <p class="things_do">Things to do</p>'+
'               </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/38.png" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Down a pint of fresh beer</h3>'+
'                <p>Factory tours are always fun, but beer brewery tours are a special kind of treat. Head to brewing giant Kirin\'s plant to see how suds are made and down a few pints afterwards. The factory also houses several restaurants, including the craft beer-focused Spring Valley Brewery. Note that calling ahead for a booking is recommended for the brewery tour. </p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Kirin Brewery Yokohama Plant</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="https://www.kirin.co.jp/entertainment/factory/english/beer/" target="_blank">VISIT WEBSITE</a>'+
'                    <a class="button_purple" href="tel:045 503 8250">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>1-17-1 Namamugi, Tsurumi-ku, Yokohama-shi Kanagawa</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.490750, 139.665778" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>Tour hours 10am-4pm, closed Mon (Tue if Mon is hols)</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
'         </div>';


var yakatabune = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="things_do">Things to do</p>'+
'                 <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/39.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Sail on an old-school houseboat</h3>'+
'                <p>If you\'re up for some entertainment fit for a shogun, book your spot aboard an old Japanese houseboat (yakatabune) and dine on authentic cuisine while taking in the views. If you\'re still not convinced, the magic words \'unlimited drinks\' and \'karaoke on a tatami mat\' should do the trick. </p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Yakatabune Suzuyoshi</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="https://www.suzuyoshi.jp/index.html " target="_blank">VISIT WEBSITE</a>'+
'                    <a class="button_purple" href="tel:045 231 1600">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>1-101 Sakuragicho, Naka-ku, Yokohama-shi Kanagawa</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.450611, 139.633167" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>N/A</p>'+
'                  </div>'+
'                </div>'+
'                </div>'+
'         </div>';

var gimme_gimme = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="nlife">Bars & Nightlife</p>'+
'                </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/40.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Drink on the cheap</h3>'+
'                <p>The Noge area is great for drinking. One of the best examples is this \'80s disco-style bar, where all the drinks, including a large selection of cocktails and vodka from all over the world, are ¥500 and snacks ¥250, and no table charge.</p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Gimme! Gimme! Gimme!</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="http://gimmegimmegimme.jp/yokohama/" target="_blank">VISIT WEBSITE</a>'+
'                    <a class="button_purple" href="tel:045 341 3280">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>1F, 1-45 Nogecho, Naka-ku, Yokohama-shi Kanagawa</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.448028, 139.630194" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>11.30am-1.30pm, 5pm-11pm, closed Mon & Sun</p>'+
'                  </div>'+
'                </div>'+
'               </div>'+
'         </div>';


var edosei = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="resta">Restaurant/Cafe</p>'+
'                 <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/41.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Munch on a huge bun</h3>'+
'                <p>It\'s always fun to go on an eating binge around Chinatown. Many food stands will try to tempt you, but don\'t miss the buta-man at Edosei. It\'s said to be the biggest steamed pork bun in Chinatown; the juicy minced pork and soft bun are so satisfying.</p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Edosei</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="http://www.edosei.com/" target="_blank">VISIT WEBSITE</a>'+
'                    <a class="button_purple" href="tel:045 476 4884">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>192 Yamashita, Naka-ku, Yokohama-shi Kanagawa</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.442306, 139.645806" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>Mon-Fri 9am-8pm, Sat & sun 9am-9pm</p>'+
'                  </div>'+
'                </div>'+
'                </div>'+
'         </div>';


var yamashita_park = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="things_do">Things to do</p>'+
'               <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/42.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Gaze across the ocean</h3>'+
'                <p>Located right in front of Yokohama Port, Yamashita Park was the first seaside park in Japan. The park, which stretches for a few blocks and is popular with couples, is a great spot to gaze out towards the ocean or watch the ships cruise into the Osanbashi terminal. Count yourself lucky if you find a vacant bench: they\'re usually full.</p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Yamashita Park</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <!-- <a class="button_purple" href="https://www.suzuyoshi.jp/index.html " target="_blank">VISIT WEBSITE</a> -->'+
'                    <a class="button_purple" href="tel:045 641 4362">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>Yamashita-cho, Naka-ku, Yokohama Kanagawa</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.445750, 139.649583" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>N/A</p>'+
'                  </div>'+
'                </div>'+
'                </div>'+
'         </div>';

var yokohama_seryna_Romanjaya = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="resta">Restaurant/Cafe</p>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/43.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Beef up on wagyu</h3>'+
'                <p>Loved for its delicious gyunabe (a traditional beef pot which is slightly different from sukiyaki), this long-standing restaurant is renowned for using exclusive Kobe beef and kuroge wagyu in its dishes. Traditional Japanese kaiseki dishes are also available.</p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Yokohama Seryna-Romanjaya</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="http://www.seryna.com/english/english.html " target="_blank">VISIT WEBSITE</a>'+
'                    <a class="button_purple" href="tel:045 681 2727">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>4-45-1 Sumiyoshicho, Naka-ku, Yokohama Kanagawa</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.446750, 139.636361" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>11.30am-10pm (last orders 9pm)</p>'+
'                  </div>'+
'                </div>'+
'                  </div>'+
'         </div>';

var haikara = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="aculture">Art & Culture</p>'+
'                 </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/44.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Mill around in traditional garb</h3>'+
'                <p>Yokohama was one of the engines of Japans modernisation during the Meiji period, but the city still holds traces of the preceding era. Try renting a kimono or the more casual hakama for your stroll through this historic town. Better yet, pick up a rickshaw in front of the venue for the perfect photo op.</p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Yokohama  Kimono-kan</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="https://www.facebook.com/yokohama.kimono.station" target="_blank">VISIT WEBSITE</a>'+
'                    <a class="button_purple" href="tel:045 663 8108">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>Silk Center M1F Nr 134, 1 Yamashitacho, Naka-ku, Yokohama Kanagawa</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.447333, 139.645472" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>10am-6pm, closed Wed</p>'+
'                  </div>'+
'                </div>'+
'               </div>'+
'         </div>';

var red_brick = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="aculture">Art & Culture</p>'+
'                 </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/46.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Be a hipster among history</h3>'+
'                <p>Think you know kung fu? Well, you still might want to learn some Japanese martial arts too – a pursuit that can be realised at this karate dojo. The two-hour lessons are offered in Japanese, but English guidance is available.</p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Yokohama Red Brick Warehouse</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="https://www.yokohama-akarenga.jp/" target="_blank">VISIT WEBSITE</a>'+
'                    <a class="button_purple" href="tel:045 341 3966">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>1-1 Shinko, Naka-ku, Yokohama Kanagawa</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.452639, 139.642806" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>Building 1 10am-7pm; Building 2 11am-8pm</p>'+
'                  </div>'+
'                </div>'+
'               </div>'+
'         </div>';




var cafe_giang ='<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="resta">Restaurant/Cafe</p>'+
'                 </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/47.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Let your tastebuds travel to Vietnam</h3>'+
'                <p>This little wooden Vietnamese café is located near Chinatown\'s Choyomon Gate. Cafe Giang is legendary in Vietnam, and Japan was finally graced with an outpost in April 2018. Indulge in their authentic Vietnamese coffee or a banh mi sandwich.</p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Cafe Giang</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="https://cafegiang.co.jp/" target="_blank">VISIT WEBSITE</a>'+
'                    <a class="button_purple" href="tel:045 323 9088">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>78-3 Yamashitacho, Naka-ku, Yokohama Kanagawa</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.443861, 139.647278" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>10am-10.30pm (L.O. 10pm), Fri & Sat 10am-11pm (L.O. 10.30pm)</p>'+
'                  </div>'+
'                </div>'+
'               </div>'+
'         </div>';

var sea_bass = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="things_do">Things to do</p>'+
'                 </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/49.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Ride a bus on water</h3>'+
'                <p>Don\'t forget: Yokohama is a port city, which means public transport isn\'t just limited to land. So try the water transport around Yokohama Station and Minato Mirai areas. It\'s only 5 to 10 minutes between stops, and there are four services an hour at most.</p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Sea Bass</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="https://www.yokohama-cruising.jp/about/seabass/index.html#seabass_timetable  " target="_blank">VISIT WEBSITE</a>'+
'                    <a class="button_purple" href="tel:045 651 2697">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>Yamashitacho, Naka-ku, Yokohama-shi Kanagawa</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.445972, 139.651167" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>N/A</p>'+
'                  </div>'+
'                </div>'+
'               </div>'+
'         </div>';



var tinys = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="things_do">Things to do</p>'+
'               </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/50.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Stay beneath the railway tracks</h3>'+
'                <p>Under the elevated tracks of Hinodecho Station you\'ll find five tiny houses on wheels. The complex includes a hostel, a café lounge and a SUP (stand-up paddleboard) station. Dorms go from ¥4,200, while a tiny house starts at ¥20,000. At the SUP station, you can take a class to paddle through the city.</p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Tinys Yokohama Hinodecho</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="http://tinys.life/yokohama/" target="_blank">VISIT WEBSITE</a>'+
'                    <a class="button_purple" href="tel:045 651 2697">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>2-166 Hinodecho, Naka-ku, Yokohama Kanagawa</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.443278, 139.626556" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>N/A</p>'+
'                  </div>'+
'                </div>'+
'               </div>'+
'         </div>';

var yokohama = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="shopping">Shopping</p>'+
'                  <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/48.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Unleash your inner shopaholic</h3>'+
'                <p>In this beautiful port town, there are a wide range of shopping options to fulfill all needs and budgets. Check out the shopping institution Don Quijote, classic department stores Sogo and Takashimaya, and casual shopping malls Porta, Bay Quarter, More’s and Joinus.</p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Yokohama station </p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <p>N/A</p>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>N/A</p>'+
'                     <a class="button_purple" href="https://www.google.com/maps?q=35.465833, 139.622306" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>Hours vary by venue</p>'+
'                  </div>'+
'                </div>'+
'               </div>'+
'         </div>';


var mirai_manyo_club = '<div class="multi_market">'+
'              <div class="filler_info">'+
'                <p class="things_do">Things to do</p>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/35.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Experience a city hot spring</h3>'+
'                <p>If you can’t manage to get away for an onsen retreat, a trip to this mega spa is a good second best. Enjoy the indulgence of the Yugawara Onsen as well as massage treatments, a restaurant with a fantastic city view, and a choice of hotel rooms should you wish to stay the night.</p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Yokohama Minato Mirai Manyo Club</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="http://www.manyo.co.jp/mm21/eng/" target="_blank">VISIT WEBSITE</a>'+
'                    <a class="button_purple" href="tel:0570 07 4126">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>2-7-1 Shinko, Naka-ku, Yokohama-shi Kanagawa</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.456000, 139.638250" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>24 hours</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
'         </div>';

var imai_dojo ='<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="aculture">Art & Culture</p>'+
'               <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/45.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Master karate</h3>'+
'                <p>Think you know kung fu? Well, you still might want to learn some Japanese martial arts too – a pursuit that can be realised at this karate dojo. The two-hour lessons are offered in Japanese, but English guidance is available.</p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Imai Dojo</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="http://www.imai-dojo.com/english" target="_blank">VISIT WEBSITE</a>'+
'                    <a class="button_purple" href="tel:045 341 3966">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>B1F NU Kannai Bldg, 223-1 Yamashitacho, Naka-ku, Yokohama-shi Kanagawa</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.442667, 139.641361" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>N/A</p>'+
'                  </div>'+
'                </div>'+
'               </div>'+
'         </div>';





            markers_lg_lt = [
              ['1', 'Nissan Stadium', 35.510250, 139.606361, ['things'],'things1x.png'],
              ['2', oriental_table , 35.508667, 139.614833, ['cafe'],'cafe1x.png'],
              ['3', montbell, 35.441278, 139.660750, ['shopping'],'shopping1x.png'],
              ['4', YCAT, 35.464722, 139.624806, ['things'],'things1x.png'],
              ['5', Cupnoodles_Museum, 35.455500, 139.638917, ['things'],'things1x.png'],
              ['6', Hard_Rock, 35.455806, 139.633083, ['cafe'],'cafe1x.png'],
              ['7', Osanbashi_Terminal, 35.451194, 139.647417, ['things'],'things1x.png'],
              ['8', Yokohama_Museum, 35.457056, 139.630972, ['culture'],'culture1x.png'],
              ['9', Rugby_Diner_7_oath, 35.447556, 139.638944, ['nightlife'],'night_life1x.png'],
              ['10', Hamagyu, 35.447944, 139.629917, ['cafe'],'cafe1x.png'],
              ['11', Orbi, 35.457250, 139.632222, ['things'],'things1x.png'],
              ['12', Hakkeijima, 35.337389, 139.645889, ['things'],'things1x.png'],
              ['13', mirai_Yokocho, 35.454972, 139.631250, ['cafe'],'cafe1x.png'],
              ['14', Bennys_place, 35.437833, 139.645361, ['nightlife'],'night_life1x.png'],
              ['15', Hotel_New_Grand, 35.444833, 139.649639, ['cafe'],'cafe1x.png'],
              ['16', Sojiji_Temple, 35.506861, 139.670833, ['culture'],'culture1x.png'],
              ['17', Sheraton_Hotel, 35.466750, 139.620194, ['cafe'],'cafe1x.png'],
              ['18', Kinpira_Kitchen, 35.447611, 139.629833, ['cafe'],'cafe1x.png'],
              ['19', Sainkeien_Garden, 35.417972, 139.661306, ['culture'],'culture1x.png'],
              ['20', Stove_s, 35.463722, 139.619278, ['cafe'],'cafe1x.png'],
              ['21', Yokohama_Cosmoworld, 35.455222, 139.636889, ['things'],'things1x.png'],
              ['22', Yokohama_Sky_Cruise, 35.463111, 139.637583, ['things'],'things1x.png'],
              ['23', InterCon_Hotel, 35.457611, 139.637222, ['things'],'things1x.png'],
              ['24', Noh_Theatre, 35.452556, 139.625250, ['culture'],'culture1x.png'],
              ['25', Bay_Hotel_Tokyu, 35.456861, 139.635167, ['things'],'things1x.png'],
              ['26', full_monty, 35.445583, 139.629083, ['nightlife'],'night_life1x.png'],
              ['27', green_sheep, 35.463056, 139.617444, ['nightlife'],'night_life1x.png'],
              ['28', Marine_walk_Yokohama, 35.454611, 139.642139, ['shopping'],'shopping1x.png'],
              ['29', stadium_y, 35.443333, 139.640083, ['things'],'things1x.png'],
              ['30', the_space, 35.447361, 139.639306, ['things'],'things1x.png'],
              ['31', motion_blue, 35.452694, 139.643333, ['nightlife'],'night_life1x.png'],
              ['32', sake_bar, 35.463694, 139.615500, ['nightlife'],'night_life1x.png'],
              ['33', mirai_manyo_club, 35.456000, 139.638250, ['things'],'things1x.png'],
              ['34', ramen_museum, 35.509861, 139.614556, ['things'],'things1x.png'],
              ['35', sky_duck_counter, 35.452750, 139.632500, ['things'],'things1x.png'],
              ['36', kirin_brewery, 35.490750, 139.665778, ['things'],'things1x.png'],
              ['37', yakatabune, 35.450611, 139.633167, ['things'],'things1x.png'],
              ['38', gimme_gimme, 35.448028, 139.630194, ['nightlife'],'night_life1x.png'],
              ['39', edosei, 35.442306, 139.645806, ['cafe'],'cafe1x.png'],
              ['40', yamashita_park, 35.445750, 139.649583, ['things'],'things1x.png'],
              ['41', yokohama_seryna_Romanjaya, 35.446750, 139.636361, ['cafe'],'cafe1x.png'],
              ['42', haikara, 35.447333, 139.645472, ['culture'],'culture1x.png'],
              ['43', imai_dojo, 35.442667, 139.641361, ['culture'],'culture1x.png'],
              ['44', red_brick, 35.452639, 139.642806, ['culture'],'culture1x.png'],
              ['45', cafe_giang, 35.443861, 139.647278, ['cafe'],'cafe.png'],
              ['46', sea_bass, 35.445972, 139.651167, ['things'],'things1x.png'],
              ['47', tinys, 35.443278, 139.626556, ['things'],'things1x.png'],
              ['48', yokohama, 35.465833, 139.622306, ['shopping'],'shopping1x.png'],
              ['49', sakuragicho_station, 35.465833, 139.622306, ['nightlife'],'night_life1x.png']
              ];

            //Google map values ends
         });
         <?php } elseif(is_page('saitama')){?>
           $(document).ready(function() {
             $('.yokohama_ve_cont').css('display','none');
             $('.saitama_ve_cont').css('display','block');
              map_lng_lt = { lat: 36.168294,lng: 139.402469};
              contentString = '<div class="contentyoko">' +
                                      '<div class="marker_img"><img src="'+saitama_stadium+'" alt=""/></div>' +
                                      '<div><h2>Kumagaya Rugby Stadium</h2><a class="mark_offical_btn" href="https://www.city.kumagaya.lg.jp/kanko/kumaspo/rugbyjoho/" target="_blank">offical Website</a></div>'+
                                  '</div>';
              pin ='03_kumagaya_pin.png';




              var jigen ='<div class="multi_market">'+

              '<div class="filler_info">'+
'                <p class="resta">Restaurant/Cafe</p>'+
'               <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_001.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Sample life-changing shaved ice </h3>'+
'                <p>One of the most popular purveyors of kakigori (shaved ice desserts) in the greater Tokyo region, Jigen is not a place you can just pop into. You will need to pick up a queue ticket at the shop from 7am or 9am depending on the season, and then make sure not to be late for your designated seating time. </p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Jigen</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                <a class="button_purple" href="tel:048 526 1719 ">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>45 Nakacho, Kumagaya, Saitama</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=36.147056, 139.382778" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>10am-4pm daily</p>'+
'                  </div>'+
'                </div>'+
'               </div>'+
'                </div>';


              var morikawa_sushi ='<div class="multi_market">'+
              '<div class="filler_info">'+
'                <p class="resta">Restaurant/Cafe</p>'+
'                <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_002.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Devour a different kind of sushi </h3>'+
'                <p>In business for a respectable 200 years, Morikawa specialises in inarizushi – balls of rice stuffed into soft, aromatic tofu pockets. This shop\'s version is about twice the size and significantly sweeter than the kind you find at supermarkets, and tends to sell out around 2pm every day.</p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Morikawa Sushi </p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="tel:048 588 0075">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>1523 Menuma, Kumagaya</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=36.227972, 139.374194" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>9am until stocks last, closed Mon</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
              ' </div>';

              var seikeien ='<div class="multi_market">'+
              '<div class="filler_info">'+
'                <p class="things_do">Things to do</p>'+
'                <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_003.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Take part in a tea ceremony </h3>'+
'                <p>Following the walking path around the pond in this traditional Japanese garden is the ideal way to admire its seasonal greenery. Entrance is free, and tea ceremonies are held regularly at the three rest houses on the grounds. </p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Seikeien</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="tel:048 522 9389 ">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>32 Kamakuracho, Kumagaya 360-0046</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=36.144472, 139.381333" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>9am-4pm, closed Mon</p>'+
'                  </div>'+
'                </div>'+
'                </div>'+
              ' </div>';


              var kogashi_buishi ='<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="resta">Restaurant/Cafe</p>'+
'                <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_004.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Rave about roasted tea </h3>'+
'                <p>If you like hojicha (roasted green tea), a visit to Buichi near Menuma Shodenzan temple should definitely be on your itinerary. Besides roasted tea leaves, the shop offers a mouth-watering range of takeaway desserts, including hojicha latte and creamy hojicha gelato.</p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Kogashi Buichi </p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="tel:048 580 3525">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>1536 Menuma, Kumagaya, Saitama 360-0201</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=36.227639, 139.373944" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>Wed-Fri 11am-5.30pm, Sat-Sun 10am-5.30pm, closed Mon-Tue</p>'+
'                  </div>'+
'                </div>'+
'                </div>'+
              ' </div>';

              var vinplus ='<div class="multi_market">'+
              '<div class="filler_info">'+
'                <p class="nlife">Bars & Nightlife</p>'+
'                <!-- <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div> -->'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_005.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Learn more about natural wine </h3>'+
'                <p>This standing-only bar dedicated to natural wine can be a little hard to find, but will reward intrepid epicureans handsomely. The resident sommelier has worked at wineries in France, New Zealand, Italy and Japan, and has a knack for describing each wine as if it were an old friend. The roughly 3,000 bottles in stock can also be purchased.</p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Benny\'s Place</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="tel:090 4949 4882">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>2-52 Yayoi, Kumagaya</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=36.141444, 139.387611" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>Mon-Sat 5pm-12midnight, Sun 12pm-5pm</p>'+
'                  </div>'+
'                </div>'+
'              </div>' +
              ' </div>';

              var koyama ='<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="resta">Restaurant/Cafe</p>'+
'                <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_006.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Power up with a pancake </h3>'+
'                <p>A curious local delicacy, Kumagaya\'s \'fry-yaki\' is a savoury pancake that usually features pork and leek but can also be topped with seafood, veg and/or eggs. It may look like a small snack, but it\'s quite filling, perfect for foodies with a big appetite.</p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Koyama Shokudo </p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="tel:048 521 4160">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>2-30 Hoshikawa, Kumagaya, Saitama 360-0043</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=36.142556, 139.387472" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>11am-7pm, closed Mon</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
              ' </div>';



              var kumatamaya ='<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="resta">Restaurant/Cafe</p>'+
'                <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_007.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Slurp like a local </h3>'+
'                <p>The quick service, ideal location (inside Kumagaya Station) and low prices mean that the ten seats along the counter at this simple udon (wheat noodle) joint are always occupied. Kumatamaya\'s most popular dish is ‘niku negi tsukejiru udon’ (¥600): cold noodles made from 100 percent local wheat, served with a hot dipping  sauce topped with pork and leek.</p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Kumatamaya</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="tel:048 521 8908">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>1-202-1 Sakuragicho, Kumagaya, Saitama</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q= 36.139139, 139.389278" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>10.30am-8pm daily</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
              ' </div>';

              var dogs ='<div class="multi_market">'+
              '<div class="filler_info">'+
'                <p class="nlife">Bars & Nightlife</p>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_008.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Partake in local pub culture </h3>'+
'                <p>A cultural hub run by a local music lover, this cosy bar is a safe choice if you\'re looking to kick off the evening with a few cold ones. In business for 28 years, it offers a plentiful drink menu and tasty pub grub, from small bites to pizza and pasta. </p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Dog’s nose </p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="https://dnbobsaito.wixsite.com/dogs" target="_blank">VISIT WEBSITE</a>'+
'                    <a class="button_purple" href="tel:048 524 0013">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>2-111 Tsukuba, Kumagaya, Saitama 360-0037</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=36.140361, 139.388361" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>6pm-2am closed Mon</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
              ' </div>';

              var teppachi ='<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="resta">Restaurant/Cafe</p>'+
'                             </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_009.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Enjoy the big game over dinner </h3>'+
'                <p>A self-proclaimed ‘rugby izakaya’ on the fifth floor of a building connected to the Kumagaya Station complex, this spacious spot lets you catch the action on a TV screen while munching on teppanyaki treats from  steak to ‘tonpeiyaki’ (pork omelette). The restaurant is also open for lunch. </p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Teppachi Hakkai</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="tel:048 528 8000 ">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>AZ Kumagai 5F, 2-115 Tsukuba, Kumagaya 360-0037, Saitama</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=36.139583, 139.389333" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>Mon-Fri 11am-3pm & 4pm-11.30pm, Sat 4pm-11.30pm, Sun 11am-11pm</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
              ' </div>';


              var stadium10 ='<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="things_do">Things to do</p>'+
'                <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_010.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Catch a match</h3>'+
'                <p>One of the few rugby-only stadiums in Japan, the Kumagaya Stadium is well known for its annual high school competitions held in spring. It was renovated in 2018 and now has a capacity for about 24,000 spectators. It also hosts international rugby matches, so if there\'s a game here while you\'re in town, do consider checking it out. </p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Kumagaya Rugby Stadium </p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="tel:048 524 1111 ">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>810 Kamikawakami, Kumagaya, Saitama 360-0004</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=36.168361, 139.402278" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>Hours vary by venue</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
              ' </div>';

              var menuma ='<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="aculture">Art & Culture</p>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_011.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Study up on Buddhist symbolism</h3>'+
'                <p>Designated a national treasure of Japan, the Shodendo hall is the centrepiece of this temple, which is particularly popular among worshippers looking for luck in love. Paying the ¥700 entrance fee is worth it, as the hall is decorated with a variety of curious-looking sculptures. Book a free guided tour (in English) to find out what they stand for.</p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Menuma Shodenzan</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="tel:048 588 1644">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>1511 Menuma, Kumagaya, Saitama 360-0201</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=36.228250, 139.374722" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>11am-4.30pm (last entry 4pm)</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
              ' </div>';
              var hoshikawa =
              '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="resta">Restaurant/Cafe</p>'+
'                <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_012.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Find bliss in pancakes</h3>'+
'                <p>Organic wheat, local eggs and other top-quality Saitama ingredients are whipped into perfectly soft, mouth-watering and aromatic pancakes at this cosy café. The piles of pure goodness come topped with a generous serving of vanilla ice cream. </p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Hoshikawa Cafe</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="tel:048 594 7574 ">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>1-7-7 Hoshikawa, Kumagaya, Saitama 360-0043 </p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=36.143194, 139.384500" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>11am-5pm, closed Mon</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
              ' </div>';

              var hanaougi ='<div class="multi_market">'+
'<div class="filler_info">'+
'               <p class="shopping">Shopping</p>'+
'                <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_013.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Eat a football for dessert</h3>'+
'                <p>Edible rugby balls, anyone? This traditional Japanese dessert dealer offers several options for fans with a sweet tooth, including a soft cake filled with red bean paste and coated with white and green tea chocolate. Pick up Hanaougi\'s ball-shaped \'All Out Try\' gift box for a full set of their rugby-themed sweets. </p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Hanaougi</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="tel:048 526 0121">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>3-15-15 Nakanishi, Kumagaya, Saitama</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=36.151611, 139.398806" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>10am-8pm daily</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
              ' </div>';


              var kumapia =
              '<div class="multi_market">'+
              '<div class="filler_info">'+
'                <p class="things_do">Things to do</p>'+
'                <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_014.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Create a truly unique souvenir</h3>'+
'                <p>Housed in a former high school, this cultural centre offers classes in traditional Kumagaya-zome dyeing. Classes are held about ten times per month, and you can choose to try either the ‘yuzen’ (painting directly onto a cloth) or the ‘komon’ (pattern-dyeing with paper) technique. </p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Kumapia</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="tel:048 523 8324 ">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>315 Harajima, Kumagaya, Saitama 360-0811</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=36.170806, 139.366889" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>10am-2pm</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
' </div>';

var Spa =
              '<div class="multi_market">'+
              '<div class="filler_info">'+
'                <p class="things_do">Things to do</p>'+
'                <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_015.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Soak in supreme comfort</h3>'+
'                <p>About ten types of baths and saunas await weary travellers at Hanayu, a vast shrine to relaxation where many of the tubs are outdoors, offering views of the facility\'s Japanese garden. Hop from the ‘silk bath’ to the hot stone sauna and you\'ll end up spending the entire day soaking. </p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Hanayu Spa Resort</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="tel:048 501 1126 ">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>1005 Kamino, Kumagaya, Saitama 360-0012</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=36.159194, 139.406472" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>Sun-Thu 10am-11pm (last entry 10.30pm), Fri-Sat 10am-9am the next day (last entry 12midnight)</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
' </div>';

var more_records ='<div class="multi_market">'+
              '<div class="filler_info">'+
'               <p class="shopping">Shopping</p>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_016.jpg"  class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Dig deep for fine discs</h3>'+
'                <p>Fans of Japanese indie tunes can spend hours going through the selection at this superbly stocked CD store, where a patient digger can discover gems that aren\'t readily available on online streaming services. If you still own a CD player, More Records merits a visit. </p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>More Records</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="tel:048 677 0862">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>Kanazawa Bldg 2F, 2-63 Nakacho, Omiya, Saitama 330-0845</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.904944, 139.628528" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>12pm-9pm, closed Mon</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
' </div>';


var yamazakiya =
'<div class="multi_market">'+
              '<div class="filler_info">'+
'               <p class="resta">Restaurant/Cafe</p>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_017.png" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Taste local fish the traditional way</h3>'+
'                <p>Saitamas lack of coastline means that freshwater fish has always been a big part of the local diet. The river delicacies are best savoured at eel eatery Yamazakiya, which has been going strong since the Edo era (1603-1868). Besides grilled eel over rice, specialities here include various carp dishes.</p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Yamazakiya</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    '+
'                    <a class="button_purple" href="tel:048 822 7116 ">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>1-10-8 Nakacho, Urawa, Saitama, 330-0062</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.860361, 139.653472" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>11.30am-2pm & 5pm-7.30pm, closed Mon-Tue</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
' </div>';

var paleo ='<div class="multi_market">'+
              '<div class="filler_info">'+
'              <p class="things_do">Things to do</p>'+
'                <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_018.jpg"  class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Travel back to the 19th century</h3>'+
'                <p>Huffing and puffing the distance between Kumagaya and Mitsumineguchi stations once per day on the weekends, the SL (steam locomotive) Paleo Express is always popular and requires a special ticket to ride. We recommend booking a non-reserved seat on the Chichibu Railway\'s website and heading to the platform well before departure time.</p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>SL Paleo Express</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <p>N/A</p>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>Kumagaya station - Mitsumineguchi station</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.959944, 138.978944" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>Hours vary by venue</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
' </div>';

//




              var hikawa ='<div class="multi_market">'+
              '<div class="filler_info">'+
'                <p class="nlife">Bars & Nightlife</p>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_019.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Down a pint of local ale </h3>'+
'                <p>Saitama has earned quite a reputation for its beer scene, and Hikawa no Mori is one of the prefecture\'s best brewpubs. You\'ll find about ten original brews on tap at all times, of which one or two types change weekly. We love their eponymous flagship beer Saitama Sodachi, made entirely with Saitama-produced ingredients. </p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Vinplus</p>'+
'                    <p>Hikawa no Mori</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="https://hikawa-brewery.com/" target="_blank">VISIT WEBSITE</a>'+
'                    <a class="button_purple" href="tel:048 783 5123">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>1-36-1 Takahanacho, Omiya, Saitama 330-0803</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=36.141333, 139.387639" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>Mon & Wed-Fri 5.30pm-10.30pm, Sat 4pm-10.30pm, Sun 12pm-8pm, closed Tue</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
              ' <div>';


              var cartoon ='<div class="multi_market">'+
              '<div class="filler_info">'+
'                <p class="aculture">Art & Culture</p>'+
'                <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_020.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Delve into the history of Manga</h3>'+
'                <p>Built on the site where pioneering cartoonist Rakuten Kitazawa (1876-1955) lived out his life, this museum highlights Kitazawas caricatures, comic strips and other works, which helped form the foundation of Japans manga culture. The exhibits offer an interesting look into the early days of modern comics in Japan.  </p>'+
'                <div class="">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Municipal Cartoon Art Museum</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                  '+
'                    <a class="button_purple" href="tel:048 663 1541">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>150 Bonsai-cho, Kita, Saitama 331-0805</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.925639, 139.631806" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>9am-4.30pm daily </p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
'<div>';



var chujirogura = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="resta">Restaurant/Cafe</p>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_021.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Hang out at a strange soba shop </h3>'+
'                <p>Once a storehouse for fabric used to make Gyoda\'s famed \'tabi\' socks, this sturdy structure now houses a soba noodle eatery that also serves \'fried jelly\' – a curious croquette-like creation made with potato and tofu refuse. </p>'+
'                <div class="mob_d">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Chujirogura</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    '+
'                    <a class="button_purple" href="tel:048 556 9988 ">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>1-4-6 Shinobu, Gyoda, Saitama  361-0077</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=36.141722, 139.456861" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>11am-2pm, closed Mon</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
' <div>';


var kinchakuda = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="things_do">Things to do</p>'+
'                <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_022.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Feel the flower power</h3>'+
'                <p>While various flowers lend it colour throughout the year, this woody field along the Koma River is at its most spectacular during the second half of September, when the blooms of a whopping five million red spider lilies cover the area with a stunning red carpet.</p>'+
'                <div class="mob_d">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Kinchakuda </p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    '+
'                    <a class="button_purple" href="tel:042 982 0268 ">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>125-2 Komahongo, Hidaka, Saitama 350-1251</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.883861, 139.308750" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>8am-5pm daily</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
' <div>';


var mitsumine = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="things_do">Things to do</p>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_023.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Pray at the shrine in the sky </h3>'+
'                <p>Perched on a mountainside 1,100m above sea level, Mitsumine Shrine exudes a mysterious aura. After passing through the main gate, which is guarded by wolf statues, you can walk for about an hour and a half to reach the innermost shrine building – but remember to wear shoes appropriate for the unpaved path. </p>'+
'                <div class="mob_d">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Mitsumine Shrine </p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="http://www.mitsuminejinja.or.jp/" target="_blank">VISIT WEBSITE</a>'+
'                    <a class="button_purple" href="tel:0494 55 0241">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>298-1 Mitsumine, Chichibu, Saitama 369-1902</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.925528, 138.930389" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>6.30am-5pm daily</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
' <div>';
var quad = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="nlife">Bars & Nightlife</p>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_024.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Move to the music </h3>'+
'                <p>Looking to dance until dawn? Located right by Omiya Station, 444quad puts on a diverse range of parties and other events, with the sweatiest sessions usually taking place on weekend nights. Note that you\'ll need to be 20 or older to enter – picture ID required. </p>'+
'                <div class="mob_d">'+
'                  <div class="venu_name">'+
'                    <p>Vinplus</p>'+
'                    <p>444quad</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    '+
'                    <a class="button_purple" href="tel:048 646 2444">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>4F Hana no Shimamura Bldg, 4-4 Miyacho, Omiya, Saitama 330-0802</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.909611, 139.624694" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>7pm-5pm daily </p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
' <div>';

var uwaito = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="resta">Restaurant/Cafe</p>'+
'                <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_025.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Take a breather with the fam </h3>'+
'                <p>Formerly a travelling coffee salesman, the owner of Cafe Uwaito decided to open a brick- and-mortar café after noticing the dearth of such establishments in his native Urawa. Children\'s chairs and picture books contribute to the family-friendly mood, while the delectable desserts are made with seasonal fruit. </p>'+
'                <div class="mob_d">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Cafe Uwaito</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                   '+
'                    <a class="button_purple" href="tel:048 711 5870">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>4 Chome-2-18 Kishicho, Urawa, Saitama 330-0064</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.856361, 139.658222" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>Tue-Wed & Fri-Sat 11am-8pm, Sun-Mon 11am-6pm, closed Thu</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
' <div>';
var moomin = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="things_do">Things to do</p>'+
'                <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_026.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Meet the Moomins </h3>'+
'                <p>Saitama\'s latest family-friendly attraction opened on March 16, 2019 and is a must-visit for fans of the adorable Moomintrolls. Highlights include an interactive theatre, a 400m zip line stretching across the surface of Lake Miyazawa, and the obligatory studio for snapping photos with the Moomins themselves. </p>'+
'                <div class="mob_d">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Moomin Valley Park </p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="https://metsa-hanno.com/moominvalleypark/" target="_blank">VISIT WEBSITE</a>'+
'                    <a class="button_purple" href="tel:0570 001 630">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>431-3-58 Miyazawa, Hanno, Saitama 357-0001</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.872389,139.329361" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>10am-8pm daily </p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
' <div>';
var kodai = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="aculture">Art & Culture</p>'+
'                <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_027.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Marvel at rice paddy art</h3>'+
'                <p>Blessed with an abundance of paddy fields, the city of Gyoda has been using some of its agricultural land as a gigantic outdoor art gallery since 2008. Created using rice plants of differing colours, these images are too big to make out from ground level, so you\'ll need to climb the tower here (¥400, ¥200 for children aged 6-15) to view them in their full glory. While mid July is the best time to visit, the images remain visible until mid October.  </p>'+
'                <div class="mob_d">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Kodai Hasu no Sato </p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                   '+
'                    <a class="button_purple" href="tel:048 559 0770">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>2375-1 Kobari, Gyoda, Saitama 361-0024</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q= 36.132417,139.500444" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>7am-4.30pm daily </p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
' <div>';
var fukaya = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="things_do">Things to do</p>'+
'                <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_028.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Watch a movie at a sake brewery</h3>'+
'                <p>A 300-year-old sake brewery turned arthouse movie theatre, the 60-seat Fukaya Cinema screens three or four flicks daily. Paying an extra ¥1,000 gets you access to the special soundproof room in the back, which is ideal for families with small children. </p>'+
'                <div class="mob_d">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Fukaya Cinema</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="http://fukayacinema.jp/" target="_blank">VISIT WEBSITE</a>'+
'                    <a class="button_purple" href="tel:048 551 4592">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>9-12 Fukayacho, Fukaya, Saitama 366-0825</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=36.195833,139.278194" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>See website for screening times </p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
' <div>';
var hikawa = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="things_do">Things to do</p>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_028.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Walk down a sacred path </h3>'+
'                <p>Passing through a torii gate, you\'d usually expect to find a shrine soon after. Not so at Musashi Ichinomiya, where the 2km approach from the first gate to the main sanctuary is lined with about 650 trees, making for an impressive 30-minute stroll through the greenery. </p>'+
'                <div class="mob_d">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Musashi Ichinomiya Hikawa Shrine</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    '+
'                    <a class="button_purple" href="tel:048 641 0137">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>1-407 Takahanacho, Omiya, Saitama 330-0803</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.916750, 139.629778" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>5.30am-5.30pm (March, April, September and October), 5am-6pm (May-August), 6am-5pm (November-February)</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
' <div>';
var museum_sitama = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="aculture">Art & Culture</p>'+
'                <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_030.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Sit down in the midst of art</h3>'+
'                <p>Boasting a collection of works by Monet, Chagall, Picasso and many Japanese masters, this distinctive structure in Kita-Urawa Park makes for an art experience that is both impressive and comfortable – thanks to the many stylish chairs scattered around the rooms for visitors to rest on. The museum also arranges workshops for children and their parents.  </p>'+
'                <div class="mob_d">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>The Museum of Modern Art, Saitama</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="http://www.pref.spec.ed.jp/momas/" target="_blank">VISIT WEBSITE</a>'+
'                    <a class="button_purple" href="tel:048 824 0111">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>9-30-1 Tokiwa, Urawa Ward, Saitama, 330-0061</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.869611,139.642944" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>10am-5.30pm, closed Mon </p>'+
'                  </div>'+
'                </div>'+
'              </div>'+

' <div>';
var railway_museum = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="things_do">Things to do</p>'+
'                <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_031.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Drive the shinkansen</h3>'+
'                <p>Heaven on earth for train geeks, this massive museum tells the history of Japan\'s railways from steam locomotives to the shinkansen through exhibits that include 36 actual railway cars, a spacious kids\' area and a bullet train simulator, plus a shop selling 12 kinds of authentic station bento boxes. </p>'+
'                <div class="mob_d">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>The Railway Museum</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="http://www.railway-museum.jp/en" target="_blank">VISIT WEBSITE</a>'+
'                    <a class="button_purple" href="tel:048 651 0088">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>3-47 Onaricho, Omiya, Saitama 330-0852 </p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.921444,139.617917" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>10am-6pm </p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
' <div>';
var taiyoji = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="aculture">Art & Culture</p>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_032.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Sleep at a temple</h3>'+
'                <p>Escape the modern world up in the mountains of Chichibu, where the 700-year- old Taiyoji Temple invites weary visitors to meditate, eat healthy Buddhist cuisine and stay the night at the temple (¥9,500 per night). The resident monk will pick you up at Mitsumineguchi Station, from where it\'s a 25-minute drive up the mountain. Bookings can be made in English. </p>'+
'                <div class="mob_d">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Taiyoji Temple</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="http://www.taiyoji.com/" target="_blank">VISIT WEBSITE</a>'+
'                    <a class="button_purple" href="tel:0494 54 0296">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>459 Otaki, Chichibu, Saitama 369-1901</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.908028, 138.971194" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>Hours vary by venue </p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
' <div>';
var pasta = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="resta">Restaurant/Cafe</p>'+
'                <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_033.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Make a pit stop at the pasta counter </h3>'+
'                <p>Come for the freshly made noodles served ramen-style from behind the counter, stay (on Sundays) for the mind-bending ‘Napoli de melon’ – melon pan (a dry, melon-shaped bun) stuffed with Japanese-style ‘Napolitan’ spaghetti. Add a sprinkle of tabasco to the curious combo of sweet bread and ketchup- flavoured pasta for best results.</p>'+
'                <div class="mob_d">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Pasta House Sakana no Kimochi</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    '+
'                    <a class="button_purple" href="tel:048 628 2723">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>7-24 Niizutsumi, Minuma, Saitama, 337-0013</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.928556,139.669222" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>11am-3pm & 6pm-9pm, closed Thu </p>'+
'                  </div>'+
'                </div>'+
'              </div>'+

' <div>';
var sakaya = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="nlife">Bars & Nightlife</p>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_034.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Enjoy sake at the bottle shop</h3>'+
'                <p>When this 126-year-old liquor store ended up with an empty storage space next door, the owners made the obvious decision and turned the extra room into a bar, where you can now drink sake on the cheap (¥350-600 per cup). About 10 to 15 cold and warm varieties are available at all times, along with a few booze-compatible eats.  </p>'+
'                <div class="mob_d">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Sakaya no Tonari </p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="tel:048 664 0622">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>2-403 Sakuragicho, Omiya, Saitama, 330-0854</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.907917,139.619111" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>5pm-10pm, closed Sun</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
' <div>';
var bonsai = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="things_do">Things to do</p>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_035.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Dive deep into the world of bonsai</h3>'+
'                <p>If miniature trees are your thing, missing out on this museum simply isn\'t an option. Enthusiasts from around the world come for its weekly changing exhibits of about 60 bonsai and a stroll in the picturesque bonsai garden. Audio guide is available in English, Japanese, Chinese and Korean. </p>'+
'                <div class="mob_d">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>The Omiya Bonsai Art Museum</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="tel:048 780 2091">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>2-24-３ Torocho, Kita Ward, Saitama, 331-0804</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.928833, 139.632833" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>9am-4pm, closed Thu</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
' <div>';
var ogawa = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="things_do">Things to do</p>'+
'                <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_036.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Create your own paper</h3>'+
'                <p>Spend the day learning all there is to know about traditional \'washi\' paper at the Ogawa Washi Centre, where you can also create a washi postcard of your own and admire an extensive collection of other paper products. Note that all washi-making classes need to be booked in advance by calling 0493 72 7262.  </p>'+
'                <div class="mob_d">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Ogawa Washi Centre</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    '+
'                    <a class="button_purple" href="tel:0493 72 1220">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>Ogawa 1220, Ogawa-machi, Hiki-gun, Saitama Prefecture</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=36.053639,139.263444" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>9.30am-5pm, closed Mon and over New Year Holidays</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
' <div>';
var nagatoro = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="things_do">Things to do</p>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_037.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Embark on a wet adventure </h3>'+
'                <p>Gliding down the river in a traditional Japanese boat, you may be tempted to try snapping a few Instagram-worthy shots of the gorgeous Nagatoro nature. But don\'t get too carried away: the 20-minute ride also includes a few sudden rapids. </p>'+
'                <div class="mob_d">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Rafting in Nagatoro </p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="https://www.gekiryu.com/en/nagatoro/" target="_blank">VISIT WEBSITE</a>'+
'                    <a class="button_purple" href="tel:0771 29 5370">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>869-8 Azanuma, Nagatoro, Chichibu, Saitama 369-1305</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=36.095528,139.112222" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>Hours vary by venue</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
' <div>';
var izumiya = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="nlife">Bars & Nightlife</p>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_038.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Say cheers with the locals </h3>'+
'                <p>Open from 10am, this homely izakaya oozes nostalgia and gets packed with local boozehounds as early as noon on weekdays. If you can\'t read the menu, written on paper slips hanging haphazardly around the room, just ask for whatever your neighbour\'s having – it\'ll most likely be delicious. </p>'+
'                <div class="mob_d">'+
'                  <div class="venu_name">'+
'                    <p>Vinplus</p>'+
'                    <p>Izumiya Honten </p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    '+
'                    <a class="button_purple" href="tel:048 641 0211">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>1-43 Daimoncho, Omiya, Saitama 330-0846 </p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.906194,139.625556" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>10am-10.15pm</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
' <div>';

var sazerac = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="nlife">Bars & Nightlife</p>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_039.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Get your greens in booze form </h3>'+
'                <p>Over 100 kinds of craft gin and more than 300 varieties of whisky await liquor connoisseurs at Sazerac, a gem of a bar hidden close to Omiya Station. Those partial to cocktails should try the vegetable-based concoctions, made with locally grown produce. The cover charge is ¥500. </p>'+
'                <div class="mob_d">'+
'                  <div class="venu_name">'+
'                    <p>Vinplus</p>'+
'                    <p>The Bar Sazerac  </p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="https://the-bar-sazerac.business.site/" target="_blank">VISIT WEBSITE</a>'+
'                    <a class="button_purple" href="tel:048 783 4410">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>5F-B 2-42 Nakacho, Omiya, Saitama 330-0845 </p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.905222, 139.627694" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>7pm-5am, closed Thu</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
' <div>';
var chichibu = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="things_do">Things to do</p>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_040.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Opt for a wilder view </h3>'+
'                <p>Thrill-seekers of all ages will find plenty to get excited about at the new Chichibu Geo Gravity Park, where you can experience the natural beauty of the Arakawa Valley by zip-lining across it or traversing the 50m-high, 100m-long suspension bridge. Entry is ¥3,000. </p>'+
'                <div class="mob_d">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Chichibu Geo Gravity Park </p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="http://gravitypark.jp/" target="_blank">VISIT WEBSITE</a>'+
'                    <a class="button_purple" href="tel:050 5305 6176">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>730-4 Arakawaniegawa, Chichibu, Saitama 369-1911</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.962167, 138.975583" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>9am-5pm daily </p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
' <div>';
var hakushakutei = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="resta">Restaurant/Cafe</p>'+
'                '+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_041.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Feast with the sleepless in Omiya  </h3>'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Hakushakutei</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    '+
'                    <a class="button_purple" href="tel:050 5816 1881 ">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>1-46 Miyacho, Omiya, Saitama 330-0802 </p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.908472, 139.625472" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>24 hours daily </p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
' <div>';
var corot = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="aculture">Art & Culture</p>'+
'                <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_042.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Live the country life </h3>'+
'                <p>How about swapping your hotel comfort for tilling fields, cooking meals over a wood-fired stove and gathering around the fireplace to eat? An old country home turned haven for temporary refugees from the modern world, Corot offers both daytime experiences (10am-4pm, ¥1,200, ¥800 for children aged 3-12) and overnight stays (5pm-9am, ¥4,300/¥2,800). </p>'+
'                <div class="mob_d">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Corot </p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="tel:04 2930 4202">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>2040 Yamaguchi, Tokorozawa, Saitama 359-1145</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.773806, 139.429833" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>Hours vary by venue</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
' <div>';

var hikawa_shrine = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="things_do">Things to do</p>'+
'                <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_043.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Fish for good fortune </h3>'+
'                <p>Said to have been established way back in the year 541, Kawagoe Hikawa is a ‘love shrine’ popular with couples and hopeful singles alike. Use a wooden lure to pull out a cute, fish-themed ‘omikuji’ fortune slip from one of the pots at the shrine grounds. </p>'+
'                <div class="mob_d">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Kawagoe Hikawa Shrine </p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="https://www.kawagoehikawa.jp/" target="_blank">VISIT WEBSITE</a>'+
'                    <a class="button_purple" href="tel:049 224 0589">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>2-11-3 Kawagoe, Saitama 350-0052</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.927833, 139.488611" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>9am-5pm</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
' <div>';
var kawagoe_store = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="resta">Restaurant/Cafe</p>'+
'                <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_044.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Stick a spud in your soft serve</h3>'+
'                <p>Sweet potato soft serve is available throughout Kawagoe, but no rival can compete with Kenpi\'s extremely Instagram-friendly version, which comes with a tasty ‘karinto’ (deep-fried sweet potato) snack stuck into the ice cream. It\'s also petite enough to finish, even after a lengthy street food stroll. </p>'+
'                <div class="mob_d">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Kawagoe Kenpi Workshop Store </p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    '+
'                    <a class="button_purple" href="tel:049 223 2323">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>2-93 Moto-machi, Kawagoe,Saitama  </p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.924917, 139.481000" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>10am-5pm</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
' <div>';
var torokko = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="resta">Restaurant/Cafe</p>'+
'                '+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_045.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Satisfy your potato cravings</h3>'+
'                <p>Kawagoe is famed for its sweet potatoes, which dominate the ‘mini-kaiseki’ tasting menu at this unique restaurant. The singularly focused meal begins with a potato cocktail (or potato tea), includes spuds in fried, stewed and boiled forms, and ends with a serving of sweet potato ice cream. Note that the mini-kaiseki is only available between 11.45am and 3pm (or until ingredients run out). </p>'+
'                <div class="mob_d">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Torokko</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    '+
'                    <a class="button_purple" href="tel:049 222 0989">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>7-1 Saiwaicho, Kawagoe, Saitama 350-0063</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.923222, 139.482500" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>Mon-Fri 10am-5pm, Sat-Sun 10am-6pm</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
' <div>';
var designer_cover = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="aculture">Art & Culture</p>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_046.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Spot street-level art </h3>'+
'                <p>You\'ll be tempted to stare at the gorgeous scenery when visiting Kawagoe, but do remember to look down every once in a while, too: many of the town\'s manhole covers are decorated with local motifs, including the iconic Toki no Kane bell tower.</p>'+
'                <div class="mob_d">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Designer manhole covers </p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <p>N/A</p>                   '+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>N/A</p>'+
'                    <!-- <button class="button_purple">Google MAP</button> -->'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>Hours vary by venue</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
' <div>';
var nakaichi = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="resta">Restaurant/Cafe</p>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_047.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Munch on a famous rice ball </h3>'+
'                <p>Spotting a queue in Kawagoe usually means you\'re getting close to Nakaichi Honten. Every day, hordes of visitors wait patiently in front of this shop for their ‘yaki-onigiri’ (¥250) – grilled rice balls seasoned with soy sauce and fish flakes. Available from noon every day, they usually sell out before closing time. </p>'+
'                <div class="mob_d">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Nakaichi Honten</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="https://www.nakaichi-h.com/" target="_blank">VISIT WEBSITE</a>'+
'                    <a class="button_purple" href="tel:049 222 0126">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>5-2 Saiwaicho, Kawagoe, Saitama 350-0063</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.922861, 139.482722" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>10am-7pm, closed Wed</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
' <div>';
var tamariki = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="shopping">Shopping</p>'+
'                <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_048.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Shop for colourful candy </h3>'+
'                <p>In business for well over a century, this venerable candy store deals in about 50 kinds of handmade, mainly hard drops. Our favourite is the ‘kumiame’, a long stick that can be cut into small pieces to reveal a cute picture of a flower, fruit or something even quirkier. If you\'re lucky, you might spot the candy-makers at work behind the glass. </p>'+
'                <div class="mob_d">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Tamariki Seika</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="tel:049 222 1386">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>2 Chome-7-7 Motomachi, Kawagoe, Saitama 350-0062</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.924611, 139.481361" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>10am-5pm, closed Mon</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
' <div>';
var starbucks = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="resta">Restaurant/Cafe</p>'+
'                <div><img src="<?php echo get_theme_file_uri('/img/kid_icon.jpg');?>" alt=""></div>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_049.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Sip your latte by a Japanese garden </h3>'+
'                <p>Starbucks is everywhere in Japan, but few of the ubiquitous coffee giant\'s shops fit in as perfectly with their surroundings as this one. Its modern Japanese architecture, inner garden and terrace seats make it hard to believe you\'re sitting in a multinational chain café.  </p>'+
'                <div class="mob_d">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Starbucks Coffee Kawagoe Kanetsuki-dori</p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    '+
'                    <a class="button_purple" href="tel:049 228 5600">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>15-18 Saiwaicho, Kawagoe, Saitama 350-0063</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.923500, 139.483917" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>8am-8pm daily </p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
' <div>';
var coedo = '<div class="multi_market">'+
'<div class="filler_info">'+
'                <p class="shopping">Shopping</p>'+
'              </div>'+
'              <div class="container_venu">'+
'                <div class="venu_pic">'+
'                  <img src="/wp-content/uploads/2019/05/saitama_050.jpg" class="img-responsive" alt="">'+
'                </div>'+
'                <h3>Get the authentic look </h3>'+
'                <p>Strolling the streets of Kawagoe in kimono is high on many visitors\' to-do lists. Vivian offers kimono rental and hair arrangement for only ¥2,160 (¥3,240 for men), including underwear, ‘geta’ sandals and accessories, and is conveniently located right in the middle of old Kawagoe. </p>'+
'                <div class="mob_d">'+
'                  <div class="venu_name">'+
'                    <p>Venue name:</p>'+
'                    <p>Coedo Vivian </p>'+
'                  </div>'+
'                  <div class="venu_contact">'+
'                    <p>Contact:</p>'+
'                    <a class="button_purple" href="tel:090 3524 8979">CALL VENUE</a>'+
'                  </div>'+
'                  <div class="venu_address">'+
'                    <p>Address:</p>'+
'                    <p>14-5 Saiwaicho, Kawagoe, Saitama 350-0063</p>'+
'                    <a class="button_purple" href="https://www.google.com/maps?q=35.923167, 139.483639" target="_blank">Google MAP</a>'+
'                  </div>'+
'                  <div class="venu_open">'+
'                    <p>Opening hours:</p>'+
'                    <p>10am-5pm, closed Tue</p>'+
'                  </div>'+
'                </div>'+
'              </div>'+
' <div>';

              markers_lg_lt = [
                ['1', jigen, 36.147056, 139.382778, ['cafe'],'cafe1x.png'],
                ['2', morikawa_sushi, 36.227972, 139.374194, ['cafe'],'cafe1x.png'],
                ['3', seikeien, 36.144472, 139.381333, ['things'],'things1x.png'],
                ['4', kogashi_buishi, 36.227639, 139.373944, ['cafe'],'cafe1x.png'],
                ['5', vinplus, 36.141333, 139.387639, ['nightlife'],'night_life1x.png'],
                ['6', koyama, 36.142556, 139.387472, ['cafe'],'cafe1x.png'],
                ['7', kumatamaya, 36.139139, 139.389278, ['cafe'],'cafe1x.png'],
                ['8', dogs, 36.140361, 139.388361, ['nightlife'],'night_life1x.png'],
                ['9', teppachi, 36.139583, 139.389333, ['cafe'],'cafe1x.png'],
                ['10', stadium10, 36.168361, 139.402278, ['things'],'things1x.png'],
                ['11', menuma, 36.228250, 139.374722, ['culture'],'culture1x.png'],
                ['12', hoshikawa, 36.143194, 139.384500, ['cafe'],'cafe1x.png'],
                ['13', hanaougi, 36.151611, 139.398806, ['shopping'],'shopping1x.png'],
                ['14', kumapia, 36.170806, 139.366889, ['things'],'things1x.png'],
                ['15', Spa, 36.159194, 139.406472, ['things'],'things1x.png'],
                ['16', more_records, 35.904944, 139.628528, ['shopping'],'shopping1x.png'],
                ['17', yamazakiya, 35.860361, 139.653472, ['cafe'],'cafe1x.png'],
                ['18', paleo, 35.959944, 138.978944, ['things'],'things1x.png'],
                ['19', hikawa, 35.910083, 139.628889, ['nightlife'],'night_life1x.png'],
                ['20', cartoon, 35.925639, 139.631806, ['culture'],'culture1x.png'],
                ['21', chujirogura, 36.141722, 139.456861, ['cafe'],'cafe1x.png'],
                ['22', kinchakuda, 35.883861, 139.308750, ['things'],'things1x.png'],
                ['23', mitsumine, 35.959944, 138.978944, ['things'],'things1x.png'],
                ['24', quad, 35.909611, 139.624694, ['nightlife'],'night_life1x.png'],
                ['25', uwaito, 35.856361, 139.658222, ['cafe'],'cafe1x.png'],
                ['26', moomin, 35.872389, 139.329361, ['things'],'things1x.png'],
                ['27', kodai, 36.132417, 139.500444, ['culture'],'culture1x.png'],
                ['28', fukaya, 36.195833, 139.278194, ['things'],'things1x.png'],
                ['29', hikawa, 35.916750, 139.629778, ['things'],'things1x.png'],
                ['30', museum_sitama, 35.869611, 139.642944, ['culture'],'culture1x.png'],
                ['31', railway_museum, 35.921444, 139.617917, ['things'],'things1x.png'],
                ['32', taiyoji, 35.908028, 138.971194, ['culture'],'culture1x.png'],
                ['33', pasta, 35.928556, 139.669222, ['cafe'],'cafe1x.png'],
                ['34', sakaya, 35.907917, 139.619111, ['nightlife'],'night_life1x.png'],
                ['35', bonsai, 35.928833, 139.632833, ['things'],'things1x.png'],
                ['36', ogawa, 36.053639, 139.263444, ['things'],'things1x.png'],
                ['37', nagatoro, 36.095528, 139.112222, ['things'],'things1x.png'],
                ['38', izumiya, 35.906194, 139.625556, ['nightlife'],'night_life1x.png'],
                ['39', sazerac, 35.905222, 139.627694, ['nightlife'],'night_life1x.png'],
                ['40', chichibu, 35.962167, 138.975583, ['things'],'things1x.png'],
                ['41', hakushakutei, 35.908472, 139.625472, ['cafe'],'cafe1x.png'],
                ['42', corot, 35.773806, 139.429833, ['culture'],'culture1x.png'],
                ['43', hikawa_shrine, 35.927833, 139.488611, ['things'],'things1x.png'],
                ['44', kawagoe_store, 35.924917, 139.481000, ['cafe'],'cafe1x.png'],
                ['45', torokko , 35.923222, 139.482500, ['cafe'],'cafe1x.png'],
                ['46', designer_cover, ['culture'],'culture1x.png'],
                ['47', nakaichi, 35.922861, 139.482722, ['cafe'],'cafe1x.png'],
                ['48', tamariki, 35.924611, 139.481361, ['shopping'],'shopping1x.png'],
                ['49', starbucks, 35.923500, 139.483917, ['cafe'],'cafe1x.png'],
                ['50', coedo, 35.923167, 139.483639, ['shopping'],'shopping1x.png']
                ];

           });
           <?php }?>

      </script>
<?php wp_footer(); ?>

</body>

</html>

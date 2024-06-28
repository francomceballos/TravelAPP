<?php
  require "includes/header.php";
  require "config/config.php";

  if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $country = $conn->query("SELECT * FROM countries WHERE id = '$id'");
    $country->execute();

    $singleCountry = $country->fetch(PDO::FETCH_OBJ);


    $citiesImages = $conn->query("SELECT * FROM cities WHERE country_id = '$id'");
    $citiesImages->execute();

    $singleImage = $citiesImages->fetchAll(PDO::FETCH_OBJ);


    $cities = $conn->query("SELECT cities.id AS id, cities.name AS name, cities.image AS image, 
    cities.trip_days AS trip_days, cities.price AS price, 
    COUNT(bookings.city_id) AS count_bookings FROM cities JOIN bookings ON cities.id = bookings.city_id
    GROUP BY (bookings.city_id)");

  }





?>

  <!-- ***** Main Banner Area Start ***** -->
  <div class="about-main-content" style="background-image: url(assets/images/<?php echo $singleCountry->image; ?>)">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="content" >
            <div class="blur-bg" style="background-image: url(assets/images/<?php echo $singleCountry->image; ?>)">
          </div> <div class="line-dec"></div>
            <h4>EXPLORE OUR COUNTRY</h4>
            <div class="line-dec"></div>
            <h2>Welcome To <?php echo $singleCountry->name; ?></h2>
            <p><?php echo $singleCountry->description; ?></p>
            <div class="main-button">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Main Banner Area End ***** -->
  
  <div class="cities-town">
    <div class="container" style="background-image: url(assets/images/<?php echo $singleCountry->image; ?>)">
      <div class="row" >
        <div class="slider-content">
          <div class="row">
            <div class="col-lg-12">
              <h2><?php echo $singleCountry->name; ?>'s <em>Cities &amp; Towns</em></h2>
            </div>
            <div class="col-lg-12">
              <div class="owl-cites-town owl-carousel">
                <?php foreach($singleImage as $image) : ?>
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/<?php echo $image->image; ?>" style="height: 300px" alt="">
                    <h4><?php echo $image->name; ?> </h4>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="weekly-offers">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading text-center">
            <h2>Best Weekly Offers In Each City</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-weekly-offers owl-carousel">
            <? foreach($allCities)
            <div class="item">
              <div class="thumb">
                <img src="assets/images/offers-01.jpg" alt="">
                <div class="text">
                  <h4>Havana<br><span><i class="fa fa-users"></i> 234 Check Ins</span></h4>
                  <h6>$420<br><span>/person</span></h6>
                  <div class="line-dec"></div>
                  <ul>
                    <li>Deal Includes:</li>
                    <li><i class="fa fa-taxi"></i> 5 Days Trip > Hotel Included</li>
                    <li><i class="fa fa-plane"></i> Airplane Bill Included</li>
                    <li><i class="fa fa-building"></i> Daily Places Visit</li>
                  </ul>
                  <div class="main-button">
                    <a href="reservation.html">Make a Reservation</a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="more-about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="left-image">
            <img src="assets/images/about-left-image.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="section-heading">
            <h2>Discover More About Our Country</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
          </div>
          <div class="row">
           
            <div class="col-lg-12">
              <div class="info-item">
                <div class="row">
                  <div class="col-lg-6">
                    <h4>12.560+</h4>
                    <span>Amazing Places</span>
                  </div>
                  <div class="col-lg-6">
                    <h4>240.580+</h4>
                    <span>Different Check-ins Yearly</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
          
        </div>
      </div>
    </div>
  </div>

<?php
require "includes/footer.php";
?>


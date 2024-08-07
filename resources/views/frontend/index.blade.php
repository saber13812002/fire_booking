    @extends('layouts.frontend')


    @section('content')
        <!-- Main view -->
        <div id="view-today" class="view view-main tab tab-active">
          <div data-name="home" class="page no-navbar">
            <!-- Scrollable page content -->
            <div class="page-content ptr-content infinite-scroll-content" data-infinite-distance="70">
              <div class="ptr-preloader">
                <div class="preloader"></div>
                <div class="ptr-arrow"></div>
              </div>
              <div class="block" id="today-content">



                <div class="title-container">
                  <span class="title-date">17 March</span>
                  <h1>Sunday</h1>
                </div>
                <a href="/test/1">
                  <div class="card medium">
                    <img class="card-image" src="frontend/img/banner.png" alt="">
                    <div class="card-infos">
                      <h3 class="card-title">Ottoman Relics </h3>
                      <div class="row justify-content">
                      <h3 class="card-title small-title">(Every morning at 9:00)</h3>
                      <h3 class="card-title small-title">Special Offer: 45$ /per person</h3>
                      </div>

                    </div>
                  </div>
                </a>
                <ul class="list media-list post-list" id="infinite-content">
                  <li>
                    <a href="/single/">
                      <div class="item-content">
                        <div class="item-media"><img src="frontend/img/tour.png')}}" alt=""></div>
                        <div class="item-inner">
                          <div class="item-subtitle">Istanbul Tours</div>
                          <div class="item-title">An enjoyable day in Istanbul's most important touristic places.</div>
                          <div>
                          <ul class="itemd-lists">
                            <li> <i class="fa fa-check"></i> Half Day/Full Day</li>
                            <li><i class="fas fa-check"></i> Public/Private Tour</li>
                          </ul>
                          <p class="item-price">From <span>35$</span></p>
                          </div>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="link"  href="/pages/single" >
                      <div class="item-content">
                        <div class="item-media"><img src="frontend/img/tour2.png')}}" alt=""></div>
                        <div class="item-inner">
                          <div class="item-subtitle">Religious Tours</div>
                          <div class="item-title">Follow the cultural heritage of different religions in istanbul.</div>
                          <div>
                          <ul class="itemd-lists">
                            <li> <i class="fa fa-check"></i> Half Day/Full Day</li>
                            <li><i class="fas fa-check"></i> Public/Private Tour</li>
                          </ul>
                          <p class="item-price">From <span>35$</span></p>
                          </div>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/single/">
                      <div class="item-content">
                        <div class="item-media"><img src="frontend/img/tour3.png')}}" alt=""></div>
                        <div class="item-inner">
                          <div class="item-subtitle">Anatolian Tours</div>
                          <div class="item-title">Explore the places of Anatolia waiting to be discovered.</div>
                          <div>
                          <ul class="itemd-lists">
                            <li> <i class="fa fa-check"></i> Half Day/Full Day</li>
                            <li><i class="fas fa-check"></i> Public/Private Tour</li>
                          </ul>
                          <p class="item-price">From <span>35$</span></p>
                          </div>
                        </div>
                      </div>
                    </a>
                  </li>

                </ul>
                <div class="preloader infinite-scroll-preloader"></div>
              </div>
            </div>
          </div>
        </div>
        <!-- Categories View -->
        <div id="view-categories" class="view tab">
          <div data-name="categories" class="page no-navbar">
            <!-- Scrollable page content -->
            <div class="page-content">
              <div class="block">
                <div class="title-container">
                  <h1>Categories</h1>
                </div>
                <div class="categories-container">
                  <a href="/category/">
                    <div class="category card" style="background-image: url('{{asset("frontend/img/categories/sports.jpg")}}'); box-shadow: 0px 15px 20px -10px rgba(252, 186, 47, 0.5);">
                      <h2>Sports</h2>
                    </div>
                  </a>
                  <a href="/category/">
                    <div class="category card" style="background-image: url('{{asset("frontend/img/categories/travel.jpg")}}'); box-shadow: 0px 15px 20px -10px rgba(128, 213, 250, 0.5);">
                      <h2>Travel</h2>
                    </div>
                  </a>
                  <a href="/category/">
                    <div class="category card" style="background-image: url('{{asset("frontend/img/categories/music.jpg")}}'); box-shadow: 0px 15px 20px -10px rgba(231, 0, 70, 0.5);">
                      <h2>Music</h2>
                    </div>
                  </a>
                  <a href="/category/">
                    <div class="category card" style="background-image: url('{{asset("frontend/img/categories/gaming.jpg")}}'); box-shadow: 0px 15px 20px -10px rgba(37, 57, 155, 0.5);">
                      <h2>Gaming</h2>
                    </div>
                  </a>
                  <a href="/category/">
                    <div class="category card" style="background-image: url('{{asset("frontend/img/categories/photography.jpg")}}'); box-shadow: 0px 15px 20px -10px rgba(37, 227, 154, 0.5);">
                      <h2>Photo</h2>
                    </div>
                  </a>
                  <a href="/category/">
                    <div class="category card" style="background-image: url('{{asset("frontend/img/categories/food.jpg")}}'); box-shadow: 0px 15px 20px -10px rgba(255, 128, 169, 0.5);">
                      <h2>Food</h2>
                    </div>
                  </a>
                </div>
                <div class="title-container">
                  <span class="title-date">Recent posts</span>
                  <div class="title-with-link">
                    <h1>Sports</h1>
                    <a href="/category/" class="col button button-small button-round button-fill">See All</a>
                  </div>
                </div>
                <div class="two-columns-cards">
                  <a href="/single/">
                    <div class="card">
                      <img class="card-image" src="frontend/img/thumb-4.jpg')}}" alt="">
                      <div class="card-infos">
                        <h2 class="card-title">Nadal Wins at Roland Garros</h2>
                      </div>
                    </div>
                  </a>
                  <a href="/single/">
                    <div class="card">
                      <img class="card-image" src="frontend/img/thumb-8.jpg')}}" alt="">
                      <div class="card-infos">
                        <h2 class="card-title">Moto-Cross: The Champions Made the Show</h2>
                      </div>
                    </div>
                  </a>
                  <a href="/single/">
                    <div class="card">
                      <img class="card-image" src="frontend/img/thumb-17.jpg')}}" alt="">
                      <div class="card-infos">
                        <h2 class="card-title">Will Conor Return to the UFC Octagon?</h2>
                      </div>
                    </div>
                  </a>
                  <a href="/single/">
                    <div class="card">
                      <img class="card-image" src="frontend/img/thumb-18.jpg')}}" alt="">
                      <div class="card-infos">
                        <h2 class="card-title">Anna Gasser's Snowboard Win</h2>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="title-container">
                  <span class="title-date">Recent posts</span>
                  <div class="title-with-link">
                    <h1>Lifestyle</h1>
                    <a href="/category/" class="col button button-small button-round button-fill">See All</a>
                  </div>
                </div>
                <div class="two-columns-cards">
                  <a href="/single/">
                    <div class="card">
                      <img class="card-image" src="frontend/img/thumb-9.jpg')}}" alt="">
                      <div class="card-infos">
                        <h2 class="card-title">The Best Exotic Destinations</h2>
                      </div>
                    </div>
                  </a>
                  <a href="/single/">
                    <div class="card">
                      <img class="card-image" src="frontend/img/thumb-6.jpg')}}" alt="">
                      <div class="card-infos">
                        <h2 class="card-title">Top Sunglasses Models for This Summer</h2>
                      </div>
                    </div>
                  </a>
                  <a href="/single/">
                    <div class="card">
                      <img class="card-image" src="frontend/img/thumb-38.jpg')}}" alt="">
                      <div class="card-infos">
                        <h2 class="card-title">Join the Paris Body Painting Contest</h2>
                      </div>
                    </div>
                  </a>
                  <a href="/single/">
                    <div class="card">
                      <img class="card-image" src="frontend/img/thumb-39.jpg')}}" alt="">
                      <div class="card-infos">
                        <h2 class="card-title">Nicki Minaj in Featuring with Drake!</h2>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Discover View -->
        <div id="view-discover" class="view tab">
          <div data-name="discover" class="page no-navbar">
            <!-- Scrollable page content -->
            <div class="page-content">
              <div class="discover-gradient">
                <svg viewBox="0 0 100 100" preserveAspectRatio="none"><polygon fill="white" points="0,100 100,0 100,100"/></svg>
              </div>
              <div class="block">
                <div class="title-container white">
                  <span class="title-date">This Week</span>
                  <div class="title-with-link">
                    <h1>Discover</h1>
                    <i class="f7-icons">star_fill</i>
                  </div>
                </div>
              </div>
              <div id="discover-swiper" class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="#" data-href="/single/">
                      <div class="card">
                        <img class="card-image" src="frontend/img/thumb-36.jpg')}}" alt="">
                        <div class="card-infos">
                          <h2 class="card-title">NASA Chooses Its Next Chief Scientist</h2>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#" data-href="/single/">
                      <div class="card">
                        <img class="card-image" src="frontend/img/thumb-19.jpg')}}" alt="">
                        <div class="card-infos">
                          <h2 class="card-title">Jeffrey Campbell's New Shoes Models</h2>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#" data-href="/single/">
                      <div class="card">
                        <img class="card-image" src="frontend/img/thumb-41.jpg')}}" alt="">
                        <div class="card-infos">
                          <h2 class="card-title">The Best Models of Sunglasses to Go out This Summer</h2>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#" data-href="/single/">
                      <div class="card">
                        <img class="card-image" src="frontend/img/thumb-37.jpg')}}" alt="">
                        <div class="card-infos">
                          <h2 class="card-title">Soprano Announces His New Album</h2>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#" data-href="/single/">
                      <div class="card">
                        <img class="card-image" src="frontend/img/thumb-40.jpg')}}" alt="">
                        <div class="card-infos">
                          <h2 class="card-title">Will Conor Return to the UFC Octagon?</h2>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="block">
                <div class="title-medium-container title-with-link">
                  <h2>Popular Authors</h2>
                  <a href="/author-list/" class="col button button-small button-round button-fill">See All</a>
                </div>
                <ul class="popular-authors">
                  <li>
                    <a href="/author/">
                      <div class="author-image"><img src="frontend/img/authors/author-3.jpg')}}" alt=""></div>
                      <div class="author-infos">
                        <div class="author-name">Jess Roxana</div>
                        <div class="author-description">NBA & NFL Journalist</div>
                      </div>
                      <div class="author-star"><i class="f7-icons">star_fill</i></div>
                    </a>
                  </li>
                  <li>
                    <a href="/author/">
                      <div class="author-image"><img src="frontend/img/authors/author-2.jpg')}}" alt=""></div>
                      <div class="author-infos">
                        <div class="author-name">Zorka Ivka</div>
                        <div class="author-description">Graphist and Webdesigner</div>
                      </div>
                      <div class="author-star"><i class="f7-icons">star_fill</i></div>
                    </a>
                  </li>
                  <li>
                    <a href="/author/">
                      <div class="author-image"><img src="frontend/img/authors/author-1.jpg')}}" alt=""></div>
                      <div class="author-infos">
                        <div class="author-name">Camille Aline</div>
                        <div class="author-description">Fashion & Mode Worker</div>
                      </div>
                      <div class="author-star"><i class="f7-icons">star_fill</i></div>
                    </a>
                  </li>
                </ul>
                <div class="title-medium-container">
                  <h2>The Fashion Week</h2>
                </div>
              </div>
              <div id="discover-swiper2" class="swiper-container medium-card-slider style-2">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="#" data-href="/single/">
                      <div class="card">
                        <img class="card-image" src="frontend/img/thumb-20.jpg')}}" alt="">
                      </div>
                      <div class="card-infos">
                        <h2 class="card-title">Best Clothes Showed on Fashion Week</h2>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#" data-href="/single/">
                      <div class="card">
                        <img class="card-image" src="frontend/img/thumb-21.jpg')}}" alt="">
                      </div>
                      <div class="card-infos">
                        <h2 class="card-title">What Future for Milan Fashion Week?</h2>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#" data-href="/single/">
                      <div class="card">
                        <img class="card-image" src="frontend/img/thumb-22.jpg')}}" alt="">
                      </div>
                      <div class="card-infos">
                        <h2 class="card-title">10 Unusual Jewels Spotted at Fashion Week</h2>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#" data-href="/single/">
                      <div class="card">
                        <img class="card-image" src="frontend/img/thumb-23.jpg')}}" alt="">
                      </div>
                      <div class="card-infos">
                        <h2 class="card-title">Monica Bellucci Will Be Present This Year</h2>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#" data-href="/single/">
                      <div class="card">
                        <img class="card-image" src="frontend/img/thumb-24.jpg')}}" alt="">
                      </div>
                      <div class="card-infos">
                        <h2 class="card-title">Milan Fashion Week: Giorgio Armani Show</h2>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="block">
                <div class="title-medium-container title-with-link">
                  <h2>In Lifestyle</h2>
                  <a href="/category/" class="col button button-small button-round button-fill">See All</a>
                </div>
                <ul class="list media-list post-list">
                  <li>
                    <a href="/single/">
                      <div class="item-content">
                        <div class="item-media"><img src="frontend/img/thumb-25.jpg')}}" alt=""></div>
                        <div class="item-inner">
                          <div class="item-subtitle">Fashion</div>
                          <div class="item-title">The Best Diet for a Flatter Belly</div>
                          <div class="item-subtitle bottom-subtitle"><i class="f7-icons">clock</i></i>2 hours ago</div>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/single/">
                      <div class="item-content">
                        <div class="item-media"><img src="frontend/img/thumb-26.jpg')}}" alt=""></div>
                        <div class="item-inner">
                          <div class="item-subtitle">Science</div>
                          <div class="item-title">Here Are the Five Best Fruits of the Summer</div>
                          <div class="item-subtitle bottom-subtitle"><i class="f7-icons">clock</i></i>3 days ago</div>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/single/">
                      <div class="item-content">
                        <div class="item-media"><img src="frontend/img/thumb-27.jpg')}}" alt=""></div>
                        <div class="item-inner">
                          <div class="item-subtitle">Beatles</div>
                          <div class="item-title">Were Vegetables Better Before?</div>
                          <div class="item-subtitle bottom-subtitle"><i class="f7-icons">clock</i></i>Last week</div>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
                <div class="title-medium-container">
                  <h2>Must See</h2>
                </div>
              </div>
              <div id="discover-swiper3" class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="#" data-href="/single/">
                      <div class="card medium">
                        <img class="card-image" src="frontend/img/thumb-28.jpg')}}" alt="">
                        <div class="card-infos">
                          <div class="card-date"><i class="f7-icons">clock</i></i>2 days ago</div>
                          <h2 class="card-title">Edmond at the Royal Palace Theatre</h2>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#" data-href="/single/">
                      <div class="card medium">
                        <img class="card-image" src="frontend/img/thumb-42.jpg')}}" alt="">
                        <div class="card-infos">
                          <div class="card-date"><i class="f7-icons">clock</i></i>4 days ago</div>
                          <h2 class="card-title">Booba on Fire in His New Gotham Clip</h2>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#" data-href="/single/">
                      <div class="card medium">
                        <img class="card-image" src="frontend/img/thumb-29.jpg')}}" alt="">
                        <div class="card-infos">
                          <div class="card-date"><i class="f7-icons">clock</i></i>3 weeks ago</div>
                          <h2 class="card-title">15 Cheap Outing Ideas in London</h2>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="#" data-href="/single/">
                      <div class="card medium">
                        <img class="card-image" src="frontend/img/thumb-30.jpg')}}" alt="">
                        <div class="card-infos">
                          <div class="card-date"><i class="f7-icons">clock</i></i>1 month ago</div>
                          <h2 class="card-title">Ariana Grande Announces a New Fragrance</h2>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="block">
                <div class="title-medium-container">
                  <h2>Popular Last Week</h2>
                </div>
                <ul class="list media-list post-list">
                  <li>
                    <a href="/single/">
                      <div class="item-content">
                        <div class="item-media"><img src="frontend/img/thumb-31.jpg')}}" alt=""></div>
                        <div class="item-inner">
                          <div class="item-subtitle">Fashion</div>
                          <div class="item-title">The Crocodile, Man's Best Friend?</div>
                          <div class="item-subtitle bottom-subtitle"><i class="f7-icons">clock</i></i>4 hours ago</div>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/single/">
                      <div class="item-content">
                        <div class="item-media"><img src="frontend/img/thumb-32.jpg')}}" alt=""></div>
                        <div class="item-inner">
                          <div class="item-subtitle">Science</div>
                          <div class="item-title">7 Accessories to Pack This Summer</div>
                          <div class="item-subtitle bottom-subtitle"><i class="f7-icons">clock</i></i>6 days ago</div>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/single/">
                      <div class="item-content">
                        <div class="item-media"><img src="frontend/img/thumb-33.jpg')}}" alt=""></div>
                        <div class="item-inner">
                          <div class="item-subtitle">Beatles</div>
                          <div class="item-title">Mylene Farmer Will Unveil Her New Single on Friday</div>
                          <div class="item-subtitle bottom-subtitle"><i class="f7-icons">clock</i></i>Last week</div>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/single/">
                      <div class="item-content">
                        <div class="item-media"><img src="frontend/img/thumb-34.jpg')}}" alt=""></div>
                        <div class="item-inner">
                          <div class="item-subtitle">Fashion</div>
                          <div class="item-title">Holidays Abroad: Leave Reassured!</div>
                          <div class="item-subtitle bottom-subtitle"><i class="f7-icons">clock</i></i>Last month</div>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Search View -->
        <div id="view-search" class="view tab">
          <div data-name="search" class="page no-navbar">
            <div class="page-content page-search">
              <div class="searchbar-backdrop"></div>
              <div class="block searchbar-container">
                <div class="title-container">
                  <h1>Search</h1>
                </div>
                <form class="searchbar">
                  <div class="searchbar-inner">
                    <div class="searchbar-input-wrap">
                      <input type="search" placeholder="Search">
                      <i class="searchbar-icon"></i>
                      <span class="input-clear-button"></span>
                    </div>
                    <span class="searchbar-disable-button">Cancel</span>
                  </div>
                </form>
              </div>
              <div class="block search-container">
                <div class="searchbar-hide-on-search">
                  <h2>Popular Categories</h2>
                  <ul class="popular-tags">
                    <li><a href="#" class="link"><span>Politics</span><i class="f7-icons">chevron_right</i></a></li>
                    <li><a href="#" class="link"><span>Sports</span><i class="f7-icons">chevron_right</i></a></li>
                    <li><a href="#" class="link"><span>Fashion</span><i class="f7-icons">chevron_right</i></a></li>
                    <li><a href="#" class="link"><span>Animals</span><i class="f7-icons">chevron_right</i></a></li>
                    <li><a href="#" class="link"><span>Travel</span><i class="f7-icons">chevron_right</i></a></li>
                    <li><a href="#" class="link"><span>Movies</span><i class="f7-icons">chevron_right</i></a></li>
                  </ul>
                  <h2>Popular Tags</h2>
                  <div class="list no-hairlines trending-search">
                    <ul>
                      <li class="item-content">
                        <div class="item-inner">
                          <div class="item-title"><a href="#" class="link">Ronaldo</a></div>
                        </div>
                      </li>
                      <li class="item-content">
                        <div class="item-inner">
                          <div class="item-title"><a href="#" class="link">Lil Wayne</a></div>
                        </div>
                      </li>
                      <li class="item-content">
                        <div class="item-inner">
                          <div class="item-title"><a href="#" class="link">Football</a></div>
                        </div>
                      </li>
                      <li class="item-content">
                        <div class="item-inner">
                          <div class="item-title"><a href="#" class="link">Lebron James</a></div>
                        </div>
                      </li>
                      <li class="item-content">
                        <div class="item-inner">
                          <div class="item-title"><a href="#" class="link">NBA</a></div>
                        </div>
                      </li>
                      <li class="item-content">
                        <div class="item-inner">
                          <div class="item-title"><a href="#" class="link">US Elections</a></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="preloader search-preloader"></div>
                <div class="search-results">
                  <ul class="list media-list post-list">
                    <li>
                      <a href="/single/">
                        <div class="item-content">
                          <div class="item-media"><img src="frontend/img/thumb-11.jpg')}}" alt=""></div>
                          <div class="item-inner">
                            <div class="item-subtitle">Fashion</div>
                            <div class="item-title">The 6th Edition of the Body Painting Contest</div>
                            <div class="item-subtitle bottom-subtitle"><img src="{{assert('frontend/img/authors/author-7.jpg')}}" alt="">Elena Anka</div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="/single/">
                        <div class="item-content">
                          <div class="item-media"><img src="frontend/img/thumb-12.jpg')}}" alt=""></div>
                          <div class="item-inner">
                            <div class="item-subtitle">Photography</div>
                            <div class="item-title">20 Photography Tips for Taking Pictures</div>
                            <div class="item-subtitle bottom-subtitle"><img src="frontend/img/authors/author-3.jpg')}}" alt="">Jess Roxana</div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="/single/">
                        <div class="item-content">
                          <div class="item-media"><img src="frontend/img/thumb-13.jpg')}}" alt=""></div>
                          <div class="item-inner">
                            <div class="item-subtitle">Beatles</div>
                            <div class="item-title">Tottenham: NFL Turf Is in Place!</div>
                            <div class="item-subtitle bottom-subtitle"><img src="frontend/img/authors/author-1.jpg')}}" alt="">Camille Aline</div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="/single/">
                        <div class="item-content">
                          <div class="item-media"><img src="frontend/img/thumb-31.jpg')}}" alt=""></div>
                          <div class="item-inner">
                            <div class="item-subtitle">Fashion</div>
                            <div class="item-title">The Crocodile, Man's Best Friend?</div>
                            <div class="item-subtitle bottom-subtitle"><img src="{{assert('frontend/img/authors/author-7.jpg')}}" alt="">Elena Anka</div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="/single/">
                        <div class="item-content">
                          <div class="item-media"><img src="frontend/img/thumb-32.jpg" alt=""></div>
                          <div class="item-inner">
                            <div class="item-subtitle">Science</div>
                            <div class="item-title">7 Accessories to Pack This Summer</div>
                            <div class="item-subtitle bottom-subtitle"><img src="frontend/img/authors/author-3.jpg')}}" alt="">Jess Roxana</div>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Pages View -->
        <div id="view-pages" class="view tab">
          <div class="page" data-name="pages">
            <div class="navbar">
              <div class="navbar-bg"></div>
              <div class="navbar-inner sliding">
                <div class="title">Components</div>
              </div>
            </div>
            <!-- Scrollable page content -->
            <div class="page-content">
              <div class="block">
                <h2>Dark Mode</h2>
              </div>
              <div class="list pages-list">
                <ul>
                  <li>
                    <div class="item-link item-content item-button">
                      <div class="item-media bg-color-black"><i class="f7-icons text-color-orange">moon_fill</i></div>
                      <div class="item-inner">
                        <div class="item-title">Enable Dark Mode</div>
                        <label class="toggle toggle-init color-green toggle-theme">
                          <input type="checkbox">
                          <span class="toggle-icon"></span>
                        </label>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="block">
                <h2>Color Themes</h2>
              </div>
              <div class="list pages-list">
                <ul>
                  <li>
                    <div class="item-content item-themes">
                      <label class="radio color-white"><input type="radio" name="radio-color-theme" id="color-theme-red"><i class="icon-radio bg-color-red"></i></label>
                      <label class="radio color-white"><input type="radio" name="radio-color-theme" id="color-theme-green"><i class="icon-radio bg-color-green"></i></label>
                      <label class="radio color-white"><input type="radio" name="radio-color-theme" id="color-theme-blue"><i class="icon-radio bg-color-blue"></i></label>
                      <label class="radio color-white"><input type="radio" name="radio-color-theme" id="color-theme-pink" checked><i class="icon-radio bg-color-pink"></i></label>
                      <label class="radio color-white"><input type="radio" name="radio-color-theme" id="color-theme-yellow"><i class="icon-radio bg-color-yellow"></i></label>
                      <label class="radio color-white"><input type="radio" name="radio-color-theme" id="color-theme-orange"><i class="icon-radio bg-color-orange"></i></label>
                      <label class="radio color-white"><input type="radio" name="radio-color-theme" id="color-theme-gray"><i class="icon-radio bg-color-gray"></i></label>
                      <label class="radio color-black"><input type="radio" name="radio-color-theme" id="color-theme-white"><i class="icon-radio bg-color-white"></i></label>
                      <label class="radio color-white"><input type="radio" name="radio-color-theme" id="color-theme-black"><i class="icon-radio bg-color-black"></i></label>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="block">
                <h2>Big Cards</h2>
              </div>
              <div class="list pages-list">
                <ul>
                  <li>
                    <a href="/cards/" class="item-link item-content">
                      <div class="item-media"><i class="f7-icons">photo</i></div>
                      <div class="item-inner">
                        <div class="item-title">Cards</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/cards-author-comments/" class="item-link item-content">
                      <div class="item-media"><i class="f7-icons">photo</i></div>
                      <div class="item-inner">
                        <div class="item-title">Cards (author + comments)</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/cards-category/" class="item-link item-content">
                      <div class="item-media"><i class="f7-icons">photo</i></div>
                      <div class="item-inner">
                        <div class="item-title">Cards (with category)</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/cards-chip/" class="item-link item-content">
                      <div class="item-media"><i class="f7-icons">photo</i></div>
                      <div class="item-inner">
                        <div class="item-title">Cards (with chip)</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/cards-medium/" class="item-link item-content">
                      <div class="item-media"><i class="f7-icons">photo</i></div>
                      <div class="item-inner">
                        <div class="item-title">Cards (medium size)</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/cards-footer/" class="item-link item-content">
                      <div class="item-media bg-color-yellow"><i class="f7-icons">photo</i></div>
                      <div class="item-inner">
                        <div class="item-title">Cards (footer version)</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/cards-columns/" class="item-link item-content">
                      <div class="item-media bg-color-orange"><i class="f7-icons">photo</i></div>
                      <div class="item-inner">
                        <div class="item-title">Cards (2 columns)</div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="block">
                <h2>Lists</h2>
              </div>
              <div class="list pages-list">
                <ul>
                  <li>
                    <a href="/list-category/" class="item-link item-content">
                      <div class="item-media bg-color-green"><i class="f7-icons">square_list_fill</i></div>
                      <div class="item-inner">
                        <div class="item-title">List (with category)</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/list-category-author/" class="item-link item-content">
                      <div class="item-media bg-color-green"><i class="f7-icons">square_list_fill</i></div>
                      <div class="item-inner">
                        <div class="item-title">List (category + author)</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/list-category-date/" class="item-link item-content">
                      <div class="item-media bg-color-green"><i class="f7-icons">square_list_fill</i></div>
                      <div class="item-inner">
                        <div class="item-title">List (category + date)</div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="block">
                <h2>Sliders</h2>
              </div>
              <div class="list pages-list">
                <ul>
                  <li>
                    <a href="/slider-1/" class="item-link item-content">
                      <div class="item-media bg-color-blue"><i class="f7-icons">rectangle_fill_on_rectangle_fill</i></div>
                      <div class="item-inner">
                        <div class="item-title">Slider 1</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/slider-2/" class="item-link item-content">
                      <div class="item-media bg-color-blue"><i class="f7-icons">rectangle_fill_on_rectangle_fill</i></div>
                      <div class="item-inner">
                        <div class="item-title">Slider 2</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/slider-3/" class="item-link item-content">
                      <div class="item-media bg-color-blue"><i class="f7-icons">rectangle_fill_on_rectangle_fill</i></div>
                      <div class="item-inner">
                        <div class="item-title">Slider 3</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/slider-4/" class="item-link item-content">
                      <div class="item-media bg-color-blue"><i class="f7-icons">rectangle_fill_on_rectangle_fill</i></div>
                      <div class="item-inner">
                        <div class="item-title">Slider 4</div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="block">
                <h2>Single Post</h2>
              </div>
              <div class="list pages-list">
                <ul>
                  <li>
                    <a href="/single/" class="item-link item-content">
                      <div class="item-media"><i class="f7-icons">doc_richtext</i></div>
                      <div class="item-inner">
                        <div class="item-title">Single (header 1)</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/single-2/" class="item-link item-content">
                      <div class="item-media"><i class="f7-icons">doc_richtext</i></div>
                      <div class="item-inner">
                        <div class="item-title">Single (header 2)</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/single-elements/" class="item-link item-content">
                      <div class="item-media"><i class="f7-icons">doc_richtext</i></div>
                      <div class="item-inner">
                        <div class="item-title">Single Elements</div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="block">
                <h2>Categories</h2>
              </div>
              <div class="list pages-list">
                <ul>
                  <li>
                    <a href="/categories-cards/" class="item-link item-content">
                      <div class="item-media bg-color-orange"><i class="f7-icons">square_grid_2x2_fill</i></div>
                      <div class="item-inner">
                        <div class="item-title">Categories (cards)</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/categories-columns/" class="item-link item-content">
                      <div class="item-media bg-color-orange"><i class="f7-icons">square_grid_2x2_fill</i></div>
                      <div class="item-inner">
                        <div class="item-title">Categories (columns)</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/category/" class="item-link item-content">
                      <div class="item-media bg-color-orange"><i class="f7-icons">square_grid_2x2_fill</i></div>
                      <div class="item-inner">
                        <div class="item-title">Category Posts</div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="block">
                <h2>Author</h2>
              </div>
              <div class="list pages-list">
                <ul>
                  <li>
                    <a href="/author-list/" class="item-link item-content">
                      <div class="item-media bg-color-yellow"><i class="f7-icons">square_list</i></div>
                      <div class="item-inner">
                        <div class="item-title">Author List</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/author/" class="item-link item-content">
                      <div class="item-media bg-color-yellow"><i class="f7-icons">person_fill</i></div>
                      <div class="item-inner">
                        <div class="item-title">Author Profile</div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="block">
                <h2>Contact</h2>
              </div>
              <div class="list pages-list">
                <ul>
                  <li>
                    <a href="/contact/" class="item-link item-content">
                      <div class="item-media"><i class="f7-icons">envelope_fill</i></div>
                      <div class="item-inner">
                        <div class="item-title">Contact Page</div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="block">
                <h2>Features</h2>
              </div>
              <div class="list pages-list">
                <ul>
                  <li>
                    <a href="/pull-to-refresh/" class="item-link item-content">
                      <div class="item-media"><i class="f7-icons">arrow_down</i></div>
                      <div class="item-inner">
                        <div class="item-title">Pull to Refresh</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/infinite-scroll/" class="item-link item-content">
                      <div class="item-media"><i class="f7-icons">infinite</i></div>
                      <div class="item-inner">
                        <div class="item-title">Infinite Scroll</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/promo-banner/" class="item-link item-content">
                      <div class="item-media bg-color-blue"><i class="f7-icons">star_fill</i></div>
                      <div class="item-inner">
                        <div class="item-title">Promo Banner</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="item-link item-content item-button">
                      <div class="item-media bg-color-orange"><i class="f7-icons">arrowshape_turn_up_right_fill</i></div>
                      <div class="item-inner">
                        <div class="item-title">Share Dialog</div>
                        <a href="#" class="col button button-small button-round button-fill share-actions">Try It</a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="item-link item-content item-button">
                      <div class="item-media bg-color-green"><i class="f7-icons">bell_fill</i></div>
                      <div class="item-inner">
                        <div class="item-title">Notification</div>
                        <a href="#" class="col button button-small button-round button-fill open-notification">Try It</a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
          <div id="view-single" class="view tab">
          <div class="page" data-name="pages">
            <div class="navbar">
              <div class="navbar-bg"></div>
              <div class="navbar-inner sliding">
                <div class="title">Components</div>
              </div>
            </div>
            <!-- Scrollable page content -->
            <div class="page-content">
              <div class="block">
                <h2>Dark Mode</h2>
              </div>
              <div class="list pages-list">
                <ul>
                  <li>
                    <div class="item-link item-content item-button">
                      <div class="item-media bg-color-black"><i class="f7-icons text-color-orange">moon_fill</i></div>
                      <div class="item-inner">
                        <div class="item-title">Enable Dark Mode</div>
                        <label class="toggle toggle-init color-green toggle-theme">
                          <input type="checkbox">
                          <span class="toggle-icon"></span>
                        </label>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="block">
                <h2>Color Themes</h2>
              </div>
              <div class="list pages-list">
                <ul>
                  <li>
                    <div class="item-content item-themes">
                      <label class="radio color-white"><input type="radio" name="radio-color-theme" id="color-theme-red"><i class="icon-radio bg-color-red"></i></label>
                      <label class="radio color-white"><input type="radio" name="radio-color-theme" id="color-theme-green"><i class="icon-radio bg-color-green"></i></label>
                      <label class="radio color-white"><input type="radio" name="radio-color-theme" id="color-theme-blue"><i class="icon-radio bg-color-blue"></i></label>
                      <label class="radio color-white"><input type="radio" name="radio-color-theme" id="color-theme-pink" checked><i class="icon-radio bg-color-pink"></i></label>
                      <label class="radio color-white"><input type="radio" name="radio-color-theme" id="color-theme-yellow"><i class="icon-radio bg-color-yellow"></i></label>
                      <label class="radio color-white"><input type="radio" name="radio-color-theme" id="color-theme-orange"><i class="icon-radio bg-color-orange"></i></label>
                      <label class="radio color-white"><input type="radio" name="radio-color-theme" id="color-theme-gray"><i class="icon-radio bg-color-gray"></i></label>
                      <label class="radio color-black"><input type="radio" name="radio-color-theme" id="color-theme-white"><i class="icon-radio bg-color-white"></i></label>
                      <label class="radio color-white"><input type="radio" name="radio-color-theme" id="color-theme-black"><i class="icon-radio bg-color-black"></i></label>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="block">
                <h2>Big Cards</h2>
              </div>
              <div class="list pages-list">
                <ul>
                  <li>
                    <a href="/cards/" class="item-link item-content">
                      <div class="item-media"><i class="f7-icons">photo</i></div>
                      <div class="item-inner">
                        <div class="item-title">Cards</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/cards-author-comments/" class="item-link item-content">
                      <div class="item-media"><i class="f7-icons">photo</i></div>
                      <div class="item-inner">
                        <div class="item-title">Cards (author + comments)</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/cards-category/" class="item-link item-content">
                      <div class="item-media"><i class="f7-icons">photo</i></div>
                      <div class="item-inner">
                        <div class="item-title">Cards (with category)</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/cards-chip/" class="item-link item-content">
                      <div class="item-media"><i class="f7-icons">photo</i></div>
                      <div class="item-inner">
                        <div class="item-title">Cards (with chip)</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/cards-medium/" class="item-link item-content">
                      <div class="item-media"><i class="f7-icons">photo</i></div>
                      <div class="item-inner">
                        <div class="item-title">Cards (medium size)</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/cards-footer/" class="item-link item-content">
                      <div class="item-media bg-color-yellow"><i class="f7-icons">photo</i></div>
                      <div class="item-inner">
                        <div class="item-title">Cards (footer version)</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/cards-columns/" class="item-link item-content">
                      <div class="item-media bg-color-orange"><i class="f7-icons">photo</i></div>
                      <div class="item-inner">
                        <div class="item-title">Cards (2 columns)</div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="block">
                <h2>Lists</h2>
              </div>
              <div class="list pages-list">
                <ul>
                  <li>
                    <a href="/list-category/" class="item-link item-content">
                      <div class="item-media bg-color-green"><i class="f7-icons">square_list_fill</i></div>
                      <div class="item-inner">
                        <div class="item-title">List (with category)</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/list-category-author/" class="item-link item-content">
                      <div class="item-media bg-color-green"><i class="f7-icons">square_list_fill</i></div>
                      <div class="item-inner">
                        <div class="item-title">List (category + author)</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/list-category-date/" class="item-link item-content">
                      <div class="item-media bg-color-green"><i class="f7-icons">square_list_fill</i></div>
                      <div class="item-inner">
                        <div class="item-title">List (category + date)</div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="block">
                <h2>Sliders</h2>
              </div>
              <div class="list pages-list">
                <ul>
                  <li>
                    <a href="/slider-1/" class="item-link item-content">
                      <div class="item-media bg-color-blue"><i class="f7-icons">rectangle_fill_on_rectangle_fill</i></div>
                      <div class="item-inner">
                        <div class="item-title">Slider 1</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/slider-2/" class="item-link item-content">
                      <div class="item-media bg-color-blue"><i class="f7-icons">rectangle_fill_on_rectangle_fill</i></div>
                      <div class="item-inner">
                        <div class="item-title">Slider 2</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/slider-3/" class="item-link item-content">
                      <div class="item-media bg-color-blue"><i class="f7-icons">rectangle_fill_on_rectangle_fill</i></div>
                      <div class="item-inner">
                        <div class="item-title">Slider 3</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/slider-4/" class="item-link item-content">
                      <div class="item-media bg-color-blue"><i class="f7-icons">rectangle_fill_on_rectangle_fill</i></div>
                      <div class="item-inner">
                        <div class="item-title">Slider 4</div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="block">
                <h2>Single Post</h2>
              </div>
              <div class="list pages-list">
                <ul>
                  <li>
                    <a href="/single/" class="item-link item-content">
                      <div class="item-media"><i class="f7-icons">doc_richtext</i></div>
                      <div class="item-inner">
                        <div class="item-title">Single (header 1)</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/single-2/" class="item-link item-content">
                      <div class="item-media"><i class="f7-icons">doc_richtext</i></div>
                      <div class="item-inner">
                        <div class="item-title">Single (header 2)</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/single-elements/" class="item-link item-content">
                      <div class="item-media"><i class="f7-icons">doc_richtext</i></div>
                      <div class="item-inner">
                        <div class="item-title">Single Elements</div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="block">
                <h2>Categories</h2>
              </div>
              <div class="list pages-list">
                <ul>
                  <li>
                    <a href="/categories-cards/" class="item-link item-content">
                      <div class="item-media bg-color-orange"><i class="f7-icons">square_grid_2x2_fill</i></div>
                      <div class="item-inner">
                        <div class="item-title">Categories (cards)</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/categories-columns/" class="item-link item-content">
                      <div class="item-media bg-color-orange"><i class="f7-icons">square_grid_2x2_fill</i></div>
                      <div class="item-inner">
                        <div class="item-title">Categories (columns)</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/category/" class="item-link item-content">
                      <div class="item-media bg-color-orange"><i class="f7-icons">square_grid_2x2_fill</i></div>
                      <div class="item-inner">
                        <div class="item-title">Category Posts</div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="block">
                <h2>Author</h2>
              </div>
              <div class="list pages-list">
                <ul>
                  <li>
                    <a href="/author-list/" class="item-link item-content">
                      <div class="item-media bg-color-yellow"><i class="f7-icons">square_list</i></div>
                      <div class="item-inner">
                        <div class="item-title">Author List</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/author/" class="item-link item-content">
                      <div class="item-media bg-color-yellow"><i class="f7-icons">person_fill</i></div>
                      <div class="item-inner">
                        <div class="item-title">Author Profile</div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="block">
                <h2>Contact</h2>
              </div>
              <div class="list pages-list">
                <ul>
                  <li>
                    <a href="/contact/" class="item-link item-content">
                      <div class="item-media"><i class="f7-icons">envelope_fill</i></div>
                      <div class="item-inner">
                        <div class="item-title">Contact Page</div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="block">
                <h2>Features</h2>
              </div>
              <div class="list pages-list">
                <ul>
                  <li>
                    <a href="/pull-to-refresh/" class="item-link item-content">
                      <div class="item-media"><i class="f7-icons">arrow_down</i></div>
                      <div class="item-inner">
                        <div class="item-title">Pull to Refresh</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/infinite-scroll/" class="item-link item-content">
                      <div class="item-media"><i class="f7-icons">infinite</i></div>
                      <div class="item-inner">
                        <div class="item-title">Infinite Scroll</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="/promo-banner/" class="item-link item-content">
                      <div class="item-media bg-color-blue"><i class="f7-icons">star_fill</i></div>
                      <div class="item-inner">
                        <div class="item-title">Promo Banner</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="item-link item-content item-button">
                      <div class="item-media bg-color-orange"><i class="f7-icons">arrowshape_turn_up_right_fill</i></div>
                      <div class="item-inner">
                        <div class="item-title">Share Dialog</div>
                        <a href="#" class="col button button-small button-round button-fill share-actions">Try It</a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="item-link item-content item-button">
                      <div class="item-media bg-color-green"><i class="f7-icons">bell_fill</i></div>
                      <div class="item-inner">
                        <div class="item-title">Notification</div>
                        <a href="#" class="col button button-small button-round button-fill open-notification">Try It</a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>


    @endsection

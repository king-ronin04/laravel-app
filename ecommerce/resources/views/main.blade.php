<main>
    <article>

      <!-- 
        - #HERO
      -->

      @include('hero');




      <!-- 
        - #COLLECTION
      -->

      <section class="section collection" id="collection" aria-label="collection" data-section>
        <div class="container">

          <ul class="collection-list">

            <li>
              <div class="collection-card has-before hover:shine">

                <h2 class="h2 card-title">Summer Collection</h2>

                <p class="card-text">Starting at $17.99</p>

                <a href="#" class="btn-link">
                  <span class="span">Shop Now</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

                <div class="has-bg-image" style="background-image: url('./assets/images/collection-1.jpg')"></div>

              </div>
            </li>

            <li>
              <div class="collection-card has-before hover:shine">

                <h2 class="h2 card-title">What’s New?</h2>

                <p class="card-text">Get the glow</p>

                <a href="#" class="btn-link">
                  <span class="span">Discover Now</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

                <div class="has-bg-image" style="background-image: url('./assets/images/collection-2.jpg')"></div>

              </div>
            </li>

            <li>
              <div class="collection-card has-before hover:shine">

                <h2 class="h2 card-title">Buy 1 Get 1</h2>

                <p class="card-text">Starting at $7.99</p>

                <a href="#" class="btn-link">
                  <span class="span">Discover Now</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

                <div class="has-bg-image" style="background-image: url('./assets/images/collection-3.jpg')"></div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #SHOP
      -->

      @include('shop');




      <!-- 
        - #BANNER
      -->

      <section class="section banner" aria-label="banner" data-section>
        <div class="container">

          <ul class="banner-list">

            <li>
              <div class="banner-card banner-card-1 has-before hover:shine">

                <p class="card-subtitle">New Collection</p>

                <h2 class="h2 card-title">Discover Our Autumn Skincare</h2>

                <a href="#" class="btn btn-secondary">Explore More</a>

                <div class="has-bg-image" style="background-image: url('./assets/images/banner-1.jpg')"></div>

              </div>
            </li>

            <li>
              <div class="banner-card banner-card-2 has-before hover:shine">

                <h2 class="h2 card-title">25% off Everything</h2>

                <p class="card-text">
                  Makeup with extended range in colors for every human.
                </p>

                <a href="#" class="btn btn-secondary">Shop Sale</a>

                <div class="has-bg-image" style="background-image: url('./assets/images/banner-2.jpg')"></div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #FEATURE
      -->

      <section class="section feature" aria-label="feature" data-section>
        <div class="container">

          <h2 class="h2-large section-title">Why Shop with Glowing?</h2>

          <ul class="flex-list">

            <li class="flex-item">
              <div class="feature-card">

                <img src="./assets/images/feature-1.jpg" width="204" height="236" loading="lazy" alt="Guaranteed PURE"
                  class="card-icon">

                <h3 class="h3 card-title">Guaranteed PURE</h3>

                <p class="card-text">
                  All Grace formulations adhere to strict purity standards and will never contain harsh or toxic
                  ingredients
                </p>

              </div>
            </li>

            <li class="flex-item">
              <div class="feature-card">

                <img src="./assets/images/feature-2.jpg" width="204" height="236" loading="lazy"
                  alt="Completely Cruelty-Free" class="card-icon">

                <h3 class="h3 card-title">Completely Cruelty-Free</h3>

                <p class="card-text">
                  All Grace formulations adhere to strict purity standards and will never contain harsh or toxic
                  ingredients
                </p>

              </div>
            </li>

            <li class="flex-item">
              <div class="feature-card">

                <img src="./assets/images/feature-3.jpg" width="204" height="236" loading="lazy"
                  alt="Ingredient Sourcing" class="card-icon">

                <h3 class="h3 card-title">Ingredient Sourcing</h3>

                <p class="card-text">
                  All Grace formulations adhere to strict purity standards and will never contain harsh or toxic
                  ingredients
                </p>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #OFFER
      -->

      <section class="section offer" id="offer" aria-label="offer" data-section>
        <div class="container">

          <figure class="offer-banner">
            <img src="./assets/images/offer-banner-1.jpg" width="305" height="408" loading="lazy" alt="offer products"
              class="w-100">

            <img src="./assets/images/offer-banner-2.jpg" width="450" height="625" loading="lazy" alt="offer products"
              class="w-100">
          </figure>

          <div class="offer-content">

            <p class="offer-subtitle">
              <span class="span">Special Offer</span>

              <span class="badge" aria-label="20% off">-20%</span>
            </p>

            <h2 class="h2-large section-title">Mountain Pine Bath Oil</h2>

            <p class="section-text">
              Made using clean, non-toxic ingredients, our products are designed for everyone.
            </p>

            <div class="countdown">

              <span class="time" aria-label="days">15</span>
              <span class="time" aria-label="hours">21</span>
              <span class="time" aria-label="minutes">46</span>
              <span class="time" aria-label="seconds">08</span>

            </div>

            <a href="#" class="btn btn-primary">Get Only $39.00</a>

          </div>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog" id="blog" aria-label="blog" data-section>
        <div class="container">

          <h2 class="h2-large section-title">More to Discover</h2>

          <ul class="flex-list">

            <li class="flex-item">
              <div class="blog-card">

                <figure class="card-banner img-holder has-before hover:shine" style="--width: 700; --height: 450;">
                  <img src="./assets/images/blog-1.jpg" width="700" height="450" loading="lazy" alt="Find a Store"
                    class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="#" class="card-title">Find a Store</a>
                </h3>

                <a href="#" class="btn-link">
                  <span class="span">Our Store</span>

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li class="flex-item">
              <div class="blog-card">

                <figure class="card-banner img-holder has-before hover:shine" style="--width: 700; --height: 450;">
                  <img src="./assets/images/blog-2.jpg" width="700" height="450" loading="lazy" alt="From Our Blog"
                    class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="#" class="card-title">From Our Blog</a>
                </h3>

                <a href="#" class="btn-link">
                  <span class="span">Our Store</span>

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li class="flex-item">
              <div class="blog-card">

                <figure class="card-banner img-holder has-before hover:shine" style="--width: 700; --height: 450;">
                  <img src="./assets/images/blog-3.jpg" width="700" height="450" loading="lazy" alt="Our Story"
                    class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="#" class="card-title">Our Story</a>
                </h3>

                <a href="#" class="btn-link">
                  <span class="span">Our Store</span>

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>

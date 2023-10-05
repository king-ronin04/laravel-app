@extends('layout')

@section('aboutus')


      <!-- 
        - #FEATURE-CARDS
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

      <style>




/*-----------------------------------*\
  #CUSTOM PROPERTY
\*-----------------------------------*/

:root {

/**
 * colors
 */

--hoockers-green_20: hsl(148, 20%, 38%, 0.2);
--pale-spring-bud: hsl(60, 68%, 85%);
--hoockers-green: hsl(148, 20%, 38%);
--spanish-gray: hsl(0, 0%, 61%);
--light-gray: hsl(0, 0%, 80%);
--cultured-1: hsl(0, 0%, 97%);
--cultured-2: hsl(60, 6%, 93%);
--gray-web: hsl(0, 0%, 49%);
--white_30: hsl(0, 0%, 100%, 0.3);
--black_70: hsla(0, 0%, 0%, 0.7);
--black_50: hsla(0, 0%, 0%, 0.5);
--black_15: hsla(0, 0%, 0%, 0.15);
--black_10: hsla(0, 0%, 0%, 0.1);
--black_5: hsla(0, 0%, 0%, 0.05);
--white: hsl(0, 0%, 100%);
--black: hsl(0, 0%, 0%);

/**
 * gradient color
 */

--gradient: linear-gradient(to right, transparent 50%, var(--white_30) 100%);

/**
 * typography
 */

--ff-urbanist: 'Urbanist', sans-serif;

--fs-1: 4.8rem;
--fs-2: 4rem;
--fs-3: 3.4rem;
--fs-4: 2.4rem;
--fs-5: 2rem;
--fs-6: 1.8rem;
--fs-7: 1.5rem;
--fs-8: 1.4rem;
--fs-9: 1.3rem;

--fw-400: 400;
--fw-500: 500;
--fw-600: 600;
--fw-700: 700;
--fw-800: 800;

/**
 * spacing
 */

--section-padding: 35px;

/**
 * shadow
 */

--shadow-1: 0 8px 16px var(--black_15);
--shadow-2: 0 4px 10px var(--black_5);

/**
 * radius
 */

--radius-3: 3px;

/**
 * transition
 */

--transition-1: 0.25s ease;
--transition-2: 0.5s ease;
--transition-3: 1s ease;
--cubic-in: cubic-bezier(0.51, 0.03, 0.64, 0.28);
--cubic-out: cubic-bezier(0.33, 0.85, 0.4, 0.96);

}





/*-----------------------------------*\
#RESET
\*-----------------------------------*/

*,
*::before,
*::after {
margin: 0;
padding: 0;
box-sizing: border-box;
}

li { list-style: none; }

a,
img,
span,
input,
button,
ion-icon { display: block; }

a {
text-decoration: none;
color: inherit;
}

img { height: auto; }

input,
button {
background: none;
border: none;
font: inherit;
}

input { width: 100%; }

button { cursor: pointer; }

ion-icon {
pointer-events: none;
--ionicon-stroke-width: 25px;
}


:focus-visible { outline-offset: 4px; }

::-webkit-scrollbar {
width: 10px;
height: 5px;
}

::-webkit-scrollbar-track { background-color: hsl(0, 0%, 95%); }

::-webkit-scrollbar-thumb { background-color: hsl(0, 0%, 80%); }

::-webkit-scrollbar-thumb:hover { background-color: hsl(0, 0%, 70%); }





/*-----------------------------------*\
#REUSED STYLE
\*-----------------------------------*/

.container { padding-inline: 15px; }

.section { padding-block: var(--section-padding); }

.has-bg-image {
background-repeat: no-repeat;
background-size: cover;
background-position: center;
}

.h1,
.h2,
.h3,
.h2-large {
color: var(--black);
font-weight: var(--fw-600);
line-height: 1.3;
}

.h1 {
font-size: var(--fs-1);
line-height: 1.2;
}

.h2 { font-size: var(--fs-3); }

.h2-large { font-size: var(--fs-2); }

.h3 { font-size: var(--fs-4); }



.has-scrollbar::-webkit-scrollbar-track,
.has-scrollbar::-webkit-scrollbar-thumb { background-color: transparent; }

.has-scrollbar:is(:hover, :focus-within)::-webkit-scrollbar-track {
background-color: hsl(0, 0%, 98%);
}

.has-scrollbar:is(:hover, :focus-within)::-webkit-scrollbar-thumb {
background-color: hsl(0, 0%, 70%);
}

.has-before,
.has-after {
position: relative;
z-index: 1;
}

.has-before::before,
.has-after::after {
content: "";
position: absolute;
}

.hover\:shine { overflow: hidden; }

.hover\:shine .has-bg-image {
position: absolute;
top: 0;
right: 0;
bottom: 0;
left: 0;
z-index: -1;
transition: var(--transition-2);
}

.hover\:shine:is(:hover, :focus) .has-bg-image { transform: scale(1.15); }

.hover\:shine::before {
top: 0;
left: -140%;
bottom: 0;
width: 100%;
background-image: var(--gradient);
transform: skewX(-25deg);
transition: var(--transition-2);
z-index: 1;
}

.hover\:shine:is(:hover, :focus-within)::before { animation: shine 1s ease forwards; }

@keyframes shine {
0% { transform: skewX(-25deg) translateX(0); }
100% { transform: skewX(-25deg) translateX(250%); }
}


.img-holder {
aspect-ratio: var(--width) / var(--height);
background-color: var(--light-gray);
}

.img-cover {
width: 100%;
height: 100%;
object-fit: cover;
}



.flex-list {
display: flex;
flex-wrap: wrap;
justify-content: center;
align-items: center;
gap: 30px;
}

/*-----------------------------------*\
#FEATURE
\*-----------------------------------*/

.feature { text-align: center; }

.feature .section-title { margin-block-end: 40px; }

.feature-card .card-icon {
width: 100px;
margin-inline: auto;
}

.feature-card .card-title { margin-block: 35px 15px; }

.feature-card .card-text { font-size: var(--fs-7); }


/*-----------------------------------*\
#BLOG
\*-----------------------------------*/

.blog { padding-block-end: calc(var(--section-padding) * 2); }

.blog .section-title {
text-align: center;
margin-block-end: 40px;
}

.blog-card .card-banner img { transition: var(--transition-2); }

.blog-card:is(:hover, :focus-within) .card-banner img { transform: scale(1.2); }

.blog-card .card-title {
text-align: center;
margin-block: 30px 20px;
transition: var(--transition-1);
}

.blog-card .card-title:is(:hover, :focus) { color: var(--hoockers-green); }

.blog-card .btn-link { justify-content: center; }


/*-----------------------------------*\
#MEDIA QUERIES
\*-----------------------------------*/

/**
* responsive for larger than 575px screen
*/

@media (min-width: 575px) {

/**
 * REUSED STYLE
 */

.container {
  max-width: 540px;
  width: 100%;
  margin-inline: auto;
}

:is(.header, .hero) .container { max-width: unset; }

.has-scrollbar { gap: 30px; }

.scrollbar-item { min-width: calc(50% - 15px); }





/**
* responsive for larger than 768px screen
*/

@media (min-width: 768px) {

/**
 * CUSTOM PROPERTY
 */

:root {

  /**
   * typography
   */

  --fs-1: 5.6rem;

}



/**
 * REUSED STYLE
 */

.container { max-width: 730px; }

.flex-item { max-width: calc(50% - 15px); }



/**
* responsive for larger than 992px screen
*/

@media (min-width: 992px) {

/**
 * CUSTOM PROPERTY
 */

:root {

  /**
   * spacing
   */

  --section-padding: 50px;

}



/**
 * REUSED STYLE
 */

.container { max-width: 960px; }

.scrollbar-item { min-width: calc(33.33% - 20px); }

.flex-item { max-width: calc(33.33% - 20px); }




/**
* responsive for larger than 1200px screen
*/

@media (min-width: 1200px) {

/**
 * REUSED STYLE
 */

.container { max-width: 1300px; }

.scrollbar-item { min-width: calc(20% - 24px); }

}


/**
 * FEATURE
 */

.feature .section-title { margin-block-end: 60px; }

.feature .flex-list {
  gap: 100px;
  padding-inline: 50px;
}

.feature .flex-item { max-width: calc(33.33% - 66.66px); }

</style>

@endsection
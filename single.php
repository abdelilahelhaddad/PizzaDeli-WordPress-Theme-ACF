<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package PizzaDeli
 */

get_header();
?>

<section class="home-slider owl-carousel img"
  style="background-image: url(<?php echo get_template_directory_uri().'/images/bg_1.jpg'?>);">

  <div class="slider-item" style="background-image: url(<?php echo get_template_directory_uri().'/images/bg_3.jpg'?>);">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text justify-content-center align-items-center">

        <div class="text-center col-md-7 col-sm-12 ftco-animate">
          <h1 class="mt-5 mb-3 bread">Read our Blog</h1>
        </div>

      </div>
    </div>
  </div>
</section>


<section class="ftco-section ftco-degree-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-8 ftco-animate">
        <h2 class="mb-3">10 Tips For The Traveler</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit, quisquam
          doloremque distinctio perferendis et doloribus unde architecto optio laboriosam porro adipisci sapiente
          officiis nemo accusamus ad praesentium? Esse minima nisi et. Dolore perferendis, enim praesentium omnis,
          iste doloremque quia officia optio deserunt molestiae voluptates soluta architecto tempora.</p>
        <p>
          <img src="<?php echo get_template_directory_uri().'/images/image_1.jpg'?>" alt="" class="img-fluid">
        </p>
        <p>Molestiae cupiditate inventore animi, maxime sapiente optio, illo est nemo veritatis repellat sunt
          doloribus nesciunt! Minima laborum magni reiciendis qui voluptate quisquam voluptatem soluta illo eum ullam
          incidunt rem assumenda eveniet eaque sequi deleniti tenetur dolore amet fugit perspiciatis ipsa, odit.
          Nesciunt dolor minima esse vero ut ea, repudiandae suscipit!</p>
        <h2 class="mt-5 mb-3">#2. Creative WordPress Themes</h2>
        <p>Temporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in.
          Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error dolore
          voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi repellat qui
          officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.</p>
        <p>
          <img src="<?php echo get_template_directory_uri().'/images/image_2.jpg'?>" alt="" class="img-fluid">
        </p>
        <p>Quisquam esse aliquam fuga distinctio, quidem delectus veritatis reiciendis. Nihil explicabo quod, est eos
          ipsum. Unde aut non tenetur tempore, nisi culpa voluptate maiores officiis quis vel ab consectetur suscipit
          veritatis nulla quos quia aspernatur perferendis, libero sint. Error, velit, porro. Deserunt minus,
          quibusdam iste enim veniam, modi rem maiores.</p>
        <p>Odit voluptatibus, eveniet vel nihil cum ullam dolores laborum, quo velit commodi rerum eum quidem
          pariatur! Quia fuga iste tenetur, ipsa vel nisi in dolorum consequatur, veritatis porro explicabo soluta
          commodi libero voluptatem similique id quidem? Blanditiis voluptates aperiam non magni. Reprehenderit nobis
          odit inventore, quia laboriosam harum excepturi ea.</p>
        <p>Adipisci vero culpa, eius nobis soluta. Dolore, maxime ullam ipsam quidem, dolor distinctio similique
          asperiores voluptas enim, exercitationem ratione aut adipisci modi quod quibusdam iusto, voluptates beatae
          iure nemo itaque laborum. Consequuntur et pariatur totam fuga eligendi vero dolorum provident. Voluptatibus,
          veritatis. Beatae numquam nam ab voluptatibus culpa, tenetur recusandae!</p>
        <p>Voluptas dolores dignissimos dolorum temporibus, autem aliquam ducimus at officia adipisci quasi nemo a
          perspiciatis provident magni laboriosam repudiandae iure iusto commodi debitis est blanditiis alias laborum
          sint dolore. Dolores, iure, reprehenderit. Error provident, pariatur cupiditate soluta doloremque aut
          ratione. Harum voluptates mollitia illo minus praesentium, rerum ipsa debitis, inventore?</p>
        <div class="mt-5 mb-5 tag-widget post-tag-container">
          <div class="tagcloud">
            <a href="#" class="tag-cloud-link">Life</a>
            <a href="#" class="tag-cloud-link">Sport</a>
            <a href="#" class="tag-cloud-link">Tech</a>
            <a href="#" class="tag-cloud-link">Travel</a>
          </div>
        </div>

        <div class="about-author d-flex">
          <div class="mr-5 bio align-self-md-center">
            <img src="<?php echo get_template_directory_uri().'/images/person_4.jpg'?>" alt="Image placeholder"
              class="mb-4 img-fluid">
          </div>
          <div class="desc align-self-md-center">
            <h3>Lance Smith</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus
              voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique,
              inventore eos fugit cupiditate numquam!</p>
          </div>
        </div>

      </div> <!-- .col-md-8 -->
      <div class="col-md-4 sidebar ftco-animate">
        <div class="sidebar-box">
          <form action="#" class="search-form">
            <div class="form-group">
              <div class="icon">
                <span class="icon-search"></span>
              </div>
              <input type="text" class="form-control" placeholder="Search...">
            </div>
          </form>
        </div>
        <div class="sidebar-box ftco-animate">
          <div class="categories">
            <h3>Categories</h3>
            <li><a href="#">Tour <span>(12)</span></a></li>
            <li><a href="#">Hotel <span>(22)</span></a></li>
            <li><a href="#">Coffee <span>(37)</span></a></li>
            <li><a href="#">Drinks <span>(42)</span></a></li>
            <li><a href="#">Foods <span>(14)</span></a></li>
            <li><a href="#">Travel <span>(140)</span></a></li>
          </div>
        </div>

        <div class="sidebar-box ftco-animate">
          <h3>Recent Blog</h3>
          <div class="mb-4 block-21 d-flex">
            <a class="mr-4 blog-img"
              style="background-image: url(<?php echo get_template_directory_uri().'/images/image_1.jpg'?>);"></a>
            <div class="text">
              <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a>
              </h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
              </div>
            </div>
          </div>
          <div class="mb-4 block-21 d-flex">
            <a class="mr-4 blog-img"
              style="background-image: url(<?php echo get_template_directory_uri().'/images/image_2.jpg'?>);"></a>
            <div class="text">
              <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a>
              </h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
              </div>
            </div>
          </div>
          <div class="mb-4 block-21 d-flex">
            <a class="mr-4 blog-img"
              style="background-image: url(<?php echo get_template_directory_uri().'/images/image_3.jpg'?>);"></a>
            <div class="text">
              <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a>
              </h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section> <!-- .section -->

<?php
//get_sidebar();
get_footer();
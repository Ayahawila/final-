@extends('layouts.showApp')

@section('content')

 <!-- slider section -->
 <section class=" slider_section position-relative">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="slider_item-box">
            <div class="slider_item-container">
              <div class="container">
                <div class="row">
                  <div class="col-md-5">
                    <div class="slider_img-box">
                      <div>
                        <img src="images/watch.png" alt="" class="" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="slider_item-detail">
                      <div>
                        <h1>
                          Stylish watches
                        </h1>
                        <p>
                          consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                          aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco l
                        </p>
                        <div class="d-flex">
                          <a href="{{url('/about')}}" class="slider-btn1 mr-3">
                            Read More
                          </a>
                          <a href="{{url('/contact')}}" class="slider-btn2">
                            Contact Us
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="slider_item-box">
            <div class="slider_item-container">
              <div class="container">
                <div class="row">
                  <div class="col-md-5">
                    <div class="slider_img-box">
                      <div>
                        <img src="images/watch.png" alt="" class="" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="slider_item-detail">
                      <div>
                        <h1>
                          Stylish watches
                        </h1>
                        <p>
                          consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                          aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco l
                        </p>
                        <div class="d-flex">
                          <a href="{{url('/about')}}" class="slider-btn1 mr-3">
                            Read More
                          </a>
                          <a href="{{url('/contact')}}" class="slider-btn2">
                            Contact Us
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="slider_item-box">
            <div class="slider_item-container">
              <div class="container">
                <div class="row">
                  <div class="col-md-5">
                    <div class="slider_img-box">
                      <div>
                        <img src="images/watch.png" alt="" class="" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="slider_item-detail">
                      <div>
                        <h1 class="">
                          Stylish watches
                        </h1>
                        <p>
                          consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                          aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco l
                        </p>
                        <div class="d-flex">
                          <a href="{{url('/about')}}" class="slider-btn1 mr-3">
                            Read More
                          </a>
                          <a href="{{url('/contact')}}" class="slider-btn2">
                            Contact Us
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="custom_carousel-control">
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
  <!-- end slider section -->
</div>
<div class="bg">

  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 offset-md-2">
          <div class="about_detail-box">
            <h3 class="custom_heading ">
              About our watch
            </h3>
            <p class="">
              It is a long established fact that a reader will be distracted by the readable content of a page when
              looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
              of
              letters, as opposed to using 'Content here, content here', making it
            </p>
            <div>
              <a href="{{url('/about')}}">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="about_img-box">
            <img src="images/about.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end about section -->


  <!-- why section -->
  <section class="why_section layout_padding">
    <div class="container">
      <h3 class="custom_heading">
        Why choose Us
      </h3>
      <p class="font-weight-bold">
        It is a long established fact that a reader will be distracted by the readable content of a page
      </p>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img_box">
            <img src="images/feature-1.png" alt="">
          </div>
          <div class="detail_box">
            <h5>
              Fast Delivery
            </h5>
            <p>
              variations of passages of Lorem Ipsum available, but the majority have suffered
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img_box">
            <img src="images/feature-2.png" alt="">
          </div>
          <div class="detail_box">
            <h5>
              Free Shiping
            </h5>
            <p>
              variations of passages of Lorem Ipsum available, but the majority have suffered
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img_box">
            <img src="images/feature-3.png" alt="">
          </div>
          <div class="detail_box">
            <h5>
              Best Quality
            </h5>
            <p>
              variations of passages of Lorem Ipsum available, but the majority have suffered
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img_box">
            <img src="images/feature-4.png" alt="">
          </div>
          <div class="detail_box">
            <h5>
              24x7 Customer support
            </h5>
            <p>
              variations of passages of Lorem Ipsum available, but the majority have suffered
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end why section -->
</div>

<!-- client section -->

<section class="client_section layout_padding-bottom">
  <div class="container">
    <h3 class="custom_heading">
      Testimonial
    </h3>
    <p class="font-weight-bold">
      It is a long established fact that a reader will be distracted by the readable content of a page
    </p>
  </div>
  <div class="container"></div>
  <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="detail_box">
                <div class="img_box">
                  <img src="images/client.jpg" alt="">
                </div>
                <div class="name_box">
                  <h5>
                    Sandy Den
                  </h5>
                  <h6>
                    Many Variations
                  </h6>
                </div>
              </div>
              <div class="detail_text">
                <p>
                  There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                  alteration
                  in some form, by injected humour, or randomised words which don't look even slightly believable. If
                  you
                  are going to use a passage of Lorem Ipsum, you need to beThere are many variations of passages
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="detail_box">
                <div class="img_box">
                  <img src="images/client.jpg" alt="">
                </div>
                <div class="name_box">
                  <h5>
                    Sandy Den
                  </h5>
                  <h6>
                    Many Variations
                  </h6>
                </div>
              </div>
              <div class="detail_text">
                <p>
                  There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                  alteration
                  in some form, by injected humour, or randomised words which don't look even slightly believable. If
                  you
                  are going to use a passage of Lorem Ipsum, you need to beThere are many variations of passages
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="detail_box">
                <div class="img_box">
                  <img src="images/client.jpg" alt="">
                </div>
                <div class="name_box">
                  <h5>
                    Sandy Den
                  </h5>
                  <h6>
                    Many Variations
                  </h6>
                </div>
              </div>
              <div class="detail_text">
                <p>
                  There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                  alteration
                  in some form, by injected humour, or randomised words which don't look even slightly believable. If
                  you
                  are going to use a passage of Lorem Ipsum, you need to beThere are many variations of passages
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
      <span class="sr-only">Next</span>
    </a>
  </div>

  </div>
</section>


<!-- end client section -->



<!-- info section -->
<section class="info_section layout_padding">
  <div class="container">
    <div class="info_items">
      <a href="">
        <div class="item ">
          <div class="img-box box-1">
            <img src="" alt="">
          </div>
          <div class="detail-box">
            <p>
              Lorem Ipsum is simply dummy text
            </p>
          </div>
        </div>
      </a>
      <a href="">
        <div class="item ">
          <div class="img-box box-2">
            <img src="" alt="">
          </div>
          <div class="detail-box">
            <p>
              +02 1234567890
            </p>
          </div>
        </div>
      </a>
      <a href="">
        <div class="item ">
          <div class="img-box box-3">
            <img src="" alt="">
          </div>
          <div class="detail-box">
            <p>
              demo@gmail.com
            </p>
          </div>
        </div>
      </a>
    </div>
  </div>
</section>



<!-- end info_section -->
@endsection

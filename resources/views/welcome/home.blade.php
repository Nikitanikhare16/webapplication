@extends('admin.layouts.master1')
@section('contents')
<div class="site-blocks-cover" style="background-image: url(images/hero_1.jpg);" data-aos="fade">
    <div class="container">
      <div class="row align-items-start align-items-md-center justify-content-end">
        <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
          <h1 class="mb-2">Finding Your Perfect Shoes</h1>
          <div class="intro-text text-center text-md-left">
            <p class="mb-4">We value your trust in us and strive to provide you with the best possible online shopping experience.
                Our team is committed to making your shoe shopping journey a success, and we appreciate your continued support.</p>
            <p>
              <a href="#" class="btn btn-sm btn-primary">Shop Now</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>


<div class="site-section site-section-sm site-blocks-1">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
          <div class="icon mr-4 align-self-start">
            <span class="icon-truck"></span>
          </div>
          <div class="text">
            <h2 class="text-uppercase">Free Shipping</h2>
            <p>Offering free shipping on your website can be a great way to attract customers and increase sales. It can also be a competitive advantage in a crowded e-commerce market.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
          <div class="icon mr-4 align-self-start">
            <span class="icon-refresh2"></span>
          </div>
          <div class="text">
            <h2 class="text-uppercase">Free Returns</h2>
            <p>Offering free returns on your website can make the shopping experience more convenient for customers and can also help reduce the perceived risk of purchasing a product online.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
          <div class="icon mr-4 align-self-start">
            <span class="icon-help"></span>
          </div>
          <div class="text">
            <h2 class="text-uppercase">Customer Support</h2>
            <p>Having a strong customer support system on your website can improve customer satisfaction and can also help reduce the number of returns or negative reviews.</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="site-section site-blocks-2">
    <div class="container">
      <div class="row">
         @foreach($categories as $d)

        <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
          <a class="block-2-item" href="#">
            <figure class="image">
              <img src="{{asset('uploads/'.$d->image)}}" alt="" class="img-fluid">
            </figure>
            <div class="text">
              <span class="text-uppercase">{{$d->name}}</span>
              <h3>Women</h3>
            </div>
          </a>
        </div>

         {{-- <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
          <a class="block-2-item" href="#">
            <figure class="image">
              <img src="images/children.jpg" alt="" class="img-fluid">
            </figure>
            <div class="text">
              <span class="text-uppercase">Collections</span>
              <h3>Children</h3>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
          <a class="block-2-item" href="#">
            <figure class="image">
              <img src="images/men.jpg" alt="" class="img-fluid">
            </figure>
            <div class="text">
              <span class="text-uppercase">Collections</span>
              <h3>Men</h3>
            </div>
          </a>
        </div> --}}
        @endforeach

      </div>
    </div>

  </div>

  <div class="site-section block-3 site-blocks-2 bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 site-section-heading text-center pt-4">
          <h2>Featured Products</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="nonloop-block-3 owl-carousel">
            @foreach($data as $d)
            @foreach($orders as $o)

            <div class="item">
              <div class="block-4 text-center">
                <figure class="block-4-image">
                  <img src="{{asset('uploads/'.$d->image)}}" alt="Image placeholder" class="img-fluid">
                </figure>
                <div class="block-4-text p-4">
                  <h3><a href="#">{{$d->title}}</a></h3>
                  <p class="mb-0">{!! $d->description !!}</p>
                  <p class="text-primary font-weight-bold">RS.{{$o->price}}</p>
                </div>
              </div>
            </div>
            @endforeach
            @endforeach
          </div>

        </div>

    </div>

    </div>
  </div>

  <div class="site-section block-8">
    <div class="container">
      <div class="row justify-content-center  mb-5">
        <div class="col-md-7 site-section-heading text-center pt-4">
          <h2>Big Sale!</h2>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-md-12 col-lg-7 mb-5">
          <a href="#"><img src="images/blog_1.jpg" alt="Image placeholder" class="img-fluid rounded"></a>
        </div>
        <div class="col-md-12 col-lg-5 text-center pl-md-5">
          <h2><a href="#">50% less in all items</a></h2>
          <p class="post-meta mb-4">By <a href="#">Carl Smith</a> <span class="block-8-sep">&bullet;</span> September 3, 2018</p>
          <p>A limited-time offer is any kind of discount, deal, special gift, or reward a buyer can get if they make a purchase from you during a certain time period.

          </p>
          <p><a href="#" class="btn btn-primary btn-sm">Shop Now</a></p>
        </div>
      </div>
    </div>
  </div>
    @endsection

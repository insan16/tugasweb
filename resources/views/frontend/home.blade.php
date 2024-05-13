@extends('frontend/layouts.template')

@section('content')

<section id="hero" class="d-flex align-items-center">

<div class="container">
  <div class="row">
    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
      <h1>Creating websites that make you stop & stare</h1>
      <h2>Accusantium quam, aliquam ultricies eget tempor id, aliquam eget nibh et. Maecen aliquam, risus at semper. Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum.</h2>
      <div><a href="#about" class="btn-get-started scrollto">Get Started</a></div>
    </div>
    <div class="col-lg-6 order-1 order-lg-2 hero-img">
      <img src="{{ asset('frontend/assets/img/hero-img.png')}}" class="img-fluid" alt="">
    </div>
  </div>
</div>

</section><!-- End Hero -->

<main id="main">

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="row">
      <div class="col-xl-5 col-lg-6 d-flex justify-content-center video-box align-items-stretch position-relative">
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
      </div>
      <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  @endsection
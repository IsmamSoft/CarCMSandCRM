@extends('layouts.app')

@section('style_css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <style>
@import url("https://fonts.googleapis.com/css2?family=Bona+Nova&family=Lobster+Two&family=Ubuntu+Condensed&display=swap");
:root {
  --font1:"Bona Nova";
  --font2:"Ubuntu Condensed";
  --font3:"Lobster Two";
  font-size: 1.2rem;
}

* {
  box-sizing: border-box;
}

html, body {
  background: #eee;
}

.centerize {
  display: grid;
  justify-items: center;
  min-height: calc(100vh - 128px);
}

.faq {
  padding: 3rem;
  color: #333;
}

h1 {
  font-size: 2.5rem;
  font-weight: bold;
  margin-bottom: 2rem;
  font-family: var(--font1);
}

details {
  max-width: 28rem;
}

details > summary {
  padding: 8px;
  padding-left: 2.2rem;
  border: none;
  cursor: pointer;
  list-style-position: inside;
  border-bottom: 2px solid darkblue;
  position: relative;
  display: block;
  transition: all 1s;
  font-family: var(--font1);
}

details[open] > summary {
  color: skyblue;
  background-color: darkblue;
  border-bottom: 2px solid skyblue;
}

details > p {
  padding: 8px;
  border-bottom: 2px solid skyblue;
  line-height: 2rem;
  font-family: var(--font2);
}

summary:before {
  content: "";
  border-width: 0.4rem;
  border-style: solid;
  border-color: transparent transparent transparent darkblue;
  position: absolute;
  top: 0.6rem;
  left: 1rem;
  transform: rotate(0);
  transform-origin: 0.2rem 50%;
  transition: 0.25s transform ease;
}

details summary::-webkit-details-marker {
  display: none;
}

details[open] > summary:before {
  transform: rotate(90deg);
  border-color: transparent transparent transparent skyblue;
}


  </style>
@endsection

@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container"> 
      <h1 data-aos="fade-up">Singapore’s BEST Car Selling Platform: Sell your car for the highest price in 24 hours!</h1>
      <div class="row"> 
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">   
          @if ($message = Session::get('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif      
          <form action="{{url('sell-req')}}" method="POST">
            @csrf 
            <div class="mb-3">
              <input type="text" class="form-control" name="vehicle_no" placeholder="Vehicle Plate No.">
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" name="your_name" placeholder="Your Name">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="mobile_no" placeholder="Mobile No.">
            </div>
            <button type="submit" class="btn btn-outline-primary">Submit</button>
          </form>

        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="{{ asset('public/car/main.png')}}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients clients">
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6">
            <img src="{{ asset('assets/img/clients/client-1.png')}}" class="img-fluid" alt="" data-aos="zoom-in">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="{{ asset('assets/img/clients/client-2.png')}}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="{{ asset('assets/img/clients/client-3.png')}}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="200">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="{{ asset('assets/img/clients/client-4.png')}}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="300">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="{{ asset('assets/img/clients/client-5.png')}}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="400">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="{{ asset('assets/img/clients/client-6.png')}}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="500">
          </div>

        </div>

      </div>
    </section>
    <!-- End Clients Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Why Sell Your Used Car Online With Us in Singapore?</h2>
        </div>

        <div class="row content">
          <div class="col-lg-12 text-center" data-aos="fade-up" data-aos-delay="150">
            <ul>
              <li> <b>Expert Valuation</b> 
                Get a fair valuation from our team of experts through a transparent and comprehensive price analysis</li>
              <li> <b>SE Asia's Largest Network</b> 
                Leverage on our network of over 1,000 dealers to get the best price for your car.</li>
              <li> <b>Transparency Guaranteed</b> 
                No hidden fees, no mark-ups, no guesswork. Let us help your make the entire experience easy!</li>
              <li> <b>Ownership Transfer</b> We oversee the entire LTA vehicle transfer process to prevent any hiccups.</li>
            </ul>
          </div>
          {{-- <div class="col-lg-5 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <p><b>
                We will handle all the necessary paperwork for both buyer and seller. Just send us the completed Sales & Purchase Agreement, and we’ll settle the rest. We help both parties with loans, insurance, payments and LTA ownership transfer.
            </b>
            </p>
          </div> --}}
        </div>

      </div>
    </section><!-- End About Us Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Why Should You Choose Us?</h2>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Singapore’s Most Trusted Platform</a></h4>
              <p class="description">Our 4.9/5 stars on both Facebook and Google Review can't be wrong. We also transact the most number of cars in Singapore, handling an average of 500 cases each month.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Safe and Secure</a></h4>
              <p class="description">We remain neutral to assist both parties to reach a mutually satisfactory transaction. Any disputes or disagreements will be mediated to ensure fairness and transparency.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Seamless and Convenient</a></h4>
              <p class="description">We will oversee the entire vehicle ownership transfer process from start to finish. From bank loans to paperwork settlement, we ensure a seamless transfer for both buyer and seller.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Flexible and Competitive Options</a></h4>
              <p class="description">We offer flexible and competitive loan options (bank and in-house) for your car purchase. We can even help you find a cheaper insurance policy from multiple insurers.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= F.A.Q Section ======= -->
 
    <!-- ======= F.A.Q Section ======= -->
    <section id="faq">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Frequently Asked Questions</h2>
        </div>
        <div class="centerize">
          <div class="faq">
          
            <details>
              <summary>How long do I have to wait to receive my car valuation?</summary>
              <p>Please give us 24 hours to obtain the highest and most accurate valuation for your car. If you require a quicker turnaround time, do let us know in advance. Our fastest valuation to date was completed in one hour.</p>
            </details>
            <details>
              <summary>How does You obtain my car valuation?</summary>
              <p>We obtain your car valuation through our proprietary in-house bidding system. After uploading your car details, our network of used car dealers and direct buyers will submit their best offer for your car. Once the bidding is complete, we aggregate their offers and relay the highest one to you.</p>
            </details>
            <details>
              <summary>How accurate is your car valuation?</summary>
              <p>Our car valuation takes into consideration the brand, model and registration date of the car. Other deciding factors include the mileage, previous accidents, and faulty parts. To ensure a more accurate valuation, please provide us with detailed information of your car, including its condition, to the best of your ability.</p>
            </details>
            <details>
            <summary>Will my car plate number be hidden when I upload photos of my car?</summary>
              <p>Yes, we will black out your car plate number to protect your privacy!</p>
            </details>
            <details>
            <summary>I am satisfied with my car valuation, what should I do next?</summary>
            <p>Please inform our friendly consultants that you would like to proceed with the transaction. We will lock down the price of your car and arrange for a non-obligation viewing with the buyer to verify the condition of your car.</p>
            </details>
            <details>
            <summary>The buyer offered a lower price for my car after the viewing. Can I reject his offer?</summary>
            <p>Yes. You are not obligated to accept any deductions if it does not meet your expectations. A lower offer can only be negotiated if the buyer is not aware of a certain defect or condition. If there is no resolution, we will arrange for a viewing with the buyer with the second highest offer.</p>
            </details>
            <details>
            <summary>How much do I have to pay? Are there any hidden fees involved?</summary>
            <p>Our car valuation service is and will always be 100% FREE to all our customers. Even after receiving your car valuation from us, there are no obligations to sell your car with us. However, there will be a service fee of $107 including GST if you do decide to sell your car with us. This service fee will be waived if your car has less than eight months of COE left.</p>
            </details>
            <details>
            <summary>Can I still sell my car if I have an outstanding hire purchase loan?</summary>
            <p>Yes. Our partners will work with your bank to help you clear your existing loan. If there is a surplus after clearing your loan, the balance will be paid to you during the handover.</p>
            </details>
          </div>
        </div>
      </div>
    </section><!-- End F.A.Q Section -->

    <!-- End F.A.Q Section -->

  </main><!-- End #main -->

 
@endsection

@extends('home.include.layout')
@section('slider')
<div class="hero-banner sec-mar">
    <div class="slider-wrapper"> 
        <div class="slider">
            <div class="fs_loader"></div> 
            @isset($data['slider'])
            @foreach($data['slider'] as $slide)

            <div class="slide">
                <img src="assets/images/lingerie/lingerie-slider-bg1.jpg" alt="" data-in="fade"> 
                
                <h2 class="text-uppercase wt-700" data-position="310,190" data-in="left" data-delay="300"> lingerie </h2>  

                 <h3 class="wt-600 lg text-uppercase pri-color" data-position="440,195" data-in="right" data-delay="200">Bras, Nightwear & Panties</h3>

                 <div data-position="540,195" data-in="bottom" data-delay="800">
                    <a class="btn">SHOP NOW</a>
                </div>
            </div>
            
            <!--slide 1-->

            {{-- <div class="slide">
                <img src="assets/images/lingerie/lingerie-slider-bg2.jpg" alt="" data-in="fade"> 
                
                <h2 class="text-uppercase wt-700" data-position="310,190" data-in="left" data-delay="300"> luxury </h2>  

                 <h3 class="wt-600 lg text-uppercase pri-color" data-position="440,195" data-in="right" data-delay="200">Lingerie Collection</h3>

                 <div data-position="540,195" data-in="bottom" data-delay="800">
                    <a class="btn">SHOP NOW</a>
                </div>
            </div> --}}
            <!--slide 1-->                       
        </div> 
    </div>
</div>
@endsection
<x-home-layout>


    <div class="tm-section about-us-area bg-white tm-padding-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-5">
                    <div class="tm-about-image">
                        <img class="wow fadeInLeft" src="{{ asset('volf/assets/images/left-side/left-sides.png') }}"
                             alt="deconsult image">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <div class="tm-about-content">
                        <h2>Transform Your Communication</h2>
                        <span class="divider"><i class="fa fa-superpowers"></i></span>
                        <p>Experience Crystal-Clear VoIP Solutions for a Connected Future with us.</p>
                        <ul class="stylish-list">
                            <li><i class="fa fa-check-square-o"></i> Stable Connections.</li>
                            <li><i class="fa fa-check-square-o"></i> Clean CLI Delivery.</li>
                            <li><i class="fa fa-check-square-o"></i> Fully Compliant Traffic.</li>
                            <li><i class="fa fa-check-square-o"></i> High Quality.</li>
                            <li><i class="fa fa-check-square-o"></i> Strong KPIs.</li>
                        </ul>
                        {{--                        <a href="about-us.html" class="tm-button">About Us <b></b></a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tm-section services-area bg-grey tm-padding-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10 col-12">
                    <div class="tm-section-title text-center">
                        <h2>OUR SERVICES</h2>
                        <span class="divider"><i class="fa fa-superpowers"></i></span>
                        <p>Experience Crystal-Clear VoIP Solutions for a Connected Future with us.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-30-reverse">
@foreach($services as $service)
                    <div class="col-lg-4 col-md-6 col-12 mt-30">
                        <div class="tm-service text-center wow fadeInUp">
                            <span class="tm-service-bgicon">
                                <i class="flaticon-analysis"></i>
                            </span>
                            <span class="tm-service-icon">
                                <i class="flaticon-analysis"></i>
                            </span>
                            <div class="tm-service-content">
                                <h5><a href="{{ route('service', $service) }}">{{$service->title}}</a></h5>
                                <p class="text-justify">{{ \Illuminate\Support\Str::limit($service->description,100)}}</p>
                                <a href="{{ route('service', $service) }}" class="tm-readmore">Read More</a>
                            </div>
                        </div>
                    </div>
@endforeach


            </div>
        </div>
    </div>

</x-home-layout>

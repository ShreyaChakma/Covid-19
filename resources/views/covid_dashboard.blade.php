@extends('layout.app')


@section('content')

    <nav class="navbar navbar-expand-lg  nav-custom-color">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="https://corona.gov.bd/call_center">Help-Line(BD) <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.who.int/">HealthCare</a>
            </li>
        </ul>
    </nav>


    <div class="container">

        @include('logo')

        <marquee> <img class="hotline" width="25" src="images/hotline.png"> হটলাইন-ন্যাশনাল কল সেন্টার-৩৩৩ | স্বাস্থ্য বাতায়ন-১৬২৬৩ | আইইডিসিআর-১০৬৫৫ | বিশেষজ্ঞ হেলথ লাইন-০৯৬১১৬৭৭৭৭৭ | ন্যাশনাল হেল্পলাইন-১০৯</marquee>

        <div class="row">
            <div class="col-md-4">
                <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Cases</div>
                    <div class="card-body">
                        <h5 class="card-title">{{number_format($total_cases)}}</h5>
                        <p class="card-text">Total case of affected</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-white bg-danger mb-3" style="max-width: 18rem">
                    <div class="card-header">Deaths</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ number_format($total_deaths)}}</h5>
                        <p class="card-text">Total deaths worldwide</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem">
                    <div class="card-header">Recoverd</div>
                    <div class="card-body">
                        <h5 class="card-titile">{{ number_format($total_recovered) }}</h5>
                        <p class="card-text">Total recoverd in worldwide</p>
                    </div>
                </div>
            </div>
        </div>

        @include('table')
    </div>

    <br>
    <div class="footer">
        <div class="link">
            <a href="https://github.com/ShreyaChakma" style="color:white;">Github</a> | <a href="https://www.linkedin.com/in/shreya-chakma/" style="color:white;">Linkedin</a>
        </div>
        <h5>Developed by @Shreya</h5>
    </div>

@endsection
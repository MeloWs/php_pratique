@extends('layouts.app')

@section('content')
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item text-center">
                        <h2>{{ $name }}</h2>
                        <p>Admin</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!-- ================ contact section start ================= -->
<section class="contact-section">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-12" style="text-align:center;">
                <h2 class="contact-title">Add a Trip</h2>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="{{route('voyage.store')}}" method="POST" id="contactForm" novalidate="novalidate">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="title" id="title" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter a Title'" placeholder='Enter a Title'>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="country" id="country" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter a Country'" placeholder='Enter a Country'>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control w-100" name="resume" id="resume" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter a Resume'" placeholder='Enter a Resume'></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="date" id="date" type="date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter event\'s date'" placeholder="Enter event's date">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="cost" id="cost" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter a price'" placeholder='Enter a price'>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="agency" id="agency" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter an agency'" placeholder='Enter an agency'>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm btn_1">Submit</button>
                        @csrf
                    </div>
                </form>
            </div>
        </div>
</section>
<!-- ================ contact section end ================= -->
@endsection
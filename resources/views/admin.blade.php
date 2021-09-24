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
            <h2 class="contact-title" style="text-align:center;">Gestion des Voyages</h2>
        </div>
        <div class="row justify-content-center">
            <a href="{{route('voyage.add')}}" class="btn_1 text-cnter">Ajouter un voyage</a>
        </div>
        @foreach ($voyages as $voyage)
        <div class="row">
            <p>{{$voyage->id}} -- {{$voyage->title}}</p>

        </div>
        @endforeach
    </div>
    </div>
</section>
<!-- ================ contact section end ================= -->
@endsection
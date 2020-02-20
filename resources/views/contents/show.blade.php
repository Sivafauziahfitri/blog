@extends('layouts.template')

@section('content')
    <div class="row pyt-4">
    <!--posisi img dan komen-->
        <div class="col-md-8">
        <!--posisi img pembuka-->
        <img src="{{asset('images/baby.jpg')}}" class="rounded" width="100%" height="100%" alt="">
        <!--penutup img-->
        <!--posisi title-->
        <dv class="pt-3">
        <a herf="http://">
             <!--Hastag Biru! -->
        </a>
            <h4>
                Spongebob #Squarpants
            </h4>
        </div>
        <!--Penutup title-->
        <!--Pembuka Informasi-->
        <div class="d-flex">
            <div class="mr-auto">
                <p>55,899,047 views - Jun 13, 2016</p>
            </div>
            <div class="d-flex justify-content-center">     
            <p class="mr-3">147K</p>
            <p class="mr-3">7.3k<p>
            <p class="mr-3">SHARE</P>
            <P class="mr-3">SAVE</p>
            </div>
        </div>
    </div>
    <!--Penutup Informasi-->
<!--posisi Up Next-->
     <div class="col-md-4">
     <div class="card mb-2">
     <div class="card-bod">
     <div class="d-flex">
     <div class="m-auto">
            <!--<h6 class="font-weight-bold">Up-Next</h6>
                <div class="custom-control custom-switch">
                <label for="customSwitch1" class="custom-control-label">
                Autoplay
                </label>
                <input type="checkbox" class="custom-control-input" name="" id="customSwitch1">
            </div>-->
            <div class="swtich">
                <input type="checkbox" checked>
                <span class="slider round"></span>
                <span class="absolute-no">NO</span>
            </label>
        </div>
  </div>
 </div>
</div>
</div>
@endsection
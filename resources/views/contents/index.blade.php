@extends('layouts.template')

@section('content')
<div class="pt-4">
<h4 class="font-weight-bold">
    Recommended
</h4>
<div class="row">
    <div class="col-md-3">
        <div class="card border-0 shadow">
            <div class="card-header border-0">
                <img src="{{asset('images/baby.jpg')}}" class="card-img-top" alt="">
                </div>
                <div class="card-body">
                     <div class="pt-2 d-flex">
                        <img src="{{asset('images/baby.jpg')}}" class="rounded-circle" widht="40" height="40" alt="">
                     </div>
                    <div>
                    <a href="{{route('watch.sedang-streaming')}}">

                    
                         <h3 class="font-weight-bold">sedang streaming</h3>
                         <a>

                        <h4 class="text-muted">Boruto</h4>
                        <small class="text-muted">760k wiew . i day ago.</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
        <div class="card border-0 shadow">
            <div class="card-header border-0">
                <img src="{{asset('images/patricck.jpg')}}" class="card-img-top" alt="">
                </div>
                <div class="card-body">
                     <div class="pt-2 d-flex">
                        <img src="{{asset('images/patricck.jpg')}}" class="rounded-circle" widht="40" height="40" alt="">
                     </div>
                    <div>
                    <a href="{{route('watch.sedang-streaming')}}">
                         <h3 class="font-weight-bold">sedang streaming</h3>
                         <a>

                        <h4 class="text-muted">Sipaul</h4>
                        <small class="text-muted">960k wiew . i day ago.</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
        <div class="card border-0 shadow">
            <div class="card-header border-0">
                <img src="{{asset('images/patrick.jpg')}}" class="card-img-top" alt="">
                </div>
                <div class="card-body">
                     <div class="pt-2 d-flex">
                        <img src="{{asset('images/patrick.jpg')}}" class="rounded-circle" widht="40" height="40" alt="">
                     </div>
                    <div>
                    <a href="{{route('watch.sedang-streaming')}}">
                         <h3 class="font-weight-bold">sedang streaming</h3>
                         <a>

                        <h4 class="text-muted">Falah</h4>
                        <small class="text-muted">1M wiew . i day ago.</small>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
@endsection
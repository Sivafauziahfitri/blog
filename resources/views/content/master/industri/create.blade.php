@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify content center">
        <div class="col-md-8">
        <div class="card border-0 shadow">
        <div class="card-body">
                <div class="pt-3 mb-3">
                <h5 class="text-muted font-weight-bold">
                 form Industri
                </h5>
                </div>
                <form action="{{route('master.kirim.data.baru.industri')}}" method="post">
                 @csrf
                <div class="form-group">
                  <label for="nama_Industri">
                        Nama Industri
                  </label>
                  <input type="text" 
                         name="nama_Industri" 
                         value=""
                         placeholder="nama Industri" 
                         class="form-control" 
                         id="">
                  </div>
                  <div class="form-group">
                   <label for="nama_Pimpinan">
                        Nama Pimpinan
                  <input type="text" 
                         name="nama_Pimpinan" 
                         value=""
                         placeholder="nama Pimpinan" 
                         class="form-control" 
                         id="">
                 </div>
                 <div class="form-group">
                  <label for="Alamat">
                       Alamat
                  <input type="text" 
                         name="Alamat" 
                         value=""
                         placeholder="Alamat" 
                         class="form-control" 
                         id="">
                </div>
                <div class="form-group">
                  <label for="Email">
                        Email
                  <input type="text" 
                         name="Email" 
                         value=""
                         placeholder="Email" 
                         class="form-control" 
                         id="">
                </div>
                <div class="pt-3 mb-3">
                    <button type="submit"
                            class="btn btn-outline-info">
                        Save
                         </button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
 </div>

@endsection
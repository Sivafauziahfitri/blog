@extends('layouts.app')

@section('content')
    <div class="container">
       <div class="row justify-content-center">
         <div class="col-md-10">
          <div class="card border-0 shadow">
            <div class="card body">
                <div class="pt-3 mb-3">
                    <a href="{{route('master.tampilkan.form-baru')}}" class="btn btn-outline-info">
                        Create New Industri
                    </a>
                </div>
                </div>
                <table class="table table-striped">
                 <thead>
                      <tr>
                          <th>Nama Industri</th>
                          <th>Nama Pimpinan</th>
                          <th>Alamat</th>
                          <th>Email</th>
                          <th>Action</th>
                       </tr>
                </thead>
                <tbody>
                @forelse($industris as $industri)
                <tr>
                      <td>{{$Industri->nama_Industri}}</td>
                      <td>{{$Industri->nama_Pimpinan}}</td>
                      <td>{{$Industri->alamat}}</td>
                      <td>{{$Industri->email}}</td>
                   <td>
                    <form action="{{route('master.hapus.data.industri',$industri->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                        <a href="{{route('master.edit1-industri',$industri->id)}}"class="btn btn-outline-info btn-sm">
                            Edit Data
                        </a>
                        <a herf="{{route('master.pkl')}}" class="btn btn-outline-succes btn-sm">
                                Ajukan pkl
                        </a>
                        <button type="submit" class="btn btn-outline-danger btn-sm">
                             Hapus Data
                       </button>
                    </form>
                    </td>
                </tr>

                @empty
                <tr>
                <td colspan="4">
                    data yang anda minta belum tersedia.
                </td>
                </tr>
                @endforelse
                 </tbody>
                </table>
            </div>
         </div>
    </div>
</div>
</div>

@endsection
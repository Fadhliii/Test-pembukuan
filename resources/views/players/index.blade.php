@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('players') }}</div>

              <div class="card-body">
                <h1 class="text-center">Halaman index</h1>

                <div class="container">

                    <div class="container d-flex justify-content-center">
                        <a  class="btn btn-info text-white fw-bold" href="/create">Tambah data</a>
                    </div>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">NIM</th>
                            <th scope="col">gender</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach($player as $data)
                            
                          <tr>
                            <th scope="row">  <img src="{{ asset('storage/images/Jfgy3jrwenYM8TUQe8ewUT9caxkWc7rS427dI0FL.jpg') }}" alt="">  | {{ $no++ }}</th>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->nim }}</td>
                            <td>{{ $data->gender }}</td>
                            <td>{{ $data->kelas }}</td>
                            <td>
                                
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="/{{ $data->id }}/edit" class="btn btn-warning fw-bold text-white">Edit</a>
                                    <form action="{{ $data->id }}" method="post" >
                                        @csrf
                                        @method('delete')                        
                                        <input type="submit" value="delete" class="btn btn-danger text-white fw-bold">

                                        <form>
                                  </div>

                            </td>
                    
                          </tr>
                        @endforeach
                        </tbody>
                      </table>

                </div>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection
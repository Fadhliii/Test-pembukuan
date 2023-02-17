@extends('players.layout')
@section('content')

<div class="container w-25">

<form action="/store" method="POST" enctype="multipart/form-data">
    @csrf
    {{-- nama --}}
    <div class="mb-3">
      <label>nama</label>
      <input type="text" class="form-control" name="name">
    </div>

    {{-- nim --}}
    <div class="mb-3">
        <label>nim</label>
        <input type="text" class="form-control" name="nim">
      </div>

      <div class="mb-3">
        <label>Gender</label>
        <select name="gender" class="form-control" id="">
            <option value="">Pilih Gender :</option>
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>

        </select>
      </div>

      {{-- gender--}}
      <select name="kelas" class="form-control">
        <option value="">Pilih kelas :</option>
        <option value="DPS">DPS</option>
        <option value="TANK">Tank</option>
        <option value="Mage">Mage</option>
      </select>

      {{-- image --}}
      <label>Foto</label> 
      <div class="input-group mb-3">
        <input type="file" class="form-control"  name="image" required>
      </div>

    <button type="submit" class="btn mt-4 btn-primary">Submit</button>
  </form>


</div>


@endsection
@extends('players.layout')
@section('content')

<div class="container w-25">

<form action="/{{ $player->id }}" method="POST">
    @csrf
    @method('put')
    {{-- nama --}}
    <div class="mb-3">
      <label>nama</label>
      <input type="text" class="form-control" name="name" value="{{ $player->name }}">
    </div>

    {{-- nim --}}
    <div class="mb-3">
        <label>nim</label>
      <input type="text" class="form-control" name="nim" value="{{ $player->nim }}">
      </div>

      <div class="mb-3">
        <label>Gender</label>
        <select name="gender" class="form-control" id="">
            <option value="">Pilih Gender :</option>
            <option value="Pria" @if($player->gender =="Pria") selected @endif>Pria</option>
            <option value="Wanita" @if($player->gender == "Wanita") selected @endif>Wanita</option>

        </select>
      </div>

      {{-- gender--}}
      <select name="kelas" class="form-control">
        <option value="">Pilih kelas :</option>
        <option value="DPS" @if($player->kelas =="DPS") selected @endif>DPS</option>
        <option value="TANK" @if($player->kelas =="Tank") selected @endif>Tank</option>
        <option value="Mage" @if($player->kelas =="Mage") selected @endif >Mage</option>
      </select>

    <button type="submit" class="btn mt-4 btn-primary">Submit</button>
  </form>


</div>


@endsection
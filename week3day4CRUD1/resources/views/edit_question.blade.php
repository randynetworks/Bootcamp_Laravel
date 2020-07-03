@extends('template.main')
@section('title', 'Larahub | Edit Pertanyaan')
@section('content')
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="card-deck row m-0 justify-content-center shadow">
            <div class="card-body">
                <h3>Edit Pertanyaan.</h3>

                {{-- form --}}
                <form method="POST" action="/pertanyaan/{{$question->id}}">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="judul">Judul Pertanyaan</label>
                        <input type="text" class=" @error('judul') is-invalid @enderror form-control" id="judul"
                            name="judul" value="{{$question->judul}}">
                        @error('judul')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi Pertanyaan</label>
                        <textarea type="text" class="form-control  @error('isi') is-invalid @enderror " id="isi"
                            name="isi">{{$question->isi}}</textarea>
                        @error('isi')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Edit Pertanyaan!</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

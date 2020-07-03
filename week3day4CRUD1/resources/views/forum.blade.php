@extends('template.main')
@section('title', 'Larahub Forum')
@section('content')
<div class="container">
    <div class="row justify-content-center mb-3">
        <div class="col-lg-12">
            <div class="my-3 card-deck row m-0 justify-content-center shadow">
                <div class="card-body text-center">
                    <h1 class="p-3 display-4">Larahub | Forum</h1>
                    <div class="links">
                        <a href="{{url('/')}}">Home</a>
                        <a href="{{url('/pertanyaan')}}">Forum</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
        </div>
        <div class="col-lg-8">
            <div class="card-deck row m-0 justify-content-center shadow">
                <div class="card-body">
                    <h3>Daftar Pertanyaan.</h3>
                    <hr>
                    @foreach ($questions as $question)

                    <h5>{{$question->judul}}
                        <a href="/pertanyaan/{{$question->id}}/edit" class="badge badge-pill badge-primary"><i
                                class="far fa-edit"></i></a>
                        <form action="/pertanyaan/{{$question->id}}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge badge-pill badge-danger"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </h5>

                    <p>{{$question->isi}}</p>
                    <p class="text-muted">{{$question->created_at->format('D M Y, H:i')}}</p>
                    <h6 class="text-right">- Komentar -</h6>

                    @foreach ($answers as $answer)
                    @if ($answer->id_question == $question->id)
                    <p class="text-muted text-right blockquote-footer">{{$answer->isi}} - at {{$question->created_at->format('D M Y')}}</p>
                    <a href="/jawaban/{{$answer->id}}/edit" class="badge badge-pill badge-primary"><i
                        class="far fa-edit"></i></a>
                    <form action="/jawaban/{{$answer->id}}" method="POST" class="d-inline">
                        <span>
                            @method('delete')
                            @csrf
                            <button class="badge badge-pill badge-danger text-right"><i class="far fa-trash-alt"></i></button>
                        </span>
                    </form>
                    <hr>


                    @endif
                    @endforeach

                    <div class="text-right">
                        <button class="btn btn-success btn-sm" type="button" data-toggle="collapse"
                            data-target="#collapse{{$question->id}}" aria-expanded="false"
                            aria-controls="collapse{{$question->id}}">
                            Tanggapi Pertanyaan!
                        </button>
                        </p>
                        <div class="collapse" id="collapse{{$question->id}}">

                            {{-- form --}}
                            <form method="POST" action="/jawaban">
                                @csrf
                                <div class="form-group">
                                    <label for="isi">Isi Jawaban</label>
                                    <input type="text" name="id_question" value="{{$question->id}}" hidden>
                                    <input type="text" class="form-control  @error('isi') is-invalid @enderror "
                                        id="isi" name="isi" placeholder="Masukan Jawaban kamu!">

                                    @error('isi')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror

                                </div>
                                <button type="submit" class="btn btn-primary btn-sm">Jawab Pertanyaan!</button>
                            </form>
                        </div>
                    </div>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card-deck row m-0 justify-content-center shadow">
                <div class="card-body">
                    <h3>Buat Pertanyaan.</h3>

                    {{-- form --}}
                    <form method="POST" action="/pertanyaan">
                        @csrf
                        <div class="form-group">
                            <label for="judul">Judul Pertanyaan</label>
                            <input type="text" class=" @error('judul') is-invalid @enderror form-control" id="judul"
                                name="judul" placeholder="Masukan Judul Pertanyaan" value="{{old('judul')}}">
                            @error('judul')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="isi">Isi Pertanyaan</label>
                            <textarea type="text" class="form-control  @error('isi') is-invalid @enderror " id="isi"
                                name="isi" placeholder="Masukan Pertanyaan kamu!" value="{{old('isi')}}"></textarea>
                            @error('isi')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Buat Pertanyaan!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

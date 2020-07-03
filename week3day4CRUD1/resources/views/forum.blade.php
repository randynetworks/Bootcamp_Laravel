<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title><?= $title; ?></title>
    <style>
        body {
            background: rgba(238, 238, 238, 1);
        }

        .card-deck {
            background: rgba(250, 250, 250, 1);
            border-radius: 15px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-lg-12">
                <div class="mt-3 card-deck row m-0 justify-content-center shadow">
                    <div class="card-body text-center">
                        <h1 class="p-3 display-4">Larahub | Forum</h1>
                        <div class="links">
                            <a href="{{url('/')}}">Home</a>
                            <a href="{{url('/pertanyaan')}}">Forum</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="mt-3 card-deck row m-0 justify-content-center shadow">
                    <div class="card-body">
                        <h3>Daftar Pertanyaan.</h3>
                        <hr>
                        @foreach ($questions as $question)

                        <h5>{{$question->judul}}</h5>
                        <p>{{$question->isi}}</p>
                        <p class="text-muted">{{$question->created_at->format('D M Y, H:i')}}</p>
                        <h6 class="text-right">- Komentar -</h6>
                        @foreach ($answers as $answer)
                            @if ($answer->id == $question->id)
                            <p class="text-muted text-right blockquote-footer">{{$answer->isi}}</p>
                            @endif
                        @endforeach
                        <div class="text-right">
                            <button class="btn btn-success btn-sm" type="button" data-toggle="collapse" data-target="#collapse{{$question->id}}" aria-expanded="false" aria-controls="collapse{{$question->id}}">
                                Tanggapi Pertanyaan!
                              </button>
                            </p>
                            <div class="collapse" id="collapse{{$question->id}}">
                              {{-- form --}}
                        <form method="POST" action="/jawaban">
                            @csrf
                            <div class="form-group">
                                <label for="isi">Isi Jawaban</label>
                                <input type="text" name="id" value="{{$question->id}}" hidden>
                                <input type="text" class="form-control  @error('isi') is-invalid @enderror " id="isi"
                                    name="isi" placeholder="Masukan Jawaban kamu!">
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
                <div class="mt-3 card-deck row m-0 justify-content-center shadow">
                    <div class="card-body">
                        <h3>Buat Pertanyaan.</h3>
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                        {{-- form --}}
                        <form method="POST" action="/pertanyaan">
                            @csrf
                            <div class="form-group">
                                <label for="judul">Judul Pertanyaan</label>
                                <input type="text" class=" @error('judul') is-invalid @enderror form-control" id="judul"
                                    name="judul" placeholder="Masukan Judul Pertanyaan">
                                @error('judul')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="isi">Isi Pertanyaan</label>
                                <textarea type="text" class="form-control  @error('isi') is-invalid @enderror " id="isi"
                                    name="isi" placeholder="Masukan Pertanyaan kamu!"></textarea>
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>

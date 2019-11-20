@extends('layouts.app')

@section('css')
    <style>

            
    </style>
@endsection

@section('content')


<div class="container">

<div class="row">

    <div class="col-md-6">
        <div class="card bg-transparent">
            <div class="card-body text-white rounded" style="background: #eb3a2e">

                <div class="position-relative p-3 pb-4">
                    <div class="wrapper d-flex align-items-center">
                        <div>
                            <img src="https://adminlte.io/themes/AdminLTE/dist/img/user4-128x128.jpg" class="img-fluid img-thumbnail rounded-circle">
                        </div>
                        <div class="ml-2">
                            <div class="h2">{{ $teste['nome'] }}</div>
                            <div>{{ $teste['subtitulo'] }}</div>
                            
                        </div>
                        
                        
                    </div>
                    
                </div>
                

            </div>

            
        </div>

        <div>
            @foreach ($usuarios as $u)
                
                <h3>{{ $u->nome }}</h3>
                
                    @if ($u->endereco)
                        <p>Rua: {{ $u->endereco['rua'] }}, {{ $u->endereco['numero'] }}</p>
                    @endif                
                
            @endforeach
        </div>
    </div>


    




    {{-- <div class="col-md-3">
        <div class="card ">
            <img src="https://adminlte.io/themes/AdminLTE/dist/img/user4-128x128.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div> --}}
</div>

@section('js')

<script>
    {{-- $('.collapse').collapse(); --}}
</script>
    
@endsection
</div>
@endsection

@extends('layouts.app')

@section('css')

<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }
</style>

@endsection

@section('content')


<div class="container" style="background-color: #fff;">

    <div class="row">

        <div class="col-md-12 mb-3">
                        <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalLoginForm">
                Add País
            </button>

            @if (\Session::has('success'))

                <div id="success-alert" class="alert alert-success mt-2" role="alert">
                        {!! \Session::get('success') !!}
                </div>

            @endif
                
            <!-- Modal -->
            <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">

              <form action="{{ route('salvar') }}" method="post">
                @csrf
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Adicione País</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-1">
                            {{-- <i class="fas fa-envelope prefix grey-text"></i> --}}
                            
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Nome do País</label>
                            <input type="text" name="name" id="defaultForm-email" class="form-control validate">
                        </div>

                        <div class="md-form mb-1">
                            {{-- <i class="fas fa-lock prefix grey-text"></i> --}}
                            
                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Latitude</label>
                            <input type="text" name="latitude" id="defaultForm-pass" class="form-control validate">
                        </div>

                        <div class="md-form mb-1">
                            {{-- <i class="fas fa-lock prefix grey-text"></i> --}}
                            
                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Longitude</label>
                            <input type="text" name="longitude" id="defaultForm-pass" class="form-control validate">
                        </div>

                    </div>
                    <div class="modal-footer d-flex justify-content-left">
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                    </div>
                </div>
              </form>

            </div>


        </div>

        <div class="col-md-6">
            <h1>Países:</h1>
            
            @foreach ($dados as $k => $d)
           
                <h3 class="text-success">{{ $d['name'] }}</h3>
                @if($d['locais'])
                    <ul class="text-danger">
                        <li>Latitude: {{ $d['locais']['latitude'] }}</li>
                        <li>Longitude: {{ $d['locais']['longitude'] }}</li>
                        
                    </ul>
                @endif
                
                <hr>
         
            @endforeach
               
        </div>
        <div class="col-md-6">
                <h1>Latitude:</h1>
                
                @isset($latitude)
                    @foreach ($latitude as $l)

                    <ul class="text-danger">
                        <li>Latitude: {{ $l['latitude'] }}</li>
                        <li>Longitude: {{ $l['longitude'] }}</li>
                        
                    </ul>
                    <h3 class="text-success">{{ $l['pais']['name'] }}</h3>
                    <hr>
                
                    @endforeach
                @endisset
               
                   
            </div>

    </div>

</div>

@endsection

@section('js')
<script>
    $(document).ready(function() {
        $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
            $("#success-alert").slideUp(500);
        });
    });
</script>
    
@endsection
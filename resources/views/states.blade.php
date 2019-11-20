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
                Add Estado
            </button>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDate">
                Add Data
            </button>

            @if (\Session::has('errors'))

                <div id="success-alert" class="alert alert-success mt-2" role="alert">
                        {!! \Session::get('errors') !!}
                </div>

            @endif
            @if (\Session::has('success'))

                <div id="success-alert" class="alert alert-success mt-2" role="alert">
                        {!! \Session::get('success') !!}
                </div>

            @endif
                
            
        </div>

        <div class="col-md-6">
            <h1>Estados:</h1>
            
            @foreach ($dados as $k => $d)
           
                <h3 class="text-success">{{ $d['name'] }}</h3>
                
                
                <hr>
         
            @endforeach
               
        </div>


    </div>

</div>








<!-- Modal -->
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">

  <form action="{{ route('store.states') }}" method="post">
    @csrf
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Adicione Estados</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body mx-3">
            <div class="md-form mb-1">
                {{-- <i class="fas fa-envelope prefix grey-text"></i> --}}
                
                <label data-error="wrong" data-success="right" for="defaultForm-email">Nome do Estado</label>
                <input type="text" name="name" id="defaultForm-email" class="form-control validate">
            </div>

            <div class="md-form mb-1">                            
                <label for="exampleFormControlSelect1">Países</label>
                <select class="form-control" name="countries_id" id="exampleFormControlSelect1">

                    @foreach ($pais as $p)
                        <option value="{{ $p['id'] }}">{{ $p['name'] }}</option>
                    @endforeach
                </select>
            </div>


        </div>
        <div class="modal-footer d-flex justify-content-left">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
        </div>
    </div>
  </form>

</div>

<!-- Modal 2 -->
<div class="modal fade" id="modalDate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">

  <form action="{{ route('store.states') }}" method="post">
    @csrf
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Adicione uma data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body mx-3">
            <div class="md-form mb-1">
                {{-- <i class="fas fa-envelope prefix grey-text"></i> --}}
                
                <label data-error="wrong" data-success="right" for="defaultForm-email">Data:</label>
                <div class="input-group date" id="datetime">
                    <input type="text" class="form-control"><i class="fas fa-calendar-alt"></i>
                    <div class="input-group-prepend">
                            <span class="input-group-text" id="validationTooltipUsernamePrepend"><i class="fas fa-calendar-alt">@</i></span>
                    </div>
                </div>
                <i class="fas fa-calendar-alt"></i>
            </div>
            


        </div>
        <div class="modal-footer d-flex justify-content-left">
            <button type="submit" class="btn btn-success"><i class="fas fa-calendar-alt"></i>Salvar</button>
        </div>
        </div>
    </div>
  </form>

</div>


@endsection

@section('js')
<script>
    $(document).ready(function() {
        $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
            $("#success-alert").slideUp(500);
        });
        
        $('#datetime').datepicker({
            format: 'mm/dd/yyyy',
            language: 'pt-BR',
            startDate: '-2y'
        });
        
    });
</script>
    
@endsection
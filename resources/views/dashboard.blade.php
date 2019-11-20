@extends('layouts.app')

@section('css')
    <style>

            
    </style>
@endsection

@section('content')


<div class="container">

<div class="row">

    {{-- Primeira coluna --}}
    <div class="col-md-3">
        <div class="card bg-transparent">
            <div class="card-body text-white rounded" style="background: #eb3a2e">

                <div class="position-relative p-3 pb-4">
                    <div class="wrapper d-flex align-items-center">
                        <div>
                            {{-- <img src="https://adminlte.io/themes/AdminLTE/dist/img/user4-128x128.jpg" class="img-fluid img-thumbnail rounded-circle"> --}}
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

    {{-- Segunda coluna --}}
    <div class="col-md-6">
        <div class="row">
            
            <div class="col-6 rounded shadow p-0">
                <div class="row">
                    <div class="col-12">
                        <button type="button" value="/check//" class="close pull-right px-2 text-dark">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="col-12">
                        <div id="container" style="min-width: 250px; height: 300px; margin: 0 auto" class=""></div>
                    </div>
                </div>
            </div>
                
        </div>
            


    </div>

    {{-- Terceira coluna --}}
    <div class="col-md-3">
        {{-- Mini-card 1 --}}
        @foreach ($cards as $k => $c)

            <div class="row info-box bg-{{ $c['bg_color']}} rounded border p-0 text-white esconder">                    
                <div class="col-3 d-flex justify-content-center" style="background: rgba(0,0,0,.1)">
                    <span class="info-box-icon my-auto text-white"><i class="{{ $c['icon']}}"></i></span>
                </div>
    
                <div class="col-9 p-0">
                    <button type="button" value="/check/{{ $id }}/{{ $k }}" class="close pull-right px-2 text-white">
                        <span aria-hidden="true">&times;</span>
                    </button>

                    <div class="p-2">
                        <h5 class="">{{ $c['titulo']}}</h5>
                        <span class="info-box-number"><strong>{{ $c['valor']}}</strong></span>
        
                        <div class="progress text-secondary"  style="height: 3px;">
                            <div class="progress-bar" style="width: 40%"></div>
                        </div>
                        <span class="progress-description">
                                {{ $c['info']}}
                        </span>
                    </div>
                </div>
            </div>

        @endforeach
        

        {{-- Mini-card 2 --}}


    </div>




</div>

@section('js')

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<script>
    {{-- $('.collapse').collapse(); --}}

    $(document).ready(function(){
        $(".close").click(function(){
            url = $(this).val();
            $(this).parent().parent().hide();
            $(this).load(url);
        });

        Highcharts.chart('container', {
            chart: {
                type: 'area'
            },
            title: {
                text: 'Fruit consumption *'
            },
            subtitle: {
                text: '* Jane\'s banana consumption is unknown',
                align: 'right',
                verticalAlign: 'bottom'
            },
            legend: {
                layout: 'vertical',
                align: 'left',
                verticalAlign: 'top',
                x: 100,
                y: 70,
                floating: true,
                borderWidth: 1,
                backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF'
            },
            xAxis: {
                categories: ['Apples', 'Pears', 'Oranges', 'Bananas', 'Grapes', 'Plums', 'Strawberries', 'Raspberries']
            },
            yAxis: {
                title: {
                text: 'Y-Axis'
                }
            },
            plotOptions: {
                area: {
                fillOpacity: 0.5
                }
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'John',
                data: [0, 1, 4, 4, 5, 2, 3, 7]
            }, {
                name: 'Jane',
                data: [1, 0, 3, null, 3, 1, 2, 1]
            }]
        });


    });
        

    


</script>
    
@endsection
</div>
@endsection

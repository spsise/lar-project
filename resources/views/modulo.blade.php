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
        @php($array = [
            'link' => [
                'title'=>'Título',
                'route'=>'rota',
                'text'=>'Este é um texto',
                'id'=>'1'
                ],
            'link1' => [
                'title'=>'Título 2',
                'route'=>'rota2',
                'text'=>'Este é um texto2',
                'id'=>'2'
                ],

        ])

        @forelse ($array as $item)
            @include('componentes.modulo', $item)
        @empty
            <p>No replies</p>
        @endforelse

        
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

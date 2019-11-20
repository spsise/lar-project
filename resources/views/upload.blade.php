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

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
@endsection

@section('content')

    <div class="container mt-3">

        
        <div class="input-group mb-3">
            <h5>Faça o upload de seu arquivo</h5>
        </div>



        <a  id="button" href="#" class="btn btn-info btn-sm remove">
            <span class="glyphicon glyphicon-upload"></span> Upload File
        </a>

        <input type="file" id="file" style="display:none" />



        


    </div>

@endsection
            
@section('js')

<script>

$(document).ready(function() {

    $('#file-upload').file_upload();

});

</script>     
    
@endsection



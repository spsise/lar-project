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
    <form action="" method="post" id="formulario">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" aria-describedby="nome" placeholder="Nome">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="senha" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword2">Confirmar Password</label>
            <input type="password" class="form-control"  name="confirma" id="exampleInputPassword2" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>

@endsection

@section('js')

<script>

$(document).ready(function() {
    let $mudou = true;

    $('form').on('change paste', 'input, select, textarea', function(){
        $mudou=false;
    });

// $("#formulario").validate({
//     rules: {
//         nome: {
//             required: function(element) {
//                 if ($mudou) {
//                     return true;
//                 } else {
//                     return false;
//                 }

//             },
//         }
//     }
// });

});
            
</script>

@endsection


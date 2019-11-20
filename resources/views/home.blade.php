@extends('layouts.app')

@section('css')
    <style>
        .profile-user-img {
            margin: 0 auto;
            width: 100px;
            padding: 3px;
            border: 3px solid #d2d6de;
        }
        
        .img-circle {
            border-radius: 50%;
        }
        /* .box.box-primary {
            border-top-color: #000000;
        } */

        .box {
            position: relative;
            border-radius: 3px;
            background: #ffffff;
            border-top: 3px solid #d2d6de;
            margin-bottom: 20px;
            width: 100%;
            box-shadow: 2 1px 3px rgba(0,0,0,0.8);
        }
            
    </style>
@endsection

@section('content')


<div class="container">

<div class="row">

    <div class="col-md-6">
        <div class="card bg-transparent{{-- border-0 bg-transparent --}}">
            <div class="card-body text-white rounded" style="background: #eb3a2e">
                <div class="position-relative p-3 pb-4">
                    <div class="wrapper d-flex align-items-center">
                        <div>
                            <img src="https://adminlte.io/themes/AdminLTE/dist/img/user4-128x128.jpg" class="img-fluid img-thumbnail rounded-circle">
                        </div>
                        <div class="ml-2">
                            <div class="h2">FrontEnd</div>
                            <div>I'm a web developer</div>
                            
                        </div>
                        
                    </div>
                    <button class="btn btn-warning position-absolute rounded-pill" type="button" style="left: 50%;" data-toggle="collapse" data-target="#contactInfo">
                        <span class="infoText">Contact Me</span>
                        <span class="infoIcon">
                            <i class="fa fa-chevron-up"></i>
                        </span>
                    </button>
                    
                </div>

                <div class="collapse rounded" id="contactInfo">
                    <div class="p-3 bg-dark text-uppercase rounded" style="background: #df0d22">
                        contact me
                    </div>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#" class="d-flex bg-white p-2 card-link align-items-center mt-2 rounded">
                                <span class="border rounded-circle text-white" style="background-color: #0000f0; padding: 4px 11px 4px 11px;">
                                    <i class="fa fa-facebook"></i>
                                </span>
                                <span class="ml-2 text-dark">Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="d-flex bg-white p-2 card-link align-items-center mt-2 rounded">
                                <span class="rounded-circle text-white" style="background-color: #0080ff; padding: 4px 9px 4px 9px;">
                                    <i class="fa fa-twitter"></i>
                                </span>
                                <span class="ml-2 text-dark">Twitter</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="d-flex bg-white p-2 card-link align-items-center mt-2 rounded">
                                <span class="rounded-circle text-white" style="background-color: #cb2ebb; padding: 4px 9px 4px 9px;">
                                    <i class="fa fa-instagram"></i>
                                </span>
                                <span class="ml-2 text-dark">Instagram</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            
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


</div>
@endsection

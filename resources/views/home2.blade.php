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
    {{-- <div class="col-md-3">

        <!-- Profile Image -->
        <div class="box box-primary shadow">

            <div class="box-body box-profile p-2">
                <div class="text-center mb-2">
                    <img class="img-fluid img-thumbnail rounded-circle" style="width: 100px" src="https://adminlte.io/themes/AdminLTE/dist/img/user4-128x128.jpg" alt="User profile picture">
                </div>
                <h3 class="text-center">Nina Mcintire</h3>

                <p class="text-center">Software Engineer</p>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <b>Followers</b> <a class="pull-right">1,322</a>
                        <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <b>Following</b> <a class="pull-right">543</a>
                        <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <b>Friends</b> <a class="pull-right">13,287</a>
                        <span class="badge badge-success b4 badge-pill">14</span>
                    </li>
                    
                </ul>
                <div class="mt-2">
                    <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapsing" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Collapsible Group Item #1
                          </button>
                        </h2>
                      </div>
                  
                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapsing" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Collapsible Group Item #2
                          </button>
                        </h2>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapsing" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Collapsible Group Item #3
                          </button>
                        </h2>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <!-- /.box-body -->
        </div>

        <div class="card">
            <div class="card-header">
                Header
            </div>
            <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
            </div>
            <div class="card-footer text-muted">
                Footer
            </div>
        </div>
        <!-- /.box -->

        <!-- About Me Box -->
        {{-- <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

            <p class="text-muted">
                B.S. in Computer Science from the University of Tennessee at Knoxville
            </p>

            <hr>

            <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

            <p class="text-muted">Malibu, California</p>

            <hr>

            <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

            <p>
                <span class="label label-danger">UI Design</span>
                <span class="label label-success">Coding</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">Node.js</span>
            </p>

            <hr>

            <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
            <!-- /.box-body -->
        </div> --}}
            <!-- /.box -->
    </div> --}}

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
                    <div class="p-3 bg-dark text-uppercase rounded">
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

    <button data-toggle="collapse" data-target="#demo">Collapsible</button>

    <div id="demo" class="collapse text-white">
        Lorem ipsum dolor text....
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
    $('.collapse').collapse();
</script>
    
@endsection
</div>
@endsection

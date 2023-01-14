<!--inicia plantilla limpia-->
@extends('layouts.master3')
@section('titulo','')
@section('contenido')
<div id="apiHome">
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
      <input type="text" placeholder="Escriba el nombre del producto" class="form-control" v-model="buscar">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
            <li class="nav-item">
                <a href="pages/examples/login.html" class="nav-link">
                  <p>REGISTRAR                                    /</p>
                </a>
            </li>
      <!-- Notifications Dropdown Menu -->
        <li class="nav-item">
                <a href="pages/examples/login.html" class="nav-link">
                  <p>ACCEDER</p>
                </a>
        </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>




<section class="content" >
        <div class="container-fluid">
            <!-- Info boxes -->
            <!--inicio de row-->
            <div class="row">


                                
            </div>
                            <!-- /.row -->
        </div><!--/. container-fluid -->
      <!--/. container-fluid -->
</section>
                        

</div><!--Fin de vue-->
	
	
@endsection

@push('scripts')
	<script type="text/javascript" src="melody/js/vue-resource.js"></script>
@endpush

<input type="hidden" name="route" value="{{url('/')}}">
<!--termina plantilla limplia-->
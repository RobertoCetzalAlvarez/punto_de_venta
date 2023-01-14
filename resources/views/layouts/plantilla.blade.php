<!--inicia plantilla limpia-->
@extends('layouts.master')
@section('titulo','')
@section('contenido')
	
	
@endsection

@push('scripts')
	<script type="text/javascript" src="melody/js/vue-resource.js"></script>
@endpush

<input type="hidden" name="route" value="{{url('/')}}">
<!--termina plantilla limplia-->

@extends('layouts.master')
@section('titulo','CRUD PRODUCTOS')
@section('contenido')
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script type="text/javascript" src="js/vue.js"></script>





<!-- PLANTILLA MODAL LIMPIO -->
<!--EL id es el nombre con el que se va a hablar la ventana modal-->
<div class="modal fade" id="modalCobro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form>
        	<!--AQUI VA EL CONTENIDO-->

        	
        	<!--AQUI TERMINA EL CONTENIDO-->
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" @click="vender()">Guardar</button>
      </div>
    </div>
  </div>
</div>
<!-- aqui termina el modal-->


	
	
@endsection


@push('scripts')
	<script type="text/javascript" src="js/vue-resource.js"></script>
	<script type="text/javascript" src="js/apis/apiProducto.js"></script>
	<canvas id="myChart"></canvas>
<script type="text/javascript" src="js/vue-resource.js"></script>
<script type="text/javascript" src="js/chart.min.js"></script>
<script type="text/javascript" src="js/grafvue.js"></script>
@endpush

<input type="hidden" name="route" value="{{url('/')}}">


<!--inicia plantilla limpia-->
@extends('layouts.master')
@section('titulo','')
@section('contenido')
	
	
@endsection

@push('scripts')
	<script type="text/javascript" src="melody/js/vue-resource.js"></script>
@endpush

<input type="hidden" name="route" value="{{url('/')}}">
<!--termina plantilla limplia-->







<!--inicia plantilla e comerce-->

@extends('layouts.master3')
@section('titulo','STOCK PRODUCTOS')
@section('Navbar')

<link rel="stylesheet" href="styles.css" />
  @endsection


  @section('contenido') 
	
	<!-- INICIA VUE -->
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


<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <!--inicio de row-->
        <div class="row">

          <div class="col-12 col-sm-6 col-md-3" >
            <div class="info-box" Hidden="">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">CPU Traffic</span>
                <span class="info-box-number">
                  10
                  <small>%</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <div class="col-12 col-sm-6 col-md-3" >
            <div class="info-box" Hidden="">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">CPU Traffic</span>
                <span class="info-box-number">
                  10
                  <small>%</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3" Hidden="">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Likes</span>
                <span class="info-box-number">41,410</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3" hidden="">
                <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Sales</span>
                    <span class="info-box-number">760</span>
                </div>
                <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3" >
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">New Members</span>
                <span class="info-box-number">2,000</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->


		<!--<div class="row">
			<div class="col-xl-12">
			<div class="col-md-12">
				<div class="card card-warning"> 

					<div class="card-body">
						
							<!-- INICIO DE LA TABLA --
				<table class="table table-bordered table-striped" >
					<thead>
						<th hidden="">ID SKU</th>
						<th style="background: #FFFF00">NOMBRE</th>
						<!--<th style="background: #FFFF00" hidden="">FOTOGRAFIA</th>
						<th style="background: #FFFF00">PRECIO</th>
						<th style="background: #FFFF00">CANTIDAD</th>
						<th style="background: #FFFF00">TIPO</th>
						<th style="background: #FFFF00">ACCIONES</th>--

					</thead>

					<tbody >
						<tr v-for="producto in filtroProducto">
                            <td>
                                <div class="item">
                                    <figure>
                                        <img
                                            src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                                            alt="producto"
                                            width="100" height="100"
                                        />
                                    </figure>
                                    <div class="info-product">
                                        <h2>@{{producto.nombre}}</h2>
                                        <p class="price">@{{producto.precio}}</p>
                                        <button>Añadir al carrito</button>
                                    </div>
                                </div>
                            </td>

							<!--<td hidden="">@{{producto.sku}}</td>
							<td></td>
							<td hidden="">@{{producto.foto}}</td>
							<td></td>
							<td>@{{producto.cantidad}}</td>
							<td>@{{producto.tipo.tipo}}</td>
							<td>
								<button class="btn btn-sm" @click="editandoProducto(producto.sku)">
									<i class="fas fa-pen"></i>
								</button>

								<button class="btn btn-sm" @click="eliminarProducto(producto.sku)">
									<i class="fas fa-trash"></i>
								</button>
							</td>--
						</tr>
					</tbody>
				</table>
				<!-- FIN DE LA TABLA --

					</div>
				
					
				</div>
			</div>  
			<!-- FIN DE COL-MD-12 --
				
			</div>
			
		</div><!--fin de row--
-->



    <section class="content" >
      <div class="container-fluid">
        <!-- Info boxes -->
        <!--inicio de row-->
        <div class="row">

          <div class="col-12 col-sm-6 col-md-3" v-for="producto in filtroProducto">
            <div class="info-box" >
              <div class="info-box-content">
                                          <td>
                                <div class="item">
                                    <figure>
                                        <img v-bind:src=producto.foto width="100" height="100">
                                    </figure>
                                    <div class="info-product">
                                        <h2>@{{producto.nombre}}</h2>
                                        <p class="price">@{{producto.precio}}</p>
                                        <button>Añadir al carrito</button>
                                    </div>
                                </div>
                            </td>
               
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->

        <!-- /.row -->
      </div><!--/. container-fluid -->
      <!--/. container-fluid -->
    </section>




	</div>
	<!-- TERMINA VUE -->
    

	
@endsection

@push('scripts')
	<script type="text/javascript" src="melody/js/vue-resource.js"></script>
	<script type="text/javascript" src="js/apis/apiHome.js"></script>
    
@endpush

<input type="hidden" name="route" value="{{url('/')}}">






<!--codigo de recuperacion-->
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


<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <!--inicio de row-->
        <div class="row">

          <div class="col-12 col-sm-6 col-md-3" >
            <div class="info-box" Hidden="">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">CPU Traffic</span>
                <span class="info-box-number">
                  10
                  <small>%</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <div class="col-12 col-sm-6 col-md-3" >
            <div class="info-box" Hidden="">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">CPU Traffic</span>
                <span class="info-box-number">
                  10
                  <small>%</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3" Hidden="">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Likes</span>
                <span class="info-box-number">41,410</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3" hidden="">
                <div class="info-box mb-3">
                    <button>
                        
                    </button>
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Sales</span>
                    <span class="info-box-number">760</span>
                </div>
                <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3" >
                <button class="info-box-icon bg-success elevation-1" @click="mostrarModal()" type="button">
                    <i class="fas fa-shopping-cart"></i>
                </button>
                <div class="info-box-content">
                    <span class="info-box-text" >Carrito</span>
                    <span class="info-box-number"><b>@{{comisionTotal}}</b></span>
                </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
</section>

<section class="content" >
        <div class="container-fluid">
            <!-- Info boxes -->
            <!--inicio de row-->
            <div class="row">

                <div class="col-12 col-sm-6 col-md-3" v-for="(producto,index) in filtroProducto">
                    <div class="info-box" >
                        <div class="info-box-content">
                            
                            <div class="item">
                                <td>
                                    <figure>
                                        <img v-bind:src=producto.foto width="100" height="100">
                                    </figure>
                                    <div class="info-product">
                                        <h2>@{{producto.nombre}}</h2>
                                        <p class="price">$@{{producto.precio}}</p>
                                        
                                        <td>
                                            <span class="btn btn-sm btn-primary"
                                             @click="aniadirProducto(producto.sku)">
                                                <i class="fas fa-plus"></i>
                                                <h6>Añadir al Carrito</h6>
                                            </span>
                                        </td>
                                    </div>
                                </td>
                        
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>

                
                    <!-- /.info-box -->
                </div>
            <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Main row -->

            <!-- /.row -->
        </div><!--/. container-fluid -->
      <!--/. container-fluid -->
    </section>
<!-- PLANTILLA MODAL LIMPIO -->
<!--EL id es el nombre con el que se va a hablar la ventana modal-->
<div class="modal fade" id="modalCarrito" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Carrito</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form>
        	<!--AQUI VA EL CONTENIDO-->
          <tr v-for="(venta,index) in ventas">
								<td>@{{venta.sku}}</td>
								<td>@{{venta.nombre}}</td>

								<td>
									<button class="btn btn-default btn-sm" >
										<i class="fas fa-trash" @click="eliminarProducto(index)"></i>
									</button>
								</td>
								<td >@{{venta.precio}}</td>
								<td><input type="number" v-model.number="cantidades[index]" min="1"></td>

								</tr>
						</tbody>

        	<!--AQUI TERMINA EL CONTENIDO-->
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" @click="vender()">Guardar</button>
      </div>
    </div>
  </div>
</div>
<!-- aqui termina el modal-->

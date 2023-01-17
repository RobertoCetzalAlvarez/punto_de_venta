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




<!--INICIO DE LA TABLA-->
<div class="main-body">
				<div class="col-xl-12" >
				<div class="col-md-12" align="left">
					<div class="card card-warning"> 
						<div class="card-header">
							<h3>STOCK DE PRODUCTOS</h3>
								<li class="nav-item d-none d-lg-flex">
									
									<span class="btn btn-primary" @click="mostrarModal()">+ Crear nuevo</span>
									<button class="btn btn-success" @click="MostrarModalProducto()" type="button" >productos por agotarse</button>
									<button class="btn btn-info" @click="MostrarModalTipo()" type="button" >añadir tipos</button>
								</li>
							<div class="col-md-6">
							<input type="text" placeholder="Escriba el nombre del producto" class="form-control" v-model="buscar">
							</div>
						</div>

						<div class="card-body">
							
								<!-- INICIO DE LA TABLA -->
					<table class="table table-bordered table-striped" >
						<thead>
							<th hidden="">ID SKU</th>
							<th style="background: #FFFF00">NOMBRE</th>
							<th style="background: #FFFF00" hidden="">FOTOGRAFIA</th>
							<th style="background: #FFFF00">PRECIO</th>
							<th style="background: #FFFF00">CANTIDAD</th>
							<th style="background: #FFFF00">TIPO</th>
							<th style="background: #FFFF00">ACCIONES</th>

						</thead>

						<tbody >
							<tr v-for="producto in filtroProducto">
								<td hidden="">@{{producto.sku}}</td>
								<td>@{{producto.nombre}}</td>
								<!--<td><img v-bind:src=producto.foto width="50" height="60"></td>-->
								<!--<td ><img href="prods/@{{producto.foto}}" alt=""></td>-->
								<td>@{{producto.precio}}</td>
								<td>@{{producto.cantidad}}</td>
								<td>@{{producto.tipo.tipo}}</td>
								<td>
									<button class="btn btn-sm" @click="editandoProducto(producto.sku)">
										<i class="fas fa-pen"></i>
									</button>

									<button class="btn btn-sm" @click="eliminarProducto(producto.sku)">
										<i class="fas fa-trash"></i>
									</button>
								</td>
							</tr>
						</tbody>
					</table>
					<!-- FIN DE LA TABLA -->

						</div>
					
						
					</div>
				</div>  
				<!-- FIN DE COL-MD-12 -->
					
				</div>
				
			</div><!--fin de row-->
			<!--fin del cuadro de la tabla-->
                        

</div><!--Fin de vue-->
	
	
@endsection

@push('scripts')
	<script type="text/javascript" src="melody/js/vue-resource.js"></script>
@endpush

<input type="hidden" name="route" value="{{url('/')}}">
<!--termina plantilla limplia-->
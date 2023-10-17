@extends('layouts.app')

@section('template_title')
    Product
@endsection

@section('content')
<?php
$i=0;
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex¿; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('product/create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar producto') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Id</th>

										<th>Nombre</th>
										<th>Descripción</th>
										<th>Precio</th>
										<th>Talla</th>
										<th>Color</th>
										<th>Disponibilidad</th>
										<th>Cantidad</th>
										<th>Muestra</th>
										<th>Estado</th>
										<th>Emprendedor</th>
										<th>Sector</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $product->name }}</td>
											<td>{{ $product->description }}</td>
											<td>{{ $product->price }}</td>
											<td>{{ $product->size }}</td>
											<td>{{ $product->color }}</td>
											<td>{{ $product->avilable }}</td>
											<td>{{ $product->ammount }}</td>
											<td>{{ $product->photo }}</td>
											<td>{{ $product->status }}</td>
											<td>{{ $product->id_user }}</td>
											<td>{{ $product->id_sector }}</td>

                                            <td>
                                                <form action="{{ route('product.destroy',$product->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route ('product.show', $product->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Detalles') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('product.edit', $product->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Modificar') }}</a>
                                                    @csrf

                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm bg-pink-700"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar producto') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

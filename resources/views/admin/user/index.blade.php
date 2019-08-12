@extends('admin.layout.index')

@section('title')
    Gestión de Usuarios
@endsection

@section('title.section')
    Gestión de Usuarios
@endsection

@section('content')
    <div class="col-md-12">
        <div style="padding: 10px 0px">
            <a href="{{ route('user.create') }}" class="btn btn-wd btn-fill btn-primary">
                <span class="btn-label">
                    <i class="fa fa-plus"></i>
                </span>
                Agregar
            </a>
        </div>
        @include('flash::message')
        <div class="card">

            <div class="header">
                <h4 class="title">Lista de Usuarios</h4>
                {{-- <p class="category">With some subtitle</p> --}}
            </div>

            <div class="content table-full-width">
                {!! Form::open([
                            'method' => 'GET',
                            'class' => 'form-inline',
                            'id' => 'frmSearch'
                            ]) !!}
                <div class="col-lg-6">
                    <div class="pagination">
                        <label>Mostrar:</label>
                        {!! Form::select('pager',
                            [
                                10 => '10',
                                20 => '20',
                                25 => '25',
                                50 => '50',
                                100 => '100'
                            ],$pager,
                            [
                                'class'=>'form-control input-sm input-inline select-pager',
                                'id'=>'pag'
                            ]) !!}
                    </div>
                </div>
                <div class="col-lg-6 text-right" style="margin: 20px 0;">
                    <div class="form-group">
                        <input type="text" value="{{ $search }}" class="form-control" name="search">
                    </div>
                    {{-- <button class="btn btn-primary">Buscar</button> --}}
                </div>
                {!! Form::close() !!}
                <table class="table table-striped dataTable table-model">
                    <thead>
                    <tr>
                        @if($column == 'column-1')
                            <th class="sorting_{{$order}}">
                                <a href="{{ route('user.order',['column-1',$order,'pager'=>$pager,'search' => $search]) }}">
                                    Nombres
                                </a>
                            </th>
                        @else
                            <th class="sorting">
                                <a href="{{ route('user.order',['column-1','asc','pager'=>$pager,'search' => $search]) }}">
                                    Nombres
                                </a>
                            </th>
                        @endif
                        @if($column == 'column-2')
                            <th class="sorting_{{$order}}">
                                <a href="{{ route('user.order',['column-2',$order,'pager'=>$pager,'search' => $search]) }}">
                                    Tipo de Documento
                                </a>
                            </th>
                        @else
                            <th class="sorting">
                                <a href="{{ route('user.order',['column-2','asc','pager'=>$pager,'search' => $search]) }}">
                                    Tipo de Documento
                                </a>
                            </th>
                        @endif
                        @if($column == 'column-3')
                            <th class="sorting_{{$order}}">
                                <a href="{{ route('user.order',['column-3',$order,'pager'=>$pager,'search' => $search]) }}">
                                    Número de Documento
                                </a>
                            </th>
                        @else
                            <th class="sorting">
                                <a href="{{ route('user.order',['column-3','asc','pager'=>$pager,'search' => $search]) }}">
                                    Número de Documento
                                </a>
                            </th>
                        @endif
                        <th>Estado</th>
                        <th class="text-right">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($models))
                        @foreach($models as $model)
                            <tr>
                                <td>{{ $model->nombres }} {{ $model->apellidos }}</td>
                                <td>{{ $model->tipo_documento }}</td>
                                <td>{{ $model->numero_documento }}</td>
                                <td>
                                    @if($model->estado == 'activo')
                                        <a href="{{ route('user.state',$model->id) }}"
                                           class="btn btn-success btn-sm btn-fill">Activo</a>
                                    @else
                                        <a href="{{ route('user.state',$model->id) }}"
                                           class="btn btn-danger btn-sm btn-fill">Inactivo</a>
                                    @endif
                                </td>
                                <td class="td-actions text-right">
                                    {{-- <a href="#" rel="tooltip" title="Ver Perfil" class="btn btn-info btn-simple btn-xs">
                                        <i class="ti-user"></i>
                                    </a> --}}
                                    <a href="{{ route('user.edit',$model->id) }}" rel="tooltip" title="Editar"
                                       class="btn btn-success btn-simple btn-xs">
                                        <i class="ti-pencil-alt"></i>
                                    </a>
                                    {{-- <a href="#" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                                        <i class="ti-close"></i>
                                    </a> --}}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="text-center">
                            <td colspan="6">No hay Registros</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
                @if(count($models))
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-md-5 col-sm-5">
                                <div class="pagination">
                                    <label>
                                        {{ $models->firstItem() }} - {{ $models->lastItem() }} de {{ $models->total() }}
                                        registros
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-7 text-right">
                                {!! $models->appends($request)->render() !!}
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        app.init();
    </script>
@endsection
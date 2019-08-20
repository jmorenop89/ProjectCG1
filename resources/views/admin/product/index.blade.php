@extends('admin.layout.index')

@section('title')
    Gestión de Productos
@endsection

@section('title.section')
    Gestión de Productos
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
                                3 => '3',
                                4 => '4',
                                5 => '5',
                                10 => '10',
                                20 => '20',
                                25 => '25',
                                50 => '50',
                                100 => '100'
                            ],@$pager,
                            [
                                'class'=>'form-control input-sm input-inline select-pager',
                                'id'=>'pag'
                            ]) !!}
                    </div>
                </div>
                <div class="col-lg-6 text-right" style="margin: 20px 0;">
                    <div class="form-group">
                        <input type="text" value="{{ @$search }}" class="form-control" name="search">
                    </div>
                </div>
                {!! Form::close() !!}
                <table class="table table-striped dataTable table-model">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th class="text-right">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($models))
                        @foreach($models as $model)
                            <tr>
                                <td>{{ $model->name }}</td>
                                <td>{{ $model->price }}</td>
                                <td class="td-actions text-right">
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
                            <td colspan="3">No hay Registros</td>
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
                            <div class="col-md-7 col-sm-7 text-right aqui">
                                {!! $models->appends($data)->render() !!}
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
        //app.init();
    </script>
@endsection
@extends('admin.layout.index')

@section('title')
    Editar Usuario
@endsection

@section('title.section')
    Gestión de Usuarios
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Editar Datos</h4>
            </div>
            <div class="content">
                {!! Form::model($model,[
                    'method' => 'POST',
                    'id' => 'frmValidate',
                    'data-email' => route('valid.user.email'),
                    'data-doc' => route('valid.user.identity'),
                    'data-id' => $model->usuario->id,
                    'data-model' => $model->id
                    ]) !!}
                @include('admin.user.fields')
                <div class="row">
                    <div class="col-md-12 frm-actions">
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-wd btn-success btn-fill">
                                <span class="btn-label">
                                    <i class="fa fa-check"></i>
                                </span>
                                Guardar
                            </button>
                            <a href="{{ route('user.index') }}" class="btn btn-wd btn-danger btn-fill">
                                <span class="btn-label">
                                    <i class="fa fa-times"></i>
                                </span>
                                Cancelar
                            </a>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        user.init();
    </script>
@endsection
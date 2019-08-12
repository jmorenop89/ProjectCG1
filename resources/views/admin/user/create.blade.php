@extends('admin.layout.index')

@section('title')
    Nuevo Usuarios
@endsection

@section('title.section')
    Gestión de Usuarios
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Usuario Nuevo</h4>
            </div>
            <div class="content">
                {!! Form::open([
                    'method' => 'POST',
                    'id' => 'frmValidate',
                    'data-email' => route('valid.user.email'),
                    'data-doc' => route('valid.user.identity')
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
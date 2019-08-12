<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">
                Nombres
                <star>*</star>
            </label>
            {!! Form::text('nombres',null,[
                'class' => 'form-control',
                'placelholder' => ''
            ]) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">
                Apellidos
                <star>*</star>
            </label>
            {!! Form::text('apellidos',null,[
                'class' => 'form-control',
                'placelholder' => ''
            ]) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 no-padding">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">
                    Tipo de Documento
                    <star>*</star>
                </label>
                {!! Form::select('tipo_documento',
                    ['DNI'=>'DNI','CE'=>'CE'],
                    null,[
                    'class' => 'form-control',
                    'placelholder' => ''
                ]) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">
                    Número de Documento
                    <star>*</star>
                </label>
                {!! Form::text('numero_documento',null,[
                    'class' => 'form-control',
                    'placelholder' => ''
                ]) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">
                Correo
                <star>*</star>
            </label>
            {!! Form::text('email',isset($model)?$model->usuario->email:null,[
                'class' => 'form-control',
                'placelholder' => ''
            ]) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label class="control-label">
                Dirección
                <star>*</star>
            </label>
            {!! Form::text('direccion',null,[
                'class' => 'form-control',
                'placelholder' => ''
            ]) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">
                Celular
            </label>
            {!! Form::text('celular',null,[
                'class' => 'form-control ',
                'placelholder' => ''
            ]) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">
                Telefono
            </label>
            {!! Form::text('telefono',null,[
                'class' => 'form-control ',
                'placelholder' => ''
            ]) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="checkbox {{ isset($model)?($model->edita_configuracion?'checked':''):'' }}" for="checkbox1">
                {!! Form::checkbox('edita_configuracion',1,
                    isset($model)?($model->edita_configuracion?true:false):false,
                    ['data-toggle' => 'checkbox']
                ) !!}
                Edita Configuración
            </label>
        </div>
    </div>
</div>
{{-- <div class="row">
    <div class="col-md-12">
        <hr>
    </div>
</div> --}}


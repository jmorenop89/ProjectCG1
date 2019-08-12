<ul class="nav">

    <li class="{{ Request::is('admin') ?'active':''}}">
        <a href="{{ route('admin.dashboard') }}">
            <i class="ti-dashboard"></i>
            <p>Dashboard</p>
        </a>
    </li>
    <li class="{{ Request::is('admin/user') || Request::is('admin/user/*') ?'active':''}}">
        <a href="{{ route('user.index') }}">
            <i class="ti-user"></i>
            <p>Usuarios</p>
        </a>
    </li>
    <li class="{{ Request::is('admin/client') || Request::is('admin/client/*') ?'active':''}}">
        <a href="{{ route('client.index') }}">
            <i class="ti-heart"></i>
            <p>Clientes</p>
        </a>
    </li>
    <li class="{{ Request::is('admin/driver') || Request::is('admin/driver/*') ?'active':''}}">
        <a href="{{ route('driver.index') }}">
            <i class="ti-user"></i>
            <p>Conductores</p>
        </a>
    </li>
    <li class="{{ Request::is('admin/vehicle') || Request::is('admin/vehicle/*')  ?'active':''}}">
        <a href="{{ route('vehicle.index') }}">
            <i class="ti-car"></i>
            <p>Vehiculos</p>
        </a>
    </li>

    <li class="{{ Request::is('admin/type-service')  ||
                    Request::is('admin/type-service/*')  ||
                    Request::is('admin/bank')  ||
                    Request::is('admin/bank/*')?'active':''}}">
        <a data-toggle="collapse" href="#config" class="{{ Request::is('admin/zone') || Request::is('admin/zone/*')  ?'collapsed':''}}">
            <i class="ti-panel"></i>
            <p>Configuración
                <b class="caret"></b>
            </p>
        </a>
        <div class="collapse {{
                    Request::is('admin/type-service')  ||
                    Request::is('admin/type-service/*')  ||
                    Request::is('admin/bank')  ||
                    Request::is('admin/bank/*')?'in':'' }}" id="config">
            <ul class="nav">
                <li class="{{ Request::is('admin/type-service') || Request::is('admin/type-service/*')  ?'active':''}}">
                    <a href="{{ route('type_service.index') }}">
                        Tipo de Servicio
                    </a>
                </li>

                <li class="{{ Request::is('admin/bank') || Request::is('admin/bank/*')  ?'active':''}}">
                    <a href="{{ route('bank.index') }}">
                        Institución Bancaria
                    </a>
                </li>
            </ul>
        </div>
    </li>

</ul>

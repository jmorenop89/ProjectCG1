<div class="col-md-6">
    <div class="card ">
        <div class="header">
            <h4 class="title">Usuarios</h4>
            <p class="category">Ultimos usuarios registrados</p>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Apellidos</th>
                                <th>Nombres</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($last_users as $user)
                            <tr>
                                <td>{{ $user->client->apellidos }}</td>
                                <td>{{ $user->client->nombres }}</td>
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
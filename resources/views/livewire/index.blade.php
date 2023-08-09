<div>
    <div class="row justify-content-between align-items-center">
        <h3 class="col-auto">Lista de Postulaciones</h3>
        <div class="col-auto">
            <a href="{{ route('postulate.create') }}" class="btn btn-primary btn-sm">
                <i data-feather="plus-square"></i>
                Nueva Postulación
            </a>
        </div>
    </div>
<div class="row mt-3">
    <div class="stretch-card">
        <div class="card">
            <div class="card-body">
                <table id="products" class="w-100 table table-striped">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <div class="form-group">
                                <label for="paginate">Mostrar:</label>
                                <select wire:model="paginate" class="form-control">
                                    <option selected>10</option>
                                    <option selected>25</option>
                                    <option selected>50</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-auto">
                            <input type="text" wire:model="search" placeholder="Buscar...">
                        </div>
                    </div>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Email</th>
                            <th>Teléfono</th>   
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($postulates as $postulate)
                            <tr>
                                <td>{{ $postulate->id }}</td>
                                <td>{{ $postulate->name }}</td>
                                <td>{{ $postulate->last_name1 }}</td>
                                <td>{{ $postulate->last_name2 }}</td>
                                <td>{{ $postulate->email }}</td>
                                <td>{{ $postulate->phone }}</td>
                                <td>
                                    <a href="{{ route('postulate.create', $postulate->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                    <button wire:click="destroy({{ $postulate->id }})" class="btn btn-sm btn-danger">Eliminar</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $postulates->links() !!}
            </div>
        </div>
    </div>
</div>
</div>
<div>
    <form wire:submit.prevent="store">
        <div>
            <label for="name">Nombre:</label>
            <input type="text" wire:model="name" placeholder="Nombre">
            @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="last_name1">Apellido Paterno:</label>
            <input type="text" wire:model="last_name1" placeholder="Apellido Paterno">
            @error('last_name1') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="last_name2">Apellido Materno:</label>
            <input type="text" wire:model="last_name2" placeholder="Apellido Materno">
            @error('last_name2') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="email">Correo electrónico:</label>
            <input type="email" wire:model="email" placeholder="Correo electrónico">
            @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="phone">Teléfono:</label>
            <input type="text" wire:model="phone" placeholder="Teléfono">
            @error('phone') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="curp">curp:</label>
            <input type="text" wire:model="curp" placeholder="CURP">
            @error('curp') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="rfc">rfc:</label>
            <input type="text" wire:model="rfc" placeholder="RFC">
            @error('rfc') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="nationality">Nacionalidad</label>
            <input type="text" wire:model="nationality" placeholder="Nacionalidad">
            @error('nationality') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="place_born">Lugar de nacimiento</label>
            <input type="text" wire:model="place_born" placeholder="Lugar de nacimieento">
            @error('place_born') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="account_number_bank">Número de cuenta bancaria</label>
            <input type="number" wire:model="account_number_bank" placeholder="Número de cuenta bancaria">
            @error('account_number_bank') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="bank">Banco</label>
            <input type="text" wire:model="bank" placeholder="Banco">
            @error('bank') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="clabe">Clabe</label>
            <input type="number" wire:model="clabe" placeholder="Clabe">
            @error('clabe') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="infonavit">Infonavit</label>
            <input type="number" wire:model="infonavit" placeholder="Infonavit">
            @error('infonavit') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="position">Puesto</label>
            <input type="text" wire:model="position" placeholder="Puesto">
            @error('position') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="date_start">Fecha de inicio</label>
            <input type="date" wire:model="date_start" placeholder="Fecha de inicio">
            @error('date_start') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="remplacement_employee_id">ID del empleado a reemplazar</label>
            <input type="text" wire:model="remplacement_employee_id" placeholder="ID del empleado a reemplazar">
            @error('remplacement_employee_id') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="remplacement_employee_name">Nombre del empleado a reemplazar</label>
            <input type="text" wire:model="remplacement_employee_name" placeholder="Nombre del empleado a reemplazar">
            @error('remplacement_employee_name') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="remplacement_employee_reasons">Motivos del reemplazo</label>
            <input type="text" wire:model="remplacement_employee_reasons" placeholder="Motivos del reemplazo">
            @error('remplacement_employee_reasons') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="remplacement_employee_date">Fecha del reemplazo</label>
            <input type="date" wire:model="remplacement_employee_date" placeholder="Fecha del reemplazo">
            @error('remplacement_employee_date') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="scholarship">Escolaridad</label>
            <input type="text" wire:model="scholarship" placeholder="Escolaridad">
            @error('scholarship') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="gender">Genero</label>
            <input type="text" wire:model="gender" placeholder="Genero">
            @error('gender') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="marital_status">Estado civil</label>
            <input type="text" wire:model="marital_status" placeholder="Estado civil">
            @error('marital_status') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="street">Calle</label>
            <input type="text" wire:model="street" placeholder="Calle">
            @error('street') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="number">Número</label>
            <input type="number" wire:model="number" placeholder="Número">
            @error('number') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="suburb">Colonia</label>
            <input type="text" wire:model="suburb" placeholder="Colonia">
            @error('suburb') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="colony">Delegación</label>
            <input type="text" wire:model="colony" placeholder="Delegación">
            @error('colony') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="city">Ciudad</label>
            <input type="text" wire:model="city" placeholder="Ciudad">
            @error('city') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="state">Estado</label>
            <input type="text" wire:model="state" placeholder="Estado">
            @error('state') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="cp">Código postal</label>
            <input type="number" wire:model="cp" placeholder="Código postal">
            @error('cp') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            @if($file)
                Archivos
                <img src="{{ $file->temporaryUrl() }}">
            @endif
            <label for="file">Archivo</label>
            <input type="file" wire:model="file" name="file" accept=".jpeg,.png,.pdf">
            @error('file') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <button type="submit">Registrar</button>
    </form>    


    <hr>


     <!-- Mostrar lista de usuarios -->
     <ul>
        @foreach ($users as $user)
            <li>
                {{ $user->name }} {{ $user->last_name1 }} {{ $user->last_name2 }} ({{ $user->email }} - {{ $user->phone }})
                <a href="{{ Storage::url($user->file_path) }}" target="_blank">Ver archivo</a>
                @if ($editUserId !== $user->id)
                    <button wire:click="editUser({{ $user->id }})">Editar</button>
                @endif
            </li>
        @endforeach
    </ul>

    Formulario de edición
    @if ($editUserId !== null)
        <form wire:submit.prevent="update">
            <input type="text" wire:model="name" placeholder="Nombre">
            @error('name') <span class="text-red-500">{{ $message }}</span> @enderror

            <input type="text" wire:model="last_name1" placeholder="Apellido Paterno">
            @error('last_name1') <span class="text-red-500">{{ $message }}</span> @enderror

            <input type="text" wire:model="last_name2" placeholder="Apellido Materno">
            @error('last_name2') <span class="text-red-500">{{ $message }}</span> @enderror

            <input type="email" wire:model="email" placeholder="Correo electrónico">
            @error('email') <span class="text-red-500">{{ $message }}</span> @enderror

            <input type="text" wire:model="phone" placeholder="Teléfono">
            @error('phone') <span class="text-red-500">{{ $message }}</span> @enderror

            

            <button type="submit">Guardar cambios</button>
            <button type="button" wire:click="cancelEdit">Cancelar</button>
        </form>
    @endif
</div>
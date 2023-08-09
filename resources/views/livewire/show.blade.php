<div>
    <form wire:submit.prevent="storeUpdate">
        <div class="row justify-content-between align-items-center">
            <h3 class="col-auto">Nuevo Producto</h3>
            <div class="col-auto">
                <a href="{{ route('postulate.index') }}" class="btn btn-secondary">
                    <i data-feather="eye"></i>
                    Mostrar Postulaciones
                </a>
                <button type="submit" class="btn btn-primary">
                    <i data-feather="plus-square"></i>
                    @if($postulateId)
                        Actualizar
                    @else
                        Agregar
                    @endif
                </button>
            </div>
        </div>
        <div class="row mt-4">
        <div class="stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        @if (session()->has('message'))
                            <div class="alert alert-success">{{ session('message') }}</div>
                        @endif

                        @if ($errors->has('message'))
                            <div class="alert alert-danger">{{ $errors->first('message') }}</div>
                        @endif
                            <div class="col-12 col-sm-6 mt-3">
                                <label for="name">Nombre:</label>
                                <input type="text" id="name" wire:model="name" class="form-control">
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12 col-sm-6 mt-3">
                                <label for="last_name1">Apellido Paterno:</label>
                                <input type="text" id="last_name1" wire:model="last_name1" class="form-control">
                                @error('last_name1') <span class="text-danger">{{ $message }}</span> @enderror   
                            </div>
                            <div class="col-12 col-sm-6 mt-3">
                                <label for="last_name2">Apellido Materno:</label>
                                <input type="text" id="last_name2" wire:model="last_name2" class="form-control">
                                @error('last_name2') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12 col-sm-6 mt-3">
                                <label for="email">Correo:</label>
                                <input type="text" id="email" wire:model="email" class="form-control">
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12 col-sm-6 mt-3">
                                <label for="phone">Teléfono:</label>
                                <input type="text" id="phone" wire:model="phone" class="form-control">
                                @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>               
                            <div class="col-12 col-sm-6 mt-3">
                                <label for="curp">CURP:</label>
                                <input type="text" id="curp" wire:model="curp" class="form-control">
                                @error('curp') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12 col-sm-6 mt-3">postulates
                                <label for="rfc">RFC:</label>
                                <input type="text" id="rfc" wire:model="rfc" class="form-control">
                                @error('rfc') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12 col-sm-6 mt-3">
                                <label for="nationality">Nacionalidad:</label>
                                <input type="text" id="nationality" wire:model="nationality" class="form-control">
                                @error('nationality') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12 col-sm-6 mt-3">
                                <label for="place_born">Lugar de Nacimiento:</label>
                                <input type="text" id="place_born" wire:model="place_born" class="form-control">
                                @error('place_born') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12 col-sm-6 mt-3">
                                <label for="account_number_bank">Número de Cuenta Bancaria:</label>
                                <input type="text" id="account_number_bank" wire:model="account_number_bank" class="form-control">
                                @error('account_number_bank') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12 col-sm-6 mt-3">
                                <label for="bank">Banco:</label>
                                <input type="text" id="bank" wire:model="bank" class="form-control">
                                @error('bank') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12 col-sm-6 mt-3">
                                <label for="clabe">CLABE:</label>
                                <input type="text" id="clabe" wire:model="clabe" class="form-control">
                                @error('clabe') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12 col-sm-6 mt-3">
                                <label for="infonavit">INFONAVIT:</label>
                                <input type="text" id="infonavit" wire:model="infonavit" class="form-control">
                                @error('infonavit') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12 col-sm-6 mt-3">
                                <label for="position">Puesto:</label>
                                <input type="text" id="position" wire:model="position" class="form-control">
                                @error('position') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12 col-sm-6 mt-3">
                                <label for="date_start">Fecha de Ingreso:</label>
                                <input type="date" id="date_start" wire:model="date_start" class="form-control">
                                @error('date_start') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12 col-sm-6 mt-3">
                                <label for="remplacement_employee_id">ID Empleado a Reemplazar:</label>
                                <input type="text" id="remplacement_employee_id" wire:model="remplacement_employee_id" class="form-control">
                                @error('remplacement_employee_id') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            @if($remplacement_employee_id)
                                <div class="col-12 col-sm-6 mt-3">
                                    <label for="remplacement_employee_name">Nombre del Empleado a Reemplazar:</label>
                                    <input type="text" id="remplacement_employee_name" wire:model="remplacement_employee_name" class="form-control">
                                    @error('remplacement_employee_name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-12 col-sm-6 mt-3">
                                    <label for="remplacement_employee_reasons">Motivos del Reemplazo:</label>
                                    <input type="text" id="remplacement_employee_reasons" wire:model="remplacement_employee_reasons" class="form-control">
                                    @error('remplacement_employee_reasons') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-12 col-sm-6 mt-3">
                                    <label for="remplacement_employee_date">Fecha de Reemplazo:</label>
                                    <input type="date" id="remplacement_employee_date" wire:model="remplacement_employee_date" class="form-control">
                                    @error('remplacement_employee_date') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            @endif

                            <div class="col-12 col-sm-6 mt-3">
                                <label for="scholarship">Escolaridad:</label>
                                <input type="text" id="scholarship" wire:model="scholarship" class="form-control">
                                @error('scholarship') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12 col-sm-6 mt-3">
                                <label for="gender">Género:</label>
                                <select id="gender" wire:model="gender" class="form-select">
                                    <option value="">Seleccione</option>
                                    <option value="1">Masculino</option>
                                    <option value="2">Femenino</option>
                                    <option value="3">Otro</option>
                                </select>
                                @error('gender') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12 col-sm-6 mt-3">
                                <label for="marital_status">Estado Civil:</label>
                                <select id="marital_status" wire:model="marital_status" class="form-select">
                                    <option value="">Seleccione</option>
                                    <option value="1">Soltero(a)</option>
                                    <option value="2">Casado(a)</option>
                                </select>
                                @error('marital_status') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12 col-sm-6 mt-3">
                                <label for="street">Calle:</label>
                                <input type="text" id="street" wire:model="street" class="form-control">
                                @error('street') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12 col-sm-6 mt-3">
                                <label for="number">Número:</label>
                                <input type="text" id="number" wire:model="number" class="form-control">
                                @error('number') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12 col-sm-6 mt-3">
                                <label for="suburb">Colonia:</label>
                                <input type="text" id="suburb" wire:model="suburb" class="form-control">
                                @error('suburb') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12 col-sm-6 mt-3">
                                <label for="colony">Colonia:</label>
                                <input type="text" id="colony" wire:model="colony" class="form-control">
                                @error('colony') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12 col-sm-6 mt-3">
                                <label for="city">Ciudad:</label>
                                <input type="text" id="city" wire:model="city" class="form-control">
                                @error('city') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12 col-sm-6 mt-3">
                                <label for="state">Estado:</label>
                                <input type="text" id="state" wire:model="state" class="form-control">
                                @error('state') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12 col-sm-6 mt-3">
                                <label for="cp">Código Postal:</label>
                                <input type="text" id="cp" wire:model="cp" class="form-control">
                                @error('cp') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <!-- no mostrar si se edita -->
                            @if(!$postulateId)
                                <div class="col-12 mt-3">
                                    <label for="file">Archivo:</label>
                                    <input type="file" wire:model="file" name="file" accept=".jpeg,.png,.pdf" class="form-control">
                                    @error('file') <span class="text-danger">{{ $message }}</span> @enderror
                                    <div>
                                        @if ($file)
                                            <img src="{{ $file->temporaryUrl() }}" class="img-fluid" alt="Preview Image">
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>    
</div>
<div>
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
    </form>
</div>

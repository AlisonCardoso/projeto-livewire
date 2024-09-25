<div>


    <div class="w-full">
        <x-input-label for="estado" :value="__('Estado')"/>
        <select  wire:model="estadoSelecionado" id="estado" name="estado" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" >
            <option value="" selected>{{ __('Select a State') }}</option>
            @foreach($estados as $estado)
            <option value="{{ $estado['id'] }}">{{ $estado['nome'] }}</option>
        @endforeach
        </select>
    </div>

        @if ($estadoSelecionado)
    


        <div class="w-full">
            <x-input-label for="cidade" :value="__('Cidade')"/>
            <select wire:model="municipioSelecionado" id="cidade" name="cidade" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" >
                <option value="" selected>{{ __('Select a City') }}</option>
                @foreach($municipios as $municipio)
                <option value="{{ $municipio['id'] }}">{{ $municipio['nome'] }}</option>
            @endforeach

            </select>
        </div>
</div>

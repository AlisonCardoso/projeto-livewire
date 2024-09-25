<div>
   <h1>teste</h1>

    <div class="w-full">
        <x-input-label for="estado" :value="__('Estado')"/>
        <select id="estado" name="estado" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" >
            <option value="" selected>{{ __('Select a State') }}</option>

        </select>
    </div>

        <div class="w-full">
            <x-input-label for="cidade" :value="__('Cidade')"/>
            <select id="cidada" name="estado" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" >
                <option value="" selected>{{ __('Select a City') }}</option>

            </select>
        </div>
</div>

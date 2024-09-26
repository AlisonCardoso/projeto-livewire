<div>
    <h2>Buscar CEP</h2>
    <form  class="p-8 bg-gray-500 flex flex-col w-1/2  mx-auto gap-4">
        <div>
            <label for="zipcode">CEP</label>
            <input type="text"  wire:model.lazy="zipcode" id="zipcode" name="cep" placeholder="Digite o CEP"/>
        </div>
        <div>
            <label for="street">Rua</label>
            <input type="text"  wire:model="street" id="street" name="street"/>
        </div>
      
        <div>
            <label for="neighborhood">Bairro</label>
            <input type="text"  wire:model="neighborhood" id="neighborhood" name="neighborhood"/>
        </div>
        <div>
            <label for="city">Cidade</label>
            <input type="text"  wire:model="city" id="city" name="city"/>
        </div>
        <div>
            <label for="state">Estado</label>
            <input type="text"  wire:model="state" id="state" name="state"/>
        </div>
        <div>
            <button class="px-4 py-2 bg-green-500 hover:bg-gray-400 text-black rounded-md" type="button" wire:click.prefetch>Buscar</button>
           
        </div>
        
    </form>



</div>


<div>
    <form wire:submit.prevent="salvar">
        <div>
            <label for="cep">CEP:</label>
            <input type="text" id="cep" wire:model="cep" placeholder="Digite o CEP">
        </div>

        <div>
            <label for="rua">Rua:</label>
            <input type="text" id="rua" wire:model="rua" placeholder="Rua" readonly>
        </div>

        <div>
            <label for="estado">Estado:</label>
            <select wire:model="estadoSelecionado" id="estado">
                <option value="">Selecione um estado</option>
                @foreach($estados as $estado)
                    <option value="{{ $estado->sigla }}">{{ $estado->nome }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="municipio">Município:</label>
            <select wire:model="municipioSelecionado" id="municipio">
                <option value="">Selecione um município</option>
                @foreach($municipios as $municipio)
                    <option value="{{ $municipio->nome }}">{{ $municipio->nome }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit">Salvar Endereço</button>
    </form>

    <script>
        window.addEventListener('alert', event => {
            alert(event.detail.message);
        });
    </script>
</div>

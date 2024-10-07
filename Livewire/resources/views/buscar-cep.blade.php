<div>
    <div class="container">
        <form class="row g-3 m-5">
            <h1>Buscar CEP</h1>
            <div class="col-md-6">
              <label for="cep" class="form-label">CEP</label>
              <input type="text" class="form-control" id="cep" wire:model.lazy="cep" placeholder="Insira o CEP (Apenas números)" />
              @error('cep')
                    <span class="badge bg-warning">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-6">
              <label for="state" class="form-label">Estado</label>
              <input type="text" class="form-control" id="state" wire:model="state">
              @error('state')
                    <span class="badge bg-warning">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-6">
              <label for="city" class="form-label">Cidade</label>
              <input type="text" class="form-control" id="city" wire:model="city">
              @error('city')
                    <span class="badge bg-warning">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="neighborhood" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="neighborhood" wire:model="neighborhood">
                @error('neighborhood')
                    <span class="badge bg-warning">{{ $message }}</span>
                @enderror
              </div>
            <div class="col-12">
                <label for="street" class="form-label">Rua</label>
                <input type="text" class="form-control" id="street" wire:model="street">
                @error('street')
                    <span class="badge bg-warning">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <button class="btn btn-sm btn-outline-success" type="button" wire:click="save" >Salvar Endereço</button>
            </div>
          </form>

        <br>

        <table class="table">
            <thead>
              <tr class="text-center table-dark">
                <th scope="col">CEP</th>
                <th scope="col">Estado</th>
                <th scope="col">Cidade</th>
                <th scope="col">Bairro</th>
                <th scope="col">Rua</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($endereco as $endereco)
                <tr class="text-center table-light">
                    <td>{{ $endereco['cep'] }}</td>
                    <td>{{ $endereco['state'] }}</td>
                    <td>{{ $endereco['city'] }}</td>
                    <td>{{ $endereco['neighborhood'] }}</td>
                    <td>{{ $endereco['street'] }}</td>
                    <td>
                        <button wire:click="edit({{ $endereco['id'] }})" type="button" class="btn btn-sm btn-outline-info m-1">Editar</button>
                        <button wire:click="remove({{ $endereco['id'] }})" type="button" class="btn btn-sm btn-outline-danger m-1">Excluir</button>
                    </td>
                </tr>
              @endforeach
            </tbody>
         </table>
    </div>
</div>

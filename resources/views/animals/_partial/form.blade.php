@csrf
<div class="row">
    <div class="form-group col-6">
        <label >Nome</label>
        <input type="text" name="name" class="form-control" value="{{ isset($animal) ? $animal->name : '' }}">
    </div>
    <div class="form-group col-6">
        <label >Raça</label>
        <input type="text" name="breed" class="form-control" value="{{ isset($animal) ? $animal->breed : '' }}">
    </div>
</div>
<div class="row">
    <div class="col-6">
        <label class="control-label">Tipo de Animal</label>
        <select name="animal_type_id" class="form-control">
        @if(isset($animalTypes))
            @foreach($animalTypes as $animalType)
                @if(isset($animal) && $animal->animal_type_id == $animalType->id)
                    <option value="{{ $animalType->id }}" selected>{{ $animalType->description }}</option>
                @else
                    <option value="{{ $animalType->id }}">{{ $animalType->description }}</option>
                @endif
            @endforeach
        @else
            <option value="">Nenhuma área encontrada</option>
        @endif
        </select>
    </div>

    <div class="col-6">
        <label class="control-label">Dono</label>
        <select name="customer_id" class="form-control">
        @if(isset($customers))
            @foreach($customers as $customer)
                @if(isset($animal) && $animal->customer_id == $customer->id)
                    <option value="{{ $customer->id }}" selected>{{ $customer->name }}</option>
                @else
                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                @endif
            @endforeach
        @else
            <option value="">Nenhuma área encontrada</option>
        @endif
        </select>
    </div>
</div>


<hr>
<button type="submit" class="btn btn-primary">Salvar</button>


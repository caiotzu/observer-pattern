@csrf
<div class="row">
    <div class="form-group col-6">
        <label >Descrição</label>
        <input type="text" name="description" class="form-control" placeholder="ex: cachorro, gato, pato" value="{{ isset($animalType) ? $animalType->description : '' }}">
    </div>
</div>

<hr>
<button type="submit" class="btn btn-primary">Salvar</button>


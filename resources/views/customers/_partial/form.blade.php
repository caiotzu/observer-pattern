@csrf
<div class="row">
    <div class="form-group col-4">
        <label >Nome</label>
        <input type="text" name="name" class="form-control" value="{{ isset($customer) ? $customer->name : '' }}">
    </div>
    <div class="form-group col-4">
        <label >E-mail</label>
        <input type="email" name="email" class="form-control" value="{{ isset($customer) ? $customer->email : '' }}">
    </div>

    <div class="col-4">
        <label class="control-label">Status Cliente</label>
        <select name="status" class="form-control">
            <option value="A" {{ isset($customer) && $customer->status == 'A' ? 'selected' : '' }}>Ativo</option>
            <option value="I" {{ isset($customer) && $customer->status == 'I' ? 'selected' : ''}}>Inativo</option>
        </select>
    </div>
</div>
<div class="row">
    <div class="form-group col-3">
        <label >CEP</label>
        <input type="text" name="zipcode" class="form-control" value="{{ isset($customer) ? $customer->zipcode : '' }}">
    </div>
    <div class="form-group col-6">
        <label >Logradouro</label>
        <input type="text" name="address" class="form-control" value="{{ isset($customer) ? $customer->address : '' }}">
    </div>
    <div class="form-group col-3">
        <label >Número</label>
        <input type="text" name="number" class="form-control" value="{{ isset($customer) ? $customer->number : '' }}">
    </div>
</div>
<div class="row">
   <div class="form-group col-5">
        <label >Bairro</label>
        <input type="text" name="neighborhood" class="form-control" value="{{ isset($customer) ? $customer->neighborhood : '' }}">
    </div>
    <div class="form-group col-5">
        <label >Município</label>
        <input type="text" name="city" class="form-control" value="{{ isset($customer) ? $customer->city : '' }}">
    </div>
      <div class="form-group col-2">
        <label >Estado</label>
        <input type="text" name="state" class="form-control" value="{{ isset($customer) ? $customer->state : '' }}">
    </div>
</div>

<hr>
<button type="submit" class="btn btn-primary">Salvar</button>


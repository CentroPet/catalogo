

{{--%%%%%%%% campo precio %%%%%%%%%%--}}
<div class="form-floating mb-2">
    <input type="email" class="form-control" id="floatingInputValue" placeholder="name@example.com" >
    <label for="floatingInputValue"> producto</label>
</div>

{{--%%%%%%%% campo de stok %%%%%%%%%%--}}
<div class="form-floating mb-2">
    <input type="email" class="form-control" id="floatingInputValue" placeholder="name@example.com" >
    <label for="floatingInputValue">stock</label>
</div>

{{--%%%%%%%% campo de precio %%%%%%%%%%--}}
<div class="form-floating mb-2">
    <input type="email" class="form-control" id="floatingInputValue" placeholder="name@example.com" >
    <label for="floatingInputValue">precio</label>
</div>

{{--%%%%%%%% campo de fecha vencimiento %%%%%%%%%%--}}
<div class=" col-2 form-floating mb-3">
    <input type="date" class="form-control" id="fvencimiento"  name="fvencimiento" value="{{ old ("fvencimiento",$product->fvencimiento ?? "") }}">
    <label for="fvencimiento">Fecha vencimiento</label>
</div>

{{--%%%%%%%% campo de foto %%%%%%%%%%--}}
<div class="form-floating mb-3">
    <input type="file" class="form-control" id="foto" name="foto">
    <label for="foto">Foto</label>
</div>

{{--%%%%%%%% campo de video %%%%%%%%%%--}}
<div class="form-floating mb-2">
    <input type="file" class="form-control" id="floatingInputValue" placeholder="name@example.com" >
    <label for="floatingInputValue">video</label>
</div>

{{-- campo categoria--}}
<div class="form-floating mb-2">
    <select class="form-control" name="categoria_id" id="categoriasSelec">
    </select>
    <label for="floatingInputValue">Categoria</label>
</div>

{{--$$$$$$$$$$$$$$$$$$$$ este es para seleccionar fotos $$$$$$$$$$$$$$$$$$$$$$$--}}
<input id="fotos" name="file-data[]" type="file" multiple>

{{-- ######################### boton de guardar #########################--}}
<div class="d-grid gap-2 col-6 mx-auto">
    <button class="btn btn-primary" type="submit">Guardar</button>
</div>





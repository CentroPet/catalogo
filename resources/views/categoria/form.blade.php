

<div class="form-floating mb-3">
    <input type="text" class="form-control" id="categoria" value="{{ old("categoria", $product->categoria ?? "cemento" )}}" name="categoria">
    <label for="categoria">Categria</label>
</div>

<div class="d-grid gap-2 col-6 mx-auto">
    <button class="btn btn-primary" type="submit">Guardar</button>
</div>
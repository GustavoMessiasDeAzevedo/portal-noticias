<div class="mb-4">
    <label for="categoria_id" class="block text-sm font-semibold text-slate-700 mb-1.5">Categoria *</label>
    <select name="categoria_id" id="categoria_id" class="w-full rounded-lg text-sm focus:ring-2 focus:ring-red-600">
        <option value=""></option>
        <option value="">Tecnologia</option>
    </select>
</div>

<div class="mb-4">
    <label for="titulo" class="form-label">Titulo *</label>
    <input type="text" name="titulo" id="titulo" class="form-control">
</div>

<div class="mb-4">
    <label for="resumo" class="form-label">Resumo *</label>
    <textarea name="resumo" id="resumo" rows="3" class="form-control"></textarea>
</div>

<div class="mb-4">
    <label for="conteudo" class="form-label">Conteúdo *</label>
    <textarea name="conteudo" id="conteudo" rows="10" class="form-control"></textarea>
</div>

<div class="mb-4">
    <label for="imagem" class="form-label">Imagem *</label>
    <input type="file" name="imagem" id="imagem" class="form-control">
</div>

<div class="mb-4">
    <label for="">Situação</label>
    <div>
        <label for="">
            <input type="radio" name="ativo" id="" value="1">
            Publicado
        </label>
        <label for="">
            <input type="radio" name="ativo" id="" value="0" checked>
            Rascunho
        </label>
    </div>
</div>

<div class="mb-4">
    <button type="submit" class="bg-slate-900 text-white px-4 py-2 rounded-lg">Salvar</button>
    <a href="#" class="bg-slate200 text-stone-800 px-4 py-2 rounded-lg inline-block">Cancelar</a>
</div>

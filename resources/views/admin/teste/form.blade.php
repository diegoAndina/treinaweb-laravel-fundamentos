<div class="form-group {{ $errors->has('titulo') ? 'has-error' : '' }}">
    <label for="titulo" class="control-label">{{ 'Titulo' }}</label>
    <input class="form-control" name="titulo" type="text" id="titulo" value="{{ isset($teste->titulo) ? $teste->titulo : '' }}">
    {!! $errors->first('titulo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
    <label for="content" class="control-label">{{ 'Content' }}</label>
    <textarea class="form-control" rows="5" name="content" type="textarea" id="content">
    {{ isset($teste->content) ? $teste->content : '' }}
    </textarea>
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('categoria') ? 'has-error' : '' }}">
    <label for="categoria" class="control-label">{{ 'Categoria' }}</label>
    <input class="form-control" name="categoria" type="text" id="categoria" value="{{ isset($teste->categoria) ? $teste->categoria : '' }}">
    {!! $errors->first('categoria', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

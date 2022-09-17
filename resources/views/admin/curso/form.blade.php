<div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
    <label for="nome" class="control-label">{{ 'Nome' }}</label>
    <input class="form-control" name="nome" type="text" id="nome" value="{{ isset($curso->nome) ? $curso->nome : ''}}" >
    {!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('descricao') ? 'has-error' : ''}}">
    <label for="descricao" class="control-label">{{ 'Descricao' }}</label>
    <textarea class="form-control" rows="5" name="descricao" type="textarea" id="descricao" >{{ isset($curso->descricao) ? $curso->descricao : ''}}</textarea>
    {!! $errors->first('descricao', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('carga_horaria') ? 'has-error' : ''}}">
    <label for="carga_horaria" class="control-label">{{ 'Carga Horaria' }}</label>
    <input class="form-control" name="carga_horaria" type="number" id="carga_horaria" value="{{ isset($curso->carga_horaria) ? $curso->carga_horaria : ''}}" >
    {!! $errors->first('carga_horaria', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('valor') ? 'has-error' : ''}}">
    <label for="valor" class="control-label">{{ 'Valor' }}</label>
    <input class="form-control" name="valor" type="number" id="valor" value="{{ isset($curso->valor) ? $curso->valor : ''}}" >
    {!! $errors->first('valor', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

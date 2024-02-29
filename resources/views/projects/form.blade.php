<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            <label for="title">Titulo:</label>
            <input type="text" name="title" value="{{ old('title', $project->title) }}" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="Titulo del proyecto">
            {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <label for="images">Imagen: </label>
            <input type="file" name="image" id="image" value="{{$project->image}}">
            {!! $errors->first('images', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <label for="description">Descripcion:</label>
            <input type="text" name="description" value="{{ old('description', $project->description) }}" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="Descripcion del proyecto">
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <label for="url">URL del Proyecto:</label>
            <input type="text" name="url" value="{{ old('url', $project->url) }}" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" placeholder="Url del proyecto">
            {!! $errors->first('url', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <label for="url">Repositorio de GitHub:</label>
            <input type="text" name="git_url" value="{{ old('url', $project->git_url) }}" class="form-control{{ $errors->has('git') ? ' is-invalid' : '' }}" placeholder="Url del repositorio">
            {!! $errors->first('git', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>

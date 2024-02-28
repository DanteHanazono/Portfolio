<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            <label for="title">Titulo</label>
            <input type="text" name="title" value="{{ old('title', $projects->title) }}" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="Title">
            {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">

            <label for="images">Imagen</label>
            <img class="img-fluid" src=" {{$projects->image}} " alt="..." style="width:150px" />
            <input type="file" name="images" id="images" value="{{$projects->image}}">
            {!! $errors->first('images', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <label for="description">Descripcion</label>
            <input type="text" name="description" value="{{ old('description', $projects->description) }}" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="Description">
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <label for="url">URL</label>
            <input type="text" name="url" value="{{ old('url', $projects->url) }}" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" placeholder="Url">
            {!! $errors->first('url', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>

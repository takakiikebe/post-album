<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="col-md-4 control-label">{{ 'Title' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="title" type="text" id="title" value="{{ $post->title or ''}}" >
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('release') ? 'has-error' : ''}}">
    <label for="release" class="col-md-4 control-label">{{ 'Release' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="release" type="text" id="release" value="{{ $post->release or ''}}" >
        {!! $errors->first('release', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    <label for="content" class="col-md-4 control-label">{{ 'Content' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="content" type="textarea" id="content" >{{ $post->content or ''}}</textarea>
        {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('genre') ? 'has-error' : ''}}">
    <label for="genre" class="col-md-4 control-label">{{ 'Genre' }}</label>
    <div class="col-md-6">
        <select name="genre" class="form-control" id="genre" >
    @foreach (json_decode('{"hard rock": "Hard Rock", "soft rock": "Soft Rock", "pops": "Pops", "r&b": "RB", "danceable": "Danceable", "jazz": "Jazz", "new age": "New Age", "music": "Music"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($post->genre) && $post->genre == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
        {!! $errors->first('genre', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('url1') ? 'has-error' : ''}}">
    <label for="url1" class="col-md-4 control-label">{{ 'Url1' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="url1" type="text" id="url1" value="{{ $post->url1 or ''}}" >
        {!! $errors->first('url1', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('url2') ? 'has-error' : ''}}">
    <label for="url2" class="col-md-4 control-label">{{ 'Url2' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="url2" type="text" id="url2" value="{{ $post->url2 or ''}}" >
        {!! $errors->first('url2', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
    <label for="release" class="col-md-4 control-label">{{ 'Category_id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="category_id" type="text" id="category_id" value="{{ $post->category_id or ''}}" >
        {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>

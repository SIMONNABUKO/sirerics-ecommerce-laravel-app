<div class="form-group">
    {{ Form::label($label ?: $name, null, ['class' => 'control-label']) }}
    <div data-min-view="2" class="input-group date">
        <span class="input-group-addon btn btn-primary"><i class="icon-th s7-date"></i></span>
        {{ Form::text($name, $value, array_merge(['class' => 'form-control daterange'], $attributes)) }}
    </div>
    <small class="help-block">{{ $errors->first($name) }}</small>
</div>

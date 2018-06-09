<div id="field_{{ $id }}"{!! Html::classes(['form-group', 'has-error' => $hasErrors]) !!}>
    <label for="{{ $id }}" class="field-label text-muted fs18 mb10">
        {{ $label }}
    </label>

    @if ($required)
        <span class="label label-info">Required</span>
    @endif

    <div class="controls">

        <label for="{{ $id }}" class="field prepend-icon">
            {!! $input !!}
            <label for="{{ $id }}" class="field-icon">
                <i class="{{ $icon }}"></i>
            </label>
        </label>


        @foreach ($errors as $error)
            <p class="help-block">{{ $error }}</p>
        @endforeach
    </div>
</div>

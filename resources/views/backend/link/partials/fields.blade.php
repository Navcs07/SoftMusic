<div class="row">
    <div class="col-md-6">
        {!! Field::text('name', null, ['placeholder' => trans('validation.attributes.name')], ['icon' => 'fa fa-comment']) !!}
    </div>
    <div class="col-md-6">
        {!! Field::text('link', null, ['placeholder' => trans('validation.attributes.link')], ['icon' => 'fa fa-link']) !!}
    </div>
</div>
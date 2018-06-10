<div class="row">
    <div class="col-md-6">
        {!! Field::text('title', null, ['placeholder' => trans('validation.attributes.title')], ['icon' => 'fa fa-info']) !!}
    </div>
    <div class="col-md-6">
        {!! Field::select('category_id', $categories, isset($post) ? $post->category_id : null, ['class'=>'form-control'], ['icon' => null]) !!}
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        {!! Field::textarea('content_1', null, ['placeholder' => trans('validation.attributes.content_1')], ['icon' => 'fa fa-comments-o']) !!}
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        {!! Field::file('image', ['class' => 'form-control'], ['icon' => 'fa fa-file']) !!}
    </div>
</div>
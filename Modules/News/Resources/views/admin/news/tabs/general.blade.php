{{ Form::text('name', trans('news::attributes.name'), $errors, $news, ['labelCol' => 2, 'required' => true]) }}
{{ Form::wysiwyg('body', trans('news::attributes.body'), $errors, $news, ['labelCol' => 2, 'required' => true]) }}

<div class="row">
    <div class="col-md-8">
        {{ Form::checkbox('is_active', trans('news::attributes.is_active'), trans('news::news.form.enable_the_news'), $errors, $news) }}
    </div>
</div>

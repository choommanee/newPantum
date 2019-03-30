@include('media::admin.image_picker.single', [
    'title' => trans('news::news.form.news_image'),
    'inputName' => 'files[news_image]',
    'file' => $news->newsImage,
])

<div class="media-picker-divider"></div>

@include('media::admin.image_picker.multiple', [
    'title' => trans('product::products.form.additional_images'),
    'inputName' => 'files[additional_images_news][]',
    'files' => $news->additionalImagesNews,
])

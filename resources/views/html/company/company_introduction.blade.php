<!DOCTYPE html>
<html data-bs-theme="light" lang="ja">

<head>
    @include('html.common.head', [
        'cssPath' => 'css/company/introduction.css',
        'pageTitle' => '企業紹介文',
    ])
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>
<body>
    @if($companyProfile)
    {!! $companyProfile->self_introduction !!}
    {!! $companyProfile->company_text1 !!}
    {!! $companyProfile->company_text2 !!}
    {!! $companyProfile->recruiting_people !!}
    {!! $companyProfile->main_img !!}
@else
    <p>自己紹介がありません。</p>
@endif
</body>

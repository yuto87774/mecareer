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
    <script>
        // 前回の内容をJavaScriptの変数に保存
        var previousContentText1 = `{!! $companyProfile->self_introduction ?? '' !!}`;
        var previousContentText2 = `{!! $companyProfile->company_text1 ?? '' !!}`;
        var previousContentText3 = `{!! $companyProfile->company_text2 ?? '' !!}`;
        var previousContentText4 = `{!! $companyProfile->recruiting_people ?? '' !!}`;
    </script>
    <header>
        @include('html.common.companyheader')
    </header>
    <div>
        <p style="margin-top:50px; background: #a0efef;text-align: center;height: 37px;padding-top: 2px;">Paragraph</p>
    </div>
    <div class="container" style="padding: 0;padding-right: 10%;padding-left: 5%;">
        <div class="row">
            <div class="col-md-12">
                <h1 style="text-align: left;margin-top: 50px;">
                    テキストテキストテキストテキストテキスト<br>テキスト
                </h1>
                <div class="d-flex align-items-lg-center">
                    <i class="far fa-star"></i>
                    <h5 style="margin-bottom: 0;margin-bottom:1rem;">Heading</h5>
                </div>
                <div id="quill_container">
                    <div id="quill_editorimg1"></div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 60px">
            <div class="col-12 col-md-8">
                <h2 style="margin-bottom: 20px;text-align: left;">私たちの企業理念</h2>
                <div style="text-align: left;">
                    <div id="quill_editortext1" style="min-height: 200px"></div>
                </div>
            </div>
            <div class="col">
                <iframe allowfullscreen="" frameborder="0" src="https://cdn.bootstrapstudio.io/placeholders/map.html"
                    width="100%" height="400"></iframe>
                <i class="far fa-star text-start"></i>
                <i class="far fa-star"></i>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h2 style="margin-bottom: 20px;margin-top: 30px;text-align: left;">こんなことやってます</h2>
                <div class="" style="width: 66%;height: 200px;border-radius: 44px;margin-bottom: 60px;">
                    <div id="quill_editorimg2"></div>
                </div>

                <div style="margin-top: 60px;border-style: none;text-align: left;">
                    <div id="quill_editortext2" style="min-height: 200px"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="" style="width: 66%;height: 200px;border-radius: 44px;margin-bottom: 60px;">
                    <div id="quill_editorimg3"></div>
                </div>

                <div style="margin-top: 60px;border-style: none;text-align: left;">
                    <div id="quill_editortext3" style="min-height: 200px"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h2 style="text-align: left;margin-top: 60px;">こんな人募集してます</h2>
                <div style="margin-top: 15px;border-style: none;text-align: left;">
                    <div id="quill_editortext4" style="min-height: 200px"></div>
                </div>
            </div>
        </div>


        <form action="{{ route('storecompanyintroduction') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="self_introduction_html" id="self_introduction_html">
            <input type="hidden" name="editortext2_html" id="editortext2_html">
            <input type="hidden" name="editortext3_html" id="editortext3_html">
            <input type="hidden" name="editortext4_html" id="editortext4_html">
            <input type="hidden" name="editorimg_html" id="editorimg_html">

            <button class="btn btn-primary" type="submit">Save</button>
        </form>

    </div>

    <button class="btn btn-primary" type="submit"
        style="width: 58%;height: 117px;transform: scale(0.80);border-style: none;background: url(&quot;assets/img/screenshot.5.jpg&quot;) center / contain no-repeat;"></button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/common/quill.js') }}"></script>
    <script>
        var quill = quillEditor("quill_editorimg1")
    </script>
    <script>
        var quill = quillEditor("quill_editorimg2")
    </script>
    <script>
        var quill = quillEditor("quill_editorimg3")
    </script>
    <script>
        var quillText1 = quillEditor2('quill_editortext1', previousContentText1);
    </script>
    <script>
        var quillTest2 = quillEditor2("quill_editortext2", previousContentText2);
    </script>
    <script>
        var quillText3 = quillEditor2("quill_editortext3", previousContentText3);
    </script>
    <script>
        var quillText4 = quillEditor2("quill_editortext4", previousContentText4);
    </script>
    <script>

    </script>
    <script>
        document.querySelector('form').addEventListener('submit', function(e) {
            let quillEditorText1Content = document.getElementById('quill_editortext1').querySelector('.ql-editor')
                .innerHTML;
            let quillEditorText2Content = document.getElementById('quill_editortext2').querySelector('.ql-editor')
                .innerHTML;
            let quillEditorText3Content = document.getElementById('quill_editortext3').querySelector('.ql-editor')
                .innerHTML;
            let quillEditorText4Content = document.getElementById('quill_editortext4').querySelector('.ql-editor')
                .innerHTML;
            let quillEditorImg1Content = document.getElementById('quill_editorimg1').querySelector('.ql-editor')
                .innerHTML;
            document.getElementById('self_introduction_html').value = quillEditorText1Content;
            document.getElementById('editortext2_html').value = quillEditorText2Content;
            document.getElementById('editortext3_html').value = quillEditorText3Content;
            document.getElementById('editortext4_html').value = quillEditorText4Content;
            document.getElementById('editorimg_html').value = quillEditorImg1Content;
        });
    </script>
</body>

</html>

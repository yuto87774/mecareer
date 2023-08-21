

/**
    関数： テキストエディタの生成
    引数： 作成する場所のid
    戻り値： Quillエディタの生成情報
**/
function quillEditor(make_id, initialImage) {
    var toolbarOptions;
    var quill;
    var themes = set_themes();

    toolbarOptions = [
        ['image']
    ];

    make_id = '#' + make_id;

    quill = new Quill(make_id, {
        modules: {
            toolbar: toolbarOptions,
            clipboard: {
                matchers: [
                    ['img', function (node, delta) {
                        return delta; // 画像だけを許可
                    }]
                ],
            },
            keyboard: {
                bindings: {
                    anykey: {
                        key: /.?/,
                        handler: function () {
                            return false;
                        }
                    }
                }
            }
        },
        placeholder: '画像を挿入してください',
        theme: themes
    });

    // 前回の画像をエディタに設定
    if (initialImage) {
        quill.clipboard.dangerouslyPasteHTML(0, `<img src="${initialImage}" />`);
    }

    // 画像が挿入されたかを監視
    quill.on('text-change', function (delta, oldDelta, source) {
        if (source === 'user') {
            let currentContent = quill.getContents();
            let imageOps = currentContent.ops.filter(op => op.insert && op.insert.image);

            // 画像が1つ以上挿入されている場合
            if (imageOps.length > 1) {
                let lastImage = imageOps[imageOps.length - 1].insert.image;
                quill.setContents([{
                    insert: { image: lastImage }
                }]);
            }
        }
    });

    return quill;
}


function quillEditor2(make_id, initialContent) {
    // 既存のコード...
    var toolbarOptions;
    var quill;
    var themes = set_themes();

    toolbarOptions = [
        // 見出し
        [{
            'header': [1, 2, 3, 4, false]
        }],
        // フォント種類
        [{
            'font': []
        }],
        // 文字寄せ
        [{
            'align': []
        }],
        // 太字、斜め、アンダーバー
        ['bold', 'italic', 'underline'],
        // 文字色
        [{
                'color': []
            },
            // 文字背景色
            {
                'background': []
            }
        ],
        // リスト
        [{
                'list': 'ordered'
            },
            {
                'list': 'bullet'
            }
        ],
        // インデント
        [{
            'indent': '-1'
        }, {
            'indent': '+1'
        }],
    ];

    make_id = '#' + make_id;

    quill = new Quill(make_id, {
        modules: {
            toolbar: toolbarOptions,
        },
        placeholder: 'テキスト',
        theme: themes
    });

    // 前回の内容をエディタに設定
    if (initialContent) {
        quill.clipboard.dangerouslyPasteHTML(0, initialContent);
    }

    return quill;
}


function set_themes() {
    var themes;
    if (window.parent.screen.width > 750) {
        themes = "snow";
    } else {
        themes = "bubble";
    }
    return themes;
}


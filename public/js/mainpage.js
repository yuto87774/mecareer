const columns = ['smcol1', 'smcol2', 'smcol3'];
let index = 0;

// 一定時間ごとに実行
setInterval(() => {
    // 現在のカラムを取得
    const column = document.getElementById(columns[index]);

    // カラムが非表示であれば表示する
    if (column.classList.contains('d-none')) {
        column.classList.remove('d-none');
    }

    // 全てのカラムを非表示にする
    for (let i = 0; i < columns.length; i++) {
        if (i !== index) {
            const otherColumn = document.getElementById(columns[i]);
            otherColumn.classList.add('d-none');
        }
    }

    // 次のカラムに進む
    index = (index + 1) % columns.length;
}, 3000);

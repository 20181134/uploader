<html>
<head>
  <meta charset="utf-8">
  <title>アップロード結果</title>
</head>
<body>
  <?php
  // $_FILES関数でアップロードされたファイルの名前を取得、アップロードされたファイルかどうかを確認
    if (is_uploaded_file($_FILES['file1']['tmp_name'])) {
      // upload ファイルの有無を確認
      if (!file_exists('upload')) {
        mkdir('upload');
      }
      // $file関数に"upload/ファイル名"を代入
      $file='upload/'.basename($_FILES['file1']['tmp_name']);
      // 一時ファイルを$fileに保存
      if (move_uploaded_file($_FILES['file1']['tmp_name'], $file)) {
        echo $file, 'のアップロードが完了しました';
      } else {
        echo 'アップロードに失敗しました';
      }
    }
    else {
        echo 'ファイルを選択してください';
      }
   ?>
</body>
</html>

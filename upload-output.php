<html>
<head>
  <meta charset="utf-8">
  <title>アップロード結果</title>
</head>
<body>
  <?php
    if (is_uploaded_file($_FILES['file1']['tmp_name'])) {
      if (!file_exists('upload')) {
        mkdir('upload');
      }
      $file='upload/'.basename($_FILES['file1']['name']);
      if (move_uploaded_file($_FILES['file1']['tmp_name'], $file)) {
        echo $file, 'のアップロードが完了しました';
        echo '<p><img src="', $file, '"</p>';
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

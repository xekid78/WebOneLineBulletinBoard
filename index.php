<!DOCTYPE html>
<html>
<head lang="ja">
  <meta charset="utf-8">
  <!-- <link rel="stylesheet" href="css/normalize.css"> -->
  <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
  <!-- <link rel="icon" href="favicon.ico"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <title>ToDoリスト</title>
</head>
<body>
  <div class="container">
  <div id="header">

  <h1>タイトル</h1>

  <h2>サブタイトル1</h2>
  <form action="index.php" method="post">
    <div class="form-group">
      <label class="control-label">ToDoリスト</label>
      <input type="text" name="content" class="form-control" placeholder="ToDoを追加"/>
    </div>
    <button type="submit" class="btn btn-primary">追加</button>
  </form>

  <h2>サブタイトル2</h2>
  <!-- DB接続 -->
  <?php require('php/pdo.php'); ?>

</body>
</html>

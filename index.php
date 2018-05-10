<!DOCTYPE html>
<html>
<head lang="ja">
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <title>ToDoリスト</title>
</head>
<body>
  <div class="container">
  <div id="header">

  <h1>paiza掲示板</h1>

  <h2>投稿フォーム</h2>
  <form action="index.php" method="post" role="form">
    <div class="form-group">
      <label class="control-label">名前</label>
      <input type="text" name="user_name" class="form-control" placeholder="名前"/>
    </div>
    <div class="form-group">
      <label class="control-label">投稿内容</label>
      <input type="text" name="content" class="form-control" placeholder="投稿内容"/>
    </div>
    <button type="submit" class="btn btn-primary">送信</button>
  </form>

  <h2>発言リスト</h2>
  <!-- DB接続 -->
  <?php require('php/pdo.php'); ?>

  <table class="table">
      <tr>
          <th>No.</th>
          <!-- <th>id</th> -->
          <th>名前</th>
          <th>投稿内容</th>
          <th>日時</th>
      </tr>
  <?php
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $i++;
      if ($i % 2 == 1) {
  ?>
      <tr bgcolor="#cccccc">
  <?php
    } else {
  ?>
      <tr>
  <?php
    }
  ?>
      <td><?php echo "$i"; ?></td>
      <td><?php echo "$row[user_name]" ?></td>
      <!-- <td><?php // echo "$row[id]"; ?></td> -->
      <td><?php echo "$row[content]"; ?></td>
      <td><?php echo "$row[updated_at]"; ?></td>
      <td>
        <form action="index.php" method="post" role="form">
          <button type="submit" class="btn btn-danger">削除</button>
          <div class="form-group">
  			<input type="hidden" name="delete_id" value="<?php echo $row[id]; ?>" class="form-control"/>
  		  </div>
        </form>
      </td>
      </tr>
  <?php
  }
  ?>
  </table>
  </div>
  </div>

</body>
</html>

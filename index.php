<?php
  // echo "lol";

  // unset($_POST['btn']);
  // int rand ( void )
  // echo mt_rand().'<br>';
  // echo mt_rand().'<br>';
  // echo mt_rand().'<br>';
 
  $result=["大吉","中吉","小吉","吉","末吉","凶","大凶","大吉","中吉","小吉","吉","末吉","凶","大凶"];
  $min=0;
  $max=count($result);
  if(!empty($_POST['btn'])){
  
      if(!empty($_POST['name'])){
        $out=  "{$_POST['name']}さんは{$result[mt_rand ($min ,$max )]}";
      }
    // echo 'POP';
    
    // $_POST['btn']=null;
  }
  // $_POST['btn']=null
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>おみくじ</title>
</head>
<body>
  <form action="" method="POST">
    <input type="text" name="name" id="" placeholder="名前を入力">
    <input type="submit" name="btn" value="開始">
  </form>
  <?php if(!empty($out)):?>
    <?php  echo $out ; echo "<br>"; ?>
    <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false" data-text=<?php $out ?>>Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
  <?php else: ?>

  <?php endif ?>
  
</body>
</html>
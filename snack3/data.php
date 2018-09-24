<?php
  $websites = [
    ['url' => 'www.twitter.com'],
    ['url' => 'www.facebook.com'],
    ['url' => 'www.amazon.com'],
    ['url' => 'www.google.com'],
    ['url' => 'www.boolean.careers'],
    ['url' => 'www.w3schools.com'],
  ];
?>
  <?php $query = $_GET['value']; ?>
  <?php foreach ($websites as $website) {; ?>
    <?php if(strpos($website['url'],$query) == true) {; ?>
      <p><?php echo($website['url']); ?></p>
      <?php $query = $_GET[''];?>
      <?php header("Refresh:2; url=index.php"); ?>
    <?php }; ?>
  <?php }; ?>

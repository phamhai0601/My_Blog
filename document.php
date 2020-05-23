<?php
  include 'autoload.php';
  $category_id = $_GET['cate'];
  if($category_id == 1){
      $breadcrumbs = "Home/<b>Docs</b>";
      $title       = "Docs";
  }elseif ($category_id == 2){
      $breadcrumbs = "Home/<b>How To</b>";
      $title       = "How To";
  }elseif ($category_id == 3){
      $breadcrumbs = "Home/<b>Source Code</b>";
      $title       = "Source Code";
  }

?>
<?php
include 'template/pagination.php';
$rRecentposts = $db->getRecentPostsCategory($category_id,$this_page_first_result,$results_per_page);
?>


<?php include 'header.php' ?>
<main id='content'>
  <header class='header'>
    <div class='container sep-after'>
      <div class='header-info'>
        <h1 class='title'><?php echo $title; ?></h1>
      </div>
    </div>
  </header>
  <div class='container list-container'>
    <ul class='list'>
      <?php foreach ($rRecentposts as $item) {?>
        <li class='item'>
          <div class='meta'>
            <span>
              <span class='screen-reader-text'>Posted on </span>
              <time ><?php echo convertTimetoDate($item['date']); ?></time>
            </span>
          </div>
          <header class='item-header'>
            <h3 class='item-title'>
            <?php if($item['isLink'] ==1){ ?>
                <a href='<?php echo $item['link']; ?>' target="_blank" style="color:blue;"><?php echo'<b>['.$item['name'].']</b>->'.$item['title']?></a>
            <?php }else {?>
              <a href='view.php?id=<?php echo $item['id']; ?>'><?php echo $item['title']?></a>
            <?php }?>
            </h3>
          </header>
        </li>
      <?php }?>
    </ul>
  </div>
  <nav id="pagination">
    <div class="page-links">
      <?php for($pages=1;$pages<=$number_of_pages;$pages++){
          if($pages == $page){?>
            <a class="page-link current" href="document.php?page=<?php echo $pages; ?>">
              <span class="screen-reader-text">Page: </span><?php echo $pages;?>
            </a>
          <?php }else {?>
            <a class="page-link" href="document.php?page=<?php echo $pages; ?>">
              <span class="screen-reader-text">Page: </span><?php echo $pages;?>
            </a>
      <?php }} ?>
        <a class="page-link next" href="https://themes.gohugo.io//theme/minimo/docs/page/2/">
          <span class="screen-reader-text">Next page</span>
          <svg class="icon" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true">
            <line x1="4" y1="12" x2="20" y2="12"></line>
            <polyline points="14 6 20 12 14 18"></polyline>
          </svg>
        </a>
      </div>
    </nav>
</main>
<div class="pagination-holder clearfix">
  <div id="compact-pagination" class="compact-theme simple-pagination">
    <ul>

    </ul>
  </div>
</div>
<?php include 'footer.php' ?>
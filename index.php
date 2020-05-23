<?php
    $breadcrumbs = "Home";
    $title       = "Home";
    include 'autoload.php';
    $searchKey = $_GET['serach'];

?>

<?php
include 'template/pagination.php';
if(isset($searchKey))
{
    $rRecentposts = $db->getRecentPostsSearch($this_page_first_result,$results_per_page,$searchKey);
}else{
    $rRecentposts = $db->getRecentPosts($this_page_first_result,$results_per_page);
}

?>
<?php include 'header.php'; ?>
      <main id='content'>

        <div class='home-widgets'>
          <div class='container sep-before'><section class='widget widget-recent_posts sep-after'>
            <header>
              <h4 class='title widget-title'>Recent Posts</h4>
            </header>
            <ul class='list'>
              <?php foreach ($rRecentposts as $item) { ?>
              <li class='item'>
                <div class='meta'>
                  <span>
                    <span class='screen-reader-text'>Posted on </span>
                    <time><?php echo convertTimetoDate($item['date']); ?></time>
                  </span>

                </div>
                <header class='item-header'>
                  <h3 class='item-title'>
                    <a href='<?php echo $item['link']; ?>' target="_blank" style="color:blue;"><?php echo'<b>['.$item['name'].']</b>->'.$item['title']?></a>
                  </h3>
                </header>
              </li>
              <?php } ?>
            </ul>
          </section>
        </div>
      </div>      
    </main>
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
<?php include 'footer.php'; ?>

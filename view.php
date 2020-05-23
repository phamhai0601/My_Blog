<?php include 'autoload.php'; ?>
<?php 
  $id = $_GET['id'];
  $view = $db->getViewOne($id);
?>

<?php include 'header.php' ?>
<main id='content'>


  <article lang='en' class='entry'>
    <header class='header entry-header'>
      <div class='container sep-after'>
        <div class='header-info'>
          <h1 class='title'><?php echo $item['title']; ?></h1>
          

        </div>
        <div class='entry-meta'>
          <span class='posted-on'><svg class='icon' viewbox='0 0 24 24' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' aria-hidden='true'>
            
            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
            <line x1="16" y1="2" x2="16" y2="6"/>
            <line x1="8" y1="2" x2="8" y2="6"/>
            <line x1="3" y1="10" x2="21" y2="10"/>
            
          </svg>
          <span class='screen-reader-text'>Posted on </span>
          <time class='entry-date'><?php echo convertTimetoDate($view['date']); ?></time>
        </span>

        <span class='byline'><svg class='icon' viewbox='0 0 24 24' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' aria-hidden='true'>
          
          <path d="M21,21V20c0-2.76-4-5-9-5s-9,2.24-9,5v1"/>
          <path d="M16,6.37A4,4,0,1,1,12.63,3,4,4,0,0,1,16,6.37Z"/>
          
        </svg>
        <span class='screen-reader-text'> by </span><a href='https://themes.gohugo.io//theme/minimo/authors/muniftanjim'>Pham Hai</a></span>
        
        <span class='reading-time'><svg class='icon' viewbox='0 0 24 24' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' aria-hidden='true'>
          
          <circle cx="12" cy="12" r="10"/>
          <polyline points="12 6 12 12 15 15"/>
          
        </svg>
        2 mins read
      </span>


    </div>


  </div>
</header>
<div class='container entry-content'>
<?php echo $view['html']; ?>
</div>
</main>
<?php include 'footer.php'; ?>


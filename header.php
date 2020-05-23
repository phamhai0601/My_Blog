<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Minimo</title>
  <link rel="stylesheet" type="text/css" href="template/customcss.css">
  <link rel="stylesheet" type="text/css" href="template/site.css">
</head>

<body class='home type-page has-sidebar'>

  <div class='site'><div id='sidebar' class='sidebar'>
  <a class='screen-reader-text' href='#main-menu'>Skip to Main Menu</a>

  <div class='container'><section class='widget widget-about sep-after'>
    <header>

      <div class='logo'>
        <a href='https://themes.gohugo.io//theme/minimo/'>
          <img src='https://themes.gohugo.io//theme/minimo/images/logo.png'>
        </a>
      </div>

      <h2 class='title site-title '>
        <a href='https://themes.gohugo.io//theme/minimo/'>
          Pham Hai
        </a>
      </h2>
      <div class='desc'>
        Faculty Of Information Technology - HOU
      </div>
    </header>

  </section>
  <section class='widget widget-search sep-after'>
    <header>
      <h4 class='title widget-title'>Search</h4>
    </header>

    <form action='index.php' id='search-form' class='search-form' method="get">
      <label>
        <span class='screen-reader-text'>Search</span>

        <input id='search-term' class='search-term' type='search' name='serach' value="<?php echo isset($searchKey)?$searchKey:""; ?>" placeholder='Search&hellip;'>
      </label></form>

    </section>
    <section class='widget widget-sidebar_menu sep-after'><nav id='sidebar-menu' class='menu sidebar-menu' aria-label='Sidebar Menu'>
        </nav>
    </section>
  </div>

          <div class='sidebar-overlay'></div>
        </div><div class='main'><nav id='main-menu' class='menu main-menu' aria-label='Main Menu'>
          <div class='container'>
            <a class='screen-reader-text' href='#content'>Skip to Content</a>

            <button id='sidebar-toggler' class='sidebar-toggler' aria-controls='sidebar'>
              <span class='screen-reader-text'>Toggle Sidebar</span>
              <span class='open'><svg class='icon' viewbox='0 0 24 24' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' aria-hidden='true'>

                <line x1="3" y1="12" x2="21" y2="12" />
                <line x1="3" y1="6" x2="21" y2="6" />
                <line x1="3" y1="18" x2="21" y2="18" />

              </svg>
            </span>
            <span class='close'><svg class='icon' viewbox='0 0 24 24' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' aria-hidden='true'>

              <line x1="18" y1="6" x2="6" y2="18" />
              <line x1="6" y1="6" x2="18" y2="18" />

            </svg>
          </span>
        </button>
        <ul>
          <?php switch($title){
                case 'Home':
                  $active_home = "current";
                  break;
                case 'Docs':
                  $active_docs = "current";
                  break;
                case 'Source Code':
                  $active_source = "current";
                  break;
              case 'How To':
                  $active_howto = "current";
          }
          ?>
          <li class='item <?php echo $active_home; ?>'>
            <a href='index.php'>Home</a>
          </li>
          <li class='item <?php echo $active_docs; ?>'>
            <a href='document.php?cate=1'>Docs</a>
          </li>
          <li class='item <?php echo $active_source; ?>'>
            <a href='document.php?cate=3'>SOURCE CODE</a>
          </li>
          <li class="item <?php echo $active_howto; ?>">
            <a href='document.php?cate=2'>HOW TO</a>
          </li>
        </ul>
      </div>
    </nav><div class='header-widgets'>
      <div class='container'><style>.widget-breadcrumbs li:after{content:'\2f '}</style>
        <section class='widget widget-breadcrumbs sep-after'>
          <nav id='breadcrumbs'>
            <ol><li><?php echo $breadcrumbs; ?></li></ol>
          </nav>
        </section></div>
      </div>

      <header id='header' class='header site-header'>
        <div class='container sep-after'>
          <div class='header-info'><h1 class='site-title title'></h1><p class='desc site-desc'>
          "What one programmer can do in one month, two programmers can do in two months." - Fred Brooks</p>
        </div>
      </div>
    </header>


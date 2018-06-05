<!-- Мастер-шаблон -->

<!DOCTYPE html>
<html lang="ru"> <!-- указывайте русский язык, а не английский -->
    
    <head> <!-- нет смысла выносить это в отдельный файл, можно тут указать заголовочную часть html -->
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	    <meta name="description" content="Спорт-прогноз" />
	    <link rel="shortcut icon" sizes="196x196" href="../assets/images/logo.png">
	    <title><?=$data["title"];?></title> <!-- так вставляются динамические данные - коорые разные для каждой страницы -->
	    
	
	    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>
	
	
	
        <link rel="stylesheet" href="../assets/css/mystyle.css">
        <link rel="stylesheet" href="../assets/css/scoreboards.css">
        <link rel="stylesheet" href="../assets/css/shell-desktop.css">
        <link rel="stylesheet" href="../assets/css/page.css">
        <link rel="stylesheet" href="../assets/css/responsive.css">




        <link rel="stylesheet" href="../libs/bower/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.css">
        <!-- build:css ../assets/css/app.min.css -->
        <link rel="stylesheet" href="../libs/bower/animate.css/animate.min.css">
        <link rel="stylesheet" href="../libs/bower/fullcalendar/dist/fullcalendar.min.css">
        <link rel="stylesheet" href="../libs/bower/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="../assets/css/bootstrap.css">
        <link rel="stylesheet" href="../assets/css/core.css">
        <link rel="stylesheet" href="../assets/css/app.css">

        <!-- endbuild -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700,400italic,700italic">
        <script src="../libs/bower/breakpoints.js/dist/breakpoints.min.js"></script>
        <script src="../assets/js/dataTables.responsive.js"></script>
        <script>
            Breakpoints();
        </script>
	
	</head>
	<body>
        <div id="block-body">
              <!--тут общий код всяких ваших блоков 
              
              // Возможно я не правильно поступил перенеся сюда код хэдера? Вы писали о том, что можно head и footer хранить в одном файле, а я почему-то перенес сюда и хэдер и левый сайдбар. Что-то видимо я наворотил...Может left_menu, app-navbar, которые являются боковыми панелями и должны присутствовать на всех старницах сайта стоит подключить через include, как вы показали в пример подключения блока id-content? 
              
              
              -->
              <!-- header -->
            <body class="menubar-left menubar-unfold menubar-light theme-primary">
<!--============= start main area -->

<!-- APP NAVBAR ==========-->
<nav id="app-navbar" class="navbar navbar-inverse navbar-fixed-top primary">
  
  <!-- navbar header -->
  <div class="navbar-header">
    <button type="button" id="menubar-toggle-btn" class="navbar-toggle visible-xs-inline-block navbar-toggle-left hamburger hamburger--collapse js-hamburger">
      <span class="sr-only">Toggle navigation</span>
      <span class="hamburger-box"><span class="hamburger-inner"></span></span>
    </button>

    <button type="button" class="navbar-toggle navbar-toggle-right collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="zmdi zmdi-hc-lg zmdi-more"></span>
    </button>

    <button type="button" class="navbar-toggle navbar-toggle-right collapsed" data-toggle="collapse" data-target="#navbar-search" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="zmdi zmdi-hc-lg zmdi-search"></span>
    </button>

    <a href="../index.php" class="navbar-brand">
      <span class="brand-icon"><i class="fa fa-gg"></i></span>
      <span class="brand-name">ScorePlanet</span>
    </a>
  </div><!-- .navbar-header -->
  
  <div class="navbar-container container-fluid">
    <div class="collapse navbar-collapse" id="app-navbar-collapse">
      <ul class="nav navbar-toolbar navbar-toolbar-left navbar-left">
        <li class="hidden-float hidden-menubar-top">
        <a href="javascript:void(0)" role="button" id="menubar-fold-btn" class="hamburger  is-active js-hamburger">
            <span class="hamburger-box"><span class="hamburger-inner"></span></span>
          </a>
        </li>
        <li>
          <h5 class="page-title hidden-menubar-top hidden-float"> Матч-центр</h5>
        </li>
        <li>
          <h5 class="page-title hidden-menubar-top hidden-float">
          <a href="/include/range.php">Турниры</a> </h5>
        </li>
        <li>
          <h5 class="page-title hidden-menubar-top hidden-float"> Правила сайта</h5>
        </li>
        <li>
          <h5 class="page-title hidden-menubar-top hidden-float"> Контакты</h5>
        </li>
        <li>
          <h5 class="page-title hidden-menubar-top hidden-float">
          <a href="/adminka.php">Админ панель</a></h5>
        </li>
      </ul>

     
            
      <ul class="nav navbar-toolbar navbar-toolbar-right navbar-right">
        <li class="nav-item dropdown hidden-float">
          <a href="javascript:void(0)" data-toggle="collapse" data-target="#navbar-search" aria-expanded="false">
            <i class="zmdi zmdi-hc-lg zmdi-search"></i>
          </a>
        </li>

        <li class="dropdown">
          <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-hc-lg zmdi-notifications"></i></a>
          <div class="media-group dropdown-menu animated flipInY">
            <a href="javascript:void(0)" class="media-group-item">
              <div class="media">
                <div class="media-left">
                  <div class="avatar avatar-xs avatar-circle">
                    <img src="../assets/images/221.jpg" alt="">
                    <i class="status status-online"></i>
                  </div>
                </div>
                <div class="media-body">
                  <h5 class="media-heading">John Doe</h5>
                  <small class="media-meta">Active now</small>
                </div>
              </div>
            </a><!-- .media-group-item -->

            <a href="javascript:void(0)" class="media-group-item">
              <div class="media">
                <div class="media-left">
                  <div class="avatar avatar-xs avatar-circle">
                    <img src="../assets/images/205.jpg" alt="">
                    <i class="status status-offline"></i>
                  </div>
                </div>
                <div class="media-body">
                  <h5 class="media-heading">John Doe</h5>
                  <small class="media-meta">2 hours ago</small>
                </div>
              </div>
            </a><!-- .media-group-item -->

            <a href="javascript:void(0)" class="media-group-item">
              <div class="media">
                <div class="media-left">
                  <div class="avatar avatar-xs avatar-circle">
                    <img src="../assets/images/207.jpg" alt="">
                    <i class="status status-away"></i>
                  </div>
                </div>
                <div class="media-body">
                  <h5 class="media-heading">Sara Smith</h5>
                  <small class="media-meta">idle 5 min ago</small>
                </div>
              </div>
            </a><!-- .media-group-item -->

            <a href="javascript:void(0)" class="media-group-item">
              <div class="media">
                <div class="media-left">
                  <div class="avatar avatar-xs avatar-circle">
                    <img src="../assets/images/211.jpg" alt="">
                    <i class="status status-away"></i>
                  </div>
                </div>
                <div class="media-body">
                  <h5 class="media-heading">Donia Dyab</h5>
                  <small class="media-meta">idle 5 min ago</small>
                </div>
              </div>
            </a><!-- .media-group-item -->
          </div>
        </li>

        <li class="dropdown">
          <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-hc-lg zmdi-settings"></i></a>
          <ul class="dropdown-menu animated flipInY">
            <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>My Profile</a></li>
            <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>Balance</a></li>
            <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-phone-msg"></i>Connection<span class="label label-primary">3</span></a></li>
            <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-info"></i>privacy</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="javascript:void(0)" class="side-panel-toggle" data-toggle="class" data-target="#side-panel" data-class="open" role="button"><i class="zmdi zmdi-hc-lg zmdi-apps"></i></a>
        </li>
      </ul>
    </div>
  </div><!-- navbar-container -->
</nav>
<!--========== END app navbar -->

<!--========== END app main -->

	<!-- APP CUSTOMIZER -->
	
	<!-- #app-customizer -->

	<!-- SIDE PANEL -->
	
	<!-- /#side-panel -->

</body>

        <div id="left-block">
            <body class="menubar-left menubar-unfold menubar-light theme-primary">
<!--============= start main area -->

<!-- APP NAVBAR ==========-->

<!--========== END app navbar -->

<!-- APP ASIDE ==========-->
<aside id="menubar" class="menubar light">
  <div class="app-user">
    <div class="media">
      <div class="media-left">
        <div class="avatar avatar-md avatar-circle">
          <a href="javascript:void(0)"><img class="img-responsive" src="../assets/images/221.jpg" alt="avatar"/></a>
        </div><!-- .avatar -->
      </div>
      <div class="media-body">
        <div class="foldable">
          <h5><a href="javascript:void(0)" class="username">Player name</a></h5>
           
          <ul>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle usertitle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <small>Expert</small>
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu animated flipInY">
                <li>
                  <a class="text-color" href="/index.html">
                    <span class="m-r-xs"><i class="fa fa-home"></i></span>
                    <span>Home</span>
                  </a>
                </li>
                <li>
                  <a class="text-color" href="profile.html">
                    <span class="m-r-xs"><i class="fa fa-user"></i></span>
                    <span>Profile</span>
                  </a>
                </li>
                <li>
                  <a class="text-color" href="settings.html">
                    <span class="m-r-xs"><i class="fa fa-gear"></i></span>
                    <span>Settings</span>
                  </a>
                </li>
                <li role="separator" class="divider"></li>
                <li>
                  <a class="text-color" href="logout.html">
                    <span class="m-r-xs"><i class="fa fa-power-off"></i></span>
                    <span>Home</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
       
      </div><!-- .media-body -->
    </div><!-- .media -->
  </div><!-- .app-user -->
            

  <div class="menubar-scroll">
    <div class="menubar-scroll-inner">
     <?php
$sql = "SELECT * FROM menu LIMIT 3;"; /* скрыты пункты меню */
$result = $mysqli->query($sql);

while($row = $result->fetch_assoc())
{
echo '
      <ul class="app-menu">
       
					
        <li class="has-submenu">
          <a href="index.html">
            <i class="menu-icon zmdi zmdi-view-dashboard zmdi-hc-lg"></i>
            
            <span class="menu-text">'.$row[name_menu].'</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
        </li>
    
      </ul><!-- .app-menu -->
                   
               ';
}
?>     
 <ul class="app-menu">
       			
        <li class="has-submenu">
          <a href="index.html">
            <img src="../assets/images/CHL.jpg">
            
            <span class="menu-text">CHL</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
        </li>
    
      </ul>        
  <hr>
    
    </div><!-- .menubar-scroll-inner -->
    
  </div><!-- .menubar-scroll -->
               
</aside>
<!--========== END app aside -->

<!-- APP MAIN ==========-->

<!--========== END app main -->

	<!-- APP CUSTOMIZER -->
	
	<!-- SIDE PANEL -->
	<div id="side-panel" class="side-panel">
		<div class="panel-header">
			<h4 class="panel-title">Friends</h4>
		</div>
		<div class="scrollable-container">
			<div class="media-group">
				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="../assets/images/221.jpg" alt="">
								<i class="status status-online"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">John Doe</h5>
							<small class="media-meta">active now</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="../assets/images/205.jpg" alt="">
								<i class="status status-online"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">John Doe</h5>
							<small class="media-meta">active now</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="../assets/images/206.jpg" alt="">
								<i class="status status-online"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Adam Kiti</h5>
							<small class="media-meta">active now</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="../assets/images/207.jpg" alt="">
								<i class="status status-away"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Jane Doe</h5>
							<small class="media-meta">away</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="../assets/images/208.jpg" alt="">
								<i class="status status-away"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Sara Adams</h5>
							<small class="media-meta">away</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="../assets/images/209.jpg" alt="">
								<i class="status status-away"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Smith Doe</h5>
							<small class="media-meta">away</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="../assets/images/219.jpg" alt="">
								<i class="status status-away"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Dana Dyab</h5>
							<small class="media-meta">away</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="../assets/images/210.jpg" alt="">
								<i class="status status-offline"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Jeffry Way</h5>
							<small class="media-meta">2 hours ago</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="../assets/images/211.jpg" alt="">
								<i class="status status-offline"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Jane Doe</h5>
							<small class="media-meta">5 hours ago</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="../assets/images/212.jpg" alt="">
								<i class="status status-offline"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Adam Khoury</h5>
							<small class="media-meta">22 minutes ago</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="../assets/images/207.jpg" alt="">
								<i class="status status-offline"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Sara Smith</h5>
							<small class="media-meta">2 days ago</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="../assets/images/211.jpg" alt="">
								<i class="status status-offline"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Donia Dyab</h5>
							<small class="media-meta">3 days ago</small>
						</div>
					</div>
				</a><!-- .media-group-item -->
			</div>
		</div><!-- .scrollable-container -->
	</div><!-- /#side-panel -->

	
            </body>

        </div>
        <div id="content">
			<?php include $page_template;?>  <!-- так вставляется шаблон контентной части страницы
			// Поясните пожалуйста что значит $page_template - это название нужной страницы? У меня есть страница в которой находится контентная часть - центральный блок с табами, в которых блоки матчи и т.д. Я дожнен подключить его так?
          
			 <?php include $content_dreamteam;?> И опять же я продублирую вопрос из почты: что должен содеражать шаблон контента: это сверстанные блоки с элементами заполненные данными или только каркас, или это не имеет значения? Я не понимаю, когда мне нужно будет изменять/наполнять контент, в каком файле это делать? Я вижу, что index.php это не один файл, а уже 3 вижу. И так с каждой страницей?
			  -->
		</div>
   
        <div id="app_customizer">
          
           <!-- Здесь я опять же видимо не правильно сделал скоприров код, нужно было подключить этот файл шаблона я так понимаю? Вы просто оставили это поле пустым, и я запутался. -->
           <!-- Настройка дизайна -->
            
	<body class="menubar-left menubar-unfold menubar-light theme-primary">



<!-- APP CUSTOMIZER -->
	<div id="app-customizer" class="app-customizer">
		<a href="javascript:void(0)" 
			class="app-customizer-toggle theme-color" 
			data-toggle="class" 
			data-class="open"
			data-active="false"
			data-target="#app-customizer">
			<i class="fa fa-gear"></i>
		</a>
		<div class="customizer-tabs">
			<!-- tabs list -->
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#menubar-customizer" aria-controls="menubar-customizer" role="tab" data-toggle="tab">Menubar</a></li>
				<li role="presentation"><a href="#navbar-customizer" aria-controls="navbar-customizer" role="tab" data-toggle="tab">Navbar</a></li>
			</ul><!-- .nav-tabs -->

			<div class="tab-content">
				<div role="tabpanel" class="tab-pane in active fade" id="menubar-customizer">
					<div class="hidden-menubar-top hidden-float">
						<div class="m-b-0">
							<label for="menubar-fold-switch">Fold Menubar</label>
							<div class="pull-right">
								<input id="menubar-fold-switch" type="checkbox" data-switchery data-size="small" />
							</div>
						</div>
						<hr class="m-h-md">
					</div>
					<div class="radio radio-default m-b-md">
						<input type="radio" id="menubar-light-theme" name="menubar-theme" data-toggle="menubar-theme" data-theme="light">
						<label for="menubar-light-theme">Light</label>
					</div>

					<div class="radio radio-inverse m-b-md">
						<input type="radio" id="menubar-dark-theme" name="menubar-theme" data-toggle="menubar-theme" data-theme="dark">
						<label for="menubar-dark-theme">Dark</label>
					</div>
				</div><!-- .tab-pane -->
				<div role="tabpanel" class="tab-pane fade" id="navbar-customizer">
					<!-- This Section is populated Automatically By javascript -->
				</div><!-- .tab-pane -->
			</div>
		</div><!-- .customizer-taps -->
		<hr class="m-0">
		<div class="customizer-reset">
			<button id="customizer-reset-btn" class="btn btn-block btn-outline btn-primary">Reset</button>
			<a href="https://themeforest.net/item/infinity-responsive-web-app-kit/16230780?ref=BootstrapTema" class="m-t-sm btn btn-block btn-danger">Buy Now</a>
		</div>
	</div><!-- #app-customizer -->
<!-- build:js ../assets/js/core.min.js -->
	<script src="./libs/bower/jquery/dist/jquery.js"></script>
	<script src="./libs/bower/jquery-ui/jquery-ui.min.js"></script>
	<script src="./libs/bower/jQuery-Storage-API/jquery.storageapi.min.js"></script>
	<script src="./libs/bower/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
	<script src="./libs/bower/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="./libs/bower/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
	<script src="./libs/bower/PACE/pace.min.js"></script>
	<!-- endbuild -->

	<!-- build:js ../assets/js/app.min.js -->
	<script src="../assets/js/library.js"></script>
	<script src="../assets/js/plugins.js"></script>
	<script src="../assets/js/app.js"></script>
	<!-- endbuild -->
	<script src="../libs/bower/moment/moment.js"></script>
	<script src="../libs/bower/fullcalendar/dist/fullcalendar.min.js"></script>
	<script src="../assets/js/fullcalendar.js"></script>
   
    </body>
   <!-- END Настройка дизайна -->
        </div>
        <div id="footer">
           <!--... тут код подвала. Опять же нет смысла выносить его в отдельный файл 
           
           //Наверное это единственное, что я понял и сделал правильно :)
           Немного задумавшись, все таки возник вопрос: это мастер шаблон, и если мне нужно изменить футер, сайдабар и хэдер, то я меняю код здесь или?
           
           
           -->
           
           <body class="menubar-left menubar-unfold menubar-light theme-primary">


<!-- APP FOOTER -->
  <div class="wrap p-t-0">
    <footer class="app-footer">
      <div class="clearfix">
        <ul class="footer-menu pull-right">
          <li><a href="javascript:void(0)">Моя Лига</a></li>
          <li><a href="javascript:void(0)">Матч-Центр</a></li>
          <li><a href="javascript:void(0)">Рейтинг<i class="fa fa-angle-up m-l-md"></i></a></li>
        </ul>
        <div class="copyright pull-left">Copyright RaThemes 2016 &copy;</div>
      </div>
    </footer>
  </div>
  <!-- /#app-footer -->
        <script src="../assets/js/logic.js"></script>
    </body>
       <!--END footer -->
        </div>
        </div>
    </body>
</html>
<!-- конец файла -->
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
</html>
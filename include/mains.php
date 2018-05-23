<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="Admin, Dashboard, Bootstrap" />
	<link rel="shortcut icon" sizes="196x196" href="../assets/images/logo.png">
	<title>Science Score - Главная страница</title>
	
	<link rel="stylesheet" href="../assets/css/mystyle.css">
	<link rel="stylesheet" href="../libs/bower/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.css">
	<!-- build:css ../assets/css/app.min.css -->
	<link rel="stylesheet" href="../libs/bower/animate.css/animate.min.css">
	<link rel="stylesheet" href="../libs/bower/fullcalendar/dist/fullcalendar.min.css">
	<link rel="stylesheet" href="../libs/bower/perfect-scrollbar/css/perfect-scrollbar.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" href="../assets/css/core.css">
	<link rel="stylesheet" href="../assets/css/app.css">
	<link rel="stylesheet" href="./assets/css/mystyle.css">
	<!-- endbuild -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
	<script src="../libs/bower/breakpoints.js/dist/breakpoints.min.js"></script>
	<script>
		Breakpoints();
	</script>
</head>
	<body class="menubar-left menubar-unfold menubar-light theme-primary">

<!-- APP NAVBAR ==========-->
<!-- APP MAIN ==========-->
<!-- APP ASIDE ==========-->

<!-- APP MAIN ==========-->
<main id="app-main" class="app-main">


<div class="wrap">
	<section class="app-content">
		<div class="row">
		<!-- (Статус тура) DOM dataTable -->
              <div class="row">
                <div class="col-md-8 col-sm-8">
				<div class="widget p-md clearfix">
					<div class="pull-left">
						<h3 class="widget-title">Dream League</h3>
						<small class="text-color">Loads / contact</small>
					</div>
					<span class="pull-right fz-lg fw-500 counter">325</span> 
                    </div>

				</div><!-- .widget -->
			  </div>
		<!-- Программа тура -->
		<div class="row">
			<div class="col-md-8">
				<div id="profile-tabs" class="nav-tabs-horizontal white m-b-lg">
					<!-- tabs list -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#line-1" aria-controls="stream" role="tab" data-toggle="tab" aria-expanded="false">Звено 1</a></li>
						<li role="presentation" class=""><a href="#line-2" aria-controls="photos" role="tab" data-toggle="tab" aria-expanded="false">Звено 2</a></li>
						<li role="presentation" class=""><a href="#line-3" aria-controls="friends" role="tab" data-toggle="tab" aria-expanded="true">Звено 3</a></li>
					</ul><!-- .nav-tabs -->

					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade p-md active in" id="line-1">
							
				  <div class="widget-body">
						<table class="table table-hover">
                           <tr align="center">
                                <td>01</td>
                                <td>11.07. 02:00</td>
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="30px" height="30px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/shl/brynas_if.png" width="44px" height="34px"><p></p><span>Брюнес</span></td>
                                <td>
                                    <img src="../assets/images/logo/shl/skelleftea_aik.png" width="44px" height="34px"><p></p><span>Шеллефтео</span></td>
                               <td class="im1">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                    
                                <td class="im1">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td class="im2">
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>-</option>
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                    
                                </td>
                                <td class="im2">
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>-</option>
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                   
                                </td>
                                
                            </tr>
                           <tr align="center">
                                <td>02</td>
                                <td>11.07. 02:00</td>
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/tb.gif" width="40px" height="40px"> <p></p><span>Тампа-Бэй</span></td>
                                <td>
                                    <img src="../assets/images/logo/sj.gif" width="40px" height="34px"><p></p><span>Сан-Хосе</span></td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>04</td>
                                <td>11.07. 02:00</td>
                                
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/nyr.gif" width="34px" height="34px"> <p></p><span>Рейнджерс</span></td>
                                <td>
                                    <img src="../assets/images/logo/chi.gif" width="34px" height="34px"> <p></p><span>Чикаго</span></td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
						     <tr align="center">
                                <td>05</td>
                                <td>11.07.18 02:00</td>
                                
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/car.gif" width="34px" height="34px"> <p><span>Каролина</span></p></td>
                                <td>
                                    <img src="../assets/images/logo/was.gif" width="34px" height="34px"> <p><span>Вашингтон</span></p></td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <tr align="center">
                                <td>01</td>
                                <td>11.07. 02:00</td>
                                
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/pit.gif" width="34px" height="34px"> <br>Питтсбург</td>
                                <td>
                                    <img src="../assets/images/logo/nas.gif" width="34px" height="34px"> <br>Нэшвилл</td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
                           <tr align="center">
                                <td>02</td>
                                <td>11.07.18 02:00</td>
                                
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/tb.gif" width="34px" height="34px"> <br>Тампа-Бэй</td>
                                <td>
                                    <img src="../assets/images/logo/sj.gif" width="34px" height="34px"> <br>Сан-Хосе</td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
                           <tr align="center">
                                <td>04</td>
                                <td>11.07.18 02:00</td>
                                
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/nyr.gif" width="34px" height="34px"> <br>Рейнджерс</td>
                                <td>
                                    <img src="../assets/images/logo/chi.gif" width="34px" height="34px"> <br>Чикаго</td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
						     <tr align="center">
                                <td>05</td>
                                <td>11.07.18 02:00</td>
                                
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/car.gif" width="34px" height="34px"><br>Каролина</td>
                                <td>
                                    <img src="../assets/images/logo/was.gif" width="34px" height="34px"> <br>Вашингтон</td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
					</table>

					</div><!-- .widget-body -->
					
						</div><!-- .tab-pane  Нужно проверить соответсвтия (скобки)--> 
						
						<div role="tabpanel" class="tab-pane fade p-md active in" id="line-2">
							
				  <div class="widget-body">
						<table class="table table-hover">
                           <tr align="center">
                                <td>01</td>
                                <td>11.07. 02:00</td>
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="30px" height="30px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/was.gif" width="44px" height="34px"><p></p><span>Вашингтон</span></td>
                                <td>
                                    <img src="../assets/images/logo/tor.gif" width="44px" height="34px"><p></p><span>Торонто</span></td>
                               <td class="im1">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                    
                                <td class="im1">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td class="im2">
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>-</option>
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                    
                                </td>
                                <td class="im2">
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>-</option>
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                   
                                </td>
                                
                            </tr>
                           <tr align="center">
                                <td>02</td>
                                <td>11.07. 02:00</td>
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/tb.gif" width="40px" height="40px"> <p></p><span>Тампа-Бэй</span></td>
                                <td>
                                    <img src="../assets/images/logo/sj.gif" width="40px" height="34px"><p></p><span>Сан-Хосе</span></td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>04</td>
                                <td>11.07. 02:00</td>
                                
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/nyr.gif" width="34px" height="34px"> <p></p><span>Рейнджерс</span></td>
                                <td>
                                    <img src="../assets/images/logo/chi.gif" width="34px" height="34px"> <p></p><span>Чикаго</span></td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
						     <tr align="center">
                                <td>05</td>
                                <td>11.07.18 02:00</td>
                                
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/car.gif" width="34px" height="34px"> <p><span>Каролина</span></p></td>
                                <td>
                                    <img src="../assets/images/logo/was.gif" width="34px" height="34px"> <p><span>Вашингтон</span></p></td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <tr align="center">
                                <td>01</td>
                                <td>11.07. 02:00</td>
                                
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/pit.gif" width="34px" height="34px"> <br>Питтсбург</td>
                                <td>
                                    <img src="../assets/images/logo/nas.gif" width="34px" height="34px"> <br>Нэшвилл</td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
                           <tr align="center">
                                <td>02</td>
                                <td>11.07.18 02:00</td>
                                
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/tb.gif" width="34px" height="34px"> <br>Тампа-Бэй</td>
                                <td>
                                    <img src="../assets/images/logo/sj.gif" width="34px" height="34px"> <br>Сан-Хосе</td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
                           <tr align="center">
                                <td>04</td>
                                <td>11.07.18 02:00</td>
                                
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/nyr.gif" width="34px" height="34px"> <br>Рейнджерс</td>
                                <td>
                                    <img src="../assets/images/logo/chi.gif" width="34px" height="34px"> <br>Чикаго</td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
						     <tr align="center">
                                <td>05</td>
                                <td>11.07.18 02:00</td>
                                
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/car.gif" width="34px" height="34px"><br>Каролина</td>
                                <td>
                                    <img src="../assets/images/logo/was.gif" width="34px" height="34px"> <br>Вашингтон</td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
					</table>

					</div><!-- .widget-body -->
					
						</div><!-- .tab-pane  Нужно проверить соответсвтия (скобки)--> 

					   <div role="tabpanel" class="tab-pane fade p-md active in" id="line-3">
							
				  <div class="widget-body">
						<table class="table table-hover">
                           <tr align="center">
                                <td>01</td>
                                <td>11.07. 02:00</td>
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="30px" height="30px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/shl/malmo_redhawks.png" width="44px" height="34px"><p></p><span>Мальмо</span></td>
                                <td>
                                    <img src="../assets/images/logo/shl/frolunda_indians-2.png" width="44px" height="34px"><p></p><span>Фрелунда</span></td>
                               <td class="im1">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                    
                                <td class="im1">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td class="im2">
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>-</option>
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                    
                                </td>
                                <td class="im2">
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>-</option>
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                   
                                </td>
                                
                            </tr>
                           <tr align="center">
                                <td>02</td>
                                <td>11.07. 02:00</td>
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/tb.gif" width="40px" height="40px"> <p></p><span>Тампа-Бэй</span></td>
                                <td>
                                    <img src="../assets/images/logo/sj.gif" width="40px" height="34px"><p></p><span>Сан-Хосе</span></td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>04</td>
                                <td>11.07. 02:00</td>
                                
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/nyr.gif" width="34px" height="34px"> <p></p><span>Рейнджерс</span></td>
                                <td>
                                    <img src="../assets/images/logo/chi.gif" width="34px" height="34px"> <p></p><span>Чикаго</span></td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
						     <tr align="center">
                                <td>05</td>
                                <td>11.07.18 02:00</td>
                                
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/car.gif" width="34px" height="34px"> <p><span>Каролина</span></p></td>
                                <td>
                                    <img src="../assets/images/logo/was.gif" width="34px" height="34px"> <p><span>Вашингтон</span></p></td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <tr align="center">
                                <td>01</td>
                                <td>11.07. 02:00</td>
                                
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/pit.gif" width="34px" height="34px"> <br>Питтсбург</td>
                                <td>
                                    <img src="../assets/images/logo/nas.gif" width="34px" height="34px"> <br>Нэшвилл</td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
                           <tr align="center">
                                <td>02</td>
                                <td>11.07.18 02:00</td>
                                
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/tb.gif" width="34px" height="34px"> <br>Тампа-Бэй</td>
                                <td>
                                    <img src="../assets/images/logo/sj.gif" width="34px" height="34px"> <br>Сан-Хосе</td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
                           <tr align="center">
                                <td>04</td>
                                <td>11.07.18 02:00</td>
                                
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/nyr.gif" width="34px" height="34px"> <br>Рейнджерс</td>
                                <td>
                                    <img src="../assets/images/logo/chi.gif" width="34px" height="34px"> <br>Чикаго</td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
						     <tr align="center">
                                <td>05</td>
                                <td>11.07.18 02:00</td>
                                
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/car.gif" width="34px" height="34px"><br>Каролина</td>
                                <td>
                                    <img src="../assets/images/logo/was.gif" width="34px" height="34px"> <br>Вашингтон</td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
					</table>

					</div><!-- .widget-body -->
					
						</div><!-- .tab-pane  Нужно проверить соответсвтия (скобки)--> 

                        <div role="tabpanel" class="tab-pane fade p-md active in" id="line-2">
							
				  <div class="widget-body">
						<table class="table table-hover">
                           <tr align="center">
                                <td>01</td>
                                <td>11.07. 02:00</td>
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="30px" height="30px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/was.gif" width="44px" height="34px"><p></p><span>Вашингтон</span></td>
                                <td>
                                    <img src="../assets/images/logo/tor.gif" width="44px" height="34px"><p></p><span>Торонто</span></td>
                               <td class="im1">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                    
                                <td class="im1">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td class="im2">
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>-</option>
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                    
                                </td>
                                <td class="im2">
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>-</option>
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                   
                                </td>
                                
                            </tr>
                           <tr align="center">
                                <td>02</td>
                                <td>11.07. 02:00</td>
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/tb.gif" width="40px" height="40px"> <p></p><span>Тампа-Бэй</span></td>
                                <td>
                                    <img src="../assets/images/logo/sj.gif" width="40px" height="34px"><p></p><span>Сан-Хосе</span></td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>04</td>
                                <td>11.07. 02:00</td>
                                
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/nyr.gif" width="34px" height="34px"> <p></p><span>Рейнджерс</span></td>
                                <td>
                                    <img src="../assets/images/logo/chi.gif" width="34px" height="34px"> <p></p><span>Чикаго</span></td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
						     <tr align="center">
                                <td>05</td>
                                <td>11.07.18 02:00</td>
                                
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/car.gif" width="34px" height="34px"> <p><span>Каролина</span></p></td>
                                <td>
                                    <img src="../assets/images/logo/was.gif" width="34px" height="34px"> <p><span>Вашингтон</span></p></td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <tr align="center">
                                <td>01</td>
                                <td>11.07. 02:00</td>
                                
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/pit.gif" width="34px" height="34px"> <br>Питтсбург</td>
                                <td>
                                    <img src="../assets/images/logo/nas.gif" width="34px" height="34px"> <br>Нэшвилл</td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
                           <tr align="center">
                                <td>02</td>
                                <td>11.07.18 02:00</td>
                                
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/tb.gif" width="34px" height="34px"> <br>Тампа-Бэй</td>
                                <td>
                                    <img src="../assets/images/logo/sj.gif" width="34px" height="34px"> <br>Сан-Хосе</td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
                           <tr align="center">
                                <td>04</td>
                                <td>11.07.18 02:00</td>
                                
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/nyr.gif" width="34px" height="34px"> <br>Рейнджерс</td>
                                <td>
                                    <img src="../assets/images/logo/chi.gif" width="34px" height="34px"> <br>Чикаго</td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
						     <tr align="center">
                                <td>05</td>
                                <td>11.07.18 02:00</td>
                                
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/car.gif" width="34px" height="34px"><br>Каролина</td>
                                <td>
                                    <img src="../assets/images/logo/was.gif" width="34px" height="34px"> <br>Вашингтон</td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
					</table>

					</div><!-- .widget-body -->
					
						</div><!-- .tab-pane  Нужно проверить соответсвтия (скобки)--> 

						
					</div><!-- .tab-content -->
					</div><!-- #profile-components -->
					</div>
				
		
		
			<!-- END Табы -->
			
			<div class="col-md-4">
				<div class="widget countries-widget">
				  <header class="widget-header">
				    <h4 class="widget-title">Моя лига</h4>
				  </header><!-- .widget-header -->
				  <hr class="widget-separator">
				  <div class="widget-body">
						<div class="list-group m-0">
							<a href="#" class="list-group-item clearfix">
								<img src="../assets/images/logo/car.gif" width="34px" height="34px">
								<div class="pull-right">Вр<span></span></div>
							</a><!-- .list-group-item -->
							<a href="#" class="list-group-item clearfix">
								<span class="pull-left avatar avatar-circle">
									<img src="../assets/images/logo/tb.gif" alt="">
								</span>
								<span class="pull-left fw-500 fz-md">Тампа-Бэй - Сан-Хосе </span>
								<div class="pull-right">Зщ<span></span></div>
							</a><!-- .list-group-item -->
							<a href="#" class="list-group-item clearfix">
								<span class="pull-left avatar avatar-circle">
									<img src="../assets/images/flags/Egypt.png" alt="">
								</span>
								<span class="pull-left fw-500 fz-md">Каролина - Вашингтон </span>
								<div class="pull-right">Нп<span></span></div>
							</a><!-- .list-group-item -->
							<a href="#" class="list-group-item clearfix">
								<span class="pull-left avatar avatar-circle">
									<img src="../assets/images/flags/Egypt.png" alt="">
								</span>
								<span class="pull-left fw-500 fz-md">Каролина - Вашингтон </span>
								<div class="pull-right">Нп<span></span></div>
							</a><!-- .list-group-item -->
							<a href="#" class="list-group-item clearfix">
								<span class="pull-left avatar avatar-circle">
									<img src="../assets/images/flags/Egypt.png" alt="">
								</span>
								<span class="pull-left fw-500 fz-md">Питтсбург - Нэшвилл </span>
								<div class="pull-right">Вр<span></span></div>
							</a><!-- .list-group-item -->
							<a href="#" class="list-group-item clearfix">
								<span class="pull-left avatar avatar-circle">
									<img src="../assets/images/flags/Egypt.png" alt="">
								</span>
								<span class="pull-left fw-500 fz-md">Питтсбург - Нэшвилл </span>
								<div class="pull-right">Вр<span></span></div>
							</a><!-- .list-group-item -->
							<a href="#" class="list-group-item clearfix">
								<span class="pull-left avatar avatar-circle">
									<img src="../assets/images/flags/Egypt.png" alt="">
								</span>
								<span class="pull-left fw-500 fz-md">Каролина - Вашингтон </span>
								<div class="pull-right">Нп<span></span></div>
							</a><!-- .list-group-item -->
							<a href="#" class="list-group-item clearfix">
								<span class="pull-left avatar avatar-circle">
									<img src="../assets/images/flags/Egypt.png" alt="">
								</span>
								<span class="pull-left fw-500 fz-md">Каролина - Вашингтон </span>
								<div class="pull-right">Нп<span></span></div>
							</a><!-- .list-group-item -->
				  	</div><!-- .list-group -->
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div><!-- END column -->

		
			
			<div class="col-md-8">
			
				<div class="widget countries-widget">
				  <header class="widget-header">
				    <h4 class="widget-title">Программа тура</h4>
				  </header><!-- .widget-header -->
				  <hr class="widget-separator">
				  <div class="widget-body">
						<table class="table table-hover">
                        
                           <tr align="center">
                                <td>01</td>
                                <td>11.07. 02:00</td>
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/pit.gif" width="34px" height="34px"> <br>Питтсбург</td>
                                <td>
                                    <img src="../assets/images/logo/nas.gif" width="34px" height="34px"> <br>Нэшвилл</td>
                               <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>-</option>
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>-</option>
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
                           <tr align="center">
                                <td>02</td>
                                <td>11.07.18 02:00</td>
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/tb.gif" width="34px" height="34px"> <br>Тампа-Бэй</td>
                                <td>
                                    <img src="../assets/images/logo/sj.gif" width="34px" height="34px"><br>Сан-Хосе</td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
                            <tr align="center">
                                <td>04</td>
                                <td>11.07.18 02:00</td>
                                
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/nyr.gif" width="34px" height="34px"> <br>Рейнджерс</td>
                                <td>
                                    <img src="../assets/images/logo/chi.gif" width="34px" height="34px"> <br>Чикаго</td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
						     <tr align="center">
                                <td>05</td>
                                <td>11.07.18 02:00</td>
                                
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/car.gif" width="34px" height="34px"> <br>Каролина</td>
                                <td>
                                    <img src="../assets/images/logo/was.gif" width="34px" height="34px"> <br>Вашингтон</td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <tr align="center">
                                <td>01</td>
                                <td>11.07. 02:00</td>
                                
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/pit.gif" width="34px" height="34px"> <br>Питтсбург</td>
                                <td>
                                    <img src="../assets/images/logo/nas.gif" width="34px" height="34px"> <br>Нэшвилл</td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
                           <tr align="center">
                                <td>02</td>
                                <td>11.07.18 02:00</td>
                                
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/tb.gif" width="34px" height="34px"> <br>Тампа-Бэй</td>
                                <td>
                                    <img src="../assets/images/logo/sj.gif" width="34px" height="34px"> <br>Сан-Хосе</td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
                           <tr align="center">
                                <td>04</td>
                                <td>11.07.18 02:00</td>
                                
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/nyr.gif" width="34px" height="34px"> <br>Рейнджерс</td>
                                <td>
                                    <img src="../assets/images/logo/chi.gif" width="34px" height="34px"> <br>Чикаго</td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
						     <tr align="center">
                                <td>05</td>
                                <td>11.07.18 02:00</td>
                                
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="34px" height="34px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/car.gif" width="34px" height="34px"><br>Каролина</td>
                                <td>
                                    <img src="../assets/images/logo/was.gif" width="34px" height="34px"> <br>Вашингтон</td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>НП</option>
                                      </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1">
                                        <option>Тот</option>
                                        <option>Бон</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
					</table>

					</div><!-- .widget-body -->
					
			</div><!-- END column -->
            </div>
        </div>
        </section>
	</div>		
</main>
<!--========== END app main -->

								
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
</html>
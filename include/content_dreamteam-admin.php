
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
                <div class="col-md-12 col-sm-12">
				<div class="widget p-md clearfix">
					<div class="pull-left">

		<h3 class="widget-title"> League Dream</h3>
                       
						<small class="text-color">1/5</small>
						<small class="text-color">Участники  14</small>
						<a href="../include/admin_res.php">ввод результатов</a>
						
					</div>
					<span class="pull-right fz-lg fw-500 counter">10-й тур</span> 
                    </div>
				</div><!-- .widget -->
				
			  </div>
			  
		<!-- Программа тура -->
		
		<div class="row">
			<div class="col-md-8">
				<div class="widget">
					<div class="m-b-lg nav-tabs-horizontal">
						<!-- tabs list -->
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#tab-1" aria-controls="tab-3" role="tab" data-toggle="tab">Prog Tour</a></li>
							<li role="presentation"><a href="#tab-2" aria-controls="tab-1" role="tab" data-toggle="tab">Match-center</a></li>
							<li role="presentation"><a href="#tab-3"  aria-controls="tab-2" role="tab" data-toggle="tab">Прогнозы на счёт</a></li>
						</ul><!-- .nav-tabs -->

						<!-- Tab panels 1 -->
						<div class="tab-content p-md">
							<div role="tabpanel" class="tab-pane in active fade" id="tab-1">
								
								<div class="row">
			<div class="col-md-12">
				<div class="widget">
					
						
<table class="table table-hover">
<tr align="center">
    <td>1</td>

    <td>15.04.2018<br>19:00</td>
    <td>
        <img src="../assets/images/logo/nhl-vector-logo.png" width="30px" height="30px">
    </td>
    <td>
        <img src="../assets/images/logo/shl/malmo_redhawks.png" width="44px" height="34px">
        <p></p><span>Мальмо</span></td>
    <td>
        <img src="../assets/images/logo/shl/frolunda_indians-2.png" width="44px" height="34px">
        <p></p><span>Фрелунда</span></td>
    <td class="im1">
        <div class="form-group">
            <input id="iScore1">
        </div>
    </td>

        <td class="im1">
            <div class="form-group">
                <input id="iScore2">
            </div>
        </td>
        <td class="im2">
            <button onclick="onClick()">calc</button>
            <div id="res"></div>

        </td>
        <td class="im2">
            <button onclick="runTests()">test</button>
        </td>
</tr>

</table>
                    <p>
<br>
         </div>
          </div>
          </div>
								    
								    <table class="table table-hover">
								        <tbody id="left">
<?php
$sql = "SELECT * FROM calendar_hockey_chemp_world WHERE id_match BETWEEN 1 and 5;";
$result = $mysqli->query($sql);

while($row = $result->fetch_assoc())
{
echo '

                           <tr align="center" >
                                <td class="data-s" >'.$row[data_match].'<br><span class="time">'.$row[time_match].'</span></td>
                                <td width="45">
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="38px" height="38px" class="center-img"> 
                                </td>
                                
                                    <td class="liga_m">'.$row[liga_match].'</td>
                                 
                                <td class="teams">
                                    
                                    <img src="../assets/images/logo/shl/malmo_redhawks.png" width="42px" height="42px">
                                    <p><span>'.$row[team_1].'</span></p>
                                </td>
                                    
                                    <td id="vs""><b>VS</b></td>
                                    
                                <td class="teams">
                                    <img src="../assets/images/logo/shl/frolunda_indians-2.png" width="42px" height="42px">
                                    <p><span>'.$row[team_2].'</span></td></p>
                               
                                
<td class="add">
    <div>
        <button class="btn">

  
  <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
</button>



    </div>
</td>
</tr>
            
                             ';
}
?>
 </tbody>
    </table>
                  

    </div>
    <!-- END tab-pane 1 -->
    
    <!-- tab-pane 1 -->

    <div role="tabpanel" class="tab-pane fade" id="tab-2">
        <table class="table table-hover">
            <?php
$sql = "SELECT * FROM calendar_hockey_chemp_world WHERE id_match BETWEEN 9 and 16;"; /*вывод диапазона строк во вкладках*/
$result = $mysqli->query($sql);

while($row = $result->fetch_assoc())
{
echo '
                           <tr align="center">
                                <td>'.$row[number_match].'</td>
                                <td>'.$row[data_match].'<br>'.$row[time_match].'</td>
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="30px" height="30px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/shl/malmo_redhawks.png" width="44px" height="34px"><p></p><span>'.$row[team_1].'</span></td>
                                <td>
                                    <img src="../assets/images/logo/shl/frolunda_indians-2.png" width="44px" height="34px"><p></p><span>'.$row[team_2].'</span></td>
                               
                                </td>
                                <td>
                                    

                                    
                                </td>
                                
                            </tr>
    
                           
                             ';
}
?>
        </table>
    </div>
   <!-- END tab-pane 2 -->

    <div role="tabpanel" class="tab-pane fade" id="tab-3">
        <table class="table table-hover">
								        <tbody id="left">
<?php
$sql = "SELECT * FROM calendar_hockey_chemp_world WHERE id_match BETWEEN 1 and 5;";
$result = $mysqli->query($sql);

while($row = $result->fetch_assoc())
{
echo '
                           <tr align="center">
                                <td>'.$row[number_match].'</td>
                                <td>'.$row[data_match].'<br>'.$row[time_match].'</td>
                                <td>
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="30px" height="30px"> 
                                </td>
                                <td>
                                    <img src="../assets/images/logo/shl/malmo_redhawks.png" width="44px" height="34px">
                                    <p><span>'.$row[team_1].'</span></p>
                                <td>
                                    <img src="../assets/images/logo/shl/frolunda_indians-2.png" width="44px" height="34px">
                                       <p><span>'.$row[team_2].'</span></p>
                                       <!-- ввод прогноза -->
                               <td class="im1">
        <div class="form-group">
            <input id="iScore1">
        </div>
    </td>

        <td class="im1">
            <div class="form-group">
                <input id="iScore2">
            </div>
        </td>
        <td class="im2">
            <button onclick="onClick()">calc</button>
            <div id="res"></div>

        </td>
        <td class="im2">
            <button onclick="runTests()">test</button>
        </td>
                            </tr>
    
                           
                             ';
}
?>
        </table>
        
    </div>
    
    <!-- .tab-pane  -->
    </div>
    <!-- .tab-content  -->
    </div>
    <!-- .nav-tabs-horizontal -->
    </div>
    <!-- .widget -->
    </div>
    <!-- END column -->


    <!-- END Табы -->
			
			<!-- My Dreamteam-->
			
			<div class="col-md-4">
				<div class="widget countries-widget">
				  <header class="widget-header">
				    <h4 class="widget-title" align="center">My Dreamteam</h4>
				  </header><!-- .widget-header -->
				  <hr class="widget-separator">
				  <div class="widget-body">
				  
				  <table class="table table-hover">
				      <tbody id="right">
				  
				  
<?php
$sql = "SELECT * FROM calendar_hockey_chemp_world WHERE id_match BETWEEN 1 and 5;";
$result = $mysqli->query($sql);

while($row = $result->fetch_assoc())
{
echo '



                           <tr>
    <td>
        <img src="../assets/images/logo/shl/malmo_redhawks.png" width="42px" height="42px" id="logo-1">
        
    </td>



    <td class="data-s">
        <span class="data-s">'.$row[data_match].'</span>
        <p><span class="time">'.$row[time_match].'</span></p>

    </td>


    <td>
        <img src="../assets/images/logo/shl/frolunda_indians-2.png" width="42px" height="42px" id="logo-2">
    </td>
    
    <td>
    <div class="form-group">
        <select id="form-controls" id="sel1">
                                        <option>-</option>
                                        <option>Вр</option>
                                        <option>Зщ</option>
                                        <option>Нп</option>
                                      </select>
    </div>
    
    <!-- Кнопка "удалить"-->
<td id="im3">

<i class="glyphicon glyphicon-remove" aria-hidden="true"></i> 
                     

</td>
</tr>
 
    
                          
                             ';
}
?>
</tbody> 
    </table>
               
					
					</div><!-- .widget-body -->
				</div><!-- .widget -->
				
				<a href="#" class="buton-save">Сохранить</a>
			
			</div><!-- END column -->
			<!-- END My Dreamteam-->
				
				
				

		
			
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
					</table>
					</div><!-- .widget-body -->
			</div><!-- END column -->
            </div>
        </div>
        </div>
        </section>
	</div>		
</main>
<!--========== END app main -->

								
  
                 <script src="../assets/js/functions_score.js"></script>
					

</body>

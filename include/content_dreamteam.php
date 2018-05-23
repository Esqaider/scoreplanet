
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

		<h3 class="widget-title"> League Dream</h3>
                       
						<small class="text-color">1/5</small>
						<small class="text-color">Участники  14</small>
						<a href="/adminka.php">ввод результатов</a>
						
						
					</div>
					<span class="pull-right fz-lg fw-500 counter">10-й тур</span> 
                    </div>
				</div><!-- .widget -->
				
				
				<div class="col-md-4 col-sm-4">
				<div class="widget p-md clearfix">
					<div class="pull-left">

		<h3 class="widget-title"> Status</h3>
                       
						<small class="text-color">1/5</small>
						<small class="text-color">Участники  14</small>
						<a href="/adminka.php">ввод результатов</a>
						
						
					</div>
					<span class="pull-right fz-lg fw-500 counter">10-й тур</span> 
                    </div>
				</div>
			  </div>
			  
			  
		<!-- Программа тура -->
		
		<div class="row">
			<div class="col-md-8">
				<div class="widget">
					<div class="m-b-lg nav-tabs-horizontal">
						<!-- tabs list -->
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#tab-1" aria-controls="tab-3" role="tab" data-toggle="tab">Расписание</a></li>
							<li role="presentation"><a href="#tab-2" aria-controls="tab-1" role="tab" data-toggle="tab">Match-center</a></li>
							<li role="presentation"><a href="#tab-3"  aria-controls="tab-2" role="tab" data-toggle="tab">Прогнозы на счёт</a></li>
						</ul><!-- .nav-tabs -->

						<!-- Tab panels 1 -->
						<div class="tab-content p-md">
							<div role="tabpanel" class="tab-pane in active fade" id="tab-1">
								
								
								    
								    <table class="table table-hover">
								        <tbody id="left">

<?php


try {
    $dbh = new PDO("sqlite:../data/sport.db"); //ligashl.db - путь от корня сайта к базе 
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch(PDOException $e) { 
    echo "Нет соединения с базой данных"; 
}

$sql = "SELECT * FROM calendar WHERE id BETWEEN 1 and 3;"; //выбрать все записи из таблицы calendar, гед id между 1 и 5
$res = $dbh->query($sql);

  if ($res){
        while (($row = $res->fetch(PDO::FETCH_ASSOC) ) !== false) {
                $result[] = $row; //выввести результат в row
            //вывод данных на страницу
            
            echo '
            
            <p>'.$row[id].'</p>
            <p>'.$row[date_match].'</p>
            <p>'.$row[time_match].'</p>
            <p>'.$row[liga_match].'</p>
            <p>'.$row[team_1].'</p>
            <p>'.$row[team_2].'</p>
            
           ';
        };
      
 };

?>
<?php
                                            
echo '

                           <tr align="center" >
                                <td class="data-s" >'.$row[data].'<br><span class="time">'.$row[time_match].'</span></td>
                                <td width="45">
                                   <img src="../assets/images/logo/nhl-vector-logo.png" width="38px" height="38px" class="center-img"> 
                                </td>
                                
                                    <td class="liga_m">'.$row[liga_match].'</td>
                                 
                                <td class="teams">
                                    
                                    <img src="../assets/images/logo/shl/malmo_redhawks.png" width="42px" height="42px">
                                    <p><span>'.$row[name_team_1].'</span></p>
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
</tr>'
       
        };
 };

?>

 </tbody>
                                    </table>

                  

                                </div>
    <!-- END tab-pane 1 -->
    
    <!-- tab-pane 2 -->

    <div role="tabpanel" class="tab-pane fade" id="tab-2">
<!-- DOM dataTable -->
			
					<div class="widget-body">
						<div class="table-responsive">
							<table id="table_range" class="table-hover" class="default-datatable" data-plugin="DataTable"  cellspacing="0" width="100%" >
								<thead>
									<tr>
									    <th></th>
										<th>Name</th>
										<th>Points</th>
										<th>GP</th>
										<th>YP</th>
										<th>RP</th>
										<th>Slip-up</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
									    <th></th>
										<th>Name</th>
										<th>Points</th>
										<th>GP</th>
										<th>YP</th>
										<th>RP</th>
										<th>Slip-up</th>
									</tr>
								</tfoot>
								<tbody >
									<tr>
									    <td>1</td>
										<td>Player</td>
										<td>102</td>
										<td>5</td>
										<td>15</td>
										<td>25</td>
										<td>45</td>
									</tr>
									<tr>
									    <td>2</td>
										<td>Player</td>
										<td>102</td>
										<td>5</td>
										<td>15</td>
										<td>25</td>
										<td>45</td>
									</tr>
									<tr>
										<td>3</td>
										<td>Player</td>
										<td>102</td>
										<td>5</td>
										<td>15</td>
										<td>25</td>
										<td>45</td>
									</tr>
									<tr>
										<td>4</td>
										<td>Player</td>
										<td>102</td>
										<td>5</td>
										<td>15</td>
										<td>25</td>
										<td>45</td>
									</tr>
									<tr>
										<td>5</td>
										<td>Player</td>
										<td>102</td>
										<td>5</td>
										<td>15</td>
										<td>25</td>
										<td>45</td>
									</tr>
									<tr>
										<td>6</td>
										<td>Player</td>
										<td>102</td>
										<td>5</td>
										<td>15</td>
										<td>25</td>
										<td>45</td>
									</tr>
									<tr>
										<td>7</td>
										<td>Player</td>
										<td>102</td>
										<td>5</td>
										<td>15</td>
										<td>25</td>
										<td>45</td>
									</tr>
									<tr>
										<td>8</td>
										<td>Player</td>
										<td>102</td>
										<td>5</td>
										<td>15</td>
										<td>25</td>
										<td>45</td>
									</tr>
									<tr>
										<td>9</td>
										<td>Player</td>
										<td>102</td>
										<td>5</td>
										<td>15</td>
										<td>25</td>
										<td>45</td>
									</tr>
									<tr>
										<td>10</td>
										<td>Player</td>
										<td>102</td>
										<td>5</td>
										<td>15</td>
										<td>25</td>
										<td>45</td>
									</tr>
									<tr>
										<td>11</td>
										<td>Player</td>
										<td>102</td>
										<td>5</td>
										<td>15</td>
										<td>25</td>
										<td>45</td>
									</tr>
									<tr>
										<td>11</td>
										<td>Player</td>
										<td>102</td>
										<td>5</td>
										<td>15</td>
										<td>25</td>
										<td>45</td>
									</tr>
									<tr>
										<td>11</td>
										<td>Player</td>
										<td>102</td>
										<td>5</td>
										<td>15</td>
										<td>25</td>
										<td>45</td>
									</tr>
									<tr>
										<td>11</td>
										<td>Player</td>
										<td>102</td>
										<td>5</td>
										<td>15</td>
										<td>25</td>
										<td>45</td>
									</tr>
									<tr>
										<td>11</td>
										<td>Player</td>
										<td>102</td>
										<td>5</td>
										<td>15</td>
										<td>25</td>
										<td>45</td>
									</tr>
									<tr>
										<td>11</td>
										<td>Player</td>
										<td>102</td>
										<td>5</td>
										<td>15</td>
										<td>25</td>
										<td>45</td>
									</tr>
									<tr>
										<td>11</td>
										<td>Player</td>
										<td>102</td>
										<td>5</td>
										<td>15</td>
										<td>25</td>
										<td>45</td>
									</tr>
									<tr>
										<td>11</td>
										<td>Player</td>
										<td>102</td>
										<td>5</td>
										<td>15</td>
										<td>25</td>
										<td>45</td>
									</tr>
									<tr>
										<td>11</td>
										<td>Player</td>
										<td>102</td>
										<td>5</td>
										<td>15</td>
										<td>25</td>
										<td>45</td>
									</tr>
									<tr>
										<td>11</td>
										<td>Player</td>
										<td>102</td>
										<td>5</td>
										<td>15</td>
										<td>25</td>
										<td>45</td>
									</tr>
									<tr>
										<td>11</td>
										<td>Player</td>
										<td>102</td>
										<td>5</td>
										<td>15</td>
										<td>25</td>
										<td>45</td>
									</tr>
									<tr>
										<td>11</td>
										<td>Player</td>
										<td>102</td>
										<td>5</td>
										<td>15</td>
										<td>25</td>
										<td>45</td>
									</tr>
									<tr>
										<td>11</td>
										<td>Player</td>
										<td>102</td>
										<td>5</td>
										<td>15</td>
										<td>25</td>
										<td>45</td>
									</tr>
									<tr>
										<td>11</td>
										<td>Player</td>
										<td>102</td>
										<td>5</td>
										<td>15</td>
										<td>25</td>
										<td>45</td>
									</tr>
									<tr>
										<td>11</td>
										<td>Player 1</td>
										<td>102</td>
										<td>5</td>
										<td>15</td>
										<td>25</td>
										<td>45</td>
									</tr>
									<tr>
										<td>11</td>
										<td>Player 2</td>
										<td>100</td>
										<td>5</td>
										<td>15</td>
										<td>25</td>
										<td>45</td>
									</tr>
									<tr>
										<td>11</td>
										<td>Player 3</td>
										<td>102</td>
										<td>5</td>
										<td>15</td>
										<td>25</td>
										<td>45</td>
									</tr>
									<tr>
										<td>11</td>
										<td>Player</td>
										<td>18</td>
										<td>5</td>
										<td>15</td>
										<td>25</td>
										<td>45</td>
									</tr>
								</tbody>
							</table>
							
                            </div>
       
					    </div><!-- .widget-body -->
				
			
			

   
   
   
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
			
			 <!-- Line-up -->
			 		<div id="right_block">
			             
    <?php
        include ("{$_SERVER['DOCUMENT_ROOT']}/include/right_block.php");
    ?>
              
                      
                    </div>
			 
			 
			 <!-- END Line-up -->
				
				
		
        </div>
        </div>
        </section>
	</div>		
</main>
<!--========== END app main -->

	
                 <script>
  $(function(){
    $("#example").dataTable();
  })
  </script>
					

</body>

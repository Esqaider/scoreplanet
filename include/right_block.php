  <body class="menubar-left menubar-unfold menubar-light theme-primary">
       
        <!-- line-up-->
			
			<div class="col-md-4">
				<div class="widget countries-widget">
				  <header class="widget-header">
				    <h4 class="widget-title" align="center">Line-up</h4>
				  </header><!-- .widget-header -->
				  
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
            <p><span class="team-name">МАЛ</span></p>
    </td>


    <td class="data-s">
        <span class="data-s">'.$row[data_match].'</span>
        <p><span class="time">'.$row[time_match].'</span></p>

    </td>


    <td>
          
        <img src="../assets/images/logo/shl/frolunda_indians-2.png" width="42px" height="42px" id="logo-2">
          <p><span class="team-name">ФРЕ</span></p>
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
        
       
			    </body>
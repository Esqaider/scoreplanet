<?php
    abstract class Acore {
        
        
        protected $db;
        
        public function __construct () {
            $this->db = mysql_connect(HOST,USER,PASSWORD);
            if(!$this->db) {
                exit('Ошибка соединения с базой данных'.mysql_error());
            }
            if(!mysql_select_db(DB,$this->db)) {
                exit('Нет такой базы данных'.mysql_error());
            }
            mysql_query("SET NAMES 'UTF8'");
            
        }
        
       protected function get_header() {
           /*Подключение главных rjvgjytynjd*/
           include ("{$_SERVER['DOCUMENT_ROOT']}/pages/header.php");
           include ("{$_SERVER['DOCUMENT_ROOT']}/pages/left_menu.php");
           /*include ("{$_SERVER['DOCUMENT_ROOT']}/pages/mains.php");*/
           include ("{$_SERVER['DOCUMENT_ROOT']}/pages/footer.php");
           include ("{$_SERVER['DOCUMENT_ROOT']}/pages/app-customizer.php");
            include ("{$_SERVER['DOCUMENT_ROOT']}/pages/content.php");
           
           
       } 
        
        protected function get_left_menu() {
            $query = "SELECT id_menu,name_menu FROM menu";
            
            $result = mysql_query($query);
            if(!$result) {
                exit (mysql_error());
                
            }
            $row = array();
            echo '   ';
            for($i = 0;$i < mysql_num_rows($result); $i++) {
                $row = mysql_fetch_array($result, MYSQL_ASSOC);
                printf("<div class='menu-text'>
                  <a href='?option=id_menu=%s'>%s</a>
                      </div>",$row['id_menu'],$row['name_menu']);
            }
            echo "</div>";
                
       } 
        
        protected function get_topnav() {
            $row = $this->topnav_array();
            
            echo '<div> id="mainarea">
                  <div class="heading">';
            
            echo '<div class="toplinks" style="padding-left:30px;">
                <a href="?option=main">Главная</a></div>
                <div class="sap2"::</div>';
            $i = 1;
            foreach($row as $item) {
                printf("<div class='toplinks'><a href='?option=nav?id_menu=%s'>%s</a></div>
                ",$item['id_menu'],$item['name_menu']);
                
                if($i != count($row)) {
                    echo '<div class="sap2"::</div>';
                    
                }
                $i++;
           
            } 
            echo "</div>";
        }
        
        protected function topnav_array() {
            $query = "SELECT id_menu,name_menu FROM menu";
            
            $result = mysql_query($query);
            if(!$result) {
                exit (mysql_error());
            }
       
            $row = array();
          
            for($i = 0;$i < mysql_num_rows($result); $i++) {
                $row[] = mysql_fetch_array($result, MYSQL_ASSOC);  
            }
            return $row;
        }
        
        protected function get_footer () {
             $row = $this->topnav_array();
            
            echo "<aside id='menubar'>";
            echo '<div class="menubar-scroll" style="padding-left:127px;">
                <a href="?option=main">Главная</a></div>
                <div class="sap2"::</div>';
            $i = 1;
            foreach($row as $item) {
                printf("<div class='menu-text'><a href='?option=nav?id_menu=%s'>%s</a></div>
                ",$item['id_menu'],$item['name_menu']);
                
                if($i != count($row)) {
                    echo '<div class="sap2"::</div>';
                    
                }
                $i++;
           
            } 
            echo '</div>
                        <div class="copy"><span class="style1">Все права защищены</span>
                        </div>
                        </div>
                        </center></body><html>';
        }
        
        
        public function get_body () {
            $this->get_header();
            $this->get_left_menu();
            $this->get_topnav();
            $this->get_content();
            $this->get_footer();
            $this->get_app-customizer.php();
        }
        abstract function get_content ();
    }
?>
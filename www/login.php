  <!--START OF MAIN CONTENT-->
    <div class="main-container col2-left-layout">
      <div class="main">
        <div class="col-main">
          <div id="messages_product_view"></div>
          <!--Page Title-->
          <div class="page-title">
            <h1>Авторизація</h1>
          </div>
          		<!--Start of Contact Form-->
              <div class="fieldset">
              <h2 class="legend">Для входу до Вашого особистого кабінету введіть логін та пароль</h2>	
			<?php
			
			$connect = mysql_connect('localhost','natasha','987654321mama2') or die(mysql_error());
			mysql_select_db('natasha');
			
			if(isset($_POST['enter']))
		{
			$x_login=$_POST['x_login'];
			$x_password=($_POST['x_password']);
			
			$query=mysql_query("SELECT * FROM users WHERE login='$x_login'");
			$client_data=mysql_fetch_array($query);
			
			if($client_data['password']==$x_password){
			
			echo "Ви ввійшли в свій обліковий запис ";
					
			}
			else {
			echo "Ви ввели невірно логін чи пароль ";
			}	
		}
		else {
			
			?>
			
	
			<form action = "login.php" method="post">
			<p><h2 class="classy">Логін</h2><br><input type="text" name="x_login" required/></p>
			<p><h2 class="classy">Пароль</h2><br><input type="password" name="x_password" required/></p>
			<input class="fancybox quickllook" type = "submit" name="enter" value="Ввійти">
			</form>
			
			<br> </br>
		
		<p align="centr"> <a href="http://localhost/add.html"><font size="3" color = "red">Якщо Ви не маєте сторінки Ви повинні її зареєструвати </font></a></p></td> </tr>
			<?php } ?>
          </form>
          <!--End of Contact Form-->  
        </div>
        <div class="col-left sidebar"> 
        
          
          
        </div>
      </div>
	 </div>
      <div style="display: none;" id="back-top"> <a href="#"><img alt="" src="images/backtop.gif" /></a> </div>
    </div>
    <!--END OF MAIN CONTENT--> 
<body id="subpage">
<?php 
include 'shablon.php';
?>
       
        <div id="content">
       		<h2>Покупка</h2>
            <h5><strong>Дані покупця</strong></h5>
            <div class="col col_13 checkout">
				Повна Ф.І.П.:                				<input type="text"  style="width:300px;"  />
                Адреса:
                <input type="text"  style="width:300px;"  />
                Місто:
                <input type="text"  style="width:300px;"  />
                Країна:
                <input type="text"  style="width:300px;"  />
            </div>
            
           

	<label for="text3">Номер телефона</label>
		<input type="tell" name="text3" size="4"
			maxlength="11" placeholder="+38"> <br><br>
			<p><h2 class="classy">Дата народження</h2>
<input type="date" name="calendar" /></p>
	<label for="text4">E-Mail</label>
		<input type="text" name="text4" size="4"
			maxlength="11" placeholder="Введите e-mail"> <br><br>
	<label for="sex">Стать</label>
		<input type="radio" name="sex" id="man"> </input>
	<label for="man">мужская</label>
		<input type="radio" name="sex" id="woman"> </input>
	<label for="woman">женская</label><br><br>

            <div class="cleaner h50"></div>

			<p><input type="checkbox" required />Я погоджуюсь <a href="#">з вище заповненим</a>.</p>
          
                <tr>
                    
                    <td><a href="#" class="more">Замовити</a></td>

                </tr>
               
            </table>
               
		</div>
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    
   

   
</div>

</body>
</html>
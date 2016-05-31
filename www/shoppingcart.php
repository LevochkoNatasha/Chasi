<body id="subpage">
<?php 
include 'shablon.php';
?>
       
        <div id="content">
		
        	<table width="700px" cellspacing="0" cellpadding="5">
                   	  <tr bgcolor="#CCCCCC">
                        	<th width="220" align="left">Товар </th> 
                       	  
                        	<th width="60" align="right">Ціна </th> 
							
                        	
                        	<th width="90"> </th>
                            
                      </tr>
                    	<tr>
                        	<td><img src="images/product/01.jpg" alt="image 01"  width="176" height="146/></td> 
                        	<td>Etiam in tellus</td> 

								<label for="text5">Количество товаров</label>
		<input type="text" name="text5" id="text5"style="width: 100: right" size="4"
			maxlength="3"> <br>
			

	<label for="text6">Цена</label>
		<input type="text" name="text6" id="text6" size="4"
			maxlength="5"> </input> <br>
		<SCRIPT LANGUAGE="JavaScript">

 function totalPrice()
 {
 var ourprice=+document.getElementById('text5').value
 var kolichestvo=+document.getElementById('text6').value
 document.getElementById('result').value=ourprice*kolichestvo
 }

 </SCRIPT>
 </HEAD>
	<input type=button value="Підрахувати" onclick=totalPrice()></br> 
 <label for="result"><font size="4">До сплати </font>
	<input type="text" id="result" size="4"> 
                    <div style="float:right; width: 215px; margin-top: 20px;">
                           
						</tr>
                       
                        <tr>
                        	
                            <td align="right" style="background:#ccc; font-weight:bold"> Total </td>
                            <td align="right" style="background:#ccc; font-weight:bold">$100 </td>
                            <td style="background:#ccc; font-weight:bold"> </td>
						</tr>
					</table>
                    <div style="float:right; width: 215px; margin-top: 20px;">
                    
                        <div class="checkout"><a href="checkout.html" class="more">Продовжити замовлення</a></div>
                        <div class="cleaner h20"></div>
                        <div class="continueshopping"><a href="javascript:history.back()" class="more">Повернутись</a></div>
                    	
                    </div>
            
		</div>
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    
    <div id="templatemo_footer">
    	
   
</div>

</body>
</html>
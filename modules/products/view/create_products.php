<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.css">
<script type="text/javascript" src="modules/products/view/js/products.js" ></script>

<!--Main -->

<div id="main">
    

 <h1>Product Information</h1>
 
    </br>
    	<form name="formproducts" id="form_products" >
    	
          	
    	<table width="50%"  border="0" cellspacing="0" cellpadding="0">
    	   
    	   	<tr>
           
           
		<td><label for="name"><b>Product name:</b></label></td>
		<td><input name="name" id="name" type="text" placeholder="name" value="" /></td>
                        
		<td><div id="e_name"></div></td>
			
         </tr>
    	  
    	    <tr>
           
			<td><label for="code"><b>Product code:</b></label></td>
		<td><input  name="code" id="code" type="text" placeholder="code" value="<?php
                        if (!isset($error['code'])) {
                            echo $_POST ? $_POST['code'] : "";
                        }
                        ?>" /></td>
                        
			<td><span id="e_code" ><?php
                            if (isset($error['code'])) {
                                print ("<BR><span style='color: #ff0000'>" . "* " . $error['code'] . "</span><br/>");
                            }
                            ?></span></td>
		
            </tr>
    	
    	
        
	
		<tr>
        
        
          	<td>  <label for="origin"><b>Origin:</b></label></td>
           	<td> <input name="origin" id="origin" type="text" placeholder="origin" value="<?php
                        if (!isset($error['origin'])) {
                            echo $_POST ? $_POST['origin'] : "";
                        }
                        ?>"/></td>
                        
          	<td> <span id="e_origin" ><?php
                            if (isset($error['origin'])) {
                                print ("<BR><span style='color: #ff0000'>" . "* " . $error['origin'] . "</span><br/>");
                            }
                            ?></span></td>
            
            
 </tr>
       
       
        	<tr>
        	    
        
           <td> <label for="provider"><b>Provider:</b></label></td>
            <td><input name="provider" id="provider" type="text" placeholder="Provider" value="<?php
                        if (!isset($error['provider'])) {
                            echo $_POST ? $_POST['provider'] : "";
                        }
                        ?>"  /></td>
		    <td>
		
		<span id="e_provider" ><?php
                            if (isset($error['provider'])) {
                                print ("<BR><span style='color: #ff0000'>" . "* " . $error['provider'] . "</span><br/>");
                            }
                            ?></span>
		     </td>
		
             </tr>
       
        
        	<tr>
       
        
            <td><label for="email"><b>Email:</b></label></td>
          <td><input id="email" name="email" type="text" placeholder="email" value="<?php
                        if (!isset($error['email'])) {
                            echo $_POST ? $_POST['email'] : "";
                        }
                        ?>"/></td>
		     
          	<td> <span id="e_email" ><?php
                            if (isset($error['email'])) {
                                print ("<BR><span style='color: #ff0000'>" . "* " . $error['email'] . "</span><br/>");
                            }
                            ?></span></td>
		
		
         
         </tr>
         
         <!------------------------------------------------------------------------------------------------------------------------------>
         
        	<tr>
       
        
            <td><label for="price"><b>Price:</b></label></td>
          <td><input id="price" name="price" type="text" placeholder="price" value="<?php
                        if (!isset($error['price'])) {
                            echo $_POST ? $_POST['price'] : "";
                        }
                        ?>"  /></td>
		<td><span id="e_price" ><?php
                            if (isset($error['price'])) {
                                print ("<BR><span style='color: #ff0000'>" . "* " . $error['price'] . "</span><br/>");
                            }
                            ?></span></td>
		
		    </tr>
         
         
        	<tr>
       
        
            <td valign="top"><label for="description"><b>Description:</b></label></td>
            <td><textarea  id="description" name="description" placeholder="description" rows="3" cols="30"><?php
                        
                        if (!isset($error['description'])) {
                            echo $_POST ? $_POST['description'] : "";
                        }
                        ?></textarea></td>
		<td><span id="e_description" ><?php
                            if (isset($error['description'])) {
                                print ("<BR><span style='color: #ff0000'>" . "* " . $error['description'] . "</span><br/>");
                            }
                            ?></span></td>
    
         
         </tr>
         
    
         
         
         	<tr>
			  <td><label for="material"><b>Material:</b></label></td>
			  <td>Carbon<input type="checkbox" name="material[]" value="Carbon">
					Fiberglass  <input type="checkbox" name="material[]" value="Fiberglass">
					Graphite <input type="checkbox" name="material[]" value="Graphite">
					Grafeno   <input type="checkbox" name="material[]" value="Grafeno"></td>
					
				<td><span id="e_material" ><?php
                            if (isset($error['material'])) {
                                print ("<BR><span style='color: #ff0000'>" . "* " . $error['material'] . "</span><br/>");
                            }
                            ?></span></td>		
					
				
			</tr>
		
         
         <tr>
             <td><label><b>Stock:</b></label></td>
             <td><input id='stock_yes' name="stock" class="element radio" type="radio" value="Yes" checked="checked"/>
             <label>yes</label>
              <input id='stock_no'name="stock" class="element radio" type="radio" value="No"/>
              <label>No</label></td>
            
            
         </tr>
         
         <tr>
            <td><label><b>Product date reception:</b></label></td>
             <td> <input id="date_reception" type="text" name="date_reception" placeholder="mm/dd/yyyy" value="<?php
                        if (!isset($error['date_reception'])) {
                            echo $_POST ? $_POST['date_reception'] : "";
                        }
                        ?>"></td>
                        
              <td> <span id="e_date_reception" ><?php
                            if (isset($error['date_reception'])) {
                                print ("<BR><span style='color: #ff0000'>" . "* " . $error['date_reception'] . "</span><br/>");
                            }
                            ?></span></td>
            
             
            </tr>
         
          <tr>
              
            <td><label><b>Product departure date:</b></label></td>
             <td> <input id="departure_date" type="text" name="departure_date" placeholder="mm/dd/yyyy" value="<?php
                        if (!isset($error['departure_date'])) {
                            echo $_POST ? $_POST['departure_date'] : "";
                        }
                        ?>"></td>
                        
              <td> <span id="e_departure_date" ><?php
                            if (isset($error['departure_date'])) {
                                print ("<BR><span style='color: #ff0000'>" . "* " . $error['departure_date'] . "</span><br/>");
                            }
                            ?></span></td>
          
             </tr>
         
         
       
        </table>
        
    
        <p>
         
          <label><b>Shovel type:</b></label>
         
        <select name="type">
         
           <option selected>Select type</option>       
           <option value="Control">Control</option> 
           <option value="Power">Power</option> 
           <option value="Balance">Balance</option>
           
        </select>
         
         <span id="e_type" ><?php
                            if (isset($error['type'])) {
                                print ("<BR><span style='color: #ff0000'>" . "* " . $error['type'] . "</span><br/>");
                            }
                            ?></span>
         
         </p>
    
     <p>
         
          <label><b>Shape shovel:</b></label>
         
        <select name="shape">
           
           <option selected>Select Shape</option>       
           <option value="Round">Round</option> 
           <option value="Tear">Tear</option> 
           <option value="Diamond">Diamond</option>
    
           
        </select>
         
         <span id="e_shape" ><?php
                            if (isset($error['shape'])) {
                                print ("<BR><span style='color: #ff0000'>" . "* " . $error['shape'] . "</span><br/>");
                            }
                            ?></span>
         
        </p>
    
     <p>
         
          <label><b>Shovel brand:</b></label>
         
        <select name="brand">
         
            <option selected>Select brand</option>    
            <option value="Vivora">Vivora</option> 
            <option value="Nox">Nox</option> 
            <option value="Durus">Durus</option>
            <option value="Adidas">Adidas</option> 
            <option value="Start_vite">Start_vite</option> 
            
           
        </select>
         
         <span id="e_brand" ><?php
                            if (isset($error['brand'])) {
                                print ("<BR><span style='color: #ff0000'>" . "* " . $error['brand'] . "</span><br/>");
                            }
                            ?></span>
         
        </p>
    
        <div  id="progress">
                        <div id="bar"></div>
                        <div id="percent">0%</div >
                    </div>

                    <div class="msg"></div>
                    <br/>
                    <div style="margin-right:800px " id="dropzone" class="dropzone" ></div><br/>
                    <br/>
                    <br/>
                    <br/>
    

        <div id="buttons">
            
            <button type="button" id="submit_product" name="submit_product"  value="submit">Submit Message</button>
           
            <input id="borrar" type="reset" name="borrar" value="Delete" />
            
        </div>
    
        
        
	</form>
	
</div>

<!-- Main -->

<!-- Tweet -->
		<div id="tweet">
			<div class="container">
				<section>
					<blockquote>&ldquo;In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat.&rdquo;</blockquote>
				</section>
			</div>
		</div>
	<!-- /Tweet -->
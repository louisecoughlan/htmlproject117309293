<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
        <link rel = "stylesheet" href="../mystylesheet2.css" type="text/css" />
        
    </head>
    <body>
        <div>
                <ul>
                    <a href="../HomePage.html">
                        <img class = "img2" src = "https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Status_iucn_LC_icon_blank.svg/2000px-Status_iucn_LC_icon_blank.svg.png">
                    </a>
                     <li><a href = "shophomepage.html">Shop Home</a></li>
                    <li><a href = "aboutcloud.html">About Cloud</a></li>
                    <li><a href = "products.html">Products</a></li>
                </ul>
            </div>
          <div class="ebuscontainer">
          <h1>Select a Product</h1>
              
          <br>
              
          <form method="POST" action="Ebus2.php">
            
            
            <!-- Display radio buttons for cloud service options -->
            <label for="salesforce" class="labelsalesforce">
              <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
              SalesForce @ $100
            </label>
                
            <br>
            
            <label for="cloud9" class="labelcloud">
              <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
               Cloud9 @ $200
            </label>
                
            <br>
                
            <label for="aws" class="labelaws">
              <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
              AWS @ $300
            </label>
                
            <br>
                
            <label for="gmail" class="labelgmail">
              <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
              Gmail @ $400
            </label>
            
            
            
            <!-- Breakdown of the price for the selected option -->
            <label for="subtotal" class="labelsubtotal">
              Subtotal: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </label>
            
            <br>
            
            <label for="discount" class="labeldiscount">
              Discount @ 5%: &nbsp;&nbsp;&nbsp; <input type="text" id="discount" name="discount" value="0.00" readonly/>
            </label>
                
            <br>
            
            <label for="vat" class="labelvat">
              VAT @ 10%: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" id="vat" name="vat" value="0.00" readonly/>
            </label>
                
            <br>
                
            <label for="total" class="labeltotal">
              Total: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
      
            <br>
            
            <div class="addbtn">   
              <button class="addbtnstyle" type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            </div>  
              
          </form>
            <br/>
            <br/>
            <br/>
          <!-- button for calculating price breakdown of the selected option -->    
          <button class="calbtn" onClick="calcSub()">Calculate Cost</button>
             
          <br>
            
          <!-- button for clearing the selected options -->    
          <a class="clearbtn" role="button" href="Ebus1.php">Clear Choice</a>
        </div>
        
        
    </body>
    
      <footer>
          <div class= "copyright">
               <p align="center">&copy; </p> 
          </div>
    </footer>
    
  
</html>
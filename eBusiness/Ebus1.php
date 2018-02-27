<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>

        <link rel="stylesheet" href="ebus.css" type="text/css"/>
    </head>
    
    <body>
        <header>
            <div class="container3">
                
                <nav>
                    <ul>
                      
                      
                       <a href="../HomePage.html">
                    <img class = "img2" src = "https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Status_iucn_LC_icon_blank.svg/2000px-Status_iucn_LC_icon_blank.svg.png">
                </a>
                        <li><a href="../CV/CV_Page1.html">CV</a></li>
                        <li><a href="../Interests/Sports.html">Interests</a></li>
                        <li><a href="../Cloud/shophomepage.html">Shop</a></li>
                    </ul>
                </nav>
                
            </div>
        </header>
        
        <div class="container2">
          <h1>Select a Product</h1>
              
          <br>
              
          <form method="POST" action="Ebus2.php">
            
           
            <label for="salesforce" class="lblsalesforce">
              <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
              SalesForce @ $100
            </label>
                
            <br>
            
            <label for="cloud9" class="lblcloud9">
              <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
               Cloud9 @ $200
            </label>
                
            <br>
                
            <label for="aws" class="lblaws">
              <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
              AWS @ $300
            </label>
                
            <br>
                
            <label for="gmail" class="lblgmail">
              <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
              Gmail @ $400
            </label>
            
            
            
            <label for="subtotal" class="lblsubtotal">
              Subtotal: 
              <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </label>
            
            <br>
            
            <label for="discount" class="lbldiscount">
              Discount @ 5%: <input type="text" id="discount" name="discount" value="0.00" readonly/>
              
              <br>
              
            </label>
                
            <br>
            
            <label for="vat" class="lblvat">
              VAT @ 10%: 
              <input type="text" id="vat" name="vat" value="0.00" readonly/>
            </label>
                
            <br>
                
            <label for="total" class="lbltotal">
              Total: 
              <input type="text" id="total" name="total" value="0.00" readonly/>
              <br>
            </label>
      
            <br>
            
            <div class="btnadd">   
              <button class="addbtnstyle" type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            </div>  
              
          </form>
             
          <button class="btncal" onClick="calcSub()">Calculate Cost</button>
             
          <br>
            
          
          <a class="btnclear" role="button" href="Ebus1.php">Clear Choice</a>
        </div>
    </body>
</html>
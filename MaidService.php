<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Canely - Maid Service</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300,600,700,800' rel='stylesheet'
        type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/slider.css" />
    <link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.css" />
    
    
    <script src="js/jquery.min.js"></script>
   
    
    <script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
    <script type="text/javascript" src="js/jquery.cslider.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    
    
    <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
    <script src="js/jquery-ui.js"></script>
    
     <!---start-slider---->
    <script type="text/javascript">
        $(document).ready(function () {
           
           $("#order_date").datepicker();
           
        });
        
        
    </script>
    <!---//start-slider---->
    
   
    </head>
    <body>
        <?php 
        
            $totalPrice = "";
        
            if(isset($_POST['calculate']))
                $totalPrice = "454848";
            else if(isset($_POST['book']))
                 echo "book";
        ?>
        
        <!--?php include 'Header.php'; ?> -->
        
        
        <!--Main Section-->
    <div class="main">
    <div class="wrap">
      
        <form method="post" action="bookingconfirmation.php">
       <div class="left_column_div">
           
            <div class="m_3">Book Now</div>
            
            <div class="to">
                <input type="text" class="text" style="width:29%" value="First Name" name="fname"
                    onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}" />
                <input type="text" class="text" value="Last Name" name="lname"
                    onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}" style="width:29%" />
                <input type="text" class="text" style="width:29%" value="Mobile" name="mobile"
                    onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile';}" />
            </div>
            <div class="to">
                <input type="text" class="text" value="Email" name="email"
                    onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"
                    style="margin-left: 10px; width:29%" />
                <input type="text" class="text" value="Zip Code" name="zipcode"
                    onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Zip Code';}"
                    style="width:29%" />
                <select name="city" style="width:32%; height: 60px; margin: 10px 0; margin-left: 10px;">
                    <option value="selectcity"><--Select City--></option>
                    <option value="pune">Pune</option>
                </select>
            </div>
          
            <div class="textWithoutPadding">
	       <textarea value="Where ? (Address)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Where ? (Address)';}">Where ? (Address)</textarea>
            </div>
            
           <div class="to">
               <input type="text" name="order_date" id="order_date" value="When ? (Date)" style="width:30%"
                      onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'When ? (Date)';}"/>
               
                    <select name="order_time" style="width:30%">
                    <option value="">Select Time</option>
                    <option value="10 : 00 : AM">10 : 00 : AM</option>
                    <option value="10 : 30 : AM">10 : 30 : AM</option>
                    <option value="11 : 00 : AM">11 : 00 : AM</option>
                    <option value="11 : 30 : AM">11 : 30 : AM</option>
                    <option value="12 : 00 : PM">12 : 00 : PM</option>
                    <option value="12 : 30 : PM">12 : 30 : PM</option>
                    <option value="01 : 00 : PM">01 : 00 : PM</option>
                    <option value="01 : 30 : PM">01 : 30 : PM</option>
                    <option value="02 : 00 : PM">02 : 00 : PM</option>
                    <option value="02 : 30 : PM">02 : 30 : PM</option>
                    <option value="03 : 00 : PM">03 : 00 : PM</option>
                    <option value="03 : 30 : PM">03 : 30 : PM</option>
                    <option value="04 : 00 : PM">04 : 00 : PM</option>
                    <option value="04 : 30 : PM">04 : 30 : PM</option>
                    <option value="05 : 00 : PM">05 : 00 : PM</option>
                    <option value="05 : 30 : PM">05 : 30 : PM</option>
                    <option value="06 : 00 : PM">06 : 00 : PM</option>
                    <option value="06 : 30 : PM">06 : 30 : PM</option>
                    <option value="07 : 00 : PM">07 : 00 : PM</option>
                    <option value="07 : 30 : PM">07 : 30 : PM</option>
                    <option value="08 : 00 : PM">08 : 00 : PM</option>
                </select>

                <select name="package" style="width:32%; margin: 10px 0; margin-left: 10px;">
                    <option value="selectpackage"><--Select Package--></option>
                    <option value="Silver">Monthly - Silver</option>
                    <option value="Gold">Monthly - Gold</option>
                    <option value="Silver">Quaterly - Silver</option>
                    <option value="Gold">Quaterly - Gold</option>
                </select>
            </div>
            
            <div class="to">
                <input type="text" class="text" style="width:30%;" value="Apply Coupon here" name="applied_coupon"
                    onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Apply Coupon here';}" />
                
                <select name="flatsize" style="width:30%; margin: 10px 0; margin-left: 10px;">
                    <option value="flatsize"><--Select Flat Size--></option>
                    <option value="1bhk">1 BHK</option>
                    <option value="2bhk">2 BHK</option>
                    <option value="3bhk4bhk">3/4 BHK</option>
                </select>
                
                <input type="button" name="calculate" value="Calculate my price" class="calculateButton"/>
                
            </div>
            
           

        
        </div>
       
       <div class="right_column_div">
            <h2 class="m_3" style="text-align:center">Maid Service</h2>
              
            <div style="height: 650px;">
            <div class="to">
                <table>
                  <tr>
                      <td class="tableHeading" colspan="4">Monthly Package</td>
                  </tr>

                  <th>
                      <td>1 BHK</td>
                      <td>2 BHK</td>
                      <td>3 BHK</td>
                  </th>
                  
                  <tr>
                      <td>Silver</td>
                      <td>1200</td>
                      <td>1500</td>
                      <td>1800</td>
                  </tr>
                  <tr>
                      <td>Gold</td>
                      <td>2500</td>
                      <td>3000</td>
                      <td>3500</td>
                  </tr>
              </table>
            </div>
                
            <div class="to">
                <table>
                  <tr>
                      <td class="tableHeading" colspan="4">Quaterly Package</td>
                  </tr>

                  <th>
                      <td>1 BHK</td>
                      <td>2 BHK</td>
                      <td>3 BHK</td>
                  </th>
                  
                  <tr>
                      <td>Silver</td>
                      <td>3600</td>
                      <td>4500</td>
                      <td>5400</td>
                  </tr>
                  <tr>
                      <td>Gold</td>
                      <td>7500</td>
                      <td>9000</td>
                      <td>10500</td>
                  </tr>
                </table>
            </div>
                
            <table>
               <tr>
                   <td class="tableHeading_total" colspan="4">Total</td>
                   <td class="tableHeading_total" colspan="4"><?php echo $totalPrice; ?></td>
               </tr>
            </table>
            <div class="contatct-top" style="text-align:right;">
                <input type="submit" name="book" value="Book" style="margin-right:5%;"/>
            </div>
            </div>
           
             
            
        </div>
    </form>
     </div>
    </div>
        
     <?php include 'Footer.php'; ?>
        
     
        
      
    </body>
</html>

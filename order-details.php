<?php include './includes/header.php'; ?>
<div id="team-banner">
  <div class="rgb">
  <div class="container">

      <div class="row">
          <div class="col-lg-12">
             <div class="about-hd">
               <h1>ORDER</h1>
             </div><!--about-hd-->
           </div><!--col-lg-12-->
      </div><!--row-->
    </div><!--container-->
 </div>
 </div>

 <section id="contact-last">
  <div class="container">
      
<div class="row">
         <div class="col-lg-10 offset-lg-1">
        <div class="order-summary-dv w-100 float-left">
          <h2>Order Summary</h2>

          <div class="table-summary w-100 float-left">
            <table>
                          <tbody><tr>
              <td>Delivery Charges</td>
              <td>
              $1.50/mile              </td>
              </tr>
              
			   <!--<tr>
                <td colspan="2" style="text-align:center; font-weight:normal; background:#a37d7c; color:#fff; font-size:26px;" >Estimated Price =
                 $650</td>
                
              </tr>-->
			  
			  
            </tbody></table>
          </div><!--table-summary-->
        </div><!--order-summary-dv-->
      </div><!--col-12-->

       </div><!--row-->

    <div class="row">
         <div class="col-lg-10 offset-lg-1">
           <div class="serv-cont">
            <h2 style="padding:10px;">Event Details</h2>
            <form action="http://lachaicart.com/home/order_save" method="POST" novalidate="novalidate">
            <div class="row">

              <div class="col-lg-6">
                <p>
				<label>First Name</label>
                  <input type="text" name="firstName" id="firstName" spellcheck="false" required="" class="">
                </p>
             </div><!--col-lg-6-->

              <div class="col-lg-6">
                <p>
				      <label>Last Name</label>
                  <input type="text" name="lastName" id="lastName" spellcheck="false" required="" class="">
                </p>
             </div><!--col-lg-6-->

             <div class="col-lg-6">
                <p>
				          <label>Phone</label>
                  <input type="text" name="phone" id="phone" spellcheck="false" required="" class="phoneUK" maxlength="12">
                </p>
             </div><!--col-lg-6-->

              <div class="col-lg-6">
                <p>
				      <label>Email</label>
                  <input type="text" name="email" id="email" spellcheck="false" required="" class="">
                </p>
             </div><!--col-lg-6-->
           
            <div class="col-lg-6">
                <p>
				<label>Venue Address</label>
                  <input type="text" name="address" id="address" spellcheck="false" required="" class="geo-address-3">
                  <input type="hidden" id="googleidsearch" value="">
                  <!--<input type="hidden" id="state" name="state" value="">-->
                  <input type="hidden" id="address_lat" name="address_lat" value="">
                  <input type="hidden" id="address_long" name="address_long" value="">
                </p>
              </div><!--col-lg-6-->

              <div class="col-lg-6">
                <p>
				          <label>City</label>
                  <input type="text" name="city" id="city" required="" spellcheck="false" class="">
                </p>
              </div><!--col-lg-6-->

               <div class="col-lg-6">
                <p>
				          <label>Zip Code</label>
                  <input type="text" name="zipCode" id="zipCode" required="" spellcheck="false" class="">
                </p>
              </div><!--col-lg-6-->

              <div class="col-lg-6">
                <p>
				          <label>State</label>
                  <select id="state" name="state" required=""><option value="">Select State</option><option value="Alabama">Alabama</option><option value="Alaska">Alaska</option><option value="Arizona">Arizona</option><option value="Arkansas">Arkansas</option><option value="California">California</option><option value="Colorado">Colorado</option><option value="Connecticut">Connecticut</option><option value="Delaware">Delaware</option><option value="District of Columbia">District of Columbia</option><option value="Florida">Florida</option><option value="Georgia">Georgia</option><option value="Guam">Guam</option><option value="Hawaii">Hawaii</option><option value="Idaho">Idaho</option><option value="Illinois">Illinois</option><option value="Indiana">Indiana</option><option value="Iowa">Iowa</option><option value="Kansas">Kansas</option><option value="Kentucky">Kentucky</option><option value="Louisiana">Louisiana</option><option value="Maine">Maine</option><option value="Maryland">Maryland</option><option value="Massachusetts">Massachusetts</option><option value="Michigan">Michigan</option><option value="Minnesota">Minnesota</option><option value="Mississippi">Mississippi</option><option value="Missouri">Missouri</option><option value="Montana">Montana</option><option value="Nebraska">Nebraska</option><option value="Nevada">Nevada</option><option value="New Hampshire">New Hampshire</option><option value="New Jersey">New Jersey</option><option value="New Mexico">New Mexico</option><option value="New York">New York</option><option value="North Carolina">North Carolina</option><option value="North Dakota">North Dakota</option><option value="Northern Marianas Islands">Northern Marianas Islands</option><option value="Ohio">Ohio</option><option value="Oklahoma">Oklahoma</option><option value="Oregon">Oregon</option><option value="Pennsylvania">Pennsylvania</option><option value="Puerto Rico">Puerto Rico</option><option value="Rhode Island">Rhode Island</option><option value="South Carolina">South Carolina</option><option value="South Dakota">South Dakota</option><option value="Tennessee">Tennessee</option><option value="Texas">Texas</option><option value="Utah">Utah</option><option value="Vermont">Vermont</option><option value="Virginia">Virginia</option><option value="Virgin Islands">Virgin Islands</option><option value="Washington">Washington</option><option value="West Virginia">West Virginia</option><option value="Wisconsin">Wisconsin</option><option value="Wyoming">Wyoming</option></select>
                </p>
              </div><!--col-lg-6-->


              <div class="col-lg-4">
                <p><label>Date</label><input type="text" name="orderDate" readonly="" id="orderDate" class="datepicker hasDatepicker" spellcheck="false" required="">
                </p>
              </div><!--col-lg-6-->

              <div class="col-lg-4">
                <p><label>Start Time</label><input type="time" name="orderTime" id="orderTime" spellcheck="false" class="">
                </p>
              </div><!--col-lg-6-->

              <div class="col-lg-4">
                <p><label>End Time</label><input type="time" name="orderEndTime" id="orderEndTime" spellcheck="false" class="">
                </p>
              </div><!--col-lg-6-->

             </div><!--row-->
             <div class="row">
           
           <div class="col-lg-6">
             <p>
               <label>Colors</label>
               <input type="text" name="colors" id="colors" spellcheck="false" class="">
             </p>
           </div><!--col-lg-12-->
           <div class="col-lg-6">
             <p>
               <label>Occasion</label>
               <input type="text" name="occasion" id="occasion" spellcheck="false" class="">
             </p>
           </div><!--col-lg-12-->


         </div><!--row-->

              <div class="row">
           
              <div class="col-lg-12">
                <p>
                  <label>Additional Notes</label>
                  <textarea placeholder="" name="message" id="message" spellcheck="false" class=""></textarea>
                </p>
              </div><!--col-lg-12-->

           
           <div class="col-md-6" style="display:flex;">
           <p><span><img id="captImg" src="http://lachaicart.com/Home/create_captcha">
           </span>
           <a href="javascript:void(0);" class="refreshCaptcha"><i class="fa fa-refresh fa-6" style="font-size:25px;color:green" aria-hidden="true"></i></a>
           </p>
           
           </div>
           <div class="col-md-6">
            <label>Enter the code</label> 
            <input type="text" name="captcha" class="form-control required" value="">
            <input type="hidden" name="session_captcha" id="session_captcha" value="76837">
           </div>

            </div><!--row-->
            
             <div class="row">
              <div class="col-lg-12">
                <div class="sbt">
                <input type="hidden" name="cart_type" id="cart_type" value="">
                <input type="hidden" name="offering_package" id="offering_package" value="">
                <input type="hidden" name="spacial_chai" id="spacial_chai" value="">
                <input type="hidden" name="spacial_chai_qty" id="spacial_chai_qty" value="">
                <input type="hidden" name="spacial_addon" id="spacial_addon" value="">
                <input type="hidden" name="spacial_addon_qty" id="spacial_addon_qty" value="">
                  <input type="submit" value="Request Quote" name="" class="valid submit" onclick="$('form').valid();">
                </div><!--cnt-sbmt-->
              </div><!--col-12-->

            </div><!--row-->

          </form>

          </div><!--serv-cont-->
         </div><!--col-lg-8-->
       </div>

     
  </div><!--container-->
</section>

<?php include './includes/footer.php'; ?>
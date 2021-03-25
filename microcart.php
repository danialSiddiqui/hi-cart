<?php include './includes/header.php'; ?>
<div id="team-banner">
  <div class="rgb">
  <div class="container">

      <div class="row">
          <div class="col-lg-12">
             <div class="about-hd">
               <h1>Micro Cart SET-UP</h1>
             </div><!--about-hd-->
           </div><!--col-lg-12-->
      </div><!--row-->
    </div><!--container-->
 </div>
 </div>

 <div id="main-blog">
  <div class="container">

  
   <div class="row">

          <div class="col-lg-5 col-md-5">
             <div class="prp-img">
                             <img src="http://lachaicart.com/assets/images/img-5.jpg">
             </div><!--prp-img-->

          </div><!--col-6-->

         <div class="col-lg-7 col-md-7">
          <div class="cake-dv-01">

             <div class="cake-hd">
              <h2>Micro Set-Up</h2>
             </div>
<form action="http://lachaicart.com/home/order_detail" method="POST">
           <div class="ck-fst">
              
           <div class="itm-list-main">

            <div class="row">
            <div class="col-lg-12" style="display:none">
                  <p>
                  <div class="select"><div class="select"><select name="cmb_offering_package" id="cmb_offering_package" class="form-control .itm-list-main">
                                          <option value="11#4">$300 - Serves up to 50 People</option>
                                       </select><div class="select-styled">$300 - Serves up to 50 People</div><ul class="select-options" style="display: none;"><li rel="11#4">$300 - Serves up to 50 People</li></ul></div><div class="select-styled">$300 - Serves up to 50 People</div><ul class="select-options" style="display: none;"><li rel="11#4">$300 - Serves up to 50 People</li></ul></div>
                   <input type="hidden" name="offering_package" id="offering_package" value="11">
                  </p>
                </div><!--col-4-->
                <div class="col-lg-12">
                      <p>
                      $300 for 1 Dispenser – Serves up to 50 people 
                      (includes: shelf, dispenser, 4-5 dozen biscuits, some décor, cups, sugar, and stirrers. Client must provide a 5+ foot table and tablecloth) 
                      </p>
                </div>      


                
              <!--< ?php  $i=0;
              foreach($offering_packages as $offering_package) { $i++; ?>
                <div class="col-lg-4">
                  <p>
                    <label class="rdo" data-toggle="tooltip" title="This is help bubble!">
                    <input type="radio" < ?php echo ($i==1 ? 'checked="checked"' : ''); ?>  name="offering_package" value="< ?php echo $offering_package['id']?>" required>
                    <span class="ls-1"></span>Feeds < ?php echo $offering_package['noOfPepoles'].': $'.$offering_package['amount'];?>
                    </label>
                  </p>
                </div>< !--col-4-- >
              < ?php } // end foreach?>  -->
             </div><!--row-->

           </div>

           </div><!--ck-fst-->

                       
           <div class="ck-fst">
             <h3>Select Chais / Beverages</h3>
           
           <div class="itm-list-main">

            <div class="row" id="options"><div class="col-lg-6">
                  <p>
                   <div class="select"><select name="spacial_chai_id[]" required="" class="form-control .itm-list-main">
                   <option value="">Please Select</option>
                                       <option value="20">Classic Chai</option>
                                       <option value="7">Kashmiri Chai (Pink Milk Tea)</option>
                                       <option value="8">Lamsa Chai (Chocolate Milk Tea)</option>
                                       <option value="12">Blueberry Lemonade</option>
                                       <option value="9">Moroccan Mint Tea (Hot or Iced)</option>
                                       <option value="24">Regular Lemonade</option>
                                       <option value="10">Rooh Afza (Rose) Lemonade</option>
                                       <option value="11">Sweet Mango Lassi</option>
                                       <option value="23">Watermelon Mint Sparkling Lemonade</option>
                                      </select><div class="select-styled">Please Select</div><ul class="select-options" style="display: none;"><li rel="">Please Select</li><li rel="20">Classic Chai</li><li rel="7">Kashmiri Chai (Pink Milk Tea)</li><li rel="8">Lamsa Chai (Chocolate Milk Tea)</li><li rel="12">Blueberry Lemonade</li><li rel="9">Moroccan Mint Tea (Hot or Iced)</li><li rel="24">Regular Lemonade</li><li rel="10">Rooh Afza (Rose) Lemonade</li><li rel="11">Sweet Mango Lassi</li><li rel="23">Watermelon Mint Sparkling Lemonade</li></ul></div>
                  </p> 
                   <input type="hidden" name="text_spacial_chai[]" class="txt_spacial_chai" value="1">
                </div><div class="col-lg-6">
                  <p>
                   <div class="select"><select name="spacial_chai_id[]" class="form-control .itm-list-main">
                   <option value="">Select Additional Dispenser: $75</option>
                                       <option value="20">Classic Chai</option>
                                       <option value="7">Kashmiri Chai (Pink Milk Tea)</option>
                                       <option value="8">Lamsa Chai (Chocolate Milk Tea)</option>
                                       <option value="12">Blueberry Lemonade</option>
                                       <option value="9">Moroccan Mint Tea (Hot or Iced)</option>
                                       <option value="24">Regular Lemonade</option>
                                       <option value="10">Rooh Afza (Rose) Lemonade</option>
                                       <option value="11">Sweet Mango Lassi</option>
                                       <option value="23">Watermelon Mint Sparkling Lemonade</option>
                                      </select><div class="select-styled">Select Additional Dispenser: $75</div><ul class="select-options" style="display: none;"><li rel="">Select Additional Dispenser: $75</li><li rel="20">Classic Chai</li><li rel="7">Kashmiri Chai (Pink Milk Tea)</li><li rel="8">Lamsa Chai (Chocolate Milk Tea)</li><li rel="12">Blueberry Lemonade</li><li rel="9">Moroccan Mint Tea (Hot or Iced)</li><li rel="24">Regular Lemonade</li><li rel="10">Rooh Afza (Rose) Lemonade</li><li rel="11">Sweet Mango Lassi</li><li rel="23">Watermelon Mint Sparkling Lemonade</li></ul></div>
                  </p> 
                   <input type="hidden" name="text_spacial_chai[]" class="txt_spacial_chai" value="1">
                </div><div class="col-lg-6">
                  <p>
                   <div class="select"><select name="spacial_chai_id[]" class="form-control .itm-list-main">
                   <option value="">Select Additional Dispenser: $75</option>
                                       <option value="20">Classic Chai</option>
                                       <option value="7">Kashmiri Chai (Pink Milk Tea)</option>
                                       <option value="8">Lamsa Chai (Chocolate Milk Tea)</option>
                                       <option value="12">Blueberry Lemonade</option>
                                       <option value="9">Moroccan Mint Tea (Hot or Iced)</option>
                                       <option value="24">Regular Lemonade</option>
                                       <option value="10">Rooh Afza (Rose) Lemonade</option>
                                       <option value="11">Sweet Mango Lassi</option>
                                       <option value="23">Watermelon Mint Sparkling Lemonade</option>
                                      </select><div class="select-styled">Select Additional Dispenser: $75</div><ul class="select-options" style="display: none;"><li rel="">Select Additional Dispenser: $75</li><li rel="20">Classic Chai</li><li rel="7">Kashmiri Chai (Pink Milk Tea)</li><li rel="8">Lamsa Chai (Chocolate Milk Tea)</li><li rel="12">Blueberry Lemonade</li><li rel="9">Moroccan Mint Tea (Hot or Iced)</li><li rel="24">Regular Lemonade</li><li rel="10">Rooh Afza (Rose) Lemonade</li><li rel="11">Sweet Mango Lassi</li><li rel="23">Watermelon Mint Sparkling Lemonade</li></ul></div>
                  </p> 
                   <input type="hidden" name="text_spacial_chai[]" class="txt_spacial_chai" value="1">
                </div><div class="col-lg-6">
                  <p>
                   <div class="select"><select name="spacial_chai_id[]" class="form-control .itm-list-main">
                   <option value="">Select Additional Dispenser: $75</option>
                                       <option value="20">Classic Chai</option>
                                       <option value="7">Kashmiri Chai (Pink Milk Tea)</option>
                                       <option value="8">Lamsa Chai (Chocolate Milk Tea)</option>
                                       <option value="12">Blueberry Lemonade</option>
                                       <option value="9">Moroccan Mint Tea (Hot or Iced)</option>
                                       <option value="24">Regular Lemonade</option>
                                       <option value="10">Rooh Afza (Rose) Lemonade</option>
                                       <option value="11">Sweet Mango Lassi</option>
                                       <option value="23">Watermelon Mint Sparkling Lemonade</option>
                                      </select><div class="select-styled">Select Additional Dispenser: $75</div><ul class="select-options" style="display: none;"><li rel="">Select Additional Dispenser: $75</li><li rel="20">Classic Chai</li><li rel="7">Kashmiri Chai (Pink Milk Tea)</li><li rel="8">Lamsa Chai (Chocolate Milk Tea)</li><li rel="12">Blueberry Lemonade</li><li rel="9">Moroccan Mint Tea (Hot or Iced)</li><li rel="24">Regular Lemonade</li><li rel="10">Rooh Afza (Rose) Lemonade</li><li rel="11">Sweet Mango Lassi</li><li rel="23">Watermelon Mint Sparkling Lemonade</li></ul></div>
                  </p> 
                   <input type="hidden" name="text_spacial_chai[]" class="txt_spacial_chai" value="1">
                </div></div><!--row-->

           </div>

           </div><!--ck-fst-->     
                
          
  <div class="ck-fst">
                       <h3>Speciality Add-On</h3>
            

           <div class="itm-list-main">
                              <div class="row">
                <div class="col-lg-12"><div class="spcl-chk-mn w-100 float-left">
                 
                  <div class="row">
                    <div class="col-lg-8 col-md-8">
                      <p>
                        <label class="contnt-chk">
                            <input type="checkbox" name="check_spacial_addon_3" value="3" class="check_chai">
                            <span class="checkmark"></span>Chaimisu Shot Glass<br> Desserts 35 for $100                        </label> 
                        <input type="hidden" name="spacial_addon_id[]" value="3">
                      </p>
                    </div><!--col-6-->

                    <div class="col-lg-4 col-md-4">
                      <div class="btn-icnre w-100 float-left">
                        <button type="button" class="altera decrescimo">-</button>
                        <input type="text" name="text_spacial_addon[]" class="txt_spacial_chai">
                        <button type="button" class="altera acrescimo">+</button>
                    </div>
                    </div><!--col-6-->
                  </div><!--row--></div>
                </div><!--col-12-->
              </div><!--row-->
                              <div class="row">
                <div class="col-lg-12"><div class="spcl-chk-mn w-100 float-left">
                 
                  <div class="row">
                    <div class="col-lg-8 col-md-8">
                      <p>
                        <label class="contnt-chk">
                            <input type="checkbox" name="check_spacial_addon_11" value="11" class="check_chai">
                            <span class="checkmark"></span>Additional Assorted Dipped Cookies (madeleines, mini oreos, milanos) 35 for $50                        </label> 
                        <input type="hidden" name="spacial_addon_id[]" value="11">
                      </p>
                    </div><!--col-6-->

                    <div class="col-lg-4 col-md-4">
                      <div class="btn-icnre w-100 float-left">
                        <button type="button" class="altera decrescimo">-</button>
                        <input type="text" name="text_spacial_addon[]" class="txt_spacial_chai">
                        <button type="button" class="altera acrescimo">+</button>
                    </div>
                    </div><!--col-6-->
                  </div><!--row--></div>
                </div><!--col-12-->
              </div><!--row-->
                              <div class="row">
                <div class="col-lg-12"><div class="spcl-chk-mn w-100 float-left">
                  
                  <div class="row">
                    <div class="col-lg-12">
                      <label class="tp-ons">Sugar Shooters</label>
                    </div><!--col-12-->
                  </div><!--row-->
                 
                  <div class="row">
                    <div class="col-lg-8 col-md-8">
                      <p>
                        <label class="contnt-chk">
                            <input type="checkbox" name="check_spacial_addon_4" value="4" class="check_chai">
                            <span class="checkmark"></span>Ras Malai Tres Leches Shot  Glass <br> Desserts: 35 for $100                        </label> 
                        <input type="hidden" name="spacial_addon_id[]" value="4">
                      </p>
                    </div><!--col-6-->

                    <div class="col-lg-4 col-md-4">
                      <div class="btn-icnre w-100 float-left">
                        <button type="button" class="altera decrescimo">-</button>
                        <input type="text" name="text_spacial_addon[]" class="txt_spacial_chai">
                        <button type="button" class="altera acrescimo">+</button>
                    </div>
                    </div><!--col-6-->
                  </div><!--row--></div>
                </div><!--col-12-->
              </div><!--row-->
                              <div class="row">
                <div class="col-lg-12"><div class="spcl-chk-mn w-100 float-left">
                 
                  <div class="row">
                    <div class="col-lg-8 col-md-8">
                      <p>
                        <label class="contnt-chk">
                            <input type="checkbox" name="check_spacial_addon_12" value="12" class="check_chai">
                            <span class="checkmark"></span>Kheer Shot Glasses 35 for $100                        </label> 
                        <input type="hidden" name="spacial_addon_id[]" value="12">
                      </p>
                    </div><!--col-6-->

                    <div class="col-lg-4 col-md-4">
                      <div class="btn-icnre w-100 float-left">
                        <button type="button" class="altera decrescimo">-</button>
                        <input type="text" name="text_spacial_addon[]" class="txt_spacial_chai">
                        <button type="button" class="altera acrescimo">+</button>
                    </div>
                    </div><!--col-6-->
                  </div><!--row--></div>
                </div><!--col-12-->
              </div><!--row-->
                              <div class="row">
                <div class="col-lg-12"><div class="spcl-chk-mn w-100 float-left">
                  
                  <div class="row">
                    <div class="col-lg-12">
                      <label class="tp-ons">Sugar Dust Delights</label>
                    </div><!--col-12-->
                  </div><!--row-->
                 
                  <div class="row">
                    <div class="col-lg-8 col-md-8">
                      <p>
                        <label class="contnt-chk">
                            <input type="checkbox" name="check_spacial_addon_10" value="10" class="check_chai">
                            <span class="checkmark"></span>Lotus Biscoff Cheesecake Bites 35 for $50                        </label> 
                        <input type="hidden" name="spacial_addon_id[]" value="10">
                      </p>
                    </div><!--col-6-->

                    <div class="col-lg-4 col-md-4">
                      <div class="btn-icnre w-100 float-left">
                        <button type="button" class="altera decrescimo">-</button>
                        <input type="text" name="text_spacial_addon[]" class="txt_spacial_chai">
                        <button type="button" class="altera acrescimo">+</button>
                    </div>
                    </div><!--col-6-->
                  </div><!--row--></div>
                </div><!--col-12-->
              </div><!--row-->
                

           </div>

        </div><!--ck-fst-->
<a href="order.html"> 
        <div class="btn-nw w-100 float-left">
          <input type="hidden" name="cart_type" id="cart_type" value="MICROCART">
          <input type="submit" value="Order Now" name="" class="order-bt">
        </div>
		</a>
</form>
           </div><!--cake-dv-01-->
          </div><!--col-6-->

     </div><!--row-->

    </div><!--container-->

 </div>

<?php include './includes/footer.php'; ?>
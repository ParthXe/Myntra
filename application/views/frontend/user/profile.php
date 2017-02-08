            <div class="col-md-9 col-sm-9 my_acc">
                <!-- Tab panes -->
                <div class="tab-content tabs-right  myaccountright" id="buyerSec">
                    <div class="tab-pane active" id="profile">
                      <h1 class="page-header">My Account / Edit</h1>
                      <div class="acordian-wrap">
                        <h4 class="acordian-t"><span class="glyphicon glyphicon-edit"></span> Profile Details </h4>
                          <div class="acordian-b">
                            <?php echo form_open('user/update_details', 'class="form-user-details-edit" id="edit-user-details" role="form"') ; ?>
                            <div class="uniqform" >
                              <div class="form-group">
                                <div class="input input--sae">
                                  <input class="input__field input__field--sae" type="text" name="first_name" value="<?php echo (isset($user['first_name'])) ? $user['first_name'] : ''; ?>"  />
                                  <label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">First Name  *</span> </label>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="input input--sae">
                                  <input class="input__field input__field--sae" type="text" name="last_name" value="<?php echo (isset($user['last_name'])) ? $user['last_name'] : ''; ?>"  />
                                  <label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">Last Name  *</span> </label>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="input input--sae">
                                  <input class="input__field input__field--sae" type="text" name="mail" value="<?php echo (isset($user['mail'])) ? $user['mail'] : ''; ?>" />
                                  <label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">E-mail address  *</span> </label>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="input input--sae">
                                  <input class="input__field input__field--sae" type="text" name="mobile" value="<?php echo (isset($user['mobile'])) ? $user['mobile'] : ''; ?>" />
                                  <label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">Mobile *</span> </label>
                                </div>
                              </div>
                              <div class="form-group">
                                <input type="hidden" name="existing_email" value="<?php echo (isset($user['mail'])) ? $user['mail'] : ''; ?>">
                                <input type="submit" value="SAVE CHANGES" class="btn black-btn borderround ">
                              </div>
                            </div>
                            <?php echo form_close(); ?>
                          </div>
                      </div>

                      <div class="acordian-wrap closed">
                        <h4 class="acordian-t"><span class="glyphicon glyphicon-lock"></span> Change Password </h4>
                          <div class="acordian-b">
                          <div class="uniqform" >
                            <div class="form-group">
                              <div class="input input--sae">
                                <input class="input__field input__field--sae" type="password"   />
                                <label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">Old Password</span> </label>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input input--sae">
                                <input class="input__field input__field--sae" type="password"   />
                                <label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">New Password</span> </label>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input input--sae">
                                <input class="input__field input__field--sae" type="password"   />
                                <label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">Retype Password</span> </label>
                              </div>
                            </div>
                             
                            <div class="form-group">
                              <input type="submit" value="SAVE CHANGES" class="btn btn black-btn  borderround ">
                            </div>
                          </div>
                          </div>
                      </div>

                      <div class="acordian-wrap closed">
                        <h4 class="acordian-t"><span class="glyphicon glyphicon-map-marker"></span> My Address </h4>
                          <div class="acordian-b">
                          <div class="row">
                          <div class="col-md-5 col-sm-12">
                              <h5 class="mb20"><b>  Shipping Address</b></h5>
                              <?php foreach ($user['address'] as $address) : ?>
                                <div class="row ship-box"> 
                                  <div class="row top">
                                    <font><?php echo $address['name']; ?></font>
                                    <span><i class="fa-edit" title="Edit" ><img src="./images/edit-white.svg" width="25" height="25" /></i> <i class="fa-delete" title="Delete" ><img src="./images/cross-white.svg" /></i> </span>
                                  </div>
                                  <div class="row cont">
                                    <?php echo $address['address1']; ?> <?php echo $address['address2']; ?> <br>
                                    <?php echo $address['city']; ?><br>
                                    <?php echo $address['state']; ?> <?php echo $address['zipcode']; ?> <br>
                                    <?php echo $address['mobile']; ?>
                                  </div> 
                                </div>
                              <?php endforeach; ?>
                          </div>
                              <div class="col-sm-1 text-center hidden-sm hidden-xs "> <div class="ordivider"><span>OR</span></div> </div>
                            <div class="col-md-6 col-sm-12">
                              <h5 class="mb20"><b>Enter New Shipping Address</b></h5>
                                <?php echo form_open('admin/users/update_address', 'class="form-user-address-edit" id="edit-address" role="form"') ; ?>
                                <div id="" class="uniqform">
                                      <div class="form-group">
                                        <div class="input input--sae">
                                          <input class="input__field input__field--sae" type="text" name="address_name" />
                                          <label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">Name *</span> </label>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="input input--sae">
                                          <input class="input__field input__field--sae" type="text" name="address_mobile" />
                                          <label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">Phone *</span> </label>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="input input--sae">
                                          <input class="input__field input__field--sae" type="text" name="address_line_1" />
                                          <label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">Address 1 *</span> </label>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="input input--sae">
                                          <input class="input__field input__field--sae" type="text" name="address_line_2" />
                                          <label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">Address 2 *</span> </label>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="input input--sae">
                                          <input class="input__field input__field--sae" type="text" name="address_city" />
                                          <label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">City *</span> </label>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="input input--sae selecteliment">
                                          <select name="address_state" class="input__field input__field--sae">
                                            <option value="" selected="selected">-- Any --</option>
                                            <?php foreach($states as $state) : ?>
                                              <option value="<?php echo $state->state_2_code; ?>"><?php echo $state->state_name; ?></option>                                       
                                            <?php endforeach; ?>
                                          </select>
                                          <label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">State *</span> </label>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="input input--sae">
                                          <input class="input__field input__field--sae" type="text" name="address_zipcode" />
                                          <label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">Pincode *</span> </label>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <input type="hidden" name="address_id" class="form-control" value="">
                                        <input type="submit" value="SUBMIT" class="btn black-btn borderround ">
                                      </div>
                                </div>
                                </form>
                              </div>
                              
                              
                          </div>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
    	</div>
  	</div>  
</div>
<!--end-->
  <div id="bankForm" class="modal fade" role="dialog">
    <div class="modal-dialog"> 
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title text-center" ><b>Add Bank Details</b></h4>
        </div>
        <div class="modal-body">
          <div id="custom_error_seller" class="error_place_holder"> </div>
          <div class="bankdetailbox uniqform">
            <div class="form-group">
              <div class="input input--sae">
                <input class="input__field input__field--sae" type="text"   />
                <label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">Bank name *</span> </label>
              </div>
            </div>
            <div class="form-group">
              <div class="input input--sae">
                <input class="input__field input__field--sae" type="text"   />
                <label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">Account Number *</span> </label>
              </div>
            </div>
            <div class="form-group">
              <div class="input input--sae">
                <input class="input__field input__field--sae" type="text"   />
                <label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">IFSC code *</span> </label>
              </div>
            </div>
            <div class="form-group">
              <div class="input input--sae">
                <input class="input__field input__field--sae" type="text"   />
                <label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">Branch Name *</span> </label>
              </div>
            </div>
            <div class="form-group">
              <div class="input input--sae">
                <input class="input__field input__field--sae" type="text"   />
                <label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">Account Holders Name *</span> </label>
              </div>
            </div>
            <div class="form-group">
              <div class="input input--sae">
                <input class="input__field input__field--sae" type="text"   />
                <label class="input__label input__label--sae"  > <span class="input__label-content input__label-content--sae">Account Holders Name *</span> </label>
              </div>
            </div>
            <div class="formlabel">Pancard Xerox</div>
            <div class="form-group">
              <input class="form-control form-file" type="file" id="edit-file" name="files[]" size="60">
              <small>JPG's, GIF's, and PNG's only, 10MB Max Size</small> </div>
            <div class="form-group">
              <input name="" type="button" value="SUBMIT" class="btn black-btn borderround ">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
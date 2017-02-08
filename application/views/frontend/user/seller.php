            <div class="col-md-9 col-sm-9 my_acc">
                <!-- Tab panes -->
                <div class="tab-content tabs-right  myaccountright" id="buyerSec">
                  <div class="tab-pane active" id="sellinglist">
                  <h1 class="page-header">My Sales</h1>
                  <div class="row sellerdbrow1">
                    <div class="col-md-8">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h3 class="panel-title">Payment Info</h3>
                        </div>
                        <div class="panel-body">
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th></th>
                                  <th>No</th>
                                  <th>Amount</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td><a href="/user/sales/products">Payment Processed</a></td>
                                  <td><?php echo isset($payment_done['count']['count']) ? $payment_done['count']['count'] : 0; ?></td>
                                  <td><span class="rupee"></span><?php echo isset($payment_done['sum']) ? $payment_done['sum'] : 0; ?> </td>
                                </tr>
                                <tr>
                                  <td><a href="/user/sales/products?active=under_process">Payment Under Process</a></td>
                                  <td><?php echo isset($under_process['count']['count']) ? $under_process['count']['count'] : 0; ?></td>
                                  <td><span class="rupee"></span><?php echo isset($under_process['sum']) ? $under_process['sum'] : 0; ?> </td>
                                </tr>
                                <tr>
                                  <td><a href="/user/sales/products?active=pending">Pending Payments</a></td>
                                  <td><?php echo isset($pending_payments['count']['count']) ? $pending_payments['count']['count'] : 0; ?></td>
                                  <td><span class="rupee"></span><?php echo isset($pending_payments['sum']) ? $pending_payments['sum'] : 0; ?> </td>
                                </tr>
                                <tr>
                                  <td><a href="/user/sales/products?active=unsold">Products Not Yet Sold</a></td>
                                  <td><?php echo isset($product_count['count']['count']) ? $product_count['count']['count'] : 0; ?></td>
                                  <td><span class="rupee"></span><?php echo isset($product_count['sum']) ? $product_count['sum'] : 0; ?> </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h3 class="panel-title">Balance</h3>
                        </div>
                        <div class="panel-body text-center">
                          <h2 class="balance"><span class="rupee"></span><?php echo isset($under_process['sum']) ? $under_process['sum'] : 0; ?></h2>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row bank">
                    <div class="col-md-12">
                      <div class="panel panel-default ">
                        <div class="panel-heading" style="overflow: hidden;">
                          <h3 class="panel-title pull-left">Bank Details</h3>
                          <a href="#" class="pull-right" data-toggle="modal" data-target="#bankForm"><i class="eidticon"></i></a> </div>
                        <div class="panel-body">
                          Bank Name: <?php echo isset($bank_details[0]->user_bank_name) ? $bank_details[0]->user_bank_name : "NA"; ?><br><br>
                          Account Number: <?php echo isset($bank_details[0]->user_bank_account_number) ? $bank_details[0]->user_bank_account_number : "NA"; ?><br><br>
                          IFSC Code: <?php echo isset($bank_details[0]->user_bank_ifsc) ? $bank_details[0]->user_bank_ifsc : "NA"; ?><br><br>
                          Branch Name: <?php echo isset($bank_details[0]->user_bank_branch) ? $bank_details[0]->user_bank_branch : "NA"; ?><br><br>
                          Holder Name: <?php echo isset($bank_details[0]->user_bank_holder_name) ? $bank_details[0]->user_bank_holder_name : "NA"; ?><br><br>
                          Pancard: <?php echo isset($bank_details[0]->user_bank_pan_number) ? $bank_details[0]->user_bank_pan_number : "NA"; ?>
                         </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12"> <a href="<?php echo site_url('user/seller/product'); ?>" class="btn darkgraybtn" aria-expanded="true">Check Selling History</a> </div>
                  </div>
                  <div class="row seller_img">
                    <div class="col-md-12"> <a href="https://www.pretmode.com/user/sales/request"><img class="img-responsive zoom-section" src="https://www.pretmode.com/sites/default/files/seller_dash_img.jpg"></a> </div>
                  </div>
                  </div>
                </div>
            </div>
            <div class="clearfix"></div>
      </div>
    </div>  
</div>
<!--end-->
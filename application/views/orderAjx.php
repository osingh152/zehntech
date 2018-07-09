<div class="col-md-12">
                 <?php if(count($orders)>=1) { ?>
     <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Orders</div>
                        
                    </div>     

                    <div  class="panel-body" >
                 <table class="table table-bordered"> 
                     <thead>
                     <th>Table</th>
                     <th>Cold Drink</th>
                     <th>Food</th>
                     <th>Quantity</th>
                     <th>Status</th>
                     <th>Amount</th>
                     </thead>
                     <tbody>
                         <?php 
                            foreach($orders as $odr) {
                                if($odr->status=='Closed')
                                {
                                    
                                  $cls='style="display:none"';
                                }
                         ?>
                         <tr>
                             <td><?php echo $odr->tablenumber ?></td>
                             <td><?php echo $odr->colddrinktype ?></td>
                             <td><?php echo $odr->foodtype ?></td>
                             <td><?php echo $odr->quantity ?></td>
                             <td><?php echo $odr->status ?></td>
                             <td><?php echo $odr->amount ?></td>
                         </tr>
                            <?php } ?>
                         
                     </tbody>
                 </table>
                    </div>
         <div class="panel-footer" <?php echo @$cls ?>>
             <div class="row">
                 <div class="col-md-6">
                     <input type="number" name="amount" id="amount" class="form-control" placeholder="Please enter amount" />
             </div>
             <div class="col-md-6">
                 <button class="btn btn-info" onclick="UpdateOrder()">Print</button>
             </div>
             </div>
             
         </div>
     </div>
                 <?php }
                 
                 else {
                     echo 'Order not found';
                 }
                 ?>
                  
             </div>
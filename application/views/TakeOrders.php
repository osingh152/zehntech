 <div class="container">    
         <div class="row">
             <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <form action="" method="post">
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Menu</div>
                        
                    </div>     

                    <div  class="panel-body" >
                        
                        <div class="form-group">
                                    <label>Table Number</label>
                                    <select name="TableNumber" class="form-control">
                                        <?php 
                                        foreach($Tables as $row)
                                            { ?>
                                        <option value="<?php echo $row->tablenumber ?>"><?php echo $row->tablenumber ?></option>    
                                            <?php 
                                            
                                            } 
                                        
                                        ?>
                                    </select>
                                    
                                    
                         </div>
                        <div class="form-group">
                                    <label>Cold Drinks</label>
                                    <select name="ColdDrinkType" class="form-control">
                                        <option value="Not Require">Not Require</option>
                                        <?php 
                                        foreach($ColdDrinkType as $row)
                                            { ?>
                                        <option value="<?php echo $row->colddrinktype ?>"><?php echo $row->colddrinktype ?></option>    
                                            <?php 
                                            
                                            } 
                                        
                                        ?>
                                    </select>
                                    
                                    
                         </div>
                        <div class="form-group">
                                    <label>Food</label>
                                    <select name="FoodType" class="form-control">
                                        <option value="Not Require">Not Require</option>
                                        <?php 
                                        foreach($FoodType as $row)
                                            { ?>
                                        <option value="<?php echo $row->foodtype ?>"><?php echo $row->foodtype ?></option>    
                                            <?php 
                                            
                                            } 
                                        
                                        ?>
                                    </select>
                                    
                                    
                         </div>
                        <div class="form-group">
                            <label>Quantity</label>
                            <input name="Quantity" type="number" class="form-control" placeholder="Please enter quantity" required="" />
                            
                        </div>
                        <input type="submit" name="order" value="Order" class="btn btn-primary" />
                       </div>                     
                    </div>  
           </form>
        </div>
         </div>
        
         <div class="row">
             <div class="col-md-12">
                 
                 <?php if(count($orders)>=1) { ?>
                 <h3>My Orders</h3>
                 <table class="table table-bordered"> 
                     <thead>
                     <th>Table</th>
                     <th>Cold Drink</th>
                     <th>Food</th>
                     <th>Quantity</th>
                     <th>Status</th>
                     </thead>
                     <tbody>
                         <?php 
                            foreach($orders as $odr) {
                         ?>
                         <tr>
                             <td><?php echo $odr->tablenumber ?></td>
                             <td><?php echo $odr->colddrinktype ?></td>
                             <td><?php echo $odr->foodtype ?></td>
                             <td><?php echo $odr->quantity ?></td>
                             <td><?php echo $odr->status ?></td>
                         </tr>
                            <?php } ?>
                     </tbody>
                 </table>
                 <?php } ?>
                  
             </div>
         </div>
       
        
    </div>
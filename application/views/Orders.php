 <div class="container">    
         <div class="row">
             <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <form action="" method="post">
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Orders</div>
                        
                    </div>     

                    <div  class="panel-body" >
                        <div class="form-group">
                                    <label>Table Number</label>
                                    <select name="TableNumber" id="TableNumber" class="form-control" onchange="GetOrders(this.value)">
                                        <option value="">Please select table number</option>
                                        <?php 
                                        foreach($Tables as $row)
                                            { ?>
                                        <option value="<?php echo $row->tablenumber ?>"><?php echo $row->tablenumber ?></option>    
                                            <?php 
                                            
                                            } 
                                        
                                        ?>
                                    </select>
                                    
                                    
                         </div>
                       
                       </div>                     
                    </div>  
           </form>
        </div>
         </div>
        
     <div class="row" id="orders">
             <div class="col-md-12">
                 <?php if(count($orders)>=1) { ?>
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
<script type="text/javascript">

function GetOrders(table)
{
    if(table==='')
    {
        alert('Please select table number');
    }
    else {
         $('#orders').html('Please wait');
         $.ajax({
                    url: '<?php echo base_url() ?>index.php/manager/getOrders/'+table,
                    beforeSend: function( xhr ) {
                      xhr.overrideMimeType( "text/plain; charset=utf-8" );
                    }
                  })
                    .done(function( data ) {
                     $('#orders').html(data);
                    
                    });
    }
}

function UpdateOrder()
{
    var table=$('#TableNumber').val();
    $.ajax({
            url: '<?php echo base_url() ?>index.php/manager/UpdateOrders/'+table,
            beforeSend: function( xhr ) {
                xhr.overrideMimeType( "text/plain; charset=utf-8" );
                }
            }).done(function( data )
                    {
                     console.log(data);
                    
                    });
    
}
</script>
<div class="btn-group btn-group-justified">
<a href="carwash/Reg_transactions/" class="btn btn-primary" id="Reg_transactions"><i class="mdi-social-people"></i> Regular Customer Transactions</a>
<a href="carwash/NonReg_transactions/" class="btn btn-primary" id="NonReg_transactions"><i class="mdi-social-people-outline"></i> Non-Regular Customer Transactions</a>
</div>

<script>
$('#Reg_transactions').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');
                $('#subloader').load('/IOC/carwash/' + id,function(){
                    
                    $('#subloader').hide();
                	$('#subloader').fadeIn('fast');
                });
	        });
            
$('#NonReg_transactions').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');
                $('#subloader').load('/IOC/carwash/' + id,function(){
                    
                    $('#subloader').hide();
                	$('#subloader').fadeIn('fast');
                });
	        });
          </script>
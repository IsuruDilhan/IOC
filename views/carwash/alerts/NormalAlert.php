
<!-- DISPLAYING LATEST TRANSACTIONS-->
<div class="col-lg-12 text-center">
    <h3 class="text-center success"><strong>Earlier NON-Regular Customer Transactions</strong></h3>

</div>
<table class="table table-striped table-bordered table-hover">

    <thead>
        <tr class="success">
            <th class="text-center">Customer Name</th>
            <th class="text-center">Package</th>
            <th class="text-center">Contact</th>
            <th class="text-center">Email</th>
            <th class="text-center">Vehicle No</th>
            <th class="text-center">Status</th>
            <th class="text-center">Date</th>
            <th class="text-center">Send SMS & Email Alert</th>
            

        </tr>
    </thead>
    <tbody>
        <?php foreach ($Transactions as $transaction) : ?>						
            <tr>
                <td><?php echo ($transaction->cname); ?></td>
                <td><?php echo ($transaction->package); ?></td>
                <td><?php echo ($transaction->contact); ?></td>
                <td><?php echo ($transaction->email); ?></td>
                <td><?php echo ($transaction->vehicleNo); ?></td>
                <td><?php echo ($transaction->status); ?></td>
                <td><?php echo ($transaction->date); ?></td>
               
                <td>
                    <a id="alert_Cartrans" onclick="SendNormalAlert('<?php echo ($transaction->id); ?>','<?php echo ($transaction->cname); ?>','<?php echo ($transaction->email); ?>','<?php echo ($transaction->contact); ?>')"> <i class="mdi-communication-textsms"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script type="text/javascript">

   
    function SendNormalAlert(id,cname,email,contact) {
        swal({
            title: "Are you sure?",
            text: "You are about to send a confirmation Email to client for collect the vehicle!!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, Send Alert!",
            cancelButtonText: "No, Cancel!",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function (isConfirm) {
            if (isConfirm) {
                swal("Message Sent!", "Your Confirmation Alert has been sent.", "success");
                
                $.post('carwash/UpdateNonRegStatus', {id: id, user:cname, email:email, contact:contact}, function (data) {
                                            console.log(data);

                                        });
                                        $('#subloader2').empty();
                                        $('#subloader2').load('/IOC/carwash/NormalAlert', function () {
                                            $('#subloader2').hide();
                                            $('#subloader2').fadeIn('fast');
                                        });

            } else {
                swal("Cancelled", "Your Email was not sent :)", "error");
            }
        });
    }
</script>
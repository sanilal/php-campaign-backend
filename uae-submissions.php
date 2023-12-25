<?php $active="submissions"; 
ob_start();
include("includes/conn.php"); 
?>

<?php include_once('includes/header.php'); ?>


 <!-- Left side column. contains the sidebar -->
 <?php include_once('includes/side_bar.php'); ?>

<?php  
if(isset($_GET['p_id']) && isset($_GET['status']) ){
	$id = $_GET['p_id'];
	$status = $_GET['status'];
	$query = "UPDATE `".TB_pre."products` set status='$status' WHERE `product_id`='$id'";
	$r = mysqli_query($url, $query) or die(mysqli_error($url));
	if($r){
		$msg = "Status updated Successfully.";
	}
}

if(isset($_GET['remove_pr'])){
	$id = $_GET['remove_pr'];
	$pr_img_res=mysqli_fetch_object(mysqli_query($url,"select product_img,gallery_imgs from `".TB_pre."products` WHERE `product_id`='$id'"));
	$query = "DELETE FROM `".TB_pre."shop_win` WHERE `entry_id`='$id'";
	$r = mysqli_query($url, $query) or die(mysqli_error($url));
	unlink( "uploads/".$pr_img_res->product_img);
	$g_imgs=explode(",",$pr_img_res->gallery_imgs);
	foreach($g_imgs as $g_img){
		unlink( "uploads/".$g_img->product_img);
	}
	if($r){
		$msg = "The selected entry deleted successfully.";
	}
}
$sql="select * from `".TB_pre."shop_win` WHERE `zone_country` ='uae'  ORDER BY entry_id DESC ";
$r1=mysqli_query($url,$sql) or die("Failed".mysqli_error($url));

?>  

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            View Submissions
            <small></small>
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <?php if(isset($msg)){ ?>
              	<div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-check"></i> <?php echo $msg; ?></h4>
               	</div>
               <?php } ?> 
            </div>
            
            <div class="box-body">
				<div class="filterByemirate">
					<h3>Filter by Emirate</h3>
					<select class="form-control" name="emairate" id="emirate">
					   <option value="" selected>Select Emirate</option>
					   <option value="Abu Dhabi">Abu Dhabi</option>
					   <option value="Ajman">Ajman</option>
					   <option value="Dubai">Dubai</option>
					   <option value="Fujairah">Fujairah</option>
					   <option value="Ras Al Khaimah">Ras Al Khaimah</option>	
					   <option value="Sharjah">Sharjah</option>
					   <option value="Umm Al Quwain">Umm Al Quwain</option>
					</select> <a href="uae-submissions.php" class="clearfilter">Clear Filter</a>
				</div>
				<div id="emirateFilter">
        <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                      <th>Sl. No</th>
                      	<th>Full Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Date of Birth</th>
                        <th>Nationality</th>
                        <th>Emirates Id</th>
                        <th>City</th>
                        <th>Invoice No.</th>
                        <th>Invoice Value</th>
                        <th>Store</th>
                        <th>Submitted On</th>
                        <th>View</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
					$i = 1;
					while($res = mysqli_fetch_array($r1)){ ?>
                      <tr>
                        <td><?php echo $i++; ?></td>
                        <!--<td><?php //if($res["product_img"]!=""){ ?>
                      <img src="uploads/<?php //echo $res["product_img"]; ?>" width="200" />
                      <?php //} else{ echo "No-image";} ?></td>-->
						<td><?php echo $res['full_name']; ?></td>
                        <td><?php echo $res['email']; ?></td>
						<td><?php echo $res['mobile']; ?></td>
            <td><?php echo $res['dob']; ?></td>
            <td><?php echo $res['country']; ?></td>
            <td><?php echo $res['eid']; ?></td>
            <td><?php echo $res['emirate']; ?></td>
						<td><a download="<?php echo $res["invoice_img"]; ?>" href="../Administrator987/uploads/<?php echo $res["invoice_img"]; ?>"><?php echo ltrim($res['invoice_no'], 'uae'); ?></a></td>
            <td><?php echo $res['invoice_value']; ?></td>
            <td><?php echo $res['retailer_name']; ?></td>

            <td><?php echo date('Y-m-d', strtotime($res['submission_date'])); ?></td>
                        <td><a href="view-submission.php?e_id=<?php echo $res['entry_id']; ?>" class="btn btn-primary" title="">View</a>&nbsp;
                        <a href="javascript:removeItem(<?php echo $res['entry_id']; ?>);" class="btn btn-danger">Remove</a></td>
                      </tr>
                      <?php }?>
                    </tbody>
                    <tfoot>
                    </tfoot>
                  </table>
					</div>
                </div><!-- /.box-body -->
            <div class="box-footer">
            
            </div><!-- /.box-footer-->
          </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

     
      <!-- Control Sidebar -->


	<?php include_once('includes/footer.php'); ?>
    <!-- jQuery 2.1.4 -->
   <?php include_once('includes/footer-scripts.php'); ?>
    
    
    <!-- AdminLTE for demo purposes -->
     <script>
      $(function () {
        /*$('#example2').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false
		  });*/
		  $('#example2').DataTable( {
        dom: 'Bfrtip',
        /*buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]*/
		buttons: [
            {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [ 0, ':visible' ]
                }
            },
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4 ]
                }
            },
			{
                extend: 'print',
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4 ]
                }
            },
            'colvis'
        ]
    } );
      });
    </script>
 
    <script type="text/javascript">
    function removeItem(id){
		var c= confirm("Do you want to remove this?");
		if(c){
			location = "uae-submissions.php?remove_pr="+id;
		}
	}
	
    </script>
<script>
	$('#emirate').on('change', function(){
		var emirate = $('#emirate').find(":selected").text();
		if(emirate != 'Select Emirate') {
			$('.clearfilter').addClass('active');
		$.ajax({
					type: 'POST',
					url: 'ajax-emirate-search.php',
					data:  {emirate : emirate},
					success:function(html){
						$("#emirateFilter").html(html)
						var inverror = $('.invoice-error p').html();
						var lastSeven = inverror.substr(inverror.length - 7);
						if(lastSeven === 'exists.') {
							$('#invoice_number').val("");
						}
					}
				});
	}

	})
	

</script>
  </body>
</html>
<?php ob_end_flush(); ?>
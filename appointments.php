<?php include("includes/header.php"); ?>
<!--slide-->
<?php include("includes/sidebar_common.php"); ?>	

    <div id="secondarycontent">
    <div class="secondarycont"> 

<div class="secondarycontenttop">
<div class="contenttitle">Product Enquiry</div>
<br>
<div class="normaltext">
  <?php 
  
			insert_update_item_hit_count(-1,"appointments","appointments");
			$contents = get_page_contents("appointments");
	        $page_contents = $contents['page_contents'];
			$pro_id = @	$_REQUEST['id'];
			 
			 echo $page_contents;
			 echo "<br>";
			 
			
			$pro_name = get_product_name($pro_id);
			
			if(@$_SESSION['logmsg'])
			{
			  echo "<div id='test-text'>";
			  echo @$_SESSION['logmsg'];
			  echo "</div>";
			  @$_SESSION['logmsg'] = "";
			}else{
			 
			?>		
			
			
			</div>


<div id="appoint-inner">

<form name="frmappointmentnew" method="post" action="process_apppointments.php?flag=2" onsubmit="javascript:return checkAppointmentFormtest();">
	
		<table border="0" cellpadding="0" cellspacing="0" class="pro_table_node_enq">
		
		<tr>
			<th >Product Name</th>
			<td><input class="enq_text_box" type="text"  id="txt_proname" name="txt_proname" value="<?php echo $pro_name['title'];?>" /></td>
		</tr>
		<tr>
			<th>Name</th>
			<td> <input class="enq_text_box" type="text"  name="txt_name" id="txt_name"/></td>
		</tr>
		
		<tr>
			<th>Email</th>
			<td><input class="enq_text_box" type="text"  name="txt_email" id="txt_email"/></td>
		</tr>
		<tr>
			<th>Phone / Mobile</th>
			<td><input class="enq_text_box" type="text"  name="txt_phone" id="txt_phone"/></td>
		</tr>
		<tr >
			<th colspan="2">Query (or) Comments</th>
		</tr>
		<tr>
			<td colspan="2" style="border-top:none;"><textarea class="enq_text_box_area" name="txt_notes" id="txt_notes" rows="4" cols="70"></textarea></td>
		</tr>
		<tr><td colspan="2" align="center"><input type="Submit" class="enq_sub" id="sub" name="btn_submit1" value=" Submit "></td></tr>
		</table>
		</form>
		</div>
		</td>

</tr>

</table>
<?php
			}
 //echo '<img src="images/schedule-an-appointment.jpg" width="400" height="400" align="left" style="padding:5px;"/>';
?>
 </div>
 
 </div>

</div> </div> </div>
<?php include("includes/footer.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Table V04</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<!--===============================================================================================-->
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="./js/main.js" type="text/javascript"></script>
<!--===============================================================================================-->
</head>

<body>
	<h1>EDITTED</h1>


					<div class="table100-body js-pscroll">
						<table id="tb1">
							<tbody>
								<tr  class="row100 body" id="tr_row">
									<td class="cell100column1"><input type="text" id="i1" value="patient_id"/></td>
									<td class="cell100column2"><input type="text" id="i2" value="patient_name"/></td>
									<td class="cell100column3"><input type="text" id="i3" value="medical_product"/></td>
									<td class="cell100column4"><input id="i4" value="dosage" type="text"/></td>
									<td class="cell100column5"><input id="i5" value="dose_unit" type="text"/></td>
									<td class="cell100column6"><input id="i6" value="frequency" type="text"/></td>
									<td class="cell100column7"><input id="i7" value="phone" type="text"/></td>
									<td class="cell100column8"><input id="i8" value="start time" type="text"/></td>
									<td class="cell100column9"><button type="button" class="btn btn-info" id="submit">Submit</button></td>
								</tr>
							</tbody>
						</table>

						<script>
						var id;
						var name;
						var product;
						var dosage;
						var dose;
						var frequency;
						var phone;
						var start;

						$("#tb1 input[id^='i1']").on('change', function(e) {
  						var data1 = $(this).val();
  						//alert(id)
  						id = data1;
						});
						$("#tb1 input[id^='i2']").on('change', function(e) {
  						var data2 = $(this).val();

  						name = data2;
  						alert(name);
						});
						$("#tb1 input[id^='i3']").on('change', function(e) {
  						var data3 = $(this).val();

  						product = data3;
  						//alert(product);
						});
						$("#tb1 input[id^='i4']").on('change', function(e) {
  						var data4 = $(this).val();

  						dosage = data4;
  						//alert(dosage);
						});
						$("#tb1 input[id^='i5']").on('change', function(e) {
  						var data5 = $(this).val();

  						dose = data5;
  						//alert(dose);
						});
						$("#tb1 input[id^='i6']").on('change', function(e) {
  						var data6 = $(this).val();

  						frequency = data6;
  						//alert(frequency);
						});

						$("#tb1 input[id^='i7']").on('change', function(e) {
  						var data7 = $(this).val();

  						phone = data7;
  						//alert(phone);
						});

						$("#tb1 input[id^='i8']").on('change', function(e) {
  						var data8 = $(this).val();

  						start = data8;
  						//alert(phone);
						});


						$("#submit").click(function () {

						$('#tb1 .cell100column1').each(function()
						{
				          var base_url="http://localhost/ConUHacksIII/ElderHelpApp";
				          var url = base_url+'/update';
				          var postdata = "id=" + id + "&name=" + name + "&product=" + product + "&dosage=" + dosage + "&dose=" + dose + "&frequency=" + frequency + "&phone=" + phone + "&start=" + start;
				          alert(postdata);
				          $.ajax({
				            type:"POST",
				            url:url,
				            data:postdata,
				            success:function(data){
				              //alert("success");
				              //alert(data);
			            }
				          });

				         $(document).ready(function() {
				          var base_url="http://localhost/ConUHacksIII/ElderHelpApp";
				          var url = base_url+'/get';
				          var postdata = "id=" + id;
				          //alert(postdata);
				          $.ajax({
				            type:"POST",
				            url:url,
				            data:postdata,
				            success:function(data){
				            	alert("success");
				            	//alert(data);
				            }
				          });
				        });
				        });

						});
						</script>
			


						<!-- <a href="#" class="btn btn-info" role="button">Link Button</a> -->
						<button type="button" class="btn btn-info" id="add_row">Add Row</button>
						<button type="button" class="btn btn-info" id="del_row">Del Row</button>
						<!-- <a href="#" id="insert-more"> Add New Row </a> -->
					</div>

</body>
</html>

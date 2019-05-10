<!DOCTYPE html>
<html lang="en">

	<?php include('header.php') ?>

	<body>
		<section id="container" class="all">
			<?php include('menu.php') ?>
			<section id="main-content">
		        <section class="wrapper back-ops">

				     <div class="container-fluid pt-30 ">

				     	<div class="sect">
				     		<div class="alimov2">
				     			<span class="spanp1">Want Community Prizing for your event? <a href="blog/index.php" class="alink2"> Read our blog to find out how!</a></span>
				     		</div>

				     		<div class="text-center mt-20">
				     			<img class="img-log" src="assets/img/games/Critical_Force_logo_text.png" alt="">
			     				<h3 class="title5 f-w text-center mt-30">Want to win Critical Ops Prizes?</h3>
			      				<h4 class="title4 text-center mb-30">Check out these tournaments with official Critical Ops prizes!</h4>
				      			<img class="img-log1" src="assets/img/games/credits-icon.png" alt="">
				     		</div>
				     	</div>
				     </div>
		            	                   	
						<div class="sect" >
							<h4 class="titleh4 mb-20">Community Tournaments</h4>


							<div class="table-wrap mb-30">
								<div class="table-responsive">
									<table id="tablelist3" class="table  display mb-30">
										<thead>
											<tr>
												<th class="text-left">TOURNAMENT</th>
												<th class="text-left">ORGANIZATION</th>
												<th class="text-center">REGION</th>
												<th class="text-center">DATE</th>
												<th class="text-center">TIME</th>
											</tr>
										</thead>

										<tbody>
											<?php for ($i=0; $i < 15 ; $i++) { ?>
												
											<a href=""><tr>
												<td>Polaris Season 9 [Asia]</td>
												<td>Polaris Tournament</td>
												<td class="text-center">North America</td>
												<td class="text-center">April 24, 2019</td>
												<td class="text-center">
													<span class="label-success">7:00 AM</span>
												</td>
												<!-- <td class="text-center w10p"><a href="details-tournament.php" class="alink"><i class="fa fa-eye"></i></a></td> -->
											</tr></a>
											<?php } ?>

										</tbody>
									</table>
								</div>
							</div>	
						</div>
				     </div> <!-- close container-fluid -->
	  				<?php include('footer.php') ?>
				</section> <!-- close section wrapper -->
	  		</section> <!-- close section main-cointaner -->
	  	</section> <!-- close section menu -->

		<?php include('scripts.php') ?>

		<script>
			$('#tablelist3').DataTable( {
    
		    dom: 'Bfrtip',
		        buttons: [
		            // 'pageLength'
		        ],
		        "searching": false,
		        "order": [[ 3, "asc" ]],

		    } );

		    $(document).ready(function() {
			    var table = $('#tablelist3').DataTable();
			     
			    $('#tablelist3 tbody').on('click', 'tr', function () {
			        var data = table.row( this ).data();
			         url = 'details-tournament.php';
			         window.location=url;
			    } );
			} );

		</script>

	</body>
</html>



	<?php include("header.php");?>
		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
				<ol class="breadcrumb">
					<li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
					<li class="active">Unresolved Security Issues</li>
				</ol>
			</div><!--/.row-->

			<div class="row">
				<div class="col-lg-12">
	<?php $c = 1;?>
					<table class="table table-bordered">
						<thead>
							<th>SN</th>
							<th>Issue Date</th>
							<th>Issue</th>
						</thead>
						<tbody>
							<tr>
								<td><?php echo $c++; ?></td>
								<td>21st October 2014</td>
								<td>Vandalisation Fine(N3,000)</td>
							</tr>
							<tr>
								<td><?php echo $c++; ?></td>
								<td>11th June 2015</td>
								<td>Fighting Fine(N10,000)</td>
							</tr>
							<tr>
								<td><?php echo $c++; ?></td>
								<td>30th July 2016</td>
								<td>Participation in Riot(N20,000)</td>
							</tr>
							</tbody>
					</table>
				</div></div>
			

	<?php include("footer.php");?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<title>Tutorial DataTables 2</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h1>Tutorial DataTables 2</h1>

				<table id="table_id" class="table table-bordered table-striped table-hover">
					<thead>
						<tr>
							<td>Judul</td>
							<td>Isi</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($dataArtikel as $row): ?>
						<tr>
							<td>
								<?=$row->judul?>
							</td>
							<td>
								<?=$row->isi?>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>

			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#table_id').DataTable({
				"order": []
			});
		});
	</script>
</body>

</html>

<div class="col-md-12">
<div class="box">
<div class="box-header">
<h3 class="box-title"><i class="glyphicon glyphicon-th"></i> Supplier</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
	<p>
<a <?php displayAkses('supplier_tambah',$userlevel);?>  href="#" class='btn btn-success btn-sm' id='new'><i class='fa fa-pencil-square-o'></i> Tambah</a>
<a href="#"  class="btn btn-primary btn-sm" id="import"><i class='fa fa-upload'></i> Import Data</a>

<a href="#" class="btn btn-warning btn-sm" id="refresh"><i class='fa fa-refresh'></i> Refresh</a>
</p>
	  <div class="table-responsive">
		<table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
		  <thead>
			<tr>
			  <th style="width:50px">ID</th>
			  <th>Nama Supplier</th>
			  <th>Alamat</th>
			  <th>Kota</th>
			  <th>No HP</th>
			  <th>Email</th>
			  <th>Website</th>
			  <th style="width:50px"></th>
			</tr>
		  </thead>
		</table>
	  </div>
	</div>
  </div>
</div>



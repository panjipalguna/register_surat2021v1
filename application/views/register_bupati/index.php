<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Register Bupati Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('register_bupati/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>No Urut</th>
						<th>Tanggal Masuk</th>
						<th>Asal Surat</th>
						<th>No Surat</th>
						<th>Tanggal Surat</th>
						<th>Perihal</th>
						<th>Kode</th>
						<th>Keterangan</th>
						<th>Upload Foto</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($register_bupati as $r){ ?>
                    <tr>
						<td><?php echo $r['no_urut']; ?></td>
						<td><?php echo $r['tanggal_masuk']; ?></td>
						<td><?php echo $r['asal_surat']; ?></td>
						<td><?php echo $r['no_surat']; ?></td>
						<td><?php echo $r['tanggal_surat']; ?></td>
						<td><?php echo $r['perihal']; ?></td>
						<td><?php echo $r['kode']; ?></td>
						<td><?php echo $r['keterangan']; ?></td>
						<td><?php echo $r['upload_foto']; ?></td>
						<td>
                            <a href="<?php echo site_url('register_bupati/edit/'.$r['no_urut']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('register_bupati/remove/'.$r['no_urut']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

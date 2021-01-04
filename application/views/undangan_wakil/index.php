<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Undangan Wakil Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('undangan_wakil/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>No</th>
						<th>Dari</th>
						<th>No Surat</th>
						<th>Tanggal</th>
						<th>Uraian</th>
						<th>Keterangan</th>
						<th>Upload Foto</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($undangan_wakil as $u){ ?>
                    <tr>
						<td><?php echo $u['no']; ?></td>
						<td><?php echo $u['dari']; ?></td>
						<td><?php echo $u['no_surat']; ?></td>
						<td><?php echo $u['tanggal']; ?></td>
						<td><?php echo $u['uraian']; ?></td>
						<td><?php echo $u['keterangan']; ?></td>
						<td><?php echo $u['upload_foto']; ?></td>
						<td>
                            <a href="<?php echo site_url('undangan_wakil/edit/'.$u['no']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('undangan_wakil/remove/'.$u['no']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

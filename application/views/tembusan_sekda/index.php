<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tembusan Sekda Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tembusan_sekda/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>No</th>
						<th>Asal Surat</th>
						<th>Tanggal Surat</th>
						<th>No Surat</th>
						<th>Keterangan</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tembusan_sekda as $t){ ?>
                    <tr>
						<td><?php echo $t['no']; ?></td>
						<td><?php echo $t['asal_surat']; ?></td>
						<td><?php echo $t['tanggal_surat']; ?></td>
						<td><?php echo $t['no_surat']; ?></td>
						<td><?php echo $t['keterangan']; ?></td>
						<td>
                            <a href="<?php echo site_url('tembusan_sekda/edit/'.$t['no']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tembusan_sekda/remove/'.$t['no']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tembusan Sekda Add</h3>
            </div>
            <?php echo form_open('tembusan_sekda/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="asal_surat" class="control-label">Asal Surat</label>
						<div class="form-group">
							<input type="text" name="asal_surat" value="<?php echo $this->input->post('asal_surat'); ?>" class="form-control" id="asal_surat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_surat" class="control-label">Tanggal Surat</label>
						<div class="form-group">
							<input type="text" name="tanggal_surat" value="<?php echo $this->input->post('tanggal_surat'); ?>" class="has-datepicker form-control" id="tanggal_surat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="no_surat" class="control-label">No Surat</label>
						<div class="form-group">
							<input type="text" name="no_surat" value="<?php echo $this->input->post('no_surat'); ?>" class="form-control" id="no_surat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="keterangan" class="control-label">Keterangan</label>
						<div class="form-group">
							<textarea name="keterangan" class="form-control" id="keterangan"><?php echo $this->input->post('keterangan'); ?></textarea>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Undangan Bupati Edit</h3>
            </div>
			<?php echo form_open('undangan_bupati/edit/'.$undangan_bupati['no']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="dari" class="control-label">Dari</label>
						<div class="form-group">
							<input type="text" name="dari" value="<?php echo ($this->input->post('dari') ? $this->input->post('dari') : $undangan_bupati['dari']); ?>" class="form-control" id="dari" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="no_surat" class="control-label">No Surat</label>
						<div class="form-group">
							<input type="text" name="no_surat" value="<?php echo ($this->input->post('no_surat') ? $this->input->post('no_surat') : $undangan_bupati['no_surat']); ?>" class="form-control" id="no_surat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal" class="control-label">Tanggal</label>
						<div class="form-group">
							<input type="text" name="tanggal" value="<?php echo ($this->input->post('tanggal') ? $this->input->post('tanggal') : $undangan_bupati['tanggal']); ?>" class="has-datepicker form-control" id="tanggal" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="uraian" class="control-label">Uraian</label>
						<div class="form-group">
							<textarea name="uraian" class="form-control" id="uraian"><?php echo ($this->input->post('uraian') ? $this->input->post('uraian') : $undangan_bupati['uraian']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="keterangan" class="control-label">Keterangan</label>
						<div class="form-group">
							<textarea name="keterangan" class="form-control" id="keterangan"><?php echo ($this->input->post('keterangan') ? $this->input->post('keterangan') : $undangan_bupati['keterangan']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="upload_foto" class="control-label">Upload Foto</label>
						<div class="form-group">
							<textarea name="upload_foto" class="form-control" id="upload_foto"><?php echo ($this->input->post('upload_foto') ? $this->input->post('upload_foto') : $undangan_bupati['upload_foto']); ?></textarea>
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
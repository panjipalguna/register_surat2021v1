<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Register Suratmasuk Edit</h3>
            </div>
			<?php echo form_open('register_suratmasuk/edit/'.$register_suratmasuk['no_urut']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="tanggal_masuk" class="control-label">Tanggal Masuk</label>
						<div class="form-group">
							<input type="text" name="tanggal_masuk" value="<?php echo ($this->input->post('tanggal_masuk') ? $this->input->post('tanggal_masuk') : $register_suratmasuk['tanggal_masuk']); ?>" class="has-datepicker form-control" id="tanggal_masuk" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="asal_surat" class="control-label">Asal Surat</label>
						<div class="form-group">
							<input type="text" name="asal_surat" value="<?php echo ($this->input->post('asal_surat') ? $this->input->post('asal_surat') : $register_suratmasuk['asal_surat']); ?>" class="form-control" id="asal_surat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="no_surat" class="control-label">No Surat</label>
						<div class="form-group">
							<input type="text" name="no_surat" value="<?php echo ($this->input->post('no_surat') ? $this->input->post('no_surat') : $register_suratmasuk['no_surat']); ?>" class="form-control" id="no_surat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_surat" class="control-label">Tanggal Surat</label>
						<div class="form-group">
							<input type="text" name="tanggal_surat" value="<?php echo ($this->input->post('tanggal_surat') ? $this->input->post('tanggal_surat') : $register_suratmasuk['tanggal_surat']); ?>" class="has-datepicker form-control" id="tanggal_surat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="perihal" class="control-label">Perihal</label>
						<div class="form-group">
							<input type="text" name="perihal" value="<?php echo ($this->input->post('perihal') ? $this->input->post('perihal') : $register_suratmasuk['perihal']); ?>" class="form-control" id="perihal" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="kode" class="control-label">Kode</label>
						<div class="form-group">
							<input type="text" name="kode" value="<?php echo ($this->input->post('kode') ? $this->input->post('kode') : $register_suratmasuk['kode']); ?>" class="form-control" id="kode" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="keterangan" class="control-label">Keterangan</label>
						<div class="form-group">
							<textarea name="keterangan" class="form-control" id="keterangan"><?php echo ($this->input->post('keterangan') ? $this->input->post('keterangan') : $register_suratmasuk['keterangan']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="upload_foto" class="control-label">Upload Foto</label>
						<div class="form-group">
							<textarea name="upload_foto" class="form-control" id="upload_foto"><?php echo ($this->input->post('upload_foto') ? $this->input->post('upload_foto') : $register_suratmasuk['upload_foto']); ?></textarea>
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
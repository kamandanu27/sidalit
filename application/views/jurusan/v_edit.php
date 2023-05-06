	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data jurusan</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="">Dashboard</a></li>
					<li class="breadcrumb-item active">jurusan</li>
					</ol>
				</div>
			</div>
		</div>
	</section>

	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3> edit Data jurusan </h3>
						</div>

						<form action="<?php echo base_url() ?>jurusan/update" method="post">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama jurusan</label>
                                    <input type="text" class="form-control" id="nama_jurusan" name="nama_jurusan" value="<?= $detail['nama_jurusan'] ?>">
									<input type="hidden" class="form-control" id="id_jurusan" name="id_jurusan" value="<?= $detail ['id_jurusan']?>">
									
                                </div>

                                

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</section>
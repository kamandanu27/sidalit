<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Cabor</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Cabor</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datacabor</h5>
              <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>

              <!-- Table with stripped rows -->
              <table id="example1" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Cabor</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody style="font-weight: 500;">
                                    <?php $no=1; foreach($tabel as $row){ ?>
                                        <tr>
											<td><?= $no++ ?></td>
											<td><?= $row->nama_cabor ?></td>
											<td>

												<a href="<?= base_url(); ?>cabor/edit/<?= $row->id_cabor ?>" type="submit" class="btn btn-warning" ><i class="icofont icofont-edit"></i> Edit</a>

												<a type="submit" class="btn btn-danger btnhapus" data-id="<?= $row->id_cabor ?>" style="color: white;"><i class="icofont icofont-trash"></i> Hapus</a>


											</td>
                                        </tr>
                                    <?php } ?>
								</tbody>
							</table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
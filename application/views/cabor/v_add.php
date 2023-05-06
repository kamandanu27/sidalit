<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
				<br>
				<form action="<?php echo base_url() ?>cabor/insert" method="post">
					<div class="row mb-3">
						<label for="inputText" class="col-sm-2 col-form-label">Nama Cabor</label>
						<div class="col-sm-10">
							<input type="text" id="nama_cabor" name="nama_cabor" class="form-control">
						</div>
					</div>
					
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label"></label>
						<div class="col-sm-10">
							<button type="submit" class="btn btn-primary">Submit Form</button>
						</div>
					</div>
				</form>


            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
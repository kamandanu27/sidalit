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
				<h5 class="card-title">General Form Elements</h5>
				<form action="<?php echo base_url() ?>cabor/insert" method="post">
					<div class="row mb-3">
						<label for="inputText" class="col-sm-2 col-form-label">Text</label>
						<div class="col-sm-10">
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="row mb-3">
					<label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control">
					</div>
					</div>
					<div class="row mb-3">
					<label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
					<div class="col-sm-10">
						<input type="password" class="form-control">
					</div>
					</div>
					<div class="row mb-3">
					<label for="inputNumber" class="col-sm-2 col-form-label">Number</label>
					<div class="col-sm-10">
						<input type="number" class="form-control">
					</div>
					</div>
					<div class="row mb-3">
					<label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
					<div class="col-sm-10">
						<input class="form-control" type="file" id="formFile">
					</div>
					</div>
					<div class="row mb-3">
					<label for="inputDate" class="col-sm-2 col-form-label">Date</label>
					<div class="col-sm-10">
						<input type="date" class="form-control">
					</div>
					</div>
					<div class="row mb-3">
					<label for="inputTime" class="col-sm-2 col-form-label">Time</label>
					<div class="col-sm-10">
						<input type="time" class="form-control">
					</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label">Submit Button</label>
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
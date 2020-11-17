<?php include(VIEWS . 'inc' . DS . 'header.php'); ?>

<h1 class="text-center mt-5 mb-2 py-3">View Company</h1>

<div class="container">
  <div class="main-body">

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="main-breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php url('home') ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php url('companies') ?>">Companies</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo $company['name']; ?></li>
      </ol>
    </nav>
    <!-- /Breadcrumb -->

    <div class="row gutters-sm">
      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center">
              <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="company" class="rounded-circle" width="150">
              <div class="mt-3">
                <h4><?php echo $company['name']; ?></h4>
                <p class="text-muted font-size-sm"><span><?php echo ucfirst($city['name'])  . ', ' . ucfirst($area['name']); ?></span></p>
                <a href="<?php url('companies/edit/' . $company['id']) ?>" class="btn btn-secondary">Edit</a>
                <a href="<?php url('companies/delete/' . $company['id']) ?>" class="btn btn-danger">Delete</a>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="col-md-8">
        <div class="card mb-3">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Name</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?php echo $company['name'] ?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Phone</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?php echo $company['phone']; ?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Categories</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?php foreach ($categories as $cat) {  ?>
                  <span style="cursor: text; pointer-events: none;" class="btn btn-info"> <?php echo ucwords($cat['name']); ?> </span>
                <?php } ?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Address</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <span><?php echo ucfirst($city['name'])  . ', ' . ucfirst($area['name']); ?></span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<?php include(VIEWS . 'inc' . DS . 'footer.php'); ?>
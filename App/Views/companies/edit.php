<?php include(VIEWS . 'inc' . DS . 'header.php'); ?>

<h1 class="text-center  mt-5 mb-2 py-3">Edit Company </h1>

<div class="container">
    <div class="row">
        <div class="col-8 mx-auto">


            <?php if (isset($success)) : ?>
                <h3 class="alert alert-success text-center"><?php echo $success; ?></h3>
            <?php endif; ?>
            <?php if (isset($error)) : ?>
                <h3 class="alert alert-danger text-center"><?php echo $error; ?></h3>
            <?php endif; ?>


            <form class="p-5 border mb-5" method="POST" action="<?php url('companies/update/' . $company['id']); ?>">
                <input type="hidden" name="id" value="<?php echo $company['id']; ?>">

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="<?php echo $company['name']; ?>" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="cats">Categories</label>
                    <select multiple class="form-control" id="cats" name="categories[]">
                        <option value="" disabled selected>Select one or more categories</option>
                        <?php foreach ($categories as $row) :  ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone" value="<?php echo $company['phone']; ?>" class="form-control" pattern="^01[0-2]{1}[0-9]{8}" required>
                </div>

                <div class="form-group">
                    <label for="cities">Cities</label>
                    <select class="form-control" id="cities">
                        <option value="" disabled selected>Select City</option>
                        <?php foreach ($cities as $row) :  ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="areas">Areas</label>
                    <select class="form-control" id="areas" name="area">
                        <option value="" disabled selected>Select Area</option>
                    </select>
                </div>



                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>

<?php include(VIEWS . 'inc' . DS . 'footer.php'); ?>
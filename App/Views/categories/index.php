<?php include(VIEWS . 'inc' . DS . 'header.php'); ?>

<h1 class="text-center  my-5 py-3">View All Categories </h1>

<div class="container">
    <div class="row">
        <div class="col-10 mx-auto p-4 border mb-5">
            <?php if (isset($success)) : ?>
                <h3 class="alert alert-success text-center"><?php echo $success; ?></h3>
            <?php endif; ?>
            <?php if (isset($error)) : ?>
                <h3 class="alert alert-danger text-center"><?php echo $error; ?></h3>
            <?php endif; ?>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $i = 1; ?>
                    <?php foreach ($categories as $row) :  ?>
                        <tr>
                            <td> <?php echo $i;
                                    $i++; ?></td>
                            <td><?php echo $row['name']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>


        </div>
    </div>
</div>
<?php include(VIEWS . 'inc' . DS . 'footer.php'); ?>
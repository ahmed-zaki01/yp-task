<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap css cdn -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

  <title>YP-Task</title>
</head>

<body>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php url(); ?>">
      <img src="https://eyp1.iypcdn.com/static/v19/img/en/header_logo.png?18" width="100" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php url(); ?>">Home </a>
        </li>

        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" id="categories" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categories
          </button>
          <div class="dropdown-menu" aria-labelledby="categories">
            <a class="dropdown-item" href="<?php url('categories/index'); ?>">View Categories</a>
            <a class="dropdown-item" href="<?php url('categories/add'); ?>">Add Category</a>
          </div>
        </div>

        <div class="dropdown ml-lg-3 ml-md-0 mt-3 mt-lg-0">
          <button class="btn btn-primary dropdown-toggle" type="button" id="companies" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Companies
          </button>
          <div class="dropdown-menu" aria-labelledby="companies">
            <a class="dropdown-item" href="<?php url('companies/index'); ?>">View Companies</a>
            <a class="dropdown-item" href="<?php url('companies/add'); ?>">Add Company</a>
          </div>
        </div>

      </ul>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Login </a>
        </li>
      </ul>
    </div>
  </nav>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> <?php include('title.php'); ?></title>
   <?php include('head.php'); ?>
</head>

<body>

  <!-- ======= Header ======= -->
 <?php include('header.php'); ?>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Photo Gallery</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Gallery</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <?php include('photogallery.php'); ?>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include('footer.php'); ?>
  <!-- End Footer -->
 <?php include('commonjs.php'); ?>
</body>

</html>
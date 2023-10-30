
    <?php include '../app/pages/includes/header.php'; ?>

    <head>
      <!-- Favicon -->
      <link href="img/favicon.ico" rel="icon">

      <!-- Google Web Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

      <!-- Icon Font Stylesheet -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
      

      <!-- Libraries Stylesheet -->
      <link href="lib/animate/animate.min.css" rel="stylesheet">
      <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

      <!-- Customized Bootstrap Stylesheet -->
      <link href="<?=ROOT?>/assets/bootstrap/css/bootstrap.css" rel="stylesheet">

      <!-- Template Stylesheet -->
      <link href="<?=ROOT?>/assets/css/style.css" rel="stylesheet">
  </head>

    <h3 class="mx-4">Featured</h3>

      <div class="row my-2 justify-content-center">

        <?php
        
          $query = "select posts.*,categories.category from posts join categories on posts.category_id = categories.id order by id desc limit 6";
          $rows = query($query);
          if($rows)
          {
            foreach ($rows as $row) {
              include '../app/pages/includes/post-card.php';
            }

          }else{
            echo "No items found!";
          }
        
        ?>

      </div>

      <?php include '../app/pages/includes/top.php'; ?>    

      <?php include '../app/pages/includes/footer.php'; ?>
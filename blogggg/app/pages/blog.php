
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


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Blog Kami</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


<div class="mx-auto col-md-10">
    <h3 class="mx-4">Blog</h3>

    <div class="row my-2 justify-content-center">

        <?php

            $limit = 10;
            $offset = ($PAGE['page_number'] - 1) * $limit;
            
            $query = "select posts.*,categories.category from posts join categories on posts.category_id = categories.id order by id desc limit $limit offset $offset";
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

    <div class="col-md-12 mb-4">
    <a href="<?=$PAGE['first_link']?>">
        <button class="btn btn-primary">First Page</button>
    </a>
    <a href="<?=$PAGE['prev_link']?>">
        <button class="btn btn-primary">Prev Page</button>
    </a>
    <a href="<?=$PAGE['next_link']?>">
        <button class="btn btn-primary float-end">Next Page</button>
    </a>
    </div>

</div>

<?php include '../app/pages/includes/top.php'; ?>

<?php include '../app/pages/includes/footer.php'; ?>

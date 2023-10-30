
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


<div class="mx-auto col-md-10">
    <h3 class="mx-4">Blog</h3>

        <div class="row my-2 justify-content-center">

            <?php

                $slug = $url[1] ?? null;

                if($slug)
                {
                    $query = "select posts.*,categories.category from posts join categories on posts.category_id = categories.id where posts.slug = :slug limit 1";
                    $row = query_row($query, ['slug'=>$slug]);
   
                }

                if(!empty($row))
                { ?>

                    <div class="col-md-12">
                    <div class="g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm position-relative">
                        <div class="col-12 d-lg-block" style="text-align: center;">
                            <img class="bd-placeholder-img" height="300" style="object-fit:cover; display: inline-block; border-radius: 15px; box-shadow: 0px 0px 20px 0 #0000002c;" src="<?=get_image($row['image'])?>">
                        </div>
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary-emphasis"><?=esc($row['category'] ?? 'Unknown')?></strong>
                            <h3 class="mb-0"><?=esc($row['title'])?></h3>
                            <div class="mb-1 text-muted"><?=date("jS M, Y",strtotime($row['date']))?></div>
                            <p class="card-text mb-auto"><?=nl2br(add_root_to_images($row['content']))?></p>
                        </div>
                    </div>
                </div>

                <?php
                }else{
                    echo "No items found!";
                }
                

            ?>


        </div>


</div>

<?php include '../app/pages/includes/footer.php'; ?>

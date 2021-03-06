<?php
include("components.php");
/*
include("db.php");
$db = $GLOBALS["db"];

$res = $db->query("SELECT * FROM progetti");
$res = $res->fetch_all();
*/
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <?= $GLOBALS["header"] ?>
    <title>Projects Hub</title>
</head>
<body>
<header>
    <!-- Intro settings -->
    <div id="intro" class="p-5 text-center bg-light">
        <h1 class="mb-3 h2">Progetti Dennis</h1>
        <p class="mb-3">Archivio dei progetti</p>
    </div>
    <!-- Navbar -->
    <?= $GLOBALS["navbar"] ?>
    <!-- Navbar -->


</header>
<!--Main Navigation-->

<!--Main layout-->
<main class="my-5">
    <div class="container">
        <!--Section: Content-->
        <section class="text-center">
            <h4 class="my-5"><strong>Ultimi progetti</strong></h4>

            <div class="row">
                <?php
                /*
                foreach ($res as $row){
                    echo '
                    <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card" id="project-'.$row[0].'">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="img/'.$row[1].'" class="img-fluid" alt="" style="height: 300px"/>
                            <a>
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">'.$row[4].'</h5>
                            <p class="card-text">
                                '.$row[3].'
                            </p>
                            <a href="'.$row[2].'" class="btn btn-primary">Vai</a>
                        </div>
                    </div>
                </div>
                    ';
                }
                */
                ?>
        <!--Section: Content-->

        <!-- Pagination -->
        <nav class="my-4" aria-label="...">
            <ul class="pagination pagination-circle justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</main>
<!--Main layout-->
<!--Footer-->
<footer class="bg-light text-lg-start">
    <div class="py-4 text-center">
        <a role="button" class="btn btn-primary btn-lg m-2"
           href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" rel="nofollow" target="_blank">
            Learn Bootstrap 5
        </a>
        <a role="button" class="btn btn-primary btn-lg m-2" href="https://mdbootstrap.com/docs/standard/"
           target="_blank">
            Download MDB UI KIT
        </a>
    </div>

    <hr class="m-0"/>

    <div class="text-center py-4 align-items-center">
        <p>Follow MDB on social media</p>
        <a href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" class="btn btn-primary m-1" role="button"
           rel="nofollow" target="_blank">
            <i class="fab fa-youtube"></i>
        </a>
        <a href="https://www.facebook.com/mdbootstrap" class="btn btn-primary m-1" role="button" rel="nofollow"
           target="_blank">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://twitter.com/MDBootstrap" class="btn btn-primary m-1" role="button" rel="nofollow"
           target="_blank">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="https://github.com/mdbootstrap/mdb-ui-kit" class="btn btn-primary m-1" role="button" rel="nofollow"
           target="_blank">
            <i class="fab fa-github"></i>
        </a>
    </div>

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        ?? 2020 Copyright:
        <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
</footer>
<!--Footer-->
<!-- MDB -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript" src="js/script.js"></script>
<style>
    #intro {
        margin-top: 58px;
    }
    @media (max-width: 991px) {
        #intro {
            margin-top: 45px;
        }
    }

    .card:hover{
        transform: scale(1.1);
        transition-duration: 0.3s;
    }
</style>
</body>
</html>

<?php
    include('header.php');
    include_once '../model/api.php';
    if(!isset($_GET["gameID"])){
        header("location: home.php");
    }
    $gameData = getGameData($_GET["gameID"]);
?>

    <div id="gamePage" data-gameid="<?php echo $gameData[0] ?>" data-currentuser="<?php echo $_SESSION["uID"] ?>">
        <article class="articleContent">
            <style>
                .masthead{
                    background-image: url(<?php echo $gameData[6] ?>);
                }
            </style>
            <header class="masthead">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 text-center">
                        </div>
                    </div>
                </div>
            </header>
            <div>
                <section class="py-5">
                    <div class="container text-light">
                        <h1 class="fw-light"><?php echo $gameData[2] ?></h1>
                        <button id="buyGameButton" class="btn btn-outline-success text-white">Buy Game : <?php echo $gameData[10] ?></button>

                        <?php
                            //if (strlen($article[0] -> ExternalLink) > 1) {
                                //echo "<a class='link-primary' target='_blank' href=" . $article[0]->ExternalLink . ">" . $article[0]->ExternalTitle . "</a>";
                            //}
                        ?>
                        <div class="articleContent">
                            <?php
                                echo $gameData[4];
                            ?>
                        </div>
                        <div class="row">
                            <?php
                                //$images = explode(",", $article[0] -> CollageLinks);

                                //for ($i=0; $i < sizeof($images); $i++){
                                    //if ($i % 2 == 0){
                                        //echo "<div class=\"col-lg-4 mb-4 mb-lg-0\">";
                                    //}
                                    //echo "<img src=$images[$i] class=\"w-100 shadow-1-strong rounded mb-4\"/>";
                                    //if ($i % 2 != 0 || $i == sizeof($images) - 1){
                                        //echo "</div>";
                                    //}
                                //}

                                //$bandTxt = getBandForArticle(htmlspecialchars($_GET["articleID"]));
                                //$band = json_decode($bandTxt);

                                //if (strlen($band[0] -> SpotifySrcLink) > 1){
                                    //echo "<iframe src=". $band[0] -> SpotifySrcLink ."  \" height=\"380\" frameBorder=\"0\" allowfullscreen=\"\" allow=\"autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture\"></iframe>";
                                //}
                            ?>
                        </div>

                    </div>
                </section>
            </div>
        </article>
    </div>
<?php
    include('footer.php');
?>
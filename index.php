<?php include_once('header.php'); ?>
<?php include_once('functions.php'); ?>

<?php $responseArray = convertIntoArray(); ?>


<h2 class="mt-3 text-center">Soccer score App</h2>


<div class="container-lg main">
    <div class="row mt-4">
        <?php foreach ($responseArray['data'] as $object) { ?>
            <div class="col-lg-4  col-md-12 col-sm-12 text-center mb-3">
                <div class="card signle-card">
                    <img src="" alt="" class="sinle-card-img">
                    <div class="card-body">
                        <div class="card-title" style="font-weight: bold;"></div>
                        <div class="card-text single-card-text">
                            <img  style="width: 50px"src="<?php echo $object['teams']['home']['img'] ?>" alt="">
                            <?php echo $object['teams']['home']['name'] ?>
                            <?php echo $object['scores']['home_score'] ?>
                            -
                            <img  style="width: 50px"src="<?php echo $object['teams']['away']['img'] ?>" alt="">
                            <?php echo $object['scores']['away_score'] ?>
                            <?php echo $object['teams']['away']['name'] ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>













<?php include_once('footer.php'); ?>
<?php include ROOT . '/layouts/header.php'; ?>
<!-- Header -->
<header>
    <div class="container" id="maincontent" tabindex="-1">
        <div class="row">
            <div class="col-lg-12">
                <img class="img-responsive" src="../../assets/img/profile.png" alt="">
                <div class="intro-text">
                    <h2>Строительная компания «Будівельна перлина»</h2>
                    <hr class="star-light">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam aliquid aspernatur deserunt dolorem, eum fuga in ipsam iure iusto nam neque nulla perspiciatis quaerat qui quibusdam quidem quis, vitae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid at aut autem blanditiis, commodi dolorem est excepturi ipsum magni, nemo odit perspiciatis quisquam repudiandae saepe suscipit unde vel veritatis!</p>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Portfolio Grid Section -->
<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Объекты</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <?php foreach ($objects as $object) : ?>
            <div class="col-sm-4 portfolio-item">
                <a href="#buildingModal<?= $object['project_id'] ?>" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="../..<?= $object['image']; ?>" class="img-responsive" alt="Cabin">
                </a>
            </div>
           <?php endforeach; ?>
        </div>
    </div>
</section>

<?php foreach ($objects as $object) : ?>
<div class="portfolio-modal modal fade" id="buildingModal<?= $object['project_id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2><?= $object['pname']; ?></h2>
                        <hr class="star-primary">
                        <img src="../..<?= $object['image']; ?>" class="img-responsive img-centered" alt="">
                        <p><?= $object['pdescription']; ?></p>
                        <ul class="list-inline item-details">
                            <li>Клиент:
                                <strong><?= $object['cname']; ?></strong>
                            </li>
                            <li>Тип объекта:
                                <strong><?= $object['ptype']; ?></strong>
                            </li>
                            <li>Местонахождение:
                                <strong><?= $object['plocation']; ?></strong>
                            </li>
                            <li>Дата начала строительства:
                                <strong><?= $object['pstart_date']; ?></strong>
                            </li>
                            <li>Дата окончания строительства:
                                <strong><?= $object['preal_finish_date']; ?></strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
<?php include ROOT . '/layouts/footer.php'; ?>
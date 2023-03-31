<div class="container">
    <title><?php echo $judul; ?></title>
    <div class="row">
        <div class="col-md-6">
            <h3>Area</h3>
            <ul class="list-group">
                <?php foreach ($AreaProduct as $Area) : ?>
                <li class="list-group-item"><?= $Area['area_name']?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>


</div>
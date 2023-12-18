<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">


<div class="d-flex flex-column ms-5 me-1">

    <form method="POST">
        <div class="btn-group">

            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Select Area
            </button>
            <ul class="dropdown-menu me-1">
                <?php foreach ($AreaProduct as $Area) : ?>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="checkbox" name="AreaId[]" value="<?= $Area['area_id'] ?>" checked><?= $Area['area_name'] ?></input>
                        </div>
                    </div>
                <?php endforeach; ?>
            </ul>
            <button class="btn btn-secondary dropdown-toggle me-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">Select DateFrom</button>
            <ul class="dropdown-menu">
                <input type="date" name="dateFrom" value="2021-01-01">
            </ul>
            <button class="btn btn-secondary dropdown-toggle me-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">Select DateTo</button>
            <ul class="dropdown-menu">
                <input type="date" name="dateTo" value="2021-01-05">
            </ul>

        </div>
        <button class="btn btn-primary" type="submit" value="Submit" name='View'>View</button>
    </form>


    <?php $i = 0;
    foreach ($AllBrand as $Brand) {
        if ($i = 0) {
            echo ($i . "</br>");
        }
        $i++;
    } ?>
    <?php
    if (isset($_POST['View'])) {
        if (empty($_POST['AreaId'])) {
            echo "Area belum terpilih !!!";
        } else if (empty($_POST['dateFrom'])) {
            $dateF = '1900-01-01';
        } else if (empty($_POST['dateTo'])) {
            $dateT = '2050-12-05';
        } else {
            $dateF = $_POST['dateFrom'];
            $dateT = $_POST['dateTo'];
    ?>
            <?php
            foreach ($_POST['AreaId'] as $id) {
                $this->db->select('area_name,compliance');
                $this->db->from('report_product as rp');
                $this->db->join('store as str', 'rp.store_id = str.store_id');
                $this->db->join('store_account as sac', 'str.account_id = sac.account_id');
                $this->db->join('store_area as sar', 'str.area_id = sar.area_id');
                $this->db->join('product as pr', 'rp.product_id = pr.product_id');
                $this->db->join('product_brand as br', 'pr.brand_id = br.brand_id');
                $this->db->where(['sar.area_id' => $id]);
                $this->db->where('rp.tanggal BETWEEN "' . date('Y-m-d', strtotime($dateF)) . '" and "' . date('Y-m-d', strtotime($dateT)) . '"');
                $query = $this->db->get();
                $results = $query->result_array();
                $AreaName = $this->db->get_where('store_area', ['area_id' => $id])->result_array();
                $AreaSelect[] = $id;



                $row = 0;
                $sumComp[] = 0;
                $comp = [];
                foreach ($results as $dataArea) {
                    $AreaData = $results;
                    $row++;
                    $comp[] = (int)$dataArea['compliance'];
                }
                $sumComp[$id] =  array_sum($comp);

                $total[$id] = ceil($sumComp[$id] / $row * 100);
            } ?>


            <div class="row cols-ls-3">
                <div class="col-xl-3 col-lg-5">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Overview</h6>
                            <div class="dropdown no-arrow">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                    <div class="dropdown-header">Dropdown Header:</div>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body " style="height: 400px;">
                            <ul class="nav nav-pills mb-3" id="brandper" role="tablist">
                                <?php foreach ($AllBrand as $Brand) { ?>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link <?php if ($Brand === reset($AllBrand)) {
                                                                    echo ('active');
                                                                }; ?>" id="<?= $Brand['brand_id'], '-tab' ?>" data-bs-toggle="pill" data-bs-target="#<?= $Brand['brand_id'] ?>" type="button" role="tab" aria-controls="<?= $Brand['brand_name'] ?>" aria-selected="true"><?= $Brand['brand_name'] ?></button>
                                    </li>
                                <?php } ?>
                            </ul>
                            <div class="tab-content" id="brandperContent">
                                <?php
                                foreach ($AllBrand as $Brand) { ?>
                                    <div class="tab-pane fade <?php if ($Brand === reset($AllBrand)) {
                                                                    echo ('show active');
                                                                }; ?>" id="<?= $Brand['brand_id'] ?>" role="tabpanel" aria-labelledby="<?= $Brand['brand_id'], '-tab' ?>">

                                        <table class="table">
                                            <!-- <thead>
                                        <tr class='d-flex'>
                                        <th scope="col" class="col-3">City</th>
                                        <th scope="col">Progress</th>
                                        </tr>
                                    </thead> -->

                                            <tbody>

                                                <?php foreach ($AreaSelect as $AreaS) {
                                                    foreach ($AreaProduct as $Area) {
                                                        $AreaId = $Area['area_id'];
                                                        if ($AreaS == $Area['area_id']) {

                                                ?>
                                                            <tr class='d-flex'>
                                                                <th scope="row" class="col-10"><?php echo ($Area['area_name']);
                                                                                            }
                                                                                        } ?></th>
                                                                <td class="col-2">
                                                                    <div class="progress-circle" style="font-size: 10px; --value:<?= $total[$AreaS] ?>">
                                                                        <progress value=" <?= $total[$AreaS] ?>" min="0" max="100" style="visibility:hidden;height:0;width:0; "><?= $total[$AreaS] ?>%</progress>
                                                                    </div>
                                                                    <!-- <div class="progress mx-auto" style="width: 1px, height:1px ;" data-value='<?= $total[$AreaS] ?>'>
                                                                        <span class="progress-left">
                                                                            <span class="progress-bar border-primary"></span>
                                                                        </span>
                                                                        <span class="progress-right">
                                                                            <span class="progress-bar border-primary"></span>
                                                                        </span>
                                                                        <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                                                            <div><?= $total[$AreaS] ?><sup class="small">%</sup></div>
                                                                        </div>
                                                                    </div> -->

                                                                </td>
                                                            </tr>
                                                        <?php

                                                    } ?>

                                            </tbody>
                                        </table>

                                    </div>
                                <?php
                                } ?>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-6 col-lg-3">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Overview</h6>
                            <div class="dropdown no-arrow">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                    <div class="dropdown-header">Dropdown Header:</div>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body " style="height: 400px;">
                            <div class="chart-area-center" style="height: 370px;">
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-5" style="height: 100px;">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Pie</h6>
                            <div class="dropdown no-arrow">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                    <div class="dropdown-header">Dropdown Header:</div>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body" style="height: 400px;">
                            <div class="chart-pie" style="height: 400px;">
                                <canvas id="myPieChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="card ms-2 me-2">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">BRAND</th>

                            <?php
                            foreach ($AreaSelect as $AreaS) {
                                foreach ($AreaProduct as $Area) {
                                    $AreaId = $Area['area_id'];
                                    if ($AreaS == $Area['area_id']) {
                            ?>
                                        <th scope="col"><?php echo $Area['area_name'] ?></th>
                                        <script>
                                            var area[] = <?php echo ($Area['area_name']); ?>;
                                            console.log(area);
                                        </script>
                            <?php
                                    }
                                }
                            }
                            ?>




                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1;
                        foreach ($AllBrand as $Brand) { ?>
                            <tr>
                                <th scope="row"><?php echo $no ?></th>

                                <td><?php echo $Brand['brand_name'] ?></td>
                                <?php foreach ($AreaSelect as $Area) { ?>
                                    <td><?php echo $total[$Area] . ' %' ?></td>
                                <?php
                                }
                                ?>
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>

                </table>
            </div>



            <script>
                const ctx = document.getElementById('myChart');
                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: [<?php foreach ($AreaSelect as $AreaS) {
                                        foreach ($AreaProduct as $Area) {
                                            $AreaId = $Area['area_id'];
                                            if ($AreaS == $Area['area_id']) {
                                                echo "'" . $Area['area_name'] . "'" . ',';
                                            }
                                        }
                                    } ?>],
                        datasets: [{
                            label: 'Nilai',
                            data: [<?php foreach ($AreaSelect as $Area) {
                                        echo $total[$Area] . ',';
                                    } ?>],
                            lineTension: 0.3,
                            backgroundColor: "rgba(78, 115, 223, 0.05)",
                            borderColor: "rgba(78, 115, 223, 1)",
                            pointRadius: 3,
                            pointBackgroundColor: "rgba(78, 115, 223, 1)",
                            pointBorderColor: "rgba(78, 115, 223, 1)",
                            pointHoverRadius: 3,
                            pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                            pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                            pointHitRadius: 10,
                            pointBorderWidth: 2,

                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        },
                    }
                });
            </script>

            <script>
                const vtx = document.getElementById('myPieChart');
                new Chart(vtx, {
                    type: 'doughnut',
                    data: {
                        labels: [<?php foreach ($AreaSelect as $AreaS) {
                                        foreach ($AreaProduct as $Area) {
                                            $AreaId = $Area['area_id'];
                                            if ($AreaS == $Area['area_id']) {
                                                echo "'" . $Area['area_name'] . "'" . ',';
                                            }
                                        }
                                    } ?>],
                        datasets: [{
                            label: 'Nilai',
                            data: [<?php foreach ($AreaSelect as $Area) {
                                        echo $total[$Area] . ',';
                                    } ?>],
                            borderWidth: 2,


                        }],

                    },
                    options: {
                        rotation: (0.5 * Math.PI) - (95 / 180 * Math.PI),
                        legend: {
                            position: 'left'
                        },
                        layout: {
                            padding: {
                                left: 30,
                                right: 0,
                                top: 0,
                                bottom: 0
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        },
                    }
                });
                <?php }
        } ?>
            </script>
            <div class="card shadow mt-4 ms-2 me-2 mb-5" id="map" style="width: device-width; height: 600px;"></div>


            <script>
                var map = L.map('map').setView([-2.600029, 118.015776], 5);

                const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                }).addTo(map);

                <?php foreach ($AreaSelect as $AreaS) {
                    foreach ($AreaProduct as $Area) {
                        $AreaId = $Area['area_id'];
                        if ($AreaS == $Area['area_id']) { ?>
                            var marker = L.marker([<?= $Area['coordinate'] ?>]).addTo(map)
                                .bindPopup('<b><?= $Area['area_name'] ?></b>').openPopup();
                <?php  }
                    }
                } ?>

                // const circle = L.circle([51.508, -0.11], {
                //     color: 'red',
                //     fillColor: '#f03',
                //     fillOpacity: 0.5,
                //     radius: 500
                // }).addTo(map).bindPopup('I am a circle.');

                // const polygon = L.polygon([
                //     [51.509, -0.08],
                //     [51.503, -0.06],
                //     [51.51, -0.047]
                // ]).addTo(map).bindPopup('I am a polygon.');


                // const popup = L.popup()
                //     .setLatLng([-2.600029, 118.015776])
                //     .setContent('I am a standalone popup.')
                //     .openOn(map);

                function onMapClick(e) {
                    popup
                        .setLatLng(e.latlng)
                        .setContent(`You clicked the map at ${e.latlng.toString()}`)
                        .openOn(map);
                }

                map.on('click', onMapClick);
            </script>
            <!-- <div>
    <?= $map['html']; ?>
    </div> -->
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
<div class="d-flex flex-column">

    <form method="POST" mb-5>
        <div class="btn-group">
            
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Select Area
            </button>
            <ul class="dropdown-menu">
                <?php foreach ($AreaProduct as $Area) : ?>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="checkbox" name="AreaId[]" value="<?=$Area['area_id'] ?>" checked><?= $Area['area_name']?></input>
                        </div>
                    </div>
                <?php endforeach; ?>
            </ul>
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Select DateFrom</button>
                <ul class="dropdown-menu">
                    <input type="date" name="dateFrom" value="2021-01-01">
                </ul>
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Select DateTo</button>
                <ul class="dropdown-menu">
                    <input type="date" name="dateTo" value="2021-01-05">
                </ul>
                
        </div>
        <button class="btn" type="submit" value="Submit" name='View'>View</button>
    </form>
    </div>
    <div class="row">
        <div class="col-xl-7 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Overview</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area-center">
                                        <canvas id="myChart"></canvas>
                                    </div>
                                </div>
                            </div>
        </div>
        <div class="col-xl-5 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Pie</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie width" >
                                        <canvas id="myPieChart" ></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>
    </div>
    
    <!-- <div >
        <canvas id="myChart"></canvas>
    </div> -->

    <!-- Pie Chart -->
    
    <div class="card" mt-5>
    <?php
        if(isset($_POST['View'])){
            if(empty($_POST['AreaId'])){
                echo"Area belum terpilih !!!";
            }
            else if(empty($_POST['dateFrom'])){
                $dateF = '1900-01-01';
            }
            else if(empty($_POST['dateTo'])){
                $dateT = '2050-12-05';
            }
            else{
                $dateF = $_POST['dateFrom'];
                $dateT = $_POST['dateTo'];            
                ?>
                <table class="table">
                <thead>
                <tr>
                <th scope="col">NO</th>
                <th scope="col">BRAND</th>
                        <?php
                foreach($_POST['AreaId'] as $id){
                    $this->db->select('area_name,compliance');
                    $this->db->from('report_product as rp');
                    $this->db->join('store as str', 'rp.store_id = str.store_id');
                    $this->db->join('store_account as sac', 'str.account_id = sac.account_id');
                    $this->db->join('store_area as sar', 'str.area_id = sar.area_id');
                    $this->db->join('product as pr', 'rp.product_id = pr.product_id');
                    $this->db->join('product_brand as br', 'pr.brand_id = br.brand_id');
                    $this->db->where(['sar.area_id' => $id]);
                    $this->db->where('rp.tanggal BETWEEN "'. date('Y-m-d', strtotime($dateF)). '" and "'. date('Y-m-d', strtotime($dateT)).'"');
                    $query = $this->db->get();
                    $results = $query->result_array();
                    $AreaName = $this->db->get_where('store_area',['area_id'=>$id])->result_array();
                    $AreaSelect[] = $id;
                    

                    $row = 0;
                    $sumComp[] = 0;
                    $comp = [];
                    foreach ( $results as $dataArea){
                        $AreaData = $results;
                        $row++;
                        $comp[] = (int)$dataArea['compliance'];
                        
                    }
                    $sumComp[$id] =  array_sum($comp);

                    $total[$id] = ceil($sumComp[$id] / $row * 100);
                    ?>
                    <?php
                    foreach ($AreaName as $Area){
                        ?>
                        <th scope="col"><?php echo $Area['area_name']?></th>
                        <script>
                            var area[] = <?php echo ($Area['area_name']); ?>;
                            console.log(area);
                        </script>
                        <?php
                    }
                    ?>
                    
                <?php
                }
                ?>
                
                   
                </tr>
                </thead>
                 
                <tbody>
                        <?php $no=1;  foreach($AllBrand as $Brand){?>
                        <tr>
                        <th scope="row"><?php echo $no ?></th>

                        <td><?php echo $Brand['brand_name']?></td>
                        <?php foreach ($AreaSelect as $Area){ ?>
                        <td><?php echo $total[$Area].' %' ?></td>
                        <?php
                    }
                    ?>
                        </tr> 
                    <?php $no++; } ?>
                </tbody>
                
                </table>

                

                <script>
                        const ctx = document.getElementById('myChart');
                        new Chart(ctx, {
                                    type: 'line',
                                    data: {
                                    labels: [<?php foreach ($AreaSelect as $AreaS){ foreach($AreaProduct as $Area){ $AreaId = $Area['area_id']; if($AreaS == $Area['area_id']){echo "'".$Area['area_name']."'".',';}}} ?>],
                                    datasets: [{
                                        label: 'Nilai',
                                        data: [<?php foreach ($AreaSelect as $Area){ echo $total[$Area].','; } ?>],
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
                                    labels: [<?php foreach ($AreaSelect as $AreaS){ foreach($AreaProduct as $Area){ $AreaId = $Area['area_id']; if($AreaS == $Area['area_id']){echo "'".$Area['area_name']."'".',';}}} ?>],
                                    datasets: [{
                                        label: 'Nilai',
                                        data: [<?php foreach ($AreaSelect as $Area){ echo $total[$Area].','; } ?>],
                                        borderWidth: 3
                                        
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
                <?php

            }
        }
    ?>
    </div>
    <div>
        <?= $map['html']; ?>
    </div>

</div>

    
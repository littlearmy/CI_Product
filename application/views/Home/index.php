<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    
</script>
<div class="container">
    <div class="card" mb-3>

    <form method="POST">
        <div class="dropdown">
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
                    <input type="date" name="dateFrom">
                </ul>
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Select DateTo</button>
                <ul class="dropdown-menu">
                    <input type="date" name="dateTo">
                </ul>
        </div>
        <button class="btn" type="submit" value="Submit" name='View'>View</button>
    </form>
    </div>
    <div >
        <canvas id="myChart"></canvas>
    </div>
    <div class="card" mt-5>
    <?php
        if(isset($_POST['View'])){
            if(empty($_POST['AreaId'])){
                echo"Area belum terpilih !!!";
            }
            else if(empty($_POST['dateFrom'])){
                echo"Tanggal belum terpilih !!!";
            }
            else if(empty($_POST['dateTo'])){
                echo"Tanggal belum terpilih !!!";
            }
            else{
                // echo "Anda memilih;<br/><br/>";
                $dateF = $_POST['dateFrom'];
                $dateT = $_POST['dateTo'];


                // var_dump($dateF."<br/>");
                // var_dump($dateT."<br/>");
            
                ?>
                <table class="table">
                <thead>
                <tr>
                <th scope="col">NO</th>
                <th scope="col">BRAND</th>
                        <?php
                foreach($_POST['AreaId'] as $id){
                    // echo $item ."<br/>";
                    // $id['Id'] = $id;
                    // var_dump($id['Id']);
                    // anchor('home/getSelect/'.$id['Id']);
                    // base_url('Product/index/'.$id['Id']);
                    // base_url('product/index/'.$product['id']

                    // $this->load->controllers('controllers/home',$id);
                    $this->db->select('area_name,compliance');
                    $this->db->from('report_product as rp');
                    $this->db->join('store as str', 'rp.store_id = str.store_id');
                    $this->db->join('store_account as sac', 'str.account_id = sac.account_id');
                    $this->db->join('store_area as sar', 'str.area_id = sar.area_id');
                    $this->db->join('product as pr', 'rp.product_id = pr.product_id');
                    $this->db->join('product_brand as br', 'pr.brand_id = br.brand_id');
                    $this->db->where(['sar.area_id' => $id]);
                    // $this->db->where(['rp.tanggal'>= $$dateF]);
                    // $this->db->where(['rp.tanggal'>= $$dateF]);
                    $this->db->where('rp.tanggal BETWEEN "'. date('Y-m-d', strtotime($dateF)). '" and "'. date('Y-m-d', strtotime($dateT)).'"');
                    $query = $this->db->get();
                    $results = $query->result_array();
                    $AreaName = $this->db->get_where('store_area',['area_id'=>$id])->result_array();
                    // $data2['AreaProduct'] = $this->db->get_where('store_area',['area_id' => $item])->result_array();
                    $AreaSelect[] = $id;
                    

                    $row = 0;
                    $sumComp[] = 0;
                    $comp = [];
                    foreach ( $results as $dataArea){
                        // var_dump($dataArea)."</br>";
                        // echo $dataArea['area_name']."<br/>";
                        $AreaData = $results;
                        $row++;
                        $comp[] = (int)$dataArea['compliance'];
                        
                    }
                    $sumComp[$id] =  array_sum($comp);
                    echo 'ROW===>'.$row.' ';

                    $total[$id] = ceil($sumComp[$id] / $row * 100);
                    echo $sumComp[$id].' ';
                    echo $total[$id].'</br>';
                    ?>
                    <!-- <script>
                        
                    </script> -->
                    <?php
                    foreach ($AreaName as $Area){
                        ?>
                        <th scope="col"><?php echo $Area['area_name']?></th>
                        <script>
                            // var area = json_encode($AreaName['area_name']);
                            // console.log(area);
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
                        <td><?php echo $total[$Area] ?></td>
                        <?php
                    }
                    ?>
                        </tr>
                    <?php $no++; } ?>
                    
                    
                    
                    <!-- <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                    </tr> -->
                </tbody>
                
                </table>

                

                <script>
                        const ctx = document.getElementById('myChart');
                        var i = 0;
                        var name = [];

                        // for(i=0;i<length.area;i++){
                        //     name[i] = area[i];
                        //     console.log(name[i]);
                        // }
                        <?php foreach ($AreaSelect as $Area){
                            echo $Area;
                        } ?>
                            
                        new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                    labels: [<?php foreach ($AreaSelect as $Area){ echo $Area.','; } ?>],
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
                                    }
                                    }
                                });
                    </script>
                
                <?php

            }
        }

        // foreach($AreaSelected as $All){
        //     echo $All['compliance'].$All['store_name']."<br/>";
        // }
        // foreach ( $AreaSelected as $dataArea){
        //     echo $dataArea['area_name']."<br/>";
        // }

        
    ?>
    

    </div>
    

</div>

    




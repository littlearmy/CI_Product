<div class="container">

    <form method="POST">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Select Area
            </button>
            <ul class="dropdown-menu">
                <?php foreach ($AreaProduct as $Area) : ?>
                    <div class="input-group mb-3">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="checkbox" name="AreaId[]" value="<?=$Area['area_id'] ?>"><?= $Area['area_name']?></input>
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
    <div class="container">
    <?php
        if(isset($_POST['View'])){
            if(empty($_POST['AreaId'])){
                echo"Area belum terpilih !!!";
            }
            // else if(empty($_POST['dateFrom'])){
            //     echo"Tanggal belum terpilih !!!";
            // }
            // else if(empty($_POST['dateTo'])){
            //     echo"Tanggal belum terpilih !!!";
            // }
            else{
                echo "Anda memilih;<br/><br/>";
                $dateF = $_POST['dateFrom'];
                $dateT = $_POST['dateTo'];


                // var_dump($dateF."<br/>");
                // var_dump($dateT."<br/>");
               
                 
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
                    $query = $this->db->get();
                    $results = $query->result_array();
                    $AreaName = $this->db->get_where('store_area',['area_id'=>$id])->result_array();
                    // $data2['AreaProduct'] = $this->db->get_where('store_area',['area_id' => $item])->result_array();
                    foreach ( $results as $dataArea){
                        var_dump($dataArea)."</br>";
                        // echo $dataArea['area_name']."<br/>";
                    }
                    
                }
                ?>
                <table class="table">
                 <thead>
                     <tr>
                     <th scope="col">NO</th>
                     <th scope="col">BRAND</th>
                         <?php foreach ($AreaName as $Area){ 
                             ?>
                              <th scope="col"><?php echo $Area['area_name']?></th>
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
                        <td><?php echo array_sum($results['compliance'])?></td>
                        <td>@mdo</td>
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
    




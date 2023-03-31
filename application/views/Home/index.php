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
                echo "Anda memilih;<br/><br/>";
                $dateF = $_POST['dateFrom'];
                $dateT = $_POST['dateTo'];


                var_dump($dateF."<br/>");
                var_dump($dateT."<br/>");
                 
                foreach($_POST['AreaId'] as $item){  
                    // echo $item ."<br/>";
                    $id['Id'] = $item;
                    var_dump($id['Id']);
                    // anchor('home/getSelect/'.$id['Id']);
                    base_url('Home/index?data_id='.$id['Id']);
                    // base_url('product/index/'.$product['id']

                    // $this->load->controllers('controllers/home',$id);
                    // $data2['AreaProduct'] = $this->db->get_where('store_area',['area_id' => $item])->result_array();
                    foreach ( $AreaSelected as $dataArea){
                        var_dump($AreaSelected);
                        echo $dataArea['area_name']."<br/>";
                    }
                }
            }
        }

        // foreach($AreaSelected as $All){
        //     echo $All['compliance'].$All['store_name']."<br/>";
        // }
        foreach ( $AreaSelected as $dataArea){
            echo $dataArea['area_name']."<br/>";
        }

        
    ?>
</div>



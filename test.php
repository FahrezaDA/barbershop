
<div class="form-group">
                                    <select class="form-control" name="id_pelayanan" id="">
    
                                        <option value="">pilih</option>
                                        <?php
                                        include 'koneksi.php';
                                        $sql = mysql_query("SELECT* FROM pelayanan");
                                        while($data=mysql_fetch_array($sql)){
                                        ?>
                                        <option value="<?php echo $data['id_pelayanan']?>"><?php echo $data['jenis_pelayanan'] ?></option>

                                        <?php
                                        }
                                        ?>
                                        
                    
                                
                                </select>
                                </div>
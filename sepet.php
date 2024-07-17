<?php include "navbar.php";
$table = 'sepet';
$datas = $db->query("SELECT * FROM $table ORDER BY id asc")->fetchAll(PDO::FETCH_ASSOC); ?>
                <?php foreach($datas as $data): ?>
                     <tr>
                            <td><img src="../Listele/kitaplar/<?=$data['resim_url']?>" alt="" width="200px" height="150px"></td>
                            <td><?=$data['icerik']?></td>
                            <td><?=$data['detay']?></td>
                            <td><?=$data['fiyat']?></td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-secondary decrease" onclick="decrease()">-</button>
                                    <input type="text" class="form-control" value="1" min="1" max="10" id="quantity">
                                    <button type="button" class="btn btn-secondary increase" onclick="increase()">+</button>
                                </div>
                            </td>
                            <td>
                            <a href="delete.php?id=<?=$data['id']?>" class="btn delete-btn">SİL</a>                            </td>
                            
                        </tr>
                <?php endforeach; ?>       
<?php include "footer.php"; ?>
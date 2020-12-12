<table border="1">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Angkatan</th>
        <th>Aksi</th>
    </tr>
    <?php
    include "koneksi.php";
    $hasil = mysqli_query($koneksi, "select * from mahasiswa order by nim");
    while($data = mysqli_fetch_array($hasil)):
    ?>
    <tr>
        <td><?php 
            echo $data['NIM'];
        ?></td>
        <td><?php 
            echo $data['Nama'];
        ?></td>
        <td><?php
            echo $data['Prodi'];
        ?></td>
        <td><?php 
            echo $data['Angkatan']; 
        ?></td>
        <td>
            <button id="<?php echo $data['NIM']; ?>" class="ubah"> Update </button>
            <button id="<?php echo $data['NIM']; ?>" class="hapus"> Hapus </button>
        </td>
    </tr>
    <?php endwhile;?>
</table>
<script type='text/javascript'>
$(document).on('click', '.hapus', function(){
    var id = $(this).attr('id');
    $.ajax({
        type: 'POST',
        url: "hapus.php",
        data: {id:id},
        success: function() {
            $('#listdata').load("tampil.php");
        }, error: function(response){
            console.log(response.responseText);
        }
    });
});
$(document).on('click', '.ubah', function(){
    var id = $(this).attr('id');
    $.ajax({
        type: 'POST',
        url: "ubah.php",
        data: {id:id},
        success: function() {
            $('#listdata').load("tampil.php");
        }, error: function(response){
            console.log(response.responseText);
        }
    });
});
</script>
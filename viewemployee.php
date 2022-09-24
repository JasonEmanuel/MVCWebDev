<?php 

include_once("navbar.php");

if(isset($_POST['submit'])){
    insertEmployee();
}
if(isset($_GET['delete'])){
    deleteEmployee($_GET['delete']);
}
if(isset($_POST['update'])){
    editEmployee($_POST['employee']);
}
?>

<h1 class="text-center">List Karyawan</h1>
<table class="table mt-2 w-50 mx-auto">
    <thead class="thead-dark">
    <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Jabatan</th>
        <th scope="col">Usia</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
    </tr>
    </thead>
    <tbody>
        <?php 
        $num = 1;
        foreach(indexEmployee() as $index=>$karyawan){
            echo"
            <tr>
                <td>".$num."</td>
                <td>".$karyawan->nama."</td>
                <td>".$karyawan->jabatan."</td>
                <td>".$karyawan->usia."</td>
                <td><a href='viewemployee.php?edit=".$index."'><button class='btn btn-warning'>Edit</button></a></td>
                <td><a href='viewemployee.php?delete=".$index."'><button class='btn btn-danger'>Delete</button></a></td>
            </tr> 
            ";
            $num++;
        }
        ?>
    </tbody>
</table>

<?php if(!isset($_GET['edit'])){ ?>
<h1 class="text-center mt-5">Form Karyawan</h1>

        <form method="POST" action="viewemployee.php">
            <div class="text-center">
            <div class="form-group text-start w-50 d-inline-block">
                <label for="Nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="Nama" aria-describedby="Nama" placeholder="Masukkan Nama" required>
            </div>
            <div class="form-group text-start w-50 d-inline-block">
                <label for="Jabatan">Jabatan</label>
                <input type="text" name="jabatan" class="form-control" id="Jabatan"  placeholder="Masukkan Jabatan" required>
            </div>
            <div class="form-group text-start w-50 d-inline-block">
                <label for="Usia">Usia</label>
                <input type="number" name="usia" class="form-control" id="Usia" placeholder="Masukkan Usia" required>
            </div>
            </div>
            <button name="submit" type="submit" class="btn d-block mx-auto mt-2 btn-primary">Submit</button>
        </form>
<?php } else { ?>
    <h1 class="text-center mt-5">Edit Form Karyawan</h1>

        <form method="POST" action="viewemployee.php">
            <div class="text-center">
            <div class="form-group text-start w-50 d-inline-block">
                <label for="Nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="Nama" aria-describedby="Nama" value="<?php 
                foreach(indexEmployee() as $index=>$karyawan){
                    if($_GET['edit'] == $index){
                        echo"$karyawan->nama";
                    }
                }    
                ?>">
            </div>
            <div class="form-group text-start w-50 d-inline-block">
                <label for="Jabatan">Jabatan</label>
                <input type="text" name="jabatan" class="form-control" id="Jabatan" value="<?php 
                foreach(indexEmployee() as $index=>$karyawan){
                    if($_GET['edit'] == $index){
                        echo"$karyawan->jabatan";
                    }
                }
                ?>">
            </div>
            <div class="form-group text-start w-50 d-inline-block">
                <label for="Usia">Usia</label>
                <input type="number" name="usia" class="form-control" id="Usia" value="<?php 
                foreach(indexEmployee() as $index=>$karyawan){
                    if($_GET['edit'] == $index){
                        echo"$karyawan->usia";
                    }
                }
                ?>">
            </div>
            </div>
            <input type="hidden" name="employee" value="<?=$_GET['edit'];?>">
            <button name="update" type="submit" class="btn d-block mx-auto mt-2 btn-primary">Save</button>
        </form>
<?php } ?>
</body>
</html>
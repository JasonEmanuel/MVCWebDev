<?php 
include_once("navbar.php");

if(isset($_POST['submit'])){
    insertOffice();
}
if(isset($_GET['delete'])){
    deleteOffice($_GET['delete']);
}
if(isset($_POST['update'])){
    editOffice($_POST['office']);
}


?>

<h1 class="text-center mt-3">List Office</h1>
<table class="table mt-2 w-50 mx-auto">
    <thead class="thead-dark">
    <tr>
        <th scope="col">No</th>
        <th scope="col">Office Name</th>
        <th scope="col">Alamat</th>
        <th scope="col">Kota</th>
        <th scope="col">Nomor Telepon</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
    </tr>
    </thead>
    <tbody>
        <?php 
        foreach(indexOffice() as $index=>$office){
            echo"
            <tr>
                <td>".($index+1)."</td>
                <td>".$office->officename."</td>
                <td>".$office->address."</td>
                <td>".$office->city."</td>
                <td>".$office->phone."</td>
                <td><a href='viewoffice.php?edit=".$index."'><button class='btn btn-warning'>Edit</button></a></td>
                <td><a href='viewoffice.php?delete=".$index."'><button class='btn btn-danger'>Delete</button></a></td>
            </tr> 
            ";
        }
        
        ?>
    </tbody>
</table>


<?php if(!isset($_GET['edit'])){ ?>


<h1 class="text-center mt-5">Form Office</h1>

<form method="POST" action="viewoffice.php">
            <div class="text-center mt-4">
            <div class="form-group text-start w-50 d-inline-block">
                <label for="OfficeName">Nama Office</label>
                <input type="text" name="officename" class="form-control" id="OfficeName" aria-describedby="Nama" placeholder="Masukkan Nama Office" required>
            </div>
            <div class="form-group text-start w-50 d-inline-block">
                <label for="Alamat">Alamat</label>
                <input type="text" name="address" class="form-control" id="Alamat"  placeholder="Masukkan Alamat" required>
            </div>
            <div class="form-group text-start w-50 d-inline-block">
                <label for="Kota">Kota</label>
                <input type="text" name="city" class="form-control" id="Kota" placeholder="Masukkan Kota" required>
            </div>
            <div class="form-group text-start w-50 d-inline-block">
                <label for="Phone">No Telp</label>
                <input type="text" name="phone" class="form-control" id="Phone" placeholder="Masukkan No Telp" required>
            </div>
            </div>
            <button name="submit" type="submit" class="btn d-block mx-auto mt-2 btn-primary">Submit</button>
        </form>

<?php } else { ?>

    <h1 class="text-center mt-5">Edit Form Office</h1>

    <form action="viewoffice.php" method="POST">
        <div class="text-center mt-4">
            <div class="form-group text-start w-50 d-inline-block">
                <label for="OfficeName">Office Name</label>
                <input type="text" name="officename" class="form-control" id="OfficeName" value="<?php 
                foreach(indexOffice() as $index=>$office){
                    if($_GET['edit'] == $index){
                        echo"$office->officename";
                    }
                }
                ?>">
            </div>
            <div class="form-group text-start w-50 d-inline-block">
                <label for="Address">Address</label>
                <input type="text" name="address" class="form-control" id="Address" value="<?php 
                foreach(indexOffice() as $index=>$office){
                    if($_GET['edit'] == $index){
                        echo"$office->address";
                    }
                }
                ?>">
            </div>
            <div class="form-group text-start w-50 d-inline-block">
                <label for="City">City</label>
                <input type="text" name="city" class="form-control" id="City" value="<?php 
                foreach(indexOffice() as $index=>$office){
                    if($_GET['edit'] == $index){
                        echo"$office->city";
                    }
                }
                ?>">
            </div>
            <div class="form-group text-start w-50 d-inline-block">
                <label for="Telp">No Telpon</label>
                <input type="text" name="phone" class="form-control" id="Telp" value="<?php 
                foreach(indexOffice() as $index=>$office){
                    if($_GET['edit'] == $index){
                        echo"$office->phone";
                    }
                }
                ?>">
            </div>
        </div>
        <input type="hidden" name="office" value="<?=$_GET['edit'];?>">
        <button name="update" type="submit" class="btn d-block mx-auto mt-2 btn-primary">Save</button>
    </form>

<?php } ?>
</body>
</html>
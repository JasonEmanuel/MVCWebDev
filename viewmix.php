<?php 
include("navbar.php");

if(isset($_POST['submit'])){
    insertMix();
}

if(isset($_GET['delete'])){
    deleteMix($_GET['delete']);
}
?>

<h1 class="text-center mt-5">Office Employee</h1>
<table class="table mt-2 w-50 mx-auto">
    <thead class="thead-dark">
    <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Jabatan</th>
        <th scope="col">Usia</th>
        <th scope="col">Office Name</th>
        <th scope="col">Alamat</th>
        <th scope="col">Kota</th>
        <th scope="col">Nomor Telpon</th>
        <th scope="col">Delete</th>
    </tr>
    </thead>
    <tbody>
        <?php 
        foreach(indexMix() as $index=>$mix){
            echo"
            <tr>
                <td>".($index+1)."</td>
                <td>".$_SESSION['listKaryawan'][$mix->idnama]->nama."</td>
                <td>".$_SESSION['listKaryawan'][$mix->idnama]->jabatan."</td>
                <td>".$_SESSION['listKaryawan'][$mix->idnama]->usia."</td>
                <td>".$_SESSION['listOffice'][$mix->idoffice]->officename."</td>
                <td>".$_SESSION['listOffice'][$mix->idoffice]->address."</td>
                <td>".$_SESSION['listOffice'][$mix->idoffice]->city."</td>
                <td>".$_SESSION['listOffice'][$mix->idoffice]->phone."</td>
                <td><a href='viewmix.php?delete=".$index."'><button class='btn btn-danger'>Delete</button></a></td>
            </tr> 
            ";
        }
        ?>
    </tbody>
</table>

<h1 class="text-center mt-5">Form Office-Employee</h1>

        <form action="viewmix.php" method="POST">
            <div class="text-center">
                <label for="test" class="mt-3">Name</label>
                <select name="idnama" class="w-5 form-select-lg mb-3 ms-4 text-start" id="test" required>
                    <option value="">
                        <?php 
                            foreach(indexEmployee() as $index=>$karyawan){
                                echo"
                                <option value=".$index.">".$karyawan->nama."</option>";
                            }
                        ?>
                    </option>
                </select>
            </div>
            <div class="text-center">
                <label for="office">Office Name</label>
            <select name="idoffice" class="w-5 form-select-lg mb-3 ms-4 text-start" id="office" required>
                    <option value="">
                        <?php 
                            foreach(indexOffice() as $index=>$office){
                                echo"
                                <option value=".$index.">".$office->officename."</option>";
                            }
                        ?>
                    </option>
                </select>
            </div>
            <button name="submit" type="submit" class="btn d-block mx-auto mt-3 btn-primary">Submit</button>
        </form>
        </body>
</html>

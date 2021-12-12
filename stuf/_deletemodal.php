<?php 

if ($_SERVER['REQUEST_METHOD']=='POST') {
    $sn=$_POST['deletenote_id'];
    include('_dbconnect.php');
    $delete="DELETE FROM `notes` WHERE `sno.`='$sn' ";
    $result5=mysqli_query($conn,$delete);
    // echo var_dump($result5);
  
    header("Location:/notes/yournotes.php?delete=true");
    exit();
}









?>
<!-- login Modal with trigger id #loginmodal -->

<div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Confirm delete</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5>Do you want to delete this note</h5>
                <form action="/notes/stuf/_deletemodal.php" method="post" id="deletenote">
                 <input type="hidden" name="deletenote_id" id="deletenote_id">
                <button type="submit" name="submit" class="btn btn-success">Yes</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>




<!-- Edit Modal with trigger id #editmodal -->

<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="e">Update Note</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="/notes/stuf/_editmodal.php" method="post" id="editform">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="edittitle" id="edittitle" required>
                <div id="emailHelp" class="form-text">Every title is unique</div>
            </div>
            <div class="form-group my-3" id="editmodaldiv">
                <label for="exampleFormControlTextarea1">NOTE</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="editnote" id="editnote"
                    required></textarea>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Save Changes</button>
        </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>


<?php 

if (isset($_POST['edittitle'])) {
    include('_dbconnect.php');
    $edittitle=$_POST['edittitle'];
    $editnote=$_POST['editnote'];
    session_start();
    $username=$_SESSION['username'];
    // echo $username;
    $search3="SELECT * FROM `notes` WHERE `user_id` = '$username' and `title`='$edittitle' and `note`='$edit' ";
    $result3=mysqli_query($conn,$search3);
    // echo var_dump($result3);
    
    $num3= mysqli_num_rows($result3);
    


   
}








?>
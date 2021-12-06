
<!-- login Modal with trigger id #loginmodal -->

<div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Login</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form class="container" action="/notes/stuf/_handlelogin.php" method="post">

                    <div class="mb-3">
                        <label for="username" class="username">UserName</label>
                        <input type="text" class="form-control" id="username" name="username">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" id="password"
                            name="password">
                    </div>


                    <button type="submit" class="btn btn-primary">Login</button>

                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
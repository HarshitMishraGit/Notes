
<!-- Sign Up Modal with trigger id #signupmodal -->

<div class="modal fade" id="signupmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Sign Up</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <!-- Form For signUp -->
                <form class="container" action="/notes/stuf/_handlesignup.php" method="post">

                    <div class="mb-3">
                        <label for="username" class="username">UserName</label>
                        <input type="text" class="form-control" id="username" name="username">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" id="password"
                            name="password">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"> Confirm Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" id="cpassword"
                            name="cpassword">
                        <div id="emailHelp" class="form-text">Make sure to enter same password</div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
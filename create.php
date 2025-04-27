<div>
    <!-- Modal -->
    <div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Create User</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="function.php" method="post">
                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="exampleFormControlInput" class="form-label">Username</label>
                            <input type="text" class="form-control" id="exampleFormControlInput" name="username" placeholder="Ex: Juan" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput2" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleFormControlInput2" name="password" placeholder="password" required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="add_user" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
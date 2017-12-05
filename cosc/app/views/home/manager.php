<?php require_once '../app/views/templates/header.php' ?>


            <form action="manager/index" method="post">
                <h1>Manager</h1>

                <div class="form-group">
                    <label>Name</label>
                    <div>
                        <input type="text" class="form-control" name="FullMname" placeholder="Username">
                    </div>
                </div>
                <div class="form-group">
                    <label>Birth Date</label>
                    <div>
                        <input type="date" class="form-control" name="DateofBirthM" placeholder="birth date">
                    </div>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <div>
                        <input type="text" class="form-control" name="EmailM" placeholder="email">
                    </div>
                </div>
                <div class="form-group">
                    <label>Phone Number</label>
                    <div>
                        <input type="text" class="form-control" name="PhoneM" placeholder="phone number">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" >submit</button>

            </form>


<?php require_once '../app/views/templates/footer.php' ?>
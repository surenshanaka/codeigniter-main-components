<!-- The form is placed inside the body of modal -->
    <?php echo validation_errors(); ?>
    <form id="loginForm" method="post" class="form-horizontal">
        <div class="form-group">
            <label class="col-md-3 control-label">Username</label>
            <div class="col-md-5">
                <input type="text" class="form-control" name="email" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Password</label>
            <div class="col-md-5">
                <input type="password" class="form-control" name="password" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-5 col-md-offset-3">
                <button type="submit" class="btn btn-default">Login</button>
            </div>
        </div>
    </form>
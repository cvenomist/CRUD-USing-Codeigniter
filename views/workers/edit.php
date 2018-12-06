<form method="post" action="<?php echo base_url('workers/update/'.$workers->id);?>">

    <h2>Update Worker Name & Email</h2>

    <br>

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <div class="form-group">

                <label class="col-md-3"><h4>Name</h4></label>

                <div class="col-md-6">

                    <input type="text" name="name" class="form-control" value="<?php echo $workers->name; ?>">

                </div>

            </div>

        </div>

        <div class="col-md-8 col-md-offset-2">

            <div class="form-group">

                <label class="col-md-3"><h4>Email</h4></label>

                <div class="col-md-6">

                    <input type="email" name="email" class="form-control"><?php echo $workers->email; ?>

                </div>

            </div>

        </div>

        <div class="col-md-8 col-md-offset-2 pull-right">

            <input type="submit" name="Save" class="btn btn-success">

        </div>

    </div>
    
</form>
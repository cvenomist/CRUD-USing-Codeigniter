<form method="post" action="<?php echo base_url('workersCreate');?>">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <div class="form-group">

                <label class="col-md-3">Name</label>

                <div class="col-md-4">

                    <input type="text" name="name" class="form-control">

                </div>

            </div>

        </div>

        <div class="col-md-8 col-md-offset-2">

            <div class="form-group">

                <label class="col-md-3">Password</label>

                <div class="col-md-4">

                    <input type="password" name="password" class="form-control">

                </div>

            </div>

        </div>

        <div class="col-md-8 col-md-offset-2">

            <div class="form-group">

                <label class="col-md-3">Email</label>

                <div class="col-md-4">

                    <input type="email" name="email" class="form-control">

                </div>

            </div>

        </div>



        <div class="col-md-8 col-md-offset-2 pull-right">

            <input type="submit" name="Save" class="btn btn-primary">

        </div>

    </div>
    
</form>
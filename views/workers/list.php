<div class="row">

<br>

    <div class="col-8"> 

      <br>

        <h2>Workers CRUD


            <br>

            <div class="pull-right">

               <a class="btn btn-warning" href="<?php echo base_url('workers/create') ?>"> Add New Worker </a>

            </div>

            <br>

        </h2>

     </div>

</div>

<div class="table-responsive">

<table class="table table-bordered">

  <thead>

      <tr>

          <th>Name</th>

          <th>Email</th>

      <th>Action</th>

      </tr>

  </thead>

  <tbody>

   <?php foreach ($data as $d) { ?>

      <tr>

          <td><?php echo $d->name; ?></td>


          <td><?php echo $d->email; ?></td> 

      <td>

        <form method="DELETE" action="<?php echo base_url('workers/delete/'.$d->id);?>">

         <a class="btn btn-success" href="<?php echo base_url('workers/edit/'.$d->id) ?>">Edit</a>

          <button type="submit" class="btn btn-primary">Delete</button>

        </form>

      </td>

      </tr>

      <?php } ?>

  </tbody>

</table>

</div>
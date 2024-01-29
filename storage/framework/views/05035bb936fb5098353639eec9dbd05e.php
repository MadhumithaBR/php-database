
<?php $__env->startSection('content'); ?>
 
<div class="card">
  <div class="card-header">Contact us Page</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('student/' .$students->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        <input type="hidden" name="id" id="id" value="<?php echo e($students->id); ?>" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="<?php echo e($students->name); ?>" class="form-control"></br>
        <label>Age</label></br>
        <input type="text" name="age" id="age" value="<?php echo e($students->age); ?>" class="form-control"></br>
        <label>email</label></br>
        <input type="text" name="email" id="email" value="<?php echo e($students->email); ?>" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('students.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Madhu\OneDrive\Desktop\llaravel3\sam2-app\resources\views/students/edit.blade.php ENDPATH**/ ?>
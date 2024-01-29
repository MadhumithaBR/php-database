
<?php $__env->startSection('content'); ?>
 
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : <?php echo e($students->name); ?></h5>
        <p class="card-text">Age : <?php echo e($students->age); ?></p>
        <p class="card-text">email: <?php echo e($students->email); ?></p>
  </div>
       
    </hr>
  
  </div>
</div>
<?php echo $__env->make('students.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Madhu\OneDrive\Desktop\llaravel3\sam2-app\resources\views/students/show.blade.php ENDPATH**/ ?>
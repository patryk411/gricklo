<?php /* Template Name: Home - Gricklo */?>




<?php $__env->startSection('content'); ?>

<?php echo $__env->make('partials.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
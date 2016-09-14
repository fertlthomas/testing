<?php
/**
 * Created by PhpStorm.
 * User: fertl
 * Date: 11.04.2016
 * Time: 15:34
 */// resources/views/tasks.blade.php
?>


<?php $__env->startSection('content'); ?>

        <!-- Bootstrap Boilerplate... -->

<div class="panel-body">
    <!-- Display Validation Errors -->
    <?php echo $__env->make('common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <!-- New Task Form -->
    <form action="/task" method="POST" class="form-horizontal">
        <?php echo e(csrf_field()); ?>


                <!-- Task Name -->
        <div class="form-group">
            <label for="task" class="col-sm-3 control-label">Task</label>

            <div class="col-sm-6">
                <input type="text" name="name" id="task-name" class="form-control">
            </div>
        </div>

        <!-- Add Task Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Add Task
                </button>
            </div>
        </div>
    </form>
</div>

<!-- TODO: Current Tasks -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
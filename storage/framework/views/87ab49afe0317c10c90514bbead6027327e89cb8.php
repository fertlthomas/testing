<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="content">
            <div class="title">Update</div>
            <div>
                <form action="<?php echo e(url("updating/".$team->id)); ?>" method="post">
                    <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('PUT')); ?>

                    <table>
                        <tr>
                            <td>Sportart</td>
                            <td><input type="text" name="sportart" value="<?php echo e($team->Sportart); ?>"></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" name="name"  value="<?php echo e($team->Name); ?>"></td>
                        </tr>
                        <tr>
                            <td>Ort</td>
                            <td><input type="text" name="ort"  value="<?php echo e($team->Ort); ?>"></td>
                        </tr>
                        <tr>
                            <td>Marktwert</td>
                            <td><input type="text" name="marktwert"  value="<?php echo e($team->Marktwert); ?>"></td>
                        </tr>
                        <tr>
                            <td><a href="<?php echo e(url('/Teams')); ?>">Zurück</a> </td>
                            <td><input type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
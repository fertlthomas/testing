<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="content">
            <div class="title">Teams</div>

            <table>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Herkunft</th>
                    <th>Nummer</th>
                </tr>
                <?php foreach($spielers as $spieler): ?>
                    <tr>
                        <td><?php echo e($spieler->Name); ?></td>
                        <td><?php echo e($spieler->Position); ?></td>
                        <td><?php echo e($spieler->Herkunft); ?></td>
                        <td><?php echo e($spieler->Nummer); ?></td>
                        <!--
                        <form action="<?php echo e(url('Update/'.$spieler->id)); ?>" method="get">
                            <?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('UPDATE')); ?>

                            <td><input type="submit" value="Update"></td>
                        </form>

                        <form action="<?php echo e(url("deleting/".$spieler->id)); ?>" method="post">
                            <?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('DELETE')); ?>

                            <td><input type="submit" value="Delete"></td>
                        </form>
                        -->
                    </tr>
                <?php endforeach; ?>
                    <tr>
                        <td><a href="<?php echo e(url('/Teams')); ?>">Zurück</a> </td>
                    </tr>
            </table>
            <a href="<?php echo e(url('/Teams/'.$spieler->team_id.'/Spieler/Insert')); ?>">Insert</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
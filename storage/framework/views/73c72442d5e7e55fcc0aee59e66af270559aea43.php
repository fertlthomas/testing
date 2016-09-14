<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="content">
            <div class="title">Teams</div>

            <table>
                <tr>
                    <th>Sportart</th>
                    <th>Name</th>
                    <th>Ort</th>
                    <th>Marktwert</th>
                </tr>
            <?php foreach($teams as $team): ?>
                <tr>
                    <td><?php echo e($team->Sportart); ?></td>
                    <td><?php echo e($team->Name); ?></td>
                    <td><?php echo e($team->Ort); ?></td>
                    <td><?php echo e($team->Marktwert); ?></td>
                    <form action="<?php echo e(url("Teams/".$team->id."/Spieler")); ?>" method="get">
                        <td><input type="submit" value="Anzeigen"></td>
                    </form>

                    <form action="<?php echo e(url('Update/'.$team->id)); ?>" method="get">
                        <?php echo e(csrf_field()); ?>

                        <?php echo e(method_field('UPDATE')); ?>

                        <td><input type="submit" value="Update"></td>
                    </form>

                    <form action="<?php echo e(url("deleting/".$team->id)); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <?php echo e(method_field('DELETE')); ?>

                        <td><input type="submit" value="Delete"></td>
                    </form>
                </tr>
            <?php endforeach; ?>
            </table>
            <a href="<?php echo e(url('/Insert')); ?>">Insert</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
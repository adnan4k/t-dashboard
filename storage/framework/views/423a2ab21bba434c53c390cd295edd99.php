<div class="main-content">
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('packages.form', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1476430540-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.delete-modal', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1476430540-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <div class="row">
        <div class="col-12">

            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">All packages</h5>
                        </div>
                        <a
                            @click="$dispatch('packageModal')"
                            class="btn bg-green-400 btn-sm mb-0"
                            type="button">+&nbsp; New package</a>
                    </div>
                </div>
                <div>

                </div>

                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Image
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Title
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Code
                                        </th>

                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Description
                                    </th>



                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $num => $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0"><?php echo e($num +1); ?></p>
                                    </td>
                                    <td>
                                        <div>
                                        <img src="<?php echo e(asset('storage/' . $package->image)); ?>" class="h-12 w-24 me-3" alt="package Image">
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"><?php echo e($package->title); ?></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"><?php echo e($package->code ?? "N/A"); ?></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"><?php echo e($package->description); ?></p>
                                    </td>


                                    <td class="text-center">
                                       
                                        <button
                                            @click="$dispatch('edit-package',{package:<?php echo e($package->id); ?>})"

                                            class="">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </button>
                                        <button
                                            wire:click="$dispatch('openDeleteModal', { itemId: <?php echo e($package->id); ?>, model: '<?php echo e(addslashes(App\Models\package::class)); ?>' })">
                                            <i class="fa-solid fa-trash text-red-400"></i>
                                        </button>

                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div><?php /**PATH /home/faysal/Desktop/apps/kasma/tour-travel-dashbaord/resources/views/livewire/packages/package-component.blade.php ENDPATH**/ ?>
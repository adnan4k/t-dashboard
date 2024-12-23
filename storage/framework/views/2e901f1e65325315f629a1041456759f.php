<div class="main-content">
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('opportunity.scholarship.form', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3523716408-0', $__slots ?? [], get_defined_vars());

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

$__html = app('livewire')->mount($__name, $__params, 'lw-3523716408-1', $__slots ?? [], get_defined_vars());

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
                            <h5 class="mb-0">All Scholarshis</h5>
                        </div>
                        <button
                            @click="$dispatch('scholarshipModal')"
                            class="btn bg-green-400 btn-sm mb-0"
                            type="button">+&nbsp; New Scholarship</button>
                    </div>
                </div>
                <div>

                </div>

                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>

                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $scholarships; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $num => $scholarship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <!-- Row Data -->
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0"><?php echo e($num + 1); ?></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"><?php echo e($scholarship->title); ?></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"><?php echo e($scholarship->first()->categories ?? ''); ?></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"><?php echo e($scholarship->author); ?></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"><?php echo e($scholarship->date->format('Y-m-d')); ?></p>
                                    </td>
                                    <td class="text-center align-middle">
                                        <div class="flex justify-center items-center">
                                            <img src="<?php echo e(asset('storage/' . $scholarship->image)); ?>" class="w-24 h-24 mb-0" alt="Blog Image" />
                                        </div>
                                    </td>
                                    <td class="text-center">

                                        <button @click="$dispatch('edit-scholarship', { scholarship: <?php echo e($scholarship->id); ?> })">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </button>
                                        <button wire:click="$dispatch('openDeleteModal', { itemId: <?php echo e($scholarship->id); ?>, model: '<?php echo e(addslashes(App\Models\Scholarship::class)); ?>' })">
                                            <i class="fa-solid fa-trash text-red-400"></i>
                                        </button>
                                    </td>
                                </tr>


                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div><?php /**PATH /home/faysal/Music/hakim-dashboard/resources/views/livewire/opportunity/scholarship/sholarship-component.blade.php ENDPATH**/ ?>
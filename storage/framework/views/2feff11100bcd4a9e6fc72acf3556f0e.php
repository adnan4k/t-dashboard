<div class="main-content">
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('opportunity.vacancy.form', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3526632673-0', $__slots ?? [], get_defined_vars());

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

$__html = app('livewire')->mount($__name, $__params, 'lw-3526632673-1', $__slots ?? [], get_defined_vars());

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
                            <h5 class="mb-0">All Vacancies</h5>
                        </div>
                        <button
                            @click="$dispatch('vacancyModal')"
                            class="btn bg-gradient-primary btn-sm mb-0"
                            type="button">+&nbsp; New Vacancy</>
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
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Title
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Title
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Episode
                                    </th>
                                    <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Description
                                    </th> -->

                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Creation Date
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $vacancies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vacancy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0"><?php echo e($vacancy->id); ?></p>
                                    </td>

                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"><?php echo e($vacancy->title); ?></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"><?php echo e($vacancy->jobType); ?></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"><?php echo e($vacancy->qualifications); ?></p>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-secondary text-xs font-weight-bold"><?php echo e($vacancy->deadline->format('Y-m-d')); ?></span>
                                    </td>
                                    <td class="text-center">
                                        <a
                                            href="<?php echo e(route('detail',$vacancy->id)); ?>">
                                            <i class="fa-solid fa-eye text-green-300"></i>

                                        </a>
                                        <button
                                            @click="$dispatch('edit-vacancy',{vacancy:<?php echo e($vacancy->id); ?>})"

                                            class="">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </button>
                                        <button
                                            wire:click="$dispatch('openDeleteModal', { itemId: <?php echo e($vacancy->id); ?>, model: '<?php echo e(addslashes(App\Models\Vacancy::class)); ?>' })">
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

</div><?php /**PATH /home/faysal/Music/hakim-dashboard/resources/views/livewire/opportunity/vacancy/vacancy-component.blade.php ENDPATH**/ ?>
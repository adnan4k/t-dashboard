<div class="main-content">
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('podcast.form', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1254936839-0', $__slots ?? [], get_defined_vars());

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

$__html = app('livewire')->mount($__name, $__params, 'lw-1254936839-1', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('podcast.detial', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1254936839-2', $__slots ?? [], get_defined_vars());

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
                            <h5 class="mb-0">All Podcasts</h5>
                        </div>
                        <button
                            @click="$dispatch('podcastModal')"
                            class="btn bg-gradient-primary btn-sm mb-0"
                            type="button">
                            +&nbsp; New Podcast
                        </button>

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
                                        Video
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
                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $podcasts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $num => $podcast): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0"><?php echo e($num +1); ?></p>
                                    </td>
                                    <td>
                                        <div>
                                            <iframe
                                                className="w-full h-10 mb-4"
                                                src="https://www.youtube.com/embed/<?php echo e($podcast->video_id); ?>"
                                                frameBorder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowFullScreen
                                                title={title}></iframe>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"><?php echo e($podcast->title); ?></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"><?php echo e($podcast->episode); ?></p>
                                    </td>
                                    <!-- <td class="text-center">
                                        <p class="text-xs font-bold mb-0 max-w-[10rem] truncate" title="<?php echo e($podcast->description); ?>">
                                            <?php echo e($podcast->description); ?>

                                        </p>
                                    </td> -->

                                    <td class="text-center">
                                        <span class="text-secondary text-xs font-weight-bold"><?php echo e($podcast->created_at->format('y-m-d')); ?></span>
                                    </td>
                                    <td class="text-center">
                                        <button
                                        wire:click="$dispatch('openDetailModal', { podcast: <?php echo e($podcast->id); ?> })" 
                                        >
                                            <i class="fa-solid fa-eye text-green-300"></i>

                                        </button>
                                        <button
                                        @click="$dispatch('edit-podcast',{podcast:<?php echo e($podcast->id); ?>})"

                                        class="">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </button>
                                        <button
                                            wire:click="$dispatch('openDeleteModal', { itemId: <?php echo e($podcast->id); ?>, model: '<?php echo e(addslashes(App\Models\Podcast::class)); ?>' })">
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
    <?php echo e($podcasts->links()); ?>


</div><?php /**PATH /home/faysal/Music/hakim-dashboard/resources/views/livewire/podcast/podcast-component.blade.php ENDPATH**/ ?>
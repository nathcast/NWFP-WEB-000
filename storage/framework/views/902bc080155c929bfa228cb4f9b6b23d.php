<div>
    <div class="flex flex-col items-center justify-between space-y-3 p-4 md:flex-row md:space-x-4 md:space-y-0">
        <div class="w-full md:w-1/2">
            <form class="flex items-center">
                <label class="sr-only" for="simple-search">Search</label>
                <div class="relative w-full">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="h-5 w-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                            viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input
                        class="focus:ring-primary-500 focus:border-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2 pl-10 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                        id="simple-search" type="text" wire:model.live="searchRef"
                        placeholder="Search Title, Keywords..." required="">
                </div>
            </form>
        </div>
        <div class="w-full md:w-1/2">
            <form class="flex items-center">
                <label class="sr-only" for="simple-search">Search</label>
                <div class="relative w-full">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="h-5 w-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                            viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input
                        class="focus:ring-primary-500 focus:border-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2 pl-10 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                        id="simple-search" type="text" wire:model.live="searchAuth" placeholder="Search Authors..."
                        required="">
                </div>
            </form>
        </div>
    </div>
    <ul class="space-y-3 p-3">

        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $publications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            

            <li class="list-inside list-disc">

                <?php echo e($pub->authors); ?> (<?php echo e($pub->pub_year); ?>)
                "<?php echo e($pub->title); ?>",
                <span class="italic"><?php echo e($pub->journal); ?></span>,
                <!--[if BLOCK]><![endif]--><?php if($pub->volume): ?>
                    <?php echo e($pub->volume); ?>,
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                <!--[if BLOCK]><![endif]--><?php if($pub->issue): ?>
                    <?php echo e($pub->issue); ?>,
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                <!--[if BLOCK]><![endif]--><?php if($pub->pages): ?>
                    <?php echo e($pub->pages); ?>,
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                <!--[if BLOCK]><![endif]--><?php if($pub->doi): ?>
                    <span class="font-semibold">DOI: </span><a
                        class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                        href="https://doi.org/<?php echo e($pub->doi); ?>"><?php echo e($pub->doi); ?>

                    </a>
                <?php elseif($pub->url): ?>
                    <a class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                        href="https://doi.org/<?php echo e($pub->url); ?>"><?php echo e($pub->url); ?>

                    </a>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->


            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    </ul>
</div>
<?php /**PATH D:\LaravelNWFP\NWFP2024-001\resources\views/livewire/list-publications.blade.php ENDPATH**/ ?>
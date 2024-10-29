<?php if (isset($component)) { $__componentOriginal69dc84650370d1d4dc1b42d016d7226b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b = $attributes; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\GuestLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                <?php echo e(__('Farm Platform Map')); ?>

            </h2>
            <?php if (isset($component)) { $__componentOriginalb24aa3dd5a6c9fd3f6fb289b49d0a5f7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb24aa3dd5a6c9fd3f6fb289b49d0a5f7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.share-on-x','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('share-on-x'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb24aa3dd5a6c9fd3f6fb289b49d0a5f7)): ?>
<?php $attributes = $__attributesOriginalb24aa3dd5a6c9fd3f6fb289b49d0a5f7; ?>
<?php unset($__attributesOriginalb24aa3dd5a6c9fd3f6fb289b49d0a5f7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb24aa3dd5a6c9fd3f6fb289b49d0a5f7)): ?>
<?php $component = $__componentOriginalb24aa3dd5a6c9fd3f6fb289b49d0a5f7; ?>
<?php unset($__componentOriginalb24aa3dd5a6c9fd3f6fb289b49d0a5f7); ?>
<?php endif; ?>
        </div>
     <?php $__env->endSlot(); ?>
    <div>
        <p class="px-3 pt-2">
            <a class="inline-flex items-center rounded-md border border-transparent bg-nw-blue-700 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-lime-500 hover:text-nw-blue-900 focus:bg-lime-700 focus:outline-none focus:ring-2 focus:ring-lime-700 focus:ring-offset-2 active:bg-lime-500 disabled:opacity-50"
                href="http://www.arcgisonline.com/home/webmap/viewer.html?webmap=9702eb980cfd454083a488e86cc42359&amp;extent=-3.9229,50.7608,-3.8791,50.7781" />
            Larger Map
            </a>
        </p>
        <div class="flex">
            <div class="flex-1">
                <iframe class="p-3"
                    src="http://www.arcgisonline.com/home/webmap/templates/OnePane/basicviewer/embed.html?webmap=9702eb980cfd454083a488e86cc42359&amp;extent=-3.9229,50.7608,-3.8791,50.7781&amp;displayslider=true&amp;displayscalebar=true&amp;displaydetails=true&amp;&#10;displaybasemaps=true"
                    frameborder="0" height="700" width="900" marginheight="0" marginwidth="0" scrolling="no">
                </iframe>
            </div>
            <div class="flex-1 p-3">
                The Farm Platform provides 4 farming systems comprising of 3 farmlets and one indoor beef finishing
                system. Each farmlet consists of five component catchments comprising approx. 21 ha in total per
                farmlet. 2 farmlets (Green and Blue) explore pasture based ruminant production systems, 1 farmlet (Red)
                allows the investigation of production of crops for the human food chain. The indoor beef finishing unit
                represents typical business as usual commercial beef production.
                <ul class="mt-5">
                    <li class="mt-4 h-12 content-center"><span
                            class="m-2 h-8 w-8 rounded-full bg-red-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">

                        </span>Arable</li>
                    <li class="mt-4 h-12 content-center"><span
                            class="m-2 h-8 w-8 rounded-full bg-lime-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">

                        </span>Permanent Pasture</li>
                    <li class="mt-4 h-12 content-center"><span
                            class="m-2 h-8 w-8 rounded-full bg-blue-400 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">

                        </span>Grass Clover Mixture</li>

                </ul>
            </div>
        </div>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $attributes = $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $component = $__componentOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php /**PATH D:\LaravelNWFP\NWFP2024-001\resources\views/content/map.blade.php ENDPATH**/ ?>
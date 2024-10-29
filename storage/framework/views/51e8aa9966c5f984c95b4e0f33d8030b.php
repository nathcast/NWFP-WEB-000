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
            <?php echo e(__('Overview & Hypotheses')); ?>

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

    <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Core Remit</h2>
    <div class="p-3">
    <p>The core remit of the platform is the comparison of treatments using a farm systems approach. The
        core hypothesis reflects this via the calculation of "sustainability metrics" that can accurately
        predict the long-term performance of each treatment - economically, environmentally and socially.
    </p>
    <p>Metrics are directly calculated from the platform's fine resolution data collections; and are
        carefully chosen to be transferrable to other farming systems, across the UK and the world. In this
        way, outputs from the platform directly influence sustainable land use both nationally and
        internationally.</p>
    <p>A critical over-arching challenge concerns approaches for reliably detecting the impacts of the
        treatments per se, in the context of natural hydro-climatic variability and inherent limitations of
        the platform design itself. The acknowledgment of spatiotemporal effects in the system is critical,
        either advancing science through a direct understanding of such dynamic processes or determining a
        sufficient observational scale so that a given hypothesis can be reliably tested, independent of
        such effects. Static spatial confounders also exert an influence, such as topography, soil class,
        and the physical layout of the fields.</p>
    </div>
    <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Past, Current, and Planned Treatments</h2>

    <div class="p-3">
        <p>The platform currently consists of three pasture-based livestock farming systems, each consisting of
        five component catchments over 21 ha. Catchments comprise single or multiple fields, that are
        heavily monitored to provide fine resolution data on all inputs, outputs and events.</p>
    <p>The timeline of each system's treatment are as follows:</p>
    <ul class="space-y-3 p-3">
        <?php if (isset($component)) { $__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.li-dot','data' => ['class' => 'bg-nw-blue-500']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('li-dot'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-nw-blue-500']); ?><span class="font-semibold">From April 2011 to March 2013</span>, all three pasture-based livestock farming
            systems
            were as one (permanent pasture) with no separate treatments in operation. This is the baseline
            period. <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d)): ?>
<?php $attributes = $__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d; ?>
<?php unset($__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d)): ?>
<?php $component = $__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d; ?>
<?php unset($__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.li-dot','data' => ['class' => 'bg-nw-blue-600']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('li-dot'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-nw-blue-600']); ?><span class="font-semibold">From April 2013 to September 2015</span>, two of three systems gradually
            transitioned
            into the first post-baseline phase, one re-sown with high sugar grasses (red system), the other
            re-sown with high sugar grass, white clover mix (blue system). The remaining (green) system
            continued as permanent pasture and will always do so, for long-term monitoring. <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d)): ?>
<?php $attributes = $__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d; ?>
<?php unset($__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d)): ?>
<?php $component = $__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d; ?>
<?php unset($__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.li-dot','data' => ['class' => 'bg-nw-blue-700']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('li-dot'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-nw-blue-700']); ?><span class="font-semibold">From September 2015 to April 2019</span>, the first post-baseline phase is in
            full
            operation across all three livestock farming systems and pasture treatments. <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d)): ?>
<?php $attributes = $__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d; ?>
<?php unset($__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d)): ?>
<?php $component = $__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d; ?>
<?php unset($__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.li-dot','data' => ['class' => 'bg-nw-blue-800']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('li-dot'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-nw-blue-800']); ?><span class="font-semibold">From April 2019</span>, the first post-baseline phase embarked on a transition to
            a
            second post-baseline phase, where the red system transitioned to an arable system growing human
            edible crops. Given the red system transition to an arable system, the livestock linked to this
            system are housed representing a fourth (brown) system (or treatment) for evaluation of more
            intensive finishing and fine resolution monitoring. <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d)): ?>
<?php $attributes = $__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d; ?>
<?php unset($__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d)): ?>
<?php $component = $__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d; ?>
<?php unset($__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d); ?>
<?php endif; ?>
    </ul>
    </div>
    <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Selected Treatment Hypotheses</h2>
    <div class="p-3">
    <h3 class="mt-4 p-3 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Hypotheses associated with the baseline period include:</h3>
    <ul class="space-y-3 p-3">
        <?php if (isset($component)) { $__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.li-dot','data' => ['class' => 'bg-nw-blue-500']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('li-dot'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-nw-blue-500']); ?> Emissions to water under best practice lowland grazing farming will still exceed intrinsic losses
            as driven by soil type and slope. <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d)): ?>
<?php $attributes = $__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d; ?>
<?php unset($__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d)): ?>
<?php $component = $__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d; ?>
<?php unset($__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.li-dot','data' => ['class' => 'bg-nw-blue-600']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('li-dot'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-nw-blue-600']); ?>Emissions to water under best practice lowland grazing farming will still exceed some environmental
            thresholds for aquatic biology. <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d)): ?>
<?php $attributes = $__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d; ?>
<?php unset($__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d)): ?>
<?php $component = $__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d; ?>
<?php unset($__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.li-dot','data' => ['class' => 'bg-nw-blue-700']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('li-dot'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-nw-blue-700']); ?>Animal performance will be benchmarked within typical UK production levels (sheep and beef). <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d)): ?>
<?php $attributes = $__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d; ?>
<?php unset($__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d)): ?>
<?php $component = $__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d; ?>
<?php unset($__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d); ?>
<?php endif; ?>
    </ul>
    <h3 class="mt-4 p-3 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Hypotheses associated with the first post-baseline period include:</h3>
    </h3>
    <ul class="space-y-3 p-3">
        <?php if (isset($component)) { $__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.li-dot','data' => ['class' => 'bg-nw-blue-500']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('li-dot'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-nw-blue-500']); ?>The re-seeding of permanent grassland with varieties that increase C sequestration and improve
            animal nutrition provide more sustainable grassland systems. <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d)): ?>
<?php $attributes = $__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d; ?>
<?php unset($__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d)): ?>
<?php $component = $__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d; ?>
<?php unset($__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.li-dot','data' => ['class' => 'bg-nw-blue-600']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('li-dot'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-nw-blue-600']); ?>The use of clover in pasture-based livestock production offers a high-risk high-return option for
            both commercial producers and the natural environment. <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d)): ?>
<?php $attributes = $__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d; ?>
<?php unset($__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d)): ?>
<?php $component = $__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d; ?>
<?php unset($__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.li-dot','data' => ['class' => 'bg-nw-blue-700']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('li-dot'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-nw-blue-700']); ?>Re-seeding of permanent pasture will provide greater returns in terms of animal performance than
            permanent pasture and in concert, reduce emission intensity. <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d)): ?>
<?php $attributes = $__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d; ?>
<?php unset($__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d)): ?>
<?php $component = $__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d; ?>
<?php unset($__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d); ?>
<?php endif; ?>
    </ul>
    <h3 class="mt-4 p-3 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Hypotheses associated with the second post-baseline period include:</h3>
    </h3>
    <ul class="space-y-3 p-3">
        <?php if (isset($component)) { $__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.li-dot','data' => ['class' => 'bg-nw-blue-500']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('li-dot'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-nw-blue-500']); ?>In agro-ecological zones where the geographical environment does not suit human edible crop
            production, farming systems without livestock are unsustainable - economically, environmentally and
            socially. <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d)): ?>
<?php $attributes = $__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d; ?>
<?php unset($__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d)): ?>
<?php $component = $__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d; ?>
<?php unset($__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.li-dot','data' => ['class' => 'bg-nw-blue-600']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('li-dot'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-nw-blue-600']); ?>Intensive housed finishing of cattle provides more sustainable outputs than extended grazing
            systems – economically, environmentally and socially. <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d)): ?>
<?php $attributes = $__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d; ?>
<?php unset($__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d)): ?>
<?php $component = $__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d; ?>
<?php unset($__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d); ?>
<?php endif; ?>
    </ul>
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
<?php /**PATH D:\LaravelNWFP\NWFP2024-001\resources\views/content/overview.blade.php ENDPATH**/ ?>
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
                <?php echo e(__('Key Research Findings')); ?>

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
    <h2 class="h-12 content-center bg-nw-blue-900 px-4 text-lg font-medium text-nw-blue-50">1. Soil health and flood
        prevention</h2>
    <div class="grid-col-1 grid gap-4 p-3 lg:grid-cols-2">

        <div class="rounded-lg border-2 border-nw-blue-700 shadow-sm">
            <h2 class="h-16 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">1a: Livestock
                grazing
                improves soil health and thereby reduces the chance of floods</h2>
            <img class="mx-auto" src="/images/Fig1a.png" alt="French drain water capturing system at North Wykes" />
            <div class="p-3">
                <p><span class="italic">Fig .1a 'French drain' water capturing system at North
                        Wyke.</span></p>
                <p>Each additional cow on pasture has been shown to enable the soil to retain
                    further 360 L/ha/yr of water, rather than losing it downstream along with dissolved nutrients </p>
                <p>[Takahashi <span class="italic">et al</span>., 2018, Animal].</p>
            </div>
        </div>
        <div class="rounded-lg border-2 border-nw-blue-700 shadow-sm">
            <h2 class="h-16 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">1b. Maintaining
                soil
                health, in turn, also helps animals grow more efficiently</h2>
            <img class="mx-auto" src="/images/Fig1b.png" alt="" /></p>
            <div class="p-3">
                <p><span class="italic">Fig. 1b </span> between soil organic carbon and the animal performance
                    observed at each grazing field. </p>

                <p>The positive correlation between soil organic carbon and animal
                    weight
                    gain highlights the importance of soil management in livestock farming </p>
                <p>[Takahashi <span class="italic">et al</span>., 2018, Animal].</p>
            </div>

        </div>
    </div>
    <h2 class="mt-4 h-12 content-center bg-nw-blue-900 px-4 text-lg font-medium text-nw-blue-50">2. Practical solutions
        for sustainable livestock systems</h2>
    <div class="grid-col-1 grid gap-4 p-3 lg:grid-cols-2">
        <div class="rounded-lg border-2 border-nw-blue-700 shadow-sm">
            <h2 class="h-16 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">2a: Clovers can
                help
                cut
                down the carbon footprint of cattle and sheep farms</h2>
            <img class="mx-auto" src="/images/Fig2a.png" alt="" />
            <div class="p-3">
                <p><span class="italic">Fig. 2a Carbon footprint of animals reared at North Wyke is
                        measured at an unprecedentedly high resolution.</span></p>

                <p>The white clover-based system has been shown to be environmentally more
                    efficient as it is not responsible for greenhouse gases produced during the synthesis of nitrogen
                    fertilisers. </p>
                <p>[McAuliffe <span class="italic">et al., </span>2018, Journal of Cleaner
                    Production].</p>
            </div>
        </div>
        <div class="rounded-lg border-2 border-nw-blue-700 shadow-sm">
            <h2 class="h-16 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">2b: If you
                decide to test your soil, you might as well do it right</h2>
            <img class="mx-auto" src="/images/Fig2b.png" alt="" />
            <div class="p-3">
                <p><span class="italic">Fig. 2b Newly identified relationship between the number of
                        soil samples collected and the accuracy of animal growth forecasting.</span></p>

                <p>Infrequent spot sampling commonplace in the industry is unlikely to
                    provide useful information.</p>
                <p>[Takahashi <span class="italic">et al.</span>,2018, European Federation of
                    Animal Science].</p>
            </div>
        </div>
    </div>
    <h2 class="mt-4 h-12 content-center bg-nw-blue-900 px-4 text-lg font-medium text-nw-blue-50">3. Informing
        agricultural policy in the UK and beyond</h2>
    <div class="grid-col-1 grid gap-4 p-3 lg:grid-cols-2">
        <div class="rounded-lg border-2 border-nw-blue-700 shadow-sm">
            <h2 class="h-16 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">3a: There are
                'green' cows
                and 'not-so-green' cows</h2>

            <img class="mx-auto" src="/images/Fig3a.png"
                alt="Carbon footprints of individual cattle and their
                        growth performances" />
            <div class="p-3">
                <p><span class="italic">Fig. 3a Carbon footprints of individual cattle and their
                        growth performances. </span></p>

                <p>Less polluting animals are also economically more profitable,
                    suggesting that environmentally sustainable grazing management is
                    commercially feasible. </p>
                <p>[McAuliffe <span class="italic">et al., </span>2018, Journal of Cleaner
                    Production; Balmford <span class="italic">et
                        al.,</span> 2018, Nature Sustainability].</p>
            </div>

        </div>
        <div class="rounded-lg border-2 border-nw-blue-700 shadow-sm">
            <h2 class="h-16 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">3b: Contrary to
                common
                belief, beef may be greener than chicken if consumed responsibly</h2>
            <img class="mx-auto" src="/images/Fig3b.png"
                alt="Carbon footprint of grass-fed beef and free-range
                    chicken per weight of meat" />
            <div class="p-3">
                <p><span class="italic">Fig.3b Carbon footprint of grass-fed beef and free-range
                        chicken per weight of meat (left) and per contribution to recommended daily intake of 12
                        essential
                        nutrients
                        (centre). </span></p>

                <p>The reversal is due to high levels of iron, zinc, vitamin
                    B12, omega-3 fatty acids and other beneficial nutrients found in grass-fed beef.
                    Beef also requires less land suitable for arable
                    production (right). </p>
                <p>[McAuliffe et al., 2018, Food and Energy Security; Lee et al., 2018,
                    European
                    Federation of Animal Science].</p>
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
<?php /**PATH D:\LaravelNWFP\NWFP2024-001\resources\views/content/key_findings.blade.php ENDPATH**/ ?>
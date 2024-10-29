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
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            <?php echo e(__('Welcome...')); ?>

        </h2>
     <?php $__env->endSlot(); ?>


        <p><iframe
            src="https://cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=1KQ75WdA1zVxpyPTH7U_LrjEicULz6ymZNjI_njEKMtU&amp;font=Default&amp;lang=en&amp;initial_zoom=1&amp;height=650"
            style="width: 100%; height: 600px;" frameborder="0" height="14" scrolling="no" width="47"></iframe></p>

            <div class="py-12 ">
                <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="overflow-auto bg-white sm:rounded-lg p-5 shadow-lg">
                        <div class="list-decimal grid grid-cols-4 gap-4">
                            <div class="m-5 rounded-lg border border-nw-blue-700 p-3 border-3 shadow-lg"> <a
                                    class=" text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                                    href="<?php echo e(route('home')); ?>"> Landing page </a> - this is this page - TODO
                            </div>

                            <div class="m-5 rounded-lg border border-nw-blue-700 p-3 border-3 shadow-lg"> <a
                                    class=" text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                                    href="<?php echo e(route('content.with.page', ['page' => 'contacts'])); ?>">Contacts</a> and
                                <a class=" text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                                    href="<?php echo e(route('content.with.page', ['page' => 'visits'])); ?>">Site
                                    Visits</a> - TODO :
                                <a href="http://resources.rothamsted.ac.uk/farm-platform-national-capability/about-farm-platform">Old Site</a>
                                contacts And site_visits
                            </div>

                            <div class="m-5 rounded-lg border border-nw-blue-700 p-3 border-3 shadow-lg"> <a
                                    class=" text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                                    href="<?php echo e(route('nw-guides')); ?>">User Guides, Information, Data Portal Updates and External Links</a> - - TODO
                                <a href="http://resources.rothamsted.ac.uk/farm-platform-national-capability/data-portal-guides-and-information">Old Site</a>
                            </div>
                            <div class="m-5 rounded-lg border border-nw-blue-700 p-3 border-3 shadow-lg"> <a
                                    class=" text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                                    href="<?php echo e(route('content.with.page', ['page' => 'advanced_technologies'])); ?>">North Wyke and the Farm
                                    Platform as a Test-Bed For Advances in Sensor Technologies</a> DONE
                                <a href="http://resources.rothamsted.ac.uk/north-wyke-farm-platform/north-wyke-and-farm-platform-test-bed-advances-sensor-technologies">Old Site</a>
                            </div>
                            <div class="m-5 rounded-lg border border-nw-blue-700 p-3 border-3 shadow-lg"> <a
                                    class=" text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                                    href="<?php echo e(route('content.with.page', ['page' => 'overview'])); ?>">Overview & Hypotheses</a> -
                                <a href="http://resources.rothamsted.ac.uk/north-wyke-farm-platform/overview-hypotheses">Old Site</a>
                            </div>
                            <div class="m-5 rounded-lg border border-nw-blue-700 p-3 border-3 shadow-lg"> <a
                                    class=" text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                                    href="<?php echo e(route('publications')); ?>">
                                    Publications</a> -
                                <a href="http://resources.rothamsted.ac.uk/north-wyke-farm-platform/publications">Old Site</a>
                            </div>
                            <div class="m-5 rounded-lg border border-nw-blue-700 p-3 border-3 shadow-lg"> <a
                                    class=" text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                                    href="<?php echo e(route('content.with.page', ['page' => 'agri_modelling'])); ?>">Agri-Modelling</a> -
                                <a href="http://resources.rothamsted.ac.uk/farm-platform-national-capability/agri-modelling-0">Old Site</a>
                            </div>
                            <div class="m-5 rounded-lg border border-nw-blue-700 p-3 border-3 shadow-lg"> <a
                                    class=" text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                                    href="<?php echo e(route('content.with.page', ['page' => 'live_trends'])); ?>">Live Catchment Data Trends and Meteorogical Data</a>
                                <a href="http://resources.rothamsted.ac.uk/farm-platform-national-capability/farm-platform-live-trends-and-met-data">Old Site</a>
                            </div>
                            <div class="m-5 rounded-lg border border-nw-blue-700 p-3 border-3 shadow-lg"> <a
                                    class=" text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                                    href="<?php echo e(route('content.with.page', ['page' => 'key_findings'])); ?>">Key Research Findings</a> -
                                <a href="http://resources.rothamsted.ac.uk/north-wyke-farm-platform/key-research-findings">Old Site</a>
                            </div>

                            <div class="m-5 rounded-lg border border-nw-blue-700 p-3 border-3 shadow-lg"> <a
                                    class=" text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                                    href="<?php echo e(route('content.with.page', ['page' => 'timeline'])); ?>">Timeline of Events</a>
                                <a href="http://resources.rothamsted.ac.uk/farm-platform-national-capability/timeline-events">Old Site</a>
                            </div>
                            <div class="m-5 rounded-lg border border-nw-blue-700 p-3 border-3 shadow-lg"> <a
                                    class=" text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                                    href="<?php echo e(route('content.with.page', ['page' => 'map'])); ?>">Farm Platform Map</a>
                                <a href="http://resources.rothamsted.ac.uk/farm-platform-national-capability/farm-platform-map">Old Site</a>
                            </div>

                            <div class="m-5 rounded-lg border border-nw-blue-700 p-3 border-3 shadow-lg"> <a
                                    class=" text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                                    href="<?php echo e(route('content.with.page', ['page' => 'data_collection'])); ?>">Datasets Available on the Data Portal and Record Counts</a>
                                <a href="http://resources.rothamsted.ac.uk/farm-platform-national-capability/data-collections">Old Site</a>
                            </div>
                            <div class="m-5 rounded-lg border border-nw-blue-700 p-3 border-3 shadow-lg"> <a
                                    class=" text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                                    href="<?php echo e(route('content.with.page', ['page' => 'facilities'])); ?>">Using Our Facilities and Opportunities for Co-Development</a>
                                <a href="http://resources.rothamsted.ac.uk/farm-platform-national-capability/using-our-facilities">Old Site</a>
                            </div>

                        </div>
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
<?php /**PATH D:\LaravelNWFP\NWFP2024-001\resources\views/index.blade.php ENDPATH**/ ?>
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
    <div>
         <?php $__env->slot('header', null, []); ?> 
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                <?php echo e(__('Site Visits')); ?>

            </h2>
         <?php $__env->endSlot(); ?>
        <div class="p-3">
            <div class="border-2 border-nw-blue-700 bg-nw-blue-50 p-5">
                <p>If you wish to visit the NWFP please complete the
                    <span class="font-semibold"><a
                            href="https://forms.office.com/pages/responsepage.aspx?id=JTaItkGJQkOw43uMyDkvZLcwcoUWgp9DttNqwK3TGQ1UME9IWTJPMUxIVlNHNFZPMFUxVzRFVjZQWi4u&amp;web=1&amp;wdLOR=c82212539-350C-4D18-BEDE-1A0595854399"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">

                            visit request form
                        </a>.
                    </span>
                    We will assess your request and contact you to arrange a visit or to provide you
                    with details of upcoming open days.
                </p>
                <p>
                    <span class="italic">
                        If
                        you want to check in advance of submitting a visit request, please call / email
                        <a href="https://www.rothamsted.ac.uk/people/melanie-wright"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Melanie
                            Wright</a> or <a href="https://www.rothamsted.ac.uk/people/jane-hawkins"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Jane
                            Hawkins</a>

                    </span>
                </p>
            </div>
            <div class="mt-3">
                <ul class="space-y-3">
                    <?php if (isset($component)) { $__componentOriginalcd79108e3e4f77323d505b0e38afbe42 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcd79108e3e4f77323d505b0e38afbe42 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.li-arrow','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('li-arrow'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>As a working research institute, we are limited in how many
                        visitor groups we can host each year, and in the size of those groups. We
                        therefore reserve the right to decline a visit request if it is not relevant to
                        our mission or if we are unable to provide staff members to host. <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcd79108e3e4f77323d505b0e38afbe42)): ?>
<?php $attributes = $__attributesOriginalcd79108e3e4f77323d505b0e38afbe42; ?>
<?php unset($__attributesOriginalcd79108e3e4f77323d505b0e38afbe42); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd79108e3e4f77323d505b0e38afbe42)): ?>
<?php $component = $__componentOriginalcd79108e3e4f77323d505b0e38afbe42; ?>
<?php unset($__componentOriginalcd79108e3e4f77323d505b0e38afbe42); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalcd79108e3e4f77323d505b0e38afbe42 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcd79108e3e4f77323d505b0e38afbe42 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.li-arrow','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('li-arrow'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>Both our main sites occasionally run open days when multiple
                            groups may visit and meet a range of experts. Details are publicised in advance.
                            If an open day is planned, you may be asked to plan your visit to coincide with
                            that day.  <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcd79108e3e4f77323d505b0e38afbe42)): ?>
<?php $attributes = $__attributesOriginalcd79108e3e4f77323d505b0e38afbe42; ?>
<?php unset($__attributesOriginalcd79108e3e4f77323d505b0e38afbe42); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd79108e3e4f77323d505b0e38afbe42)): ?>
<?php $component = $__componentOriginalcd79108e3e4f77323d505b0e38afbe42; ?>
<?php unset($__componentOriginalcd79108e3e4f77323d505b0e38afbe42); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalcd79108e3e4f77323d505b0e38afbe42 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcd79108e3e4f77323d505b0e38afbe42 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.li-arrow','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('li-arrow'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>For outdoor visits, you can expect to walk over rough
                            farmland. If anyone in your party has mobility issues, please notify us in
                            advance. Please also bring suitable outdoor clothing. <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcd79108e3e4f77323d505b0e38afbe42)): ?>
<?php $attributes = $__attributesOriginalcd79108e3e4f77323d505b0e38afbe42; ?>
<?php unset($__attributesOriginalcd79108e3e4f77323d505b0e38afbe42); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd79108e3e4f77323d505b0e38afbe42)): ?>
<?php $component = $__componentOriginalcd79108e3e4f77323d505b0e38afbe42; ?>
<?php unset($__componentOriginalcd79108e3e4f77323d505b0e38afbe42); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalcd79108e3e4f77323d505b0e38afbe42 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcd79108e3e4f77323d505b0e38afbe42 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.li-arrow','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('li-arrow'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>For some visitors, there may be a charge to cover room hire
                            and staff time. Once the form below has been submitted, we will send you
                            notification if a charge is to be levied. <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcd79108e3e4f77323d505b0e38afbe42)): ?>
<?php $attributes = $__attributesOriginalcd79108e3e4f77323d505b0e38afbe42; ?>
<?php unset($__attributesOriginalcd79108e3e4f77323d505b0e38afbe42); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd79108e3e4f77323d505b0e38afbe42)): ?>
<?php $component = $__componentOriginalcd79108e3e4f77323d505b0e38afbe42; ?>
<?php unset($__componentOriginalcd79108e3e4f77323d505b0e38afbe42); ?>
<?php endif; ?>


                </ul>

                <p  class="mt-3">Our scientists are always happy to share their expertise, but
                    cannot necessarily offer specific solutions to day-to-day farming challenges as
                    our strategic research often needs further development before it can deliver
                    successful market-based solutions. </p>

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
<?php /**PATH D:\LaravelNWFP\NWFP2024-001\resources\views/content/site_visits.blade.php ENDPATH**/ ?>
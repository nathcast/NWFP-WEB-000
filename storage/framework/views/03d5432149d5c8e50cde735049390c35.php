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
                <?php echo e(__('Using Our Facilities and Opportunities for Co-Development')); ?>

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
    <div class="sticky top-0 border-b-4 border-nw-blue-700">

        <h2 class="h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Request Forms</h2>
        <div class="p-3">
            <ul>
                <li><img class="file-icon" src="/icons/x-office-document.png"
                        title="application/vnd.openxmlformats-officedocument.wordprocessingml.document" alt="File" />
                    <a class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                        type="application/vnd.openxmlformats-officedocument.wordprocessingml.document; length=652728"
                        href="http://resources.rothamsted.ac.uk/sites/default/files/attachments/2023-07-25/Farm%20Platform%20Access%20Request%20Form%20V12.docx"
                        title="Farm Platform Access Request Form V12.docx">Farm Platform Access Request Form</a>
                </li>
                <li><img class="file-icon" src="/icons/x-office-document.png"
                        title="application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                        alt="File" />
                    <a class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                        type="application/vnd.openxmlformats-officedocument.wordprocessingml.document; length=37292"
                        href="http://resources.rothamsted.ac.uk/sites/default/files/attachments/2023-07-25/Farm%20Platform%20Archived%20Sample%20Request%20Form%20V1.docx"
                        title="Farm Platform Archived Sample Request Form V1.docx">Farm Platform Archive Sample Request
                        Form</a>
                </li>
            </ul>
        </div>

    </div>
    <div class="flex items-center justify-between gap-4">
        <div class="size-1/3 p-3">
            <div class="border-2 border-nw-blue-700 bg-nw-blue-50 p-5">
                <p>The unique facility is located in the South West of the UK and offers the research
                    community access to a range of
                    <span class="italic">in-situ </span> state-of-the-art instrumentation installed over three
                    hydrologically
                    isolated farming systems or farmlets.
                    The platform also has an indoor cattle system that is similarly instrumented.
                </p>
                <p>All core input and output data collected from across the platform is freely available to all
                    national and international research users and collaborators via our
                    <a class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                        href="https://nwfp.rothamsted.ac.uk/"
                        onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Data
                        Portal</a>.
                </p>
            </div>
        </div>
        <div class="p-3">
            <p><img src="/images/facilities01.png" /></p>

        </div>

    </div>
    <div class="flex items-center justify-between gap-4">
        <div class="size-2/3 p-3">
            <img src="/images/facilities02.png" alt="Map of the site " />
        </div>
        <div class="p-3">
            <p>Each outdoor farmlet consists of five component sub-catchments comprising just over 20 ha in
                total per farmlet.</p>
            <p>They are currently managed as beef cattle, sheep and arable enterprises with a high degree of
                control over inputs.</p>
            <p>The key concept of the Farm Platform is to explore different ways of managing sustainable and
                resilient grazing livestock production alongside a wide range of agro-ecosystem attributes at farm
                scale.
                Opportunities also exist for investigating net zero strategies.</p>
            <p></p>
            <p>The facility attracts researchers from different communities and disciplines to promote new
                ideas or tackle old challenges in novel ways to better address key issues in sustainable and resilient
                agriculture.</p>
        </div>
    </div>

    <div class="p-3">
        <p class="p-3">We have dedicated laboratories to
            handle soil, herbage, air and water samples and have a wide range of analytical techniques available in
            our
            Analytical Laboratories.</p>
        <p><img class="mx-auto p-4" src="/images/facilities03.png" /></p>
        <p class="p-3">In addition, we have the Small Ruminant Facility (SRF; Robert Orr building) which is used to
            not only house
            the
            Farm Platform sheep during the winter period but which also contains 24 automated biocontrol units. These
            units
            allow the recording of individual feed intake using automatically weighed feed hoppers and which are
            available
            for studies concerning animal health, welfare and performance. Some pens within the facility have also been
            specifically designed to accommodate goat housing.</p>
        <p><img class="mx-auto p-4" src="/images/SmallRuminantFacility.png" /></p>
    </div>
    <div class="items-top justify-beween flex border-y-4 border-nw-blue-700 p-3">
        <div class="size-2/3">
            <p>We welcome opportunities for co-development of projects on the
                platform.
                Project proposals can be of any size and through any funding body.</p>
            <p>If you are interested in proposing or conducting a research project
                using
                the Farm Platform facilities, please contact the North Wyke Farm Platform team (<a
                    class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                    href="mailto:nw.farmplatform@rothamsted.ac.uk">nw.farmplatform@rothamsted.ac.uk</a>) for initial
                discussions, where we will align you with the contacts
                and
                expertise to facilitate your proposal or project. This is the first step, where the second step
                (following initial consultation) is to complete the farm platform access form in the Downloads
                section
                and submit for approval.</p>

        </div>
        <div class="">

            <h2 class="h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Request Forms</h2>
            <div class="p-3">
                <ul>
                    <li><img class="file-icon" src="/icons/x-office-document.png"
                            title="application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                            alt="File" />
                        <a class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                            type="application/vnd.openxmlformats-officedocument.wordprocessingml.document; length=652728"
                            href="http://resources.rothamsted.ac.uk/sites/default/files/attachments/2023-07-25/Farm%20Platform%20Access%20Request%20Form%20V12.docx"
                            title="Farm Platform Access Request Form V12.docx">Farm Platform Access Request Form</a>
                    </li>
                    <li><img class="file-icon" src="/icons/x-office-document.png"
                            title="application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                            alt="File" />
                        <a class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                            type="application/vnd.openxmlformats-officedocument.wordprocessingml.document; length=37292"
                            href="http://resources.rothamsted.ac.uk/sites/default/files/attachments/2023-07-25/Farm%20Platform%20Archived%20Sample%20Request%20Form%20V1.docx"
                            title="Farm Platform Archived Sample Request Form V1.docx">Farm Platform Archive Sample
                            Request
                            Form</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <h2 class="h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Funding</h2>
    <div class="p-3">
        <p>Our facilities are part-funded by CIEL (<a
                class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="https://www.cielivestock.co.uk/"
                onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">https://www.cielivestock.co.uk/</a>).
            As such, if you are considering applying for funding to conduct an NWFP or SRF experiment, then please
            contact
            us so that we can ensure a small charge (typically 2%) is captured in the funding application reflecting
            CIEL's
            investment.</p>
    </div>
    <h2 class="h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Aknowledgment</h2>
    <div class="p-3">
        If you decide to use our data in any publications or have used the NWFP facilities,
        then
        please:

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
<?php $component->withAttributes(['class' => 'bg-nw-blue-500']); ?>
                <p class="font-semibold">1. Cite one or both of the following 2 papers:</p>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d)): ?>
<?php $attributes = $__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d; ?>
<?php unset($__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d)): ?>
<?php $component = $__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d; ?>
<?php unset($__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d); ?>
<?php endif; ?>
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
<?php $component->withAttributes([]); ?>
                    R.J. Orr, P.J. Murray, C.J. Eyles, M.S.A. Blackwell, L.M. Cardenas, A.L.
                    Collins, J.A.J.
                    Dungait, K.W.T.Goulding, B.A. Griffith, S.J. Gurr, P. Harris, J.M.B. Hawkins, T.H. Misselbrook, C.
                    Rawlings, A.
                    Shepherd,
                    H. Sint, T. Takahashi, K.N. Tozer, A.P. Whitmore, L. Wu and M.R.F. Lee. (2016). The North Wyke
                    Farm
                    Platform: effect of temperate grassland farming systems on soil moisture contents, runoff and
                    associated
                    water quality dynamics. European Journal of Soil Science, 67, 374-385.DOI: <a
                        class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                        href="https://doi.org/10.1111/ejss.12350">https://doi.org/10.1111/ejss.12350</a>

                 <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes([]); ?>
                    T. Takahashi, P. Harris, M. S. A. Blackwell, L. M. Cardenas, A. L. Collins, J.
                    A. J.
                    Dungait, J. M. B.
                    Hawkins, T. H. Misselbrook, G. A. McAuliffe, J. N. McFadzean, P. J. Murray, R. J. Orr, M. J.
                    Rivero, L. Wu,
                    M. R. F. Lee, 2018. Roles of instrumented farm-scale trials in trade-off assessments of
                    pasture-based
                    ruminant production systems. Animal, 1766-1776.DOI: <a
                        class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                        href="https://doi.org/10.1017/S1751731118000502">https://doi.org/10.1017/S1751731118000502</a>
                 <?php echo $__env->renderComponent(); ?>
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
            <?php if (isset($component)) { $__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.li-dot','data' => ['class' => 'bg-nw-blue-500']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('li-dot'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-nw-blue-500']); ?>
                <p class="font-semibold">2. Add that data were downloaded from the Farm Platform Data Portal, with the
                    URL: </p>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d)): ?>
<?php $attributes = $__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d; ?>
<?php unset($__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d)): ?>
<?php $component = $__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d; ?>
<?php unset($__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d); ?>
<?php endif; ?>
            <p><a class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                    href="http://resources.rothamsted.ac.uk/farmplatform">http://resources.rothamsted.ac.uk/farmplatform</a>
            </p>

            <?php if (isset($component)) { $__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.li-dot','data' => ['class' => 'bg-nw-blue-500']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('li-dot'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-nw-blue-500']); ?>
                <p class="font-semibold">3. Add the following paragraphs to your acknowledgments section:</p>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d)): ?>
<?php $attributes = $__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d; ?>
<?php unset($__attributesOriginalb4057fbf0f78f20eca2c2f9e449de45d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d)): ?>
<?php $component = $__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d; ?>
<?php unset($__componentOriginalb4057fbf0f78f20eca2c2f9e449de45d); ?>
<?php endif; ?>
            <div class="border-2 border-nw-blue-700 bg-nw-blue-50 p-5">
                <p>The North Wyke Farm Platform is a UK National Capability supported by the Biotechnology and
                    Biological Sciences
                    Research Council (BBS/E/C/000J0100).</p>
                <p>We acknowledge the interests of the Ecological Continuity Trust (ECT), whose national network of LTEs
                    includes
                    the experiment on which this research was conducted</p>
            </div>
        </ul>
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
<?php /**PATH D:\LaravelNWFP\NWFP2024-001\resources\views/content/facilities.blade.php ENDPATH**/ ?>
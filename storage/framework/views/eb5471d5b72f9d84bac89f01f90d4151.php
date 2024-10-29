<div class="text-gray-900">
    <?php switch($provider):
        case (\JoelButcher\Socialstream\Providers::bitbucket()): ?>
            <?php if (isset($component)) { $__componentOriginal0027a287b10d26ed7c29a570f6b601fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0027a287b10d26ed7c29a570f6b601fb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.socialstream-icons.bitbucket','data' => ['attributes' => $attributes]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('socialstream-icons.bitbucket'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0027a287b10d26ed7c29a570f6b601fb)): ?>
<?php $attributes = $__attributesOriginal0027a287b10d26ed7c29a570f6b601fb; ?>
<?php unset($__attributesOriginal0027a287b10d26ed7c29a570f6b601fb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0027a287b10d26ed7c29a570f6b601fb)): ?>
<?php $component = $__componentOriginal0027a287b10d26ed7c29a570f6b601fb; ?>
<?php unset($__componentOriginal0027a287b10d26ed7c29a570f6b601fb); ?>
<?php endif; ?>
            <?php break; ?>

        <?php case (JoelButcher\Socialstream\Providers::facebook()): ?>
            <?php if (isset($component)) { $__componentOriginal3d46107d7b931b1cddcc22d678c4c62b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3d46107d7b931b1cddcc22d678c4c62b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.socialstream-icons.facebook','data' => ['attributes' => $attributes]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('socialstream-icons.facebook'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3d46107d7b931b1cddcc22d678c4c62b)): ?>
<?php $attributes = $__attributesOriginal3d46107d7b931b1cddcc22d678c4c62b; ?>
<?php unset($__attributesOriginal3d46107d7b931b1cddcc22d678c4c62b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3d46107d7b931b1cddcc22d678c4c62b)): ?>
<?php $component = $__componentOriginal3d46107d7b931b1cddcc22d678c4c62b; ?>
<?php unset($__componentOriginal3d46107d7b931b1cddcc22d678c4c62b); ?>
<?php endif; ?>
            <?php break; ?>

        <?php case (JoelButcher\Socialstream\Providers::github()): ?>
            <?php if (isset($component)) { $__componentOriginal7003c279b6489d6b2ee9290286f71838 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7003c279b6489d6b2ee9290286f71838 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.socialstream-icons.github','data' => ['attributes' => $attributes]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('socialstream-icons.github'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7003c279b6489d6b2ee9290286f71838)): ?>
<?php $attributes = $__attributesOriginal7003c279b6489d6b2ee9290286f71838; ?>
<?php unset($__attributesOriginal7003c279b6489d6b2ee9290286f71838); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7003c279b6489d6b2ee9290286f71838)): ?>
<?php $component = $__componentOriginal7003c279b6489d6b2ee9290286f71838; ?>
<?php unset($__componentOriginal7003c279b6489d6b2ee9290286f71838); ?>
<?php endif; ?>
            <?php break; ?>

        <?php case (JoelButcher\Socialstream\Providers::gitlab()): ?>
            <?php if (isset($component)) { $__componentOriginal76f3e2393ef2279d471bf069439f57ba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal76f3e2393ef2279d471bf069439f57ba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.socialstream-icons.gitlab','data' => ['attributes' => $attributes]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('socialstream-icons.gitlab'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal76f3e2393ef2279d471bf069439f57ba)): ?>
<?php $attributes = $__attributesOriginal76f3e2393ef2279d471bf069439f57ba; ?>
<?php unset($__attributesOriginal76f3e2393ef2279d471bf069439f57ba); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal76f3e2393ef2279d471bf069439f57ba)): ?>
<?php $component = $__componentOriginal76f3e2393ef2279d471bf069439f57ba; ?>
<?php unset($__componentOriginal76f3e2393ef2279d471bf069439f57ba); ?>
<?php endif; ?>
            <?php break; ?>

        <?php case (JoelButcher\Socialstream\Providers::google()): ?>
            <?php if (isset($component)) { $__componentOriginal1cc90f2f9de7e02d8836e4dcd2375518 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1cc90f2f9de7e02d8836e4dcd2375518 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.socialstream-icons.google','data' => ['attributes' => $attributes]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('socialstream-icons.google'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1cc90f2f9de7e02d8836e4dcd2375518)): ?>
<?php $attributes = $__attributesOriginal1cc90f2f9de7e02d8836e4dcd2375518; ?>
<?php unset($__attributesOriginal1cc90f2f9de7e02d8836e4dcd2375518); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1cc90f2f9de7e02d8836e4dcd2375518)): ?>
<?php $component = $__componentOriginal1cc90f2f9de7e02d8836e4dcd2375518; ?>
<?php unset($__componentOriginal1cc90f2f9de7e02d8836e4dcd2375518); ?>
<?php endif; ?>
            <?php break; ?>

        <?php case (JoelButcher\Socialstream\Providers::linkedin()): ?>
        <?php case (JoelButcher\Socialstream\Providers::linkedinOpenId()): ?>
            <?php if (isset($component)) { $__componentOriginal4a05ea9f4b6ed33ced9f262f3663ed8e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4a05ea9f4b6ed33ced9f262f3663ed8e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.socialstream-icons.linkedin','data' => ['attributes' => $attributes]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('socialstream-icons.linkedin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4a05ea9f4b6ed33ced9f262f3663ed8e)): ?>
<?php $attributes = $__attributesOriginal4a05ea9f4b6ed33ced9f262f3663ed8e; ?>
<?php unset($__attributesOriginal4a05ea9f4b6ed33ced9f262f3663ed8e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4a05ea9f4b6ed33ced9f262f3663ed8e)): ?>
<?php $component = $__componentOriginal4a05ea9f4b6ed33ced9f262f3663ed8e; ?>
<?php unset($__componentOriginal4a05ea9f4b6ed33ced9f262f3663ed8e); ?>
<?php endif; ?>
            <?php break; ?>

        <?php case (JoelButcher\Socialstream\Providers::slack()): ?>
            <?php if (isset($component)) { $__componentOriginal34542def8f7ea1304e7325636a41feed = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal34542def8f7ea1304e7325636a41feed = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.socialstream-icons.slack','data' => ['attributes' => $attributes]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('socialstream-icons.slack'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal34542def8f7ea1304e7325636a41feed)): ?>
<?php $attributes = $__attributesOriginal34542def8f7ea1304e7325636a41feed; ?>
<?php unset($__attributesOriginal34542def8f7ea1304e7325636a41feed); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal34542def8f7ea1304e7325636a41feed)): ?>
<?php $component = $__componentOriginal34542def8f7ea1304e7325636a41feed; ?>
<?php unset($__componentOriginal34542def8f7ea1304e7325636a41feed); ?>
<?php endif; ?>
            <?php break; ?>

        <?php case (JoelButcher\Socialstream\Providers::twitterOAuth1()): ?>
        <?php case (JoelButcher\Socialstream\Providers::twitterOAuth2()): ?>
        <?php case (JoelButcher\Socialstream\Providers::twitter()): ?>
            <?php if (isset($component)) { $__componentOriginal9a6c64269173f36aecd56d68f7752bd0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9a6c64269173f36aecd56d68f7752bd0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.socialstream-icons.twitter','data' => ['attributes' => $attributes]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('socialstream-icons.twitter'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9a6c64269173f36aecd56d68f7752bd0)): ?>
<?php $attributes = $__attributesOriginal9a6c64269173f36aecd56d68f7752bd0; ?>
<?php unset($__attributesOriginal9a6c64269173f36aecd56d68f7752bd0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9a6c64269173f36aecd56d68f7752bd0)): ?>
<?php $component = $__componentOriginal9a6c64269173f36aecd56d68f7752bd0; ?>
<?php unset($__componentOriginal9a6c64269173f36aecd56d68f7752bd0); ?>
<?php endif; ?>
            <?php break; ?>
    <?php endswitch; ?>
</div>
<?php /**PATH D:\LaravelNWFP\NWFP2024-001\resources\views/components/socialstream-icons/provider-icon.blade.php ENDPATH**/ ?>
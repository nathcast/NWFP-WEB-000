<div class="space-y-6 mt-6 mb-2">
    <?php if(! empty(\JoelButcher\Socialstream\Socialstream::providers())): ?>
        <div class="relative flex items-center">
            <div class="flex-grow border-t border-gray-400"></div>
            <span class="flex-shrink text-gray-400 px-6">
                <?php echo e(config('socialstream.prompt', 'Or Login Via')); ?>

            </span>
            <div class="flex-grow border-t border-gray-400"></div>
        </div>
    <?php endif; ?>

    <?php if (isset($component)) { $__componentOriginalf94ed9c5393ef72725d159fe01139746 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf94ed9c5393ef72725d159fe01139746 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['for' => 'socialstream','class' => 'text-center']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('socialstream'),'class' => 'text-center']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $attributes = $__attributesOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__attributesOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $component = $__componentOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__componentOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>

    <div class="grid gap-4">
        <?php $__currentLoopData = \JoelButcher\Socialstream\Socialstream::providers(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a class="flex gap-2 items-center justify-center transition duration-200 border border-gray-400 w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md"
               href='<?php echo e(route('oauth.redirect', $provider['id'])); ?>'>
                <?php if (isset($component)) { $__componentOriginal966cafe5a28645be6acb9e85553f4778 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal966cafe5a28645be6acb9e85553f4778 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.socialstream-icons.provider-icon','data' => ['provider' => $provider['id'],'class' => 'h-6 w-6']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('socialstream-icons.provider-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['provider' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($provider['id']),'class' => 'h-6 w-6']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal966cafe5a28645be6acb9e85553f4778)): ?>
<?php $attributes = $__attributesOriginal966cafe5a28645be6acb9e85553f4778; ?>
<?php unset($__attributesOriginal966cafe5a28645be6acb9e85553f4778); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal966cafe5a28645be6acb9e85553f4778)): ?>
<?php $component = $__componentOriginal966cafe5a28645be6acb9e85553f4778; ?>
<?php unset($__componentOriginal966cafe5a28645be6acb9e85553f4778); ?>
<?php endif; ?>
                <span class="block font-medium text-sm text-gray-700"><?php echo e($provider['buttonLabel']); ?></span>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH D:\LaravelNWFP\NWFP2024-001\resources\views/components/socialstream.blade.php ENDPATH**/ ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['provider', 'createdAt' => null]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['provider', 'createdAt' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div>
    <div class="pl-3 flex items-center justify-between">
        <div class="flex items-center">
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

            <div class="ml-2">
                <div class="text-sm font-semibold text-gray-600">
                    <?php echo e(__($provider['name'])); ?>

                </div>

                <!--[if BLOCK]><![endif]--><?php if(! empty($createdAt)): ?>
                    <div class="text-xs text-gray-500">
                        <?php echo e(__('Connected :createdAt', ['createdAt' => $createdAt])); ?>

                    </div>
                <?php else: ?>
                    <div class="text-xs text-gray-500">
                        <?php echo e(__('Not connected.')); ?>

                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>

        <div>
            <?php echo e($action); ?>

        </div>
    </div>

    <!--[if BLOCK]><![endif]--><?php $__errorArgs = [$provider['id'].'_connect_error'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div class="text-sm font-semibold text-red-500 px-3 mt-2">
        <?php echo e($message); ?>

    </div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH D:\LaravelNWFP\NWFP2024-001\resources\views/components/connected-account.blade.php ENDPATH**/ ?>
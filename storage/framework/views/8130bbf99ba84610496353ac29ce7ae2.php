<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['active']));

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

foreach (array_filter((['active']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-t-4 border-nw-blue-600 bg-nw-blue-600 text-lg font-semibold leading-5 text-nw-blue-50 hover:bg-nw-blue-900 hover:text-nw-blue-50 focus:outline-none focus:text-nw-blue-50  transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-1 border-transparent text-lg font-medium   leading-5 text-nw-blue-600 hover:bg-nw-blue-900 hover:text-nw-blue-50  transition duration-150 ease-in-out';
?>

<a <?php echo e($attributes->merge(['class' => $classes])); ?>>
    <?php echo e($slot); ?>

</a>
<?php /**PATH D:\LaravelNWFP\NWFP2024-001\resources\views/components/nav-link.blade.php ENDPATH**/ ?>
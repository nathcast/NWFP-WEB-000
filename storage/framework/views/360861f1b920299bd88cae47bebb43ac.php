<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['align' => 'right', 'width' => '48', 'contentClasses' => 'py-1 bg-white', 'dropdownClasses' => '']));

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

foreach (array_filter((['align' => 'right', 'width' => '48', 'contentClasses' => 'py-1 bg-white', 'dropdownClasses' => '']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
    switch ($align) {
        case 'left':
            $alignmentClasses = 'ltr:origin-top-left rtl:origin-top-right start-0';
            break;
        case 'top':
            $alignmentClasses = 'origin-top';
            break;
        case 'none':
        case 'false':
            $alignmentClasses = '';
            break;
        case 'right':
        default:
            $alignmentClasses = 'ltr:origin-top-right rtl:origin-top-left end-0';
            break;
    }

    switch ($width) {
        case '48':
            $width = 'w-48';
            break;
    }

    $classes = 'inline-flex items-center px-1 pt-1 border-1 border-transparent text-lg font-medium   leading-5 text-nw-blue-600 hover:bg-nw-blue-900 hover:text-nw-blue-50  transition duration-150 ease-in-out';
?>

<div class="relative inline-flex items-center px-1 pt-1 border-1 border-transparent text-lg font-medium   leading-5 text-nw-blue-600 hover:bg-nw-blue-900 hover:text-nw-blue-50  transition duration-150 ease-in-out " x-data="{ open: false }" @click.away="open = false" @close.stop="open = false">
    <div @click="open = ! open">
            <?php echo e($trigger); ?>

    </div>

    <div class="<?php echo e($width); ?> <?php echo e($alignmentClasses); ?> <?php echo e($dropdownClasses); ?> absolute -bottom-14 right-0 h-16 z-50 mt-2 rounded-md shadow-lg"
        style="display: none;" x-show="open" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95" @click="open = false">
        <div class="<?php echo e($contentClasses); ?> border-2 border-nw-blue-700 ring-1 ring-nw-blue-900 ring-opacity-5">
            <?php echo e($content); ?>

        </div>
    </div>
</div>
<?php /**PATH D:\LaravelNWFP\NWFP2024-001\resources\views/components/dropdown2.blade.php ENDPATH**/ ?>
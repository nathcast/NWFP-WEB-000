@props(['align' => 'right', 'width' => '48', 'contentClasses' => 'py-1 bg-white', 'dropdownClasses' => ''])

@php
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
@endphp

<div class="relative inline-flex items-center px-1 pt-1 border-1 border-transparent text-lg font-medium   leading-5 text-nw-blue-600 hover:bg-nw-blue-900 hover:text-nw-blue-50  transition duration-150 ease-in-out " x-data="{ open: false }" @click.away="open = false" @close.stop="open = false">
    <div @click="open = ! open">
            {{ $trigger }}
    </div>

    <div class="{{ $width }} {{ $alignmentClasses }} {{ $dropdownClasses }} absolute -bottom-14 right-0 h-16 z-50 mt-2 rounded-md shadow-lg"
        style="display: none;" x-show="open" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95" @click="open = false">
        <div class="{{ $contentClasses }} border-2 border-nw-blue-700 ring-1 ring-nw-blue-900 ring-opacity-5">
            {{ $content }}
        </div>
    </div>
</div>

<x-guest-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Farm Platform Map') }}
            </h2>
            <x-share-on-x></x-share-on-x>
        </div>
    </x-slot>
    <div>
        <p class="px-3 pt-2">
            <a class="inline-flex items-center rounded-md border border-transparent bg-nw-blue-700 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-lime-500 hover:text-nw-blue-900 focus:bg-lime-700 focus:outline-none focus:ring-2 focus:ring-lime-700 focus:ring-offset-2 active:bg-lime-500 disabled:opacity-50"
                href="http://www.arcgisonline.com/home/webmap/viewer.html?webmap=9702eb980cfd454083a488e86cc42359&amp;extent=-3.9229,50.7608,-3.8791,50.7781" />
            Larger Map
            </a>
        </p>
        <div class="flex">
            <div class="flex-1">
                <iframe class="p-3"
                    src="http://www.arcgisonline.com/home/webmap/templates/OnePane/basicviewer/embed.html?webmap=9702eb980cfd454083a488e86cc42359&amp;extent=-3.9229,50.7608,-3.8791,50.7781&amp;displayslider=true&amp;displayscalebar=true&amp;displaydetails=true&amp;&#10;displaybasemaps=true"
                    frameborder="0" height="700" width="900" marginheight="0" marginwidth="0" scrolling="no">
                </iframe>
            </div>
            <div class="flex-1 p-3">
                The Farm Platform provides 4 farming systems comprising of 3 farmlets and one indoor beef finishing
                system. Each farmlet consists of five component catchments comprising approx. 21 ha in total per
                farmlet. 2 farmlets (Green and Blue) explore pasture based ruminant production systems, 1 farmlet (Red)
                allows the investigation of production of crops for the human food chain. The indoor beef finishing unit
                represents typical business as usual commercial beef production.
                <ul class="mt-5">
                    <li class="mt-4 h-12 content-center"><span
                            class="m-2 h-8 w-8 rounded-full bg-red-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">

                        </span>Arable</li>
                    <li class="mt-4 h-12 content-center"><span
                            class="m-2 h-8 w-8 rounded-full bg-lime-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">

                        </span>Permanent Pasture</li>
                    <li class="mt-4 h-12 content-center"><span
                            class="m-2 h-8 w-8 rounded-full bg-blue-400 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">

                        </span>Grass Clover Mixture</li>

                </ul>
            </div>
        </div>
    </div>

</x-guest-layout>

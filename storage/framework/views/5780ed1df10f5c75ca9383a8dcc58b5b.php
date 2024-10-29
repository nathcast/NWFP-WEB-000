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
            <?php echo e(__('Experiments')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

                <h3 class="m-0 border border-green-950 bg-slate-400 p-5 w-auto text-xl text-pretty">Research Case Studies (One Page Flyer)​</h3>
                <p class="ml-6 p-3">​</p>
                <h3 class="m-3 border rounded border-green-950 bg-slate-300 p-5 w-auto text-xl text-pretty">Greenhouse Gases</h3>
                <ul
                    style="font-family: Helvetica, Arial, sans-serif, museo-sans; font-size: 13px; font-style: normal; font-weight: 300; font-variant-ligatures: normal; font-variant-caps: normal;">
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%2014%20LC%20Measurement%20of%20greenhouse%20gases.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 14: Measurements of greenhouse gases on the NWFP</a></li>
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%2016%20PH%20ALC%20Spatial%20relationships%20of%20soil%20factors%20to%20GHGs.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 16: Spatial relationships of soil factors to GHGs at field scale</a></li>
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%2017%20NL%20Developing%20an%20Eddy%20Covariance%20system.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 17: Developing an Eddy Covariance system</a></li>
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%2018%20CH%20Comparing%20GHG%20emissions.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 18: Comparing greenhouse gas emissions from intensively managed grasslands and
                            newly created species-rich grassland</a></li>
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%2020%20Gradients%20down%20a%20slope.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 20: Potential gradient in soil functions on the NWFP</a></li>
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%2022%20Nitrous%20Oxide%20and%20Life%20Cycle%20Analysis.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 22: Measuring nitrous oxide emissions for life cycle assessment of pasture-based
                            beef production systems</a></li>
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%2032%20NL%20Relating%20soil%20properties%20to%20GHG%20emissions%20from%20grassland.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 32: Relating soil properties to GHG emissions from grassland</a></li>
                </ul>
                <h3 class="m-3 border rounded border-green-950 bg-slate-300 p-5 w-auto text-xl text-pretty">Livestock Health and Performance</h3>
                <ul
                    style="font-family: Helvetica, Arial, sans-serif, museo-sans; font-size: 13px; font-style: normal; font-weight: 300; font-variant-ligatures: normal; font-variant-caps: normal;">
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%2038%20KC%20Aerobic%20spoilage%20of%20silage.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 38: Aerobic spoilage of silage</a></li>
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%2010%20GM%20LCA%20Beef.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                            <font color="#0066cc">Research case study 10: Life cycle analysis of pasture based beef
                                production system</font>
                        </a></li>
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%2021%20ML%20Bovine%20Respiratory%20Disease.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 21: Bacterial colonisation dynamics and development of the bovine respiratory
                            microbiome</a></li>
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%2026%20JD%20AMR.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 26: Does antimicrobial resistance (AMR) selection in cattle differ between
                            grazing systems common to the UK?</a></li>
                </ul>
                <h3 class="m-3 border rounded border-green-950 bg-slate-300 p-5 w-auto text-xl text-pretty">Meteorology</h3>
                <ul
                    style="font-family: Helvetica, Arial, sans-serif, museo-sans; font-size: 13px; font-style: normal; font-weight: 300; font-variant-ligatures: normal; font-variant-caps: normal;">
                    <li><a  class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%203%20AS%20WA%20Met.pdf"
                            style="font: inherit; margin: 0px; padding: 0px; outline: 0px; border: 0px currentColor; border-image: none; color: rgb(0, 98, 160); vertical-align: baseline; font-size-adjust: inherit; font-stretch: inherit;"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 3: Long term climate records at the North Wyke Site</a></li>
                </ul>
                <h3 style="letter-spacing: normal; font-variant-ligatures: normal; font-variant-caps: normal;">Modelling
                </h3>
                <ul
                    style="font-family: Helvetica, Arial, sans-serif, museo-sans; font-size: 13px; font-style: normal; font-weight: 300; font-variant-ligatures: normal; font-variant-caps: normal;">
                    <li style="letter-spacing: normal; font-variant-ligatures: normal; font-variant-caps: normal;"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%201%20LW%20SPACSYS.pdf"
                            style="font: inherit; margin: 0px; padding: 0px; outline: 0px; border: 0px currentColor; border-image: none; color: rgb(0, 98, 160); vertical-align: baseline; font-size-adjust: inherit; font-stretch: inherit;"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 1: Testing the SPACSYS process-based model</a></li>
                </ul>
                <h3 class="m-3 border rounded border-green-950 bg-slate-300 p-5 w-auto text-xl text-pretty">Pests and Diseases</h3>
                <ul
                    style="font-family: Helvetica, Arial, sans-serif, museo-sans; font-size: 13px; font-style: normal; font-weight: 300; font-variant-ligatures: normal; font-variant-caps: normal;">
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%204%20PJM%20Clover%20Pests.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 4: Impact of grassland management on pests and diseases of white clover</a></li>
                </ul>
                <h3 class="m-3 border rounded border-green-950 bg-slate-300 p-5 w-auto text-xl text-pretty">Plants</h3>
                <ul
                    style="font-family: Helvetica, Arial, sans-serif, museo-sans; font-size: 13px; font-style: normal; font-weight: 300; font-variant-ligatures: normal; font-variant-caps: normal;">
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%209%20PJM%20Sureroot.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 9: SUREROOT: Roots for the future a systematic approach to root design</a></li>
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%2024%20PH_Plant%20Species%20Distribution.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 24: Visualization of the spatial distribution of pasture species</a></li>
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%2029%20KLC%20Identification%20of%20fungal%20endophyte.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 29: Identification of fungal ‘endophyte’ populations present in plants on the
                            North Wyke farm platform</a></li>
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%2035%20HB_How%20do%20Deep%20Rooting%20Grasses%20affect%20Soil%20Micronutrients%201.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 35:<strong> </strong>How do Deep Rooting Grasses affect Soil Micronutrients 1</a>
                    </li>
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%2036%20HB_How%20do%20Deep%20Rooting%20Grasses%20affect%20Soil%20Micronutrients%202.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 36:<strong> </strong>How do Deep Rooting Grasses affect Soil Micronutrients 2</a>
                    </li>
                </ul>
                <h3 class="m-3 border rounded border-green-950 bg-slate-300 p-5 w-auto text-xl text-pretty">Remote Sensing​</h3>
                <ul
                    style="font-family: Helvetica, Arial, sans-serif, museo-sans; font-size: 13px; font-style: normal; font-weight: 300; font-variant-ligatures: normal; font-variant-caps: normal;">
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%202%20AS%20RemoteSensing.pdf"
                            style="font: inherit; margin: 0px; padding: 0px; outline: 0px; border: 0px currentColor; border-image: none; color: rgb(0, 98, 160); vertical-align: baseline; font-size-adjust: inherit; font-stretch: inherit;"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 2: The potential of remote sensing</a></li>
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%2019%20PH%20Radar%20project.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 19: The potential for radar and optical satellite data to predict grass growth
                            and mass</a></li>
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%2033%20NF-AC-LC%20Drone%20aerial%20photography%26mapping%20of%20the%20farm%20platform.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 33: Drone aerial photography/mapping of the farm platform</a></li>
                </ul>
                <h3 class="m-3 border rounded border-green-950 bg-slate-300 p-5 w-auto text-xl text-pretty">Soil Biology</h3>
                <ul
                    style="font-family: Helvetica, Arial, sans-serif, museo-sans; font-size: 13px; font-style: normal; font-weight: 300; font-variant-ligatures: normal; font-variant-caps: normal;">
                    <li
                        style="font: inherit; margin: 0px 0px 10px 2em; padding: 0px; outline: 0px; border: 0px currentColor; border-image: none; vertical-align: baseline; font-size-adjust: inherit; font-stretch: inherit;">
                        <a  class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%205%20PJM%20Soil%20inverts%20and%20reseeding.pdf"
                            style="font: inherit; margin: 0px; padding: 0px; outline: 0px; border: 0px currentColor; border-image: none; color: rgb(0, 98, 160); vertical-align: baseline; font-size-adjust: inherit; font-stretch: inherit;"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 5: <font
                                style="font: inherit; margin: 0px; padding: 0px; outline: 0px; border: 0px currentColor; border-image: none; vertical-align: baseline; font-size-adjust: inherit; font-stretch: inherit;">
                                Impact of grassland reseeding on diversity and abundance of soil arthropods</font></a>
                    </li>
                    <li
                        style="font: inherit; margin: 0px 0px 10px 2em; padding: 0px; outline: 0px; border: 0px currentColor; border-image: none; vertical-align: baseline; font-size-adjust: inherit; font-stretch: inherit;">
                        <a  class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%206%20PJM%20Soil%20inverts%20distribution.pdf"
                            style="font: inherit; margin: 0px; padding: 0px; outline: 0px; border: 0px currentColor; border-image: none; color: rgb(0, 98, 160); vertical-align: baseline; font-size-adjust: inherit; font-stretch: inherit;"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                            <font
                                style="font: inherit; margin: 0px; padding: 0px; outline: 0px; border: 0px currentColor; border-image: none; vertical-align: baseline; font-size-adjust: inherit; font-stretch: inherit;">
                                Research case study 6: The distribution of soil insects across three spatial scales in
                                agricultural grassland</font>
                        </a></li>
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%2023%20JD%20Earthworm%20Biomass%20%26%20Soil%20Structure.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 23:The Relationship Between Earthworm Biomass and Soil Structure on the NWFP</a>
                    </li>
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%2028%20MP%20Seasonal%20dynamics%20of%20Sitona%20Obsoletus.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 28: Seasonal dynamics of Sitona obsoletus in the UK and the potential impacts of
                            rising surface temperatures on the life cycle</a></li>
                </ul>
                <h3 class="m-3 border rounded border-green-950 bg-slate-300 p-5 w-auto text-xl text-pretty">Soil Nutrients</h3>
                <ul
                    style="font-family: Helvetica, Arial, sans-serif, museo-sans; font-size: 13px; font-style: normal; font-weight: 300; font-variant-ligatures: normal; font-variant-caps: normal;">
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%2039%20JR%20Soil%20Organic%20Carbon%20-%20a%20single%20proxy%20measure.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 39: Soil Organic Carbon - A single proxy measure of sustainability for pastoral
                            systems?</a></li>
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%208%20CH_Soil%20Indicators.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 8: Soil health indicators for sustainable livestock production</a></li>
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%2011%20SG%20Phosphate%20stable%20oxygen%20isotope%20variability.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 11: Phosphate stable oxygen isotope variability within a grassland soil</a></li>
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%2013%20PH%20Spatial%20variation%20of%20Olsen-P.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 13: Spatial variation of Olsen-P</a></li>
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%2015%20ML%20Soil%20Selenium%20Profiles.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 15: Soil Selenium profiles across the farm platform and correlating with forage
                            content</a></li>
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%2025%20JD%20Carbon%20Footprint%20of%20Beef.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 25: The carbon footprint of beef: soil organic carbon</a></li>
                </ul>
                <h3 class="m-3 border rounded border-green-950 bg-slate-300 p-5 w-auto text-xl text-pretty">Soil Physics</h3>
                <ul
                    style="font-family: Helvetica, Arial, sans-serif, museo-sans; font-size: 13px; font-style: normal; font-weight: 300; font-variant-ligatures: normal; font-variant-caps: normal;">
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%207%20TK%20Soil%20moisture%20spatial%20variability.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 7: Investigation of soil moisture spatial variability given limited sampling
                            resources</a></li>
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%2031%20JD%20Portable%20Gamma%20Spectrometry.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 31: North Wyke Farm Platform – Portable Gamma Spectrometry Pilot Study</a></li>
                </ul>
                <h3 class="m-3 border rounded border-green-950 bg-slate-300 p-5 w-auto text-xl text-pretty">Water Quality</h3>
                <ul
                    style="font-family: Helvetica, Arial, sans-serif, museo-sans; font-size: 13px; font-style: normal; font-weight: 300; font-variant-ligatures: normal; font-variant-caps: normal;">
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%2012%20AC%20Transfers%20of%20dissolved%20organic%20nitrogen.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 12: Transfers of dissolved organic nitrogen under different grassland management
                            systems</a></li>
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%2027%20CJH%20Investigating%20the%20transfer%20of%20E.%20coli.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 27: Investigating the transfer of E. coli through agricultural systems</a></li>
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%2030%20SG%20Phosphorus%20losses%20from%20soil%20to%20water%20%E2%80%93%20an%20isotopic%20assessment.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 30: Phosphorus losses from soil to water – an isotopic assessment</a></li>
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Research%20case%20study%2034%20ALC_AF_Evaluating%20storm%20period%20in%20situ%20high%20resolution%20phosphorus%20data.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 34: Evaluating storm period in situ high resolution phosphorus data from the
                            North Wyke Farm Platform</a></li>
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20research%20case%20study%2037%20SG%20The%20stable%20oxygen%20isotope%20ratio%20of%20resin%20extractable%20phosphate%20derived%20from%20fresh%20cattle%20faeces.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Research
                            case study 37: The stable oxygen isotope ratio of resin extractable phosphate derived from
                            fresh cattle faeces</a></li>
                </ul>


                <h3 class="m-0 border border-green-950 bg-slate-400 p-5 w-auto text-xl text-pretty">Technical Case Studies (One Page Flyer)</h3>
                <ul
                    style="font-family: Helvetica, Arial, sans-serif, museo-sans; font-size: 13px; font-style: normal; font-weight: 300; font-variant-ligatures: normal; font-variant-caps: normal;">
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/FP%20Technical%20case%20study%201%20HS%20Fenced%20Field%20Polygons.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Technical
                            case study 1: Creation of fenced field polygons using GPS and a GIS</a></li>
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/FP%20Technical%20case%20study%202%20HS%20Field%20Spreading%20Areas.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Technical
                            case study 2: Field spreading area calculations</a></li>
                    <li class="ml-6 p-3"><a
                             class="text-blue-700 hover:text-yellow-700" href="/sites/default/files/groups/North_Wyke_Farm_Platform_National_Capability/DataPortal/FP%20Technical%20case%20study%203%20NL%20Measuring%20Greenhouse%20Gas%20%28GHG%29%20Emissions%20on%20the%20NW%20Farm%20Platform.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Technical
                            case study 3: Measuring Greenhouse Gas (GHG) Emissions on the NW Farm Platform</a></li>
                </ul>
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
<?php /**PATH D:\LaravelNWFP\NWFP2024-001\resources\views/content/experiments.blade.php ENDPATH**/ ?>
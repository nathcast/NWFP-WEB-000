<div class="bg-lime-900 text-slate-100">
                    <div class="py-16 text-center text-sm bg-lime-900 text-slate-100">
                        <?php if(Route::has('login')): ?>
                        <nav class="-mx-3 flex flex-1 justify-end">
                            <?php if(auth()->guard()->check()): ?>
                                <a
                                    href="<?php echo e(url('/dashboard')); ?>"
                                    class="rounded-md px-3 py-2 text-slate-100 ring-1 ring-transparent transition hover:text-lime-300/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                >
                                    Dashboard
                                </a>
                                <a
                                href="<?php echo e(url('/admin')); ?>"
                                class="rounded-md px-3 py-2 text-slate-100 ring-1 ring-transparent transition hover:text-lime-300/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                            >
                                Admin Panel
                            </a>
                            <?php else: ?>
                                <a
                                    href="<?php echo e(route('login')); ?>"
                                    class="rounded-md px-3 py-2 text-slate-100 ring-1 ring-transparent transition hover:text-lime-300/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                >
                                    Log in
                                </a>
                                <a
                                    href="<?php echo e(url('/admin')); ?>"
                                    class="rounded-md px-3 py-2 text-slate-100 ring-1 ring-transparent transition hover:text-lime-300/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                >
                                    Admin Panel
                                </a>
                                <?php if(Route::has('register')): ?>
                                    <a
                                        href="<?php echo e(route('register')); ?>"
                                        class="rounded-md px-3 py-2 text-slate-100 ring-1 ring-transparent transition hover:text-lime-300/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
                                        Register
                                    </a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </nav>
                    <?php endif; ?>
                    </div>
</div>
<?php /**PATH D:\LaravelNWFP\NWFP2024-001\resources\views/footer.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title' , __('Lead Details')); ?>

<?php $__env->startSection('toolbar'); ?>
    <?php
        $breadcrumbItems = [
            ['label' => 'Dashboard', 'url' => route('admin.dashboard.index')],
            ['label' => 'Leads', 'url' => route('admin.leads.index')],
            ['label' => 'Lead Details'],
        ];
    ?>
    <?php if (isset($component)) { $__componentOriginaldbbc880c47f621cda59b70d6eb356b2f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldbbc880c47f621cda59b70d6eb356b2f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.breadcrumb','data' => ['pageTitle' => __('Lead Details'),'breadcrumbItems' => $breadcrumbItems]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['pageTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Lead Details')),'breadcrumbItems' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($breadcrumbItems)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldbbc880c47f621cda59b70d6eb356b2f)): ?>
<?php $attributes = $__attributesOriginaldbbc880c47f621cda59b70d6eb356b2f; ?>
<?php unset($__attributesOriginaldbbc880c47f621cda59b70d6eb356b2f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldbbc880c47f621cda59b70d6eb356b2f)): ?>
<?php $component = $__componentOriginaldbbc880c47f621cda59b70d6eb356b2f; ?>
<?php unset($__componentOriginaldbbc880c47f621cda59b70d6eb356b2f); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php if (isset($component)) { $__componentOriginal91fdd17964e43374ae18c674f95cdaa3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal91fdd17964e43374ae18c674f95cdaa3 = $attributes; } ?>
<?php $component = App\View\Components\AdminLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AdminLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="card">
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-md-6">
                    <strong><?php echo e(__('Name')); ?>:</strong>
                    <p><?php echo e($lead->name ?? __('N/A')); ?></p>
                </div>
                <div class="col-md-6">
                    <strong><?php echo e(__('Email')); ?>:</strong>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($lead->email): ?>
                        <p><a href="mailto:<?php echo e($lead->email); ?>" target="_blank"><?php echo e($lead->email); ?></a></p>
                    <?php else: ?>
                        <p><?php echo e(__('N/A')); ?></p>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
                <div class="col-md-6">
                    <strong><?php echo e(__('Company Name')); ?>:</strong>
                    <p><?php echo e($lead->company_name ?? __('N/A')); ?></p>
                </div>
                <div class="col-md-6">
                    <strong><?php echo e(__('Project Budget')); ?>:</strong>
                    <p><?php echo e($lead->project_budget ?? __('N/A')); ?></p>
                </div>
                <div class="col-md-6">
                    <strong><?php echo e(__('Service Interest')); ?>:</strong>
                    <p>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($lead->service): ?>
                            <?php echo e($lead->service->getTranslation('title', app()->getLocale())); ?>

                        <?php else: ?>
                            <?php echo e($lead->service_interest ?? __('N/A')); ?>

                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </p>
                </div>
                <div class="col-md-6">
                    <strong><?php echo e(__('Status')); ?>:</strong>
                    <p>
                        <span class="badge badge-light-<?php echo e($lead->blocked ? 'danger' : 'success'); ?>">
                            <?php echo e($lead->blocked ? __('Blocked') : __('Active')); ?>

                        </span>
                    </p>
                </div>
                <div class="col-md-6">
                    <strong><?php echo e(__('Ip Address')); ?>:</strong>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($lead->ip_address): ?>
                        <p><a href="https://whatismyipaddress.com/ip/<?php echo e($lead->ip_address); ?>" target="_blank"><?php echo e($lead->ip_address); ?></a></p>
                    <?php else: ?>
                        <p><?php echo e(__('N/A')); ?></p>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
                <div class="col-md-6">
                    <strong><?php echo e(__('Created At')); ?>:</strong>
                    <p><?php echo e($lead->created_at ? $lead->created_at->format('Y-m-d H:i:s') : __('N/A')); ?></p>
                </div>
            </div>

            <div class="mb-4">
                <strong><?php echo e(__('Problem Statement')); ?>:</strong>
                <div class="bg-light p-3 rounded">
                    <?php echo e($lead->problem_statement ?? __('N/A')); ?>

                </div>
            </div>

            <div class="mb-4">
                <strong><?php echo e(__('Chat Transcript')); ?>:</strong>
                <div class="bg-light p-3 rounded" style="max-height: 320px; overflow-y: auto;">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($lead->chat_transcript)): ?>
                        <ul class="list-unstyled mb-0">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $lead->chat_transcript; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="mb-2">
                                    <span class="badge badge-light-primary"><?php echo e(strtoupper($message['role'] ?? 'BOT')); ?></span>
                                    <span class="ms-2"><?php echo e($message['message'] ?? ''); ?></span>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </ul>
                    <?php else: ?>
                        <?php echo e(__('N/A')); ?>

                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            </div>

            <div class="d-flex gap-2">
                <a href="<?php echo e(route('admin.leads.index')); ?>" class="btn btn-light">
                    <?php echo e(__('Back')); ?>

                </a>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($lead->blocked): ?>
                    <form method="POST" action="<?php echo e(route('admin.leads.unblock', $lead)); ?>">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-light-warning">
                            <i class="bi bi-unlock"></i> <?php echo e(__('Unblock Lead')); ?>

                        </button>
                    </form>
                <?php else: ?>
                    <form method="POST" action="<?php echo e(route('admin.leads.block', $lead)); ?>">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-danger">
                            <i class="bi bi-lock"></i> <?php echo e(__('Block Lead')); ?>

                        </button>
                    </form>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <form method="POST" action="<?php echo e(route('admin.leads.destroy', $lead)); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <button type="submit" class="btn btn-light-danger">
                        <i class="bi bi-trash"></i> <?php echo e(__('Delete')); ?>

                    </button>
                </form>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal91fdd17964e43374ae18c674f95cdaa3)): ?>
<?php $attributes = $__attributesOriginal91fdd17964e43374ae18c674f95cdaa3; ?>
<?php unset($__attributesOriginal91fdd17964e43374ae18c674f95cdaa3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal91fdd17964e43374ae18c674f95cdaa3)): ?>
<?php $component = $__componentOriginal91fdd17964e43374ae18c674f95cdaa3; ?>
<?php unset($__componentOriginal91fdd17964e43374ae18c674f95cdaa3); ?>
<?php endif; ?>
<?php /**PATH D:\websites\symfonix\Modules/Support\resources/views/admin/lead/show.blade.php ENDPATH**/ ?>
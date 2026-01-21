<?php $__env->startSection('title' , __('Leads')); ?>

<?php $__env->startSection('toolbar'); ?>
    <?php
        $breadcrumbItems = [
            ['label' => 'Dashboard', 'url' => route('admin.dashboard.index')],
            ['label' => 'Leads'],
        ];
    ?>
    <?php if (isset($component)) { $__componentOriginaldbbc880c47f621cda59b70d6eb356b2f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldbbc880c47f621cda59b70d6eb356b2f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.breadcrumb','data' => ['pageTitle' => __('Leads'),'breadcrumbItems' => $breadcrumbItems]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['pageTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Leads')),'breadcrumbItems' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($breadcrumbItems)]); ?>
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
    <?php if (isset($component)) { $__componentOriginal53cf72b3da4b8700c9115c02c0eead10 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53cf72b3da4b8700c9115c02c0eead10 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.table','data' => ['model' => $model,'search' => 'Search In Leads','formUrl' => route('admin.leads.deleteMulti')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['model' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($model),'search' => 'Search In Leads','formUrl' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.leads.deleteMulti'))]); ?>
        <thead>
        <tr class="text-start text-muted fw-bold fs-7 gs-0">
            <th class="w-10px pe-2" data-orderable="false">
                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                    <input class="form-check-input" type="checkbox" data-kt-check="true"
                           data-kt-check-target="#dataTable .form-check-input" value="1"/>
                </div>
            </th>
            <th><?php echo e(__('Details')); ?></th>
            <th><?php echo e(__('Service Interest')); ?></th>
            <th><?php echo e(__('Project Budget')); ?></th>
            <th><?php echo e(__('Ip Address')); ?></th>
            <th><?php echo e(__('Status')); ?></th>
            <th><?php echo e(__('Created At')); ?></th>
            <th></th>
        </tr>
        </thead>
        <tbody class="text-gray-600 fw-semibold">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $model; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lead): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" name="ids[]" value="<?php echo e($lead->id); ?>"/>
                    </div>
                </td>
                <td>
                    <div class="d-flex flex-column">
                        <span class="text-gray-800 mb-1">
                            <?php echo e($lead->name ?? __('N/A')); ?>

                        </span>
                        <span class="text-gray-500"><?php echo e($lead->company_name ?? __('N/A')); ?></span>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($lead->email): ?>
                            <a class="text-hover-primary text-gray-500" target="_blank"
                               href="mailto:<?php echo e($lead->email); ?>"><?php echo e($lead->email); ?></a>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                </td>
                <td>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($lead->service): ?>
                        <?php echo e($lead->service->getTranslation('title', app()->getLocale())); ?>

                    <?php else: ?>
                        <?php echo e($lead->service_interest ?? __('N/A')); ?>

                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </td>
                <td><?php echo e($lead->project_budget ?? __('N/A')); ?></td>
                <td>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($lead->ip_address): ?>
                        <a href="https://whatismyipaddress.com/ip/<?php echo e($lead->ip_address); ?>" target="_blank">
                            <?php echo e($lead->ip_address); ?>

                        </a>
                    <?php else: ?>
                        <?php echo e(__('N/A')); ?>

                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </td>
                <td>
                    <span class="badge badge-light-<?php echo e($lead->blocked ? 'danger' : 'success'); ?>">
                        <?php echo e($lead->blocked ? __('Blocked') : __('Active')); ?>

                    </span>
                </td>
                <td><?php echo e($lead->created_at); ?></td>
                <td>
                    <div class="d-flex align-items-center gap-2 flex-wrap">
                        <a href="<?php echo e(route('admin.leads.show', $lead)); ?>" class="btn btn-sm btn-light-primary">
                            <i class="bi bi-eye"></i> <?php echo e(__('View Details')); ?>

                        </a>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($lead->blocked): ?>
                            <form method="POST" action="<?php echo e(route('admin.leads.unblock', $lead)); ?>">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-sm btn-light-warning">
                                    <i class="bi bi-unlock"></i> <?php echo e(__('Unblock Lead')); ?>

                                </button>
                            </form>
                        <?php else: ?>
                            <form method="POST" action="<?php echo e(route('admin.leads.block', $lead)); ?>">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="bi bi-lock"></i> <?php echo e(__('Block Lead')); ?>

                                </button>
                            </form>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <form method="POST" action="<?php echo e(route('admin.leads.destroy', $lead)); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <button type="submit" class="btn btn-sm btn-light-danger">
                                <i class="bi bi-trash"></i> <?php echo e(__('Delete')); ?>

                            </button>
                        </form>
                    </div>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </tbody>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53cf72b3da4b8700c9115c02c0eead10)): ?>
<?php $attributes = $__attributesOriginal53cf72b3da4b8700c9115c02c0eead10; ?>
<?php unset($__attributesOriginal53cf72b3da4b8700c9115c02c0eead10); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53cf72b3da4b8700c9115c02c0eead10)): ?>
<?php $component = $__componentOriginal53cf72b3da4b8700c9115c02c0eead10; ?>
<?php unset($__componentOriginal53cf72b3da4b8700c9115c02c0eead10); ?>
<?php endif; ?>
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
<?php /**PATH D:\websites\symfonix\Modules/Support\resources/views/admin/lead/index.blade.php ENDPATH**/ ?>
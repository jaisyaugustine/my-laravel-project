<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>
    <h1>Welcome, <?php echo e($name); ?></h1>
    <?php if (isset($component)) { $__componentOriginal94cafefcfbb8f570ea4db79bd99d735b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal94cafefcfbb8f570ea4db79bd99d735b = $attributes; } ?>
<?php $component = App\View\Components\MessageBanner::resolve(['msg' => 'User signup'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('message-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\MessageBanner::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal94cafefcfbb8f570ea4db79bd99d735b)): ?>
<?php $attributes = $__attributesOriginal94cafefcfbb8f570ea4db79bd99d735b; ?>
<?php unset($__attributesOriginal94cafefcfbb8f570ea4db79bd99d735b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal94cafefcfbb8f570ea4db79bd99d735b)): ?>
<?php $component = $__componentOriginal94cafefcfbb8f570ea4db79bd99d735b; ?>
<?php unset($__componentOriginal94cafefcfbb8f570ea4db79bd99d735b); ?>
<?php endif; ?>
</body>
</html><?php /**PATH D:\laravel-project\blog\resources\views/about.blade.php ENDPATH**/ ?>
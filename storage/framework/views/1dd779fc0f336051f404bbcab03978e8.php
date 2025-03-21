<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Form</title>
</head>
<body>

<?php if(session('success')): ?>
    <p style="color: green;"><?php echo e(session('success')); ?></p>
<?php endif; ?>

<form action="<?php echo e(url('addUser')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo e(old('name')); ?>">
    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p style="color: red;"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>">
    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p style="color: red;"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <br>

    <button type="submit">Submit</button>
</form>

</body>
</html>
<?php /**PATH D:\laravel-project\blog\resources\views/user.blade.php ENDPATH**/ ?>
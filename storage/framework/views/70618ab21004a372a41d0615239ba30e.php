<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenHouse Management System</title>

    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        /* Custom styles go here */
        .navbar-dark.bg-custom {
            background-color: #001f3f; /* Adjust the color code as needed */
        }

        /* Adjust the overall form styling */
        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 20px;
        }

        /* Adjust individual input styles */
        .mb-6 input,
        .mb-6 textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-sizing: border-box;
        }

        /* Adjust the button style */
        .mb-6 button {
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .mb-6 button:hover {
            background-color: #0056b3;
        }
        body{
            background-image: url('background.jpg');
        }
    </style>
</head>
<body>

<!-- Navigation Bar with Full-Width Blue Background -->
<nav class="navbar navbar-expand-lg navbar-dark bg-custom">
    <div class="container-fluid">
        <span class="navbar-brand">OpenHouse Management System</span>
    </div>
</nav>
<!-- resources/views/auth/login.blade.php -->
<form method="POST" action="/users/authenticate" class="bg-light mt-6">
    <?php echo csrf_field(); ?>

    <div class="mb-6">
        <label for="email" class="inline-block text-lg mb-2"
            >Email</label
        >
        <input
            type="email"
            class="border border-gray-200 rounded p-2 w-full"
            name="email"
            value="<?php echo e(old('email')); ?>"
        />
        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="mb-6">
        <label
            for="password"
            class="inline-block text-lg mb-2"
        >
            Password
        </label>
        <input
            type="password"
            class="border border-gray-200 rounded p-2 w-full"
            name="password"
            value="<?php echo e(old('password')); ?>"
        />
        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="mb-6">
        <button
            type="submit"
            class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
        >
            Log in
        </button>
    </div>
<!-- Include Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH D:\eval-system\Openhouse_Management_Project\resources\views/login.blade.php ENDPATH**/ ?>
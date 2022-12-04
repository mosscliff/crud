<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/style/style.css')); ?>" />
    <title>Document</title>
</head>
<body class="text-center">
    <?php if(session('status-error')): ?>
        <div class="alert alert-warning">
            <?php echo e(session('status-error')); ?>

        </div>
    <?php endif; ?>
    <main class="form-signin w-100 m-auto">
        <form action="<?php echo e(url('login')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        </form>
        <p>Belum Punya Akun?</p>
        <a class="w-100 btn btn-lg btn-success" href="<?php echo e(url('registrasi')); ?>">Register</a>
        <a class="w-100 btn btn-lg btn-info mt-2" href="<?php echo e(url('/')); ?>">Back Home</a>
    </main>
</body>
</html>
<?php /**PATH C:\atil\resources\views/login.blade.php ENDPATH**/ ?>
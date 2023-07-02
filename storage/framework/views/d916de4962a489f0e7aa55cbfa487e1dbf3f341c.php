
<?php $__env->startSection('title'); ?>
<?php echo app('translator')->get('translation.Login'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

        <div class="auth-page">
            <div class="container-fluid p-0">
                <div class="row g-0 align-items-center">
                    <div class="col-xxl-4 col-lg-4 col-md-6">
                        <div class="row justify-content-center g-0">
                            <div class="col-xl-9">
                                <div class="p-4">
                                    <div class="card mb-0">
                                        <div class="card-body">
                                            <div class="auth-full-page-content rounded d-flex p-3 my-2">
                                                <div class="w-100">
                                                    <div class="d-flex flex-column h-100">
                                                        <div class="mb-4 mb-md-1">
                                                            <a href="<?php echo e(url('/')); ?>" class="d-block auth-logo">
                                                                <img src="<?php echo e(URL::asset('assets/images/logo.png')); ?>" alt="" height="100" class="auth-logo-dark me-start">
                                                                
                                                                <center><b style="font-size: 30px;"><?php echo e(env('APP_NAME')); ?></b></center>
                                                            </a>
                                                        </div>
                                                        <div class="auth-content my-auto">
                                                            <div class="text-center">
                                                                <p class="text-muted mt-2">Sign in to continue</p>
                                                            </div>
                                                            <form class="mt-4 pt-2" id="loginForm" action="<?php echo e(route('login')); ?>" method="POST">
                                                                <?php echo csrf_field(); ?>
                                                                <div class="form-floating form-floating-custom mb-4">
                                                                    <input type="text" class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('username')); ?>" id="input-username" placeholder="Enter User Name" name="username">
                                                                    <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong><?php echo e($message); ?></strong>
                                                                        </span>
                                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                    <label for="input-username">Username</label>
                                                                    <div class="form-floating-icon">
                                                                        <i data-eva="people-outline"></i>
                                                                    </div>
                                                                </div>

                                                                <div class="form-floating form-floating-custom mb-4 auth-pass-inputgroup">
                                                                    <input type="password" class="form-control pe-5 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" id="password-input" placeholder="Enter Password">
                                                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong><?php echo e($message); ?></strong>
                                                                        </span>
                                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                    <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-addon">
                                                                        <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                                                    </button>
                                                                    <label for="input-password">Password</label>
                                                                    <div class="form-floating-icon">
                                                                        <i data-feather="lock"></i>
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <button class="btn btn-danger w-100 waves-effect waves-light" type="button" onclick="formSubmit()">Log In</button>
                                                                </div>
                                                                <?php if(session('error')): ?>
                                                                    <div class="alert alert-danger">
                                                                        <?php echo e(session('error')); ?>

                                                                    </div>
                                                                <?php endif; ?>
                                                            </form>
                                                        </div>
                                                        <div class="mt-4 text-center">
                                                            <p class="mb-0"><b>© <script>document.write(new Date().getFullYear())</script> <?php echo e(env('APP_NAME')); ?> </b>. Crafted with <i class="mdi mdi-heart text-danger"></i><br>by <b><?php echo e(env('APP_AUTHOR')); ?></b></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end auth full page content -->
                    </div>
                    <!-- end col -->
                    <div class="col-xxl-8 col-lg-8 col-md-6">
                        <div class="auth-bg bg-white py-md-5 p-4 d-flex">
                            <div class="bg-overlay bg-white"></div>
                            <!-- end bubble effect -->
                            <div class="row justify-content-center align-items-center">
                                <div class="col-xl-8">
                                  
                                    <div class="p-0 p-sm-4 px-xl-0 py-5">
                                        <div id="reviewcarouselIndicators" class="carousel slide auth-carousel" data-bs-ride="carousel">
                                            <div class="carousel-indicators carousel-indicators-rounded">
                                                <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                
                                            </div>

                                            <!-- end carouselIndicators -->
                                            <div class="carousel-inner w-50 mx-auto">
                                                <div class="carousel-item active">
                                                    <div class="mt-4">
                                                        <img src="<?php echo e(URL::asset('./assets/images/loginbg.jpg')); ?>" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="testi-contain text-center">
                                                        <h5 class="font-size-20 mt-4">Welcome to our Customer Tracking System!</h5>
                                                        <p class="font-size-15 text-muted mt-3 mb-0">
                                                            Please log in to access your account and start managing your customer data.
                                                        </p>
                                                    </div>
                                                </div>

                                                

                                            </div>
                                            <!-- end carousel-inner -->
                                        </div>
                                        <!-- end review carousel -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container fluid -->
        </div>

        <?php $__env->stopSection(); ?>
        <?php $__env->startSection('script'); ?>
            <script src="<?php echo e(URL::asset('assets/js/pages/pass-addon.init.js')); ?>"></script>
            <script src="<?php echo e(URL::asset('assets/js/pages/eva-icon.init.js')); ?>"></script>
            <script>

                $('#input-username, #password-input').on('keypress', function(e) {
                    if (e.which == 13) { // 13 adalah kode tombol enter
                        formSubmit(); // Panggil fungsi formSubmit di sini
                    }
                });
                const formSubmit = async () => {

                    const username = $('#input-username').val();
                    const password = $('#password-input').val();

                    if(username == '' || password == '') {
                        Swal.fire(
                            {
                                title: 'Error!',
                                text: 'Please enter your login information.',
                                icon: 'error',
                                showCancelButton: false,
                                confirmButtonColor: '#3b76e1',
                            }
                        )
                    } else {

                        const formData = new FormData();

                        formData.append('username', username);
                        formData.append('password', password);

                        const response = await fetch('api/getlogin',{
                            method: 'POST',
                            body: formData
                        });
                        const data = await response.json();

                        if(data.code == 0) {

                            // $("#loginForm").submit();
                            Swal.fire(
                                {
                                    title: 'Error!',
                                    text: 'User Not Found.',
                                    icon: 'error',
                                    showCancelButton: false,
                                    confirmButtonColor: '#3b76e1',
                                }
                            )

                        } else if(data.code == 401) {

                            Swal.fire(
                                {
                                    title: 'Error!',
                                    text: 'Unauthorized access. Invalid password.',
                                    icon: 'error',
                                    showCancelButton: false,
                                    confirmButtonColor: '#3b76e1',
                                }
                            )
                            
                        } else if(data.code == 409) {

                            Swal.fire(
                                {
                                    title: 'Error!',
                                    html: 'Someone has accessed your account. <br> ( ip : '+data.ip+' )',
                                    icon: 'error',
                                    showCancelButton: false,
                                    confirmButtonColor: '#3b76e1',
                                }
                            )

                        } else if(data.code == 200) {
                            $("#loginForm").submit();
                        }
                    }

                }
            </script>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-without-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\odpcustomer\resources\views/auth/login.blade.php ENDPATH**/ ?>
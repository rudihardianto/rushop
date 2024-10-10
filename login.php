<?php
require_once __DIR__ . '/components/header.php';
?>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Login</h2>
                    <form>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember_me" name="remember_me">
                            <label class="form-check-label" for="remember_me">Ingat saya</label>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Login</button>
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-6">
                                    <a href="<?=baseUrl()?>" class="">
                                        Back to Homepage
                                    </a>
                                </div>
                                <div class="col-6 text-end">
                                    <span>
                                        Don't have an account?
                                        <a href="<?=baseUrl('/register')?>" class="">
                                            Sign up
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

require_once __DIR__ . '/components/footer.php';
?>
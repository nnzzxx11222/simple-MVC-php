<div class="container">
    <?php if (app()->session->hasFlash('success')) : ?>
        <p class="has-text-success">
            <?= app()->session->getFlash('success'); ?>
        </p>
    <?php endif; ?>

    <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title">Organic Fruits</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="index-2.html" class="permal-link">Home</a></li>
                <li class="nav-item"><span class="current-page">Authentication</span></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain login-page">

        <!-- Main content -->
        <div id="main-content" class="main-content">
            <div class="container">

                <div class="row">

                    <!--Form Sign In-->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="signin-container">
                            <form method="post" action="/signup" name="frm-login">
                                <p class="form-row">
                                    <label for="fid-name">username:<span class="requite">*</span></label>
                                    <input type="text" id="fid-name" name="username" value="<?= old('username'); ?>" class="txt-input">
                                </p>
                                <?php if (app()->session->hasFlash('errors')) : ?>
                                    <p class="has-text-danger">
                                        <?= app()->session->getFlash('errors')['username'][0]; ?>
                                    </p>
                                <?php endif; ?>
                                <p class="form-row">
                                    <label for="fid-name">name:<span class="requite">*</span></label>
                                    <input type="text" id="fid-name" name="name" value="<?= old('name'); ?>" class="txt-input">
                                </p>
                                <?php if (app()->session->hasFlash('errors')) : ?>
                                    <p class="has-text-danger">
                                        <?= app()->session->getFlash('errors')['name'][0]; ?>
                                    </p>
                                <?php endif; ?>
                                <p class="form-row">
                                    <label for="fid-pass">email:<span class="requite">*</span></label>
                                    <input type="email" id="fid-pass" name="email" value="<?= old('email'); ?>" class=" txt-input">
                                </p>
                                <?php if (app()->session->hasFlash('errors')) : ?>
                                    <p class="has-text-danger">
                                        <?= app()->session->getFlash('errors')['email'][0]; ?>
                                    </p>
                                <?php endif; ?>
                                <p class="form-row">
                                    <label for="fid-pass">Password:<span class="requite">*</span></label>
                                    <input type="password" id="fid-pass" name="password" value="<?= old('password'); ?>" class=" txt-input">
                                </p>
                                <?php if (app()->session->hasFlash('errors')) : ?>
                                    <p class="has-text-danger">
                                        <?= app()->session->getFlash('errors')['password'][0]; ?>
                                    </p>
                                <?php endif; ?>
                                <p class="form-row">
                                    <label for="fid-pass">re-Password:<span class="requite">*</span></label>
                                    <input type="password" id="fid-pass" name="password_confirmation" value="<?= old('re-password'); ?>" class=" txt-input">
                                </p>
                                <?php if (app()->session->hasFlash('errors')) : ?>
                                    <p class="has-text-danger">
                                        <?= app()->session->getFlash('errors')['re-password'][0]; ?>
                                    </p>
                                <?php endif; ?>
                                <p class="form-row wrap-btn">
                                    <button class="btn btn-submit btn-bold" name="submit"type="submit">sign up</button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div
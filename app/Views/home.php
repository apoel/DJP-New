<?php $request = \Config\Services::request(); ?>
<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><i class="<?= $icon; ?>"></i>&nbsp;&nbsp;<?= ucwords($title); ?></h3>
            <div class="card-tools">
                <a href="<?php echo base_url($request->uri->getSegment(1));?>" type="button" class="btn btn-tool"><i class="fas fa-sync"></i></a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="card-body">
            <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
            <header>
                <div class="heroe">
                    <span class="logo"><a href="https://codeigniter.com" target="_blank">
                        <img height="44" title="CodeIgniter Logo"></a>
                    </span>
                    <h1>Welcome to CodeIgniter <?= CodeIgniter\CodeIgniter::CI_VERSION ?></h1>
                    <p>The small framework with powerful features</p>
                </div>
            </header>
            <section>
                <h1>About this page</h1>
                <p>The page you are looking at is being generated dynamically by CodeIgniter.</p>
                <p>If you would like to edit this page you will find it located at:</p>
                <pre><code>app/Views/welcome_message.php</code></pre>
                <p>The corresponding controller for this page can be found at:</p>
                <pre><code>app/Controllers/Home.php</code></pre>
            </section>
            <div class="further">
                <section>
                    <h1>Go further</h1>
                    <h2>Learn</h2>
                    <p>The User Guide contains an introduction, tutorial, a number of "how to"
                            guides, and then reference documentation for the components that make up
                            the framework. Check the <a href="https://codeigniter4.github.io/userguide"
                            target="_blank">User Guide</a> !</p>
                    <h2>Discuss</h2>
                    <p>CodeIgniter is a community-developed open source project, with several
                             venues for the community members to gather and exchange ideas. View all
                             the threads on <a href="https://forum.codeigniter.com/"
                             target="_blank">CodeIgniter's forum</a>, or <a href="https://codeigniterchat.slack.com/"
                             target="_blank">chat on Slack</a> !</p>
                    <h2>Contribute</h2>
                    <p>CodeIgniter is a community driven project and accepts contributions of code and documentation from the community. Why not
                             <a href="https://codeigniter.com/en/contribute" target="_blank"> join us</a> ?</p>
                </section>
            </div>
            <!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
            <footer>
                <div class="environment">
                    <p>Page rendered in {elapsed_time} seconds</p>
                    <p>Environment: <?= ENVIRONMENT ?></p>
                </div>
                <div class="copyrights">
                    <p>&copy; <?= date('Y') ?> CodeIgniter Foundation. CodeIgniter is open source project released under the MIT open source licence.</p>
                </div>
            </footer>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</section>
<?= $this->endSection() ?>
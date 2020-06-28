<div class="welcome-getting-started">
    <div class="welcome-manual-setup">
        <h3><?php echo esc_html__('Manual Setup from Customizer Panel', 'total'); ?></h3>
        <div class="welcome-theme-thumb">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/set-front-page.gif'); ?>" alt="<?php echo esc_html__('Total Demo', 'total'); ?>">
        </div>

        <ol>
            <li><?php echo esc_html__('Go to Appearance > Customize', 'total'); ?></li>
            <li><?php echo esc_html__('Click on "Homepage Settings" and turn on the option for "Enable FrontPage" Setting', 'total'); ?> </li>
            <li><?php echo esc_html__('Now go back and click on "Front Page Sections" and set up the FrontPage Section', 'total'); ?> </li>
        </ol>
        <a class="button button-primary" href="<?php echo esc_url(admin_url('customize.php')); ?>"><?php echo esc_html__('Go to Customizer Panels', 'total'); ?></a>
    </div>

    <div class="welcome-demo-import">
        <h3><?php echo esc_html__('Demo Importer', 'total'); ?><a href="https://demo.hashthemes.com/<?php echo get_option('stylesheet'); ?>" target="_blank" class="button button-primary"><?php esc_html_e('View Demo', 'total'); ?></a></h3>
        <div class="welcome-theme-thumb">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/screenshot.png'); ?>" alt="<?php printf(esc_html__('%s Demo', 'total'), $this->theme_name); ?>">
        </div>

        <div class="welcome-demo-import-text">
            <p><?php esc_html_e('Or you can get started by importing the demo with just one click.', 'total'); ?></p>
            <p><?php echo sprintf(esc_html__('Click on the button below to install and activate the HashThemes Demo Importer plugin. For more detailed documentation on how the demo importer works, click %s.', 'total'), '<a href="https://hashthemes.com/documentation/total-documentation/#ImportDemoContent" target="_blank">' . esc_html__('here', 'total') . '</a>'); ?></p>
            <?php echo $this->generate_hdi_install_button(); ?>
        </div>
    </div>
</div>
<?php

/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

if (!$app->getRequest()->isXmlHttpRequest()):
    //load base template
    $view->extend('MauticUserBundle:Security:base.html.php');
    $view['slots']->set('header', $view['translator']->trans('mautic.user.auth.header'));
else:
    $view->extend('MauticUserBundle:Security:ajax.html.php');
endif;
?>


<?php
/*start here */?>
<style>
 .text-center,.text-white{text-align:center}html{height:auto}.connect-account{--tw-text-opacity:1;color:rgb(156 163 175/var(--tw-text-opacity));font-weight:300}.mt{margin-top:1.5rem}.panel{background-color:inherit;border:none;margin-bottom:0!important}.connect-button{border-radius:6px;background-color:#4f46e5!important}.main-bg,.main-flex{background-color:#f3f4f6}.text-white{--tw-text-opacity:1;color:rgb(255 255 255/var(--tw-text-opacity));font-size:12px;font-weight:500;padding-top:10px;padding-bottom:10px;display:block;--font-inter:'__Inter_ccafe3','__Inter_Fallback_ccafe3';--font-cal:'__calFont_156e7e','__calFont_Fallback_156e7e';font-family:var(--font-inter),ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"}.main-flex{display:flex;justify-content:center;flex-direction:column;min-height:80vh;margin-top:2.4%;margin-left:1.1%}div#connectAccount{font-size:16px;font-style:normal;font-weight:300}a.blue-button.text-white{color:#ffffff;background-color:#4338ca;border-radius:6px}.col-md-12.bg-color{background-color:#fff;border-radius:6px;padding-left:40.5px;padding-right:40.5px}.panel-body{padding:0!important}.row.margin-lr{margin-left:2%;margin-right:2%}.contact-container{padding-top:39px;padding-bottom:39px}.contact-container-main .col1{width:30.3%}.contact-container-main .col2{min-width:39.4%}

</style>
    <div class="row ">
        <div class='col-md-2'>

        </div>
        <div class='col-md-8'>
            <div style="max-width:280px;width:100%;height:100px;margin:0 auto">
             <img class="img-responsive"  src="<?php echo $view['assets']->getUrl('app/assets/images/logo.png', null, null, true); ?>" alt="Goengage logo"/>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="connect-account text-center mt-10 mb-10" id="connectAccount">
                Connect to your account
                
            </div>
        </div>
    </div>    
    <div class='mt-20 '></div>
    <div class="row margin-lr contact-container-main">
        <div class="col-md-4 col1"></div>
        <div class="col-md-4 col2">
            <div class="row">
                <div class='col-md-12 bg-color contact-container'> 
                                  
                    <div class="text-wrap connect-button"> 
                    <?php if (!empty($integrations)): ?>
                        <?php foreach ($integrations as $sso): ?>

                        <a href="<?php echo $view['router']->path('mautic_sso_login', ['integration' => $sso->getName()]); ?>" class="blue-button text-white ">Connect</a>
                        
                        <?php endforeach; ?>
                    <?php endif;?>
                    </div>
                
                </div>
            </div>
            
        </div>
    </div>    


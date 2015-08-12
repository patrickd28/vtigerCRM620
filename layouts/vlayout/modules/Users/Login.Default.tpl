{*<!--
/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
*
 ********************************************************************************/
-->*}
{strip}
    <!DOCTYPE html>
    <html>
    <head>
        <title>Gestion clients-fournisseurs</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- for Login page we are added -->
        <link href="libraries/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="libraries/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="libraries/bootstrap/css/jqueryBxslider.css" rel="stylesheet"/>
        <script src="libraries/jquery/jquery.min.js"></script>
        <script src="libraries/jquery/boxslider/jqueryBxslider.js"></script>
        <script src="libraries/jquery/boxslider/respond.min.js"></script>
        <script>
            jQuery(document).ready(function () {
                scrollx = jQuery(window).outerWidth();
                window.scrollTo(scrollx, 0);
                slider = jQuery('.bxslider').bxSlider({
                    auto: true,
                    pause: 4000,
                    randomStart: true,
                    autoHover: true
                });
                jQuery('.bx-prev, .bx-next, .bx-pager-item').live('click', function () {
                    slider.startAuto();
                });
            });
        </script>
    </head>
    <body>
    <div class="container login-container">
        <div class="row-fluid">
            <div class="span3">
                <div style="display:none" class="logo"><img src="layouts/vlayout/skins/images/logo.png">
                    <br/>
                    <a target="_blank"
                       href="http://{$COMPANY_DETAILSCOMPANY_DETAILS.website}">{$COMPANY_DETAILS.name}</a>
                </div>
            </div>
            <div class="span9">
                <div style="display: none" class="helpLinks">
                    <a href="https://www.vtiger.com">Vtiger Websites</a> |
                    <a href="https://wiki.vtiger.com/vtiger6/">Vtiger Wiki</a> |
                    <a href="https://www.vtiger.com/crm/videos/">Vtiger videos </a> |
                    <a href="https://discussions.vtiger.com/">Vtiger Forums</a>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div class="content-wrapper">
                    <div class="container">
                        <div class="row-fluid">

                            <div class="span6">
                                <div class="login-area">
                                    <div class="login-box" id="loginDiv">
                                        <div class="">
                                            <h3 class="login-header">Connexion </h3>
                                        </div>
                                        <form class="form-horizontal login-form" style="margin:0;"
                                              action="index.php?module=Users&action=Login" method="POST">
                                            {if isset($smarty.request.error)}
                                                <div class="alert alert-error">
                                                    <p>Invalid username or password.</p>
                                                </div>
                                            {/if}
                                            {if isset($smarty.request.fpError)}
                                                <div class="alert alert-error">
                                                    <p>Nom utilisateur ou courriel invalide.</p>
                                                </div>
                                            {/if}
                                            {if isset($smarty.request.status)}
                                                <div class="alert alert-success">
                                                    <p>Un courrile a été envoyé, s'il vous plait, regardez vos
                                                        courriel.</p>
                                                </div>
                                            {/if}
                                            {if isset($smarty.request.statusError)}
                                                <div class="alert alert-error">
                                                    <p>Le server de courriel sortant n'est pas configuré.</p>
                                                </div>
                                            {/if}
                                            <div class="control-group">
                                                <label class="control-label" for="username"><b>Utilisateur</b></label>

                                                <div class="controls">
                                                    <input type="text" id="username" name="username"
                                                           placeholder="Username">
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label" for="password"><b>Mot de passe</b></label>

                                                <div class="controls">
                                                    <input type="password" id="password" name="password"
                                                           placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="control-group signin-button">
                                                <div class="controls" id="forgotPassword">
                                                    <button type="submit" class="btn btn-primary sbutton">Connexion
                                                    </button>
                                                    &nbsp;&nbsp;&nbsp;<a>Mot de passe oublié ?</a>
                                                </div>
                                            </div>
                                            {* Retain this tracker to help us get usage details *}
                                        </form>
                                        <div class="login-subscript">
                                            <small> Gestion clients-fournisseurs version {$CURRENT_VERSION}</small>
                                        </div>
                                    </div>

                                    <div class="login-box hide" id="forgotPasswordDiv">
                                        <form class="form-horizontal login-form" style="margin:0;"
                                              action="forgotPassword.php" method="POST">
                                            <div class="">
                                                <h3 class="login-header">Mot de passe oublié</h3>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="user_name"><b>User name</b></label>

                                                <div class="controls">
                                                    <input type="text" id="user_name" name="user_name"
                                                           placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="email"><b>Courriel</b></label>

                                                <div class="controls">
                                                    <input type="text" id="emailId" name="emailId" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="control-group signin-button">
                                                <div class="controls" id="backButton">
                                                    <input type="submit" class="btn btn-primary sbutton" value="Submit"
                                                           name="retrievePassword">
                                                    &nbsp;&nbsp;&nbsp;<a>Retour</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                            <div class="span6">
                                <p><br><br><br></p>

                                <div class="carousal-container">
                                    <div><h2> Gestion des clients et fournisseurs</h2></div>
                                    <ul class="bxslider">
                                        <li>
                                            <div id="slide01" class="slide">
                                                <h3>Gestion facile des factures</h3>

                                                <p>Gérez vos clients et factures de facon efficace.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div id="slide02" class="slide">
                                                <h3>Gestion facile des fournisseurs</h3>

                                                <p>Gérez vos comptes fournisseurs et achats.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div id="slide03" class="slide">
                                                <h3>Soumissons</h3>

                                                <p>Soumissionnez et faites-en le suivi et récoltez les clients
                                                    aisément</p>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-fixed-bottom">
        <div class="navbar-inner">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span6 pull-left">
                        <div class="footer-content">
                            <small>&#169 2004-{date('Y')}&nbsp;
                                <a href="https://www.vtiger.com"> vtiger.com</a> |
                                <a href="https://www.vtiger.com/LICENSE.txt">Read License</a> |
                                <a href="https://www.vtiger.com/products/crm/privacy_policy.html">Privacy Policy</a>
                            </small>
                        </div>
                    </div>
                    <div class="span6 pull-right">
                        <div style="display: none" class="pull-right footer-icons">
                            <small>{vtranslate('LBL_CONNECT_WITH_US', $MODULE)}&nbsp;</small>
                            <a href="https://www.facebook.com/vtiger"><img
                                        src="layouts/vlayout/skins/images/facebook.png"></a>
                            &nbsp;<a href="https://twitter.com/vtigercrm"><img
                                        src="layouts/vlayout/skins/images/twitter.png"></a>
                            &nbsp;<a href="https://www.linkedin.com/company/vtiger-systems-india-pvt-ltd"><img
                                        src="layouts/vlayout/skins/images/linkedin.png"></a>
                            &nbsp;<a href="http://www.youtube.com/user/vtigercrm"><img
                                        src="layouts/vlayout/skins/images/youtube.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    <script>
        jQuery(document).ready(function () {
            jQuery("#forgotPassword a").click(function () {
                jQuery("#loginDiv").hide();
                jQuery("#forgotPasswordDiv").show();
            });

            jQuery("#backButton a").click(function () {
                jQuery("#loginDiv").show();
                jQuery("#forgotPasswordDiv").hide();
            });

            jQuery("input[name='retrievePassword']").click(function () {
                var username = jQuery('#user_name').val();
                var email = jQuery('#emailId').val();

                var email1 = email.replace(/^\s+/, '').replace(/\s+$/, '');
                var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/;
                var illegalChars = /[\(\)\<\>\,\;\:\\\"\[\]]/;

                if (username == '') {
                    alert('Please enter valid username');
                    return false;
                } else if (!emailFilter.test(email1) || email == '') {
                    alert('Please enater valid email address');
                    return false;
                } else if (email.match(illegalChars)) {
                    alert("The email address contains illegal characters.");
                    return false;
                } else {
                    return true;
                }

            });
        });
    </script>
    </html>
{/strip}

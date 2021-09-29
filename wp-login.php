<!DOCTYPE html>
<html lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Log In &lsaquo; Tagnull &#8212; WordPress</title>
<meta name='robots' content='noindex, follow' />
<script src="/cdn-cgi/apps/head/Adu4hG-_lj17Uem7_cpQfkz39KU.js"></script><link rel='dns-prefetch' href='//s.w.org' />
<link rel='dns-prefetch' href='//hcaptcha.com' />
<link rel='dns-prefetch' href='//i0.wp.com' />
<link rel='dns-prefetch' href='//i1.wp.com' />
<link rel='dns-prefetch' href='//i2.wp.com' />
<link rel='dns-prefetch' href='//c0.wp.com' />
<link rel='stylesheet' id='dashicons-css' href='https://c0.wp.com/c/5.8.1/wp-includes/css/dashicons.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='buttons-css' href='https://c0.wp.com/c/5.8.1/wp-includes/css/buttons.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='forms-css' href='https://c0.wp.com/c/5.8.1/wp-admin/css/forms.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='l10n-css' href='https://c0.wp.com/c/5.8.1/wp-admin/css/l10n.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='login-css' href='https://c0.wp.com/c/5.8.1/wp-admin/css/login.min.css' type='text/css' media='all' />
<style>
			@media (max-width: 349px) {
				.h-captcha {
					display: flex;
					justify-content: center;
				}
			}
			@media (min-width: 350px) {
				#login {
					width: 350px;
				}
			}
		</style>
<meta name='referrer' content='strict-origin-when-cross-origin' />
<meta name="viewport" content="width=device-width" />
<link rel="icon" href="https://i0.wp.com/tagnull.com/wp-content/uploads/2020/10/logo_tagnull@1x.png?fit=32%2C32&#038;ssl=1" sizes="32x32" />
<link rel="icon" href="https://i0.wp.com/tagnull.com/wp-content/uploads/2020/10/logo_tagnull@1x.png?fit=128%2C128&#038;ssl=1" sizes="192x192" />
<link rel="apple-touch-icon" href="https://i0.wp.com/tagnull.com/wp-content/uploads/2020/10/logo_tagnull@1x.png?fit=128%2C128&#038;ssl=1" />
<meta name="msapplication-TileImage" content="https://i0.wp.com/tagnull.com/wp-content/uploads/2020/10/logo_tagnull@1x.png?fit=128%2C128&#038;ssl=1" />
</head>
<body class="login no-js login-action-login wp-core-ui  locale-en-us">
<script type="text/javascript">
		document.body.className = document.body.className.replace('no-js','js');
	</script>
<div id="login">
<h1><a href="https://wordpress.org/">Powered by WordPress</a></h1>
<form name="loginform" id="loginform" action="https://tagnull.com/wp-login.php" method="post">
<p>
<label for="user_login">Username or Email Address</label>
<input type="text" name="log" id="user_login" class="input" value="" size="20" autocapitalize="off" />
</p>
<div class="user-pass-wrap">
<label for="user_pass">Password</label>
<div class="wp-pwd">
<input type="password" name="pwd" id="user_pass" class="input password-input" value="" size="20" />
<button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="Show password">
<span class="dashicons dashicons-visibility" aria-hidden="true"></span>
</button>
</div>
</div>
<div class="h-captcha" data-sitekey="d43b226b-ce48-4fe1-88e5-c71b27f33852" data-theme="light" data-size="normal" data-auto="false">
</div>
<input type="hidden" id="hcaptcha_login_nonce" name="hcaptcha_login_nonce" value="0518d35124" /><input type="hidden" name="_wp_http_referer" value="/wp-login.php" /> <p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever" /> <label for="rememberme">Remember Me</label></p>
<p class="submit">
<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Log In" />
<input type="hidden" name="redirect_to" value="https://tagnull.com/wp-admin/" />
<input type="hidden" name="testcookie" value="1" />
</p>
</form>
<p id="nav">
<a href="https://tagnull.com/wp-login.php?action=lostpassword">Lost your password?</a>
</p>
<script type="text/javascript">
			function wp_attempt_focus() {setTimeout( function() {try {d = document.getElementById( "user_login" );d.focus(); d.select();} catch( er ) {}}, 200);}
wp_attempt_focus();
if ( typeof wpOnload === 'function' ) { wpOnload() }		</script>
<p id="backtoblog">
<a href="https://tagnull.com/">&larr; Go to Tagnull</a> </p>
</div>
<style>
			.h-captcha:not([data-size="invisible"]) {
				margin-bottom: 2rem;
			}

			.elementor-field-type-hcaptcha .elementor-field {
				background: transparent !important;
			}

			.elementor-field-type-hcaptcha .h-captcha {
				margin-bottom: -9px;
			}
		</style>
<script type="text/javascript" async>
			( () => {
				'use strict';

				let loaded = false,
					scrolled = false,
					timerId;

				function load() {
					if ( loaded ) {
						return;
					}

					loaded = true;
					clearTimeout( timerId );

					window.removeEventListener( 'touchstart', load );
					document.removeEventListener( 'mouseenter', load );
					document.removeEventListener( 'click', load );
					window.removeEventListener( 'load', delayedLoad );

							const t = document.getElementsByTagName( 'script' )[0];
		const s = document.createElement('script');
		s.type  = 'text/javascript';
		s['src'] = 'https://js.hcaptcha.com/1/api.js?onload=hCaptchaOnLoad&render=explicit';
		s.async = true;
		t.parentNode.insertBefore( s, t );
						}

				function scrollHandler() {
					if ( ! scrolled ) {
						// Ignore first scroll event, which can be on page load.
						scrolled = true;
						return;
					}

					window.removeEventListener( 'scroll', scrollHandler );
					load();
				}

				function delayedLoad() {
					window.addEventListener( 'scroll', scrollHandler );
					const delay = -1;

					if ( delay >= 0 ) {
						setTimeout( load, delay );
					}
				}

				window.addEventListener( 'touchstart', load );
				document.addEventListener( 'mouseenter', load );
				document.addEventListener( 'click', load );
				window.addEventListener( 'load', delayedLoad );
			} )();
		</script>
<link rel='stylesheet' id='jetpack_css-css' href='https://tagnull.com/wp-content/plugins/jetpack/css/jetpack.css?ver=10.1' type='text/css' media='all' />
<script type='text/javascript' src='https://c0.wp.com/c/5.8.1/wp-includes/js/jquery/jquery.min.js' id='jquery-core-js'></script>
<script type='text/javascript' src='https://c0.wp.com/c/5.8.1/wp-includes/js/jquery/jquery-migrate.min.js' id='jquery-migrate-js'></script>
<script type='text/javascript' id='zxcvbn-async-js-extra'>
/* <![CDATA[ */
var _zxcvbnSettings = {"src":"https:\/\/tagnull.com\/wp-includes\/js\/zxcvbn.min.js"};
/* ]]> */
</script>
<script type='text/javascript' src='https://c0.wp.com/c/5.8.1/wp-includes/js/zxcvbn-async.min.js' id='zxcvbn-async-js'></script>
<script type='text/javascript' src='https://c0.wp.com/c/5.8.1/wp-includes/js/dist/vendor/regenerator-runtime.min.js' id='regenerator-runtime-js'></script>
<script type='text/javascript' src='https://c0.wp.com/c/5.8.1/wp-includes/js/dist/vendor/wp-polyfill.min.js' id='wp-polyfill-js'></script>
<script type='text/javascript' src='https://c0.wp.com/c/5.8.1/wp-includes/js/dist/hooks.min.js' id='wp-hooks-js'></script>
<script type='text/javascript' src='https://c0.wp.com/c/5.8.1/wp-includes/js/dist/i18n.min.js' id='wp-i18n-js'></script>
<script type='text/javascript' id='wp-i18n-js-after'>
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
</script>
<script type='text/javascript' id='password-strength-meter-js-extra'>
/* <![CDATA[ */
var pwsL10n = {"unknown":"Password strength unknown","short":"Very weak","bad":"Weak","good":"Medium","strong":"Strong","mismatch":"Mismatch"};
/* ]]> */
</script>
<script type='text/javascript' id='password-strength-meter-js-translations'>
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", { "locale_data": { "messages": { "": {} } } } );
</script>
<script type='text/javascript' src='https://c0.wp.com/c/5.8.1/wp-admin/js/password-strength-meter.min.js' id='password-strength-meter-js'></script>
<script type='text/javascript' src='https://c0.wp.com/c/5.8.1/wp-includes/js/underscore.min.js' id='underscore-js'></script>
<script type='text/javascript' id='wp-util-js-extra'>
/* <![CDATA[ */
var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
/* ]]> */
</script>
<script type='text/javascript' src='https://c0.wp.com/c/5.8.1/wp-includes/js/wp-util.min.js' id='wp-util-js'></script>
<script type='text/javascript' id='user-profile-js-extra'>
/* <![CDATA[ */
var userProfileL10n = {"user_id":"0","nonce":"2c4a3fda0a"};
/* ]]> */
</script>
<script type='text/javascript' id='user-profile-js-translations'>
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", { "locale_data": { "messages": { "": {} } } } );
</script>
<script type='text/javascript' src='https://c0.wp.com/c/5.8.1/wp-admin/js/user-profile.min.js' id='user-profile-js'></script>
<script type='text/javascript' src='https://tagnull.com/wp-content/plugins/hcaptcha-for-forms-and-more/assets/js/hcaptcha.js?ver=1.13.0' id='hcaptcha-js'></script>
<script type='text/javascript' src='https://tagnull.com/wp-content/plugins/hcaptcha-for-forms-and-more/assets/js/hcaptcha-cf7.js?ver=1.13.0' id='hcaptcha-cf7-js'></script>
<div class="clear"></div>
</body>
</html>

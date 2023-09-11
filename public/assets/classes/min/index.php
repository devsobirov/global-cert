.uf-content textarea, .uf-content input[type="text"], .uf-content input[type="password"], .uf-content input[type="datetime"], .uf-content input[type="datetime-local"], .uf-content input[type="date"], .uf-content input[type="month"], .uf-content input[type="time"], .uf-content input[type="week"], .uf-content input[type="number"], .uf-content input[type="email"], .uf-content input[type="url"], .uf-content input[type="search"], .uf-content input[type="tel"], .uf-content input[type="color"] {
    position: relative;
    border: 1px solid #eaeaea;
    height: 45px;
    width: 100%;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    -ms-box-shadow: none;
    -o-box-shadow: none;
    box-shadow: none;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    color: #9e9e9e;
}
.uf-content select {
    border: 1px solid #eaeaea;
    height: 45px;
    padding: 10px;
    line-height: 100%;
    outline: 0;
    width: 100%;
    background-image: url(/templates/xvttk/images/caret.png);
    background-position: 96% center;
    background-repeat: no-repeat;
    position: relative;
    text-indent: 0.01px;
    text-overflow: '';
    cursor: pointer;
    -webkit-appearance: none;
    -moz-appearance: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    -ms-box-shadow: none;
    color: #999;
    -o-box-shadow: none;
    box-shadow: none;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -ms-border-radius: 2px;
    -o-border-radius: 2px;
    border-radius: 2px;
}
.uf-content option {font-weight: 500 !important;}
	.uf-wrapper {
		margin: 0 auto;
		background: #fff;
		border-radius: 4px;
		box-shadow: 0 0 15px rgba(0,0,0,.8);
		width: 430px;
		position: relative;
	}
input.uf-input:focus, textarea.uf-input:focus {
    border-color: #fb4848;
}
	textarea.uf-input {
		height: auto;
		padding: 10px;
		line-height: 20px;
	}
	select.uf-input[multiple] {
		height: auto;
		-webkit-appearance: none;
	}
	.uf-input-error,
	.uf-input-error:focus {
		background: rgba(233, 82, 65, .1)!important;
		border-color: #e95241!important;
	}
.uf-btn {
    display: inline-block;
    color: #fff;
    margin-bottom: 0;
    font: norml 14px/40px Arial, sans-serif;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    background-image: none;
    background: #fdc716;
    border: 0;
    text-decoration: none;
    white-space: nowrap;
    padding: 10px 20px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-transition: all ease .3s;
    transition: all ease .3s;
    border: 2px solid #fdc716;
}
	.uf-btn:hover {
		background: #333;
		border: 2px solid #fdc716;
	}

.uf-header {
    background: #353535;
    color: #fff;
    padding: 15px 20px;
    font-size: 18px;
    font-weight: 600;
}
	.uf-wrapper-inline .uf-header {
		border-radius: 0;
	}
	.uf-content {
    padding: 20px;
    font-size: 15px;
}
	.uf-alert {
		padding: 10px 20px;
		font-weight: bold;
		font-size: 14px;
	}
	.uf-alert-success {
		background: #45d2b1;
		color: #fff;
	}
	.uf-alert-error {
		background: #e95241;
		color: #fff;
	}

	.uf-alert-info {
		background: #ffecb3;
		color: #424242;
		font-weight: normal;
	}

	.uf-alert ul {
		margin: 0 0 0 20px;
	}

	.uf-field {
		margin-bottom: 20px;
	}
	.uf-field:last-child {
		margin-bottom: 0;
	}

	.uf-field:before,
	.uf-field:after {
		content: " ";
		display: table;
	}
	.uf-field:after {
		clear: both;
	}

	.uf-label {
		float: left;
		width: 120px;
		text-align: right;
		padding-right: 10px;
		padding-top: 7px;
	}
	.uf-field-input {
		overflow: hidden;
	}

	.uf-error-text {
		color: #e95241;
	}

	.uf-inline-loading {
		height: 400px;
		background: ;		
	}
	.uf-inline-loading {
		margin: 40px auto;
		font-size: 10px;
		position: relative;
		text-indent: -9999em;
		border-top: 1.1em solid rgba(253, 199, 22, 0.3);
		border-right: 1.1em solid rgba(253, 199, 22, 0.3);
		border-bottom: 1.1em solid rgba(253, 199, 22, 0.3);
		border-left: 1.1em solid #fdc716;
		-webkit-transform: translateZ(0);
		transform: translateZ(0);
		-webkit-animation: ufLoading 1.1s infinite linear;
		animation: ufLoading 1.1s infinite linear;
	}
	.uf-inline-loading,
	.uf-inline-loading:after {
		border-radius: 50%;
		width: 10em;
		height: 10em;
	}
	@-webkit-keyframes ufLoading {
		0% {
			-webkit-transform: rotate(0deg);
		}
		100% {
			-webkit-transform: rotate(360deg);
		}
		}
		@keyframes ufLoading {
		0% {
			-webkit-transform: rotate(0deg);
		}
		100% {
			-webkit-transform: rotate(360deg);
		}
	}
	@keyframes ufLoading {
		0% {
			-webkit-transform: rotate(0deg);
			transform: rotate(0deg);
		}
		100% {
			-webkit-transform: rotate(360deg);
			transform: rotate(360deg);
		}
		}
		@keyframes ufLoading {
		0% {
			-webkit-transform: rotate(0deg);
			transform: rotate(0deg);
		}
		100% {
			-webkit-transform: rotate(360deg);
			transform: rotate(360deg);
		}
	}





/*! =========================================================================
   Magnific Popup CSS */
/*! ========================================================================= */
	.mfp-bg {
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		z-index: 999999;
		overflow: hidden;
		position: fixed;
		background: #0b0b0b;
		opacity: .8;
		filter: alpha(opacity=80);
	}

	.mfp-wrap {
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 9999999;
    position: fixed;
    outline: none !important;
    -webkit-backface-visibility: hidden;
}

	.mfp-container {
		text-align: center;
		position: absolute;
		width: 100%;
		height: 100%;
		left: 0;
		top: 0;
		padding: 0 8px;
		box-sizing: border-box;
	}

	.mfp-container:before {
		content: "";
		display: inline-block;
		height: 100%;
		vertical-align: middle;
	}

	.mfp-align-top .mfp-container:before {
		display: none;
	}

	.mfp-content {
		position: relative;
		display: inline-block;
		vertical-align: middle;
		margin: 0 auto;
		text-align: left;
		z-index: 1045;
	}

	.mfp-inline-holder .mfp-content,
	.mfp-ajax-holder .mfp-content {
		width: 100%;
		cursor: auto;
	}

	.mfp-ajax-cur {
		cursor: progress;
	}

	.mfp-zoom-out-cur,
	.mfp-zoom-out-cur .mfp-image-holder .mfp-close {
		cursor:         zoom-out;
	}

	.mfp-zoom {
		cursor: pointer;
		cursor:         zoom-in;
	}

	.mfp-auto-cursor .mfp-content {
		cursor: auto;
	}

	.mfp-close,
	.mfp-arrow,
	.mfp-preloader,
	.mfp-counter {
		-webkit-user-select: none;
		   -moz-user-select: none;
				-ms-user-select: none;
			user-select: none;
	}

	.mfp-loading.mfp-figure {
		display: none;
	}

	.mfp-hide {
		display: none !important;
	}

	.mfp-preloader {
		color: #ccc;
		position: absolute;
		top: 50%;
		width: auto;
		text-align: center;
		margin-top: -.8em;
		left: 8px;
		right: 8px;
		z-index: 1044;
	}
	.mfp-preloader a {
		color: #ccc;
	}
	.mfp-preloader a:hover {
		color: #fff;
	}

	.mfp-s-ready .mfp-preloader {
		display: none;
	}

	.mfp-s-error .mfp-content {
		display: none;
	}

	button.mfp-close,
	button.mfp-arrow {
		overflow: visible;
		cursor: pointer;
		background: transparent;
		border: 0;
		-webkit-appearance: none;
		display: block;
		outline: none;
		padding: 0;
		z-index: 1046;
		box-shadow: none;
	}
	.mfp-close {
    width: 40px;
    height: 40px;
    line-height: 40px;
    position: absolute;
    right: 10px;
    top: 6px;
    text-decoration: none;
    text-align: center;
    opacity: .65;
    filter: alpha(opacity=65);
    color: #fff;
    font-style: normal;
    font-size: 28px;
    font-family: Arial,Baskerville,monospace;
    cursor: pointer;
}
	.mfp-close:hover,
	.mfp-close:focus {
		opacity: 1;
		filter: alpha(opacity=100);
	}

	.mfp-close-btn-in .mfp-close {
		color: #fff;
	}

	.mfp-image-holder .mfp-close,
	.mfp-iframe-holder .mfp-close {
		color: #fff;
		right: -6px;
		text-align: right;
		padding-right: 6px;
		width: 100%;
	}

	.mfp-counter {
		position: absolute;
		top: 0;
		right: 0;
		color: #ccc;
		font-size: 12px;
		line-height: 18px;
		white-space: nowrap;
	}

	.mfp-arrow {
		position: absolute;
		opacity: .65;
		filter: alpha(opacity=65);
		margin: 0;
		top: 50%;
		margin-top: -55px;
		padding: 0;
		width: 90px;
		height: 110px;
		-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
	}
	.mfp-arrow:active {
		margin-top: -54px;
	}
	.mfp-arrow:hover,
	.mfp-arrow:focus {
		opacity: 1;
		filter: alpha(opacity=100);
	}
	.mfp-arrow:before,
	.mfp-arrow:after,
	.mfp-arrow .mfp-b,
	.mfp-arrow .mfp-a {
		content: "";
		display: block;
		width: 0;
		height: 0;
		position: absolute;
		left: 0;
		top: 0;
		margin-top: 35px;
		margin-left: 35px;
		border: medium inset transparent;
	}
	.mfp-arrow:after,
	.mfp-arrow .mfp-a {
		border-top-width: 13px;
		border-bottom-width: 13px;
		top: 8px;
	}
	.mfp-arrow:before,
	.mfp-arrow .mfp-b {
		border-top-width: 21px;
		border-bottom-width: 21px;
		opacity: .7;
	}

	.mfp-arrow-left {
		left: 0;
	}
	.mfp-arrow-left:after,
	.mfp-arrow-left .mfp-a {
		border-right: 17px solid #fff;
		margin-left: 31px;
	}
	.mfp-arrow-left:before,
	.mfp-arrow-left .mfp-b {
		margin-left: 25px;
		border-right: 27px solid #3f3f3f;
	}

	.mfp-arrow-right {
		right: 0;
	}
	.mfp-arrow-right:after,
	.mfp-arrow-right .mfp-a {
		border-left: 17px solid #fff;
		margin-left: 39px;
	}
	.mfp-arrow-right:before,
	.mfp-arrow-right .mfp-b {
		border-left: 27px solid #3f3f3f;
	}

	.mfp-iframe-holder {
		padding-top: 40px;
		padding-bottom: 40px;
	}
	.mfp-iframe-holder .mfp-content {
		line-height: 0;
		width: 100%;
		max-width: 900px;
	}
	.mfp-iframe-holder .mfp-close {
		top: -40px;
	}

	.mfp-iframe-scaler {
		width: 100%;
		height: 0;
		overflow: hidden;
		padding-top: 56.25%;
	}
	.mfp-iframe-scaler iframe {
		position: absolute;
		display: block;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background: #000;
	}

	/* Main image in popup */
	img.mfp-img {
		width: auto;
		max-width: 100%;
		height: auto;
		display: block;
		line-height: 0;
		box-sizing: border-box;
		padding: 40px 0 40px;
		margin: 0 auto;
	}

	/* The shadow behind the image */
	.mfp-figure {
		line-height: 0;
	}
	.mfp-figure:after {
		content: "";
		position: absolute;
		left: 0;
		top: 40px;
		bottom: 40px;
		display: block;
		right: 0;
		width: auto;
		height: auto;
		z-index: -1;
		box-shadow: 0 0 8px rgba(0, 0, 0, .6);
		background: #444;
	}
	.mfp-figure small {
		color: #bdbdbd;
		display: block;
		font-size: 12px;
		line-height: 14px;
	}
	.mfp-figure figure {
		margin: 0;
	}

	.mfp-bottom-bar {
		margin-top: -36px;
		position: absolute;
		top: 100%;
		left: 0;
		width: 100%;
		cursor: auto;
	}

	.mfp-title {
		text-align: left;
		line-height: 18px;
		color: #f3f3f3;
		word-wrap: break-word;
		padding-right: 36px;
	}

	.mfp-image-holder .mfp-content {
		max-width: 100%;
	}

	.mfp-gallery .mfp-image-holder .mfp-figure {
		cursor: pointer;
	}

	@media screen and (max-width: 800px) and (orientation: landscape), screen and (max-height: 300px) {
		/**
		   * Remove all paddings around the image on small screen
		   */
		.mfp-img-mobile .mfp-image-holder {
			padding-left: 0;
			padding-right: 0;
		}
		.mfp-img-mobile img.mfp-img {
			padding: 0;
		}
		.mfp-img-mobile .mfp-figure:after {
			top: 0;
			bottom: 0;
		}
		.mfp-img-mobile .mfp-figure small {
			display: inline;
			margin-left: 5px;
		}
		.mfp-img-mobile .mfp-bottom-bar {
			background: rgba(0, 0, 0, .6);
			bottom: 0;
			margin: 0;
			top: auto;
			padding: 3px 5px;
			position: fixed;
			box-sizing: border-box;
		}
		.mfp-img-mobile .mfp-bottom-bar:empty {
			padding: 0;
		}
		.mfp-img-mobile .mfp-counter {
			right: 5px;
			top: 3px;
		}
		.mfp-img-mobile .mfp-close {
			top: 0;
			right: 0;
			width: 35px;
			height: 35px;
			line-height: 35px;
			background: rgba(0, 0, 0, .6);
			position: fixed;
			text-align: center;
			padding: 0;
		}
	}

	@media all and (max-width: 900px) {
		.mfp-arrow {
			-webkit-transform: scale(.75);
					transform: scale(.75);
		}

		.mfp-arrow-left {
			-webkit-transform-origin: 0;
					transform-origin: 0;
		}

		.mfp-arrow-right {
			-webkit-transform-origin: 100%;
					transform-origin: 100%;
		}

		.mfp-container {
			padding-left: 6px;
			padding-right: 6px;
		}
	}

	.mfp-ie7 .mfp-img {
		padding: 0;
	}
	.mfp-ie7 .mfp-bottom-bar {
		width: 600px;
		left: 50%;
		margin-left: -300px;
		margin-top: 5px;
		padding-bottom: 5px;
	}
	.mfp-ie7 .mfp-container {
		padding: 0;
	}
	.mfp-ie7 .mfp-content {
		padding-top: 44px;
	}
	.mfp-ie7 .mfp-close {
		top: 0;
		right: 0;
		padding-top: 0;
	}


/*!
 * Ladda
 * http://labhakimse/ladda
 * MIT licensed
 *
 * Copyright (C) 2016 Hakim El Hattab, http://hakimse
 */.ladda-button{position:relative}.ladda-button .ladda-spinner{position:absolute;z-index:2;display:inline-block;width:32px;height:32px;top:50%;margin-top:0;opacity:0;pointer-events:none}.ladda-button .ladda-label{position:relative;z-index:3}.ladda-button .ladda-progress{position:absolute;width:0;height:100%;left:0;top:0;background:rgba(0,0,0,0.2);visibility:hidden;opacity:0;-webkit-transition:0.1s linear all !important;transition:0.1s linear all !important}.ladda-button[data-loading] .ladda-progress{opacity:1;visibility:visible}.ladda-button,.ladda-button .ladda-spinner,.ladda-button .ladda-label{-webkit-transition:0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275) all !important;transition:0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275) all !important}.ladda-button[data-style=zoom-in],.ladda-button[data-style=zoom-in] .ladda-spinner,.ladda-button[data-style=zoom-in] .ladda-label,.ladda-button[data-style=zoom-out],.ladda-button[data-style=zoom-out] .ladda-spinner,.ladda-button[data-style=zoom-out] .ladda-label{-webkit-transition:0.3s ease all !important;transition:0.3s ease all !important}.ladda-button[data-style=expand-right] .ladda-spinner{right:-6px}.ladda-button[data-style=expand-right][data-size="s"] .ladda-spinner,.ladda-button[data-style=expand-right][data-size="xs"] .ladda-spinner{right:-12px}.ladda-button[data-style=expand-right][data-loading]{padding-right:56px}.ladda-button[data-style=expand-right][data-loading] .ladda-spinner{opacity:1}.ladda-button[data-style=expand-right][data-loading][data-size="s"],.ladda-button[data-style=expand-right][data-loading][data-size="xs"]{padding-right:40px}.ladda-button[data-style=expand-left] .ladda-spinner{left:26px}.ladda-button[data-style=expand-left][data-size="s"] .ladda-spinner,.ladda-button[data-style=expand-left][data-size="xs"] .ladda-spinner{left:4px}.ladda-button[data-style=expand-left][data-loading]{padding-left:56px}.ladda-button[data-style=expand-left][data-loading] .ladda-spinner{opacity:1}.ladda-button[data-style=expand-left][data-loading][data-size="s"],.ladda-button[data-style=expand-left][data-loading][data-size="xs"]{padding-left:40px}.ladda-button[data-style=expand-up]{overflow:hidden}.ladda-button[data-style=expand-up] .ladda-spinner{top:-32px;left:50%;margin-left:0}.ladda-button[data-style=expand-up][data-loading]{padding-top:54px}.ladda-button[data-style=expand-up][data-loading] .ladda-spinner{opacity:1;top:26px;margin-top:0}.ladda-button[data-style=expand-up][data-loading][data-size="s"],.ladda-button[data-style=expand-up][data-loading][data-size="xs"]{padding-top:32px}.ladda-button[data-style=expand-up][data-loading][data-size="s"] .ladda-spinner,.ladda-button[data-style=expand-up][data-loading][data-size="xs"] .ladda-spinner{top:4px}.ladda-button[data-style=expand-down]{overflow:hidden}.ladda-button[data-style=expand-down] .ladda-spinner{top:62px;left:50%;margin-left:0}.ladda-button[data-style=expand-down][data-size="s"] .ladda-spinner,.ladda-button[data-style=expand-down][data-size="xs"] .ladda-spinner{top:40px}.ladda-button[data-style=expand-down][data-loading]{padding-bottom:54px}.ladda-button[data-style=expand-down][data-loading] .ladda-spinner{opacity:1}.ladda-button[data-style=expand-down][data-loading][data-size="s"],.ladda-button[data-style=expand-down][data-loading][data-size="xs"]{padding-bottom:32px}.ladda-button[data-style=slide-left]{overflow:hidden}.ladda-button[data-style=slide-left] .ladda-label{position:relative}.ladda-button[data-style=slide-left] .ladda-spinner{left:100%;margin-left:0}.ladda-button[data-style=slide-left][data-loading] .ladda-label{opacity:0;left:-100%}.ladda-button[data-style=slide-left][data-loading] .ladda-spinner{opacity:1;left:50%}.ladda-button[data-style=slide-right]{overflow:hidden}.ladda-button[data-style=slide-right] .ladda-label{position:relative}.ladda-button[data-style=slide-right] .ladda-spinner{right:100%;margin-left:0;left:16px}.ladda-button[data-style=slide-right][data-loading] .ladda-label{opacity:0;left:100%}.ladda-button[data-style=slide-right][data-loading] .ladda-spinner{opacity:1;left:50%}.ladda-button[data-style=slide-up]{overflow:hidden}.ladda-button[data-style=slide-up] .ladda-label{position:relative}.ladda-button[data-style=slide-up] .ladda-spinner{left:50%;margin-left:0;margin-top:1em}.ladda-button[data-style=slide-up][data-loading] .ladda-label{opacity:0;top:-1em}.ladda-button[data-style=slide-up][data-loading] .ladda-spinner{opacity:1;margin-top:0}.ladda-button[data-style=slide-down]{overflow:hidden}.ladda-button[data-style=slide-down] .ladda-label{position:relative}.ladda-button[data-style=slide-down] .ladda-spinner{left:50%;margin-left:0;margin-top:-2em}.ladda-button[data-style=slide-down][data-loading] .ladda-label{opacity:0;top:1em}.ladda-button[data-style=slide-down][data-loading] .ladda-spinner{opacity:1;margin-top:0}.ladda-button[data-style=zoom-out]{overflow:hidden}.ladda-button[data-style=zoom-out] .ladda-spinner{left:50%;margin-left:32px;-webkit-transform:scale(2.5);transform:scale(2.5)}.ladda-button[data-style=zoom-out] .ladda-label{position:relative;display:inline-block}.ladda-button[data-style=zoom-out][data-loading] .ladda-label{opacity:0;-webkit-transform:scale(0.5);transform:scale(0.5)}.ladda-button[data-style=zoom-out][data-loading] .ladda-spinner{opacity:1;margin-left:0;-webkit-transform:none;transform:none}.ladda-button[data-style=zoom-in]{overflow:hidden}.ladda-button[data-style=zoom-in] .ladda-spinner{left:50%;margin-left:-16px;-webkit-transform:scale(0.2);transform:scale(0.2)}.ladda-button[data-style=zoom-in] .ladda-label{position:relative;display:inline-block}.ladda-button[data-style=zoom-in][data-loading] .ladda-label{opacity:0;-webkit-transform:scale(2.2);transform:scale(2.2)}.ladda-button[data-style=zoom-in][data-loading] .ladda-spinner{opacity:1;margin-left:0;-webkit-transform:none;transform:none}.ladda-button[data-style=contract]{overflow:hidden;width:100px}.ladda-button[data-style=contract] .ladda-spinner{left:50%;margin-left:0}.ladda-button[data-style=contract][data-loading]{border-radius:50%;width:52px}.ladda-button[data-style=contract][data-loading] .ladda-label{opacity:0}.ladda-button[data-style=contract][data-loading] .ladda-spinner{opacity:1}.ladda-button[data-style=contract-overlay]{overflow:hidden;width:100px;box-shadow:0px 0px 0px 2000px transparent}.ladda-button[data-style=contract-overlay] .ladda-spinner{left:50%;margin-left:0}.ladda-button[data-style=contract-overlay][data-loading]{border-radius:50%;width:52px;box-shadow:0px 0px 0px 2000px rgba(0,0,0,0.8)}.ladda-button[data-style=contract-overlay][data-loading] .ladda-label{opacity:0}.ladda-button[data-style=contract-overlay][data-loading] .ladda-spinner{opacity:1}
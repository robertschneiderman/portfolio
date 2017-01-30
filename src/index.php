<!DOCTYPE html>
<html lang="en" ng-app="calendarApp">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="description" content="Robert Schneiderman is a front-end developer and UI designer who has designed and coded beautiful websites for many prestigious clients.">
<meta name="author">
<title>Robert Schneiderman</title>

<?php include 'include/header.html' ?>
<!-- build:section optional layout.header -->
<!-- /build -->


<!-- <div id="my-video" style="width: 100%; height: 700px; position: absolute; z-index: 1000"></div> -->
<canvas id="canvas"></canvas>
<canvas id="canvas2"></canvas>
<canvas id="canvas3"></canvas>
<div id="bg"></div>
<img id="burst" src="./images/svg/burst.jpg">
<img id="lines" src="./images/lines.jpg">
<img id="lines2" src="./images/lines2.jpg">
<!-- <div id="growing-circle-purple"></div>
<div id="growing-circle-white1"></div>
<div id="growing-circle-white2"></div> -->

	<section class="section--landing">
	  <div id="modal" class="modal">
      <svg id="modal-close-btn" class="modal__btn">
        <use xlink:href="images/sprites/svgsprite.svg#x"></use>
      </svg>
      <h2 class='modal__heading'>Success</h2>
      <p class='modal__body'>Thank you for contacting me, <span id="modal-name"></span>! I will be touching base with you shortly.</p>
	  </div>

	  <div id="logo" class="img--headline">
		  <div class="logo-main">
			<div id="hi-im-container">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 627 176.3" id="hi-im"><g fill="none" stroke="#FFF" stroke-width="6" stroke-miterlimit="10"><path d="M3.9 3h28.6c.5 0 .9.4.9.9v79.2c0 .5.4.9.9.9h28.9c.5 0 .9-.4.9-.9V3.9c-.1-.5.3-.9.8-.9h29.6c.5 0 .9.4.9.9v147.2c0 .5-.4.9-.9.9H66.2c-.5 0-.9-.4-.9-.9v-33.9c0-.5-.4-.9-.9-.9H34.9c-.5 0-.9.4-.9.9v33.9c0 .5-.4.9-.9.9H3.9c-.5 0-.9-.4-.9-.9V3.9c0-.5.4-.9.9-.9z"/><path stroke-linejoin="round" d="M64 83.1l16.3 17.6V3M33.3 84H18.7V3.9M18.7 152v-51.3h61.6M34.9 116.3l-16.2-15.6M80.3 152v-35.7H64.4"/></g><g fill="none" stroke="#FFF" stroke-width="6" stroke-linejoin="round" stroke-miterlimit="10"><path d="M142.3 3H174v149h-31.7zM158.2 152V3.9"/></g><g fill="none" stroke="#FFF" stroke-width="6" stroke-linejoin="round" stroke-miterlimit="10"><path d="M347.8 3h31.7v149h-31.7zM363.7 152V3.9"/></g><g fill="none" stroke="#FFF" stroke-width="6" stroke-linejoin="round" stroke-miterlimit="10"><path d="M220 124.3h30.7V158s-1.7 15.3-15.3 15.3V156s-15.3-4.3-15.3-18-.1-13.7-.1-13.7zM235.3 156v-31.7"/></g><g fill="none" stroke="#FFF" stroke-width="6" stroke-linejoin="round" stroke-miterlimit="10"><path d="M425.8 3h30.7v45.8h-30.7zM441.2 3v46.8"/></g><g fill="none" stroke="#FFF" stroke-width="6" stroke-linejoin="round" stroke-miterlimit="10"><path d="M499.7 3H521l40.3 68.7L602.1 3H624v149h-31.7V83l-24 40h-14l-40.6-73.2V152h-14z"/><path d="M504.3 3.9L552.7 89l17.8-32.8M552.4 119.5L619 3M513.8 152h16.5V79.8M608.7 152V49.8L592.3 83"/></g></svg>
			</div>
			<div id="rob-container">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 369.3 159.3" id="rob"><g fill="none" stroke="#5AA0B0" stroke-width="6" stroke-linejoin="round" stroke-miterlimit="10"><path d="M3 5.3v149h30.7V105c2.3-2 15-2.2 16.7-.8l18 50.1H101S81.4 97.5 81.4 95.8s19.6-16.9 19.6-44S79.2 5.3 61.6 5.3H3z"/><path d="M19.3 154.3V87.9h25.5l5.5 16.3M36.2 103.9c-3.1-1-15.4-14-15.6-16"/><path d="M83.6 154.3L61.8 87.9s23.8-7.5 23.8-36.2-25.3-32.2-41-32.2H19.3v52.8h37c5.3 0 13.3-5.8 13.3-16S64.4 36.4 52 36.4H34.8l-15.5-17M34.8 72.2V36.4M87.8 87.9L77 77.1"/></g><g fill="none" stroke="#5AA0B0" stroke-width="6" stroke-linejoin="round" stroke-miterlimit="10"><path d="M181 126.7h-.3c-9.5 0-17.2-7.7-17.2-17.2V50.2c0-9.5 7.7-17.2 17.2-17.2h.3c9.5 0 17.2 7.7 17.2 17.2v59.3c0 9.6-7.7 17.2-17.2 17.2z"/><path d="M181.7 141.1h-.7c-18.4 0-33.3-14.9-33.3-33.3V51.6c0-18.4 14.9-33.3 33.3-33.3h.7c18.4 0 33.3 14.9 33.3 33.3v56.2c0 18.4-14.9 33.3-33.3 33.3z"/><path d="M181.7 156.3h-1c-27.1 0-49-21.9-49-49V52c0-27.1 21.9-49 49-49h1c27.1 0 49 21.9 49 49v55.3c0 27.1-22 49-49 49zM156.9 28.6l10.7 10.6M204.8 131.7l11.5 10.2"/></g><g fill="none" stroke="#5AA0B0" stroke-width="6" stroke-linejoin="round" stroke-miterlimit="10"><path d="M267.7 5.9h51.7c18.3 0 36 18.7 36 38s-3.7 26.3-3.7 26.3c10.3 10.2 16.6 16.5 14 43-1.3 13.5-14 41.7-47.3 41.7h-50.7V5.9z"/><path d="M267.7 19.4H317c2.4 0 22.9 5.5 22.9 26.5s-13 26.5-13 26.5h-43.5v-36s32.1-.6 33.6 0c2 .8 8.1 4 8.1 13.5 0 8.9-9.2 6.6-26.5 6.6v-20M283.3 72.4l15.1-15.8M351.7 70.3L343 81.6s8.3 7.3 8.3 28.7-22.7 30.2-38.7 30.2h-27.8V87.3h35.8s15 1.5 15 17.8c0 0 1 19.2-19.2 19.2s-16.9.1-16.9.1M299.6 123.5V88.2M299.6 123.6V88M299.6 123.7V87.4M299.6 123.8V87.5M299.6 123.9V87.6M299.6 124V87.7M299.6 124.1V87.8M299.6 124.2V87.9M299.6 124.1l-15.8 17M342.3 129.9l9.9 11.2"/></g></svg>
			</div>
		</div>
		<div id="subtext" class="subtext">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 612.1 28.3" id="subtext"><path fill="#D1D2D2" d="M58.5 10.8c3.6-3.5 4.9-3.4 6.7.3.5-.6 1-1.3 1.5-1.8 1.8-1.7 4-1.1 4.6 1.3.6 2.3.1 4.6.3 6.9.2 1.4-1 3.3 1.3 4.2.4.1.2 1-.5 1-1.1.1-2.3.1-3.5 0-.4 0-.7-.3-.7-.7 0-.5.4-.7.7-.7 1.1 0 1.1-.7 1.1-1.4 0-2.6 0-5.3-.1-7.9 0-.8.1-1.7-.8-2.1-1-.4-1.8.3-2.4 1-1.1 1.3-1.9 2.8-1.8 4.6.1 1.3 0 2.6 0 3.9 0 .9-.3 2.1 1.3 2 .3 0 .6.2.6.6 0 .4-.3.7-.7.7h-3.9c-.4 0-.7-.2-.7-.7 0-.5.3-.7.7-.7 1.2.1 1.2-.6 1.2-1.5v-8.1c0-.8 0-1.5-.9-1.8-.8-.3-1.4.1-2 .7-1.4 1.3-2.3 2.8-2.2 4.8.1 1.3 0 2.7 0 4 0 .9-.3 2.1 1.3 2 .4 0 .6.3.6.8-.1.5-.4.6-.8.6h-3.7c-.4 0-.7-.2-.8-.6-.1-.5.3-.8.8-.8 1.3.1 1.1-.8 1.1-1.6v-8.2c0-.9.1-1.6-1.1-1.6-.4 0-.9-.2-.8-.8.1-.4.4-.6.8-.6 1.9-.5 2.6 0 2.8 2.2zm214.1 1.3c1.1-1.2 2.1-2.4 3.6-3.1 3.2-1.6 5.7-.2 5.9 3.3.1 2.5.1 5 0 7.5 0 1.1.1 1.8 1.4 1.6.6-.1 1.4-.2 1.5.7 0 .9-.9.8-1.5.8h-4.4c-.5 0-1.2.1-1.3-.7-.1-.8.6-.9 1.2-.8 1.4.2 1.6-.4 1.6-1.6-.1-2.4 0-4.8-.1-7.2-.1-2.4-1.5-3.4-3.6-2.3-2.8 1.4-4.8 3.5-4.6 7 .1.7.1 1.4 0 2-.1 1.4.1 2.3 1.8 2 .5-.1 1.1 0 1.1.7 0 .8-.6.8-1.1.8h-4.9c-.5 0-1.2.1-1.3-.7-.1-.8.7-.9 1.2-.8 1.6.2 1.7-.7 1.7-1.9-.1-2.6-.1-5.1 0-7.7 0-1.1-.1-1.8-1.5-1.6-.6.1-1.6.2-1.5-.7 0-.9.9-.7 1.6-.8h.6c2.5 0 2.5 0 2.6 2.5-.3.3-.6.8 0 1zM407 21.2c-.2.7-.3 1.1-.5 1.6-.1.3-.3.5-.7.5-.5 0-.6-.4-.6-.8v-4c0-.4-.1-1 .4-1.1.7-.2.8.5 1 .9 1 2.3 2.8 3.3 5.1 3.5 1.1.1 2-.1 3-.7.9-.5 1.3-1.3 1.2-2.3-.1-1-.7-1.7-1.6-2-1.4-.4-2.7-.6-4.1-.9-.9-.2-1.8-.3-2.7-.6-1.3-.5-2.2-1.3-2.3-2.8-.1-1.6.5-2.8 1.9-3.5 2.2-1.2 4.5-1 6.6.2.8.5 1.4.8 1.6-.5.1-.3.2-.8.7-.7.5.1.7.5.7 1v3.7c0 .4-.1.7-.6.8-.5.1-.6-.3-.8-.6-1.1-2-2.7-3.2-5.1-3.3-1 0-2 .2-2.7.8-1.3 1-1.1 2.5.4 3.2 1.2.6 2.5.6 3.7.8 1 .2 2 .3 3 .6 1.8.6 2.9 2.1 2.8 3.9-.1 1.7-1.2 3.2-3 3.8-2.6.9-5 .3-7.4-1.5zm120.8-9.1c0 2.4.1 4.9 0 7.3-.1 1.6.5 2 2 1.9 1.1-.1 2.2 0 3.3 0 .5 0 .9.1.9.7.1.7-.4.8-1 .8h-12.1c-.5 0-.9-.2-.9-.7-.1-.6.4-.8 1-.8 1.4 0 2.7-.1 4 0 .9 0 1.2-.2 1.2-1.1 0-4.9-.1-9.8 0-14.7 0-1.1-.5-1.2-1.3-1.1-1.5.1-3.1 0-4.6 0-.5 0-1-.1-1-.7 0-.7.5-.8 1-.8h6.6c1.1 0 1 .7 1 1.4v7.8zm-39.4 9.1c1.1-3.4 2.2-6.8 3.4-10.1.3-1-.3-.9-.9-1-.6-.1-1.6.2-1.6-.7 0-1.1 1-.9 1.7-.9h4.4c.6 0 1.2.1 1.3.8.1.8-.6.9-1.1.8-1.6-.2-2 .7-2.4 2-1.1 3.4-2.3 6.7-3.5 10-.2.7-.4 1.1-1.3 1.1s-1.1-.4-1.4-1.1c-1.2-3.4-2.5-6.9-3.7-10.3-.4-1.1-.8-1.9-2.1-1.7-.5.1-1.2.1-1.3-.7 0-.9.7-.9 1.3-.9h4.9c.5 0 1 .2 1.1.8.1.7-.6.8-1 .8-1.9-.2-1.7.6-1.2 2 1.1 3 2.1 6.1 3.2 9.2l.2-.1zm-272.1-6v-1.5c0-1.1.3-2.4-.1-3.2-.6-1.1-2-.1-3-.5-.5-.2-1.3.1-1.3-.7 0-.7.8-.8 1.4-.9 2.5-.3 3-.9 3.1-3.4v-.4c0-.7-.1-1.7.9-1.7s.7 1.1.7 1.8c.1 3.8.1 3.8 3.9 3.9.4 0 .7 0 1.1.1.4.1.6.4.6.8 0 .5-.4.6-.7.6-1.2.1-2.4.1-3.7.1-1-.1-1.4.2-1.4 1.3.1 2.4 0 4.8.1 7.2.1 2.1 1 3.1 2.6 3.1 1.7.1 2.7-.9 3.1-2.9.1-.6-.2-1.6.9-1.4.9.2.6 1.1.6 1.7-.1 2.5-2.1 4.3-4.7 4.2-2.6-.1-4-1.6-4.1-4.2-.1-1.5 0-2.7 0-4zm393-5.2c-3.6-.2-6.3 2.3-6.4 5.5 0 1.4.1 2.8 0 4.2-.1 1.4.4 1.7 1.7 1.6.7-.1 1.3 0 2 0 .4 0 .7.2.7.7 0 .4-.3.7-.7.7h-8.8c-.5 0-.8-.3-.8-.8 0-.4.4-.6.8-.6h.7c2.7-.1 2.7-.1 2.7-2.8 0-2.4-.1-4.8 0-7.2 0-1.1-.3-1.4-1.4-1.3-.6.1-1.2 0-1.8 0-.4 0-.9-.1-.9-.7s.5-.8 1-.8c1.1 0 2.2.1 3.3 0 1.1-.1 1.4.4 1.3 1.4-.1.4 0 .9 0 1.4.8-.1 1.1-.7 1.6-1.1 1.4-1.1 2.8-1.9 4.7-1.7 1.6.1 2.3 1.3 2.8 2.5.3.7-.1 1.5-.7 2-.4.3-.9.4-1.4.2-.7-.4-.9-1.1-.8-1.9.2-.5.3-.8.4-1.3zM6 22.8H1.1c-.5 0-1-.1-1.1-.7 0-.7.6-.7 1-.7 1.1-.1 2.2-.1 3.3 0 .8 0 1.1-.3 1-1.1V5.5c0-1-.4-1.1-1.2-1.1-1 .1-2.1 0-3.1 0-.5 0-1-.1-1-.8 0-.6.4-.7.9-.7h10.6c.5 0 .9.2.9.7s-.4.7-.9.7c-1.1 0-2.2.1-3.3 0-1-.1-1.3.2-1.3 1.2.1 4.9 0 9.8 0 14.7 0 .9.3 1.2 1.2 1.2.9-.1 1.8 0 2.7 0 .6 0 1.4-.2 1.5.7 0 1-.9.8-1.5.8-1.6-.1-3.2-.1-4.8-.1zm188.6-7.1c.1.8.1 1.6.4 2.3.7 1.9 2 3.2 4.1 3.5 2.2.3 3.8-.6 4.9-2.5.3-.6.7-1.4 1.5-.9.7.5.1 1.1-.1 1.6-1.6 3.3-6.5 4.4-9.7 2-2.3-1.8-3-4.3-2.7-7 .3-2.8 1.4-5.1 4.3-6.1 2.5-.9 4.9-.6 7 1.2.9.8 1.2 1.8 1 3-.1.7-.5 1.3-1.1 1.5-.6.2-1.2.1-1.6-.5-.5-.6-.8-1.4-.3-2 1.4-1.6-.2-1.8-1.1-2-3.6-.8-6.6 1.9-6.6 5.9zm198.2-3.6c0 2.6.1 5.1 0 7.7-.1 1.2.4 1.6 1.6 1.5 1.1-.1 2.3 0 3.5 0 .5 0 1.2-.1 1.2.8 0 .7-.6.7-1.1.7h-11.7c-.6 0-1.2-.1-1.2-.8 0-.7.7-.7 1.3-.7h3.9c.8 0 1.1-.3 1.1-1.1V5.3c0-1-.5-1.1-1.3-1h-4.6c-.5 0-1.1 0-1.1-.7-.1-.8.6-.8 1.1-.8h6.1c1 0 1.4.3 1.4 1.4-.2 2.6-.2 5.3-.2 7.9zm-19.3 3c0 1.6.1 3.3 0 4.9-.1 1 .3 1.3 1.3 1.2 1-.1 1.9 0 2.9 0 .4 0 .7.2.8.6 0 .5-.3.8-.8.8h-10.2c-.4 0-.7-.3-.7-.7-.1-.5.4-.8.8-.8 1 0 2.1-.1 3.1 0 .9.1 1.3-.2 1.3-1.2-.1-2.9-.1-5.9 0-8.8 0-1-.4-1.2-1.3-1.2-1.1 0-2.2-.1-3.3-.1-.4 0-.9-.2-.9-.7 0-.4.4-.7.7-.7 1.9-.1 3.8-.1 5.7 0 .8 0 .6.7.7 1.3-.1 1.9-.1 3.7-.1 5.4zm-223.9 6.2c-1.8-.3-1.9-1.6-2-3-.2-1.6-.6-3.2-1.8-4.3-.9-.8-.7-1.1.3-1.6 2-1 2.7-2.7 2.4-4.9-.2-2.2-1.4-3.5-3.5-4.3-2.2-.8-4.4-.2-6.1-.4h-5c-.6 0-1.5-.2-1.5.8 0 .9.9.6 1.4.7h.4c1.4-.2 1.8.3 1.7 1.7-.1 4.3-.1 8.7 0 13 .1 1.7-.2 2.7-2.2 2.3-.5-.1-1.3-.1-1.2.7 0 .7.7.7 1.2.7h5.7c.7 0 1.7.3 1.8-.7 0-1.1-1.1-.6-1.7-.7h-.6c-1 .1-1.4-.2-1.4-1.3.1-1.8 0-3.5 0-5.3 0-.5-.1-1 .6-1.2 3.3-1.2 6.5.4 7.6 3.8.3 1 .3 1.9.4 2.9.2 2.5.9 3 3.2 2.7.4-.1.7-.1.9-.5.1-.6-.1-1-.6-1.1zm-5.9-9.5c-1.8.2-3.5.1-5.3.1-.8 0-.9-.4-.9-1V8c0-3.6 0-3.7 3.6-3.6 1.1 0 2.2-.1 3.2.3 1.8.7 2.7 1.9 2.6 3.8-.1 1.7-1.3 3.1-3.2 3.3zm198.7 9.5c-1.8-.3-1.9-1.6-2-3-.2-1.6-.6-3.2-1.8-4.3-.9-.9-.6-1.2.3-1.6 2-1 2.7-2.8 2.4-4.9-.2-2.2-1.4-3.5-3.5-4.2-2.1-.7-4.3-.2-6-.4h-5.3c-.5 0-1.3-.1-1.3.7-.1.9.8.7 1.3.8h.6c1.3-.2 1.6.3 1.6 1.6-.1 4.4-.1 8.8 0 13.2.1 1.7-.3 2.5-2.2 2.2-.5-.1-1.3-.1-1.3.6 0 .9.7.8 1.4.8h6.1c.6 0 1.2 0 1.3-.7.1-.7-.6-.8-1.2-.8-.4 0-.7-.1-1.1 0-1 .1-1.4-.2-1.4-1.3.1-1.8 0-3.5 0-5.3 0-.5-.1-1 .6-1.2 3.3-1.2 6.6.4 7.6 3.8.3 1 .3 1.9.4 2.9.2 2.5.9 3 3.3 2.6.4-.1.7-.1.9-.5 0-.5-.2-.9-.7-1zm-5.7-9.5c-1 .2-2.1.2-3.1.2-3.3-.1-3.4-.1-3.3-2.7.1-1.6-.8-3.9.4-4.7 1.5-.9 3.8-.4 5.7-.2 2 .2 3.3 1.8 3.3 3.6.1 1.9-1.1 3.4-3 3.8zm235.5.4C571 9.4 568.8 8 566 8.4c-1.5.2-2.4 1.3-3.7 2.4.5-2.6-1.1-2.4-2.6-2.3h-1.6c-.6 0-1.2.1-1.1.9 0 .7.7.6 1.1.6.3 0 .6.1.9 0 1.3-.2 1.6.4 1.6 1.6-.1 4.2-.1 8.4 0 12.7 0 1.6.2 3.1-2.2 2.7-.4-.1-.9.1-.9.7 0 .4.4.7.7.7h6.6c.4 0 .7-.2.7-.7 0-.6-.4-.7-.9-.7s-1-.1-1.5 0c-.7 0-1-.2-1-.9v-5.5c3.1 3 6 3.3 8.4 1 2.4-2.1 3-6.3 1.7-9.4zm-1.8 7.1c-1.4 2.7-4.9 3.1-6.8.7-1.6-2-1.7-6.2-.1-8.3 1.1-1.5 2.7-2.3 4.5-1.8 2.1.6 2.8 2.4 3.2 4.3.1.5 0 1 0 1.2 0 1.6-.2 2.8-.8 3.9zm-113.1 2.1c-.4 0-.7-.1-1.1 0-1.4.2-1.7-.4-1.7-1.7.1-4.3 0-8.6 0-12.8 0-4.4-.1-4.5-4.6-3.9-.5.1-1 .1-1 .8 0 .7.6.6 1 .7 1 .2 2.3-.5 2.9.4.4.8.1 2 .1 3.1v2.8c-3.8-3.2-7.1-3-9.4.3-2 2.9-1.8 7.4.5 10.1 2 2.4 5.7 2.6 7.9.3.3-.3.3-.9 1-.6-.4 1.7.5 2.1 2 1.9.8-.1 1.6 0 2.4 0 .5 0 1.1 0 1.1-.6.1-.9-.6-.8-1.1-.8zm-4.4-5.4c-.1 3-1.7 5.2-3.9 5.5-2.6.3-4.6-1.5-5-4.7-.1-.4 0-.9 0-1.3 0-1.8.5-3.4 1.8-4.6 1-1 2.2-1.3 3.5-1 2.1.4 3.7 3.1 3.6 6.1zM52.8 19c-.9-.2-.8.7-.9 1.3-.1.7-.5 1.3-1.3 1.3-.9 0-1.1-.7-1.2-1.4-.1-.5-.1-1-.1-1.5v-6.1c0-2-1-3.4-3-3.9-2.2-.6-4.5-.6-6.6.5-1 .5-1.7 1.3-1.7 2.6.1 1.1.7 1.6 1.6 1.6 1-.1 1.6-.8 1.3-1.8-.6-1.7.3-1.7 1.5-1.7.8 0 1.6-.1 2.4 0 1.5.1 2.7.8 2.8 2.4.1 1.7-1.4 2-2.6 2.2-1.5.2-3 .2-4.5.5-2 .5-3.2 1.8-3.3 3.8-.1 2.2 1 3.5 3.2 4.1 2.9.7 5.1-.4 7.3-2.5.4 1.9 1.4 2.9 3.2 2.6 1.4-.2 2.3-1 2.5-2.5 0-.5.2-1.4-.6-1.5zm-11.2 2.6c-1.6-.1-2.9-1.1-2.9-2.4-.1-1.5.9-2.3 2.3-2.7 2.2-.6 4.5-.3 6.7-1.4.3 3.9-2.2 6.6-6.1 6.5zm319.6-2.7c-.7-.1-.7.7-.8 1.2-.1.7-.4 1.3-1.2 1.4-1 0-1.2-.7-1.4-1.4-.1-.5-.1-1-.1-1.5 0-2 .1-4-.1-6.1-.1-2.2-1.2-3.6-3.4-4-2-.4-4-.4-5.9.5-1.1.6-2 1.4-1.9 2.8.1 1.1.8 1.5 1.7 1.4.9-.1 1.5-.8 1.2-1.7-.7-1.8.4-1.8 1.6-1.8h2.2c1.7.1 3 1.2 2.9 2.5-.1 1.7-1.5 2-2.8 2.1-1.5.2-3.1.2-4.5.5-2 .5-3.1 1.9-3.2 3.9 0 2.1 1 3.4 3.1 4 2.8.7 5.1-.3 7.3-2.4.2.5.3.7.4 1 .5 1.4 1.6 1.8 2.9 1.5 1.5-.2 2.3-1.1 2.4-2.6.3-.4.4-1.2-.4-1.3zm-11.3 2.7c-1.6-.1-2.5-1-2.7-2.5-.2-1.4.8-2.3 2.1-2.6 1.3-.3 2.7-.4 4-.6.9-.2 1.9-.5 2.9-.7.4 3.8-2.4 6.7-6.3 6.4zM265 19c-.9-.2-.9.6-1 1.2-.1.7-.4 1.3-1.2 1.3s-1.1-.6-1.3-1.3c-.1-.5-.1-1-.1-1.5v-6.1c-.1-2.2-1.1-3.6-3.2-4.1-2.1-.5-4.3-.5-6.3.6-1 .5-1.7 1.3-1.7 2.6 0 1.1.6 1.6 1.6 1.6 1-.1 1.6-.9 1.3-1.8-.7-1.7.4-1.7 1.5-1.7.8 0 1.6-.1 2.4 0 1.5.1 2.7.8 2.8 2.4.1 1.7-1.4 2-2.7 2.2-1.4.2-2.9.2-4.4.5-2.3.5-3.5 1.9-3.5 4s1.1 3.4 3.4 4c2.8.7 5-.5 7.2-2.5.5 1.9 1.4 2.9 3.3 2.6 1.4-.2 2.3-1.1 2.4-2.6 0-.5.1-1.3-.5-1.4zm-11.1 2.6c-1.6 0-2.7-.7-3.1-2.3-.3-1.4.7-2.5 2.4-2.9 2.2-.6 4.5-.2 6.6-1.4.3 4-2.1 6.6-5.9 6.6zM187.7 19c-.7-.1-.7.6-.8 1.2-.1.7-.3 1.3-1.2 1.4-1 0-1.2-.7-1.3-1.5-.1-.5-.1-1-.1-1.5v-5.9c-.1-2.2-1.1-3.6-3.2-4.1-2.1-.5-4.3-.5-6.3.6-1 .5-1.7 1.3-1.7 2.6 0 1.1.6 1.6 1.6 1.6s1.6-.9 1.3-1.8c-.6-1.7.3-1.7 1.5-1.8h2.4c1.5.1 2.7.8 2.8 2.4.1 1.7-1.4 2-2.6 2.2-1.5.2-3 .2-4.5.5-2 .5-3.2 1.8-3.3 3.8-.1 2.1 1 3.5 3.1 4.1 2.8.7 5.1-.4 7.4-2.5.4 2 1.4 3 3.3 2.7 1.5-.2 2.3-1.1 2.4-2.6-.1-.6.1-1.4-.8-1.4zm-11.2 2.6c-1.5-.1-2.6-.9-2.8-2.4-.2-1.5.8-2.3 2.2-2.7 2.2-.7 4.6-.3 6.8-1.4.3 3.9-2.4 6.7-6.2 6.5zm-65.8-2.7c-.5-.1-.8.3-.8.8-.1.9-.2 1.9-1.4 1.8-1.3-.2-1.2-1.3-1.3-2.3-.1-2.1 0-4.3 0-6.4 0-2-.9-3.4-2.8-4-2.4-.8-4.7-.7-7 .5-1 .5-1.5 1.4-1.4 2.6.1 1.1.7 1.6 1.7 1.5.9-.1 1.5-.9 1.2-1.7-.7-1.8.4-1.8 1.6-1.8h2.2c1.7.1 3 1.2 2.9 2.5-.1 1.7-1.5 2-2.8 2.1-1.5.2-3.1.2-4.5.5-1.9.5-3.1 1.8-3.2 3.7-.1 2.9 2.2 4.7 5.4 4.4 2-.2 3.5-1.3 5-2.6.2.4.2.7.3.9.6 1.6 1.8 1.9 3.3 1.5 1.6-.4 2.1-1.5 2.1-3 .1-.4 0-.9-.5-1zm-11.2 2.7c-1.5-.1-2.6-.8-2.9-2.3-.3-1.6.8-2.5 2.2-2.9 2.2-.6 4.5-.3 6.8-1.4.3 4-2.4 6.7-6.1 6.6zm57.6-5.8c1.3.1 2.7 0 4 0h4.6c.5 0 1.1.1 1.2-.7.3-2.8-2.2-6.2-5.1-6.7-2.6-.4-4.8.2-6.3 2.4-1.9 2.6-2.1 5.5-.8 8.5 2 4.5 8.1 5.3 11.2 1.4.5-.6 1.4-1.6.7-2.2-1-.9-1.3.6-1.8 1.1-1.4 1.7-3.4 2.4-5.6 1.7-1.9-.6-3.1-1.9-3.5-3.9-.3-1.1 0-1.7 1.4-1.6zm-1.3-2.5c.4-2 2.2-3.5 4.5-3.5 2.5 0 4.2 1.3 4.7 3.5.2.9-.1 1.1-.8 1h-7.4c-.8 0-1.1-.1-1-1zm317.3 6.5c-1.5 1.8-3.4 2.1-5.5 1.6-1.8-.4-3.2-2.3-3.5-4.1-.2-1.1.1-1.6 1.3-1.5 1.4.1 2.8 0 4.2 0h4.6c.6 0 1.1 0 1.2-.9.1-3.4-2.8-6.6-6.2-6.6-5.2 0-8.3 5.5-6.1 10.8 1.9 4.4 7.9 5.5 11 1.9.6-.7 1.7-1.7.9-2.5-1.1-.9-1.4.8-1.9 1.3zm-8.8-6.5c.4-2 2.2-3.5 4.3-3.5 2.5-.1 4.3 1.2 4.8 3.3.2.8.2 1.3-.9 1.2-1.2-.1-2.4 0-3.6 0h-3.8c-.7 0-1-.2-.8-1zm39.6 2.5c1.5.1 2.9 0 4.4 0h4.6c.6 0 1-.1 1.1-.9.2-3-2.3-6.2-5.2-6.6-2.6-.3-4.8.3-6.3 2.5-1.8 2.6-2 5.4-.7 8.4 1.9 4.4 8 5.3 11 1.7.6-.7 1.7-1.7.7-2.5-.9-.7-1.3.7-1.8 1.3-1.4 1.6-3.5 2.3-5.6 1.6-1.7-.5-3.2-2.4-3.4-4.2-.2-.9 0-1.4 1.2-1.3zm-1-2.5c.4-2 2.1-3.5 4.3-3.5 2.5-.1 4.3 1.2 4.8 3.3.2.9.2 1.3-.9 1.2-1.2-.1-2.4 0-3.6 0h-3.8c-.7 0-1-.3-.8-1zm87.7 5.2c-1-.8-1.3.7-1.8 1.3-1.5 1.8-3.3 2.2-5.4 1.7-1.8-.4-3.2-2.1-3.6-4-.2-1.1 0-1.8 1.3-1.6 1.4.1 2.8 0 4.2 0h4.6c.7 0 1.1-.1 1.1-1 .1-3.5-3-6.6-6.5-6.5-5.1.2-8 5.6-5.8 10.9 1.9 4.5 8.1 5.4 11.2 1.6.5-.8 1.6-1.7.7-2.4zM580 13.3c.4-2 2.2-3.5 4.3-3.5 2.5-.1 4.3 1.3 4.8 3.4.2 1-.1 1.2-1 1.1-1.2-.1-2.4 0-3.7 0h-3.7c-.5 0-.9-.2-.7-1zm-33-4.9c-3.5-.5-6.5 1.9-7.1 5.6-.8 4.3 1.3 8.2 4.7 8.9 4.3 1 7.9-2.2 7.9-7.2 0-3.9-2.2-6.9-5.5-7.3zm.6 13c-2.1.7-4.3-.2-5.4-2.3-.9-1.8-1.1-3.6-.5-5.5.9-2.6 2.6-4 5.1-3.8 2 .2 3.9 2.3 4.2 4.7.1.4 0 .7 0 1.1-.1 2.8-1.4 5.2-3.4 5.8zM373.7 2.2c0 1.2-1 2.2-2.2 2.2-1.2 0-2.2-1-2.2-2.2s1-2.2 2.2-2.2c1.2 0 2.2 1 2.2 2.2zm-70.6 19.2c-.3 0-.6-.1-.9 0-1.6.3-1.9-.4-1.9-1.9.1-5 .1-10 0-15.1 0-.6.4-1.5-.7-1.5-1.4-.1-2.7 0-4 0-.5 0-.8.2-.8.8 0 .6.4.7.9.7.7 0 1.5.1 2.2 0 .7 0 1 .2 1 1V11c-1.5-1.6-2.7-2.7-4.6-2.6-3.2.1-5.8 2.9-6.1 6.9-.3 4 2 7.4 5.5 7.8 2.2.3 3.7-.8 5.3-2.6-.8 2.9 1 2.4 2.3 2.4h2c.5 0 1.1-.1 1.1-.7-.1-.9-.8-.8-1.3-.8zm-4.8-3.3c-.6 2.1-2.3 3.5-4.2 3.4-1.9 0-3.3-1.2-4-3.4-.7-2.1-.6-4.2.6-6.2 1.8-3 5.3-2.9 7.1.1.7 1.2.9 2.5.9 4.1-.2.6-.2 1.3-.4 2z"/></svg>			
		</div>
	  </div>
	  <div id="trigger-about" class="trigger"></div>
	</section>

	<section class="section--about-me">
	    <div id="about-c">
	        <div class="header">
	            <h2 class="main">About Me</h2></div>
	        <div class="text--about">
	            <p class="body">I am a web developer and tech enthusiast with a fascination for all things web. For the past four years, I have invested thousands of hours designing and coding professional looking
	            websites with amazing user experiences.<br><br>
	            My focus for the past 18 months has been primarily on web apps. I am using a React and Rails stack to create beautiful and engaging web applications.<br><br>
	            If you'd like to reach out to me, use my contact form at the bottom. I am based out of San Francisco.
	        </div>
	    </div>
	    <div id="trigger-skills" class="trigger"></div>	    
	</section>

	<section id="my-skills" class="section--my-skills">
	    <div class="header">
	        <h2 class="main">My Skills</h2></div>
	    <div id="tabs" class="tabs">
	        <nav class="tabs__nav">
	            <ul class="tabs-list cj">
	                <li class="tabs-list__item ibm">
	                    <svg class="ibm">
	                        <use xlink:href="images/sprites/svgsprite.svg#developer"></use>
	                    </svg> <span class="ibm">Developer</span></li>&nbsp;
	                <li class="tabs-list__item ibm">
	                    <svg class="ibm">
	                        <use xlink:href="images/sprites/svgsprite.svg#designer"></use>
	                    </svg> <span class="ibm">Designer</span></li>&nbsp;
	                <li class="tabs-list__item ibm">
	                    <!-- <svg class="ibm">
	                        <use xlink:href="images/sprites/svgsprite.svg#technologies"></use> -->
	                    </svg> <span class="ibm">My Stack</span></li>&nbsp;
	                <li class="tabs-list__item ibm">
	                    <svg class="ibm">
	                        <use xlink:href="images/sprites/svgsprite.svg#skills"></use>
	                    </svg> <span class="ibm">Skills</span></li>
	            </ul>
	        </nav>
	        <div class="tabs__content">
	            <div id="developer" class="container--skills">
	                <div class="row">
	                    <div class="ib ta-center">
	                        <div id="htmlPB" class="img--progress-bar"></div>
	                        <p class="tooltip--pb">Rob has been using HTML for over 6 years. He uses the latest HTML 5 techniques and has a ton of experience with XML technologies such as SVG.</p>
	                        <h3 class="title--pb">HTML</h3></div>&nbsp;
	                    <div class="ib ta-center">
	                        <div id="cssPB" class="img--progress-bar"></div>
	                        <p class="tooltip--pb">With 6 years of experience writing CSS, Rob uses the best and most efficient CSS techniques. He writes modular CSS based on Jonathan Snook's book <em>SMACSS</em> and uses PostCSS as his processor of choice.</p>
	                        <h3 class="title--pb">CSS</h3></div>&nbsp;
	                    <div class="ib ta-center">
	                        <div id="jsPB" class="img--progress-bar"></div>
	                        <p class="tooltip--pb">Javascript is Rob's favorite programming language. He has over 3 years of experience leveraging powerful Javascript libraries and frameworks alongside his own Javascript/jQuery code.</p>
	                        <h3 class="title--pb">Javascript</h3></div>
	                </div>
	                <div class="row two-thirds">
	                    <div class="ib ta-center">
	                        <div id="phpPB" class="img--progress-bar"></div>
	                        <p class="tooltip--pb">Rob uses PHP as his server side scripting language of choice. He has used it in everything from Wordpress development to communicating with API's like Braintree and Stripe.</p>
	                        <h3 class="title--pb">PHP</h3></div>&nbsp;
	                    <div class="ib ta-center">
	                        <div id="mysqlPB" class="img--progress-bar"></div>
	                        <p class="tooltip--pb">Rob writes MySql to query databases and store user submitted information. He has completed projects using a combination of PHP and MySql.</p>
	                        <h3 class="title--pb">MySQL</h3></div>
	                </div>
	            </div>
	            <div id="designer" class="container--skills">
	                <div class="row two-thirds">
	                    <div class="ib ta-center">
	                        <div id="uiPB" class="img--progress-bar"></div>
	                        <p class="tooltip--pb">Rob continually makes sure his web designs are nothing short of spectacular. He has spent thousands of hours studying the latest design patterns used by top tech companies.</p>
	                        <h3 class="title--pb">UI</h3></div>&nbsp;
	                    <div class="ib ta-center">
	                        <div id="uxPB" class="img--progress-bar"></div>
	                        <p class="tooltip--pb">Rob's designs focus on a user's experience with the website and the opinions the user forms toward the brand. He does significant research before he starts the design process.</p>
	                        <h3 class="title--pb">UX</h3></div>
	                </div>
	                <div class="row">
	                    <div class="ib ta-center">
	                        <div id="psPB" class="img--progress-bar"></div>
	                        <p class="tooltip--pb">Rob has years of experience working in Photoshop. He uses the image editing program like a professional, sometimes pulling off large manipulations to his photographs.</p>
	                        <h3 class="title--pb">Photoshop</h3></div>&nbsp;
	                    <div class="ib ta-center">
	                        <div id="illPB" class="img--progress-bar"></div>
	                        <p class="tooltip--pb">Rob has years of experience creating graphics in Adobe Illustrator. He has mastered some of the more advanced tools such as the pen tool, and will often create his own icons in the program.</p>
	                        <h3 class="title--pb">Illustrator</h3></div>&nbsp;
	                    <div class="ib ta-center">
	                        <div id="sketchPB" class="img--progress-bar"></div>
	                        <p class="tooltip--pb">About a year ago, Rob abandoned Photoshop for Sketch as the prototyping tool of his choice. Rob has mastered the program and is able to use it to prototype more complex website designs.</p>
	                        <h3 class="title--pb">Sketch</h3></div>
	                </div>
	            </div>
	            <div id="technologies" class="container--skills is-active">
	                <div class="row">
	                    <div class="ib ta-center">
	                        <div id="reactPB" class="img--progress-bar"></div>
	                        <p class="tooltip--pb">Rob uses React as his front end framework of choice. He is a HUGE React enthusiast, frequently attending React meetups and keeping up to date with latest in React through newsletters and podcasts.</p>
	                        <h3 class="title--pb">React</h3></div>&nbsp;
	                    <div class="ib ta-center">
	                        <div id="railsPB" class="img--progress-bar"></div>
	                        <p class="tooltip--pb">Rob uses Ruby on Rails as his preferred back end framework. He enjoys the incredible speed of developement that Rails offers, as well as the intuitive design of the framework and the beautiful Ruby syntax</p>
	                        <h3 class="title--pb">Ruby on Rails</h3></div>&nbsp;
	                    <div class="ib ta-center">
	                        <div id="gitPB" class="img--progress-bar"></div>
	                        <p class="tooltip--pb">Rob has experience using Git, the popular version control system. Alongside Git, Rob uses other command line tools for his projects such as Bower and NPM.</p>
	                        <h3 class="title--pb">Git</h3></div>
	                </div>
	            </div>
	            <div id="skills" class="container--skills">
	                <div class="row">
	                    <div class="ib ta-center">
	                        <div id="imPB" class="img--progress-bar"></div>
	                        <p class="tooltip--pb">Rob is very experienced with many of the latest internet marketing techniques. In November 2015, he delivered a speech to AT&T Toastmaster about the latest growth hacking techniques being employed.</p>
	                        <h3 class="title--pb">Internet Marketing</h3></div>&nbsp;
	                    <div class="ib ta-center">
	                        <div id="seoPB" class="img--progress-bar"></div>
	                        <p class="tooltip--pb">Rob stays up to date with the latest search engine optimization techniques. He is a huge fan of Google's Hummingbird update, which allows him to focus on the content in his websites.</p>
	                        <h3 class="title--pb">SEO</h3></div>&nbsp;
	                    <div class="ib ta-center">
	                        <div id="analyticsPB" class="img--progress-bar"></div>
	                        <p class="tooltip--pb">Rob uses Google Tag Manager and Google Analytics to track activity that takes place on his web pages. He is very experienced using the platform and knows how to appropriately read data.</p>
	                        <h3 class="title--pb">Analytics</h3></div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div id="trigger-projects" class="trigger"></div>	    
	</section>

	<section class="section--my-projects">
	  <div class="header" style="margin-bottom: 3.5rem">
	      <h2 class="main">Projects</h2>
	      <p class="sub">Here are some projects that I did using a combination of React, Redux, Rails, Javascript, and jQuery. The code follows best design patterns and has been held to strict standards and peer review</p>
	  </div>

	  <div class="project-container">
	  	<div class="project-video-wrapper">
	  	  <a href="http://pokerwithchucknorris.com/?utm_source=site" rel="external">
	  	      <video id="video" class="project-video">
	  	        <source data-src="./images/poker_with_chuck_norris.webm" type="video/webm">
	  	      Your browser does not support the video tag.
	  	      </video> 
	  	      <!-- <img src="./images/poker_with_chuck_norris_screen.png" alt=""> -->
	  	      <svg class="project-img-link img--link">
	  	          <use xlink:href="images/sprites/svgsprite.svg#link"></use>
	  	      </svg>
	  	  </a>
	  	</div>
	    <div class="project-text">
	    	<div id="poker-logo" class="project-logo"></div>
	    	<!-- <h3 class="project-title">Poker with Chuck Norris</h3> -->
	    	<p class="project-description">Poker with Chuck Norris is a Texas Holdem game developed with React. I built an advanced AI that leverages calls to a poker odds API. The game features Facebook login and rich social media functionality</p>
	    </div>
	  </div>

	  <div class="project-container pjc-right">
	    <div class="project-text">
	    	<img class="project-logo" src="./images/svg/stellar_pixels_logo.svg">
	    	<p class="project-description">Stellar Pixels is a full stack stock photography web application that is built using React/Redux and Rails. The site has a rich database of photos that it gets from asynchronous API calls. Currently, unprecendented search functionality is being implemented using tracking.js.</p>
	    </div>      
	  	<div class="project-video-wrapper">
	  	  <a href="http://stellarpixels.co/?utm_source=site" rel="external">
	  	      <video id="video2" class="project-video">
	  	        <source data-src="./images/stellar_pixels.webm" type="video/webm">
	  	      Your browser does not support the video tag.
	  	      </video>
	  	      <!-- <img src="./images/stellar_pixels_screen.png" alt="">     -->
	  	      <svg class="project-img-link img--link">
	  	          <use xlink:href="images/sprites/svgsprite.svg#link"></use>
	  	      </svg>
	  	  </a>
	  	</div>
	  </div>   

	  <div class="project-container">
	  	<div class="project-video-wrapper">
	  	  <a href="http://tabsoverflow.com/?utm_source=site" rel="external">
	  	      <video id="video3" class="project-video">
	  	        <source data-src="./images/tabs_overflow.webm" type="video/webm">
	  	      Your browser does not support the video tag.
	  	      </video>    
	  	      <!-- <img src="./images/tabs_overflow_screen.png" alt=""> 	  	       -->
	  	      <svg class="project-img-link img--link">
	  	          <use xlink:href="images/sprites/svgsprite.svg#link"></use>
	  	      </svg>
	  	  </a>
	  	</div>
	    <div class="project-text">
	    	<img class="project-logo" src="./images/svg/tabs_overflow_logo.svg">
	    	<p class="project-description">Tabs Overflow is a Chrome extension that helps users effectively manage their tabs by storing less recently used tabs into an "overflow tab." The project receives asynchronous calls from the Google Chrome API in order to get tab data back.</p>
	    </div>
	  </div>

	  <div id="trigger-work" class="trigger"></div>
	</section>

	<section class="section--my-work section--my-work-developer">
	    <div class="header" style="margin-bottom: 3.5rem">
	        <h2 class="main">Professional Work</h2>
	        <p class="sub">Here are some professional examples of work that I did. These custom web designs followed the highest coding standards and excel at engaing users and boosting brand trust.</p>
	    </div>
	    <div class="container--works">
	        <div class="row cj">
	            <div class="container--work">
	                <a href="./work/stocks_earning/" rel="external"><img class="img--work lazyload" data-sizes="auto" data-src="images/bitmap/srcset-assets/ac.jpg" data-srcset="images/bitmap/srcset-assets/stocks-earning-sm.jpg 350w, images/bitmap/srcset-assets/stocks-earning-md.jpg 425w, images/bitmap/srcset-assets/stocks-earning-lg.jpg 500w, images/bitmap/srcset-assets/stocks-earning-sm@2x.jpg 700w, images/bitmap/srcset-assets/stocks-earning-md@2x.jpg 850w, images/bitmap/srcset-assets/stocks-earning-lg@2x.jpg 1000w">
	                    <svg class="img--link">
	                        <use xlink:href="images/sprites/svgsprite.svg#link"></use>
	                    </svg>
	                </a>
	            </div>&nbsp;
	            <div class="container--work">
	                <a href="./work/boulevard_medical/" rel="external"><img class="img--work lazyload" data-sizes="auto" data-src="images/bitmap/srcset-assets/boulevard.jpg" data-srcset="images/bitmap/srcset-assets/boulevard-sm.jpg 350w, images/bitmap/srcset-assets/boulevard-md.jpg 425w, images/bitmap/srcset-assets/boulevard-lg.jpg 500w, images/bitmap/srcset-assets/boulevard-sm@2x.jpg 700w, images/bitmap/srcset-assets/boulevard-md@2x.jpg 850w, images/bitmap/srcset-assets/boulevard-lg@2x.jpg 1000w">
	                    <svg class="img--link">
	                        <use xlink:href="images/sprites/svgsprite.svg#link"></use>
	                    </svg>
	                </a>
	            </div>&nbsp;
	            <div class="container--work">
	                <a href="./work/affiliated_endo/" rel="external"><img class="img--work lazyload" data-sizes="auto" data-src="images/bitmap/srcset-assets/affiliated-endo.jpg" data-srcset="images/bitmap/srcset-assets/affiliated-endo-sm.jpg 350w, images/bitmap/srcset-assets/affiliated-endo-md.jpg 425w, images/bitmap/srcset-assets/affiliated-endo-lg.jpg 500w, images/bitmap/srcset-assets/affiliated-endo-sm@2x.jpg 700w, images/bitmap/srcset-assets/affiliated-endo-md@2x.jpg 850w, images/bitmap/srcset-assets/affiliated-endo-lg@2x.jpg 1000w">
	                    <svg class="img--link">
	                        <use xlink:href="images/sprites/svgsprite.svg#link"></use>
	                    </svg>
	                </a>
	            </div>
	        </div>
	        <div class="row cj auto two-thirds">
	            <div class="container--work">
	                <a href="./work/progressive_care/" rel="external"><img class="img--work lazyload" data-sizes="auto" data-src="images/bitmap/srcset-assets/progressive-care.jpg" data-srcset="images/bitmap/srcset-assets/progressive-care-sm.jpg 350w, images/bitmap/srcset-assets/progressive-care-md.jpg 425w, images/bitmap/srcset-assets/progressive-care-lg.jpg 500w, images/bitmap/srcset-assets/progressive-care-sm@2x.jpg 700w, images/bitmap/srcset-assets/progressive-care-md@2x.jpg 850w, images/bitmap/srcset-assets/progressive-care-lg@2x.jpg 1000w">
	                    <svg class="img--link">
	                        <use xlink:href="images/sprites/svgsprite.svg#link"></use>
	                    </svg>
	                </a>
	            </div>&nbsp;
	            <div class="container--work">
	                <a href="./work/somerset-peds/" rel="external"><img class="img--work lazyload" data-sizes="auto" data-src="images/bitmap/srcset-assets/somerset-peds.jpg" data-srcset="images/bitmap/srcset-assets/somerset-peds-sm.jpg 350w, images/bitmap/srcset-assets/somerset-peds-md.jpg 425w, images/bitmap/srcset-assets/somerset-peds-lg.jpg 500w, images/bitmap/srcset-assets/somerset-peds-sm@2x.jpg 700w, images/bitmap/srcset-assets/somerset-peds-md@2x.jpg 850w, images/bitmap/srcset-assets/somerset-peds-lg@2x.jpg 1000w">
	                    <svg class="img--link">
	                        <use xlink:href="images/sprites/svgsprite.svg#link"></use>
	                    </svg>
	                </a>
	            </div>
	        </div>
	    </div>
	    <div id="trigger-contact"></div>
	</section>        

<?php include 'include/footer.html' ?>
<!-- build:section optional layout.footer -->
<!-- /build -->     
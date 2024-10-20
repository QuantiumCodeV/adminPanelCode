<!DOCTYPE html>

<!-- saved from url=(0040){{ route("friends") }} -->
<html style="">
@include('fonts')

<head>
  @include('fonts')
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
  <meta content="width=device-width" name="viewport" />
  <title>Friends | ListenUp!</title>
  <meta content="3" name="next-head-count" />
  <link as="style" href="{{ asset("/assets/b08c6edf6d5dd570.css") }}" rel="preload" />
  <link data-n-g="" href="{{ asset("/assets/b08c6edf6d5dd570.css") }}" rel="stylesheet" />
  <noscript data-n-css=""></noscript>









  <style type="text/css">
    :where(html[dir="ltr"]),
    :where([data-sonner-toaster][dir="ltr"]) {
      --toast-icon-margin-start: -3px;
      --toast-icon-margin-end: 4px;
      --toast-svg-margin-start: -1px;
      --toast-svg-margin-end: 0px;
      --toast-button-margin-start: auto;
      --toast-button-margin-end: 0;
      --toast-close-button-start: 0;
      --toast-close-button-end: unset;
      --toast-close-button-transform: translate(-35%, -35%);
    }

    :where(html[dir="rtl"]),
    :where([data-sonner-toaster][dir="rtl"]) {
      --toast-icon-margin-start: 4px;
      --toast-icon-margin-end: -3px;
      --toast-svg-margin-start: 0px;
      --toast-svg-margin-end: -1px;
      --toast-button-margin-start: 0;
      --toast-button-margin-end: auto;
      --toast-close-button-start: unset;
      --toast-close-button-end: 0;
      --toast-close-button-transform: translate(35%, -35%);
    }

    :where([data-sonner-toaster]) {
      position: fixed;
      width: var(--width);
      font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont,
        Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif,
        Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
      --gray1: hsl(0, 0%, 99%);
      --gray2: hsl(0, 0%, 97.3%);
      --gray3: hsl(0, 0%, 95.1%);
      --gray4: hsl(0, 0%, 93%);
      --gray5: hsl(0, 0%, 90.9%);
      --gray6: hsl(0, 0%, 88.7%);
      --gray7: hsl(0, 0%, 85.8%);
      --gray8: hsl(0, 0%, 78%);
      --gray9: hsl(0, 0%, 56.1%);
      --gray10: hsl(0, 0%, 52.3%);
      --gray11: hsl(0, 0%, 43.5%);
      --gray12: hsl(0, 0%, 9%);
      --border-radius: 8px;
      box-sizing: border-box;
      padding: 0;
      margin: 0;
      list-style: none;
      outline: none;
      z-index: 999999999;
    }

    :where([data-sonner-toaster][data-x-position="right"]) {
      right: max(var(--offset), env(safe-area-inset-right));
    }

    :where([data-sonner-toaster][data-x-position="left"]) {
      left: max(var(--offset), env(safe-area-inset-left));
    }

    :where([data-sonner-toaster][data-x-position="center"]) {
      left: 50%;
      transform: translate(-50%);
    }

    :where([data-sonner-toaster][data-y-position="top"]) {
      top: max(var(--offset), env(safe-area-inset-top));
    }

    :where([data-sonner-toaster][data-y-position="bottom"]) {
      bottom: max(var(--offset), env(safe-area-inset-bottom));
    }

    :where([data-sonner-toast]) {
      --y: translateY(100%);
      --lift-amount: calc(var(--lift) * var(--gap));
      z-index: var(--z-index);
      position: absolute;
      opacity: 0;
      transform: var(--y);
      filter: blur(0);
      touch-action: none;
      transition: transform 0.4s, opacity 0.4s, height 0.4s, box-shadow 0.2s;
      box-sizing: border-box;
      outline: none;
      overflow-wrap: anywhere;
    }

    :where([data-sonner-toast][data-styled="true"]) {
      padding: 16px;
      background: var(--normal-bg);
      border: 1px solid var(--normal-border);
      color: var(--normal-text);
      border-radius: var(--border-radius);
      box-shadow: 0 4px 12px #0000001a;
      width: var(--width);
      font-size: 13px;
      display: flex;
      align-items: center;
      gap: 6px;
    }

    :where([data-sonner-toast]:focus-visible) {
      box-shadow: 0 4px 12px #0000001a, 0 0 0 2px #0003;
    }

    :where([data-sonner-toast][data-y-position="top"]) {
      top: 0;
      --y: translateY(-100%);
      --lift: 1;
      --lift-amount: calc(1 * var(--gap));
    }

    :where([data-sonner-toast][data-y-position="bottom"]) {
      bottom: 0;
      --y: translateY(100%);
      --lift: -1;
      --lift-amount: calc(var(--lift) * var(--gap));
    }

    :where([data-sonner-toast]) :where([data-description]) {
      font-weight: 400;
      line-height: 1.4;
      color: inherit;
    }

    :where([data-sonner-toast]) :where([data-title]) {
      font-weight: 500;
      line-height: 1.5;
      color: inherit;
    }

    :where([data-sonner-toast]) :where([data-icon]) {
      display: flex;
      height: 16px;
      width: 16px;
      position: relative;
      justify-content: flex-start;
      align-items: center;
      flex-shrink: 0;
      margin-left: var(--toast-icon-margin-start);
      margin-right: var(--toast-icon-margin-end);
    }

    :where([data-sonner-toast][data-promise="true"]) :where([data-icon])>svg {
      opacity: 0;
      transform: scale(0.8);
      transform-origin: center;
      animation: sonner-fade-in 0.3s ease forwards;
    }

    :where([data-sonner-toast]) :where([data-icon])>* {
      flex-shrink: 0;
    }

    :where([data-sonner-toast]) :where([data-icon]) svg {
      margin-left: var(--toast-svg-margin-start);
      margin-right: var(--toast-svg-margin-end);
    }

    :where([data-sonner-toast]) :where([data-content]) {
      display: flex;
      flex-direction: column;
      gap: 2px;
    }

    [data-sonner-toast][data-styled="true"] [data-button] {
      border-radius: 4px;
      padding-left: 8px;
      padding-right: 8px;
      height: 24px;
      font-size: 12px;
      color: var(--normal-bg);
      background: var(--normal-text);
      margin-left: var(--toast-button-margin-start);
      margin-right: var(--toast-button-margin-end);
      border: none;
      cursor: pointer;
      outline: none;
      display: flex;
      align-items: center;
      flex-shrink: 0;
      transition: opacity 0.4s, box-shadow 0.2s;
    }

    :where([data-sonner-toast]) :where([data-button]):focus-visible {
      box-shadow: 0 0 0 2px #0006;
    }

    :where([data-sonner-toast]) :where([data-button]):first-of-type {
      margin-left: var(--toast-button-margin-start);
      margin-right: var(--toast-button-margin-end);
    }

    :where([data-sonner-toast]) :where([data-cancel]) {
      color: var(--normal-text);
      background: rgba(0, 0, 0, 0.08);
    }

    :where([data-sonner-toast][data-theme="dark"]) :where([data-cancel]) {
      background: rgba(255, 255, 255, 0.3);
    }

    :where([data-sonner-toast]) :where([data-close-button]) {
      position: absolute;
      left: var(--toast-close-button-start);
      right: var(--toast-close-button-end);
      top: 0;
      height: 20px;
      width: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 0;
      background: var(--gray1);
      color: var(--gray12);
      border: 1px solid var(--gray4);
      transform: var(--toast-close-button-transform);
      border-radius: 50%;
      cursor: pointer;
      z-index: 1;
      transition: opacity 0.1s, background 0.2s, border-color 0.2s;
    }

    :where([data-sonner-toast]) :where([data-close-button]):focus-visible {
      box-shadow: 0 4px 12px #0000001a, 0 0 0 2px #0003;
    }

    :where([data-sonner-toast]) :where([data-disabled="true"]) {
      cursor: not-allowed;
    }

    :where([data-sonner-toast]):hover :where([data-close-button]):hover {
      background: var(--gray2);
      border-color: var(--gray5);
    }

    :where([data-sonner-toast][data-swiping="true"]):before {
      content: "";
      position: absolute;
      left: 0;
      right: 0;
      height: 100%;
      z-index: -1;
    }

    :where([data-sonner-toast][data-y-position="top"][data-swiping="true"]):before {
      bottom: 50%;
      transform: scaleY(3) translateY(50%);
    }

    :where([data-sonner-toast][data-y-position="bottom"][data-swiping="true"]):before {
      top: 50%;
      transform: scaleY(3) translateY(-50%);
    }

    :where([data-sonner-toast][data-swiping="false"][data-removed="true"]):before {
      content: "";
      position: absolute;
      inset: 0;
      transform: scaleY(2);
    }

    :where([data-sonner-toast]):after {
      content: "";
      position: absolute;
      left: 0;
      height: calc(var(--gap) + 1px);
      bottom: 100%;
      width: 100%;
    }

    :where([data-sonner-toast][data-mounted="true"]) {
      --y: translateY(0);
      opacity: 1;
    }

    :where([data-sonner-toast][data-expanded="false"][data-front="false"]) {
      --scale: var(--toasts-before) * 0.05 + 1;
      --y: translateY(calc(var(--lift-amount) * var(--toasts-before))) scale(calc(-1 * var(--scale)));
      height: var(--front-toast-height);
    }

    :where([data-sonner-toast])>* {
      transition: opacity 0.4s;
    }

    :where([data-sonner-toast][data-expanded="false"][data-front="false"][data-styled="true"])>* {
      opacity: 0;
    }

    :where([data-sonner-toast][data-visible="false"]) {
      opacity: 0;
      pointer-events: none;
    }

    :where([data-sonner-toast][data-mounted="true"][data-expanded="true"]) {
      --y: translateY(calc(var(--lift) * var(--offset)));
      height: var(--initial-height);
    }

    :where([data-sonner-toast][data-removed="true"][data-front="true"][data-swipe-out="false"]) {
      --y: translateY(calc(var(--lift) * -100%));
      opacity: 0;
    }

    :where([data-sonner-toast][data-removed="true"][data-front="false"][data-swipe-out="false"][data-expanded="true"]) {
      --y: translateY(calc(var(--lift) * var(--offset) + var(--lift) * -100%));
      opacity: 0;
    }

    :where([data-sonner-toast][data-removed="true"][data-front="false"][data-swipe-out="false"][data-expanded="false"]) {
      --y: translateY(40%);
      opacity: 0;
      transition: transform 0.5s, opacity 0.2s;
    }

    :where([data-sonner-toast][data-removed="true"][data-front="false"]):before {
      height: calc(var(--initial-height) + 20%);
    }

    [data-sonner-toast][data-swiping="true"] {
      transform: var(--y) translateY(var(--swipe-amount, 0px));
      transition: none;
    }

    [data-sonner-toast][data-swipe-out="true"][data-y-position="bottom"],
    [data-sonner-toast][data-swipe-out="true"][data-y-position="top"] {
      animation: swipe-out 0.2s ease-out forwards;
    }

    @keyframes swipe-out {
      0% {
        transform: translateY(calc(var(--lift) * var(--offset) + var(--swipe-amount)));
        opacity: 1;
      }

      to {
        transform: translateY(calc(var(--lift) * var(--offset) + var(--swipe-amount) + var(--lift) * -100%));
        opacity: 0;
      }
    }

    @media (max-width: 600px) {
      [data-sonner-toaster] {
        position: fixed;
        --mobile-offset: 16px;
        right: var(--mobile-offset);
        left: var(--mobile-offset);
        width: 100%;
      }

      [data-sonner-toaster] [data-sonner-toast] {
        left: 0;
        right: 0;
        width: calc(100% - var(--mobile-offset) * 2);
      }

      [data-sonner-toaster][data-x-position="left"] {
        left: var(--mobile-offset);
      }

      [data-sonner-toaster][data-y-position="bottom"] {
        bottom: 20px;
      }

      [data-sonner-toaster][data-y-position="top"] {
        top: 20px;
      }

      [data-sonner-toaster][data-x-position="center"] {
        left: var(--mobile-offset);
        right: var(--mobile-offset);
        transform: none;
      }
    }

    [data-sonner-toaster][data-theme="light"] {
      --normal-bg: #fff;
      --normal-border: var(--gray4);
      --normal-text: var(--gray12);
      --success-bg: hsl(143, 85%, 96%);
      --success-border: hsl(145, 92%, 91%);
      --success-text: hsl(140, 100%, 27%);
      --info-bg: hsl(208, 100%, 97%);
      --info-border: hsl(221, 91%, 91%);
      --info-text: hsl(210, 92%, 45%);
      --warning-bg: hsl(49, 100%, 97%);
      --warning-border: hsl(49, 91%, 91%);
      --warning-text: hsl(31, 92%, 45%);
      --error-bg: hsl(359, 100%, 97%);
      --error-border: hsl(359, 100%, 94%);
      --error-text: hsl(360, 100%, 45%);
    }

    [data-sonner-toaster][data-theme="light"] [data-sonner-toast][data-invert="true"] {
      --normal-bg: #000;
      --normal-border: hsl(0, 0%, 20%);
      --normal-text: var(--gray1);
    }

    [data-sonner-toaster][data-theme="dark"] [data-sonner-toast][data-invert="true"] {
      --normal-bg: #fff;
      --normal-border: var(--gray3);
      --normal-text: var(--gray12);
    }

    [data-sonner-toaster][data-theme="dark"] {
      --normal-bg: #000;
      --normal-border: hsl(0, 0%, 20%);
      --normal-text: var(--gray1);
      --success-bg: hsl(150, 100%, 6%);
      --success-border: hsl(147, 100%, 12%);
      --success-text: hsl(150, 86%, 65%);
      --info-bg: hsl(215, 100%, 6%);
      --info-border: hsl(223, 100%, 12%);
      --info-text: hsl(216, 87%, 65%);
      --warning-bg: hsl(64, 100%, 6%);
      --warning-border: hsl(60, 100%, 12%);
      --warning-text: hsl(46, 87%, 65%);
      --error-bg: hsl(358, 76%, 10%);
      --error-border: hsl(357, 89%, 16%);
      --error-text: hsl(358, 100%, 81%);
    }

    [data-rich-colors="true"][data-sonner-toast][data-type="success"],
    [data-rich-colors="true"][data-sonner-toast][data-type="success"] [data-close-button] {
      background: var(--success-bg);
      border-color: var(--success-border);
      color: var(--success-text);
    }

    [data-rich-colors="true"][data-sonner-toast][data-type="info"],
    [data-rich-colors="true"][data-sonner-toast][data-type="info"] [data-close-button] {
      background: var(--info-bg);
      border-color: var(--info-border);
      color: var(--info-text);
    }

    [data-rich-colors="true"][data-sonner-toast][data-type="warning"],
    [data-rich-colors="true"][data-sonner-toast][data-type="warning"] [data-close-button] {
      background: var(--warning-bg);
      border-color: var(--warning-border);
      color: var(--warning-text);
    }

    [data-rich-colors="true"][data-sonner-toast][data-type="error"],
    [data-rich-colors="true"][data-sonner-toast][data-type="error"] [data-close-button] {
      background: var(--error-bg);
      border-color: var(--error-border);
      color: var(--error-text);
    }

    .sonner-loading-wrapper {
      --size: 16px;
      height: var(--size);
      width: var(--size);
      position: absolute;
      inset: 0;
      z-index: 10;
    }

    .sonner-loading-wrapper[data-visible="false"] {
      transform-origin: center;
      animation: sonner-fade-out 0.2s ease forwards;
    }

    .sonner-spinner {
      position: relative;
      top: 50%;
      left: 50%;
      height: var(--size);
      width: var(--size);
    }

    .sonner-loading-bar {
      animation: sonner-spin 1.2s linear infinite;
      background: var(--gray11);
      border-radius: 6px;
      height: 8%;
      left: -10%;
      position: absolute;
      top: -3.9%;
      width: 24%;
    }

    .sonner-loading-bar:nth-child(1) {
      animation-delay: -1.2s;
      transform: rotate(0.0001deg) translate(146%);
    }

    .sonner-loading-bar:nth-child(2) {
      animation-delay: -1.1s;
      transform: rotate(30deg) translate(146%);
    }

    .sonner-loading-bar:nth-child(3) {
      animation-delay: -1s;
      transform: rotate(60deg) translate(146%);
    }

    .sonner-loading-bar:nth-child(4) {
      animation-delay: -0.9s;
      transform: rotate(90deg) translate(146%);
    }

    .sonner-loading-bar:nth-child(5) {
      animation-delay: -0.8s;
      transform: rotate(120deg) translate(146%);
    }

    .sonner-loading-bar:nth-child(6) {
      animation-delay: -0.7s;
      transform: rotate(150deg) translate(146%);
    }

    .sonner-loading-bar:nth-child(7) {
      animation-delay: -0.6s;
      transform: rotate(180deg) translate(146%);
    }

    .sonner-loading-bar:nth-child(8) {
      animation-delay: -0.5s;
      transform: rotate(210deg) translate(146%);
    }

    .sonner-loading-bar:nth-child(9) {
      animation-delay: -0.4s;
      transform: rotate(240deg) translate(146%);
    }

    .sonner-loading-bar:nth-child(10) {
      animation-delay: -0.3s;
      transform: rotate(270deg) translate(146%);
    }

    .sonner-loading-bar:nth-child(11) {
      animation-delay: -0.2s;
      transform: rotate(300deg) translate(146%);
    }

    .sonner-loading-bar:nth-child(12) {
      animation-delay: -0.1s;
      transform: rotate(330deg) translate(146%);
    }

    @keyframes sonner-fade-in {
      0% {
        opacity: 0;
        transform: scale(0.8);
      }

      to {
        opacity: 1;
        transform: scale(1);
      }
    }

    @keyframes sonner-fade-out {
      0% {
        opacity: 1;
        transform: scale(1);
      }

      to {
        opacity: 0;
        transform: scale(0.8);
      }
    }

    @keyframes sonner-spin {
      0% {
        opacity: 1;
      }

      to {
        opacity: 0.15;
      }
    }

    @media (prefers-reduced-motion) {

      [data-sonner-toast],
      [data-sonner-toast]>*,
      .sonner-loading-bar {
        transition: none !important;
        animation: none !important;
      }
    }

    .sonner-loader {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      transform-origin: center;
      transition: opacity 0.2s, transform 0.2s;
    }

    .sonner-loader[data-visible="false"] {
      opacity: 0;
      transform: scale(0.8) translate(-50%, -50%);
    }
  </style>




  <link as="script" href="./friends_files/captures-5712dfcc4d1f1682.js" rel="prefetch" />
  <link as="script" href="./friends_files/insights-4b936e8ed1083550.js" rel="prefetch" />
  <link as="script" href="./friends_files/899-fb0e87850e1e8a2d.js" rel="prefetch" />
  <link as="script" href="./friends_files/analytics-f7aa99a2929628e8.js" rel="prefetch" />
  <link as="script" href="./friends_files/users-b6268a0be19d5f0c.js" rel="prefetch" />
</head>

<body>

  <div id="__next">
    <div>
      <div>
        <div class="bg-primary-100 bg-dot-grid-pattern bg-repeat bg-pattern w-screen h-screen">
          <section class="flex justify-between pr-4 bg-neutral-50 border-neutral-400 items-center h-[4rem] border-b-1"
            id="app-navbar">
            <section class="flex items-center flex-grow basis-0 justify-start">
              <button data-state="closed">
                <div
                  class="w-52 flex flex-col justify-start items-start pl-4 hover:cursor-cool-clickable disabled:cursor-cool-normal">
                  <img alt="ListenUp Navbar Logo" data-nimg="1" decoding="async" height="25" loading="lazy"
                    src="{{ asset("assets/logo.png") }}" style="color: transparent" width="120" />
                  <section
                    class="rounded-full bg-primary-400 border-1 border-primary-600 px-1.5 py-1 flex items-center justify-center gap-1">
                    <p class="text-xs text-primary-600">
                      <strong>300 credits left</strong>
                    </p>
                    <p class="text-xs text-primary-600">|</p>
                    <p class="text-xs text-primary-600">
                      <strong>14 days left </strong>
                    </p>
                  </section>
                </div>
              </button>
            </section>
            <section class="flex items-center justify-center">
              <div class="relative h-fit select-none w-full" data-orientation="horizontal" dir="ltr">
                <div aria-orientation="horizontal" class="rounded flex flex-row w-full justify-evenly gap-2"
                  data-orientation="horizontal" role="tablist" style="outline: none" tabindex="0">
                  <a aria-controls="radix-:r50:-content-home" aria-selected="false"
                    class="px-3 py-2 rounded border-opacity-0 flex items-center z-10 hover:bg-neutral-100 hover:transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal w-fit justify-center"
                    data-orientation="horizontal" data-radix-collection-item="" data-state="inactive"
                    href="{{ route("home") }}" id="radix-:r50:-trigger-home" role="tab" tabindex="-1" type="button">
                    <div class="flex items-center justify-center gap-2 py-1">
                      <svg class="h-6 w-6" data-name="Layer 3" style="max-width: 50vw; max-height: 50vh"
                        viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0h24v24H0Z" fill="none"></path>
                        <path class="stroke-1.5 stroke-neutral-700 stroke-neutral-700"
                          d="M15.3 15.918H8.564M16 21H8a5 5 0 0 1-5-5v-4.8a5 5 0 0 1 1.877-3.904l4-3.2a5 5 0 0 1 6.247 0l4 3.2A5 5 0 0 1 21 11.2V16a5 5 0 0 1-5 5Z"
                          fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                      <h5 class="font-bold">Home</h5>
                    </div>
                  </a><a aria-controls="radix-:r50:-content-captures" aria-selected="false"
                    class="px-3 py-2 rounded border-opacity-0 flex items-center z-10 hover:bg-neutral-100 hover:transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal w-fit justify-center"
                    data-orientation="horizontal" data-radix-collection-item="" data-state="inactive"
                    href="{{ route("captures") }}" id="radix-:r50:-trigger-captures" role="tab" tabindex="-1"
                    type="button">
                    <div class="flex items-center justify-center gap-2 py-1">
                      <svg class="h-6 w-6" fill="none" style="max-width: 50vw; max-height: 50vh" viewbox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path class="stroke-1.5 stroke-neutral-700"
                          d="M4 8V6a2 2 0 0 1 2-2h2M4 16v2a2 2 0 0 0 2 2h2m8-16h2a2 2 0 0 1 2 2v2m-4 12h2a2 2 0 0 0 2-2v-2M9 12a3 3 0 1 0 6 0 3 3 0 0 0-6 0Z"
                          stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                      <h5 class="font-bold">Inbox</h5>
                    </div>
                  </a><a aria-controls="radix-:r50:-content-insights" aria-selected="false"
                    class="px-3 py-2 rounded border-opacity-0 flex items-center z-10 hover:bg-neutral-100 hover:transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal w-fit justify-center"
                    data-orientation="horizontal" data-radix-collection-item="" data-state="inactive"
                    href="{{ route("meetings") }}" id="radix-:r50:-trigger-insights" role="tab" tabindex="-1"
                    type="button">
                    <div class="flex items-center justify-center gap-2 py-1">
                      <svg class="h-6 w-6" style="max-width: 50vw; max-height: 50vh" viewbox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path class="stroke-1.5 stroke-neutral-700" d="M12.967 3 4.75 14H12l-.967 7 8.217-11H12Z"
                          fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M0 0h24v24H0Z" fill="none"></path>
                      </svg>
                      <h5 class="font-bold">Meetings</h5>
                    </div>
                  </a><a aria-controls="radix-:r50:-content-analytics" aria-selected="false"
                    class="px-3 py-2 rounded border-opacity-0 flex items-center z-10 hover:bg-neutral-100 hover:transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal w-fit justify-center"
                    data-orientation="horizontal" data-radix-collection-item="" data-state="inactive"
                    href="{{ route("analytics") }}" id="radix-:r50:-trigger-analytics" role="tab" tabindex="-1"
                    type="button">
                    <div class="flex items-center justify-center gap-2 py-1">
                      <svg class="h-6 w-6" style="max-width: 50vw; max-height: 50vh" viewbox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path class="stroke-1.5 stroke-neutral-700"
                          d="M16.5 3.5h3A1.5 1.5 0 0 1 21 5v14a1.5 1.5 0 0 1-1.5 1.5H15h0V5a1.5 1.5 0 0 1 1.5-1.5ZM15 20.5H9v-10A1.5 1.5 0 0 1 10.5 9H15M4.5 15H9v5.5h0-4.5A1.5 1.5 0 0 1 3 19v-2.5A1.5 1.5 0 0 1 4.5 15Z"
                          fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M24 24H0V0h24Z" fill="none"></path>
                      </svg>
                      <h5 class="font-bold">Analytics</h5>
                    </div>
                  </a><a aria-controls="radix-:r50:-content-users" aria-selected="true"
                    class="px-3 py-2 rounded border-opacity-0 flex items-center z-10 hover:cursor-cool-clickable disabled:cursor-cool-normal w-fit justify-center"
                    data-orientation="horizontal" data-radix-collection-item="" data-state="active"
                    href="{{ route("friends") }}" id="radix-:r50:-trigger-users" role="tab" tabindex="-1" type="button">
                    <div class="flex items-center justify-center gap-2 py-1">
                      <svg class="h-6 w-6 stroke-1.5" style="max-width: 50vw; max-height: 50vh" viewbox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <g class="stroke-neutral-700" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path
                            d="M20.793 9.524a2.023 2.023 0 1 1-2.861 2.86 2.023 2.023 0 0 1 2.86-2.86M14.203 5.912a3.115 3.115 0 1 1-4.406 4.406 3.115 3.115 0 0 1 4.406-4.406M6.068 9.524a2.023 2.023 0 1 1-2.86 2.86 2.023 2.023 0 0 1 2.86-2.86M23 19v-1.096a2.5 2.5 0 0 0-2.5-2.5h-.801M1 19v-1.096a2.5 2.5 0 0 1 2.5-2.5h.801M17.339 19v-1.601a3.5 3.5 0 0 0-3.5-3.5H10.16a3.5 3.5 0 0 0-3.5 3.5V19">
                          </path>
                        </g>
                        <path d="M0 0h24v24H0Z" fill="none"></path>
                      </svg>
                      <h5 class="font-bold">Friends</h5>
                    </div>
                  </a>
                </div>
                <div class="absolute top-0 left-0 rounded bg-neutral-200 border-1 border-neutral-400" style="
                      width: 94px;
                      height: 48px;
                      transform: translateX(467px) translateY(0px)
                        translateZ(0px);
                    "></div>
              </div>
            </section>
            <div class="flex items-center justify-end gap-2 flex-grow basis-0">
              <button class="flex items-center font-bold rounded text-base font-bold px-3 py-3"
                style="transform: none; transform-origin: 50% 50% 0px" tabindex="0">
                <div class="flex items-center gap-2">
                  <svg class="h-4 w-4" style="max-width: 50vw; max-height: 50vh" viewbox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path class="stroke-2 stroke-neutral-600" d="M12.967 3 4.75 14H12l-.967 7 8.217-11H12Z" fill="none"
                      stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M0 0h24v24H0Z" fill="none"></path>
                  </svg>
                  <p class="text-neutral-600">Send us a feedback</p>
                </div>
              </button>
              <button aria-expanded="false" aria-haspopup="menu"
                class="flex items-center justify-center w-fit rounded font-medium transition-colors select-none text-neutral-600 px-3 py-2"
                data-state="closed" id="profile" tabindex="0" type="button">
                <div class="flex flex-row items-center justify-center gap-2 text-left mr-2">
                  <div class="relative">
                    <div
                      class="rounded-full border-neutral-700 relative overflow-hidden flex items-center justify-center bg-primary-500 relative w-10 h-10 min-w-[2.5rem] min-h-[2.5rem] border-1">
                      <img alt="Avatar" class="object-cover"
                        src="{{ auth()->user()->avatar ? asset('storage/' . auth()->user()->avatar) : asset('assets/member_avatar_453.png') }}"
                        style="height:100%" />
                    </div>
                    <div class="absolute -bottom-1 -right-1">
                      <div
                        class="rounded-full border-neutral-700 relative overflow-hidden flex items-center justify-center bg-primary-500 relative w-5 h-5 min-w-[1rem] min-h-[1rem] border-1">
                        <img alt="Avatar" class="object-cover" src="{{asset("assets/organization_avatar_508.png")}}" />
                      </div>
                    </div>
                  </div>
                  <h5 class="font-bold">{{ auth()->user()->name}}</h5>
                </div>
                <div style="transform: none">
                  <svg class="h-6" style="max-width: 50vw; max-height: 50vh" viewbox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path class="stroke-2 stroke-neutral-700" d="m8 10 4 4 4-4" fill="none" stroke="#323232"
                      stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M0 0h24v24H0Z" fill="none"></path>
                  </svg>
                </div>
              </button>
            </div>
          </section>
          <div class="flex">
            <section class="h-[calc(100vh-4rem)] w-screen">
              <div class="h-full w-full pt-1 px-1 bg-neutral-100">
                <section class="my-2 mx-8 sticky self-start top-2 z-20 flex items-center justify-between">
                  <div
                    class="bg-neutral-50 border-[0.13rem] border-neutral-400 border-dashed p-2 w-fit h-16 rounded flex items-center gap-2 shadow-lg">
                    <div class="flex items-center gap-1 h-full">
                      <div class="flex flex-col gap-1">
                        <div style="
                              transform-origin: center center;
                              perspective: 500px;
                              transform: none;
                            ">
                          <input
                            class="px-2 py-2 rounded transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal bg-neutral-50 border-1 border-neutral-400 w-60 p focus:outline-primary-500 overflow-hidden text-ellipsis-clip"
                            placeholder="Search" type="text" value="" />
                        </div>
                      </div>
                      <div class="w-[1px] h-full bg-neutral-300 m-1 rounded-full bg-neutral-400 w-4 h-[45%] ml-2"></div>
                    </div>
                    <button aria-autocomplete="none" aria-controls="radix-:r58:" aria-expanded="false"
                      class="flex items-center justify-center w-fit rounded px-3 py-2 font-medium transition-colors select-none bg-neutral-200 border-1 border-neutral-300 hover:bg-neutral-300/70"
                      data-state="closed" dir="ltr" role="combobox" tabindex="0" type="button">
                      <span style="pointer-events: none">
                        <div class="flex items-center justify-center gap-2">
                          <svg class="h-5 w-5 stroke-2" style="max-width: 50vw; max-height: 50vh" viewbox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <g class="stroke-neutral-700" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path
                                d="M20.793 9.524a2.023 2.023 0 1 1-2.861 2.86 2.023 2.023 0 0 1 2.86-2.86M14.203 5.912a3.115 3.115 0 1 1-4.406 4.406 3.115 3.115 0 0 1 4.406-4.406M6.068 9.524a2.023 2.023 0 1 1-2.86 2.86 2.023 2.023 0 0 1 2.86-2.86M23 19v-1.096a2.5 2.5 0 0 0-2.5-2.5h-.801M1 19v-1.096a2.5 2.5 0 0 1 2.5-2.5h.801M17.339 19v-1.601a3.5 3.5 0 0 0-3.5-3.5H10.16a3.5 3.5 0 0 0-3.5 3.5V19">
                              </path>
                            </g>
                            <path d="M0 0h24v24H0Z" fill="none"></path>
                          </svg>
                          <h5>Friends</h5>
                        </div>
                      </span>
                      <div aria-hidden="true" style="transform: none">
                        <svg class="h-6" style="max-width: 50vw; max-height: 50vh" viewbox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg">
                          <path class="stroke-2 stroke-neutral-700" d="m8 10 4 4 4-4" fill="none" stroke="#323232"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                          <path d="M0 0h24v24H0Z" fill="none"></path>
                        </svg>
                      </div>
                    </button>
                  </div>
                  <div>
                    <a id="button_block1"
                      class="flex items-center justify-center gap-2 rounded font-medium leading-4 whitespace-nowrap overflow-hidden text-overflow-ellipsis w-auto min-w-0 min-h-0 select-none px-3 py-2 bg-secondary-300 border-[2px] border-neutral-700 shadow-smoothxl opacity-100"
                      tabindex="0" onclick="showInput1()">

                      <h4 id="main_text1" class="flex" style="gap:5px"><svg class="h-6" fill="none"
                          style="max-width: 50vw; max-height: 50vh" viewbox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg">
                          <path class="stroke-2 stroke-neutral-700" d="M6 12h6m0 0h6m-6 0v6m0-6V6"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>Add Friends</h4>
                      <div id="inputContainer1" class="hidden">
                        <input type="text" id="meetingInput1" placeholder="">
                        <div class="line"></div>
                        <button type="button" style="font-weight: 700" onclick="addFriend1()">ADD</button>
                      </div>

                    </a>


                    <style>
                      #inputContainer1 {
                        font-weight: 700;
                        display: flex;
                        gap: 13px;
                        opacity: 0;
                        /* Start invisible */
                        width: 0;
                        /* Start width as zero */
                        transition: opacity 0.3s ease, width 0.3s ease;
                        /* Transition effects */
                        overflow: hidden;
                        /* Hide overflow */
                      }

                      #inputContainer1.show {
                        opacity: 1;
                        /* Fully visible */
                        width: auto;
                        /* Allow natural width */
                        /* Adjust max-width if desired */
                        max-width: 300px;
                        /* Limit width to prevent excess space */
                      }

                      #inputContainer1 input {
                        background-color: transparent;
                        color: black;
                        border: 2px solid black;
                        border-radius: 10px;
                        padding: 3px;
                      }

                      #inputContainer1 input::placeholder {
                        color: black;
                      }

                      .line {
                        height: auto;
                        border: 1px solid black;
                      }

                      .error_field {
                        border-color: red !important;
                        color: red !important;
                      }

                      .error_field #inputContainer1 input {
                        border-color: red;
                        color: red;

                      }

                      .error_field #inputContainer1 input::placeholder {
                        border-color: red;
                        color: red;

                      }

                      .error_field div {
                        border-color: red;
                        color: red;
                      }

                      .hidden {
                        display: none !important;
                        /* Скрыть по умолчанию */
                      }

                      .hidden-text {
                        display: none;
                        /* Скрыть текст */
                      }

                      .show {
                        display: flex;
                        /* Показать контейнер с вводом */
                        gap: 13px;
                        opacity: 1;
                        /* Полная видимость */
                        width: auto;
                        /* Ограничение ширины */
                        transition: opacity 0.3s ease, width 0.3s ease;
                        /* Переходы */
                      }
                    </style>

                  </div>
                </section>

                @if($friends->isEmpty() || $friends->every(function($friend) {
                $blockedUserId = $friend->userFirst->id === auth()->user()->id ? $friend->userSecond->id : $friend->userFirst->id;
                return $friend->status === 'blocked_to_user_' . $blockedUserId;
                }))

                <div class="h-4/5 w-full relative">
                  <div class="w-full h-full overflow-hidden">
                    <div class="h-full w-full overflow-auto relative">
                      <table class="w-full border-separate border-spacing-0">
                        <thead class="bg-primary-100 top-0 z-10 sticky">
                          <tr>
                            <th
                              class="px-6 py-3 text-left text-neutral-600 font-semibold border border-neutral-300 rounded-tl-lg border-l"
                              style="position: relative">
                              <div>
                                <div class="h-full w-full">
                                  <div class="rounded w-20 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </th>
                            <th
                              class="px-6 py-3 text-left text-neutral-600 font-semibold border border-neutral-300 border-l-0"
                              style="position: relative">
                              <div>
                                <div class="h-full w-full">
                                  <div class="rounded w-20 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </th>
                            <th
                              class="px-6 py-3 text-left text-neutral-600 font-semibold border border-neutral-300 border-l-0"
                              style="position: relative">
                              <div>
                                <div class="h-full w-full">
                                  <div class="rounded w-20 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </th>
                            <th
                              class="px-6 py-3 text-left text-neutral-600 font-semibold border border-neutral-300 border-l-0"
                              style="position: relative">
                              <div>
                                <div class="h-full w-full">
                                  <div class="rounded w-20 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </th>
                            <th
                              class="px-6 py-3 text-left text-neutral-600 font-semibold border border-neutral-300 border-l-0"
                              style="position: relative">
                              <div>
                                <div class="h-full w-full">
                                  <div class="rounded w-20 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </th>
                            <th
                              class="px-6 py-3 text-left text-neutral-600 font-semibold border border-neutral-300 border-l-0"
                              style="position: relative">
                              <div>
                                <div class="h-full w-full">
                                  <div class="rounded w-20 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </th>
                            <th
                              class="px-6 py-3 text-left text-neutral-600 font-semibold border border-neutral-300 rounded-tr-lg border-l-0"
                              style="position: relative">
                              <div>
                                <div class="h-full w-full">
                                  <div class="rounded w-20 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </th>
                          </tr>
                        </thead>
                        <tbody class="divide-neutral-200">
                          <tr class="bg-neutral-50 hover:bg-neutral-100 transition-colors min-h-[content-height]">
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-l border-t-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="bg-neutral-50 hover:bg-neutral-100 transition-colors min-h-[content-height]">
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-l border-t-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="bg-neutral-50 hover:bg-neutral-100 transition-colors min-h-[content-height]">
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-l border-t-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="bg-neutral-50 hover:bg-neutral-100 transition-colors min-h-[content-height]">
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-l border-t-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="bg-neutral-50 hover:bg-neutral-100 transition-colors min-h-[content-height]">
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-l border-t-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="bg-neutral-50 hover:bg-neutral-100 transition-colors min-h-[content-height]">
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-l border-t-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="bg-neutral-50 hover:bg-neutral-100 transition-colors min-h-[content-height]">
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-l border-t-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="bg-neutral-50 hover:bg-neutral-100 transition-colors min-h-[content-height]">
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-l border-t-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="bg-neutral-50 hover:bg-neutral-100 transition-colors min-h-[content-height]">
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-l border-t-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="bg-neutral-50 hover:bg-neutral-100 transition-colors min-h-[content-height]">
                            <td
                              class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-l rounded-bl-lg border-t-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                            <td
                              class="px-6 py-4 whitespace-nowrap border border-neutral-300 rounded-br-lg border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300"></div>
                                </div>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div
                    class="flex flex-col gap-4 items-center justify-center h-full w-full absolute top-0 left-0 bg-gradient-to-t from-30% from-primary-100 to-primary-100/0">
                    <p class="text-8xl">🧸</p>
                    <h1>You don’t have friends</h1>
                    <p class="text-center" id="change_text_friends">

                      No insights yet! Start adding friends and getting to know them, invite them to calls, chat and much more!
                    </p>
                    <section class="w-full h-fit flex flex-row items-center justify-center gap-4">
                      <div class="buttons">

                        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
                          integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
                          crossorigin="anonymous"></script>
                        <a id="button_block"
                          class="flex items-center justify-center gap-2 rounded font-medium leading-4 whitespace-nowrap overflow-hidden text-overflow-ellipsis w-auto min-w-0 min-h-0 select-none px-3 py-2 bg-secondary-300 border-[2px] border-neutral-700 shadow-smoothxl opacity-100"
                          tabindex="0" onclick="showInput()">

                          <h4 id="main_text" class="flex" style="gap:5px"><svg class="h-6 w-6" fill="none" style="max-width: 50vw; max-height: 50vh;"
                              viewBox="0 0 19 17" xmlns="http://www.w3.org/2000/svg">
                              <path class="stroke-2 stroke-neutral-700"
                                d="M17.5 10.9V13.3C17.5 14.6255 16.4255 15.7 15.1 15.7H3.9C2.57452 15.7 1.5 14.6255 1.5 13.3V10.9M9.5 1.30005V9.30005M9.5 1.30005L6.3 4.50005M9.5 1.30005L12.7 4.50005"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>Add Friends</h4>
                          <div id="inputContainer" class="hidden">
                            <input type="text" id="meetingInput" placeholder="">
                            <div class="line"></div>
                            <button type="button" style="font-weight: 700" onclick="addFriend()">ADD</button>
                          </div>

                        </a>


                        <style>
                          #inputContainer {
                            display: flex;
                            gap: 13px;
                            opacity: 0;
                            /* Start invisible */
                            width: 0;
                            /* Start width as zero */
                            transition: opacity 0.3s ease, width 0.3s ease;
                            /* Transition effects */
                            overflow: hidden;
                            /* Hide overflow */
                          }

                          #inputContainer.show {
                            opacity: 1;
                            /* Fully visible */
                            width: auto;
                            /* Allow natural width */
                            /* Adjust max-width if desired */
                            max-width: 300px;
                            /* Limit width to prevent excess space */
                          }

                          #inputContainer input {
                            background-color: transparent;
                            color: black;
                            border: 2px solid black;
                            border-radius: 10px;
                            padding: 3px;
                          }

                          #inputContainer input::placeholder {
                            color: black;
                          }

                          .line {
                            height: auto;
                            border: 1px solid black;
                          }

                          .error_field {
                            border-color: red;
                            color: red;
                          }

                          .error_field #inputContainer input {
                            border-color: red;
                            color: red;

                          }

                          .error_field #inputContainer input::placeholder {
                            border-color: red;
                            color: red;

                          }

                          .error_field div {
                            border-color: red;
                            color: red;
                          }

                          .hidden {
                            display: none;
                            /* Скрыть по умолчанию */
                          }

                          .hidden-text {
                            display: none;
                            /* Скрыть текст */
                          }

                          .show {
                            display: flex;
                            /* Показать контейнер с вводом */
                            gap: 13px;
                            opacity: 1;
                            /* Полная видимость */
                            width: auto;
                            /* Автоматическая ширина */
                            max-width: 300px;
                            /* Ограничение ширины */
                            transition: opacity 0.3s ease, width 0.3s ease;
                            /* Переходы */
                          }
                        </style>



                      </div>
                      <style>
                        .buttons {
                          display: flex;
                          gap: 19px;
                        }
                      </style>
                    </section>
                  </div>
                </div>
                @else
                <div class="h-4/5 w-full relative">
                  <div class="w-full h-full overflow-hidden">
                    <div class="h-full w-full overflow-auto relative">
                      <table class="w-full border-separate border-spacing-0">
                        <thead class="bg-primary-100 top-0 z-10 sticky">
                          <tr>
                            <th
                              class="px-6 py-3 text-left text-neutral-600 font-semibold border border-neutral-300 rounded-tl-lg border-l"
                              style="position: relative">
                              <div>
                                <div class="h-full w-full">
                                  <div class="rounded w-20 h-6 bg-neutral-300 centerContent"
                                    style="background-color: rgba(234, 234, 234, 1)">Name</div>
                                </div>
                              </div>
                            </th>
                            <th
                              class="px-6 py-3 text-left text-neutral-600 font-semibold border border-neutral-300 border-l-0"
                              style="position: relative">
                              <div>
                                <div class="h-full w-full">
                                  <div class="rounded w-20 h-6 bg-neutral-300 centerContent"
                                    style="background-color: rgba(234, 234, 234, 1)">Online</div>
                                </div>
                              </div>
                            </th>
                            <th
                              class="px-6 py-3 text-left text-neutral-600 font-semibold border border-neutral-300 border-l-0"
                              style="position: relative">
                              <div>
                                <div class="h-full w-full">
                                  <div class="rounded w-20 h-6 bg-neutral-300 centerContent"
                                    style="background-color: rgba(234, 234, 234, 1)">Mutual Group</div>
                                </div>
                              </div>
                            </th>
                            <th
                              class="px-6 py-3 text-left text-neutral-600 font-semibold border border-neutral-300 border-l-0"
                              style="position: relative">
                              <div>
                                <div class="h-full w-full">
                                  <div class="rounded w-20 h-6 bg-neutral-300 centerContent"
                                    style="background-color: rgba(234, 234, 234, 1)">Mutual Friends</div>
                                </div>
                              </div>
                            </th>
                            <th
                              class="px-6 py-3 text-left text-neutral-600 font-semibold border border-neutral-300 border-l-0"
                              style="position: relative">
                              <div>
                                <div class="h-full w-full">
                                  <div class="rounded w-20 h-6 bg-neutral-300 centerContent"
                                    style="background-color: rgba(234, 234, 234, 1)">Pro</div>
                                </div>
                              </div>
                            </th>
                            <th
                              class="px-6 py-3 text-left text-neutral-600 font-semibold border border-neutral-300 border-l-0"
                              style="position: relative">
                              <div>
                                <div class="h-full w-full">
                                  <div class="rounded w-20 h-6 bg-neutral-300 centerContent"
                                    style="background-color: rgba(234, 234, 234, 1)"> Status</div>
                                </div>
                              </div>
                            </th>
                            <th
                              class="px-6 py-3 text-left text-neutral-600 font-semibold border border-neutral-300 rounded-tr-lg border-l-0"
                              style="position: relative">
                              <div>
                                <div class="h-full w-full">
                                  <div class="rounded w-20 h-6 bg-neutral-300 centerContent"
                                    style="background-color: rgba(234, 234, 234, 1)">Interactions</div>
                                </div>
                              </div>
                            </th>
                          </tr>
                        </thead>
                        <style>
                          .centerContent {
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            width: max-content;
                            padding: 6px 19px;
                          }
                        </style>
                        <tbody class="divide-neutral-200">
                          <style>
                            tr.yellow>td>div>div>div {
                              background-color: #FBD570;
                            }

                            tr.gray>td>div>div>div {
                              background-color: #D3CCB8;
                            }

                            tr.red>td>div>div>div {
                              background-color: #FB9A70;
                            }
                          </style>
                          @foreach($friends as $friend)
                          @php
                          $friendNotMe = $friend->userFirst->id === auth()->user()->id ? $friend->userSecond : $friend->userFirst;
                          $mutualFriends = $friend->commonFriends($friendNotMe->id);

                          if($friend->status != 'blocked_to_user_' . $friendNotMe->id){
                          @endphp
                          <tr
                            class="bg-neutral-50 hover:bg-neutral-100 transition-colors min-h-[content-height] {{ $friend->status == 'friend' ? 'yellow' : ($friend->status == 'pending' ? 'gray' : 'red') }}">
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-l border-t-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300 centerContent">{{ $friendNotMe->login }}
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300 centerContent">Online</div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300 centerContent">-</div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">

                              {{-- Пример вывода имён общих друзей --}}
                              @if($mutualFriends->count())
                              <div class="avatars">
                                @foreach($mutualFriends->take(3) as $mutualFriend)
                                <img class="avatar"
                                  src="{{ $mutualFriend->avatar ? asset('storage/' . $mutualFriend->avatar) : asset('assets/member_avatar_453.png') }}"
                                  alt="">
                                @endforeach
                                @if($mutualFriends->count() > 3)
                                <div class="avatar-count">+{{ $mutualFriends->count() - 3 }}</div>
                                @endif
                              </div>


                              @else

                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300 centerContent">-</div>
                                </div>
                              </div>
                              @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300 centerContent">No</div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">
                              <div class="text-small">
                                <div class="h-full w-full">
                                  <div class="rounded w-28 h-6 bg-neutral-300 centerContent">{{ strpos($friend->status, 'blocked_to_user_') !== false ? 'Blocked' : $friend->status }}</div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0">

                              <div class="flex gap-2">
                                <button class="action" onclick="openChatFromButton('{{ $friendNotMe->id }}','{{ $friendNotMe->name }}')" @if($friend->status == "pending")
                                  style="
                                  background-color: #D3CCB8;
                                  pointer-events: none;
                                  "
                                  @endif
                                  @if(strpos($friend->status, 'blocked_to_user_') !== false)
                                  style="
                                  background-color: #FB9A70;
                                  pointer-events: none;
                                  "
                                  @endif
                                  >
                                  <img src="{{ asset("assets/message.png") }}" class="" alt="">
                                </button>
                                <button class="action starAnimationBlock " @if($friend->status == "pending")
                                  style="
                                  background-color: #D3CCB8;

                                  "
                                  @endif
                                  @if(strpos($friend->status, 'blocked_to_user_') !== false)
                                  style="
                                  background-color: #FB9A70;

                                  "
                                  @endif
                                  >
                                  <img src="{{ asset("assets/call.png") }}" class="" alt="">
                                  <img style="    position: absolute;
              top: -20px;
              right: -15px;" src="{{asset("assets/star.png")}}" class="starAnimation" alt="">
                                  <style>
                                    .starAnimationBlock {
                                      position: relative;
                                      overflow: visible !important;
                                    }

                                    .starAnimationBlock:focus .starAnimation {
                                      animation: star 1s infinite;
                                      transform: rotate(-30deg);
                                    }


                                    @keyframes star {
                                      0% {
                                        transform: rotate(0deg);
                                      }

                                      25% {
                                        transform: rotate(30deg);
                                      }

                                      50% {
                                        transform: rotate(0deg);
                                      }

                                      75% {
                                        transform: rotate(-30deg);
                                      }

                                      100% {
                                        transform: rotate(0deg);
                                      }
                                    }
                                  </style>
                                </button>
                                @if($friend->status == "friend")
                                <button class="action" onclick="deleteFriend(this,'{{ $friendNotMe->id }}')">
                                  <img src="{{ asset("assets/deleteFriend.png") }}" class="" alt="">
                                </button>
                                @elseif($friend->status == "pending" && $friend->user_id_second == Auth::user()->id)
                                <button class="action"

                                  onclick="addFriendRequest(this,'{{ $friendNotMe->id }}')">
                                  <img src="{{ asset("assets/addFriend.png") }}" class="" alt="">
                                </button>
                                @endif
                                @if($friend->status != "blocked_to_user_" . Auth::user()->id)
                                <button class="action"
                                  @if($friend->status == "pending")
                                  onclick="deleteFriend(this,'{{ $friendNotMe->id }}')"
                                  @else
                                  onclick="blockFriend(this,'{{ $friendNotMe->id }}')"
                                  @endif
                                  >
                                  <img src="{{ asset("assets/block.png") }}" class="" alt="">
                                </button>
                                @else
                                <button class="action" onclick="addFriendRequest(this,'{{ $friendNotMe->id }}')">
                                  <img src="{{ asset("assets/addFriend.png") }}" class="" alt="">
                                </button>
                                @endif
                                <button class="action" onclick="copyId(this, '{{ $friendNotMe->id }}')">
                                  ID
                                </button>

                              </div>

                            </td>
                          </tr>
                          @php
                          }
                          @endphp
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>

                </div>
                @endif
              </div>
            </section>
          </div>
          <div class="flex flex-col z-30">
            <div class="fixed bottom-2 right-2 mb-12 hover:cursor-cool-clickable disabled:cursor-cool-normal">
              <div aria-controls="radix-:r59:" aria-expanded="false" aria-haspopup="dialog"
                class="w-11 h-11 rounded-full bg-[#FFF9DE] border-2 border-secondary-300 p-1 shadow-lg flex items-center justify-center hover:cursor-cool-clickable disabled:cursor-cool-normal"
                data-state="closed" type="button">
                <img alt="ListenUp Illustration Logo" data-nimg="1" decoding="async" height="25" loading="lazy"
                  src="{{  asset("assets/ListenUp-Logo.svg") }} " style="color: transparent" width="25" />
              </div>
            </div>
            <div
              class="fixed bottom-2 right-2 w-11 h-11 rounded-full bg-primary-300 border-2 border-primary-600 p-4 shadow-lg flex items-center justify-center hover:cursor-cool-clickable disabled:cursor-cool-normal"
              style="z-index: 99999">
              <button aria-expanded="false" aria-haspopup="menu"
                class="flex items-center justify-center w-fit rounded font-medium transition-colors select-none text-neutral-600 px-3 py-2"
                data-state="closed" id="radix-:r5a:" tabindex="0" type="button">
                <h3 class="text-primary-600">?</h3>
              </button>
            </div>
          </div>
          <div class="absolute h-full w-full"></div>
          <div
            class="absolute left-1/2 z-30 w-full translate-x-[-50%] bottom-10 flex flex-col justify-center items-center">
            <div></div>
          </div>
        </div>
      </div>
    </div>
  </div>




  <div class="intercom-lightweight-app">
    <style id="intercom-lightweight-app-style" type="text/css">
      @keyframes intercom-lightweight-app-launcher {
        from {
          opacity: 0;
          transform: scale(0.5);
        }

        to {
          opacity: 1;
          transform: scale(1);
        }
      }

      @keyframes intercom-lightweight-app-gradient {
        from {
          opacity: 0;
        }

        to {
          opacity: 1;
        }
      }

      @keyframes intercom-lightweight-app-messenger {
        0% {
          opacity: 0;
          transform: scale(0);
        }

        40% {
          opacity: 1;
        }

        100% {
          transform: scale(1);
        }
      }

      .intercom-lightweight-app {
        position: fixed;
        z-index: 2147483001;
        width: 0;
        height: 0;
        font-family: intercom-font, "Helvetica Neue", "Apple Color Emoji",
          Helvetica, Arial, sans-serif;
      }

      .intercom-lightweight-app-gradient {
        position: fixed;
        z-index: 2147483002;
        width: 500px;
        height: 500px;
        bottom: 0;
        right: 0;
        pointer-events: none;
        background: radial-gradient(ellipse at bottom right,
            rgba(29, 39, 54, 0.16) 0%,
            rgba(29, 39, 54, 0) 72%);
        animation: intercom-lightweight-app-gradient 200ms ease-out;
      }

      .intercom-lightweight-app-launcher {
        position: fixed;
        z-index: 2147483003;
        padding: 0 !important;
        margin: 0 !important;
        border: none;
        bottom: 20px;
        right: 20px;
        max-width: 48px;
        width: 48px;
        max-height: 48px;
        height: 48px;
        border-radius: 50%;
        background: #fbd570;
        cursor: pointer;
        box-shadow: 0 1px 6px 0 rgba(0, 0, 0, 0.06),
          0 2px 32px 0 rgba(0, 0, 0, 0.16);
        transition: transform 167ms cubic-bezier(0.33, 0, 0, 1);
        box-sizing: content-box;
      }

      .intercom-lightweight-app-launcher:hover {
        transition: transform 250ms cubic-bezier(0.33, 0, 0, 1);
        transform: scale(1.1);
      }

      .intercom-lightweight-app-launcher:active {
        transform: scale(0.85);
        transition: transform 134ms cubic-bezier(0.45, 0, 0.2, 1);
      }

      .intercom-lightweight-app-launcher:focus {
        outline: none;
      }

      .intercom-lightweight-app-launcher-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        top: 0;
        left: 0;
        width: 48px;
        height: 48px;
        transition: transform 100ms linear, opacity 80ms linear;
      }

      .intercom-lightweight-app-launcher-icon-open {
        opacity: 1;
        transform: rotate(0deg) scale(1);
      }

      .intercom-lightweight-app-launcher-icon-open svg {
        width: 24px;
        height: 24px;
      }

      .intercom-lightweight-app-launcher-icon-open svg path {
        fill: rgb(0, 0, 0);
      }

      .intercom-lightweight-app-launcher-icon-self-serve {
        opacity: 1;
        transform: rotate(0deg) scale(1);
      }

      .intercom-lightweight-app-launcher-icon-self-serve svg {
        height: 44px;
      }

      .intercom-lightweight-app-launcher-icon-self-serve svg path {
        fill: rgb(0, 0, 0);
      }

      .intercom-lightweight-app-launcher-custom-icon-open {
        max-height: 24px;
        max-width: 24px;

        opacity: 1;
        transform: rotate(0deg) scale(1);
      }

      .intercom-lightweight-app-launcher-icon-minimize {
        opacity: 0;
        transform: rotate(-60deg) scale(0);
      }

      .intercom-lightweight-app-launcher-icon-minimize svg path {
        fill: rgb(0, 0, 0);
      }

      .intercom-lightweight-app-messenger {
        position: fixed;
        z-index: 2147483003;
        overflow: hidden;
        background-color: white;
        animation: intercom-lightweight-app-messenger 250ms cubic-bezier(0, 1, 1, 1);
        transform-origin: bottom right;

        width: 400px;
        height: calc(100% - 40px);
        max-height: 704px;
        min-height: 250px;
        right: 20px;
        bottom: 20px;
        box-shadow: 0 5px 40px rgba(0, 0, 0, 0.16);

        border-radius: 16px;
      }

      .intercom-lightweight-app-messenger-header {
        height: 64px;
        border-bottom: none;
        background: #c1befa;
      }

      .intercom-lightweight-app-messenger-footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 80px;
        background: #fff;
        font-size: 14px;
        line-height: 21px;
        border-top: 1px solid rgba(0, 0, 0, 0.05);
        box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.05);
      }

      @media print {
        .intercom-lightweight-app {
          display: none;
        }
      }
    </style>
  </div>





  <svg aria-hidden="true" style="
        width: 0px;
        height: 0px;
        position: absolute;
        top: -100%;
        left: -100%;
      ">
    <text id="__react_svg_text_measurement_id">25</text>
  </svg>


  <div class="chatButton" id="chatButton" onclick="toggleChat()">
    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
      <path d="M9.5 0C4.25308 0 0 3.546 0 7.92C0 10.345 1.31051 12.5125 3.36982 13.9655C3.4224 15.0714 3.24847 16.5984 1.69989 17.3025L1.69704 17.3039C1.62785 17.3298 1.56829 17.3758 1.52623 17.4359C1.48418 17.4959 1.46162 17.5671 1.46154 17.64C1.46154 17.7355 1.50003 17.827 1.56856 17.8946C1.63708 17.9621 1.73002 18 1.82692 18C1.83565 18 1.8439 17.9986 1.85261 17.9986C1.85452 17.9986 1.85642 17.9986 1.85832 17.9986C3.63703 17.9874 5.14701 17.0403 6.1887 16.0397C6.51901 15.7222 6.97949 15.5659 7.43329 15.6502C8.09829 15.7747 8.78969 15.84 9.5 15.84C14.7469 15.84 19 12.294 19 7.92C19 3.546 14.7469 0 9.5 0Z" fill="#222222" />
    </svg>
  </div>
  <style>
    .chatButton {
      width: 44px;
      height: 44px;
      cursor: pointer;
      border-radius: 100%;
      border: 2px solid #FBD570;
      background-color: #FFF9DE;
      position: fixed;
      bottom: 9px;
      right: 65px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
  </style>
</body>

</html>
@include('feedback')
@include('profileSettings')
<script>
  function showInput() {
    var inputContainer = document.getElementById("inputContainer");
    var mainText = document.getElementById("main_text");
    var change_text_friends = document.getElementById("change_text_friends")

    change_text_friends.innerHTML = "Enter a friend's name or ID to search for and add to friends."
    inputContainer.classList.remove("hidden"); // Убираем "hidden" класс

    // Сокрытие текста
    mainText.classList.add("hidden-text");

    setTimeout(() => {
      inputContainer.classList.add("show"); // Добавить класс "show" для анимации
    }, 10); // Небольшая задержка для переходов
  }

  function showInput1() {
    var inputContainer = document.getElementById("inputContainer1");
    var mainText = document.getElementById("main_text1");

    inputContainer.classList.remove("hidden"); // Убираем "hidden" класс

    // Сокрытие текста
    mainText.classList.add("hidden-text");

    setTimeout(() => {
      inputContainer.classList.add("show"); // Добавить класс "show" для анимации
    }, 10); // Небольшая задержка для переходов
  }

  function addFriend() {
    var meetingCode = document.getElementById("meetingInput").value;
    var button_block = document.getElementById("button_block");

    $.ajax({
      url: "{{ route('api.friends.add') }}",
      type: "POST",
      data: {
        user_identifier: meetingCode,
        _token: "{{ csrf_token() }}"
      },
      success: function(data) {
        console.log(data)
        if (data.message == "success") {
          window.location.reload()
        } else {
          button_block.classList.add("error_field");
          setTimeout(function() {
            button_block.classList.remove("error_field");
          }, 2000)
        }
      },
      error: function(data) {
        console.log(data)
        button_block.classList.add("error_field");
        setTimeout(function() {
          button_block.classList.remove("error_field");
        }, 2000)
      }
    })

  }

  function addFriend1() {
    var meetingCode = document.getElementById("meetingInput1").value;
    var button_block = document.getElementById("button_block1");

    $.ajax({
      url: "{{ route('api.friends.add') }}",
      type: "POST",
      data: {
        user_identifier: meetingCode,
        _token: "{{ csrf_token() }}"
      },
      success: function(data) {
        console.log(data)
        if (data.message == "success") {
          window.location.reload()
        } else {
          button_block.classList.add("error_field");
          setTimeout(function() {
            button_block.classList.remove("error_field");
          }, 2000)
        }
      },
      error: function(data) {
        console.log(data)
        button_block.classList.add("error_field");
        setTimeout(function() {
          button_block.classList.remove("error_field");
        }, 2000)
      }
    })

  }
</script>
<style>
  .avatars {
    display: flex;
    align-items: center;
  }

  .avatar {
    border-radius: 100%;
    width: 30px;
    margin-right: -15px;
  }

  .avatar-count {
    margin-left: 15px;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    font-weight: bold;
  }
</style>
<style>
  .action {
    width: 31px;
    height: 31px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 5px;
    border: 2px solid #242425;
    background-color: #FBD570;
    color: #ffffff;
    transition: background-color 0.3s ease;
  }

  .action:last-child {
    padding: 4px 15px;
    width: 52px;
    color: black;
    font-weight: 700;
  }
</style>
<script>
  function openChatBlock(element, id) {
    toggleChat();
  }

  function deleteFriend(element, friendId) {
    $.ajax({
      url: "{{ route('api.friends.delete') }}",
      type: "POST",
      data: {
        friend_id: friendId,
        _token: "{{ csrf_token() }}"
      },
      success: function(data) {
        console.log(data)
        if (data.message == "success") {
          window.location.reload()
        } else {
          element.classList.add("error_field");
          setTimeout(function() {
            element.classList.remove("error_field");
          }, 2000)
        }
      },
      error: function(data) {
        console.log(data)
        element.classList.add("error_field");
        setTimeout(function() {
          element.classList.remove("error_field");
        }, 2000)
      }
    })
  }

  function addFriendRequest(element, friendId) {
    $.ajax({
      url: "{{ route('api.friends.accept') }}",
      type: "POST",
      data: {
        friend_id: friendId,
        _token: "{{ csrf_token() }}"
      },
      success: function(data) {
        console.log(data)
        if (data.message == "success") {
          window.location.reload()
        } else {
          element.classList.add("error_field");
          setTimeout(function() {
            element.classList.remove("error_field");
          }, 2000)
        }
      },
      error: function(data) {
        console.log(data)
        element.classList.add("error_field");
        setTimeout(function() {
          element.classList.remove("error_field");
        }, 2000)
      }
    })
  }

  function blockFriend(element, friendId) {
    $.ajax({
      url: "{{ route('api.friends.block') }}",
      type: "POST",
      data: {
        friend_id: friendId,
        _token: "{{ csrf_token() }}"
      },
      success: function(data) {
        console.log(data)
        if (data.message == "success") {
          window.location.reload()
        } else {
          element.classList.add("error_field");
          setTimeout(function() {
            element.classList.remove("error_field");
          }, 2000)
        }
      },
      error: function(data) {
        console.log(data)
        element.classList.add("error_field");
        setTimeout(function() {
          element.classList.remove("error_field");
        }, 2000)
      }
    })
  }

  function copyId(element, friendId) {
    if (navigator.clipboard) {
      navigator.clipboard.writeText(friendId).then(() => {
        console.log('Friend ID copied to clipboard');
      }).catch(err => {
        console.error('Failed to copy: ', err);
      });
    } else {
      console.warn('Clipboard API not available');
      // Fallback method if clipboard API is not available
      const textArea = document.createElement('textarea');
      textArea.value = friendId;
      document.body.appendChild(textArea);
      textArea.select();
      document.execCommand('copy');
      document.body.removeChild(textArea);
      console.log('Friend ID copied to clipboard (fallback method)');
    }
    element.innerHTML = "Copied!";
    element.style.width = "70px"
    setTimeout(() => {
      element.innerHTML = "ID";
      element.style.width = "52px"
    }, 1000);
  }
</script>
<div class="chat" id="chatContainer" style="display: none;">
  <div class="chat__header">
    <h3>All conversations</h3>
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 24 20" fill="none"
      onclick="toggleChat()">
      <path d="M1 1L12 12L23 1" stroke="black" stroke-width="2.5" />
      <path d="M1 7L12 18L23 7" stroke="black" stroke-width="2.5" />
    </svg>
  </div>
  <div class="chat__list" id="chatList">

    @if(count($chats) > 0)
    @foreach($chats as $chat)
    <div class="chat__item" onclick="openChat({{ $chat['recipient']['id'] }}, '{{ $chat['recipient']['name'] }}')">

      <img
        src="{{ $chat['recipient']['avatar'] ? asset('storage/' . $chat['recipient']['avatar']) : asset('assets/member_avatar_453.png') }}"
        alt="">
      <div style="display: flex;
    flex-direction: column;
    text-align: left;">
        <h4>{{ $chat['recipient']['name'] }} <span class="chat_item__id">ID {{ $chat['recipient']['id'] }}</span> <span class="chat_item__time">{{ \Carbon\Carbon::parse($chat['last_message']['created_at'])->format('M j') }}</span></h4>
        <p>{{ $chat['last_message']['message'] }}</p>
      </div>
      @if($chat['unread_count'] > 0)
      <span class="unread-badge">{{ $chat['unread_count'] }}</span>
      @endif
    </div>
    @endforeach
    @else
    <img src="{{asset("assets/chat.png")}}" alt="">
    <h2>
      There are no messages yet
    </h2>
    @endif
  </div>
  <style>
    .chat__item {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 10px;
      position: relative;
    }

    .unread-badge {
      position: absolute;
      right: 10px;
      top: 10px;
      background-color: #FBD570;
      color: black;
      border-radius: 50%;
      padding: 2px 6px;
      font-size: 12px;
    }

    .chat_item__id {
      font-size: 16px;
      color: #878787;
    }

    .chat_item__time {
      font-size: 16px;
      color: #878787;
    }
  </style>
  <div class="user_chat" style="display: none;">
    <div class="user_chat__header">
      <div style="display: flex; align-items: center;gap:10px">
        <svg style="cursor: pointer;" onclick="backToChats()" xmlns="http://www.w3.org/2000/svg" width="23" height="16" viewBox="0 0 23 16"
          fill="none">
          <path
            d="M0.292893 7.29289C-0.0976311 7.68342 -0.0976311 8.31658 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292893 7.29289ZM22.5 7H1V9H22.5V7Z"
            fill="black" />
        </svg>
        <div class="header__content">
          <span id="chatName"></span>
          <span id="chatId"></span>
        </div>
      </div>

      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 24 20" fill="none"
        onclick="toggleChat()">
        <path d="M1 1L12 12L23 1" stroke="black" stroke-width="2.5" />
        <path d="M1 7L12 18L23 7" stroke="black" stroke-width="2.5" />
      </svg>
    </div>
    <div class="user_chat__body" id="chatBody">
      <!-- Сообщения будут добавляться динамически -->
    </div>
    <div class="user_chat__footer">
      <div class="user_chat__footer__input">
        <input type="text" placeholder="Начните новое сообщение" id="messageInput">
        <svg id="sendMessageButton" data-friendId="" xmlns="http://www.w3.org/2000/svg" width="13" height="12"
          viewBox="0 0 13 12" fill="none" onclick="sendMessage(this)">
          <path
            d="M12.5303 6.53033C12.8232 6.23744 12.8232 5.76256 12.5303 5.46967L7.75736 0.696698C7.46447 0.403805 6.98959 0.403805 6.6967 0.696699C6.40381 0.989592 6.40381 1.46447 6.6967 1.75736L10.9393 6L6.6967 10.2426C6.40381 10.5355 6.40381 11.0104 6.6967 11.3033C6.98959 11.5962 7.46447 11.5962 7.75736 11.3033L12.5303 6.53033ZM6.55671e-08 6.75L12 6.75L12 5.25L-6.55671e-08 5.25L6.55671e-08 6.75Z"
            fill="black" />
        </svg>
      </div>
    </div>
  </div>
</div>
<style>
  .user_chat__footer {
    padding: 8px 15px;
    box-shadow: 0px -7px 7px rgba(0, 0, 0, 0.05);
  }


  .user_chat__footer__input {
    display: flex;
    justify-content: space-between;
    padding: 5px 10px;
    background-color: #F3F3F3;
    border-radius: 16px;
    align-items: center;
  }

  .user_chat__footer__input input:focus {
    outline: none;
    border: none;
  }

  .user_chat__footer__input input {
    background-color: #F3F3F3;

  }
</style>
<style>
  .user_chat__message {
    display: flex;
    flex-direction: column;
    margin-bottom: 10px;
  }

  .user_chat__body {
    display: flex;
    flex-direction: column;
    padding: 35px 20px;
    overflow-y: auto;
    height: 100%;
  }

  .user_chat__message.received {
    width: max-content;
    align-self: flex-start;
  }

  .user_chat__message.sent {
    width: max-content;
    align-self: flex-end;
  }

  .user_chat__message.received .message__content {
    padding: 10px 26px;
    background: #EAEAEA;
    border-radius: 35px 35px 35px 10px;
  }

  .user_chat__message.sent .message__content {
    padding: 10px 26px;
    background: #FBD570;
    border-radius: 35px 35px 10px 35px;
  }

  .user_chat__message.sent .message_time {
    text-align: right;
  }

  .chat {
    width: 400px;
    height: 580px;
    position: fixed;
    bottom: 30px;
    right: 100px;
    z-index: 999999;
    background: white;
    border-radius: 14px;
    transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
    opacity: 0;
    transform: translateY(20px);
    flex-direction: column;
    display: flex;
    border: 1px solid #E6E6E6;
    box-shadow: 0px 7px 7px rgba(0, 0, 0, 0.2);
  }

  .user_chat {
    display: flex;
    flex-direction: column;
    height: 100%;
  }

  .user_chat__header {
    box-shadow: 0px 7px 7px rgba(0, 0, 0, 0.05);
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 8px 20px;
  }

  .header__content {
    display: flex;
    flex-direction: column;
  }

  .chat.show {
    opacity: 1;
    transform: translateY(0);
  }

  .chat__header {
    padding: 21px;
    padding-bottom: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .chat__list {
    flex-grow: 1;
    overflow-y: auto;
    margin-bottom: 15px;
    display: flex;
    flex-direction: column;
    text-align: center;
    align-items: center;
  }

  .chat__list img {
    max-width: 100px;
    width: 47px;
    border-radius: 100%;

  }

  .chat__item {
    padding: 8px 28px;
    cursor: pointer;
    width: 100%;
  }

  .chat__item:hover {
    background-color: #f1f1f1;
  }

  .chat__input {
    display: flex;
  }

  .chat__input input {
    flex-grow: 1;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px 0 0 5px;
  }

  .chat__input button {
    padding: 10px 15px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 0 5px 5px 0;
    cursor: pointer;
  }
</style>

<script>
  let currentChatId = null;
  let waitMessageInterval = null;
  let lastMessageId = null;

  function openChatFromButton(chatId, chatName) {
    toggleChat();
    openChat(chatId, chatName);
  }

  function toggleChat() {
    const chatContainer = document.getElementById('chatContainer');
    clearInterval(waitMessageInterval);
    if (chatContainer.style.display === 'none') {
      chatContainer.style.display = 'flex';
      setTimeout(() => {
        chatContainer.classList.add('show');
      }, 10);
    } else {
      chatContainer.classList.remove('show');
      setTimeout(() => {
        chatContainer.style.display = 'none';
      }, 300);
    }
  }

  function openChat(chatId, chatName) {
    if (currentChatId !== null) {
      clearInterval(waitMessageInterval);
    }
    currentChatId = chatId;
    lastMessageId = null;
    const chat__header = document.querySelector(".chat__header")
    chat__header.classList.add('hidden')
    const chatList = document.getElementById('chatList');
    const userChat = document.querySelector('.user_chat');
    const chatBody = document.getElementById('chatBody');
    const chatNameElement = document.getElementById('chatName');
    const chatIdElement = document.getElementById('chatId');

    chatList.style.display = 'none';
    userChat.style.display = 'flex';
    chatBody.innerHTML = '';
    chatNameElement.textContent = chatName;
    chatIdElement.textContent = `ID ${chatId}`;
    var sendMessageButton = document.getElementById("sendMessageButton")
    sendMessageButton.setAttribute('data-friendId', chatId);

    // Отметить сообщения как прочитанные
    $.ajax({
      url: "{{ route('messages.markAsRead') }}",
      type: "POST",
      data: {
        _token: "{{ csrf_token() }}",
        friendId: chatId
      },
      success: function(response) {
        console.log('Сообщения отмечены как прочитанные');
        // Обновить счетчик непрочитанных сообщений
        updateUnreadCount(chatId, 0);
      }
    });

    waitMessageInterval = setInterval(function() {
      $.ajax({
        url: "{{ route('messages.index') }}",
        type: "POST",
        data: {
          _token: "{{ csrf_token() }}",
          user_id: '{{ auth()->user()->id }}',
          friendId: chatId,
          lastMessageId: lastMessageId
        },
        success: function(response) {
          if (response.messages.length > 0) {
            let newMessagesHTML = '';
            response.messages.forEach(function(message) {
              newMessagesHTML += `<div class="user_chat__message ${message.user_id === <?= auth()->user()->id ?> ? 'sent' : 'received'}">
                  <div class="message__content">${message.message}</div>
                  <div class="message_time">${new Date(message.created_at).toLocaleString('en-EN', { month: 'short', day: 'numeric', year: 'numeric', hour: 'numeric', minute: 'numeric', hour12: false })}</div>
                </div>
              `;
            });

            if (newMessagesHTML !== chatBody.innerHTML) {
              chatBody.innerHTML = newMessagesHTML;
              chatBody.scrollTop = chatBody.scrollHeight;
            }

            lastMessageId = response.messages[response.messages.length - 1].id;
          }
        }
      });
    }, 1000);
  }

  function backToChats() {
    const chatList = document.getElementById('chatList');
    const userChat = document.querySelector('.user_chat');
    const chat__header = document.querySelector(".chat__header")
    chat__header.classList.remove('hidden')
    userChat.style.display = 'none';
    chatList.style.display = 'flex';
    clearInterval(waitMessageInterval);
    currentChatId = null;
    lastMessageId = null;
  }

  function sendMessage(element) {
    const messageInput = document.getElementById('messageInput');
    const message = messageInput.value.trim();
    if (message) {
      $.ajax({
        url: "{{ route('messages.store') }}",
        type: "POST",
        data: {
          _token: "{{ csrf_token() }}",
          user_id: "{{ auth()->user()->id }}",
          friendId: element.getAttribute('data-friendId'),
          message: message
        },
        success: function(response) {
          console.log(response);
          appendMessage(message, 'sent');
          messageInput.value = '';
        },
        error: function(xhr, status, error) {
          console.log(xhr.responseText);
        }
      })
    }
  }

  function showWaitingIndicator() {
    const chatBody = document.getElementById('chatBody');
    const waitingIndicator = document.createElement('div');
    waitingIndicator.id = 'waitingIndicator';
    waitingIndicator.className = 'message received';
    waitingIndicator.innerHTML = '<span class="typing-indicator">...</span>';
    chatBody.appendChild(waitingIndicator);
  }

  function hideWaitingIndicator() {
    const waitingIndicator = document.getElementById('waitingIndicator');
    if (waitingIndicator) {
      waitingIndicator.remove();
    }
  }

  function appendMessage(message, type) {
    const chatBody = document.getElementById('chatBody');
    const messageElement = document.createElement('div');
    messageElement.classList.add('user_chat__message', type);

    const contentElement = document.createElement('div');
    contentElement.classList.add('message__content');
    contentElement.textContent = message;

    const timeElement = document.createElement('div');
    timeElement.classList.add('message_time');
    const now = new Date();
    const options = {
      year: 'numeric',
      month: 'short',
      day: 'numeric',
      hour: 'numeric',
      minute: '2-digit'
    };
    timeElement.textContent = now.toLocaleString('en-EN', options);

    messageElement.appendChild(contentElement);
    messageElement.appendChild(timeElement);

    chatBody.appendChild(messageElement);
    chatBody.scrollTop = chatBody.scrollHeight;
  }

  function updateUnreadCount(chatId, count) {
    const chatItem = document.querySelector(`.chat__item[onclick*="${chatId}"]`);
    if (chatItem) {
      let badge = chatItem.querySelector('.unread-badge');
      if (count > 0) {
        if (!badge) {
          badge = document.createElement('span');
          badge.className = 'unread-badge';
          chatItem.appendChild(badge);
        }
        badge.textContent = count;
      } else if (badge) {
        badge.remove();
      }
    }
  }

  // Слушатель для клавиши Enter в поле ввода
  document.getElementById('messageInput').addEventListener('keypress', function(event) {
    if (event.key === 'Enter') {
      sendMessage(document.getElementById('sendMessageButton'));
    }
  });
</script>
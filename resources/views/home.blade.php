<!DOCTYPE html>
<!-- saved from url=(0039)https://app.listenup.ai/spaces/487/home -->
<html style="">

<head>
  @include('fonts')
  <link href="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/63558f9ff9e1cc03ead6aea4_32.png"
    rel="shortcut icon" type="image/x-icon" />
  <link href="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/63558f5e63bfed5fc2509a07_256.png"
    rel="apple-touch-icon" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Home | SoundLine!</title>
  <meta name="next-head-count" content="3" />
  <link rel="preload" href="./home_files/b08c6edf6d5dd570.css" as="style" />
  <link rel="stylesheet" href="./home_files/b08c6edf6d5dd570.css" data-n-g="" />
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


</head>

<body style="">
  <div id="__next">
    <div>
      <div>
        <div class="bg-primary-100 bg-dot-grid-pattern bg-repeat bg-pattern w-screen h-screen">
          <section id="app-navbar"
            class="flex justify-between pr-4 bg-neutral-50 border-neutral-400 items-center h-[4rem] border-b-1">
            <section class="flex items-center flex-grow basis-0 justify-start">
              <button data-state="closed">
                <div
                  class="w-52 flex flex-col justify-start items-start pl-4 hover:cursor-cool-clickable disabled:cursor-cool-normal">
                  <img alt="SoundLine Navbar Logo" loading="lazy" width="120" height="25" decoding="async" data-nimg="1"
                    src="/assets/logo.png" style="color: transparent" />
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
              <div dir="ltr" data-orientation="horizontal" class="relative h-fit select-none w-full">
                <div role="tablist" aria-orientation="horizontal"
                  class="rounded flex flex-row w-full justify-evenly gap-2" tabindex="0" data-orientation="horizontal"
                  style="outline: none">
                  <a type="button" role="tab" aria-selected="true" aria-controls="radix-:r4q:-content-home"
                    data-state="active" id="radix-:r4q:-trigger-home"
                    class="px-3 py-2 rounded border-opacity-0 flex items-center z-10 hover:cursor-cool-clickable disabled:cursor-cool-normal w-fit justify-center"
                    tabindex="-1" data-orientation="horizontal" data-radix-collection-item="" href="#">
                    <div class="flex items-center justify-center gap-2 py-1">
                      <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 3" viewBox="0 0 24 24" class="h-6 w-6"
                        style="max-width: 50vw; max-height: 50vh">
                        <path fill="none" d="M0 0h24v24H0Z"></path>
                        <path fill="none" class="stroke-1.5 stroke-neutral-700 stroke-neutral-700"
                          stroke-linecap="round" stroke-linejoin="round"
                          d="M15.3 15.918H8.564M16 21H8a5 5 0 0 1-5-5v-4.8a5 5 0 0 1 1.877-3.904l4-3.2a5 5 0 0 1 6.247 0l4 3.2A5 5 0 0 1 21 11.2V16a5 5 0 0 1-5 5Z">
                        </path>
                      </svg>
                      <h5 class="font-bold">Home</h5>
                    </div>
                  </a><a type="button" role="tab" aria-selected="false" aria-controls="radix-:r4q:-content-captures"
                    data-state="inactive" id="radix-:r4q:-trigger-captures"
                    class="px-3 py-2 rounded border-opacity-0 flex items-center z-10 hover:bg-neutral-100 hover:transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal w-fit justify-center"
                    tabindex="-1" data-orientation="horizontal" data-radix-collection-item=""
                    href="{{  route("inbox") }}">
                    <div class="flex items-center justify-center gap-2 py-1">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="h-6 w-6"
                        style="max-width: 50vw; max-height: 50vh">
                        <path class="stroke-1.5 stroke-neutral-700" stroke-linecap="round" stroke-linejoin="round"
                          d="M4 8V6a2 2 0 0 1 2-2h2M4 16v2a2 2 0 0 0 2 2h2m8-16h2a2 2 0 0 1 2 2v2m-4 12h2a2 2 0 0 0 2-2v-2M9 12a3 3 0 1 0 6 0 3 3 0 0 0-6 0Z">
                        </path>
                      </svg>
                      <h5 class="font-bold">Inbox</h5>
                    </div>
                  </a><a type="button" role="tab" aria-selected="false" aria-controls="radix-:r4q:-content-insights"
                    data-state="inactive" id="radix-:r4q:-trigger-insights"
                    class="px-3 py-2 rounded border-opacity-0 flex items-center z-10 hover:bg-neutral-100 hover:transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal w-fit justify-center"
                    tabindex="-1" data-orientation="horizontal" data-radix-collection-item=""
                    href="{{ route("meetings")  }}">
                    <div class="flex items-center justify-center gap-2 py-1">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6"
                        style="max-width: 50vw; max-height: 50vh">
                        <path fill="none" class="stroke-1.5 stroke-neutral-700" stroke-linecap="round"
                          stroke-linejoin="round" d="M12.967 3 4.75 14H12l-.967 7 8.217-11H12Z"></path>
                        <path fill="none" d="M0 0h24v24H0Z"></path>
                      </svg>
                      <h5 class="font-bold">Meetings</h5>
                    </div>
                  </a><a type="button" role="tab" aria-selected="false" aria-controls="radix-:r4q:-content-analytics"
                    data-state="inactive" id="radix-:r4q:-trigger-analytics"
                    class="px-3 py-2 rounded border-opacity-0 flex items-center z-10 hover:bg-neutral-100 hover:transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal w-fit justify-center"
                    tabindex="-1" data-orientation="horizontal" data-radix-collection-item=""
                    href="{{ route("analytics")  }}">
                    <div class="flex items-center justify-center gap-2 py-1">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6"
                        style="max-width: 50vw; max-height: 50vh">
                        <path fill="none" class="stroke-1.5 stroke-neutral-700" stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M16.5 3.5h3A1.5 1.5 0 0 1 21 5v14a1.5 1.5 0 0 1-1.5 1.5H15h0V5a1.5 1.5 0 0 1 1.5-1.5ZM15 20.5H9v-10A1.5 1.5 0 0 1 10.5 9H15M4.5 15H9v5.5h0-4.5A1.5 1.5 0 0 1 3 19v-2.5A1.5 1.5 0 0 1 4.5 15Z">
                        </path>
                        <path fill="none" d="M24 24H0V0h24Z"></path>
                      </svg>
                      <h5 class="font-bold">Analytics</h5>
                    </div>
                  </a><a type="button" role="tab" aria-selected="false" aria-controls="radix-:r4q:-content-users"
                    data-state="inactive" id="radix-:r4q:-trigger-users"
                    class="px-3 py-2 rounded border-opacity-0 flex items-center z-10 hover:bg-neutral-100 hover:transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal w-fit justify-center"
                    tabindex="-1" data-orientation="horizontal" data-radix-collection-item=""
                    href="{{ route("friends")  }}">
                    <div class="flex items-center justify-center gap-2 py-1">
                      <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-1.5"
                        style="max-width: 50vw; max-height: 50vh">
                        <g stroke-linecap="round" class="stroke-neutral-700" fill="none" stroke-linejoin="round">
                          <path
                            d="M20.793 9.524a2.023 2.023 0 1 1-2.861 2.86 2.023 2.023 0 0 1 2.86-2.86M14.203 5.912a3.115 3.115 0 1 1-4.406 4.406 3.115 3.115 0 0 1 4.406-4.406M6.068 9.524a2.023 2.023 0 1 1-2.86 2.86 2.023 2.023 0 0 1 2.86-2.86M23 19v-1.096a2.5 2.5 0 0 0-2.5-2.5h-.801M1 19v-1.096a2.5 2.5 0 0 1 2.5-2.5h.801M17.339 19v-1.601a3.5 3.5 0 0 0-3.5-3.5H10.16a3.5 3.5 0 0 0-3.5 3.5V19">
                          </path>
                        </g>
                        <path fill="none" d="M0 0h24v24H0Z"></path>
                      </svg>
                      <h5 class="font-bold">Friends</h5>
                    </div>
                  </a>
                </div>
                <div class="absolute top-0 left-0 rounded bg-neutral-200 border-1 border-neutral-400"
                  style="width: 97px; height: 48px; transform: none"></div>
              </div>
            </section>
            <div class="flex items-center justify-end gap-2 flex-grow basis-0">
              <button class="flex items-center font-bold rounded text-base font-bold px-3 py-3" tabindex="0">
                <div class="flex items-center gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-4 w-4"
                    style="max-width: 50vw; max-height: 50vh">
                    <path fill="none" class="stroke-2 stroke-neutral-600" stroke-linecap="round" stroke-linejoin="round"
                      d="M12.967 3 4.75 14H12l-.967 7 8.217-11H12Z"></path>
                    <path fill="none" d="M0 0h24v24H0Z"></path>
                  </svg>
                  <p class="text-neutral-600">Send us a feedback</p>
                </div>
              </button><button type="button"
                class="flex items-center justify-center w-fit rounded font-medium transition-colors select-none text-neutral-600 px-3 py-2"
                id="profile" aria-haspopup="menu" aria-expanded="false" data-state="closed" tabindex="0"
                style="transform: none">
                <div class="flex flex-row items-center justify-center gap-2 text-left mr-2">
                  <div class="relative">
                    <div
                      class="rounded-full border-neutral-700 relative overflow-hidden flex items-center justify-center bg-primary-500 relative w-10 h-10 min-w-[2.5rem] min-h-[2.5rem] border-1">
                      <img id="avatar_3" style="height:100%"
                        src="{{ auth()->user()->avatar ? asset('storage/' . auth()->user()->avatar) : asset('assets/member_avatar_453.png') }}"
                        alt="Avatar" class="object-cover" />
                    </div>
                    <div class="absolute -bottom-1 -right-1">
                      <div
                        class="rounded-full border-neutral-700 relative overflow-hidden flex items-center justify-center bg-primary-500 relative w-5 h-5 min-w-[1rem] min-h-[1rem] border-1">
                        <img src="{{asset("assets/organization_avatar_476.png")}}" alt="Avatar" class="object-cover" />
                      </div>
                    </div>
                  </div>
                  <h5 class="font-bold">{{ auth()->user()->name}}</h5>
                </div>
                <div style="transform: none">
                  <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-6"
                    style="max-width: 50vw; max-height: 50vh">
                    <path d="m8 10 4 4 4-4" stroke-linecap="round" class="stroke-2 stroke-neutral-700" stroke="#323232"
                      fill="none" stroke-linejoin="round"></path>
                    <path fill="none" d="M0 0h24v24H0Z"></path>
                  </svg>
                </div>
              </button>
            </div>
          </section>
          <style>
            .main {
              filter: blur(5px);
              pointer-events: none;
            }
          </style>
          <div class="flex">
            <section class="h-[calc(100vh-4rem)] w-screen">
              <div class="h-full w-full flex items-center justify-center relative bg-neutral-100">
                <section style="overflow-y:scroll"
                  class="w-full h-full flex flex-col gap-2 items-center  mx-5 my-10 px-5 pt-5">
                  <div id="section_1"
                    class="h-fit w-full bg-neutral-100 border-1 border-neutral-400 rounded flex flex-col items-center justify-between overflow-clip">
                    <section class="h-[17rem] w-full flex items-start justify-start pt-5 px-5">
                      <div class="flex flex-col justify-between" style="height: 90%;">
                        <div>
                          <h1>
                            Start / Join meeting
                          </h1>
                          <span style="height:100%">
                            Connect to the meeting room or create your own room with the Pro version of the Soundline.
                            Communicate, create, broadcast.
                          </span>
                        </div>

                        <div class="buttons">

                          <script src="https://code.jquery.com/jquery-3.7.1.min.js"
                            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
                            crossorigin="anonymous"></script>
                          <a id="button_block"
                            class="flex items-center justify-center gap-2 rounded font-medium leading-4 whitespace-nowrap overflow-hidden text-overflow-ellipsis w-auto min-w-0 min-h-0 select-none px-3 py-2 bg-secondary-300 border-[2px] border-neutral-700 shadow-smoothxl opacity-100"
                            tabindex="0" onclick="showInput()">
                            <h4 id="main_text">Join meeting</h4>
                            <div id="inputContainer" class="hidden">
                              <input type="text" style="font-weight: 700;" id="meetingInput" placeholder="Enter meeting code">
                              <div class="line"></div>
                              <button type="button" style="font-weight: 700;" onclick="joinMeeting()">ENTER</button>
                            </div>
                            <h4 id="download_app" style="font-weight: 700;" class="hidden">Download the app</h4>
                          </a>


                          <style>
                            #inputContainer {
                              display: flex;
                              gap: 13px;
                              opacity: 0;
                              /* Start invisible */

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
                              padding: 5px 10px;
                            }

                            #inputContainer input::placeholder {
                              color: black;
                            }

                            .line {
                              height: auto;
                              border: 1px solid black;
                            }

                            .error_field {
                              border-color: red !important;
                              color: red;
                            }

                            .hidden {
                              display: none !important;
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



                          <button style="" type="button"
                            class="starAnimationBlock flex items-center justify-center gap-2 rounded font-medium leading-4 whitespace-nowrap overflow-hidden text-overflow-ellipsis w-auto min-w-0 min-h-0 select-none px-3 py-2 bg-secondary-300 border-[2px] border-neutral-700 shadow-smoothxl opacity-100"
                            tabindex="0" style="transform: none">
                            <h4>Create a room</h4>
                            <img style="    position: absolute;
top: -20px;
right: -15px;" src="{{ asset("assets/star.png")}}" class="starAnimation" alt="">
                            <style>
                              .starAnimationBlock {
                                position: relative;
                                overflow: visible !important;
                              }

                              .starAnimationBlock:focus .starAnimation {
                                animation: star 1s infinite ease-in-out;
                                transform: rotate(-30deg);
                              }

                              
                              @keyframes star {
                                0% {
                                  transform: rotate(0deg);
                                }

                                50% {
                                  transform: rotate(30deg);
                                }

                                100% {
                                  transform: rotate(0deg);
                                }
                              }
                            </style>
                          </button>
                        </div>
                        <style>
                          .buttons {
                            display: flex;
                            gap: 19px;
                          }
                        </style>

                      </div>

                      <img alt="SoundLine Navbar Logo" loading="lazy" width="0" height="0"
                        style="width:40%;align-self: center;" decoding="async" data-nimg="1" class="w-auto h-auto"
                        src="{{ asset("/assets/main_image.png") }}" style="color: transparent">
                    </section>

                  </div>
                  <div id="section_2" style="display:none"
                    class="h-fit w-full bg-neutral-100 border-1 border-neutral-400 rounded flex flex-col items-center justify-between overflow-clip">
                    <section class="h-[17rem] w-full flex items-start justify-start pt-5 px-5">
                      <div class="flex flex-col justify-between" style="height: 90%;">
                        <div>
                          <h1>
                          Synchronize the app with the site
                          </h1>
                          <span style="height:100%">
                          Please launch the application and click the "sync" button to connect to the site and connect to the room
                          </span>
                        </div>

                        <div class="buttons">

                          <script src="https://code.jquery.com/jquery-3.7.1.min.js"
                            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
                            crossorigin="anonymous"></script>
                          <a id="download_block_a_href"
                            class="flex items-center justify-center gap-2 rounded font-medium leading-4 whitespace-nowrap overflow-hidden text-overflow-ellipsis w-auto min-w-0 min-h-0 select-none px-3 py-2 bg-secondary-300 border-[2px] border-neutral-700 shadow-smoothxl opacity-100"
                            tabindex="0">
                            <h4 id="text_download">Download the app</h4>
                          </a>
                          <a id="sync_a_block" style="display: none"
                            class="flex items-center justify-center gap-2 rounded font-medium leading-4 whitespace-nowrap overflow-hidden text-overflow-ellipsis w-auto min-w-0 min-h-0 select-none px-3 py-2 bg-secondary-300 border-[2px] border-neutral-700 shadow-smoothxl opacity-100"
                            tabindex="0">
                            <h4 id="text_download">Synchronize</h4>
                          </a>
                          <script>
                            var download_block_a_href =document.getElementById("download_block_a_href")

                            download_block_a_href.addEventListener('click', function(){
                              download_block_a_href.style.display = 'none';
                              var sync_a_block =document.getElementById('sync_a_block')

                              sync_a_block.style.display = 'flex';
                              sync_a_block.addEventListener("click", function(){
                                sync_a_block.classList.add("errorBlock")
                              })
                            })
                          </script>
<style>
  .errorBlock{
    border-color: red !important;
    color:red !important;
  }
  .errorBlock h4{
    color:red !important;
  }
</style>
                          <button onclick="showFirstBlock()" style="position:relative;overflow:visible" type="button"
                            class="flex items-center justify-center gap-2 rounded font-medium leading-4 whitespace-nowrap overflow-hidden text-overflow-ellipsis w-auto min-w-0 min-h-0 select-none px-3 py-2 bg-secondary-300 border-[2px] border-neutral-700 shadow-smoothxl opacity-100"
                            tabindex="0" style="transform: none">
                            <h4>back</h4>


                          </button>
                        </div>
                        <style>
                          .buttons {
                            display: flex;
                            gap: 19px;
                          }
                        </style>

                      </div>

                      <img alt="SoundLine Navbar Logo" loading="lazy" width="0" height="0"
                        style="width:40%;align-self: center;" decoding="async" data-nimg="1" class="w-auto h-auto"
                        src="{{ asset("/assets/synchronize.gif") }}" style="color: transparent">
                    </section>

                  </div>



                  <div
                    class="h-fit w-full bg-neutral-100 rounded flex flex-col items-center justify-between overflow-clip">
                    <section class=" flex w-full flex items-start justify-start pt-5">
                      <div class="flex w-full flex-row justify-between" style="gap:18px">
                        <div class="flex-grow w-full border-1 border-neutral-400 rounded " style="padding:14px">
                          <h4>
                            Start or Join meeting
                          </h4>
                          <span>
                            Log in to the meeting by clicking on the corresponding button on the main page of your space
                          </span>
                          <img src="{{ asset("/assets/block_1.png") }}" alt="">
                        </div>
                        <div class="flex-grow w-full border-1 border-neutral-400 rounded " style="padding:14px">
                          <h4>
                            Click "Sync" in the app
                          </h4>
                          <span>
                            click "sync" in the application and wait for the web version to sync with the application in
                            order to work in the browser
                          </span>
                          <img src="{{ asset("/assets/block_2.png") }}" alt="">
                        </div>
                        <div class="flex-grow w-full border-1 border-neutral-400 rounded " style="padding:14px">
                          <h4>
                            Enjoy the functionality
                          </h4>
                          <span>
                            Connect an AI voice translator, record, shoot, show, thanks to an extensive set of
                            functions.
                          </span>
                          <img src="{{ asset("/assets/block_3.png") }}" alt="">
                        </div>
                      </div>
                    </section>
                  </div>
                  <div
                    class="h-fit w-full bg-neutral-100 border-1 border-neutral-400 rounded flex flex-col items-center justify-between overflow-clip">
                    <section class="h-[17rem] w-full flex items-start justify-start pt-5 px-5">
                      <img alt="SoundLine Navbar Logo" loading="lazy" width="0" height="0" decoding="async"
                        data-nimg="1" class="w-auto h-auto" src="{{ asset("/assets/chromebanner.png") }}"
                        style="color: transparent" />
                    </section>

                  </div>
                </section>
                <section class="w-full h-full flex flex-col gap-2 mx-5 my-10 px-5 pt-5">
                  <h2>Get started</h2>
                  <div class="h-full w-full overflow-y-auto">
                    <div class="flex flex-col gap-4">
                      <div
                        class="flex flex-col items-center justify-center w-full bg-primary-300 border-1 border-primary-500 rounded">
                        <div class="h-min p-4 hover:cursor-cool-clickable w-full" onclick="toggleSection(this)">
                          <div class="flex items-center justify-between select-none">
                            <div class="flex-grow">
                              <div class="flex items-center justify-center gap-3 w-fit">
                                <div class="">
                                  <button type="button" role="checkbox" aria-checked="true" data-state="checked"
                                    value="on"
                                    class="flex items-center justify-center bg-neutral-50 border-neutral-400 bg-primary-500 border-primary-700 rounded-full w-6 h-6 border-2">
                                    <span data-state="checked" style="pointer-events: none"><svg viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 stroke-primary-700" style="
                                            max-width: 50vw;
                                            max-height: 50vh;
                                          ">
                                        <g fill="none">
                                          <path class="stroke-2" stroke-linecap="round" stroke-linejoin="round"
                                            d="m20 6.5-11 11-5-5"></path>
                                        </g>
                                      </svg></span>
                                  </button>
                                </div>
                                <h4 class="font-bold">
                                  Import user feedback &amp; research
                                </h4>
                              </div>
                            </div>
                            <section class="flex gap-4 w-fit">
                              <div class="">
                                <p class="text-neutral-100"></p>
                              </div>
                              <div style="transform: none">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 toggle-icon"
                                  style="max-width: 50vw; max-height: 50vh; transform: rotate(180deg);">
                                  <path d="m8 10 4 4 4-4" stroke-linecap="round" class="stroke-2 stroke-neutral-700"
                                    stroke="#323232" fill="none" stroke-linejoin="round"></path>
                                  <path fill="none" d="M0 0h24v24H0Z"></path>
                                </svg>
                              </div>
                            </section>
                          </div>
                        </div>
                        <section class="w-full overflow-clip px-4 collapsible-section"
                          style="opacity: 1; height: auto; display: none;">
                          <div class="flex items-center justify-center gap-4 w-full pl-9 pb-5 h-[20rem]">
                            <div class="flex flex-col justify-between gap-4 w-1/2 h-full">
                              <p class="select-none">Centralize your user feedback & research in your account.
                                Use the native integrations to import them automatically or
                                import manually via a CSV.</p>
                              <div class="pb-2 w-full flex items-center justify-start">
                                <button type="button" onclick="window.location.href='{{ route('inbox') }}'"
                                  class="flex items-center justify-center gap-2 rounded font-medium leading-4 whitespace-nowrap overflow-hidden text-overflow-ellipsis w-auto min-w-0 min-h-0 select-none px-3 py-2 bg-secondary-300 border-[2px] border-neutral-700 shadow-smoothxl opacity-100"
                                  tabindex="0" style="transform: none">
                                  <h4>Import your first feedback</h4>
                                </button>
                              </div>
                            </div>
                            <div class="w-1/2 h-full relative select-none">
                              <img alt="import-feedback" loading="lazy" decoding="async" data-nimg="fill"
                                src="{{ asset("assets/block_1_home.png")}}" style="
                                    position: absolute;
                                    height: 100%;
                                    width: 100%;
                                    inset: 0px;
                                    object-fit: contain;
                                    color: transparent;
                                  ">
                            </div>
                          </div>
                        </section>
                      </div>
                      <div
                        class="flex flex-col items-center justify-center w-full bg-neutral-200 border-1 border-neutral-400 rounded">
                        <div class="h-min p-4 hover:cursor-cool-clickable w-full" onclick="toggleSection(this)">
                          <div class="flex items-center justify-between select-none">
                            <div class="flex-grow">
                              <div class="flex items-center justify-center gap-3 w-fit">
                                <div class="">
                                  <button type="button" role="checkbox" aria-checked="true" data-state="checked"
                                    value="on"
                                    class="flex items-center justify-center bg-neutral-300 bg-neutral-300 rounded-full w-6 h-6 border-0">
                                    <span data-state="checked" style="pointer-events: none"><svg viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 stroke-neutral-50" style="
                                            max-width: 50vw;
                                            max-height: 50vh;
                                          ">
                                        <g fill="none">
                                          <path class="stroke-2" stroke-linecap="round" stroke-linejoin="round"
                                            d="m20 6.5-11 11-5-5"></path>
                                        </g>
                                      </svg></span>
                                  </button>
                                </div>
                                <h4 class="font-bold">Highlight to create insights</h4>
                              </div>
                            </div>
                            <section class="flex gap-4 w-fit">
                              <div class="">
                                <p class="text-neutral-100"></p>
                              </div>
                              <div>
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 toggle-icon"
                                  style="max-width: 50vw; max-height: 50vh">
                                  <path d="m8 10 4 4 4-4" stroke-linecap="round" class="stroke-2 stroke-neutral-500"
                                    stroke="#323232" fill="none" stroke-linejoin="round"></path>
                                  <path fill="none" d="M0 0h24v24H0Z"></path>
                                </svg>
                              </div>
                            </section>
                          </div>
                        </div>
                        <section class="w-full overflow-clip px-4 collapsible-section"
                          style="opacity: 1; height: auto;display: none;">
                          <div class="flex items-center justify-center gap-4 w-full pl-9 pb-5 h-[20rem]">
                            <div class="flex flex-col justify-between gap-4 w-1/2 h-full">
                              <p class="select-none">
                                Make your first call and go over all captures in your inbox to identify and highlight
                                valuable parts. This will create an insight. You will find all your insights in its tab.
                              </p>
                              <div class="pb-2 w-full flex items-center justify-start">
                                <button type="button" onclick="window.location.href='{{ route('inbox') }}'"
                                  class="flex items-center justify-center gap-2 rounded font-medium leading-4 whitespace-nowrap overflow-hidden text-overflow-ellipsis w-auto min-w-0 min-h-0 select-none px-3 py-2 bg-secondary-300 border-[2px] border-neutral-700 shadow-smoothxl opacity-100"
                                  tabindex="0" style="transform: none">
                                  <h4>Create your first insight</h4>
                                </button>
                              </div>
                            </div>
                            <div class="w-1/2 h-full relative select-none">
                              <img alt="create-insight" loading="lazy" decoding="async" data-nimg="fill"
                                src="{{ asset("assets/highlight-insight.png")}}" style="
                                    position: absolute;
                                    height: 100%;
                                    width: 100%;
                                    inset: 0px;
                                    object-fit: contain;
                                    color: transparent;
                                  " />
                            </div>
                          </div>
                        </section>
                      </div>

                      <div
                        class="flex flex-col items-center justify-center w-full bg-neutral-200 border-1 border-neutral-400 rounded">
                        <div class="h-min p-4 hover:cursor-cool-clickable w-full" onclick="toggleSection(this)">
                          <div class="flex items-center justify-between select-none">
                            <div class="flex-grow">
                              <div class="flex items-center justify-center gap-3 w-fit">
                                <div class="">
                                  <button type="button" role="checkbox" aria-checked="true" data-state="checked"
                                    value="on"
                                    class="flex items-center justify-center bg-neutral-300 bg-neutral-300 rounded-full w-6 h-6 border-0">
                                    <span data-state="checked" style="pointer-events: none"><svg viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 stroke-neutral-50" style="
                                            max-width: 50vw;
                                            max-height: 50vh;
                                          ">
                                        <g fill="none">
                                          <path class="stroke-2" stroke-linecap="round" stroke-linejoin="round"
                                            d="m20 6.5-11 11-5-5"></path>
                                        </g>
                                      </svg></span>
                                  </button>
                                </div>
                                <h4 class="font-bold">Create meetings and use AI functions</h4>
                              </div>
                            </div>
                            <section class="flex gap-4 w-fit">
                              <div class="">
                                <p class="text-neutral-100"></p>
                              </div>
                              <div>
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 toggle-icon"
                                  style="max-width: 50vw; max-height: 50vh">
                                  <path d="m8 10 4 4 4-4" stroke-linecap="round" class="stroke-2 stroke-neutral-500"
                                    stroke="#323232" fill="none" stroke-linejoin="round"></path>
                                  <path fill="none" d="M0 0h24v24H0Z"></path>
                                </svg>
                              </div>
                            </section>
                          </div>
                        </div>
                        <section class="w-full overflow-clip px-4 collapsible-section"
                          style="opacity: 1; height: auto;display: none;">
                          <div class="flex items-center justify-center gap-4 w-full pl-9 pb-5 h-[20rem]">
                            <div class="flex flex-col justify-between gap-4 w-1/2 h-full">
                              <p class="select-none">
                                Create meetings, use the extensive functionality of AI assistants, make patterns of your
                                problems to understand what problems you should discuss at the next meeting. Don't
                                forget about the AI translator!
                              </p>
                              <div class="pb-2 w-full flex items-center justify-start">
                                <button type="button" onclick="window.location.href='{{ route('inbox') }}'"
                                  class="flex items-center justify-center gap-2 rounded font-medium leading-4 whitespace-nowrap overflow-hidden text-overflow-ellipsis w-auto min-w-0 min-h-0 select-none px-3 py-2 bg-secondary-300 border-[2px] border-neutral-700 shadow-smoothxl opacity-100"
                                  tabindex="0" style="transform: none">
                                  <h4>Create your first pattern</h4>
                                </button>
                              </div>
                            </div>
                            <div class="w-1/2 h-full relative select-none">
                              <img alt="create-pattern" loading="lazy" decoding="async" data-nimg="fill"
                                src="{{ asset("assets/block_2_home.png")}}" style="
                                    position: absolute;
                                    height: 100%;
                                    width: 100%;
                                    inset: 0px;
                                    object-fit: contain;
                                    color: transparent;
                                  " />
                            </div>
                          </div>
                        </section>
                      </div>
                      <div
                        class="flex flex-col items-center justify-center w-full bg-neutral-200 border-1 border-neutral-400 rounded">
                        <div class="h-min p-4 hover:cursor-cool-clickable w-full" onclick="toggleSection(this)">
                          <div class="flex items-center justify-between select-none">
                            <div class="flex-grow">
                              <div class="flex items-center justify-center gap-3 w-fit">
                                <div class="">
                                  <button type="button" role="checkbox" aria-checked="true" data-state="checked"
                                    value="on"
                                    class="flex items-center justify-center bg-neutral-300 bg-neutral-300 rounded-full w-6 h-6 border-0">
                                    <span data-state="checked" style="pointer-events: none"><svg viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 stroke-neutral-50" style="
                                            max-width: 50vw;
                                            max-height: 50vh;
                                          ">
                                        <g fill="none">
                                          <path class="stroke-2" stroke-linecap="round" stroke-linejoin="round"
                                            d="m20 6.5-11 11-5-5"></path>
                                        </g>
                                      </svg></span>
                                  </button>
                                </div>
                                <h4 class="font-bold">Share a pattern with your friends</h4>
                              </div>
                            </div>
                            <section class="flex gap-4 w-fit">
                              <div class="">
                                <p class="text-neutral-100"></p>
                              </div>
                              <div>
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 toggle-icon"
                                  style="max-width: 50vw; max-height: 50vh">
                                  <path d="m8 10 4 4 4-4" stroke-linecap="round" class="stroke-2 stroke-neutral-500"
                                    stroke="#323232" fill="none" stroke-linejoin="round"></path>
                                  <path fill="none" d="M0 0h24v24H0Z"></path>
                                </svg>
                              </div>
                            </section>
                          </div>
                        </div>
                        <section class="w-full overflow-clip px-4 collapsible-section"
                          style="opacity: 1; height: auto;display: none;">
                          <div class="flex items-center justify-center gap-4 w-full pl-9 pb-5 h-[20rem]">
                            <div class="flex flex-col justify-between gap-4 w-1/2 h-full">
                              <p class="select-none">
                                Add a pattern to your delivery document (Notion, Jira,
                                Linear, etc.) to give more context to the problem you are
                                solving and share the pattern with a friend
                              </p>
                              <div class="pb-2 w-full flex items-center justify-start">
                                <button type="button" onclick="window.location.href='{{ route('inbox') }}'"
                                  class="flex items-center justify-center gap-2 rounded font-medium leading-4 whitespace-nowrap overflow-hidden text-overflow-ellipsis w-auto min-w-0 min-h-0 select-none px-3 py-2 bg-secondary-300 border-[2px] border-neutral-700 shadow-smoothxl opacity-100"
                                  tabindex="0" style="transform: none">
                                  <h4>Share a pattern</h4>
                                </button>
                              </div>
                            </div>
                            <div class="w-1/2 h-full relative select-none">
                              <img alt="create-pattern" loading="lazy" decoding="async" data-nimg="fill"
                                src="{{ asset("assets/block_home_4.png")}}" style="
                                    position: absolute;
                                    height: 100%;
                                    width: 100%;
                                    inset: 0px;
                                    object-fit: contain;
                                    color: transparent;
                                  " />
                            </div>
                          </div>
                        </section>
                      </div>
                      <div
                        class="flex flex-col items-center justify-center w-full bg-neutral-200 border-1 border-neutral-400 rounded">
                        <div class="h-min p-4 hover:cursor-cool-clickable w-full" onclick="toggleSection(this)">
                          <div class="flex items-center justify-between select-none">
                            <div class="flex-grow">
                              <div class="flex items-center justify-center gap-3 w-fit">
                                <div class="">
                                  <button type="button" role="checkbox" aria-checked="true" data-state="checked"
                                    value="on"
                                    class="flex items-center justify-center bg-neutral-300 bg-neutral-300 rounded-full w-6 h-6 border-0">
                                    <span data-state="checked" style="pointer-events: none"><svg viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 stroke-neutral-50" style="
                                            max-width: 50vw;
                                            max-height: 50vh;
                                          ">
                                        <g fill="none">
                                          <path class="stroke-2" stroke-linecap="round" stroke-linejoin="round"
                                            d="m20 6.5-11 11-5-5"></path>
                                        </g>
                                      </svg></span>
                                  </button>
                                </div>
                                <h4 class="font-bold">Invite your friends to the SoundLine!</h4>
                              </div>
                            </div>
                            <section class="flex gap-4 w-fit">
                              <div class="">
                                <p class="text-neutral-100"></p>
                              </div>
                              <div>
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 toggle-icon"
                                  style="max-width: 50vw; max-height: 50vh">
                                  <path d="m8 10 4 4 4-4" stroke-linecap="round" class="stroke-2 stroke-neutral-500"
                                    stroke="#323232" fill="none" stroke-linejoin="round"></path>
                                  <path fill="none" d="M0 0h24v24H0Z"></path>
                                </svg>
                              </div>
                            </section>
                          </div>
                        </div>
                        <section class="w-full overflow-clip px-4 collapsible-section"
                          style="opacity: 1; height: auto;display: none;">
                          <div class="flex items-center justify-center gap-4 w-full pl-9 pb-5 h-[20rem]">
                            <div class="flex flex-col justify-between gap-4 w-1/2 h-full">
                              <p class="select-none">
                                Chat, create meetings, add friends and invite to meetings, all in convenient
                                functionality on the website and in the SoundLine app!
                              </p>
                              <div class="pb-2 w-full flex items-center justify-start">
                                <button type="button" onclick="window.location.href='{{ route('friends') }}'"
                                  class="flex items-center justify-center gap-2 rounded font-medium leading-4 whitespace-nowrap overflow-hidden text-overflow-ellipsis w-auto min-w-0 min-h-0 select-none px-3 py-2 bg-secondary-300 border-[2px] border-neutral-700 shadow-smoothxl opacity-100"
                                  tabindex="0" style="transform: none">
                                  <h4>Invite your friends</h4>
                                </button>
                              </div>
                            </div>
                            <div class="w-1/2 h-full relative select-none">
                              <img alt="create-pattern" loading="lazy" decoding="async" data-nimg="fill"
                                src="{{ asset("assets/block_3_home.png")}}" style="
                                    position: absolute;
                                    height: 100%;
                                    width: 100%;
                                    inset: 0px;
                                    object-fit: contain;
                                    color: transparent;
                                  " />
                            </div>
                          </div>
                        </section>
                      </div>
                      <script>
                        function toggleSection(element) {
                          const section = element.nextElementSibling;
                          const icon = element.querySelector('.toggle-icon');

                          if (section.style.display === 'none') {
                            section.style.display = 'block';
                            icon.style.transform = 'rotate(0deg)';
                          } else {
                            section.style.display = 'none';
                            icon.style.transform = 'rotate(180deg)';
                          }
                        }


                      </script>
                    </div>

                  </div>
                </section>
              </div>
            </section>
          </div>
          <div class="flex flex-col z-30">
            <div class="fixed bottom-2 right-2 mb-12 hover:cursor-cool-clickable disabled:cursor-cool-normal">
              <div
                class="w-11 h-11 rounded-full bg-[#FFF9DE] border-2 border-secondary-300 p-1 shadow-lg flex items-center justify-center hover:cursor-cool-clickable disabled:cursor-cool-normal"
                type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:r52:"
                data-state="closed">
                <img alt="SoundLine Illustration Logo" loading="lazy" width="25" height="25" decoding="async"
                  data-nimg="1" src="{{  asset("assets/ListenUp-Logo.svg") }} " style="color: transparent" />
              </div>
            </div>
            <div
              class="fixed bottom-2 right-2 w-11 h-11 rounded-full bg-primary-300 border-2 border-primary-600 p-4 shadow-lg flex items-center justify-center hover:cursor-cool-clickable disabled:cursor-cool-normal"
              style="z-index: 99999">
              <button type="button"
                class="flex items-center justify-center w-fit rounded font-medium transition-colors select-none text-neutral-600 px-3 py-2"
                id="radix-:r53:" aria-haspopup="menu" aria-expanded="false" data-state="closed" tabindex="0">
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

</body>

</html>
<style>
  /*
! tailwindcss v3.4.7 | MIT License | https://tailwindcss.com
*/
  *,
  :after,
  :before {
    border: 0 solid;
  }

  :after,
  :before {
    --tw-content: "";
  }

  :host,
  html {
    line-height: 1.5;
    -webkit-text-size-adjust: 100%;
    -moz-tab-size: 4;
    -o-tab-size: 4;
    tab-size: 4;
    font-family: jakarta, ui-sans-serif, system-ui;
    font-feature-settings: normal;
    font-variation-settings: normal;
    -webkit-tap-highlight-color: transparent;
  }

  body {
    margin: 0;
    line-height: inherit;
  }

  hr {
    height: 0;
    color: inherit;
    border-top-width: 1px;
  }

  abbr:where([title]) {
    -webkit-text-decoration: underline dotted;
    text-decoration: underline dotted;
  }

  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-size: inherit;
    font-weight: inherit;
  }

  a {
    color: inherit;
    text-decoration: inherit;
  }

  b,
  strong {
    font-weight: bolder;
  }

  code,
  kbd,
  pre,
  samp {
    font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas,
      Liberation Mono, Courier New, monospace;
    font-feature-settings: normal;
    font-variation-settings: normal;
    font-size: 1em;
  }

  small {
    font-size: 80%;
  }

  sub,
  sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline;
  }

  sub {
    bottom: -0.25em;
  }

  sup {
    top: -0.5em;
  }

  table {
    text-indent: 0;
    border-color: inherit;
    border-collapse: collapse;
  }

  button,
  input,
  optgroup,
  select,
  textarea {
    font-family: inherit;
    font-feature-settings: inherit;
    font-variation-settings: inherit;
    font-size: 100%;
    font-weight: inherit;
    line-height: inherit;
    letter-spacing: inherit;
    color: inherit;
    margin: 0;
    padding: 0;
  }

  button,
  select {
    text-transform: none;
  }

  button,
  input:where([type="button"]),
  input:where([type="reset"]),
  input:where([type="submit"]) {
    -webkit-appearance: button;
    background-color: transparent;
    background-image: none;
  }

  :-moz-focusring {
    outline: auto;
  }

  :-moz-ui-invalid {
    box-shadow: none;
  }

  progress {
    vertical-align: baseline;
  }

  ::-webkit-inner-spin-button,
  ::-webkit-outer-spin-button {
    height: auto;
  }

  [type="search"] {
    -webkit-appearance: textfield;
    outline-offset: -2px;
  }

  ::-webkit-search-decoration {
    -webkit-appearance: none;
  }

  ::-webkit-file-upload-button {
    -webkit-appearance: button;
    font: inherit;
  }

  summary {
    display: list-item;
  }

  blockquote,
  dd,
  dl,
  figure,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  hr,
  p,
  pre {
    margin: 0;
  }

  fieldset {
    margin: 0;
  }

  fieldset,
  legend {
    padding: 0;
  }

  menu,
  ol,
  ul {
    list-style: none;
    margin: 0;
    padding: 0;
  }

  dialog {
    padding: 0;
  }

  textarea {
    resize: vertical;
  }

  input::-moz-placeholder,
  textarea::-moz-placeholder {
    opacity: 1;
    color: #9ca3af;
  }

  input::placeholder,
  textarea::placeholder {
    opacity: 1;
    color: #9ca3af;
  }

  [role="button"],
  button {
    cursor: pointer;
  }

  :disabled {
    cursor: default;
  }

  audio,
  canvas,
  embed,
  iframe,
  img,
  object,
  svg,
  video {
    display: block;
    vertical-align: middle;
  }

  img,
  video {
    max-width: 100%;
    height: auto;
  }

  [hidden] {
    display: none;
  }

  @font-face {
    font-family: jakarta;
    font-weight: 200;
    font-style: normal;
    src: url(/fonts/PlusJakartaSans-ExtraLight.woff2) format("woff2");
  }

  @font-face {
    font-family: jakarta;
    font-weight: 200;
    font-style: italic;
    src: url(/fonts/PlusJakartaSans-ExtraLightItalic.woff2) format("woff2");
  }

  @font-face {
    font-family: jakarta;
    font-weight: 300;
    font-style: normal;
    src: url(/fonts/PlusJakartaSans-Light.woff2) format("woff2");
  }

  @font-face {
    font-family: jakarta;
    font-weight: 300;
    font-style: italic;
    src: url(/fonts/PlusJakartaSans-LightItalic.woff2) format("woff2");
  }

  @font-face {
    font-family: jakarta;
    font-weight: 400;
    font-style: normal;
    src: url(/fonts/PlusJakartaSans-Regular.woff2) format("woff2");
  }

  @font-face {
    font-family: jakarta;
    font-weight: 400;
    font-style: italic;
    src: url(/fonts/PlusJakartaSans-Italic.woff2) format("woff2");
  }

  @font-face {
    font-family: jakarta;
    font-weight: 500;
    font-style: normal;
    src: url(/fonts/PlusJakartaSans-Medium.woff2) format("woff2");
  }

  @font-face {
    font-family: jakarta;
    font-weight: 500;
    font-style: italic;
    src: url(/fonts/PlusJakartaSans-MediumItalic.woff2) format("woff2");
  }

  @font-face {
    font-family: jakarta;
    font-weight: 600;
    font-style: normal;
    src: url(/fonts/PlusJakartaSans-SemiBold.woff2) format("woff2");
  }

  @font-face {
    font-family: jakarta;
    font-weight: 600;
    font-style: italic;
    src: url(/fonts/PlusJakartaSans-SemiBoldItalic.woff2) format("woff2");
  }

  @font-face {
    font-family: jakarta;
    font-weight: 700;
    font-style: normal;
    src: url(/fonts/PlusJakartaSans-Bold.woff2) format("woff2");
  }

  @font-face {
    font-family: jakarta;
    font-weight: 700;
    font-style: italic;
    src: url(/fonts/PlusJakartaSans-BoldItalic.woff2) format("woff2");
  }

  @font-face {
    font-family: jakarta;
    font-weight: 800;
    font-style: normal;
    src: url(/fonts/PlusJakartaSans-ExtraBold.woff2) format("woff2");
  }

  @font-face {
    font-family: jakarta;
    font-weight: 800;
    font-style: italic;
    src: url(/fonts/PlusJakartaSans-ExtraBoldItalic.woff2) format("woff2");
  }

  @font-face {
    font-family: listenup-title;
    font-weight: 400;
    font-style: normal;
    src: url(/fonts/ListenUpTitle-Regular.woff2) format("woff2");
  }

  @font-face {
    font-family: listenup-title;
    font-weight: 400;
    font-style: italic;
    src: url(/fonts/ListenUpTitle-RegularItalic.woff2) format("woff2");
  }

  @font-face {
    font-family: listenup-title;
    font-weight: 500;
    font-style: normal;
    src: url(/fonts/ListenUpTitle-Medium.woff2) format("woff2");
  }

  @font-face {
    font-family: listenup-title;
    font-weight: 500;
    font-style: italic;
    src: url(/fonts/ListenUpTitle-MediumItalic.woff2) format("woff2");
  }

  @font-face {
    font-family: listenup-title;
    font-weight: 700;
    font-style: normal;
    src: url(/fonts/ListenUpTitle-Bold.woff2) format("woff2");
  }

  @font-face {
    font-family: listenup-title;
    font-weight: 700;
    font-style: italic;
    src: url(/fonts/ListenUpTitle-BoldItalic.woff2) format("woff2");
  }

  *,
  :after,
  :before {
    --tw-border-spacing-x: 0;
    --tw-border-spacing-y: 0;
    --tw-translate-x: 0;
    --tw-translate-y: 0;
    --tw-rotate: 0;
    --tw-skew-x: 0;
    --tw-skew-y: 0;
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    --tw-pan-x: ;
    --tw-pan-y: ;
    --tw-pinch-zoom: ;
    --tw-scroll-snap-strictness: proximity;
    --tw-gradient-from-position: ;
    --tw-gradient-via-position: ;
    --tw-gradient-to-position: ;
    --tw-ordinal: ;
    --tw-slashed-zero: ;
    --tw-numeric-figure: ;
    --tw-numeric-spacing: ;
    --tw-numeric-fraction: ;
    --tw-ring-inset: ;
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: rgba(59, 130, 246, 0.5);
    --tw-ring-offset-shadow: 0 0 #0000;
    --tw-ring-shadow: 0 0 #0000;
    --tw-shadow: 0 0 #0000;
    --tw-shadow-colored: 0 0 #0000;
    --tw-blur: ;
    --tw-brightness: ;
    --tw-contrast: ;
    --tw-grayscale: ;
    --tw-hue-rotate: ;
    --tw-invert: ;
    --tw-saturate: ;
    --tw-sepia: ;
    --tw-drop-shadow: ;
    --tw-backdrop-blur: ;
    --tw-backdrop-brightness: ;
    --tw-backdrop-contrast: ;
    --tw-backdrop-grayscale: ;
    --tw-backdrop-hue-rotate: ;
    --tw-backdrop-invert: ;
    --tw-backdrop-opacity: ;
    --tw-backdrop-saturate: ;
    --tw-backdrop-sepia: ;
    --tw-contain-size: ;
    --tw-contain-layout: ;
    --tw-contain-paint: ;
    --tw-contain-style: ;
  }

  ::backdrop {
    --tw-border-spacing-x: 0;
    --tw-border-spacing-y: 0;
    --tw-translate-x: 0;
    --tw-translate-y: 0;
    --tw-rotate: 0;
    --tw-skew-x: 0;
    --tw-skew-y: 0;
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    --tw-pan-x: ;
    --tw-pan-y: ;
    --tw-pinch-zoom: ;
    --tw-scroll-snap-strictness: proximity;
    --tw-gradient-from-position: ;
    --tw-gradient-via-position: ;
    --tw-gradient-to-position: ;
    --tw-ordinal: ;
    --tw-slashed-zero: ;
    --tw-numeric-figure: ;
    --tw-numeric-spacing: ;
    --tw-numeric-fraction: ;
    --tw-ring-inset: ;
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: rgba(59, 130, 246, 0.5);
    --tw-ring-offset-shadow: 0 0 #0000;
    --tw-ring-shadow: 0 0 #0000;
    --tw-shadow: 0 0 #0000;
    --tw-shadow-colored: 0 0 #0000;
    --tw-blur: ;
    --tw-brightness: ;
    --tw-contrast: ;
    --tw-grayscale: ;
    --tw-hue-rotate: ;
    --tw-invert: ;
    --tw-saturate: ;
    --tw-sepia: ;
    --tw-drop-shadow: ;
    --tw-backdrop-blur: ;
    --tw-backdrop-brightness: ;
    --tw-backdrop-contrast: ;
    --tw-backdrop-grayscale: ;
    --tw-backdrop-hue-rotate: ;
    --tw-backdrop-invert: ;
    --tw-backdrop-opacity: ;
    --tw-backdrop-saturate: ;
    --tw-backdrop-sepia: ;
    --tw-contain-size: ;
    --tw-contain-layout: ;
    --tw-contain-paint: ;
    --tw-contain-style: ;
  }

  .container {
    width: 100%;
  }

  @media (min-width: 640px) {
    .container {
      max-width: 640px;
    }
  }

  @media (min-width: 768px) {
    .container {
      max-width: 768px;
    }
  }

  @media (min-width: 1024px) {
    .container {
      max-width: 1024px;
    }
  }

  @media (min-width: 1280px) {
    .container {
      max-width: 1280px;
    }
  }

  @media (min-width: 1408px) {
    .container {
      max-width: 1408px;
    }
  }

  @media (min-width: 1536px) {
    .container {
      max-width: 1536px;
    }
  }

  .pointer-events-none {
    pointer-events: none;
  }

  .pointer-events-auto {
    pointer-events: auto;
  }

  .visible {
    visibility: visible;
  }

  .fixed {
    position: fixed;
  }

  .absolute {
    position: absolute;
  }

  .relative {
    position: relative;
  }

  .sticky {
    position: sticky;
  }

  .inset-0 {
    inset: 0;
  }

  .inset-x-0 {
    left: 0;
    right: 0;
  }

  .inset-y-0 {
    top: 0;
    bottom: 0;
  }

  .-bottom-1 {
    bottom: -0.25rem;
  }

  .-right-1 {
    right: -0.25rem;
  }

  .-right-2 {
    right: -0.5rem;
  }

  .-right-6 {
    right: -1.5rem;
  }

  .-top-12 {
    top: -3rem;
  }

  .-top-2 {
    top: -0.5rem;
  }

  .-top-\[2\.5px\] {
    top: -2.5px;
  }

  .bottom-0 {
    bottom: 0;
  }

  .bottom-1 {
    bottom: 0.25rem;
  }

  .bottom-10 {
    bottom: 2.5rem;
  }

  .bottom-12 {
    bottom: 3rem;
  }

  .bottom-2 {
    bottom: 0.5rem;
  }

  .bottom-4 {
    bottom: 1rem;
  }

  .left-0 {
    left: 0;
  }

  .left-1 {
    left: 0.25rem;
  }

  .left-1\/2 {
    left: 50%;
  }

  .left-2 {
    left: 0.5rem;
  }

  .left-\[0\.01rem\] {
    left: 0.01rem;
  }

  .left-\[0\.1rem\] {
    left: 0.1rem;
  }

  .left-\[50\%\] {
    left: 50%;
  }

  .left-\[6\.52rem\] {
    left: 6.52rem;
  }

  .right-0 {
    right: 0;
  }

  .right-10 {
    right: 2.5rem;
  }

  .right-12 {
    right: 3rem;
  }

  .right-2 {
    right: 0.5rem;
  }

  .right-4 {
    right: 1rem;
  }

  .right-\[10px\] {
    right: 10px;
  }

  .right-\[3px\] {
    right: 3px;
  }

  .top-0 {
    top: 0;
  }

  .top-1 {
    top: 0.25rem;
  }

  .top-1\/2 {
    top: 50%;
  }

  .top-2 {
    top: 0.5rem;
  }

  .top-4 {
    top: 1rem;
  }

  .top-\[2\.2rem\] {
    top: 2.2rem;
  }

  .top-\[3px\] {
    top: 3px;
  }

  .top-\[45\%\] {
    top: 45%;
  }

  .top-\[5\.8rem\] {
    top: 5.8rem;
  }

  .top-\[9px\] {
    top: 9px;
  }

  .z-0 {
    z-index: 0;
  }

  .z-10 {
    z-index: 10;
  }

  .z-20 {
    z-index: 20;
  }

  .z-30 {
    z-index: 30;
  }

  .z-40 {
    z-index: 40;
  }

  .z-50 {
    z-index: 50;
  }

  .z-\[2\] {
    z-index: 2;
  }

  .z-\[3\] {
    z-index: 3;
  }

  .z-\[60\] {
    z-index: 60;
  }

  .z-\[9999\] {
    z-index: 9999;
  }

  .m-0 {
    margin: 0;
  }

  .m-1 {
    margin: 0.25rem;
  }

  .m-2 {
    margin: 0.5rem;
  }

  .m-8 {
    margin: 2rem;
  }

  .m-auto {
    margin: auto;
  }

  .mx-1 {
    margin-left: 0.25rem;
    margin-right: 0.25rem;
  }

  .mx-2 {
    margin-left: 0.5rem;
    margin-right: 0.5rem;
  }

  .mx-5 {
    margin-left: 1.25rem;
    margin-right: 1.25rem;
  }

  .mx-6 {
    margin-left: 1.5rem;
    margin-right: 1.5rem;
  }

  .mx-8 {
    margin-left: 2rem;
    margin-right: 2rem;
  }

  .mx-auto {
    margin-left: auto;
    margin-right: auto;
  }

  .my-10 {
    margin-top: 2.5rem;
    margin-bottom: 2.5rem;
  }

  .my-2 {
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
  }

  .my-3 {
    margin-top: 0.75rem;
    margin-bottom: 0.75rem;
  }

  .my-4 {
    margin-top: 1rem;
    margin-bottom: 1rem;
  }

  .my-5 {
    margin-top: 1.25rem;
    margin-bottom: 1.25rem;
  }

  .my-6 {
    margin-top: 1.5rem;
    margin-bottom: 1.5rem;
  }

  .-ml-3 {
    margin-left: -0.75rem;
  }

  .-ml-4 {
    margin-left: -1rem;
  }

  .-mr-2 {
    margin-right: -0.5rem;
  }

  .-mt-\[0\.3rem\] {
    margin-top: -0.3rem;
  }

  .mb-1 {
    margin-bottom: 0.25rem;
  }

  .mb-10 {
    margin-bottom: 2.5rem;
  }

  .mb-12 {
    margin-bottom: 3rem;
  }

  .mb-2 {
    margin-bottom: 0.5rem;
  }

  .mb-3 {
    margin-bottom: 0.75rem;
  }

  .mb-4 {
    margin-bottom: 1rem;
  }

  .mb-5 {
    margin-bottom: 1.25rem;
  }

  .mb-6 {
    margin-bottom: 1.5rem;
  }

  .mb-8 {
    margin-bottom: 2rem;
  }

  .ml-10 {
    margin-left: 2.5rem;
  }

  .ml-2 {
    margin-left: 0.5rem;
  }

  .ml-4 {
    margin-left: 1rem;
  }

  .ml-6 {
    margin-left: 1.5rem;
  }

  .ml-auto {
    margin-left: auto;
  }

  .mr-1 {
    margin-right: 0.25rem;
  }

  .mr-2 {
    margin-right: 0.5rem;
  }

  .mr-4 {
    margin-right: 1rem;
  }

  .mr-6 {
    margin-right: 1.5rem;
  }

  .mr-7 {
    margin-right: 1.75rem;
  }

  .mt-1 {
    margin-top: 0.25rem;
  }

  .mt-10 {
    margin-top: 2.5rem;
  }

  .mt-12 {
    margin-top: 3rem;
  }

  .mt-16 {
    margin-top: 4rem;
  }

  .mt-2 {
    margin-top: 0.5rem;
  }

  .mt-3 {
    margin-top: 0.75rem;
  }

  .mt-4 {
    margin-top: 1rem;
  }

  .mt-5 {
    margin-top: 1.25rem;
  }

  .mt-6 {
    margin-top: 1.5rem;
  }

  .mt-\[0\.17rem\] {
    margin-top: 0.17rem;
  }

  .mt-\[3px\] {
    margin-top: 3px;
  }

  .box-content {
    box-sizing: content-box;
  }

  .block {
    display: block;
  }

  .inline-block {
    display: inline-block;
  }

  .flex {
    display: flex;
  }

  .inline-flex {
    display: inline-flex;
  }

  .table {
    display: table;
  }

  .grid {
    display: grid;
  }

  .hidden {
    display: none;
  }

  .h-0 {
    height: 0;
  }

  .h-1\/5 {
    height: 20%;
  }

  .h-10 {
    height: 2.5rem;
  }

  .h-11 {
    height: 2.75rem;
  }

  .h-12 {
    height: 3rem;
  }

  .h-14 {
    height: 3.5rem;
  }

  .h-16 {
    height: 4rem;
  }

  .h-2 {
    height: 0.5rem;
  }

  .h-2\/3 {
    height: 66.666667%;
  }

  .h-20 {
    height: 5rem;
  }

  .h-24 {
    height: 6rem;
  }

  .h-28 {
    height: 7rem;
  }

  .h-3 {
    height: 0.75rem;
  }

  .h-3\/4 {
    height: 75%;
  }

  .h-3\/5 {
    height: 60%;
  }

  .h-3\/6 {
    height: 50%;
  }

  .h-36 {
    height: 9rem;
  }

  .h-4 {
    height: 1rem;
  }

  .h-4\/5 {
    height: 80%;
  }

  .h-40 {
    height: 10rem;
  }

  .h-5 {
    height: 1.25rem;
  }

  .h-52 {
    height: 13rem;
  }

  .h-6 {
    height: 1.5rem;
  }

  .h-7 {
    height: 1.75rem;
  }

  .h-8 {
    height: 2rem;
  }

  .h-80 {
    height: 20rem;
  }

  .h-9 {
    height: 2.25rem;
  }

  .h-96 {
    height: 24rem;
  }

  .h-\[0\.5rem\] {
    height: 0.5rem;
  }

  .h-\[0\.8rem\] {
    height: 0.8rem;
  }

  .h-\[0\.95rem\] {
    height: 0.95rem;
  }

  .h-\[1\.3rem\] {
    height: 1.3rem;
  }

  .h-\[1\.5px\] {
    height: 1.5px;
  }

  .h-\[100\%\] {
    height: 100%;
  }

  .h-\[10px\] {
    height: 10px;
  }

  .h-\[10rem\] {
    height: 10rem;
  }

  .h-\[17rem\] {
    height: 17rem;
  }

  .h-\[18px\] {
    height: 18px;
  }

  .h-\[1px\] {
    height: 1px;
  }

  .h-\[1rem\] {
    height: 1rem;
  }

  .h-\[20rem\] {
    height: 20rem;
  }

  .h-\[24px\] {
    height: 24px;
  }

  .h-\[25rem\] {
    height: 25rem;
  }

  .h-\[3\.2rem\] {
    height: 3.2rem;
  }

  .h-\[30rem\] {
    height: 30rem;
  }

  .h-\[35rem\] {
    height: 35rem;
  }

  .h-\[3px\] {
    height: 3px;
  }

  .h-\[3rem\] {
    height: 3rem;
  }

  .h-\[40rem\] {
    height: 40rem;
  }

  .h-\[45\%\] {
    height: 45%;
  }

  .h-\[45rem\] {
    height: 45rem;
  }

  .h-\[4rem\] {
    height: 4rem;
  }

  .h-\[50\%\] {
    height: 50%;
  }

  .h-\[600px\] {
    height: 600px;
  }

  .h-\[70\%\] {
    height: 70%;
  }

  .h-\[80\%\] {
    height: 80%;
  }

  .h-\[90\%\] {
    height: 90%;
  }

  .h-\[93\.45px\] {
    height: 93.45px;
  }

  .h-\[95\%\] {
    height: 95%;
  }

  .h-\[calc\(100vh-4rem\)\] {
    height: calc(100vh - 4rem);
  }

  .h-auto {
    height: auto;
  }

  .h-fit {
    height: -moz-fit-content;
    height: fit-content;
  }

  .h-full {
    height: 100%;
  }

  .h-min {
    height: -moz-min-content;
    height: min-content;
  }

  .h-px {
    height: 1px;
  }

  .h-screen {
    height: 100vh;
  }

  .max-h-40 {
    max-height: 10rem;
  }

  .max-h-60 {
    max-height: 15rem;
  }

  .max-h-80 {
    max-height: 20rem;
  }

  .max-h-\[300px\] {
    max-height: 300px;
  }

  .max-h-\[35rem\] {
    max-height: 35rem;
  }

  .max-h-\[95\%\] {
    max-height: 95%;
  }

  .max-h-full {
    max-height: 100%;
  }

  .min-h-0 {
    min-height: 0;
  }

  .min-h-10 {
    min-height: 2.5rem;
  }

  .min-h-4 {
    min-height: 1rem;
  }

  .min-h-\[1\.5rem\] {
    min-height: 1.5rem;
  }

  .min-h-\[10rem\] {
    min-height: 10rem;
  }

  .min-h-\[16rem\] {
    min-height: 16rem;
  }

  .min-h-\[1rem\] {
    min-height: 1rem;
  }

  .min-h-\[2\.25rem\] {
    min-height: 2.25rem;
  }

  .min-h-\[2\.5rem\] {
    min-height: 2.5rem;
  }

  .min-h-\[3\.5rem\] {
    min-height: 3.5rem;
  }

  .min-h-\[300px\] {
    min-height: 300px;
  }

  .min-h-\[4rem\] {
    min-height: 4rem;
  }

  .min-h-\[content-height\] {
    min-height: content-height;
  }

  .min-h-fit {
    min-height: -moz-fit-content;
    min-height: fit-content;
  }

  .min-h-full {
    min-height: 100%;
  }

  .w-0 {
    width: 0;
  }

  .w-1\/2 {
    width: 50%;
  }

  .w-1\/3 {
    width: 33.333333%;
  }

  .w-1\/4 {
    width: 25%;
  }

  .w-1\/6 {
    width: 16.666667%;
  }

  .w-10 {
    width: 2.5rem;
  }

  .w-11 {
    width: 2.75rem;
  }

  .w-12 {
    width: 3rem;
  }

  .w-14 {
    width: 3.5rem;
  }

  .w-16 {
    width: 4rem;
  }

  .w-2 {
    width: 0.5rem;
  }

  .w-2\/3 {
    width: 66.666667%;
  }

  .w-2\/4 {
    width: 50%;
  }

  .w-2\/5 {
    width: 40%;
  }

  .w-2\/6 {
    width: 33.333333%;
  }

  .w-20 {
    width: 5rem;
  }

  .w-24 {
    width: 6rem;
  }

  .w-28 {
    width: 7rem;
  }

  .w-3 {
    width: 0.75rem;
  }

  .w-3\/4 {
    width: 75%;
  }

  .w-3\/5 {
    width: 60%;
  }

  .w-32 {
    width: 8rem;
  }

  .w-36 {
    width: 9rem;
  }

  .w-4 {
    width: 1rem;
  }

  .w-4\/5 {
    width: 80%;
  }

  .w-40 {
    width: 10rem;
  }

  .w-44 {
    width: 11rem;
  }

  .w-48 {
    width: 12rem;
  }

  .w-5 {
    width: 1.25rem;
  }

  .w-5\/6 {
    width: 83.333333%;
  }

  .w-52 {
    width: 13rem;
  }

  .w-56 {
    width: 14rem;
  }

  .w-6 {
    width: 1.5rem;
  }

  .w-60 {
    width: 15rem;
  }

  .w-64 {
    width: 16rem;
  }

  .w-7 {
    width: 1.75rem;
  }

  .w-8 {
    width: 2rem;
  }

  .w-80 {
    width: 20rem;
  }

  .w-9 {
    width: 2.25rem;
  }

  .w-96 {
    width: 24rem;
  }

  .w-\[0\.8rem\] {
    width: 0.8rem;
  }

  .w-\[0\.95rem\] {
    width: 0.95rem;
  }

  .w-\[1000px\] {
    width: 1000px;
  }

  .w-\[10px\] {
    width: 10px;
  }

  .w-\[10rem\] {
    width: 10rem;
  }

  .w-\[128px\] {
    width: 128px;
  }

  .w-\[14rem\] {
    width: 14rem;
  }

  .w-\[16rem\] {
    width: 16rem;
  }

  .w-\[18px\] {
    width: 18px;
  }

  .w-\[1px\] {
    width: 1px;
  }

  .w-\[20rem\] {
    width: 20rem;
  }

  .w-\[22\.8rem\] {
    width: 22.8rem;
  }

  .w-\[24rem\] {
    width: 24rem;
  }

  .w-\[25rem\] {
    width: 25rem;
  }

  .w-\[26rem\] {
    width: 26rem;
  }

  .w-\[2px\] {
    width: 2px;
  }

  .w-\[30em\] {
    width: 30em;
  }

  .w-\[30rem\] {
    width: 30rem;
  }

  .w-\[35rem\] {
    width: 35rem;
  }

  .w-\[40rem\] {
    width: 40rem;
  }

  .w-\[45rem\] {
    width: 45rem;
  }

  .w-\[4rem\] {
    width: 4rem;
  }

  .w-\[50\%\] {
    width: 50%;
  }

  .w-\[500px\] {
    width: 500px;
  }

  .w-\[50rem\] {
    width: 50rem;
  }

  .w-\[520px\] {
    width: 520px;
  }

  .w-\[600px\] {
    width: 600px;
  }

  .w-\[67rem\] {
    width: 67rem;
  }

  .w-\[80\%\] {
    width: 80%;
  }

  .w-\[87\%\] {
    width: 87%;
  }

  .w-\[8rem\] {
    width: 8rem;
  }

  .w-auto {
    width: auto;
  }

  .w-fit {
    width: -moz-fit-content;
    width: fit-content;
  }

  .w-full {
    width: 100%;
  }

  .w-min {
    width: -moz-min-content;
    width: min-content;
  }

  .w-px {
    width: 1px;
  }

  .w-screen {
    width: 100vw;
  }

  .min-w-0 {
    min-width: 0;
  }

  .min-w-10 {
    min-width: 2.5rem;
  }

  .min-w-4 {
    min-width: 1rem;
  }

  .min-w-\[1\.5rem\] {
    min-width: 1.5rem;
  }

  .min-w-\[10rem\] {
    min-width: 10rem;
  }

  .min-w-\[13rem\] {
    min-width: 13rem;
  }

  .min-w-\[15rem\] {
    min-width: 15rem;
  }

  .min-w-\[1rem\] {
    min-width: 1rem;
  }

  .min-w-\[2\.25rem\] {
    min-width: 2.25rem;
  }

  .min-w-\[2\.5rem\] {
    min-width: 2.5rem;
  }

  .min-w-\[20rem\] {
    min-width: 20rem;
  }

  .min-w-\[30rem\] {
    min-width: 30rem;
  }

  .min-w-\[40rem\] {
    min-width: 40rem;
  }

  .min-w-\[50rem\] {
    min-width: 50rem;
  }

  .min-w-\[5rem\] {
    min-width: 5rem;
  }

  .min-w-\[66\%\] {
    min-width: 66%;
  }

  .min-w-max {
    min-width: -moz-max-content;
    min-width: max-content;
  }

  .max-w-\[100\%\] {
    max-width: 100%;
  }

  .max-w-\[100rem\] {
    max-width: 100rem;
  }

  .max-w-\[10rem\] {
    max-width: 10rem;
  }

  .max-w-\[13rem\] {
    max-width: 13rem;
  }

  .max-w-\[20rem\] {
    max-width: 20rem;
  }

  .max-w-\[250px\] {
    max-width: 250px;
  }

  .max-w-\[34rem\] {
    max-width: 34rem;
  }

  .max-w-\[40rem\] {
    max-width: 40rem;
  }

  .max-w-\[50rem\] {
    max-width: 50rem;
  }

  .max-w-\[65rem\] {
    max-width: 65rem;
  }

  .max-w-\[80rem\] {
    max-width: 80rem;
  }

  .max-w-full {
    max-width: 100%;
  }

  .flex-1 {
    flex: 1 1 0%;
  }

  .flex-\[2_2_0\%\] {
    flex: 2 2 0%;
  }

  .flex-none {
    flex: none;
  }

  .flex-shrink-0 {
    flex-shrink: 0;
  }

  .flex-grow {
    flex-grow: 1;
  }

  .flex-grow-0 {
    flex-grow: 0;
  }

  .basis-0 {
    flex-basis: 0px;
  }

  .border-separate {
    border-collapse: separate;
  }

  .border-spacing-0 {
    --tw-border-spacing-x: 0px;
    --tw-border-spacing-y: 0px;
  }

  .border-spacing-0,
  .border-spacing-8 {
    border-spacing: var(--tw-border-spacing-x) var(--tw-border-spacing-y);
  }

  .border-spacing-8 {
    --tw-border-spacing-x: 2rem;
    --tw-border-spacing-y: 2rem;
  }

  .origin-top-right {
    transform-origin: top right;
  }

  .-translate-x-1\/2 {
    --tw-translate-x: -50%;
  }

  .-translate-x-10,
  .-translate-x-1\/2 {
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
  }

  .-translate-x-10 {
    --tw-translate-x: -2.5rem;
  }

  .-translate-x-2\/3 {
    --tw-translate-x: -66.666667%;
  }

  .-translate-x-20,
  .-translate-x-2\/3 {
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
  }

  .-translate-x-20 {
    --tw-translate-x: -5rem;
  }

  .-translate-x-3 {
    --tw-translate-x: -0.75rem;
  }

  .-translate-x-3,
  .-translate-x-6 {
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
  }

  .-translate-x-6 {
    --tw-translate-x: -1.5rem;
  }

  .-translate-x-\[50\%\] {
    --tw-translate-x: -50%;
  }

  .-translate-x-\[50\%\],
  .-translate-x-\[8\%\] {
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
  }

  .-translate-x-\[8\%\] {
    --tw-translate-x: -8%;
  }

  .-translate-y-1 {
    --tw-translate-y: -0.25rem;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
  }

  .-translate-y-1\/2,
  .-translate-y-\[50\%\] {
    --tw-translate-y: -50%;
  }

  .-translate-y-1\/2,
  .-translate-y-\[50\%\],
  .translate-x-6 {
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
  }

  .translate-x-6 {
    --tw-translate-x: 1.5rem;
  }

  .translate-x-\[-50\%\] {
    --tw-translate-x: -50%;
  }

  .translate-x-\[-50\%\],
  .translate-x-\[3\%\] {
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
  }

  .translate-x-\[3\%\] {
    --tw-translate-x: 3%;
  }

  .translate-y-3 {
    --tw-translate-y: 0.75rem;
  }

  .translate-y-3,
  .translate-y-4 {
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
  }

  .translate-y-4 {
    --tw-translate-y: 1rem;
  }

  .translate-y-6 {
    --tw-translate-y: 1.5rem;
  }

  .translate-y-6,
  .translate-y-\[-50\%\] {
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
  }

  .translate-y-\[-50\%\] {
    --tw-translate-y: -50%;
  }

  .-rotate-90 {
    --tw-rotate: -90deg;
  }

  .-rotate-90,
  .rotate-180 {
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
  }

  .rotate-180 {
    --tw-rotate: 180deg;
  }

  .rotate-90 {
    --tw-rotate: 90deg;
  }

  .rotate-90,
  .rotate-\[-135deg\] {
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
  }

  .rotate-\[-135deg\] {
    --tw-rotate: -135deg;
  }

  .scale-150 {
    --tw-scale-x: 1.5;
    --tw-scale-y: 1.5;
  }

  .scale-150,
  .scale-75 {
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
  }

  .scale-75 {
    --tw-scale-x: 0.75;
    --tw-scale-y: 0.75;
  }

  .scale-\[1\.75\] {
    --tw-scale-x: 1.75;
    --tw-scale-y: 1.75;
  }

  .scale-\[1\.75\],
  .transform {
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
  }

  @keyframes pulse {
    50% {
      opacity: 0.5;
    }
  }

  .animate-pulse {
    animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
  }

  .cursor-cool-normal {
    cursor: url(/cursors/normal-cursor.svg), default;
  }

  .cursor-pointer {
    cursor: pointer;
  }

  .select-none {
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  .resize-none {
    resize: none;
  }

  .resize {
    resize: both;
  }

  .break-inside-avoid {
    -moz-column-break-inside: avoid;
    break-inside: avoid;
  }

  .flex-row {
    flex-direction: row;
  }

  .flex-col {
    flex-direction: column;
  }

  .flex-col-reverse {
    flex-direction: column-reverse;
  }

  .flex-wrap {
    flex-wrap: wrap;
  }

  .items-start {
    align-items: flex-start;
  }

  .items-end {
    align-items: flex-end;
  }

  .items-center {
    align-items: center;
  }

  .items-stretch {
    align-items: stretch;
  }

  .justify-start {
    justify-content: flex-start;
  }

  .justify-end {
    justify-content: flex-end;
  }

  .justify-center {
    justify-content: center;
  }

  .justify-between {
    justify-content: space-between;
  }

  .justify-around {
    justify-content: space-around;
  }

  .justify-evenly {
    justify-content: space-evenly;
  }

  .gap-1 {
    gap: 0.25rem;
  }

  .gap-10 {
    gap: 2.5rem;
  }

  .gap-12 {
    gap: 3rem;
  }

  .gap-16 {
    gap: 4rem;
  }

  .gap-2 {
    gap: 0.5rem;
  }

  .gap-3 {
    gap: 0.75rem;
  }

  .gap-4 {
    gap: 1rem;
  }

  .gap-5 {
    gap: 1.25rem;
  }

  .gap-6 {
    gap: 1.5rem;
  }

  .gap-7 {
    gap: 1.75rem;
  }

  .gap-8 {
    gap: 2rem;
  }

  .divide-y> :not([hidden])~ :not([hidden]) {
    --tw-divide-y-reverse: 0;
    border-top-width: calc(1px * calc(1 - var(--tw-divide-y-reverse)));
    border-bottom-width: calc(1px * var(--tw-divide-y-reverse));
  }

  .divide-neutral-200> :not([hidden])~ :not([hidden]) {
    --tw-divide-opacity: 1;
    border-color: rgb(246 246 246 / var(--tw-divide-opacity));
  }

  .self-start {
    align-self: flex-start;
  }

  .self-stretch {
    align-self: stretch;
  }

  .overflow-auto {
    overflow: auto;
  }

  .overflow-hidden {
    overflow: hidden;
  }

  .overflow-clip {
    overflow: clip;
  }

  .overflow-scroll {
    overflow: scroll;
  }

  .overflow-x-auto {
    overflow-x: auto;
  }

  .overflow-y-auto {
    overflow-y: auto;
  }

  .overflow-x-hidden {
    overflow-x: hidden;
  }

  .overflow-x-scroll {
    overflow-x: scroll;
  }

  .overflow-y-scroll {
    overflow-y: scroll;
  }

  .truncate {
    overflow: hidden;
    white-space: nowrap;
  }

  .text-ellipsis,
  .truncate {
    text-overflow: ellipsis;
  }

  .whitespace-nowrap {
    white-space: nowrap;
  }

  .whitespace-pre {
    white-space: pre;
  }

  .break-words {
    overflow-wrap: break-word;
  }

  .rounded {
    border-radius: 0.625rem;
  }

  .rounded-2xl {
    border-radius: 1rem;
  }

  .rounded-3xl {
    border-radius: 1.5rem;
  }

  .rounded-full {
    border-radius: 9999px;
  }

  .rounded-lg {
    border-radius: 0.5rem;
  }

  .rounded-md {
    border-radius: 0.375rem;
  }

  .rounded-sm {
    border-radius: 0.125rem;
  }

  .rounded-xl {
    border-radius: 0.75rem;
  }

  .rounded-b {
    border-bottom-right-radius: 0.625rem;
    border-bottom-left-radius: 0.625rem;
  }

  .rounded-b-2xl {
    border-bottom-right-radius: 1rem;
    border-bottom-left-radius: 1rem;
  }

  .rounded-t {
    border-top-left-radius: 0.625rem;
    border-top-right-radius: 0.625rem;
  }

  .rounded-t-2xl {
    border-top-left-radius: 1rem;
    border-top-right-radius: 1rem;
  }

  .rounded-bl-lg {
    border-bottom-left-radius: 0.5rem;
  }

  .rounded-br-lg {
    border-bottom-right-radius: 0.5rem;
  }

  .rounded-tl-lg {
    border-top-left-radius: 0.5rem;
  }

  .rounded-tr-lg {
    border-top-right-radius: 0.5rem;
  }

  .border {
    border-width: 1px;
  }

  .border-0 {
    border-width: 0;
  }

  .border-1 {
    border-width: 1px;
  }

  .border-2 {
    border-width: 2px;
  }

  .border-3 {
    border-width: 3px;
  }

  .border-\[0\.13rem\] {
    border-width: 0.13rem;
  }

  .border-\[0\.63px\] {
    border-width: 0.63px;
  }

  .border-\[1\.3px\] {
    border-width: 1.3px;
  }

  .border-\[1\.5px\] {
    border-width: 1.5px;
  }

  .border-\[2\.5px\] {
    border-width: 2.5px;
  }

  .border-\[2px\] {
    border-width: 2px;
  }

  .border-\[3\.64px\] {
    border-width: 3.64px;
  }

  .border-b,
  .border-b-1 {
    border-bottom-width: 1px;
  }

  .border-l {
    border-left-width: 1px;
  }

  .border-l-0 {
    border-left-width: 0;
  }

  .border-l-1 {
    border-left-width: 1px;
  }

  .border-r-1 {
    border-right-width: 1px;
  }

  .border-r-2 {
    border-right-width: 2px;
  }

  .border-t-0 {
    border-top-width: 0;
  }

  .border-t-1 {
    border-top-width: 1px;
  }

  .border-dashed {
    border-style: dashed;
  }

  .border-none {
    border-style: none;
  }

  .border-\[\#958BD2\] {
    --tw-border-opacity: 1;
    border-color: rgb(149 139 210 / var(--tw-border-opacity));
  }

  .border-\[\#B64B39\] {
    --tw-border-opacity: 1;
    border-color: rgb(182 75 57 / var(--tw-border-opacity));
  }

  .border-\[\#b2add4\] {
    --tw-border-opacity: 1;
    border-color: rgb(178 173 212 / var(--tw-border-opacity));
  }

  .border-danger-500 {
    --tw-border-opacity: 1;
    border-color: rgb(255 103 103 / var(--tw-border-opacity));
  }

  .border-danger-700 {
    --tw-border-opacity: 1;
    border-color: rgb(196 106 106 / var(--tw-border-opacity));
  }

  .border-neutral-300 {
    --tw-border-opacity: 1;
    border-color: rgb(234 234 234 / var(--tw-border-opacity));
  }

  .border-neutral-400 {
    --tw-border-opacity: 1;
    border-color: rgb(204 204 204 / var(--tw-border-opacity));
  }

  .border-neutral-400\/20 {
    border-color: hsla(0, 0%, 80%, 0.2);
  }

  .border-neutral-500 {
    --tw-border-opacity: 1;
    border-color: rgb(163 163 163 / var(--tw-border-opacity));
  }

  .border-neutral-600 {
    --tw-border-opacity: 1;
    border-color: rgb(97 97 98 / var(--tw-border-opacity));
  }

  .border-neutral-700 {
    --tw-border-opacity: 1;
    border-color: rgb(36 36 37 / var(--tw-border-opacity));
  }

  .border-primary-400 {
    --tw-border-opacity: 1;
    border-color: rgb(228 222 250 / var(--tw-border-opacity));
  }

  .border-primary-500 {
    --tw-border-opacity: 1;
    border-color: rgb(193 190 250 / var(--tw-border-opacity));
  }

  .border-primary-600 {
    --tw-border-opacity: 1;
    border-color: rgb(112 111 165 / var(--tw-border-opacity));
  }

  .border-primary-700 {
    --tw-border-opacity: 1;
    border-color: rgb(61 58 121 / var(--tw-border-opacity));
  }

  .border-secondary-300 {
    --tw-border-opacity: 1;
    border-color: rgb(251 213 112 / var(--tw-border-opacity));
  }

  .border-secondary-700 {
    --tw-border-opacity: 1;
    border-color: rgb(204 175 13 / var(--tw-border-opacity));
  }

  .border-spacing-8 {
    border-color: 3rem;
  }

  .border-success-200 {
    --tw-border-opacity: 1;
    border-color: rgb(197 221 195 / var(--tw-border-opacity));
  }

  .border-success-700 {
    --tw-border-opacity: 1;
    border-color: rgb(58 93 56 / var(--tw-border-opacity));
  }

  .border-warning-500 {
    --tw-border-opacity: 1;
    border-color: rgb(242 157 65 / var(--tw-border-opacity));
  }

  .border-opacity-0 {
    --tw-border-opacity: 0;
  }

  .bg-\[\#A69BE9\] {
    --tw-bg-opacity: 1;
    background-color: rgb(166 155 233 / var(--tw-bg-opacity));
  }

  .bg-\[\#FF492C\] {
    --tw-bg-opacity: 1;
    background-color: rgb(255 73 44 / var(--tw-bg-opacity));
  }

  .bg-\[\#FFF9DE\] {
    --tw-bg-opacity: 1;
    background-color: rgb(255 249 222 / var(--tw-bg-opacity));
  }

  .bg-danger-100 {
    --tw-bg-opacity: 1;
    background-color: rgb(244 235 235 / var(--tw-bg-opacity));
  }

  .bg-danger-500 {
    --tw-bg-opacity: 1;
    background-color: rgb(255 103 103 / var(--tw-bg-opacity));
  }

  .bg-danger-700 {
    --tw-bg-opacity: 1;
    background-color: rgb(196 106 106 / var(--tw-bg-opacity));
  }

  .bg-neutral-100 {
    --tw-bg-opacity: 1;
    background-color: rgb(249 249 249 / var(--tw-bg-opacity));
  }

  .bg-neutral-200 {
    --tw-bg-opacity: 1;
    background-color: rgb(246 246 246 / var(--tw-bg-opacity));
  }

  .bg-neutral-200\/30 {
    background-color: hsla(0, 0%, 96%, 0.3);
  }

  .bg-neutral-300 {
    --tw-bg-opacity: 1;
    background-color: rgb(234 234 234 / var(--tw-bg-opacity));
  }

  .bg-neutral-400 {
    --tw-bg-opacity: 1;
    background-color: rgb(204 204 204 / var(--tw-bg-opacity));
  }

  .bg-neutral-50 {
    --tw-bg-opacity: 1;
    background-color: rgb(255 255 255 / var(--tw-bg-opacity));
  }

  .bg-neutral-50\/0 {
    background-color: hsla(0, 0%, 100%, 0);
  }

  .bg-neutral-500 {
    --tw-bg-opacity: 1;
    background-color: rgb(163 163 163 / var(--tw-bg-opacity));
  }

  .bg-neutral-700 {
    --tw-bg-opacity: 1;
    background-color: rgb(36 36 37 / var(--tw-bg-opacity));
  }

  .bg-neutral-700\/40 {
    background-color: rgba(36, 36, 37, 0.4);
  }

  .bg-primary-100 {
    --tw-bg-opacity: 1;
    background-color: rgb(248 248 255 / var(--tw-bg-opacity));
  }

  .bg-primary-200 {
    --tw-bg-opacity: 1;
    background-color: rgb(242 241 255 / var(--tw-bg-opacity));
  }

  .bg-primary-300 {
    --tw-bg-opacity: 1;
    background-color: rgb(236 235 253 / var(--tw-bg-opacity));
  }

  .bg-primary-400 {
    --tw-bg-opacity: 1;
    background-color: rgb(228 222 250 / var(--tw-bg-opacity));
  }

  .bg-primary-500 {
    --tw-bg-opacity: 1;
    background-color: rgb(193 190 250 / var(--tw-bg-opacity));
  }

  .bg-primary-600 {
    --tw-bg-opacity: 1;
    background-color: rgb(112 111 165 / var(--tw-bg-opacity));
  }

  .bg-secondary-200 {
    --tw-bg-opacity: 1;
    background-color: rgb(253 238 165 / var(--tw-bg-opacity));
  }

  .bg-secondary-200\/70 {
    background-color: hsla(50, 96%, 82%, 0.7);
  }

  .bg-secondary-300 {
    --tw-bg-opacity: 1;
    background-color: rgb(251 213 112 / var(--tw-bg-opacity));
  }

  .bg-secondary-500 {
    --tw-bg-opacity: 1;
    background-color: rgb(255 201 31 / var(--tw-bg-opacity));
  }

  .bg-secondary-700 {
    --tw-bg-opacity: 1;
    background-color: rgb(204 175 13 / var(--tw-bg-opacity));
  }

  .bg-success-200 {
    --tw-bg-opacity: 1;
    background-color: rgb(197 221 195 / var(--tw-bg-opacity));
  }

  .bg-success-500 {
    --tw-bg-opacity: 1;
    background-color: rgb(71 117 68 / var(--tw-bg-opacity));
  }

  .bg-warning-200 {
    --tw-bg-opacity: 1;
    background-color: rgb(250 220 174 / var(--tw-bg-opacity));
  }

  .bg-cheat-sheet-pattern {
    background-image: url(/images/background_patterns/cheatsheetPattern.svg);
  }

  .bg-dot-grid-pattern {
    background-image: url(/images/background_patterns/dotGridPattern.svg);
  }

  .bg-gradient-to-br {
    background-image: linear-gradient(to bottom right,
        var(--tw-gradient-stops));
  }

  .bg-gradient-to-r {
    background-image: linear-gradient(to right, var(--tw-gradient-stops));
  }

  .bg-gradient-to-t {
    background-image: linear-gradient(to top, var(--tw-gradient-stops));
  }

  .bg-grainy-texture {
    background-image: url(/images/background_patterns/grainyTexturePattern.png);
  }

  .from-\[\#6D58C6\] {
    --tw-gradient-from: #6d58c6 var(--tw-gradient-from-position);
    --tw-gradient-to: rgba(109, 88, 198, 0) var(--tw-gradient-to-position);
    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
  }

  .from-\[\#C8BDF7\] {
    --tw-gradient-from: #c8bdf7 var(--tw-gradient-from-position);
    --tw-gradient-to: rgba(200, 189, 247, 0) var(--tw-gradient-to-position);
    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
  }

  .from-\[\#E37764\] {
    --tw-gradient-from: #e37764 var(--tw-gradient-from-position);
    --tw-gradient-to: hsla(9, 69%, 64%, 0) var(--tw-gradient-to-position);
    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
  }

  .from-\[\#F1EEFF\] {
    --tw-gradient-from: #f1eeff var(--tw-gradient-from-position);
    --tw-gradient-to: rgba(241, 238, 255, 0) var(--tw-gradient-to-position);
    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
  }

  .from-neutral-50\/0 {
    --tw-gradient-from: hsla(0, 0%, 100%, 0) var(--tw-gradient-from-position);
    --tw-gradient-to: hsla(0, 0%, 100%, 0) var(--tw-gradient-to-position);
    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
  }

  .from-primary-100 {
    --tw-gradient-from: #f8f8ff var(--tw-gradient-from-position);
    --tw-gradient-to: rgba(248, 248, 255, 0) var(--tw-gradient-to-position);
    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
  }

  .from-0\% {
    --tw-gradient-from-position: 0%;
  }

  .from-30\% {
    --tw-gradient-from-position: 30%;
  }

  .from-50\% {
    --tw-gradient-from-position: 50%;
  }

  .to-\[\#AF4432\] {
    --tw-gradient-to: #af4432 var(--tw-gradient-to-position);
  }

  .to-\[\#EA7E77\] {
    --tw-gradient-to: #ea7e77 var(--tw-gradient-to-position);
  }

  .to-\[\#F4C7C4\] {
    --tw-gradient-to: #f4c7c4 var(--tw-gradient-to-position);
  }

  .to-\[\#FFEDEC\] {
    --tw-gradient-to: #ffedec var(--tw-gradient-to-position);
  }

  .to-neutral-50 {
    --tw-gradient-to: #fff var(--tw-gradient-to-position);
  }

  .to-primary-100\/0 {
    --tw-gradient-to: rgba(248, 248, 255, 0) var(--tw-gradient-to-position);
  }

  .to-80\% {
    --tw-gradient-to-position: 80%;
  }

  .bg-pattern {
    background-size: 2.5rem;
  }

  .bg-clip-padding {
    background-clip: padding-box;
  }

  .bg-clip-text {
    -webkit-background-clip: text;
    background-clip: text;
  }

  .bg-repeat {
    background-repeat: repeat;
  }

  .bg-repeat-x {
    background-repeat: repeat-x;
  }

  .fill-\[color\] {
    fill: color;
  }

  .fill-neutral-400 {
    fill: #ccc;
  }

  .fill-neutral-500 {
    fill: #a3a3a3;
  }

  .fill-neutral-600 {
    fill: #616162;
  }

  .fill-neutral-700 {
    fill: #242425;
  }

  .fill-none {
    fill: none;
  }

  .fill-primary-600 {
    fill: #706fa5;
  }

  .fill-primary-700 {
    fill: #3d3a79;
  }

  .stroke-\[color\] {
    stroke: color;
  }

  .stroke-danger-500 {
    stroke: #ff6767;
  }

  .stroke-danger-600 {
    stroke: #ec4343;
  }

  .stroke-danger-700 {
    stroke: #c46a6a;
  }

  .stroke-neutral-400 {
    stroke: #ccc;
  }

  .stroke-neutral-50 {
    stroke: #fff;
  }

  .stroke-neutral-500 {
    stroke: #a3a3a3;
  }

  .stroke-neutral-600 {
    stroke: #616162;
  }

  .stroke-neutral-600\/50 {
    stroke: rgba(97, 97, 98, 0.5);
  }

  .stroke-neutral-700 {
    stroke: #242425;
  }

  .stroke-primary-100 {
    stroke: #f8f8ff;
  }

  .stroke-primary-500 {
    stroke: #c1befa;
  }

  .stroke-primary-600 {
    stroke: #706fa5;
  }

  .stroke-primary-700 {
    stroke: #3d3a79;
  }

  .stroke-success-500 {
    stroke: #477544;
  }

  .stroke-success-700 {
    stroke: #3a5d38;
  }

  .stroke-warning-500 {
    stroke: #f29d41;
  }

  .stroke-warning-700 {
    stroke: #e06916;
  }

  .stroke-0 {
    stroke-width: 0;
  }

  .stroke-1 {
    stroke-width: 1;
  }

  .stroke-1\.5 {
    stroke-width: 1.5px;
  }

  .stroke-2 {
    stroke-width: 2;
  }

  .stroke-\[0\.1px\] {
    stroke-width: 0.1px;
  }

  .stroke-\[0\.3px\] {
    stroke-width: 0.3px;
  }

  .stroke-\[1\.5\] {
    stroke-width: 1.5;
  }

  .stroke-\[1\.5px\] {
    stroke-width: 1.5px;
  }

  .stroke-\[2\.5\] {
    stroke-width: 2.5;
  }

  .stroke-\[2\.5px\] {
    stroke-width: 2.5px;
  }

  .stroke-\[2\] {
    stroke-width: 2;
  }

  .stroke-\[2px\] {
    stroke-width: 2px;
  }

  .stroke-\[3\] {
    stroke-width: 3;
  }

  .stroke-\[3px\] {
    stroke-width: 3px;
  }

  .object-cover {
    -o-object-fit: cover;
    object-fit: cover;
  }

  .p-0 {
    padding: 0;
  }

  .p-0\.5 {
    padding: 0.125rem;
  }

  .p-1 {
    padding: 0.25rem;
  }

  .p-10 {
    padding: 2.5rem;
  }

  .p-2 {
    padding: 0.5rem;
  }

  .p-20 {
    padding: 5rem;
  }

  .p-3 {
    padding: 0.75rem;
  }

  .p-4 {
    padding: 1rem;
  }

  .p-5 {
    padding: 1.25rem;
  }

  .p-8 {
    padding: 2rem;
  }

  .p-\[0\.35rem\] {
    padding: 0.35rem;
  }

  .p-\[0\.40rem\],
  .p-\[0\.4rem\] {
    padding: 0.4rem;
  }

  .p-\[1px\] {
    padding: 1px;
  }

  .p-\[2px\] {
    padding: 2px;
  }

  .p-\[6px\] {
    padding: 6px;
  }

  .px-1 {
    padding-left: 0.25rem;
    padding-right: 0.25rem;
  }

  .px-1\.5 {
    padding-left: 0.375rem;
    padding-right: 0.375rem;
  }

  .px-10 {
    padding-left: 2.5rem;
    padding-right: 2.5rem;
  }

  .px-14 {
    padding-left: 3.5rem;
    padding-right: 3.5rem;
  }

  .px-2 {
    padding-left: 0.5rem;
    padding-right: 0.5rem;
  }

  .px-2\.5 {
    padding-left: 0.625rem;
    padding-right: 0.625rem;
  }

  .px-20 {
    padding-left: 5rem;
    padding-right: 5rem;
  }

  .px-28 {
    padding-left: 7rem;
    padding-right: 7rem;
  }

  .px-3 {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }

  .px-4 {
    padding-left: 1rem;
    padding-right: 1rem;
  }

  .px-5 {
    padding-left: 1.25rem;
    padding-right: 1.25rem;
  }

  .px-6 {
    padding-left: 1.5rem;
    padding-right: 1.5rem;
  }

  .px-8 {
    padding-left: 2rem;
    padding-right: 2rem;
  }

  .px-\[3px\] {
    padding-left: 3px;
    padding-right: 3px;
  }

  .px-\[7\.9rem\] {
    padding-left: 7.9rem;
    padding-right: 7.9rem;
  }

  .py-0 {
    padding-top: 0;
    padding-bottom: 0;
  }

  .py-1 {
    padding-top: 0.25rem;
    padding-bottom: 0.25rem;
  }

  .py-10 {
    padding-top: 2.5rem;
    padding-bottom: 2.5rem;
  }

  .py-2 {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
  }

  .py-2\.5 {
    padding-top: 0.625rem;
    padding-bottom: 0.625rem;
  }

  .py-3 {
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
  }

  .py-4 {
    padding-top: 1rem;
    padding-bottom: 1rem;
  }

  .py-5 {
    padding-top: 1.25rem;
    padding-bottom: 1.25rem;
  }

  .py-6 {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
  }

  .py-8 {
    padding-top: 2rem;
    padding-bottom: 2rem;
  }

  .py-\[5\.75rem\] {
    padding-top: 5.75rem;
    padding-bottom: 5.75rem;
  }

  .py-\[7px\] {
    padding-top: 7px;
    padding-bottom: 7px;
  }

  .pb-1 {
    padding-bottom: 0.25rem;
  }

  .pb-10 {
    padding-bottom: 2.5rem;
  }

  .pb-2 {
    padding-bottom: 0.5rem;
  }

  .pb-20 {
    padding-bottom: 5rem;
  }

  .pb-3 {
    padding-bottom: 0.75rem;
  }

  .pb-4 {
    padding-bottom: 1rem;
  }

  .pb-40 {
    padding-bottom: 10rem;
  }

  .pb-5 {
    padding-bottom: 1.25rem;
  }

  .pb-6 {
    padding-bottom: 1.5rem;
  }

  .pb-8 {
    padding-bottom: 2rem;
  }

  .pb-\[56\.25\%\] {
    padding-bottom: 56.25%;
  }

  .pl-1 {
    padding-left: 0.25rem;
  }

  .pl-2 {
    padding-left: 0.5rem;
  }

  .pl-4 {
    padding-left: 1rem;
  }

  .pl-9 {
    padding-left: 2.25rem;
  }

  .pr-12 {
    padding-right: 3rem;
  }

  .pr-2 {
    padding-right: 0.5rem;
  }

  .pr-3 {
    padding-right: 0.75rem;
  }

  .pr-4 {
    padding-right: 1rem;
  }

  .pt-1 {
    padding-top: 0.25rem;
  }

  .pt-2 {
    padding-top: 0.5rem;
  }

  .pt-3 {
    padding-top: 0.75rem;
  }

  .pt-4 {
    padding-top: 1rem;
  }

  .pt-5 {
    padding-top: 1.25rem;
  }

  .pt-8 {
    padding-top: 2rem;
  }

  .text-left {
    text-align: left;
  }

  .text-center {
    text-align: center;
  }

  .text-start {
    text-align: start;
  }

  .font-sans {
    font-family: jakarta, ui-sans-serif, system-ui;
  }

  .font-title {
    font-family: listenup-title, jakarta, ui-sans-serif, system-ui;
  }

  .text-2xl {
    font-size: 1.5rem;
    line-height: 2rem;
  }

  .text-3xl {
    font-size: 1.875rem;
    line-height: 2.25rem;
  }

  .text-4xl {
    font-size: 2.25rem;
    line-height: 2.5rem;
  }

  .text-5xl {
    font-size: 3rem;
    line-height: 1;
  }

  .text-6xl {
    font-size: 3.75rem;
    line-height: 1;
  }

  .text-7xl {
    font-size: 4.5rem;
    line-height: 1;
  }

  .text-8xl {
    font-size: 6rem;
    line-height: 1;
  }

  .text-\[0\.6rem\] {
    font-size: 0.6rem;
  }

  .text-base {
    font-size: 1rem;
    line-height: 1.5rem;
  }

  .text-lg {
    font-size: 1.125rem;
    line-height: 1.75rem;
  }

  .text-sm {
    font-size: 0.875rem;
    line-height: 1.25rem;
  }

  .text-xl {
    font-size: 1.25rem;
    line-height: 1.75rem;
  }

  .text-xs {
    font-size: 0.75rem;
    line-height: 1rem;
  }

  .font-bold {
    font-weight: 700;
  }

  .font-extrabold {
    font-weight: 800;
  }

  .font-medium {
    font-weight: 500;
  }

  .font-normal {
    font-weight: 400;
  }

  .font-semibold {
    font-weight: 600;
  }

  .capitalize {
    text-transform: capitalize;
  }

  .italic {
    font-style: italic;
  }

  .leading-3 {
    line-height: 0.75rem;
  }

  .leading-4 {
    line-height: 1rem;
  }

  .tracking-widest {
    letter-spacing: 0.1em;
  }

  .text-danger-500 {
    --tw-text-opacity: 1;
    color: rgb(255 103 103 / var(--tw-text-opacity));
  }

  .text-danger-600 {
    --tw-text-opacity: 1;
    color: rgb(236 67 67 / var(--tw-text-opacity));
  }

  .text-danger-700 {
    --tw-text-opacity: 1;
    color: rgb(196 106 106 / var(--tw-text-opacity));
  }

  .text-neutral-100 {
    --tw-text-opacity: 1;
    color: rgb(249 249 249 / var(--tw-text-opacity));
  }

  .text-neutral-300 {
    --tw-text-opacity: 1;
    color: rgb(234 234 234 / var(--tw-text-opacity));
  }

  .text-neutral-400 {
    --tw-text-opacity: 1;
    color: rgb(204 204 204 / var(--tw-text-opacity));
  }

  .text-neutral-50 {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity));
  }

  .text-neutral-500 {
    --tw-text-opacity: 1;
    color: rgb(163 163 163 / var(--tw-text-opacity));
  }

  .text-neutral-600 {
    --tw-text-opacity: 1;
    color: rgb(97 97 98 / var(--tw-text-opacity));
  }

  .text-neutral-700 {
    --tw-text-opacity: 1;
    color: rgb(36 36 37 / var(--tw-text-opacity));
  }

  .text-primary-500 {
    --tw-text-opacity: 1;
    color: rgb(193 190 250 / var(--tw-text-opacity));
  }

  .text-primary-600 {
    --tw-text-opacity: 1;
    color: rgb(112 111 165 / var(--tw-text-opacity));
  }

  .text-primary-700 {
    --tw-text-opacity: 1;
    color: rgb(61 58 121 / var(--tw-text-opacity));
  }

  .text-success-500 {
    --tw-text-opacity: 1;
    color: rgb(71 117 68 / var(--tw-text-opacity));
  }

  .text-success-700 {
    --tw-text-opacity: 1;
    color: rgb(58 93 56 / var(--tw-text-opacity));
  }

  .text-opacity-0 {
    --tw-text-opacity: 0;
  }

  .underline {
    text-decoration-line: underline;
  }

  .line-through {
    text-decoration-line: line-through;
  }

  .antialiased {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }

  .accent-primary-600 {
    accent-color: #706fa5;
  }

  .opacity-0 {
    opacity: 0;
  }

  .opacity-100 {
    opacity: 1;
  }

  .opacity-40 {
    opacity: 0.4;
  }

  .opacity-50 {
    opacity: 0.5;
  }

  .opacity-60 {
    opacity: 0.6;
  }

  .opacity-70 {
    opacity: 0.7;
  }

  .opacity-80 {
    opacity: 0.8;
  }

  .bg-blend-luminosity {
    background-blend-mode: luminosity;
  }

  .shadow {
    --tw-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1),
      0 1px 2px -1px rgba(0, 0, 0, 0.1);
    --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color),
      0 1px 2px -1px var(--tw-shadow-color);
  }

  .shadow,
  .shadow-2xl {
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
      var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
  }

  .shadow-2xl {
    --tw-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
  }

  .shadow-apple {
    --tw-shadow: 0 10px 15px rgba(0, 0, 0, 0.3);
    --tw-shadow-colored: 0 10px 15px var(--tw-shadow-color);
  }

  .shadow-apple,
  .shadow-lg {
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
      var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
  }

  .shadow-lg {
    --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
      0 4px 6px -4px rgba(0, 0, 0, 0.1);
    --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color),
      0 4px 6px -4px var(--tw-shadow-color);
  }

  .shadow-sm {
    --tw-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
  }

  .shadow-sm,
  .shadow-smooth {
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
      var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
  }

  .shadow-smooth {
    --tw-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.05);
    --tw-shadow-colored: 0px 4px 4px 0px var(--tw-shadow-color);
  }

  .shadow-smoothxl {
    --tw-shadow: 0px 7.27px 7.27px 0px rgba(0, 0, 0, 0.2);
    --tw-shadow-colored: 0px 7.27px 7.27px 0px var(--tw-shadow-color);
  }

  .shadow-smoothxl,
  .shadow-xl {
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
      var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
  }

  .shadow-xl {
    --tw-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1),
      0 8px 10px -6px rgba(0, 0, 0, 0.1);
    --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color),
      0 8px 10px -6px var(--tw-shadow-color);
  }

  .\!outline-none {
    outline: 2px solid transparent !important;
    outline-offset: 2px !important;
  }

  .outline-none {
    outline: 2px solid transparent;
    outline-offset: 2px;
  }

  .outline-dashed {
    outline-style: dashed;
  }

  .outline-2 {
    outline-width: 2px;
  }

  .outline-\[0\.15rem\] {
    outline-width: 0.15rem;
  }

  .outline-\[0\.17rem\] {
    outline-width: 0.17rem;
  }

  .-outline-offset-2 {
    outline-offset: -2px;
  }

  .outline-neutral-700 {
    outline-color: #242425;
  }

  .outline-primary-500 {
    outline-color: #c1befa;
  }

  .outline-primary-600 {
    outline-color: #706fa5;
  }

  .ring-opacity-5 {
    --tw-ring-opacity: 0.05;
  }

  .blur {
    --tw-blur: blur(8px);
  }

  .blur,
  .filter {
    filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
  }

  .filter-none {
    filter: none;
  }

  .backdrop-blur-\[2px\] {
    --tw-backdrop-blur: blur(2px);
    -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
    backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
  }

  .transition {
    transition-property: color, background-color, border-color,
      text-decoration-color, fill, stroke, opacity, box-shadow, transform,
      filter, -webkit-backdrop-filter;
    transition-property: color, background-color, border-color,
      text-decoration-color, fill, stroke, opacity, box-shadow, transform,
      filter, backdrop-filter;
    transition-property: color, background-color, border-color,
      text-decoration-color, fill, stroke, opacity, box-shadow, transform,
      filter, backdrop-filter, -webkit-backdrop-filter;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 0.15s;
  }

  .transition-all {
    transition-property: all;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 0.15s;
  }

  .transition-colors {
    transition-property: color, background-color, border-color,
      text-decoration-color, fill, stroke;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 0.15s;
  }

  .transition-shadow {
    transition-property: box-shadow;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 0.15s;
  }

  .duration-200 {
    transition-duration: 0.2s;
  }

  .ease-out {
    transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
  }

  .no-scrollbar::-webkit-scrollbar {
    display: none;
  }

  .no-scrollbar {
    -ms-overflow-style: none;
    scrollbar-width: none;
  }

  body,
  html {
    height: 100%;
    width: 100%;
    cursor: url(/cursors/normal-cursor.svg), default;
    overflow: hidden;
  }

  a:hover,
  button:hover,
  video:hover {
    cursor: url(/cursors/clickable-cursor.svg), pointer;
  }

  ul {
    list-style-type: disc;
  }

  ol,
  ul {
    padding-left: 1.5em;
  }

  ol {
    list-style-type: decimal;
  }

  ul li {
    margin-bottom: 10px;
  }

  *,
  :after,
  :before {
    box-sizing: border-box;
  }

  * {
    margin: 0;
  }

  body {
    -webkit-font-smoothing: antialiased;
  }

  canvas,
  img,
  picture,
  svg,
  video {
    display: block;
    max-width: 100%;
  }

  button,
  input,
  select,
  textarea {
    font: inherit;
  }

  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  p {
    overflow-wrap: break-word;
  }

  *,
  button {
    outline-color: #c1befa;
  }

  .h1,
  h1 {
    font-size: 1.875rem;
    line-height: 2.5rem;
  }

  .h1,
  .h2,
  h1,
  h2 {
    font-family: listenup-title, jakarta, ui-sans-serif, system-ui;
    font-weight: 700;
    --tw-text-opacity: 1;
    color: rgb(36 36 37 / var(--tw-text-opacity));
  }

  .h2,
  h2 {
    font-size: 1.5rem;
    line-height: 2rem;
  }

  .h3,
  h3 {
    font-family: jakarta, ui-sans-serif, system-ui;
    font-size: 1.125rem;
    font-weight: 700;
    line-height: 1.5rem;
    --tw-text-opacity: 1;
    color: rgb(36 36 37 / var(--tw-text-opacity));
  }

  .h4,
  h4 {
    font-size: 1rem;
  }

  .h4,
  .h5,
  h4,
  h5 {
    font-family: jakarta, ui-sans-serif, system-ui;
    font-weight: 600;
    line-height: 1.5rem;
    --tw-text-opacity: 1;
    color: rgb(36 36 37 / var(--tw-text-opacity));
  }

  .h5,
  h5 {
    font-size: 0.875rem;
  }

  .p,
  body,
  p {
    font-size: 0.875rem;
    line-height: 1.5rem;
    color: rgb(36 36 37 / var(--tw-text-opacity));
  }

  .p,
  .text-small,
  body,
  p {
    font-family: jakarta, ui-sans-serif, system-ui;
    font-weight: 500;
    --tw-text-opacity: 1;
  }

  .text-small {
    font-size: 0.75rem;
    line-height: 1rem;
    line-height: 1.25;
    color: rgb(97 97 98 / var(--tw-text-opacity));
  }

  ::-moz-selection {
    --tw-bg-opacity: 1;
    background-color: rgb(253 238 165 / var(--tw-bg-opacity));
  }

  ::selection {
    --tw-bg-opacity: 1;
    background-color: rgb(253 238 165 / var(--tw-bg-opacity));
  }

  .player-wrapper-insight {
    width: 100%;
    border-top-left-radius: 0.75rem;
    border-top-right-radius: 0.75rem;
    --tw-bg-opacity: 1;
  }

  .player-wrapper,
  .player-wrapper-insight {
    background-color: rgb(36 36 37 / var(--tw-bg-opacity));
  }

  .player-wrapper {
    overflow: hidden;
    border-radius: 0.625rem;
    border-width: 2px;
    --tw-border-opacity: 1;
    border-color: rgb(204 204 204 / var(--tw-border-opacity));
    --tw-bg-opacity: 1;
  }

  .react-player {
    position: relative;
    overflow: hidden;
    border-radius: 0.625rem;
    padding-top: 56.25%;
  }

  .react-player>div {
    position: absolute;
  }

  input:-webkit-autofill,
  input:-webkit-autofill:active,
  input:-webkit-autofill:focus,
  input:-webkit-autofill:hover {
    -webkit-background-clip: text;
    -webkit-text-fill-color: #000;
    -webkit-transition: background-color 5000s ease-in-out 0s;
    transition: background-color 5000s ease-in-out 0s;
    box-shadow: inset 0 0 20px 20px #f8f8ff;
  }

  [contentEditable="true"]:focus {
    outline: 2px solid transparent;
    outline-offset: 2px;
  }

  body ::-webkit-scrollbar {
    width: 5px;
    height: 5px;
  }

  body ::-webkit-scrollbar-thumb {
    background: #ccc;
    border-radius: 2px;
  }

  .tiptap p.is-editor-empty:first-child:before {
    color: #adb5bd;
    content: attr(data-placeholder);
    float: left;
    height: 0;
    pointer-events: none;
  }

  .hover\:cursor-cool-clickable:hover {
    cursor: url(/cursors/clickable-cursor.svg), pointer;
  }

  .hover\:cursor-cool-highlight:hover {
    cursor: url(/cursors/highlight-cursor.svg), default;
  }

  .hover\:cursor-cool-normal:hover {
    cursor: url(/cursors/normal-cursor.svg), default;
  }

  .hover\:bg-neutral-100:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(249 249 249 / var(--tw-bg-opacity));
  }

  .hover\:bg-neutral-200:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(246 246 246 / var(--tw-bg-opacity));
  }

  .hover\:bg-neutral-300\/70:hover {
    background-color: hsla(0, 0%, 92%, 0.7);
  }

  .hover\:bg-primary-100:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(248 248 255 / var(--tw-bg-opacity));
  }

  .hover\:bg-primary-200:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(242 241 255 / var(--tw-bg-opacity));
  }

  .hover\:bg-primary-300:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(236 235 253 / var(--tw-bg-opacity));
  }

  .hover\:transition-colors:hover {
    transition-property: color, background-color, border-color,
      text-decoration-color, fill, stroke;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 0.15s;
  }

  .focus\:bg-primary-200:focus {
    --tw-bg-opacity: 1;
    background-color: rgb(242 241 255 / var(--tw-bg-opacity));
  }

  .focus\:bg-primary-300:focus {
    --tw-bg-opacity: 1;
    background-color: rgb(236 235 253 / var(--tw-bg-opacity));
  }

  .focus\:outline-none:focus {
    outline: 2px solid transparent;
    outline-offset: 2px;
  }

  .focus\:outline-primary-500:focus {
    outline-color: #c1befa;
  }

  .focus\:ring-0:focus {
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(0px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
      var(--tw-shadow, 0 0 #0000);
  }

  .disabled\:cursor-cool-normal:disabled {
    cursor: url(/cursors/normal-cursor.svg), default;
  }

  .disabled\:cursor-not-allowed:disabled {
    cursor: not-allowed;
  }

  .disabled\:opacity-50:disabled {
    opacity: 0.5;
  }

  .aria-selected\:bg-primary-300[aria-selected="true"] {
    --tw-bg-opacity: 1;
    background-color: rgb(236 235 253 / var(--tw-bg-opacity));
  }

  .data-\[disabled\]\:pointer-events-none[data-disabled] {
    pointer-events: none;
  }

  .data-\[disabled\]\:opacity-50[data-disabled] {
    opacity: 0.5;
  }

  @media (min-width: 1024px) {
    .lg\:block {
      display: block;
    }
  }

  @media (min-width: 1280px) {
    .xl\:h-\[50\%\] {
      height: 50%;
    }

    .xl\:w-1\/3 {
      width: 33.333333%;
    }

    .xl\:w-\[20rem\] {
      width: 20rem;
    }
  }

  @media (min-width: 1408px) {
    .\31\.5xl\:h-full {
      height: 100%;
    }

    .\31\.5xl\:w-1\/3 {
      width: 33.333333%;
    }

    .\31\.5xl\:w-2\/3 {
      width: 66.666667%;
    }

    .\31\.5xl\:w-full {
      width: 100%;
    }

    .\31\.5xl\:flex-row {
      flex-direction: row;
    }

    .\31\.5xl\:border-l-1 {
      border-left-width: 1px;
    }
  }

  @media (min-width: 1536px) {
    .\32xl\:mb-28 {
      margin-bottom: 7rem;
    }

    .\32xl\:p-20 {
      padding: 5rem;
    }
  }

  .\[\&\>\*\]\:mb-2>* {
    margin-bottom: 0.5rem;
  }

  .\[\&\>\*\]\:mb-8>* {
    margin-bottom: 2rem;
  }

  .\[\&_\[cmdk-group-heading\]\]\:py-1\.5 [cmdk-group-heading] {
    padding-top: 0.375rem;
    padding-bottom: 0.375rem;
  }

  .\[\&_\[cmdk-group-heading\]\]\:text-xs [cmdk-group-heading] {
    font-size: 0.75rem;
    line-height: 1rem;
  }

  .\[\&_\[cmdk-group-heading\]\]\:font-medium [cmdk-group-heading] {
    font-weight: 500;
  }

  .\[\&_\[cmdk-group\]\:not\(\[hidden\]\)_\~\[cmdk-group\]\]\:pt-0 [cmdk-group]:not([hidden])~[cmdk-group] {
    padding-top: 0;
  }

  .\[\&_\[cmdk-input-wrapper\]_svg\]\:h-5 [cmdk-input-wrapper] svg {
    height: 1.25rem;
  }

  .\[\&_\[cmdk-input-wrapper\]_svg\]\:w-5 [cmdk-input-wrapper] svg {
    width: 1.25rem;
  }

  .\[\&_\[cmdk-input\]\]\:h-12 [cmdk-input] {
    height: 3rem;
  }

  .\[\&_\[cmdk-item\]\]\:py-3 [cmdk-item] {
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
  }

  .\[\&_\[cmdk-item\]_svg\]\:h-5 [cmdk-item] svg {
    height: 1.25rem;
  }

  .\[\&_\[cmdk-item\]_svg\]\:w-5 [cmdk-item] svg {
    width: 1.25rem;
  }

  .ReactCrop {
    position: relative;
    display: inline-block;
    cursor: crosshair;
    overflow: hidden;
    max-width: 100%;
  }

  .ReactCrop *,
  .ReactCrop :after,
  .ReactCrop :before {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
  }

  .ReactCrop--disabled,
  .ReactCrop--locked {
    cursor: inherit;
  }

  .ReactCrop__child-wrapper {
    max-height: inherit;
  }

  .ReactCrop__child-wrapper>img,
  .ReactCrop__child-wrapper>video {
    display: block;
    max-width: 100%;
    max-height: inherit;
  }

  .ReactCrop:not(.ReactCrop--disabled) .ReactCrop__child-wrapper>img,
  .ReactCrop:not(.ReactCrop--disabled) .ReactCrop__child-wrapper>video,
  .ReactCrop:not(.ReactCrop--disabled) .ReactCrop__crop-selection {
    -ms-touch-action: none;
    touch-action: none;
  }

  .ReactCrop__crop-selection {
    position: absolute;
    top: 0;
    left: 0;
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    cursor: move;
    -webkit-box-shadow: 0 0 0 9999em #00000080;
    box-shadow: 0 0 0 9999em #00000080;
  }

  .ReactCrop--disabled .ReactCrop__crop-selection {
    cursor: inherit;
  }

  .ReactCrop--circular-crop .ReactCrop__crop-selection {
    border-radius: 50%;
  }

  .ReactCrop--no-animate .ReactCrop__crop-selection {
    outline: 1px dashed #fff;
  }

  .ReactCrop__crop-selection:not(.ReactCrop--no-animate .ReactCrop__crop-selection) {
    -webkit-animation: marching-ants 1s;
    animation: marching-ants 1s;
    background-image: -webkit-gradient(linear,
        left top,
        right top,
        color-stop(50%, #fff),
        color-stop(50%, #444)),
      -webkit-gradient(linear, left top, right top, color-stop(50%, #fff), color-stop(50%, #444)),
      -webkit-gradient(linear, left top, left bottom, color-stop(50%, #fff), color-stop(50%, #444)),
      -webkit-gradient(linear, left top, left bottom, color-stop(50%, #fff), color-stop(50%, #444));
    background-image: linear-gradient(90deg, #fff 50%, #444 0),
      linear-gradient(90deg, #fff 50%, #444 0),
      linear-gradient(180deg, #fff 50%, #444 0),
      linear-gradient(180deg, #fff 50%, #444 0);
    background-size: 10px 1px, 10px 1px, 1px 10px, 1px 10px;
    background-position: 0 0, 0 100%, 0 0, 100% 0;
    background-repeat: repeat-x, repeat-x, repeat-y, repeat-y;
    color: #fff;
    -webkit-animation-play-state: running;
    animation-play-state: running;
    -webkit-animation-timing-function: linear;
    animation-timing-function: linear;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
  }

  @-webkit-keyframes marching-ants {
    0% {
      background-position: 0 0, 0 100%, 0 0, 100% 0;
    }

    to {
      background-position: 20px 0, -20px 100%, 0 -20px, 100% 20px;
    }
  }

  @keyframes marching-ants {
    0% {
      background-position: 0 0, 0 100%, 0 0, 100% 0;
    }

    to {
      background-position: 20px 0, -20px 100%, 0 -20px, 100% 20px;
    }
  }

  .ReactCrop__crop-selection:focus {
    outline: none;
    border-color: #00f;
    border-style: solid;
  }

  .ReactCrop--invisible-crop .ReactCrop__crop-selection {
    display: none;
  }

  .ReactCrop__rule-of-thirds-hz:after,
  .ReactCrop__rule-of-thirds-hz:before,
  .ReactCrop__rule-of-thirds-vt:after,
  .ReactCrop__rule-of-thirds-vt:before {
    content: "";
    display: block;
    position: absolute;
    background-color: #fff6;
  }

  .ReactCrop__rule-of-thirds-vt:after,
  .ReactCrop__rule-of-thirds-vt:before {
    width: 1px;
    height: 100%;
  }

  .ReactCrop__rule-of-thirds-vt:before {
    left: 33.3333333333%;
  }

  .ReactCrop__rule-of-thirds-vt:after {
    left: 66.6666666667%;
  }

  .ReactCrop__rule-of-thirds-hz:after,
  .ReactCrop__rule-of-thirds-hz:before {
    width: 100%;
    height: 1px;
  }

  .ReactCrop__rule-of-thirds-hz:before {
    top: 33.3333333333%;
  }

  .ReactCrop__rule-of-thirds-hz:after {
    top: 66.6666666667%;
  }

  .ReactCrop__drag-handle {
    position: absolute;
  }

  .ReactCrop__drag-handle:after {
    position: absolute;
    content: "";
    display: block;
    width: 10px;
    height: 10px;
    background-color: #0003;
    border: 1px solid hsla(0, 0%, 100%, 0.7);
    outline: 1px solid transparent;
  }

  .ReactCrop__drag-handle:focus:after {
    border-color: #00f;
    background: #2dbfff;
  }

  .ReactCrop .ord-nw {
    top: 0;
    left: 0;
    margin-top: -5px;
    margin-left: -5px;
    cursor: nw-resize;
  }

  .ReactCrop .ord-nw:after {
    top: 0;
    left: 0;
  }

  .ReactCrop .ord-n {
    top: 0;
    left: 50%;
    margin-top: -5px;
    margin-left: -5px;
    cursor: n-resize;
  }

  .ReactCrop .ord-n:after {
    top: 0;
  }

  .ReactCrop .ord-ne {
    top: 0;
    right: 0;
    margin-top: -5px;
    margin-right: -5px;
    cursor: ne-resize;
  }

  .ReactCrop .ord-ne:after {
    top: 0;
    right: 0;
  }

  .ReactCrop .ord-e {
    top: 50%;
    right: 0;
    margin-top: -5px;
    margin-right: -5px;
    cursor: e-resize;
  }

  .ReactCrop .ord-e:after {
    right: 0;
  }

  .ReactCrop .ord-se {
    bottom: 0;
    right: 0;
    margin-bottom: -5px;
    margin-right: -5px;
    cursor: se-resize;
  }

  .ReactCrop .ord-se:after {
    bottom: 0;
    right: 0;
  }

  .ReactCrop .ord-s {
    bottom: 0;
    left: 50%;
    margin-bottom: -5px;
    margin-left: -5px;
    cursor: s-resize;
  }

  .ReactCrop .ord-s:after {
    bottom: 0;
  }

  .ReactCrop .ord-sw {
    bottom: 0;
    left: 0;
    margin-bottom: -5px;
    margin-left: -5px;
    cursor: sw-resize;
  }

  .ReactCrop .ord-sw:after {
    bottom: 0;
    left: 0;
  }

  .ReactCrop .ord-w {
    top: 50%;
    left: 0;
    margin-top: -5px;
    margin-left: -5px;
    cursor: w-resize;
  }

  .ReactCrop .ord-w:after {
    left: 0;
  }

  .ReactCrop__disabled .ReactCrop__drag-handle {
    cursor: inherit;
  }

  .ReactCrop__drag-bar {
    position: absolute;
  }

  .ReactCrop__drag-bar.ord-n {
    top: 0;
    left: 0;
    width: 100%;
    height: 6px;
    margin-top: -3px;
  }

  .ReactCrop__drag-bar.ord-e {
    right: 0;
    top: 0;
    width: 6px;
    height: 100%;
    margin-right: -3px;
  }

  .ReactCrop__drag-bar.ord-s {
    bottom: 0;
    left: 0;
    width: 100%;
    height: 6px;
    margin-bottom: -3px;
  }

  .ReactCrop__drag-bar.ord-w {
    top: 0;
    left: 0;
    width: 6px;
    height: 100%;
    margin-left: -3px;
  }

  .ReactCrop--fixed-aspect .ReactCrop__drag-bar,
  .ReactCrop--fixed-aspect .ReactCrop__drag-handle.ord-e,
  .ReactCrop--fixed-aspect .ReactCrop__drag-handle.ord-n,
  .ReactCrop--fixed-aspect .ReactCrop__drag-handle.ord-s,
  .ReactCrop--fixed-aspect .ReactCrop__drag-handle.ord-w,
  .ReactCrop--new-crop .ReactCrop__drag-bar,
  .ReactCrop--new-crop .ReactCrop__drag-handle {
    display: none;
  }

  @media (pointer: coarse) {

    .ReactCrop .ord-e,
    .ReactCrop .ord-n,
    .ReactCrop .ord-s,
    .ReactCrop .ord-w {
      display: none;
    }

    .ReactCrop__drag-handle {
      width: 24px;
      height: 24px;
    }
  }
</style>
<script src="/avatar.js"></script>
@include('feedback')@include('profileSettings') <script>
  let ifDownloadOpen = false;
  function showInput() {
    console.log(ifDownloadOpen)
    if (!ifDownloadOpen) {
      var inputContainer = document.getElementById("inputContainer");
      var mainText = document.getElementById("main_text");

      mainText.style.transition = "opacity 0.5s ease";
      mainText.style.opacity = "0";

      setTimeout(() => {
        mainText.classList.add("hidden-text");
        inputContainer.classList.remove("hidden");
        inputContainer.style.transition = "opacity 0.5s ease, max-height 0.5s ease, padding 0.5s ease";
        inputContainer.style.opacity = "0";
        inputContainer.style.maxHeight = "0";
        inputContainer.style.padding = "0";

        setTimeout(() => {
          inputContainer.style.opacity = "1";
          inputContainer.style.maxHeight = "100px";
        }, 10);
      }, 500);
    }

  }

  function joinMeeting() {
    var meetingCode = document.getElementById("meetingInput").value;
    var button_block = document.getElementById("button_block");

    $.ajax({
      url: "{{ route("api.code.check") }}",
      type: "GET",
      data: {
        code: meetingCode,
        _token: "{{ csrf_token() }}"
      },
      success: function (data) {
        console.log(data)
        if (data.message == "success") {
          ifDownloadOpen = true;
          var download_a_block = document.getElementById("download_block_a_href")
          download_a_block.setAttribute("download", "")
          download_a_block.href = data.download_url;
          showSecondBlock()
        } else {
          button_block.classList.add("error_field");
          button_block.style.transition = "all 0.3s ease";
          setTimeout(function(){
            button_block.classList.remove("error_field");
          },2000)
        }
      },
      error: function (data) {
        console.log(data)
        button_block.classList.add("error_field");
        button_block.style.transition = "all 0.3s ease";
        setTimeout(function(){
            button_block.classList.remove("error_field");
          },2000)
      }
    })
  }
</script>
<script>
  function showSecondBlock() {
    $("#section_1").fadeOut(500, function () {
      $("#section_2").fadeIn(500);
    });
  }


  function showFirstBlock() {
    $("#section_2").fadeOut(500, function () {
      $("#section_1").fadeIn(500);
    });
  }

</script>
<!DOCTYPE html>
<html style="">
  @include('fonts')

<head>
  @include('fonts')
  <link
    href="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/63558f9ff9e1cc03ead6aea4_32.png"
    rel="shortcut icon"
    type="image/x-icon" />
  <link
    href="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/63558f5e63bfed5fc2509a07_256.png"
    rel="apple-touch-icon" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Home | SoundLine!</title>
  <meta name="next-head-count" content="3" />
  <link
    rel="preload"
    href="{{ asset("assets/b08c6edf6d5dd570.css")  }}" />
  <link
    rel="stylesheet"
    href="{{ asset("assets/b08c6edf6d5dd570.css") }}"
    data-n-g="" />
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

<body>
  <div id="__next">
    <div>
      <div
        class="bg-primary-100 w-screen h-screen flex items-center justify-center">
        <div class="h-full w-full flex">
          <section
            class="h-screen bg-neutral-50 p-10 2xl:p-20 flex flex-col w-2/5">
            <div class="h-fit w-full mb-10 2xl:mb-28">
              <img
                alt="SoundLine Navbar Logo"
                loading="lazy"
                width="140"
                height="25"
                decoding="async"
                data-nimg="1"
                style="color: transparent"
                src="/assets/logo.png" />
            </div>
            <div class="h-full w-full" id="nameLastNameForm">
              <div class="w-full h-full flex flex-col justify-between">
                <div class="flex-grow w-full flex flex-col gap-2">
                  <h1>Let's create your profile</h1>
                  <div class="flex gap-4 items-center mb-4 mt-4">
                    <div
                      class="rounded-full border-neutral-700 relative overflow-hidden flex items-center justify-center bg-primary-500 relative w-16 h-16 min-w-[2.25rem] min-h-[2.25rem] border-1">
                      <img
                        id="avatar_1"
                         style="height:100%"
                        src="{{asset("assets/member_avatar_453.png")}}"
                        alt="Avatar"
                        class="object-cover" />
                    </div>
                    <div
                      class="flex items-center justify-center gap-2 rounded font-medium leading-4 whitespace-nowrap overflow-hidden text-overflow-ellipsis w-auto min-w-0 min-h-0 select-none px-2 py-1 bg-neutral-200 border-1 border-neutral-400 opacity-100"
                      style="transform: none; transform-origin: 50% 50% 0px">
                      <input
                        type="file"
                        id="uploadFile"
                        style="display: none" /><label
                        for="uploadFile"
                        style="cursor: pointer"
                        class="upload-button">
                        <h5 class="text-neutral-600">Change picture</h5>
                      </label>
                    </div>
                  </div>
                  <div class="w-full flex flex-col gap-4">
                    <div class="flex flex-col gap-1 w-full">
                      <div
                        style="
                            transform-origin: center center 0px;
                            perspective: 500px;
                            transform: none;
                          ">
                        <input
                          class="px-2 py-2 rounded transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal bg-neutral-50 border-1 border-neutral-400 w-full p focus:outline-primary-500 overflow-hidden text-ellipsis-clip"
                          type="text"
                          id="name"
                          placeholder="First name" />
                      </div>
                    </div>
                    <div class="flex flex-col gap-1 w-full">
                      <div
                        style="
                            transform-origin: center center 0px;
                            perspective: 500px;
                            transform: none;
                          ">
                        <input
                          class="px-2 py-2 rounded transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal bg-neutral-50 border-1 border-neutral-400 w-full p focus:outline-primary-500 overflow-hidden text-ellipsis-clip"
                          type="text"
                          id="lastName"
                          placeholder="Last name" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="flex-1 h-fit w-full flex items-end">
                  <div class="w-full flex items-center justify-between">
                    <div class="flex gap-2">
                      <div class="flex flex-col gap-2">
                        <section class="relative h-2 w-8">
                          <div
                            class="absolute bg-primary-500 rounded z-10 h-2"
                            style="width: 100%"></div>
                          <div
                            class="absolute bg-neutral-300 rounded h-2 w-8"></div>
                        </section>
                      </div>
                      <div class="flex flex-col gap-2">
                        <section class="relative h-2 w-8">
                          <div
                            class="absolute bg-primary-500 rounded z-10 h-2"
                            style="width: 0%"></div>
                          <div
                            class="absolute bg-neutral-300 rounded h-2 w-8"></div>
                        </section>
                      </div>
                      <div class="flex flex-col gap-2">
                        <section class="relative h-2 w-8">
                          <div
                            class="absolute bg-primary-500 rounded z-10 h-2"
                            style="width: 0%"></div>
                          <div
                            class="absolute bg-neutral-300 rounded h-2 w-8"></div>
                        </section>
                      </div>
                    </div>
                    <button
                      type="button"
                      disabled="disabled"
                      class="flex items-center justify-center gap-2 rounded font-medium leading-4 whitespace-nowrap overflow-hidden text-overflow-ellipsis w-auto min-w-0 min-h-0 select-none px-3 py-2 bg-secondary-300 border-[2px] border-neutral-700 shadow-smoothxl opacity-60 w-[10rem]"
                      tabindex="0"
                      id="nameLastNameButton"
                      style="transform: none; transform-origin: 50% 50% 0px">
                      <h4>Continue</h4>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="h-full w-full" id="workForm" style="display: none">
              <div class="w-full h-full flex flex-col justify-between">
                <section class="flex-grow w-full flex flex-col gap-2">
                  <h1>What kind of work do you do?</h1>
                  <h5 class="text-neutral-500">
                    You can select multiple options
                  </h5>
                  <div class="flex flex-wrap gap-2 mt-4 mb-2 w-4/5">
                    <style>
                      .blockCustomHover {
                        transform: none;
                        transition: 0.2s all;
                      }

                      .blockCustomHover:hover {
                        transform: scale(1.03) translateZ(0px);
                      }
                    </style>
                    <div
                      class="blockCustomHover h-fit w-fit bg-neutral-50 border-1 rounded hover:cursor-cool-clickable transition-colors select-none border-neutral-400"
                      tabindex="0">
                      <div class="p-3 rounded bg-neutral-200">
                        <h5>Product Management</h5>
                      </div>
                    </div>
                    <div
                      class="blockCustomHover h-fit w-fit bg-neutral-50 border-1 rounded hover:cursor-cool-clickable transition-colors select-none border-neutral-400"
                      tabindex="0">
                      <div class="p-3 rounded bg-neutral-200">
                        <h5>Product Design</h5>
                      </div>
                    </div>
                    <div
                      class="blockCustomHover h-fit w-fit bg-neutral-50 border-1 rounded hover:cursor-cool-clickable transition-colors select-none border-neutral-400"
                      tabindex="0">
                      <div class="p-3 rounded bg-neutral-200">
                        <h5>Marketing Growth</h5>
                      </div>
                    </div>
                    <div
                      class="blockCustomHover h-fit w-fit bg-neutral-50 border-1 rounded hover:cursor-cool-clickable transition-colors select-none border-neutral-400"
                      tabindex="0">
                      <div class="p-3 rounded bg-neutral-200">
                        <h5>Founder</h5>
                      </div>
                    </div>
                    <div
                      class="blockCustomHover h-fit w-fit bg-neutral-50 border-1 rounded hover:cursor-cool-clickable transition-colors select-none border-neutral-400"
                      tabindex="0">
                      <div class="p-3 rounded bg-neutral-200">
                        <h5>Engineering</h5>
                      </div>
                    </div>
                    <div
                      class="blockCustomHover h-fit w-fit bg-neutral-50 border-1 rounded hover:cursor-cool-clickable transition-colors select-none border-neutral-400"
                      tabindex="0">
                      <div class="p-3 rounded bg-neutral-200">
                        <h5>Sales</h5>
                      </div>
                    </div>
                    <div
                      class="blockCustomHover h-fit w-fit bg-neutral-50 border-1 rounded hover:cursor-cool-clickable transition-colors select-none border-neutral-400"
                      tabindex="0">
                      <div class="p-3 rounded bg-neutral-200">
                        <h5>Customer Support</h5>
                      </div>
                    </div>
                    <div
                      class="blockCustomHover h-fit w-fit bg-neutral-50 border-1 rounded hover:cursor-cool-clickable transition-colors select-none border-neutral-400"
                      tabindex="0"
                      id="otherBlock">
                      <div class="p-3 rounded bg-neutral-200">
                        <h5>Other</h5>
                      </div>
                    </div>
                  </div>
                  <div class="flex flex-col gap-1 hidden" id="otherInput">
                    <div
                      style="
                          transform-origin: center center;
                          perspective: 500px;
                          transform: none;
                        ">
                      <input
                        class="px-2 py-2 rounded transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal bg-neutral-50 border-1 border-neutral-400 w-60 p focus:outline-primary-500 overflow-hidden text-ellipsis-clip"
                        type="text"
                        placeholder="Write here"
                        value="" />
                    </div>
                  </div>
                </section>
                <div class="flex-1 h-fit w-full flex items-end">
                  <div class="w-full flex items-center justify-between">
                    <div class="flex gap-2">
                      <div class="flex flex-col gap-2">
                        <section class="relative h-2 w-8">
                          <div
                            class="absolute bg-primary-500 rounded z-10 h-2"
                            style="width: 100%"></div>
                          <div
                            class="absolute bg-neutral-300 rounded h-2 w-8"></div>
                        </section>
                      </div>
                      <div class="flex flex-col gap-2">
                        <section class="relative h-2 w-8">
                          <div
                            class="absolute bg-primary-500 rounded z-10 h-2"
                            style="width: 0%"></div>
                          <div
                            class="absolute bg-neutral-300 rounded h-2 w-8"></div>
                        </section>
                      </div>
                      <div class="flex flex-col gap-2">
                        <section class="relative h-2 w-8">
                          <div
                            class="absolute bg-primary-500 rounded z-10 h-2"
                            style="width: 0%"></div>
                          <div
                            class="absolute bg-neutral-300 rounded h-2 w-8"></div>
                        </section>
                      </div>
                    </div>
                    <button
                      type="button"
                      disabled=""
                      class="flex items-center justify-center gap-2 rounded font-medium leading-4 whitespace-nowrap overflow-hidden text-overflow-ellipsis w-auto min-w-0 min-h-0 select-none px-3 py-2 bg-secondary-300 border-[2px] border-neutral-700 shadow-smoothxl opacity-60 w-[10rem]"
                      tabindex="0"
                      id="workButton"
                      style="transform: none">
                      <h4>Continue</h4>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section
            class="w-3/5 h-full bg-primary-100 border-l-1 border-neutral-400 bg-dot-grid-pattern bg-repeat bg-pattern flex flex-col items-center justify-center">
            <div
              id="rotating-block"
              class="bg-neutral-50 border-1 border-neutral-400 rounded h-fit w-[30rem] shadow-smooth flex flex-col gap-8 p-3"
              style="
                  transform: perspective(1200px) rotateX(0deg) rotateY(0deg);
                  transition: transform 0.5s ease-out;
                ">
              <section
                class="w-full h-fit rounded flex flex-col gap-2 justify-center px-6 py-6 bg-primary-200 border-1 border-primary-500">
                <p class="font-title font-bold text-xl text-primary-700">
                  You
                </p>
                <div class="w-full flex gap-4 items-center">
                  <div
                    class="rounded-full border-neutral-700 relative overflow-hidden flex items-center justify-center bg-primary-500 relative w-16 h-16 min-w-[2.25rem] min-h-[2.25rem] border-1">
                    <img
                      id="avatar_2"
                      style="height:100%"
                      src="{{asset("assets/member_avatar_453.png")}}"
                      alt="Avatar"
                      class="object-cover" />
                  </div>
                  <div class="flex flex-col">
                    <div class="flex gap-1" id="nameLastNameBlock">
                      <div class="h-full w-full animate-pulse">
                        <div
                          class="rounded-xl w-20 h-5 bg-primary-400"
                          id="nameBlock"></div>
                      </div>
                      <div class="h-full w-full animate-pulse">
                        <div class="rounded-xl w-20 h-5 bg-primary-400"></div>
                      </div>
                    </div>
                    <p class="text-primary-700" id="email">
                      danya2706052005@gmail.com
                    </p>
                    <script>
                      document.getElementById("email").innerHTML =
                        localStorage.getItem("email");
                    </script>
                  </div>
                  <div id="workBlock">
                    <div class="h-full w-full animate-pulse">
                      <div class="rounded-xl w-20 h-5 bg-primary-400"></div>
                    </div>
                  </div>
                </div>
              </section>
              <section
                class="w-full h-fit rounded flex flex-col gap-2 justify-center px-6 py-6">
                <p class="font-title font-bold text-xl text-neutral-700">
                  Your team
                </p>
                <div class="w-full flex gap-2 items-center">
                  <div class="flex flex-col gap-2 w-full">
                    <div class="flex gap-2 items-center justify-between">
                      <div class="flex items-center gap-2">
                        <div class="h-full w-full animate-pulse">
                          <div
                            class="rounded-full w-7 h-7 bg-neutral-300"></div>
                        </div>
                        <div class="h-full w-full animate-pulse">
                          <div
                            class="rounded-xl w-36 h-5 bg-neutral-300"></div>
                        </div>
                      </div>
                      <div class="flex items-center gap-2">
                        <div class="h-full w-full animate-pulse">
                          <div
                            class="rounded-full w-7 h-7 bg-neutral-300"></div>
                        </div>
                        <div class="h-full w-full animate-pulse">
                          <div
                            class="rounded-xl w-36 h-5 bg-neutral-300"></div>
                        </div>
                      </div>
                    </div>
                    <div class="flex gap-2 items-center justify-between">
                      <div class="flex items-center gap-2">
                        <div class="h-full w-full animate-pulse">
                          <div
                            class="rounded-full w-7 h-7 bg-neutral-300"></div>
                        </div>
                        <div class="h-full w-full animate-pulse">
                          <div
                            class="rounded-xl w-36 h-5 bg-neutral-300"></div>
                        </div>
                      </div>
                      <div class="flex items-center gap-2">
                        <div class="h-full w-full animate-pulse">
                          <div
                            class="rounded-full w-7 h-7 bg-neutral-300"></div>
                        </div>
                        <div class="h-full w-full animate-pulse">
                          <div
                            class="rounded-xl w-36 h-5 bg-neutral-300"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div></div>
                </div>
              </section>
            </div>
          </section>
          <script>
            document.addEventListener("DOMContentLoaded", () => {
              const block = document.getElementById("rotating-block");

              block.addEventListener("mousemove", (event) => {
                const rect = block.getBoundingClientRect();
                const centerX = rect.left + rect.width / 2;
                const centerY = rect.top + rect.height / 2;

                const mouseX = event.clientX - centerX;
                const mouseY = event.clientY - centerY;

                const rotateX = (mouseY / rect.height) * 30; // max 30 degrees
                const rotateY = (mouseX / rect.width) * -30; // max 30 degrees

                block.style.transform = `perspective(1200px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
              });

              block.addEventListener("mouseleave", () => {
                block.style.transform =
                  "perspective(1200px) rotateX(0deg) rotateY(0deg)";
              });
            });
          </script>
        </div>
        <div
          class="fixed bottom-2 right-2 w-11 h-11 rounded-full bg-primary-300 border-2 border-primary-600 p-4 shadow-lg flex items-center justify-center hover:cursor-cool-clickable disabled:cursor-cool-normal"
          style="z-index: 99999">
          <button
            type="button"
            class="flex items-center justify-center w-fit rounded font-medium transition-colors select-none text-neutral-600 px-3 py-2"
            id="radix-:r0:"
            aria-haspopup="menu"
            aria-expanded="false"
            data-state="closed"
            tabindex="0">
            <h3 class="text-primary-600">?</h3>
          </button>
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
</body>

</html>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    var nameLastNameButton = document.getElementById("nameLastNameButton");

    var name = document.getElementById("name");

    var lastName = document.getElementById("lastName");

    function updateButtonState() {
      console.log(name.value); // Выводим значение поля name

      console.log(lastName.value); // Выводим значение поля lastName

      if (name.value.length > 0 && lastName.value.length > 0) {
        activeButton(nameLastNameButton);
      } else {
        deactiveButton(nameLastNameButton);
      }
    }

    if (name && lastName && nameLastNameButton) {
      name.addEventListener("input", updateButtonState);

      lastName.addEventListener("input", updateButtonState);
    } else {
      console.error("Required elements not found.");
    }

    function activeButton(button) {
      button.classList.add("opacity-100");
      button.classList.remove("opacity-60");
      button.disabled = false;
    }

    function deactiveButton(button) {
      button.classList.remove("opacity-100");
      button.classList.add("opacity-60");
      button.disabled = true;
    }

    // Initialize button state

    deactiveButton(nameLastNameButton);
  });
  nameLastNameButton.addEventListener("click", function() {
    var name = document.getElementById("name");

    var lastName = document.getElementById("lastName");
    var nameLastNameBlock = document.getElementById("nameLastNameBlock");

    nameLastNameBlock.innerHTML =
      '<p class="text-neutral-700">' +
      name.value +
      '</p><p class="text-neutral-700">' +
      lastName.value +
      "</p>";

    var nameLastNameForm = document.getElementById("nameLastNameForm");
    nameLastNameForm.style.display = "none";
    var workForm = document.getElementById("workForm");
    workForm.style.display = "block";


    $.ajax({
      method: "POST",
      url: "{{ route('api.user.update') }}",
      data: {
        name: name.value,
        subname: lastName.value,
        _token: "{{ csrf_token() }}"
      },
      success: function(response) {
        console.log(response);
      },
      error: function(xhr, status, error) {
        console.log(error);
      }
    });
  });
</script>
<script>
  var blocksCustom = document.querySelectorAll(".blockCustomHover");
      
    })
  });
</script>
<script>
  var blocksCustom = document.querySelectorAll(".blockCustomHover");
    })
  });
</script>
<script>
  var blocksCustom = document.querySelectorAll(".blockCustomHover");

  var workButton = document.getElementById("workButton");

  workButton.addEventListener("click", function() {
    window.location.href = "{{ route("successCreateProfile") }}";
  });

  function updateWorkButtonState() {
    var isAnyBlockActive = Array.from(blocksCustom).some((block) =>
      block.classList.contains("border-primary-500")
    );
    console.log(isAnyBlockActive);
    if (isAnyBlockActive) {
      workButton.classList.add("opacity-100");
      workButton.classList.remove("opacity-60");
      workButton.disabled = false;
    } else {
      workButton.classList.remove("opacity-100");
      workButton.classList.add("opacity-60");
      workButton.disabled = true;
    }
  }

  blocksCustom.forEach((block) => {
    block.addEventListener("click", () => {
      block.classList.toggle("border-neutral-400");

      block.classList.toggle("border-primary-500");

      var childBlock = block.querySelector("div");

      childBlock.classList.toggle("bg-neutral-200");

      childBlock.classList.toggle("bg-primary-200");

      updateWorkButtonState();
    });
  });

  // Инициализация состояния кнопки при загрузке

  updateWorkButtonState();

  var otherBlock = document.getElementById("otherBlock");
  var otherInput = document.getElementById("otherInput");

  otherBlock.addEventListener("click", function() {
    otherInput.classList.toggle("hidden");
  });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    $("#uploadFile").on("change", function() {
      var formData = new FormData();
      formData.append("file", $(this)[0].files[0]);
      formData.append("user_id", "{{ auth()->user()->id }}");
      formData.append("_token", "{{ csrf_token() }}");
      $.ajax({
        url: "{{ route("api.user.upload")}}", // URL вашего PHP файла
        type: "POST",
        data: formData,
        contentType: false, // необходимо для загрузки файлов
        processData: false, // необходимо для загрузки файлов
        success: function(jsonResponse) {
          console.log(jsonResponse)

          try {

            if (jsonResponse.message == "success") {
              localStorage.setItem("photo", jsonResponse.path);
              var avatar_1 = document.getElementById("avatar_1");
              var avatar_2 = document.getElementById("avatar_2");

              avatar_1.src = jsonResponse.path;
              avatar_2.src = jsonResponse.path;
            } else {
              alert("Error parsing response: " + jsonResponse.message);
            }
          } catch (e) {
            alert("Error parsing response: " + e);
          }
        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert("Error upload photo: " + textStatus);
        },
      });
    });
  });
</script>

<script src="/avatar.js"></script>
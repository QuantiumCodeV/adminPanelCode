<!DOCTYPE html>
<html lang="en">

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
  <meta content="IE=edge,chrome=1" httpequiv="X-UA-Compatible" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <link
    rel="icon"
    type="image/ico"
    href="{{ asset("assets/favicon.ico")  }}" />
  <title>Welcome |&nbsp;SoundLine!</title>
  <script>
    try {
      window.auth0Config = JSON.parse(
        decodeURIComponent(
          escape(
            window.atob(
              "eyJpY29uIjoiaHR0cHM6Ly9hcHAubGlzdGVudXAuYWkvaW1hZ2VzL2xpc3RlbnVwX2xvZ29zL0xpc3RlblVwLUxvZ28tU3RpY2tlci1TaGFkb3cucG5nIiwiYXNzZXRzVXJsIjoiIiwiYXV0aDBEb21haW4iOiJsaXN0ZW51cC5ldS5hdXRoMC5jb20iLCJhdXRoMFRlbmFudCI6Imxpc3RlbnVwIiwiY2xpZW50Q29uZmlndXJhdGlvbkJhc2VVcmwiOiJodHRwczovL2xpc3RlbnVwLmV1LmF1dGgwLmNvbS8iLCJjYWxsYmFja09uTG9jYXRpb25IYXNoIjpmYWxzZSwiY2FsbGJhY2tVUkwiOiJodHRwczovL2FwcC5saXN0ZW51cC5haSIsImNkbiI6Imh0dHBzOi8vY2RuLmF1dGgwLmNvbS8iLCJjbGllbnRJRCI6IkFPaHNNRFVrbHF5Mll1clpiMURXbU91cWN3OVZJTDl5IiwiZGljdCI6eyJzaWduaW4iOnsidGl0bGUiOiJMaXN0ZW5VcCEifX0sImV4dHJhUGFyYW1zIjp7InByb3RvY29sIjoib2F1dGgyIiwic2NvcGUiOiJvcGVuaWQgcHJvZmlsZSBlbWFpbCIsImF1ZGllbmNlIjoiaHR0cHM6Ly9hcGkubGlzdGVudXAuYWkvIiwicmVzcG9uc2VfdHlwZSI6ImNvZGUiLCJyZXNwb25zZV9tb2RlIjoicXVlcnkiLCJub25jZSI6ImRreCtiRGRQZFhsblJuTTVZVFpUWkRkMlptSjJRVWw1V2xSdVkxOTNiVmxEZEdadE5XaGZaeTF2WXc9PSIsImNvZGVfY2hhbGxlbmdlIjoiQnQ4TFFwNnJFemRvNGltM3pnUFhHYkJsckh3TFlidTJOQi0wV1lSbmFtTSIsImNvZGVfY2hhbGxlbmdlX21ldGhvZCI6IlMyNTYiLCJhdXRoMENsaWVudCI6ImV5SnVZVzFsSWpvaVlYVjBhREF0Y21WaFkzUWlMQ0oyWlhKemFXOXVJam9pTWk0eUxqUWlmUT09IiwiX2NzcmYiOiJNTUQ5cXQ0RS1VTGNtZUVqNXFFQm1jQUtFTWZOeU9MQ3RLV3ciLCJfaW50c3RhdGUiOiJkZXByZWNhdGVkIiwic3RhdGUiOiJoS0ZvMlNCcFZHMUtkVkpHTlhSRFNqUjFSbVY0T1VGcE1uWktOVmRrZVhWU1ZIRTBOYUZ1cFd4dloybHVvM1JwWk5rZ2IxVnBRbEpXUm5KWU56UktWMlppVlhsb2JYTk5Namd3VW05QlV6aHlSa2FqWTJsazJTQkJUMmh6VFVSVmEyeHhlVEpaZFhKYVlqRkVWMjFQZFhGamR6bFdTVXc1ZVEifSwiaW50ZXJuYWxPcHRpb25zIjp7InByb3RvY29sIjoib2F1dGgyIiwic2NvcGUiOiJvcGVuaWQgcHJvZmlsZSBlbWFpbCIsImF1ZGllbmNlIjoiaHR0cHM6Ly9hcGkubGlzdGVudXAuYWkvIiwicmVzcG9uc2VfdHlwZSI6ImNvZGUiLCJyZXNwb25zZV9tb2RlIjoicXVlcnkiLCJub25jZSI6ImRreCtiRGRQZFhsblJuTTVZVFpUWkRkMlptSjJRVWw1V2xSdVkxOTNiVmxEZEdadE5XaGZaeTF2WXc9PSIsImNvZGVfY2hhbGxlbmdlIjoiQnQ4TFFwNnJFemRvNGltM3pnUFhHYkJsckh3TFlidTJOQi0wV1lSbmFtTSIsImNvZGVfY2hhbGxlbmdlX21ldGhvZCI6IlMyNTYiLCJhdXRoMENsaWVudCI6ImV5SnVZVzFsSWpvaVlYVjBhREF0Y21WaFkzUWlMQ0oyWlhKemFXOXVJam9pTWk0eUxqUWlmUT09IiwiX2NzcmYiOiJNTUQ5cXQ0RS1VTGNtZUVqNXFFQm1jQUtFTWZOeU9MQ3RLV3ciLCJfaW50c3RhdGUiOiJkZXByZWNhdGVkIiwic3RhdGUiOiJoS0ZvMlNCcFZHMUtkVkpHTlhSRFNqUjFSbVY0T1VGcE1uWktOVmRrZVhWU1ZIRTBOYUZ1cFd4dloybHVvM1JwWk5rZ2IxVnBRbEpXUm5KWU56UktWMlppVlhsb2JYTk5Namd3VW05QlV6aHlSa2FqWTJsazJTQkJUMmh6VFVSVmEyeHhlVEpaZFhKYVlqRkVWMjFQZFhGamR6bFdTVXc1ZVEifSwid2lkZ2V0VXJsIjoiaHR0cHM6Ly9jZG4uYXV0aDAuY29tL3cyL2F1dGgwLXdpZGdldC01LjIubWluLmpzIiwiaXNUaGlyZFBhcnR5Q2xpZW50IjpmYWxzZSwiYXV0aG9yaXphdGlvblNlcnZlciI6eyJ1cmwiOiJodHRwczovL2xpc3RlbnVwLmV1LmF1dGgwLmNvbSIsImlzc3VlciI6Imh0dHBzOi8vbGlzdGVudXAuZXUuYXV0aDAuY29tLyJ9LCJjb2xvcnMiOnsicGFnZV9iYWNrZ3JvdW5kIjoiI0Y5RjlGOSIsInByaW1hcnkiOiIjQzFCRUZBIn19"
            )
          )
        )
      );
    } catch (o) {
      window.auth0Config = o;
    }
  </script>
</head>

<body>
  <div id="app">
    <div class="h-full w-full bg-neutral-50 border-1 border-neutral-400">
      <div
        class="flex items-center justify-center bg-primary-100 bg-dot-grid-pattern bg-repeat bg-pattern w-screen h-screen">
        <div
          class="h-fit w-[50rem] flex flex-col items-center justify-center">
          <div class="flex flex-col items-center justify-center gap-4 w-fit">
            <div class="w-full flex items-center justify-center">
              <h2 class="underline underline-offset-4">Welcome back!</h2>
            </div>
            <div
              class="border-1 border-neutral-400 bg-neutral-50 rounded p-10 flex flex-col items-center justify-center w-[28rem]">
              <div
                class="flex flex-col items-center justify-center gap-4 w-full">
                <p role="alert" class="text-danger-500 pt-1 pl-1 false">
                 
                </p>
                <div class="flex flex-col gap-1 w-full">
                  <div
                    style="
                        transform-origin: center center 0px;
                        perspective: 500px;
                        transform: none;
                      ">
                    <input
                      class="px-2 py-2 rounded transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal bg-neutral-50 border-1 border-neutral-400 w-full p focus:outline-primary-500 overflow-hidden text-ellipsis-clip"
                      type="email"
                      placeholder="Email"
                      id="email" />
                  </div>
                </div>
                <div class="relative w-full">
                  <div class="absolute right-[5px] top-[9.5px] rounded z-10">
                    <button
                      class="flex items-center font-bold rounded px-1 py-1 text-xs font-bold p-0"
                      tabindex="0"
                      style="transform: none; transform-origin: 50% 50% 0px">
                      <p class="text-small">
                        <span class="text-neutral-500">Forgot password?</span>
                      </p>
                    </button>
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
                        type="password"
                        placeholder="Password"
                        id="password"
                        value="" />
                    </div>
                  </div>
                </div>
                <button
                  type="button"
                  class="flex items-center justify-center gap-2 rounded font-medium leading-4 whitespace-nowrap overflow-hidden text-overflow-ellipsis w-auto min-w-0 min-h-0 px-3 py-2 bg-secondary-300 border-[2px] border-neutral-700 shadow-smoothxl opacity-100 w-full"
                  tabindex="0"
                  style="transform: none; transform-origin: 50% 50% 0px">
                  <h5>Log in</h5>
                </button>
              </div>
            </div>
            <div class="flex items-center justify-center gap-2 mt-5">
              <p class="text-neutral-500">No account yet?</p>
              <button
                type="button"
                class="flex items-center justify-center gap-2 rounded font-medium leading-4 whitespace-nowrap overflow-hidden text-overflow-ellipsis w-auto min-w-0 min-h-0 px-3 py-2 bg-neutral-200 border-1 border-neutral-400 opacity-100"
                tabindex="0"
                style="transform: none; transform-origin: 50% 50% 0px">
                <h5>Create your account</h5>
                <div
                  class="px-2 py-1 bg-primary-400 rounded-xl flex items-center justify-center">
                  <p class="text-primary-600 text-small">
                    <span class="font-bold">free</span>
                  </p>
                </div>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <style>
    *,
    :before,
    :after {
      box-sizing: border-box;
      border: 0 solid;
    }

    :before,
    :after {
      --tw-content: "";
    }

    html,
    :host {
      -webkit-text-size-adjust: 100%;
      tab-size: 4;
      font-feature-settings: normal;
      font-variation-settings: normal;
      -webkit-tap-highlight-color: transparent;
      font-family: jakarta, ui-sans-serif, system-ui;
      line-height: 1.5;
    }

    body {
      line-height: inherit;
      margin: 0;
    }

    hr {
      color: inherit;
      border-top-width: 1px;
      height: 0;
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
      -webkit-text-decoration: inherit;
      -webkit-text-decoration: inherit;
      text-decoration: inherit;
    }

    b,
    strong {
      font-weight: bolder;
    }

    code,
    kbd,
    samp,
    pre {
      font-feature-settings: normal;
      font-variation-settings: normal;
      font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas,
        Liberation Mono, Courier New, monospace;
      font-size: 1em;
    }

    small {
      font-size: 80%;
    }

    sub,
    sup {
      vertical-align: baseline;
      font-size: 75%;
      line-height: 0;
      position: relative;
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
      font-feature-settings: inherit;
      font-variation-settings: inherit;
      font-family: inherit;
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
      background-color: #0000;
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

    ::-webkit-inner-spin-button {
      height: auto;
    }

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
    dl,
    dd,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    hr,
    figure,
    p,
    pre {
      margin: 0;
    }

    fieldset {
      margin: 0;
      padding: 0;
    }

    legend {
      padding: 0;
    }

    ol,
    ul,
    menu {
      margin: 0;
      padding: 0;
      list-style: none;
    }

    dialog {
      padding: 0;
    }

    textarea {
      resize: vertical;
    }

    input::-moz-placeholder {
      opacity: 1;
      color: #9ca3af;
    }

    textarea::-moz-placeholder {
      opacity: 1;
      color: #9ca3af;
    }

    input::placeholder,
    textarea::placeholder {
      opacity: 1;
      color: #9ca3af;
    }

    button,
    [role="button"] {
      cursor: pointer;
    }

    :disabled {
      cursor: default;
    }

    img,
    svg,
    video,
    canvas,
    audio,
    iframe,
    embed,
    object {
      vertical-align: middle;
      display: block;
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
      src: url(https://app.listenup.ai/fonts/PlusJakartaSans-ExtraLight.woff2) format("woff2");
    }

    @font-face {
      font-family: jakarta;
      font-weight: 200;
      font-style: italic;
      src: url(https://app.listenup.ai/fonts/PlusJakartaSans-ExtraLightItalic.woff2) format("woff2");
    }

    @font-face {
      font-family: jakarta;
      font-weight: 300;
      font-style: normal;
      src: url(https://app.listenup.ai/fonts/PlusJakartaSans-Light.woff2) format("woff2");
    }

    @font-face {
      font-family: jakarta;
      font-weight: 300;
      font-style: italic;
      src: url(https://app.listenup.ai/fonts/PlusJakartaSans-LightItalic.woff2) format("woff2");
    }

    @font-face {
      font-family: jakarta;
      font-weight: 400;
      font-style: normal;
      src: url(https://app.listenup.ai/fonts/PlusJakartaSans-Regular.woff2) format("woff2");
    }

    @font-face {
      font-family: jakarta;
      font-weight: 400;
      font-style: italic;
      src: url(https://app.listenup.ai/fonts/PlusJakartaSans-Italic.woff2) format("woff2");
    }

    @font-face {
      font-family: jakarta;
      font-weight: 500;
      font-style: normal;
      src: url(https://app.listenup.ai/fonts/PlusJakartaSans-Medium.woff2) format("woff2");
    }

    @font-face {
      font-family: jakarta;
      font-weight: 500;
      font-style: italic;
      src: url(https://app.listenup.ai/fonts/PlusJakartaSans-MediumItalic.woff2) format("woff2");
    }

    @font-face {
      font-family: jakarta;
      font-weight: 600;
      font-style: normal;
      src: url(https://app.listenup.ai/fonts/PlusJakartaSans-SemiBold.woff2) format("woff2");
    }

    @font-face {
      font-family: jakarta;
      font-weight: 600;
      font-style: italic;
      src: url(https://app.listenup.ai/fonts/PlusJakartaSans-SemiBoldItalic.woff2) format("woff2");
    }

    @font-face {
      font-family: jakarta;
      font-weight: 700;
      font-style: normal;
      src: url(https://app.listenup.ai/fonts/PlusJakartaSans-Bold.woff2) format("woff2");
    }

    @font-face {
      font-family: jakarta;
      font-weight: 700;
      font-style: italic;
      src: url(https://app.listenup.ai/fonts/PlusJakartaSans-BoldItalic.woff2) format("woff2");
    }

    @font-face {
      font-family: jakarta;
      font-weight: 800;
      font-style: normal;
      src: url(https://app.listenup.ai/fonts/PlusJakartaSans-ExtraBold.woff2) format("woff2");
    }

    @font-face {
      font-family: jakarta;
      font-weight: 800;
      font-style: italic;
      src: url(https://app.listenup.ai/fonts/PlusJakartaSans-ExtraBoldItalic.woff2) format("woff2");
    }

    @font-face {
      font-family: listenup-title;
      font-weight: 400;
      font-style: normal;
      src: url(https://app.listenup.ai/fonts/ListenUpTitle-Regular.woff2) format("woff2");
    }

    @font-face {
      font-family: listenup-title;
      font-weight: 400;
      font-style: italic;
      src: url(https://app.listenup.ai/fonts/ListenUpTitle-RegularItalic.woff2) format("woff2");
    }

    @font-face {
      font-family: listenup-title;
      font-weight: 500;
      font-style: normal;
      src: url(https://app.listenup.ai/fonts/ListenUpTitle-Medium.woff2) format("woff2");
    }

    @font-face {
      font-family: listenup-title;
      font-weight: 500;
      font-style: italic;
      src: url(https://app.listenup.ai/fonts/ListenUpTitle-MediumItalic.woff2) format("woff2");
    }

    @font-face {
      font-family: listenup-title;
      font-weight: 700;
      font-style: normal;
      src: url(https://app.listenup.ai/fonts/ListenUpTitle-Bold.woff2) format("woff2");
    }

    @font-face {
      font-family: listenup-title;
      font-weight: 700;
      font-style: italic;
      src: url(https://app.listenup.ai/fonts/ListenUpTitle-BoldItalic.woff2) format("woff2");
    }

    *,
    :before,
    :after,
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
      --tw-ring-color: #3b82f680;
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

    .absolute {
      position: absolute;
    }

    .relative {
      position: relative;
    }

    .left-0 {
      left: 0;
    }

    .right-\[5px\] {
      right: 5px;
    }

    .top-0 {
      top: 0;
    }

    .top-\[9\.5px\] {
      top: 9.5px;
    }

    .z-10 {
      z-index: 10;
    }

    .m-1 {
      margin: 0.25rem;
    }

    .mb-5 {
      margin-bottom: 1.25rem;
    }

    .mt-5 {
      margin-top: 1.25rem;
    }

    .flex {
      display: flex;
    }

    .h-0 {
      height: 0;
    }

    .h-5 {
      height: 1.25rem;
    }

    .h-\[1px\] {
      height: 1px;
    }

    .h-fit {
      height: -moz-fit-content;
      height: fit-content;
    }

    .h-full {
      height: 100%;
    }

    .h-screen {
      height: 100vh;
    }

    .min-h-0 {
      min-height: 0;
    }

    .w-1\/2 {
      width: 50%;
    }

    .w-5 {
      width: 1.25rem;
    }

    .w-60 {
      width: 15rem;
    }

    .w-\[1px\] {
      width: 1px;
    }

    .w-\[25rem\] {
      width: 25rem;
    }

    .w-\[28rem\] {
      width: 28rem;
    }

    .w-\[40rem\] {
      width: 40rem;
    }

    .w-\[4rem\] {
      width: 4rem;
    }

    .w-\[50rem\] {
      width: 50rem;
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

    .w-screen {
      width: 100vw;
    }

    .min-w-0 {
      min-width: 0;
    }

    .flex-col {
      flex-direction: column;
    }

    .items-center {
      align-items: center;
    }

    .justify-start {
      justify-content: flex-start;
    }

    .justify-center {
      justify-content: center;
    }

    .gap-1 {
      gap: 0.25rem;
    }

    .gap-2 {
      gap: 0.5rem;
    }

    .gap-4 {
      gap: 1rem;
    }

    .overflow-hidden {
      overflow: hidden;
    }

    .overflow-scroll {
      overflow: scroll;
    }

    .truncate {
      text-overflow: ellipsis;
      white-space: nowrap;
      overflow: hidden;
    }

    .whitespace-nowrap {
      white-space: nowrap;
    }

    .whitespace-pre {
      white-space: pre;
    }

    .rounded {
      border-radius: 0.625rem;
    }

    .rounded-full {
      border-radius: 9999px;
    }

    .rounded-xl {
      border-radius: 0.75rem;
    }

    .border-1 {
      border-width: 1px;
    }

    .border-\[1\.5px\] {
      border-width: 1.5px;
    }

    .border-\[2px\] {
      border-width: 2px;
    }

    .border-\[3\.64px\] {
      border-width: 3.64px;
    }

    .border-danger-500 {
      --tw-border-opacity: 1;
      border-color: rgb(255 103 103 / var(--tw-border-opacity));
    }

    .border-danger-700 {
      --tw-border-opacity: 1;
      border-color: rgb(196 106 106 / var(--tw-border-opacity));
    }

    .border-neutral-400 {
      --tw-border-opacity: 1;
      border-color: rgb(204 204 204 / var(--tw-border-opacity));
    }

    .border-neutral-700 {
      --tw-border-opacity: 1;
      border-color: rgb(36 36 37 / var(--tw-border-opacity));
    }

    .border-primary-500 {
      --tw-border-opacity: 1;
      border-color: rgb(193 190 250 / var(--tw-border-opacity));
    }

    .bg-danger-100 {
      --tw-bg-opacity: 1;
      background-color: rgb(244 235 235 / var(--tw-bg-opacity));
    }

    .bg-neutral-200 {
      --tw-bg-opacity: 1;
      background-color: rgb(246 246 246 / var(--tw-bg-opacity));
    }

    .bg-neutral-300 {
      --tw-bg-opacity: 1;
      background-color: rgb(234 234 234 / var(--tw-bg-opacity));
    }

    .bg-neutral-50 {
      --tw-bg-opacity: 1;
      background-color: rgb(255 255 255 / var(--tw-bg-opacity));
    }

    .bg-neutral-50\/0 {
      background-color: #fff0;
    }

    .bg-neutral-500 {
      --tw-bg-opacity: 1;
      background-color: rgb(163 163 163 / var(--tw-bg-opacity));
    }

    .bg-primary-100 {
      --tw-bg-opacity: 1;
      background-color: rgb(248 248 255 / var(--tw-bg-opacity));
    }

    .bg-primary-200 {
      --tw-bg-opacity: 1;
      background-color: rgb(242 241 255 / var(--tw-bg-opacity));
    }

    .bg-primary-400 {
      --tw-bg-opacity: 1;
      background-color: rgb(228 222 250 / var(--tw-bg-opacity));
    }

    .bg-primary-500 {
      --tw-bg-opacity: 1;
      background-color: rgb(193 190 250 / var(--tw-bg-opacity));
    }

    .bg-secondary-300 {
      --tw-bg-opacity: 1;
      background-color: rgb(251 213 112 / var(--tw-bg-opacity));
    }

    .bg-dot-grid-pattern {
      background-image: url(https://app.listenup.ai/images/background_patterns/dotGridPattern.svg);
    }

    .bg-grainy-texture {
      background-image: url(https://app.listenup.ai/images/background_patterns/grainyTexturePattern.png);
    }

    .bg-pattern {
      background-size: 2.5rem;
    }

    .bg-repeat {
      background-repeat: repeat;
    }

    .stroke-neutral-700 {
      stroke: #242425;
    }

    .stroke-2 {
      stroke-width: 2px;
    }

    .p-0 {
      padding: 0;
    }

    .p-10 {
      padding: 2.5rem;
    }

    .px-1 {
      padding-left: 0.25rem;
      padding-right: 0.25rem;
    }

    .px-2 {
      padding-left: 0.5rem;
      padding-right: 0.5rem;
    }

    .px-2\.5 {
      padding-left: 0.625rem;
      padding-right: 0.625rem;
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

    .py-1 {
      padding-top: 0.25rem;
      padding-bottom: 0.25rem;
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

    .pb-2 {
      padding-bottom: 0.5rem;
    }

    .pl-1 {
      padding-left: 0.25rem;
    }

    .pt-1 {
      padding-top: 0.25rem;
    }

    .text-center {
      text-align: center;
    }

    .text-base {
      font-size: 1rem;
      line-height: 1.5rem;
    }

    .text-lg {
      font-size: 1.125rem;
      line-height: 1.75rem;
    }

    .text-xs {
      font-size: 0.75rem;
      line-height: 1rem;
    }

    .font-bold {
      font-weight: 700;
    }

    .font-medium {
      font-weight: 500;
    }

    .leading-4 {
      line-height: 1rem;
    }

    .text-danger-500 {
      --tw-text-opacity: 1;
      color: rgb(255 103 103 / var(--tw-text-opacity));
    }

    .text-neutral-500 {
      --tw-text-opacity: 1;
      color: rgb(163 163 163 / var(--tw-text-opacity));
    }

    .text-primary-600 {
      --tw-text-opacity: 1;
      color: rgb(112 111 165 / var(--tw-text-opacity));
    }

    .text-success-500 {
      --tw-text-opacity: 1;
      color: rgb(71 117 68 / var(--tw-text-opacity));
    }

    .underline {
      text-decoration-line: underline;
    }

    .underline-offset-4 {
      text-underline-offset: 4px;
    }

    .opacity-100 {
      opacity: 1;
    }

    .opacity-60 {
      opacity: 0.6;
    }

    .shadow-smoothxl {
      --tw-shadow: 0px 7.27px 7.27px 0px #0003;
      --tw-shadow-colored: 0px 7.27px 7.27px 0px var(--tw-shadow-color);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
        var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .outline-none {
      outline-offset: 2px;
      outline: 2px solid #0000;
    }

    .outline-neutral-700 {
      outline-color: #242425;
    }

    .transition {
      transition-property: color, background-color, border-color,
        text-decoration-color, fill, stroke, opacity, box-shadow, transform,
        filter, -webkit-backdrop-filter, -webkit-backdrop-filter,
        backdrop-filter, -webkit-backdrop-filter;
      transition-duration: 0.15s;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    }

    .transition-colors {
      transition-property: color, background-color, border-color,
        text-decoration-color, fill, stroke;
      transition-duration: 0.15s;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    }

    html,
    body {
      cursor: url(https://app.listenup.ai/cursors/normal-cursor.svg), default;
      width: 100%;
      height: 100%;
      overflow: hidden;
    }

    button:hover,
    a:hover,
    video:hover {
      cursor: url(https://app.listenup.ai/cursors/clickable-cursor.svg),
        pointer;
    }

    ul {
      padding-left: 1.5em;
      list-style-type: disc;
    }

    ol {
      padding-left: 1.5em;
      list-style-type: decimal;
    }

    ul li {
      margin-bottom: 10px;
    }

    *,
    :before,
    :after {
      box-sizing: border-box;
    }

    * {
      margin: 0;
    }

    body {
      -webkit-font-smoothing: antialiased;
    }

    img,
    picture,
    video,
    canvas,
    svg {
      max-width: 100%;
      display: block;
    }

    input,
    button,
    textarea,
    select {
      font: inherit;
    }

    p,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      overflow-wrap: break-word;
    }

    *,
    button {
      outline-color: #c1befa;
    }

    h1,
    .h1 {
      --tw-text-opacity: 1;
      color: rgb(36 36 37 / var(--tw-text-opacity));
      font-family: listenup-title, jakarta, ui-sans-serif, system-ui;
      font-size: 1.875rem;
      font-weight: 700;
      line-height: 2.5rem;
    }

    h2,
    .h2 {
      --tw-text-opacity: 1;
      color: rgb(36 36 37 / var(--tw-text-opacity));
      font-family: listenup-title, jakarta, ui-sans-serif, system-ui;
      font-size: 1.5rem;
      font-weight: 700;
      line-height: 2rem;
    }

    h3,
    .h3 {
      --tw-text-opacity: 1;
      color: rgb(36 36 37 / var(--tw-text-opacity));
      font-family: jakarta, ui-sans-serif, system-ui;
      font-size: 1.125rem;
      font-weight: 700;
      line-height: 1.5rem;
    }

    h4,
    .h4 {
      --tw-text-opacity: 1;
      color: rgb(36 36 37 / var(--tw-text-opacity));
      font-family: jakarta, ui-sans-serif, system-ui;
      font-size: 1rem;
      font-weight: 600;
      line-height: 1.5rem;
    }

    h5,
    .h5 {
      --tw-text-opacity: 1;
      color: rgb(36 36 37 / var(--tw-text-opacity));
      font-family: jakarta, ui-sans-serif, system-ui;
      font-size: 0.875rem;
      font-weight: 600;
      line-height: 1.5rem;
    }

    body,
    p,
    .p {
      --tw-text-opacity: 1;
      color: rgb(36 36 37 / var(--tw-text-opacity));
      font-family: jakarta, ui-sans-serif, system-ui;
      font-size: 0.875rem;
      font-weight: 500;
      line-height: 1.5rem;
    }

    .text-small {
      --tw-text-opacity: 1;
      color: rgb(97 97 98 / var(--tw-text-opacity));
      font-family: jakarta, ui-sans-serif, system-ui;
      font-size: 0.75rem;
      font-weight: 500;
      line-height: 1.25;
    }

    ::selection {
      --tw-bg-opacity: 1;
      background-color: rgb(253 238 165 / var(--tw-bg-opacity));
    }

    input:-webkit-autofill {
      -webkit-text-fill-color: #000;
      -webkit-background-clip: text;
      transition: background-color 5000s ease-in-out;
      box-shadow: inset 0 0 20px 20px #f8f8ff;
    }

    input:-webkit-autofill:hover {
      -webkit-text-fill-color: #000;
      -webkit-background-clip: text;
      transition: background-color 5000s ease-in-out;
      box-shadow: inset 0 0 20px 20px #f8f8ff;
    }

    input:-webkit-autofill:focus {
      -webkit-text-fill-color: #000;
      -webkit-background-clip: text;
      transition: background-color 5000s ease-in-out;
      box-shadow: inset 0 0 20px 20px #f8f8ff;
    }

    input:-webkit-autofill:active {
      -webkit-text-fill-color: #000;
      -webkit-background-clip: text;
      transition: background-color 5000s ease-in-out;
      box-shadow: inset 0 0 20px 20px #f8f8ff;
    }

    [contentEditable="true"]:focus {
      outline-offset: 2px;
      outline: 2px solid #0000;
    }

    body ::-webkit-scrollbar {
      width: 5px;
      height: 5px;
    }

    body ::-webkit-scrollbar-thumb {
      background: #ccc;
      border-radius: 2px;
    }

    .hover\:cursor-cool-clickable:hover {
      cursor: url(https://app.listenup.ai/cursors/clickable-cursor.svg),
        pointer;
    }

    .focus\:outline-primary-500:focus {
      outline-color: #c1befa;
    }

    .disabled\:cursor-cool-normal:disabled {
      cursor: url(https://app.listenup.ai/cursors/normal-cursor.svg), default;
    }
  </style>
  <script type="module">
    let e, t;

    function n(e, t, n, r) {
      Object.defineProperty(e, t, {
        get: n,
        set: r,
        enumerable: !0,
        configurable: !0,
      });
    }

    function r(e) {
      return e && e.__esModule ? e.default : e;
    }
    var i,
      o,
      a,
      s,
      l,
      u,
      c,
      p,
      d,
      f,
      h,
      m,
      y,
      g,
      v,
      b,
      w,
      x,
      S,
      k,
      _,
      T,
      E,
      C,
      P,
      O,
      A = globalThis,
      j = {},
      D = {},
      R = A.parcelRequire319e;
    null == R &&
      (((R = function(e) {
          if (e in j) return j[e].exports;
          if (e in D) {
            var t = D[e];
            delete D[e];
            var n = {
              id: e,
              exports: {}
            };
            return (j[e] = n), t.call(n.exports, n, n.exports), n.exports;
          }
          var r = Error("Cannot find module '" + e + "'");
          throw ((r.code = "MODULE_NOT_FOUND"), r);
        }).register = function(e, t) {
          D[e] = t;
        }),
        (A.parcelRequire319e = R));
    var M = R.register;
    M("iwYKF", function(e, t) {
        n(
            e.exports,
            "Fragment",
            () => r,
            (e) => (r = e)
          ),
          n(
            e.exports,
            "jsx",
            () => i,
            (e) => (i = e)
          ),
          n(
            e.exports,
            "jsxs",
            () => o,
            (e) => (o = e)
          );
        var r,
          i,
          o,
          a = R("lx97N"),
          s = Symbol.for("react.element"),
          l = Symbol.for("react.fragment"),
          u = Object.prototype.hasOwnProperty,
          c =
          a.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED
          .ReactCurrentOwner,
          p = {
            key: !0,
            ref: !0,
            __self: !0,
            __source: !0
          };

        function d(e, t, n) {
          var r,
            i = {},
            o = null,
            a = null;
          for (r in (void 0 !== n && (o = "" + n),
              void 0 !== t.key && (o = "" + t.key),
              void 0 !== t.ref && (a = t.ref),
              t))
            u.call(t, r) && !p.hasOwnProperty(r) && (i[r] = t[r]);
          if (e && e.defaultProps)
            for (r in (t = e.defaultProps)) void 0 === i[r] && (i[r] = t[r]);
          return {
            $$typeof: s,
            type: e,
            key: o,
            ref: a,
            props: i,
            _owner: c.current,
          };
        }
        (r = l), (i = d), (o = d);
      }),
      M("lx97N", function(e, t) {
        e.exports = R("8E8IG");
      }),
      M("8E8IG", function(e, t) {
        n(
            e.exports,
            "Children",
            () => r,
            (e) => (r = e)
          ),
          n(
            e.exports,
            "Component",
            () => i,
            (e) => (i = e)
          ),
          n(
            e.exports,
            "Fragment",
            () => o,
            (e) => (o = e)
          ),
          n(
            e.exports,
            "Profiler",
            () => a,
            (e) => (a = e)
          ),
          n(
            e.exports,
            "PureComponent",
            () => s,
            (e) => (s = e)
          ),
          n(
            e.exports,
            "StrictMode",
            () => l,
            (e) => (l = e)
          ),
          n(
            e.exports,
            "Suspense",
            () => u,
            (e) => (u = e)
          ),
          n(
            e.exports,
            "__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED",
            () => c,
            (e) => (c = e)
          ),
          n(
            e.exports,
            "cloneElement",
            () => p,
            (e) => (p = e)
          ),
          n(
            e.exports,
            "createContext",
            () => d,
            (e) => (d = e)
          ),
          n(
            e.exports,
            "createElement",
            () => f,
            (e) => (f = e)
          ),
          n(
            e.exports,
            "createFactory",
            () => h,
            (e) => (h = e)
          ),
          n(
            e.exports,
            "createRef",
            () => m,
            (e) => (m = e)
          ),
          n(
            e.exports,
            "forwardRef",
            () => y,
            (e) => (y = e)
          ),
          n(
            e.exports,
            "isValidElement",
            () => g,
            (e) => (g = e)
          ),
          n(
            e.exports,
            "lazy",
            () => v,
            (e) => (v = e)
          ),
          n(
            e.exports,
            "memo",
            () => b,
            (e) => (b = e)
          ),
          n(
            e.exports,
            "startTransition",
            () => w,
            (e) => (w = e)
          ),
          n(
            e.exports,
            "unstable_act",
            () => x,
            (e) => (x = e)
          ),
          n(
            e.exports,
            "useCallback",
            () => S,
            (e) => (S = e)
          ),
          n(
            e.exports,
            "useContext",
            () => k,
            (e) => (k = e)
          ),
          n(
            e.exports,
            "useDebugValue",
            () => _,
            (e) => (_ = e)
          ),
          n(
            e.exports,
            "useDeferredValue",
            () => T,
            (e) => (T = e)
          ),
          n(
            e.exports,
            "useEffect",
            () => E,
            (e) => (E = e)
          ),
          n(
            e.exports,
            "useId",
            () => C,
            (e) => (C = e)
          ),
          n(
            e.exports,
            "useImperativeHandle",
            () => P,
            (e) => (P = e)
          ),
          n(
            e.exports,
            "useInsertionEffect",
            () => O,
            (e) => (O = e)
          ),
          n(
            e.exports,
            "useLayoutEffect",
            () => A,
            (e) => (A = e)
          ),
          n(
            e.exports,
            "useMemo",
            () => j,
            (e) => (j = e)
          ),
          n(
            e.exports,
            "useReducer",
            () => D,
            (e) => (D = e)
          ),
          n(
            e.exports,
            "useRef",
            () => R,
            (e) => (R = e)
          ),
          n(
            e.exports,
            "useState",
            () => M,
            (e) => (M = e)
          ),
          n(
            e.exports,
            "useSyncExternalStore",
            () => N,
            (e) => (N = e)
          ),
          n(
            e.exports,
            "useTransition",
            () => L,
            (e) => (L = e)
          ),
          n(
            e.exports,
            "version",
            () => I,
            (e) => (I = e)
          );
        var r,
          i,
          o,
          a,
          s,
          l,
          u,
          c,
          p,
          d,
          f,
          h,
          m,
          y,
          g,
          v,
          b,
          w,
          x,
          S,
          k,
          _,
          T,
          E,
          C,
          P,
          O,
          A,
          j,
          D,
          R,
          M,
          N,
          L,
          I,
          U = Symbol.for("react.element"),
          F = Symbol.for("react.portal"),
          V = Symbol.for("react.fragment"),
          z = Symbol.for("react.strict_mode"),
          B = Symbol.for("react.profiler"),
          q = Symbol.for("react.provider"),
          H = Symbol.for("react.context"),
          W = Symbol.for("react.forward_ref"),
          $ = Symbol.for("react.suspense"),
          K = Symbol.for("react.memo"),
          Q = Symbol.for("react.lazy"),
          X = Symbol.iterator,
          Y = {
            isMounted: function() {
              return !1;
            },
            enqueueForceUpdate: function() {},
            enqueueReplaceState: function() {},
            enqueueSetState: function() {},
          },
          G = Object.assign,
          J = {};

        function Z(e, t, n) {
          (this.props = e),
          (this.context = t),
          (this.refs = J),
          (this.updater = n || Y);
        }

        function ee() {}

        function et(e, t, n) {
          (this.props = e),
          (this.context = t),
          (this.refs = J),
          (this.updater = n || Y);
        }
        (Z.prototype.isReactComponent = {}),
        (Z.prototype.setState = function(e, t) {
          if ("object" != typeof e && "function" != typeof e && null != e)
            throw Error(
              "setState(...): takes an object of state variables to update or a function which returns an object of state variables."
            );
          this.updater.enqueueSetState(this, e, t, "setState");
        }),
        (Z.prototype.forceUpdate = function(e) {
          this.updater.enqueueForceUpdate(this, e, "forceUpdate");
        }),
        (ee.prototype = Z.prototype);
        var en = (et.prototype = new ee());
        (en.constructor = et),
        G(en, Z.prototype),
          (en.isPureReactComponent = !0);
        var er = Array.isArray,
          ei = Object.prototype.hasOwnProperty,
          eo = {
            current: null
          },
          ea = {
            key: !0,
            ref: !0,
            __self: !0,
            __source: !0
          };

        function es(e, t, n) {
          var r,
            i = {},
            o = null,
            a = null;
          if (null != t)
            for (r in (void 0 !== t.ref && (a = t.ref),
                void 0 !== t.key && (o = "" + t.key),
                t))
              ei.call(t, r) && !ea.hasOwnProperty(r) && (i[r] = t[r]);
          var s = arguments.length - 2;
          if (1 === s) i.children = n;
          else if (1 < s) {
            for (var l = Array(s), u = 0; u < s; u++) l[u] = arguments[u + 2];
            i.children = l;
          }
          if (e && e.defaultProps)
            for (r in (s = e.defaultProps)) void 0 === i[r] && (i[r] = s[r]);
          return {
            $$typeof: U,
            type: e,
            key: o,
            ref: a,
            props: i,
            _owner: eo.current,
          };
        }

        function el(e) {
          return "object" == typeof e && null !== e && e.$$typeof === U;
        }
        var eu = /\/+/g;

        function ec(e, t) {
          var n, r;
          return "object" == typeof e && null !== e && null != e.key ?
            ((n = "" + e.key),
              (r = {
                "=": "=0",
                ":": "=2"
              }),
              "$" +
              n.replace(/[=:]/g, function(e) {
                return r[e];
              })) :
            t.toString(36);
        }

        function ep(e, t, n) {
          if (null == e) return e;
          var r = [],
            i = 0;
          return (
            (function e(t, n, r, i, o) {
              var a,
                s,
                l,
                u = typeof t;
              ("undefined" === u || "boolean" === u) && (t = null);
              var c = !1;
              if (null === t) c = !0;
              else
                switch (u) {
                  case "string":
                  case "number":
                    c = !0;
                    break;
                  case "object":
                    switch (t.$$typeof) {
                      case U:
                      case F:
                        c = !0;
                    }
                }
              if (c)
                return (
                  (o = o((c = t))),
                  (t = "" === i ? "." + ec(c, 0) : i),
                  er(o) ?
                  ((r = ""),
                    null != t && (r = t.replace(eu, "$&/") + "/"),
                    e(o, n, r, "", function(e) {
                      return e;
                    })) :
                  null != o &&
                  (el(o) &&
                    ((a = o),
                      (s =
                        r +
                        (!o.key || (c && c.key === o.key) ?
                          "" :
                          ("" + o.key).replace(eu, "$&/") + "/") +
                        t),
                      (o = {
                        $$typeof: U,
                        type: a.type,
                        key: s,
                        ref: a.ref,
                        props: a.props,
                        _owner: a._owner,
                      })),
                    n.push(o)),
                  1
                );
              if (((c = 0), (i = "" === i ? "." : i + ":"), er(t)))
                for (var p = 0; p < t.length; p++) {
                  var d = i + ec((u = t[p]), p);
                  c += e(u, n, r, d, o);
                }
              else if (
                "function" ==
                typeof(d =
                  null === (l = t) || "object" != typeof l ?
                  null :
                  "function" ==
                  typeof(l = (X && l[X]) || l["@@iterator"]) ?
                  l :
                  null)
              )
                for (t = d.call(t), p = 0; !(u = t.next()).done;)
                  (d = i + ec((u = u.value), p++)), (c += e(u, n, r, d, o));
              else if ("object" === u)
                throw Error(
                  "Objects are not valid as a React child (found: " +
                  ("[object Object]" === (n = String(t)) ?
                    "object with keys {" + Object.keys(t).join(", ") + "}" :
                    n) +
                  "). If you meant to render a collection of children, use an array instead."
                );
              return c;
            })(e, r, "", "", function(e) {
              return t.call(n, e, i++);
            }),
            r
          );
        }

        function ed(e) {
          if (-1 === e._status) {
            var t = e._result;
            (t = t()).then(
                function(t) {
                  (0 === e._status || -1 === e._status) &&
                  ((e._status = 1), (e._result = t));
                },
                function(t) {
                  (0 === e._status || -1 === e._status) &&
                  ((e._status = 2), (e._result = t));
                }
              ),
              -1 === e._status && ((e._status = 0), (e._result = t));
          }
          if (1 === e._status) return e._result.default;
          throw e._result;
        }
        var ef = {
            current: null
          },
          eh = {
            transition: null
          };
        (r = {
          map: ep,
          forEach: function(e, t, n) {
            ep(
              e,
              function() {
                t.apply(this, arguments);
              },
              n
            );
          },
          count: function(e) {
            var t = 0;
            return (
              ep(e, function() {
                t++;
              }),
              t
            );
          },
          toArray: function(e) {
            return (
              ep(e, function(e) {
                return e;
              }) || []
            );
          },
          only: function(e) {
            if (!el(e))
              throw Error(
                "React.Children.only expected to receive a single React element child."
              );
            return e;
          },
        }),
        (i = Z),
        (o = V),
        (a = B),
        (s = et),
        (l = z),
        (u = $),
        (c = {
          ReactCurrentDispatcher: ef,
          ReactCurrentBatchConfig: eh,
          ReactCurrentOwner: eo,
        }),
        (p = function(e, t, n) {
          if (null == e)
            throw Error(
              "React.cloneElement(...): The argument must be a React element, but you passed " +
              e +
              "."
            );
          var r = G({}, e.props),
            i = e.key,
            o = e.ref,
            a = e._owner;
          if (null != t) {
            if (
              (void 0 !== t.ref && ((o = t.ref), (a = eo.current)),
                void 0 !== t.key && (i = "" + t.key),
                e.type && e.type.defaultProps)
            )
              var s = e.type.defaultProps;
            for (l in t)
              ei.call(t, l) &&
              !ea.hasOwnProperty(l) &&
              (r[l] = void 0 === t[l] && void 0 !== s ? s[l] : t[l]);
          }
          var l = arguments.length - 2;
          if (1 === l) r.children = n;
          else if (1 < l) {
            s = Array(l);
            for (var u = 0; u < l; u++) s[u] = arguments[u + 2];
            r.children = s;
          }
          return {
            $$typeof: U,
            type: e.type,
            key: i,
            ref: o,
            props: r,
            _owner: a,
          };
        }),
        (d = function(e) {
          return (
            ((e = {
              $$typeof: H,
              _currentValue: e,
              _currentValue2: e,
              _threadCount: 0,
              Provider: null,
              Consumer: null,
              _defaultValue: null,
              _globalName: null,
            }).Provider = {
              $$typeof: q,
              _context: e
            }),
            (e.Consumer = e)
          );
        }),
        (f = es),
        (h = function(e) {
          var t = es.bind(null, e);
          return (t.type = e), t;
        }),
        (m = function() {
          return {
            current: null
          };
        }),
        (y = function(e) {
          return {
            $$typeof: W,
            render: e
          };
        }),
        (g = el),
        (v = function(e) {
          return {
            $$typeof: Q,
            _payload: {
              _status: -1,
              _result: e
            },
            _init: ed,
          };
        }),
        (b = function(e, t) {
          return {
            $$typeof: K,
            type: e,
            compare: void 0 === t ? null : t
          };
        }),
        (w = function(e) {
          var t = eh.transition;
          eh.transition = {};
          try {
            e();
          } finally {
            eh.transition = t;
          }
        }),
        (x = function() {
          throw Error(
            "act(...) is not supported in production builds of React."
          );
        }),
        (S = function(e, t) {
          return ef.current.useCallback(e, t);
        }),
        (k = function(e) {
          return ef.current.useContext(e);
        }),
        (_ = function() {}),
        (T = function(e) {
          return ef.current.useDeferredValue(e);
        }),
        (E = function(e, t) {
          return ef.current.useEffect(e, t);
        }),
        (C = function() {
          return ef.current.useId();
        }),
        (P = function(e, t, n) {
          return ef.current.useImperativeHandle(e, t, n);
        }),
        (O = function(e, t) {
          return ef.current.useInsertionEffect(e, t);
        }),
        (A = function(e, t) {
          return ef.current.useLayoutEffect(e, t);
        }),
        (j = function(e, t) {
          return ef.current.useMemo(e, t);
        }),
        (D = function(e, t, n) {
          return ef.current.useReducer(e, t, n);
        }),
        (R = function(e) {
          return ef.current.useRef(e);
        }),
        (M = function(e) {
          return ef.current.useState(e);
        }),
        (N = function(e, t, n) {
          return ef.current.useSyncExternalStore(e, t, n);
        }),
        (L = function() {
          return ef.current.useTransition();
        }),
        (I = "18.2.0");
      }),
      M("f2Jil", function(e, t) {
        n(
            e.exports,
            "__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED",
            () => q,
            (e) => (q = e)
          ),
          n(
            e.exports,
            "createPortal",
            () => H,
            (e) => (H = e)
          ),
          n(
            e.exports,
            "createRoot",
            () => W,
            (e) => (W = e)
          ),
          n(
            e.exports,
            "findDOMNode",
            () => $,
            (e) => ($ = e)
          ),
          n(
            e.exports,
            "flushSync",
            () => K,
            (e) => (K = e)
          ),
          n(
            e.exports,
            "hydrate",
            () => Q,
            (e) => (Q = e)
          ),
          n(
            e.exports,
            "hydrateRoot",
            () => X,
            (e) => (X = e)
          ),
          n(
            e.exports,
            "render",
            () => Y,
            (e) => (Y = e)
          ),
          n(
            e.exports,
            "unmountComponentAtNode",
            () => G,
            (e) => (G = e)
          ),
          n(
            e.exports,
            "unstable_batchedUpdates",
            () => J,
            (e) => (J = e)
          ),
          n(
            e.exports,
            "unstable_renderSubtreeIntoContainer",
            () => Z,
            (e) => (Z = e)
          ),
          n(
            e.exports,
            "version",
            () => ee,
            (e) => (ee = e)
          );
        var r,
          i,
          o,
          a,
          s,
          l,
          u = R("lx97N"),
          c = R("7DCHO");

        function p(e) {
          for (
            var t =
              "https://reactjs.org/docs/error-decoder?invariant=" + e,
              n = 1; n < arguments.length; n++
          )
            t += "&args[]=" + encodeURIComponent(arguments[n]);
          return (
            "Minified React error #" +
            e +
            "; visit " +
            t +
            " for the full message or use the non-minified dev environment for full errors and additional helpful warnings."
          );
        }
        var d = new Set(),
          f = {};

        function h(e, t) {
          m(e, t), m(e + "Capture", t);
        }

        function m(e, t) {
          for (f[e] = t, e = 0; e < t.length; e++) d.add(t[e]);
        }
        var y = !(
            "undefined" == typeof window ||
            void 0 === window.document ||
            void 0 === window.document.createElement
          ),
          g = Object.prototype.hasOwnProperty,
          v =
          /^[:A-Z_a-z\u00C0-\u00D6\u00D8-\u00F6\u00F8-\u02FF\u0370-\u037D\u037F-\u1FFF\u200C-\u200D\u2070-\u218F\u2C00-\u2FEF\u3001-\uD7FF\uF900-\uFDCF\uFDF0-\uFFFD][:A-Z_a-z\u00C0-\u00D6\u00D8-\u00F6\u00F8-\u02FF\u0370-\u037D\u037F-\u1FFF\u200C-\u200D\u2070-\u218F\u2C00-\u2FEF\u3001-\uD7FF\uF900-\uFDCF\uFDF0-\uFFFD\-.0-9\u00B7\u0300-\u036F\u203F-\u2040]*$/,
          b = {},
          w = {};

        function x(e, t, n, r, i, o, a) {
          (this.acceptsBooleans = 2 === t || 3 === t || 4 === t),
          (this.attributeName = r),
          (this.attributeNamespace = i),
          (this.mustUseProperty = n),
          (this.propertyName = e),
          (this.type = t),
          (this.sanitizeURL = o),
          (this.removeEmptyString = a);
        }
        var S = {};
        "children dangerouslySetInnerHTML defaultValue defaultChecked innerHTML suppressContentEditableWarning suppressHydrationWarning style"
        .split(" ")
          .forEach(function(e) {
            S[e] = new x(e, 0, !1, e, null, !1, !1);
          }),
          [
            ["acceptCharset", "accept-charset"],
            ["className", "class"],
            ["htmlFor", "for"],
            ["httpEquiv", "http-equiv"],
          ].forEach(function(e) {
            var t = e[0];
            S[t] = new x(t, 1, !1, e[1], null, !1, !1);
          }),
          ["contentEditable", "draggable", "spellCheck", "value"].forEach(
            function(e) {
              S[e] = new x(e, 2, !1, e.toLowerCase(), null, !1, !1);
            }
          ),
          [
            "autoReverse",
            "externalResourcesRequired",
            "focusable",
            "preserveAlpha",
          ].forEach(function(e) {
            S[e] = new x(e, 2, !1, e, null, !1, !1);
          }),
          "allowFullScreen async autoFocus autoPlay controls default defer disabled disablePictureInPicture disableRemotePlayback formNoValidate hidden loop noModule noValidate open playsInline readOnly required reversed scoped seamless itemScope"
          .split(" ")
          .forEach(function(e) {
            S[e] = new x(e, 3, !1, e.toLowerCase(), null, !1, !1);
          }),
          ["checked", "multiple", "muted", "selected"].forEach(function(e) {
            S[e] = new x(e, 3, !0, e, null, !1, !1);
          }),
          ["capture", "download"].forEach(function(e) {
            S[e] = new x(e, 4, !1, e, null, !1, !1);
          }),
          ["cols", "rows", "size", "span"].forEach(function(e) {
            S[e] = new x(e, 6, !1, e, null, !1, !1);
          }),
          ["rowSpan", "start"].forEach(function(e) {
            S[e] = new x(e, 5, !1, e.toLowerCase(), null, !1, !1);
          });
        var k = /[\-:]([a-z])/g;

        function _(e) {
          return e[1].toUpperCase();
        }

        function T(e, t, n, r) {
          var i,
            o = S.hasOwnProperty(t) ? S[t] : null;
          (null !== o ?
            0 !== o.type :
            r ||
            !(2 < t.length) ||
            ("o" !== t[0] && "O" !== t[0]) ||
            ("n" !== t[1] && "N" !== t[1])) &&
          ((function(e, t, n, r) {
              if (
                null == t ||
                (function(e, t, n, r) {
                  if (null !== n && 0 === n.type) return !1;
                  switch (typeof t) {
                    case "function":
                    case "symbol":
                      return !0;
                    case "boolean":
                      if (r) return !1;
                      if (null !== n) return !n.acceptsBooleans;
                      return (
                        "data-" !== (e = e.toLowerCase().slice(0, 5)) &&
                        "aria-" !== e
                      );
                    default:
                      return !1;
                  }
                })(e, t, n, r)
              )
                return !0;
              if (r) return !1;
              if (null !== n)
                switch (n.type) {
                  case 3:
                    return !t;
                  case 4:
                    return !1 === t;
                  case 5:
                    return isNaN(t);
                  case 6:
                    return isNaN(t) || 1 > t;
                }
              return !1;
            })(t, n, o, r) && (n = null),
            r || null === o ?
            ((i = t),
              (!!g.call(w, i) ||
                (!g.call(b, i) &&
                  (v.test(i) ? (w[i] = !0) : ((b[i] = !0), !1)))) &&
              (null === n ?
                e.removeAttribute(t) :
                e.setAttribute(t, "" + n))) :
            o.mustUseProperty ?
            (e[o.propertyName] = null === n ? 3 !== o.type && "" : n) :
            ((t = o.attributeName),
              (r = o.attributeNamespace),
              null === n ?
              e.removeAttribute(t) :
              ((n =
                  3 === (o = o.type) || (4 === o && !0 === n) ?
                  "" :
                  "" + n),
                r ? e.setAttributeNS(r, t, n) : e.setAttribute(t, n))));
        }
        "accent-height alignment-baseline arabic-form baseline-shift cap-height clip-path clip-rule color-interpolation color-interpolation-filters color-profile color-rendering dominant-baseline enable-background fill-opacity fill-rule flood-color flood-opacity font-family font-size font-size-adjust font-stretch font-style font-variant font-weight glyph-name glyph-orientation-horizontal glyph-orientation-vertical horiz-adv-x horiz-origin-x image-rendering letter-spacing lighting-color marker-end marker-mid marker-start overline-position overline-thickness paint-order panose-1 pointer-events rendering-intent shape-rendering stop-color stop-opacity strikethrough-position strikethrough-thickness stroke-dasharray stroke-dashoffset stroke-linecap stroke-linejoin stroke-miterlimit stroke-opacity stroke-width text-anchor text-decoration text-rendering underline-position underline-thickness unicode-bidi unicode-range units-per-em v-alphabetic v-hanging v-ideographic v-mathematical vector-effect vert-adv-y vert-origin-x vert-origin-y word-spacing writing-mode xmlns:xlink x-height"
        .split(" ")
          .forEach(function(e) {
            var t = e.replace(k, _);
            S[t] = new x(t, 1, !1, e, null, !1, !1);
          }),
          "xlink:actuate xlink:arcrole xlink:role xlink:show xlink:title xlink:type"
          .split(" ")
          .forEach(function(e) {
            var t = e.replace(k, _);
            S[t] = new x(
              t,
              1,
              !1,
              e,
              "http://www.w3.org/1999/xlink",
              !1,
              !1
            );
          }),
          ["xml:base", "xml:lang", "xml:space"].forEach(function(e) {
            var t = e.replace(k, _);
            S[t] = new x(
              t,
              1,
              !1,
              e,
              "http://www.w3.org/XML/1998/namespace",
              !1,
              !1
            );
          }),
          ["tabIndex", "crossOrigin"].forEach(function(e) {
            S[e] = new x(e, 1, !1, e.toLowerCase(), null, !1, !1);
          }),
          (S.xlinkHref = new x(
            "xlinkHref",
            1,
            !1,
            "xlink:href",
            "http://www.w3.org/1999/xlink",
            !0,
            !1
          )),
          ["src", "href", "action", "formAction"].forEach(function(e) {
            S[e] = new x(e, 1, !1, e.toLowerCase(), null, !0, !0);
          });
        var E = u.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED,
          C = Symbol.for("react.element"),
          P = Symbol.for("react.portal"),
          O = Symbol.for("react.fragment"),
          A = Symbol.for("react.strict_mode"),
          j = Symbol.for("react.profiler"),
          D = Symbol.for("react.provider"),
          M = Symbol.for("react.context"),
          N = Symbol.for("react.forward_ref"),
          L = Symbol.for("react.suspense"),
          I = Symbol.for("react.suspense_list"),
          U = Symbol.for("react.memo"),
          F = Symbol.for("react.lazy");
        Symbol.for("react.scope"), Symbol.for("react.debug_trace_mode");
        var V = Symbol.for("react.offscreen");
        Symbol.for("react.legacy_hidden"),
          Symbol.for("react.cache"),
          Symbol.for("react.tracing_marker");
        var z = Symbol.iterator;

        function B(e) {
          return null === e || "object" != typeof e ?
            null :
            "function" == typeof(e = (z && e[z]) || e["@@iterator"]) ?
            e :
            null;
        }
        var q,
          H,
          W,
          $,
          K,
          Q,
          X,
          Y,
          G,
          J,
          Z,
          ee,
          et,
          en = Object.assign;

        function er(e) {
          if (void 0 === et)
            try {
              throw Error();
            } catch (e) {
              var t = e.stack.trim().match(/\n( *(at )?)/);
              et = (t && t[1]) || "";
            }
          return "\n" + et + e;
        }
        var ei = !1;

        function eo(e, t) {
          if (!e || ei) return "";
          ei = !0;
          var n = Error.prepareStackTrace;
          Error.prepareStackTrace = void 0;
          try {
            if (t) {
              if (
                ((t = function() {
                    throw Error();
                  }),
                  Object.defineProperty(t.prototype, "props", {
                    set: function() {
                      throw Error();
                    },
                  }),
                  "object" == typeof Reflect && Reflect.construct)
              ) {
                try {
                  Reflect.construct(t, []);
                } catch (e) {
                  var r = e;
                }
                Reflect.construct(e, [], t);
              } else {
                try {
                  t.call();
                } catch (e) {
                  r = e;
                }
                e.call(t.prototype);
              }
            } else {
              try {
                throw Error();
              } catch (e) {
                r = e;
              }
              e();
            }
          } catch (t) {
            if (t && r && "string" == typeof t.stack) {
              for (
                var i = t.stack.split("\n"),
                  o = r.stack.split("\n"),
                  a = i.length - 1,
                  s = o.length - 1; 1 <= a && 0 <= s && i[a] !== o[s];

              )
                s--;
              for (; 1 <= a && 0 <= s; a--, s--)
                if (i[a] !== o[s]) {
                  if (1 !== a || 1 !== s)
                    do
                      if ((a--, 0 > --s || i[a] !== o[s])) {
                        var l = "\n" + i[a].replace(" at new ", " at ");
                        return (
                          e.displayName &&
                          l.includes("<anonymous>") &&
                          (l = l.replace("<anonymous>", e.displayName)),
                          l
                        );
                      }
                    while (1 <= a && 0 <= s);
                  break;
                }
            }
          } finally {
            (ei = !1), (Error.prepareStackTrace = n);
          }
          return (e = e ? e.displayName || e.name : "") ? er(e) : "";
        }

        function ea(e) {
          switch (typeof e) {
            case "boolean":
            case "number":
            case "string":
            case "undefined":
            case "object":
              return e;
            default:
              return "";
          }
        }

        function es(e) {
          var t = e.type;
          return (
            (e = e.nodeName) &&
            "input" === e.toLowerCase() &&
            ("checkbox" === t || "radio" === t)
          );
        }

        function el(e) {
          e._valueTracker ||
            (e._valueTracker = (function(e) {
              var t = es(e) ? "checked" : "value",
                n = Object.getOwnPropertyDescriptor(
                  e.constructor.prototype,
                  t
                ),
                r = "" + e[t];
              if (
                !e.hasOwnProperty(t) &&
                void 0 !== n &&
                "function" == typeof n.get &&
                "function" == typeof n.set
              ) {
                var i = n.get,
                  o = n.set;
                return (
                  Object.defineProperty(e, t, {
                    configurable: !0,
                    get: function() {
                      return i.call(this);
                    },
                    set: function(e) {
                      (r = "" + e), o.call(this, e);
                    },
                  }),
                  Object.defineProperty(e, t, {
                    enumerable: n.enumerable
                  }), {
                    getValue: function() {
                      return r;
                    },
                    setValue: function(e) {
                      r = "" + e;
                    },
                    stopTracking: function() {
                      (e._valueTracker = null), delete e[t];
                    },
                  }
                );
              }
            })(e));
        }

        function eu(e) {
          if (!e) return !1;
          var t = e._valueTracker;
          if (!t) return !0;
          var n = t.getValue(),
            r = "";
          return (
            e && (r = es(e) ? (e.checked ? "true" : "false") : e.value),
            (e = r) !== n && (t.setValue(e), !0)
          );
        }

        function ec(e) {
          if (
            void 0 ===
            (e = e || ("undefined" != typeof document ? document : void 0))
          )
            return null;
          try {
            return e.activeElement || e.body;
          } catch (t) {
            return e.body;
          }
        }

        function ep(e, t) {
          var n = t.checked;
          return en({}, t, {
            defaultChecked: void 0,
            defaultValue: void 0,
            value: void 0,
            checked: null != n ? n : e._wrapperState.initialChecked,
          });
        }

        function ed(e, t) {
          var n = null == t.defaultValue ? "" : t.defaultValue,
            r = null != t.checked ? t.checked : t.defaultChecked;
          (n = ea(null != t.value ? t.value : n)),
          (e._wrapperState = {
            initialChecked: r,
            initialValue: n,
            controlled: "checkbox" === t.type || "radio" === t.type ?
              null != t.checked : null != t.value,
          });
        }

        function ef(e, t) {
          null != (t = t.checked) && T(e, "checked", t, !1);
        }

        function eh(e, t) {
          ef(e, t);
          var n = ea(t.value),
            r = t.type;
          if (null != n)
            "number" === r ?
            ((0 === n && "" === e.value) || e.value != n) &&
            (e.value = "" + n) :
            e.value !== "" + n && (e.value = "" + n);
          else if ("submit" === r || "reset" === r) {
            e.removeAttribute("value");
            return;
          }
          t.hasOwnProperty("value") ?
            ey(e, t.type, n) :
            t.hasOwnProperty("defaultValue") &&
            ey(e, t.type, ea(t.defaultValue)),
            null == t.checked &&
            null != t.defaultChecked &&
            (e.defaultChecked = !!t.defaultChecked);
        }

        function em(e, t, n) {
          if (t.hasOwnProperty("value") || t.hasOwnProperty("defaultValue")) {
            var r = t.type;
            if (
              !(
                ("submit" !== r && "reset" !== r) ||
                (void 0 !== t.value && null !== t.value)
              )
            )
              return;
            (t = "" + e._wrapperState.initialValue),
            n || t === e.value || (e.value = t),
              (e.defaultValue = t);
          }
          "" !== (n = e.name) && (e.name = ""),
          (e.defaultChecked = !!e._wrapperState.initialChecked),
          "" !== n && (e.name = n);
        }

        function ey(e, t, n) {
          ("number" !== t || ec(e.ownerDocument) !== e) &&
          (null == n ?
            (e.defaultValue = "" + e._wrapperState.initialValue) :
            e.defaultValue !== "" + n && (e.defaultValue = "" + n));
        }
        var eg = Array.isArray;

        function ev(e, t, n, r) {
          if (((e = e.options), t)) {
            t = {};
            for (var i = 0; i < n.length; i++) t["$" + n[i]] = !0;
            for (n = 0; n < e.length; n++)
              (i = t.hasOwnProperty("$" + e[n].value)),
              e[n].selected !== i && (e[n].selected = i),
              i && r && (e[n].defaultSelected = !0);
          } else {
            for (i = 0, n = "" + ea(n), t = null; i < e.length; i++) {
              if (e[i].value === n) {
                (e[i].selected = !0), r && (e[i].defaultSelected = !0);
                return;
              }
              null !== t || e[i].disabled || (t = e[i]);
            }
            null !== t && (t.selected = !0);
          }
        }

        function eb(e, t) {
          if (null != t.dangerouslySetInnerHTML) throw Error(p(91));
          return en({}, t, {
            value: void 0,
            defaultValue: void 0,
            children: "" + e._wrapperState.initialValue,
          });
        }

        function ew(e, t) {
          var n = t.value;
          if (null == n) {
            if (((n = t.children), (t = t.defaultValue), null != n)) {
              if (null != t) throw Error(p(92));
              if (eg(n)) {
                if (1 < n.length) throw Error(p(93));
                n = n[0];
              }
              t = n;
            }
            null == t && (t = ""), (n = t);
          }
          e._wrapperState = {
            initialValue: ea(n)
          };
        }

        function ex(e, t) {
          var n = ea(t.value),
            r = ea(t.defaultValue);
          null != n &&
            ((n = "" + n) !== e.value && (e.value = n),
              null == t.defaultValue &&
              e.defaultValue !== n &&
              (e.defaultValue = n)),
            null != r && (e.defaultValue = "" + r);
        }

        function eS(e) {
          var t = e.textContent;
          t === e._wrapperState.initialValue &&
            "" !== t &&
            null !== t &&
            (e.value = t);
        }

        function ek(e) {
          switch (e) {
            case "svg":
              return "http://www.w3.org/2000/svg";
            case "math":
              return "http://www.w3.org/1998/Math/MathML";
            default:
              return "http://www.w3.org/1999/xhtml";
          }
        }

        function e_(e, t) {
          return null == e || "http://www.w3.org/1999/xhtml" === e ?
            ek(t) :
            "http://www.w3.org/2000/svg" === e && "foreignObject" === t ?
            "http://www.w3.org/1999/xhtml" :
            e;
        }
        var eT,
          eE,
          eC =
          ((eT = function(e, t) {
              if (
                "http://www.w3.org/2000/svg" !== e.namespaceURI ||
                "innerHTML" in e
              )
                e.innerHTML = t;
              else {
                for (
                  (eE = eE || document.createElement("div")).innerHTML =
                  "<svg>" + t.valueOf().toString() + "</svg>",
                  t = eE.firstChild; e.firstChild;

                )
                  e.removeChild(e.firstChild);
                for (; t.firstChild;) e.appendChild(t.firstChild);
              }
            }),
            "undefined" != typeof MSApp && MSApp.execUnsafeLocalFunction ?
            function(e, t, n, r) {
              MSApp.execUnsafeLocalFunction(function() {
                return eT(e, t, n, r);
              });
            } :
            eT);

        function eP(e, t) {
          if (t) {
            var n = e.firstChild;
            if (n && n === e.lastChild && 3 === n.nodeType) {
              n.nodeValue = t;
              return;
            }
          }
          e.textContent = t;
        }
        var eO = {
            animationIterationCount: !0,
            aspectRatio: !0,
            borderImageOutset: !0,
            borderImageSlice: !0,
            borderImageWidth: !0,
            boxFlex: !0,
            boxFlexGroup: !0,
            boxOrdinalGroup: !0,
            columnCount: !0,
            columns: !0,
            flex: !0,
            flexGrow: !0,
            flexPositive: !0,
            flexShrink: !0,
            flexNegative: !0,
            flexOrder: !0,
            gridArea: !0,
            gridRow: !0,
            gridRowEnd: !0,
            gridRowSpan: !0,
            gridRowStart: !0,
            gridColumn: !0,
            gridColumnEnd: !0,
            gridColumnSpan: !0,
            gridColumnStart: !0,
            fontWeight: !0,
            lineClamp: !0,
            lineHeight: !0,
            opacity: !0,
            order: !0,
            orphans: !0,
            tabSize: !0,
            widows: !0,
            zIndex: !0,
            zoom: !0,
            fillOpacity: !0,
            floodOpacity: !0,
            stopOpacity: !0,
            strokeDasharray: !0,
            strokeDashoffset: !0,
            strokeMiterlimit: !0,
            strokeOpacity: !0,
            strokeWidth: !0,
          },
          eA = ["Webkit", "ms", "Moz", "O"];

        function ej(e, t, n) {
          return null == t || "boolean" == typeof t || "" === t ?
            "" :
            n ||
            "number" != typeof t ||
            0 === t ||
            (eO.hasOwnProperty(e) && eO[e]) ?
            ("" + t).trim() :
            t + "px";
        }

        function eD(e, t) {
          for (var n in ((e = e.style), t))
            if (t.hasOwnProperty(n)) {
              var r = 0 === n.indexOf("--"),
                i = ej(n, t[n], r);
              "float" === n && (n = "cssFloat"),
                r ? e.setProperty(n, i) : (e[n] = i);
            }
        }
        Object.keys(eO).forEach(function(e) {
          eA.forEach(function(t) {
            eO[(t = t + e.charAt(0).toUpperCase() + e.substring(1))] = eO[e];
          });
        });
        var eR = en({
          menuitem: !0
        }, {
          area: !0,
          base: !0,
          br: !0,
          col: !0,
          embed: !0,
          hr: !0,
          img: !0,
          input: !0,
          keygen: !0,
          link: !0,
          meta: !0,
          param: !0,
          source: !0,
          track: !0,
          wbr: !0,
        });

        function eM(e, t) {
          if (t) {
            if (
              eR[e] &&
              (null != t.children || null != t.dangerouslySetInnerHTML)
            )
              throw Error(p(137, e));
            if (null != t.dangerouslySetInnerHTML) {
              if (null != t.children) throw Error(p(60));
              if (
                "object" != typeof t.dangerouslySetInnerHTML ||
                !("__html" in t.dangerouslySetInnerHTML)
              )
                throw Error(p(61));
            }
            if (null != t.style && "object" != typeof t.style)
              throw Error(p(62));
          }
        }

        function eN(e, t) {
          if (-1 === e.indexOf("-")) return "string" == typeof t.is;
          switch (e) {
            case "annotation-xml":
            case "color-profile":
            case "font-face":
            case "font-face-src":
            case "font-face-uri":
            case "font-face-format":
            case "font-face-name":
            case "missing-glyph":
              return !1;
            default:
              return !0;
          }
        }
        var eL = null;

        function eI(e) {
          return (
            (e = e.target || e.srcElement || window)
            .correspondingUseElement && (e = e.correspondingUseElement),
            3 === e.nodeType ? e.parentNode : e
          );
        }
        var eU = null,
          eF = null,
          eV = null;

        function ez(e) {
          if ((e = rX(e))) {
            if ("function" != typeof eU) throw Error(p(280));
            var t = e.stateNode;
            t && ((t = rG(t)), eU(e.stateNode, e.type, t));
          }
        }

        function eB(e) {
          eF ? (eV ? eV.push(e) : (eV = [e])) : (eF = e);
        }

        function eq() {
          if (eF) {
            var e = eF,
              t = eV;
            if (((eV = eF = null), ez(e), t))
              for (e = 0; e < t.length; e++) ez(t[e]);
          }
        }

        function eH(e, t) {
          return e(t);
        }

        function eW() {}
        var e$ = !1;

        function eK(e, t, n) {
          if (e$) return e(t, n);
          e$ = !0;
          try {
            return eH(e, t, n);
          } finally {
            (e$ = !1), (null !== eF || null !== eV) && (eW(), eq());
          }
        }

        function eQ(e, t) {
          var n = e.stateNode;
          if (null === n) return null;
          var r = rG(n);
          if (null === r) return null;
          switch (((n = r[t]), t)) {
            case "onClick":
            case "onClickCapture":
            case "onDoubleClick":
            case "onDoubleClickCapture":
            case "onMouseDown":
            case "onMouseDownCapture":
            case "onMouseMove":
            case "onMouseMoveCapture":
            case "onMouseUp":
            case "onMouseUpCapture":
            case "onMouseEnter":
              (r = !r.disabled) ||
              (r = !(
                "button" === (e = e.type) ||
                "input" === e ||
                "select" === e ||
                "textarea" === e
              )),
              (e = !r);
              break;
            default:
              e = !1;
          }
          if (e) return null;
          if (n && "function" != typeof n) throw Error(p(231, t, typeof n));
          return n;
        }
        var eX = !1;
        if (y)
          try {
            var eY = {};
            Object.defineProperty(eY, "passive", {
                get: function() {
                  eX = !0;
                },
              }),
              window.addEventListener("test", eY, eY),
              window.removeEventListener("test", eY, eY);
          } catch (e) {
            eX = !1;
          }

        function eG(e, t, n, r, i, o, a, s, l) {
          var u = Array.prototype.slice.call(arguments, 3);
          try {
            t.apply(n, u);
          } catch (e) {
            this.onError(e);
          }
        }
        var eJ = !1,
          eZ = null,
          e0 = !1,
          e1 = null,
          e2 = {
            onError: function(e) {
              (eJ = !0), (eZ = e);
            },
          };

        function e3(e, t, n, r, i, o, a, s, l) {
          (eJ = !1), (eZ = null), eG.apply(e2, arguments);
        }

        function e4(e) {
          var t = e,
            n = e;
          if (e.alternate)
            for (; t.return;) t = t.return;
          else {
            e = t;
            do 0 != (4098 & (t = e).flags) && (n = t.return), (e = t.return);
            while (e);
          }
          return 3 === t.tag ? n : null;
        }

        function e5(e) {
          if (13 === e.tag) {
            var t = e.memoizedState;
            if (
              (null === t &&
                null !== (e = e.alternate) &&
                (t = e.memoizedState),
                null !== t)
            )
              return t.dehydrated;
          }
          return null;
        }

        function e6(e) {
          if (e4(e) !== e) throw Error(p(188));
        }

        function e8(e) {
          return null !==
            (e = (function(e) {
              var t = e.alternate;
              if (!t) {
                if (null === (t = e4(e))) throw Error(p(188));
                return t !== e ? null : e;
              }
              for (var n = e, r = t;;) {
                var i = n.return;
                if (null === i) break;
                var o = i.alternate;
                if (null === o) {
                  if (null !== (r = i.return)) {
                    n = r;
                    continue;
                  }
                  break;
                }
                if (i.child === o.child) {
                  for (o = i.child; o;) {
                    if (o === n) return e6(i), e;
                    if (o === r) return e6(i), t;
                    o = o.sibling;
                  }
                  throw Error(p(188));
                }
                if (n.return !== r.return)(n = i), (r = o);
                else {
                  for (var a = !1, s = i.child; s;) {
                    if (s === n) {
                      (a = !0), (n = i), (r = o);
                      break;
                    }
                    if (s === r) {
                      (a = !0), (r = i), (n = o);
                      break;
                    }
                    s = s.sibling;
                  }
                  if (!a) {
                    for (s = o.child; s;) {
                      if (s === n) {
                        (a = !0), (n = o), (r = i);
                        break;
                      }
                      if (s === r) {
                        (a = !0), (r = o), (n = i);
                        break;
                      }
                      s = s.sibling;
                    }
                    if (!a) throw Error(p(189));
                  }
                }
                if (n.alternate !== r) throw Error(p(190));
              }
              if (3 !== n.tag) throw Error(p(188));
              return n.stateNode.current === n ? e : t;
            })(e)) ?
            (function e(t) {
              if (5 === t.tag || 6 === t.tag) return t;
              for (t = t.child; null !== t;) {
                var n = e(t);
                if (null !== n) return n;
                t = t.sibling;
              }
              return null;
            })(e) :
            null;
        }
        var e9 = c.unstable_scheduleCallback,
          e7 = c.unstable_cancelCallback,
          te = c.unstable_shouldYield,
          tt = c.unstable_requestPaint,
          tn = c.unstable_now,
          tr = c.unstable_getCurrentPriorityLevel,
          ti = c.unstable_ImmediatePriority,
          to = c.unstable_UserBlockingPriority,
          ta = c.unstable_NormalPriority,
          ts = c.unstable_LowPriority,
          tl = c.unstable_IdlePriority,
          tu = null,
          tc = null,
          tp = Math.clz32 ?
          Math.clz32 :
          function(e) {
            return 0 == (e >>>= 0) ? 32 : (31 - ((td(e) / tf) | 0)) | 0;
          },
          td = Math.log,
          tf = Math.LN2,
          th = 64,
          tm = 4194304;

        function ty(e) {
          switch (e & -e) {
            case 1:
              return 1;
            case 2:
              return 2;
            case 4:
              return 4;
            case 8:
              return 8;
            case 16:
              return 16;
            case 32:
              return 32;
            case 64:
            case 128:
            case 256:
            case 512:
            case 1024:
            case 2048:
            case 4096:
            case 8192:
            case 16384:
            case 32768:
            case 65536:
            case 131072:
            case 262144:
            case 524288:
            case 1048576:
            case 2097152:
              return 4194240 & e;
            case 4194304:
            case 8388608:
            case 16777216:
            case 33554432:
            case 67108864:
              return 130023424 & e;
            case 134217728:
              return 134217728;
            case 268435456:
              return 268435456;
            case 536870912:
              return 536870912;
            case 1073741824:
              return 1073741824;
            default:
              return e;
          }
        }

        function tg(e, t) {
          var n = e.pendingLanes;
          if (0 === n) return 0;
          var r = 0,
            i = e.suspendedLanes,
            o = e.pingedLanes,
            a = 268435455 & n;
          if (0 !== a) {
            var s = a & ~i;
            0 !== s ? (r = ty(s)) : 0 != (o &= a) && (r = ty(o));
          } else 0 != (a = n & ~i) ? (r = ty(a)) : 0 !== o && (r = ty(o));
          if (0 === r) return 0;
          if (
            0 !== t &&
            t !== r &&
            0 == (t & i) &&
            ((i = r & -r) >= (o = t & -t) || (16 === i && 0 != (4194240 & o)))
          )
            return t;
          if ((0 != (4 & r) && (r |= 16 & n), 0 !== (t = e.entangledLanes)))
            for (e = e.entanglements, t &= r; 0 < t;)
              (i = 1 << (n = 31 - tp(t))), (r |= e[n]), (t &= ~i);
          return r;
        }

        function tv(e) {
          return 0 != (e = -1073741825 & e.pendingLanes) ?
            e :
            1073741824 & e ?
            1073741824 :
            0;
        }

        function tb() {
          var e = th;
          return 0 == (4194240 & (th <<= 1)) && (th = 64), e;
        }

        function tw(e) {
          for (var t = [], n = 0; 31 > n; n++) t.push(e);
          return t;
        }

        function tx(e, t, n) {
          (e.pendingLanes |= t),
          536870912 !== t && ((e.suspendedLanes = 0), (e.pingedLanes = 0)),
            ((e = e.eventTimes)[(t = 31 - tp(t))] = n);
        }

        function tS(e, t) {
          var n = (e.entangledLanes |= t);
          for (e = e.entanglements; n;) {
            var r = 31 - tp(n),
              i = 1 << r;
            (i & t) | (e[r] & t) && (e[r] |= t), (n &= ~i);
          }
        }
        var tk = 0;

        function t_(e) {
          return 1 < (e &= -e) ?
            4 < e ?
            0 != (268435455 & e) ?
            16 :
            536870912 :
            4 :
            1;
        }
        var tT,
          tE,
          tC,
          tP,
          tO,
          tA = !1,
          tj = [],
          tD = null,
          tR = null,
          tM = null,
          tN = new Map(),
          tL = new Map(),
          tI = [],
          tU =
          "mousedown mouseup touchcancel touchend touchstart auxclick dblclick pointercancel pointerdown pointerup dragend dragstart drop compositionend compositionstart keydown keypress keyup input textInput copy cut paste click change contextmenu reset submit".split(
            " "
          );

        function tF(e, t) {
          switch (e) {
            case "focusin":
            case "focusout":
              tD = null;
              break;
            case "dragenter":
            case "dragleave":
              tR = null;
              break;
            case "mouseover":
            case "mouseout":
              tM = null;
              break;
            case "pointerover":
            case "pointerout":
              tN.delete(t.pointerId);
              break;
            case "gotpointercapture":
            case "lostpointercapture":
              tL.delete(t.pointerId);
          }
        }

        function tV(e, t, n, r, i, o) {
          return (
            null === e || e.nativeEvent !== o ?
            ((e = {
                blockedOn: t,
                domEventName: n,
                eventSystemFlags: r,
                nativeEvent: o,
                targetContainers: [i],
              }),
              null !== t && null !== (t = rX(t)) && tE(t)) :
            ((e.eventSystemFlags |= r),
              (t = e.targetContainers),
              null !== i && -1 === t.indexOf(i) && t.push(i)),
            e
          );
        }

        function tz(e) {
          var t = rQ(e.target);
          if (null !== t) {
            var n = e4(t);
            if (null !== n) {
              if (13 === (t = n.tag)) {
                if (null !== (t = e5(n))) {
                  (e.blockedOn = t),
                  tO(e.priority, function() {
                    tC(n);
                  });
                  return;
                }
              } else if (
                3 === t &&
                n.stateNode.current.memoizedState.isDehydrated
              ) {
                e.blockedOn = 3 === n.tag ? n.stateNode.containerInfo : null;
                return;
              }
            }
          }
          e.blockedOn = null;
        }

        function tB(e) {
          if (null !== e.blockedOn) return !1;
          for (var t = e.targetContainers; 0 < t.length;) {
            var n = tZ(
              e.domEventName,
              e.eventSystemFlags,
              t[0],
              e.nativeEvent
            );
            if (null !== n)
              return null !== (t = rX(n)) && tE(t), (e.blockedOn = n), !1;
            var r = new(n = e.nativeEvent).constructor(n.type, n);
            (eL = r), n.target.dispatchEvent(r), (eL = null), t.shift();
          }
          return !0;
        }

        function tq(e, t, n) {
          tB(e) && n.delete(t);
        }

        function tH() {
          (tA = !1),
          null !== tD && tB(tD) && (tD = null),
            null !== tR && tB(tR) && (tR = null),
            null !== tM && tB(tM) && (tM = null),
            tN.forEach(tq),
            tL.forEach(tq);
        }

        function tW(e, t) {
          e.blockedOn === t &&
            ((e.blockedOn = null),
              tA ||
              ((tA = !0),
                c.unstable_scheduleCallback(c.unstable_NormalPriority, tH)));
        }

        function t$(e) {
          function t(t) {
            return tW(t, e);
          }
          if (0 < tj.length) {
            tW(tj[0], e);
            for (var n = 1; n < tj.length; n++) {
              var r = tj[n];
              r.blockedOn === e && (r.blockedOn = null);
            }
          }
          for (
            null !== tD && tW(tD, e),
            null !== tR && tW(tR, e),
            null !== tM && tW(tM, e),
            tN.forEach(t),
            tL.forEach(t),
            n = 0; n < tI.length; n++
          )
            (r = tI[n]).blockedOn === e && (r.blockedOn = null);
          for (; 0 < tI.length && null === (n = tI[0]).blockedOn;)
            tz(n), null === n.blockedOn && tI.shift();
        }
        var tK = E.ReactCurrentBatchConfig,
          tQ = !0;

        function tX(e, t, n, r) {
          var i = tk,
            o = tK.transition;
          tK.transition = null;
          try {
            (tk = 1), tG(e, t, n, r);
          } finally {
            (tk = i), (tK.transition = o);
          }
        }

        function tY(e, t, n, r) {
          var i = tk,
            o = tK.transition;
          tK.transition = null;
          try {
            (tk = 4), tG(e, t, n, r);
          } finally {
            (tk = i), (tK.transition = o);
          }
        }

        function tG(e, t, n, r) {
          if (tQ) {
            var i = tZ(e, t, n, r);
            if (null === i) rw(e, t, r, tJ, n), tF(e, r);
            else if (
              (function(e, t, n, r, i) {
                switch (t) {
                  case "focusin":
                    return (tD = tV(tD, e, t, n, r, i)), !0;
                  case "dragenter":
                    return (tR = tV(tR, e, t, n, r, i)), !0;
                  case "mouseover":
                    return (tM = tV(tM, e, t, n, r, i)), !0;
                  case "pointerover":
                    var o = i.pointerId;
                    return (
                      tN.set(o, tV(tN.get(o) || null, e, t, n, r, i)), !0
                    );
                  case "gotpointercapture":
                    return (
                      (o = i.pointerId),
                      tL.set(o, tV(tL.get(o) || null, e, t, n, r, i)),
                      !0
                    );
                }
                return !1;
              })(i, e, t, n, r)
            )
              r.stopPropagation();
            else if ((tF(e, r), 4 & t && -1 < tU.indexOf(e))) {
              for (; null !== i;) {
                var o = rX(i);
                if (
                  (null !== o && tT(o),
                    null === (o = tZ(e, t, n, r)) && rw(e, t, r, tJ, n),
                    o === i)
                )
                  break;
                i = o;
              }
              null !== i && r.stopPropagation();
            } else rw(e, t, r, null, n);
          }
        }
        var tJ = null;

        function tZ(e, t, n, r) {
          if (((tJ = null), null !== (e = rQ((e = eI(r)))))) {
            if (null === (t = e4(e))) e = null;
            else if (13 === (n = t.tag)) {
              if (null !== (e = e5(t))) return e;
              e = null;
            } else if (3 === n) {
              if (t.stateNode.current.memoizedState.isDehydrated)
                return 3 === t.tag ? t.stateNode.containerInfo : null;
              e = null;
            } else t !== e && (e = null);
          }
          return (tJ = e), null;
        }

        function t0(e) {
          switch (e) {
            case "cancel":
            case "click":
            case "close":
            case "contextmenu":
            case "copy":
            case "cut":
            case "auxclick":
            case "dblclick":
            case "dragend":
            case "dragstart":
            case "drop":
            case "focusin":
            case "focusout":
            case "input":
            case "invalid":
            case "keydown":
            case "keypress":
            case "keyup":
            case "mousedown":
            case "mouseup":
            case "paste":
            case "pause":
            case "play":
            case "pointercancel":
            case "pointerdown":
            case "pointerup":
            case "ratechange":
            case "reset":
            case "resize":
            case "seeked":
            case "submit":
            case "touchcancel":
            case "touchend":
            case "touchstart":
            case "volumechange":
            case "change":
            case "selectionchange":
            case "textInput":
            case "compositionstart":
            case "compositionend":
            case "compositionupdate":
            case "beforeblur":
            case "afterblur":
            case "beforeinput":
            case "blur":
            case "fullscreenchange":
            case "focus":
            case "hashchange":
            case "popstate":
            case "select":
            case "selectstart":
              return 1;
            case "drag":
            case "dragenter":
            case "dragexit":
            case "dragleave":
            case "dragover":
            case "mousemove":
            case "mouseout":
            case "mouseover":
            case "pointermove":
            case "pointerout":
            case "pointerover":
            case "scroll":
            case "toggle":
            case "touchmove":
            case "wheel":
            case "mouseenter":
            case "mouseleave":
            case "pointerenter":
            case "pointerleave":
              return 4;
            case "message":
              switch (tr()) {
                case ti:
                  return 1;
                case to:
                  return 4;
                case ta:
                case ts:
                  return 16;
                case tl:
                  return 536870912;
                default:
                  return 16;
              }
            default:
              return 16;
          }
        }
        var t1 = null,
          t2 = null,
          t3 = null;

        function t4() {
          if (t3) return t3;
          var e,
            t,
            n = t2,
            r = n.length,
            i = "value" in t1 ? t1.value : t1.textContent,
            o = i.length;
          for (e = 0; e < r && n[e] === i[e]; e++);
          var a = r - e;
          for (t = 1; t <= a && n[r - t] === i[o - t]; t++);
          return (t3 = i.slice(e, 1 < t ? 1 - t : void 0));
        }

        function t5(e) {
          var t = e.keyCode;
          return (
            "charCode" in e ?
            0 === (e = e.charCode) && 13 === t && (e = 13) :
            (e = t),
            10 === e && (e = 13),
            32 <= e || 13 === e ? e : 0
          );
        }

        function t6() {
          return !0;
        }

        function t8() {
          return !1;
        }

        function t9(e) {
          function t(t, n, r, i, o) {
            for (var a in ((this._reactName = t),
                (this._targetInst = r),
                (this.type = n),
                (this.nativeEvent = i),
                (this.target = o),
                (this.currentTarget = null),
                e))
              e.hasOwnProperty(a) &&
              ((t = e[a]), (this[a] = t ? t(i) : i[a]));
            return (
              (this.isDefaultPrevented = (
                  null != i.defaultPrevented ?
                  i.defaultPrevented :
                  !1 === i.returnValue
                ) ?
                t6 :
                t8),
              (this.isPropagationStopped = t8),
              this
            );
          }
          return (
            en(t.prototype, {
              preventDefault: function() {
                this.defaultPrevented = !0;
                var e = this.nativeEvent;
                e &&
                  (e.preventDefault ?
                    e.preventDefault() :
                    "unknown" != typeof e.returnValue &&
                    (e.returnValue = !1),
                    (this.isDefaultPrevented = t6));
              },
              stopPropagation: function() {
                var e = this.nativeEvent;
                e &&
                  (e.stopPropagation ?
                    e.stopPropagation() :
                    "unknown" != typeof e.cancelBubble &&
                    (e.cancelBubble = !0),
                    (this.isPropagationStopped = t6));
              },
              persist: function() {},
              isPersistent: t6,
            }),
            t
          );
        }
        var t7,
          ne,
          nt,
          nn = {
            eventPhase: 0,
            bubbles: 0,
            cancelable: 0,
            timeStamp: function(e) {
              return e.timeStamp || Date.now();
            },
            defaultPrevented: 0,
            isTrusted: 0,
          },
          nr = t9(nn),
          ni = en({}, nn, {
            view: 0,
            detail: 0
          }),
          no = t9(ni),
          na = en({}, ni, {
            screenX: 0,
            screenY: 0,
            clientX: 0,
            clientY: 0,
            pageX: 0,
            pageY: 0,
            ctrlKey: 0,
            shiftKey: 0,
            altKey: 0,
            metaKey: 0,
            getModifierState: ng,
            button: 0,
            buttons: 0,
            relatedTarget: function(e) {
              return void 0 === e.relatedTarget ?
                e.fromElement === e.srcElement ?
                e.toElement :
                e.fromElement :
                e.relatedTarget;
            },
            movementX: function(e) {
              return "movementX" in e ?
                e.movementX :
                (e !== nt &&
                  (nt && "mousemove" === e.type ?
                    ((t7 = e.screenX - nt.screenX),
                      (ne = e.screenY - nt.screenY)) :
                    (ne = t7 = 0),
                    (nt = e)),
                  t7);
            },
            movementY: function(e) {
              return "movementY" in e ? e.movementY : ne;
            },
          }),
          ns = t9(na),
          nl = t9(en({}, na, {
            dataTransfer: 0
          })),
          nu = t9(en({}, ni, {
            relatedTarget: 0
          })),
          nc = t9(
            en({}, nn, {
              animationName: 0,
              elapsedTime: 0,
              pseudoElement: 0
            })
          ),
          np = t9(
            en({}, nn, {
              clipboardData: function(e) {
                return "clipboardData" in e ?
                  e.clipboardData :
                  window.clipboardData;
              },
            })
          ),
          nd = t9(en({}, nn, {
            data: 0
          })),
          nf = {
            Esc: "Escape",
            Spacebar: " ",
            Left: "ArrowLeft",
            Up: "ArrowUp",
            Right: "ArrowRight",
            Down: "ArrowDown",
            Del: "Delete",
            Win: "OS",
            Menu: "ContextMenu",
            Apps: "ContextMenu",
            Scroll: "ScrollLock",
            MozPrintableKey: "Unidentified",
          },
          nh = {
            8: "Backspace",
            9: "Tab",
            12: "Clear",
            13: "Enter",
            16: "Shift",
            17: "Control",
            18: "Alt",
            19: "Pause",
            20: "CapsLock",
            27: "Escape",
            32: " ",
            33: "PageUp",
            34: "PageDown",
            35: "End",
            36: "Home",
            37: "ArrowLeft",
            38: "ArrowUp",
            39: "ArrowRight",
            40: "ArrowDown",
            45: "Insert",
            46: "Delete",
            112: "F1",
            113: "F2",
            114: "F3",
            115: "F4",
            116: "F5",
            117: "F6",
            118: "F7",
            119: "F8",
            120: "F9",
            121: "F10",
            122: "F11",
            123: "F12",
            144: "NumLock",
            145: "ScrollLock",
            224: "Meta",
          },
          nm = {
            Alt: "altKey",
            Control: "ctrlKey",
            Meta: "metaKey",
            Shift: "shiftKey",
          };

        function ny(e) {
          var t = this.nativeEvent;
          return t.getModifierState ?
            t.getModifierState(e) :
            !!(e = nm[e]) && !!t[e];
        }

        function ng() {
          return ny;
        }
        var nv = t9(
            en({}, ni, {
              key: function(e) {
                if (e.key) {
                  var t = nf[e.key] || e.key;
                  if ("Unidentified" !== t) return t;
                }
                return "keypress" === e.type ?
                  13 === (e = t5(e)) ?
                  "Enter" :
                  String.fromCharCode(e) :
                  "keydown" === e.type || "keyup" === e.type ?
                  nh[e.keyCode] || "Unidentified" :
                  "";
              },
              code: 0,
              location: 0,
              ctrlKey: 0,
              shiftKey: 0,
              altKey: 0,
              metaKey: 0,
              repeat: 0,
              locale: 0,
              getModifierState: ng,
              charCode: function(e) {
                return "keypress" === e.type ? t5(e) : 0;
              },
              keyCode: function(e) {
                return "keydown" === e.type || "keyup" === e.type ?
                  e.keyCode :
                  0;
              },
              which: function(e) {
                return "keypress" === e.type ?
                  t5(e) :
                  "keydown" === e.type || "keyup" === e.type ?
                  e.keyCode :
                  0;
              },
            })
          ),
          nb = t9(
            en({}, na, {
              pointerId: 0,
              width: 0,
              height: 0,
              pressure: 0,
              tangentialPressure: 0,
              tiltX: 0,
              tiltY: 0,
              twist: 0,
              pointerType: 0,
              isPrimary: 0,
            })
          ),
          nw = t9(
            en({}, ni, {
              touches: 0,
              targetTouches: 0,
              changedTouches: 0,
              altKey: 0,
              metaKey: 0,
              ctrlKey: 0,
              shiftKey: 0,
              getModifierState: ng,
            })
          ),
          nx = t9(
            en({}, nn, {
              propertyName: 0,
              elapsedTime: 0,
              pseudoElement: 0
            })
          ),
          nS = t9(
            en({}, na, {
              deltaX: function(e) {
                return "deltaX" in e ?
                  e.deltaX :
                  "wheelDeltaX" in e ?
                  -e.wheelDeltaX :
                  0;
              },
              deltaY: function(e) {
                return "deltaY" in e ?
                  e.deltaY :
                  "wheelDeltaY" in e ?
                  -e.wheelDeltaY :
                  "wheelDelta" in e ?
                  -e.wheelDelta :
                  0;
              },
              deltaZ: 0,
              deltaMode: 0,
            })
          ),
          nk = [9, 13, 27, 32],
          n_ = y && "CompositionEvent" in window,
          nT = null;
        y && "documentMode" in document && (nT = document.documentMode);
        var nE = y && "TextEvent" in window && !nT,
          nC = y && (!n_ || (nT && 8 < nT && 11 >= nT)),
          nP = !1;

        function nO(e, t) {
          switch (e) {
            case "keyup":
              return -1 !== nk.indexOf(t.keyCode);
            case "keydown":
              return 229 !== t.keyCode;
            case "keypress":
            case "mousedown":
            case "focusout":
              return !0;
            default:
              return !1;
          }
        }

        function nA(e) {
          return "object" == typeof(e = e.detail) && "data" in e ?
            e.data :
            null;
        }
        var nj = !1,
          nD = {
            color: !0,
            date: !0,
            datetime: !0,
            "datetime-local": !0,
            email: !0,
            month: !0,
            number: !0,
            password: !0,
            range: !0,
            search: !0,
            tel: !0,
            text: !0,
            time: !0,
            url: !0,
            week: !0,
          };

        function nR(e) {
          var t = e && e.nodeName && e.nodeName.toLowerCase();
          return "input" === t ? !!nD[e.type] : "textarea" === t;
        }

        function nM(e, t, n, r) {
          eB(r),
            0 < (t = rS(t, "onChange")).length &&
            ((n = new nr("onChange", "change", null, n, r)),
              e.push({
                event: n,
                listeners: t
              }));
        }
        var nN = null,
          nL = null;

        function nI(e) {
          rh(e, 0);
        }

        function nU(e) {
          if (eu(rY(e))) return e;
        }

        function nF(e, t) {
          if ("change" === e) return t;
        }
        var nV = !1;
        if (y) {
          if (y) {
            var nz = "oninput" in document;
            if (!nz) {
              var nB = document.createElement("div");
              nB.setAttribute("oninput", "return;"),
                (nz = "function" == typeof nB.oninput);
            }
            r = nz;
          } else r = !1;
          nV = r && (!document.documentMode || 9 < document.documentMode);
        }

        function nq() {
          nN && (nN.detachEvent("onpropertychange", nH), (nL = nN = null));
        }

        function nH(e) {
          if ("value" === e.propertyName && nU(nL)) {
            var t = [];
            nM(t, nL, e, eI(e)), eK(nI, t);
          }
        }

        function nW(e, t, n) {
          "focusin" === e
            ?
            (nq(),
              (nN = t),
              (nL = n),
              nN.attachEvent("onpropertychange", nH)) :
            "focusout" === e && nq();
        }

        function n$(e) {
          if ("selectionchange" === e || "keyup" === e || "keydown" === e)
            return nU(nL);
        }

        function nK(e, t) {
          if ("click" === e) return nU(t);
        }

        function nQ(e, t) {
          if ("input" === e || "change" === e) return nU(t);
        }
        var nX =
          "function" == typeof Object.is ?
          Object.is :
          function(e, t) {
            return (
              (e === t && (0 !== e || 1 / e == 1 / t)) ||
              (e != e && t != t)
            );
          };

        function nY(e, t) {
          if (nX(e, t)) return !0;
          if (
            "object" != typeof e ||
            null === e ||
            "object" != typeof t ||
            null === t
          )
            return !1;
          var n = Object.keys(e),
            r = Object.keys(t);
          if (n.length !== r.length) return !1;
          for (r = 0; r < n.length; r++) {
            var i = n[r];
            if (!g.call(t, i) || !nX(e[i], t[i])) return !1;
          }
          return !0;
        }

        function nG(e) {
          for (; e && e.firstChild;) e = e.firstChild;
          return e;
        }

        function nJ(e, t) {
          var n,
            r = nG(e);
          for (e = 0; r;) {
            if (3 === r.nodeType) {
              if (((n = e + r.textContent.length), e <= t && n >= t))
                return {
                  node: r,
                  offset: t - e
                };
              e = n;
            }
            e: {
              for (; r;) {
                if (r.nextSibling) {
                  r = r.nextSibling;
                  break e;
                }
                r = r.parentNode;
              }
              r = void 0;
            }
            r = nG(r);
          }
        }

        function nZ() {
          for (var e = window, t = ec(); t instanceof e.HTMLIFrameElement;) {
            try {
              var n = "string" == typeof t.contentWindow.location.href;
            } catch (e) {
              n = !1;
            }
            if (n) e = t.contentWindow;
            else break;
            t = ec(e.document);
          }
          return t;
        }

        function n0(e) {
          var t = e && e.nodeName && e.nodeName.toLowerCase();
          return (
            t &&
            (("input" === t &&
                ("text" === e.type ||
                  "search" === e.type ||
                  "tel" === e.type ||
                  "url" === e.type ||
                  "password" === e.type)) ||
              "textarea" === t ||
              "true" === e.contentEditable)
          );
        }
        var n1 =
          y && "documentMode" in document && 11 >= document.documentMode,
          n2 = null,
          n3 = null,
          n4 = null,
          n5 = !1;

        function n6(e, t, n) {
          var r =
            n.window === n ?
            n.document :
            9 === n.nodeType ?
            n :
            n.ownerDocument;
          n5 ||
            null == n2 ||
            n2 !== ec(r) ||
            ((r =
                "selectionStart" in (r = n2) && n0(r) ? {
                  start: r.selectionStart,
                  end: r.selectionEnd
                } : {
                  anchorNode: (r = (
                    (r.ownerDocument && r.ownerDocument.defaultView) ||
                    window
                  ).getSelection()).anchorNode,
                  anchorOffset: r.anchorOffset,
                  focusNode: r.focusNode,
                  focusOffset: r.focusOffset,
                }),
              (n4 && nY(n4, r)) ||
              ((n4 = r),
                0 < (r = rS(n3, "onSelect")).length &&
                ((t = new nr("onSelect", "select", null, t, n)),
                  e.push({
                    event: t,
                    listeners: r
                  }),
                  (t.target = n2))));
        }

        function n8(e, t) {
          var n = {};
          return (
            (n[e.toLowerCase()] = t.toLowerCase()),
            (n["Webkit" + e] = "webkit" + t),
            (n["Moz" + e] = "moz" + t),
            n
          );
        }
        var n9 = {
            animationend: n8("Animation", "AnimationEnd"),
            animationiteration: n8("Animation", "AnimationIteration"),
            animationstart: n8("Animation", "AnimationStart"),
            transitionend: n8("Transition", "TransitionEnd"),
          },
          n7 = {},
          re = {};

        function rt(e) {
          if (n7[e]) return n7[e];
          if (!n9[e]) return e;
          var t,
            n = n9[e];
          for (t in n)
            if (n.hasOwnProperty(t) && t in re) return (n7[e] = n[t]);
          return e;
        }
        y &&
          ((re = document.createElement("div").style),
            "AnimationEvent" in window ||
            (delete n9.animationend.animation,
              delete n9.animationiteration.animation,
              delete n9.animationstart.animation),
            "TransitionEvent" in window || delete n9.transitionend.transition);
        var rn = rt("animationend"),
          rr = rt("animationiteration"),
          ri = rt("animationstart"),
          ro = rt("transitionend"),
          ra = new Map(),
          rs =
          "abort auxClick cancel canPlay canPlayThrough click close contextMenu copy cut drag dragEnd dragEnter dragExit dragLeave dragOver dragStart drop durationChange emptied encrypted ended error gotPointerCapture input invalid keyDown keyPress keyUp load loadedData loadedMetadata loadStart lostPointerCapture mouseDown mouseMove mouseOut mouseOver mouseUp paste pause play playing pointerCancel pointerDown pointerMove pointerOut pointerOver pointerUp progress rateChange reset resize seeked seeking stalled submit suspend timeUpdate touchCancel touchEnd touchStart volumeChange scroll toggle touchMove waiting wheel".split(
            " "
          );

        function rl(e, t) {
          ra.set(e, t), h(t, [e]);
        }
        for (var ru = 0; ru < rs.length; ru++) {
          var rc = rs[ru];
          rl(rc.toLowerCase(), "on" + (rc[0].toUpperCase() + rc.slice(1)));
        }
        rl(rn, "onAnimationEnd"),
          rl(rr, "onAnimationIteration"),
          rl(ri, "onAnimationStart"),
          rl("dblclick", "onDoubleClick"),
          rl("focusin", "onFocus"),
          rl("focusout", "onBlur"),
          rl(ro, "onTransitionEnd"),
          m("onMouseEnter", ["mouseout", "mouseover"]),
          m("onMouseLeave", ["mouseout", "mouseover"]),
          m("onPointerEnter", ["pointerout", "pointerover"]),
          m("onPointerLeave", ["pointerout", "pointerover"]),
          h(
            "onChange",
            "change click focusin focusout input keydown keyup selectionchange".split(
              " "
            )
          ),
          h(
            "onSelect",
            "focusout contextmenu dragend focusin keydown keyup mousedown mouseup selectionchange".split(
              " "
            )
          ),
          h("onBeforeInput", [
            "compositionend",
            "keypress",
            "textInput",
            "paste",
          ]),
          h(
            "onCompositionEnd",
            "compositionend focusout keydown keypress keyup mousedown".split(
              " "
            )
          ),
          h(
            "onCompositionStart",
            "compositionstart focusout keydown keypress keyup mousedown".split(
              " "
            )
          ),
          h(
            "onCompositionUpdate",
            "compositionupdate focusout keydown keypress keyup mousedown".split(
              " "
            )
          );
        var rp =
          "abort canplay canplaythrough durationchange emptied encrypted ended error loadeddata loadedmetadata loadstart pause play playing progress ratechange resize seeked seeking stalled suspend timeupdate volumechange waiting".split(
            " "
          ),
          rd = new Set(
            "cancel close invalid load scroll toggle".split(" ").concat(rp)
          );

        function rf(e, t, n) {
          var r = e.type || "unknown-event";
          (e.currentTarget = n),
          (function(e, t, n, r, i, o, a, s, l) {
            if ((e3.apply(this, arguments), eJ)) {
              if (eJ) {
                var u = eZ;
                (eJ = !1), (eZ = null);
              } else throw Error(p(198));
              e0 || ((e0 = !0), (e1 = u));
            }
          })(r, t, void 0, e),
          (e.currentTarget = null);
        }

        function rh(e, t) {
          t = 0 != (4 & t);
          for (var n = 0; n < e.length; n++) {
            var r = e[n],
              i = r.event;
            r = r.listeners;
            e: {
              var o = void 0;
              if (t)
                for (var a = r.length - 1; 0 <= a; a--) {
                  var s = r[a],
                    l = s.instance,
                    u = s.currentTarget;
                  if (((s = s.listener), l !== o && i.isPropagationStopped()))
                    break e;
                  rf(i, s, u), (o = l);
                }
              else
                for (a = 0; a < r.length; a++) {
                  if (
                    ((l = (s = r[a]).instance),
                      (u = s.currentTarget),
                      (s = s.listener),
                      l !== o && i.isPropagationStopped())
                  )
                    break e;
                  rf(i, s, u), (o = l);
                }
            }
          }
          if (e0) throw ((e = e1), (e0 = !1), (e1 = null), e);
        }

        function rm(e, t) {
          var n = t[rW];
          void 0 === n && (n = t[rW] = new Set());
          var r = e + "__bubble";
          n.has(r) || (rb(t, e, 2, !1), n.add(r));
        }

        function ry(e, t, n) {
          var r = 0;
          t && (r |= 4), rb(n, e, r, t);
        }
        var rg = "_reactListening" + Math.random().toString(36).slice(2);

        function rv(e) {
          if (!e[rg]) {
            (e[rg] = !0),
            d.forEach(function(t) {
              "selectionchange" !== t &&
                (rd.has(t) || ry(t, !1, e), ry(t, !0, e));
            });
            var t = 9 === e.nodeType ? e : e.ownerDocument;
            null === t ||
              t[rg] ||
              ((t[rg] = !0), ry("selectionchange", !1, t));
          }
        }

        function rb(e, t, n, r) {
          switch (t0(t)) {
            case 1:
              var i = tX;
              break;
            case 4:
              i = tY;
              break;
            default:
              i = tG;
          }
          (n = i.bind(null, t, n, e)),
          (i = void 0),
          eX &&
            ("touchstart" === t || "touchmove" === t || "wheel" === t) &&
            (i = !0),
            r ?
            void 0 !== i ?
            e.addEventListener(t, n, {
              capture: !0,
              passive: i
            }) :
            e.addEventListener(t, n, !0) :
            void 0 !== i ?
            e.addEventListener(t, n, {
              passive: i
            }) :
            e.addEventListener(t, n, !1);
        }

        function rw(e, t, n, r, i) {
          var o = r;
          if (0 == (1 & t) && 0 == (2 & t) && null !== r)
            e: for (;;) {
              if (null === r) return;
              var a = r.tag;
              if (3 === a || 4 === a) {
                var s = r.stateNode.containerInfo;
                if (s === i || (8 === s.nodeType && s.parentNode === i))
                  break;
                if (4 === a)
                  for (a = r.return; null !== a;) {
                    var l = a.tag;
                    if (
                      (3 === l || 4 === l) &&
                      ((l = a.stateNode.containerInfo) === i ||
                        (8 === l.nodeType && l.parentNode === i))
                    )
                      return;
                    a = a.return;
                  }
                for (; null !== s;) {
                  if (null === (a = rQ(s))) return;
                  if (5 === (l = a.tag) || 6 === l) {
                    r = o = a;
                    continue e;
                  }
                  s = s.parentNode;
                }
              }
              r = r.return;
            }
          eK(function() {
            var r = o,
              i = eI(n),
              a = [];
            e: {
              var s = ra.get(e);
              if (void 0 !== s) {
                var l = nr,
                  u = e;
                switch (e) {
                  case "keypress":
                    if (0 === t5(n)) break e;
                  case "keydown":
                  case "keyup":
                    l = nv;
                    break;
                  case "focusin":
                    (u = "focus"), (l = nu);
                    break;
                  case "focusout":
                    (u = "blur"), (l = nu);
                    break;
                  case "beforeblur":
                  case "afterblur":
                    l = nu;
                    break;
                  case "click":
                    if (2 === n.button) break e;
                  case "auxclick":
                  case "dblclick":
                  case "mousedown":
                  case "mousemove":
                  case "mouseup":
                  case "mouseout":
                  case "mouseover":
                  case "contextmenu":
                    l = ns;
                    break;
                  case "drag":
                  case "dragend":
                  case "dragenter":
                  case "dragexit":
                  case "dragleave":
                  case "dragover":
                  case "dragstart":
                  case "drop":
                    l = nl;
                    break;
                  case "touchcancel":
                  case "touchend":
                  case "touchmove":
                  case "touchstart":
                    l = nw;
                    break;
                  case rn:
                  case rr:
                  case ri:
                    l = nc;
                    break;
                  case ro:
                    l = nx;
                    break;
                  case "scroll":
                    l = no;
                    break;
                  case "wheel":
                    l = nS;
                    break;
                  case "copy":
                  case "cut":
                  case "paste":
                    l = np;
                    break;
                  case "gotpointercapture":
                  case "lostpointercapture":
                  case "pointercancel":
                  case "pointerdown":
                  case "pointermove":
                  case "pointerout":
                  case "pointerover":
                  case "pointerup":
                    l = nb;
                }
                var c = 0 != (4 & t),
                  p = !c && "scroll" === e,
                  d = c ? (null !== s ? s + "Capture" : null) : s;
                c = [];
                for (var f, h = r; null !== h;) {
                  var m = (f = h).stateNode;
                  if (
                    (5 === f.tag &&
                      null !== m &&
                      ((f = m),
                        null !== d &&
                        null != (m = eQ(h, d)) &&
                        c.push(rx(h, m, f))),
                      p)
                  )
                    break;
                  h = h.return;
                }
                0 < c.length &&
                  ((s = new l(s, u, null, n, i)),
                    a.push({
                      event: s,
                      listeners: c
                    }));
              }
            }
            if (0 == (7 & t)) {
              if (
                ((s = "mouseover" === e || "pointerover" === e),
                  (l = "mouseout" === e || "pointerout" === e),
                  !(
                    s &&
                    n !== eL &&
                    (u = n.relatedTarget || n.fromElement) &&
                    (rQ(u) || u[rH])
                  ) &&
                  (l || s) &&
                  ((s =
                      i.window === i ?
                      i :
                      (s = i.ownerDocument) ?
                      s.defaultView || s.parentWindow :
                      window),
                    l ?
                    ((u = n.relatedTarget || n.toElement),
                      (l = r),
                      null !== (u = u ? rQ(u) : null) &&
                      ((p = e4(u)),
                        u !== p || (5 !== u.tag && 6 !== u.tag)) &&
                      (u = null)) :
                    ((l = null), (u = r)),
                    l !== u))
              ) {
                if (
                  ((c = ns),
                    (m = "onMouseLeave"),
                    (d = "onMouseEnter"),
                    (h = "mouse"),
                    ("pointerout" === e || "pointerover" === e) &&
                    ((c = nb),
                      (m = "onPointerLeave"),
                      (d = "onPointerEnter"),
                      (h = "pointer")),
                    (p = null == l ? s : rY(l)),
                    (f = null == u ? s : rY(u)),
                    ((s = new c(m, h + "leave", l, n, i)).target = p),
                    (s.relatedTarget = f),
                    (m = null),
                    rQ(i) === r &&
                    (((c = new c(d, h + "enter", u, n, i)).target = f),
                      (c.relatedTarget = p),
                      (m = c)),
                    (p = m),
                    l && u)
                )
                  t: {
                    for (c = l, d = u, h = 0, f = c; f; f = rk(f)) h++;
                    for (f = 0, m = d; m; m = rk(m)) f++;
                    for (; 0 < h - f;)(c = rk(c)),
                    h--;
                    for (; 0 < f - h;)(d = rk(d)),
                    f--;
                    for (; h--;) {
                      if (c === d || (null !== d && c === d.alternate))
                        break t;
                      (c = rk(c)), (d = rk(d));
                    }
                    c = null;
                  }
                else c = null;
                null !== l && r_(a, s, l, c, !1),
                  null !== u && null !== p && r_(a, p, u, c, !0);
              }
              e: {
                if (
                  "select" ===
                  (l =
                    (s = r ? rY(r) : window).nodeName &&
                    s.nodeName.toLowerCase()) ||
                  ("input" === l && "file" === s.type)
                )
                  var y,
                    g = nF;
                else if (nR(s)) {
                  if (nV) g = nQ;
                  else {
                    g = n$;
                    var v = nW;
                  }
                } else
                  (l = s.nodeName) &&
                  "input" === l.toLowerCase() &&
                  ("checkbox" === s.type || "radio" === s.type) &&
                  (g = nK);
                if (g && (g = g(e, r))) {
                  nM(a, g, n, i);
                  break e;
                }
                v && v(e, s, r),
                "focusout" === e &&
                (v = s._wrapperState) &&
                v.controlled &&
                "number" === s.type &&
                ey(s, "number", s.value);
              }
              switch (((v = r ? rY(r) : window), e)) {
                case "focusin":
                  (nR(v) || "true" === v.contentEditable) &&
                  ((n2 = v), (n3 = r), (n4 = null));
                  break;
                case "focusout":
                  n4 = n3 = n2 = null;
                  break;
                case "mousedown":
                  n5 = !0;
                  break;
                case "contextmenu":
                case "mouseup":
                case "dragend":
                  (n5 = !1), n6(a, n, i);
                  break;
                case "selectionchange":
                  if (n1) break;
                case "keydown":
                case "keyup":
                  n6(a, n, i);
              }
              if (n_)
                t: {
                  switch (e) {
                    case "compositionstart":
                      var b = "onCompositionStart";
                      break t;
                    case "compositionend":
                      b = "onCompositionEnd";
                      break t;
                    case "compositionupdate":
                      b = "onCompositionUpdate";
                      break t;
                  }
                  b = void 0;
                }
              else
                nj ?
                nO(e, n) && (b = "onCompositionEnd") :
                "keydown" === e &&
                229 === n.keyCode &&
                (b = "onCompositionStart");
              b &&
                (nC &&
                  "ko" !== n.locale &&
                  (nj || "onCompositionStart" !== b ?
                    "onCompositionEnd" === b && nj && (y = t4()) :
                    ((t2 = "value" in (t1 = i) ? t1.value : t1.textContent),
                      (nj = !0))),
                  0 < (v = rS(r, b)).length &&
                  ((b = new nd(b, e, null, n, i)),
                    a.push({
                      event: b,
                      listeners: v
                    }),
                    y ? (b.data = y) : null !== (y = nA(n)) && (b.data = y))),
                (y = nE ?
                  (function(e, t) {
                    switch (e) {
                      case "compositionend":
                        return nA(t);
                      case "keypress":
                        if (32 !== t.which) return null;
                        return (nP = !0), " ";
                      case "textInput":
                        return " " === (e = t.data) && nP ? null : e;
                      default:
                        return null;
                    }
                  })(e, n) :
                  (function(e, t) {
                    if (nj)
                      return "compositionend" === e || (!n_ && nO(e, t)) ?
                        ((e = t4()), (t3 = t2 = t1 = null), (nj = !1), e) :
                        null;
                    switch (e) {
                      case "paste":
                      default:
                        return null;
                      case "keypress":
                        if (
                          !(t.ctrlKey || t.altKey || t.metaKey) ||
                          (t.ctrlKey && t.altKey)
                        ) {
                          if (t.char && 1 < t.char.length) return t.char;
                          if (t.which) return String.fromCharCode(t.which);
                        }
                        return null;
                      case "compositionend":
                        return nC && "ko" !== t.locale ? null : t.data;
                    }
                  })(e, n)) &&
                0 < (r = rS(r, "onBeforeInput")).length &&
                ((i = new nd("onBeforeInput", "beforeinput", null, n, i)),
                  a.push({
                    event: i,
                    listeners: r
                  }),
                  (i.data = y));
            }
            rh(a, t);
          });
        }

        function rx(e, t, n) {
          return {
            instance: e,
            listener: t,
            currentTarget: n
          };
        }

        function rS(e, t) {
          for (var n = t + "Capture", r = []; null !== e;) {
            var i = e,
              o = i.stateNode;
            5 === i.tag &&
              null !== o &&
              ((i = o),
                null != (o = eQ(e, n)) && r.unshift(rx(e, o, i)),
                null != (o = eQ(e, t)) && r.push(rx(e, o, i))),
              (e = e.return);
          }
          return r;
        }

        function rk(e) {
          if (null === e) return null;
          do e = e.return;
          while (e && 5 !== e.tag);
          return e || null;
        }

        function r_(e, t, n, r, i) {
          for (var o = t._reactName, a = []; null !== n && n !== r;) {
            var s = n,
              l = s.alternate,
              u = s.stateNode;
            if (null !== l && l === r) break;
            5 === s.tag &&
              null !== u &&
              ((s = u),
                i ?
                null != (l = eQ(n, o)) && a.unshift(rx(n, l, s)) :
                i || (null != (l = eQ(n, o)) && a.push(rx(n, l, s)))),
              (n = n.return);
          }
          0 !== a.length && e.push({
            event: t,
            listeners: a
          });
        }
        var rT = /\r\n?/g,
          rE = /\u0000|\uFFFD/g;

        function rC(e) {
          return ("string" == typeof e ? e : "" + e)
            .replace(rT, "\n")
            .replace(rE, "");
        }

        function rP(e, t, n) {
          if (((t = rC(t)), rC(e) !== t && n)) throw Error(p(425));
        }

        function rO() {}
        var rA = null,
          rj = null;

        function rD(e, t) {
          return (
            "textarea" === e ||
            "noscript" === e ||
            "string" == typeof t.children ||
            "number" == typeof t.children ||
            ("object" == typeof t.dangerouslySetInnerHTML &&
              null !== t.dangerouslySetInnerHTML &&
              null != t.dangerouslySetInnerHTML.__html)
          );
        }
        var rR = "function" == typeof setTimeout ? setTimeout : void 0,
          rM = "function" == typeof clearTimeout ? clearTimeout : void 0,
          rN = "function" == typeof Promise ? Promise : void 0,
          rL =
          "function" == typeof queueMicrotask ?
          queueMicrotask :
          void 0 !== rN ?
          function(e) {
            return rN.resolve(null).then(e).catch(rI);
          } :
          rR;

        function rI(e) {
          setTimeout(function() {
            throw e;
          });
        }

        function rU(e, t) {
          var n = t,
            r = 0;
          do {
            var i = n.nextSibling;
            if ((e.removeChild(n), i && 8 === i.nodeType)) {
              if ("/$" === (n = i.data)) {
                if (0 === r) {
                  e.removeChild(i), t$(t);
                  return;
                }
                r--;
              } else("$" !== n && "$?" !== n && "$!" !== n) || r++;
            }
            n = i;
          } while (n);
          t$(t);
        }

        function rF(e) {
          for (; null != e; e = e.nextSibling) {
            var t = e.nodeType;
            if (1 === t || 3 === t) break;
            if (8 === t) {
              if ("$" === (t = e.data) || "$!" === t || "$?" === t) break;
              if ("/$" === t) return null;
            }
          }
          return e;
        }

        function rV(e) {
          e = e.previousSibling;
          for (var t = 0; e;) {
            if (8 === e.nodeType) {
              var n = e.data;
              if ("$" === n || "$!" === n || "$?" === n) {
                if (0 === t) return e;
                t--;
              } else "/$" === n && t++;
            }
            e = e.previousSibling;
          }
          return null;
        }
        var rz = Math.random().toString(36).slice(2),
          rB = "__reactFiber$" + rz,
          rq = "__reactProps$" + rz,
          rH = "__reactContainer$" + rz,
          rW = "__reactEvents$" + rz,
          r$ = "__reactListeners$" + rz,
          rK = "__reactHandles$" + rz;

        function rQ(e) {
          var t = e[rB];
          if (t) return t;
          for (var n = e.parentNode; n;) {
            if ((t = n[rH] || n[rB])) {
              if (
                ((n = t.alternate),
                  null !== t.child || (null !== n && null !== n.child))
              )
                for (e = rV(e); null !== e;) {
                  if ((n = e[rB])) return n;
                  e = rV(e);
                }
              return t;
            }
            n = (e = n).parentNode;
          }
          return null;
        }

        function rX(e) {
          return (e = e[rB] || e[rH]) &&
            (5 === e.tag || 6 === e.tag || 13 === e.tag || 3 === e.tag) ?
            e :
            null;
        }

        function rY(e) {
          if (5 === e.tag || 6 === e.tag) return e.stateNode;
          throw Error(p(33));
        }

        function rG(e) {
          return e[rq] || null;
        }
        var rJ = [],
          rZ = -1;

        function r0(e) {
          return {
            current: e
          };
        }

        function r1(e) {
          0 > rZ || ((e.current = rJ[rZ]), (rJ[rZ] = null), rZ--);
        }

        function r2(e, t) {
          (rJ[++rZ] = e.current), (e.current = t);
        }
        var r3 = {},
          r4 = r0(r3),
          r5 = r0(!1),
          r6 = r3;

        function r8(e, t) {
          var n = e.type.contextTypes;
          if (!n) return r3;
          var r = e.stateNode;
          if (r && r.__reactInternalMemoizedUnmaskedChildContext === t)
            return r.__reactInternalMemoizedMaskedChildContext;
          var i,
            o = {};
          for (i in n) o[i] = t[i];
          return (
            r &&
            (((e =
                e.stateNode).__reactInternalMemoizedUnmaskedChildContext = t),
              (e.__reactInternalMemoizedMaskedChildContext = o)),
            o
          );
        }

        function r9(e) {
          return null != (e = e.childContextTypes);
        }

        function r7() {
          r1(r5), r1(r4);
        }

        function ie(e, t, n) {
          if (r4.current !== r3) throw Error(p(168));
          r2(r4, t), r2(r5, n);
        }

        function it(e, t, n) {
          var r = e.stateNode;
          if (
            ((t = t.childContextTypes),
              "function" != typeof r.getChildContext)
          )
            return n;
          for (var i in (r = r.getChildContext()))
            if (!(i in t))
              throw Error(
                p(
                  108,
                  (function(e) {
                    var t = e.type;
                    switch (e.tag) {
                      case 24:
                        return "Cache";
                      case 9:
                        return (t.displayName || "Context") + ".Consumer";
                      case 10:
                        return (
                          (t._context.displayName || "Context") + ".Provider"
                        );
                      case 18:
                        return "DehydratedFragment";
                      case 11:
                        return (
                          (e = (e = t.render).displayName || e.name || ""),
                          t.displayName ||
                          ("" !== e ?
                            "ForwardRef(" + e + ")" :
                            "ForwardRef")
                        );
                      case 7:
                        return "Fragment";
                      case 5:
                        return t;
                      case 4:
                        return "Portal";
                      case 3:
                        return "Root";
                      case 6:
                        return "Text";
                      case 16:
                        return (function e(t) {
                          if (null == t) return null;
                          if ("function" == typeof t)
                            return t.displayName || t.name || null;
                          if ("string" == typeof t) return t;
                          switch (t) {
                            case O:
                              return "Fragment";
                            case P:
                              return "Portal";
                            case j:
                              return "Profiler";
                            case A:
                              return "StrictMode";
                            case L:
                              return "Suspense";
                            case I:
                              return "SuspenseList";
                          }
                          if ("object" == typeof t)
                            switch (t.$$typeof) {
                              case M:
                                return (
                                  (t.displayName || "Context") + ".Consumer"
                                );
                              case D:
                                return (
                                  (t._context.displayName || "Context") +
                                  ".Provider"
                                );
                              case N:
                                var n = t.render;
                                return (
                                  (t = t.displayName) ||
                                  (t =
                                    "" !==
                                    (t = n.displayName || n.name || "") ?
                                    "ForwardRef(" + t + ")" :
                                    "ForwardRef"),
                                  t
                                );
                              case U:
                                return null !== (n = t.displayName || null) ?
                                  n :
                                  e(t.type) || "Memo";
                              case F:
                                (n = t._payload), (t = t._init);
                                try {
                                  return e(t(n));
                                } catch (e) {}
                            }
                          return null;
                        })(t);
                      case 8:
                        return t === A ? "StrictMode" : "Mode";
                      case 22:
                        return "Offscreen";
                      case 12:
                        return "Profiler";
                      case 21:
                        return "Scope";
                      case 13:
                        return "Suspense";
                      case 19:
                        return "SuspenseList";
                      case 25:
                        return "TracingMarker";
                      case 1:
                      case 0:
                      case 17:
                      case 2:
                      case 14:
                      case 15:
                        if ("function" == typeof t)
                          return t.displayName || t.name || null;
                        if ("string" == typeof t) return t;
                    }
                    return null;
                  })(e) || "Unknown",
                  i
                )
              );
          return en({}, n, r);
        }

        function ir(e) {
          return (
            (e =
              ((e = e.stateNode) &&
                e.__reactInternalMemoizedMergedChildContext) ||
              r3),
            (r6 = r4.current),
            r2(r4, e),
            r2(r5, r5.current),
            !0
          );
        }

        function ii(e, t, n) {
          var r = e.stateNode;
          if (!r) throw Error(p(169));
          n
            ?
            ((e = it(e, t, r6)),
              (r.__reactInternalMemoizedMergedChildContext = e),
              r1(r5),
              r1(r4),
              r2(r4, e)) :
            r1(r5),
            r2(r5, n);
        }
        var io = null,
          ia = !1,
          is = !1;

        function il(e) {
          null === io ? (io = [e]) : io.push(e);
        }

        function iu() {
          if (!is && null !== io) {
            is = !0;
            var e = 0,
              t = tk;
            try {
              var n = io;
              for (tk = 1; e < n.length; e++) {
                var r = n[e];
                do r = r(!0);
                while (null !== r);
              }
              (io = null), (ia = !1);
            } catch (t) {
              throw (null !== io && (io = io.slice(e + 1)), e9(ti, iu), t);
            } finally {
              (tk = t), (is = !1);
            }
          }
          return null;
        }
        var ic = [],
          ip = 0,
          id = null,
          ih = 0,
          im = [],
          iy = 0,
          ig = null,
          iv = 1,
          ib = "";

        function iw(e, t) {
          (ic[ip++] = ih), (ic[ip++] = id), (id = e), (ih = t);
        }

        function ix(e, t, n) {
          (im[iy++] = iv), (im[iy++] = ib), (im[iy++] = ig), (ig = e);
          var r = iv;
          e = ib;
          var i = 32 - tp(r) - 1;
          (r &= ~(1 << i)), (n += 1);
          var o = 32 - tp(t) + i;
          if (30 < o) {
            var a = i - (i % 5);
            (o = (r & ((1 << a) - 1)).toString(32)),
            (r >>= a),
            (i -= a),
            (iv = (1 << (32 - tp(t) + i)) | (n << i) | r),
            (ib = o + e);
          } else(iv = (1 << o) | (n << i) | r), (ib = e);
        }

        function iS(e) {
          null !== e.return && (iw(e, 1), ix(e, 1, 0));
        }

        function ik(e) {
          for (; e === id;)
            (id = ic[--ip]),
            (ic[ip] = null),
            (ih = ic[--ip]),
            (ic[ip] = null);
          for (; e === ig;)
            (ig = im[--iy]),
            (im[iy] = null),
            (ib = im[--iy]),
            (im[iy] = null),
            (iv = im[--iy]),
            (im[iy] = null);
        }
        var i_ = null,
          iT = null,
          iE = !1,
          iC = null;

        function iP(e, t) {
          var n = s9(5, null, null, 0);
          (n.elementType = "DELETED"),
          (n.stateNode = t),
          (n.return = e),
          null === (t = e.deletions) ?
            ((e.deletions = [n]), (e.flags |= 16)) :
            t.push(n);
        }

        function iO(e, t) {
          switch (e.tag) {
            case 5:
              var n = e.type;
              return (
                null !==
                (t =
                  1 !== t.nodeType ||
                  n.toLowerCase() !== t.nodeName.toLowerCase() ?
                  null :
                  t) &&
                ((e.stateNode = t), (i_ = e), (iT = rF(t.firstChild)), !0)
              );
            case 6:
              return (
                null !==
                (t =
                  "" === e.pendingProps || 3 !== t.nodeType ? null : t) &&
                ((e.stateNode = t), (i_ = e), (iT = null), !0)
              );
            case 13:
              return (
                null !== (t = 8 !== t.nodeType ? null : t) &&
                ((n = null !== ig ? {
                    id: iv,
                    overflow: ib
                  } : null),
                  (e.memoizedState = {
                    dehydrated: t,
                    treeContext: n,
                    retryLane: 1073741824,
                  }),
                  ((n = s9(18, null, null, 0)).stateNode = t),
                  (n.return = e),
                  (e.child = n),
                  (i_ = e),
                  (iT = null),
                  !0)
              );
            default:
              return !1;
          }
        }

        function iA(e) {
          return 0 != (1 & e.mode) && 0 == (128 & e.flags);
        }

        function ij(e) {
          if (iE) {
            var t = iT;
            if (t) {
              var n = t;
              if (!iO(e, t)) {
                if (iA(e)) throw Error(p(418));
                t = rF(n.nextSibling);
                var r = i_;
                t && iO(e, t) ?
                  iP(r, n) :
                  ((e.flags = (-4097 & e.flags) | 2), (iE = !1), (i_ = e));
              }
            } else {
              if (iA(e)) throw Error(p(418));
              (e.flags = (-4097 & e.flags) | 2), (iE = !1), (i_ = e);
            }
          }
        }

        function iD(e) {
          for (
            e = e.return; null !== e && 5 !== e.tag && 3 !== e.tag && 13 !== e.tag;

          )
            e = e.return;
          i_ = e;
        }

        function iR(e) {
          if (e !== i_) return !1;
          if (!iE) return iD(e), (iE = !0), !1;
          if (
            ((t = 3 !== e.tag) &&
              !(t = 5 !== e.tag) &&
              (t =
                "head" !== (t = e.type) &&
                "body" !== t &&
                !rD(e.type, e.memoizedProps)),
              t && (t = iT))
          ) {
            if (iA(e)) throw (iM(), Error(p(418)));
            for (; t;) iP(e, t), (t = rF(t.nextSibling));
          }
          if ((iD(e), 13 === e.tag)) {
            if (!(e = null !== (e = e.memoizedState) ? e.dehydrated : null))
              throw Error(p(317));
            e: {
              for (t = 0, e = e.nextSibling; e;) {
                if (8 === e.nodeType) {
                  var t,
                    n = e.data;
                  if ("/$" === n) {
                    if (0 === t) {
                      iT = rF(e.nextSibling);
                      break e;
                    }
                    t--;
                  } else("$" !== n && "$!" !== n && "$?" !== n) || t++;
                }
                e = e.nextSibling;
              }
              iT = null;
            }
          } else iT = i_ ? rF(e.stateNode.nextSibling) : null;
          return !0;
        }

        function iM() {
          for (var e = iT; e;) e = rF(e.nextSibling);
        }

        function iN() {
          (iT = i_ = null), (iE = !1);
        }

        function iL(e) {
          null === iC ? (iC = [e]) : iC.push(e);
        }
        var iI = E.ReactCurrentBatchConfig;

        function iU(e, t) {
          if (e && e.defaultProps)
            for (var n in ((t = en({}, t)), (e = e.defaultProps)))
              void 0 === t[n] && (t[n] = e[n]);
          return t;
        }
        var iF = r0(null),
          iV = null,
          iz = null,
          iB = null;

        function iq() {
          iB = iz = iV = null;
        }

        function iH(e) {
          var t = iF.current;
          r1(iF), (e._currentValue = t);
        }

        function iW(e, t, n) {
          for (; null !== e;) {
            var r = e.alternate;
            if (
              ((e.childLanes & t) !== t ?
                ((e.childLanes |= t), null !== r && (r.childLanes |= t)) :
                null !== r &&
                (r.childLanes & t) !== t &&
                (r.childLanes |= t),
                e === n)
            )
              break;
            e = e.return;
          }
        }

        function i$(e, t) {
          (iV = e),
          (iB = iz = null),
          null !== (e = e.dependencies) &&
            null !== e.firstContext &&
            (0 != (e.lanes & t) && (ax = !0), (e.firstContext = null));
        }

        function iK(e) {
          var t = e._currentValue;
          if (iB !== e) {
            if (
              ((e = {
                  context: e,
                  memoizedValue: t,
                  next: null
                }),
                null === iz)
            ) {
              if (null === iV) throw Error(p(308));
              (iz = e), (iV.dependencies = {
                lanes: 0,
                firstContext: e
              });
            } else iz = iz.next = e;
          }
          return t;
        }
        var iQ = null;

        function iX(e) {
          null === iQ ? (iQ = [e]) : iQ.push(e);
        }

        function iY(e, t, n, r) {
          var i = t.interleaved;
          return (
            null === i ?
            ((n.next = n), iX(t)) :
            ((n.next = i.next), (i.next = n)),
            (t.interleaved = n),
            iG(e, r)
          );
        }

        function iG(e, t) {
          e.lanes |= t;
          var n = e.alternate;
          for (
            null !== n && (n.lanes |= t), n = e, e = e.return; null !== e;

          )
            (e.childLanes |= t),
            null !== (n = e.alternate) && (n.childLanes |= t),
            (n = e),
            (e = e.return);
          return 3 === n.tag ? n.stateNode : null;
        }
        var iJ = !1;

        function iZ(e) {
          e.updateQueue = {
            baseState: e.memoizedState,
            firstBaseUpdate: null,
            lastBaseUpdate: null,
            shared: {
              pending: null,
              interleaved: null,
              lanes: 0
            },
            effects: null,
          };
        }

        function i0(e, t) {
          (e = e.updateQueue),
          t.updateQueue === e &&
            (t.updateQueue = {
              baseState: e.baseState,
              firstBaseUpdate: e.firstBaseUpdate,
              lastBaseUpdate: e.lastBaseUpdate,
              shared: e.shared,
              effects: e.effects,
            });
        }

        function i1(e, t) {
          return {
            eventTime: e,
            lane: t,
            tag: 0,
            payload: null,
            callback: null,
            next: null,
          };
        }

        function i2(e, t, n) {
          var r = e.updateQueue;
          if (null === r) return null;
          if (((r = r.shared), 0 != (2 & sl))) {
            var i = r.pending;
            return (
              null === i ? (t.next = t) : ((t.next = i.next), (i.next = t)),
              (r.pending = t),
              iG(e, n)
            );
          }
          return (
            null === (i = r.interleaved) ?
            ((t.next = t), iX(r)) :
            ((t.next = i.next), (i.next = t)),
            (r.interleaved = t),
            iG(e, n)
          );
        }

        function i3(e, t, n) {
          if (
            null !== (t = t.updateQueue) &&
            ((t = t.shared), 0 != (4194240 & n))
          ) {
            var r = t.lanes;
            (r &= e.pendingLanes), (n |= r), (t.lanes = n), tS(e, n);
          }
        }

        function i4(e, t) {
          var n = e.updateQueue,
            r = e.alternate;
          if (null !== r && n === (r = r.updateQueue)) {
            var i = null,
              o = null;
            if (null !== (n = n.firstBaseUpdate)) {
              do {
                var a = {
                  eventTime: n.eventTime,
                  lane: n.lane,
                  tag: n.tag,
                  payload: n.payload,
                  callback: n.callback,
                  next: null,
                };
                null === o ? (i = o = a) : (o = o.next = a), (n = n.next);
              } while (null !== n);
              null === o ? (i = o = t) : (o = o.next = t);
            } else i = o = t;
            (n = {
              baseState: r.baseState,
              firstBaseUpdate: i,
              lastBaseUpdate: o,
              shared: r.shared,
              effects: r.effects,
            }),
            (e.updateQueue = n);
            return;
          }
          null === (e = n.lastBaseUpdate) ?
            (n.firstBaseUpdate = t) :
            (e.next = t),
            (n.lastBaseUpdate = t);
        }

        function i5(e, t, n, r) {
          var i = e.updateQueue;
          iJ = !1;
          var o = i.firstBaseUpdate,
            a = i.lastBaseUpdate,
            s = i.shared.pending;
          if (null !== s) {
            i.shared.pending = null;
            var l = s,
              u = l.next;
            (l.next = null), null === a ? (o = u) : (a.next = u), (a = l);
            var c = e.alternate;
            null !== c &&
              (s = (c = c.updateQueue).lastBaseUpdate) !== a &&
              (null === s ? (c.firstBaseUpdate = u) : (s.next = u),
                (c.lastBaseUpdate = l));
          }
          if (null !== o) {
            var p = i.baseState;
            for (a = 0, c = u = l = null, s = o;;) {
              var d = s.lane,
                f = s.eventTime;
              if ((r & d) === d) {
                null !== c &&
                  (c = c.next = {
                    eventTime: f,
                    lane: 0,
                    tag: s.tag,
                    payload: s.payload,
                    callback: s.callback,
                    next: null,
                  });
                e: {
                  var h = e,
                    m = s;
                  switch (((d = t), (f = n), m.tag)) {
                    case 1:
                      if ("function" == typeof(h = m.payload)) {
                        p = h.call(f, p, d);
                        break e;
                      }
                      p = h;
                      break e;
                    case 3:
                      h.flags = (-65537 & h.flags) | 128;
                    case 0:
                      if (
                        null ==
                        (d =
                          "function" == typeof(h = m.payload) ?
                          h.call(f, p, d) :
                          h)
                      )
                        break e;
                      p = en({}, p, d);
                      break e;
                    case 2:
                      iJ = !0;
                  }
                }
                null !== s.callback &&
                  0 !== s.lane &&
                  ((e.flags |= 64),
                    null === (d = i.effects) ? (i.effects = [s]) : d.push(s));
              } else
                (f = {
                  eventTime: f,
                  lane: d,
                  tag: s.tag,
                  payload: s.payload,
                  callback: s.callback,
                  next: null,
                }),
                null === c ? ((u = c = f), (l = p)) : (c = c.next = f),
                (a |= d);
              if (null === (s = s.next)) {
                if (null === (s = i.shared.pending)) break;
                (s = (d = s).next),
                (d.next = null),
                (i.lastBaseUpdate = d),
                (i.shared.pending = null);
              }
            }
            if (
              (null === c && (l = p),
                (i.baseState = l),
                (i.firstBaseUpdate = u),
                (i.lastBaseUpdate = c),
                null !== (t = i.shared.interleaved))
            ) {
              i = t;
              do(a |= i.lane), (i = i.next);
              while (i !== t);
            } else null === o && (i.shared.lanes = 0);
            (sy |= a), (e.lanes = a), (e.memoizedState = p);
          }
        }

        function i6(e, t, n) {
          if (((e = t.effects), (t.effects = null), null !== e))
            for (t = 0; t < e.length; t++) {
              var r = e[t],
                i = r.callback;
              if (null !== i) {
                if (((r.callback = null), (r = n), "function" != typeof i))
                  throw Error(p(191, i));
                i.call(r);
              }
            }
        }
        var i8 = new u.Component().refs;

        function i9(e, t, n, r) {
          (n = null == (n = n(r, (t = e.memoizedState))) ? t : en({}, t, n)),
          (e.memoizedState = n),
          0 === e.lanes && (e.updateQueue.baseState = n);
        }
        var i7 = {
          isMounted: function(e) {
            return !!(e = e._reactInternals) && e4(e) === e;
          },
          enqueueSetState: function(e, t, n) {
            e = e._reactInternals;
            var r = sM(),
              i = sN(e),
              o = i1(r, i);
            (o.payload = t),
            null != n && (o.callback = n),
              null !== (t = i2(e, o, i)) && (sL(t, e, i, r), i3(t, e, i));
          },
          enqueueReplaceState: function(e, t, n) {
            e = e._reactInternals;
            var r = sM(),
              i = sN(e),
              o = i1(r, i);
            (o.tag = 1),
            (o.payload = t),
            null != n && (o.callback = n),
              null !== (t = i2(e, o, i)) && (sL(t, e, i, r), i3(t, e, i));
          },
          enqueueForceUpdate: function(e, t) {
            e = e._reactInternals;
            var n = sM(),
              r = sN(e),
              i = i1(n, r);
            (i.tag = 2),
            null != t && (i.callback = t),
              null !== (t = i2(e, i, r)) && (sL(t, e, r, n), i3(t, e, r));
          },
        };

        function oe(e, t, n, r, i, o, a) {
          return "function" == typeof(e = e.stateNode).shouldComponentUpdate ?
            e.shouldComponentUpdate(r, o, a) :
            !t.prototype ||
            !t.prototype.isPureReactComponent ||
            !nY(n, r) ||
            !nY(i, o);
        }

        function ot(e, t, n) {
          var r = !1,
            i = r3,
            o = t.contextType;
          return (
            "object" == typeof o && null !== o ?
            (o = iK(o)) :
            ((i = r9(t) ? r6 : r4.current),
              (o = (r = null != (r = t.contextTypes)) ? r8(e, i) : r3)),
            (t = new t(n, o)),
            (e.memoizedState =
              null !== t.state && void 0 !== t.state ? t.state : null),
            (t.updater = i7),
            (e.stateNode = t),
            (t._reactInternals = e),
            r &&
            (((e =
                e.stateNode).__reactInternalMemoizedUnmaskedChildContext = i),
              (e.__reactInternalMemoizedMaskedChildContext = o)),
            t
          );
        }

        function on(e, t, n, r) {
          (e = t.state),
          "function" == typeof t.componentWillReceiveProps &&
            t.componentWillReceiveProps(n, r),
            "function" == typeof t.UNSAFE_componentWillReceiveProps &&
            t.UNSAFE_componentWillReceiveProps(n, r),
            t.state !== e && i7.enqueueReplaceState(t, t.state, null);
        }

        function or(e, t, n, r) {
          var i = e.stateNode;
          (i.props = n), (i.state = e.memoizedState), (i.refs = i8), iZ(e);
          var o = t.contextType;
          "object" == typeof o && null !== o ?
            (i.context = iK(o)) :
            ((o = r9(t) ? r6 : r4.current), (i.context = r8(e, o))),
            (i.state = e.memoizedState),
            "function" == typeof(o = t.getDerivedStateFromProps) &&
            (i9(e, t, o, n), (i.state = e.memoizedState)),
            "function" == typeof t.getDerivedStateFromProps ||
            "function" == typeof i.getSnapshotBeforeUpdate ||
            ("function" != typeof i.UNSAFE_componentWillMount &&
              "function" != typeof i.componentWillMount) ||
            ((t = i.state),
              "function" == typeof i.componentWillMount &&
              i.componentWillMount(),
              "function" == typeof i.UNSAFE_componentWillMount &&
              i.UNSAFE_componentWillMount(),
              t !== i.state && i7.enqueueReplaceState(i, i.state, null),
              i5(e, n, i, r),
              (i.state = e.memoizedState)),
            "function" == typeof i.componentDidMount && (e.flags |= 4194308);
        }

        function oi(e, t, n) {
          if (
            null !== (e = n.ref) &&
            "function" != typeof e &&
            "object" != typeof e
          ) {
            if (n._owner) {
              if ((n = n._owner)) {
                if (1 !== n.tag) throw Error(p(309));
                var r = n.stateNode;
              }
              if (!r) throw Error(p(147, e));
              var i = r,
                o = "" + e;
              return null !== t &&
                null !== t.ref &&
                "function" == typeof t.ref &&
                t.ref._stringRef === o ?
                t.ref :
                (((t = function(e) {
                    var t = i.refs;
                    t === i8 && (t = i.refs = {}),
                      null === e ? delete t[o] : (t[o] = e);
                  })._stringRef = o),
                  t);
            }
            if ("string" != typeof e) throw Error(p(284));
            if (!n._owner) throw Error(p(290, e));
          }
          return e;
        }

        function oo(e, t) {
          throw Error(
            p(
              31,
              "[object Object]" === (e = Object.prototype.toString.call(t)) ?
              "object with keys {" + Object.keys(t).join(", ") + "}" :
              e
            )
          );
        }

        function oa(e) {
          return (0, e._init)(e._payload);
        }

        function os(e) {
          function t(t, n) {
            if (e) {
              var r = t.deletions;
              null === r ? ((t.deletions = [n]), (t.flags |= 16)) : r.push(n);
            }
          }

          function n(n, r) {
            if (!e) return null;
            for (; null !== r;) t(n, r), (r = r.sibling);
            return null;
          }

          function r(e, t) {
            for (e = new Map(); null !== t;)
              null !== t.key ? e.set(t.key, t) : e.set(t.index, t),
              (t = t.sibling);
            return e;
          }

          function i(e, t) {
            return ((e = le(e, t)).index = 0), (e.sibling = null), e;
          }

          function o(t, n, r) {
            return ((t.index = r), e) ?
              null !== (r = t.alternate) ?
              (r = r.index) < n ?
              ((t.flags |= 2), n) :
              r :
              ((t.flags |= 2), n) :
              ((t.flags |= 1048576), n);
          }

          function a(t) {
            return e && null === t.alternate && (t.flags |= 2), t;
          }

          function s(e, t, n, r) {
            return (
              null === t || 6 !== t.tag ?
              ((t = li(n, e.mode, r)).return = e) :
              ((t = i(t, n)).return = e),
              t
            );
          }

          function l(e, t, n, r) {
            var o = n.type;
            return o === O ?
              c(e, t, n.props.children, r, n.key) :
              (null !== t &&
                (t.elementType === o ||
                  ("object" == typeof o &&
                    null !== o &&
                    o.$$typeof === F &&
                    oa(o) === t.type)) ?
                ((r = i(t, n.props)).ref = oi(e, t, n)) :
                ((r = lt(n.type, n.key, n.props, null, e.mode, r)).ref =
                  oi(e, t, n)),
                (r.return = e),
                r);
          }

          function u(e, t, n, r) {
            return (
              null === t ||
              4 !== t.tag ||
              t.stateNode.containerInfo !== n.containerInfo ||
              t.stateNode.implementation !== n.implementation ?
              ((t = lo(n, e.mode, r)).return = e) :
              ((t = i(t, n.children || [])).return = e),
              t
            );
          }

          function c(e, t, n, r, o) {
            return (
              null === t || 7 !== t.tag ?
              ((t = ln(n, e.mode, r, o)).return = e) :
              ((t = i(t, n)).return = e),
              t
            );
          }

          function d(e, t, n) {
            if (("string" == typeof t && "" !== t) || "number" == typeof t)
              return ((t = li("" + t, e.mode, n)).return = e), t;
            if ("object" == typeof t && null !== t) {
              switch (t.$$typeof) {
                case C:
                  return (
                    ((n = lt(t.type, t.key, t.props, null, e.mode, n)).ref =
                      oi(e, null, t)),
                    (n.return = e),
                    n
                  );
                case P:
                  return ((t = lo(t, e.mode, n)).return = e), t;
                case F:
                  return d(e, (0, t._init)(t._payload), n);
              }
              if (eg(t) || B(t))
                return ((t = ln(t, e.mode, n, null)).return = e), t;
              oo(e, t);
            }
            return null;
          }

          function f(e, t, n, r) {
            var i = null !== t ? t.key : null;
            if (("string" == typeof n && "" !== n) || "number" == typeof n)
              return null !== i ? null : s(e, t, "" + n, r);
            if ("object" == typeof n && null !== n) {
              switch (n.$$typeof) {
                case C:
                  return n.key === i ? l(e, t, n, r) : null;
                case P:
                  return n.key === i ? u(e, t, n, r) : null;
                case F:
                  return f(e, t, (i = n._init)(n._payload), r);
              }
              if (eg(n) || B(n))
                return null !== i ? null : c(e, t, n, r, null);
              oo(e, n);
            }
            return null;
          }

          function h(e, t, n, r, i) {
            if (("string" == typeof r && "" !== r) || "number" == typeof r)
              return s(t, (e = e.get(n) || null), "" + r, i);
            if ("object" == typeof r && null !== r) {
              switch (r.$$typeof) {
                case C:
                  return l(
                    t,
                    (e = e.get(null === r.key ? n : r.key) || null),
                    r,
                    i
                  );
                case P:
                  return u(
                    t,
                    (e = e.get(null === r.key ? n : r.key) || null),
                    r,
                    i
                  );
                case F:
                  return h(e, t, n, (0, r._init)(r._payload), i);
              }
              if (eg(r) || B(r))
                return c(t, (e = e.get(n) || null), r, i, null);
              oo(t, r);
            }
            return null;
          }
          return function s(l, u, c, m) {
            if (
              ("object" == typeof c &&
                null !== c &&
                c.type === O &&
                null === c.key &&
                (c = c.props.children),
                "object" == typeof c && null !== c)
            ) {
              switch (c.$$typeof) {
                case C:
                  e: {
                    for (var y = c.key, g = u; null !== g;) {
                      if (g.key === y) {
                        if ((y = c.type) === O) {
                          if (7 === g.tag) {
                            n(l, g.sibling),
                              ((u = i(g, c.props.children)).return = l),
                              (l = u);
                            break e;
                          }
                        } else if (
                          g.elementType === y ||
                          ("object" == typeof y &&
                            null !== y &&
                            y.$$typeof === F &&
                            oa(y) === g.type)
                        ) {
                          n(l, g.sibling),
                            ((u = i(g, c.props)).ref = oi(l, g, c)),
                            (u.return = l),
                            (l = u);
                          break e;
                        }
                        n(l, g);
                        break;
                      }
                      t(l, g), (g = g.sibling);
                    }
                    c.type === O ?
                    (((u = ln(
                        c.props.children,
                        l.mode,
                        m,
                        c.key
                      )).return = l),
                      (l = u)) : (((m = lt(
                        c.type,
                        c.key,
                        c.props,
                        null,
                        l.mode,
                        m
                      )).ref = oi(l, u, c)),
                      (m.return = l),
                      (l = m));
                  }
                  return a(l);
                case P:
                  e: {
                    for (g = c.key; null !== u;) {
                      if (u.key === g) {
                        if (
                          4 === u.tag &&
                          u.stateNode.containerInfo === c.containerInfo &&
                          u.stateNode.implementation === c.implementation
                        ) {
                          n(l, u.sibling),
                            ((u = i(u, c.children || [])).return = l),
                            (l = u);
                          break e;
                        }
                        n(l, u);
                        break;
                      }
                      t(l, u), (u = u.sibling);
                    }
                    ((u = lo(c, l.mode, m)).return = l),
                    (l = u);
                  }
                  return a(l);
                case F:
                  return s(l, u, (g = c._init)(c._payload), m);
              }
              if (eg(c))
                return (function(i, a, s, l) {
                  for (
                    var u = null, c = null, p = a, m = (a = 0), y = null; null !== p && m < s.length; m++
                  ) {
                    p.index > m ? ((y = p), (p = null)) : (y = p.sibling);
                    var g = f(i, p, s[m], l);
                    if (null === g) {
                      null === p && (p = y);
                      break;
                    }
                    e && p && null === g.alternate && t(i, p),
                      (a = o(g, a, m)),
                      null === c ? (u = g) : (c.sibling = g),
                      (c = g),
                      (p = y);
                  }
                  if (m === s.length) return n(i, p), iE && iw(i, m), u;
                  if (null === p) {
                    for (; m < s.length; m++)
                      null !== (p = d(i, s[m], l)) &&
                      ((a = o(p, a, m)),
                        null === c ? (u = p) : (c.sibling = p),
                        (c = p));
                    return iE && iw(i, m), u;
                  }
                  for (p = r(i, p); m < s.length; m++)
                    null !== (y = h(p, i, m, s[m], l)) &&
                    (e &&
                      null !== y.alternate &&
                      p.delete(null === y.key ? m : y.key),
                      (a = o(y, a, m)),
                      null === c ? (u = y) : (c.sibling = y),
                      (c = y));
                  return (
                    e &&
                    p.forEach(function(e) {
                      return t(i, e);
                    }),
                    iE && iw(i, m),
                    u
                  );
                })(l, u, c, m);
              if (B(c))
                return (function(i, a, s, l) {
                  var u = B(s);
                  if ("function" != typeof u) throw Error(p(150));
                  if (null == (s = u.call(s))) throw Error(p(151));
                  for (
                    var c = (u = null),
                      m = a,
                      y = (a = 0),
                      g = null,
                      v = s.next(); null !== m && !v.done; y++, v = s.next()
                  ) {
                    m.index > y ? ((g = m), (m = null)) : (g = m.sibling);
                    var b = f(i, m, v.value, l);
                    if (null === b) {
                      null === m && (m = g);
                      break;
                    }
                    e && m && null === b.alternate && t(i, m),
                      (a = o(b, a, y)),
                      null === c ? (u = b) : (c.sibling = b),
                      (c = b),
                      (m = g);
                  }
                  if (v.done) return n(i, m), iE && iw(i, y), u;
                  if (null === m) {
                    for (; !v.done; y++, v = s.next())
                      null !== (v = d(i, v.value, l)) &&
                      ((a = o(v, a, y)),
                        null === c ? (u = v) : (c.sibling = v),
                        (c = v));
                    return iE && iw(i, y), u;
                  }
                  for (m = r(i, m); !v.done; y++, v = s.next())
                    null !== (v = h(m, i, y, v.value, l)) &&
                    (e &&
                      null !== v.alternate &&
                      m.delete(null === v.key ? y : v.key),
                      (a = o(v, a, y)),
                      null === c ? (u = v) : (c.sibling = v),
                      (c = v));
                  return (
                    e &&
                    m.forEach(function(e) {
                      return t(i, e);
                    }),
                    iE && iw(i, y),
                    u
                  );
                })(l, u, c, m);
              oo(l, c);
            }
            return ("string" == typeof c && "" !== c) || "number" == typeof c ?
              ((c = "" + c),
                null !== u && 6 === u.tag ?
                (n(l, u.sibling), ((u = i(u, c)).return = l)) :
                (n(l, u), ((u = li(c, l.mode, m)).return = l)),
                a((l = u))) :
              n(l, u);
          };
        }
        var ol = os(!0),
          ou = os(!1),
          oc = {},
          op = r0(oc),
          od = r0(oc),
          of = r0(oc);

        function oh(e) {
          if (e === oc) throw Error(p(174));
          return e;
        }

        function om(e, t) {
          switch ((r2(of, t), r2(od, e), r2(op, oc), (e = t.nodeType))) {
            case 9:
            case 11:
              t = (t = t.documentElement) ? t.namespaceURI : e_(null, "");
              break;
            default:
              t = e_(
                (t = (e = 8 === e ? t.parentNode : t).namespaceURI || null),
                (e = e.tagName)
              );
          }
          r1(op), r2(op, t);
        }

        function oy() {
          r1(op), r1(od), r1(of);
        }

        function og(e) {
          oh(of.current);
          var t = oh(op.current),
            n = e_(t, e.type);
          t !== n && (r2(od, e), r2(op, n));
        }

        function ov(e) {
          od.current === e && (r1(op), r1(od));
        }
        var ob = r0(0);

        function ow(e) {
          for (var t = e; null !== t;) {
            if (13 === t.tag) {
              var n = t.memoizedState;
              if (
                null !== n &&
                (null === (n = n.dehydrated) ||
                  "$?" === n.data ||
                  "$!" === n.data)
              )
                return t;
            } else if (
              19 === t.tag &&
              void 0 !== t.memoizedProps.revealOrder
            ) {
              if (0 != (128 & t.flags)) return t;
            } else if (null !== t.child) {
              (t.child.return = t), (t = t.child);
              continue;
            }
            if (t === e) break;
            for (; null === t.sibling;) {
              if (null === t.return || t.return === e) return null;
              t = t.return;
            }
            (t.sibling.return = t.return), (t = t.sibling);
          }
          return null;
        }
        var ox = [];

        function oS() {
          for (var e = 0; e < ox.length; e++)
            ox[e]._workInProgressVersionPrimary = null;
          ox.length = 0;
        }
        var ok = E.ReactCurrentDispatcher,
          o_ = E.ReactCurrentBatchConfig,
          oT = 0,
          oE = null,
          oC = null,
          oP = null,
          oO = !1,
          oA = !1,
          oj = 0,
          oD = 0;

        function oR() {
          throw Error(p(321));
        }

        function oM(e, t) {
          if (null === t) return !1;
          for (var n = 0; n < t.length && n < e.length; n++)
            if (!nX(e[n], t[n])) return !1;
          return !0;
        }

        function oN(e, t, n, r, i, o) {
          if (
            ((oT = o),
              (oE = t),
              (t.memoizedState = null),
              (t.updateQueue = null),
              (t.lanes = 0),
              (ok.current = null === e || null === e.memoizedState ? al : au),
              (e = n(r, i)),
              oA)
          ) {
            o = 0;
            do {
              if (((oA = !1), (oj = 0), 25 <= o)) throw Error(p(301));
              (o += 1),
              (oP = oC = null),
              (t.updateQueue = null),
              (ok.current = ac),
              (e = n(r, i));
            } while (oA);
          }
          if (
            ((ok.current = as),
              (t = null !== oC && null !== oC.next),
              (oT = 0),
              (oP = oC = oE = null),
              (oO = !1),
              t)
          )
            throw Error(p(300));
          return e;
        }

        function oL() {
          var e = 0 !== oj;
          return (oj = 0), e;
        }

        function oI() {
          var e = {
            memoizedState: null,
            baseState: null,
            baseQueue: null,
            queue: null,
            next: null,
          };
          return (
            null === oP ? (oE.memoizedState = oP = e) : (oP = oP.next = e), oP
          );
        }

        function oU() {
          if (null === oC) {
            var e = oE.alternate;
            e = null !== e ? e.memoizedState : null;
          } else e = oC.next;
          var t = null === oP ? oE.memoizedState : oP.next;
          if (null !== t)(oP = t), (oC = e);
          else {
            if (null === e) throw Error(p(310));
            (e = {
              memoizedState: (oC = e).memoizedState,
              baseState: oC.baseState,
              baseQueue: oC.baseQueue,
              queue: oC.queue,
              next: null,
            }),
            null === oP ? (oE.memoizedState = oP = e) : (oP = oP.next = e);
          }
          return oP;
        }

        function oF(e, t) {
          return "function" == typeof t ? t(e) : t;
        }

        function oV(e) {
          var t = oU(),
            n = t.queue;
          if (null === n) throw Error(p(311));
          n.lastRenderedReducer = e;
          var r = oC,
            i = r.baseQueue,
            o = n.pending;
          if (null !== o) {
            if (null !== i) {
              var a = i.next;
              (i.next = o.next), (o.next = a);
            }
            (r.baseQueue = i = o), (n.pending = null);
          }
          if (null !== i) {
            (o = i.next), (r = r.baseState);
            var s = (a = null),
              l = null,
              u = o;
            do {
              var c = u.lane;
              if ((oT & c) === c)
                null !== l &&
                (l = l.next = {
                  lane: 0,
                  action: u.action,
                  hasEagerState: u.hasEagerState,
                  eagerState: u.eagerState,
                  next: null,
                }),
                (r = u.hasEagerState ? u.eagerState : e(r, u.action));
              else {
                var d = {
                  lane: c,
                  action: u.action,
                  hasEagerState: u.hasEagerState,
                  eagerState: u.eagerState,
                  next: null,
                };
                null === l ? ((s = l = d), (a = r)) : (l = l.next = d),
                  (oE.lanes |= c),
                  (sy |= c);
              }
              u = u.next;
            } while (null !== u && u !== o);
            null === l ? (a = r) : (l.next = s),
              nX(r, t.memoizedState) || (ax = !0),
              (t.memoizedState = r),
              (t.baseState = a),
              (t.baseQueue = l),
              (n.lastRenderedState = r);
          }
          if (null !== (e = n.interleaved)) {
            i = e;
            do(o = i.lane), (oE.lanes |= o), (sy |= o), (i = i.next);
            while (i !== e);
          } else null === i && (n.lanes = 0);
          return [t.memoizedState, n.dispatch];
        }

        function oz(e) {
          var t = oU(),
            n = t.queue;
          if (null === n) throw Error(p(311));
          n.lastRenderedReducer = e;
          var r = n.dispatch,
            i = n.pending,
            o = t.memoizedState;
          if (null !== i) {
            n.pending = null;
            var a = (i = i.next);
            do(o = e(o, a.action)), (a = a.next);
            while (a !== i);
            nX(o, t.memoizedState) || (ax = !0),
              (t.memoizedState = o),
              null === t.baseQueue && (t.baseState = o),
              (n.lastRenderedState = o);
          }
          return [o, r];
        }

        function oB() {}

        function oq(e, t) {
          var n = oE,
            r = oU(),
            i = t(),
            o = !nX(r.memoizedState, i);
          if (
            (o && ((r.memoizedState = i), (ax = !0)),
              (r = r.queue),
              o1(o$.bind(null, n, r, e), [e]),
              r.getSnapshot !== t ||
              o ||
              (null !== oP && 1 & oP.memoizedState.tag))
          ) {
            if (
              ((n.flags |= 2048),
                oY(9, oW.bind(null, n, r, i, t), void 0, null),
                null === su)
            )
              throw Error(p(349));
            0 != (30 & oT) || oH(n, t, i);
          }
          return i;
        }

        function oH(e, t, n) {
          (e.flags |= 16384),
          (e = {
            getSnapshot: t,
            value: n
          }),
          null === (t = oE.updateQueue) ?
            ((t = {
                lastEffect: null,
                stores: null
              }),
              (oE.updateQueue = t),
              (t.stores = [e])) :
            null === (n = t.stores) ?
            (t.stores = [e]) :
            n.push(e);
        }

        function oW(e, t, n, r) {
          (t.value = n), (t.getSnapshot = r), oK(t) && oQ(e);
        }

        function o$(e, t, n) {
          return n(function() {
            oK(t) && oQ(e);
          });
        }

        function oK(e) {
          var t = e.getSnapshot;
          e = e.value;
          try {
            var n = t();
            return !nX(e, n);
          } catch (e) {
            return !0;
          }
        }

        function oQ(e) {
          var t = iG(e, 1);
          null !== t && sL(t, e, 1, -1);
        }

        function oX(e) {
          var t = oI();
          return (
            "function" == typeof e && (e = e()),
            (t.memoizedState = t.baseState = e),
            (e = {
              pending: null,
              interleaved: null,
              lanes: 0,
              dispatch: null,
              lastRenderedReducer: oF,
              lastRenderedState: e,
            }),
            (t.queue = e),
            (e = e.dispatch = ar.bind(null, oE, e)),
            [t.memoizedState, e]
          );
        }

        function oY(e, t, n, r) {
          return (
            (e = {
              tag: e,
              create: t,
              destroy: n,
              deps: r,
              next: null
            }),
            null === (t = oE.updateQueue) ?
            ((t = {
                lastEffect: null,
                stores: null
              }),
              (oE.updateQueue = t),
              (t.lastEffect = e.next = e)) :
            null === (n = t.lastEffect) ?
            (t.lastEffect = e.next = e) :
            ((r = n.next),
              (n.next = e),
              (e.next = r),
              (t.lastEffect = e)),
            e
          );
        }

        function oG() {
          return oU().memoizedState;
        }

        function oJ(e, t, n, r) {
          var i = oI();
          (oE.flags |= e),
          (i.memoizedState = oY(1 | t, n, void 0, void 0 === r ? null : r));
        }

        function oZ(e, t, n, r) {
          var i = oU();
          r = void 0 === r ? null : r;
          var o = void 0;
          if (null !== oC) {
            var a = oC.memoizedState;
            if (((o = a.destroy), null !== r && oM(r, a.deps))) {
              i.memoizedState = oY(t, n, o, r);
              return;
            }
          }
          (oE.flags |= e), (i.memoizedState = oY(1 | t, n, o, r));
        }

        function o0(e, t) {
          return oJ(8390656, 8, e, t);
        }

        function o1(e, t) {
          return oZ(2048, 8, e, t);
        }

        function o2(e, t) {
          return oZ(4, 2, e, t);
        }

        function o3(e, t) {
          return oZ(4, 4, e, t);
        }

        function o4(e, t) {
          return "function" == typeof t ?
            (t((e = e())),
              function() {
                t(null);
              }) :
            null != t ?
            ((e = e()),
              (t.current = e),
              function() {
                t.current = null;
              }) :
            void 0;
        }

        function o5(e, t, n) {
          return (
            (n = null != n ? n.concat([e]) : null),
            oZ(4, 4, o4.bind(null, t, e), n)
          );
        }

        function o6() {}

        function o8(e, t) {
          var n = oU();
          t = void 0 === t ? null : t;
          var r = n.memoizedState;
          return null !== r && null !== t && oM(t, r[1]) ?
            r[0] :
            ((n.memoizedState = [e, t]), e);
        }

        function o9(e, t) {
          var n = oU();
          t = void 0 === t ? null : t;
          var r = n.memoizedState;
          return null !== r && null !== t && oM(t, r[1]) ?
            r[0] :
            ((e = e()), (n.memoizedState = [e, t]), e);
        }

        function o7(e, t, n) {
          return 0 == (21 & oT) ?
            (e.baseState && ((e.baseState = !1), (ax = !0)),
              (e.memoizedState = n)) :
            (nX(n, t) ||
              ((n = tb()), (oE.lanes |= n), (sy |= n), (e.baseState = !0)),
              t);
        }

        function ae(e, t) {
          var n = tk;
          (tk = 0 !== n && 4 > n ? n : 4), e(!0);
          var r = o_.transition;
          o_.transition = {};
          try {
            e(!1), t();
          } finally {
            (tk = n), (o_.transition = r);
          }
        }

        function at() {
          return oU().memoizedState;
        }

        function an(e, t, n) {
          var r = sN(e);
          (n = {
            lane: r,
            action: n,
            hasEagerState: !1,
            eagerState: null,
            next: null,
          }),
          ai(e) ?
            ao(t, n) :
            null !== (n = iY(e, t, n, r)) &&
            (sL(n, e, r, sM()), aa(n, t, r));
        }

        function ar(e, t, n) {
          var r = sN(e),
            i = {
              lane: r,
              action: n,
              hasEagerState: !1,
              eagerState: null,
              next: null,
            };
          if (ai(e)) ao(t, i);
          else {
            var o = e.alternate;
            if (
              0 === e.lanes &&
              (null === o || 0 === o.lanes) &&
              null !== (o = t.lastRenderedReducer)
            )
              try {
                var a = t.lastRenderedState,
                  s = o(a, n);
                if (((i.hasEagerState = !0), (i.eagerState = s), nX(s, a))) {
                  var l = t.interleaved;
                  null === l ?
                    ((i.next = i), iX(t)) :
                    ((i.next = l.next), (l.next = i)),
                    (t.interleaved = i);
                  return;
                }
              } catch (e) {} finally {}
            null !== (n = iY(e, t, i, r)) &&
              (sL(n, e, r, (i = sM())), aa(n, t, r));
          }
        }

        function ai(e) {
          var t = e.alternate;
          return e === oE || (null !== t && t === oE);
        }

        function ao(e, t) {
          oA = oO = !0;
          var n = e.pending;
          null === n ? (t.next = t) : ((t.next = n.next), (n.next = t)),
            (e.pending = t);
        }

        function aa(e, t, n) {
          if (0 != (4194240 & n)) {
            var r = t.lanes;
            (r &= e.pendingLanes), (n |= r), (t.lanes = n), tS(e, n);
          }
        }
        var as = {
            readContext: iK,
            useCallback: oR,
            useContext: oR,
            useEffect: oR,
            useImperativeHandle: oR,
            useInsertionEffect: oR,
            useLayoutEffect: oR,
            useMemo: oR,
            useReducer: oR,
            useRef: oR,
            useState: oR,
            useDebugValue: oR,
            useDeferredValue: oR,
            useTransition: oR,
            useMutableSource: oR,
            useSyncExternalStore: oR,
            useId: oR,
            unstable_isNewReconciler: !1,
          },
          al = {
            readContext: iK,
            useCallback: function(e, t) {
              return (oI().memoizedState = [e, void 0 === t ? null : t]), e;
            },
            useContext: iK,
            useEffect: o0,
            useImperativeHandle: function(e, t, n) {
              return (
                (n = null != n ? n.concat([e]) : null),
                oJ(4194308, 4, o4.bind(null, t, e), n)
              );
            },
            useLayoutEffect: function(e, t) {
              return oJ(4194308, 4, e, t);
            },
            useInsertionEffect: function(e, t) {
              return oJ(4, 2, e, t);
            },
            useMemo: function(e, t) {
              var n = oI();
              return (
                (t = void 0 === t ? null : t),
                (e = e()),
                (n.memoizedState = [e, t]),
                e
              );
            },
            useReducer: function(e, t, n) {
              var r = oI();
              return (
                (t = void 0 !== n ? n(t) : t),
                (r.memoizedState = r.baseState = t),
                (e = {
                  pending: null,
                  interleaved: null,
                  lanes: 0,
                  dispatch: null,
                  lastRenderedReducer: e,
                  lastRenderedState: t,
                }),
                (r.queue = e),
                (e = e.dispatch = an.bind(null, oE, e)),
                [r.memoizedState, e]
              );
            },
            useRef: function(e) {
              return (e = {
                current: e
              }), (oI().memoizedState = e);
            },
            useState: oX,
            useDebugValue: o6,
            useDeferredValue: function(e) {
              return (oI().memoizedState = e);
            },
            useTransition: function() {
              var e = oX(!1),
                t = e[0];
              return (
                (e = ae.bind(null, e[1])), (oI().memoizedState = e), [t, e]
              );
            },
            useMutableSource: function() {},
            useSyncExternalStore: function(e, t, n) {
              var r = oE,
                i = oI();
              if (iE) {
                if (void 0 === n) throw Error(p(407));
                n = n();
              } else {
                if (((n = t()), null === su)) throw Error(p(349));
                0 != (30 & oT) || oH(r, t, n);
              }
              i.memoizedState = n;
              var o = {
                value: n,
                getSnapshot: t
              };
              return (
                (i.queue = o),
                o0(o$.bind(null, r, o, e), [e]),
                (r.flags |= 2048),
                oY(9, oW.bind(null, r, o, n, t), void 0, null),
                n
              );
            },
            useId: function() {
              var e = oI(),
                t = su.identifierPrefix;
              if (iE) {
                var n = ib,
                  r = iv;
                (t =
                  ":" +
                  t +
                  "R" +
                  (n = (r & ~(1 << (32 - tp(r) - 1))).toString(32) + n)),
                0 < (n = oj++) && (t += "H" + n.toString(32)),
                  (t += ":");
              } else t = ":" + t + "r" + (n = oD++).toString(32) + ":";
              return (e.memoizedState = t);
            },
            unstable_isNewReconciler: !1,
          },
          au = {
            readContext: iK,
            useCallback: o8,
            useContext: iK,
            useEffect: o1,
            useImperativeHandle: o5,
            useInsertionEffect: o2,
            useLayoutEffect: o3,
            useMemo: o9,
            useReducer: oV,
            useRef: oG,
            useState: function() {
              return oV(oF);
            },
            useDebugValue: o6,
            useDeferredValue: function(e) {
              return o7(oU(), oC.memoizedState, e);
            },
            useTransition: function() {
              return [oV(oF)[0], oU().memoizedState];
            },
            useMutableSource: oB,
            useSyncExternalStore: oq,
            useId: at,
            unstable_isNewReconciler: !1,
          },
          ac = {
            readContext: iK,
            useCallback: o8,
            useContext: iK,
            useEffect: o1,
            useImperativeHandle: o5,
            useInsertionEffect: o2,
            useLayoutEffect: o3,
            useMemo: o9,
            useReducer: oz,
            useRef: oG,
            useState: function() {
              return oz(oF);
            },
            useDebugValue: o6,
            useDeferredValue: function(e) {
              var t = oU();
              return null === oC ?
                (t.memoizedState = e) :
                o7(t, oC.memoizedState, e);
            },
            useTransition: function() {
              return [oz(oF)[0], oU().memoizedState];
            },
            useMutableSource: oB,
            useSyncExternalStore: oq,
            useId: at,
            unstable_isNewReconciler: !1,
          };

        function ap(e, t) {
          try {
            var n = "",
              r = t;
            do
              (n += (function(e) {
                switch (e.tag) {
                  case 5:
                    return er(e.type);
                  case 16:
                    return er("Lazy");
                  case 13:
                    return er("Suspense");
                  case 19:
                    return er("SuspenseList");
                  case 0:
                  case 2:
                  case 15:
                    return (e = eo(e.type, !1));
                  case 11:
                    return (e = eo(e.type.render, !1));
                  case 1:
                    return (e = eo(e.type, !0));
                  default:
                    return "";
                }
              })(r)),
              (r = r.return);
            while (r);
            var i = n;
          } catch (e) {
            i = "\nError generating stack: " + e.message + "\n" + e.stack;
          }
          return {
            value: e,
            source: t,
            stack: i,
            digest: null
          };
        }

        function ad(e, t, n) {
          return {
            value: e,
            source: null,
            stack: null != n ? n : null,
            digest: null != t ? t : null,
          };
        }

        function af(e, t) {
          try {
            console.error(t.value);
          } catch (e) {
            setTimeout(function() {
              throw e;
            });
          }
        }
        var ah = "function" == typeof WeakMap ? WeakMap : Map;

        function am(e, t, n) {
          ((n = i1(-1, n)).tag = 3), (n.payload = {
            element: null
          });
          var r = t.value;
          return (
            (n.callback = function() {
              s_ || ((s_ = !0), (sT = r)), af(e, t);
            }),
            n
          );
        }

        function ay(e, t, n) {
          (n = i1(-1, n)).tag = 3;
          var r = e.type.getDerivedStateFromError;
          if ("function" == typeof r) {
            var i = t.value;
            (n.payload = function() {
              return r(i);
            }),
            (n.callback = function() {
              af(e, t);
            });
          }
          var o = e.stateNode;
          return (
            null !== o &&
            "function" == typeof o.componentDidCatch &&
            (n.callback = function() {
              af(e, t),
                "function" != typeof r &&
                (null === sE ? (sE = new Set([this])) : sE.add(this));
              var n = t.stack;
              this.componentDidCatch(t.value, {
                componentStack: null !== n ? n : "",
              });
            }),
            n
          );
        }

        function ag(e, t, n) {
          var r = e.pingCache;
          if (null === r) {
            r = e.pingCache = new ah();
            var i = new Set();
            r.set(t, i);
          } else void 0 === (i = r.get(t)) && ((i = new Set()), r.set(t, i));
          i.has(n) || (i.add(n), (e = s3.bind(null, e, t, n)), t.then(e, e));
        }

        function av(e) {
          do {
            var t;
            if (
              ((t = 13 === e.tag) &&
                (t = null === (t = e.memoizedState) || null !== t.dehydrated),
                t)
            )
              return e;
            e = e.return;
          } while (null !== e);
          return null;
        }

        function ab(e, t, n, r, i) {
          return (
            0 == (1 & e.mode) ?
            e === t ?
            (e.flags |= 65536) :
            ((e.flags |= 128),
              (n.flags |= 131072),
              (n.flags &= -52805),
              1 === n.tag &&
              (null === n.alternate ?
                (n.tag = 17) :
                (((t = i1(-1, 1)).tag = 2), i2(n, t, 1))),
              (n.lanes |= 1)) :
            ((e.flags |= 65536), (e.lanes = i)),
            e
          );
        }
        var aw = E.ReactCurrentOwner,
          ax = !1;

        function aS(e, t, n, r) {
          t.child = null === e ? ou(t, null, n, r) : ol(t, e.child, n, r);
        }

        function ak(e, t, n, r, i) {
          n = n.render;
          var o = t.ref;
          return (i$(t, i),
              (r = oN(e, t, n, r, o, i)),
              (n = oL()),
              null === e || ax) ?
            (iE && n && iS(t), (t.flags |= 1), aS(e, t, r, i), t.child) :
            ((t.updateQueue = e.updateQueue),
              (t.flags &= -2053),
              (e.lanes &= ~i),
              aB(e, t, i));
        }

        function a_(e, t, n, r, i) {
          if (null === e) {
            var o = n.type;
            return "function" != typeof o ||
              s7(o) ||
              void 0 !== o.defaultProps ||
              null !== n.compare ||
              void 0 !== n.defaultProps ?
              (((e = lt(n.type, null, r, t, t.mode, i)).ref = t.ref),
                (e.return = t),
                (t.child = e)) :
              ((t.tag = 15), (t.type = o), aT(e, t, o, r, i));
          }
          if (((o = e.child), 0 == (e.lanes & i))) {
            var a = o.memoizedProps;
            if (
              (n = null !== (n = n.compare) ? n : nY)(a, r) &&
              e.ref === t.ref
            )
              return aB(e, t, i);
          }
          return (
            (t.flags |= 1),
            ((e = le(o, r)).ref = t.ref),
            (e.return = t),
            (t.child = e)
          );
        }

        function aT(e, t, n, r, i) {
          if (null !== e) {
            var o = e.memoizedProps;
            if (nY(o, r) && e.ref === t.ref) {
              if (((ax = !1), (t.pendingProps = r = o), 0 == (e.lanes & i)))
                return (t.lanes = e.lanes), aB(e, t, i);
              0 != (131072 & e.flags) && (ax = !0);
            }
          }
          return aP(e, t, n, r, i);
        }

        function aE(e, t, n) {
          var r = t.pendingProps,
            i = r.children,
            o = null !== e ? e.memoizedState : null;
          if ("hidden" === r.mode) {
            if (0 == (1 & t.mode))
              (t.memoizedState = {
                baseLanes: 0,
                cachePool: null,
                transitions: null,
              }),
              r2(sf, sd),
              (sd |= n);
            else {
              if (0 == (1073741824 & n))
                return (
                  (e = null !== o ? o.baseLanes | n : n),
                  (t.lanes = t.childLanes = 1073741824),
                  (t.memoizedState = {
                    baseLanes: e,
                    cachePool: null,
                    transitions: null,
                  }),
                  (t.updateQueue = null),
                  r2(sf, sd),
                  (sd |= e),
                  null
                );
              (t.memoizedState = {
                baseLanes: 0,
                cachePool: null,
                transitions: null,
              }),
              (r = null !== o ? o.baseLanes : n),
              r2(sf, sd),
                (sd |= r);
            }
          } else null !== o ? ((r = o.baseLanes | n), (t.memoizedState = null)) : (r = n), r2(sf, sd), (sd |= r);
          return aS(e, t, i, n), t.child;
        }

        function aC(e, t) {
          var n = t.ref;
          ((null === e && null !== n) || (null !== e && e.ref !== n)) &&
          ((t.flags |= 512), (t.flags |= 2097152));
        }

        function aP(e, t, n, r, i) {
          var o = r9(n) ? r6 : r4.current;
          return ((o = r8(t, o)),
              i$(t, i),
              (n = oN(e, t, n, r, o, i)),
              (r = oL()),
              null === e || ax) ?
            (iE && r && iS(t), (t.flags |= 1), aS(e, t, n, i), t.child) :
            ((t.updateQueue = e.updateQueue),
              (t.flags &= -2053),
              (e.lanes &= ~i),
              aB(e, t, i));
        }

        function aO(e, t, n, r, i) {
          if (r9(n)) {
            var o = !0;
            ir(t);
          } else o = !1;
          if ((i$(t, i), null === t.stateNode))
            az(e, t), ot(t, n, r), or(t, n, r, i), (r = !0);
          else if (null === e) {
            var a = t.stateNode,
              s = t.memoizedProps;
            a.props = s;
            var l = a.context,
              u = n.contextType;
            u =
              "object" == typeof u && null !== u ?
              iK(u) :
              r8(t, (u = r9(n) ? r6 : r4.current));
            var c = n.getDerivedStateFromProps,
              p =
              "function" == typeof c ||
              "function" == typeof a.getSnapshotBeforeUpdate;
            p ||
              ("function" != typeof a.UNSAFE_componentWillReceiveProps &&
                "function" != typeof a.componentWillReceiveProps) ||
              ((s !== r || l !== u) && on(t, a, r, u)),
              (iJ = !1);
            var d = t.memoizedState;
            (a.state = d),
            i5(t, r, a, i),
              (l = t.memoizedState),
              s !== r || d !== l || r5.current || iJ ?
              ("function" == typeof c &&
                (i9(t, n, c, r), (l = t.memoizedState)),
                (s = iJ || oe(t, n, s, r, d, l, u)) ?
                (p ||
                  ("function" != typeof a.UNSAFE_componentWillMount &&
                    "function" != typeof a.componentWillMount) ||
                  ("function" == typeof a.componentWillMount &&
                    a.componentWillMount(),
                    "function" == typeof a.UNSAFE_componentWillMount &&
                    a.UNSAFE_componentWillMount()),
                  "function" == typeof a.componentDidMount &&
                  (t.flags |= 4194308)) :
                ("function" == typeof a.componentDidMount &&
                  (t.flags |= 4194308),
                  (t.memoizedProps = r),
                  (t.memoizedState = l)),
                (a.props = r),
                (a.state = l),
                (a.context = u),
                (r = s)) :
              ("function" == typeof a.componentDidMount &&
                (t.flags |= 4194308),
                (r = !1));
          } else {
            (a = t.stateNode),
            i0(e, t),
              (s = t.memoizedProps),
              (u = t.type === t.elementType ? s : iU(t.type, s)),
              (a.props = u),
              (p = t.pendingProps),
              (d = a.context),
              (l =
                "object" == typeof(l = n.contextType) && null !== l ?
                iK(l) :
                r8(t, (l = r9(n) ? r6 : r4.current)));
            var f = n.getDerivedStateFromProps;
            (c =
              "function" == typeof f ||
              "function" == typeof a.getSnapshotBeforeUpdate) ||
            ("function" != typeof a.UNSAFE_componentWillReceiveProps &&
              "function" != typeof a.componentWillReceiveProps) ||
            ((s !== p || d !== l) && on(t, a, r, l)),
            (iJ = !1),
            (d = t.memoizedState),
            (a.state = d),
            i5(t, r, a, i);
            var h = t.memoizedState;
            s !== p || d !== h || r5.current || iJ ?
              ("function" == typeof f &&
                (i9(t, n, f, r), (h = t.memoizedState)),
                (u = iJ || oe(t, n, u, r, d, h, l) || !1) ?
                (c ||
                  ("function" != typeof a.UNSAFE_componentWillUpdate &&
                    "function" != typeof a.componentWillUpdate) ||
                  ("function" == typeof a.componentWillUpdate &&
                    a.componentWillUpdate(r, h, l),
                    "function" == typeof a.UNSAFE_componentWillUpdate &&
                    a.UNSAFE_componentWillUpdate(r, h, l)),
                  "function" == typeof a.componentDidUpdate &&
                  (t.flags |= 4),
                  "function" == typeof a.getSnapshotBeforeUpdate &&
                  (t.flags |= 1024)) :
                ("function" != typeof a.componentDidUpdate ||
                  (s === e.memoizedProps && d === e.memoizedState) ||
                  (t.flags |= 4),
                  "function" != typeof a.getSnapshotBeforeUpdate ||
                  (s === e.memoizedProps && d === e.memoizedState) ||
                  (t.flags |= 1024),
                  (t.memoizedProps = r),
                  (t.memoizedState = h)),
                (a.props = r),
                (a.state = h),
                (a.context = l),
                (r = u)) :
              ("function" != typeof a.componentDidUpdate ||
                (s === e.memoizedProps && d === e.memoizedState) ||
                (t.flags |= 4),
                "function" != typeof a.getSnapshotBeforeUpdate ||
                (s === e.memoizedProps && d === e.memoizedState) ||
                (t.flags |= 1024),
                (r = !1));
          }
          return aA(e, t, n, r, o, i);
        }

        function aA(e, t, n, r, i, o) {
          aC(e, t);
          var a = 0 != (128 & t.flags);
          if (!r && !a) return i && ii(t, n, !1), aB(e, t, o);
          (r = t.stateNode), (aw.current = t);
          var s =
            a && "function" != typeof n.getDerivedStateFromError ?
            null :
            r.render();
          return (
            (t.flags |= 1),
            null !== e && a ?
            ((t.child = ol(t, e.child, null, o)),
              (t.child = ol(t, null, s, o))) :
            aS(e, t, s, o),
            (t.memoizedState = r.state),
            i && ii(t, n, !0),
            t.child
          );
        }

        function aj(e) {
          var t = e.stateNode;
          t.pendingContext ?
            ie(e, t.pendingContext, t.pendingContext !== t.context) :
            t.context && ie(e, t.context, !1),
            om(e, t.containerInfo);
        }

        function aD(e, t, n, r, i) {
          return iN(), iL(i), (t.flags |= 256), aS(e, t, n, r), t.child;
        }
        var aR = {
          dehydrated: null,
          treeContext: null,
          retryLane: 0
        };

        function aM(e) {
          return {
            baseLanes: e,
            cachePool: null,
            transitions: null
          };
        }

        function aN(e, t, n) {
          var r,
            i = t.pendingProps,
            o = ob.current,
            a = !1,
            s = 0 != (128 & t.flags);
          if (
            ((r = s) ||
              (r = (null === e || null !== e.memoizedState) && 0 != (2 & o)),
              r ?
              ((a = !0), (t.flags &= -129)) :
              (null === e || null !== e.memoizedState) && (o |= 1),
              r2(ob, 1 & o),
              null === e)
          )
            return (ij(t),
                null !== (e = t.memoizedState) && null !== (e = e.dehydrated)) ?
              (0 == (1 & t.mode) ?
                (t.lanes = 1) :
                "$!" === e.data ?
                (t.lanes = 8) :
                (t.lanes = 1073741824),
                null) :
              ((s = i.children),
                (e = i.fallback),
                a ?
                ((i = t.mode),
                  (a = t.child),
                  (s = {
                    mode: "hidden",
                    children: s
                  }),
                  0 == (1 & i) && null !== a ?
                  ((a.childLanes = 0), (a.pendingProps = s)) :
                  (a = lr(s, i, 0, null)),
                  (e = ln(e, i, n, null)),
                  (a.return = t),
                  (e.return = t),
                  (a.sibling = e),
                  (t.child = a),
                  (t.child.memoizedState = aM(n)),
                  (t.memoizedState = aR),
                  e) :
                aL(t, s));
          if (null !== (o = e.memoizedState) && null !== (r = o.dehydrated))
            return (function(e, t, n, r, i, o, a) {
              if (n)
                return 256 & t.flags ?
                  ((t.flags &= -257), aI(e, t, a, (r = ad(Error(p(422)))))) :
                  null !== t.memoizedState ?
                  ((t.child = e.child), (t.flags |= 128), null) :
                  ((o = r.fallback),
                    (i = t.mode),
                    (r = lr({
                        mode: "visible",
                        children: r.children
                      },
                      i,
                      0,
                      null
                    )),
                    (o = ln(o, i, a, null)),
                    (o.flags |= 2),
                    (r.return = t),
                    (o.return = t),
                    (r.sibling = o),
                    (t.child = r),
                    0 != (1 & t.mode) && ol(t, e.child, null, a),
                    (t.child.memoizedState = aM(a)),
                    (t.memoizedState = aR),
                    o);
              if (0 == (1 & t.mode)) return aI(e, t, a, null);
              if ("$!" === i.data) {
                if ((r = i.nextSibling && i.nextSibling.dataset))
                  var s = r.dgst;
                return (
                  (r = s),
                  aI(e, t, a, (r = ad((o = Error(p(419))), r, void 0)))
                );
              }
              if (((s = 0 != (a & e.childLanes)), ax || s)) {
                if (null !== (r = su)) {
                  switch (a & -a) {
                    case 4:
                      i = 2;
                      break;
                    case 16:
                      i = 8;
                      break;
                    case 64:
                    case 128:
                    case 256:
                    case 512:
                    case 1024:
                    case 2048:
                    case 4096:
                    case 8192:
                    case 16384:
                    case 32768:
                    case 65536:
                    case 131072:
                    case 262144:
                    case 524288:
                    case 1048576:
                    case 2097152:
                    case 4194304:
                    case 8388608:
                    case 16777216:
                    case 33554432:
                    case 67108864:
                      i = 32;
                      break;
                    case 536870912:
                      i = 268435456;
                      break;
                    default:
                      i = 0;
                  }
                  0 !== (i = 0 != (i & (r.suspendedLanes | a)) ? 0 : i) &&
                    i !== o.retryLane &&
                    ((o.retryLane = i), iG(e, i), sL(r, e, i, -1));
                }
                return sX(), aI(e, t, a, (r = ad(Error(p(421)))));
              }
              return "$?" === i.data ?
                ((t.flags |= 128),
                  (t.child = e.child),
                  (t = s5.bind(null, e)),
                  (i._reactRetry = t),
                  null) :
                ((e = o.treeContext),
                  (iT = rF(i.nextSibling)),
                  (i_ = t),
                  (iE = !0),
                  (iC = null),
                  null !== e &&
                  ((im[iy++] = iv),
                    (im[iy++] = ib),
                    (im[iy++] = ig),
                    (iv = e.id),
                    (ib = e.overflow),
                    (ig = t)),
                  (t = aL(t, r.children)),
                  (t.flags |= 4096),
                  t);
            })(e, t, s, i, r, o, n);
          if (a) {
            (a = i.fallback), (s = t.mode), (r = (o = e.child).sibling);
            var l = {
              mode: "hidden",
              children: i.children
            };
            return (
              0 == (1 & s) && t.child !== o ?
              (((i = t.child).childLanes = 0),
                (i.pendingProps = l),
                (t.deletions = null)) :
              ((i = le(o, l)).subtreeFlags = 14680064 & o.subtreeFlags),
              null !== r ?
              (a = le(r, a)) :
              ((a = ln(a, s, n, null)), (a.flags |= 2)),
              (a.return = t),
              (i.return = t),
              (i.sibling = a),
              (t.child = i),
              (i = a),
              (a = t.child),
              (s =
                null === (s = e.child.memoizedState) ?
                aM(n) : {
                  baseLanes: s.baseLanes | n,
                  cachePool: null,
                  transitions: s.transitions,
                }),
              (a.memoizedState = s),
              (a.childLanes = e.childLanes & ~n),
              (t.memoizedState = aR),
              i
            );
          }
          return (
            (e = (a = e.child).sibling),
            (i = le(a, {
              mode: "visible",
              children: i.children
            })),
            0 == (1 & t.mode) && (i.lanes = n),
            (i.return = t),
            (i.sibling = null),
            null !== e &&
            (null === (n = t.deletions) ?
              ((t.deletions = [e]), (t.flags |= 16)) :
              n.push(e)),
            (t.child = i),
            (t.memoizedState = null),
            i
          );
        }

        function aL(e, t) {
          return (
            ((t = lr({
                mode: "visible",
                children: t
              },
              e.mode,
              0,
              null
            )).return = e),
            (e.child = t)
          );
        }

        function aI(e, t, n, r) {
          return (
            null !== r && iL(r),
            ol(t, e.child, null, n),
            (e = aL(t, t.pendingProps.children)),
            (e.flags |= 2),
            (t.memoizedState = null),
            e
          );
        }

        function aU(e, t, n) {
          e.lanes |= t;
          var r = e.alternate;
          null !== r && (r.lanes |= t), iW(e.return, t, n);
        }

        function aF(e, t, n, r, i) {
          var o = e.memoizedState;
          null === o ?
            (e.memoizedState = {
              isBackwards: t,
              rendering: null,
              renderingStartTime: 0,
              last: r,
              tail: n,
              tailMode: i,
            }) :
            ((o.isBackwards = t),
              (o.rendering = null),
              (o.renderingStartTime = 0),
              (o.last = r),
              (o.tail = n),
              (o.tailMode = i));
        }

        function aV(e, t, n) {
          var r = t.pendingProps,
            i = r.revealOrder,
            o = r.tail;
          if ((aS(e, t, r.children, n), 0 != (2 & (r = ob.current))))
            (r = (1 & r) | 2), (t.flags |= 128);
          else {
            if (null !== e && 0 != (128 & e.flags))
              e: for (e = t.child; null !== e;) {
                if (13 === e.tag) null !== e.memoizedState && aU(e, n, t);
                else if (19 === e.tag) aU(e, n, t);
                else if (null !== e.child) {
                  (e.child.return = e), (e = e.child);
                  continue;
                }
                if (e === t) break;
                for (; null === e.sibling;) {
                  if (null === e.return || e.return === t) break e;
                  e = e.return;
                }
                (e.sibling.return = e.return), (e = e.sibling);
              }
            r &= 1;
          }
          if ((r2(ob, r), 0 == (1 & t.mode))) t.memoizedState = null;
          else
            switch (i) {
              case "forwards":
                for (i = null, n = t.child; null !== n;)
                  null !== (e = n.alternate) && null === ow(e) && (i = n),
                  (n = n.sibling);
                null === (n = i) ?
                  ((i = t.child), (t.child = null)) :
                  ((i = n.sibling), (n.sibling = null)),
                  aF(t, !1, i, n, o);
                break;
              case "backwards":
                for (n = null, i = t.child, t.child = null; null !== i;) {
                  if (null !== (e = i.alternate) && null === ow(e)) {
                    t.child = i;
                    break;
                  }
                  (e = i.sibling), (i.sibling = n), (n = i), (i = e);
                }
                aF(t, !0, n, null, o);
                break;
              case "together":
                aF(t, !1, null, null, void 0);
                break;
              default:
                t.memoizedState = null;
            }
          return t.child;
        }

        function az(e, t) {
          0 == (1 & t.mode) &&
            null !== e &&
            ((e.alternate = null), (t.alternate = null), (t.flags |= 2));
        }

        function aB(e, t, n) {
          if (
            (null !== e && (t.dependencies = e.dependencies),
              (sy |= t.lanes),
              0 == (n & t.childLanes))
          )
            return null;
          if (null !== e && t.child !== e.child) throw Error(p(153));
          if (null !== t.child) {
            for (
              n = le((e = t.child), e.pendingProps),
              t.child = n,
              n.return = t; null !== e.sibling;

            )
              (e = e.sibling),
              ((n = n.sibling = le(e, e.pendingProps)).return = t);
            n.sibling = null;
          }
          return t.child;
        }

        function aq(e, t) {
          if (!iE)
            switch (e.tailMode) {
              case "hidden":
                t = e.tail;
                for (var n = null; null !== t;)
                  null !== t.alternate && (n = t), (t = t.sibling);
                null === n ? (e.tail = null) : (n.sibling = null);
                break;
              case "collapsed":
                n = e.tail;
                for (var r = null; null !== n;)
                  null !== n.alternate && (r = n), (n = n.sibling);
                null === r ?
                  t || null === e.tail ?
                  (e.tail = null) :
                  (e.tail.sibling = null) :
                  (r.sibling = null);
            }
        }

        function aH(e) {
          var t = null !== e.alternate && e.alternate.child === e.child,
            n = 0,
            r = 0;
          if (t)
            for (var i = e.child; null !== i;)
              (n |= i.lanes | i.childLanes),
              (r |= 14680064 & i.subtreeFlags),
              (r |= 14680064 & i.flags),
              (i.return = e),
              (i = i.sibling);
          else
            for (i = e.child; null !== i;)
              (n |= i.lanes | i.childLanes),
              (r |= i.subtreeFlags),
              (r |= i.flags),
              (i.return = e),
              (i = i.sibling);
          return (e.subtreeFlags |= r), (e.childLanes = n), t;
        }
        (i = function(e, t) {
          for (var n = t.child; null !== n;) {
            if (5 === n.tag || 6 === n.tag) e.appendChild(n.stateNode);
            else if (4 !== n.tag && null !== n.child) {
              (n.child.return = n), (n = n.child);
              continue;
            }
            if (n === t) break;
            for (; null === n.sibling;) {
              if (null === n.return || n.return === t) return;
              n = n.return;
            }
            (n.sibling.return = n.return), (n = n.sibling);
          }
        }),
        (o = function() {}),
        (a = function(e, t, n, r) {
          var i = e.memoizedProps;
          if (i !== r) {
            (e = t.stateNode), oh(op.current);
            var o,
              a = null;
            switch (n) {
              case "input":
                (i = ep(e, i)), (r = ep(e, r)), (a = []);
                break;
              case "select":
                (i = en({}, i, {
                  value: void 0
                })),
                (r = en({}, r, {
                  value: void 0
                })),
                (a = []);
                break;
              case "textarea":
                (i = eb(e, i)), (r = eb(e, r)), (a = []);
                break;
              default:
                "function" != typeof i.onClick &&
                  "function" == typeof r.onClick &&
                  (e.onclick = rO);
            }
            for (u in (eM(n, r), (n = null), i))
              if (
                !r.hasOwnProperty(u) &&
                i.hasOwnProperty(u) &&
                null != i[u]
              ) {
                if ("style" === u) {
                  var s = i[u];
                  for (o in s)
                    s.hasOwnProperty(o) && (n || (n = {}), (n[o] = ""));
                } else
                  "dangerouslySetInnerHTML" !== u &&
                  "children" !== u &&
                  "suppressContentEditableWarning" !== u &&
                  "suppressHydrationWarning" !== u &&
                  "autoFocus" !== u &&
                  (f.hasOwnProperty(u) ?
                    a || (a = []) :
                    (a = a || []).push(u, null));
              }
            for (u in r) {
              var l = r[u];
              if (
                ((s = null != i ? i[u] : void 0),
                  r.hasOwnProperty(u) && l !== s && (null != l || null != s))
              ) {
                if ("style" === u) {
                  if (s) {
                    for (o in s)
                      !s.hasOwnProperty(o) ||
                      (l && l.hasOwnProperty(o)) ||
                      (n || (n = {}), (n[o] = ""));
                    for (o in l)
                      l.hasOwnProperty(o) &&
                      s[o] !== l[o] &&
                      (n || (n = {}), (n[o] = l[o]));
                  } else n || (a || (a = []), a.push(u, n)), (n = l);
                } else
                  "dangerouslySetInnerHTML" === u ?
                  ((l = l ? l.__html : void 0),
                    (s = s ? s.__html : void 0),
                    null != l && s !== l && (a = a || []).push(u, l)) :
                  "children" === u ?
                  ("string" != typeof l && "number" != typeof l) ||
                  (a = a || []).push(u, "" + l) :
                  "suppressContentEditableWarning" !== u &&
                  "suppressHydrationWarning" !== u &&
                  (f.hasOwnProperty(u) ?
                    (null != l && "onScroll" === u && rm("scroll", e),
                      a || s === l || (a = [])) :
                    (a = a || []).push(u, l));
              }
            }
            n && (a = a || []).push("style", n);
            var u = a;
            (t.updateQueue = u) && (t.flags |= 4);
          }
        }),
        (s = function(e, t, n, r) {
          n !== r && (t.flags |= 4);
        });
        var aW = !1,
          a$ = !1,
          aK = "function" == typeof WeakSet ? WeakSet : Set,
          aQ = null;

        function aX(e, t) {
          var n = e.ref;
          if (null !== n) {
            if ("function" == typeof n)
              try {
                n(null);
              } catch (n) {
                s2(e, t, n);
              }
            else n.current = null;
          }
        }

        function aY(e, t, n) {
          try {
            n();
          } catch (n) {
            s2(e, t, n);
          }
        }
        var aG = !1;

        function aJ(e, t, n) {
          var r = t.updateQueue;
          if (null !== (r = null !== r ? r.lastEffect : null)) {
            var i = (r = r.next);
            do {
              if ((i.tag & e) === e) {
                var o = i.destroy;
                (i.destroy = void 0), void 0 !== o && aY(t, n, o);
              }
              i = i.next;
            } while (i !== r);
          }
        }

        function aZ(e, t) {
          if (
            null !== (t = null !== (t = t.updateQueue) ? t.lastEffect : null)
          ) {
            var n = (t = t.next);
            do {
              if ((n.tag & e) === e) {
                var r = n.create;
                n.destroy = r();
              }
              n = n.next;
            } while (n !== t);
          }
        }

        function a0(e) {
          var t = e.ref;
          if (null !== t) {
            var n = e.stateNode;
            e.tag, (e = n), "function" == typeof t ? t(e) : (t.current = e);
          }
        }

        function a1(e) {
          return 5 === e.tag || 3 === e.tag || 4 === e.tag;
        }

        function a2(e) {
          e: for (;;) {
            for (; null === e.sibling;) {
              if (null === e.return || a1(e.return)) return null;
              e = e.return;
            }
            for (
              e.sibling.return = e.return, e = e.sibling; 5 !== e.tag && 6 !== e.tag && 18 !== e.tag;

            ) {
              if (2 & e.flags || null === e.child || 4 === e.tag) continue e;
              (e.child.return = e), (e = e.child);
            }
            if (!(2 & e.flags)) return e.stateNode;
          }
        }
        var a3 = null,
          a4 = !1;

        function a5(e, t, n) {
          for (n = n.child; null !== n;) a6(e, t, n), (n = n.sibling);
        }

        function a6(e, t, n) {
          if (tc && "function" == typeof tc.onCommitFiberUnmount)
            try {
              tc.onCommitFiberUnmount(tu, n);
            } catch (e) {}
          switch (n.tag) {
            case 5:
              a$ || aX(n, t);
            case 6:
              var r = a3,
                i = a4;
              (a3 = null),
              a5(e, t, n),
                (a3 = r),
                (a4 = i),
                null !== a3 &&
                (a4 ?
                  ((e = a3),
                    (n = n.stateNode),
                    8 === e.nodeType ?
                    e.parentNode.removeChild(n) :
                    e.removeChild(n)) :
                  a3.removeChild(n.stateNode));
              break;
            case 18:
              null !== a3 &&
                (a4 ?
                  ((e = a3),
                    (n = n.stateNode),
                    8 === e.nodeType ?
                    rU(e.parentNode, n) :
                    1 === e.nodeType && rU(e, n),
                    t$(e)) :
                  rU(a3, n.stateNode));
              break;
            case 4:
              (r = a3),
              (i = a4),
              (a3 = n.stateNode.containerInfo),
              (a4 = !0),
              a5(e, t, n),
                (a3 = r),
                (a4 = i);
              break;
            case 0:
            case 11:
            case 14:
            case 15:
              if (
                !a$ &&
                null !== (r = n.updateQueue) &&
                null !== (r = r.lastEffect)
              ) {
                i = r = r.next;
                do {
                  var o = i,
                    a = o.destroy;
                  (o = o.tag),
                  void 0 !== a &&
                    (0 != (2 & o) ?
                      aY(n, t, a) :
                      0 != (4 & o) && aY(n, t, a)),
                    (i = i.next);
                } while (i !== r);
              }
              a5(e, t, n);
              break;
            case 1:
              if (
                !a$ &&
                (aX(n, t),
                  "function" == typeof(r = n.stateNode).componentWillUnmount)
              )
                try {
                  (r.props = n.memoizedProps),
                  (r.state = n.memoizedState),
                  r.componentWillUnmount();
                } catch (e) {
                  s2(n, t, e);
                }
              a5(e, t, n);
              break;
            case 21:
            default:
              a5(e, t, n);
              break;
            case 22:
              1 & n.mode ?
                ((a$ = (r = a$) || null !== n.memoizedState),
                  a5(e, t, n),
                  (a$ = r)) :
                a5(e, t, n);
          }
        }

        function a8(e) {
          var t = e.updateQueue;
          if (null !== t) {
            e.updateQueue = null;
            var n = e.stateNode;
            null === n && (n = e.stateNode = new aK()),
              t.forEach(function(t) {
                var r = s6.bind(null, e, t);
                n.has(t) || (n.add(t), t.then(r, r));
              });
          }
        }

        function a9(e, t) {
          var n = t.deletions;
          if (null !== n)
            for (var r = 0; r < n.length; r++) {
              var i = n[r];
              try {
                var o = t,
                  a = o;
                e: for (; null !== a;) {
                  switch (a.tag) {
                    case 5:
                      (a3 = a.stateNode), (a4 = !1);
                      break e;
                    case 3:
                    case 4:
                      (a3 = a.stateNode.containerInfo), (a4 = !0);
                      break e;
                  }
                  a = a.return;
                }
                if (null === a3) throw Error(p(160));
                a6(e, o, i), (a3 = null), (a4 = !1);
                var s = i.alternate;
                null !== s && (s.return = null), (i.return = null);
              } catch (e) {
                s2(i, t, e);
              }
            }
          if (12854 & t.subtreeFlags)
            for (t = t.child; null !== t;) a7(t, e), (t = t.sibling);
        }

        function a7(e, t) {
          var n = e.alternate,
            r = e.flags;
          switch (e.tag) {
            case 0:
            case 11:
            case 14:
            case 15:
              if ((a9(t, e), se(e), 4 & r)) {
                try {
                  aJ(3, e, e.return), aZ(3, e);
                } catch (t) {
                  s2(e, e.return, t);
                }
                try {
                  aJ(5, e, e.return);
                } catch (t) {
                  s2(e, e.return, t);
                }
              }
              break;
            case 1:
              a9(t, e), se(e), 512 & r && null !== n && aX(n, n.return);
              break;
            case 5:
              if (
                (a9(t, e),
                  se(e),
                  512 & r && null !== n && aX(n, n.return),
                  32 & e.flags)
              ) {
                var i = e.stateNode;
                try {
                  eP(i, "");
                } catch (t) {
                  s2(e, e.return, t);
                }
              }
              if (4 & r && null != (i = e.stateNode)) {
                var o = e.memoizedProps,
                  a = null !== n ? n.memoizedProps : o,
                  s = e.type,
                  l = e.updateQueue;
                if (((e.updateQueue = null), null !== l))
                  try {
                    "input" === s &&
                      "radio" === o.type &&
                      null != o.name &&
                      ef(i, o),
                      eN(s, a);
                    var u = eN(s, o);
                    for (a = 0; a < l.length; a += 2) {
                      var c = l[a],
                        d = l[a + 1];
                      "style" === c
                        ?
                        eD(i, d) :
                        "dangerouslySetInnerHTML" === c ?
                        eC(i, d) :
                        "children" === c ?
                        eP(i, d) :
                        T(i, c, d, u);
                    }
                    switch (s) {
                      case "input":
                        eh(i, o);
                        break;
                      case "textarea":
                        ex(i, o);
                        break;
                      case "select":
                        var f = i._wrapperState.wasMultiple;
                        i._wrapperState.wasMultiple = !!o.multiple;
                        var h = o.value;
                        null != h ?
                          ev(i, !!o.multiple, h, !1) :
                          !!o.multiple !== f &&
                          (null != o.defaultValue ?
                            ev(i, !!o.multiple, o.defaultValue, !0) :
                            ev(
                              i,
                              !!o.multiple,
                              o.multiple ? [] : "",
                              !1
                            ));
                    }
                    i[rq] = o;
                  } catch (t) {
                    s2(e, e.return, t);
                  }
              }
              break;
            case 6:
              if ((a9(t, e), se(e), 4 & r)) {
                if (null === e.stateNode) throw Error(p(162));
                (i = e.stateNode), (o = e.memoizedProps);
                try {
                  i.nodeValue = o;
                } catch (t) {
                  s2(e, e.return, t);
                }
              }
              break;
            case 3:
              if (
                (a9(t, e),
                  se(e),
                  4 & r && null !== n && n.memoizedState.isDehydrated)
              )
                try {
                  t$(t.containerInfo);
                } catch (t) {
                  s2(e, e.return, t);
                }
              break;
            case 4:
            default:
              a9(t, e), se(e);
              break;
            case 13:
              a9(t, e),
                se(e),
                8192 & (i = e.child).flags &&
                ((o = null !== i.memoizedState),
                  (i.stateNode.isHidden = o),
                  o &&
                  (null === i.alternate ||
                    null === i.alternate.memoizedState) &&
                  (sx = tn())),
                4 & r && a8(e);
              break;
            case 22:
              if (
                ((c = null !== n && null !== n.memoizedState),
                  1 & e.mode ?
                  ((a$ = (u = a$) || c), a9(t, e), (a$ = u)) :
                  a9(t, e),
                  se(e),
                  8192 & r)
              ) {
                if (
                  ((u = null !== e.memoizedState),
                    (e.stateNode.isHidden = u) && !c && 0 != (1 & e.mode))
                )
                  for (aQ = e, c = e.child; null !== c;) {
                    for (d = aQ = c; null !== aQ;) {
                      switch (((h = (f = aQ).child), f.tag)) {
                        case 0:
                        case 11:
                        case 14:
                        case 15:
                          aJ(4, f, f.return);
                          break;
                        case 1:
                          aX(f, f.return);
                          var m = f.stateNode;
                          if ("function" == typeof m.componentWillUnmount) {
                            (r = f), (n = f.return);
                            try {
                              (t = r),
                              (m.props = t.memoizedProps),
                              (m.state = t.memoizedState),
                              m.componentWillUnmount();
                            } catch (e) {
                              s2(r, n, e);
                            }
                          }
                          break;
                        case 5:
                          aX(f, f.return);
                          break;
                        case 22:
                          if (null !== f.memoizedState) {
                            sn(d);
                            continue;
                          }
                      }
                      null !== h ? ((h.return = f), (aQ = h)) : sn(d);
                    }
                    c = c.sibling;
                  }
                e: for (c = null, d = e;;) {
                  if (5 === d.tag) {
                    if (null === c) {
                      c = d;
                      try {
                        (i = d.stateNode),
                        u
                          ?
                          ((o = i.style),
                            "function" == typeof o.setProperty ?
                            o.setProperty(
                              "display",
                              "none",
                              "important"
                            ) :
                            (o.display = "none")) :
                          ((s = d.stateNode),
                            (a =
                              null != (l = d.memoizedProps.style) &&
                              l.hasOwnProperty("display") ?
                              l.display :
                              null),
                            (s.style.display = ej("display", a)));
                      } catch (t) {
                        s2(e, e.return, t);
                      }
                    }
                  } else if (6 === d.tag) {
                    if (null === c)
                      try {
                        d.stateNode.nodeValue = u ? "" : d.memoizedProps;
                      } catch (t) {
                        s2(e, e.return, t);
                      }
                  } else if (
                    ((22 !== d.tag && 23 !== d.tag) ||
                      null === d.memoizedState ||
                      d === e) &&
                    null !== d.child
                  ) {
                    (d.child.return = d), (d = d.child);
                    continue;
                  }
                  if (d === e) break;
                  for (; null === d.sibling;) {
                    if (null === d.return || d.return === e) break e;
                    c === d && (c = null), (d = d.return);
                  }
                  c === d && (c = null),
                    (d.sibling.return = d.return),
                    (d = d.sibling);
                }
              }
              break;
            case 19:
              a9(t, e), se(e), 4 & r && a8(e);
            case 21:
          }
        }

        function se(e) {
          var t = e.flags;
          if (2 & t) {
            try {
              e: {
                for (var n = e.return; null !== n;) {
                  if (a1(n)) {
                    var r = n;
                    break e;
                  }
                  n = n.return;
                }
                throw Error(p(160));
              }
              switch (r.tag) {
                case 5:
                  var i = r.stateNode;
                  32 & r.flags && (eP(i, ""), (r.flags &= -33));
                  var o = a2(e);
                  !(function e(t, n, r) {
                    var i = t.tag;
                    if (5 === i || 6 === i)
                      (t = t.stateNode),
                      n ? r.insertBefore(t, n) : r.appendChild(t);
                    else if (4 !== i && null !== (t = t.child))
                      for (e(t, n, r), t = t.sibling; null !== t;)
                        e(t, n, r), (t = t.sibling);
                  })(e, o, i);
                  break;
                case 3:
                case 4:
                  var a = r.stateNode.containerInfo,
                    s = a2(e);
                  !(function e(t, n, r) {
                    var i = t.tag;
                    if (5 === i || 6 === i)
                      (t = t.stateNode),
                      n ?
                      8 === r.nodeType ?
                      r.parentNode.insertBefore(t, n) :
                      r.insertBefore(t, n) :
                      (8 === r.nodeType ?
                        (n = r.parentNode).insertBefore(t, r) :
                        (n = r).appendChild(t),
                        null != (r = r._reactRootContainer) ||
                        null !== n.onclick ||
                        (n.onclick = rO));
                    else if (4 !== i && null !== (t = t.child))
                      for (e(t, n, r), t = t.sibling; null !== t;)
                        e(t, n, r), (t = t.sibling);
                  })(e, s, a);
                  break;
                default:
                  throw Error(p(161));
              }
            }
            catch (t) {
              s2(e, e.return, t);
            }
            e.flags &= -3;
          }
          4096 & t && (e.flags &= -4097);
        }

        function st(e) {
          for (; null !== aQ;) {
            var t = aQ;
            if (0 != (8772 & t.flags)) {
              var n = t.alternate;
              try {
                if (0 != (8772 & t.flags))
                  switch (t.tag) {
                    case 0:
                    case 11:
                    case 15:
                      a$ || aZ(5, t);
                      break;
                    case 1:
                      var r = t.stateNode;
                      if (4 & t.flags && !a$) {
                        if (null === n) r.componentDidMount();
                        else {
                          var i =
                            t.elementType === t.type ?
                            n.memoizedProps :
                            iU(t.type, n.memoizedProps);
                          r.componentDidUpdate(
                            i,
                            n.memoizedState,
                            r.__reactInternalSnapshotBeforeUpdate
                          );
                        }
                      }
                      var o = t.updateQueue;
                      null !== o && i6(t, o, r);
                      break;
                    case 3:
                      var a = t.updateQueue;
                      if (null !== a) {
                        if (((n = null), null !== t.child))
                          switch (t.child.tag) {
                            case 5:
                            case 1:
                              n = t.child.stateNode;
                          }
                        i6(t, a, n);
                      }
                      break;
                    case 5:
                      var s = t.stateNode;
                      if (null === n && 4 & t.flags) {
                        n = s;
                        var l = t.memoizedProps;
                        switch (t.type) {
                          case "button":
                          case "input":
                          case "select":
                          case "textarea":
                            l.autoFocus && n.focus();
                            break;
                          case "img":
                            l.src && (n.src = l.src);
                        }
                      }
                      break;
                    case 6:
                    case 4:
                    case 12:
                    case 19:
                    case 17:
                    case 21:
                    case 22:
                    case 23:
                    case 25:
                      break;
                    case 13:
                      if (null === t.memoizedState) {
                        var u = t.alternate;
                        if (null !== u) {
                          var c = u.memoizedState;
                          if (null !== c) {
                            var d = c.dehydrated;
                            null !== d && t$(d);
                          }
                        }
                      }
                      break;
                    default:
                      throw Error(p(163));
                  }
                a$ || (512 & t.flags && a0(t));
              } catch (e) {
                s2(t, t.return, e);
              }
            }
            if (t === e) {
              aQ = null;
              break;
            }
            if (null !== (n = t.sibling)) {
              (n.return = t.return), (aQ = n);
              break;
            }
            aQ = t.return;
          }
        }

        function sn(e) {
          for (; null !== aQ;) {
            var t = aQ;
            if (t === e) {
              aQ = null;
              break;
            }
            var n = t.sibling;
            if (null !== n) {
              (n.return = t.return), (aQ = n);
              break;
            }
            aQ = t.return;
          }
        }

        function sr(e) {
          for (; null !== aQ;) {
            var t = aQ;
            try {
              switch (t.tag) {
                case 0:
                case 11:
                case 15:
                  var n = t.return;
                  try {
                    aZ(4, t);
                  } catch (e) {
                    s2(t, n, e);
                  }
                  break;
                case 1:
                  var r = t.stateNode;
                  if ("function" == typeof r.componentDidMount) {
                    var i = t.return;
                    try {
                      r.componentDidMount();
                    } catch (e) {
                      s2(t, i, e);
                    }
                  }
                  var o = t.return;
                  try {
                    a0(t);
                  } catch (e) {
                    s2(t, o, e);
                  }
                  break;
                case 5:
                  var a = t.return;
                  try {
                    a0(t);
                  } catch (e) {
                    s2(t, a, e);
                  }
              }
            } catch (e) {
              s2(t, t.return, e);
            }
            if (t === e) {
              aQ = null;
              break;
            }
            var s = t.sibling;
            if (null !== s) {
              (s.return = t.return), (aQ = s);
              break;
            }
            aQ = t.return;
          }
        }
        var si = Math.ceil,
          so = E.ReactCurrentDispatcher,
          sa = E.ReactCurrentOwner,
          ss = E.ReactCurrentBatchConfig,
          sl = 0,
          su = null,
          sc = null,
          sp = 0,
          sd = 0,
          sf = r0(0),
          sh = 0,
          sm = null,
          sy = 0,
          sg = 0,
          sv = 0,
          sb = null,
          sw = null,
          sx = 0,
          sS = 1 / 0,
          sk = null,
          s_ = !1,
          sT = null,
          sE = null,
          sC = !1,
          sP = null,
          sO = 0,
          sA = 0,
          sj = null,
          sD = -1,
          sR = 0;

        function sM() {
          return 0 != (6 & sl) ? tn() : -1 !== sD ? sD : (sD = tn());
        }

        function sN(e) {
          return 0 == (1 & e.mode) ?
            1 :
            0 != (2 & sl) && 0 !== sp ?
            sp & -sp :
            null !== iI.transition ?
            (0 === sR && (sR = tb()), sR) :
            0 !== (e = tk) ?
            e :
            (e = void 0 === (e = window.event) ? 16 : t0(e.type));
        }

        function sL(e, t, n, r) {
          if (50 < sA) throw ((sA = 0), (sj = null), Error(p(185)));
          tx(e, n, r),
            (0 == (2 & sl) || e !== su) &&
            (e === su &&
              (0 == (2 & sl) && (sg |= n), 4 === sh && sz(e, sp)),
              sI(e, r),
              1 === n &&
              0 === sl &&
              0 == (1 & t.mode) &&
              ((sS = tn() + 500), ia && iu()));
        }

        function sI(e, t) {
          var n,
            r = e.callbackNode;
          !(function(e, t) {
            for (
              var n = e.suspendedLanes,
                r = e.pingedLanes,
                i = e.expirationTimes,
                o = e.pendingLanes; 0 < o;

            ) {
              var a = 31 - tp(o),
                s = 1 << a,
                l = i[a]; -
              1 === l ?
                (0 == (s & n) || 0 != (s & r)) &&
                (i[a] = (function(e, t) {
                  switch (e) {
                    case 1:
                    case 2:
                    case 4:
                      return t + 250;
                    case 8:
                    case 16:
                    case 32:
                    case 64:
                    case 128:
                    case 256:
                    case 512:
                    case 1024:
                    case 2048:
                    case 4096:
                    case 8192:
                    case 16384:
                    case 32768:
                    case 65536:
                    case 131072:
                    case 262144:
                    case 524288:
                    case 1048576:
                    case 2097152:
                      return t + 5e3;
                    default:
                      return -1;
                  }
                })(s, t)) :
                l <= t && (e.expiredLanes |= s),
                (o &= ~s);
            }
          })(e, t);
          var i = tg(e, e === su ? sp : 0);
          if (0 === i)
            null !== r && e7(r),
            (e.callbackNode = null),
            (e.callbackPriority = 0);
          else if (((t = i & -i), e.callbackPriority !== t)) {
            if ((null != r && e7(r), 1 === t))
              0 === e.tag ?
              ((n = sB.bind(null, e)), (ia = !0), il(n)) :
              il(sB.bind(null, e)),
              rL(function() {
                0 == (6 & sl) && iu();
              }),
              (r = null);
            else {
              switch (t_(i)) {
                case 1:
                  r = ti;
                  break;
                case 4:
                  r = to;
                  break;
                case 16:
                default:
                  r = ta;
                  break;
                case 536870912:
                  r = tl;
              }
              r = e9(r, sU.bind(null, e));
            }
            (e.callbackPriority = t), (e.callbackNode = r);
          }
        }

        function sU(e, t) {
          if (((sD = -1), (sR = 0), 0 != (6 & sl))) throw Error(p(327));
          var n = e.callbackNode;
          if (s0() && e.callbackNode !== n) return null;
          var r = tg(e, e === su ? sp : 0);
          if (0 === r) return null;
          if (0 != (30 & r) || 0 != (r & e.expiredLanes) || t) t = sY(e, r);
          else {
            t = r;
            var i = sl;
            sl |= 2;
            var o = sQ();
            for (
              (su !== e || sp !== t) &&
              ((sk = null), (sS = tn() + 500), s$(e, t));;

            )
              try {
                (function() {
                  for (; null !== sc && !te();) sG(sc);
                })();
                break;
              } catch (t) {
                sK(e, t);
              }
            iq(),
              (so.current = o),
              (sl = i),
              null !== sc ? (t = 0) : ((su = null), (sp = 0), (t = sh));
          }
          if (0 !== t) {
            if (
              (2 === t && 0 !== (i = tv(e)) && ((r = i), (t = sF(e, i))),
                1 === t)
            )
              throw ((n = sm), s$(e, 0), sz(e, r), sI(e, tn()), n);
            if (6 === t) sz(e, r);
            else {
              if (
                ((i = e.current.alternate),
                  0 == (30 & r) &&
                  !(function(e) {
                    for (var t = e;;) {
                      if (16384 & t.flags) {
                        var n = t.updateQueue;
                        if (null !== n && null !== (n = n.stores))
                          for (var r = 0; r < n.length; r++) {
                            var i = n[r],
                              o = i.getSnapshot;
                            i = i.value;
                            try {
                              if (!nX(o(), i)) return !1;
                            } catch (e) {
                              return !1;
                            }
                          }
                      }
                      if (
                        ((n = t.child), 16384 & t.subtreeFlags && null !== n)
                      )
                        (n.return = t), (t = n);
                      else {
                        if (t === e) break;
                        for (; null === t.sibling;) {
                          if (null === t.return || t.return === e) return !0;
                          t = t.return;
                        }
                        (t.sibling.return = t.return), (t = t.sibling);
                      }
                    }
                    return !0;
                  })(i) &&
                  (2 === (t = sY(e, r)) &&
                    0 !== (o = tv(e)) &&
                    ((r = o), (t = sF(e, o))),
                    1 === t))
              )
                throw ((n = sm), s$(e, 0), sz(e, r), sI(e, tn()), n);
              switch (((e.finishedWork = i), (e.finishedLanes = r), t)) {
                case 0:
                case 1:
                  throw Error(p(345));
                case 2:
                case 5:
                  sZ(e, sw, sk);
                  break;
                case 3:
                  if (
                    (sz(e, r),
                      (130023424 & r) === r && 10 < (t = sx + 500 - tn()))
                  ) {
                    if (0 !== tg(e, 0)) break;
                    if (((i = e.suspendedLanes) & r) !== r) {
                      sM(), (e.pingedLanes |= e.suspendedLanes & i);
                      break;
                    }
                    e.timeoutHandle = rR(sZ.bind(null, e, sw, sk), t);
                    break;
                  }
                  sZ(e, sw, sk);
                  break;
                case 4:
                  if ((sz(e, r), (4194240 & r) === r)) break;
                  for (i = -1, t = e.eventTimes; 0 < r;) {
                    var a = 31 - tp(r);
                    (o = 1 << a), (a = t[a]) > i && (i = a), (r &= ~o);
                  }
                  if (
                    ((r = i),
                      10 <
                      (r =
                        (120 > (r = tn() - r) ?
                          120 :
                          480 > r ?
                          480 :
                          1080 > r ?
                          1080 :
                          1920 > r ?
                          1920 :
                          3e3 > r ?
                          3e3 :
                          4320 > r ?
                          4320 :
                          1960 * si(r / 1960)) - r))
                  ) {
                    e.timeoutHandle = rR(sZ.bind(null, e, sw, sk), r);
                    break;
                  }
                  sZ(e, sw, sk);
                  break;
                default:
                  throw Error(p(329));
              }
            }
          }
          return sI(e, tn()), e.callbackNode === n ? sU.bind(null, e) : null;
        }

        function sF(e, t) {
          var n = sb;
          return (
            e.current.memoizedState.isDehydrated && (s$(e, t).flags |= 256),
            2 !== (e = sY(e, t)) && ((t = sw), (sw = n), null !== t && sV(t)),
            e
          );
        }

        function sV(e) {
          null === sw ? (sw = e) : sw.push.apply(sw, e);
        }

        function sz(e, t) {
          for (
            t &= ~sv,
            t &= ~sg,
            e.suspendedLanes |= t,
            e.pingedLanes &= ~t,
            e = e.expirationTimes; 0 < t;

          ) {
            var n = 31 - tp(t),
              r = 1 << n;
            (e[n] = -1), (t &= ~r);
          }
        }

        function sB(e) {
          if (0 != (6 & sl)) throw Error(p(327));
          s0();
          var t = tg(e, 0);
          if (0 == (1 & t)) return sI(e, tn()), null;
          var n = sY(e, t);
          if (0 !== e.tag && 2 === n) {
            var r = tv(e);
            0 !== r && ((t = r), (n = sF(e, r)));
          }
          if (1 === n) throw ((n = sm), s$(e, 0), sz(e, t), sI(e, tn()), n);
          if (6 === n) throw Error(p(345));
          return (
            (e.finishedWork = e.current.alternate),
            (e.finishedLanes = t),
            sZ(e, sw, sk),
            sI(e, tn()),
            null
          );
        }

        function sq(e, t) {
          var n = sl;
          sl |= 1;
          try {
            return e(t);
          } finally {
            0 === (sl = n) && ((sS = tn() + 500), ia && iu());
          }
        }

        function sH(e) {
          null !== sP && 0 === sP.tag && 0 == (6 & sl) && s0();
          var t = sl;
          sl |= 1;
          var n = ss.transition,
            r = tk;
          try {
            if (((ss.transition = null), (tk = 1), e)) return e();
          } finally {
            (tk = r), (ss.transition = n), 0 == (6 & (sl = t)) && iu();
          }
        }

        function sW() {
          (sd = sf.current), r1(sf);
        }

        function s$(e, t) {
          (e.finishedWork = null), (e.finishedLanes = 0);
          var n = e.timeoutHandle;
          if ((-1 !== n && ((e.timeoutHandle = -1), rM(n)), null !== sc))
            for (n = sc.return; null !== n;) {
              var r = n;
              switch ((ik(r), r.tag)) {
                case 1:
                  null != (r = r.type.childContextTypes) && r7();
                  break;
                case 3:
                  oy(), r1(r5), r1(r4), oS();
                  break;
                case 5:
                  ov(r);
                  break;
                case 4:
                  oy();
                  break;
                case 13:
                case 19:
                  r1(ob);
                  break;
                case 10:
                  iH(r.type._context);
                  break;
                case 22:
                case 23:
                  sW();
              }
              n = n.return;
            }
          if (
            ((su = e),
              (sc = e = le(e.current, null)),
              (sp = sd = t),
              (sh = 0),
              (sm = null),
              (sv = sg = sy = 0),
              (sw = sb = null),
              null !== iQ)
          ) {
            for (t = 0; t < iQ.length; t++)
              if (null !== (r = (n = iQ[t]).interleaved)) {
                n.interleaved = null;
                var i = r.next,
                  o = n.pending;
                if (null !== o) {
                  var a = o.next;
                  (o.next = i), (r.next = a);
                }
                n.pending = r;
              }
            iQ = null;
          }
          return e;
        }

        function sK(e, t) {
          for (;;) {
            var n = sc;
            try {
              if ((iq(), (ok.current = as), oO)) {
                for (var r = oE.memoizedState; null !== r;) {
                  var i = r.queue;
                  null !== i && (i.pending = null), (r = r.next);
                }
                oO = !1;
              }
              if (
                ((oT = 0),
                  (oP = oC = oE = null),
                  (oA = !1),
                  (oj = 0),
                  (sa.current = null),
                  null === n || null === n.return)
              ) {
                (sh = 1), (sm = t), (sc = null);
                break;
              }
              e: {
                var o = e,
                  a = n.return,
                  s = n,
                  l = t;
                if (
                  ((t = sp),
                    (s.flags |= 32768),
                    null !== l &&
                    "object" == typeof l &&
                    "function" == typeof l.then)
                ) {
                  var u = l,
                    c = s,
                    d = c.tag;
                  if (
                    0 == (1 & c.mode) &&
                    (0 === d || 11 === d || 15 === d)
                  ) {
                    var f = c.alternate;
                    f
                      ?
                      ((c.updateQueue = f.updateQueue),
                        (c.memoizedState = f.memoizedState),
                        (c.lanes = f.lanes)) :
                      ((c.updateQueue = null), (c.memoizedState = null));
                  }
                  var h = av(a);
                  if (null !== h) {
                    (h.flags &= -257),
                    ab(h, a, s, o, t),
                      1 & h.mode && ag(o, u, t),
                      (t = h),
                      (l = u);
                    var m = t.updateQueue;
                    if (null === m) {
                      var y = new Set();
                      y.add(l), (t.updateQueue = y);
                    } else m.add(l);
                    break e;
                  }
                  if (0 == (1 & t)) {
                    ag(o, u, t), sX();
                    break e;
                  }
                  l = Error(p(426));
                } else if (iE && 1 & s.mode) {
                  var g = av(a);
                  if (null !== g) {
                    0 == (65536 & g.flags) && (g.flags |= 256),
                      ab(g, a, s, o, t),
                      iL(ap(l, s));
                    break e;
                  }
                }
                (o = l = ap(l, s)),
                4 !== sh && (sh = 2),
                null === sb ? (sb = [o]) : sb.push(o),
                (o = a);
                do {
                  switch (o.tag) {
                    case 3:
                      (o.flags |= 65536), (t &= -t), (o.lanes |= t);
                      var v = am(o, l, t);
                      i4(o, v);
                      break e;
                    case 1:
                      s = l;
                      var b = o.type,
                        w = o.stateNode;
                      if (
                        0 == (128 & o.flags) &&
                        ("function" == typeof b.getDerivedStateFromError ||
                          (null !== w &&
                            "function" == typeof w.componentDidCatch &&
                            (null === sE || !sE.has(w))))
                      ) {
                        (o.flags |= 65536), (t &= -t), (o.lanes |= t);
                        var x = ay(o, s, t);
                        i4(o, x);
                        break e;
                      }
                  }
                  o = o.return;
                } while (null !== o);
              }
              sJ(n);
            } catch (e) {
              (t = e), sc === n && null !== n && (sc = n = n.return);
              continue;
            }
            break;
          }
        }

        function sQ() {
          var e = so.current;
          return (so.current = as), null === e ? as : e;
        }

        function sX() {
          (0 === sh || 3 === sh || 2 === sh) && (sh = 4),
          null === su ||
            (0 == (268435455 & sy) && 0 == (268435455 & sg)) ||
            sz(su, sp);
        }

        function sY(e, t) {
          var n = sl;
          sl |= 2;
          var r = sQ();
          for ((su !== e || sp !== t) && ((sk = null), s$(e, t));;)
            try {
              (function() {
                for (; null !== sc;) sG(sc);
              })();
              break;
            } catch (t) {
              sK(e, t);
            }
          if ((iq(), (sl = n), (so.current = r), null !== sc))
            throw Error(p(261));
          return (su = null), (sp = 0), sh;
        }

        function sG(e) {
          var t = l(e.alternate, e, sd);
          (e.memoizedProps = e.pendingProps),
          null === t ? sJ(e) : (sc = t),
            (sa.current = null);
        }

        function sJ(e) {
          var t = e;
          do {
            var n = t.alternate;
            if (((e = t.return), 0 == (32768 & t.flags))) {
              if (
                null !==
                (n = (function(e, t, n) {
                  var r = t.pendingProps;
                  switch ((ik(t), t.tag)) {
                    case 2:
                    case 16:
                    case 15:
                    case 0:
                    case 11:
                    case 7:
                    case 8:
                    case 12:
                    case 9:
                    case 14:
                      return aH(t), null;
                    case 1:
                    case 17:
                      return r9(t.type) && r7(), aH(t), null;
                    case 3:
                      return (
                        (r = t.stateNode),
                        oy(),
                        r1(r5),
                        r1(r4),
                        oS(),
                        r.pendingContext &&
                        ((r.context = r.pendingContext),
                          (r.pendingContext = null)),
                        (null === e || null === e.child) &&
                        (iR(t) ?
                          (t.flags |= 4) :
                          null === e ||
                          (e.memoizedState.isDehydrated &&
                            0 == (256 & t.flags)) ||
                          ((t.flags |= 1024),
                            null !== iC && (sV(iC), (iC = null)))),
                        o(e, t),
                        aH(t),
                        null
                      );
                    case 5:
                      ov(t);
                      var l = oh(of.current);
                      if (((n = t.type), null !== e && null != t.stateNode))
                        a(e, t, n, r, l),
                        e.ref !== t.ref &&
                        ((t.flags |= 512), (t.flags |= 2097152));
                      else {
                        if (!r) {
                          if (null === t.stateNode) throw Error(p(166));
                          return aH(t), null;
                        }
                        if (((e = oh(op.current)), iR(t))) {
                          (r = t.stateNode), (n = t.type);
                          var u = t.memoizedProps;
                          switch (
                            ((r[rB] = t),
                              (r[rq] = u),
                              (e = 0 != (1 & t.mode)),
                              n)
                          ) {
                            case "dialog":
                              rm("cancel", r), rm("close", r);
                              break;
                            case "iframe":
                            case "object":
                            case "embed":
                              rm("load", r);
                              break;
                            case "video":
                            case "audio":
                              for (l = 0; l < rp.length; l++) rm(rp[l], r);
                              break;
                            case "source":
                              rm("error", r);
                              break;
                            case "img":
                            case "image":
                            case "link":
                              rm("error", r), rm("load", r);
                              break;
                            case "details":
                              rm("toggle", r);
                              break;
                            case "input":
                              ed(r, u), rm("invalid", r);
                              break;
                            case "select":
                              (r._wrapperState = {
                                wasMultiple: !!u.multiple,
                              }),
                              rm("invalid", r);
                              break;
                            case "textarea":
                              ew(r, u), rm("invalid", r);
                          }
                          for (var c in (eM(n, u), (l = null), u))
                            if (u.hasOwnProperty(c)) {
                              var d = u[c];
                              "children" === c
                                ?
                                "string" == typeof d ?
                                r.textContent !== d &&
                                (!0 !== u.suppressHydrationWarning &&
                                  rP(r.textContent, d, e),
                                  (l = ["children", d])) :
                                "number" == typeof d &&
                                r.textContent !== "" + d &&
                                (!0 !== u.suppressHydrationWarning &&
                                  rP(r.textContent, d, e),
                                  (l = ["children", "" + d])) :
                                f.hasOwnProperty(c) &&
                                null != d &&
                                "onScroll" === c &&
                                rm("scroll", r);
                            }
                          switch (n) {
                            case "input":
                              el(r), em(r, u, !0);
                              break;
                            case "textarea":
                              el(r), eS(r);
                              break;
                            case "select":
                            case "option":
                              break;
                            default:
                              "function" == typeof u.onClick &&
                                (r.onclick = rO);
                          }
                          (r = l),
                          (t.updateQueue = r),
                          null !== r && (t.flags |= 4);
                        } else {
                          (c = 9 === l.nodeType ? l : l.ownerDocument),
                          "http://www.w3.org/1999/xhtml" === e &&
                            (e = ek(n)),
                            "http://www.w3.org/1999/xhtml" === e ?
                            "script" === n ?
                            (((e = c.createElement("div")).innerHTML =
                                "<script></\script>"),
                              (e = e.removeChild(e.firstChild))) :
                            "string" == typeof r.is ?
                            (e = c.createElement(n, {
                              is: r.is
                            })) :
                            ((e = c.createElement(n)),
                              "select" === n &&
                              ((c = e),
                                r.multiple ?
                                (c.multiple = !0) :
                                r.size && (c.size = r.size))) :
                            (e = c.createElementNS(e, n)),
                            (e[rB] = t),
                            (e[rq] = r),
                            i(e, t, !1, !1),
                            (t.stateNode = e);
                          e: {
                            switch (((c = eN(n, r)), n)) {
                              case "dialog":
                                rm("cancel", e), rm("close", e), (l = r);
                                break;
                              case "iframe":
                              case "object":
                              case "embed":
                                rm("load", e), (l = r);
                                break;
                              case "video":
                              case "audio":
                                for (l = 0; l < rp.length; l++) rm(rp[l], e);
                                l = r;
                                break;
                              case "source":
                                rm("error", e), (l = r);
                                break;
                              case "img":
                              case "image":
                              case "link":
                                rm("error", e), rm("load", e), (l = r);
                                break;
                              case "details":
                                rm("toggle", e), (l = r);
                                break;
                              case "input":
                                ed(e, r), (l = ep(e, r)), rm("invalid", e);
                                break;
                              case "option":
                              default:
                                l = r;
                                break;
                              case "select":
                                (e._wrapperState = {
                                  wasMultiple: !!r.multiple,
                                }),
                                (l = en({}, r, {
                                  value: void 0
                                })),
                                rm("invalid", e);
                                break;
                              case "textarea":
                                ew(e, r), (l = eb(e, r)), rm("invalid", e);
                            }
                            for (u in (eM(n, l), (d = l)))
                              if (d.hasOwnProperty(u)) {
                                var h = d[u];
                                "style" === u
                                  ?
                                  eD(e, h) :
                                  "dangerouslySetInnerHTML" === u ?
                                  null != (h = h ? h.__html : void 0) &&
                                  eC(e, h) :
                                  "children" === u ?
                                  "string" == typeof h ?
                                  ("textarea" !== n || "" !== h) &&
                                  eP(e, h) :
                                  "number" == typeof h && eP(e, "" + h) :
                                  "suppressContentEditableWarning" !== u &&
                                  "suppressHydrationWarning" !== u &&
                                  "autoFocus" !== u &&
                                  (f.hasOwnProperty(u) ?
                                    null != h &&
                                    "onScroll" === u &&
                                    rm("scroll", e) :
                                    null != h && T(e, u, h, c));
                              }
                            switch (n) {
                              case "input":
                                el(e), em(e, r, !1);
                                break;
                              case "textarea":
                                el(e), eS(e);
                                break;
                              case "option":
                                null != r.value &&
                                  e.setAttribute("value", "" + ea(r.value));
                                break;
                              case "select":
                                (e.multiple = !!r.multiple),
                                null != (u = r.value) ?
                                  ev(e, !!r.multiple, u, !1) :
                                  null != r.defaultValue &&
                                  ev(e, !!r.multiple, r.defaultValue, !0);
                                break;
                              default:
                                "function" == typeof l.onClick &&
                                  (e.onclick = rO);
                            }
                            switch (n) {
                              case "button":
                              case "input":
                              case "select":
                              case "textarea":
                                r = !!r.autoFocus;
                                break e;
                              case "img":
                                r = !0;
                                break e;
                              default:
                                r = !1;
                            }
                          }
                          r && (t.flags |= 4);
                        }
                        null !== t.ref &&
                          ((t.flags |= 512), (t.flags |= 2097152));
                      }
                      return aH(t), null;
                    case 6:
                      if (e && null != t.stateNode)
                        s(e, t, e.memoizedProps, r);
                      else {
                        if ("string" != typeof r && null === t.stateNode)
                          throw Error(p(166));
                        if (((n = oh(of.current)), oh(op.current), iR(t))) {
                          if (
                            ((r = t.stateNode),
                              (n = t.memoizedProps),
                              (r[rB] = t),
                              (u = r.nodeValue !== n) && null !== (e = i_))
                          )
                            switch (e.tag) {
                              case 3:
                                rP(r.nodeValue, n, 0 != (1 & e.mode));
                                break;
                              case 5:
                                !0 !==
                                  e.memoizedProps.suppressHydrationWarning &&
                                  rP(r.nodeValue, n, 0 != (1 & e.mode));
                            }
                          u && (t.flags |= 4);
                        } else
                          ((r = (
                            9 === n.nodeType ? n : n.ownerDocument
                          ).createTextNode(r))[rB] = t),
                          (t.stateNode = r);
                      }
                      return aH(t), null;
                    case 13:
                      if (
                        (r1(ob),
                          (r = t.memoizedState),
                          null === e ||
                          (null !== e.memoizedState &&
                            null !== e.memoizedState.dehydrated))
                      ) {
                        if (
                          iE &&
                          null !== iT &&
                          0 != (1 & t.mode) &&
                          0 == (128 & t.flags)
                        )
                          iM(), iN(), (t.flags |= 98560), (u = !1);
                        else if (
                          ((u = iR(t)), null !== r && null !== r.dehydrated)
                        ) {
                          if (null === e) {
                            if (!u) throw Error(p(318));
                            if (
                              !(u =
                                null !== (u = t.memoizedState) ?
                                u.dehydrated :
                                null)
                            )
                              throw Error(p(317));
                            u[rB] = t;
                          } else
                            iN(),
                            0 == (128 & t.flags) &&
                            (t.memoizedState = null),
                            (t.flags |= 4);
                          aH(t), (u = !1);
                        } else null !== iC && (sV(iC), (iC = null)), (u = !0);
                        if (!u) return 65536 & t.flags ? t : null;
                      }
                      if (0 != (128 & t.flags)) return (t.lanes = n), t;
                      return (
                        (r = null !== r) !=
                        (null !== e && null !== e.memoizedState) &&
                        r &&
                        ((t.child.flags |= 8192),
                          0 != (1 & t.mode) &&
                          (null === e || 0 != (1 & ob.current) ?
                            0 === sh && (sh = 3) :
                            sX())),
                        null !== t.updateQueue && (t.flags |= 4),
                        aH(t),
                        null
                      );
                    case 4:
                      return (
                        oy(),
                        o(e, t),
                        null === e && rv(t.stateNode.containerInfo),
                        aH(t),
                        null
                      );
                    case 10:
                      return iH(t.type._context), aH(t), null;
                    case 19:
                      if ((r1(ob), null === (u = t.memoizedState)))
                        return aH(t), null;
                      if (
                        ((r = 0 != (128 & t.flags)),
                          null === (c = u.rendering))
                      ) {
                        if (r) aq(u, !1);
                        else {
                          if (
                            0 !== sh ||
                            (null !== e && 0 != (128 & e.flags))
                          )
                            for (e = t.child; null !== e;) {
                              if (null !== (c = ow(e))) {
                                for (
                                  t.flags |= 128,
                                  aq(u, !1),
                                  null !== (r = c.updateQueue) &&
                                  ((t.updateQueue = r), (t.flags |= 4)),
                                  t.subtreeFlags = 0,
                                  r = n,
                                  n = t.child; null !== n;

                                )
                                  (u = n),
                                  (e = r),
                                  (u.flags &= 14680066),
                                  null === (c = u.alternate) ?
                                  ((u.childLanes = 0),
                                    (u.lanes = e),
                                    (u.child = null),
                                    (u.subtreeFlags = 0),
                                    (u.memoizedProps = null),
                                    (u.memoizedState = null),
                                    (u.updateQueue = null),
                                    (u.dependencies = null),
                                    (u.stateNode = null)) :
                                  ((u.childLanes = c.childLanes),
                                    (u.lanes = c.lanes),
                                    (u.child = c.child),
                                    (u.subtreeFlags = 0),
                                    (u.deletions = null),
                                    (u.memoizedProps = c.memoizedProps),
                                    (u.memoizedState = c.memoizedState),
                                    (u.updateQueue = c.updateQueue),
                                    (u.type = c.type),
                                    (e = c.dependencies),
                                    (u.dependencies =
                                      null === e ?
                                      null : {
                                        lanes: e.lanes,
                                        firstContext: e.firstContext,
                                      })),
                                  (n = n.sibling);
                                return r2(ob, (1 & ob.current) | 2), t.child;
                              }
                              e = e.sibling;
                            }
                          null !== u.tail &&
                            tn() > sS &&
                            ((t.flags |= 128),
                              (r = !0),
                              aq(u, !1),
                              (t.lanes = 4194304));
                        }
                      } else {
                        if (!r) {
                          if (null !== (e = ow(c))) {
                            if (
                              ((t.flags |= 128),
                                (r = !0),
                                null !== (n = e.updateQueue) &&
                                ((t.updateQueue = n), (t.flags |= 4)),
                                aq(u, !0),
                                null === u.tail &&
                                "hidden" === u.tailMode &&
                                !c.alternate &&
                                !iE)
                            )
                              return aH(t), null;
                          } else
                            2 * tn() - u.renderingStartTime > sS &&
                            1073741824 !== n &&
                            ((t.flags |= 128),
                              (r = !0),
                              aq(u, !1),
                              (t.lanes = 4194304));
                        }
                        u.isBackwards ?
                          ((c.sibling = t.child), (t.child = c)) :
                          (null !== (n = u.last) ?
                            (n.sibling = c) :
                            (t.child = c),
                            (u.last = c));
                      }
                      if (null !== u.tail)
                        return (
                          (t = u.tail),
                          (u.rendering = t),
                          (u.tail = t.sibling),
                          (u.renderingStartTime = tn()),
                          (t.sibling = null),
                          (n = ob.current),
                          r2(ob, r ? (1 & n) | 2 : 1 & n),
                          t
                        );
                      return aH(t), null;
                    case 22:
                    case 23:
                      return (
                        sW(),
                        (r = null !== t.memoizedState),
                        null !== e &&
                        (null !== e.memoizedState) !== r &&
                        (t.flags |= 8192),
                        r && 0 != (1 & t.mode) ?
                        0 != (1073741824 & sd) &&
                        (aH(t), 6 & t.subtreeFlags && (t.flags |= 8192)) :
                        aH(t),
                        null
                      );
                    case 24:
                    case 25:
                      return null;
                  }
                  throw Error(p(156, t.tag));
                })(n, t, sd))
              ) {
                sc = n;
                return;
              }
            } else {
              if (
                null !==
                (n = (function(e, t) {
                  switch ((ik(t), t.tag)) {
                    case 1:
                      return (
                        r9(t.type) && r7(),
                        65536 & (e = t.flags) ?
                        ((t.flags = (-65537 & e) | 128), t) :
                        null
                      );
                    case 3:
                      return (
                        oy(),
                        r1(r5),
                        r1(r4),
                        oS(),
                        0 != (65536 & (e = t.flags)) && 0 == (128 & e) ?
                        ((t.flags = (-65537 & e) | 128), t) :
                        null
                      );
                    case 5:
                      return ov(t), null;
                    case 13:
                      if (
                        (r1(ob),
                          null !== (e = t.memoizedState) &&
                          null !== e.dehydrated)
                      ) {
                        if (null === t.alternate) throw Error(p(340));
                        iN();
                      }
                      return 65536 & (e = t.flags) ?
                        ((t.flags = (-65537 & e) | 128), t) :
                        null;
                    case 19:
                      return r1(ob), null;
                    case 4:
                      return oy(), null;
                    case 10:
                      return iH(t.type._context), null;
                    case 22:
                    case 23:
                      return sW(), null;
                    default:
                      return null;
                  }
                })(n, t))
              ) {
                (n.flags &= 32767), (sc = n);
                return;
              }
              if (null !== e)
                (e.flags |= 32768),
                (e.subtreeFlags = 0),
                (e.deletions = null);
              else {
                (sh = 6), (sc = null);
                return;
              }
            }
            if (null !== (t = t.sibling)) {
              sc = t;
              return;
            }
            sc = t = e;
          } while (null !== t);
          0 === sh && (sh = 5);
        }

        function sZ(e, t, n) {
          var r = tk,
            i = ss.transition;
          try {
            (ss.transition = null),
            (tk = 1),
            (function(e, t, n, r) {
              do s0();
              while (null !== sP);
              if (0 != (6 & sl)) throw Error(p(327));
              n = e.finishedWork;
              var i = e.finishedLanes;
              if (null !== n) {
                if (
                  ((e.finishedWork = null),
                    (e.finishedLanes = 0),
                    n === e.current)
                )
                  throw Error(p(177));
                (e.callbackNode = null), (e.callbackPriority = 0);
                var o = n.lanes | n.childLanes;
                if (
                  ((function(e, t) {
                      var n = e.pendingLanes & ~t;
                      (e.pendingLanes = t),
                      (e.suspendedLanes = 0),
                      (e.pingedLanes = 0),
                      (e.expiredLanes &= t),
                      (e.mutableReadLanes &= t),
                      (e.entangledLanes &= t),
                      (t = e.entanglements);
                      var r = e.eventTimes;
                      for (e = e.expirationTimes; 0 < n;) {
                        var i = 31 - tp(n),
                          o = 1 << i;
                        (t[i] = 0), (r[i] = -1), (e[i] = -1), (n &= ~o);
                      }
                    })(e, o),
                    e === su && ((sc = su = null), (sp = 0)),
                    (0 == (2064 & n.subtreeFlags) && 0 == (2064 & n.flags)) ||
                    sC ||
                    ((sC = !0),
                      (a = ta),
                      (s = function() {
                        return s0(), null;
                      }),
                      e9(a, s)),
                    (o = 0 != (15990 & n.flags)),
                    0 != (15990 & n.subtreeFlags) || o)
                ) {
                  (o = ss.transition), (ss.transition = null);
                  var a,
                    s,
                    l,
                    u,
                    c,
                    d = tk;
                  tk = 1;
                  var f = sl;
                  (sl |= 4),
                  (sa.current = null),
                  (function(e, t) {
                    if (((rA = tQ), n0((e = nZ())))) {
                      if ("selectionStart" in e)
                        var n = {
                          start: e.selectionStart,
                          end: e.selectionEnd,
                        };
                      else
                        e: {
                          var r =
                            (n =
                              ((n = e.ownerDocument) && n.defaultView) ||
                              window).getSelection && n.getSelection();
                          if (r && 0 !== r.rangeCount) {
                            n = r.anchorNode;
                            var i,
                              o = r.anchorOffset,
                              a = r.focusNode;
                            r = r.focusOffset;
                            try {
                              n.nodeType, a.nodeType;
                            } catch (e) {
                              n = null;
                              break e;
                            }
                            var s = 0,
                              l = -1,
                              u = -1,
                              c = 0,
                              d = 0,
                              f = e,
                              h = null;
                            t: for (;;) {
                              for (; f !== n ||
                                (0 !== o && 3 !== f.nodeType) ||
                                (l = s + o),
                                f !== a ||
                                (0 !== r && 3 !== f.nodeType) ||
                                (u = s + r),
                                3 === f.nodeType &&
                                (s += f.nodeValue.length),
                                null !== (i = f.firstChild);

                              )
                                (h = f), (f = i);
                              for (;;) {
                                if (f === e) break t;
                                if (
                                  (h === n && ++c === o && (l = s),
                                    h === a && ++d === r && (u = s),
                                    null !== (i = f.nextSibling))
                                )
                                  break;
                                h = (f = h).parentNode;
                              }
                              f = i;
                            }
                            n = -1 === l || -1 === u ?
                              null : {
                                start: l,
                                end: u
                              };
                          } else n = null;
                        }
                      n = n || {
                        start: 0,
                        end: 0
                      };
                    } else n = null;
                    for (
                      rj = {
                        focusedElem: e,
                        selectionRange: n
                      },
                      tQ = !1,
                      aQ = t; null !== aQ;

                    )
                      if (
                        ((e = (t = aQ).child),
                          0 != (1028 & t.subtreeFlags) && null !== e)
                      )
                        (e.return = t), (aQ = e);
                      else
                        for (; null !== aQ;) {
                          t = aQ;
                          try {
                            var m = t.alternate;
                            if (0 != (1024 & t.flags))
                              switch (t.tag) {
                                case 0:
                                case 11:
                                case 15:
                                case 5:
                                case 6:
                                case 4:
                                case 17:
                                  break;
                                case 1:
                                  if (null !== m) {
                                    var y = m.memoizedProps,
                                      g = m.memoizedState,
                                      v = t.stateNode,
                                      b = v.getSnapshotBeforeUpdate(
                                        t.elementType === t.type ?
                                        y :
                                        iU(t.type, y),
                                        g
                                      );
                                    v.__reactInternalSnapshotBeforeUpdate =
                                      b;
                                  }
                                  break;
                                case 3:
                                  var w = t.stateNode.containerInfo;
                                  1 === w.nodeType ?
                                    (w.textContent = "") :
                                    9 === w.nodeType &&
                                    w.documentElement &&
                                    w.removeChild(w.documentElement);
                                  break;
                                default:
                                  throw Error(p(163));
                              }
                          } catch (e) {
                            s2(t, t.return, e);
                          }
                          if (null !== (e = t.sibling)) {
                            (e.return = t.return), (aQ = e);
                            break;
                          }
                          aQ = t.return;
                        }
                        (m = aG), (aG = !1);
                  })(e, n),
                  a7(n, e),
                    (function(e) {
                      var t = nZ(),
                        n = e.focusedElem,
                        r = e.selectionRange;
                      if (
                        t !== n &&
                        n &&
                        n.ownerDocument &&
                        (function e(t, n) {
                          return (
                            !!t &&
                            !!n &&
                            (t === n ||
                              ((!t || 3 !== t.nodeType) &&
                                (n && 3 === n.nodeType ?
                                  e(t, n.parentNode) :
                                  "contains" in t ?
                                  t.contains(n) :
                                  !!t.compareDocumentPosition &&
                                  !!(16 & t.compareDocumentPosition(n)))))
                          );
                        })(n.ownerDocument.documentElement, n)
                      ) {
                        if (null !== r && n0(n)) {
                          if (
                            ((t = r.start),
                              void 0 === (e = r.end) && (e = t),
                              "selectionStart" in n)
                          )
                            (n.selectionStart = t),
                            (n.selectionEnd = Math.min(
                              e,
                              n.value.length
                            ));
                          else if (
                            (e =
                              ((t = n.ownerDocument || document) &&
                                t.defaultView) ||
                              window).getSelection
                          ) {
                            e = e.getSelection();
                            var i = n.textContent.length,
                              o = Math.min(r.start, i);
                            (r = void 0 === r.end ? o : Math.min(r.end, i)),
                            !e.extend &&
                              o > r &&
                              ((i = r), (r = o), (o = i)),
                              (i = nJ(n, o));
                            var a = nJ(n, r);
                            i &&
                              a &&
                              (1 !== e.rangeCount ||
                                e.anchorNode !== i.node ||
                                e.anchorOffset !== i.offset ||
                                e.focusNode !== a.node ||
                                e.focusOffset !== a.offset) &&
                              ((t = t.createRange()).setStart(
                                  i.node,
                                  i.offset
                                ),
                                e.removeAllRanges(),
                                o > r ?
                                (e.addRange(t),
                                  e.extend(a.node, a.offset)) :
                                (t.setEnd(a.node, a.offset),
                                  e.addRange(t)));
                          }
                        }
                        for (t = [], e = n;
                          (e = e.parentNode);)
                          1 === e.nodeType &&
                          t.push({
                            element: e,
                            left: e.scrollLeft,
                            top: e.scrollTop,
                          });
                        for (
                          "function" == typeof n.focus && n.focus(), n = 0; n < t.length; n++
                        )
                          ((e = t[n]).element.scrollLeft = e.left),
                          (e.element.scrollTop = e.top);
                      }
                    })(rj),
                    (tQ = !!rA),
                    (rj = rA = null),
                    (e.current = n),
                    (l = n),
                    (u = e),
                    (c = i),
                    (aQ = l),
                    (function e(t, n, r) {
                      for (var i = 0 != (1 & t.mode); null !== aQ;) {
                        var o = aQ,
                          a = o.child;
                        if (22 === o.tag && i) {
                          var s = null !== o.memoizedState || aW;
                          if (!s) {
                            var l = o.alternate,
                              u =
                              (null !== l && null !== l.memoizedState) ||
                              a$;
                            l = aW;
                            var c = a$;
                            if (((aW = s), (a$ = u) && !c))
                              for (aQ = o; null !== aQ;)
                                (u = (s = aQ).child),
                                22 === s.tag && null !== s.memoizedState ?
                                sr(o) :
                                null !== u ?
                                ((u.return = s), (aQ = u)) :
                                sr(o);
                            for (; null !== a;)
                              (aQ = a), e(a, n, r), (a = a.sibling);
                            (aQ = o), (aW = l), (a$ = c);
                          }
                          st(t, n, r);
                        } else
                          0 != (8772 & o.subtreeFlags) && null !== a ?
                          ((a.return = o), (aQ = a)) :
                          st(t, n, r);
                      }
                    })(l, u, c),
                    tt(),
                    (sl = f),
                    (tk = d),
                    (ss.transition = o);
                } else e.current = n;
                if (
                  (sC && ((sC = !1), (sP = e), (sO = i)),
                    0 === (o = e.pendingLanes) && (sE = null),
                    (function(e) {
                      if (tc && "function" == typeof tc.onCommitFiberRoot)
                        try {
                          tc.onCommitFiberRoot(
                            tu,
                            e,
                            void 0,
                            128 == (128 & e.current.flags)
                          );
                        } catch (e) {}
                    })(n.stateNode, r),
                    sI(e, tn()),
                    null !== t)
                )
                  for (r = e.onRecoverableError, n = 0; n < t.length; n++)
                    r((i = t[n]).value, {
                      componentStack: i.stack,
                      digest: i.digest,
                    });
                if (s_) throw ((s_ = !1), (e = sT), (sT = null), e);
                0 != (1 & sO) && 0 !== e.tag && s0(),
                  0 != (1 & (o = e.pendingLanes)) ?
                  e === sj ?
                  sA++
                  :
                  ((sA = 0), (sj = e)) :
                  (sA = 0),
                  iu();
              }
            })(e, t, n, r);
          } finally {
            (ss.transition = i), (tk = r);
          }
          return null;
        }

        function s0() {
          if (null !== sP) {
            var e = t_(sO),
              t = ss.transition,
              n = tk;
            try {
              if (
                ((ss.transition = null), (tk = 16 > e ? 16 : e), null === sP)
              )
                var r = !1;
              else {
                if (((e = sP), (sP = null), (sO = 0), 0 != (6 & sl)))
                  throw Error(p(331));
                var i = sl;
                for (sl |= 4, aQ = e.current; null !== aQ;) {
                  var o = aQ,
                    a = o.child;
                  if (0 != (16 & aQ.flags)) {
                    var s = o.deletions;
                    if (null !== s) {
                      for (var l = 0; l < s.length; l++) {
                        var u = s[l];
                        for (aQ = u; null !== aQ;) {
                          var c = aQ;
                          switch (c.tag) {
                            case 0:
                            case 11:
                            case 15:
                              aJ(8, c, o);
                          }
                          var d = c.child;
                          if (null !== d)(d.return = c), (aQ = d);
                          else
                            for (; null !== aQ;) {
                              var f = (c = aQ).sibling,
                                h = c.return;
                              if (
                                ((function e(t) {
                                    var n = t.alternate;
                                    null !== n && ((t.alternate = null), e(n)),
                                      (t.child = null),
                                      (t.deletions = null),
                                      (t.sibling = null),
                                      5 === t.tag &&
                                      null !== (n = t.stateNode) &&
                                      (delete n[rB],
                                        delete n[rq],
                                        delete n[rW],
                                        delete n[r$],
                                        delete n[rK]),
                                      (t.stateNode = null),
                                      (t.return = null),
                                      (t.dependencies = null),
                                      (t.memoizedProps = null),
                                      (t.memoizedState = null),
                                      (t.pendingProps = null),
                                      (t.stateNode = null),
                                      (t.updateQueue = null);
                                  })(c),
                                  c === u)
                              ) {
                                aQ = null;
                                break;
                              }
                              if (null !== f) {
                                (f.return = h), (aQ = f);
                                break;
                              }
                              aQ = h;
                            }
                        }
                      }
                      var m = o.alternate;
                      if (null !== m) {
                        var y = m.child;
                        if (null !== y) {
                          m.child = null;
                          do {
                            var g = y.sibling;
                            (y.sibling = null), (y = g);
                          } while (null !== y);
                        }
                      }
                      aQ = o;
                    }
                  }
                  if (0 != (2064 & o.subtreeFlags) && null !== a)
                    (a.return = o), (aQ = a);
                  else
                    for (; null !== aQ;) {
                      if (((o = aQ), 0 != (2048 & o.flags)))
                        switch (o.tag) {
                          case 0:
                          case 11:
                          case 15:
                            aJ(9, o, o.return);
                        }
                      var v = o.sibling;
                      if (null !== v) {
                        (v.return = o.return), (aQ = v);
                        break;
                      }
                      aQ = o.return;
                    }
                }
                var b = e.current;
                for (aQ = b; null !== aQ;) {
                  var w = (a = aQ).child;
                  if (0 != (2064 & a.subtreeFlags) && null !== w)
                    (w.return = a), (aQ = w);
                  else
                    for (a = b; null !== aQ;) {
                      if (((s = aQ), 0 != (2048 & s.flags)))
                        try {
                          switch (s.tag) {
                            case 0:
                            case 11:
                            case 15:
                              aZ(9, s);
                          }
                        } catch (e) {
                          s2(s, s.return, e);
                        }
                      if (s === a) {
                        aQ = null;
                        break;
                      }
                      var x = s.sibling;
                      if (null !== x) {
                        (x.return = s.return), (aQ = x);
                        break;
                      }
                      aQ = s.return;
                    }
                }
                if (
                  ((sl = i),
                    iu(),
                    tc && "function" == typeof tc.onPostCommitFiberRoot)
                )
                  try {
                    tc.onPostCommitFiberRoot(tu, e);
                  } catch (e) {}
                r = !0;
              }
              return r;
            } finally {
              (tk = n), (ss.transition = t);
            }
          }
          return !1;
        }

        function s1(e, t, n) {
          (t = am(e, (t = ap(n, t)), 1)),
          (e = i2(e, t, 1)),
          (t = sM()),
          null !== e && (tx(e, 1, t), sI(e, t));
        }

        function s2(e, t, n) {
          if (3 === e.tag) s1(e, e, n);
          else
            for (; null !== t;) {
              if (3 === t.tag) {
                s1(t, e, n);
                break;
              }
              if (1 === t.tag) {
                var r = t.stateNode;
                if (
                  "function" == typeof t.type.getDerivedStateFromError ||
                  ("function" == typeof r.componentDidCatch &&
                    (null === sE || !sE.has(r)))
                ) {
                  (e = ay(t, (e = ap(n, e)), 1)),
                  (t = i2(t, e, 1)),
                  (e = sM()),
                  null !== t && (tx(t, 1, e), sI(t, e));
                  break;
                }
              }
              t = t.return;
            }
        }

        function s3(e, t, n) {
          var r = e.pingCache;
          null !== r && r.delete(t),
            (t = sM()),
            (e.pingedLanes |= e.suspendedLanes & n),
            su === e &&
            (sp & n) === n &&
            (4 === sh ||
              (3 === sh && (130023424 & sp) === sp && 500 > tn() - sx) ?
              s$(e, 0) :
              (sv |= n)),
            sI(e, t);
        }

        function s4(e, t) {
          0 === t &&
            (0 == (1 & e.mode) ?
              (t = 1) :
              ((t = tm), 0 == (130023424 & (tm <<= 1)) && (tm = 4194304)));
          var n = sM();
          null !== (e = iG(e, t)) && (tx(e, t, n), sI(e, n));
        }

        function s5(e) {
          var t = e.memoizedState,
            n = 0;
          null !== t && (n = t.retryLane), s4(e, n);
        }

        function s6(e, t) {
          var n = 0;
          switch (e.tag) {
            case 13:
              var r = e.stateNode,
                i = e.memoizedState;
              null !== i && (n = i.retryLane);
              break;
            case 19:
              r = e.stateNode;
              break;
            default:
              throw Error(p(314));
          }
          null !== r && r.delete(t), s4(e, n);
        }

        function s8(e, t, n, r) {
          (this.tag = e),
          (this.key = n),
          (this.sibling =
            this.child =
            this.return =
            this.stateNode =
            this.type =
            this.elementType =
            null),
          (this.index = 0),
          (this.ref = null),
          (this.pendingProps = t),
          (this.dependencies =
            this.memoizedState =
            this.updateQueue =
            this.memoizedProps =
            null),
          (this.mode = r),
          (this.subtreeFlags = this.flags = 0),
          (this.deletions = null),
          (this.childLanes = this.lanes = 0),
          (this.alternate = null);
        }

        function s9(e, t, n, r) {
          return new s8(e, t, n, r);
        }

        function s7(e) {
          return !(!(e = e.prototype) || !e.isReactComponent);
        }

        function le(e, t) {
          var n = e.alternate;
          return (
            null === n ?
            (((n = s9(e.tag, t, e.key, e.mode)).elementType =
                e.elementType),
              (n.type = e.type),
              (n.stateNode = e.stateNode),
              (n.alternate = e),
              (e.alternate = n)) :
            ((n.pendingProps = t),
              (n.type = e.type),
              (n.flags = 0),
              (n.subtreeFlags = 0),
              (n.deletions = null)),
            (n.flags = 14680064 & e.flags),
            (n.childLanes = e.childLanes),
            (n.lanes = e.lanes),
            (n.child = e.child),
            (n.memoizedProps = e.memoizedProps),
            (n.memoizedState = e.memoizedState),
            (n.updateQueue = e.updateQueue),
            (t = e.dependencies),
            (n.dependencies =
              null === t ?
              null : {
                lanes: t.lanes,
                firstContext: t.firstContext
              }),
            (n.sibling = e.sibling),
            (n.index = e.index),
            (n.ref = e.ref),
            n
          );
        }

        function lt(e, t, n, r, i, o) {
          var a = 2;
          if (((r = e), "function" == typeof e)) s7(e) && (a = 1);
          else if ("string" == typeof e) a = 5;
          else
            e: switch (e) {
              case O:
                return ln(n.children, i, o, t);
              case A:
                (a = 8), (i |= 8);
                break;
              case j:
                return (
                  ((e = s9(12, n, t, 2 | i)).elementType = j),
                  (e.lanes = o),
                  e
                );
              case L:
                return (
                  ((e = s9(13, n, t, i)).elementType = L), (e.lanes = o), e
                );
              case I:
                return (
                  ((e = s9(19, n, t, i)).elementType = I), (e.lanes = o), e
                );
              case V:
                return lr(n, i, o, t);
              default:
                if ("object" == typeof e && null !== e)
                  switch (e.$$typeof) {
                    case D:
                      a = 10;
                      break e;
                    case M:
                      a = 9;
                      break e;
                    case N:
                      a = 11;
                      break e;
                    case U:
                      a = 14;
                      break e;
                    case F:
                      (a = 16), (r = null);
                      break e;
                  }
                throw Error(p(130, null == e ? e : typeof e, ""));
            }
          return (
            ((t = s9(a, n, t, i)).elementType = e),
            (t.type = r),
            (t.lanes = o),
            t
          );
        }

        function ln(e, t, n, r) {
          return ((e = s9(7, e, r, t)).lanes = n), e;
        }

        function lr(e, t, n, r) {
          return (
            ((e = s9(22, e, r, t)).elementType = V),
            (e.lanes = n),
            (e.stateNode = {
              isHidden: !1
            }),
            e
          );
        }

        function li(e, t, n) {
          return ((e = s9(6, e, null, t)).lanes = n), e;
        }

        function lo(e, t, n) {
          return (
            ((t = s9(
              4,
              null !== e.children ? e.children : [],
              e.key,
              t
            )).lanes = n),
            (t.stateNode = {
              containerInfo: e.containerInfo,
              pendingChildren: null,
              implementation: e.implementation,
            }),
            t
          );
        }

        function la(e, t, n, r, i) {
          (this.tag = t),
          (this.containerInfo = e),
          (this.finishedWork =
            this.pingCache =
            this.current =
            this.pendingChildren =
            null),
          (this.timeoutHandle = -1),
          (this.callbackNode = this.pendingContext = this.context = null),
          (this.callbackPriority = 0),
          (this.eventTimes = tw(0)),
          (this.expirationTimes = tw(-1)),
          (this.entangledLanes =
            this.finishedLanes =
            this.mutableReadLanes =
            this.expiredLanes =
            this.pingedLanes =
            this.suspendedLanes =
            this.pendingLanes =
            0),
          (this.entanglements = tw(0)),
          (this.identifierPrefix = r),
          (this.onRecoverableError = i),
          (this.mutableSourceEagerHydrationData = null);
        }

        function ls(e, t, n, r, i, o, a, s, l) {
          return (
            (e = new la(e, t, n, s, l)),
            1 === t ? ((t = 1), !0 === o && (t |= 8)) : (t = 0),
            (o = s9(3, null, null, t)),
            (e.current = o),
            (o.stateNode = e),
            (o.memoizedState = {
              element: r,
              isDehydrated: n,
              cache: null,
              transitions: null,
              pendingSuspenseBoundaries: null,
            }),
            iZ(o),
            e
          );
        }

        function ll(e) {
          if (!e) return r3;
          e = e._reactInternals;
          e: {
            if (e4(e) !== e || 1 !== e.tag) throw Error(p(170));
            var t = e;
            do {
              switch (t.tag) {
                case 3:
                  t = t.stateNode.context;
                  break e;
                case 1:
                  if (r9(t.type)) {
                    t = t.stateNode.__reactInternalMemoizedMergedChildContext;
                    break e;
                  }
              }
              t = t.return;
            } while (null !== t);
            throw Error(p(171));
          }
          if (1 === e.tag) {
            var n = e.type;
            if (r9(n)) return it(e, n, t);
          }
          return t;
        }

        function lu(e, t, n, r, i, o, a, s, l) {
          return (
            ((e = ls(n, r, !0, e, i, o, a, s, l)).context = ll(null)),
            (n = e.current),
            ((o = i1((r = sM()), (i = sN(n)))).callback =
              null != t ? t : null),
            i2(n, o, i),
            (e.current.lanes = i),
            tx(e, i, r),
            sI(e, r),
            e
          );
        }

        function lc(e, t, n, r) {
          var i = t.current,
            o = sM(),
            a = sN(i);
          return (
            (n = ll(n)),
            null === t.context ? (t.context = n) : (t.pendingContext = n),
            ((t = i1(o, a)).payload = {
              element: e
            }),
            null !== (r = void 0 === r ? null : r) && (t.callback = r),
            null !== (e = i2(i, t, a)) && (sL(e, i, a, o), i3(e, i, a)),
            a
          );
        }

        function lp(e) {
          return (e = e.current).child ?
            (e.child.tag, e.child.stateNode) :
            null;
        }

        function ld(e, t) {
          if (null !== (e = e.memoizedState) && null !== e.dehydrated) {
            var n = e.retryLane;
            e.retryLane = 0 !== n && n < t ? n : t;
          }
        }

        function lf(e, t) {
          ld(e, t), (e = e.alternate) && ld(e, t);
        }
        l = function(e, t, n) {
          if (null !== e) {
            if (e.memoizedProps !== t.pendingProps || r5.current) ax = !0;
            else {
              if (0 == (e.lanes & n) && 0 == (128 & t.flags))
                return (
                  (ax = !1),
                  (function(e, t, n) {
                    switch (t.tag) {
                      case 3:
                        aj(t), iN();
                        break;
                      case 5:
                        og(t);
                        break;
                      case 1:
                        r9(t.type) && ir(t);
                        break;
                      case 4:
                        om(t, t.stateNode.containerInfo);
                        break;
                      case 10:
                        var r = t.type._context,
                          i = t.memoizedProps.value;
                        r2(iF, r._currentValue), (r._currentValue = i);
                        break;
                      case 13:
                        if (null !== (r = t.memoizedState)) {
                          if (null !== r.dehydrated)
                            return (
                              r2(ob, 1 & ob.current), (t.flags |= 128), null
                            );
                          if (0 != (n & t.child.childLanes))
                            return aN(e, t, n);
                          return (
                            r2(ob, 1 & ob.current),
                            null !== (e = aB(e, t, n)) ? e.sibling : null
                          );
                        }
                        r2(ob, 1 & ob.current);
                        break;
                      case 19:
                        if (
                          ((r = 0 != (n & t.childLanes)),
                            0 != (128 & e.flags))
                        ) {
                          if (r) return aV(e, t, n);
                          t.flags |= 128;
                        }
                        if (
                          (null !== (i = t.memoizedState) &&
                            ((i.rendering = null),
                              (i.tail = null),
                              (i.lastEffect = null)),
                            r2(ob, ob.current),
                            !r)
                        )
                          return null;
                        break;
                      case 22:
                      case 23:
                        return (t.lanes = 0), aE(e, t, n);
                    }
                    return aB(e, t, n);
                  })(e, t, n)
                );
              ax = 0 != (131072 & e.flags);
            }
          } else
            (ax = !1), iE && 0 != (1048576 & t.flags) && ix(t, ih, t.index);
          switch (((t.lanes = 0), t.tag)) {
            case 2:
              var r = t.type;
              az(e, t), (e = t.pendingProps);
              var i = r8(t, r4.current);
              i$(t, n), (i = oN(null, t, r, e, i, n));
              var o = oL();
              return (
                (t.flags |= 1),
                "object" == typeof i &&
                null !== i &&
                "function" == typeof i.render &&
                void 0 === i.$$typeof ?
                ((t.tag = 1),
                  (t.memoizedState = null),
                  (t.updateQueue = null),
                  r9(r) ? ((o = !0), ir(t)) : (o = !1),
                  (t.memoizedState =
                    null !== i.state && void 0 !== i.state ?
                    i.state :
                    null),
                  iZ(t),
                  (i.updater = i7),
                  (t.stateNode = i),
                  (i._reactInternals = t),
                  or(t, r, e, n),
                  (t = aA(null, t, r, !0, o, n))) :
                ((t.tag = 0),
                  iE && o && iS(t),
                  aS(null, t, i, n),
                  (t = t.child)),
                t
              );
            case 16:
              r = t.elementType;
              e: {
                switch (
                  (az(e, t),
                    (e = t.pendingProps),
                    (r = (i = r._init)(r._payload)),
                    (t.type = r),
                    (i = t.tag =
                      (function(e) {
                        if ("function" == typeof e) return s7(e) ? 1 : 0;
                        if (null != e) {
                          if ((e = e.$$typeof) === N) return 11;
                          if (e === U) return 14;
                        }
                        return 2;
                      })(r)),
                    (e = iU(r, e)),
                    i)
                ) {
                  case 0:
                    t = aP(null, t, r, e, n);
                    break e;
                  case 1:
                    t = aO(null, t, r, e, n);
                    break e;
                  case 11:
                    t = ak(null, t, r, e, n);
                    break e;
                  case 14:
                    t = a_(null, t, r, iU(r.type, e), n);
                    break e;
                }
                throw Error(p(306, r, ""));
              }
              return t;
            case 0:
              return (
                (r = t.type),
                (i = t.pendingProps),
                (i = t.elementType === r ? i : iU(r, i)),
                aP(e, t, r, i, n)
              );
            case 1:
              return (
                (r = t.type),
                (i = t.pendingProps),
                (i = t.elementType === r ? i : iU(r, i)),
                aO(e, t, r, i, n)
              );
            case 3:
              e: {
                if ((aj(t), null === e)) throw Error(p(387));
                (r = t.pendingProps),
                (i = (o = t.memoizedState).element),
                i0(e, t),
                i5(t, r, null, n);
                var a = t.memoizedState;
                if (((r = a.element), o.isDehydrated)) {
                  if (
                    ((o = {
                        element: r,
                        isDehydrated: !1,
                        cache: a.cache,
                        pendingSuspenseBoundaries: a.pendingSuspenseBoundaries,
                        transitions: a.transitions,
                      }),
                      (t.updateQueue.baseState = o),
                      (t.memoizedState = o),
                      256 & t.flags)
                  ) {
                    (i = ap(Error(p(423)), t)), (t = aD(e, t, r, n, i));
                    break e;
                  }
                  if (r !== i) {
                    (i = ap(Error(p(424)), t)), (t = aD(e, t, r, n, i));
                    break e;
                  }
                  for (
                    iT = rF(t.stateNode.containerInfo.firstChild),
                    i_ = t,
                    iE = !0,
                    iC = null,
                    n = ou(t, null, r, n),
                    t.child = n; n;

                  )
                    (n.flags = (-3 & n.flags) | 4096), (n = n.sibling);
                } else {
                  if ((iN(), r === i)) {
                    t = aB(e, t, n);
                    break e;
                  }
                  aS(e, t, r, n);
                }
                t = t.child;
              }
              return t;
            case 5:
              return (
                og(t),
                null === e && ij(t),
                (r = t.type),
                (i = t.pendingProps),
                (o = null !== e ? e.memoizedProps : null),
                (a = i.children),
                rD(r, i) ?
                (a = null) :
                null !== o && rD(r, o) && (t.flags |= 32),
                aC(e, t),
                aS(e, t, a, n),
                t.child
              );
            case 6:
              return null === e && ij(t), null;
            case 13:
              return aN(e, t, n);
            case 4:
              return (
                om(t, t.stateNode.containerInfo),
                (r = t.pendingProps),
                null === e ? (t.child = ol(t, null, r, n)) : aS(e, t, r, n),
                t.child
              );
            case 11:
              return (
                (r = t.type),
                (i = t.pendingProps),
                (i = t.elementType === r ? i : iU(r, i)),
                ak(e, t, r, i, n)
              );
            case 7:
              return aS(e, t, t.pendingProps, n), t.child;
            case 8:
            case 12:
              return aS(e, t, t.pendingProps.children, n), t.child;
            case 10:
              e: {
                if (
                  ((r = t.type._context),
                    (i = t.pendingProps),
                    (o = t.memoizedProps),
                    (a = i.value),
                    r2(iF, r._currentValue),
                    (r._currentValue = a),
                    null !== o)
                ) {
                  if (nX(o.value, a)) {
                    if (o.children === i.children && !r5.current) {
                      t = aB(e, t, n);
                      break e;
                    }
                  } else
                    for (
                      null !== (o = t.child) && (o.return = t); null !== o;

                    ) {
                      var s = o.dependencies;
                      if (null !== s) {
                        a = o.child;
                        for (var l = s.firstContext; null !== l;) {
                          if (l.context === r) {
                            if (1 === o.tag) {
                              (l = i1(-1, n & -n)).tag = 2;
                              var u = o.updateQueue;
                              if (null !== u) {
                                var c = (u = u.shared).pending;
                                null === c ?
                                  (l.next = l) :
                                  ((l.next = c.next), (c.next = l)),
                                  (u.pending = l);
                              }
                            }
                            (o.lanes |= n),
                            null !== (l = o.alternate) && (l.lanes |= n),
                              iW(o.return, n, t),
                              (s.lanes |= n);
                            break;
                          }
                          l = l.next;
                        }
                      } else if (10 === o.tag)
                        a = o.type === t.type ? null : o.child;
                      else if (18 === o.tag) {
                        if (null === (a = o.return)) throw Error(p(341));
                        (a.lanes |= n),
                        null !== (s = a.alternate) && (s.lanes |= n),
                          iW(a, n, t),
                          (a = o.sibling);
                      } else a = o.child;
                      if (null !== a) a.return = o;
                      else
                        for (a = o; null !== a;) {
                          if (a === t) {
                            a = null;
                            break;
                          }
                          if (null !== (o = a.sibling)) {
                            (o.return = a.return), (a = o);
                            break;
                          }
                          a = a.return;
                        }
                      o = a;
                    }
                }
                aS(e, t, i.children, n),
                (t = t.child);
              }
              return t;
            case 9:
              return (
                (i = t.type),
                (r = t.pendingProps.children),
                i$(t, n),
                (r = r((i = iK(i)))),
                (t.flags |= 1),
                aS(e, t, r, n),
                t.child
              );
            case 14:
              return (
                (i = iU((r = t.type), t.pendingProps)),
                (i = iU(r.type, i)),
                a_(e, t, r, i, n)
              );
            case 15:
              return aT(e, t, t.type, t.pendingProps, n);
            case 17:
              return (
                (r = t.type),
                (i = t.pendingProps),
                (i = t.elementType === r ? i : iU(r, i)),
                az(e, t),
                (t.tag = 1),
                r9(r) ? ((e = !0), ir(t)) : (e = !1),
                i$(t, n),
                ot(t, r, i),
                or(t, r, i, n),
                aA(null, t, r, !0, e, n)
              );
            case 19:
              return aV(e, t, n);
            case 22:
              return aE(e, t, n);
          }
          throw Error(p(156, t.tag));
        };
        var lh =
          "function" == typeof reportError ?
          reportError :
          function(e) {
            console.error(e);
          };

        function lm(e) {
          this._internalRoot = e;
        }

        function ly(e) {
          this._internalRoot = e;
        }

        function lg(e) {
          return !(
            !e ||
            (1 !== e.nodeType && 9 !== e.nodeType && 11 !== e.nodeType)
          );
        }

        function lv(e) {
          return !(
            !e ||
            (1 !== e.nodeType &&
              9 !== e.nodeType &&
              11 !== e.nodeType &&
              (8 !== e.nodeType ||
                " react-mount-point-unstable " !== e.nodeValue))
          );
        }

        function lb() {}

        function lw(e, t, n, r, i) {
          var o = n._reactRootContainer;
          if (o) {
            var a = o;
            if ("function" == typeof i) {
              var s = i;
              i = function() {
                var e = lp(a);
                s.call(e);
              };
            }
            lc(t, a, e, i);
          } else
            a = (function(e, t, n, r, i) {
              if (i) {
                if ("function" == typeof r) {
                  var o = r;
                  r = function() {
                    var e = lp(a);
                    o.call(e);
                  };
                }
                var a = lu(t, r, e, 0, null, !1, !1, "", lb);
                return (
                  (e._reactRootContainer = a),
                  (e[rH] = a.current),
                  rv(8 === e.nodeType ? e.parentNode : e),
                  sH(),
                  a
                );
              }
              for (;
                (i = e.lastChild);) e.removeChild(i);
              if ("function" == typeof r) {
                var s = r;
                r = function() {
                  var e = lp(l);
                  s.call(e);
                };
              }
              var l = ls(e, 0, !1, null, null, !1, !1, "", lb);
              return (
                (e._reactRootContainer = l),
                (e[rH] = l.current),
                rv(8 === e.nodeType ? e.parentNode : e),
                sH(function() {
                  lc(t, l, n, r);
                }),
                l
              );
            })(n, t, e, i, r);
          return lp(a);
        }
        (ly.prototype.render = lm.prototype.render =
          function(e) {
            var t = this._internalRoot;
            if (null === t) throw Error(p(409));
            lc(e, t, null, null);
          }),
        (ly.prototype.unmount = lm.prototype.unmount =
          function() {
            var e = this._internalRoot;
            if (null !== e) {
              this._internalRoot = null;
              var t = e.containerInfo;
              sH(function() {
                  lc(null, e, null, null);
                }),
                (t[rH] = null);
            }
          }),
        (ly.prototype.unstable_scheduleHydration = function(e) {
          if (e) {
            var t = tP();
            e = {
              blockedOn: null,
              target: e,
              priority: t
            };
            for (
              var n = 0; n < tI.length && 0 !== t && t < tI[n].priority; n++
            );
            tI.splice(n, 0, e), 0 === n && tz(e);
          }
        }),
        (tT = function(e) {
          switch (e.tag) {
            case 3:
              var t = e.stateNode;
              if (t.current.memoizedState.isDehydrated) {
                var n = ty(t.pendingLanes);
                0 !== n &&
                  (tS(t, 1 | n),
                    sI(t, tn()),
                    0 == (6 & sl) && ((sS = tn() + 500), iu()));
              }
              break;
            case 13:
              sH(function() {
                  var t = iG(e, 1);
                  null !== t && sL(t, e, 1, sM());
                }),
                lf(e, 1);
          }
        }),
        (tE = function(e) {
          if (13 === e.tag) {
            var t = iG(e, 134217728);
            null !== t && sL(t, e, 134217728, sM()), lf(e, 134217728);
          }
        }),
        (tC = function(e) {
          if (13 === e.tag) {
            var t = sN(e),
              n = iG(e, t);
            null !== n && sL(n, e, t, sM()), lf(e, t);
          }
        }),
        (tP = function() {
          return tk;
        }),
        (tO = function(e, t) {
          var n = tk;
          try {
            return (tk = e), t();
          } finally {
            tk = n;
          }
        }),
        (eU = function(e, t, n) {
          switch (t) {
            case "input":
              if (
                (eh(e, n), (t = n.name), "radio" === n.type && null != t)
              ) {
                for (n = e; n.parentNode;) n = n.parentNode;
                for (
                  n = n.querySelectorAll(
                    "input[name=" +
                    JSON.stringify("" + t) +
                    '][type="radio"]'
                  ),
                  t = 0; t < n.length; t++
                ) {
                  var r = n[t];
                  if (r !== e && r.form === e.form) {
                    var i = rG(r);
                    if (!i) throw Error(p(90));
                    eu(r), eh(r, i);
                  }
                }
              }
              break;
            case "textarea":
              ex(e, n);
              break;
            case "select":
              null != (t = n.value) && ev(e, !!n.multiple, t, !1);
          }
        }),
        (eH = sq),
        (eW = sH);
        var lx = {
            findFiberByHostInstance: rQ,
            bundleType: 0,
            version: "18.2.0",
            rendererPackageName: "react-dom",
          },
          lS = {
            bundleType: lx.bundleType,
            version: lx.version,
            rendererPackageName: lx.rendererPackageName,
            rendererConfig: lx.rendererConfig,
            overrideHookState: null,
            overrideHookStateDeletePath: null,
            overrideHookStateRenamePath: null,
            overrideProps: null,
            overridePropsDeletePath: null,
            overridePropsRenamePath: null,
            setErrorHandler: null,
            setSuspenseHandler: null,
            scheduleUpdate: null,
            currentDispatcherRef: E.ReactCurrentDispatcher,
            findHostInstanceByFiber: function(e) {
              return null === (e = e8(e)) ? null : e.stateNode;
            },
            findFiberByHostInstance: lx.findFiberByHostInstance ||
              function() {
                return null;
              },
            findHostInstancesForRefresh: null,
            scheduleRefresh: null,
            scheduleRoot: null,
            setRefreshHandler: null,
            getCurrentFiber: null,
            reconcilerVersion: "18.2.0-next-9e3b772b8-20220608",
          };
        if ("undefined" != typeof __REACT_DEVTOOLS_GLOBAL_HOOK__) {
          var lk = __REACT_DEVTOOLS_GLOBAL_HOOK__;
          if (!lk.isDisabled && lk.supportsFiber)
            try {
              (tu = lk.inject(lS)), (tc = lk);
            } catch (e) {}
        }
        (q = {
          usingClientEntryPoint: !1,
          Events: [rX, rY, rG, eB, eq, sq]
        }),
        (H = function(e, t) {
          var n =
            2 < arguments.length && void 0 !== arguments[2] ?
            arguments[2] :
            null;
          if (!lg(t)) throw Error(p(200));
          return (function(e, t, n) {
            var r =
              3 < arguments.length && void 0 !== arguments[3] ?
              arguments[3] :
              null;
            return {
              $$typeof: P,
              key: null == r ? null : "" + r,
              children: e,
              containerInfo: t,
              implementation: n,
            };
          })(e, t, null, n);
        }),
        (W = function(e, t) {
          if (!lg(e)) throw Error(p(299));
          var n = !1,
            r = "",
            i = lh;
          return (
            null != t &&
            (!0 === t.unstable_strictMode && (n = !0),
              void 0 !== t.identifierPrefix && (r = t.identifierPrefix),
              void 0 !== t.onRecoverableError &&
              (i = t.onRecoverableError)),
            (t = ls(e, 1, !1, null, null, n, !1, r, i)),
            (e[rH] = t.current),
            rv(8 === e.nodeType ? e.parentNode : e),
            new lm(t)
          );
        }),
        ($ = function(e) {
          if (null == e) return null;
          if (1 === e.nodeType) return e;
          var t = e._reactInternals;
          if (void 0 === t) {
            if ("function" == typeof e.render) throw Error(p(188));
            throw Error(p(268, (e = Object.keys(e).join(","))));
          }
          return (e = null === (e = e8(t)) ? null : e.stateNode);
        }),
        (K = function(e) {
          return sH(e);
        }),
        (Q = function(e, t, n) {
          if (!lv(t)) throw Error(p(200));
          return lw(null, e, t, !0, n);
        }),
        (X = function(e, t, n) {
          if (!lg(e)) throw Error(p(405));
          var r = (null != n && n.hydratedSources) || null,
            i = !1,
            o = "",
            a = lh;
          if (
            (null != n &&
              (!0 === n.unstable_strictMode && (i = !0),
                void 0 !== n.identifierPrefix && (o = n.identifierPrefix),
                void 0 !== n.onRecoverableError &&
                (a = n.onRecoverableError)),
              (t = lu(t, null, e, 1, null != n ? n : null, i, !1, o, a)),
              (e[rH] = t.current),
              rv(e),
              r)
          )
            for (e = 0; e < r.length; e++)
              (i = (i = (n = r[e])._getVersion)(n._source)),
              null == t.mutableSourceEagerHydrationData ?
              (t.mutableSourceEagerHydrationData = [n, i]) :
              t.mutableSourceEagerHydrationData.push(n, i);
          return new ly(t);
        }),
        (Y = function(e, t, n) {
          if (!lv(t)) throw Error(p(200));
          return lw(null, e, t, !1, n);
        }),
        (G = function(e) {
          if (!lv(e)) throw Error(p(40));
          return (
            !!e._reactRootContainer &&
            (sH(function() {
                lw(null, null, e, !1, function() {
                  (e._reactRootContainer = null), (e[rH] = null);
                });
              }),
              !0)
          );
        }),
        (J = sq),
        (Z = function(e, t, n, r) {
          if (!lv(n)) throw Error(p(200));
          if (null == e || void 0 === e._reactInternals) throw Error(p(38));
          return lw(e, t, n, !1, r);
        }),
        (ee = "18.2.0-next-9e3b772b8-20220608");
      }),
      M("7DCHO", function(e, t) {
        e.exports = R("59RiQ");
      }),
      M("59RiQ", function(e, t) {
        function r(e, t) {
          var n = e.length;
          for (e.push(t); 0 < n;) {
            var r = (n - 1) >>> 1,
              i = e[r];
            if (0 < a(i, t))(e[r] = t), (e[n] = i), (n = r);
            else break;
          }
        }

        function i(e) {
          return 0 === e.length ? null : e[0];
        }

        function o(e) {
          if (0 === e.length) return null;
          var t = e[0],
            n = e.pop();
          if (n !== t) {
            e[0] = n;
            for (var r = 0, i = e.length, o = i >>> 1; r < o;) {
              var s = 2 * (r + 1) - 1,
                l = e[s],
                u = s + 1,
                c = e[u];
              if (0 > a(l, n))
                u < i && 0 > a(c, l) ?
                ((e[r] = c), (e[u] = n), (r = u)) :
                ((e[r] = l), (e[s] = n), (r = s));
              else if (u < i && 0 > a(c, n))(e[r] = c), (e[u] = n), (r = u);
              else break;
            }
          }
          return t;
        }

        function a(e, t) {
          var n = e.sortIndex - t.sortIndex;
          return 0 !== n ? n : e.id - t.id;
        }
        if (
          (n(
              e.exports,
              "unstable_now",
              () => s,
              (e) => (s = e)
            ),
            n(
              e.exports,
              "unstable_IdlePriority",
              () => l,
              (e) => (l = e)
            ),
            n(
              e.exports,
              "unstable_ImmediatePriority",
              () => u,
              (e) => (u = e)
            ),
            n(
              e.exports,
              "unstable_LowPriority",
              () => c,
              (e) => (c = e)
            ),
            n(
              e.exports,
              "unstable_NormalPriority",
              () => p,
              (e) => (p = e)
            ),
            n(
              e.exports,
              "unstable_Profiling",
              () => d,
              (e) => (d = e)
            ),
            n(
              e.exports,
              "unstable_UserBlockingPriority",
              () => f,
              (e) => (f = e)
            ),
            n(
              e.exports,
              "unstable_cancelCallback",
              () => h,
              (e) => (h = e)
            ),
            n(
              e.exports,
              "unstable_continueExecution",
              () => m,
              (e) => (m = e)
            ),
            n(
              e.exports,
              "unstable_forceFrameRate",
              () => y,
              (e) => (y = e)
            ),
            n(
              e.exports,
              "unstable_getCurrentPriorityLevel",
              () => g,
              (e) => (g = e)
            ),
            n(
              e.exports,
              "unstable_getFirstCallbackNode",
              () => v,
              (e) => (v = e)
            ),
            n(
              e.exports,
              "unstable_next",
              () => b,
              (e) => (b = e)
            ),
            n(
              e.exports,
              "unstable_pauseExecution",
              () => w,
              (e) => (w = e)
            ),
            n(
              e.exports,
              "unstable_requestPaint",
              () => x,
              (e) => (x = e)
            ),
            n(
              e.exports,
              "unstable_runWithPriority",
              () => S,
              (e) => (S = e)
            ),
            n(
              e.exports,
              "unstable_scheduleCallback",
              () => k,
              (e) => (k = e)
            ),
            n(
              e.exports,
              "unstable_shouldYield",
              () => _,
              (e) => (_ = e)
            ),
            n(
              e.exports,
              "unstable_wrapCallback",
              () => T,
              (e) => (T = e)
            ),
            "object" == typeof performance &&
            "function" == typeof performance.now)
        ) {
          var s,
            l,
            u,
            c,
            p,
            d,
            f,
            h,
            m,
            y,
            g,
            v,
            b,
            w,
            x,
            S,
            k,
            _,
            T,
            E,
            C = performance;
          s = function() {
            return C.now();
          };
        } else {
          var P = Date,
            O = P.now();
          s = function() {
            return P.now() - O;
          };
        }
        var A = [],
          j = [],
          D = 1,
          R = null,
          M = 3,
          N = !1,
          L = !1,
          I = !1,
          U = "function" == typeof setTimeout ? setTimeout : null,
          F = "function" == typeof clearTimeout ? clearTimeout : null,
          V = "undefined" != typeof setImmediate ? setImmediate : null;

        function z(e) {
          for (var t = i(j); null !== t;) {
            if (null === t.callback) o(j);
            else if (t.startTime <= e)
              o(j), (t.sortIndex = t.expirationTime), r(A, t);
            else break;
            t = i(j);
          }
        }

        function B(e) {
          if (((I = !1), z(e), !L)) {
            if (null !== i(A))(L = !0), Z(q);
            else {
              var t = i(j);
              null !== t && ee(B, t.startTime - e);
            }
          }
        }

        function q(e, t) {
          (L = !1), I && ((I = !1), F($), ($ = -1)), (N = !0);
          var n = M;
          try {
            for (
              z(t), R = i(A); null !== R && (!(R.expirationTime > t) || (e && !X()));

            ) {
              var r = R.callback;
              if ("function" == typeof r) {
                (R.callback = null), (M = R.priorityLevel);
                var a = r(R.expirationTime <= t);
                (t = s()),
                "function" == typeof a
                  ?
                  (R.callback = a) :
                  R === i(A) && o(A),
                  z(t);
              } else o(A);
              R = i(A);
            }
            if (null !== R) var l = !0;
            else {
              var u = i(j);
              null !== u && ee(B, u.startTime - t), (l = !1);
            }
            return l;
          } finally {
            (R = null), (M = n), (N = !1);
          }
        }
        "undefined" != typeof navigator &&
          void 0 !== navigator.scheduling &&
          void 0 !== navigator.scheduling.isInputPending &&
          navigator.scheduling.isInputPending.bind(navigator.scheduling);
        var H = !1,
          W = null,
          $ = -1,
          K = 5,
          Q = -1;

        function X() {
          return !(s() - Q < K);
        }

        function Y() {
          if (null !== W) {
            var e = s();
            Q = e;
            var t = !0;
            try {
              t = W(!0, e);
            } finally {
              t ? E() : ((H = !1), (W = null));
            }
          } else H = !1;
        }
        if ("function" == typeof V)
          E = function() {
            V(Y);
          };
        else if ("undefined" != typeof MessageChannel) {
          var G = new MessageChannel(),
            J = G.port2;
          (G.port1.onmessage = Y),
          (E = function() {
            J.postMessage(null);
          });
        } else
          E = function() {
            U(Y, 0);
          };

        function Z(e) {
          (W = e), H || ((H = !0), E());
        }

        function ee(e, t) {
          $ = U(function() {
            e(s());
          }, t);
        }
        (l = 5),
        (u = 1),
        (c = 4),
        (p = 3),
        (d = null),
        (f = 2),
        (h = function(e) {
          e.callback = null;
        }),
        (m = function() {
          L || N || ((L = !0), Z(q));
        }),
        (y = function(e) {
          0 > e || 125 < e ?
            console.error(
              "forceFrameRate takes a positive int between 0 and 125, forcing frame rates higher than 125 fps is not supported"
            ) :
            (K = 0 < e ? Math.floor(1e3 / e) : 5);
        }),
        (g = function() {
          return M;
        }),
        (v = function() {
          return i(A);
        }),
        (b = function(e) {
          switch (M) {
            case 1:
            case 2:
            case 3:
              var t = 3;
              break;
            default:
              t = M;
          }
          var n = M;
          M = t;
          try {
            return e();
          } finally {
            M = n;
          }
        }),
        (w = function() {}),
        (x = function() {}),
        (S = function(e, t) {
          switch (e) {
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
              break;
            default:
              e = 3;
          }
          var n = M;
          M = e;
          try {
            return t();
          } finally {
            M = n;
          }
        }),
        (k = function(e, t, n) {
          var o = s();
          switch (
            ((n =
                "object" == typeof n &&
                null !== n &&
                "number" == typeof(n = n.delay) &&
                0 < n ?
                o + n :
                o),
              e)
          ) {
            case 1:
              var a = -1;
              break;
            case 2:
              a = 250;
              break;
            case 5:
              a = 1073741823;
              break;
            case 4:
              a = 1e4;
              break;
            default:
              a = 5e3;
          }
          return (
            (a = n + a),
            (e = {
              id: D++,
              callback: t,
              priorityLevel: e,
              startTime: n,
              expirationTime: a,
              sortIndex: -1,
            }),
            n > o ?
            ((e.sortIndex = n),
              r(j, e),
              null === i(A) &&
              e === i(j) &&
              (I ? (F($), ($ = -1)) : (I = !0), ee(B, n - o))) :
            ((e.sortIndex = a), r(A, e), L || N || ((L = !0), Z(q))),
            e
          );
        }),
        (_ = X),
        (T = function(e) {
          var t = M;
          return function() {
            var n = M;
            M = t;
            try {
              return e.apply(this, arguments);
            } finally {
              M = n;
            }
          };
        });
      }),
      M("6frbl", function(e, t) {
        n(e.exports, "default", () => o);
        var r = R("cjsOM"),
          i =
          /^((children|dangerouslySetInnerHTML|key|ref|autoFocus|defaultValue|defaultChecked|innerHTML|suppressContentEditableWarning|suppressHydrationWarning|valueLink|accept|acceptCharset|accessKey|action|allow|allowUserMedia|allowPaymentRequest|allowFullScreen|allowTransparency|alt|async|autoComplete|autoPlay|capture|cellPadding|cellSpacing|challenge|charSet|checked|cite|classID|className|cols|colSpan|content|contentEditable|contextMenu|controls|controlsList|coords|crossOrigin|data|dateTime|decoding|default|defer|dir|disabled|disablePictureInPicture|download|draggable|encType|form|formAction|formEncType|formMethod|formNoValidate|formTarget|frameBorder|headers|height|hidden|high|href|hrefLang|htmlFor|httpEquiv|id|inputMode|integrity|is|keyParams|keyType|kind|label|lang|list|loading|loop|low|marginHeight|marginWidth|max|maxLength|media|mediaGroup|method|min|minLength|multiple|muted|name|nonce|noValidate|open|optimum|pattern|placeholder|playsInline|poster|preload|profile|radioGroup|readOnly|referrerPolicy|rel|required|reversed|role|rows|rowSpan|sandbox|scope|scoped|scrolling|seamless|selected|shape|size|sizes|slot|span|spellCheck|src|srcDoc|srcLang|srcSet|start|step|style|summary|tabIndex|target|title|type|useMap|value|width|wmode|wrap|about|datatype|inlist|prefix|property|resource|typeof|vocab|autoCapitalize|autoCorrect|autoSave|color|inert|itemProp|itemScope|itemType|itemID|itemRef|on|results|security|unselectable|accentHeight|accumulate|additive|alignmentBaseline|allowReorder|alphabetic|amplitude|arabicForm|ascent|attributeName|attributeType|autoReverse|azimuth|baseFrequency|baselineShift|baseProfile|bbox|begin|bias|by|calcMode|capHeight|clip|clipPathUnits|clipPath|clipRule|colorInterpolation|colorInterpolationFilters|colorProfile|colorRendering|contentScriptType|contentStyleType|cursor|cx|cy|d|decelerate|descent|diffuseConstant|direction|display|divisor|dominantBaseline|dur|dx|dy|edgeMode|elevation|enableBackground|end|exponent|externalResourcesRequired|fill|fillOpacity|fillRule|filter|filterRes|filterUnits|floodColor|floodOpacity|focusable|fontFamily|fontSize|fontSizeAdjust|fontStretch|fontStyle|fontVariant|fontWeight|format|from|fr|fx|fy|g1|g2|glyphName|glyphOrientationHorizontal|glyphOrientationVertical|glyphRef|gradientTransform|gradientUnits|hanging|horizAdvX|horizOriginX|ideographic|imageRendering|in|in2|intercept|k|k1|k2|k3|k4|kernelMatrix|kernelUnitLength|kerning|keyPoints|keySplines|keyTimes|lengthAdjust|letterSpacing|lightingColor|limitingConeAngle|local|markerEnd|markerMid|markerStart|markerHeight|markerUnits|markerWidth|mask|maskContentUnits|maskUnits|mathematical|mode|numOctaves|offset|opacity|operator|order|orient|orientation|origin|overflow|overlinePosition|overlineThickness|panose1|paintOrder|pathLength|patternContentUnits|patternTransform|patternUnits|pointerEvents|points|pointsAtX|pointsAtY|pointsAtZ|preserveAlpha|preserveAspectRatio|primitiveUnits|r|radius|refX|refY|renderingIntent|repeatCount|repeatDur|requiredExtensions|requiredFeatures|restart|result|rotate|rx|ry|scale|seed|shapeRendering|slope|spacing|specularConstant|specularExponent|speed|spreadMethod|startOffset|stdDeviation|stemh|stemv|stitchTiles|stopColor|stopOpacity|strikethroughPosition|strikethroughThickness|string|stroke|strokeDasharray|strokeDashoffset|strokeLinecap|strokeLinejoin|strokeMiterlimit|strokeOpacity|strokeWidth|surfaceScale|systemLanguage|tableValues|targetX|targetY|textAnchor|textDecoration|textRendering|textLength|to|transform|u1|u2|underlinePosition|underlineThickness|unicode|unicodeBidi|unicodeRange|unitsPerEm|vAlphabetic|vHanging|vIdeographic|vMathematical|values|vectorEffect|version|vertAdvY|vertOriginX|vertOriginY|viewBox|viewTarget|visibility|widths|wordSpacing|writingMode|x|xHeight|x1|x2|xChannelSelector|xlinkActuate|xlinkArcrole|xlinkHref|xlinkRole|xlinkShow|xlinkTitle|xlinkType|xmlBase|xmlns|xmlnsXlink|xmlLang|xmlSpace|y|y1|y2|yChannelSelector|z|zoomAndPan|for|class|autofocus)|(([Dd][Aa][Tt][Aa]|[Aa][Rr][Ii][Aa]|x)-.*))$/,
          o = (0, r.default)(function(e) {
            return (
              i.test(e) ||
              (111 === e.charCodeAt(0) &&
                110 === e.charCodeAt(1) &&
                91 > e.charCodeAt(2))
            );
          });
      }),
      M("cjsOM", function(e, t) {
        n(e.exports, "default", () => r);
        var r = function(e) {
          var t = {};
          return function(n) {
            return void 0 === t[n] && (t[n] = e(n)), t[n];
          };
        };
      });
    var N = {};
    N = R("iwYKF");
    var L = R("lx97N"),
      I = {};
    !(function e() {
      if (
        "undefined" != typeof __REACT_DEVTOOLS_GLOBAL_HOOK__ &&
        "function" == typeof __REACT_DEVTOOLS_GLOBAL_HOOK__.checkDCE
      )
        try {
          __REACT_DEVTOOLS_GLOBAL_HOOK__.checkDCE(e);
        } catch (e) {
          console.error(e);
        }
    })(),
    (I = R("f2Jil")),
    R("lx97N");
    var L = (R("lx97N"), R("lx97N"));
    R("lx97N");
    var L = R("lx97N");
    const U = {
        invalid_user_password: "Wrong credentials",
        invalid_password: "Password is too weak",
        invalid_signup: "Invalid sign up. Please check the email address.",
        email: "Please enter a valid Email.",
        password: "Please enter a valid Password.",
        last_name: "Please enter a valid Last Name.",
        first_name: "Please enter a valid First Name.",
        genericError: "There was an error processing your request. Please try again later or contact us.",
      },
      F = (e) =>
      ("string" != typeof e &&
        e?.code === "access_denied" &&
        e?.description === "Invalid state" &&
        e?.name === "AnomalyDetected") ??
      !1,
      V = (e) => {
        if (e) {
          if ("string" == typeof e && e in U) return U[e];
          if ("string" == typeof e.code && e.code in U) return U[e.code];
          if ("string" == typeof e.description) return e.description;
        }
        return U.genericError;
      },
      z = () => {
        try {
          let {
            redirect_uri: e
          } = Object.fromEntries(
            new URLSearchParams(window.location.search).entries()
          );
          if (e) {
            let t = new URL(e);
            return (window.location.href = t.origin), !0;
          }
        } catch {}
        return !1;
      };
    var B = {},
      q = (B = {});

    function H() {
      throw Error("setTimeout has not been defined");
    }

    function W() {
      throw Error("clearTimeout has not been defined");
    }

    function $(e) {
      if (g === setTimeout) return setTimeout(e, 0);
      if ((g === H || !g) && setTimeout)
        return (g = setTimeout), setTimeout(e, 0);
      try {
        return g(e, 0);
      } catch (t) {
        try {
          return g.call(null, e, 0);
        } catch (t) {
          return g.call(this, e, 0);
        }
      }
    }!(function() {
      try {
        g = "function" == typeof setTimeout ? setTimeout : H;
      } catch (e) {
        g = H;
      }
      try {
        v = "function" == typeof clearTimeout ? clearTimeout : W;
      } catch (e) {
        v = W;
      }
    })();
    var K = [],
      Q = !1,
      X = -1;

    function Y() {
      Q &&
        b &&
        ((Q = !1), b.length ? (K = b.concat(K)) : (X = -1), K.length && G());
    }

    function G() {
      if (!Q) {
        var e = $(Y);
        Q = !0;
        for (var t = K.length; t;) {
          for (b = K, K = []; ++X < t;) b && b[X].run();
          (X = -1), (t = K.length);
        }
        (b = null),
        (Q = !1),
        (function(e) {
          if (v === clearTimeout) return clearTimeout(e);
          if ((v === W || !v) && clearTimeout)
            return (v = clearTimeout), clearTimeout(e);
          try {
            v(e);
          } catch (t) {
            try {
              return v.call(null, e);
            } catch (t) {
              return v.call(this, e);
            }
          }
        })(e);
      }
    }

    function J(e, t) {
      (this.fun = e), (this.array = t);
    }

    function Z() {}
    (q.nextTick = function(e) {
      var t = Array(arguments.length - 1);
      if (arguments.length > 1)
        for (var n = 1; n < arguments.length; n++) t[n - 1] = arguments[n];
      K.push(new J(e, t)), 1 !== K.length || Q || $(G);
    }),
    (J.prototype.run = function() {
      this.fun.apply(null, this.array);
    }),
    (q.title = "browser"),
    (q.browser = !0),
    (q.env = {}),
    (q.argv = []),
    (q.version = ""),
    (q.versions = {}),
    (q.on = Z),
    (q.addListener = Z),
    (q.once = Z),
    (q.off = Z),
    (q.removeListener = Z),
    (q.removeAllListeners = Z),
    (q.emit = Z),
    (q.prependListener = Z),
    (q.prependOnceListener = Z),
    (q.listeners = function(e) {
      return [];
    }),
    (q.binding = function(e) {
      throw Error("process.binding is not supported");
    }),
    (q.cwd = function() {
      return "/";
    }),
    (q.chdir = function(e) {
      throw Error("process.chdir is not supported");
    }),
    (q.umask = function() {
      return 0;
    });
    var ee =
      "undefined" != typeof globalThis ?
      globalThis :
      "undefined" != typeof window ?
      window :
      void 0 !== A ?
      A :
      "undefined" != typeof self ?
      self : {};

    function et(e, t) {
      return e((t = {
        exports: {}
      }), t.exports), t.exports;
    }
    var en = et(function(e) {
        var t;
        (t = function() {
          return function() {
            return (function(e) {
              var t = [];
              if (0 === e.length) return "";
              if ("string" != typeof e[0])
                throw TypeError("Url must be a string. Received " + e[0]);
              if (e[0].match(/^[^/:]+:\/*$/) && e.length > 1) {
                var n = e.shift();
                e[0] = n + e[0];
              }
              e[0].match(/^file:\/\/\//) ?
                (e[0] = e[0].replace(/^([^/:]+):\/*/, "$1:///")) :
                (e[0] = e[0].replace(/^([^/:]+):\/*/, "$1://"));
              for (var r = 0; r < e.length; r++) {
                var i = e[r];
                if ("string" != typeof i)
                  throw TypeError("Url must be a string. Received " + i);
                "" !== i &&
                  (r > 0 && (i = i.replace(/^[\/]+/, "")),
                    (i =
                      r < e.length - 1 ?
                      i.replace(/[\/]+$/, "") :
                      i.replace(/[\/]+$/, "/")),
                    t.push(i));
              }
              var o = t.join("/"),
                a = (o = o.replace(/\/(\?|&|#[^!])/g, "$1")).split("?");
              return a.shift() + (a.length > 0 ? "?" : "") + a.join("&");
            })(
              "object" == typeof arguments[0] ?
              arguments[0] : [].slice.call(arguments)
            );
          };
        }),
        e.exports ? (e.exports = t()) : (ee.urljoin = t());
      }),
      er = "undefined" != typeof Symbol && Symbol,
      ei = {
        foo: {}
      },
      eo = Object,
      ea = Object.prototype.toString,
      es = Math.max,
      el = function(e, t) {
        for (var n = [], r = 0; r < e.length; r += 1) n[r] = e[r];
        for (var i = 0; i < t.length; i += 1) n[i + e.length] = t[i];
        return n;
      },
      eu = function(e, t) {
        for (var n = [], r = t || 0, i = 0; r < e.length; r += 1, i += 1)
          n[i] = e[r];
        return n;
      },
      ec = function(e, t) {
        for (var n = "", r = 0; r < e.length; r += 1)
          (n += e[r]), r + 1 < e.length && (n += t);
        return n;
      },
      ep =
      Function.prototype.bind ||
      function(e) {
        var t = this;
        if ("function" != typeof t || "[object Function]" !== ea.apply(t))
          throw TypeError(
            "Function.prototype.bind called on incompatible " + t
          );
        for (
          var n,
            r = eu(arguments, 1),
            i = es(0, t.length - r.length),
            o = [],
            a = 0; a < i; a++
        )
          o[a] = "$" + a;
        if (
          ((n = Function(
              "binder",
              "return function (" +
              ec(o, ",") +
              "){ return binder.apply(this,arguments); }"
            )(function() {
              if (this instanceof n) {
                var i = t.apply(this, el(r, arguments));
                return Object(i) === i ? i : this;
              }
              return t.apply(e, el(r, arguments));
            })),
            t.prototype)
        ) {
          var s = function() {};
          (s.prototype = t.prototype),
          (n.prototype = new s()),
          (s.prototype = null);
        }
        return n;
      },
      ed = ep.call(Function.call, Object.prototype.hasOwnProperty),
      ef = SyntaxError,
      eh = Function,
      em = TypeError,
      ey = function(e) {
        try {
          return eh('"use strict"; return (' + e + ").constructor;")();
        } catch (e) {}
      },
      eg = Object.getOwnPropertyDescriptor;
    if (eg)
      try {
        eg({}, "");
      } catch (e) {
        eg = null;
      }
    var ev = function() {
        throw new em();
      },
      eb = eg ?
      (function() {
        try {
          return ev;
        } catch (e) {
          try {
            return eg(arguments, "callee").get;
          } catch (e) {
            return ev;
          }
        }
      })() :
      ev,
      ew =
      "function" == typeof er &&
      "function" == typeof Symbol &&
      "symbol" == typeof er("foo") &&
      "symbol" == typeof Symbol("bar") &&
      (function() {
        if (
          "function" != typeof Symbol ||
          "function" != typeof Object.getOwnPropertySymbols
        )
          return !1;
        if ("symbol" == typeof Symbol.iterator) return !0;
        var e = {},
          t = Symbol("test"),
          n = Object(t);
        if (
          "string" == typeof t ||
          "[object Symbol]" !== Object.prototype.toString.call(t) ||
          "[object Symbol]" !== Object.prototype.toString.call(n)
        )
          return !1;
        for (t in ((e[t] = 42), e)) return !1;
        if (
          ("function" == typeof Object.keys &&
            0 !== Object.keys(e).length) ||
          ("function" == typeof Object.getOwnPropertyNames &&
            0 !== Object.getOwnPropertyNames(e).length)
        )
          return !1;
        var r = Object.getOwnPropertySymbols(e);
        if (
          1 !== r.length ||
          r[0] !== t ||
          !Object.prototype.propertyIsEnumerable.call(e, t)
        )
          return !1;
        if ("function" == typeof Object.getOwnPropertyDescriptor) {
          var i = Object.getOwnPropertyDescriptor(e, t);
          if (42 !== i.value || !0 !== i.enumerable) return !1;
        }
        return !0;
      })(),
      ex = {
        __proto__: ei
      }.foo === ei.foo &&
      !({
          __proto__: null
        }
        instanceof eo),
      eS =
      Object.getPrototypeOf ||
      (ex ?
        function(e) {
          return e.__proto__;
        } :
        null),
      ek = {},
      e_ = "undefined" != typeof Uint8Array && eS ? eS(Uint8Array) : void 0,
      eT = {
        "%AggregateError%": "undefined" == typeof AggregateError ? void 0 : AggregateError,
        "%Array%": Array,
        "%ArrayBuffer%": "undefined" == typeof ArrayBuffer ? void 0 : ArrayBuffer,
        "%ArrayIteratorPrototype%": ew && eS ? eS([][Symbol.iterator]()) : void 0,
        "%AsyncFromSyncIteratorPrototype%": void 0,
        "%AsyncFunction%": ek,
        "%AsyncGenerator%": ek,
        "%AsyncGeneratorFunction%": ek,
        "%AsyncIteratorPrototype%": ek,
        "%Atomics%": "undefined" == typeof Atomics ? void 0 : Atomics,
        "%BigInt%": "undefined" == typeof BigInt ? void 0 : BigInt,
        "%BigInt64Array%": "undefined" == typeof BigInt64Array ? void 0 : BigInt64Array,
        "%BigUint64Array%": "undefined" == typeof BigUint64Array ? void 0 : BigUint64Array,
        "%Boolean%": Boolean,
        "%DataView%": "undefined" == typeof DataView ? void 0 : DataView,
        "%Date%": Date,
        "%decodeURI%": decodeURI,
        "%decodeURIComponent%": decodeURIComponent,
        "%encodeURI%": encodeURI,
        "%encodeURIComponent%": encodeURIComponent,
        "%Error%": Error,
        "%eval%": eval,
        "%EvalError%": EvalError,
        "%Float32Array%": "undefined" == typeof Float32Array ? void 0 : Float32Array,
        "%Float64Array%": "undefined" == typeof Float64Array ? void 0 : Float64Array,
        "%FinalizationRegistry%": "undefined" == typeof FinalizationRegistry ?
          void 0 : FinalizationRegistry,
        "%Function%": eh,
        "%GeneratorFunction%": ek,
        "%Int8Array%": "undefined" == typeof Int8Array ? void 0 : Int8Array,
        "%Int16Array%": "undefined" == typeof Int16Array ? void 0 : Int16Array,
        "%Int32Array%": "undefined" == typeof Int32Array ? void 0 : Int32Array,
        "%isFinite%": isFinite,
        "%isNaN%": isNaN,
        "%IteratorPrototype%": ew && eS ? eS(eS([][Symbol.iterator]())) : void 0,
        "%JSON%": "object" == typeof JSON ? JSON : void 0,
        "%Map%": "undefined" == typeof Map ? void 0 : Map,
        "%MapIteratorPrototype%": "undefined" != typeof Map && ew && eS ?
          eS(new Map()[Symbol.iterator]()) : void 0,
        "%Math%": Math,
        "%Number%": Number,
        "%Object%": Object,
        "%parseFloat%": parseFloat,
        "%parseInt%": parseInt,
        "%Promise%": "undefined" == typeof Promise ? void 0 : Promise,
        "%Proxy%": "undefined" == typeof Proxy ? void 0 : Proxy,
        "%RangeError%": RangeError,
        "%ReferenceError%": ReferenceError,
        "%Reflect%": "undefined" == typeof Reflect ? void 0 : Reflect,
        "%RegExp%": RegExp,
        "%Set%": "undefined" == typeof Set ? void 0 : Set,
        "%SetIteratorPrototype%": "undefined" != typeof Set && ew && eS ?
          eS(new Set()[Symbol.iterator]()) : void 0,
        "%SharedArrayBuffer%": "undefined" == typeof SharedArrayBuffer ?
          void 0 : SharedArrayBuffer,
        "%String%": String,
        "%StringIteratorPrototype%": ew && eS ? eS("" [Symbol.iterator]()) : void 0,
        "%Symbol%": ew ? Symbol : void 0,
        "%SyntaxError%": ef,
        "%ThrowTypeError%": eb,
        "%TypedArray%": e_,
        "%TypeError%": em,
        "%Uint8Array%": "undefined" == typeof Uint8Array ? void 0 : Uint8Array,
        "%Uint8ClampedArray%": "undefined" == typeof Uint8ClampedArray ?
          void 0 : Uint8ClampedArray,
        "%Uint16Array%": "undefined" == typeof Uint16Array ? void 0 : Uint16Array,
        "%Uint32Array%": "undefined" == typeof Uint32Array ? void 0 : Uint32Array,
        "%URIError%": URIError,
        "%WeakMap%": "undefined" == typeof WeakMap ? void 0 : WeakMap,
        "%WeakRef%": "undefined" == typeof WeakRef ? void 0 : WeakRef,
        "%WeakSet%": "undefined" == typeof WeakSet ? void 0 : WeakSet,
      };
    if (eS)
      try {
        null.error;
      } catch (e) {
        var eE = eS(eS(e));
        eT["%Error.prototype%"] = eE;
      }
    var eC = {
        "%ArrayBufferPrototype%": ["ArrayBuffer", "prototype"],
        "%ArrayPrototype%": ["Array", "prototype"],
        "%ArrayProto_entries%": ["Array", "prototype", "entries"],
        "%ArrayProto_forEach%": ["Array", "prototype", "forEach"],
        "%ArrayProto_keys%": ["Array", "prototype", "keys"],
        "%ArrayProto_values%": ["Array", "prototype", "values"],
        "%AsyncFunctionPrototype%": ["AsyncFunction", "prototype"],
        "%AsyncGenerator%": ["AsyncGeneratorFunction", "prototype"],
        "%AsyncGeneratorPrototype%": [
          "AsyncGeneratorFunction",
          "prototype",
          "prototype",
        ],
        "%BooleanPrototype%": ["Boolean", "prototype"],
        "%DataViewPrototype%": ["DataView", "prototype"],
        "%DatePrototype%": ["Date", "prototype"],
        "%ErrorPrototype%": ["Error", "prototype"],
        "%EvalErrorPrototype%": ["EvalError", "prototype"],
        "%Float32ArrayPrototype%": ["Float32Array", "prototype"],
        "%Float64ArrayPrototype%": ["Float64Array", "prototype"],
        "%FunctionPrototype%": ["Function", "prototype"],
        "%Generator%": ["GeneratorFunction", "prototype"],
        "%GeneratorPrototype%": [
          "GeneratorFunction",
          "prototype",
          "prototype",
        ],
        "%Int8ArrayPrototype%": ["Int8Array", "prototype"],
        "%Int16ArrayPrototype%": ["Int16Array", "prototype"],
        "%Int32ArrayPrototype%": ["Int32Array", "prototype"],
        "%JSONParse%": ["JSON", "parse"],
        "%JSONStringify%": ["JSON", "stringify"],
        "%MapPrototype%": ["Map", "prototype"],
        "%NumberPrototype%": ["Number", "prototype"],
        "%ObjectPrototype%": ["Object", "prototype"],
        "%ObjProto_toString%": ["Object", "prototype", "toString"],
        "%ObjProto_valueOf%": ["Object", "prototype", "valueOf"],
        "%PromisePrototype%": ["Promise", "prototype"],
        "%PromiseProto_then%": ["Promise", "prototype", "then"],
        "%Promise_all%": ["Promise", "all"],
        "%Promise_reject%": ["Promise", "reject"],
        "%Promise_resolve%": ["Promise", "resolve"],
        "%RangeErrorPrototype%": ["RangeError", "prototype"],
        "%ReferenceErrorPrototype%": ["ReferenceError", "prototype"],
        "%RegExpPrototype%": ["RegExp", "prototype"],
        "%SetPrototype%": ["Set", "prototype"],
        "%SharedArrayBufferPrototype%": ["SharedArrayBuffer", "prototype"],
        "%StringPrototype%": ["String", "prototype"],
        "%SymbolPrototype%": ["Symbol", "prototype"],
        "%SyntaxErrorPrototype%": ["SyntaxError", "prototype"],
        "%TypedArrayPrototype%": ["TypedArray", "prototype"],
        "%TypeErrorPrototype%": ["TypeError", "prototype"],
        "%Uint8ArrayPrototype%": ["Uint8Array", "prototype"],
        "%Uint8ClampedArrayPrototype%": ["Uint8ClampedArray", "prototype"],
        "%Uint16ArrayPrototype%": ["Uint16Array", "prototype"],
        "%Uint32ArrayPrototype%": ["Uint32Array", "prototype"],
        "%URIErrorPrototype%": ["URIError", "prototype"],
        "%WeakMapPrototype%": ["WeakMap", "prototype"],
        "%WeakSetPrototype%": ["WeakSet", "prototype"],
      },
      eP = ep.call(Function.call, Array.prototype.concat),
      eO = ep.call(Function.apply, Array.prototype.splice),
      eA = ep.call(Function.call, String.prototype.replace),
      ej = ep.call(Function.call, String.prototype.slice),
      eD = ep.call(Function.call, RegExp.prototype.exec),
      eR =
      /[^%.[\]]+|\[(?:(-?\d+(?:\.\d+)?)|(["'])((?:(?!\2)[^\\]|\\.)*?)\2)\]|(?=(?:\.|\[\])(?:\.|\[\]|%$))/g,
      eM = /\\(\\)?/g,
      eN = function(e) {
        var t = ej(e, 0, 1),
          n = ej(e, -1);
        if ("%" === t && "%" !== n)
          throw new ef("invalid intrinsic syntax, expected closing `%`");
        if ("%" === n && "%" !== t)
          throw new ef("invalid intrinsic syntax, expected opening `%`");
        var r = [];
        return (
          eA(e, eR, function(e, t, n, i) {
            r[r.length] = n ? eA(i, eM, "$1") : t || e;
          }),
          r
        );
      },
      eL = function(e, t) {
        var n,
          r = e;
        if ((ed(eC, r) && (r = "%" + (n = eC[r])[0] + "%"), ed(eT, r))) {
          var i = eT[r];
          if (
            (i === ek &&
              (i = (function e(t) {
                var n;
                if ("%AsyncFunction%" === t) n = ey("async function () {}");
                else if ("%GeneratorFunction%" === t)
                  n = ey("function* () {}");
                else if ("%AsyncGeneratorFunction%" === t)
                  n = ey("async function* () {}");
                else if ("%AsyncGenerator%" === t) {
                  var r = e("%AsyncGeneratorFunction%");
                  r && (n = r.prototype);
                } else if ("%AsyncIteratorPrototype%" === t) {
                  var i = e("%AsyncGenerator%");
                  i && eS && (n = eS(i.prototype));
                }
                return (eT[t] = n), n;
              })(r)),
              void 0 === i && !t)
          )
            throw new em(
              "intrinsic " +
              e +
              " exists, but is not available. Please file an issue!"
            );
          return {
            alias: n,
            name: r,
            value: i
          };
        }
        throw new ef("intrinsic " + e + " does not exist!");
      },
      eI = function(e, t) {
        if ("string" != typeof e || 0 === e.length)
          throw new em("intrinsic name must be a non-empty string");
        if (arguments.length > 1 && "boolean" != typeof t)
          throw new em('"allowMissing" argument must be a boolean');
        if (null === eD(/^%?[^%]*%?$/, e))
          throw new ef(
            "`%` may not be present anywhere but at the beginning and end of the intrinsic name"
          );
        var n = eN(e),
          r = n.length > 0 ? n[0] : "",
          i = eL("%" + r + "%", t),
          o = i.name,
          a = i.value,
          s = !1,
          l = i.alias;
        l && ((r = l[0]), eO(n, eP([0, 1], l)));
        for (var u = 1, c = !0; u < n.length; u += 1) {
          var p = n[u],
            d = ej(p, 0, 1),
            f = ej(p, -1);
          if (
            ('"' === d ||
              "'" === d ||
              "`" === d ||
              '"' === f ||
              "'" === f ||
              "`" === f) &&
            d !== f
          )
            throw new ef(
              "property names with quotes must have matching quotes"
            );
          if (
            (("constructor" !== p && c) || (s = !0),
              ed(eT, (o = "%" + (r += "." + p) + "%")))
          )
            a = eT[o];
          else if (null != a) {
            if (!(p in a)) {
              if (!t)
                throw new em(
                  "base intrinsic for " +
                  e +
                  " exists, but the property is not available."
                );
              return;
            }
            if (eg && u + 1 >= n.length) {
              var h = eg(a, p);
              a =
                (c = !!h) && "get" in h && !("originalValue" in h.get) ?
                h.get :
                a[p];
            } else(c = ed(a, p)), (a = a[p]);
            c && !s && (eT[o] = a);
          }
        }
        return a;
      },
      eU = et(function(e) {
        var t = eI("%Function.prototype.apply%"),
          n = eI("%Function.prototype.call%"),
          r = eI("%Reflect.apply%", !0) || ep.call(n, t),
          i = eI("%Object.getOwnPropertyDescriptor%", !0),
          o = eI("%Object.defineProperty%", !0),
          a = eI("%Math.max%");
        if (o)
          try {
            o({}, "a", {
              value: 1
            });
          } catch (e) {
            o = null;
          }
        e.exports = function(e) {
          var t = r(ep, n, arguments);
          return (
            i &&
            o &&
            i(t, "length").configurable &&
            o(t, "length", {
              value: 1 + a(0, e.length - (arguments.length - 1)),
            }),
            t
          );
        };
        var s = function() {
          return r(ep, t, arguments);
        };
        o ? o(e.exports, "apply", {
          value: s
        }) : (e.exports.apply = s);
      }),
      eF = (eU.apply, eU(eI("String.prototype.indexOf"))),
      eV = function(e, t) {
        var n = eI(e, !!t);
        return "function" == typeof n && eF(e, ".prototype.") > -1 ?
          eU(n) :
          n;
      },
      ez =
      ((i = Object.freeze({
          __proto__: null,
          default: {}
        })) &&
        i.default) ||
      i,
      eB = "function" == typeof Map && Map.prototype,
      eq =
      Object.getOwnPropertyDescriptor && eB ?
      Object.getOwnPropertyDescriptor(Map.prototype, "size") :
      null,
      eH = eB && eq && "function" == typeof eq.get ? eq.get : null,
      eW = eB && Map.prototype.forEach,
      e$ = "function" == typeof Set && Set.prototype,
      eK =
      Object.getOwnPropertyDescriptor && e$ ?
      Object.getOwnPropertyDescriptor(Set.prototype, "size") :
      null,
      eQ = e$ && eK && "function" == typeof eK.get ? eK.get : null,
      eX = e$ && Set.prototype.forEach,
      eY =
      "function" == typeof WeakMap && WeakMap.prototype ?
      WeakMap.prototype.has :
      null,
      eG =
      "function" == typeof WeakSet && WeakSet.prototype ?
      WeakSet.prototype.has :
      null,
      eJ =
      "function" == typeof WeakRef && WeakRef.prototype ?
      WeakRef.prototype.deref :
      null,
      eZ = Boolean.prototype.valueOf,
      e0 = Object.prototype.toString,
      e1 = Function.prototype.toString,
      e2 = String.prototype.match,
      e3 = String.prototype.slice,
      e4 = String.prototype.replace,
      e5 = String.prototype.toUpperCase,
      e6 = String.prototype.toLowerCase,
      e8 = RegExp.prototype.test,
      e9 = Array.prototype.concat,
      e7 = Array.prototype.join,
      te = Array.prototype.slice,
      tt = Math.floor,
      tn = "function" == typeof BigInt ? BigInt.prototype.valueOf : null,
      tr = Object.getOwnPropertySymbols,
      ti =
      "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ?
      Symbol.prototype.toString :
      null,
      to = "function" == typeof Symbol && "object" == typeof Symbol.iterator,
      ta =
      "function" == typeof Symbol && Symbol.toStringTag ?
      Symbol.toStringTag :
      null,
      ts = Object.prototype.propertyIsEnumerable,
      tl =
      ("function" == typeof Reflect ?
        Reflect.getPrototypeOf :
        Object.getPrototypeOf) ||
      ([].__proto__ === Array.prototype ?
        function(e) {
          return e.__proto__;
        } :
        null);

    function tu(e, t) {
      if (
        e === 1 / 0 ||
        e === -1 / 0 ||
        e != e ||
        (e && e > -1e3 && e < 1e3) ||
        e8.call(/e/, t)
      )
        return t;
      var n = /[0-9](?=(?:[0-9]{3})+(?![0-9]))/g;
      if ("number" == typeof e) {
        var r = e < 0 ? -tt(-e) : tt(e);
        if (r !== e) {
          var i = String(r),
            o = e3.call(t, i.length + 1);
          return (
            e4.call(i, n, "$&_") +
            "." +
            e4.call(e4.call(o, /([0-9]{3})/g, "$&_"), /_$/, "")
          );
        }
      }
      return e4.call(t, n, "$&_");
    }
    var tc = ez.custom,
      tp = ty(tc) ? tc : null,
      td = function e(t, n, r, i) {
        var o = n || {};
        if (
          tv(o, "quoteStyle") &&
          "single" !== o.quoteStyle &&
          "double" !== o.quoteStyle
        )
          throw TypeError('option "quoteStyle" must be "single" or "double"');
        if (
          tv(o, "maxStringLength") &&
          ("number" == typeof o.maxStringLength ?
            o.maxStringLength < 0 && o.maxStringLength !== 1 / 0 :
            null !== o.maxStringLength)
        )
          throw TypeError(
            'option "maxStringLength", if provided, must be a positive integer, Infinity, or `null`'
          );
        var a = !tv(o, "customInspect") || o.customInspect;
        if ("boolean" != typeof a && "symbol" !== a)
          throw TypeError(
            "option \"customInspect\", if provided, must be `true`, `false`, or `'symbol'`"
          );
        if (
          tv(o, "indent") &&
          null !== o.indent &&
          "	" !== o.indent &&
          !(parseInt(o.indent, 10) === o.indent && o.indent > 0)
        )
          throw TypeError(
            'option "indent" must be "\\t", an integer > 0, or `null`'
          );
        if (
          tv(o, "numericSeparator") &&
          "boolean" != typeof o.numericSeparator
        )
          throw TypeError(
            'option "numericSeparator", if provided, must be `true` or `false`'
          );
        var s = o.numericSeparator;
        if (void 0 === t) return "undefined";
        if (null === t) return "null";
        if ("boolean" == typeof t) return t ? "true" : "false";
        if ("string" == typeof t)
          return (function e(t, n) {
            if (t.length > n.maxStringLength) {
              var r = t.length - n.maxStringLength;
              return (
                e(e3.call(t, 0, n.maxStringLength), n) +
                "... " +
                r +
                " more character" +
                (r > 1 ? "s" : "")
              );
            }
            return tf(
              e4.call(e4.call(t, /(['\\])/g, "\\$1"), /[\x00-\x1f]/g, tx),
              "single",
              n
            );
          })(t, o);
        if ("number" == typeof t) {
          if (0 === t) return 1 / 0 / t > 0 ? "0" : "-0";
          var l = String(t);
          return s ? tu(t, l) : l;
        }
        if ("bigint" == typeof t) {
          var u = String(t) + "n";
          return s ? tu(t, u) : u;
        }
        var c = void 0 === o.depth ? 5 : o.depth;
        if (
          (void 0 === r && (r = 0), r >= c && c > 0 && "object" == typeof t)
        )
          return th(t) ? "[Array]" : "[Object]";
        var p = (function(e, t) {
          var n;
          if ("	" === e.indent) n = "	";
          else {
            if (!("number" == typeof e.indent && e.indent > 0)) return null;
            n = e7.call(Array(e.indent + 1), " ");
          }
          return {
            base: n,
            prev: e7.call(Array(t + 1), n)
          };
        })(o, r);
        if (void 0 === i) i = [];
        else if (tw(i, t) >= 0) return "[Circular]";

        function d(t, n, a) {
          if ((n && (i = te.call(i)).push(n), a)) {
            var s = {
              depth: o.depth
            };
            return (
              tv(o, "quoteStyle") && (s.quoteStyle = o.quoteStyle),
              e(t, s, r + 1, i)
            );
          }
          return e(t, o, r + 1, i);
        }
        if ("function" == typeof t && !tm(t)) {
          var f = (function(e) {
              if (e.name) return e.name;
              var t = e2.call(e1.call(e), /^function\s*([\w$]+)/);
              return t ? t[1] : null;
            })(t),
            h = tE(t, d);
          return (
            "[Function" +
            (f ? ": " + f : " (anonymous)") +
            "]" +
            (h.length > 0 ? " { " + e7.call(h, ", ") + " }" : "")
          );
        }
        if (ty(t)) {
          var m = to ?
            e4.call(String(t), /^(Symbol\(.*\))_[^)]*$/, "$1") :
            ti.call(t);
          return "object" != typeof t || to ? m : tS(m);
        }
        if (
          t &&
          "object" == typeof t &&
          (("undefined" != typeof HTMLElement && t instanceof HTMLElement) ||
            ("string" == typeof t.nodeName &&
              "function" == typeof t.getAttribute))
        ) {
          for (
            var y,
              g = "<" + e6.call(String(t.nodeName)),
              v = t.attributes || [],
              b = 0; b < v.length; b++
          )
            g +=
            " " +
            v[b].name +
            "=" +
            tf(
              ((y = v[b].value), e4.call(String(y), /"/g, "&quot;")),
              "double",
              o
            );
          return (
            (g += ">"),
            t.childNodes && t.childNodes.length && (g += "..."),
            (g += "</" + e6.call(String(t.nodeName)) + ">")
          );
        }
        if (th(t)) {
          if (0 === t.length) return "[]";
          var w = tE(t, d);
          return p &&
            !(function(e) {
              for (var t = 0; t < e.length; t++)
                if (tw(e[t], "\n") >= 0) return !1;
              return !0;
            })(w) ?
            "[" + tT(w, p) + "]" :
            "[ " + e7.call(w, ", ") + " ]";
        }
        if (
          !(
            "[object Error]" !== tb(t) ||
            (ta && "object" == typeof t && ta in t)
          )
        ) {
          var x = tE(t, d);
          return "cause" in Error.prototype ||
            !("cause" in t) ||
            ts.call(t, "cause") ?
            0 === x.length ?
            "[" + String(t) + "]" :
            "{ [" + String(t) + "] " + e7.call(x, ", ") + " }" :
            "{ [" +
            String(t) +
            "] " +
            e7.call(e9.call("[cause]: " + d(t.cause), x), ", ") +
            " }";
        }
        if ("object" == typeof t && a) {
          if (tp && "function" == typeof t[tp] && ez)
            return ez(t, {
              depth: c - r
            });
          if ("symbol" !== a && "function" == typeof t.inspect)
            return t.inspect();
        }
        if (
          (function(e) {
            if (!eH || !e || "object" != typeof e) return !1;
            try {
              eH.call(e);
              try {
                eQ.call(e);
              } catch (e) {
                return !0;
              }
              return e instanceof Map;
            } catch (e) {}
            return !1;
          })(t)
        ) {
          var S = [];
          return (
            eW &&
            eW.call(t, function(e, n) {
              S.push(d(n, t, !0) + " => " + d(e, t));
            }),
            t_("Map", eH.call(t), S, p)
          );
        }
        if (
          (function(e) {
            if (!eQ || !e || "object" != typeof e) return !1;
            try {
              eQ.call(e);
              try {
                eH.call(e);
              } catch (e) {
                return !0;
              }
              return e instanceof Set;
            } catch (e) {}
            return !1;
          })(t)
        ) {
          var k = [];
          return (
            eX &&
            eX.call(t, function(e) {
              k.push(d(e, t));
            }),
            t_("Set", eQ.call(t), k, p)
          );
        }
        if (
          (function(e) {
            if (!eY || !e || "object" != typeof e) return !1;
            try {
              eY.call(e, eY);
              try {
                eG.call(e, eG);
              } catch (e) {
                return !0;
              }
              return e instanceof WeakMap;
            } catch (e) {}
            return !1;
          })(t)
        )
          return tk("WeakMap");
        if (
          (function(e) {
            if (!eG || !e || "object" != typeof e) return !1;
            try {
              eG.call(e, eG);
              try {
                eY.call(e, eY);
              } catch (e) {
                return !0;
              }
              return e instanceof WeakSet;
            } catch (e) {}
            return !1;
          })(t)
        )
          return tk("WeakSet");
        if (
          (function(e) {
            if (!eJ || !e || "object" != typeof e) return !1;
            try {
              return eJ.call(e), !0;
            } catch (e) {}
            return !1;
          })(t)
        )
          return tk("WeakRef");
        if (
          !(
            "[object Number]" !== tb(t) ||
            (ta && "object" == typeof t && ta in t)
          )
        )
          return tS(d(Number(t)));
        if (
          (function(e) {
            if (!e || "object" != typeof e || !tn) return !1;
            try {
              return tn.call(e), !0;
            } catch (e) {}
            return !1;
          })(t)
        )
          return tS(d(tn.call(t)));
        if (
          !(
            "[object Boolean]" !== tb(t) ||
            (ta && "object" == typeof t && ta in t)
          )
        )
          return tS(eZ.call(t));
        if (
          !(
            "[object String]" !== tb(t) ||
            (ta && "object" == typeof t && ta in t)
          )
        )
          return tS(d(String(t)));
        if (
          ("[object Date]" !== tb(t) ||
            (ta && "object" == typeof t && ta in t)) &&
          !tm(t)
        ) {
          var _ = tE(t, d),
            T = tl ?
            tl(t) === Object.prototype :
            t instanceof Object || t.constructor === Object,
            E = t instanceof Object ? "" : "null prototype",
            C = !T && ta && Object(t) === t && ta in t ?
            e3.call(tb(t), 8, -1) :
            E ?
            "Object" :
            "",
            P =
            (T || "function" != typeof t.constructor ?
              "" :
              t.constructor.name ?
              t.constructor.name + " " :
              "") +
            (C || E ?
              "[" + e7.call(e9.call([], C || [], E || []), ": ") + "] " :
              "");
          return 0 === _.length ?
            P + "{}" :
            p ?
            P + "{" + tT(_, p) + "}" :
            P + "{ " + e7.call(_, ", ") + " }";
        }
        return String(t);
      };

    function tf(e, t, n) {
      var r = "double" === (n.quoteStyle || t) ? '"' : "'";
      return r + e + r;
    }

    function th(e) {
      return !(
        "[object Array]" !== tb(e) ||
        (ta && "object" == typeof e && ta in e)
      );
    }

    function tm(e) {
      return !(
        "[object RegExp]" !== tb(e) ||
        (ta && "object" == typeof e && ta in e)
      );
    }

    function ty(e) {
      if (to) return e && "object" == typeof e && e instanceof Symbol;
      if ("symbol" == typeof e) return !0;
      if (!e || "object" != typeof e || !ti) return !1;
      try {
        return ti.call(e), !0;
      } catch (e) {}
      return !1;
    }
    var tg =
      Object.prototype.hasOwnProperty ||
      function(e) {
        return e in this;
      };

    function tv(e, t) {
      return tg.call(e, t);
    }

    function tb(e) {
      return e0.call(e);
    }

    function tw(e, t) {
      if (e.indexOf) return e.indexOf(t);
      for (var n = 0, r = e.length; n < r; n++)
        if (e[n] === t) return n;
      return -1;
    }

    function tx(e) {
      var t = e.charCodeAt(0),
        n = {
          8: "b",
          9: "t",
          10: "n",
          12: "f",
          13: "r"
        } [t];
      return n ?
        "\\" + n :
        "\\x" + (t < 16 ? "0" : "") + e5.call(t.toString(16));
    }

    function tS(e) {
      return "Object(" + e + ")";
    }

    function tk(e) {
      return e + " { ? }";
    }

    function t_(e, t, n, r) {
      return e + " (" + t + ") {" + (r ? tT(n, r) : e7.call(n, ", ")) + "}";
    }

    function tT(e, t) {
      if (0 === e.length) return "";
      var n = "\n" + t.prev + t.base;
      return n + e7.call(e, "," + n) + "\n" + t.prev;
    }

    function tE(e, t) {
      var n = th(e),
        r = [];
      if (n) {
        r.length = e.length;
        for (var i = 0; i < e.length; i++) r[i] = tv(e, i) ? t(e[i], e) : "";
      }
      var o,
        a = "function" == typeof tr ? tr(e) : [];
      if (to) {
        o = {};
        for (var s = 0; s < a.length; s++) o["$" + a[s]] = a[s];
      }
      for (var l in e)
        tv(e, l) &&
        ((n && String(Number(l)) === l && l < e.length) ||
          (to && o["$" + l] instanceof Symbol) ||
          (e8.call(/[^\w$]/, l) ?
            r.push(t(l, e) + ": " + t(e[l], e)) :
            r.push(l + ": " + t(e[l], e))));
      if ("function" == typeof tr)
        for (var u = 0; u < a.length; u++)
          ts.call(e, a[u]) && r.push("[" + t(a[u]) + "]: " + t(e[a[u]], e));
      return r;
    }
    var tC = eI("%TypeError%"),
      tP = eI("%WeakMap%", !0),
      tO = eI("%Map%", !0),
      tA = eV("WeakMap.prototype.get", !0),
      tj = eV("WeakMap.prototype.set", !0),
      tD = eV("WeakMap.prototype.has", !0),
      tR = eV("Map.prototype.get", !0),
      tM = eV("Map.prototype.set", !0),
      tN = eV("Map.prototype.has", !0),
      tL = function(e, t) {
        for (var n, r = e; null !== (n = r.next); r = n)
          if (n.key === t)
            return (r.next = n.next), (n.next = e.next), (e.next = n), n;
      },
      tI = function() {
        var e,
          t,
          n,
          r = {
            assert: function(e) {
              if (!r.has(e))
                throw new tC("Side channel does not contain " + td(e));
            },
            get: function(r) {
              if (
                tP &&
                r &&
                ("object" == typeof r || "function" == typeof r)
              ) {
                if (e) return tA(e, r);
              } else if (tO) {
                if (t) return tR(t, r);
              } else if (n) {
                var i;
                return (i = tL(n, r)) && i.value;
              }
            },
            has: function(r) {
              if (
                tP &&
                r &&
                ("object" == typeof r || "function" == typeof r)
              ) {
                if (e) return tD(e, r);
              } else if (tO) {
                if (t) return tN(t, r);
              } else if (n) return !!tL(n, r);
              return !1;
            },
            set: function(r, i) {
              var o, a;
              tP && r && ("object" == typeof r || "function" == typeof r) ?
                (e || (e = new tP()), tj(e, r, i)) :
                tO ?
                (t || (t = new tO()), tM(t, r, i)) :
                (n || (n = {
                    key: {},
                    next: null
                  }),
                  (a = tL((o = n), r)) ?
                  (a.value = i) :
                  (o.next = {
                    key: r,
                    next: o.next,
                    value: i
                  }));
            },
          };
        return r;
      },
      tU = String.prototype.replace,
      tF = /%20/g,
      tV = {
        default: "RFC3986",
        formatters: {
          RFC1738: function(e) {
            return tU.call(e, tF, "+");
          },
          RFC3986: function(e) {
            return String(e);
          },
        },
        RFC1738: "RFC1738",
      },
      tz = Object.prototype.hasOwnProperty,
      tB = Array.isArray,
      tq = (function() {
        for (var e = [], t = 0; t < 256; ++t)
          e.push("%" + ((t < 16 ? "0" : "") + t.toString(16)).toUpperCase());
        return e;
      })(),
      tH = function(e, t) {
        for (
          var n = t && t.plainObjects ? Object.create(null) : {}, r = 0; r < e.length;
          ++r
        )
          void 0 !== e[r] && (n[r] = e[r]);
        return n;
      },
      tW = {
        combine: function(e, t) {
          return [].concat(e, t);
        },
        compact: function(e) {
          for (
            var t = [{
              obj: {
                o: e
              },
              prop: "o"
            }], n = [], r = 0; r < t.length;
            ++r
          )
            for (
              var i = t[r], o = i.obj[i.prop], a = Object.keys(o), s = 0; s < a.length;
              ++s
            ) {
              var l = a[s],
                u = o[l];
              "object" == typeof u &&
                null !== u &&
                -1 === n.indexOf(u) &&
                (t.push({
                  obj: o,
                  prop: l
                }), n.push(u));
            }
          return (
            (function(e) {
              for (; e.length > 1;) {
                var t = e.pop(),
                  n = t.obj[t.prop];
                if (tB(n)) {
                  for (var r = [], i = 0; i < n.length; ++i)
                    void 0 !== n[i] && r.push(n[i]);
                  t.obj[t.prop] = r;
                }
              }
            })(t),
            e
          );
        },
        decode: function(e, t, n) {
          var r = e.replace(/\+/g, " ");
          if ("iso-8859-1" === n)
            return r.replace(/%[0-9a-f]{2}/gi, unescape);
          try {
            return decodeURIComponent(r);
          } catch (e) {
            return r;
          }
        },
        encode: function(e, t, n, r, i) {
          if (0 === e.length) return e;
          var o = e;
          if (
            ("symbol" == typeof e ?
              (o = Symbol.prototype.toString.call(e)) :
              "string" != typeof e && (o = String(e)),
              "iso-8859-1" === n)
          )
            return escape(o).replace(/%u[0-9a-f]{4}/gi, function(e) {
              return "%26%23" + parseInt(e.slice(2), 16) + "%3B";
            });
          for (var a = "", s = 0; s < o.length; ++s) {
            var l = o.charCodeAt(s);
            45 === l ||
              46 === l ||
              95 === l ||
              126 === l ||
              (l >= 48 && l <= 57) ||
              (l >= 65 && l <= 90) ||
              (l >= 97 && l <= 122) ||
              (i === tV.RFC1738 && (40 === l || 41 === l)) ?
              (a += o.charAt(s)) :
              l < 128 ?
              (a += tq[l]) :
              l < 2048 ?
              (a += tq[192 | (l >> 6)] + tq[128 | (63 & l)]) :
              l < 55296 || l >= 57344 ?
              (a +=
                tq[224 | (l >> 12)] +
                tq[128 | ((l >> 6) & 63)] +
                tq[128 | (63 & l)]) :
              ((s += 1),
                (a +=
                  tq[
                    240 |
                    ((l =
                        65536 +
                        (((1023 & l) << 10) | (1023 & o.charCodeAt(s)))) >>
                      18)
                  ] +
                  tq[128 | ((l >> 12) & 63)] +
                  tq[128 | ((l >> 6) & 63)] +
                  tq[128 | (63 & l)]));
          }
          return a;
        },
        isBuffer: function(e) {
          return (
            !(!e || "object" != typeof e) &&
            !!(
              e.constructor &&
              e.constructor.isBuffer &&
              e.constructor.isBuffer(e)
            )
          );
        },
        isRegExp: function(e) {
          return "[object RegExp]" === Object.prototype.toString.call(e);
        },
        maybeMap: function(e, t) {
          if (tB(e)) {
            for (var n = [], r = 0; r < e.length; r += 1) n.push(t(e[r]));
            return n;
          }
          return t(e);
        },
        merge: function e(t, n, r) {
          if (!n) return t;
          if ("object" != typeof n) {
            if (tB(t)) t.push(n);
            else {
              if (!t || "object" != typeof t) return [t, n];
              ((r && (r.plainObjects || r.allowPrototypes)) ||
                !tz.call(Object.prototype, n)) &&
              (t[n] = !0);
            }
            return t;
          }
          if (!t || "object" != typeof t) return [t].concat(n);
          var i = t;
          return (
            tB(t) && !tB(n) && (i = tH(t, r)),
            tB(t) && tB(n) ?
            (n.forEach(function(n, i) {
                if (tz.call(t, i)) {
                  var o = t[i];
                  o && "object" == typeof o && n && "object" == typeof n ?
                    (t[i] = e(o, n, r)) :
                    t.push(n);
                } else t[i] = n;
              }),
              t) :
            Object.keys(n).reduce(function(t, i) {
              var o = n[i];
              return (
                tz.call(t, i) ? (t[i] = e(t[i], o, r)) : (t[i] = o), t
              );
            }, i)
          );
        },
      },
      t$ = Object.prototype.hasOwnProperty,
      tK = {
        brackets: function(e) {
          return e + "[]";
        },
        comma: "comma",
        indices: function(e, t) {
          return e + "[" + t + "]";
        },
        repeat: function(e) {
          return e;
        },
      },
      tQ = Array.isArray,
      tX = Array.prototype.push,
      tY = function(e, t) {
        tX.apply(e, tQ(t) ? t : [t]);
      },
      tG = Date.prototype.toISOString,
      tJ = tV.default,
      tZ = {
        addQueryPrefix: !1,
        allowDots: !1,
        charset: "utf-8",
        charsetSentinel: !1,
        delimiter: "&",
        encode: !0,
        encoder: tW.encode,
        encodeValuesOnly: !1,
        format: tJ,
        formatter: tV.formatters[tJ],
        indices: !1,
        serializeDate: function(e) {
          return tG.call(e);
        },
        skipNulls: !1,
        strictNullHandling: !1,
      },
      t0 = {},
      t1 = function e(t, n, r, i, o, a, s, l, u, c, p, d, f, h, m, y) {
        for (
          var g = t, v = y, b = 0, w = !1; void 0 !== (v = v.get(t0)) && !w;

        ) {
          var x = v.get(t);
          if (((b += 1), void 0 !== x)) {
            if (x === b) throw RangeError("Cyclic object value");
            w = !0;
          }
          void 0 === v.get(t0) && (b = 0);
        }
        if (
          ("function" == typeof l ?
            (g = l(n, g)) :
            g instanceof Date ?
            (g = p(g)) :
            "comma" === r &&
            tQ(g) &&
            (g = tW.maybeMap(g, function(e) {
              return e instanceof Date ? p(e) : e;
            })),
            null === g)
        ) {
          if (o) return s && !h ? s(n, tZ.encoder, m, "key", d) : n;
          g = "";
        }
        if (
          "string" == typeof(S = g) ||
          "number" == typeof S ||
          "boolean" == typeof S ||
          "symbol" == typeof S ||
          "bigint" == typeof S ||
          tW.isBuffer(g)
        )
          return s ? [
            f(h ? n : s(n, tZ.encoder, m, "key", d)) +
            "=" +
            f(s(g, tZ.encoder, m, "value", d)),
          ] : [f(n) + "=" + f(String(g))];
        var S,
          k,
          _ = [];
        if (void 0 === g) return _;
        if ("comma" === r && tQ(g))
          h && s && (g = tW.maybeMap(g, s)),
          (k = [{
            value: g.length > 0 ? g.join(",") || null : void 0
          }]);
        else if (tQ(l)) k = l;
        else {
          var T = Object.keys(g);
          k = u ? T.sort(u) : T;
        }
        for (
          var E = i && tQ(g) && 1 === g.length ? n + "[]" : n, C = 0; C < k.length;
          ++C
        ) {
          var P = k[C],
            O = "object" == typeof P && void 0 !== P.value ? P.value : g[P];
          if (!a || null !== O) {
            var A = tQ(g) ?
              "function" == typeof r ?
              r(E, P) :
              E :
              E + (c ? "." + P : "[" + P + "]");
            y.set(t, b);
            var j = tI();
            j.set(t0, y),
              tY(
                _,
                e(
                  O,
                  A,
                  r,
                  i,
                  o,
                  a,
                  "comma" === r && h && tQ(g) ? null : s,
                  l,
                  u,
                  c,
                  p,
                  d,
                  f,
                  h,
                  m,
                  j
                )
              );
          }
        }
        return _;
      },
      t2 = Object.prototype.hasOwnProperty,
      t3 = Array.isArray,
      t4 = {
        allowDots: !1,
        allowPrototypes: !1,
        allowSparse: !1,
        arrayLimit: 20,
        charset: "utf-8",
        charsetSentinel: !1,
        comma: !1,
        decoder: tW.decode,
        delimiter: "&",
        depth: 5,
        ignoreQueryPrefix: !1,
        interpretNumericEntities: !1,
        parameterLimit: 1e3,
        parseArrays: !0,
        plainObjects: !1,
        strictNullHandling: !1,
      },
      t5 = function(e, t) {
        return e && "string" == typeof e && t.comma && e.indexOf(",") > -1 ?
          e.split(",") :
          e;
      },
      t6 = function(e, t, n, r) {
        if (e) {
          var i = n.allowDots ? e.replace(/\.([^.[]+)/g, "[$1]") : e,
            o = /(\[[^[\]]*])/g,
            a = n.depth > 0 && /(\[[^[\]]*])/.exec(i),
            s = a ? i.slice(0, a.index) : i,
            l = [];
          if (s) {
            if (
              !n.plainObjects &&
              t2.call(Object.prototype, s) &&
              !n.allowPrototypes
            )
              return;
            l.push(s);
          }
          for (
            var u = 0; n.depth > 0 && null !== (a = o.exec(i)) && u < n.depth;

          ) {
            if (
              ((u += 1),
                !n.plainObjects &&
                t2.call(Object.prototype, a[1].slice(1, -1)) &&
                !n.allowPrototypes)
            )
              return;
            l.push(a[1]);
          }
          return (
            a && l.push("[" + i.slice(a.index) + "]"),
            (function(e, t, n, r) {
              for (var i = r ? t : t5(t, n), o = e.length - 1; o >= 0; --o) {
                var a,
                  s = e[o];
                if ("[]" === s && n.parseArrays) a = [].concat(i);
                else {
                  a = n.plainObjects ? Object.create(null) : {};
                  var l =
                    "[" === s.charAt(0) && "]" === s.charAt(s.length - 1) ?
                    s.slice(1, -1) :
                    s,
                    u = parseInt(l, 10);
                  n.parseArrays || "" !== l ?
                    !isNaN(u) &&
                    s !== l &&
                    String(u) === l &&
                    u >= 0 &&
                    n.parseArrays &&
                    u <= n.arrayLimit ?
                    ((a = [])[u] = i) :
                    "__proto__" !== l && (a[l] = i) :
                    (a = {
                      0: i
                    });
                }
                i = a;
              }
              return i;
            })(l, t, n, r)
          );
        }
      },
      t8 = {
        parse: function(e, t) {
          var n = (function(e) {
            if (!e) return t4;
            if (
              null !== e.decoder &&
              void 0 !== e.decoder &&
              "function" != typeof e.decoder
            )
              throw TypeError("Decoder has to be a function.");
            if (
              void 0 !== e.charset &&
              "utf-8" !== e.charset &&
              "iso-8859-1" !== e.charset
            )
              throw TypeError(
                "The charset option must be either utf-8, iso-8859-1, or undefined"
              );
            var t = void 0 === e.charset ? t4.charset : e.charset;
            return {
              allowDots: void 0 === e.allowDots ? t4.allowDots : !!e.allowDots,
              allowPrototypes: "boolean" == typeof e.allowPrototypes ?
                e.allowPrototypes : t4.allowPrototypes,
              allowSparse: "boolean" == typeof e.allowSparse ?
                e.allowSparse : t4.allowSparse,
              arrayLimit: "number" == typeof e.arrayLimit ?
                e.arrayLimit : t4.arrayLimit,
              charset: t,
              charsetSentinel: "boolean" == typeof e.charsetSentinel ?
                e.charsetSentinel : t4.charsetSentinel,
              comma: "boolean" == typeof e.comma ? e.comma : t4.comma,
              decoder: "function" == typeof e.decoder ? e.decoder : t4.decoder,
              delimiter: "string" == typeof e.delimiter || tW.isRegExp(e.delimiter) ?
                e.delimiter : t4.delimiter,
              depth: "number" == typeof e.depth || !1 === e.depth ?
                +e.depth : t4.depth,
              ignoreQueryPrefix: !0 === e.ignoreQueryPrefix,
              interpretNumericEntities: "boolean" == typeof e.interpretNumericEntities ?
                e.interpretNumericEntities : t4.interpretNumericEntities,
              parameterLimit: "number" == typeof e.parameterLimit ?
                e.parameterLimit : t4.parameterLimit,
              parseArrays: !1 !== e.parseArrays,
              plainObjects: "boolean" == typeof e.plainObjects ?
                e.plainObjects : t4.plainObjects,
              strictNullHandling: "boolean" == typeof e.strictNullHandling ?
                e.strictNullHandling : t4.strictNullHandling,
            };
          })(t);
          if ("" === e || null == e)
            return n.plainObjects ? Object.create(null) : {};
          for (
            var r =
              "string" == typeof e ?
              (function(e, t) {
                var n,
                  r = {
                    __proto__: null
                  },
                  i = t.ignoreQueryPrefix ? e.replace(/^\?/, "") : e,
                  o =
                  t.parameterLimit === 1 / 0 ?
                  void 0 :
                  t.parameterLimit,
                  a = i.split(t.delimiter, o),
                  s = -1,
                  l = t.charset;
                if (t.charsetSentinel)
                  for (n = 0; n < a.length; ++n)
                    0 === a[n].indexOf("utf8=") &&
                    ("utf8=%E2%9C%93" === a[n] ?
                      (l = "utf-8") :
                      "utf8=%26%2310003%3B" === a[n] &&
                      (l = "iso-8859-1"),
                      (s = n),
                      (n = a.length));
                for (n = 0; n < a.length; ++n)
                  if (n !== s) {
                    var u,
                      c,
                      p = a[n],
                      d = p.indexOf("]="),
                      f = -1 === d ? p.indexOf("=") : d + 1; -
                    1 === f ?
                      ((u = t.decoder(p, t4.decoder, l, "key")),
                        (c = t.strictNullHandling ? null : "")) :
                      ((u = t.decoder(
                          p.slice(0, f),
                          t4.decoder,
                          l,
                          "key"
                        )),
                        (c = tW.maybeMap(
                          t5(p.slice(f + 1), t),
                          function(e) {
                            return t.decoder(e, t4.decoder, l, "value");
                          }
                        ))),
                      c &&
                      t.interpretNumericEntities &&
                      "iso-8859-1" === l &&
                      (c = c.replace(/&#(\d+);/g, function(e, t) {
                        return String.fromCharCode(parseInt(t, 10));
                      })),
                      p.indexOf("[]=") > -1 && (c = t3(c) ? [c] : c),
                      t2.call(r, u) ?
                      (r[u] = tW.combine(r[u], c)) :
                      (r[u] = c);
                  }
                return r;
              })(e, n) :
              e,
              i = n.plainObjects ? Object.create(null) : {},
              o = Object.keys(r),
              a = 0; a < o.length;
            ++a
          ) {
            var s = o[a],
              l = t6(s, r[s], n, "string" == typeof e);
            i = tW.merge(i, l, n);
          }
          return !0 === n.allowSparse ? i : tW.compact(i);
        },
        stringify: function(e, t) {
          var n,
            r = e,
            i = (function(e) {
              if (!e) return tZ;
              if (
                null !== e.encoder &&
                void 0 !== e.encoder &&
                "function" != typeof e.encoder
              )
                throw TypeError("Encoder has to be a function.");
              var t = e.charset || tZ.charset;
              if (
                void 0 !== e.charset &&
                "utf-8" !== e.charset &&
                "iso-8859-1" !== e.charset
              )
                throw TypeError(
                  "The charset option must be either utf-8, iso-8859-1, or undefined"
                );
              var n = tV.default;
              if (void 0 !== e.format) {
                if (!t$.call(tV.formatters, e.format))
                  throw TypeError("Unknown format option provided.");
                n = e.format;
              }
              var r = tV.formatters[n],
                i = tZ.filter;
              return (
                ("function" == typeof e.filter || tQ(e.filter)) &&
                (i = e.filter), {
                  addQueryPrefix: "boolean" == typeof e.addQueryPrefix ?
                    e.addQueryPrefix : tZ.addQueryPrefix,
                  allowDots: void 0 === e.allowDots ? tZ.allowDots : !!e.allowDots,
                  charset: t,
                  charsetSentinel: "boolean" == typeof e.charsetSentinel ?
                    e.charsetSentinel : tZ.charsetSentinel,
                  delimiter: void 0 === e.delimiter ? tZ.delimiter : e.delimiter,
                  encode: "boolean" == typeof e.encode ? e.encode : tZ.encode,
                  encoder: "function" == typeof e.encoder ? e.encoder : tZ.encoder,
                  encodeValuesOnly: "boolean" == typeof e.encodeValuesOnly ?
                    e.encodeValuesOnly : tZ.encodeValuesOnly,
                  filter: i,
                  format: n,
                  formatter: r,
                  serializeDate: "function" == typeof e.serializeDate ?
                    e.serializeDate : tZ.serializeDate,
                  skipNulls: "boolean" == typeof e.skipNulls ?
                    e.skipNulls : tZ.skipNulls,
                  sort: "function" == typeof e.sort ? e.sort : null,
                  strictNullHandling: "boolean" == typeof e.strictNullHandling ?
                    e.strictNullHandling : tZ.strictNullHandling,
                }
              );
            })(t);
          "function" == typeof i.filter ?
            (r = (0, i.filter)("", r)) :
            tQ(i.filter) && (n = i.filter);
          var o,
            a = [];
          if ("object" != typeof r || null === r) return "";
          o =
            t && t.arrayFormat in tK ?
            t.arrayFormat :
            t && "indices" in t ?
            t.indices ?
            "indices" :
            "repeat" :
            "indices";
          var s = tK[o];
          if (
            t &&
            "commaRoundTrip" in t &&
            "boolean" != typeof t.commaRoundTrip
          )
            throw TypeError("`commaRoundTrip` must be a boolean, or absent");
          var l = "comma" === s && t && t.commaRoundTrip;
          n || (n = Object.keys(r)), i.sort && n.sort(i.sort);
          for (var u = tI(), c = 0; c < n.length; ++c) {
            var p = n[c];
            (i.skipNulls && null === r[p]) ||
            tY(
              a,
              t1(
                r[p],
                p,
                s,
                l,
                i.strictNullHandling,
                i.skipNulls,
                i.encode ? i.encoder : null,
                i.filter,
                i.sort,
                i.allowDots,
                i.serializeDate,
                i.format,
                i.formatter,
                i.encodeValuesOnly,
                i.charset,
                u
              )
            );
          }
          var d = a.join(i.delimiter),
            f = !0 === i.addQueryPrefix ? "?" : "";
          return (
            i.charsetSentinel &&
            ("iso-8859-1" === i.charset ?
              (f += "utf8=%26%2310003%3B&") :
              (f += "utf8=%E2%9C%93&")),
            d.length > 0 ? f + d : ""
          );
        },
      },
      t9 = et(function(e) {
        function t(e) {
          if (e)
            return (function(e) {
              for (var n in t.prototype) e[n] = t.prototype[n];
              return e;
            })(e);
        }
        (e.exports = t),
        (t.prototype.on = t.prototype.addEventListener =
          function(e, t) {
            return (
              (this._callbacks = this._callbacks || {}),
              (this._callbacks["$" + e] =
                this._callbacks["$" + e] || []).push(t),
              this
            );
          }),
        (t.prototype.once = function(e, t) {
          function n() {
            this.off(e, n), t.apply(this, arguments);
          }
          return (n.fn = t), this.on(e, n), this;
        }),
        (t.prototype.off =
          t.prototype.removeListener =
          t.prototype.removeAllListeners =
          t.prototype.removeEventListener =
          function(e, t) {
            if (
              ((this._callbacks = this._callbacks || {}),
                0 == arguments.length)
            )
              return (this._callbacks = {}), this;
            var n,
              r = this._callbacks["$" + e];
            if (!r) return this;
            if (1 == arguments.length)
              return delete this._callbacks["$" + e], this;
            for (var i = 0; i < r.length; i++)
              if ((n = r[i]) === t || n.fn === t) {
                r.splice(i, 1);
                break;
              }
            return (
              0 === r.length && delete this._callbacks["$" + e], this
            );
          }),
        (t.prototype.emit = function(e) {
          this._callbacks = this._callbacks || {};
          for (
            var t = Array(arguments.length - 1),
              n = this._callbacks["$" + e],
              r = 1; r < arguments.length; r++
          )
            t[r - 1] = arguments[r];
          if (n) {
            r = 0;
            for (var i = (n = n.slice(0)).length; r < i; ++r)
              n[r].apply(this, t);
          }
          return this;
        }),
        (t.prototype.listeners = function(e) {
          return (
            (this._callbacks = this._callbacks || {}),
            this._callbacks["$" + e] || []
          );
        }),
        (t.prototype.hasListeners = function(e) {
          return !!this.listeners(e).length;
        });
      });
    (nn.default = nn), (nn.stable = no), (nn.stableStringify = no);
    var t7 = [],
      ne = [];

    function nt() {
      return {
        depthLimit: Number.MAX_SAFE_INTEGER,
        edgesLimit: Number.MAX_SAFE_INTEGER,
      };
    }

    function nn(e, t, n, r) {
      var i;
      void 0 === r && (r = nt()),
        (function e(t, n, r, i, o, a, s) {
          var l;
          if (((a += 1), "object" == typeof t && null !== t)) {
            for (l = 0; l < i.length; l++)
              if (i[l] === t) return void nr("[Circular]", t, n, o);
            if (
              (void 0 !== s.depthLimit && a > s.depthLimit) ||
              (void 0 !== s.edgesLimit && r + 1 > s.edgesLimit)
            )
              return void nr("[...]", t, n, o);
            if ((i.push(t), Array.isArray(t)))
              for (l = 0; l < t.length; l++) e(t[l], l, l, i, t, a, s);
            else {
              var u = Object.keys(t);
              for (l = 0; l < u.length; l++) {
                var c = u[l];
                e(t[c], c, l, i, t, a, s);
              }
            }
            i.pop();
          }
        })(e, "", 0, [], void 0, 0, r);
      try {
        i =
          0 === ne.length ?
          JSON.stringify(e, t, n) :
          JSON.stringify(e, na(t), n);
      } catch (e) {
        return JSON.stringify(
          "[unable to serialize, circular reference is too complex to analyze]"
        );
      } finally {
        for (; 0 !== t7.length;) {
          var o = t7.pop();
          4 === o.length ?
            Object.defineProperty(o[0], o[1], o[3]) :
            (o[0][o[1]] = o[2]);
        }
      }
      return i;
    }

    function nr(e, t, n, r) {
      var i = Object.getOwnPropertyDescriptor(r, n);
      void 0 !== i.get ?
        i.configurable ?
        (Object.defineProperty(r, n, {
          value: e
        }), t7.push([r, n, t, i])) :
        ne.push([t, n, e]) :
        ((r[n] = e), t7.push([r, n, t]));
    }

    function ni(e, t) {
      return e < t ? -1 : e > t ? 1 : 0;
    }

    function no(e, t, n, r) {
      void 0 === r && (r = nt());
      var i,
        o =
        (function e(t, n, r, i, o, a, s) {
          var l;
          if (((a += 1), "object" == typeof t && null !== t)) {
            for (l = 0; l < i.length; l++)
              if (i[l] === t) return void nr("[Circular]", t, n, o);
            try {
              if ("function" == typeof t.toJSON) return;
            } catch (e) {
              return;
            }
            if (
              (void 0 !== s.depthLimit && a > s.depthLimit) ||
              (void 0 !== s.edgesLimit && r + 1 > s.edgesLimit)
            )
              return void nr("[...]", t, n, o);
            if ((i.push(t), Array.isArray(t)))
              for (l = 0; l < t.length; l++) e(t[l], l, l, i, t, a, s);
            else {
              var u = {},
                c = Object.keys(t).sort(ni);
              for (l = 0; l < c.length; l++) {
                var p = c[l];
                e(t[p], p, l, i, t, a, s), (u[p] = t[p]);
              }
              if (void 0 === o) return u;
              t7.push([o, n, t]), (o[n] = u);
            }
            i.pop();
          }
        })(e, "", 0, [], void 0, 0, r) || e;
      try {
        i =
          0 === ne.length ?
          JSON.stringify(o, t, n) :
          JSON.stringify(o, na(t), n);
      } catch (e) {
        return JSON.stringify(
          "[unable to serialize, circular reference is too complex to analyze]"
        );
      } finally {
        for (; 0 !== t7.length;) {
          var a = t7.pop();
          4 === a.length ?
            Object.defineProperty(a[0], a[1], a[3]) :
            (a[0][a[1]] = a[2]);
        }
      }
      return i;
    }

    function na(e) {
      return (
        (e =
          void 0 !== e ?
          e :
          function(e, t) {
            return t;
          }),
        function(t, n) {
          if (ne.length > 0)
            for (var r = 0; r < ne.length; r++) {
              var i = ne[r];
              if (i[1] === t && i[0] === n) {
                (n = i[2]), ne.splice(r, 1);
                break;
              }
            }
          return e.call(this, t, n);
        }
      );
    }
    var ns = et(function(e, t) {
      function n(e) {
        return (n =
          "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ?
          function(e) {
            return typeof e;
          } :
          function(e) {
            return e &&
              "function" == typeof Symbol &&
              e.constructor === Symbol &&
              e !== Symbol.prototype ?
              "symbol" :
              typeof e;
          })(e);
      }

      function r(e, t) {
        var n =
          ("undefined" != typeof Symbol && e[Symbol.iterator]) ||
          e["@@iterator"];
        if (!n) {
          if (
            Array.isArray(e) ||
            (n = (function(e, t) {
              if (e) {
                if ("string" == typeof e) return i(e, void 0);
                var n = Object.prototype.toString.call(e).slice(8, -1);
                if (
                  ("Object" === n &&
                    e.constructor &&
                    (n = e.constructor.name),
                    "Map" === n || "Set" === n)
                )
                  return Array.from(e);
                if (
                  "Arguments" === n ||
                  /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)
                )
                  return i(e, void 0);
              }
            })(e)) ||
            (t && e && "number" == typeof e.length)
          ) {
            n && (e = n);
            var r = 0,
              o = function() {};
            return {
              s: o,
              n: function() {
                return r >= e.length ? {
                  done: !0
                } : {
                  done: !1,
                  value: e[r++]
                };
              },
              e: function(e) {
                throw e;
              },
              f: o,
            };
          }
          throw TypeError(
            "Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."
          );
        }
        var a,
          s = !0,
          l = !1;
        return {
          s: function() {
            n = n.call(e);
          },
          n: function() {
            var e = n.next();
            return (s = e.done), e;
          },
          e: function(e) {
            (l = !0), (a = e);
          },
          f: function() {
            try {
              s || null == n.return || n.return();
            } finally {
              if (l) throw a;
            }
          },
        };
      }

      function i(e, t) {
        (null == t || t > e.length) && (t = e.length);
        for (var n = 0, r = Array(t); n < t; n++) r[n] = e[n];
        return r;
      }
      (t.type = function(e) {
        return e.split(/ *; */).shift();
      }),
      (t.params = function(e) {
        var t,
          n = {},
          i = r(e.split(/ *; */));
        try {
          for (i.s(); !(t = i.n()).done;) {
            var o = t.value.split(/ *= */),
              a = o.shift(),
              s = o.shift();
            a && s && (n[a] = s);
          }
        } catch (e) {
          i.e(e);
        } finally {
          i.f();
        }
        return n;
      }),
      (t.parseLinks = function(e) {
        var t,
          n = {},
          i = r(e.split(/ *, */));
        try {
          for (i.s(); !(t = i.n()).done;) {
            var o = t.value.split(/ *; */),
              a = o[0].slice(1, -1);
            n[o[1].split(/ *= */)[1].slice(1, -1)] = a;
          }
        } catch (e) {
          i.e(e);
        } finally {
          i.f();
        }
        return n;
      }),
      (t.cleanHeader = function(e, t) {
        return (
          delete e["content-type"],
          delete e["content-length"],
          delete e["transfer-encoding"],
          delete e.host,
          t && (delete e.authorization, delete e.cookie),
          e
        );
      }),
      (t.isObject = function(e) {
        return null !== e && "object" === n(e);
      }),
      (t.hasOwn =
        Object.hasOwn ||
        function(e, t) {
          if (null == e)
            throw TypeError("Cannot convert undefined or null to object");
          return Object.prototype.hasOwnProperty.call(Object(e), t);
        }),
      (t.mixin = function(e, n) {
        for (var r in n) t.hasOwn(n, r) && (e[r] = n[r]);
      });
    });

    function nl(e) {
      return (nl =
        "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ?
        function(e) {
          return typeof e;
        } :
        function(e) {
          return e &&
            "function" == typeof Symbol &&
            e.constructor === Symbol &&
            e !== Symbol.prototype ?
            "symbol" :
            typeof e;
        })(e);
    }
    ns.type,
      ns.params,
      ns.parseLinks,
      ns.cleanHeader,
      ns.isObject,
      ns.hasOwn,
      ns.mixin;
    var nu = ns.isObject,
      nc = ns.hasOwn;

    function np() {}
    (np.prototype.clearTimeout = function() {
      return (
        clearTimeout(this._timer),
        clearTimeout(this._responseTimeoutTimer),
        clearTimeout(this._uploadTimeoutTimer),
        delete this._timer,
        delete this._responseTimeoutTimer,
        delete this._uploadTimeoutTimer,
        this
      );
    }),
    (np.prototype.parse = function(e) {
      return (this._parser = e), this;
    }),
    (np.prototype.responseType = function(e) {
      return (this._responseType = e), this;
    }),
    (np.prototype.serialize = function(e) {
      return (this._serializer = e), this;
    }),
    (np.prototype.timeout = function(e) {
      if (!e || "object" !== nl(e))
        return (
          (this._timeout = e),
          (this._responseTimeout = 0),
          (this._uploadTimeout = 0),
          this
        );
      for (var t in e)
        if (nc(e, t))
          switch (t) {
            case "deadline":
              this._timeout = e.deadline;
              break;
            case "response":
              this._responseTimeout = e.response;
              break;
            case "upload":
              this._uploadTimeout = e.upload;
              break;
            default:
              console.warn("Unknown timeout option", t);
          }
      return this;
    }),
    (np.prototype.retry = function(e, t) {
      return (
        (0 != arguments.length && !0 !== e) || (e = 1),
        e <= 0 && (e = 0),
        (this._maxRetries = e),
        (this._retries = 0),
        (this._retryCallback = t),
        this
      );
    });
    var nd = new Set([
        "ETIMEDOUT",
        "ECONNRESET",
        "EADDRINUSE",
        "ECONNREFUSED",
        "EPIPE",
        "ENOTFOUND",
        "ENETUNREACH",
        "EAI_AGAIN",
      ]),
      nf = new Set([408, 413, 429, 500, 502, 503, 504, 521, 522, 524]);

    function nh() {}

    function nm(e, t) {
      if (e) {
        if ("string" == typeof e) return ny(e, t);
        var n = Object.prototype.toString.call(e).slice(8, -1);
        return (
          "Object" === n && e.constructor && (n = e.constructor.name),
          "Map" === n || "Set" === n ?
          Array.from(e) :
          "Arguments" === n ||
          /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n) ?
          ny(e, t) :
          void 0
        );
      }
    }

    function ny(e, t) {
      (null == t || t > e.length) && (t = e.length);
      for (var n = 0, r = Array(t); n < t; n++) r[n] = e[n];
      return r;
    }

    function ng() {
      this._defaults = [];
    }
    (np.prototype._shouldRetry = function(e, t) {
      if (!this._maxRetries || this._retries++ >= this._maxRetries) return !1;
      if (this._retryCallback)
        try {
          var n = this._retryCallback(e, t);
          if (!0 === n) return !0;
          if (!1 === n) return !1;
        } catch (e) {
          console.error(e);
        }
      return !!(
        (t && t.status && nf.has(t.status)) ||
        (e &&
          ((e.code && nd.has(e.code)) ||
            (e.timeout && "ECONNABORTED" === e.code) ||
            e.crossDomain))
      );
    }),
    (np.prototype._retry = function() {
      return (
        this.clearTimeout(),
        this.req && ((this.req = null), (this.req = this.request())),
        (this._aborted = !1),
        (this.timedout = !1),
        (this.timedoutError = null),
        this._end()
      );
    }),
    (np.prototype.then = function(e, t) {
      var n = this;
      if (!this._fullfilledPromise) {
        var r = this;
        this._endCalled &&
          console.warn(
            "Warning: superagent request was sent twice, because both .end() and .then() were called. Never call .end() if you use promises"
          ),
          (this._fullfilledPromise = new Promise(function(e, t) {
            r.on("abort", function() {
                if (!(n._maxRetries && n._maxRetries > n._retries)) {
                  if (n.timedout && n.timedoutError) t(n.timedoutError);
                  else {
                    var e = Error("Aborted");
                    (e.code = "ABORTED"),
                    (e.status = n.status),
                    (e.method = n.method),
                    (e.url = n.url),
                    t(e);
                  }
                }
              }),
              r.end(function(n, r) {
                n ? t(n) : e(r);
              });
          }));
      }
      return this._fullfilledPromise.then(e, t);
    }),
    (np.prototype.catch = function(e) {
      return this.then(void 0, e);
    }),
    (np.prototype.use = function(e) {
      return e(this), this;
    }),
    (np.prototype.ok = function(e) {
      if ("function" != typeof e) throw Error("Callback required");
      return (this._okCallback = e), this;
    }),
    (np.prototype._isResponseOK = function(e) {
      return (
        !!e &&
        (this._okCallback ?
          this._okCallback(e) :
          e.status >= 200 && e.status < 300)
      );
    }),
    (np.prototype.get = function(e) {
      return this._header[e.toLowerCase()];
    }),
    (np.prototype.getHeader = np.prototype.get),
    (np.prototype.set = function(e, t) {
      if (nu(e)) {
        for (var n in e) nc(e, n) && this.set(n, e[n]);
        return this;
      }
      return (
        (this._header[e.toLowerCase()] = t), (this.header[e] = t), this
      );
    }),
    (np.prototype.unset = function(e) {
      return (
        delete this._header[e.toLowerCase()], delete this.header[e], this
      );
    }),
    (np.prototype.field = function(e, t, n) {
      if (null == e) throw Error(".field(name, val) name can not be empty");
      if (this._data)
        throw Error(
          ".field() can't be used if .send() is used. Please use only .send() or only .field() & .attach()"
        );
      if (nu(e)) {
        for (var r in e) nc(e, r) && this.field(r, e[r]);
        return this;
      }
      if (Array.isArray(t)) {
        for (var i in t) nc(t, i) && this.field(e, t[i]);
        return this;
      }
      if (null == t) throw Error(".field(name, val) val can not be empty");
      return (
        "boolean" == typeof t && (t = String(t)),
        n ?
        this._getFormData().append(e, t, n) :
        this._getFormData().append(e, t),
        this
      );
    }),
    (np.prototype.abort = function() {
      if (this._aborted) return this;
      if (((this._aborted = !0), this.xhr && this.xhr.abort(), this.req)) {
        if (ez.gte(B.version, "v13.0.0") && ez.lt(B.version, "v14.0.0"))
          throw Error(
            "Superagent does not work in v13 properly with abort() due to Node.js core changes"
          );
        ez.gte(B.version, "v14.0.0") && (this.req.destroyed = !0),
          this.req.abort();
      }
      return this.clearTimeout(), this.emit("abort"), this;
    }),
    (np.prototype._auth = function(e, t, n, r) {
      switch (n.type) {
        case "basic":
          this.set(
            "Authorization",
            "Basic ".concat(r("".concat(e, ":").concat(t)))
          );
          break;
        case "auto":
          (this.username = e), (this.password = t);
          break;
        case "bearer":
          this.set("Authorization", "Bearer ".concat(e));
      }
      return this;
    }),
    (np.prototype.withCredentials = function(e) {
      return void 0 === e && (e = !0), (this._withCredentials = e), this;
    }),
    (np.prototype.redirects = function(e) {
      return (this._maxRedirects = e), this;
    }),
    (np.prototype.maxResponseSize = function(e) {
      if ("number" != typeof e) throw TypeError("Invalid argument");
      return (this._maxResponseSize = e), this;
    }),
    (np.prototype.toJSON = function() {
      return {
        method: this.method,
        url: this.url,
        data: this._data,
        headers: this._header,
      };
    }),
    (np.prototype.send = function(e) {
      var t = nu(e),
        n = this._header["content-type"];
      if (this._formData)
        throw Error(
          ".send() can't be used if .attach() or .field() is used. Please use only .send() or only .field() & .attach()"
        );
      if (t && !this._data)
        Array.isArray(e) ?
        (this._data = []) :
        this._isHost(e) || (this._data = {});
      else if (e && this._data && this._isHost(this._data))
        throw Error("Can't merge these send calls");
      if (t && nu(this._data))
        for (var r in e) nc(e, r) && (this._data[r] = e[r]);
      else
        "string" == typeof e ?
        (n || this.type("form"),
          (n = this._header["content-type"]) &&
          (n = n.toLowerCase().trim()),
          (this._data =
            "application/x-www-form-urlencoded" === n ?
            this._data ?
            "".concat(this._data, "&").concat(e) :
            e :
            (this._data || "") + e)) :
        (this._data = e);
      return !t || this._isHost(e) || n || this.type("json"), this;
    }),
    (np.prototype.sortQuery = function(e) {
      return (this._sort = void 0 === e || e), this;
    }),
    (np.prototype._finalizeQueryString = function() {
      var e = this._query.join("&");
      if (
        (e && (this.url += (this.url.includes("?") ? "&" : "?") + e),
          (this._query.length = 0),
          this._sort)
      ) {
        var t = this.url.indexOf("?");
        if (t >= 0) {
          var n = this.url.slice(t + 1).split("&");
          "function" == typeof this._sort ? n.sort(this._sort) : n.sort(),
            (this.url = this.url.slice(0, t) + "?" + n.join("&"));
        }
      }
    }),
    (np.prototype._appendQueryString = function() {
      console.warn("Unsupported");
    }),
    (np.prototype._timeoutError = function(e, t, n) {
      if (!this._aborted) {
        var r = Error("".concat(e + t, "ms exceeded"));
        (r.timeout = t),
        (r.code = "ECONNABORTED"),
        (r.errno = n),
        (this.timedout = !0),
        (this.timedoutError = r),
        this.abort(),
          this.callback(r);
      }
    }),
    (np.prototype._setTimeouts = function() {
      var e = this;
      this._timeout &&
        !this._timer &&
        (this._timer = setTimeout(function() {
          e._timeoutError("Timeout of ", e._timeout, "ETIME");
        }, this._timeout)),
        this._responseTimeout &&
        !this._responseTimeoutTimer &&
        (this._responseTimeoutTimer = setTimeout(function() {
          e._timeoutError(
            "Response timeout of ",
            e._responseTimeout,
            "ETIMEDOUT"
          );
        }, this._responseTimeout));
    }),
    (nh.prototype.get = function(e) {
      return this.header[e.toLowerCase()];
    }),
    (nh.prototype._setHeaderProperties = function(e) {
      var t = e["content-type"] || "";
      this.type = ns.type(t);
      var n = ns.params(t);
      for (var r in n)
        Object.prototype.hasOwnProperty.call(n, r) && (this[r] = n[r]);
      this.links = {};
      try {
        e.link && (this.links = ns.parseLinks(e.link));
      } catch (e) {}
    }),
    (nh.prototype._setStatusProperties = function(e) {
      var t = Math.trunc(e / 100);
      (this.statusCode = e),
      (this.status = this.statusCode),
      (this.statusType = t),
      (this.info = 1 === t),
      (this.ok = 2 === t),
      (this.redirect = 3 === t),
      (this.clientError = 4 === t),
      (this.serverError = 5 === t),
      (this.error = (4 === t || 5 === t) && this.toError()),
      (this.created = 201 === e),
      (this.accepted = 202 === e),
      (this.noContent = 204 === e),
      (this.badRequest = 400 === e),
      (this.unauthorized = 401 === e),
      (this.notAcceptable = 406 === e),
      (this.forbidden = 403 === e),
      (this.notFound = 404 === e),
      (this.unprocessableEntity = 422 === e);
    });
    for (
      var nv = 0,
        nb = [
          "use",
          "on",
          "once",
          "set",
          "query",
          "type",
          "accept",
          "auth",
          "withCredentials",
          "sortQuery",
          "retry",
          "ok",
          "redirects",
          "timeout",
          "buffer",
          "serialize",
          "parse",
          "ca",
          "key",
          "pfx",
          "cert",
          "disableTLSCerts",
        ]; nv < nb.length; nv++
    )
      !(function() {
        var e = nb[nv];
        ng.prototype[e] = function() {
          for (var t = arguments.length, n = Array(t), r = 0; r < t; r++)
            n[r] = arguments[r];
          return this._defaults.push({
            fn: e,
            args: n
          }), this;
        };
      })();
    ng.prototype._setDefaults = function(e) {
      var t,
        n = (function(e, t) {
          var n =
            ("undefined" != typeof Symbol && e[Symbol.iterator]) ||
            e["@@iterator"];
          if (!n) {
            if (Array.isArray(e) || (n = nm(e))) {
              n && (e = n);
              var r = 0,
                i = function() {};
              return {
                s: i,
                n: function() {
                  return r >= e.length ? {
                    done: !0
                  } : {
                    done: !1,
                    value: e[r++]
                  };
                },
                e: function(e) {
                  throw e;
                },
                f: i,
              };
            }
            throw TypeError(
              "Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."
            );
          }
          var o,
            a = !0,
            s = !1;
          return {
            s: function() {
              n = n.call(e);
            },
            n: function() {
              var e = n.next();
              return (a = e.done), e;
            },
            e: function(e) {
              (s = !0), (o = e);
            },
            f: function() {
              try {
                a || null == n.return || n.return();
              } finally {
                if (s) throw o;
              }
            },
          };
        })(this._defaults);
      try {
        for (n.s(); !(t = n.n()).done;) {
          var r,
            i = t.value;
          e[i.fn].apply(
            e,
            ((r = i.args),
              (function(e) {
                if (Array.isArray(e)) return ny(e);
              })(r) ||
              (function(e) {
                if (
                  ("undefined" != typeof Symbol &&
                    null != e[Symbol.iterator]) ||
                  null != e["@@iterator"]
                )
                  return Array.from(e);
              })(r) ||
              nm(r) ||
              (function() {
                throw TypeError(
                  "Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."
                );
              })())
          );
        }
      } catch (e) {
        n.e(e);
      } finally {
        n.f();
      }
    };
    for (
      var nw = et(function(e, t) {
          function n(e) {
            return (n =
              "function" == typeof Symbol &&
              "symbol" == typeof Symbol.iterator ?
              function(e) {
                return typeof e;
              } :
              function(e) {
                return e &&
                  "function" == typeof Symbol &&
                  e.constructor === Symbol &&
                  e !== Symbol.prototype ?
                  "symbol" :
                  typeof e;
              })(e);
          }

          function r(e, t) {
            (null == t || t > e.length) && (t = e.length);
            for (var n = 0, r = Array(t); n < t; n++) r[n] = e[n];
            return r;
          }
          "undefined" != typeof window
            ?
            (i = window) :
            "undefined" == typeof self ?
            (console.warn(
                "Using browser-only version of superagent in non-browser environment"
              ),
              (i = void 0)) :
            (i = self);
          var i,
            o = ns.isObject,
            a = ns.mixin,
            s = ns.hasOwn;

          function l() {}
          e.exports = function(e, n) {
            return "function" == typeof n ?
              new t.Request("GET", e).end(n) :
              1 == arguments.length ?
              new t.Request("GET", e) :
              new t.Request(e, n);
          };
          var u = (t = e.exports);
          (t.Request = m),
          (u.getXHR = function() {
            if (
              i.XMLHttpRequest &&
              (!i.location ||
                "file:" !== i.location.protocol ||
                !i.ActiveXObject)
            )
              return new XMLHttpRequest();
            try {
              return new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {}
            try {
              return new ActiveXObject("Msxml2.XMLHTTP.6.0");
            } catch (e) {}
            try {
              return new ActiveXObject("Msxml2.XMLHTTP.3.0");
            } catch (e) {}
            try {
              return new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {}
            throw Error(
              "Browser-only version of superagent could not find XHR"
            );
          });
          var c = "".trim ?
            function(e) {
              return e.trim();
            } :
            function(e) {
              return e.replace(/(^\s*|\s*$)/g, "");
            };

          function p(e) {
            if (!o(e)) return e;
            var t = [];
            for (var n in e)
              s(e, n) &&
              (function e(t, n, i) {
                if (void 0 !== i) {
                  if (null !== i) {
                    if (Array.isArray(i)) {
                      var a,
                        l = (function(e, t) {
                          var n =
                            ("undefined" != typeof Symbol &&
                              e[Symbol.iterator]) ||
                            e["@@iterator"];
                          if (!n) {
                            if (
                              Array.isArray(e) ||
                              (n = (function(e, t) {
                                if (e) {
                                  if ("string" == typeof e)
                                    return r(e, void 0);
                                  var n = Object.prototype.toString
                                    .call(e)
                                    .slice(8, -1);
                                  if (
                                    ("Object" === n &&
                                      e.constructor &&
                                      (n = e.constructor.name),
                                      "Map" === n || "Set" === n)
                                  )
                                    return Array.from(e);
                                  if (
                                    "Arguments" === n ||
                                    /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(
                                      n
                                    )
                                  )
                                    return r(e, void 0);
                                }
                              })(e))
                            ) {
                              n && (e = n);
                              var i = 0,
                                o = function() {};
                              return {
                                s: o,
                                n: function() {
                                  return i >= e.length ? {
                                    done: !0
                                  } : {
                                    done: !1,
                                    value: e[i++]
                                  };
                                },
                                e: function(e) {
                                  throw e;
                                },
                                f: o,
                              };
                            }
                            throw TypeError(
                              "Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."
                            );
                          }
                          var a,
                            s = !0,
                            l = !1;
                          return {
                            s: function() {
                              n = n.call(e);
                            },
                            n: function() {
                              var e = n.next();
                              return (s = e.done), e;
                            },
                            e: function(e) {
                              (l = !0), (a = e);
                            },
                            f: function() {
                              try {
                                s || null == n.return || n.return();
                              } finally {
                                if (l) throw a;
                              }
                            },
                          };
                        })(i);
                      try {
                        for (l.s(); !(a = l.n()).done;) e(t, n, a.value);
                      } catch (e) {
                        l.e(e);
                      } finally {
                        l.f();
                      }
                    } else if (o(i))
                      for (var u in i)
                        s(i, u) &&
                        e(t, "".concat(n, "[").concat(u, "]"), i[u]);
                    else t.push(encodeURI(n) + "=" + encodeURIComponent(i));
                  } else t.push(encodeURI(n));
                }
              })(t, n, e[n]);
            return t.join("&");
          }

          function d(e) {
            for (
              var t, n, r = {}, i = e.split("&"), o = 0, a = i.length; o < a;
              ++o
            )
              -
              1 === (n = (t = i[o]).indexOf("=")) ?
              (r[decodeURIComponent(t)] = "") :
              (r[decodeURIComponent(t.slice(0, n))] = decodeURIComponent(
                t.slice(n + 1)
              ));
            return r;
          }

          function f(e) {
            return /[/+]json($|[^-\w])/i.test(e);
          }

          function h(e) {
            (this.req = e),
            (this.xhr = this.req.xhr),
            (this.text =
              ("HEAD" !== this.req.method &&
                ("" === this.xhr.responseType ||
                  "text" === this.xhr.responseType)) ||
              void 0 === this.xhr.responseType ?
              this.xhr.responseText :
              null),
            (this.statusText = this.req.xhr.statusText);
            var t = this.xhr.status;
            1223 === t && (t = 204),
              this._setStatusProperties(t),
              (this.headers = (function(e) {
                for (
                  var t,
                    n,
                    r,
                    i,
                    o = e.split(/\r?\n/),
                    a = {},
                    s = 0,
                    l = o.length; s < l;
                  ++s
                )
                  -
                  1 !== (t = (n = o[s]).indexOf(":")) &&
                  ((r = n.slice(0, t).toLowerCase()),
                    (i = c(n.slice(t + 1))),
                    (a[r] = i));
                return a;
              })(this.xhr.getAllResponseHeaders())),
              (this.header = this.headers),
              (this.header["content-type"] =
                this.xhr.getResponseHeader("content-type")),
              this._setHeaderProperties(this.header),
              null === this.text && e._responseType ?
              (this.body = this.xhr.response) :
              (this.body =
                "HEAD" === this.req.method ?
                null :
                this._parseBody(
                  this.text ? this.text : this.xhr.response
                ));
          }

          function m(e, t) {
            var n = this;
            (this._query = this._query || []),
            (this.method = e),
            (this.url = t),
            (this.header = {}),
            (this._header = {}),
            this.on("end", function() {
              var e,
                t = null,
                r = null;
              try {
                r = new h(n);
              } catch (e) {
                return (
                  ((t = Error(
                    "Parser is unable to parse the response"
                  )).parse = !0),
                  (t.original = e),
                  n.xhr ?
                  ((t.rawResponse =
                      void 0 === n.xhr.responseType ?
                      n.xhr.responseText :
                      n.xhr.response),
                    (t.status = n.xhr.status ? n.xhr.status : null),
                    (t.statusCode = t.status)) :
                  ((t.rawResponse = null), (t.status = null)),
                  n.callback(t)
                );
              }
              n.emit("response", r);
              try {
                n._isResponseOK(r) ||
                  (e = Error(
                    r.statusText || r.text || "Unsuccessful HTTP response"
                  ));
              } catch (t) {
                e = t;
              }
              e
                ?
                ((e.original = t),
                  (e.response = r),
                  (e.status = r.status),
                  n.callback(e, r)) :
                n.callback(null, r);
            });
          }
          (u.serializeObject = p),
          (u.parseString = d),
          (u.types = {
            html: "text/html",
            json: "application/json",
            xml: "text/xml",
            urlencoded: "application/x-www-form-urlencoded",
            form: "application/x-www-form-urlencoded",
            "form-data": "application/x-www-form-urlencoded",
          }),
          (u.serialize = {
            "application/x-www-form-urlencoded": t8.stringify,
            "application/json": nn,
          }),
          (u.parse = {
            "application/x-www-form-urlencoded": d,
            "application/json": JSON.parse,
          }),
          a(h.prototype, nh.prototype),
            (h.prototype._parseBody = function(e) {
              var t = u.parse[this.type];
              return this.req._parser ?
                this.req._parser(this, e) :
                (!t && f(this.type) && (t = u.parse["application/json"]),
                  t && e && (e.length > 0 || e instanceof Object) ?
                  t(e) :
                  null);
            }),
            (h.prototype.toError = function() {
              var e = this.req,
                t = e.method,
                n = e.url,
                r = Error(
                  "cannot "
                  .concat(t, " ")
                  .concat(n, " (")
                  .concat(this.status, ")")
                );
              return (r.status = this.status), (r.method = t), (r.url = n), r;
            }),
            (u.Response = h),
            t9(m.prototype),
            a(m.prototype, np.prototype),
            (m.prototype.type = function(e) {
              return this.set("Content-Type", u.types[e] || e), this;
            }),
            (m.prototype.accept = function(e) {
              return this.set("Accept", u.types[e] || e), this;
            }),
            (m.prototype.auth = function(e, t, r) {
              1 == arguments.length && (t = ""),
                "object" === n(t) && null !== t && ((r = t), (t = "")),
                r ||
                (r = {
                  type: "function" == typeof btoa ? "basic" : "auto",
                });
              var i = r.encoder ?
                r.encoder :
                function(e) {
                  if ("function" == typeof btoa) return btoa(e);
                  throw Error(
                    "Cannot use basic auth, btoa is not a function"
                  );
                };
              return this._auth(e, t, r, i);
            }),
            (m.prototype.query = function(e) {
              return (
                "string" != typeof e && (e = p(e)),
                e && this._query.push(e),
                this
              );
            }),
            (m.prototype.attach = function(e, t, n) {
              if (t) {
                if (this._data)
                  throw Error("superagent can't mix .send() and .attach()");
                this._getFormData().append(e, t, n || t.name);
              }
              return this;
            }),
            (m.prototype._getFormData = function() {
              return (
                this._formData || (this._formData = new i.FormData()),
                this._formData
              );
            }),
            (m.prototype.callback = function(e, t) {
              if (this._shouldRetry(e, t)) return this._retry();
              var n = this._callback;
              this.clearTimeout(),
                e &&
                (this._maxRetries && (e.retries = this._retries - 1),
                  this.emit("error", e)),
                n(e, t);
            }),
            (m.prototype.crossDomainError = function() {
              var e = Error(
                "Request has been terminated\nPossible causes: the network is offline, Origin is not allowed by Access-Control-Allow-Origin, the page is being unloaded, etc."
              );
              (e.crossDomain = !0),
              (e.status = this.status),
              (e.method = this.method),
              (e.url = this.url),
              this.callback(e);
            }),
            (m.prototype.agent = function() {
              return (
                console.warn(
                  "This is not supported in browser version of superagent"
                ),
                this
              );
            }),
            (m.prototype.ca = m.prototype.agent),
            (m.prototype.buffer = m.prototype.ca),
            (m.prototype.write = function() {
              throw Error(
                "Streaming is not supported in browser version of superagent"
              );
            }),
            (m.prototype.pipe = m.prototype.write),
            (m.prototype._isHost = function(e) {
              return (
                e &&
                "object" === n(e) &&
                !Array.isArray(e) &&
                "[object Object]" !== Object.prototype.toString.call(e)
              );
            }),
            (m.prototype.end = function(e) {
              this._endCalled &&
                console.warn(
                  "Warning: .end() was called twice. This is not supported in superagent"
                ),
                (this._endCalled = !0),
                (this._callback = e || l),
                this._finalizeQueryString(),
                this._end();
            }),
            (m.prototype._setUploadTimeout = function() {
              var e = this;
              this._uploadTimeout &&
                !this._uploadTimeoutTimer &&
                (this._uploadTimeoutTimer = setTimeout(function() {
                  e._timeoutError(
                    "Upload timeout of ",
                    e._uploadTimeout,
                    "ETIMEDOUT"
                  );
                }, this._uploadTimeout));
            }),
            (m.prototype._end = function() {
              if (this._aborted)
                return this.callback(
                  Error(
                    "The request has been aborted even before .end() was called"
                  )
                );
              var e = this;
              this.xhr = u.getXHR();
              var t = this.xhr,
                n = this._formData || this._data;
              this._setTimeouts(),
                t.addEventListener("readystatechange", function() {
                  var n,
                    r = t.readyState;
                  if (
                    (r >= 2 &&
                      e._responseTimeoutTimer &&
                      clearTimeout(e._responseTimeoutTimer),
                      4 === r)
                  ) {
                    try {
                      n = t.status;
                    } catch (e) {
                      n = 0;
                    }
                    if (!n) {
                      if (e.timedout || e._aborted) return;
                      return e.crossDomainError();
                    }
                    e.emit("end");
                  }
                });
              var r = function(t, n) {
                n.total > 0 &&
                  ((n.percent = (n.loaded / n.total) * 100),
                    100 === n.percent && clearTimeout(e._uploadTimeoutTimer)),
                  (n.direction = t),
                  e.emit("progress", n);
              };
              if (this.hasListeners("progress"))
                try {
                  t.addEventListener("progress", r.bind(null, "download")),
                    t.upload &&
                    t.upload.addEventListener(
                      "progress",
                      r.bind(null, "upload")
                    );
                } catch (e) {}
              t.upload && this._setUploadTimeout();
              try {
                this.username && this.password ?
                  t.open(
                    this.method,
                    this.url,
                    !0,
                    this.username,
                    this.password
                  ) :
                  t.open(this.method, this.url, !0);
              } catch (e) {
                return this.callback(e);
              }
              if (
                (this._withCredentials && (t.withCredentials = !0),
                  !this._formData &&
                  "GET" !== this.method &&
                  "HEAD" !== this.method &&
                  "string" != typeof n &&
                  !this._isHost(n))
              ) {
                var i = this._header["content-type"],
                  o =
                  this._serializer || u.serialize[i ? i.split(";")[0] : ""];
                !o && f(i) && (o = u.serialize["application/json"]),
                  o && (n = o(n));
              }
              for (var a in this.header)
                null !== this.header[a] &&
                s(this.header, a) &&
                t.setRequestHeader(a, this.header[a]);
              this._responseType && (t.responseType = this._responseType),
                this.emit("request", this),
                t.send(void 0 === n ? null : n);
            }),
            (u.agent = function() {
              return new ng();
            });
          for (
            var y = 0,
              g = ["GET", "POST", "OPTIONS", "PATCH", "PUT", "DELETE"]; y < g.length; y++
          )
            !(function() {
              var e = g[y];
              ng.prototype[e.toLowerCase()] = function(t, n) {
                var r = new u.Request(e, t);
                return this._setDefaults(r), n && r.end(n), r;
              };
            })();

          function v(e, t, n) {
            var r = u("DELETE", e);
            return (
              "function" == typeof t && ((n = t), (t = null)),
              t && r.send(t),
              n && r.end(n),
              r
            );
          }
          (ng.prototype.del = ng.prototype.delete),
          (u.get = function(e, t, n) {
            var r = u("GET", e);
            return (
              "function" == typeof t && ((n = t), (t = null)),
              t && r.query(t),
              n && r.end(n),
              r
            );
          }),
          (u.head = function(e, t, n) {
            var r = u("HEAD", e);
            return (
              "function" == typeof t && ((n = t), (t = null)),
              t && r.query(t),
              n && r.end(n),
              r
            );
          }),
          (u.options = function(e, t, n) {
            var r = u("OPTIONS", e);
            return (
              "function" == typeof t && ((n = t), (t = null)),
              t && r.send(t),
              n && r.end(n),
              r
            );
          }),
          (u.del = v),
          (u.delete = v),
          (u.patch = function(e, t, n) {
            var r = u("PATCH", e);
            return (
              "function" == typeof t && ((n = t), (t = null)),
              t && r.send(t),
              n && r.end(n),
              r
            );
          }),
          (u.post = function(e, t, n) {
            var r = u("POST", e);
            return (
              "function" == typeof t && ((n = t), (t = null)),
              t && r.send(t),
              n && r.end(n),
              r
            );
          }),
          (u.put = function(e, t, n) {
            var r = u("PUT", e);
            return (
              "function" == typeof t && ((n = t), (t = null)),
              t && r.send(t),
              n && r.end(n),
              r
            );
          });
        }),
        nx = (nw.Request, []),
        nS = [],
        nk =
        ("undefined" != typeof Uint8Array && Uint8Array,
          "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/"),
        n_ = 0,
        nT = nk.length; n_ < nT;
      ++n_
    )
      (nx[n_] = nk[n_]), (nS[nk.charCodeAt(n_)] = n_);
    (nS["-".charCodeAt(0)] = 62), (nS["_".charCodeAt(0)] = 63);
    var nE = function(e) {
        for (
          var t, n = e.length, r = n % 3, i = [], o = 0, a = n - r; o < a; o += 16383
        )
          i.push(
            (function(e, t, n) {
              for (var r, i = [], o = t; o < n; o += 3)
                i.push(
                  nx[
                    ((r =
                        ((e[o] << 16) & 16711680) +
                        ((e[o + 1] << 8) & 65280) +
                        (255 & e[o + 2])) >>
                      18) &
                    63
                  ] +
                  nx[(r >> 12) & 63] +
                  nx[(r >> 6) & 63] +
                  nx[63 & r]
                );
              return i.join("");
            })(e, o, o + 16383 > a ? a : o + 16383)
          );
        return (
          1 === r ?
          i.push(nx[(t = e[n - 1]) >> 2] + nx[(t << 4) & 63] + "==") :
          2 === r &&
          i.push(
            nx[(t = (e[n - 2] << 8) + e[n - 1]) >> 10] +
            nx[(t >> 4) & 63] +
            nx[(t << 2) & 63] +
            "="
          ),
          i.join("")
        );
      },
      nC = {
        raw: "9.24.1"
      },
      nP = Object.prototype.toString;

    function nO(e, t, n, r) {
      if (((n = "array" === n ? "object" : n), e && typeof e[t] !== n))
        throw Error(r);
    }

    function nA(e, t, n) {
      if (typeof e !== t) throw Error(n);
    }

    function nj(e, t, n) {
      if (-1 === t.indexOf(e)) throw Error(n);
    }
    var nD = {
      check: function(e, t, n) {
        if (
          ((t.optional && !e) || nA(e, t.type, t.message),
            "object" === t.type && n)
        )
          for (var r = Object.keys(n), i = 0; i < r.length; i++) {
            var o = r[i];
            (n[o].optional && !e[o]) ||
            (n[o].condition && !n[o].condition(e)) ||
            (nO(e, o, n[o].type, n[o].message),
              n[o].values && nj(e[o], n[o].values, n[o].value_message));
          }
      },
      attribute: nO,
      variable: nA,
      value: nj,
      isArray: function(e) {
        return this.supportsIsArray() ?
          Array.isArray(e) :
          "[object Array]" === nP.call(e);
      },
      supportsIsArray: function() {
        return null != Array.isArray;
      },
    };

    function nR(e) {
      if (null == e)
        throw TypeError("Cannot convert first argument to object");
      for (var t = Object(e), n = 1; n < arguments.length; n++) {
        var r = arguments[n];
        if (null != r)
          for (
            var i = Object.keys(Object(r)), o = 0, a = i.length; o < a; o++
          ) {
            var s = i[o],
              l = Object.getOwnPropertyDescriptor(r, s);
            void 0 !== l && l.enumerable && (t[s] = r[s]);
          }
      }
      return t;
    }

    function nM(e, t) {
      return t.reduce(function(t, n) {
        return e[n] && (t[n] = e[n]), t;
      }, {});
    }

    function nN() {
      var e = (function(e) {
        var t = [];
        for (var n in e) t.push(e[n]);
        return t;
      })(arguments);
      return (
        e.unshift({}), (Object.assign ? Object.assign : nR).apply(void 0, e)
      );
    }

    function nL(e, t) {
      var n = nN(e);
      return e[t] && (n[t] = e[t].trim()), n;
    }
    var nI = {
      toSnakeCase: function e(t, n) {
        return "object" != typeof t || nD.isArray(t) || null === t ?
          t :
          ((n = n || []),
            Object.keys(t).reduce(function(r, i) {
              return (
                (r[
                  -1 === n.indexOf(i) ?
                  (function(e) {
                    for (
                      var t, n = "", r = 0, i = !0, o = !0; r < e.length;

                    )
                      (t = e.charCodeAt(r)),
                      (!o && t >= 65 && t <= 90) ||
                      (!i && t >= 48 && t <= 57) ?
                      (n += "_" + e[r].toLowerCase()) :
                      (n += e[r].toLowerCase()),
                      (i = t >= 48 && t <= 57),
                      (o = t >= 65 && t <= 90),
                      r++;
                    return n;
                  })(i) :
                  i
                ] = e(t[i])),
                r
              );
            }, {}));
      },
      toCamelCase: function e(t, n, r) {
        return "object" != typeof t || nD.isArray(t) || null === t ?
          t :
          ((n = n || []),
            (r = r || {}),
            Object.keys(t).reduce(function(i, o) {
              var a,
                s = -1 === n.indexOf(o) ?
                (a = o.split("_")).reduce(function(e, t) {
                  return e + t.charAt(0).toUpperCase() + t.slice(1);
                }, a.shift()) :
                o;
              return (
                (i[s] = e(t[s] || t[o], [], r)),
                r.keepOriginal && (i[o] = e(t[o], [], r)),
                i
              );
            }, {}));
      },
      blacklist: function(e, t) {
        return Object.keys(e).reduce(function(n, r) {
          return -1 === t.indexOf(r) && (n[r] = e[r]), n;
        }, {});
      },
      merge: function(e, t) {
        return {
          base: t ? nM(e, t) : e,
          with: function(e, t) {
            return (e = t ? nM(e, t) : e), nN(this.base, e);
          },
        };
      },
      pick: nM,
      getKeysNotIn: function(e, t) {
        var n = [];
        for (var r in e) - 1 === t.indexOf(r) && n.push(r);
        return n;
      },
      extend: nN,
      getOriginFromUrl: function(e) {
        if (e) {
          var t,
            n = (t = e.match(
              /^(https?:|file:|chrome-extension:)\/\/(([^:/?#]*)(?::([0-9]+))?)([/]{0,1}[^?#]*)(\?[^#]*|)(#.*|)$/
            )) && {
              href: e,
              protocol: t[1],
              host: t[2],
              hostname: t[3],
              port: t[4],
              pathname: t[5],
              search: t[6],
              hash: t[7],
            };
          if (!n) return null;
          var r = n.protocol + "//" + n.hostname;
          return n.port && (r += ":" + n.port), r;
        }
      },
      trimUserDetails: function(e) {
        return ["username", "email", "phoneNumber"].reduce(nL, e);
      },
      updatePropertyOn: function e(t, n, r) {
        "string" == typeof n && (n = n.split("."));
        var i = n[0];
        t.hasOwnProperty(i) &&
          (1 === n.length ? (t[i] = r) : e(t[i], n.slice(1), r));
      },
    };

    function nU(e) {
      (this.request = e),
      (this.method = e.method),
      (this.url = e.url),
      (this.body = e._data),
      (this.headers = e._header);
    }

    function nF(e) {
      this.request = e;
    }

    function nV(e) {
      (this._sendTelemetry = !1 !== e._sendTelemetry || e._sendTelemetry),
      (this._telemetryInfo = e._telemetryInfo || null),
      (this._timesToRetryFailedRequests = e._timesToRetryFailedRequests),
      (this.headers = e.headers || {}),
      (this._universalLoginPage = e.universalLoginPage);
    }

    function nz() {
      return window;
    }
    (nU.prototype.abort = function() {
      this.request.abort();
    }),
    (nU.prototype.getMethod = function() {
      return this.method;
    }),
    (nU.prototype.getBody = function() {
      return this.body;
    }),
    (nU.prototype.getUrl = function() {
      return this.url;
    }),
    (nU.prototype.getHeaders = function() {
      return this.headers;
    }),
    (nF.prototype.set = function(e, t) {
      return (this.request = this.request.set(e, t)), this;
    }),
    (nF.prototype.send = function(e) {
      return (
        (this.request = this.request.send(nI.trimUserDetails(e))), this
      );
    }),
    (nF.prototype.withCredentials = function() {
      return (this.request = this.request.withCredentials()), this;
    }),
    (nF.prototype.end = function(e) {
      return this.request.end(e), new nU(this.request);
    }),
    (nV.prototype.setCommonConfiguration = function(e, t) {
      if (
        ((t = t || {}),
          this._timesToRetryFailedRequests > 0 &&
          (e = e.retry(this._timesToRetryFailedRequests)),
          t.noHeaders)
      )
        return e;
      var n = this.headers;
      (e = e.set("Content-Type", "application/json")),
      t.xRequestLanguage &&
        (e = e.set("X-Request-Language", t.xRequestLanguage));
      for (var r = Object.keys(this.headers), i = 0; i < r.length; i++)
        e = e.set(r[i], n[r[i]]);
      return (
        this._sendTelemetry &&
        (e = e.set("Auth0-Client", this.getTelemetryData())),
        e
      );
    }),
    (nV.prototype.getTelemetryData = function() {
      var e = this._universalLoginPage ? "auth0.js-ulp" : "auth0.js",
        t = {
          name: e,
          version: nC.raw
        };
      return (
        this._telemetryInfo &&
        (((t = nI.extend({}, this._telemetryInfo)).env = nI.extend({},
            this._telemetryInfo.env
          )),
          (t.env[e] = nC.raw)),
        nE(
          (function(e) {
            for (var t = Array(e.length), n = 0; n < e.length; n++)
              t[n] = e.charCodeAt(n);
            return t;
          })(JSON.stringify(t))
        )
        .replace(/\+/g, "-")
        .replace(/\//g, "_")
      );
    }),
    (nV.prototype.get = function(e, t) {
      return new nF(this.setCommonConfiguration(nw.get(e), t));
    }),
    (nV.prototype.post = function(e, t) {
      return new nF(this.setCommonConfiguration(nw.post(e), t));
    }),
    (nV.prototype.patch = function(e, t) {
      return new nF(this.setCommonConfiguration(nw.patch(e), t));
    });
    var nB = {
      redirect: function(e) {
        nz().location = e;
      },
      getDocument: function() {
        return nz().document;
      },
      getWindow: nz,
      getOrigin: function() {
        var e = nz().location,
          t = e.origin;
        return t || (t = nI.getOriginFromUrl(e.href)), t;
      },
    };

    function nq() {}
    (nq.prototype.getItem = function() {
      return null;
    }),
    (nq.prototype.removeItem = function() {}),
    (nq.prototype.setItem = function() {});
    var nH = et(function(e, t) {
      var n;
      (n = function() {
        function e() {
          for (var e = 0, t = {}; e < arguments.length; e++) {
            var n = arguments[e];
            for (var r in n) t[r] = n[r];
          }
          return t;
        }

        function t(e) {
          return e.replace(/(%[0-9A-Z]{2})+/g, decodeURIComponent);
        }
        return (function n(r) {
          function i() {}

          function o(t, n, o) {
            if ("undefined" != typeof document) {
              "number" ==
              typeof(o = e({
                path: "/"
              }, i.defaults, o)).expires &&
                (o.expires = new Date(1 * new Date() + 864e5 * o.expires)),
                (o.expires = o.expires ? o.expires.toUTCString() : "");
              try {
                var a = JSON.stringify(n);
                /^[\{\[]/.test(a) && (n = a);
              } catch (e) {}
              (n = r.write ?
                r.write(n, t) :
                encodeURIComponent(String(n)).replace(
                  /%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g,
                  decodeURIComponent
                )),
              (t = encodeURIComponent(String(t))
                .replace(/%(23|24|26|2B|5E|60|7C)/g, decodeURIComponent)
                .replace(/[\(\)]/g, escape));
              var s = "";
              for (var l in o)
                o[l] &&
                ((s += "; " + l),
                  !0 !== o[l] && (s += "=" + o[l].split(";")[0]));
              return (document.cookie = t + "=" + n + s);
            }
          }

          function a(e, n) {
            if ("undefined" != typeof document) {
              for (
                var i = {},
                  o = document.cookie ? document.cookie.split("; ") : [],
                  a = 0; a < o.length; a++
              ) {
                var s = o[a].split("="),
                  l = s.slice(1).join("=");
                n || '"' !== l.charAt(0) || (l = l.slice(1, -1));
                try {
                  var u = t(s[0]);
                  if (((l = (r.read || r)(l, u) || t(l)), n))
                    try {
                      l = JSON.parse(l);
                    } catch (e) {}
                  if (((i[u] = l), e === u)) break;
                } catch (e) {}
              }
              return e ? i[e] : i;
            }
          }
          return (
            (i.set = o),
            (i.get = function(e) {
              return a(e, !1);
            }),
            (i.getJSON = function(e) {
              return a(e, !0);
            }),
            (i.remove = function(t, n) {
              o(t, "", e(n, {
                expires: -1
              }));
            }),
            (i.defaults = {}),
            (i.withConverter = n),
            i
          );
        })(function() {});
      }),
      (e.exports = n());
    });

    function nW(e) {
      return "_" + e + "_compat";
    }

    function n$(e) {
      this._options = e || {};
    }

    function nK(e) {
      this.disableWarnings = e.disableWarnings;
    }

    function nQ(e) {
      if (
        ((this.warn = new nK({})),
          (this.storage = new n$(e)),
          !0 === e.__tryLocalStorageFirst)
      )
        try {
          var t = nB.getWindow().localStorage;
          t && (this.storage = t);
        } catch (e) {
          this.warn.warning(e),
            this.warn.warning(
              "Can't use localStorage. Using CookieStorage instead."
            );
        }
    }

    function nX(e) {
      this.handler = new nQ(e);
    }

    function nY(e) {
      this.storage = new nX(e);
    }

    function nG(e, t) {
      return {
        error: e,
        errorDescription: t
      };
    }
    (n$.prototype.getItem = function(e) {
      return nH.get(e) || nH.get(nW(e));
    }),
    (n$.prototype.removeItem = function(e) {
      var t = {};
      this._options.cookieDomain && (t.domain = this._options.cookieDomain),
        nH.remove(e, t),
        nH.remove(nW(e), t);
    }),
    (n$.prototype.setItem = function(e, t, n) {
      var r = nI.extend({
        expires: 1
      }, n);
      if (
        "https:" === nB.getWindow().location.protocol &&
        ((r.secure = !0),
          (r.sameSite = "none"),
          this._options.legacySameSiteCookie)
      ) {
        var i = nI.blacklist(r, ["sameSite"]);
        nH.set(nW(e), t, i);
      }
      this._options.cookieDomain && (r.domain = this._options.cookieDomain),
        nH.set(e, t, r);
    }),
    (nK.prototype.warning = function(e) {
      this.disableWarnings || console.warn(e);
    }),
    (nQ.prototype.failover = function() {
      this.storage instanceof nq ?
        this.warn.warning("DummyStorage: ignore failover") :
        this.storage instanceof n$ ?
        (this.warn.warning("CookieStorage: failing over DummyStorage"),
          (this.storage = new nq())) :
        (this.warn.warning("LocalStorage: failing over CookieStorage"),
          (this.storage = new n$()));
    }),
    (nQ.prototype.getItem = function(e) {
      try {
        return this.storage.getItem(e);
      } catch (t) {
        return this.warn.warning(t), this.failover(), this.getItem(e);
      }
    }),
    (nQ.prototype.removeItem = function(e) {
      try {
        return this.storage.removeItem(e);
      } catch (t) {
        return this.warn.warning(t), this.failover(), this.removeItem(e);
      }
    }),
    (nQ.prototype.setItem = function(e, t, n) {
      try {
        return this.storage.setItem(e, t, n);
      } catch (r) {
        return this.warn.warning(r), this.failover(), this.setItem(e, t, n);
      }
    }),
    (nX.prototype.getItem = function(e) {
      var t = this.handler.getItem(e);
      try {
        return JSON.parse(t);
      } catch (e) {
        return t;
      }
    }),
    (nX.prototype.removeItem = function(e) {
      return this.handler.removeItem(e);
    }),
    (nX.prototype.setItem = function(e, t, n) {
      var r = JSON.stringify(t);
      return this.handler.setItem(e, r, n);
    }),
    (nY.prototype.set = function(e, t) {
      this.storage.setItem(
        "auth0.ssodata",
        JSON.stringify({
          lastUsedConnection: e,
          lastUsedSub: t
        })
      );
    }),
    (nY.prototype.get = function() {
      var e = this.storage.getItem("auth0.ssodata");
      if (e) return JSON.parse(e);
    });
    var nJ = {
      buildResponse: nG,
      invalidToken: function(e) {
        return nG("invalid_token", e);
      },
    };

    function nZ(e, t) {
      return (
        ((t = t || {}).ignoreCasing = !!t.ignoreCasing && t.ignoreCasing),
        function(n, r) {
          var i;
          return n || r ?
            (!n && r.err && ((n = r.err), (r = null)),
              !n && r.error && ((n = r), (r = null)),
              n ?
              ((i = {
                  original: n
                }),
                nI.updatePropertyOn(
                  i,
                  "original.response.req._data.password",
                  "*****"
                ),
                n.response &&
                n.response.statusCode &&
                (i.statusCode = n.response.statusCode),
                n.response &&
                n.response.statusText &&
                (i.statusText = n.response.statusText),
                n.response && n.response.body && (n = n.response.body),
                n.err && (n = n.err),
                (i.code =
                  n.code || n.error || n.error_code || n.status || null),
                (i.description =
                  n.errorDescription ||
                  n.error_description ||
                  n.description ||
                  n.error ||
                  n.details ||
                  n.err ||
                  null),
                t.forceLegacyError &&
                ((i.error = i.code),
                  (i.error_description = i.description)),
                n.error_codes &&
                n.error_details &&
                (i.errorDetails = {
                  codes: n.error_codes,
                  details: n.error_details,
                }),
                n.name && (i.name = n.name),
                n.policy && (i.policy = n.policy),
                e(i)) :
              r.type &&
              ("text/html" === r.type || "text/plain" === r.type) ?
              e(null, r.text) :
              t.ignoreCasing ?
              e(null, r.body || r) :
              e(
                null,
                nI.toCamelCase(r.body || r, [], {
                  keepOriginal: t.keepOriginalCasing,
                })
              )) :
            e(nJ.buildResponse("generic_error", "Something went wrong"));
        }
      );
    }
    var n0 = [
        "realm",
        "audience",
        "otp",
        "client_id",
        "client_secret",
        "redirect_uri",
        "scope",
        "code",
        "grant_type",
        "username",
        "password",
        "refresh_token",
        "assertion",
        "client_assertion",
        "client_assertion_type",
        "code_verifier",
      ],
      n1 = [
        "connection",
        "connection_scope",
        "auth0Client",
        "owp",
        "device",
        "realm",
        "organization",
        "invitation",
        "protocol",
        "_csrf",
        "_intstate",
        "login_ticket",
        "client_id",
        "response_type",
        "response_mode",
        "redirect_uri",
        "audience",
        "scope",
        "state",
        "nonce",
        "display",
        "prompt",
        "screen_hint",
        "max_age",
        "ui_locales",
        "claims_locales",
        "id_token_hint",
        "login_hint",
        "acr_values",
        "claims",
        "registration",
        "request",
        "request_uri",
        "code_challenge",
        "code_challenge_method",
        "access_type",
        "display",
      ],
      n2 = function(e, t) {
        var n = nI.getKeysNotIn(t, n1);
        return (
          n.length > 0 &&
          e.warning(
            "Following parameters are not allowed on the `/authorize` endpoint: [" +
            n.join(",") +
            "]"
          ),
          t
        );
      },
      n3 =
      "undefined" != typeof globalThis ?
      globalThis :
      "undefined" != typeof window ?
      window :
      void 0 !== A ?
      A :
      "undefined" != typeof self ?
      self : {};

    function n4(e) {
      var t = {
        exports: {}
      };
      return e(t, t.exports), t.exports;
    }
    var n5 = n4(function(e, t) {
        e.exports = (function() {
          function e(e) {
            return "function" == typeof e;
          }
          var t = Array.isArray ?
            Array.isArray :
            function(e) {
              return (
                "[object Array]" === Object.prototype.toString.call(e)
              );
            },
            n = 0,
            r = void 0,
            i = void 0,
            o = function(e, t) {
              (d[n] = e), (d[n + 1] = t), 2 === (n += 2) && (i ? i(f) : v());
            },
            a = "undefined" != typeof window ? window : void 0,
            s = a || {},
            l = s.MutationObserver || s.WebKitMutationObserver,
            u =
            "undefined" == typeof self &&
            void 0 !== B &&
            "[object process]" === {}.toString.call(B),
            c =
            "undefined" != typeof Uint8ClampedArray &&
            "undefined" != typeof importScripts &&
            "undefined" != typeof MessageChannel;

          function p() {
            var e = setTimeout;
            return function() {
              return e(f, 1);
            };
          }
          var d = Array(1e3);

          function f() {
            for (var e = 0; e < n; e += 2)
              (0, d[e])(d[e + 1]), (d[e] = void 0), (d[e + 1] = void 0);
            n = 0;
          }
          var h,
            m,
            y,
            g,
            v = void 0;

          function b(e, t) {
            var n = this,
              r = new this.constructor(S);
            void 0 === r[x] && R(r);
            var i = n._state;
            if (i) {
              var a = arguments[i - 1];
              o(function() {
                return j(i, r, a, n._result);
              });
            } else O(n, r, e, t);
            return r;
          }

          function w(e) {
            if (e && "object" == typeof e && e.constructor === this) return e;
            var t = new this(S);
            return T(t, e), t;
          }
          v = u ?
            function() {
              return B.nextTick(f);
            } :
            l ?
            ((m = 0),
              (y = new l(f)),
              (g = document.createTextNode("")),
              y.observe(g, {
                characterData: !0
              }),
              function() {
                g.data = m = ++m % 2;
              }) :
            c ?
            (((h = new MessageChannel()).port1.onmessage = f),
              function() {
                return h.port2.postMessage(0);
              }) :
            void 0 === a ?
            (function() {
              try {
                var e = Function("return this")().require("vertx");
                return void 0 !== (r = e.runOnLoop || e.runOnContext) ?
                  function() {
                    r(f);
                  } :
                  p();
              } catch (e) {
                return p();
              }
            })() :
            p();
          var x = Math.random().toString(36).substring(2);

          function S() {}
          var k = void 0;

          function _(t, n, r) {
            n.constructor === t.constructor &&
              r === b &&
              n.constructor.resolve === w ?
              1 === n._state ?
              C(t, n._result) :
              2 === n._state ?
              P(t, n._result) :
              O(
                n,
                void 0,
                function(e) {
                  return T(t, e);
                },
                function(e) {
                  return P(t, e);
                }
              ) :
              void 0 === r ?
              C(t, n) :
              e(r) ?
              o(function(e) {
                var t = !1,
                  i = (function(r, i, o, a) {
                    try {
                      r.call(
                        i,
                        function(r) {
                          t || ((t = !0), n !== r ? T(e, r) : C(e, r));
                        },
                        function(n) {
                          t || ((t = !0), P(e, n));
                        }
                      );
                    } catch (e) {
                      return e;
                    }
                  })(r, n);
                !t && i && ((t = !0), P(e, i));
              }, t) :
              C(t, n);
          }

          function T(e, t) {
            if (e === t)
              P(e, TypeError("You cannot resolve a promise with itself"));
            else if (
              ((n = typeof t),
                null === t || ("object" !== n && "function" !== n))
            )
              C(e, t);
            else {
              var n,
                r = void 0;
              try {
                r = t.then;
              } catch (t) {
                return void P(e, t);
              }
              _(e, t, r);
            }
          }

          function E(e) {
            e._onerror && e._onerror(e._result), A(e);
          }

          function C(e, t) {
            e._state === k &&
              ((e._result = t),
                (e._state = 1),
                0 !== e._subscribers.length && o(A, e));
          }

          function P(e, t) {
            e._state === k && ((e._state = 2), (e._result = t), o(E, e));
          }

          function O(e, t, n, r) {
            var i = e._subscribers,
              a = i.length;
            (e._onerror = null),
            (i[a] = t),
            (i[a + 1] = n),
            (i[a + 2] = r),
            0 === a && e._state && o(A, e);
          }

          function A(e) {
            var t = e._subscribers,
              n = e._state;
            if (0 !== t.length) {
              for (
                var r = void 0, i = void 0, o = e._result, a = 0; a < t.length; a += 3
              )
                (i = t[a + n]), (r = t[a]) ? j(n, r, i, o) : i(o);
              e._subscribers.length = 0;
            }
          }

          function j(t, n, r, i) {
            var o = e(r),
              a = void 0,
              s = void 0,
              l = !0;
            if (o) {
              try {
                a = r(i);
              } catch (e) {
                (l = !1), (s = e);
              }
              if (n === a)
                return void P(
                  n,
                  TypeError(
                    "A promises callback cannot return that same promise."
                  )
                );
            } else a = i;
            n._state !== k ||
              (o && l ?
                T(n, a) :
                !1 === l ?
                P(n, s) :
                1 === t ?
                C(n, a) :
                2 === t && P(n, a));
          }
          var D = 0;

          function R(e) {
            (e[x] = D++),
            (e._state = void 0),
            (e._result = void 0),
            (e._subscribers = []);
          }
          var M = (function() {
              function e(e, n) {
                (this._instanceConstructor = e),
                (this.promise = new e(S)),
                this.promise[x] || R(this.promise),
                  t(n) ?
                  ((this.length = n.length),
                    (this._remaining = n.length),
                    (this._result = Array(this.length)),
                    0 === this.length ?
                    C(this.promise, this._result) :
                    ((this.length = this.length || 0),
                      this._enumerate(n),
                      0 === this._remaining &&
                      C(this.promise, this._result))) :
                  P(
                    this.promise,
                    Error("Array Methods must be provided an Array")
                  );
              }
              return (
                (e.prototype._enumerate = function(e) {
                  for (var t = 0; this._state === k && t < e.length; t++)
                    this._eachEntry(e[t], t);
                }),
                (e.prototype._eachEntry = function(e, t) {
                  var n = this._instanceConstructor,
                    r = n.resolve;
                  if (r === w) {
                    var i = void 0,
                      o = void 0,
                      a = !1;
                    try {
                      i = e.then;
                    } catch (e) {
                      (a = !0), (o = e);
                    }
                    if (i === b && e._state !== k)
                      this._settledAt(e._state, t, e._result);
                    else if ("function" != typeof i)
                      this._remaining--, (this._result[t] = e);
                    else if (n === N) {
                      var s = new n(S);
                      a ? P(s, o) : _(s, e, i), this._willSettleAt(s, t);
                    } else
                      this._willSettleAt(
                        new n(function(t) {
                          return t(e);
                        }),
                        t
                      );
                  } else this._willSettleAt(r(e), t);
                }),
                (e.prototype._settledAt = function(e, t, n) {
                  var r = this.promise;
                  r._state === k &&
                    (this._remaining--,
                      2 === e ? P(r, n) : (this._result[t] = n)),
                    0 === this._remaining && C(r, this._result);
                }),
                (e.prototype._willSettleAt = function(e, t) {
                  var n = this;
                  O(
                    e,
                    void 0,
                    function(e) {
                      return n._settledAt(1, t, e);
                    },
                    function(e) {
                      return n._settledAt(2, t, e);
                    }
                  );
                }),
                e
              );
            })(),
            N = (function() {
              function t(e) {
                (this[x] = D++),
                (this._result = this._state = void 0),
                (this._subscribers = []),
                S !== e &&
                  ("function" != typeof e &&
                    (function() {
                      throw TypeError(
                        "You must pass a resolver function as the first argument to the promise constructor"
                      );
                    })(),
                    this instanceof t ?
                    (function(e, t) {
                      try {
                        t(
                          function(t) {
                            T(e, t);
                          },
                          function(t) {
                            P(e, t);
                          }
                        );
                      } catch (t) {
                        P(e, t);
                      }
                    })(this, e) :
                    (function() {
                      throw TypeError(
                        "Failed to construct 'Promise': Please use the 'new' operator, this object constructor cannot be called as a function."
                      );
                    })());
              }
              return (
                (t.prototype.catch = function(e) {
                  return this.then(null, e);
                }),
                (t.prototype.finally = function(t) {
                  var n = this.constructor;
                  return e(t) ?
                    this.then(
                      function(e) {
                        return n.resolve(t()).then(function() {
                          return e;
                        });
                      },
                      function(e) {
                        return n.resolve(t()).then(function() {
                          throw e;
                        });
                      }
                    ) :
                    this.then(t, t);
                }),
                t
              );
            })();
          return (
            (N.prototype.then = b),
            (N.all = function(e) {
              return new M(this, e).promise;
            }),
            (N.race = function(e) {
              var n = this;
              return new n(
                t(e) ?
                function(t, r) {
                  for (var i = e.length, o = 0; o < i; o++)
                    n.resolve(e[o]).then(t, r);
                } :
                function(e, t) {
                  return t(TypeError("You must pass an array to race."));
                }
              );
            }),
            (N.resolve = w),
            (N.reject = function(e) {
              var t = new this(S);
              return P(t, e), t;
            }),
            (N._setScheduler = function(e) {
              i = e;
            }),
            (N._setAsap = function(e) {
              o = e;
            }),
            (N._asap = o),
            (N.polyfill = function() {
              var e = void 0;
              if (void 0 !== n3) e = n3;
              else if ("undefined" != typeof self) e = self;
              else
                try {
                  e = Function("return this")();
                } catch (e) {
                  throw Error(
                    "polyfill failed because global object is unavailable in this environment"
                  );
                }
              var t = e.Promise;
              if (t) {
                var n = null;
                try {
                  n = Object.prototype.toString.call(t.resolve());
                } catch (e) {}
                if ("[object Promise]" === n && !t.cast) return;
              }
              e.Promise = N;
            }),
            (N.Promise = N),
            N
          );
        })();
      }),
      n6 = {
        __proto__: null,
        default: {}
      },
      n8 = n4(function(e, t) {
        var n;
        e.exports =
          n ||
          (function(e, t) {
            if (
              ("undefined" != typeof window &&
                window.crypto &&
                (n = window.crypto),
                "undefined" != typeof self && self.crypto && (n = self.crypto),
                "undefined" != typeof globalThis &&
                globalThis.crypto &&
                (n = globalThis.crypto),
                !n &&
                "undefined" != typeof window &&
                window.msCrypto &&
                (n = window.msCrypto),
                !n && void 0 !== n3 && n3.crypto && (n = n3.crypto),
                !n)
            )
              try {
                n = n6;
              } catch (e) {}
            var n,
              r = function() {
                if (n) {
                  if ("function" == typeof n.getRandomValues)
                    try {
                      return n.getRandomValues(new Uint32Array(1))[0];
                    } catch (e) {}
                  if ("function" == typeof n.randomBytes)
                    try {
                      return n.randomBytes(4).readInt32LE();
                    } catch (e) {}
                }
                throw Error(
                  "Native crypto module could not be used to get secure random number."
                );
              },
              i =
              Object.create ||
              (function() {
                function e() {}
                return function(t) {
                  var n;
                  return (
                    (e.prototype = t),
                    (n = new e()),
                    (e.prototype = null),
                    n
                  );
                };
              })(),
              o = {},
              a = (o.lib = {}),
              s = (a.Base = {
                extend: function(e) {
                  var t = i(this);
                  return (
                    e && t.mixIn(e),
                    (t.hasOwnProperty("init") && this.init !== t.init) ||
                    (t.init = function() {
                      t.$super.init.apply(this, arguments);
                    }),
                    (t.init.prototype = t),
                    (t.$super = this),
                    t
                  );
                },
                create: function() {
                  var e = this.extend();
                  return e.init.apply(e, arguments), e;
                },
                init: function() {},
                mixIn: function(e) {
                  for (var t in e) e.hasOwnProperty(t) && (this[t] = e[t]);
                  e.hasOwnProperty("toString") &&
                    (this.toString = e.toString);
                },
                clone: function() {
                  return this.init.prototype.extend(this);
                },
              }),
              l = (a.WordArray = s.extend({
                init: function(e, t) {
                  (e = this.words = e || []),
                  (this.sigBytes = null != t ? t : 4 * e.length);
                },
                toString: function(e) {
                  return (e || c).stringify(this);
                },
                concat: function(e) {
                  var t = this.words,
                    n = e.words,
                    r = this.sigBytes,
                    i = e.sigBytes;
                  if ((this.clamp(), r % 4))
                    for (var o = 0; o < i; o++)
                      t[(r + o) >>> 2] |=
                      ((n[o >>> 2] >>> (24 - (o % 4) * 8)) & 255) <<
                      (24 - ((r + o) % 4) * 8);
                  else
                    for (var a = 0; a < i; a += 4)
                      t[(r + a) >>> 2] = n[a >>> 2];
                  return (this.sigBytes += i), this;
                },
                clamp: function() {
                  var t = this.words,
                    n = this.sigBytes;
                  (t[n >>> 2] &= 4294967295 << (32 - (n % 4) * 8)),
                  (t.length = e.ceil(n / 4));
                },
                clone: function() {
                  var e = s.clone.call(this);
                  return (e.words = this.words.slice(0)), e;
                },
                random: function(e) {
                  for (var t = [], n = 0; n < e; n += 4) t.push(r());
                  return new l.init(t, e);
                },
              })),
              u = (o.enc = {}),
              c = (u.Hex = {
                stringify: function(e) {
                  for (
                    var t = e.words, n = e.sigBytes, r = [], i = 0; i < n; i++
                  ) {
                    var o = (t[i >>> 2] >>> (24 - (i % 4) * 8)) & 255;
                    r.push((o >>> 4).toString(16)),
                      r.push((15 & o).toString(16));
                  }
                  return r.join("");
                },
                parse: function(e) {
                  for (var t = e.length, n = [], r = 0; r < t; r += 2)
                    n[r >>> 3] |=
                    parseInt(e.substr(r, 2), 16) << (24 - (r % 8) * 4);
                  return new l.init(n, t / 2);
                },
              }),
              p = (u.Latin1 = {
                stringify: function(e) {
                  for (
                    var t = e.words, n = e.sigBytes, r = [], i = 0; i < n; i++
                  )
                    r.push(
                      String.fromCharCode(
                        (t[i >>> 2] >>> (24 - (i % 4) * 8)) & 255
                      )
                    );
                  return r.join("");
                },
                parse: function(e) {
                  for (var t = e.length, n = [], r = 0; r < t; r++)
                    n[r >>> 2] |=
                    (255 & e.charCodeAt(r)) << (24 - (r % 4) * 8);
                  return new l.init(n, t);
                },
              }),
              d = (u.Utf8 = {
                stringify: function(e) {
                  try {
                    return decodeURIComponent(escape(p.stringify(e)));
                  } catch (e) {
                    throw Error("Malformed UTF-8 data");
                  }
                },
                parse: function(e) {
                  return p.parse(unescape(encodeURIComponent(e)));
                },
              }),
              f = (a.BufferedBlockAlgorithm = s.extend({
                reset: function() {
                  (this._data = new l.init()), (this._nDataBytes = 0);
                },
                _append: function(e) {
                  "string" == typeof e && (e = d.parse(e)),
                    this._data.concat(e),
                    (this._nDataBytes += e.sigBytes);
                },
                _process: function(t) {
                  var n,
                    r = this._data,
                    i = r.words,
                    o = r.sigBytes,
                    a = this.blockSize,
                    s = o / (4 * a),
                    u =
                    (s = t ?
                      e.ceil(s) :
                      e.max((0 | s) - this._minBufferSize, 0)) * a,
                    c = e.min(4 * u, o);
                  if (u) {
                    for (var p = 0; p < u; p += a) this._doProcessBlock(i, p);
                    (n = i.splice(0, u)), (r.sigBytes -= c);
                  }
                  return new l.init(n, c);
                },
                clone: function() {
                  var e = s.clone.call(this);
                  return (e._data = this._data.clone()), e;
                },
                _minBufferSize: 0,
              }));
            a.Hasher = f.extend({
              cfg: s.extend(),
              init: function(e) {
                (this.cfg = this.cfg.extend(e)), this.reset();
              },
              reset: function() {
                f.reset.call(this), this._doReset();
              },
              update: function(e) {
                return this._append(e), this._process(), this;
              },
              finalize: function(e) {
                return e && this._append(e), this._doFinalize();
              },
              blockSize: 16,
              _createHelper: function(e) {
                return function(t, n) {
                  return new e.init(n).finalize(t);
                };
              },
              _createHmacHelper: function(e) {
                return function(t, n) {
                  return new h.HMAC.init(e, n).finalize(t);
                };
              },
            });
            var h = (o.algo = {});
            return o;
          })(Math);
      }),
      n9 = n4(function(e, t) {
        var n, r, i, o, a, s, l, u, c;
        e.exports =
          ((n = Math),
            (i = (r = n8.lib).WordArray),
            (o = r.Hasher),
            (a = n8.algo),
            (s = []),
            (l = []),
            (function() {
              function e(e) {
                return (4294967296 * (e - (0 | e))) | 0;
              }
              for (var t = 2, r = 0; r < 64;)
                (function(e) {
                  for (var t = n.sqrt(e), r = 2; r <= t; r++)
                    if (!(e % r)) return !1;
                  return !0;
                })(t) &&
                (r < 8 && (s[r] = e(n.pow(t, 0.5))),
                  (l[r] = e(n.pow(t, 1 / 3))),
                  r++),
                t++;
            })(),
            (u = []),
            (c = a.SHA256 =
              o.extend({
                _doReset: function() {
                  this._hash = new i.init(s.slice(0));
                },
                _doProcessBlock: function(e, t) {
                  for (
                    var n = this._hash.words,
                      r = n[0],
                      i = n[1],
                      o = n[2],
                      a = n[3],
                      s = n[4],
                      c = n[5],
                      p = n[6],
                      d = n[7],
                      f = 0; f < 64; f++
                  ) {
                    if (f < 16) u[f] = 0 | e[t + f];
                    else {
                      var h = u[f - 15],
                        m = u[f - 2];
                      u[f] =
                        (((h << 25) | (h >>> 7)) ^
                          ((h << 14) | (h >>> 18)) ^
                          (h >>> 3)) +
                        u[f - 7] +
                        (((m << 15) | (m >>> 17)) ^
                          ((m << 13) | (m >>> 19)) ^
                          (m >>> 10)) +
                        u[f - 16];
                    }
                    var y = (r & i) ^ (r & o) ^ (i & o),
                      g =
                      d +
                      (((s << 26) | (s >>> 6)) ^
                        ((s << 21) | (s >>> 11)) ^
                        ((s << 7) | (s >>> 25))) +
                      ((s & c) ^ (~s & p)) +
                      l[f] +
                      u[f];
                    (d = p),
                    (p = c),
                    (c = s),
                    (s = (a + g) | 0),
                    (a = o),
                    (o = i),
                    (i = r),
                    (r =
                      (g +
                        ((((r << 30) | (r >>> 2)) ^
                            ((r << 19) | (r >>> 13)) ^
                            ((r << 10) | (r >>> 22))) +
                          y)) |
                      0);
                  }
                  (n[0] = (n[0] + r) | 0),
                  (n[1] = (n[1] + i) | 0),
                  (n[2] = (n[2] + o) | 0),
                  (n[3] = (n[3] + a) | 0),
                  (n[4] = (n[4] + s) | 0),
                  (n[5] = (n[5] + c) | 0),
                  (n[6] = (n[6] + p) | 0),
                  (n[7] = (n[7] + d) | 0);
                },
                _doFinalize: function() {
                  var e = this._data,
                    t = e.words,
                    r = 8 * this._nDataBytes,
                    i = 8 * e.sigBytes;
                  return (
                    (t[i >>> 5] |= 128 << (24 - (i % 32))),
                    (t[14 + (((i + 64) >>> 9) << 4)] = n.floor(r / 4294967296)),
                    (t[15 + (((i + 64) >>> 9) << 4)] = r),
                    (e.sigBytes = 4 * t.length),
                    this._process(),
                    this._hash
                  );
                },
                clone: function() {
                  var e = o.clone.call(this);
                  return (e._hash = this._hash.clone()), e;
                },
              })),
            (n8.SHA256 = o._createHelper(c)),
            (n8.HmacSHA256 = o._createHmacHelper(c)),
            n8.SHA256);
      }),
      n7 = n4(function(e, t) {
        var n;
        e.exports =
          ((n = n8.lib.WordArray),
            (n8.enc.Base64 = {
              stringify: function(e) {
                var t = e.words,
                  n = e.sigBytes,
                  r = this._map;
                e.clamp();
                for (var i = [], o = 0; o < n; o += 3)
                  for (
                    var a =
                      (((t[o >>> 2] >>> (24 - (o % 4) * 8)) & 255) << 16) |
                      (((t[(o + 1) >>> 2] >>> (24 - ((o + 1) % 4) * 8)) &
                          255) <<
                        8) |
                      ((t[(o + 2) >>> 2] >>> (24 - ((o + 2) % 4) * 8)) & 255),
                      s = 0; s < 4 && o + 0.75 * s < n; s++
                  )
                    i.push(r.charAt((a >>> (6 * (3 - s))) & 63));
                var l = r.charAt(64);
                if (l)
                  for (; i.length % 4;) i.push(l);
                return i.join("");
              },
              parse: function(e) {
                var t = e.length,
                  r = this._map,
                  i = this._reverseMap;
                if (!i) {
                  i = this._reverseMap = [];
                  for (var o = 0; o < r.length; o++) i[r.charCodeAt(o)] = o;
                }
                var a = r.charAt(64);
                if (a) {
                  var s = e.indexOf(a); -
                  1 !== s && (t = s);
                }
                return (function(e, t, r) {
                  for (var i = [], o = 0, a = 0; a < t; a++)
                    if (a % 4) {
                      var s = r[e.charCodeAt(a - 1)] << ((a % 4) * 2),
                        l = r[e.charCodeAt(a)] >>> (6 - (a % 4) * 2);
                      (i[o >>> 2] |= (s | l) << (24 - (o % 4) * 8)), o++;
                    }
                  return n.create(i, o);
                })(e, t, i);
              },
              _map: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",
            }),
            n8.enc.Base64);
      }),
      re = n4(function(e, t) {
        e.exports = n8.enc.Hex;
      }),
      rt = n4(function(e, t) {
        (function() {
          function t(e, t, n) {
            null != e &&
              ("number" == typeof e ?
                this.fromNumber(e, t, n) :
                this.fromString(
                  e,
                  null == t && "string" != typeof e ? 256 : t
                ));
          }

          function n() {
            return new t(null);
          }
          var r,
            i = "undefined" != typeof navigator;
          i && "Microsoft Internet Explorer" == navigator.appName ?
            ((t.prototype.am = function(e, t, n, r, i, o) {
                for (var a = 32767 & t, s = t >> 15; --o >= 0;) {
                  var l = 32767 & this[e],
                    u = this[e++] >> 15,
                    c = s * l + u * a;
                  (i =
                    ((l =
                        a * l +
                        ((32767 & c) << 15) +
                        n[r] +
                        (1073741823 & i)) >>>
                      30) +
                    (c >>> 15) +
                    s * u +
                    (i >>> 30)),
                  (n[r++] = 1073741823 & l);
                }
                return i;
              }),
              (o = 30)) :
            i && "Netscape" != navigator.appName ?
            ((t.prototype.am = function(e, t, n, r, i, o) {
                for (; --o >= 0;) {
                  var a = t * this[e++] + n[r] + i;
                  (i = Math.floor(a / 67108864)), (n[r++] = 67108863 & a);
                }
                return i;
              }),
              (o = 26)) :
            ((t.prototype.am = function(e, t, n, r, i, o) {
                for (var a = 16383 & t, s = t >> 14; --o >= 0;) {
                  var l = 16383 & this[e],
                    u = this[e++] >> 14,
                    c = s * l + u * a;
                  (i =
                    ((l = a * l + ((16383 & c) << 14) + n[r] + i) >> 28) +
                    (c >> 14) +
                    s * u),
                  (n[r++] = 268435455 & l);
                }
                return i;
              }),
              (o = 28)),
            (t.prototype.DB = o),
            (t.prototype.DM = (1 << o) - 1),
            (t.prototype.DV = 1 << o),
            (t.prototype.FV = 4503599627370496),
            (t.prototype.F1 = 52 - o),
            (t.prototype.F2 = 2 * o - 52);
          var o,
            a,
            s,
            l = [];
          for (a = 48, s = 0; s <= 9; ++s) l[a++] = s;
          for (a = 97, s = 10; s < 36; ++s) l[a++] = s;
          for (a = 65, s = 10; s < 36; ++s) l[a++] = s;

          function u(e) {
            return "0123456789abcdefghijklmnopqrstuvwxyz".charAt(e);
          }

          function c(e, t) {
            var n = l[e.charCodeAt(t)];
            return null == n ? -1 : n;
          }

          function p(e) {
            var t = n();
            return t.fromInt(e), t;
          }

          function d(e) {
            var t,
              n = 1;
            return (
              0 != (t = e >>> 16) && ((e = t), (n += 16)),
              0 != (t = e >> 8) && ((e = t), (n += 8)),
              0 != (t = e >> 4) && ((e = t), (n += 4)),
              0 != (t = e >> 2) && ((e = t), (n += 2)),
              0 != (t = e >> 1) && ((e = t), (n += 1)),
              n
            );
          }

          function f(e) {
            this.m = e;
          }

          function h(e) {
            (this.m = e),
            (this.mp = e.invDigit()),
            (this.mpl = 32767 & this.mp),
            (this.mph = this.mp >> 15),
            (this.um = (1 << (e.DB - 15)) - 1),
            (this.mt2 = 2 * e.t);
          }

          function m(e, t) {
            return e & t;
          }

          function y(e, t) {
            return e | t;
          }

          function g(e, t) {
            return e ^ t;
          }

          function v(e, t) {
            return e & ~t;
          }

          function b() {}

          function w(e) {
            return e;
          }

          function x(e) {
            (this.r2 = n()),
            (this.q3 = n()),
            t.ONE.dlShiftTo(2 * e.t, this.r2),
              (this.mu = this.r2.divide(e)),
              (this.m = e);
          }
          (f.prototype.convert = function(e) {
            return e.s < 0 || e.compareTo(this.m) >= 0 ? e.mod(this.m) : e;
          }),
          (f.prototype.revert = function(e) {
            return e;
          }),
          (f.prototype.reduce = function(e) {
            e.divRemTo(this.m, null, e);
          }),
          (f.prototype.mulTo = function(e, t, n) {
            e.multiplyTo(t, n), this.reduce(n);
          }),
          (f.prototype.sqrTo = function(e, t) {
            e.squareTo(t), this.reduce(t);
          }),
          (h.prototype.convert = function(e) {
            var r = n();
            return (
              e.abs().dlShiftTo(this.m.t, r),
              r.divRemTo(this.m, null, r),
              e.s < 0 && r.compareTo(t.ZERO) > 0 && this.m.subTo(r, r),
              r
            );
          }),
          (h.prototype.revert = function(e) {
            var t = n();
            return e.copyTo(t), this.reduce(t), t;
          }),
          (h.prototype.reduce = function(e) {
            for (; e.t <= this.mt2;) e[e.t++] = 0;
            for (var t = 0; t < this.m.t; ++t) {
              var n = 32767 & e[t],
                r =
                (n * this.mpl +
                  (((n * this.mph + (e[t] >> 15) * this.mpl) & this.um) <<
                    15)) &
                e.DM;
              for (
                e[(n = t + this.m.t)] += this.m.am(0, r, e, t, 0, this.m.t); e[n] >= e.DV;

              )
                (e[n] -= e.DV), e[++n]++;
            }
            e.clamp(),
              e.drShiftTo(this.m.t, e),
              e.compareTo(this.m) >= 0 && e.subTo(this.m, e);
          }),
          (h.prototype.mulTo = function(e, t, n) {
            e.multiplyTo(t, n), this.reduce(n);
          }),
          (h.prototype.sqrTo = function(e, t) {
            e.squareTo(t), this.reduce(t);
          }),
          (t.prototype.copyTo = function(e) {
            for (var t = this.t - 1; t >= 0; --t) e[t] = this[t];
            (e.t = this.t), (e.s = this.s);
          }),
          (t.prototype.fromInt = function(e) {
            (this.t = 1),
            (this.s = e < 0 ? -1 : 0),
            e > 0 ?
              (this[0] = e) :
              e < -1 ?
              (this[0] = e + this.DV) :
              (this.t = 0);
          }),
          (t.prototype.fromString = function(e, n) {
            var r;
            if (16 == n) r = 4;
            else if (8 == n) r = 3;
            else if (256 == n) r = 8;
            else if (2 == n) r = 1;
            else if (32 == n) r = 5;
            else {
              if (4 != n) return void this.fromRadix(e, n);
              r = 2;
            }
            (this.t = 0), (this.s = 0);
            for (var i = e.length, o = !1, a = 0; --i >= 0;) {
              var s = 8 == r ? 255 & e[i] : c(e, i);
              s < 0 ?
                "-" == e.charAt(i) && (o = !0) :
                ((o = !1),
                  0 == a ?
                  (this[this.t++] = s) :
                  a + r > this.DB ?
                  ((this[this.t - 1] |=
                      (s & ((1 << (this.DB - a)) - 1)) << a),
                    (this[this.t++] = s >> (this.DB - a))) :
                  (this[this.t - 1] |= s << a),
                  (a += r) >= this.DB && (a -= this.DB));
            }
            8 == r &&
              0 != (128 & e[0]) &&
              ((this.s = -1),
                a > 0 &&
                (this[this.t - 1] |= ((1 << (this.DB - a)) - 1) << a)),
              this.clamp(),
              o && t.ZERO.subTo(this, this);
          }),
          (t.prototype.clamp = function() {
            for (
              var e = this.s & this.DM; this.t > 0 && this[this.t - 1] == e;

            )
              --this.t;
          }),
          (t.prototype.dlShiftTo = function(e, t) {
            var n;
            for (n = this.t - 1; n >= 0; --n) t[n + e] = this[n];
            for (n = e - 1; n >= 0; --n) t[n] = 0;
            (t.t = this.t + e), (t.s = this.s);
          }),
          (t.prototype.drShiftTo = function(e, t) {
            for (var n = e; n < this.t; ++n) t[n - e] = this[n];
            (t.t = Math.max(this.t - e, 0)), (t.s = this.s);
          }),
          (t.prototype.lShiftTo = function(e, t) {
            var n,
              r = e % this.DB,
              i = this.DB - r,
              o = (1 << i) - 1,
              a = Math.floor(e / this.DB),
              s = (this.s << r) & this.DM;
            for (n = this.t - 1; n >= 0; --n)
              (t[n + a + 1] = (this[n] >> i) | s), (s = (this[n] & o) << r);
            for (n = a - 1; n >= 0; --n) t[n] = 0;
            (t[a] = s), (t.t = this.t + a + 1), (t.s = this.s), t.clamp();
          }),
          (t.prototype.rShiftTo = function(e, t) {
            t.s = this.s;
            var n = Math.floor(e / this.DB);
            if (n >= this.t) t.t = 0;
            else {
              var r = e % this.DB,
                i = this.DB - r,
                o = (1 << r) - 1;
              t[0] = this[n] >> r;
              for (var a = n + 1; a < this.t; ++a)
                (t[a - n - 1] |= (this[a] & o) << i),
                (t[a - n] = this[a] >> r);
              r > 0 && (t[this.t - n - 1] |= (this.s & o) << i),
                (t.t = this.t - n),
                t.clamp();
            }
          }),
          (t.prototype.subTo = function(e, t) {
            for (var n = 0, r = 0, i = Math.min(e.t, this.t); n < i;)
              (r += this[n] - e[n]),
              (t[n++] = r & this.DM),
              (r >>= this.DB);
            if (e.t < this.t) {
              for (r -= e.s; n < this.t;)
                (r += this[n]), (t[n++] = r & this.DM), (r >>= this.DB);
              r += this.s;
            } else {
              for (r += this.s; n < e.t;)
                (r -= e[n]), (t[n++] = r & this.DM), (r >>= this.DB);
              r -= e.s;
            }
            (t.s = r < 0 ? -1 : 0),
            r < -1 ? (t[n++] = this.DV + r) : r > 0 && (t[n++] = r),
              (t.t = n),
              t.clamp();
          }),
          (t.prototype.multiplyTo = function(e, n) {
            var r = this.abs(),
              i = e.abs(),
              o = r.t;
            for (n.t = o + i.t; --o >= 0;) n[o] = 0;
            for (o = 0; o < i.t; ++o)
              n[o + r.t] = r.am(0, i[o], n, o, 0, r.t);
            (n.s = 0), n.clamp(), this.s != e.s && t.ZERO.subTo(n, n);
          }),
          (t.prototype.squareTo = function(e) {
            for (var t = this.abs(), n = (e.t = 2 * t.t); --n >= 0;)
              e[n] = 0;
            for (n = 0; n < t.t - 1; ++n) {
              var r = t.am(n, t[n], e, 2 * n, 0, 1);
              (e[n + t.t] += t.am(
                n + 1,
                2 * t[n],
                e,
                2 * n + 1,
                r,
                t.t - n - 1
              )) >= t.DV && ((e[n + t.t] -= t.DV), (e[n + t.t + 1] = 1));
            }
            e.t > 0 && (e[e.t - 1] += t.am(n, t[n], e, 2 * n, 0, 1)),
              (e.s = 0),
              e.clamp();
          }),
          (t.prototype.divRemTo = function(e, r, i) {
            var o = e.abs();
            if (!(o.t <= 0)) {
              var a = this.abs();
              if (a.t < o.t)
                return (
                  null != r && r.fromInt(0),
                  void(null != i && this.copyTo(i))
                );
              null == i && (i = n());
              var s = n(),
                l = this.s,
                u = e.s,
                c = this.DB - d(o[o.t - 1]);
              c > 0 ?
                (o.lShiftTo(c, s), a.lShiftTo(c, i)) :
                (o.copyTo(s), a.copyTo(i));
              var p = s.t,
                f = s[p - 1];
              if (0 != f) {
                var h =
                  f * (1 << this.F1) + (p > 1 ? s[p - 2] >> this.F2 : 0),
                  m = this.FV / h,
                  y = (1 << this.F1) / h,
                  g = 1 << this.F2,
                  v = i.t,
                  b = v - p,
                  w = null == r ? n() : r;
                for (
                  s.dlShiftTo(b, w),
                  i.compareTo(w) >= 0 && ((i[i.t++] = 1), i.subTo(w, i)),
                  t.ONE.dlShiftTo(p, w),
                  w.subTo(s, s); s.t < p;

                )
                  s[s.t++] = 0;
                for (; --b >= 0;) {
                  var x =
                    i[--v] == f ?
                    this.DM :
                    Math.floor(i[v] * m + (i[v - 1] + g) * y);
                  if ((i[v] += s.am(0, x, i, b, 0, p)) < x)
                    for (s.dlShiftTo(b, w), i.subTo(w, i); i[v] < --x;)
                      i.subTo(w, i);
                }
                null != r &&
                  (i.drShiftTo(p, r), l != u && t.ZERO.subTo(r, r)),
                  (i.t = p),
                  i.clamp(),
                  c > 0 && i.rShiftTo(c, i),
                  l < 0 && t.ZERO.subTo(i, i);
              }
            }
          }),
          (t.prototype.invDigit = function() {
            if (this.t < 1) return 0;
            var e = this[0];
            if (0 == (1 & e)) return 0;
            var t = 3 & e;
            return (t =
                ((t =
                    ((t =
                        ((t = (t * (2 - (15 & e) * t)) & 15) *
                          (2 - (255 & e) * t)) &
                        255) *
                      (2 - (((65535 & e) * t) & 65535))) &
                    65535) *
                  (2 - ((e * t) % this.DV))) %
                this.DV) > 0 ?
              this.DV - t :
              -t;
          }),
          (t.prototype.isEven = function() {
            return 0 == (this.t > 0 ? 1 & this[0] : this.s);
          }),
          (t.prototype.exp = function(e, r) {
            if (e > 4294967295 || e < 1) return t.ONE;
            var i = n(),
              o = n(),
              a = r.convert(this),
              s = d(e) - 1;
            for (a.copyTo(i); --s >= 0;)
              if ((r.sqrTo(i, o), (e & (1 << s)) > 0)) r.mulTo(o, a, i);
              else {
                var l = i;
                (i = o), (o = l);
              }
            return r.revert(i);
          }),
          (t.prototype.toString = function(e) {
            if (this.s < 0) return "-" + this.negate().toString(e);
            if (16 == e) t = 4;
            else if (8 == e) t = 3;
            else if (2 == e) t = 1;
            else if (32 == e) t = 5;
            else {
              if (4 != e) return this.toRadix(e);
              t = 2;
            }
            var t,
              n,
              r = (1 << t) - 1,
              i = !1,
              o = "",
              a = this.t,
              s = this.DB - ((a * this.DB) % t);
            if (a-- > 0)
              for (
                s < this.DB &&
                (n = this[a] >> s) > 0 &&
                ((i = !0), (o = u(n))); a >= 0;

              )
                s < t ?
                (n =
                  ((this[a] & ((1 << s) - 1)) << (t - s)) |
                  (this[--a] >> (s += this.DB - t))) :
                ((n = (this[a] >> (s -= t)) & r),
                  s <= 0 && ((s += this.DB), --a)),
                n > 0 && (i = !0),
                i && (o += u(n));
            return i ? o : "0";
          }),
          (t.prototype.negate = function() {
            var e = n();
            return t.ZERO.subTo(this, e), e;
          }),
          (t.prototype.abs = function() {
            return this.s < 0 ? this.negate() : this;
          }),
          (t.prototype.compareTo = function(e) {
            var t = this.s - e.s;
            if (0 != t) return t;
            var n = this.t;
            if (0 != (t = n - e.t)) return this.s < 0 ? -t : t;
            for (; --n >= 0;)
              if (0 != (t = this[n] - e[n])) return t;
            return 0;
          }),
          (t.prototype.bitLength = function() {
            return this.t <= 0 ?
              0 :
              this.DB * (this.t - 1) +
              d(this[this.t - 1] ^ (this.s & this.DM));
          }),
          (t.prototype.mod = function(e) {
            var r = n();
            return (
              this.abs().divRemTo(e, null, r),
              this.s < 0 && r.compareTo(t.ZERO) > 0 && e.subTo(r, r),
              r
            );
          }),
          (t.prototype.modPowInt = function(e, t) {
            var n;
            return (
              (n = e < 256 || t.isEven() ? new f(t) : new h(t)),
              this.exp(e, n)
            );
          }),
          (t.ZERO = p(0)),
          (t.ONE = p(1)),
          (b.prototype.convert = w),
          (b.prototype.revert = w),
          (b.prototype.mulTo = function(e, t, n) {
            e.multiplyTo(t, n);
          }),
          (b.prototype.sqrTo = function(e, t) {
            e.squareTo(t);
          }),
          (x.prototype.convert = function(e) {
            if (e.s < 0 || e.t > 2 * this.m.t) return e.mod(this.m);
            if (0 > e.compareTo(this.m)) return e;
            var t = n();
            return e.copyTo(t), this.reduce(t), t;
          }),
          (x.prototype.revert = function(e) {
            return e;
          }),
          (x.prototype.reduce = function(e) {
            for (
              e.drShiftTo(this.m.t - 1, this.r2),
              e.t > this.m.t + 1 && ((e.t = this.m.t + 1), e.clamp()),
              this.mu.multiplyUpperTo(this.r2, this.m.t + 1, this.q3),
              this.m.multiplyLowerTo(this.q3, this.m.t + 1, this.r2); 0 > e.compareTo(this.r2);

            )
              e.dAddOffset(1, this.m.t + 1);
            for (e.subTo(this.r2, e); e.compareTo(this.m) >= 0;)
              e.subTo(this.m, e);
          }),
          (x.prototype.mulTo = function(e, t, n) {
            e.multiplyTo(t, n), this.reduce(n);
          }),
          (x.prototype.sqrTo = function(e, t) {
            e.squareTo(t), this.reduce(t);
          });
          var S,
            k,
            _,
            T = [
              2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59,
              61, 67, 71, 73, 79, 83, 89, 97, 101, 103, 107, 109, 113, 127,
              131, 137, 139, 149, 151, 157, 163, 167, 173, 179, 181, 191, 193,
              197, 199, 211, 223, 227, 229, 233, 239, 241, 251, 257, 263, 269,
              271, 277, 281, 283, 293, 307, 311, 313, 317, 331, 337, 347, 349,
              353, 359, 367, 373, 379, 383, 389, 397, 401, 409, 419, 421, 431,
              433, 439, 443, 449, 457, 461, 463, 467, 479, 487, 491, 499, 503,
              509, 521, 523, 541, 547, 557, 563, 569, 571, 577, 587, 593, 599,
              601, 607, 613, 617, 619, 631, 641, 643, 647, 653, 659, 661, 673,
              677, 683, 691, 701, 709, 719, 727, 733, 739, 743, 751, 757, 761,
              769, 773, 787, 797, 809, 811, 821, 823, 827, 829, 839, 853, 857,
              859, 863, 877, 881, 883, 887, 907, 911, 919, 929, 937, 941, 947,
              953, 967, 971, 977, 983, 991, 997,
            ],
            E = 67108864 / T[T.length - 1];

          function C() {
            var e;
            (e = new Date().getTime()),
            (k[_++] ^= 255 & e),
            (k[_++] ^= (e >> 8) & 255),
            (k[_++] ^= (e >> 16) & 255),
            (k[_++] ^= (e >> 24) & 255),
            _ >= D && (_ -= D);
          }
          if (
            ((t.prototype.chunkSize = function(e) {
                return Math.floor((Math.LN2 * this.DB) / Math.log(e));
              }),
              (t.prototype.toRadix = function(e) {
                if (
                  (null == e && (e = 10), 0 == this.signum() || e < 2 || e > 36)
                )
                  return "0";
                var t = this.chunkSize(e),
                  r = Math.pow(e, t),
                  i = p(r),
                  o = n(),
                  a = n(),
                  s = "";
                for (this.divRemTo(i, o, a); o.signum() > 0;)
                  (s = (r + a.intValue()).toString(e).substr(1) + s),
                  o.divRemTo(i, o, a);
                return a.intValue().toString(e) + s;
              }),
              (t.prototype.fromRadix = function(e, n) {
                this.fromInt(0), null == n && (n = 10);
                for (
                  var r = this.chunkSize(n),
                    i = Math.pow(n, r),
                    o = !1,
                    a = 0,
                    s = 0,
                    l = 0; l < e.length;
                  ++l
                ) {
                  var u = c(e, l);
                  u < 0 ?
                    "-" == e.charAt(l) && 0 == this.signum() && (o = !0) :
                    ((s = n * s + u),
                      ++a >= r &&
                      (this.dMultiply(i),
                        this.dAddOffset(s, 0),
                        (a = 0),
                        (s = 0)));
                }
                a > 0 &&
                  (this.dMultiply(Math.pow(n, a)), this.dAddOffset(s, 0)),
                  o && t.ZERO.subTo(this, this);
              }),
              (t.prototype.fromNumber = function(e, n, r) {
                if ("number" == typeof n) {
                  if (e < 2) this.fromInt(1);
                  else
                    for (
                      this.fromNumber(e, r),
                      this.testBit(e - 1) ||
                      this.bitwiseTo(t.ONE.shiftLeft(e - 1), y, this),
                      this.isEven() && this.dAddOffset(1, 0); !this.isProbablePrime(n);

                    )
                      this.dAddOffset(2, 0),
                      this.bitLength() > e &&
                      this.subTo(t.ONE.shiftLeft(e - 1), this);
                } else {
                  var i = [],
                    o = 7 & e;
                  (i.length = 1 + (e >> 3)),
                  n.nextBytes(i),
                    o > 0 ? (i[0] &= (1 << o) - 1) : (i[0] = 0),
                    this.fromString(i, 256);
                }
              }),
              (t.prototype.bitwiseTo = function(e, t, n) {
                var r,
                  i,
                  o = Math.min(e.t, this.t);
                for (r = 0; r < o; ++r) n[r] = t(this[r], e[r]);
                if (e.t < this.t) {
                  for (i = e.s & this.DM, r = o; r < this.t; ++r)
                    n[r] = t(this[r], i);
                  n.t = this.t;
                } else {
                  for (i = this.s & this.DM, r = o; r < e.t; ++r)
                    n[r] = t(i, e[r]);
                  n.t = e.t;
                }
                (n.s = t(this.s, e.s)), n.clamp();
              }),
              (t.prototype.changeBit = function(e, n) {
                var r = t.ONE.shiftLeft(e);
                return this.bitwiseTo(r, n, r), r;
              }),
              (t.prototype.addTo = function(e, t) {
                for (var n = 0, r = 0, i = Math.min(e.t, this.t); n < i;)
                  (r += this[n] + e[n]),
                  (t[n++] = r & this.DM),
                  (r >>= this.DB);
                if (e.t < this.t) {
                  for (r += e.s; n < this.t;)
                    (r += this[n]), (t[n++] = r & this.DM), (r >>= this.DB);
                  r += this.s;
                } else {
                  for (r += this.s; n < e.t;)
                    (r += e[n]), (t[n++] = r & this.DM), (r >>= this.DB);
                  r += e.s;
                }
                (t.s = r < 0 ? -1 : 0),
                r > 0 ? (t[n++] = r) : r < -1 && (t[n++] = this.DV + r),
                  (t.t = n),
                  t.clamp();
              }),
              (t.prototype.dMultiply = function(e) {
                (this[this.t] = this.am(0, e - 1, this, 0, 0, this.t)),
                ++this.t,
                  this.clamp();
              }),
              (t.prototype.dAddOffset = function(e, t) {
                if (0 != e) {
                  for (; this.t <= t;) this[this.t++] = 0;
                  for (this[t] += e; this[t] >= this.DV;)
                    (this[t] -= this.DV),
                    ++t >= this.t && (this[this.t++] = 0),
                    ++this[t];
                }
              }),
              (t.prototype.multiplyLowerTo = function(e, t, n) {
                var r,
                  i = Math.min(this.t + e.t, t);
                for (n.s = 0, n.t = i; i > 0;) n[--i] = 0;
                for (r = n.t - this.t; i < r; ++i)
                  n[i + this.t] = this.am(0, e[i], n, i, 0, this.t);
                for (r = Math.min(e.t, t); i < r; ++i)
                  this.am(0, e[i], n, i, 0, t - i);
                n.clamp();
              }),
              (t.prototype.multiplyUpperTo = function(e, t, n) {
                --t;
                var r = (n.t = this.t + e.t - t);
                for (n.s = 0; --r >= 0;) n[r] = 0;
                for (r = Math.max(t - this.t, 0); r < e.t; ++r)
                  n[this.t + r - t] = this.am(
                    t - r,
                    e[r],
                    n,
                    0,
                    0,
                    this.t + r - t
                  );
                n.clamp(), n.drShiftTo(1, n);
              }),
              (t.prototype.modInt = function(e) {
                if (e <= 0) return 0;
                var t = this.DV % e,
                  n = this.s < 0 ? e - 1 : 0;
                if (this.t > 0) {
                  if (0 == t) n = this[0] % e;
                  else
                    for (var r = this.t - 1; r >= 0; --r)
                      n = (t * n + this[r]) % e;
                }
                return n;
              }),
              (t.prototype.millerRabin = function(e) {
                var r = this.subtract(t.ONE),
                  i = r.getLowestSetBit();
                if (i <= 0) return !1;
                var o = r.shiftRight(i);
                (e = (e + 1) >> 1) > T.length && (e = T.length);
                for (var a = n(), s = 0; s < e; ++s) {
                  a.fromInt(T[Math.floor(Math.random() * T.length)]);
                  var l = a.modPow(o, this);
                  if (0 != l.compareTo(t.ONE) && 0 != l.compareTo(r)) {
                    for (var u = 1; u++ < i && 0 != l.compareTo(r);)
                      if (0 == (l = l.modPowInt(2, this)).compareTo(t.ONE))
                        return !1;
                    if (0 != l.compareTo(r)) return !1;
                  }
                }
                return !0;
              }),
              (t.prototype.clone = function() {
                var e = n();
                return this.copyTo(e), e;
              }),
              (t.prototype.intValue = function() {
                if (this.s < 0) {
                  if (1 == this.t) return this[0] - this.DV;
                  if (0 == this.t) return -1;
                } else {
                  if (1 == this.t) return this[0];
                  if (0 == this.t) return 0;
                }
                return (
                  ((this[1] & ((1 << (32 - this.DB)) - 1)) << this.DB) | this[0]
                );
              }),
              (t.prototype.byteValue = function() {
                return 0 == this.t ? this.s : (this[0] << 24) >> 24;
              }),
              (t.prototype.shortValue = function() {
                return 0 == this.t ? this.s : (this[0] << 16) >> 16;
              }),
              (t.prototype.signum = function() {
                return this.s < 0 ?
                  -1 :
                  this.t <= 0 || (1 == this.t && this[0] <= 0) ?
                  0 :
                  1;
              }),
              (t.prototype.toByteArray = function() {
                var e = this.t,
                  t = [];
                t[0] = this.s;
                var n,
                  r = this.DB - ((e * this.DB) % 8),
                  i = 0;
                if (e-- > 0)
                  for (
                    r < this.DB &&
                    (n = this[e] >> r) != (this.s & this.DM) >> r &&
                    (t[i++] = n | (this.s << (this.DB - r))); e >= 0;

                  )
                    r < 8 ?
                    (n =
                      ((this[e] & ((1 << r) - 1)) << (8 - r)) |
                      (this[--e] >> (r += this.DB - 8))) :
                    ((n = (this[e] >> (r -= 8)) & 255),
                      r <= 0 && ((r += this.DB), --e)),
                    0 != (128 & n) && (n |= -256),
                    0 == i && (128 & this.s) != (128 & n) && ++i,
                    (i > 0 || n != this.s) && (t[i++] = n);
                return t;
              }),
              (t.prototype.equals = function(e) {
                return 0 == this.compareTo(e);
              }),
              (t.prototype.min = function(e) {
                return 0 > this.compareTo(e) ? this : e;
              }),
              (t.prototype.max = function(e) {
                return this.compareTo(e) > 0 ? this : e;
              }),
              (t.prototype.and = function(e) {
                var t = n();
                return this.bitwiseTo(e, m, t), t;
              }),
              (t.prototype.or = function(e) {
                var t = n();
                return this.bitwiseTo(e, y, t), t;
              }),
              (t.prototype.xor = function(e) {
                var t = n();
                return this.bitwiseTo(e, g, t), t;
              }),
              (t.prototype.andNot = function(e) {
                var t = n();
                return this.bitwiseTo(e, v, t), t;
              }),
              (t.prototype.not = function() {
                for (var e = n(), t = 0; t < this.t; ++t)
                  e[t] = this.DM & ~this[t];
                return (e.t = this.t), (e.s = ~this.s), e;
              }),
              (t.prototype.shiftLeft = function(e) {
                var t = n();
                return e < 0 ? this.rShiftTo(-e, t) : this.lShiftTo(e, t), t;
              }),
              (t.prototype.shiftRight = function(e) {
                var t = n();
                return e < 0 ? this.lShiftTo(-e, t) : this.rShiftTo(e, t), t;
              }),
              (t.prototype.getLowestSetBit = function() {
                for (var e = 0; e < this.t; ++e)
                  if (0 != this[e])
                    return (
                      e * this.DB +
                      (function(e) {
                        if (0 == e) return -1;
                        var t = 0;
                        return (
                          0 == (65535 & e) && ((e >>= 16), (t += 16)),
                          0 == (255 & e) && ((e >>= 8), (t += 8)),
                          0 == (15 & e) && ((e >>= 4), (t += 4)),
                          0 == (3 & e) && ((e >>= 2), (t += 2)),
                          0 == (1 & e) && ++t,
                          t
                        );
                      })(this[e])
                    );
                return this.s < 0 ? this.t * this.DB : -1;
              }),
              (t.prototype.bitCount = function() {
                for (var e = 0, t = this.s & this.DM, n = 0; n < this.t; ++n)
                  e += (function(e) {
                    for (var t = 0; 0 != e;)(e &= e - 1), ++t;
                    return t;
                  })(this[n] ^ t);
                return e;
              }),
              (t.prototype.testBit = function(e) {
                var t = Math.floor(e / this.DB);
                return t >= this.t ?
                  0 != this.s :
                  0 != (this[t] & (1 << e % this.DB));
              }),
              (t.prototype.setBit = function(e) {
                return this.changeBit(e, y);
              }),
              (t.prototype.clearBit = function(e) {
                return this.changeBit(e, v);
              }),
              (t.prototype.flipBit = function(e) {
                return this.changeBit(e, g);
              }),
              (t.prototype.add = function(e) {
                var t = n();
                return this.addTo(e, t), t;
              }),
              (t.prototype.subtract = function(e) {
                var t = n();
                return this.subTo(e, t), t;
              }),
              (t.prototype.multiply = function(e) {
                var t = n();
                return this.multiplyTo(e, t), t;
              }),
              (t.prototype.divide = function(e) {
                var t = n();
                return this.divRemTo(e, t, null), t;
              }),
              (t.prototype.remainder = function(e) {
                var t = n();
                return this.divRemTo(e, null, t), t;
              }),
              (t.prototype.divideAndRemainder = function(e) {
                var t = n(),
                  r = n();
                return this.divRemTo(e, t, r), [t, r];
              }),
              (t.prototype.modPow = function(e, t) {
                var r,
                  i,
                  o = e.bitLength(),
                  a = p(1);
                if (o <= 0) return a;
                (r = o < 18 ? 1 : o < 48 ? 3 : o < 144 ? 4 : o < 768 ? 5 : 6),
                (i = o < 8 ? new f(t) : t.isEven() ? new x(t) : new h(t));
                var s = [],
                  l = 3,
                  u = r - 1,
                  c = (1 << r) - 1;
                if (((s[1] = i.convert(this)), r > 1)) {
                  var m = n();
                  for (i.sqrTo(s[1], m); l <= c;)
                    (s[l] = n()), i.mulTo(m, s[l - 2], s[l]), (l += 2);
                }
                var y,
                  g,
                  v = e.t - 1,
                  b = !0,
                  w = n();
                for (o = d(e[v]) - 1; v >= 0;) {
                  for (
                    o >= u ?
                    (y = (e[v] >> (o - u)) & c) :
                    ((y = (e[v] & ((1 << (o + 1)) - 1)) << (u - o)),
                      v > 0 && (y |= e[v - 1] >> (this.DB + o - u))),
                    l = r; 0 == (1 & y);

                  )
                    (y >>= 1), --l;
                  if (((o -= l) < 0 && ((o += this.DB), --v), b))
                    s[y].copyTo(a), (b = !1);
                  else {
                    for (; l > 1;) i.sqrTo(a, w), i.sqrTo(w, a), (l -= 2);
                    l > 0 ? i.sqrTo(a, w) : ((g = a), (a = w), (w = g)),
                      i.mulTo(w, s[y], a);
                  }
                  for (; v >= 0 && 0 == (e[v] & (1 << o));)
                    i.sqrTo(a, w),
                    (g = a),
                    (a = w),
                    (w = g),
                    --o < 0 && ((o = this.DB - 1), --v);
                }
                return i.revert(a);
              }),
              (t.prototype.modInverse = function(e) {
                var n = e.isEven();
                if ((this.isEven() && n) || 0 == e.signum()) return t.ZERO;
                for (
                  var r = e.clone(),
                    i = this.clone(),
                    o = p(1),
                    a = p(0),
                    s = p(0),
                    l = p(1); 0 != r.signum();

                ) {
                  for (; r.isEven();)
                    r.rShiftTo(1, r),
                    n ?
                    ((o.isEven() && a.isEven()) ||
                      (o.addTo(this, o), a.subTo(e, a)),
                      o.rShiftTo(1, o)) :
                    a.isEven() || a.subTo(e, a),
                    a.rShiftTo(1, a);
                  for (; i.isEven();)
                    i.rShiftTo(1, i),
                    n ?
                    ((s.isEven() && l.isEven()) ||
                      (s.addTo(this, s), l.subTo(e, l)),
                      s.rShiftTo(1, s)) :
                    l.isEven() || l.subTo(e, l),
                    l.rShiftTo(1, l);
                  r.compareTo(i) >= 0 ?
                    (r.subTo(i, r), n && o.subTo(s, o), a.subTo(l, a)) :
                    (i.subTo(r, i), n && s.subTo(o, s), l.subTo(a, l));
                }
                return 0 != i.compareTo(t.ONE) ?
                  t.ZERO :
                  l.compareTo(e) >= 0 ?
                  l.subtract(e) :
                  0 > l.signum() ?
                  (l.addTo(e, l), 0 > l.signum() ? l.add(e) : l) :
                  l;
              }),
              (t.prototype.pow = function(e) {
                return this.exp(e, new b());
              }),
              (t.prototype.gcd = function(e) {
                var t = this.s < 0 ? this.negate() : this.clone(),
                  n = e.s < 0 ? e.negate() : e.clone();
                if (0 > t.compareTo(n)) {
                  var r = t;
                  (t = n), (n = r);
                }
                var i = t.getLowestSetBit(),
                  o = n.getLowestSetBit();
                if (o < 0) return t;
                for (
                  i < o && (o = i),
                  o > 0 && (t.rShiftTo(o, t), n.rShiftTo(o, n)); t.signum() > 0;

                )
                  (i = t.getLowestSetBit()) > 0 && t.rShiftTo(i, t),
                  (i = n.getLowestSetBit()) > 0 && n.rShiftTo(i, n),
                  t.compareTo(n) >= 0 ?
                  (t.subTo(n, t), t.rShiftTo(1, t)) :
                  (n.subTo(t, n), n.rShiftTo(1, n));
                return o > 0 && n.lShiftTo(o, n), n;
              }),
              (t.prototype.isProbablePrime = function(e) {
                var t,
                  n = this.abs();
                if (1 == n.t && n[0] <= T[T.length - 1]) {
                  for (t = 0; t < T.length; ++t)
                    if (n[0] == T[t]) return !0;
                  return !1;
                }
                if (n.isEven()) return !1;
                for (t = 1; t < T.length;) {
                  for (var r = T[t], i = t + 1; i < T.length && r < E;)
                    r *= T[i++];
                  for (r = n.modInt(r); t < i;)
                    if (r % T[t++] == 0) return !1;
                }
                return n.millerRabin(e);
              }),
              (t.prototype.square = function() {
                var e = n();
                return this.squareTo(e), e;
              }),
              (t.prototype.Barrett = x),
              null == k)
          ) {
            if (
              ((k = []),
                (_ = 0),
                "undefined" != typeof window && window.crypto)
            ) {
              if (window.crypto.getRandomValues) {
                var P = new Uint8Array(32);
                for (window.crypto.getRandomValues(P), r = 0; r < 32; ++r)
                  k[_++] = P[r];
              } else if (
                "Netscape" == navigator.appName &&
                navigator.appVersion < "5"
              ) {
                var O = window.crypto.random(32);
                for (r = 0; r < O.length; ++r) k[_++] = 255 & O.charCodeAt(r);
              }
            }
            for (; _ < D;)
              (r = Math.floor(65536 * Math.random())),
              (k[_++] = r >>> 8),
              (k[_++] = 255 & r);
            (_ = 0), C();
          }

          function A() {}

          function j() {
            (this.i = 0), (this.j = 0), (this.S = []);
          }
          (A.prototype.nextBytes = function(e) {
            var t;
            for (t = 0; t < e.length; ++t)
              e[t] = (function() {
                if (null == S) {
                  for (C(), (S = new j()).init(k), _ = 0; _ < k.length; ++_)
                    k[_] = 0;
                  _ = 0;
                }
                return S.next();
              })();
          }),
          (j.prototype.init = function(e) {
            var t, n, r;
            for (t = 0; t < 256; ++t) this.S[t] = t;
            for (n = 0, t = 0; t < 256; ++t)
              (r = this.S[t]),
              (this.S[t] =
                this.S[(n = (n + this.S[t] + e[t % e.length]) & 255)]),
              (this.S[n] = r);
            (this.i = 0), (this.j = 0);
          }),
          (j.prototype.next = function() {
            var e;
            return (
              (this.i = (this.i + 1) & 255),
              (this.j = (this.j + this.S[this.i]) & 255),
              (e = this.S[this.i]),
              (this.S[this.i] = this.S[this.j]),
              (this.S[this.j] = e),
              this.S[(e + this.S[this.i]) & 255]
            );
          });
          var D = 256;
          e.exports = {
            default: t,
            BigInteger: t,
            SecureRandom: A
          };
        }).call(n3);
      }),
      rn = {
        sha1: "3021300906052b0e03021a05000414",
        sha224: "302d300d06096086480165030402040500041c",
        sha256: "3031300d060960864801650304020105000420",
        sha384: "3041300d060960864801650304020205000430",
        sha512: "3051300d060960864801650304020305000440",
        md2: "3020300c06082a864886f70d020205000410",
        md5: "3020300c06082a864886f70d020505000410",
        ripemd160: "3021300906052b2403020105000414",
      },
      rr = {
        sha256: n9
      };

    function ri(e, t) {
      if (
        ((this.n = null),
          (this.e = 0),
          !(null != e && null != t && e.length > 0 && t.length > 0))
      )
        throw Error("Invalid key data");
      (this.n = new rt.BigInteger(e, 16)), (this.e = parseInt(t, 16));
    }
    ri.prototype.verify = function(e, t) {
      t = t.replace(/[^0-9a-f]|[\s\n]]/gi, "");
      var n = new rt.BigInteger(t, 16);
      if (n.bitLength() > this.n.bitLength())
        throw Error("Signature does not match with the key modulus.");
      var r = (function(e) {
        for (var t in rn) {
          var n = rn[t],
            r = n.length;
          if (e.substring(0, r) === n)
            return {
              alg: t,
              hash: e.substring(r)
            };
        }
        return [];
      })(
        n
        .modPowInt(this.e, this.n)
        .toString(16)
        .replace(/^1f+00/, "")
      );
      if (0 === r.length) return !1;
      if (!rr.hasOwnProperty(r.alg))
        throw Error("Hashing algorithm is not supported.");
      var i = rr[r.alg](e).toString();
      return r.hash === i;
    };
    for (
      var ro = [],
        ra = [],
        rs = "undefined" != typeof Uint8Array ? Uint8Array : Array,
        rl =
        "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/",
        ru = 0; ru < 64;
      ++ru
    )
      (ro[ru] = rl[ru]), (ra[rl.charCodeAt(ru)] = ru);
    (ra["-".charCodeAt(0)] = 62), (ra["_".charCodeAt(0)] = 63);
    var rc = function(e) {
      var t,
        n,
        r = (function(e) {
          var t = e.length;
          if (t % 4 > 0)
            throw Error("Invalid string. Length must be a multiple of 4");
          var n = e.indexOf("=");
          return -1 === n && (n = t), [n, n === t ? 0 : 4 - (n % 4)];
        })(e),
        i = r[0],
        o = r[1],
        a = new rs((3 * (i + o)) / 4 - o),
        s = 0,
        l = o > 0 ? i - 4 : i;
      for (n = 0; n < l; n += 4)
        (t =
          (ra[e.charCodeAt(n)] << 18) |
          (ra[e.charCodeAt(n + 1)] << 12) |
          (ra[e.charCodeAt(n + 2)] << 6) |
          ra[e.charCodeAt(n + 3)]),
        (a[s++] = (t >> 16) & 255),
        (a[s++] = (t >> 8) & 255),
        (a[s++] = 255 & t);
      return (
        2 === o &&
        ((t = (ra[e.charCodeAt(n)] << 2) | (ra[e.charCodeAt(n + 1)] >> 4)),
          (a[s++] = 255 & t)),
        1 === o &&
        ((t =
            (ra[e.charCodeAt(n)] << 10) |
            (ra[e.charCodeAt(n + 1)] << 4) |
            (ra[e.charCodeAt(n + 2)] >> 2)),
          (a[s++] = (t >> 8) & 255),
          (a[s++] = 255 & t)),
        a
      );
    };

    function rp(e) {
      var t = e.length % 4;
      return 0 === t ? e : e + Array(4 - t + 1).join("=");
    }

    function rd(e) {
      return decodeURIComponent(
        (function(e) {
          for (var t = "", n = 0; n < e.length; n++)
            t += String.fromCharCode(e[n]);
          return t;
        })(rc((e = rp(e).replace(/\-/g, "+").replace(/_/g, "/"))))
        .split("")
        .map(function(e) {
          return "%" + ("00" + e.charCodeAt(0).toString(16)).slice(-2);
        })
        .join("")
      );
    }

    function rf(e) {
      return (function(e) {
        for (var t = "", n = 0; n < e.length; n++) {
          var r = e[n].toString(16);
          t += 2 === r.length ? r : "0" + r;
        }
        return t;
      })(rc(rp(e)));
    }
    var rh = n4(function(e) {
      var t;
      (t = function() {
        return function() {
          return (function(e) {
            var t = [];
            if (0 === e.length) return "";
            if ("string" != typeof e[0])
              throw TypeError("Url must be a string. Received " + e[0]);
            if (e[0].match(/^[^/:]+:\/*$/) && e.length > 1) {
              var n = e.shift();
              e[0] = n + e[0];
            }
            e[0] = e[0].match(/^file:\/\/\//) ?
              e[0].replace(/^([^/:]+):\/*/, "$1:///") :
              e[0].replace(/^([^/:]+):\/*/, "$1://");
            for (var r = 0; r < e.length; r++) {
              var i = e[r];
              if ("string" != typeof i)
                throw TypeError("Url must be a string. Received " + i);
              "" !== i &&
                (r > 0 && (i = i.replace(/^[\/]+/, "")),
                  (i = i.replace(/[\/]+$/, r < e.length - 1 ? "" : "/")),
                  t.push(i));
            }
            var o = t.join("/"),
              a = (o = o.replace(/\/(\?|&|#[^!])/g, "$1")).split("?");
            return a.shift() + (a.length > 0 ? "?" : "") + a.join("&");
          })(
            "object" == typeof arguments[0] ?
            arguments[0] : [].slice.call(arguments)
          );
        };
      }),
      e.exports ? (e.exports = t()) : (n3.urljoin = t());
    });

    function rm(e) {
      if (e.ok) return e.json();
      var t = Error(e.statusText);
      return (t.response = e), Promise.reject(t);
    }

    function ry(e) {
      (this.name = "ConfigurationError"), (this.message = e || "");
    }

    function rg(e) {
      (this.name = "TokenValidationError"), (this.message = e || "");
    }
    (ry.prototype = Error.prototype), (rg.prototype = Error.prototype);
    var rv = (function() {
      function e() {}
      var t = e.prototype;
      return (
        (t.get = function() {
          return null;
        }),
        (t.has = function() {
          return null;
        }),
        (t.set = function() {
          return null;
        }),
        e
      );
    })();
    n5.polyfill();
    var rb = "RS256",
      rw = function(e) {
        return "number" == typeof e;
      },
      rx = function() {
        return new Date();
      };

    function rS(e) {
      var t = e || {};
      if (
        ((this.jwksCache = t.jwksCache || new rv()),
          (this.expectedAlg = t.expectedAlg || "RS256"),
          (this.issuer = t.issuer),
          (this.audience = t.audience),
          (this.leeway = 0 === t.leeway ? 0 : t.leeway || 60),
          (this.jwksURI = t.jwksURI),
          (this.maxAge = t.maxAge),
          (this.__clock = "function" == typeof t.__clock ? t.__clock : rx),
          this.leeway < 0 || this.leeway > 300)
      )
        throw new ry(
          "The leeway should be positive and lower than five minutes."
        );
      if (rb !== this.expectedAlg)
        throw new ry(
          'Signature algorithm of "' +
          this.expectedAlg +
          '" is not supported. Expected the ID token to be signed with "' +
          rb +
          '".'
        );
    }

    function rk(e, t) {
      this.plugins = t;
      for (var n = 0; n < this.plugins.length; n++) {
        if (this.plugins[n].version !== nC.raw) {
          var r = "";
          throw (
            (this.plugins[n].constructor &&
              this.plugins[n].constructor.name &&
              (r = this.plugins[n].constructor.name),
              Error(
                "Plugin " +
                r +
                " version (" +
                this.plugins[n].version +
                ") is not compatible with the SDK version (" +
                nC.raw +
                ")"
              ))
          );
        }
        this.plugins[n].setWebAuth(e);
      }
    }
    (rS.prototype.verify = function(e, t, n) {
      if ((!n && t && "function" == typeof t && ((n = t), (t = void 0)), !e))
        return n(new rg("ID token is required but missing"), null);
      var r = this.decode(e);
      if (r instanceof Error)
        return n(new rg("ID token could not be decoded"), null);
      var i = r.encoded.header + "." + r.encoded.payload,
        o = rf(r.encoded.signature),
        a = r.header.alg,
        s = r.header.kid,
        l = r.payload.aud,
        u = r.payload.sub,
        c = r.payload.iss,
        p = r.payload.exp,
        d = r.payload.nbf,
        f = r.payload.iat,
        h = r.payload.azp,
        m = r.payload.auth_time,
        y = r.payload.nonce,
        g = this.__clock(),
        v = this;
      if (v.expectedAlg !== a)
        return n(
          new rg(
            'Signature algorithm of "' +
            a +
            '" is not supported. Expected the ID token to be signed with "' +
            rb +
            '".'
          ),
          null
        );
      this.getRsaVerifier(c, s, function(e, a) {
        if (e) return n(e, null);
        if (!a.verify(i, o))
          return n(new rg("Invalid ID token signature."), null);
        if (!c || "string" != typeof c)
          return n(
            new rg(
              "Issuer (iss) claim must be a string present in the ID token"
            ),
            null
          );
        if (v.issuer !== c)
          return n(
            new rg(
              'Issuer (iss) claim mismatch in the ID token, expected "' +
              v.issuer +
              '", found "' +
              c +
              '"'
            ),
            null
          );
        if (!u || "string" != typeof u)
          return n(
            new rg(
              "Subject (sub) claim must be a string present in the ID token"
            ),
            null
          );
        if (!l || ("string" != typeof l && !Array.isArray(l)))
          return n(
            new rg(
              "Audience (aud) claim must be a string or array of strings present in the ID token"
            ),
            null
          );
        if (Array.isArray(l) && !l.includes(v.audience))
          return n(
            new rg(
              'Audience (aud) claim mismatch in the ID token; expected "' +
              v.audience +
              '" but was not one of "' +
              l.join(", ") +
              '"'
            ),
            null
          );
        if ("string" == typeof l && v.audience !== l)
          return n(
            new rg(
              'Audience (aud) claim mismatch in the ID token; expected "' +
              v.audience +
              '" but found "' +
              l +
              '"'
            ),
            null
          );
        if (t) {
          if (!y || "string" != typeof y)
            return n(
              new rg(
                "Nonce (nonce) claim must be a string present in the ID token"
              ),
              null
            );
          if (y !== t)
            return n(
              new rg(
                'Nonce (nonce) claim value mismatch in the ID token; expected "' +
                t +
                '", found "' +
                y +
                '"'
              ),
              null
            );
        }
        if (Array.isArray(l) && l.length > 1) {
          if (!h || "string" != typeof h)
            return n(
              new rg(
                "Authorized Party (azp) claim must be a string present in the ID token when Audience (aud) claim has multiple values"
              ),
              null
            );
          if (h !== v.audience)
            return n(
              new rg(
                'Authorized Party (azp) claim mismatch in the ID token; expected "' +
                v.audience +
                '", found "' +
                h +
                '"'
              ),
              null
            );
        }
        if (!p || !rw(p))
          return n(
            new rg(
              "Expiration Time (exp) claim must be a number present in the ID token"
            ),
            null
          );
        if (!f || !rw(f))
          return n(
            new rg(
              "Issued At (iat) claim must be a number present in the ID token"
            ),
            null
          );
        var s = p + v.leeway,
          b = new Date(0);
        if ((b.setUTCSeconds(s), g > b))
          return n(
            new rg(
              'Expiration Time (exp) claim error in the ID token; current time "' +
              g +
              '" is after expiration time "' +
              b +
              '"'
            ),
            null
          );
        if (d && rw(d)) {
          var w = d - v.leeway,
            x = new Date(0);
          if ((x.setUTCSeconds(w), g < x))
            return n(
              new rg(
                'Not Before Time (nbf) claim error in the ID token; current time "' +
                g +
                '" is before the not before time "' +
                x +
                '"'
              ),
              null
            );
        }
        if (v.maxAge) {
          if (!m || !rw(m))
            return n(
              new rg(
                "Authentication Time (auth_time) claim must be a number present in the ID token when Max Age (max_age) is specified"
              ),
              null
            );
          var S = m + v.maxAge + v.leeway,
            k = new Date(0);
          if ((k.setUTCSeconds(S), g > k))
            return n(
              new rg(
                'Authentication Time (auth_time) claim in the ID token indicates that too much time has passed since the last end-user authentication. Current time "' +
                g +
                '" is after last auth time at "' +
                k +
                '"'
              ),
              null
            );
        }
        return n(null, r.payload);
      });
    }),
    (rS.prototype.getRsaVerifier = function(e, t, n) {
      var r = this,
        i = e + t;
      Promise.resolve(this.jwksCache.has(i))
        .then(function(n) {
          var o;
          return n ?
            r.jwksCache.get(i) :
            ("undefined" == fetch ?
              function(e, t) {
                return (
                  (t = t || {}),
                  new Promise(function(n, r) {
                    var i = new XMLHttpRequest(),
                      o = [],
                      a = [],
                      s = {},
                      l = function() {
                        return {
                          ok: 2 == ((i.status / 100) | 0),
                          statusText: i.statusText,
                          status: i.status,
                          url: i.responseURL,
                          text: function() {
                            return Promise.resolve(i.responseText);
                          },
                          json: function() {
                            return Promise.resolve(i.responseText).then(
                              JSON.parse
                            );
                          },
                          blob: function() {
                            return Promise.resolve(
                              new Blob([i.response])
                            );
                          },
                          clone: l,
                          headers: {
                            keys: function() {
                              return o;
                            },
                            entries: function() {
                              return a;
                            },
                            get: function(e) {
                              return s[e.toLowerCase()];
                            },
                            has: function(e) {
                              return e.toLowerCase() in s;
                            },
                          },
                        };
                      };
                    for (var u in (i.open(t.method || "get", e, !0),
                        (i.onload = function() {
                          i
                            .getAllResponseHeaders()
                            .replace(
                              /^(.*?):[^\S\n]*([\s\S]*?)$/gm,
                              function(e, t, n) {
                                o.push((t = t.toLowerCase())),
                                  a.push([t, n]),
                                  (s[t] = s[t] ? s[t] + "," + n : n);
                              }
                            ),
                            n(l());
                        }),
                        (i.onerror = r),
                        (i.withCredentials = "include" == t.credentials),
                        t.headers))
                      i.setRequestHeader(u, t.headers[u]);
                    i.send(t.body || null);
                  })
                );
              } :
              fetch)(
              (o = {
                jwksURI: r.jwksURI,
                iss: e,
                kid: t
              }).jwksURI ||
              rh(o.iss, ".well-known", "jwks.json")
            )
            .then(rm)
            .then(function(e) {
              var t,
                n,
                r,
                i = null;
              for (t = 0; t < e.keys.length && null === i; t++)
                (n = e.keys[t]).kid === o.kid && (i = n);
              if (!i)
                throw Error(
                  'Could not find a public key for Key ID (kid) "' +
                  o.kid +
                  '"'
                );
              return {
                modulus: rf((r = i).n),
                exp: rf(r.e)
              };
            })
            .catch(function(e) {
              throw e;
            });
        })
        .then(function(e) {
          if (!e || !e.modulus || !e.exp)
            throw Error("Empty keyInfo in response");
          return Promise.resolve(r.jwksCache.set(i, e)).then(function() {
            n && n(null, new ri(e.modulus, e.exp));
          });
        })
        .catch(function(e) {
          n && n(e);
        });
    }),
    (rS.prototype.decode = function(e) {
      var t,
        n,
        r = e.split(".");
      if (3 !== r.length) return new rg("Cannot decode a malformed JWT");
      try {
        (t = JSON.parse(rd(r[0]))), (n = JSON.parse(rd(r[1])));
      } catch (e) {
        return new rg("Token header or payload is not valid JSON");
      }
      return {
        header: t,
        payload: n,
        encoded: {
          header: r[0],
          payload: r[1],
          signature: r[2]
        },
      };
    }),
    (rS.prototype.validateAccessToken = function(e, t, n, r) {
      if (this.expectedAlg !== t)
        return r(
          new rg(
            'Signature algorithm of "' +
            t +
            '" is not supported. Expected "' +
            this.expectedAlg +
            '"'
          )
        );
      var i,
        o = n9(e),
        a = re.stringify(o),
        s = a.substring(0, a.length / 2),
        l = re.parse(s);
      return r(
        ((i = {
            "+": "-",
            "/": "_",
            "=": ""
          }),
          n7.stringify(l).replace(/[+/=]/g, function(e) {
            return i[e];
          }) !== n ?
          new rg("Invalid access_token") :
          null)
      );
    }),
    (rk.prototype.get = function(e) {
      for (var t = 0; t < this.plugins.length; t++)
        if (this.plugins[t].supports(e)) return this.plugins[t].init();
      return null;
    });
    var r_ = {
      randomString: function(e) {
        var t = new Uint8Array(e),
          n = [],
          r =
          "0123456789ABCDEFGHIJKLMNOPQRSTUVXYZabcdefghijklmnopqrstuvwxyz-._~",
          i = nB.getWindow().crypto || nB.getWindow().msCrypto;
        if (!i) return null;
        for (var o = i.getRandomValues(t), a = 0; a < o.length; a++)
          n.push(r[o[a] % r.length]);
        return n.join("");
      },
    };

    function rT(e) {
      var t = e.transaction || {};
      (this.namespace = t.namespace || "com.auth0.auth."),
      (this.keyLength = t.keyLength || 32),
      (this.stateExpiration = e.stateExpiration ?
        e.stateExpiration / 60 / 24 :
        1 / 48),
      (this.storage = new nX(e)),
      (this.options = e);
    }

    function rE(e) {
      if (
        ((this.url = e.url),
          (this.callback = e.callback),
          (this.timeout = e.timeout || 6e4),
          (this.timeoutCallback = e.timeoutCallback || null),
          (this.eventListenerType = e.eventListenerType || "message"),
          (this.iframe = null),
          (this.timeoutHandle = null),
          (this._destroyTimeout = null),
          (this.transientMessageEventListener = null),
          (this.proxyEventListener = null),
          (this.eventValidator = e.eventValidator || {
            isValid: function() {
              return !0;
            },
          }),
          "function" != typeof this.callback)
      )
        throw Error("options.callback must be a function");
    }

    function rC(e) {
      (this.webAuth = e), (this.warn = new nK(e.baseOptions));
    }

    function rP(e, t) {
      (this.webAuth = e),
      (this.baseOptions = t),
      (this.request = new nV(t)),
      (this.webMessageHandler = new rC(e)),
      (this.storage = new nX(t));
    }

    function rO(e, t) {
      return [
        "co/verifier",
        encodeURIComponent(e),
        encodeURIComponent(t),
      ].join("/");
    }

    function rA(e, t) {
      (this.webAuth = e),
      (this.baseOptions = t),
      (this.crossOriginAuthentication = new rP(e, this.baseOptions)),
      (this.warn = new nK({
        disableWarnings: !!t._disableDeprecationWarnings,
      }));
    }
    (rT.prototype.process = function(e) {
      if (!e.responseType) throw Error("responseType is required");
      var t = e.realm || e.connection,
        n = -1 !== e.responseType.indexOf("id_token"),
        r = this.generateTransaction(
          e.appState,
          e.state,
          e.nonce,
          t,
          n,
          e.organization
        );
      return (
        e.state || (e.state = r.state),
        n && !e.nonce && (e.nonce = r.nonce),
        e
      );
    }),
    (rT.prototype.generateTransaction = function(e, t, n, r, i, o) {
      if (
        ((t = t || r_.randomString(this.keyLength)),
          (n = n || (i ? r_.randomString(this.keyLength) : null)),
          nB.getWindow().location.host !== this.options.domain)
      ) {
        var a = {
          nonce: n,
          appState: e,
          state: t,
          lastUsedConnection: r
        };
        o && (a.organization = o),
          this.storage.setItem(this.namespace + t, a, {
            expires: this.stateExpiration,
          });
      }
      return {
        state: t,
        nonce: n
      };
    }),
    (rT.prototype.getStoredTransaction = function(e) {
      var t;
      return (
        (t = this.storage.getItem(this.namespace + e)),
        this.clearTransaction(e),
        t
      );
    }),
    (rT.prototype.clearTransaction = function(e) {
      this.storage.removeItem(this.namespace + e);
    }),
    (rE.prototype.init = function() {
      var e = this,
        t = nB.getWindow();
      switch (
        ((this.iframe = t.document.createElement("iframe")),
          (this.iframe.style.display = "none"),
          (this.proxyEventListener = function(t) {
            e.eventListener(t);
          }),
          this.eventListenerType)
      ) {
        case "message":
          this.eventSourceObject = t;
          break;
        case "load":
          this.eventSourceObject = this.iframe;
          break;
        default:
          throw Error(
            "Unsupported event listener type: " + this.eventListenerType
          );
      }
      this.eventSourceObject.addEventListener(
          this.eventListenerType,
          this.proxyEventListener,
          !1
        ),
        t.document.body.appendChild(this.iframe),
        (this.iframe.src = this.url),
        (this.timeoutHandle = setTimeout(function() {
          e.timeoutHandler();
        }, this.timeout));
    }),
    (rE.prototype.eventListener = function(e) {
      var t = {
        event: e,
        sourceObject: this.eventSourceObject
      };
      this.eventValidator.isValid(t) && (this.destroy(), this.callback(t));
    }),
    (rE.prototype.timeoutHandler = function() {
      this.destroy(), this.timeoutCallback && this.timeoutCallback();
    }),
    (rE.prototype.destroy = function() {
      var e = this;
      clearTimeout(this.timeoutHandle),
        (this._destroyTimeout = setTimeout(function() {
          e.eventSourceObject.removeEventListener(
              e.eventListenerType,
              e.proxyEventListener,
              !1
            ),
            e.iframe.parentNode &&
            e.iframe.parentNode.removeChild(e.iframe);
        }, 0));
    }),
    (rC.prototype.run = function(e, t) {
      var n = this;
      (e.responseMode = "web_message"), (e.prompt = "none");
      var r = nB.getOrigin(),
        i = nI.getOriginFromUrl(e.redirectUri);
      if (i && r !== i)
        return t({
          error: "origin_mismatch",
          error_description: "The redirectUri's origin (" +
            i +
            ") should match the window's origin (" +
            r +
            ").",
        });
      !(function(e, t, n) {
        new rE({
          url: e,
          eventListenerType: "message",
          callback: function(e) {
            n(null, e);
          },
          timeout: t.timeout,
          eventValidator: {
            isValid: function(e) {
              return !(
                !e.event.data ||
                "authorization_response" !== e.event.data.type ||
                t.state !== e.event.data.response.state
              );
            },
          },
          timeoutCallback: function() {
            n({
              error: "timeout",
              error_description: "Timeout during executing web_message communication",
              state: t.state,
            });
          },
        }).init();
      })(this.webAuth.client.buildAuthorizeUrl(e), e, function(r, i) {
        var o = r;
        if (
          (!r && i.event.data.response.error && (o = i.event.data.response),
            !o)
        ) {
          var a = i.event.data.response;
          return n.webAuth.validateAuthenticationResponse(e, a, t);
        }
        return (
          "consent_required" === o.error &&
          "localhost" === nB.getWindow().location.hostname &&
          n.warn.warning(
            "Consent Required. Consent can't be skipped on localhost. Read more here: https://auth0.com/docs/api-auth/user-consent#skipping-consent-for-first-party-clients"
          ),
          n.webAuth.transactionManager.clearTransaction(o.state),
          t(nI.pick(o, ["error", "error_description"]))
        );
      });
    }),
    (rP.prototype.login = function(e, t) {
      var n = this,
        r = en(this.baseOptions.rootUrl, "/co/authenticate");
      (e.username = e.username || e.email), delete e.email;
      var i = {
        client_id: e.clientID || this.baseOptions.clientID,
        username: e.username,
      };
      e.password && (i.password = e.password), e.otp && (i.otp = e.otp);
      var o = e.realm || this.baseOptions.realm;
      if (o) {
        var a =
          e.credentialType ||
          this.baseOptions.credentialType ||
          "http://auth0.com/oauth/grant-type/password-realm";
        (i.realm = o), (i.credential_type = a);
      } else i.credential_type = "password";
      this.request
        .post(r)
        .withCredentials()
        .send(i)
        .end(function(r, i) {
          if (r) {
            var o = (r.response && r.response.body) || {
              error: "request_error",
              error_description: JSON.stringify(r),
            };
            return nZ(t, {
              forceLegacyError: !0
            })(o);
          }

          function a() {
            var r = !0 === e.popup;
            e = nI.blacklist(e, [
              "password",
              "credentialType",
              "otp",
              "popup",
              "onRedirecting",
            ]);
            var o = nI.merge(e).with({
                loginTicket: i.body.login_ticket
              }),
              a = rO(n.baseOptions.rootUrl, i.body.co_id);
            n.storage.setItem(a, i.body.co_verifier, {
                expires: 1 / 96
              }),
              r ?
              n.webMessageHandler.run(
                o,
                nZ(t, {
                  forceLegacyError: !0
                })
              ) :
              n.webAuth.authorize(o);
          }
          "function" == typeof e.onRedirecting ? e.onRedirecting(a) : a();
        });
    }),
    (rP.prototype.callback = function() {
      var e = decodeURIComponent(
          (function(e) {
            var t = ("&" + nB.getWindow().location.hash.substring(1)).split(
              "&" + e + "="
            );
            if (2 === t.length) return t.pop().split("&").shift();
          })("origin")
        ),
        t = nB.getWindow(),
        n = this;
      t.addEventListener("message", function(e) {
          if ("co_verifier_request" === e.data.type) {
            var t = rO(e.origin, e.data.request.id),
              r = (function(e, t) {
                try {
                  var n = e.getItem(t);
                  return e.removeItem(t), n || "";
                } catch (e) {
                  return "";
                }
              })(n.storage, t);
            e.source.postMessage({
                type: "co_verifier_response",
                response: {
                  verifier: r
                }
              },
              e.origin
            );
          }
        }),
        t.parent.postMessage({
          type: "ready"
        }, e);
    }),
    (rA.prototype.loginWithCredentials = function(e, t) {
      (e.realm = e.realm || e.connection),
      delete e.connection,
        this.crossOriginAuthentication.login(e, t);
    }),
    (rA.prototype.signupAndLogin = function(e, t) {
      var n = this;
      return this.webAuth.client.dbConnection.signup(e, function(r) {
        return r ?
          t(r) :
          ((e.realm = e.realm || e.connection),
            delete e.connection,
            n.webAuth.login(e, t));
      });
    });
    var rj = et(function(e) {
        var t = (function() {
          function e(e, t, n) {
            e.attachEvent ?
              e.attachEvent("on" + t, n) :
              e.addEventListener && e.addEventListener(t, n, !1);
          }

          function t(e, t, n) {
            e.detachEvent ?
              e.detachEvent("on" + t, n) :
              e.removeEventListener && e.removeEventListener(t, n, !1);
          }

          function n(e) {
            /^https?:\/\//.test(e) || (e = window.location.href);
            var t = /^(https?:\/\/[\-_a-zA-Z\.0-9:]+)/.exec(e);
            return t ? t[1] : e;
          }
          var r = (function() {
            if ("undefined" == typeof navigator) return !1;
            var e = -1,
              t = navigator.userAgent;
            return (
              "Microsoft Internet Explorer" === navigator.appName ?
              null != RegExp("MSIE ([0-9]{1,}[.0-9]{0,})").exec(t) &&
              (e = parseFloat(RegExp.$1)) :
              t.indexOf("Trident") > -1 &&
              null !== RegExp("rv:([0-9]{2,2}[.0-9]{0,})").exec(t) &&
              (e = parseFloat(RegExp.$1)),
              e >= 8
            );
          })();
          return "undefined" != typeof window &&
            window.JSON &&
            window.JSON.stringify &&
            window.JSON.parse &&
            window.postMessage ? {
              open: function(i, o) {
                if (!o) throw "missing required callback argument";
                i.url || (a = "missing required 'url' parameter"),
                  i.relay_url ||
                  (a = "missing required 'relay_url' parameter"),
                  a &&
                  setTimeout(function() {
                    o(a);
                  }, 0),
                  i.window_name || (i.window_name = null),
                  (i.window_features &&
                    !(function() {
                      try {
                        var e = navigator.userAgent;
                        return (
                          -1 != e.indexOf("Fennec/") ||
                          (-1 != e.indexOf("Firefox/") &&
                            -1 != e.indexOf("Android"))
                        );
                      } catch (e) {}
                      return !1;
                    })()) ||
                  (i.window_features = void 0);
                var a,
                  s,
                  l,
                  u = i.origin || n(i.url);
                if (u !== n(i.relay_url))
                  return setTimeout(function() {
                    o(
                      "invalid arguments: origin of url and relay_url must match"
                    );
                  }, 0);
                r &&
                  ((s = document.createElement("iframe")).setAttribute(
                      "src",
                      i.relay_url
                    ),
                    (s.style.display = "none"),
                    s.setAttribute("name", "__winchan_relay_frame"),
                    document.body.appendChild(s),
                    (l = s.contentWindow));
                var c =
                  i.popup ||
                  window.open(i.url, i.window_name, i.window_features);
                i.popup && (c.location.href = i.url), l || (l = c);
                var p = setInterval(function() {
                    c &&
                      c.closed &&
                      (f(),
                        o && (o("User closed the popup window"), (o = null)));
                  }, 500),
                  d = JSON.stringify({
                    a: "request",
                    d: i.params
                  });

                function f() {
                  if (
                    (s && document.body.removeChild(s),
                      (s = void 0),
                      p && (p = clearInterval(p)),
                      t(window, "message", h),
                      t(window, "unload", f),
                      c)
                  )
                    try {
                      c.close();
                    } catch (e) {
                      l.postMessage("die", u);
                    }
                  c = l = void 0;
                }

                function h(e) {
                  if (e.origin === u) {
                    try {
                      var t = JSON.parse(e.data);
                    } catch (e) {
                      if (o) return o(e);
                      throw e;
                    }
                    "ready" === t.a ?
                      l.postMessage(d, u) :
                      "error" === t.a ?
                      (f(), o && (o(t.d), (o = null))) :
                      "response" === t.a &&
                      (f(), o && (o(null, t.d), (o = null)));
                  }
                }
                return (
                  e(window, "unload", f),
                  e(window, "message", h), {
                    originalPopup: c,
                    close: f,
                    focus: function() {
                      if (c)
                        try {
                          c.focus();
                        } catch (e) {}
                    },
                  }
                );
              },
              onOpen: function(n) {
                var i = "*",
                  o = r ?
                  (function() {
                    for (
                      var e = window.opener.frames, t = e.length - 1; t >= 0; t--
                    )
                      try {
                        if (
                          e[t].location.protocol ===
                          window.location.protocol &&
                          e[t].location.host === window.location.host &&
                          "__winchan_relay_frame" === e[t].name
                        )
                          return e[t];
                      } catch (e) {}
                  })() :
                  window.opener;
                if (!o) throw "can't find relay frame";

                function a(e) {
                  (e = JSON.stringify(e)),
                  r ? o.doPost(e, i) : o.postMessage(e, i);
                }

                function s(e) {
                  if ("die" === e.data)
                    try {
                      window.close();
                    } catch (e) {}
                }
                e(r ? o : window, "message", function e(r) {
                    var o;
                    try {
                      o = JSON.parse(r.data);
                    } catch (e) {}
                    o &&
                      "request" === o.a &&
                      (t(window, "message", e),
                        (i = r.origin),
                        n &&
                        setTimeout(function() {
                          n(i, o.d, function(e) {
                            (n = void 0), a({
                              a: "response",
                              d: e
                            });
                          });
                        }, 0));
                  }),
                  e(r ? o : window, "message", s);
                try {
                  a({
                    a: "ready"
                  });
                } catch (t) {
                  e(o, "load", function(e) {
                    a({
                      a: "ready"
                    });
                  });
                }
                var l = function() {
                  try {
                    t(r ? o : window, "message", s);
                  } catch (e) {}
                  n && a({
                      a: "error",
                      d: "client closed window"
                    }),
                    (n = void 0);
                  try {
                    window.close();
                  } catch (e) {}
                };
                return (
                  e(window, "unload", l), {
                    detach: function() {
                      t(window, "unload", l);
                    },
                  }
                );
              },
            } : {
              open: function(e, t, n, r) {
                setTimeout(function() {
                  r("unsupported browser");
                }, 0);
              },
              onOpen: function(e) {
                setTimeout(function() {
                  e("unsupported browser");
                }, 0);
              },
            };
        })();
        e.exports && (e.exports = t);
      }),
      rD = {
        extractOrigin: function(e) {
          /^https?:\/\//.test(e) || (e = window.location.href);
          var t = /^(https?:\/\/[-_a-zA-Z.0-9:]+)/.exec(e);
          return t ? t[1] : e;
        },
      };

    function rR() {
      this._current_popup = null;
    }

    function rM(e, t) {
      (this.baseOptions = t),
      (this.baseOptions.popupOrigin = t.popupOrigin),
      (this.client = e.client),
      (this.webAuth = e),
      (this.transactionManager = new rT(this.baseOptions)),
      (this.crossOriginAuthentication = new rP(e, this.baseOptions)),
      (this.warn = new nK({
        disableWarnings: !!t._disableDeprecationWarnings,
      }));
    }

    function rN(e) {
      (this.authenticationUrl = e.authenticationUrl),
      (this.timeout = e.timeout || 6e4),
      (this.handler = null),
      (this.postMessageDataType = e.postMessageDataType || !1),
      (this.postMessageOrigin =
        e.postMessageOrigin ||
        nB.getWindow().location.origin ||
        nB.getWindow().location.protocol +
        "//" +
        nB.getWindow().location.hostname +
        (nB.getWindow().location.port ?
          ":" + nB.getWindow().location.port :
          ""));
    }

    function rL(e) {
      (this.baseOptions = e),
      (this.request = new nV(e)),
      (this.transactionManager = new rT(this.baseOptions));
    }

    function rI(e, t) {
      (this.baseOptions = t),
      (this.client = e),
      (this.baseOptions.universalLoginPage = !0),
      (this.request = new nV(this.baseOptions)),
      (this.warn = new nK({
        disableWarnings: !!t._disableDeprecationWarnings,
      }));
    }
    (rR.prototype.calculatePosition = function(e) {
      var t = e.width || 500,
        n = e.height || 600,
        r = nB.getWindow(),
        i = void 0 !== r.screenX ? r.screenX : r.screenLeft,
        o = void 0 !== r.screenY ? r.screenY : r.screenTop,
        a =
        void 0 !== r.outerWidth ?
        r.outerWidth :
        r.document.body.clientWidth,
        s =
        void 0 !== r.outerHeight ?
        r.outerHeight :
        r.document.body.clientHeight;
      return {
        width: t,
        height: n,
        left: e.left || i + (a - t) / 2,
        top: e.top || o + (s - n) / 2,
      };
    }),
    (rR.prototype.preload = function(e) {
      var t = this,
        n = nB.getWindow(),
        r = this.calculatePosition(e.popupOptions || {}),
        i = nI.merge(r).with(e.popupOptions),
        o = e.url || "about:blank",
        a = t8.stringify(i, {
          encode: !1,
          delimiter: ","
        });
      return (
        (this._current_popup && !this._current_popup.closed) ||
        ((this._current_popup = n.open(o, "auth0_signup_popup", a)),
          (this._current_popup.kill = function() {
            this.close(), (t._current_popup = null);
          })),
        this._current_popup
      );
    }),
    (rR.prototype.load = function(e, t, n, r) {
      var i = this,
        o = this.calculatePosition(n.popupOptions || {}),
        a = nI.merge(o).with(n.popupOptions),
        s = nI
        .merge({
          url: e,
          relay_url: t,
          window_features: t8.stringify(a, {
            delimiter: ",",
            encode: !1,
          }),
          popup: this._current_popup,
        })
        .with(n),
        l = rj.open(s, function(e, t) {
          if (!e || "SyntaxError" !== e.name)
            return (i._current_popup = null), r(e, t);
        });
      return l.focus(), l;
    }),
    (rM.prototype.buildPopupHandler = function() {
      var e = this.baseOptions.plugins.get("popup.getPopupHandler");
      return e ? e.getPopupHandler() : new rR();
    }),
    (rM.prototype.preload = function(e) {
      e = e || {};
      var t = this.buildPopupHandler();
      return t.preload(e), t;
    }),
    (rM.prototype.getPopupHandler = function(e, t) {
      return e.popupHandler ?
        e.popupHandler :
        t ?
        this.preload(e) :
        this.buildPopupHandler();
    }),
    (rM.prototype.callback = function(e) {
      var t = this,
        n = nB.getWindow(),
        r =
        (e = e || {}).popupOrigin ||
        this.baseOptions.popupOrigin ||
        nB.getOrigin();
      n.opener ?
        rj.onOpen(function(n, i, o) {
          if (n !== r)
            return o({
              error: "origin_mismatch",
              error_description: "The popup's origin (" +
                n +
                ") should match the `popupOrigin` parameter (" +
                r +
                ").",
            });
          t.webAuth.parseHash(e || {}, function(e, t) {
            return o(e || t);
          });
        }) :
        (n.doPost = function(e) {
          n.parent && n.parent.postMessage(e, r);
        });
    }),
    (rM.prototype.authorize = function(e, t) {
      var n,
        r,
        i = {},
        o = this.baseOptions.plugins.get("popup.authorize"),
        a = nI
        .merge(this.baseOptions, [
          "clientID",
          "scope",
          "domain",
          "audience",
          "tenant",
          "responseType",
          "redirectUri",
          "_csrf",
          "state",
          "_intstate",
          "nonce",
          "organization",
          "invitation",
        ])
        .with(nI.blacklist(e, ["popupHandler"]));
      return (
        nD.check(
          a, {
            type: "object",
            message: "options parameter is not valid"
          }, {
            responseType: {
              type: "string",
              message: "responseType option is required",
            },
          }
        ),
        (r = en(this.baseOptions.rootUrl, "relay")),
        e.owp ?
        (a.owp = !0) :
        ((i.origin = rD.extractOrigin(a.redirectUri)),
          (r = a.redirectUri)),
        e.popupOptions &&
        (i.popupOptions = nI.pick(e.popupOptions, [
          "width",
          "height",
          "top",
          "left",
        ])),
        o && (a = o.processParams(a)),
        ((a = this.transactionManager.process(a)).scope =
          a.scope || "openid profile email"),
        delete a.domain,
        (n = this.client.buildAuthorizeUrl(a)),
        this.getPopupHandler(e).load(
          n,
          r,
          i,
          nZ(t, {
            keepOriginalCasing: !0
          })
        )
      );
    }),
    (rM.prototype.loginWithCredentials = function(e, t) {
      (e.realm = e.realm || e.connection),
      (e.popup = !0),
      (e = nI
        .merge(this.baseOptions, [
          "redirectUri",
          "responseType",
          "state",
          "nonce",
          "timeout",
        ])
        .with(nI.blacklist(e, ["popupHandler", "connection"]))),
      (e = this.transactionManager.process(e)),
      this.crossOriginAuthentication.login(e, t);
    }),
    (rM.prototype.passwordlessVerify = function(e, t) {
      var n = this;
      return this.client.passwordless.verify(
        nI.blacklist(e, ["popupHandler"]),
        function(r) {
          if (r) return t(r);
          (e.username = e.phoneNumber || e.email),
          (e.password = e.verificationCode),
          delete e.email,
            delete e.phoneNumber,
            delete e.verificationCode,
            delete e.type,
            n.client.loginWithResourceOwner(e, t);
        }
      );
    }),
    (rM.prototype.signupAndLogin = function(e, t) {
      var n = this;
      return this.client.dbConnection.signup(e, function(r) {
        if (r) return t(r);
        n.loginWithCredentials(e, t);
      });
    }),
    (rN.create = function(e) {
      return new rN(e);
    }),
    (rN.prototype.login = function(e, t) {
      (this.handler = new rE({
        auth0: this.auth0,
        url: this.authenticationUrl,
        eventListenerType: e ? "message" : "load",
        callback: this.getCallbackHandler(t, e),
        timeout: this.timeout,
        eventValidator: this.getEventValidator(),
        timeoutCallback: function() {
          t(
            null,
            "#error=timeout&error_description=Timeout+during+authentication+renew."
          );
        },
        usePostMessage: e || !1,
      })),
      this.handler.init();
    }),
    (rN.prototype.getEventValidator = function() {
      var e = this;
      return {
        isValid: function(t) {
          switch (t.event.type) {
            case "message":
              return (
                t.event.origin === e.postMessageOrigin &&
                t.event.source === e.handler.iframe.contentWindow &&
                (!1 === e.postMessageDataType ||
                  (t.event.data.type &&
                    t.event.data.type === e.postMessageDataType))
              );
            case "load":
              if (
                "about:" === t.sourceObject.contentWindow.location.protocol
              )
                return !1;
            default:
              return !0;
          }
        },
      };
    }),
    (rN.prototype.getCallbackHandler = function(e, t) {
      return function(n) {
        e(
          null,
          t ?
          "object" == typeof n.event.data && n.event.data.hash ?
          n.event.data.hash :
          n.event.data :
          n.sourceObject.contentWindow.location.hash
        );
      };
    }),
    (rL.prototype.login = function(e, t) {
      var n, r;
      return (
        (n = en(this.baseOptions.rootUrl, "usernamepassword", "login")),
        (e.username = e.username || e.email),
        (e = nI.blacklist(e, ["email", "onRedirecting"])),
        (r = nI
          .merge(this.baseOptions, [
            "clientID",
            "redirectUri",
            "tenant",
            "responseType",
            "responseMode",
            "scope",
            "audience",
          ])
          .with(e)),
        (r = this.transactionManager.process(r)),
        (r = nI.toSnakeCase(r, ["auth0Client"])),
        this.request.post(n).send(r).end(nZ(t))
      );
    }),
    (rL.prototype.callback = function(e) {
      var t,
        n = nB.getDocument();
      ((t = n.createElement("div")).innerHTML = e),
      n.body.appendChild(t).children[0].submit();
    }),
    (rI.prototype.login = function(e, t) {
      if (nB.getWindow().location.host !== this.baseOptions.domain)
        throw Error(
          "This method is meant to be used only inside the Universal Login Page."
        );
      var n,
        r = nI
        .merge(this.baseOptions, [
          "clientID",
          "redirectUri",
          "tenant",
          "responseType",
          "responseMode",
          "scope",
          "audience",
          "_csrf",
          "state",
          "_intstate",
          "nonce",
        ])
        .with(e);
      return (
        nD.check(
          r, {
            type: "object",
            message: "options parameter is not valid"
          }, {
            responseType: {
              type: "string",
              message: "responseType option is required",
            },
          }
        ),
        (n = new rL(this.baseOptions)).login(r, function(r, i) {
          if (r) return t(r);

          function o() {
            n.callback(i);
          }
          if ("function" == typeof e.onRedirecting)
            return e.onRedirecting(function() {
              o();
            });
          o();
        })
      );
    }),
    (rI.prototype.signupAndLogin = function(e, t) {
      var n = this;
      return n.client.client.dbConnection.signup(e, function(r) {
        return r ? t(r) : n.login(e, t);
      });
    }),
    (rI.prototype.getSSOData = function(e, t) {
      var n,
        r = "";
      return (
        "function" == typeof e && ((t = e), (e = !1)),
        nD.check(e, {
          type: "boolean",
          message: "withActiveDirectories parameter is not valid",
        }),
        nD.check(t, {
          type: "function",
          message: "cb parameter is not valid",
        }),
        e &&
        (r =
          "?" +
          t8.stringify({
            ldaps: 1,
            client_id: this.baseOptions.clientID,
          })),
        (n = en(this.baseOptions.rootUrl, "user", "ssodata", r)),
        this.request.get(n, {
          noHeaders: !0
        }).withCredentials().end(nZ(t))
      );
    });
    var rU = function() {},
      rF = rU,
      rV = {
        lang: "en",
        templates: {
          auth0: function(e) {
            var t =
              "code" === e.type ?
              "Enter the code shown above" :
              "Solve the formula shown above";
            return (
              '<div class="captcha-challenge">\n  <img src="' +
              e.image +
              '" />\n  <button type="button" class="captcha-reload">↺</button>\n</div>\n<input type="text" name="captcha"\n  class="form-control captcha-control"\n  placeholder="' +
              t +
              '" />'
            );
          },
          recaptcha_v2: function() {
            return '<div class="recaptcha" ></div><input type="hidden" name="captcha" />';
          },
          recaptcha_enterprise: function() {
            return '<div class="recaptcha" ></div><input type="hidden" name="captcha" />';
          },
          hcaptcha: function() {
            return '<div class="hcaptcha" ></div><input type="hidden" name="captcha" />';
          },
          friendly_captcha: function() {
            return '<div class="friendly-captcha" ></div><input type="hidden" name="captcha" />';
          },
          arkose: function() {
            return '<div class="arkose" ></div><input type="hidden" name="captcha" />';
          },
          auth0_v2: function() {
            return '<div class="auth0_v2" ></div><input type="hidden" name="captcha" />';
          },
          error: function() {
            return '<div class="error" style="color: red;">Error getting the bot detection challenge. Please contact the system administrator.</div>';
          },
        },
      };

    function rz(e, t, n, r) {
      (e.innerHTML = t.templates[n.provider](n)),
      e
        .querySelector(".captcha-reload")
        .addEventListener("click", function(e) {
          e.preventDefault(), r();
        });
    }

    function rB(e) {
      switch (e) {
        case "recaptcha_v2":
          return window.grecaptcha;
        case "recaptcha_enterprise":
          return window.grecaptcha.enterprise;
        case "hcaptcha":
          return window.hcaptcha;
        case "friendly_captcha":
          return window.friendlyChallenge;
        case "arkose":
          return window.arkose;
        case "auth0_v2":
          return window.turnstile;
        default:
          throw Error("Unknown captcha provider");
      }
    }

    function rq(e, t) {
      var n = window.document.createElement("script");
      for (var r in t)
        r.startsWith("data-") ?
        (n.dataset[r.replace("data-", "")] = t[r]) :
        (n[r] = t[r]);
      (n.src = e), window.document.body.appendChild(n);
    }

    function rH(e) {
      window.document
        .querySelectorAll('script[src="' + e + '"]')
        .forEach(function(e) {
          e.remove();
        });
    }

    function rW(e, t, n) {
      var r,
        i = e.hasAttribute("data-wid") && e.getAttribute("data-wid");

      function o(t) {
        e.querySelector('input[name="captcha"]').value = t || "";
      }
      if ("friendly_captcha" === n.provider && window.auth0FCInstance)
        return o(), void window.auth0FCInstance.reset();
      if ("arkose" === n.provider && rB(n.provider))
        return o(), void rB(n.provider).reset();
      if (i) return o(), void rB(n.provider).reset(i);
      switch (((e.innerHTML = t.templates[n.provider](n)), n.provider)) {
        case "recaptcha_enterprise":
        case "recaptcha_v2":
          r = ".recaptcha";
          break;
        case "hcaptcha":
          r = ".hcaptcha";
          break;
        case "friendly_captcha":
          r = ".friendly-captcha";
          break;
        case "arkose":
          r = ".arkose";
          break;
        case "auth0_v2":
          r = ".auth0_v2";
      }
      var a = e.querySelector(r);
      !(function(e, t, n, r) {
        var i =
          t.provider + "Callback_" + Math.floor(1000001 * Math.random()),
          o = {
            async: !0,
            defer: !0
          },
          a = (function(e, t, n, r, i) {
            switch (e) {
              case "recaptcha_v2":
                return (
                  "https://www.recaptcha.net/recaptcha/api.js?hl=" +
                  t +
                  "&onload=" +
                  n
                );
              case "recaptcha_enterprise":
                return (
                  "https://www.recaptcha.net/recaptcha/enterprise.js?render=explicit&hl=" +
                  t +
                  "&onload=" +
                  n
                );
              case "hcaptcha":
                return (
                  "https://js.hcaptcha.com/1/api.js?hl=" + t + "&onload=" + n
                );
              case "friendly_captcha":
                return "https://cdn.jsdelivr.net/npm/friendly-challenge@0.9.12/widget.min.js";
              case "arkose":
                return "https://" + r + ".arkoselabs.com/v2/" + i + "/api.js";
              case "auth0_v2":
                return (
                  "https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit&onload=" +
                  n
                );
              default:
                throw Error("Unknown captcha provider");
            }
          })(t.provider, t.lang, i, t.clientSubdomain, t.siteKey);
        if ("arkose" === t.provider || "auth0_v2" === t.provider) {
          var s = 0;
          (o["data-callback"] = i),
          (o.onerror = function() {
            if (s < 3) return rH(a), rq(a, o), void s++;
            rH(a), r("BYPASS_CAPTCHA");
          }),
          (window[i] = function(e) {
            (window.arkose = e), n(e);
          });
        } else
          (window[i] = function() {
            delete window[i], n();
          }),
          "friendly_captcha" === t.provider && (o.onload = window[i]);
        rq(a, o);
      })(
        0, {
          lang: t.lang,
          provider: n.provider,
          clientSubdomain: n.clientSubdomain,
          siteKey: n.siteKey,
        },
        function(r) {
          var s = rB(n.provider);
          if ("arkose" === n.provider) {
            var l = 0;
            r.setConfig({
              onCompleted: function(e) {
                o(e.token), rF();
              },
              onError: function() {
                l < 3 ?
                  (o(),
                    r.reset(),
                    setTimeout(function() {
                      r.run();
                    }, 500),
                    l++) :
                  o("BYPASS_CAPTCHA");
              },
            });
          } else if ("friendly_captcha" === n.provider)
            window.auth0FCInstance = new s.WidgetInstance(a, {
              sitekey: n.siteKey,
              language: t.lang,
              doneCallback: function(e) {
                o(e);
              },
              errorCallback: function() {
                o();
              },
            });
          else {
            var u = {
              callback: o,
              "expired-callback": function() {
                o();
              },
              "error-callback": function() {
                o();
              },
              sitekey: n.siteKey,
            };
            "auth0_v2" === n.provider &&
              ((l = 0),
                (u.language = t.lang),
                (u.theme = "light"),
                (u.retry = "never"),
                (u["response-field"] = !1),
                (u["error-callback"] = function() {
                  return (
                    l < 3 ?
                    (o(), rB(n.provider).reset(i), l++) :
                    o("BYPASS_CAPTCHA"),
                    !0
                  );
                })),
              (i = s.render(a, u)),
              e.setAttribute("data-wid", i);
          }
        },
        o
      );
    }
    var r$ = function(e, t, n, r) {
        function i(r) {
          (r = r || rU),
          e.getChallenge(function(e, o) {
            return e ?
              ((t.innerHTML = n.templates.error(e)), r(e)) :
              o.required ?
              ((t.style.display = ""),
                "auth0" === o.provider ?
                rz(t, n, o, i) :
                ("recaptcha_v2" !== o.provider &&
                  "recaptcha_enterprise" !== o.provider &&
                  "hcaptcha" !== o.provider &&
                  "friendly_captcha" !== o.provider &&
                  "arkose" !== o.provider &&
                  "auth0_v2" !== o.provider) ||
                rW(t, n, o),
                void("arkose" === o.provider ?
                  r(null, {
                    triggerCaptcha: function(e) {
                      rB(o.provider).run(), (rF = e);
                    },
                  }) :
                  r())) :
              ((t.style.display = "none"), void(t.innerHTML = ""));
          });
        }
        return (
          (n = nI.merge(rV).with(n || {})),
          i(r), {
            reload: i,
            getValue: function() {
              var e = t.querySelector('input[name="captcha"]');
              if (e) return e.value;
            },
          }
        );
      },
      rK = function(e, t, n, r) {
        function i(r) {
          (r = r || rU),
          e.passwordless.getChallenge(function(e, o) {
            return e ?
              ((t.innerHTML = n.templates.error(e)), r(e)) :
              o.required ?
              ((t.style.display = ""),
                "auth0" === o.provider ?
                rz(t, n, o, i) :
                ("recaptcha_v2" !== o.provider &&
                  "recaptcha_enterprise" !== o.provider &&
                  "hcaptcha" !== o.provider &&
                  "friendly_captcha" !== o.provider &&
                  "arkose" !== o.provider &&
                  "auth0_v2" !== o.provider) ||
                rW(t, n, o),
                void("arkose" === o.provider ?
                  r(null, {
                    triggerCaptcha: function(e) {
                      rB(o.provider).run(), (rF = e);
                    },
                  }) :
                  r())) :
              ((t.style.display = "none"), void(t.innerHTML = ""));
          });
        }
        return (
          (n = nI.merge(rV).with(n || {})),
          i(r), {
            reload: i,
            getValue: function() {
              var e = t.querySelector('input[name="captcha"]');
              if (e) return e.value;
            },
          }
        );
      };

    function rQ() {
      return new Date();
    }

    function rX(e) {
      nD.check(
          e, {
            type: "object",
            message: "options parameter is not valid"
          }, {
            domain: {
              type: "string",
              message: "domain option is required"
            },
            clientID: {
              type: "string",
              message: "clientID option is required",
            },
            responseType: {
              optional: !0,
              type: "string",
              message: "responseType is not valid",
            },
            responseMode: {
              optional: !0,
              type: "string",
              message: "responseMode is not valid",
            },
            redirectUri: {
              optional: !0,
              type: "string",
              message: "redirectUri is not valid",
            },
            scope: {
              optional: !0,
              type: "string",
              message: "scope is not valid",
            },
            audience: {
              optional: !0,
              type: "string",
              message: "audience is not valid",
            },
            popupOrigin: {
              optional: !0,
              type: "string",
              message: "popupOrigin is not valid",
            },
            leeway: {
              optional: !0,
              type: "number",
              message: "leeway is not valid",
            },
            plugins: {
              optional: !0,
              type: "array",
              message: "plugins is not valid",
            },
            maxAge: {
              optional: !0,
              type: "number",
              message: "maxAge is not valid",
            },
            stateExpiration: {
              optional: !0,
              type: "number",
              message: "stateExpiration is not valid",
            },
            legacySameSiteCookie: {
              optional: !0,
              type: "boolean",
              message: "legacySameSiteCookie option is not valid",
            },
            _disableDeprecationWarnings: {
              optional: !0,
              type: "boolean",
              message: "_disableDeprecationWarnings option is not valid",
            },
            _sendTelemetry: {
              optional: !0,
              type: "boolean",
              message: "_sendTelemetry option is not valid",
            },
            _telemetryInfo: {
              optional: !0,
              type: "object",
              message: "_telemetryInfo option is not valid",
            },
            _timesToRetryFailedRequests: {
              optional: !0,
              type: "number",
              message: "_timesToRetryFailedRequests option is not valid",
            },
          }
        ),
        e.overrides &&
        nD.check(
          e.overrides, {
            type: "object",
            message: "overrides option is not valid"
          }, {
            __tenant: {
              optional: !0,
              type: "string",
              message: "__tenant option is required",
            },
            __token_issuer: {
              optional: !0,
              type: "string",
              message: "__token_issuer option is required",
            },
            __jwks_uri: {
              optional: !0,
              type: "string",
              message: "__jwks_uri is required",
            },
          }
        ),
        (this.baseOptions = e),
        (this.baseOptions.plugins = new rk(
          this,
          this.baseOptions.plugins || []
        )),
        (this.baseOptions._sendTelemetry = !1 !== this.baseOptions._sendTelemetry ||
          this.baseOptions._sendTelemetry),
        (this.baseOptions._timesToRetryFailedRequests =
          e._timesToRetryFailedRequests ?
          parseInt(e._timesToRetryFailedRequests) :
          0),
        (this.baseOptions.tenant =
          (this.baseOptions.overrides &&
            this.baseOptions.overrides.__tenant) ||
          this.baseOptions.domain.split(".")[0]),
        (this.baseOptions.token_issuer =
          (this.baseOptions.overrides &&
            this.baseOptions.overrides.__token_issuer) ||
          "https://" + this.baseOptions.domain + "/"),
        (this.baseOptions.jwksURI =
          this.baseOptions.overrides &&
          this.baseOptions.overrides.__jwks_uri),
        !1 !== e.legacySameSiteCookie &&
        (this.baseOptions.legacySameSiteCookie = !0),
        (this.transactionManager = new rT(this.baseOptions)),
        (this.client = new rJ(this.baseOptions)),
        (this.redirect = new rA(this, this.baseOptions)),
        (this.popup = new rM(this, this.baseOptions)),
        (this.crossOriginAuthentication = new rP(this, this.baseOptions)),
        (this.webMessageHandler = new rC(this)),
        (this._universalLogin = new rI(this, this.baseOptions)),
        (this.ssodataStorage = new nY(this.baseOptions));
    }

    function rY(e, t) {
      (this.baseOptions = t), (this.request = e);
    }

    function rG(e, t) {
      (this.baseOptions = t), (this.request = e);
    }

    function rJ(e, t) {
      2 == arguments.length ? (this.auth0 = e) : (t = e),
        nD.check(
          t, {
            type: "object",
            message: "options parameter is not valid"
          }, {
            domain: {
              type: "string",
              message: "domain option is required"
            },
            clientID: {
              type: "string",
              message: "clientID option is required",
            },
            responseType: {
              optional: !0,
              type: "string",
              message: "responseType is not valid",
            },
            responseMode: {
              optional: !0,
              type: "string",
              message: "responseMode is not valid",
            },
            redirectUri: {
              optional: !0,
              type: "string",
              message: "redirectUri is not valid",
            },
            scope: {
              optional: !0,
              type: "string",
              message: "scope is not valid",
            },
            audience: {
              optional: !0,
              type: "string",
              message: "audience is not valid",
            },
            _disableDeprecationWarnings: {
              optional: !0,
              type: "boolean",
              message: "_disableDeprecationWarnings option is not valid",
            },
            _sendTelemetry: {
              optional: !0,
              type: "boolean",
              message: "_sendTelemetry option is not valid",
            },
            _telemetryInfo: {
              optional: !0,
              type: "object",
              message: "_telemetryInfo option is not valid",
            },
          }
        ),
        (this.baseOptions = t),
        (this.baseOptions._sendTelemetry = !1 !== this.baseOptions._sendTelemetry ||
          this.baseOptions._sendTelemetry),
        (this.baseOptions.rootUrl =
          this.baseOptions.domain &&
          0 === this.baseOptions.domain.toLowerCase().indexOf("http") ?
          this.baseOptions.domain :
          "https://" + this.baseOptions.domain),
        (this.request = new nV(this.baseOptions)),
        (this.passwordless = new rY(this.request, this.baseOptions)),
        (this.dbConnection = new rG(this.request, this.baseOptions)),
        (this.warn = new nK({
          disableWarnings: !!t._disableDeprecationWarnings,
        })),
        (this.ssodataStorage = new nY(this.baseOptions));
    }

    function rZ(e) {
      nD.check(
          e, {
            type: "object",
            message: "options parameter is not valid"
          }, {
            domain: {
              type: "string",
              message: "domain option is required"
            },
            token: {
              type: "string",
              message: "token option is required"
            },
            _sendTelemetry: {
              optional: !0,
              type: "boolean",
              message: "_sendTelemetry option is not valid",
            },
            _telemetryInfo: {
              optional: !0,
              type: "object",
              message: "_telemetryInfo option is not valid",
            },
          }
        ),
        (this.baseOptions = e),
        (this.baseOptions.headers = {
          Authorization: "Bearer " + this.baseOptions.token,
        }),
        (this.request = new nV(this.baseOptions)),
        (this.baseOptions.rootUrl = en(
          "https://" + this.baseOptions.domain,
          "api",
          "v2"
        ));
    }
    (rX.prototype.parseHash = function(e, t) {
      t || "function" != typeof e ? (e = e || {}) : ((t = e), (e = {}));
      var n,
        r,
        i = void 0 === e.hash ? nB.getWindow().location.hash : e.hash;
      if (
        ((i = i.replace(/^#?\/?/, "")),
          (n = t8.parse(i)).hasOwnProperty("error"))
      )
        return (
          (r = nJ.buildResponse(n.error, n.error_description)),
          n.state && (r.state = n.state),
          t(r)
        );
      if (
        !n.hasOwnProperty("access_token") &&
        !n.hasOwnProperty("id_token") &&
        !n.hasOwnProperty("refresh_token")
      )
        return t(null, null);
      var o = (this.baseOptions.responseType || e.responseType || "").split(
        " "
      );
      return o.length > 0 &&
        -1 !== o.indexOf("token") &&
        !n.hasOwnProperty("access_token") ?
        t(
          nJ.buildResponse(
            "invalid_hash",
            "response_type contains `token`, but the parsed hash does not contain an `access_token` property"
          )
        ) :
        o.length > 0 &&
        -1 !== o.indexOf("id_token") &&
        !n.hasOwnProperty("id_token") ?
        t(
          nJ.buildResponse(
            "invalid_hash",
            "response_type contains `id_token`, but the parsed hash does not contain an `id_token` property"
          )
        ) :
        this.validateAuthenticationResponse(e, n, t);
    }),
    (rX.prototype.validateAuthenticationResponse = function(e, t, n) {
      var r = this;
      e.__enableIdPInitiatedLogin =
        e.__enableIdPInitiatedLogin || e.__enableImpersonation;
      var i = t.state,
        o = this.transactionManager.getStoredTransaction(i),
        a = e.state || (o && o.state) || null,
        s = a === i;
      if (!(!i && !a && e.__enableIdPInitiatedLogin) && !s)
        return n({
          error: "invalid_token",
          errorDescription: "`state` does not match.",
        });
      var l = e.nonce || (o && o.nonce) || null,
        u = o && o.organization,
        c = e.state || (o && o.appState) || null,
        p = function(e, i) {
          var a;
          return e ?
            n(e) :
            (o &&
              o.lastUsedConnection &&
              (i && (a = i.sub),
                r.ssodataStorage.set(o.lastUsedConnection, a)),
              n(null, {
                accessToken: t.access_token || null,
                idToken: t.id_token || null,
                idTokenPayload: i || null,
                appState: c || null,
                refreshToken: t.refresh_token || null,
                state: t.state || null,
                expiresIn: t.expires_in ? parseInt(t.expires_in, 10) : null,
                tokenType: t.token_type || null,
                scope: t.scope || null,
              }));
        };
      return t.id_token ?
        this.validateToken(t.id_token, l, function(e, n) {
          if (!e) {
            if (u) {
              if (0 === u.indexOf("org_")) {
                if (!n.org_id)
                  return p(
                    nJ.invalidToken(
                      "Organization Id (org_id) claim must be a string present in the ID token"
                    )
                  );
                if (n.org_id !== u)
                  return p(
                    nJ.invalidToken(
                      'Organization Id (org_id) claim value mismatch in the ID token; expected "' +
                      u +
                      '", found "' +
                      n.org_id +
                      '"'
                    )
                  );
              } else {
                if (!n.org_name)
                  return p(
                    nJ.invalidToken(
                      "Organization Name (org_name) claim must be a string present in the ID token"
                    )
                  );
                if (n.org_name !== u.toLowerCase())
                  return p(
                    nJ.invalidToken(
                      'Organization Name (org_name) claim value mismatch in the ID token; expected "' +
                      u +
                      '", found "' +
                      n.org_name +
                      '"'
                    )
                  );
              }
            }
            return t.access_token && n.at_hash ?
              new rS().validateAccessToken(
                t.access_token,
                "RS256",
                n.at_hash,
                function(e) {
                  return e ? p(nJ.invalidToken(e.message)) : p(null, n);
                }
              ) :
              p(null, n);
          }
          if (
            "invalid_token" !== e.error ||
            (e.errorDescription &&
              e.errorDescription.indexOf(
                "Nonce (nonce) claim value mismatch in the ID token"
              ) > -1)
          )
            return p(e);
          var i = new rS().decode(t.id_token);
          return "HS256" !== i.header.alg ?
            p(e) :
            (i.payload.nonce || null) !== l ?
            p({
              error: "invalid_token",
              errorDescription: 'Nonce (nonce) claim value mismatch in the ID token; expected "' +
                l +
                '", found "' +
                i.payload.nonce +
                '"',
            }) :
            t.access_token ?
            r.client.userInfo(t.access_token, function(e, t) {
              return e ? p(e) : p(null, t);
            }) :
            p({
              error: "invalid_token",
              description: "The id_token cannot be validated because it was signed with the HS256 algorithm and public clients (like a browser) can’t store secrets. Please read the associated doc for possible ways to fix this. Read more: https://auth0.com/docs/errors/libraries/auth0-js/invalid-token#parsing-an-hs256-signed-id-token-without-an-access-token",
            });
        }) :
        p(null, null);
    }),
    (rX.prototype.validateToken = function(e, t, n) {
      new rS({
        issuer: this.baseOptions.token_issuer,
        jwksURI: this.baseOptions.jwksURI,
        audience: this.baseOptions.clientID,
        leeway: this.baseOptions.leeway || 60,
        maxAge: this.baseOptions.maxAge,
        __clock: this.baseOptions.__clock || rQ,
      }).verify(e, t, function(e, t) {
        if (e) return n(nJ.invalidToken(e.message));
        n(null, t);
      });
    }),
    (rX.prototype.renewAuth = function(e, t) {
      var n = !!e.usePostMessage,
        r = e.postMessageDataType || !1,
        i = e.postMessageOrigin || nB.getWindow().origin,
        o = e.timeout,
        a = this,
        s = nI
        .merge(this.baseOptions, [
          "clientID",
          "redirectUri",
          "responseType",
          "scope",
          "audience",
          "_csrf",
          "state",
          "_intstate",
          "nonce",
        ])
        .with(e);
      (s.responseType = s.responseType || "token"),
      (s.responseMode = s.responseMode || "fragment"),
      (s = this.transactionManager.process(s)),
      nD.check(s, {
          type: "object",
          message: "options parameter is not valid",
        }),
        nD.check(t, {
          type: "function",
          message: "cb parameter is not valid",
        }),
        (s.prompt = "none"),
        (s = nI.blacklist(s, [
          "usePostMessage",
          "tenant",
          "postMessageDataType",
          "postMessageOrigin",
        ])),
        rN
        .create({
          authenticationUrl: this.client.buildAuthorizeUrl(s),
          postMessageDataType: r,
          postMessageOrigin: i,
          timeout: o,
        })
        .login(n, function(e, n) {
          if ("object" == typeof n) return t(e, n);
          a.parseHash({
            hash: n
          }, t);
        });
    }),
    (rX.prototype.checkSession = function(e, t) {
      var n = nI
        .merge(this.baseOptions, [
          "clientID",
          "responseType",
          "redirectUri",
          "scope",
          "audience",
          "_csrf",
          "state",
          "_intstate",
          "nonce",
        ])
        .with(e);
      return "code" === n.responseType ?
        t({
          error: "error",
          error_description: "responseType can't be `code`",
        }) :
        (e.nonce || (n = this.transactionManager.process(n)),
          n.redirectUri ?
          (nD.check(n, {
              type: "object",
              message: "options parameter is not valid",
            }),
            nD.check(t, {
              type: "function",
              message: "cb parameter is not valid",
            }),
            (n = nI.blacklist(n, [
              "usePostMessage",
              "tenant",
              "postMessageDataType",
            ])),
            void this.webMessageHandler.run(
              n,
              nZ(t, {
                forceLegacyError: !0,
                ignoreCasing: !0
              })
            )) :
          t({
            error: "error",
            error_description: "redirectUri can't be empty",
          }));
    }),
    (rX.prototype.changePassword = function(e, t) {
      return this.client.dbConnection.changePassword(e, t);
    }),
    (rX.prototype.passwordlessStart = function(e, t) {
      var n = nI
        .merge(this.baseOptions, [
          "responseType",
          "responseMode",
          "redirectUri",
          "scope",
          "audience",
          "_csrf",
          "state",
          "_intstate",
          "nonce",
        ])
        .with(e.authParams);
      return (
        (e.authParams = this.transactionManager.process(n)),
        this.client.passwordless.start(e, t)
      );
    }),
    (rX.prototype.signup = function(e, t) {
      return this.client.dbConnection.signup(e, t);
    }),
    (rX.prototype.authorize = function(e) {
      var t = nI
        .merge(this.baseOptions, [
          "clientID",
          "responseType",
          "responseMode",
          "redirectUri",
          "scope",
          "audience",
          "_csrf",
          "state",
          "_intstate",
          "nonce",
          "organization",
          "invitation",
        ])
        .with(e);
      nD.check(
          t, {
            type: "object",
            message: "options parameter is not valid"
          }, {
            responseType: {
              type: "string",
              message: "responseType option is required",
            },
          }
        ),
        ((t = this.transactionManager.process(t)).scope =
          t.scope || "openid profile email"),
        nB.redirect(this.client.buildAuthorizeUrl(t));
    }),
    (rX.prototype.signupAndAuthorize = function(e, t) {
      var n = this;
      return this.client.dbConnection.signup(
        nI.blacklist(e, ["popupHandler"]),
        function(r) {
          if (r) return t(r);
          (e.realm = e.connection),
          e.username || (e.username = e.email),
            n.client.login(e, t);
        }
      );
    }),
    (rX.prototype.login = function(e, t) {
      var n = nI
        .merge(this.baseOptions, [
          "clientID",
          "responseType",
          "redirectUri",
          "scope",
          "audience",
          "_csrf",
          "state",
          "_intstate",
          "nonce",
          "onRedirecting",
          "organization",
          "invitation",
        ])
        .with(e);
      (n = this.transactionManager.process(n)),
      nB.getWindow().location.host === this.baseOptions.domain ?
        ((n.connection = n.realm),
          delete n.realm,
          this._universalLogin.login(n, t)) :
        this.crossOriginAuthentication.login(n, t);
    }),
    (rX.prototype.passwordlessLogin = function(e, t) {
      var n = nI
        .merge(this.baseOptions, [
          "clientID",
          "responseType",
          "redirectUri",
          "scope",
          "audience",
          "_csrf",
          "state",
          "_intstate",
          "nonce",
          "onRedirecting",
        ])
        .with(e);
      if (
        ((n = this.transactionManager.process(n)),
          nB.getWindow().location.host === this.baseOptions.domain)
      )
        this.passwordlessVerify(n, t);
      else {
        var r = nI.extend({
            credentialType: "http://auth0.com/oauth/grant-type/passwordless/otp",
            realm: n.connection,
            username: n.email || n.phoneNumber,
            otp: n.verificationCode,
          },
          nI.blacklist(n, [
            "connection",
            "email",
            "phoneNumber",
            "verificationCode",
          ])
        );
        this.crossOriginAuthentication.login(r, t);
      }
    }),
    (rX.prototype.crossOriginAuthenticationCallback = function() {
      this.crossOriginVerification();
    }),
    (rX.prototype.crossOriginVerification = function() {
      this.crossOriginAuthentication.callback();
    }),
    (rX.prototype.logout = function(e) {
      nB.redirect(this.client.buildLogoutUrl(e));
    }),
    (rX.prototype.passwordlessVerify = function(e, t) {
      var n = this,
        r = nI
        .merge(this.baseOptions, [
          "clientID",
          "responseType",
          "responseMode",
          "redirectUri",
          "scope",
          "audience",
          "_csrf",
          "state",
          "_intstate",
          "nonce",
          "onRedirecting",
        ])
        .with(e);
      return (
        nD.check(
          r, {
            type: "object",
            message: "options parameter is not valid"
          }, {
            responseType: {
              type: "string",
              message: "responseType option is required",
            },
          }
        ),
        (r = this.transactionManager.process(r)),
        this.client.passwordless.verify(r, function(i) {
          if (i) return t(i);

          function o() {
            nB.redirect(n.client.passwordless.buildVerifyUrl(r));
          }
          if ("function" == typeof e.onRedirecting)
            return e.onRedirecting(function() {
              o();
            });
          o();
        })
      );
    }),
    (rX.prototype.renderCaptcha = function(e, t, n) {
      return r$(this.client, e, t, n);
    }),
    (rX.prototype.renderPasswordlessCaptcha = function(e, t, n) {
      return rK(this.client, e, t, n);
    }),
    (rY.prototype.buildVerifyUrl = function(e) {
      var t, n;
      return (
        nD.check(
          e, {
            type: "object",
            message: "options parameter is not valid"
          }, {
            connection: {
              type: "string",
              message: "connection option is required",
            },
            verificationCode: {
              type: "string",
              message: "verificationCode option is required",
            },
            phoneNumber: {
              optional: !1,
              type: "string",
              message: "phoneNumber option is required",
              condition: function(e) {
                return !e.email;
              },
            },
            email: {
              optional: !1,
              type: "string",
              message: "email option is required",
              condition: function(e) {
                return !e.phoneNumber;
              },
            },
          }
        ),
        (t = nI
          .merge(this.baseOptions, [
            "clientID",
            "responseType",
            "responseMode",
            "redirectUri",
            "scope",
            "audience",
            "_csrf",
            "state",
            "_intstate",
            "protocol",
            "nonce",
          ])
          .with(e)),
        this.baseOptions._sendTelemetry &&
        (t.auth0Client = this.request.getTelemetryData()),
        (t = nI.toSnakeCase(t, ["auth0Client"])),
        (n = t8.stringify(t)),
        en(
          this.baseOptions.rootUrl,
          "passwordless",
          "verify_redirect",
          "?" + n
        )
      );
    }),
    (rY.prototype.start = function(e, t) {
      nD.check(
          e, {
            type: "object",
            message: "options parameter is not valid"
          }, {
            connection: {
              type: "string",
              message: "connection option is required",
            },
            send: {
              type: "string",
              message: "send option is required",
              values: ["link", "code"],
              value_message: "send is not valid ([link, code])",
            },
            phoneNumber: {
              optional: !0,
              type: "string",
              message: "phoneNumber option is required",
              condition: function(e) {
                return "code" === e.send || !e.email;
              },
            },
            email: {
              optional: !0,
              type: "string",
              message: "email option is required",
              condition: function(e) {
                return "link" === e.send || !e.phoneNumber;
              },
            },
            authParams: {
              optional: !0,
              type: "object",
              message: "authParams option is required",
            },
          }
        ),
        nD.check(t, {
          type: "function",
          message: "cb parameter is not valid",
        }),
        (n = en(this.baseOptions.rootUrl, "passwordless", "start"));
      var n,
        r,
        i = e.xRequestLanguage;
      return (
        delete e.xRequestLanguage,
        (r = nI
          .merge(this.baseOptions, [
            "clientID",
            "responseType",
            "redirectUri",
            "scope",
          ])
          .with(e)).scope &&
        ((r.authParams = r.authParams || {}),
          (r.authParams.scope = r.authParams.scope || r.scope)),
        r.redirectUri &&
        ((r.authParams = r.authParams || {}),
          (r.authParams.redirect_uri =
            r.authParams.redirectUri || r.redirectUri)),
        r.responseType &&
        ((r.authParams = r.authParams || {}),
          (r.authParams.response_type =
            r.authParams.responseType || r.responseType)),
        delete r.redirectUri,
        delete r.responseType,
        delete r.scope,
        (r = nI.toSnakeCase(r, ["auth0Client", "authParams"])),
        this.request
        .post(n, i ? {
          xRequestLanguage: i
        } : void 0)
        .send(r)
        .end(nZ(t))
      );
    }),
    (rY.prototype.verify = function(e, t) {
      var n, r;
      return (
        nD.check(
          e, {
            type: "object",
            message: "options parameter is not valid"
          }, {
            connection: {
              type: "string",
              message: "connection option is required",
            },
            verificationCode: {
              type: "string",
              message: "verificationCode option is required",
            },
            phoneNumber: {
              optional: !1,
              type: "string",
              message: "phoneNumber option is required",
              condition: function(e) {
                return !e.email;
              },
            },
            email: {
              optional: !1,
              type: "string",
              message: "email option is required",
              condition: function(e) {
                return !e.phoneNumber;
              },
            },
          }
        ),
        nD.check(t, {
          type: "function",
          message: "cb parameter is not valid",
        }),
        (r = nI.pick(e, [
          "connection",
          "verificationCode",
          "phoneNumber",
          "email",
          "auth0Client",
          "clientID",
        ])),
        (r = nI.toSnakeCase(r, ["auth0Client"])),
        (n = en(this.baseOptions.rootUrl, "passwordless", "verify")),
        this.request.post(n).send(r).end(nZ(t))
      );
    }),
    (rY.prototype.getChallenge = function(e) {
      if (
        (nD.check(e, {
            type: "function",
            message: "cb parameter is not valid",
          }),
          !this.baseOptions.state)
      )
        return e();
      var t = en(this.baseOptions.rootUrl, "passwordless", "challenge");
      return this.request
        .post(t)
        .send({
          state: this.baseOptions.state
        })
        .end(nZ(e, {
          ignoreCasing: !0
        }));
    }),
    (rG.prototype.signup = function(e, t) {
      var n, r, i;
      return (
        nD.check(
          e, {
            type: "object",
            message: "options parameter is not valid"
          }, {
            connection: {
              type: "string",
              message: "connection option is required",
            },
            email: {
              type: "string",
              message: "email option is required"
            },
            password: {
              type: "string",
              message: "password option is required",
            },
          }
        ),
        nD.check(t, {
          type: "function",
          message: "cb parameter is not valid",
        }),
        (n = en(this.baseOptions.rootUrl, "dbconnections", "signup")),
        (i =
          (r = nI.merge(this.baseOptions, ["clientID", "state"]).with(e))
          .user_metadata || r.userMetadata),
        (r = nI.blacklist(r, ["scope", "userMetadata", "user_metadata"])),
        (r = nI.toSnakeCase(r, ["auth0Client"])),
        i && (r.user_metadata = i),
        this.request.post(n).send(r).end(nZ(t))
      );
    }),
    (rG.prototype.changePassword = function(e, t) {
      var n, r;
      return (
        nD.check(
          e, {
            type: "object",
            message: "options parameter is not valid"
          }, {
            connection: {
              type: "string",
              message: "connection option is required",
            },
            email: {
              type: "string",
              message: "email option is required"
            },
          }
        ),
        nD.check(t, {
          type: "function",
          message: "cb parameter is not valid",
        }),
        (n = en(
          this.baseOptions.rootUrl,
          "dbconnections",
          "change_password"
        )),
        (r = nI
          .merge(this.baseOptions, ["clientID"])
          .with(e, ["email", "connection"])),
        (r = nI.toSnakeCase(r, ["auth0Client"])),
        this.request.post(n).send(r).end(nZ(t))
      );
    }),
    (rJ.prototype.buildAuthorizeUrl = function(e) {
      var t, n;
      return (
        nD.check(e, {
          type: "object",
          message: "options parameter is not valid",
        }),
        (t = nI
          .merge(this.baseOptions, [
            "clientID",
            "responseType",
            "responseMode",
            "redirectUri",
            "scope",
            "audience",
          ])
          .with(e)),
        nD.check(
          t, {
            type: "object",
            message: "options parameter is not valid"
          }, {
            clientID: {
              type: "string",
              message: "clientID option is required",
            },
            redirectUri: {
              optional: !0,
              type: "string",
              message: "redirectUri option is required",
            },
            responseType: {
              type: "string",
              message: "responseType option is required",
            },
            nonce: {
              type: "string",
              message: "nonce option is required",
              condition: function(e) {
                return (
                  -1 === e.responseType.indexOf("code") &&
                  -1 !== e.responseType.indexOf("id_token")
                );
              },
            },
            scope: {
              optional: !0,
              type: "string",
              message: "scope option is required",
            },
            audience: {
              optional: !0,
              type: "string",
              message: "audience option is required",
            },
          }
        ),
        this.baseOptions._sendTelemetry &&
        (t.auth0Client = this.request.getTelemetryData()),
        t.connection_scope &&
        nD.isArray(t.connection_scope) &&
        (t.connection_scope = t.connection_scope.join(",")),
        (t = nI.blacklist(t, [
          "username",
          "popupOptions",
          "domain",
          "tenant",
          "timeout",
          "appState",
        ])),
        (t = nI.toSnakeCase(t, ["auth0Client"])),
        (t = n2(this.warn, t)),
        (n = t8.stringify(t)),
        en(this.baseOptions.rootUrl, "authorize", "?" + n)
      );
    }),
    (rJ.prototype.buildLogoutUrl = function(e) {
      var t, n;
      return (
        nD.check(e, {
          optional: !0,
          type: "object",
          message: "options parameter is not valid",
        }),
        (t = nI.merge(this.baseOptions, ["clientID"]).with(e || {})),
        this.baseOptions._sendTelemetry &&
        (t.auth0Client = this.request.getTelemetryData()),
        (t = nI.toSnakeCase(t, ["auth0Client", "returnTo"])),
        (n = t8.stringify(nI.blacklist(t, ["federated"]))),
        e &&
        void 0 !== e.federated &&
        !1 !== e.federated &&
        "false" !== e.federated &&
        (n += "&federated"),
        en(this.baseOptions.rootUrl, "v2", "logout", "?" + n)
      );
    }),
    (rJ.prototype.loginWithDefaultDirectory = function(e, t) {
      return (
        nD.check(
          e, {
            type: "object",
            message: "options parameter is not valid"
          }, {
            username: {
              type: "string",
              message: "username option is required",
            },
            password: {
              type: "string",
              message: "password option is required",
            },
            scope: {
              optional: !0,
              type: "string",
              message: "scope option is required",
            },
            audience: {
              optional: !0,
              type: "string",
              message: "audience option is required",
            },
          }
        ),
        (e.grantType = "password"),
        this.oauthToken(e, t)
      );
    }),
    (rJ.prototype.login = function(e, t) {
      return (
        nD.check(
          e, {
            type: "object",
            message: "options parameter is not valid"
          }, {
            username: {
              type: "string",
              message: "username option is required",
            },
            password: {
              type: "string",
              message: "password option is required",
            },
            realm: {
              type: "string",
              message: "realm option is required"
            },
            scope: {
              optional: !0,
              type: "string",
              message: "scope option is required",
            },
            audience: {
              optional: !0,
              type: "string",
              message: "audience option is required",
            },
          }
        ),
        (e.grantType = "http://auth0.com/oauth/grant-type/password-realm"),
        this.oauthToken(e, t)
      );
    }),
    (rJ.prototype.oauthToken = function(e, t) {
      var n, r, i, o;
      return (
        nD.check(e, {
          type: "object",
          message: "options parameter is not valid",
        }),
        nD.check(t, {
          type: "function",
          message: "cb parameter is not valid",
        }),
        (n = en(this.baseOptions.rootUrl, "oauth", "token")),
        (r = nI
          .merge(this.baseOptions, ["clientID", "scope", "audience"])
          .with(e)),
        nD.check(
          r, {
            type: "object",
            message: "options parameter is not valid"
          }, {
            clientID: {
              type: "string",
              message: "clientID option is required",
            },
            grantType: {
              type: "string",
              message: "grantType option is required",
            },
            scope: {
              optional: !0,
              type: "string",
              message: "scope option is required",
            },
            audience: {
              optional: !0,
              type: "string",
              message: "audience option is required",
            },
          }
        ),
        (r = nI.toSnakeCase(r, ["auth0Client"])),
        this.warn,
        (o = r),
        (r = nI.pick(o, n0)),
        this.request.post(n).send(r).end(nZ(t))
      );
    }),
    (rJ.prototype.loginWithResourceOwner = function(e, t) {
      var n, r;
      return (
        nD.check(
          e, {
            type: "object",
            message: "options parameter is not valid"
          }, {
            username: {
              type: "string",
              message: "username option is required",
            },
            password: {
              type: "string",
              message: "password option is required",
            },
            connection: {
              type: "string",
              message: "connection option is required",
            },
            scope: {
              optional: !0,
              type: "string",
              message: "scope option is required",
            },
          }
        ),
        nD.check(t, {
          type: "function",
          message: "cb parameter is not valid",
        }),
        (n = en(this.baseOptions.rootUrl, "oauth", "ro")),
        (r = nI
          .merge(this.baseOptions, ["clientID", "scope"])
          .with(e, [
            "username",
            "password",
            "scope",
            "connection",
            "device",
          ])),
        ((r = nI.toSnakeCase(r, ["auth0Client"])).grant_type =
          r.grant_type || "password"),
        this.request.post(n).send(r).end(nZ(t))
      );
    }),
    (rJ.prototype.getSSOData = function(e, t) {
      if (
        (this.auth0 || (this.auth0 = new rX(this.baseOptions)),
          nB.getWindow().location.host === this.baseOptions.domain)
      )
        return this.auth0._universalLogin.getSSOData(e, t);
      "function" == typeof e && (t = e),
        nD.check(t, {
          type: "function",
          message: "cb parameter is not valid",
        });
      var n = this.baseOptions.clientID,
        r = this.ssodataStorage.get() || {};
      this.auth0.checkSession({
          responseType: "token id_token",
          scope: "openid profile email",
          connection: r.lastUsedConnection,
          timeout: 5e3,
        },
        function(e, i) {
          return e ?
            "login_required" === e.error ?
            t(null, {
              sso: !1
            }) :
            ("consent_required" === e.error &&
              (e.error_description =
                "Consent required. When using `getSSOData`, the user has to be authenticated with the following scope: `openid profile email`."),
              t(e, {
                sso: !1
              })) :
            r.lastUsedSub && r.lastUsedSub !== i.idTokenPayload.sub ?
            t(e, {
              sso: !1
            }) :
            t(null, {
              lastUsedConnection: {
                name: r.lastUsedConnection
              },
              lastUsedUserID: i.idTokenPayload.sub,
              lastUsedUsername: i.idTokenPayload.email || i.idTokenPayload.name,
              lastUsedClientID: n,
              sessionClients: [n],
              sso: !0,
            });
        }
      );
    }),
    (rJ.prototype.userInfo = function(e, t) {
      var n;
      return (
        nD.check(e, {
          type: "string",
          message: "accessToken parameter is not valid",
        }),
        nD.check(t, {
          type: "function",
          message: "cb parameter is not valid",
        }),
        (n = en(this.baseOptions.rootUrl, "userinfo")),
        this.request
        .get(n)
        .set("Authorization", "Bearer " + e)
        .end(nZ(t, {
          ignoreCasing: !0
        }))
      );
    }),
    (rJ.prototype.getChallenge = function(e) {
      if (
        (nD.check(e, {
            type: "function",
            message: "cb parameter is not valid",
          }),
          !this.baseOptions.state)
      )
        return e();
      var t = en(this.baseOptions.rootUrl, "usernamepassword", "challenge");
      return this.request
        .post(t)
        .send({
          state: this.baseOptions.state
        })
        .end(nZ(e, {
          ignoreCasing: !0
        }));
    }),
    (rJ.prototype.delegation = function(e, t) {
      var n, r;
      return (
        nD.check(
          e, {
            type: "object",
            message: "options parameter is not valid"
          }, {
            grant_type: {
              type: "string",
              message: "grant_type option is required",
            },
          }
        ),
        nD.check(t, {
          type: "function",
          message: "cb parameter is not valid",
        }),
        (n = en(this.baseOptions.rootUrl, "delegation")),
        (r = nI.merge(this.baseOptions, ["clientID"]).with(e)),
        (r = nI.toSnakeCase(r, ["auth0Client"])),
        this.request.post(n).send(r).end(nZ(t))
      );
    }),
    (rJ.prototype.getUserCountry = function(e) {
      var t;
      return (
        nD.check(e, {
          type: "function",
          message: "cb parameter is not valid",
        }),
        (t = en(this.baseOptions.rootUrl, "user", "geoloc", "country")),
        this.request.get(t).end(nZ(e))
      );
    }),
    (rZ.prototype.getUser = function(e, t) {
      var n;
      return (
        nD.check(e, {
          type: "string",
          message: "userId parameter is not valid",
        }),
        nD.check(t, {
          type: "function",
          message: "cb parameter is not valid",
        }),
        (n = en(this.baseOptions.rootUrl, "users", e)),
        this.request.get(n).end(nZ(t, {
          ignoreCasing: !0
        }))
      );
    }),
    (rZ.prototype.patchUserMetadata = function(e, t, n) {
      var r;
      return (
        nD.check(e, {
          type: "string",
          message: "userId parameter is not valid",
        }),
        nD.check(t, {
          type: "object",
          message: "userMetadata parameter is not valid",
        }),
        nD.check(n, {
          type: "function",
          message: "cb parameter is not valid",
        }),
        (r = en(this.baseOptions.rootUrl, "users", e)),
        this.request
        .patch(r)
        .send({
          user_metadata: t
        })
        .end(nZ(n, {
          ignoreCasing: !0
        }))
      );
    }),
    (rZ.prototype.patchUserAttributes = function(e, t, n) {
      var r;
      return (
        nD.check(e, {
          type: "string",
          message: "userId parameter is not valid",
        }),
        nD.check(t, {
          type: "object",
          message: "user parameter is not valid",
        }),
        nD.check(n, {
          type: "function",
          message: "cb parameter is not valid",
        }),
        (r = en(this.baseOptions.rootUrl, "users", e)),
        this.request
        .patch(r)
        .send(t)
        .end(nZ(n, {
          ignoreCasing: !0
        }))
      );
    }),
    (rZ.prototype.linkUser = function(e, t, n) {
      var r;
      return (
        nD.check(e, {
          type: "string",
          message: "userId parameter is not valid",
        }),
        nD.check(t, {
          type: "string",
          message: "secondaryUserToken parameter is not valid",
        }),
        nD.check(n, {
          type: "function",
          message: "cb parameter is not valid",
        }),
        (r = en(this.baseOptions.rootUrl, "users", e, "identities")),
        this.request
        .post(r)
        .send({
          link_with: t
        })
        .end(nZ(n, {
          ignoreCasing: !0
        }))
      );
    });
    const r0 = () => {
        if (!window.auth0Config?.auth0Tenant)
          throw Error("Invalid Auth0 config.");
        let e = window.auth0Config.internalOptions.leeway;
        if (e) {
          let t = Number(e);
          isNaN(t) || (window.auth0Config.internalOptions.leeway = t);
        }
        return new rX({
          overrides: {
            __tenant: window.auth0Config.auth0Tenant,
            __token_issuer: window.auth0Config.authorizationServer.issuer,
          },
          domain: window.auth0Config.auth0Domain,
          clientID: window.auth0Config.clientID,
          redirectUri: window.auth0Config.callbackURL,
          responseType: "code",
          ...window.auth0Config.internalOptions,
        });
      },
      r1 = (0, L.createContext)(null),
      r2 = () =>
      /[&?]login_action=register/iu.test(window.location.search) ?
      "signUp" :
      "signIn",
      r3 = new URL(window.location.href).searchParams.get("referral"),
      r4 = ({
        children: e
      }) => {
        let [t, n] = (0, L.useState)(),
        [r, i] = (0, L.useState)(),
        [o, a] = (0, L.useState)(!1),
        [s, l] = (0, L.useState)(r2()),
        u = (e) => {
          (F(e) && z()) || (i({
            message: V(e),
            severity: "error"
          }), a(!1));
        };
        (0, L.useEffect)(() => {
          if (!t) {
            a(!0);
            try {
              n(r0()), a(!1);
            } catch (e) {
              u(e);
            }
          }
        }, [t]);
        let c = ({
            username: e,
            password: n
          }) =>
          (a(!0), i(void 0), e) ?
          n ?
          t?.login({
              realm: "Username-Password-Authentication",
              username: e,
              password: n,
            },
            (e) => {
              e ? u(e) : a(!1);
            }
          ) :
          u("password") :
          u("email");
        return (0, N.jsx)(r1.Provider, {
          value: {
            webAuth: t,
            login: c,
            loginWithSocial: (e) => (n) => {
              n.preventDefault(),
                i(void 0),
                a(!0),
                t?.authorize({
                  connection: e,
                  ...(r3 && {
                    referral: r3
                  })
                });
            },
            signUp: ({
                email: e,
                password: n
              }) =>
              (a(!0), e) ?
              n ?
              t?.signup({
                  connection: "Username-Password-Authentication",
                  email: e,
                  password: n,
                  user_metadata: {
                    ...(r3 && {
                      referral: r3
                    })
                  },
                },
                (t) => {
                  t ? u(t) : c({
                    username: e,
                    password: n
                  });
                }
              ) :
              u("password") : u("email"),
            changePassword: ({
                email: e
              }) =>
              (a(!0), e) ?
              t.changePassword({
                  connection: "Username-Password-Authentication",
                  email: e,
                },
                (e) => {
                  e
                    ?
                    u(e) :
                    (i({
                        severity: "success",
                        message: "Email sent!"
                      }),
                      a(!1));
                }
              ) : u("email"),
            isBusy: o,
            alert: r,
            mode: s,
            setMode: (e) => {
              a(!1), i(void 0), l(e);
            },
          },
          children: e,
        });
      },
      r5 = () => (0, L.useContext)(r1);
    var r6 = {};
    !(
      /*!
	Copyright (c) 2018 Jed Watson.
	Licensed under the MIT License (MIT), see
	http://jedwatson.github.io/classnames
*/
      (function() {
        var e = {}.hasOwnProperty;

        function t() {
          for (var r = "", i = 0; i < arguments.length; i++) {
            var o = arguments[i];
            o &&
              (r = n(
                r,
                (function(r) {
                  if ("string" == typeof r || "number" == typeof r) return r;
                  if ("object" != typeof r) return "";
                  if (Array.isArray(r)) return t.apply(null, r);
                  if (
                    r.toString !== Object.prototype.toString &&
                    !r.toString.toString().includes("[native code]")
                  )
                    return r.toString();
                  var i = "";
                  for (var o in r) e.call(r, o) && r[o] && (i = n(i, o));
                  return i;
                })(o)
              ));
          }
          return r;
        }

        function n(e, t) {
          return t ? (e ? e + " " + t : e + t) : e;
        }
        r6
          ?
          ((t.default = t), (r6 = t)) :
          "function" == typeof define &&
          "object" == typeof define.amd &&
          define.amd ?
          define("classnames", [], function() {
            return t;
          }) :
          (window.classNames = t);
      })()
    );
    var L = (R("lx97N"), R("lx97N"));
    const r8 = (0, L.createContext)({
      transformPagePoint: (e) => e,
      isStatic: !1,
      reducedMotion: "never",
    });
    var L = R("lx97N");
    const r9 = (0, L.createContext)({});
    var L = (R("lx97N"), R("lx97N"));
    const r7 = (0, L.createContext)(null);
    var L = R("lx97N");
    const ie = "undefined" != typeof document,
      it = ie ? L.useLayoutEffect : L.useEffect;
    var L = R("lx97N");
    const ir = (0, L.createContext)({
        strict: !1
      }),
      ii = (e) => e.replace(/([a-z])([A-Z])/gu, "$1-$2").toLowerCase(),
      io = "data-" + ii("framerAppearId"),
      ia = {
        skipAnimations: !1,
        useManualTiming: !1
      };
    class is {
      constructor() {
        (this.order = []), (this.scheduled = new Set());
      }
      add(e) {
        if (!this.scheduled.has(e))
          return this.scheduled.add(e), this.order.push(e), !0;
      }
      remove(e) {
        let t = this.order.indexOf(e); -
        1 !== t && (this.order.splice(t, 1), this.scheduled.delete(e));
      }
      clear() {
        (this.order.length = 0), this.scheduled.clear();
      }
    }
    const il = [
      "read",
      "resolveKeyframes",
      "update",
      "preRender",
      "render",
      "postRender",
    ];

    function iu(e, t) {
      let n = !1,
        r = !0,
        i = {
          delta: 0,
          timestamp: 0,
          isProcessing: !1
        },
        o = il.reduce(
          (e, t) => (
            (e[t] = (function(e) {
              let t = new is(),
                n = new is(),
                r = 0,
                i = !1,
                o = !1,
                a = new WeakSet(),
                s = {
                  schedule: (e, o = !1, s = !1) => {
                    let l = s && i,
                      u = l ? t : n;
                    return (
                      o && a.add(e),
                      u.add(e) && l && i && (r = t.order.length),
                      e
                    );
                  },
                  cancel: (e) => {
                    n.remove(e), a.delete(e);
                  },
                  process: (l) => {
                    if (i) {
                      o = !0;
                      return;
                    }
                    if (
                      ((i = !0),
                        ([t, n] = [n, t]),
                        n.clear(),
                        (r = t.order.length))
                    )
                      for (let n = 0; n < r; n++) {
                        let r = t.order[n];
                        a.has(r) && (s.schedule(r), e()), r(l);
                      }
                      (i = !1), o && ((o = !1), s.process(l));
                  },
                };
              return s;
            })(() => (n = !0))),
            e
          ), {}
        ),
        a = (e) => {
          o[e].process(i);
        },
        s = () => {
          let o = ia.useManualTiming ? i.timestamp : performance.now();
          (n = !1),
          (i.delta = r ?
            1e3 / 60 :
            Math.max(Math.min(o - i.timestamp, 40), 1)),
          (i.timestamp = o),
          (i.isProcessing = !0),
          il.forEach(a),
            (i.isProcessing = !1),
            n && t && ((r = !1), e(s));
        },
        l = () => {
          (n = !0), (r = !0), i.isProcessing || e(s);
        };
      return {
        schedule: il.reduce((e, t) => {
          let r = o[t];
          return (
            (e[t] = (e, t = !1, i = !1) => (n || l(), r.schedule(e, t, i))), e
          );
        }, {}),
        cancel: (e) => il.forEach((t) => o[t].cancel(e)),
        state: i,
        steps: o,
      };
    }
    const {
      schedule: ic,
      cancel: ip
    } = iu(queueMicrotask, !1);

    function id(e) {
      return (
        e &&
        "object" == typeof e &&
        Object.prototype.hasOwnProperty.call(e, "current")
      );
    }
    var L = (R("lx97N"), R("lx97N"));

    function ih(e) {
      return "string" == typeof e || Array.isArray(e);
    }

    function im(e) {
      return (
        null !== e && "object" == typeof e && "function" == typeof e.start
      );
    }
    const iy = [
        "animate",
        "whileInView",
        "whileFocus",
        "whileHover",
        "whileTap",
        "whileDrag",
        "exit",
      ],
      ig = ["initial", ...iy];

    function iv(e) {
      return im(e.animate) || ig.some((t) => ih(e[t]));
    }

    function ib(e) {
      return !!(iv(e) || e.variants);
    }

    function iw(e) {
      return Array.isArray(e) ? e.join(" ") : e;
    }
    const ix = {
        animation: [
          "animate",
          "variants",
          "whileHover",
          "whileTap",
          "exit",
          "whileInView",
          "whileFocus",
          "whileDrag",
        ],
        exit: ["exit"],
        drag: ["drag", "dragControls"],
        focus: ["whileFocus"],
        hover: ["whileHover", "onHoverStart", "onHoverEnd"],
        tap: ["whileTap", "onTap", "onTapStart", "onTapCancel"],
        pan: ["onPan", "onPanStart", "onPanSessionStart", "onPanEnd"],
        inView: ["whileInView", "onViewportEnter", "onViewportLeave"],
        layout: ["layout", "layoutId"],
      },
      iS = {};
    for (const e in ix)
      iS[e] = {
        isEnabled: (t) => ix[e].some((e) => !!t[e])
      };
    var L = R("lx97N");
    const ik = (0, L.createContext)({});
    var L = R("lx97N");
    const i_ = (0, L.createContext)({}),
      iT = Symbol.for("motionComponentSymbol"),
      iE = [
        "animate",
        "circle",
        "defs",
        "desc",
        "ellipse",
        "g",
        "image",
        "line",
        "filter",
        "marker",
        "mask",
        "metadata",
        "path",
        "pattern",
        "polygon",
        "polyline",
        "rect",
        "stop",
        "switch",
        "symbol",
        "svg",
        "text",
        "tspan",
        "use",
        "view",
      ];

    function iC(e) {
      if ("string" != typeof e || e.includes("-"));
      else if (iE.indexOf(e) > -1 || /[A-Z]/u.test(e)) return !0;
      return !1;
    }
    var L = (R("lx97N"), R("lx97N"));
    const iP = {},
      iO = [
        "transformPerspective",
        "x",
        "y",
        "z",
        "translateX",
        "translateY",
        "translateZ",
        "scale",
        "scaleX",
        "scaleY",
        "rotate",
        "rotateX",
        "rotateY",
        "rotateZ",
        "skew",
        "skewX",
        "skewY",
      ],
      iA = new Set(iO);

    function ij(e, {
      layout: t,
      layoutId: n
    }) {
      return (
        iA.has(e) ||
        e.startsWith("origin") ||
        ((t || void 0 !== n) && (!!iP[e] || "opacity" === e))
      );
    }
    const iD = (e) => !!(e && e.getVelocity),
      iR = {
        x: "translateX",
        y: "translateY",
        z: "translateZ",
        transformPerspective: "perspective",
      },
      iM = iO.length,
      iN = (e) => (t) => "string" == typeof t && t.startsWith(e),
      iL = iN("--"),
      iI = iN("var(--"),
      iU = (e) => !!iI(e) && iF.test(e.split("/*")[0].trim()),
      iF =
      /var\(--(?:[\w-]+\s*|[\w-]+\s*,(?:\s*[^)(\s]|\s*\((?:[^)(]|\([^)(]*\))*\))+\s*)\)$/iu,
      iV = (e, t) => (t && "number" == typeof e ? t.transform(e) : e),
      iz = (e, t, n) => (n > t ? t : n < e ? e : n),
      iB = {
        test: (e) => "number" == typeof e,
        parse: parseFloat,
        transform: (e) => e,
      },
      iq = {
        ...iB,
        transform: (e) => iz(0, 1, e)
      },
      iH = {
        ...iB,
        default: 1
      },
      iW = (e) => Math.round(1e5 * e) / 1e5,
      i$ = /-?(?:\d+(?:\.\d+)?|\.\d+)/gu,
      iK =
      /(?:#[\da-f]{3,8}|(?:rgb|hsl)a?\((?:-?[\d.]+%?[,\s]+){2}-?[\d.]+%?\s*(?:[,/]\s*)?(?:\b\d+(?:\.\d+)?|\.\d+)?%?\))/giu,
      iQ =
      /^(?:#[\da-f]{3,8}|(?:rgb|hsl)a?\((?:-?[\d.]+%?[,\s]+){2}-?[\d.]+%?\s*(?:[,/]\s*)?(?:\b\d+(?:\.\d+)?|\.\d+)?%?\))$/iu;

    function iX(e) {
      return "string" == typeof e;
    }
    const iY = (e) => ({
        test: (t) => iX(t) && t.endsWith(e) && 1 === t.split(" ").length,
        parse: parseFloat,
        transform: (t) => `${t}${e}`,
      }),
      iG = iY("deg"),
      iJ = iY("%"),
      iZ = iY("px"),
      i0 = iY("vh"),
      i1 = iY("vw"),
      i2 = {
        ...iJ,
        parse: (e) => iJ.parse(e) / 100,
        transform: (e) => iJ.transform(100 * e),
      },
      i3 = {
        ...iB,
        transform: Math.round
      },
      i4 = {
        borderWidth: iZ,
        borderTopWidth: iZ,
        borderRightWidth: iZ,
        borderBottomWidth: iZ,
        borderLeftWidth: iZ,
        borderRadius: iZ,
        radius: iZ,
        borderTopLeftRadius: iZ,
        borderTopRightRadius: iZ,
        borderBottomRightRadius: iZ,
        borderBottomLeftRadius: iZ,
        width: iZ,
        maxWidth: iZ,
        height: iZ,
        maxHeight: iZ,
        size: iZ,
        top: iZ,
        right: iZ,
        bottom: iZ,
        left: iZ,
        padding: iZ,
        paddingTop: iZ,
        paddingRight: iZ,
        paddingBottom: iZ,
        paddingLeft: iZ,
        margin: iZ,
        marginTop: iZ,
        marginRight: iZ,
        marginBottom: iZ,
        marginLeft: iZ,
        rotate: iG,
        rotateX: iG,
        rotateY: iG,
        rotateZ: iG,
        scale: iH,
        scaleX: iH,
        scaleY: iH,
        scaleZ: iH,
        skew: iG,
        skewX: iG,
        skewY: iG,
        distance: iZ,
        translateX: iZ,
        translateY: iZ,
        translateZ: iZ,
        x: iZ,
        y: iZ,
        z: iZ,
        perspective: iZ,
        transformPerspective: iZ,
        opacity: iq,
        originX: i2,
        originY: i2,
        originZ: iZ,
        zIndex: i3,
        backgroundPositionX: iZ,
        backgroundPositionY: iZ,
        fillOpacity: iq,
        strokeOpacity: iq,
        numOctaves: i3,
      };

    function i5(e, t, n, r) {
      let {
        style: i,
        vars: o,
        transform: a,
        transformOrigin: s
      } = e,
      l = !1,
        u = !1,
        c = !0;
      for (let e in t) {
        let n = t[e];
        if (iL(e)) {
          o[e] = n;
          continue;
        }
        let r = i4[e],
          p = iV(n, r);
        if (iA.has(e)) {
          if (((l = !0), (a[e] = p), !c)) continue;
          n !== (r.default || 0) && (c = !1);
        } else e.startsWith("origin") ? ((u = !0), (s[e] = p)) : (i[e] = p);
      }
      if (
        (!t.transform &&
          (l || r ?
            (i.transform = (function(
              e, {
                enableHardwareAcceleration: t = !0,
                allowTransformNone: n = !0,
              },
              r,
              i
            ) {
              let o = "";
              for (let t = 0; t < iM; t++) {
                let n = iO[t];
                if (void 0 !== e[n]) {
                  let t = iR[n] || n;
                  o += `${t}(${e[n]}) `;
                }
              }
              return (
                t && !e.z && (o += "translateZ(0)"),
                (o = o.trim()),
                i ? (o = i(e, r ? "" : o)) : n && r && (o = "none"),
                o
              );
            })(e.transform, n, c, r)) :
            i.transform && (i.transform = "none")),
          u)
      ) {
        let {
          originX: e = "50%",
          originY: t = "50%",
          originZ: n = 0
        } = s;
        i.transformOrigin = `${e} ${t} ${n}`;
      }
    }
    const i6 = () => ({
      style: {},
      transform: {},
      transformOrigin: {},
      vars: {},
    });

    function i8(e, t, n) {
      for (let r in t) iD(t[r]) || ij(r, n) || (e[r] = t[r]);
    }
    const i9 = new Set([
      "animate",
      "exit",
      "variants",
      "initial",
      "style",
      "values",
      "variants",
      "transition",
      "transformTemplate",
      "custom",
      "inherit",
      "onBeforeLayoutMeasure",
      "onAnimationStart",
      "onAnimationComplete",
      "onUpdate",
      "onDragStart",
      "onDrag",
      "onDragEnd",
      "onMeasureDragConstraints",
      "onDirectionLock",
      "onDragTransitionEnd",
      "_dragX",
      "_dragY",
      "onHoverStart",
      "onHoverEnd",
      "onViewportEnter",
      "onViewportLeave",
      "globalTapTarget",
      "ignoreStrict",
      "viewport",
    ]);

    function i7(e) {
      return (
        e.startsWith("while") ||
        (e.startsWith("drag") && "draggable" !== e) ||
        e.startsWith("layout") ||
        e.startsWith("onTap") ||
        e.startsWith("onPan") ||
        e.startsWith("onLayout") ||
        i9.has(e)
      );
    }
    let oe = (e) => !i7(e);
    try {
      (o = R("6frbl").default) &&
      (oe = (e) => (e.startsWith("on") ? !i7(e) : o(e)));
    } catch (e) {}
    var L = R("lx97N");

    function ot(e, t, n) {
      return "string" == typeof e ? e : iZ.transform(t + n * e);
    }
    const on = {
        offset: "stroke-dashoffset",
        array: "stroke-dasharray"
      },
      or = {
        offset: "strokeDashoffset",
        array: "strokeDasharray"
      };

    function oi(
      e, {
        attrX: t,
        attrY: n,
        attrScale: r,
        originX: i,
        originY: o,
        pathLength: a,
        pathSpacing: s = 1,
        pathOffset: l = 0,
        ...u
      },
      c,
      p,
      d
    ) {
      if ((i5(e, u, c, d), p)) {
        e.style.viewBox && (e.attrs.viewBox = e.style.viewBox);
        return;
      }
      (e.attrs = e.style), (e.style = {});
      let {
        attrs: f,
        style: h,
        dimensions: m
      } = e;
      f.transform && (m && (h.transform = f.transform), delete f.transform),
        m &&
        (void 0 !== i || void 0 !== o || h.transform) &&
        (h.transformOrigin = (function(e, t, n) {
          let r = ot(t, e.x, e.width),
            i = ot(n, e.y, e.height);
          return `${r} ${i}`;
        })(m, void 0 !== i ? i : 0.5, void 0 !== o ? o : 0.5)),
        void 0 !== t && (f.x = t),
        void 0 !== n && (f.y = n),
        void 0 !== r && (f.scale = r),
        void 0 !== a &&
        (function(e, t, n = 1, r = 0, i = !0) {
          e.pathLength = 1;
          let o = i ? on : or;
          e[o.offset] = iZ.transform(-r);
          let a = iZ.transform(t),
            s = iZ.transform(n);
          e[o.array] = `${a} ${s}`;
        })(f, a, s, l, !1);
    }
    const oo = () => ({
        ...i6(),
        attrs: {}
      }),
      oa = (e) => "string" == typeof e && "svg" === e.toLowerCase();

    function os(e, {
      style: t,
      vars: n
    }, r, i) {
      for (let o in (Object.assign(e.style, t, i && i.getProjectionStyles(r)),
          n))
        e.style.setProperty(o, n[o]);
    }
    const ol = new Set([
      "baseFrequency",
      "diffuseConstant",
      "kernelMatrix",
      "kernelUnitLength",
      "keySplines",
      "keyTimes",
      "limitingConeAngle",
      "markerHeight",
      "markerWidth",
      "numOctaves",
      "targetX",
      "targetY",
      "surfaceScale",
      "specularConstant",
      "specularExponent",
      "stdDeviation",
      "tableValues",
      "viewBox",
      "gradientTransform",
      "pathLength",
      "startOffset",
      "textLength",
      "lengthAdjust",
    ]);

    function ou(e, t, n, r) {
      for (let n in (os(e, t, void 0, r), t.attrs))
        e.setAttribute(ol.has(n) ? n : ii(n), t.attrs[n]);
    }

    function oc(e, t, n) {
      var r;
      let {
        style: i
      } = e,
      o = {};
      for (let a in i)
        (iD(i[a]) ||
          (t.style && iD(t.style[a])) ||
          ij(a, e) ||
          (null === (r = null == n ? void 0 : n.getValue(a)) || void 0 === r ?
            void 0 :
            r.liveStyle) !== void 0) &&
        (o[a] = i[a]);
      return o;
    }

    function op(e, t, n) {
      let r = oc(e, t, n);
      for (let n in e)
        (iD(e[n]) || iD(t[n])) &&
        (r[
          -1 !== iO.indexOf(n) ?
          "attr" + n.charAt(0).toUpperCase() + n.substring(1) :
          n
        ] = e[n]);
      return r;
    }

    function od(e, t, n, r = {}, i = {}) {
      return (
        "function" == typeof t && (t = t(void 0 !== n ? n : e.custom, r, i)),
        "string" == typeof t && (t = e.variants && e.variants[t]),
        "function" == typeof t && (t = t(void 0 !== n ? n : e.custom, r, i)),
        t
      );
    }
    var L = (R("lx97N"), R("lx97N"));
    const of = (e) => Array.isArray(e),
      oh = (e) => !!(e && "object" == typeof e && e.mix && e.toValue),
      om = (e) => (of(e) ? e[e.length - 1] || 0 : e);

    function oy(e) {
      let t = iD(e) ? e.get() : e;
      return oh(t) ? t.toValue() : t;
    }
    const og = (e) => (t, n) => {
        let r = (0, L.useContext)(r9),
          i = (0, L.useContext)(r7),
          o = () =>
          (function({
              scrapeMotionValuesFromProps: e,
              createRenderState: t,
              onMount: n,
            },
            r,
            i,
            o
          ) {
            let a = {
              latestValues: (function(e, t, n, r) {
                let i = {},
                  o = r(e, {});
                for (let e in o) i[e] = oy(o[e]);
                let {
                  initial: a,
                  animate: s
                } = e,
                l = iv(e),
                  u = ib(e);
                t &&
                  u &&
                  !l &&
                  !1 !== e.inherit &&
                  (void 0 === a && (a = t.initial),
                    void 0 === s && (s = t.animate));
                let c = !!n && !1 === n.initial,
                  p = (c = c || !1 === a) ? s : a;
                return (
                  p &&
                  "boolean" != typeof p &&
                  !im(p) &&
                  (Array.isArray(p) ? p : [p]).forEach((t) => {
                    let n = od(e, t);
                    if (!n) return;
                    let {
                      transitionEnd: r,
                      transition: o,
                      ...a
                    } = n;
                    for (let e in a) {
                      let t = a[e];
                      if (Array.isArray(t)) {
                        let e = c ? t.length - 1 : 0;
                        t = t[e];
                      }
                      null !== t && (i[e] = t);
                    }
                    for (let e in r) i[e] = r[e];
                  }),
                  i
                );
              })(r, i, o, e),
              renderState: t(),
            };
            return n && (a.mount = (e) => n(r, e, a)), a;
          })(e, t, r, i);
        return n ?
          o() :
          (function(e) {
            let t = (0, L.useRef)(null);
            return null === t.current && (t.current = e()), t.current;
          })(o);
      },
      ov = (e) => e,
      {
        schedule: ob,
        cancel: ow,
        state: ox,
        steps: oS,
      } = iu(
        "undefined" != typeof requestAnimationFrame ?
        requestAnimationFrame :
        ov,
        !0
      ),
      ok = {
        useVisualState: og({
          scrapeMotionValuesFromProps: op,
          createRenderState: oo,
          onMount: (e, t, {
            renderState: n,
            latestValues: r
          }) => {
            ob.read(() => {
                try {
                  n.dimensions =
                    "function" == typeof t.getBBox ?
                    t.getBBox() :
                    t.getBoundingClientRect();
                } catch (e) {
                  n.dimensions = {
                    x: 0,
                    y: 0,
                    width: 0,
                    height: 0
                  };
                }
              }),
              ob.render(() => {
                oi(
                    n,
                    r, {
                      enableHardwareAcceleration: !1
                    },
                    oa(t.tagName),
                    e.transformTemplate
                  ),
                  ou(t, n);
              });
          },
        }),
      },
      o_ = {
        useVisualState: og({
          scrapeMotionValuesFromProps: oc,
          createRenderState: i6,
        }),
      };

    function oT(e, t, n, r = {
      passive: !0
    }) {
      return e.addEventListener(t, n, r), () => e.removeEventListener(t, n);
    }
    const oE = (e) =>
      "mouse" === e.pointerType ?
      "number" != typeof e.button || e.button <= 0 :
      !1 !== e.isPrimary;

    function oC(e, t = "page") {
      return {
        point: {
          x: e[`${t}X`],
          y: e[`${t}Y`]
        }
      };
    }
    const oP = (e) => (t) => oE(t) && e(t, oC(t));

    function oO(e, t, n, r) {
      return oT(e, t, oP(n), r);
    }
    const oA = (e, t) => (n) => t(e(n)),
      oj = (...e) => e.reduce(oA);

    function oD(e) {
      let t = null;
      return () =>
        null === t &&
        ((t = e),
          () => {
            t = null;
          });
    }
    const oR = oD("dragHorizontal"),
      oM = oD("dragVertical");

    function oN(e) {
      let t = !1;
      if ("y" === e) t = oM();
      else if ("x" === e) t = oR();
      else {
        let e = oR(),
          n = oM();
        e && n ?
          (t = () => {
            e(), n();
          }) :
          (e && e(), n && n());
      }
      return t;
    }

    function oL() {
      let e = oN(!0);
      return !e || (e(), !1);
    }
    class oI {
      constructor(e) {
        (this.isMounted = !1), (this.node = e);
      }
      update() {}
    }

    function oU(e, t) {
      let n = t ? "onHoverStart" : "onHoverEnd";
      return oO(
        e.current,
        t ? "pointerenter" : "pointerleave",
        (r, i) => {
          if ("touch" === r.pointerType || oL()) return;
          let o = e.getProps();
          e.animationState &&
            o.whileHover &&
            e.animationState.setActive("whileHover", t);
          let a = o[n];
          a && a(r, i);
        }, {
          passive: !e.getProps()[n]
        }
      );
    }
    const oF = (e, t) => !!t && (e === t || oF(e, t.parentElement));

    function oV(e, t) {
      if (!t) return;
      let n = new PointerEvent("pointer" + e);
      t(n, oC(n));
    }
    const oz = new WeakMap(),
      oB = new WeakMap(),
      oq = (e) => {
        let t = oz.get(e.target);
        t && t(e);
      },
      oH = (e) => {
        e.forEach(oq);
      },
      oW = {
        some: 0,
        all: 1
      };

    function o$(e, t) {
      if (!Array.isArray(t)) return !1;
      let n = t.length;
      if (n !== e.length) return !1;
      for (let r = 0; r < n; r++)
        if (t[r] !== e[r]) return !1;
      return !0;
    }

    function oK(e, t, n) {
      let r = e.getProps();
      return od(
        r,
        t,
        void 0 !== n ? n : r.custom,
        (function(e) {
          let t = {};
          return e.values.forEach((e, n) => (t[n] = e.get())), t;
        })(e),
        (function(e) {
          let t = {};
          return e.values.forEach((e, n) => (t[n] = e.getVelocity())), t;
        })(e)
      );
    }
    const oQ = (e) => 1e3 * e,
      oX = (e) => e / 1e3,
      oY = {
        type: "spring",
        stiffness: 500,
        damping: 25,
        restSpeed: 10
      },
      oG = (e) => ({
        type: "spring",
        stiffness: 550,
        damping: 0 === e ? 2 * Math.sqrt(550) : 30,
        restSpeed: 10,
      }),
      oJ = {
        type: "keyframes",
        duration: 0.8
      },
      oZ = {
        type: "keyframes",
        ease: [0.25, 0.1, 0.35, 1],
        duration: 0.3
      },
      o0 = (e, {
        keyframes: t
      }) =>
      t.length > 2 ?
      oJ :
      iA.has(e) ?
      e.startsWith("scale") ?
      oG(t[1]) :
      oY :
      oZ;

    function o1(e, t) {
      return e[t] || e.default || e;
    }
    const o2 = {
        current: !1
      },
      o3 = (e) => null !== e;

    function o4(e, {
      repeat: t,
      repeatType: n = "loop"
    }, r) {
      let i = e.filter(o3),
        o = t && "loop" !== n && t % 2 == 1 ? 0 : i.length - 1;
      return o && void 0 !== r ? r : i[o];
    }

    function o5() {
      e = void 0;
    }
    const o6 = {
        now: () => (
          void 0 === e &&
          o6.set(
            ox.isProcessing || ia.useManualTiming ?
            ox.timestamp :
            performance.now()
          ),
          e
        ),
        set: (t) => {
          (e = t), queueMicrotask(o5);
        },
      },
      o8 = (e) => /^0[^.\s]+$/u.test(e),
      o9 = (e) => /^-?(?:\d+(?:\.\d+)?|\.\d+)$/u.test(e),
      o7 = /^var\(--(?:([\w-]+)|([\w-]+), ?([a-zA-Z\d ()%#.,-]+))\)/u,
      ae = new Set([
        "width",
        "height",
        "top",
        "left",
        "right",
        "bottom",
        "x",
        "y",
        "translateX",
        "translateY",
      ]),
      at = (e) => e === iB || e === iZ,
      an = (e, t) => parseFloat(e.split(", ")[t]),
      ar =
      (e, t) =>
      (n, {
        transform: r
      }) => {
        if ("none" === r || !r) return 0;
        let i = r.match(/^matrix3d\((.+)\)$/u);
        if (i) return an(i[1], t);
        {
          let t = r.match(/^matrix\((.+)\)$/u);
          return t ? an(t[1], e) : 0;
        }
      },
      ai = new Set(["x", "y", "z"]),
      ao = iO.filter((e) => !ai.has(e));

    function aa(e) {
      let t = [];
      return (
        ao.forEach((n) => {
          let r = e.getValue(n);
          void 0 !== r &&
            (t.push([n, r.get()]), r.set(n.startsWith("scale") ? 1 : 0));
        }),
        t
      );
    }
    const as = {
      width: ({
          x: e
        }, {
          paddingLeft: t = "0",
          paddingRight: n = "0"
        }) =>
        e.max - e.min - parseFloat(t) - parseFloat(n),
      height: ({
          y: e
        }, {
          paddingTop: t = "0",
          paddingBottom: n = "0"
        }) =>
        e.max - e.min - parseFloat(t) - parseFloat(n),
      top: (e, {
        top: t
      }) => parseFloat(t),
      left: (e, {
        left: t
      }) => parseFloat(t),
      bottom: ({
        y: e
      }, {
        top: t
      }) => parseFloat(t) + (e.max - e.min),
      right: ({
        x: e
      }, {
        left: t
      }) => parseFloat(t) + (e.max - e.min),
      x: ar(4, 13),
      y: ar(5, 14),
    };
    (as.translateX = as.x), (as.translateY = as.y);
    const al = (e) => (t) => t.test(e),
      au = [
        iB,
        iZ,
        iJ,
        iG,
        i1,
        i0,
        {
          test: (e) => "auto" === e,
          parse: (e) => e
        },
      ],
      ac = (e) => au.find(al(e)),
      ap = new Set();
    let ad = !1,
      af = !1;

    function ah() {
      if (af) {
        let e = Array.from(ap).filter((e) => e.needsMeasurement),
          t = new Set(e.map((e) => e.element)),
          n = new Map();
        t.forEach((e) => {
            aa(e).length && (n.set(e, aa(e)), e.render());
          }),
          e.forEach((e) => e.measureInitialState()),
          t.forEach((e) => {
            e.render();
          }),
          e.forEach((e) => e.measureEndState()),
          e.forEach((e) => {
            void 0 !== e.suspendedScrollY &&
              window.scrollTo(0, e.suspendedScrollY);
          });
      }
      (af = !1), (ad = !1), ap.forEach((e) => e.complete()), ap.clear();
    }

    function am() {
      ap.forEach((e) => {
        e.readKeyframes(), e.needsMeasurement && (af = !0);
      });
    }
    class ay {
      constructor(e, t, n, r, i, o = !1) {
        (this.isComplete = !1),
        (this.isAsync = !1),
        (this.needsMeasurement = !1),
        (this.isScheduled = !1),
        (this.unresolvedKeyframes = [...e]),
        (this.onComplete = t),
        (this.name = n),
        (this.motionValue = r),
        (this.element = i),
        (this.isAsync = o);
      }
      scheduleResolve() {
        (this.isScheduled = !0),
        this.isAsync ?
          (ap.add(this),
            ad || ((ad = !0), ob.read(am), ob.resolveKeyframes(ah))) :
          (this.readKeyframes(), this.complete());
      }
      readKeyframes() {
        let {
          unresolvedKeyframes: e,
          name: t,
          element: n,
          motionValue: r,
        } = this;
        for (let i = 0; i < e.length; i++)
          if (null === e[i]) {
            if (0 === i) {
              let i = null == r ? void 0 : r.get(),
                o = e[e.length - 1];
              if (void 0 !== i) e[0] = i;
              else if (n && t) {
                let r = n.readValue(t, o);
                null != r && (e[0] = r);
              }
              void 0 === e[0] && (e[0] = o), r && void 0 === i && r.set(e[0]);
            } else e[i] = e[i - 1];
          }
      }
      setFinalKeyframe() {}
      measureInitialState() {}
      renderEndStyles() {}
      measureEndState() {}
      complete() {
        (this.isComplete = !0),
        this.onComplete(this.unresolvedKeyframes, this.finalKeyframe),
          ap.delete(this);
      }
      cancel() {
        this.isComplete || ((this.isScheduled = !1), ap.delete(this));
      }
      resume() {
        this.isComplete || this.scheduleResolve();
      }
    }
    const ag = (e, t) => (n) =>
      !!(
        (iX(n) && iQ.test(n) && n.startsWith(e)) ||
        (t && Object.prototype.hasOwnProperty.call(n, t))
      ),
      av = (e, t, n) => (r) => {
        if (!iX(r)) return r;
        let [i, o, a, s] = r.match(i$);
        return {
          [e]: parseFloat(i),
          [t]: parseFloat(o),
          [n]: parseFloat(a),
          alpha: void 0 !== s ? parseFloat(s) : 1,
        };
      },
      ab = (e) => iz(0, 255, e),
      aw = {
        ...iB,
        transform: (e) => Math.round(ab(e))
      },
      ax = {
        test: ag("rgb", "red"),
        parse: av("red", "green", "blue"),
        transform: ({
            red: e,
            green: t,
            blue: n,
            alpha: r = 1
          }) =>
          "rgba(" +
          aw.transform(e) +
          ", " +
          aw.transform(t) +
          ", " +
          aw.transform(n) +
          ", " +
          iW(iq.transform(r)) +
          ")",
      },
      aS = {
        test: ag("#"),
        parse: function(e) {
          let t = "",
            n = "",
            r = "",
            i = "";
          return (
            e.length > 5 ?
            ((t = e.substring(1, 3)),
              (n = e.substring(3, 5)),
              (r = e.substring(5, 7)),
              (i = e.substring(7, 9))) :
            ((t = e.substring(1, 2)),
              (n = e.substring(2, 3)),
              (r = e.substring(3, 4)),
              (i = e.substring(4, 5)),
              (t += t),
              (n += n),
              (r += r),
              (i += i)), {
              red: parseInt(t, 16),
              green: parseInt(n, 16),
              blue: parseInt(r, 16),
              alpha: i ? parseInt(i, 16) / 255 : 1,
            }
          );
        },
        transform: ax.transform,
      },
      ak = {
        test: ag("hsl", "hue"),
        parse: av("hue", "saturation", "lightness"),
        transform: ({
            hue: e,
            saturation: t,
            lightness: n,
            alpha: r = 1
          }) =>
          "hsla(" +
          Math.round(e) +
          ", " +
          iJ.transform(iW(t)) +
          ", " +
          iJ.transform(iW(n)) +
          ", " +
          iW(iq.transform(r)) +
          ")",
      },
      a_ = {
        test: (e) => ax.test(e) || aS.test(e) || ak.test(e),
        parse: (e) =>
          ax.test(e) ? ax.parse(e) : ak.test(e) ? ak.parse(e) : aS.parse(e),
        transform: (e) =>
          iX(e) ?
          e : e.hasOwnProperty("red") ?
          ax.transform(e) : ak.transform(e),
      },
      aT = "number",
      aE = "color",
      aC =
      /var\s*\(\s*--(?:[\w-]+\s*|[\w-]+\s*,(?:\s*[^)(\s]|\s*\((?:[^)(]|\([^)(]*\))*\))+\s*)\)|#[\da-f]{3,8}|(?:rgb|hsl)a?\((?:-?[\d.]+%?[,\s]+){2}-?[\d.]+%?\s*(?:[,/]\s*)?(?:\b\d+(?:\.\d+)?|\.\d+)?%?\)|-?(?:\d+(?:\.\d+)?|\.\d+)/giu;

    function aP(e) {
      let t = e.toString(),
        n = [],
        r = {
          color: [],
          number: [],
          var: []
        },
        i = [],
        o = 0,
        a = t
        .replace(
          aC,
          (e) => (
            a_.test(e) ?
            (r.color.push(o), i.push(aE), n.push(a_.parse(e))) :
            e.startsWith("var(") ?
            (r.var.push(o), i.push("var"), n.push(e)) :
            (r.number.push(o), i.push(aT), n.push(parseFloat(e))),
            ++o,
            "${}"
          )
        )
        .split("${}");
      return {
        values: n,
        split: a,
        indexes: r,
        types: i
      };
    }

    function aO(e) {
      return aP(e).values;
    }

    function aA(e) {
      let {
        split: t,
        types: n
      } = aP(e),
        r = t.length;
      return (e) => {
        let i = "";
        for (let o = 0; o < r; o++)
          if (((i += t[o]), void 0 !== e[o])) {
            let t = n[o];
            t === aT ?
              (i += iW(e[o])) :
              t === aE ?
              (i += a_.transform(e[o])) :
              (i += e[o]);
          }
        return i;
      };
    }
    const aj = (e) => ("number" == typeof e ? 0 : e),
      aD = {
        test: function(e) {
          var t, n;
          return (
            isNaN(e) &&
            iX(e) &&
            ((null === (t = e.match(i$)) || void 0 === t ?
              void 0 :
              t.length) || 0) +
            ((null === (n = e.match(iK)) || void 0 === n ?
              void 0 :
              n.length) || 0) >
            0
          );
        },
        parse: aO,
        createTransformer: aA,
        getAnimatableNone: function(e) {
          let t = aO(e);
          return aA(e)(t.map(aj));
        },
      },
      aR = new Set(["brightness", "contrast", "saturate", "opacity"]);

    function aM(e) {
      let [t, n] = e.slice(0, -1).split("(");
      if ("drop-shadow" === t) return e;
      let [r] = n.match(i$) || [];
      if (!r) return e;
      let i = n.replace(r, ""),
        o = aR.has(t) ? 1 : 0;
      return r !== n && (o *= 100), t + "(" + o + i + ")";
    }
    const aN = /\b([a-z-]*)\(.*?\)/gu,
      aL = {
        ...aD,
        getAnimatableNone: (e) => {
          let t = e.match(aN);
          return t ? t.map(aM).join(" ") : e;
        },
      },
      aI = {
        ...i4,
        color: a_,
        backgroundColor: a_,
        outlineColor: a_,
        fill: a_,
        stroke: a_,
        borderColor: a_,
        borderTopColor: a_,
        borderRightColor: a_,
        borderBottomColor: a_,
        borderLeftColor: a_,
        filter: aL,
        WebkitFilter: aL,
      },
      aU = (e) => aI[e];

    function aF(e, t) {
      let n = aU(e);
      return (
        n !== aL && (n = aD),
        n.getAnimatableNone ? n.getAnimatableNone(t) : void 0
      );
    }
    class aV extends ay {
      constructor(e, t, n, r) {
        super(e, t, n, r, null == r ? void 0 : r.owner, !0);
      }
      readKeyframes() {
        let {
          unresolvedKeyframes: e,
          element: t,
          name: n
        } = this;
        if (!t.current) return;
        super.readKeyframes();
        for (let n = 0; n < e.length; n++) {
          let r = e[n];
          if ("string" == typeof r && iU(r)) {
            let i = (function e(t, n, r = 1) {
              ov(
                r <= 4,
                `Max CSS variable fallback depth detected in property "${t}". This may indicate a circular fallback dependency.`
              );
              let [i, o] = (function(e) {
                let t = o7.exec(e);
                if (!t) return [, ];
                let [, n, r, i] = t;
                return [`--${null != n ? n : r}`, i];
              })(t);
              if (!i) return;
              let a = window.getComputedStyle(n).getPropertyValue(i);
              if (a) {
                let e = a.trim();
                return o9(e) ? parseFloat(e) : e;
              }
              return iU(o) ? e(o, n, r + 1) : o;
            })(r, t.current);
            void 0 !== i && (e[n] = i),
              n === e.length - 1 && (this.finalKeyframe = r);
          }
        }
        if (!ae.has(n) || 2 !== e.length) return this.resolveNoneKeyframes();
        let [r, i] = e,
        o = ac(r),
          a = ac(i);
        if (o !== a) {
          if (at(o) && at(a))
            for (let t = 0; t < e.length; t++) {
              let n = e[t];
              "string" == typeof n && (e[t] = parseFloat(n));
            }
          else this.needsMeasurement = !0;
        }
      }
      resolveNoneKeyframes() {
        let {
          unresolvedKeyframes: e,
          name: t
        } = this,
        n = [];
        for (let t = 0; t < e.length; t++) {
          var r;
          ("number" == typeof(r = e[t]) ?
            0 === r :
            null === r || "none" === r || "0" === r || o8(r)) && n.push(t);
        }
        n.length &&
          (function(e, t, n) {
            let r,
              i = 0;
            for (; i < e.length && !r;)
              "string" == typeof e[i] &&
              "none" !== e[i] &&
              "0" !== e[i] &&
              (r = e[i]),
              i++;
            if (r && n)
              for (let i of t) e[i] = aF(n, r);
          })(e, n, t);
      }
      measureInitialState() {
        let {
          element: e,
          unresolvedKeyframes: t,
          name: n
        } = this;
        if (!e.current) return;
        "height" === n && (this.suspendedScrollY = window.pageYOffset),
          (this.measuredOrigin = as[n](
            e.measureViewportBox(),
            window.getComputedStyle(e.current)
          )),
          (t[0] = this.measuredOrigin);
        let r = t[t.length - 1];
        void 0 !== r && e.getValue(n, r).jump(r, !1);
      }
      measureEndState() {
        var e;
        let {
          element: t,
          name: n,
          unresolvedKeyframes: r
        } = this;
        if (!t.current) return;
        let i = t.getValue(n);
        i && i.jump(this.measuredOrigin, !1);
        let o = r.length - 1,
          a = r[o];
        (r[o] = as[n](
          t.measureViewportBox(),
          window.getComputedStyle(t.current)
        )),
        null !== a &&
          void 0 === this.finalKeyframe &&
          (this.finalKeyframe = a),
          (null === (e = this.removedTransforms) || void 0 === e ?
            void 0 :
            e.length) &&
          this.removedTransforms.forEach(([e, n]) => {
            t.getValue(e).set(n);
          }),
          this.resolveNoneKeyframes();
      }
    }
    const az = (e, t) =>
      "zIndex" !== t &&
      !!(
        "number" == typeof e ||
        Array.isArray(e) ||
        ("string" == typeof e &&
          (aD.test(e) || "0" === e) &&
          !e.startsWith("url("))
      );
    class aB {
      constructor({
        autoplay: e = !0,
        delay: t = 0,
        type: n = "keyframes",
        repeat: r = 0,
        repeatDelay: i = 0,
        repeatType: o = "loop",
        ...a
      }) {
        (this.isStopped = !1),
        (this.hasAttemptedResolve = !1),
        (this.options = {
          autoplay: e,
          delay: t,
          type: n,
          repeat: r,
          repeatDelay: i,
          repeatType: o,
          ...a,
        }),
        this.updateFinishedPromise();
      }
      get resolved() {
        return (
          this._resolved || this.hasAttemptedResolve || (am(), ah()),
          this._resolved
        );
      }
      onKeyframesResolved(e, t) {
        this.hasAttemptedResolve = !0;
        let {
          name: n,
          type: r,
          velocity: i,
          delay: o,
          onComplete: a,
          onUpdate: s,
          isGenerator: l,
        } = this.options;
        if (
          !l &&
          !(function(e, t, n, r) {
            let i = e[0];
            if (null === i) return !1;
            let o = e[e.length - 1],
              a = az(i, t),
              s = az(o, t);
            return (
              ov(
                a === s,
                `You are trying to animate ${t} from "${i}" to "${o}". ${i} is not an animatable value - to enable this animation set ${i} to a value animatable to ${o} via the \`style\` property.`
              ),
              !!a &&
              !!s &&
              ((function(e) {
                  let t = e[0];
                  if (1 === e.length) return !0;
                  for (let n = 0; n < e.length; n++)
                    if (e[n] !== t) return !0;
                })(e) ||
                ("spring" === n && r))
            );
          })(e, n, r, i)
        ) {
          if (o2.current || !o) {
            null == s || s(o4(e, this.options, t)),
              null == a || a(),
              this.resolveFinishedPromise();
            return;
          }
          this.options.duration = 0;
        }
        let u = this.initPlayback(e, t);
        !1 !== u &&
          ((this._resolved = {
              keyframes: e,
              finalKeyframe: t,
              ...u
            }),
            this.onPostResolved());
      }
      onPostResolved() {}
      then(e, t) {
        return this.currentFinishedPromise.then(e, t);
      }
      updateFinishedPromise() {
        this.currentFinishedPromise = new Promise((e) => {
          this.resolveFinishedPromise = e;
        });
      }
    }

    function aq(e, t, n) {
      var r, i;
      let o = Math.max(t - 5, 0);
      return (r = n - e(o)), (i = t - o) ? (1e3 / i) * r : 0;
    }

    function aH(e, t) {
      return e * Math.sqrt(1 - t * t);
    }
    const aW = ["duration", "bounce"],
      a$ = ["stiffness", "damping", "mass"];

    function aK(e, t) {
      return t.some((t) => void 0 !== e[t]);
    }

    function aQ({
      keyframes: e,
      restDelta: t,
      restSpeed: n,
      ...r
    }) {
      let i;
      let o = e[0],
        a = e[e.length - 1],
        s = {
          done: !1,
          value: o
        },
        {
          stiffness: l,
          damping: u,
          mass: c,
          duration: p,
          velocity: d,
          isResolvedFromDuration: f,
        } = (function(e) {
          let t = {
            velocity: 0,
            stiffness: 100,
            damping: 10,
            mass: 1,
            isResolvedFromDuration: !1,
            ...e,
          };
          if (!aK(e, a$) && aK(e, aW)) {
            let n = (function({
              duration: e = 800,
              bounce: t = 0.25,
              velocity: n = 0,
              mass: r = 1,
            }) {
              let i, o;
              ov(e <= oQ(10), "Spring duration must be 10 seconds or less");
              let a = 1 - t;
              (a = iz(0.05, 1, a)),
              (e = iz(0.01, 10, oX(e))),
              a < 1 ?
                ((i = (t) => {
                    let r = t * a,
                      i = r * e;
                    return 0.001 - ((r - n) / aH(t, a)) * Math.exp(-i);
                  }),
                  (o = (t) => {
                    let r = t * a * e,
                      o = Math.pow(a, 2) * Math.pow(t, 2) * e,
                      s = Math.exp(-r),
                      l = aH(Math.pow(t, 2), a);
                    return (
                      ((r * n + n - o) * s * (-i(t) + 0.001 > 0 ? -1 : 1)) /
                      l
                    );
                  })) :
                ((i = (t) =>
                    -0.001 + Math.exp(-t * e) * ((t - n) * e + 1)),
                  (o = (t) => e * e * (n - t) * Math.exp(-t * e)));
              let s = (function(e, t, n) {
                let r = n;
                for (let n = 1; n < 12; n++) r -= e(r) / t(r);
                return r;
              })(i, o, 5 / e);
              if (((e = oQ(e)), isNaN(s)))
                return {
                  stiffness: 100,
                  damping: 10,
                  duration: e
                };
              {
                let t = Math.pow(s, 2) * r;
                return {
                  stiffness: t,
                  damping: 2 * a * Math.sqrt(r * t),
                  duration: e,
                };
              }
            })(e);
            (t = {
              ...t,
              ...n,
              mass: 1
            }).isResolvedFromDuration = !0;
          }
          return t;
        })({
          ...r,
          velocity: -oX(r.velocity || 0)
        }),
        h = d || 0,
        m = u / (2 * Math.sqrt(l * c)),
        y = a - o,
        g = oX(Math.sqrt(l / c)),
        v = 5 > Math.abs(y);
      if ((n || (n = v ? 0.01 : 2), t || (t = v ? 0.005 : 0.5), m < 1)) {
        let e = aH(g, m);
        i = (t) =>
          a -
          Math.exp(-m * g * t) *
          (((h + m * g * y) / e) * Math.sin(e * t) + y * Math.cos(e * t));
      } else if (1 === m)
        i = (e) => a - Math.exp(-g * e) * (y + (h + g * y) * e);
      else {
        let e = g * Math.sqrt(m * m - 1);
        i = (t) => {
          let n = Math.exp(-m * g * t),
            r = Math.min(e * t, 300);
          return (
            a -
            (n * ((h + m * g * y) * Math.sinh(r) + e * y * Math.cosh(r))) / e
          );
        };
      }
      return {
        calculatedDuration: (f && p) || null,
        next: (e) => {
          let r = i(e);
          if (f) s.done = e >= p;
          else {
            let o = h;
            0 !== e && (o = m < 1 ? aq(i, e, r) : 0);
            let l = Math.abs(o) <= n,
              u = Math.abs(a - r) <= t;
            s.done = l && u;
          }
          return (s.value = s.done ? a : r), s;
        },
      };
    }

    function aX({
      keyframes: e,
      velocity: t = 0,
      power: n = 0.8,
      timeConstant: r = 325,
      bounceDamping: i = 10,
      bounceStiffness: o = 500,
      modifyTarget: a,
      min: s,
      max: l,
      restDelta: u = 0.5,
      restSpeed: c,
    }) {
      let p, d;
      let f = e[0],
        h = {
          done: !1,
          value: f
        },
        m = (e) => (void 0 !== s && e < s) || (void 0 !== l && e > l),
        y = (e) =>
        void 0 === s ?
        l :
        void 0 === l ?
        s :
        Math.abs(s - e) < Math.abs(l - e) ?
        s :
        l,
        g = n * t,
        v = f + g,
        b = void 0 === a ? v : a(v);
      b !== v && (g = b - f);
      let w = (e) => -g * Math.exp(-e / r),
        x = (e) => b + w(e),
        S = (e) => {
          let t = w(e),
            n = x(e);
          (h.done = Math.abs(t) <= u), (h.value = h.done ? b : n);
        },
        k = (e) => {
          m(h.value) &&
            ((p = e),
              (d = aQ({
                keyframes: [h.value, y(h.value)],
                velocity: aq(x, e, h.value),
                damping: i,
                stiffness: o,
                restDelta: u,
                restSpeed: c,
              })));
        };
      return (
        k(0), {
          calculatedDuration: null,
          next: (e) => {
            let t = !1;
            return (d || void 0 !== p || ((t = !0), S(e), k(e)),
                void 0 !== p && e >= p) ?
              d.next(e - p) :
              (t || S(e), h);
          },
        }
      );
    }
    const aY = (e, t, n) =>
      (((1 - 3 * n + 3 * t) * e + (3 * n - 6 * t)) * e + 3 * t) * e;

    function aG(e, t, n, r) {
      if (e === t && n === r) return ov;
      let i = (t) =>
        (function(e, t, n, r, i) {
          let o, a;
          let s = 0;
          do
            (o = aY((a = t + (n - t) / 2), r, i) - e) > 0 ? (n = a) : (t = a);
          while (Math.abs(o) > 1e-7 && ++s < 12);
          return a;
        })(t, 0, 1, e, n);
      return (e) => (0 === e || 1 === e ? e : aY(i(e), t, r));
    }
    const aJ = aG(0.42, 0, 1, 1),
      aZ = aG(0, 0, 0.58, 1),
      a0 = aG(0.42, 0, 0.58, 1),
      a1 = (e) => Array.isArray(e) && "number" != typeof e[0],
      a2 = (e) => (t) => t <= 0.5 ? e(2 * t) / 2 : (2 - e(2 * (1 - t))) / 2,
      a3 = (e) => (t) => 1 - e(1 - t),
      a4 = (e) => 1 - Math.sin(Math.acos(e)),
      a5 = a3(a4),
      a6 = a2(a4),
      a8 = aG(0.33, 1.53, 0.69, 0.99),
      a9 = a3(a8),
      a7 = a2(a9),
      se = {
        linear: ov,
        easeIn: aJ,
        easeInOut: a0,
        easeOut: aZ,
        circIn: a4,
        circInOut: a6,
        circOut: a5,
        backIn: a9,
        backInOut: a7,
        backOut: a8,
        anticipate: (e) =>
          (e *= 2) < 1 ? 0.5 * a9(e) : 0.5 * (2 - Math.pow(2, -10 * (e - 1))),
      },
      st = (e) => {
        if (Array.isArray(e)) {
          ov(
            4 === e.length,
            "Cubic bezier arrays must contain four numerical values."
          );
          let [t, n, r, i] = e;
          return aG(t, n, r, i);
        }
        return "string" == typeof e ?
          (ov(void 0 !== se[e], `Invalid easing type '${e}'`), se[e]) :
          e;
      },
      sn = (e, t, n) => {
        let r = t - e;
        return 0 === r ? 1 : (n - e) / r;
      },
      sr = (e, t, n) => e + (t - e) * n;

    function si(e, t, n) {
      return (n < 0 && (n += 1), n > 1 && (n -= 1), n < 1 / 6) ?
        e + (t - e) * 6 * n :
        n < 0.5 ?
        t :
        n < 2 / 3 ?
        e + (t - e) * (2 / 3 - n) * 6 :
        e;
    }
    const so = (e, t, n) => {
        let r = e * e,
          i = n * (t * t - r) + r;
        return i < 0 ? 0 : Math.sqrt(i);
      },
      sa = [aS, ax, ak],
      ss = (e) => sa.find((t) => t.test(e));

    function sl(e) {
      let t = ss(e);
      ov(
        !!t,
        `'${e}' is not an animatable color. Use the equivalent color code instead.`
      );
      let n = t.parse(e);
      return (
        t === ak &&
        (n = (function({
          hue: e,
          saturation: t,
          lightness: n,
          alpha: r
        }) {
          (e /= 360), (n /= 100);
          let i = 0,
            o = 0,
            a = 0;
          if ((t /= 100)) {
            let r = n < 0.5 ? n * (1 + t) : n + t - n * t,
              s = 2 * n - r;
            (i = si(s, r, e + 1 / 3)),
            (o = si(s, r, e)),
            (a = si(s, r, e - 1 / 3));
          } else i = o = a = n;
          return {
            red: Math.round(255 * i),
            green: Math.round(255 * o),
            blue: Math.round(255 * a),
            alpha: r,
          };
        })(n)),
        n
      );
    }
    const su = (e, t) => {
      let n = sl(e),
        r = sl(t),
        i = {
          ...n
        };
      return (e) => (
        (i.red = so(n.red, r.red, e)),
        (i.green = so(n.green, r.green, e)),
        (i.blue = so(n.blue, r.blue, e)),
        (i.alpha = sr(n.alpha, r.alpha, e)),
        ax.transform(i)
      );
    };

    function sc(e, t) {
      return (n) => (n > 0 ? t : e);
    }

    function sp(e, t) {
      return (n) => sr(e, t, n);
    }

    function sd(e) {
      return "number" == typeof e ?
        sp :
        "string" == typeof e ?
        iU(e) ?
        sc :
        a_.test(e) ?
        su :
        sm :
        Array.isArray(e) ?
        sf :
        "object" == typeof e ?
        a_.test(e) ?
        su :
        sh :
        sc;
    }

    function sf(e, t) {
      let n = [...e],
        r = n.length,
        i = e.map((e, n) => sd(e)(e, t[n]));
      return (e) => {
        for (let t = 0; t < r; t++) n[t] = i[t](e);
        return n;
      };
    }

    function sh(e, t) {
      let n = {
          ...e,
          ...t
        },
        r = {};
      for (let i in n)
        void 0 !== e[i] && void 0 !== t[i] && (r[i] = sd(e[i])(e[i], t[i]));
      return (e) => {
        for (let t in r) n[t] = r[t](e);
        return n;
      };
    }
    const sm = (e, t) => {
      let n = aD.createTransformer(t),
        r = aP(e),
        i = aP(t);
      return r.indexes.var.length === i.indexes.var.length &&
        r.indexes.color.length === i.indexes.color.length &&
        r.indexes.number.length >= i.indexes.number.length ?
        oj(
          sf(
            (function(e, t) {
              var n;
              let r = [],
                i = {
                  color: 0,
                  var: 0,
                  number: 0
                };
              for (let o = 0; o < t.values.length; o++) {
                let a = t.types[o],
                  s = e.indexes[a][i[a]],
                  l = null !== (n = e.values[s]) && void 0 !== n ? n : 0;
                (r[o] = l), i[a]++;
              }
              return r;
            })(r, i),
            i.values
          ),
          n
        ) :
        (ov(
            !0,
            `Complex values '${e}' and '${t}' too different to mix. Ensure all colors are of the same type, and that each contains the same quantity of number and color values. Falling back to instant transition.`
          ),
          sc(e, t));
    };

    function sy(e, t, n) {
      return "number" == typeof e &&
        "number" == typeof t &&
        "number" == typeof n ?
        sr(e, t, n) :
        sd(e)(e, t);
    }

    function sg({
      duration: e = 300,
      keyframes: t,
      times: n,
      ease: r = "easeInOut",
    }) {
      let i = a1(r) ? r.map(st) : st(r),
        o = {
          done: !1,
          value: t[0]
        },
        a = (function(e, t, {
          clamp: n = !0,
          ease: r,
          mixer: i
        } = {}) {
          let o = e.length;
          if (
            (ov(
                o === t.length,
                "Both input and output ranges must be the same length"
              ),
              1 === o)
          )
            return () => t[0];
          if (2 === o && e[0] === e[1]) return () => t[1];
          e[0] > e[o - 1] && ((e = [...e].reverse()), (t = [...t].reverse()));
          let a = (function(e, t, n) {
              let r = [],
                i = n || sy,
                o = e.length - 1;
              for (let n = 0; n < o; n++) {
                let o = i(e[n], e[n + 1]);
                t && (o = oj(Array.isArray(t) ? t[n] || ov : t, o)),
                  r.push(o);
              }
              return r;
            })(t, r, i),
            s = a.length,
            l = (t) => {
              let n = 0;
              if (s > 1)
                for (; n < e.length - 2 && !(t < e[n + 1]); n++);
              let r = sn(e[n], e[n + 1], t);
              return a[n](r);
            };
          return n ? (t) => l(iz(e[0], e[o - 1], t)) : l;
        })(
          (n && n.length === t.length ?
            n :
            (function(e) {
              let t = [0];
              return (
                (function(e, t) {
                  let n = e[e.length - 1];
                  for (let r = 1; r <= t; r++) {
                    let i = sn(0, t, r);
                    e.push(sr(n, 1, i));
                  }
                })(t, e.length - 1),
                t
              );
            })(t)
          ).map((t) => t * e),
          t, {
            ease: Array.isArray(i) ?
              i : t.map(() => i || a0).splice(0, t.length - 1),
          }
        );
      return {
        calculatedDuration: e,
        next: (t) => ((o.value = a(t)), (o.done = t >= e), o),
      };
    }
    const sv = (e) => {
        let t = ({
          timestamp: t
        }) => e(t);
        return {
          start: () => ob.update(t, !0),
          stop: () => ow(t),
          now: () => (ox.isProcessing ? ox.timestamp : o6.now()),
        };
      },
      sb = {
        decay: aX,
        inertia: aX,
        tween: sg,
        keyframes: sg,
        spring: aQ
      },
      sw = (e) => e / 100;
    class sx extends aB {
      constructor({
        KeyframeResolver: e = ay,
        ...t
      }) {
        super(t),
          (this.holdTime = null),
          (this.startTime = null),
          (this.cancelTime = null),
          (this.currentTime = 0),
          (this.playbackSpeed = 1),
          (this.pendingPlayState = "running"),
          (this.state = "idle");
        let {
          name: n,
          motionValue: r,
          keyframes: i
        } = this.options,
          o = (e, t) => this.onKeyframesResolved(e, t);
        n && r && r.owner ?
          (this.resolver = r.owner.resolveKeyframes(i, o, n, r)) :
          (this.resolver = new e(i, o, n, r)),
          this.resolver.scheduleResolve();
      }
      initPlayback(e) {
        let t, n;
        let {
          type: r = "keyframes",
          repeat: i = 0,
          repeatDelay: o = 0,
          repeatType: a,
          velocity: s = 0,
        } = this.options,
          l = sb[r] || sg;
        l !== sg &&
          "number" != typeof e[0] &&
          ((t = oj(sw, sy(e[0], e[1]))), (e = [0, 100]));
        let u = l({
          ...this.options,
          keyframes: e
        });
        "mirror" === a &&
          (n = l({
            ...this.options,
            keyframes: [...e].reverse(),
            velocity: -s,
          })),
          null === u.calculatedDuration &&
          (u.calculatedDuration = (function(e) {
            let t = 0,
              n = e.next(t);
            for (; !n.done && t < 2e4;)(t += 50), (n = e.next(t));
            return t >= 2e4 ? 1 / 0 : t;
          })(u));
        let {
          calculatedDuration: c
        } = u,
        p = c + o;
        return {
          generator: u,
          mirroredGenerator: n,
          mapPercentToKeyframes: t,
          calculatedDuration: c,
          resolvedDuration: p,
          totalDuration: p * (i + 1) - o,
        };
      }
      onPostResolved() {
        let {
          autoplay: e = !0
        } = this.options;
        this.play(),
          "paused" !== this.pendingPlayState && e ?
          (this.state = this.pendingPlayState) :
          this.pause();
      }
      tick(e, t = !1) {
        let {
          resolved: n
        } = this;
        if (!n) {
          let {
            keyframes: e
          } = this.options;
          return {
            done: !0,
            value: e[e.length - 1]
          };
        }
        let {
          finalKeyframe: r,
          generator: i,
          mirroredGenerator: o,
          mapPercentToKeyframes: a,
          keyframes: s,
          calculatedDuration: l,
          totalDuration: u,
          resolvedDuration: c,
        } = n;
        if (null === this.startTime) return i.next(0);
        let {
          delay: p,
          repeat: d,
          repeatType: f,
          repeatDelay: h,
          onUpdate: m,
        } = this.options;
        this.speed > 0 ?
          (this.startTime = Math.min(this.startTime, e)) :
          this.speed < 0 &&
          (this.startTime = Math.min(e - u / this.speed, this.startTime)),
          t ?
          (this.currentTime = e) :
          null !== this.holdTime ?
          (this.currentTime = this.holdTime) :
          (this.currentTime =
            Math.round(e - this.startTime) * this.speed);
        let y = this.currentTime - p * (this.speed >= 0 ? 1 : -1),
          g = this.speed >= 0 ? y < 0 : y > u;
        (this.currentTime = Math.max(y, 0)),
        "finished" === this.state &&
          null === this.holdTime &&
          (this.currentTime = u);
        let v = this.currentTime,
          b = i;
        if (d) {
          let e = Math.min(this.currentTime, u) / c,
            t = Math.floor(e),
            n = e % 1;
          !n && e >= 1 && (n = 1),
            1 === n && t--,
            (t = Math.min(t, d + 1)) % 2 &&
            ("reverse" === f ?
              ((n = 1 - n), h && (n -= h / c)) :
              "mirror" === f && (b = o)),
            (v = iz(0, 1, n) * c);
        }
        let w = g ? {
          done: !1,
          value: s[0]
        } : b.next(v);
        a && (w.value = a(w.value));
        let {
          done: x
        } = w;
        g ||
          null === l ||
          (x =
            this.speed >= 0 ? this.currentTime >= u : this.currentTime <= 0);
        let S =
          null === this.holdTime &&
          ("finished" === this.state || ("running" === this.state && x));
        return (
          S && void 0 !== r && (w.value = o4(s, this.options, r)),
          m && m(w.value),
          S && this.finish(),
          w
        );
      }
      get duration() {
        let {
          resolved: e
        } = this;
        return e ? oX(e.calculatedDuration) : 0;
      }
      get time() {
        return oX(this.currentTime);
      }
      set time(e) {
        (e = oQ(e)),
        (this.currentTime = e),
        null !== this.holdTime || 0 === this.speed ?
          (this.holdTime = e) :
          this.driver &&
          (this.startTime = this.driver.now() - e / this.speed);
      }
      get speed() {
        return this.playbackSpeed;
      }
      set speed(e) {
        let t = this.playbackSpeed !== e;
        (this.playbackSpeed = e), t && (this.time = oX(this.currentTime));
      }
      play() {
        if (
          (this.resolver.isScheduled || this.resolver.resume(),
            !this._resolved)
        ) {
          this.pendingPlayState = "running";
          return;
        }
        if (this.isStopped) return;
        let {
          driver: e = sv,
          onPlay: t
        } = this.options;
        this.driver || (this.driver = e((e) => this.tick(e))), t && t();
        let n = this.driver.now();
        null !== this.holdTime ?
          (this.startTime = n - this.holdTime) :
          (this.startTime && "finished" !== this.state) ||
          (this.startTime = n),
          "finished" === this.state && this.updateFinishedPromise(),
          (this.cancelTime = this.startTime),
          (this.holdTime = null),
          (this.state = "running"),
          this.driver.start();
      }
      pause() {
        var e;
        if (!this._resolved) {
          this.pendingPlayState = "paused";
          return;
        }
        (this.state = "paused"),
        (this.holdTime =
          null !== (e = this.currentTime) && void 0 !== e ? e : 0);
      }
      stop() {
        if (
          (this.resolver.cancel(),
            (this.isStopped = !0),
            "idle" === this.state)
        )
          return;
        this.teardown();
        let {
          onStop: e
        } = this.options;
        e && e();
      }
      complete() {
        "running" !== this.state && this.play(),
          (this.pendingPlayState = this.state = "finished"),
          (this.holdTime = null);
      }
      finish() {
        this.teardown(), (this.state = "finished");
        let {
          onComplete: e
        } = this.options;
        e && e();
      }
      cancel() {
        null !== this.cancelTime && this.tick(this.cancelTime),
          this.teardown(),
          this.updateFinishedPromise();
      }
      teardown() {
        (this.state = "idle"),
        this.stopDriver(),
          this.resolveFinishedPromise(),
          this.updateFinishedPromise(),
          (this.startTime = this.cancelTime = null),
          this.resolver.cancel();
      }
      stopDriver() {
        this.driver && (this.driver.stop(), (this.driver = void 0));
      }
      sample(e) {
        return (this.startTime = 0), this.tick(e, !0);
      }
    }
    const sS = (e) => Array.isArray(e) && "number" == typeof e[0],
      sk = ([e, t, n, r]) => `cubic-bezier(${e}, ${t}, ${n}, ${r})`,
      s_ = {
        linear: "linear",
        ease: "ease",
        easeIn: "ease-in",
        easeOut: "ease-out",
        easeInOut: "ease-in-out",
        circIn: sk([0, 0.65, 0.55, 1]),
        circOut: sk([0.55, 0, 1, 0.45]),
        backIn: sk([0.31, 0.01, 0.66, -0.59]),
        backOut: sk([0.33, 1.53, 0.69, 0.99]),
      };

    function sT(e) {
      return sE(e) || s_.easeOut;
    }

    function sE(e) {
      if (e) return sS(e) ? sk(e) : Array.isArray(e) ? e.map(sT) : s_[e];
    }
    const sC =
      ((a = () => Object.hasOwnProperty.call(Element.prototype, "animate")),
        () => (void 0 === t && (t = a()), t)),
      sP = new Set(["opacity", "clipPath", "filter", "transform"]);
    class sO extends aB {
      constructor(e) {
        super(e);
        let {
          name: t,
          motionValue: n,
          keyframes: r
        } = this.options;
        (this.resolver = new aV(
          r,
          (e, t) => this.onKeyframesResolved(e, t),
          t,
          n
        )),
        this.resolver.scheduleResolve();
      }
      initPlayback(e, t) {
        var n, r;
        let {
          duration: i = 300,
          times: o,
          ease: a,
          type: s,
          motionValue: l,
          name: u,
        } = this.options;
        if (!(null === (n = l.owner) || void 0 === n ? void 0 : n.current))
          return !1;
        if (
          "spring" === (r = this.options).type ||
          "backgroundColor" === r.name ||
          !(function e(t) {
            return !!(
              !t ||
              ("string" == typeof t && t in s_) ||
              sS(t) ||
              (Array.isArray(t) && t.every(e))
            );
          })(r.ease)
        ) {
          let {
            onComplete: t,
            onUpdate: n,
            motionValue: r,
            ...l
          } = this.options,
            u = (function(e, t) {
              let n = new sx({
                  ...t,
                  keyframes: e,
                  repeat: 0,
                  delay: 0,
                  isGenerator: !0,
                }),
                r = {
                  done: !1,
                  value: e[0]
                },
                i = [],
                o = 0;
              for (; !r.done && o < 2e4;)
                i.push((r = n.sample(o)).value), (o += 10);
              return {
                times: void 0,
                keyframes: i,
                duration: o - 10,
                ease: "linear",
              };
            })(e, l);
          1 === (e = u.keyframes).length && (e[1] = e[0]),
            (i = u.duration),
            (o = u.times),
            (a = u.ease),
            (s = "keyframes");
        }
        let c = (function(
          e,
          t,
          n, {
            delay: r = 0,
            duration: i = 300,
            repeat: o = 0,
            repeatType: a = "loop",
            ease: s,
            times: l,
          } = {}
        ) {
          let u = {
            [t]: n
          };
          l && (u.offset = l);
          let c = sE(s);
          return (
            Array.isArray(c) && (u.easing = c),
            e.animate(u, {
              delay: r,
              duration: i,
              easing: Array.isArray(c) ? "linear" : c,
              fill: "both",
              iterations: o + 1,
              direction: "reverse" === a ? "alternate" : "normal",
            })
          );
        })(l.owner.current, u, e, {
          ...this.options,
          duration: i,
          times: o,
          ease: a,
        });
        return (
          (c.startTime = o6.now()),
          this.pendingTimeline ?
          ((c.timeline = this.pendingTimeline),
            (this.pendingTimeline = void 0)) :
          (c.onfinish = () => {
            let {
              onComplete: n
            } = this.options;
            l.set(o4(e, this.options, t)),
              n && n(),
              this.cancel(),
              this.resolveFinishedPromise();
          }), {
            animation: c,
            duration: i,
            times: o,
            type: s,
            ease: a,
            keyframes: e,
          }
        );
      }
      get duration() {
        let {
          resolved: e
        } = this;
        if (!e) return 0;
        let {
          duration: t
        } = e;
        return oX(t);
      }
      get time() {
        let {
          resolved: e
        } = this;
        if (!e) return 0;
        let {
          animation: t
        } = e;
        return oX(t.currentTime || 0);
      }
      set time(e) {
        let {
          resolved: t
        } = this;
        if (!t) return;
        let {
          animation: n
        } = t;
        n.currentTime = oQ(e);
      }
      get speed() {
        let {
          resolved: e
        } = this;
        if (!e) return 1;
        let {
          animation: t
        } = e;
        return t.playbackRate;
      }
      set speed(e) {
        let {
          resolved: t
        } = this;
        if (!t) return;
        let {
          animation: n
        } = t;
        n.playbackRate = e;
      }
      get state() {
        let {
          resolved: e
        } = this;
        if (!e) return "idle";
        let {
          animation: t
        } = e;
        return t.playState;
      }
      attachTimeline(e) {
        if (this._resolved) {
          let {
            resolved: t
          } = this;
          if (!t) return ov;
          let {
            animation: n
          } = t;
          (n.timeline = e), (n.onfinish = null);
        } else this.pendingTimeline = e;
        return ov;
      }
      play() {
        if (this.isStopped) return;
        let {
          resolved: e
        } = this;
        if (!e) return;
        let {
          animation: t
        } = e;
        "finished" === t.playState && this.updateFinishedPromise(), t.play();
      }
      pause() {
        let {
          resolved: e
        } = this;
        if (!e) return;
        let {
          animation: t
        } = e;
        t.pause();
      }
      stop() {
        if (
          (this.resolver.cancel(),
            (this.isStopped = !0),
            "idle" === this.state)
        )
          return;
        let {
          resolved: e
        } = this;
        if (!e) return;
        let {
          animation: t,
          keyframes: n,
          duration: r,
          type: i,
          ease: o,
          times: a,
        } = e;
        if ("idle" !== t.playState && "finished" !== t.playState) {
          if (this.time) {
            let {
              motionValue: e,
              onUpdate: t,
              onComplete: s,
              ...l
            } = this.options,
              u = new sx({
                ...l,
                keyframes: n,
                duration: r,
                type: i,
                ease: o,
                times: a,
                isGenerator: !0,
              }),
              c = oQ(this.time);
            e.setWithVelocity(u.sample(c - 10).value, u.sample(c).value, 10);
          }
          this.cancel();
        }
      }
      complete() {
        let {
          resolved: e
        } = this;
        e && e.animation.finish();
      }
      cancel() {
        let {
          resolved: e
        } = this;
        e && e.animation.cancel();
      }
      static supports(e) {
        let {
          motionValue: t,
          name: n,
          repeatDelay: r,
          repeatType: i,
          damping: o,
          type: a,
        } = e;
        return (
          sC() &&
          n &&
          sP.has(n) &&
          t &&
          t.owner &&
          t.owner.current instanceof HTMLElement &&
          !t.owner.getProps().onUpdate &&
          !r &&
          "mirror" !== i &&
          0 !== o &&
          "inertia" !== a
        );
      }
    }
    const sA =
      (e, t, n, r = {}, i, o) =>
      (a) => {
        let s = o1(r, e) || {},
          l = s.delay || r.delay || 0,
          {
            elapsed: u = 0
          } = r;
        u -= oQ(l);
        let c = {
          keyframes: Array.isArray(n) ? n : [null, n],
          ease: "easeOut",
          velocity: t.getVelocity(),
          ...s,
          delay: -u,
          onUpdate: (e) => {
            t.set(e), s.onUpdate && s.onUpdate(e);
          },
          onComplete: () => {
            a(), s.onComplete && s.onComplete();
          },
          name: e,
          motionValue: t,
          element: o ? void 0 : i,
        };
        !(function({
          when: e,
          delay: t,
          delayChildren: n,
          staggerChildren: r,
          staggerDirection: i,
          repeat: o,
          repeatType: a,
          repeatDelay: s,
          from: l,
          elapsed: u,
          ...c
        }) {
          return !!Object.keys(c).length;
        })(s) && (c = {
          ...c,
          ...o0(e, c)
        }),
        c.duration && (c.duration = oQ(c.duration)),
          c.repeatDelay && (c.repeatDelay = oQ(c.repeatDelay)),
          void 0 !== c.from && (c.keyframes[0] = c.from);
        let p = !1;
        if (
          ((!1 !== c.type && (0 !== c.duration || c.repeatDelay)) ||
            ((c.duration = 0), 0 !== c.delay || (p = !0)),
            (o2.current || ia.skipAnimations) &&
            ((p = !0), (c.duration = 0), (c.delay = 0)),
            p && !o && void 0 !== t.get())
        ) {
          let e = o4(c.keyframes, s);
          if (void 0 !== e) {
            ob.update(() => {
              c.onUpdate(e), c.onComplete();
            });
            return;
          }
        }
        return !o && sO.supports(c) ? new sO(c) : new sx(c);
      };

    function sj(e) {
      return !!(iD(e) && e.add);
    }

    function sD(e, t) {
      -1 === e.indexOf(t) && e.push(t);
    }

    function sR(e, t) {
      let n = e.indexOf(t);
      n > -1 && e.splice(n, 1);
    }
    class sM {
      constructor() {
        this.subscriptions = [];
      }
      add(e) {
        return sD(this.subscriptions, e), () => sR(this.subscriptions, e);
      }
      notify(e, t, n) {
        let r = this.subscriptions.length;
        if (r) {
          if (1 === r) this.subscriptions[0](e, t, n);
          else
            for (let i = 0; i < r; i++) {
              let r = this.subscriptions[i];
              r && r(e, t, n);
            }
        }
      }
      getSize() {
        return this.subscriptions.length;
      }
      clear() {
        this.subscriptions.length = 0;
      }
    }
    const sN = (e) => !isNaN(parseFloat(e)),
      sL = {
        current: void 0
      };
    class sI {
      constructor(e, t = {}) {
        (this.version = "11.1.1"),
        (this.canTrackVelocity = !1),
        (this.events = {}),
        (this.updateAndNotify = (e, t = !0) => {
          let n = o6.now();
          this.updatedAt !== n && this.setPrevFrameValue(),
            (this.prev = this.current),
            this.setCurrent(e),
            this.current !== this.prev &&
            this.events.change &&
            this.events.change.notify(this.current),
            t &&
            this.events.renderRequest &&
            this.events.renderRequest.notify(this.current);
        }),
        (this.hasAnimated = !1),
        this.setCurrent(e),
          (this.canTrackVelocity = sN(this.current)),
          (this.owner = t.owner);
      }
      setCurrent(e) {
        (this.current = e), (this.updatedAt = o6.now());
      }
      setPrevFrameValue(e = this.current) {
        (this.prevFrameValue = e), (this.prevUpdatedAt = this.updatedAt);
      }
      onChange(e) {
        return this.on("change", e);
      }
      on(e, t) {
        this.events[e] || (this.events[e] = new sM());
        let n = this.events[e].add(t);
        return "change" === e ?
          () => {
            n(),
              ob.read(() => {
                this.events.change.getSize() || this.stop();
              });
          } :
          n;
      }
      clearListeners() {
        for (let e in this.events) this.events[e].clear();
      }
      attach(e, t) {
        (this.passiveEffect = e), (this.stopPassiveEffect = t);
      }
      set(e, t = !0) {
        t && this.passiveEffect ?
          this.passiveEffect(e, this.updateAndNotify) :
          this.updateAndNotify(e, t);
      }
      setWithVelocity(e, t, n) {
        this.set(t),
          (this.prev = void 0),
          (this.prevFrameValue = e),
          (this.prevUpdatedAt = this.updatedAt - n);
      }
      jump(e, t = !0) {
        this.updateAndNotify(e),
          (this.prev = e),
          (this.prevUpdatedAt = this.prevFrameValue = void 0),
          t && this.stop(),
          this.stopPassiveEffect && this.stopPassiveEffect();
      }
      get() {
        return sL.current && sL.current.push(this), this.current;
      }
      getPrevious() {
        return this.prev;
      }
      getVelocity() {
        var e;
        let t = o6.now();
        if (
          !this.canTrackVelocity ||
          void 0 === this.prevFrameValue ||
          t - this.updatedAt > 30
        )
          return 0;
        let n = Math.min(this.updatedAt - this.prevUpdatedAt, 30);
        return (
          (e = parseFloat(this.current) - parseFloat(this.prevFrameValue)),
          n ? (1e3 / n) * e : 0
        );
      }
      start(e) {
        return (
          this.stop(),
          new Promise((t) => {
            (this.hasAnimated = !0),
            (this.animation = e(t)),
            this.events.animationStart &&
              this.events.animationStart.notify();
          }).then(() => {
            this.events.animationComplete &&
              this.events.animationComplete.notify(),
              this.clearAnimation();
          })
        );
      }
      stop() {
        this.animation &&
          (this.animation.stop(),
            this.events.animationCancel &&
            this.events.animationCancel.notify()),
          this.clearAnimation();
      }
      isAnimating() {
        return !!this.animation;
      }
      clearAnimation() {
        delete this.animation;
      }
      destroy() {
        this.clearListeners(),
          this.stop(),
          this.stopPassiveEffect && this.stopPassiveEffect();
      }
    }

    function sU(e, t) {
      return new sI(e, t);
    }

    function sF(e, t, {
      delay: n = 0,
      transitionOverride: r,
      type: i
    } = {}) {
      var o;
      let {
        transition: a = e.getDefaultTransition(),
        transitionEnd: s,
        ...l
      } = t,
      u = e.getValue("willChange");
      r && (a = r);
      let c = [],
        p = i && e.animationState && e.animationState.getState()[i];
      for (let t in l) {
        let r = e.getValue(
            t,
            null !== (o = e.latestValues[t]) && void 0 !== o ? o : null
          ),
          i = l[t];
        if (
          void 0 === i ||
          (p &&
            (function({
              protectedKeys: e,
              needsAnimating: t
            }, n) {
              let r = e.hasOwnProperty(n) && !0 !== t[n];
              return (t[n] = !1), r;
            })(p, t))
        )
          continue;
        let s = {
            delay: n,
            elapsed: 0,
            ...o1(a || {}, t)
          },
          d = !1;
        if (window.HandoffAppearAnimations) {
          let n = e.getProps()[io];
          if (n) {
            let e = window.HandoffAppearAnimations(n, t);
            null !== e && ((s.elapsed = e), (d = !0));
          }
        }
        r.start(
          sA(
            t,
            r,
            i,
            e.shouldReduceMotion && iA.has(t) ? {
              type: !1
            } : s,
            e,
            d
          )
        );
        let f = r.animation;
        f && (sj(u) && (u.add(t), f.then(() => u.remove(t))), c.push(f));
      }
      return (
        s &&
        Promise.all(c).then(() => {
          ob.update(() => {
            s &&
              (function(e, t) {
                let {
                  transitionEnd: n = {},
                  transition: r = {},
                  ...i
                } = oK(e, t) || {};
                for (let t in (i = {
                    ...i,
                    ...n
                  })) {
                  let n = om(i[t]);
                  e.hasValue(t) ?
                    e.getValue(t).set(n) :
                    e.addValue(t, sU(n));
                }
              })(e, s);
          });
        }),
        c
      );
    }

    function sV(e, t, n = {}) {
      var r;
      let i = oK(
          e,
          t,
          "exit" === n.type ?
          null === (r = e.presenceContext) || void 0 === r ?
          void 0 :
          r.custom :
          void 0
        ),
        {
          transition: o = e.getDefaultTransition() || {}
        } = i || {};
      n.transitionOverride && (o = n.transitionOverride);
      let a = i ? () => Promise.all(sF(e, i, n)) : () => Promise.resolve(),
        s =
        e.variantChildren && e.variantChildren.size ?
        (r = 0) => {
          let {
            delayChildren: i = 0,
            staggerChildren: a,
            staggerDirection: s,
          } = o;
          return (function(e, t, n = 0, r = 0, i = 1, o) {
            let a = [],
              s = (e.variantChildren.size - 1) * r,
              l = 1 === i ? (e = 0) => e * r : (e = 0) => s - e * r;
            return (
              Array.from(e.variantChildren)
              .sort(sz)
              .forEach((e, r) => {
                e.notify("AnimationStart", t),
                  a.push(
                    sV(e, t, {
                      ...o,
                      delay: n + l(r)
                    }).then(() =>
                      e.notify("AnimationComplete", t)
                    )
                  );
              }),
              Promise.all(a)
            );
          })(e, t, i + r, a, s, n);
        } :
        () => Promise.resolve(),
        {
          when: l
        } = o;
      if (!l) return Promise.all([a(), s(n.delay)]);
      {
        let [e, t] = "beforeChildren" === l ? [a, s] : [s, a];
        return e().then(() => t());
      }
    }

    function sz(e, t) {
      return e.sortNodePosition(t);
    }
    const sB = [...iy].reverse(),
      sq = iy.length;

    function sH(e = !1) {
      return {
        isActive: e,
        protectedKeys: {},
        needsAnimating: {},
        prevResolvedValues: {},
      };
    }
    let sW = 0;
    const s$ = (e, t) => Math.abs(e - t);
    class sK {
      constructor(
        e,
        t, {
          transformPagePoint: n,
          contextWindow: r,
          dragSnapToOrigin: i = !1,
        } = {}
      ) {
        if (
          ((this.startEvent = null),
            (this.lastMoveEvent = null),
            (this.lastMoveEventInfo = null),
            (this.handlers = {}),
            (this.contextWindow = window),
            (this.updatePoint = () => {
              var e, t;
              if (!(this.lastMoveEvent && this.lastMoveEventInfo)) return;
              let n = sY(this.lastMoveEventInfo, this.history),
                r = null !== this.startEvent,
                i =
                ((e = n.offset),
                  (t = {
                    x: 0,
                    y: 0
                  }),
                  Math.sqrt(s$(e.x, t.x) ** 2 + s$(e.y, t.y) ** 2) >= 3);
              if (!r && !i) return;
              let {
                point: o
              } = n, {
                timestamp: a
              } = ox;
              this.history.push({
                ...o,
                timestamp: a
              });
              let {
                onStart: s,
                onMove: l
              } = this.handlers;
              r ||
                (s && s(this.lastMoveEvent, n),
                  (this.startEvent = this.lastMoveEvent)),
                l && l(this.lastMoveEvent, n);
            }),
            (this.handlePointerMove = (e, t) => {
              (this.lastMoveEvent = e),
              (this.lastMoveEventInfo = sQ(t, this.transformPagePoint)),
              ob.update(this.updatePoint, !0);
            }),
            (this.handlePointerUp = (e, t) => {
              this.end();
              let {
                onEnd: n,
                onSessionEnd: r,
                resumeAnimation: i,
              } = this.handlers;
              if (
                (this.dragSnapToOrigin && i && i(),
                  !(this.lastMoveEvent && this.lastMoveEventInfo))
              )
                return;
              let o = sY(
                "pointercancel" === e.type ?
                this.lastMoveEventInfo :
                sQ(t, this.transformPagePoint),
                this.history
              );
              this.startEvent && n && n(e, o), r && r(e, o);
            }),
            !oE(e))
        )
          return;
        (this.dragSnapToOrigin = i),
        (this.handlers = t),
        (this.transformPagePoint = n),
        (this.contextWindow = r || window);
        let o = sQ(oC(e), this.transformPagePoint),
          {
            point: a
          } = o,
          {
            timestamp: s
          } = ox;
        this.history = [{
          ...a,
          timestamp: s
        }];
        let {
          onSessionStart: l
        } = t;
        l && l(e, sY(o, this.history)),
          (this.removeListeners = oj(
            oO(this.contextWindow, "pointermove", this.handlePointerMove),
            oO(this.contextWindow, "pointerup", this.handlePointerUp),
            oO(this.contextWindow, "pointercancel", this.handlePointerUp)
          ));
      }
      updateHandlers(e) {
        this.handlers = e;
      }
      end() {
        this.removeListeners && this.removeListeners(), ow(this.updatePoint);
      }
    }

    function sQ(e, t) {
      return t ? {
        point: t(e.point)
      } : e;
    }

    function sX(e, t) {
      return {
        x: e.x - t.x,
        y: e.y - t.y
      };
    }

    function sY({
      point: e
    }, t) {
      return {
        point: e,
        delta: sX(e, sG(t)),
        offset: sX(e, t[0]),
        velocity: (function(e, t) {
          if (e.length < 2) return {
            x: 0,
            y: 0
          };
          let n = e.length - 1,
            r = null,
            i = sG(e);
          for (; n >= 0 && ((r = e[n]), !(i.timestamp - r.timestamp > oQ(0.1)));

          )
            n--;
          if (!r) return {
            x: 0,
            y: 0
          };
          let o = oX(i.timestamp - r.timestamp);
          if (0 === o) return {
            x: 0,
            y: 0
          };
          let a = {
            x: (i.x - r.x) / o,
            y: (i.y - r.y) / o
          };
          return a.x === 1 / 0 && (a.x = 0), a.y === 1 / 0 && (a.y = 0), a;
        })(t, 0),
      };
    }

    function sG(e) {
      return e[e.length - 1];
    }

    function sJ(e) {
      return e.max - e.min;
    }

    function sZ(e, t = 0, n = 0.01) {
      return Math.abs(e - t) <= n;
    }

    function s0(e, t, n, r = 0.5) {
      (e.origin = r),
      (e.originPoint = sr(t.min, t.max, e.origin)),
      (e.scale = sJ(n) / sJ(t)),
      (sZ(e.scale, 1, 1e-4) || isNaN(e.scale)) && (e.scale = 1),
      (e.translate = sr(n.min, n.max, e.origin) - e.originPoint),
      (sZ(e.translate) || isNaN(e.translate)) && (e.translate = 0);
    }

    function s1(e, t, n, r) {
      s0(e.x, t.x, n.x, r ? r.originX : void 0),
        s0(e.y, t.y, n.y, r ? r.originY : void 0);
    }

    function s2(e, t, n) {
      (e.min = n.min + t.min), (e.max = e.min + sJ(t));
    }

    function s3(e, t, n) {
      (e.min = t.min - n.min), (e.max = e.min + sJ(t));
    }

    function s4(e, t, n) {
      s3(e.x, t.x, n.x), s3(e.y, t.y, n.y);
    }

    function s5(e, t, n) {
      return {
        min: void 0 !== t ? e.min + t : void 0,
        max: void 0 !== n ? e.max + n - (e.max - e.min) : void 0,
      };
    }

    function s6(e, t) {
      let n = t.min - e.min,
        r = t.max - e.max;
      return (
        t.max - t.min < e.max - e.min && ([n, r] = [r, n]), {
          min: n,
          max: r
        }
      );
    }

    function s8(e, t, n) {
      return {
        min: s9(e, t),
        max: s9(e, n)
      };
    }

    function s9(e, t) {
      return "number" == typeof e ? e : e[t] || 0;
    }
    const s7 = () => ({
        translate: 0,
        scale: 1,
        origin: 0,
        originPoint: 0
      }),
      le = () => ({
        x: s7(),
        y: s7()
      }),
      lt = () => ({
        min: 0,
        max: 0
      }),
      ln = () => ({
        x: lt(),
        y: lt()
      });

    function lr(e) {
      return [e("x"), e("y")];
    }

    function li({
      top: e,
      left: t,
      right: n,
      bottom: r
    }) {
      return {
        x: {
          min: t,
          max: n
        },
        y: {
          min: e,
          max: r
        }
      };
    }

    function lo(e) {
      return void 0 === e || 1 === e;
    }

    function la({
      scale: e,
      scaleX: t,
      scaleY: n
    }) {
      return !lo(e) || !lo(t) || !lo(n);
    }

    function ls(e) {
      return (
        la(e) ||
        ll(e) ||
        e.z ||
        e.rotate ||
        e.rotateX ||
        e.rotateY ||
        e.skewX ||
        e.skewY
      );
    }

    function ll(e) {
      var t, n;
      return ((t = e.x) && "0%" !== t) || ((n = e.y) && "0%" !== n);
    }

    function lu(e, t, n, r, i) {
      return void 0 !== i && (e = r + i * (e - r)), r + n * (e - r) + t;
    }

    function lc(e, t = 0, n = 1, r, i) {
      (e.min = lu(e.min, t, n, r, i)), (e.max = lu(e.max, t, n, r, i));
    }

    function lp(e, {
      x: t,
      y: n
    }) {
      lc(e.x, t.translate, t.scale, t.originPoint),
        lc(e.y, n.translate, n.scale, n.originPoint);
    }

    function ld(e) {
      return Number.isInteger(e) ?
        e :
        e > 1.0000000000001 || e < 0.999999999999 ?
        e :
        1;
    }

    function lf(e, t) {
      (e.min = e.min + t), (e.max = e.max + t);
    }

    function lh(e, t, [n, r, i]) {
      let o = void 0 !== t[i] ? t[i] : 0.5,
        a = sr(e.min, e.max, o);
      lc(e, t[n], t[r], a, t.scale);
    }
    const lm = ["x", "scaleX", "originX"],
      ly = ["y", "scaleY", "originY"];

    function lg(e, t) {
      lh(e.x, t, lm), lh(e.y, t, ly);
    }

    function lv(e, t) {
      return li(
        (function(e, t) {
          if (!t) return e;
          let n = t({
              x: e.left,
              y: e.top
            }),
            r = t({
              x: e.right,
              y: e.bottom
            });
          return {
            top: n.y,
            left: n.x,
            bottom: r.y,
            right: r.x
          };
        })(e.getBoundingClientRect(), t)
      );
    }
    const lb = ({
        current: e
      }) => (e ? e.ownerDocument.defaultView : null),
      lw = new WeakMap();
    class lx {
      constructor(e) {
        (this.openGlobalLock = null),
        (this.isDragging = !1),
        (this.currentDirection = null),
        (this.originPoint = {
          x: 0,
          y: 0
        }),
        (this.constraints = !1),
        (this.hasMutatedConstraints = !1),
        (this.elastic = ln()),
        (this.visualElement = e);
      }
      start(e, {
        snapToCursor: t = !1
      } = {}) {
        let {
          presenceContext: n
        } = this.visualElement;
        if (n && !1 === n.isPresent) return;
        let {
          dragSnapToOrigin: r
        } = this.getProps();
        this.panSession = new sK(
          e, {
            onSessionStart: (e) => {
              let {
                dragSnapToOrigin: n
              } = this.getProps();
              n ? this.pauseAnimation() : this.stopAnimation(),
                t && this.snapToCursor(oC(e, "page").point);
            },
            onStart: (e, t) => {
              let {
                drag: n,
                dragPropagation: r,
                onDragStart: i,
              } = this.getProps();
              if (
                n &&
                !r &&
                (this.openGlobalLock && this.openGlobalLock(),
                  (this.openGlobalLock = oN(n)),
                  !this.openGlobalLock)
              )
                return;
              (this.isDragging = !0),
              (this.currentDirection = null),
              this.resolveConstraints(),
                this.visualElement.projection &&
                ((this.visualElement.projection.isAnimationBlocked = !0),
                  (this.visualElement.projection.target = void 0)),
                lr((e) => {
                  let t = this.getAxisMotionValue(e).get() || 0;
                  if (iJ.test(t)) {
                    let {
                      projection: n
                    } = this.visualElement;
                    if (n && n.layout) {
                      let r = n.layout.layoutBox[e];
                      if (r) {
                        let e = sJ(r);
                        t = (parseFloat(t) / 100) * e;
                      }
                    }
                  }
                  this.originPoint[e] = t;
                }),
                i && i(e, t);
              let {
                animationState: o
              } = this.visualElement;
              o && o.setActive("whileDrag", !0);
            },
            onMove: (e, t) => {
              let {
                dragPropagation: n,
                dragDirectionLock: r,
                onDirectionLock: i,
                onDrag: o,
              } = this.getProps();
              if (!n && !this.openGlobalLock) return;
              let {
                offset: a
              } = t;
              if (r && null === this.currentDirection) {
                (this.currentDirection = (function(e, t = 10) {
                  let n = null;
                  return (
                    Math.abs(e.y) > t ?
                    (n = "y") :
                    Math.abs(e.x) > t && (n = "x"),
                    n
                  );
                })(a)),
                null !== this.currentDirection &&
                  i &&
                  i(this.currentDirection);
                return;
              }
              this.updateAxis("x", t.point, a),
                this.updateAxis("y", t.point, a),
                this.visualElement.render(),
                o && o(e, t);
            },
            onSessionEnd: (e, t) => this.stop(e, t),
            resumeAnimation: () =>
              lr((e) => {
                var t;
                return (
                  "paused" === this.getAnimationState(e) &&
                  (null === (t = this.getAxisMotionValue(e).animation) ||
                    void 0 === t ?
                    void 0 :
                    t.play())
                );
              }),
          }, {
            transformPagePoint: this.visualElement.getTransformPagePoint(),
            dragSnapToOrigin: r,
            contextWindow: lb(this.visualElement),
          }
        );
      }
      stop(e, t) {
        let n = this.isDragging;
        if ((this.cancel(), !n)) return;
        let {
          velocity: r
        } = t;
        this.startAnimation(r);
        let {
          onDragEnd: i
        } = this.getProps();
        i && i(e, t);
      }
      cancel() {
        this.isDragging = !1;
        let {
          projection: e,
          animationState: t
        } = this.visualElement;
        e && (e.isAnimationBlocked = !1),
          this.panSession && this.panSession.end(),
          (this.panSession = void 0);
        let {
          dragPropagation: n
        } = this.getProps();
        !n &&
          this.openGlobalLock &&
          (this.openGlobalLock(), (this.openGlobalLock = null)),
          t && t.setActive("whileDrag", !1);
      }
      updateAxis(e, t, n) {
        let {
          drag: r
        } = this.getProps();
        if (!n || !lS(e, r, this.currentDirection)) return;
        let i = this.getAxisMotionValue(e),
          o = this.originPoint[e] + n[e];
        this.constraints &&
          this.constraints[e] &&
          (o = (function(e, {
            min: t,
            max: n
          }, r) {
            return (
              void 0 !== t && e < t ?
              (e = r ? sr(t, e, r.min) : Math.max(e, t)) :
              void 0 !== n &&
              e > n &&
              (e = r ? sr(n, e, r.max) : Math.min(e, n)),
              e
            );
          })(o, this.constraints[e], this.elastic[e])),
          i.set(o);
      }
      resolveConstraints() {
        var e;
        let {
          dragConstraints: t,
          dragElastic: n
        } = this.getProps(),
          r =
          this.visualElement.projection &&
          !this.visualElement.projection.layout ?
          this.visualElement.projection.measure(!1) :
          null === (e = this.visualElement.projection) || void 0 === e ?
          void 0 :
          e.layout,
          i = this.constraints;
        t && id(t) ?
          this.constraints ||
          (this.constraints = this.resolveRefConstraints()) :
          t && r ?
          (this.constraints = (function(
            e, {
              top: t,
              left: n,
              bottom: r,
              right: i
            }
          ) {
            return {
              x: s5(e.x, n, i),
              y: s5(e.y, t, r)
            };
          })(r.layoutBox, t)) :
          (this.constraints = !1),
          (this.elastic = (function(e = 0.35) {
            return (
              !1 === e ? (e = 0) : !0 === e && (e = 0.35), {
                x: s8(e, "left", "right"),
                y: s8(e, "top", "bottom")
              }
            );
          })(n)),
          i !== this.constraints &&
          r &&
          this.constraints &&
          !this.hasMutatedConstraints &&
          lr((e) => {
            !1 !== this.constraints &&
              this.getAxisMotionValue(e) &&
              (this.constraints[e] = (function(e, t) {
                let n = {};
                return (
                  void 0 !== t.min && (n.min = t.min - e.min),
                  void 0 !== t.max && (n.max = t.max - e.min),
                  n
                );
              })(r.layoutBox[e], this.constraints[e]));
          });
      }
      resolveRefConstraints() {
        var e;
        let {
          dragConstraints: t,
          onMeasureDragConstraints: n
        } =
        this.getProps();
        if (!t || !id(t)) return !1;
        let r = t.current;
        ov(
          null !== r,
          "If `dragConstraints` is set as a React ref, that ref must be passed to another component's `ref` prop."
        );
        let {
          projection: i
        } = this.visualElement;
        if (!i || !i.layout) return !1;
        let o = (function(e, t, n) {
            let r = lv(e, n),
              {
                scroll: i
              } = t;
            return i && (lf(r.x, i.offset.x), lf(r.y, i.offset.y)), r;
          })(r, i.root, this.visualElement.getTransformPagePoint()),
          a = {
            x: s6((e = i.layout.layoutBox).x, o.x),
            y: s6(e.y, o.y)
          };
        if (n) {
          let e = n(
            (function({
              x: e,
              y: t
            }) {
              return {
                top: t.min,
                right: e.max,
                bottom: t.max,
                left: e.min
              };
            })(a)
          );
          (this.hasMutatedConstraints = !!e), e && (a = li(e));
        }
        return a;
      }
      startAnimation(e) {
        let {
          drag: t,
          dragMomentum: n,
          dragElastic: r,
          dragTransition: i,
          dragSnapToOrigin: o,
          onDragTransitionEnd: a,
        } = this.getProps(),
          s = this.constraints || {};
        return Promise.all(
          lr((a) => {
            if (!lS(a, t, this.currentDirection)) return;
            let l = (s && s[a]) || {};
            o && (l = {
              min: 0,
              max: 0
            });
            let u = {
              type: "inertia",
              velocity: n ? e[a] : 0,
              bounceStiffness: r ? 200 : 1e6,
              bounceDamping: r ? 40 : 1e7,
              timeConstant: 750,
              restDelta: 1,
              restSpeed: 10,
              ...i,
              ...l,
            };
            return this.startAxisValueAnimation(a, u);
          })
        ).then(a);
      }
      startAxisValueAnimation(e, t) {
        let n = this.getAxisMotionValue(e);
        return n.start(sA(e, n, 0, t, this.visualElement));
      }
      stopAnimation() {
        lr((e) => this.getAxisMotionValue(e).stop());
      }
      pauseAnimation() {
        lr((e) => {
          var t;
          return null === (t = this.getAxisMotionValue(e).animation) ||
            void 0 === t ?
            void 0 :
            t.pause();
        });
      }
      getAnimationState(e) {
        var t;
        return null === (t = this.getAxisMotionValue(e).animation) ||
          void 0 === t ?
          void 0 :
          t.state;
      }
      getAxisMotionValue(e) {
        let t = `_drag${e.toUpperCase()}`,
          n = this.visualElement.getProps();
        return (
          n[t] ||
          this.visualElement.getValue(
            e,
            (n.initial ? n.initial[e] : void 0) || 0
          )
        );
      }
      snapToCursor(e) {
        lr((t) => {
          let {
            drag: n
          } = this.getProps();
          if (!lS(t, n, this.currentDirection)) return;
          let {
            projection: r
          } = this.visualElement,
            i = this.getAxisMotionValue(t);
          if (r && r.layout) {
            let {
              min: n,
              max: o
            } = r.layout.layoutBox[t];
            i.set(e[t] - sr(n, o, 0.5));
          }
        });
      }
      scalePositionWithinConstraints() {
        if (!this.visualElement.current) return;
        let {
          drag: e,
          dragConstraints: t
        } = this.getProps(), {
          projection: n
        } = this.visualElement;
        if (!id(t) || !n || !this.constraints) return;
        this.stopAnimation();
        let r = {
          x: 0,
          y: 0
        };
        lr((e) => {
          let t = this.getAxisMotionValue(e);
          if (t && !1 !== this.constraints) {
            let n = t.get();
            r[e] = (function(e, t) {
              let n = 0.5,
                r = sJ(e),
                i = sJ(t);
              return (
                i > r ?
                (n = sn(t.min, t.max - r, e.min)) :
                r > i && (n = sn(e.min, e.max - i, t.min)),
                iz(0, 1, n)
              );
            })({
              min: n,
              max: n
            }, this.constraints[e]);
          }
        });
        let {
          transformTemplate: i
        } = this.visualElement.getProps();
        (this.visualElement.current.style.transform = i ? i({}, "") : "none"),
        n.root && n.root.updateScroll(),
          n.updateLayout(),
          this.resolveConstraints(),
          lr((t) => {
            if (!lS(t, e, null)) return;
            let n = this.getAxisMotionValue(t),
              {
                min: i,
                max: o
              } = this.constraints[t];
            n.set(sr(i, o, r[t]));
          });
      }
      addListeners() {
        if (!this.visualElement.current) return;
        lw.set(this.visualElement, this);
        let e = oO(this.visualElement.current, "pointerdown", (e) => {
            let {
              drag: t,
              dragListener: n = !0
            } = this.getProps();
            t && n && this.start(e);
          }),
          t = () => {
            let {
              dragConstraints: e
            } = this.getProps();
            id(e) && (this.constraints = this.resolveRefConstraints());
          },
          {
            projection: n
          } = this.visualElement,
          r = n.addEventListener("measure", t);
        n && !n.layout && (n.root && n.root.updateScroll(), n.updateLayout()),
          t();
        let i = oT(window, "resize", () =>
            this.scalePositionWithinConstraints()
          ),
          o = n.addEventListener(
            "didUpdate",
            ({
              delta: e,
              hasLayoutChanged: t
            }) => {
              this.isDragging &&
                t &&
                (lr((t) => {
                    let n = this.getAxisMotionValue(t);
                    n &&
                      ((this.originPoint[t] += e[t].translate),
                        n.set(n.get() + e[t].translate));
                  }),
                  this.visualElement.render());
            }
          );
        return () => {
          i(), e(), r(), o && o();
        };
      }
      getProps() {
        let e = this.visualElement.getProps(),
          {
            drag: t = !1,
            dragDirectionLock: n = !1,
            dragPropagation: r = !1,
            dragConstraints: i = !1,
            dragElastic: o = 0.35,
            dragMomentum: a = !0,
          } = e;
        return {
          ...e,
          drag: t,
          dragDirectionLock: n,
          dragPropagation: r,
          dragConstraints: i,
          dragElastic: o,
          dragMomentum: a,
        };
      }
    }

    function lS(e, t, n) {
      return (!0 === t || t === e) && (null === n || n === e);
    }
    const lk = (e) => (t, n) => {
      e && e(t, n);
    };
    var L = (R("lx97N"), R("lx97N"));
    const l_ = {
      hasAnimatedSinceResize: !0,
      hasEverUpdated: !1
    };

    function lT(e, t) {
      return t.max === t.min ? 0 : (e / (t.max - t.min)) * 100;
    }
    const lE = {
      correct: (e, t) => {
        if (!t.target) return e;
        if ("string" == typeof e) {
          if (!iZ.test(e)) return e;
          e = parseFloat(e);
        }
        let n = lT(e, t.target.x),
          r = lT(e, t.target.y);
        return `${n}% ${r}%`;
      },
    };
    class lC extends L.Component {
      componentDidMount() {
        let {
          visualElement: e,
          layoutGroup: t,
          switchLayoutGroup: n,
          layoutId: r,
        } = this.props, {
          projection: i
        } = e;
        Object.assign(iP, lO),
          i &&
          (t.group && t.group.add(i),
            n && n.register && r && n.register(i),
            i.root.didUpdate(),
            i.addEventListener("animationComplete", () => {
              this.safeToRemove();
            }),
            i.setOptions({
              ...i.options,
              onExitComplete: () => this.safeToRemove(),
            })),
          (l_.hasEverUpdated = !0);
      }
      getSnapshotBeforeUpdate(e) {
        let {
          layoutDependency: t,
          visualElement: n,
          drag: r,
          isPresent: i,
        } = this.props,
          o = n.projection;
        return (
          o &&
          ((o.isPresent = i),
            r || e.layoutDependency !== t || void 0 === t ?
            o.willUpdate() :
            this.safeToRemove(),
            e.isPresent === i ||
            (i ?
              o.promote() :
              o.relegate() ||
              ob.postRender(() => {
                let e = o.getStack();
                (e && e.members.length) || this.safeToRemove();
              }))),
          null
        );
      }
      componentDidUpdate() {
        let {
          projection: e
        } = this.props.visualElement;
        e &&
          (e.root.didUpdate(),
            ic.postRender(() => {
              !e.currentAnimation && e.isLead() && this.safeToRemove();
            }));
      }
      componentWillUnmount() {
        let {
          visualElement: e,
          layoutGroup: t,
          switchLayoutGroup: n,
        } = this.props, {
          projection: r
        } = e;
        r &&
          (r.scheduleCheckAfterUnmount(),
            t && t.group && t.group.remove(r),
            n && n.deregister && n.deregister(r));
      }
      safeToRemove() {
        let {
          safeToRemove: e
        } = this.props;
        e && e();
      }
      render() {
        return null;
      }
    }

    function lP(e) {
      let [t, n] = (function() {
        let e = (0, L.useContext)(r7);
        if (null === e) return [!0, null];
        let {
          isPresent: t,
          onExitComplete: n,
          register: r
        } = e,
        i = (0, L.useId)();
        return (
          (0, L.useEffect)(() => r(i), []),
          !t && n ? [!1, () => n && n(i)] : [!0]
        );
      })(),
      r = (0, L.useContext)(ik);
      return (0, N.jsx)(lC, {
        ...e,
        layoutGroup: r,
        switchLayoutGroup: (0, L.useContext)(i_),
        isPresent: t,
        safeToRemove: n,
      });
    }
    const lO = {
        borderRadius: {
          ...lE,
          applyTo: [
            "borderTopLeftRadius",
            "borderTopRightRadius",
            "borderBottomLeftRadius",
            "borderBottomRightRadius",
          ],
        },
        borderTopLeftRadius: lE,
        borderTopRightRadius: lE,
        borderBottomLeftRadius: lE,
        borderBottomRightRadius: lE,
        boxShadow: {
          correct: (e, {
            treeScale: t,
            projectionDelta: n
          }) => {
            let r = aD.parse(e);
            if (r.length > 5) return e;
            let i = aD.createTransformer(e),
              o = "number" != typeof r[0] ? 1 : 0,
              a = n.x.scale * t.x,
              s = n.y.scale * t.y;
            (r[0 + o] /= a), (r[1 + o] /= s);
            let l = sr(a, s, 0.5);
            return (
              "number" == typeof r[2 + o] && (r[2 + o] /= l),
              "number" == typeof r[3 + o] && (r[3 + o] /= l),
              i(r)
            );
          },
        },
      },
      lA = ["TopLeft", "TopRight", "BottomLeft", "BottomRight"],
      lj = lA.length,
      lD = (e) => ("string" == typeof e ? parseFloat(e) : e),
      lR = (e) => "number" == typeof e || iZ.test(e);

    function lM(e, t) {
      return void 0 !== e[t] ? e[t] : e.borderRadius;
    }
    const lN = lI(0, 0.5, a5),
      lL = lI(0.5, 0.95, ov);

    function lI(e, t, n) {
      return (r) => (r < e ? 0 : r > t ? 1 : n(sn(e, t, r)));
    }

    function lU(e, t) {
      (e.min = t.min), (e.max = t.max);
    }

    function lF(e, t) {
      lU(e.x, t.x), lU(e.y, t.y);
    }

    function lV(e, t, n, r, i) {
      return (
        (e -= t),
        (e = r + (1 / n) * (e - r)),
        void 0 !== i && (e = r + (1 / i) * (e - r)),
        e
      );
    }

    function lz(e, t, [n, r, i], o, a) {
      !(function(e, t = 0, n = 1, r = 0.5, i, o = e, a = e) {
        if (
          (iJ.test(t) &&
            ((t = parseFloat(t)), (t = sr(a.min, a.max, t / 100) - a.min)),
            "number" != typeof t)
        )
          return;
        let s = sr(o.min, o.max, r);
        e === o && (s -= t),
          (e.min = lV(e.min, t, n, s, i)),
          (e.max = lV(e.max, t, n, s, i));
      })(e, t[n], t[r], t[i], t.scale, o, a);
    }
    const lB = ["x", "scaleX", "originX"],
      lq = ["y", "scaleY", "originY"];

    function lH(e, t, n, r) {
      lz(e.x, t, lB, n ? n.x : void 0, r ? r.x : void 0),
        lz(e.y, t, lq, n ? n.y : void 0, r ? r.y : void 0);
    }

    function lW(e) {
      return 0 === e.translate && 1 === e.scale;
    }

    function l$(e) {
      return lW(e.x) && lW(e.y);
    }

    function lK(e, t) {
      return (
        Math.round(e.x.min) === Math.round(t.x.min) &&
        Math.round(e.x.max) === Math.round(t.x.max) &&
        Math.round(e.y.min) === Math.round(t.y.min) &&
        Math.round(e.y.max) === Math.round(t.y.max)
      );
    }

    function lQ(e) {
      return sJ(e.x) / sJ(e.y);
    }
    class lX {
      constructor() {
        this.members = [];
      }
      add(e) {
        sD(this.members, e), e.scheduleRender();
      }
      remove(e) {
        if (
          (sR(this.members, e),
            e === this.prevLead && (this.prevLead = void 0),
            e === this.lead)
        ) {
          let e = this.members[this.members.length - 1];
          e && this.promote(e);
        }
      }
      relegate(e) {
        let t;
        let n = this.members.findIndex((t) => e === t);
        if (0 === n) return !1;
        for (let e = n; e >= 0; e--) {
          let n = this.members[e];
          if (!1 !== n.isPresent) {
            t = n;
            break;
          }
        }
        return !!t && (this.promote(t), !0);
      }
      promote(e, t) {
        let n = this.lead;
        if (e !== n && ((this.prevLead = n), (this.lead = e), e.show(), n)) {
          n.instance && n.scheduleRender(),
            e.scheduleRender(),
            (e.resumeFrom = n),
            t && (e.resumeFrom.preserveOpacity = !0),
            n.snapshot &&
            ((e.snapshot = n.snapshot),
              (e.snapshot.latestValues =
                n.animationValues || n.latestValues)),
            e.root && e.root.isUpdating && (e.isLayoutDirty = !0);
          let {
            crossfade: r
          } = e.options;
          !1 === r && n.hide();
        }
      }
      exitAnimationComplete() {
        this.members.forEach((e) => {
          let {
            options: t,
            resumingFrom: n
          } = e;
          t.onExitComplete && t.onExitComplete(),
            n && n.options.onExitComplete && n.options.onExitComplete();
        });
      }
      scheduleRender() {
        this.members.forEach((e) => {
          e.instance && e.scheduleRender(!1);
        });
      }
      removeLeadSnapshot() {
        this.lead && this.lead.snapshot && (this.lead.snapshot = void 0);
      }
    }

    function lY(e, t, n) {
      let r = "",
        i = e.x.translate / t.x,
        o = e.y.translate / t.y,
        a = (null == n ? void 0 : n.z) || 0;
      if (
        ((i || o || a) && (r = `translate3d(${i}px, ${o}px, ${a}px) `),
          (1 !== t.x || 1 !== t.y) && (r += `scale(${1 / t.x}, ${1 / t.y}) `),
          n)
      ) {
        let {
          transformPerspective: e,
          rotate: t,
          rotateX: i,
          rotateY: o,
          skewX: a,
          skewY: s,
        } = n;
        e && (r = `perspective(${e}px) ${r}`),
          t && (r += `rotate(${t}deg) `),
          i && (r += `rotateX(${i}deg) `),
          o && (r += `rotateY(${o}deg) `),
          a && (r += `skewX(${a}deg) `),
          s && (r += `skewY(${s}deg) `);
      }
      let s = e.x.scale * t.x,
        l = e.y.scale * t.y;
      return (1 !== s || 1 !== l) && (r += `scale(${s}, ${l})`), r || "none";
    }
    const lG = (e, t) => e.depth - t.depth;
    class lJ {
      constructor() {
        (this.children = []), (this.isDirty = !1);
      }
      add(e) {
        sD(this.children, e), (this.isDirty = !0);
      }
      remove(e) {
        sR(this.children, e), (this.isDirty = !0);
      }
      forEach(e) {
        this.isDirty && this.children.sort(lG),
          (this.isDirty = !1),
          this.children.forEach(e);
      }
    }
    const lZ = ["", "X", "Y", "Z"],
      l0 = {
        visibility: "hidden"
      };
    let l1 = 0;
    const l2 = {
      type: "projectionFrame",
      totalNodes: 0,
      resolvedTargetDeltas: 0,
      recalculatedProjection: 0,
    };

    function l3(e, t, n, r) {
      let {
        latestValues: i
      } = t;
      i[e] && ((n[e] = i[e]), t.setStaticValue(e, 0), r && (r[e] = 0));
    }

    function l4({
      attachResizeListener: e,
      defaultParent: t,
      measureScroll: n,
      checkIsScrollRoot: r,
      resetTransform: i,
    }) {
      return class {
        constructor(e = {}, n = null == t ? void 0 : t()) {
          (this.id = l1++),
          (this.animationId = 0),
          (this.children = new Set()),
          (this.options = {}),
          (this.isTreeAnimating = !1),
          (this.isAnimationBlocked = !1),
          (this.isLayoutDirty = !1),
          (this.isProjectionDirty = !1),
          (this.isSharedProjectionDirty = !1),
          (this.isTransformDirty = !1),
          (this.updateManuallyBlocked = !1),
          (this.updateBlockedByResize = !1),
          (this.isUpdating = !1),
          (this.isSVG = !1),
          (this.needsReset = !1),
          (this.shouldResetTransform = !1),
          (this.treeScale = {
            x: 1,
            y: 1
          }),
          (this.eventHandlers = new Map()),
          (this.hasTreeAnimated = !1),
          (this.updateScheduled = !1),
          (this.projectionUpdateScheduled = !1),
          (this.checkUpdateFailed = () => {
            this.isUpdating &&
              ((this.isUpdating = !1), this.clearAllSnapshots());
          }),
          (this.updateProjection = () => {
            (this.projectionUpdateScheduled = !1),
            (l2.totalNodes =
              l2.resolvedTargetDeltas =
              l2.recalculatedProjection =
              0),
            this.nodes.forEach(l8),
              this.nodes.forEach(ui),
              this.nodes.forEach(uo),
              this.nodes.forEach(l9),
              window.MotionDebug && window.MotionDebug.record(l2);
          }),
          (this.hasProjected = !1),
          (this.isVisible = !0),
          (this.animationProgress = 0),
          (this.sharedNodes = new Map()),
          (this.latestValues = e),
          (this.root = n ? n.root || n : this),
          (this.path = n ? [...n.path, n] : []),
          (this.parent = n),
          (this.depth = n ? n.depth + 1 : 0);
          for (let e = 0; e < this.path.length; e++)
            this.path[e].shouldResetTransform = !0;
          this.root === this && (this.nodes = new lJ());
        }
        addEventListener(e, t) {
          return (
            this.eventHandlers.has(e) || this.eventHandlers.set(e, new sM()),
            this.eventHandlers.get(e).add(t)
          );
        }
        notifyListeners(e, ...t) {
          let n = this.eventHandlers.get(e);
          n && n.notify(...t);
        }
        hasListeners(e) {
          return this.eventHandlers.has(e);
        }
        mount(t, n = this.root.hasTreeAnimated) {
          if (this.instance) return;
          (this.isSVG = t instanceof SVGElement && "svg" !== t.tagName),
          (this.instance = t);
          let {
            layoutId: r,
            layout: i,
            visualElement: o
          } = this.options;
          if (
            (o && !o.current && o.mount(t),
              this.root.nodes.add(this),
              this.parent && this.parent.children.add(this),
              n && (i || r) && (this.isLayoutDirty = !0),
              e)
          ) {
            let n;
            let r = () => (this.root.updateBlockedByResize = !1);
            e(t, () => {
              (this.root.updateBlockedByResize = !0),
              n && n(),
                (n = (function(e, t) {
                  let n = o6.now(),
                    r = ({
                      timestamp: t
                    }) => {
                      let i = t - n;
                      i >= 250 && (ow(r), e(i - 250));
                    };
                  return ob.read(r, !0), () => ow(r);
                })(r, 0)),
                l_.hasAnimatedSinceResize &&
                ((l_.hasAnimatedSinceResize = !1), this.nodes.forEach(ur));
            });
          }
          r && this.root.registerSharedNode(r, this),
            !1 !== this.options.animate &&
            o &&
            (r || i) &&
            this.addEventListener(
              "didUpdate",
              ({
                delta: e,
                hasLayoutChanged: t,
                hasRelativeTargetChanged: n,
                layout: r,
              }) => {
                if (this.isTreeAnimationBlocked()) {
                  (this.target = void 0), (this.relativeTarget = void 0);
                  return;
                }
                let i =
                  this.options.transition ||
                  o.getDefaultTransition() ||
                  up,
                  {
                    onLayoutAnimationStart: a,
                    onLayoutAnimationComplete: s,
                  } = o.getProps(),
                  l = !this.targetLayout || !lK(this.targetLayout, r) || n,
                  u = !t && n;
                if (
                  this.options.layoutRoot ||
                  (this.resumeFrom && this.resumeFrom.instance) ||
                  u ||
                  (t && (l || !this.currentAnimation))
                ) {
                  this.resumeFrom &&
                    ((this.resumingFrom = this.resumeFrom),
                      (this.resumingFrom.resumingFrom = void 0)),
                    this.setAnimationOrigin(e, u);
                  let t = {
                    ...o1(i, "layout"),
                    onPlay: a,
                    onComplete: s
                  };
                  (o.shouldReduceMotion || this.options.layoutRoot) &&
                  ((t.delay = 0), (t.type = !1)),
                  this.startAnimation(t);
                } else
                  t || ur(this),
                  this.isLead() &&
                  this.options.onExitComplete &&
                  this.options.onExitComplete();
                this.targetLayout = r;
              }
            );
        }
        unmount() {
          this.options.layoutId && this.willUpdate(),
            this.root.nodes.remove(this);
          let e = this.getStack();
          e && e.remove(this),
            this.parent && this.parent.children.delete(this),
            (this.instance = void 0),
            ow(this.updateProjection);
        }
        blockUpdate() {
          this.updateManuallyBlocked = !0;
        }
        unblockUpdate() {
          this.updateManuallyBlocked = !1;
        }
        isUpdateBlocked() {
          return this.updateManuallyBlocked || this.updateBlockedByResize;
        }
        isTreeAnimationBlocked() {
          return (
            this.isAnimationBlocked ||
            (this.parent && this.parent.isTreeAnimationBlocked()) ||
            !1
          );
        }
        startUpdate() {
          !this.isUpdateBlocked() &&
            ((this.isUpdating = !0),
              this.nodes && this.nodes.forEach(ua),
              this.animationId++);
        }
        getTransformTemplate() {
          let {
            visualElement: e
          } = this.options;
          return e && e.getProps().transformTemplate;
        }
        willUpdate(e = !0) {
          if (
            ((this.root.hasTreeAnimated = !0), this.root.isUpdateBlocked())
          ) {
            this.options.onExitComplete && this.options.onExitComplete();
            return;
          }
          if (
            (this.root.isUpdating || this.root.startUpdate(),
              this.isLayoutDirty)
          )
            return;
          this.isLayoutDirty = !0;
          for (let e = 0; e < this.path.length; e++) {
            let t = this.path[e];
            (t.shouldResetTransform = !0),
            t.updateScroll("snapshot"),
              t.options.layoutRoot && t.willUpdate(!1);
          }
          let {
            layoutId: t,
            layout: n
          } = this.options;
          if (void 0 === t && !n) return;
          let r = this.getTransformTemplate();
          (this.prevTransformTemplateValue = r ?
            r(this.latestValues, "") :
            void 0),
          this.updateSnapshot(),
            e && this.notifyListeners("willUpdate");
        }
        update() {
          if (((this.updateScheduled = !1), this.isUpdateBlocked())) {
            this.unblockUpdate(),
              this.clearAllSnapshots(),
              this.nodes.forEach(ue);
            return;
          }
          this.isUpdating || this.nodes.forEach(ut),
            (this.isUpdating = !1),
            window.HandoffCancelAllAnimations &&
            window.HandoffCancelAllAnimations(),
            this.nodes.forEach(un),
            this.nodes.forEach(l5),
            this.nodes.forEach(l6),
            this.clearAllSnapshots();
          let e = o6.now();
          (ox.delta = iz(0, 1e3 / 60, e - ox.timestamp)),
          (ox.timestamp = e),
          (ox.isProcessing = !0),
          oS.update.process(ox),
            oS.preRender.process(ox),
            oS.render.process(ox),
            (ox.isProcessing = !1);
        }
        didUpdate() {
          this.updateScheduled ||
            ((this.updateScheduled = !0), ic.read(() => this.update()));
        }
        clearAllSnapshots() {
          this.nodes.forEach(l7), this.sharedNodes.forEach(us);
        }
        scheduleUpdateProjection() {
          this.projectionUpdateScheduled ||
            ((this.projectionUpdateScheduled = !0),
              ob.preRender(this.updateProjection, !1, !0));
        }
        scheduleCheckAfterUnmount() {
          ob.postRender(() => {
            this.isLayoutDirty ?
              this.root.didUpdate() :
              this.root.checkUpdateFailed();
          });
        }
        updateSnapshot() {
          !this.snapshot && this.instance && (this.snapshot = this.measure());
        }
        updateLayout() {
          if (
            !this.instance ||
            (this.updateScroll(),
              !(this.options.alwaysMeasureLayout && this.isLead()) &&
              !this.isLayoutDirty)
          )
            return;
          if (this.resumeFrom && !this.resumeFrom.instance)
            for (let e = 0; e < this.path.length; e++)
              this.path[e].updateScroll();
          let e = this.layout;
          (this.layout = this.measure(!1)),
          (this.layoutCorrected = ln()),
          (this.isLayoutDirty = !1),
          (this.projectionDelta = void 0),
          this.notifyListeners("measure", this.layout.layoutBox);
          let {
            visualElement: t
          } = this.options;
          t &&
            t.notify(
              "LayoutMeasure",
              this.layout.layoutBox,
              e ? e.layoutBox : void 0
            );
        }
        updateScroll(e = "measure") {
          let t = !!(this.options.layoutScroll && this.instance);
          this.scroll &&
            this.scroll.animationId === this.root.animationId &&
            this.scroll.phase === e &&
            (t = !1),
            t &&
            (this.scroll = {
              animationId: this.root.animationId,
              phase: e,
              isRoot: r(this.instance),
              offset: n(this.instance),
            });
        }
        resetTransform() {
          if (!i) return;
          let e = this.isLayoutDirty || this.shouldResetTransform,
            t = this.projectionDelta && !l$(this.projectionDelta),
            n = this.getTransformTemplate(),
            r = n ? n(this.latestValues, "") : void 0,
            o = r !== this.prevTransformTemplateValue;
          e &&
            (t || ls(this.latestValues) || o) &&
            (i(this.instance, r),
              (this.shouldResetTransform = !1),
              this.scheduleRender());
        }
        measure(e = !0) {
          var t;
          let n = this.measurePageBox(),
            r = this.removeElementScroll(n);
          return (
            e && (r = this.removeTransform(r)),
            uh((t = r).x),
            uh(t.y), {
              animationId: this.root.animationId,
              measuredBox: n,
              layoutBox: r,
              latestValues: {},
              source: this.id,
            }
          );
        }
        measurePageBox() {
          let {
            visualElement: e
          } = this.options;
          if (!e) return ln();
          let t = e.measureViewportBox(),
            {
              scroll: n
            } = this.root;
          return n && (lf(t.x, n.offset.x), lf(t.y, n.offset.y)), t;
        }
        removeElementScroll(e) {
          let t = ln();
          lF(t, e);
          for (let n = 0; n < this.path.length; n++) {
            let r = this.path[n],
              {
                scroll: i,
                options: o
              } = r;
            if (r !== this.root && i && o.layoutScroll) {
              if (i.isRoot) {
                lF(t, e);
                let {
                  scroll: n
                } = this.root;
                n && (lf(t.x, -n.offset.x), lf(t.y, -n.offset.y));
              }
              lf(t.x, i.offset.x), lf(t.y, i.offset.y);
            }
          }
          return t;
        }
        applyTransform(e, t = !1) {
          let n = ln();
          lF(n, e);
          for (let e = 0; e < this.path.length; e++) {
            let r = this.path[e];
            !t &&
              r.options.layoutScroll &&
              r.scroll &&
              r !== r.root &&
              lg(n, {
                x: -r.scroll.offset.x,
                y: -r.scroll.offset.y
              }),
              ls(r.latestValues) && lg(n, r.latestValues);
          }
          return ls(this.latestValues) && lg(n, this.latestValues), n;
        }
        removeTransform(e) {
          let t = ln();
          lF(t, e);
          for (let e = 0; e < this.path.length; e++) {
            let n = this.path[e];
            if (!n.instance || !ls(n.latestValues)) continue;
            la(n.latestValues) && n.updateSnapshot();
            let r = ln();
            lF(r, n.measurePageBox()),
              lH(
                t,
                n.latestValues,
                n.snapshot ? n.snapshot.layoutBox : void 0,
                r
              );
          }
          return ls(this.latestValues) && lH(t, this.latestValues), t;
        }
        setTargetDelta(e) {
          (this.targetDelta = e),
          this.root.scheduleUpdateProjection(),
            (this.isProjectionDirty = !0);
        }
        setOptions(e) {
          this.options = {
            ...this.options,
            ...e,
            crossfade: void 0 === e.crossfade || e.crossfade,
          };
        }
        clearMeasurements() {
          (this.scroll = void 0),
          (this.layout = void 0),
          (this.snapshot = void 0),
          (this.prevTransformTemplateValue = void 0),
          (this.targetDelta = void 0),
          (this.target = void 0),
          (this.isLayoutDirty = !1);
        }
        forceRelativeParentToResolveTarget() {
          this.relativeParent &&
            this.relativeParent.resolvedRelativeTargetAt !== ox.timestamp &&
            this.relativeParent.resolveTargetDelta(!0);
        }
        resolveTargetDelta(e = !1) {
          var t, n, r, i;
          let o = this.getLead();
          this.isProjectionDirty ||
            (this.isProjectionDirty = o.isProjectionDirty),
            this.isTransformDirty ||
            (this.isTransformDirty = o.isTransformDirty),
            this.isSharedProjectionDirty ||
            (this.isSharedProjectionDirty = o.isSharedProjectionDirty);
          let a = !!this.resumingFrom || this !== o;
          if (
            !(
              e ||
              (a && this.isSharedProjectionDirty) ||
              this.isProjectionDirty ||
              (null === (t = this.parent) || void 0 === t ?
                void 0 :
                t.isProjectionDirty) ||
              this.attemptToResolveRelativeTarget
            )
          )
            return;
          let {
            layout: s,
            layoutId: l
          } = this.options;
          if (this.layout && (s || l)) {
            if (
              ((this.resolvedRelativeTargetAt = ox.timestamp),
                !this.targetDelta && !this.relativeTarget)
            ) {
              let e = this.getClosestProjectingParent();
              e && e.layout && 1 !== this.animationProgress ?
                ((this.relativeParent = e),
                  this.forceRelativeParentToResolveTarget(),
                  (this.relativeTarget = ln()),
                  (this.relativeTargetOrigin = ln()),
                  s4(
                    this.relativeTargetOrigin,
                    this.layout.layoutBox,
                    e.layout.layoutBox
                  ),
                  lF(this.relativeTarget, this.relativeTargetOrigin)) :
                (this.relativeParent = this.relativeTarget = void 0);
            }
            if (this.relativeTarget || this.targetDelta) {
              if (
                ((this.target ||
                    ((this.target = ln()), (this.targetWithTransforms = ln())),
                    this.relativeTarget &&
                    this.relativeTargetOrigin &&
                    this.relativeParent &&
                    this.relativeParent.target) ?
                  (this.forceRelativeParentToResolveTarget(),
                    (n = this.target),
                    (r = this.relativeTarget),
                    (i = this.relativeParent.target),
                    s2(n.x, r.x, i.x),
                    s2(n.y, r.y, i.y)) :
                  this.targetDelta ?
                  (this.resumingFrom ?
                    (this.target = this.applyTransform(
                      this.layout.layoutBox
                    )) :
                    lF(this.target, this.layout.layoutBox),
                    lp(this.target, this.targetDelta)) :
                  lF(this.target, this.layout.layoutBox),
                  this.attemptToResolveRelativeTarget)
              ) {
                this.attemptToResolveRelativeTarget = !1;
                let e = this.getClosestProjectingParent();
                e &&
                  !!e.resumingFrom == !!this.resumingFrom &&
                  !e.options.layoutScroll &&
                  e.target &&
                  1 !== this.animationProgress ?
                  ((this.relativeParent = e),
                    this.forceRelativeParentToResolveTarget(),
                    (this.relativeTarget = ln()),
                    (this.relativeTargetOrigin = ln()),
                    s4(this.relativeTargetOrigin, this.target, e.target),
                    lF(this.relativeTarget, this.relativeTargetOrigin)) :
                  (this.relativeParent = this.relativeTarget = void 0);
              }
              l2.resolvedTargetDeltas++;
            }
          }
        }
        getClosestProjectingParent() {
          if (
            !(
              !this.parent ||
              la(this.parent.latestValues) ||
              ll(this.parent.latestValues)
            )
          )
            return this.parent.isProjecting() ?
              this.parent :
              this.parent.getClosestProjectingParent();
        }
        isProjecting() {
          return !!(
            (this.relativeTarget ||
              this.targetDelta ||
              this.options.layoutRoot) &&
            this.layout
          );
        }
        calcProjection() {
          var e;
          let t = this.getLead(),
            n = !!this.resumingFrom || this !== t,
            r = !0;
          if (
            ((this.isProjectionDirty ||
                (null === (e = this.parent) || void 0 === e ?
                  void 0 :
                  e.isProjectionDirty)) &&
              (r = !1),
              n &&
              (this.isSharedProjectionDirty || this.isTransformDirty) &&
              (r = !1),
              this.resolvedRelativeTargetAt === ox.timestamp && (r = !1),
              r)
          )
            return;
          let {
            layout: i,
            layoutId: o
          } = this.options;
          if (
            ((this.isTreeAnimating = !!(
                (this.parent && this.parent.isTreeAnimating) ||
                this.currentAnimation ||
                this.pendingAnimation
              )),
              this.isTreeAnimating ||
              (this.targetDelta = this.relativeTarget = void 0),
              !this.layout || !(i || o))
          )
            return;
          lF(this.layoutCorrected, this.layout.layoutBox);
          let a = this.treeScale.x,
            s = this.treeScale.y;
          !(function(e, t, n, r = !1) {
            let i, o;
            let a = n.length;
            if (a) {
              t.x = t.y = 1;
              for (let s = 0; s < a; s++) {
                o = (i = n[s]).projectionDelta;
                let a = i.instance;
                (!a || !a.style || "contents" !== a.style.display) &&
                (r &&
                  i.options.layoutScroll &&
                  i.scroll &&
                  i !== i.root &&
                  lg(e, {
                    x: -i.scroll.offset.x,
                    y: -i.scroll.offset.y
                  }),
                  o && ((t.x *= o.x.scale), (t.y *= o.y.scale), lp(e, o)),
                  r && ls(i.latestValues) && lg(e, i.latestValues));
              }
              (t.x = ld(t.x)), (t.y = ld(t.y));
            }
          })(this.layoutCorrected, this.treeScale, this.path, n),
          t.layout &&
            !t.target &&
            (1 !== this.treeScale.x || 1 !== this.treeScale.y) &&
            ((t.target = t.layout.layoutBox),
              (t.targetWithTransforms = ln()));
          let {
            target: l
          } = t;
          if (!l) {
            this.projectionTransform &&
              ((this.projectionDelta = le()),
                (this.projectionTransform = "none"),
                this.scheduleRender());
            return;
          }
          this.projectionDelta ||
            ((this.projectionDelta = le()),
              (this.projectionDeltaWithTransform = le()));
          let u = this.projectionTransform;
          s1(
              this.projectionDelta,
              this.layoutCorrected,
              l,
              this.latestValues
            ),
            (this.projectionTransform = lY(
              this.projectionDelta,
              this.treeScale
            )),
            (this.projectionTransform !== u ||
              this.treeScale.x !== a ||
              this.treeScale.y !== s) &&
            ((this.hasProjected = !0),
              this.scheduleRender(),
              this.notifyListeners("projectionUpdate", l)),
            l2.recalculatedProjection++;
        }
        hide() {
          this.isVisible = !1;
        }
        show() {
          this.isVisible = !0;
        }
        scheduleRender(e = !0) {
          if (
            (this.options.scheduleRender && this.options.scheduleRender(), e)
          ) {
            let e = this.getStack();
            e && e.scheduleRender();
          }
          this.resumingFrom &&
            !this.resumingFrom.instance &&
            (this.resumingFrom = void 0);
        }
        setAnimationOrigin(e, t = !1) {
          let n;
          let r = this.snapshot,
            i = r ? r.latestValues : {},
            o = {
              ...this.latestValues
            },
            a = le();
          (this.relativeParent && this.relativeParent.options.layoutRoot) ||
          (this.relativeTarget = this.relativeTargetOrigin = void 0),
          (this.attemptToResolveRelativeTarget = !t);
          let s = ln(),
            l =
            (r ? r.source : void 0) !==
            (this.layout ? this.layout.source : void 0),
            u = this.getStack(),
            c = !u || u.members.length <= 1,
            p = !!(
              l &&
              !c &&
              !0 === this.options.crossfade &&
              !this.path.some(uc)
            );
          (this.animationProgress = 0),
          (this.mixTargetDelta = (t) => {
            let r = t / 1e3;
            if (
              (ul(a.x, e.x, r),
                ul(a.y, e.y, r),
                this.setTargetDelta(a),
                this.relativeTarget &&
                this.relativeTargetOrigin &&
                this.layout &&
                this.relativeParent &&
                this.relativeParent.layout)
            ) {
              var u, d, f, h;
              s4(
                  s,
                  this.layout.layoutBox,
                  this.relativeParent.layout.layoutBox
                ),
                (f = this.relativeTarget),
                (h = this.relativeTargetOrigin),
                uu(f.x, h.x, s.x, r),
                uu(f.y, h.y, s.y, r),
                n &&
                ((u = this.relativeTarget),
                  (d = n),
                  u.x.min === d.x.min &&
                  u.x.max === d.x.max &&
                  u.y.min === d.y.min &&
                  u.y.max === d.y.max) &&
                (this.isProjectionDirty = !1),
                n || (n = ln()),
                lF(n, this.relativeTarget);
            }
            l &&
              ((this.animationValues = o),
                (function(e, t, n, r, i, o) {
                  i
                    ?
                    ((e.opacity = sr(
                        0,
                        void 0 !== n.opacity ? n.opacity : 1,
                        lN(r)
                      )),
                      (e.opacityExit = sr(
                        void 0 !== t.opacity ? t.opacity : 1,
                        0,
                        lL(r)
                      ))) :
                    o &&
                    (e.opacity = sr(
                      void 0 !== t.opacity ? t.opacity : 1,
                      void 0 !== n.opacity ? n.opacity : 1,
                      r
                    ));
                  for (let i = 0; i < lj; i++) {
                    let o = `border${lA[i]}Radius`,
                      a = lM(t, o),
                      s = lM(n, o);
                    (void 0 !== a || void 0 !== s) &&
                    (a || (a = 0),
                      s || (s = 0),
                      0 === a || 0 === s || lR(a) === lR(s) ?
                      ((e[o] = Math.max(sr(lD(a), lD(s), r), 0)),
                        (iJ.test(s) || iJ.test(a)) && (e[o] += "%")) :
                      (e[o] = s));
                  }
                  (t.rotate || n.rotate) &&
                  (e.rotate = sr(t.rotate || 0, n.rotate || 0, r));
                })(o, i, this.latestValues, r, p, c)),
              this.root.scheduleUpdateProjection(),
              this.scheduleRender(),
              (this.animationProgress = r);
          }),
          this.mixTargetDelta(this.options.layoutRoot ? 1e3 : 0);
        }
        startAnimation(e) {
          this.notifyListeners("animationStart"),
            this.currentAnimation && this.currentAnimation.stop(),
            this.resumingFrom &&
            this.resumingFrom.currentAnimation &&
            this.resumingFrom.currentAnimation.stop(),
            this.pendingAnimation &&
            (ow(this.pendingAnimation), (this.pendingAnimation = void 0)),
            (this.pendingAnimation = ob.update(() => {
              (l_.hasAnimatedSinceResize = !0),
              (this.currentAnimation = (function(e, t, n) {
                let r = iD(0) ? 0 : sU(0);
                return r.start(sA("", r, 1e3, n)), r.animation;
              })(0, 0, {
                ...e,
                onUpdate: (t) => {
                  this.mixTargetDelta(t), e.onUpdate && e.onUpdate(t);
                },
                onComplete: () => {
                  e.onComplete && e.onComplete(), this.completeAnimation();
                },
              })),
              this.resumingFrom &&
                (this.resumingFrom.currentAnimation =
                  this.currentAnimation),
                (this.pendingAnimation = void 0);
            }));
        }
        completeAnimation() {
          this.resumingFrom &&
            ((this.resumingFrom.currentAnimation = void 0),
              (this.resumingFrom.preserveOpacity = void 0));
          let e = this.getStack();
          e && e.exitAnimationComplete(),
            (this.resumingFrom =
              this.currentAnimation =
              this.animationValues =
              void 0),
            this.notifyListeners("animationComplete");
        }
        finishAnimation() {
          this.currentAnimation &&
            (this.mixTargetDelta && this.mixTargetDelta(1e3),
              this.currentAnimation.stop()),
            this.completeAnimation();
        }
        applyTransformsToTarget() {
          let e = this.getLead(),
            {
              targetWithTransforms: t,
              target: n,
              layout: r,
              latestValues: i,
            } = e;
          if (t && n && r) {
            if (
              this !== e &&
              this.layout &&
              r &&
              um(
                this.options.animationType,
                this.layout.layoutBox,
                r.layoutBox
              )
            ) {
              n = this.target || ln();
              let t = sJ(this.layout.layoutBox.x);
              (n.x.min = e.target.x.min), (n.x.max = n.x.min + t);
              let r = sJ(this.layout.layoutBox.y);
              (n.y.min = e.target.y.min), (n.y.max = n.y.min + r);
            }
            lF(t, n),
              lg(t, i),
              s1(
                this.projectionDeltaWithTransform,
                this.layoutCorrected,
                t,
                i
              );
          }
        }
        registerSharedNode(e, t) {
          this.sharedNodes.has(e) || this.sharedNodes.set(e, new lX()),
            this.sharedNodes.get(e).add(t);
          let n = t.options.initialPromotionConfig;
          t.promote({
            transition: n ? n.transition : void 0,
            preserveFollowOpacity: n && n.shouldPreserveFollowOpacity ?
              n.shouldPreserveFollowOpacity(t) : void 0,
          });
        }
        isLead() {
          let e = this.getStack();
          return !e || e.lead === this;
        }
        getLead() {
          var e;
          let {
            layoutId: t
          } = this.options;
          return (
            (t &&
              (null === (e = this.getStack()) || void 0 === e ?
                void 0 :
                e.lead)) ||
            this
          );
        }
        getPrevLead() {
          var e;
          let {
            layoutId: t
          } = this.options;
          return t ?
            null === (e = this.getStack()) || void 0 === e ?
            void 0 :
            e.prevLead :
            void 0;
        }
        getStack() {
          let {
            layoutId: e
          } = this.options;
          if (e) return this.root.sharedNodes.get(e);
        }
        promote({
          needsReset: e,
          transition: t,
          preserveFollowOpacity: n,
        } = {}) {
          let r = this.getStack();
          r && r.promote(this, n),
            e && ((this.projectionDelta = void 0), (this.needsReset = !0)),
            t && this.setOptions({
              transition: t
            });
        }
        relegate() {
          let e = this.getStack();
          return !!e && e.relegate(this);
        }
        resetSkewAndRotation() {
          let {
            visualElement: e
          } = this.options;
          if (!e) return;
          let t = !1,
            {
              latestValues: n
            } = e;
          if (
            ((n.z ||
                n.rotate ||
                n.rotateX ||
                n.rotateY ||
                n.rotateZ ||
                n.skewX ||
                n.skewY) &&
              (t = !0),
              !t)
          )
            return;
          let r = {};
          n.z && l3("z", e, r, this.animationValues);
          for (let t = 0; t < lZ.length; t++)
            l3(`rotate${lZ[t]}`, e, r, this.animationValues),
            l3(`skew${lZ[t]}`, e, r, this.animationValues);
          for (let t in (e.render(), r))
            e.setStaticValue(t, r[t]),
            this.animationValues && (this.animationValues[t] = r[t]);
          e.scheduleRender();
        }
        getProjectionStyles(e) {
          var t, n;
          if (!this.instance || this.isSVG) return;
          if (!this.isVisible) return l0;
          let r = {
              visibility: ""
            },
            i = this.getTransformTemplate();
          if (this.needsReset)
            return (
              (this.needsReset = !1),
              (r.opacity = ""),
              (r.pointerEvents =
                oy(null == e ? void 0 : e.pointerEvents) || ""),
              (r.transform = i ? i(this.latestValues, "") : "none"),
              r
            );
          let o = this.getLead();
          if (!this.projectionDelta || !this.layout || !o.target) {
            let t = {};
            return (
              this.options.layoutId &&
              ((t.opacity =
                  void 0 !== this.latestValues.opacity ?
                  this.latestValues.opacity :
                  1),
                (t.pointerEvents =
                  oy(null == e ? void 0 : e.pointerEvents) || "")),
              this.hasProjected &&
              !ls(this.latestValues) &&
              ((t.transform = i ? i({}, "") : "none"),
                (this.hasProjected = !1)),
              t
            );
          }
          let a = o.animationValues || o.latestValues;
          this.applyTransformsToTarget(),
            (r.transform = lY(
              this.projectionDeltaWithTransform,
              this.treeScale,
              a
            )),
            i && (r.transform = i(a, r.transform));
          let {
            x: s,
            y: l
          } = this.projectionDelta;
          for (let e in ((r.transformOrigin = `${100 * s.origin}% ${
              100 * l.origin
            }% 0`),
              o.animationValues ?
              (r.opacity =
                o === this ?
                null !==
                (n =
                  null !== (t = a.opacity) && void 0 !== t ?
                  t :
                  this.latestValues.opacity) && void 0 !== n ?
                n :
                1 :
                this.preserveOpacity ?
                this.latestValues.opacity :
                a.opacityExit) :
              (r.opacity =
                o === this ?
                void 0 !== a.opacity ?
                a.opacity :
                "" :
                void 0 !== a.opacityExit ?
                a.opacityExit :
                0),
              iP)) {
            if (void 0 === a[e]) continue;
            let {
              correct: t,
              applyTo: n
            } = iP[e],
              i = "none" === r.transform ? a[e] : t(a[e], o);
            if (n) {
              let e = n.length;
              for (let t = 0; t < e; t++) r[n[t]] = i;
            } else r[e] = i;
          }
          return (
            this.options.layoutId &&
            (r.pointerEvents =
              o === this ?
              oy(null == e ? void 0 : e.pointerEvents) || "" :
              "none"),
            r
          );
        }
        clearSnapshot() {
          this.resumeFrom = this.snapshot = void 0;
        }
        resetTree() {
          this.root.nodes.forEach((e) => {
              var t;
              return null === (t = e.currentAnimation) || void 0 === t ?
                void 0 :
                t.stop();
            }),
            this.root.nodes.forEach(ue),
            this.root.sharedNodes.clear();
        }
      };
    }

    function l5(e) {
      e.updateLayout();
    }

    function l6(e) {
      var t;
      let n =
        (null === (t = e.resumeFrom) || void 0 === t ? void 0 : t.snapshot) ||
        e.snapshot;
      if (e.isLead() && e.layout && n && e.hasListeners("didUpdate")) {
        let {
          layoutBox: t,
          measuredBox: r
        } = e.layout, {
            animationType: i
          } = e.options,
          o = n.source !== e.layout.source;
        "size" === i
          ?
          lr((e) => {
            let r = o ? n.measuredBox[e] : n.layoutBox[e],
              i = sJ(r);
            (r.min = t[e].min), (r.max = r.min + i);
          }) :
          um(i, n.layoutBox, t) &&
          lr((r) => {
            let i = o ? n.measuredBox[r] : n.layoutBox[r],
              a = sJ(t[r]);
            (i.max = i.min + a),
            e.relativeTarget &&
              !e.currentAnimation &&
              ((e.isProjectionDirty = !0),
                (e.relativeTarget[r].max = e.relativeTarget[r].min + a));
          });
        let a = le();
        s1(a, t, n.layoutBox);
        let s = le();
        o
          ?
          s1(s, e.applyTransform(r, !0), n.measuredBox) :
          s1(s, t, n.layoutBox);
        let l = !l$(a),
          u = !1;
        if (!e.resumeFrom) {
          let r = e.getClosestProjectingParent();
          if (r && !r.resumeFrom) {
            let {
              snapshot: i,
              layout: o
            } = r;
            if (i && o) {
              let a = ln();
              s4(a, n.layoutBox, i.layoutBox);
              let s = ln();
              s4(s, t, o.layoutBox),
                lK(a, s) || (u = !0),
                r.options.layoutRoot &&
                ((e.relativeTarget = s),
                  (e.relativeTargetOrigin = a),
                  (e.relativeParent = r));
            }
          }
        }
        e.notifyListeners("didUpdate", {
          layout: t,
          snapshot: n,
          delta: s,
          layoutDelta: a,
          hasLayoutChanged: l,
          hasRelativeTargetChanged: u,
        });
      } else if (e.isLead()) {
        let {
          onExitComplete: t
        } = e.options;
        t && t();
      }
      e.options.transition = void 0;
    }

    function l8(e) {
      l2.totalNodes++,
        e.parent &&
        (e.isProjecting() ||
          (e.isProjectionDirty = e.parent.isProjectionDirty),
          e.isSharedProjectionDirty ||
          (e.isSharedProjectionDirty = !!(
            e.isProjectionDirty ||
            e.parent.isProjectionDirty ||
            e.parent.isSharedProjectionDirty
          )),
          e.isTransformDirty ||
          (e.isTransformDirty = e.parent.isTransformDirty));
    }

    function l9(e) {
      e.isProjectionDirty =
        e.isSharedProjectionDirty =
        e.isTransformDirty = !1;
    }

    function l7(e) {
      e.clearSnapshot();
    }

    function ue(e) {
      e.clearMeasurements();
    }

    function ut(e) {
      e.isLayoutDirty = !1;
    }

    function un(e) {
      let {
        visualElement: t
      } = e.options;
      t &&
        t.getProps().onBeforeLayoutMeasure &&
        t.notify("BeforeLayoutMeasure"),
        e.resetTransform();
    }

    function ur(e) {
      e.finishAnimation(),
        (e.targetDelta = e.relativeTarget = e.target = void 0),
        (e.isProjectionDirty = !0);
    }

    function ui(e) {
      e.resolveTargetDelta();
    }

    function uo(e) {
      e.calcProjection();
    }

    function ua(e) {
      e.resetSkewAndRotation();
    }

    function us(e) {
      e.removeLeadSnapshot();
    }

    function ul(e, t, n) {
      (e.translate = sr(t.translate, 0, n)),
      (e.scale = sr(t.scale, 1, n)),
      (e.origin = t.origin),
      (e.originPoint = t.originPoint);
    }

    function uu(e, t, n, r) {
      (e.min = sr(t.min, n.min, r)), (e.max = sr(t.max, n.max, r));
    }

    function uc(e) {
      return e.animationValues && void 0 !== e.animationValues.opacityExit;
    }
    const up = {
        duration: 0.45,
        ease: [0.4, 0, 0.1, 1]
      },
      ud = (e) =>
      "undefined" != typeof navigator &&
      navigator.userAgent &&
      navigator.userAgent.toLowerCase().includes(e),
      uf = ud("applewebkit/") && !ud("chrome/") ? Math.round : ov;

    function uh(e) {
      (e.min = uf(e.min)), (e.max = uf(e.max));
    }

    function um(e, t, n) {
      return (
        "position" === e ||
        ("preserve-aspect" === e && !sZ(lQ(t), lQ(n), 0.2))
      );
    }
    const uy = l4({
        attachResizeListener: (e, t) => oT(e, "resize", t),
        measureScroll: () => ({
          x: document.documentElement.scrollLeft || document.body.scrollLeft,
          y: document.documentElement.scrollTop || document.body.scrollTop,
        }),
        checkIsScrollRoot: () => !0,
      }),
      ug = {
        current: void 0
      },
      uv = l4({
        measureScroll: (e) => ({
          x: e.scrollLeft,
          y: e.scrollTop
        }),
        defaultParent: () => {
          if (!ug.current) {
            let e = new uy({});
            e.mount(window),
              e.setOptions({
                layoutScroll: !0
              }),
              (ug.current = e);
          }
          return ug.current;
        },
        resetTransform: (e, t) => {
          e.style.transform = void 0 !== t ? t : "none";
        },
        checkIsScrollRoot: (e) =>
          "fixed" === window.getComputedStyle(e).position,
      });
    var L = R("lx97N");
    const ub = {
        current: null
      },
      uw = {
        current: !1
      },
      ux = new WeakMap(),
      uS = [...au, a_, aD],
      uk = (e) => uS.find(al(e)),
      u_ = Object.keys(iS),
      uT = u_.length,
      uE = [
        "AnimationStart",
        "AnimationComplete",
        "Update",
        "BeforeLayoutMeasure",
        "LayoutMeasure",
        "LayoutAnimationStart",
        "LayoutAnimationComplete",
      ],
      uC = ig.length;
    class uP {
      scrapeMotionValuesFromProps(e, t, n) {
        return {};
      }
      constructor({
          parent: e,
          props: t,
          presenceContext: n,
          reducedMotionConfig: r,
          blockInitialAnimation: i,
          visualState: o,
        },
        a = {}
      ) {
        (this.resolveKeyframes = (e, t, n, r) =>
          new this.KeyframeResolver(e, t, n, r, this)),
        (this.current = null),
        (this.children = new Set()),
        (this.isVariantNode = !1),
        (this.isControllingVariants = !1),
        (this.shouldReduceMotion = null),
        (this.values = new Map()),
        (this.KeyframeResolver = ay),
        (this.features = {}),
        (this.valueSubscriptions = new Map()),
        (this.prevMotionValues = {}),
        (this.events = {}),
        (this.propEventSubscriptions = {}),
        (this.notifyUpdate = () =>
          this.notify("Update", this.latestValues)),
        (this.render = () => {
          this.current &&
            (this.triggerBuild(),
              this.renderInstance(
                this.current,
                this.renderState,
                this.props.style,
                this.projection
              ));
        }),
        (this.scheduleRender = () => ob.render(this.render, !1, !0));
        let {
          latestValues: s,
          renderState: l
        } = o;
        (this.latestValues = s),
        (this.baseTarget = {
          ...s
        }),
        (this.initialValues = t.initial ? {
          ...s
        } : {}),
        (this.renderState = l),
        (this.parent = e),
        (this.props = t),
        (this.presenceContext = n),
        (this.depth = e ? e.depth + 1 : 0),
        (this.reducedMotionConfig = r),
        (this.options = a),
        (this.blockInitialAnimation = !!i),
        (this.isControllingVariants = iv(t)),
        (this.isVariantNode = ib(t)),
        this.isVariantNode && (this.variantChildren = new Set()),
          (this.manuallyAnimateOnMount = !!(e && e.current));
        let {
          willChange: u,
          ...c
        } = this.scrapeMotionValuesFromProps(
          t, {},
          this
        );
        for (let e in c) {
          let t = c[e];
          void 0 !== s[e] && iD(t) && (t.set(s[e], !1), sj(u) && u.add(e));
        }
      }
      mount(e) {
        (this.current = e),
        ux.set(e, this),
          this.projection &&
          !this.projection.instance &&
          this.projection.mount(e),
          this.parent &&
          this.isVariantNode &&
          !this.isControllingVariants &&
          (this.removeFromVariantTree = this.parent.addVariantChild(this)),
          this.values.forEach((e, t) => this.bindToMotionValue(t, e)),
          uw.current ||
          (function() {
            if (((uw.current = !0), ie)) {
              if (window.matchMedia) {
                let e = window.matchMedia("(prefers-reduced-motion)"),
                  t = () => (ub.current = e.matches);
                e.addListener(t), t();
              } else ub.current = !1;
            }
          })(),
          (this.shouldReduceMotion =
            "never" !== this.reducedMotionConfig &&
            ("always" === this.reducedMotionConfig || ub.current)),
          this.parent && this.parent.children.add(this),
          this.update(this.props, this.presenceContext);
      }
      unmount() {
        var e;
        for (let e in (ux.delete(this.current),
            this.projection && this.projection.unmount(),
            ow(this.notifyUpdate),
            ow(this.render),
            this.valueSubscriptions.forEach((e) => e()),
            this.removeFromVariantTree && this.removeFromVariantTree(),
            this.parent && this.parent.children.delete(this),
            this.events))
          this.events[e].clear();
        for (let t in this.features)
          null === (e = this.features[t]) || void 0 === e || e.unmount();
        this.current = null;
      }
      bindToMotionValue(e, t) {
        let n = iA.has(e),
          r = t.on("change", (t) => {
            (this.latestValues[e] = t),
            this.props.onUpdate && ob.preRender(this.notifyUpdate),
              n && this.projection && (this.projection.isTransformDirty = !0);
          }),
          i = t.on("renderRequest", this.scheduleRender);
        this.valueSubscriptions.set(e, () => {
          r(), i(), t.owner && t.stop();
        });
      }
      sortNodePosition(e) {
        return this.current &&
          this.sortInstanceNodePosition &&
          this.type === e.type ?
          this.sortInstanceNodePosition(this.current, e.current) :
          0;
      }
      loadFeatures({
        children: e,
        ...t
      }, n, r, i) {
        let o, a;
        for (let e = 0; e < uT; e++) {
          let n = u_[e],
            {
              isEnabled: r,
              Feature: i,
              ProjectionNode: s,
              MeasureLayout: l,
            } = iS[n];
          s && (o = s),
            r(t) &&
            (!this.features[n] && i && (this.features[n] = new i(this)),
              l && (a = l));
        }
        if (
          ("html" === this.type || "svg" === this.type) &&
          !this.projection &&
          o
        ) {
          this.projection = new o(
            this.latestValues,
            (function e(t) {
              if (t)
                return !1 !== t.options.allowProjection ?
                  t.projection :
                  e(t.parent);
            })(this.parent)
          );
          let {
            layoutId: e,
            layout: n,
            drag: r,
            dragConstraints: a,
            layoutScroll: s,
            layoutRoot: l,
          } = t;
          this.projection.setOptions({
            layoutId: e,
            layout: n,
            alwaysMeasureLayout: !!r || (a && id(a)),
            visualElement: this,
            scheduleRender: () => this.scheduleRender(),
            animationType: "string" == typeof n ? n : "both",
            initialPromotionConfig: i,
            layoutScroll: s,
            layoutRoot: l,
          });
        }
        return a;
      }
      updateFeatures() {
        for (let e in this.features) {
          let t = this.features[e];
          t.isMounted ? t.update() : (t.mount(), (t.isMounted = !0));
        }
      }
      triggerBuild() {
        this.build(
          this.renderState,
          this.latestValues,
          this.options,
          this.props
        );
      }
      measureViewportBox() {
        return this.current ?
          this.measureInstanceViewportBox(this.current, this.props) :
          ln();
      }
      getStaticValue(e) {
        return this.latestValues[e];
      }
      setStaticValue(e, t) {
        this.latestValues[e] = t;
      }
      update(e, t) {
        (e.transformTemplate || this.props.transformTemplate) &&
        this.scheduleRender(),
          (this.prevProps = this.props),
          (this.props = e),
          (this.prevPresenceContext = this.presenceContext),
          (this.presenceContext = t);
        for (let t = 0; t < uE.length; t++) {
          let n = uE[t];
          this.propEventSubscriptions[n] &&
            (this.propEventSubscriptions[n](),
              delete this.propEventSubscriptions[n]);
          let r = e["on" + n];
          r && (this.propEventSubscriptions[n] = this.on(n, r));
        }
        (this.prevMotionValues = (function(e, t, n) {
          let {
            willChange: r
          } = t;
          for (let i in t) {
            let o = t[i],
              a = n[i];
            if (iD(o)) e.addValue(i, o), sj(r) && r.add(i);
            else if (iD(a))
              e.addValue(i, sU(o, {
                owner: e
              })), sj(r) && r.remove(i);
            else if (a !== o) {
              if (e.hasValue(i)) {
                let t = e.getValue(i);
                !0 === t.liveStyle ? t.jump(o) : t.hasAnimated || t.set(o);
              } else {
                let t = e.getStaticValue(i);
                e.addValue(i, sU(void 0 !== t ? t : o, {
                  owner: e
                }));
              }
            }
          }
          for (let r in n) void 0 === t[r] && e.removeValue(r);
          return t;
        })(
          this,
          this.scrapeMotionValuesFromProps(e, this.prevProps, this),
          this.prevMotionValues
        )),
        this.handleChildMotionValue && this.handleChildMotionValue();
      }
      getProps() {
        return this.props;
      }
      getVariant(e) {
        return this.props.variants ? this.props.variants[e] : void 0;
      }
      getDefaultTransition() {
        return this.props.transition;
      }
      getTransformPagePoint() {
        return this.props.transformPagePoint;
      }
      getClosestVariantNode() {
        return this.isVariantNode ?
          this :
          this.parent ?
          this.parent.getClosestVariantNode() :
          void 0;
      }
      getVariantContext(e = !1) {
        if (e) return this.parent ? this.parent.getVariantContext() : void 0;
        if (!this.isControllingVariants) {
          let e = (this.parent && this.parent.getVariantContext()) || {};
          return (
            void 0 !== this.props.initial && (e.initial = this.props.initial),
            e
          );
        }
        let t = {};
        for (let e = 0; e < uC; e++) {
          let n = ig[e],
            r = this.props[n];
          (ih(r) || !1 === r) && (t[n] = r);
        }
        return t;
      }
      addVariantChild(e) {
        let t = this.getClosestVariantNode();
        if (t)
          return (
            t.variantChildren && t.variantChildren.add(e),
            () => t.variantChildren.delete(e)
          );
      }
      addValue(e, t) {
        t !== this.values.get(e) &&
          (this.removeValue(e), this.bindToMotionValue(e, t)),
          this.values.set(e, t),
          (this.latestValues[e] = t.get());
      }
      removeValue(e) {
        this.values.delete(e);
        let t = this.valueSubscriptions.get(e);
        t && (t(), this.valueSubscriptions.delete(e)),
          delete this.latestValues[e],
          this.removeValueFromRenderState(e, this.renderState);
      }
      hasValue(e) {
        return this.values.has(e);
      }
      getValue(e, t) {
        if (this.props.values && this.props.values[e])
          return this.props.values[e];
        let n = this.values.get(e);
        return (
          void 0 === n &&
          void 0 !== t &&
          ((n = sU(null === t ? void 0 : t, {
              owner: this
            })),
            this.addValue(e, n)),
          n
        );
      }
      readValue(e, t) {
        var n;
        let r =
          void 0 === this.latestValues[e] && this.current ?
          null !== (n = this.getBaseTargetFromProps(this.props, e)) &&
          void 0 !== n ?
          n :
          this.readValueFromInstance(this.current, e, this.options) :
          this.latestValues[e];
        return (
          null != r &&
          ("string" == typeof r && (o9(r) || o8(r)) ?
            (r = parseFloat(r)) :
            !uk(r) && aD.test(t) && (r = aF(e, t)),
            this.setBaseTarget(e, iD(r) ? r.get() : r)),
          iD(r) ? r.get() : r
        );
      }
      setBaseTarget(e, t) {
        this.baseTarget[e] = t;
      }
      getBaseTarget(e) {
        var t;
        let n;
        let {
          initial: r
        } = this.props;
        if ("string" == typeof r || "object" == typeof r) {
          let i = od(
            this.props,
            r,
            null === (t = this.presenceContext) || void 0 === t ?
            void 0 :
            t.custom
          );
          i && (n = i[e]);
        }
        if (r && void 0 !== n) return n;
        let i = this.getBaseTargetFromProps(this.props, e);
        return void 0 === i || iD(i) ?
          void 0 !== this.initialValues[e] && void 0 === n ?
          void 0 :
          this.baseTarget[e] :
          i;
      }
      on(e, t) {
        return (
          this.events[e] || (this.events[e] = new sM()), this.events[e].add(t)
        );
      }
      notify(e, ...t) {
        this.events[e] && this.events[e].notify(...t);
      }
    }
    class uO extends uP {
      constructor() {
        super(...arguments), (this.KeyframeResolver = aV);
      }
      sortInstanceNodePosition(e, t) {
        return 2 & e.compareDocumentPosition(t) ? 1 : -1;
      }
      getBaseTargetFromProps(e, t) {
        return e.style ? e.style[t] : void 0;
      }
      removeValueFromRenderState(e, {
        vars: t,
        style: n
      }) {
        delete t[e], delete n[e];
      }
    }
    class uA extends uO {
      constructor() {
        super(...arguments), (this.type = "html");
      }
      readValueFromInstance(e, t) {
        if (iA.has(t)) {
          let e = aU(t);
          return (e && e.default) || 0;
        } {
          let n = window.getComputedStyle(e),
            r = (iL(t) ? n.getPropertyValue(t) : n[t]) || 0;
          return "string" == typeof r ? r.trim() : r;
        }
      }
      measureInstanceViewportBox(e, {
        transformPagePoint: t
      }) {
        return lv(e, t);
      }
      build(e, t, n, r) {
        i5(e, t, n, r.transformTemplate);
      }
      scrapeMotionValuesFromProps(e, t, n) {
        return oc(e, t, n);
      }
      handleChildMotionValue() {
        this.childSubscription &&
          (this.childSubscription(), delete this.childSubscription);
        let {
          children: e
        } = this.props;
        iD(e) &&
          (this.childSubscription = e.on("change", (e) => {
            this.current && (this.current.textContent = `${e}`);
          }));
      }
      renderInstance(e, t, n, r) {
        os(e, t, n, r);
      }
    }
    class uj extends uO {
      constructor() {
        super(...arguments), (this.type = "svg"), (this.isSVGTag = !1);
      }
      getBaseTargetFromProps(e, t) {
        return e[t];
      }
      readValueFromInstance(e, t) {
        if (iA.has(t)) {
          let e = aU(t);
          return (e && e.default) || 0;
        }
        return (t = ol.has(t) ? t : ii(t)), e.getAttribute(t);
      }
      measureInstanceViewportBox() {
        return ln();
      }
      scrapeMotionValuesFromProps(e, t, n) {
        return op(e, t, n);
      }
      build(e, t, n, r) {
        oi(e, t, n, this.isSVGTag, r.transformTemplate);
      }
      renderInstance(e, t, n, r) {
        ou(e, t, n, r);
      }
      mount(e) {
        (this.isSVGTag = oa(e.tagName)), super.mount(e);
      }
    }
    const uD = (e, t) =>
      iC(e) ?
      new uj(t, {
        enableHardwareAcceleration: !1
      }) :
      new uA(t, {
        allowProjection: e !== L.Fragment,
        enableHardwareAcceleration: !0,
      }),
      uR = {
        animation: {
          Feature: class extends oI {
            constructor(e) {
              super(e),
                e.animationState ||
                (e.animationState = (function(e) {
                  let t = (t) =>
                    Promise.all(
                      t.map(({
                          animation: t,
                          options: n
                        }) =>
                        (function(e, t, n = {}) {
                          let r;
                          if (
                            (e.notify("AnimationStart", t),
                              Array.isArray(t))
                          )
                            r = Promise.all(t.map((t) => sV(e, t, n)));
                          else if ("string" == typeof t) r = sV(e, t, n);
                          else {
                            let i =
                              "function" == typeof t ?
                              oK(e, t, n.custom) :
                              t;
                            r = Promise.all(sF(e, i, n));
                          }
                          return r.then(() => {
                            ob.postRender(() => {
                              e.notify("AnimationComplete", t);
                            });
                          });
                        })(e, t, n)
                      )
                    ),
                    n = {
                      animate: sH(!0),
                      whileInView: sH(),
                      whileHover: sH(),
                      whileTap: sH(),
                      whileDrag: sH(),
                      whileFocus: sH(),
                      exit: sH(),
                    },
                    r = !0,
                    i = (t) => (n, r) => {
                      var i;
                      let o = oK(
                        e,
                        r,
                        "exit" === t ?
                        null === (i = e.presenceContext) || void 0 === i ?
                        void 0 :
                        i.custom :
                        void 0
                      );
                      if (o) {
                        let {
                          transition: e,
                          transitionEnd: t,
                          ...r
                        } = o;
                        n = {
                          ...n,
                          ...r,
                          ...t
                        };
                      }
                      return n;
                    };

                  function o(o) {
                    let a = e.getProps(),
                      s = e.getVariantContext(!0) || {},
                      l = [],
                      u = new Set(),
                      c = {},
                      p = 1 / 0;
                    for (let t = 0; t < sq; t++) {
                      var d;
                      let f = sB[t],
                        h = n[f],
                        m = void 0 !== a[f] ? a[f] : s[f],
                        y = ih(m),
                        g = f === o ? h.isActive : null;
                      !1 === g && (p = t);
                      let v = m === s[f] && m !== a[f] && y;
                      if (
                        (v && r && e.manuallyAnimateOnMount && (v = !1),
                          (h.protectedKeys = {
                            ...c
                          }),
                          (!h.isActive && null === g) ||
                          (!m && !h.prevProp) ||
                          im(m) ||
                          "boolean" == typeof m)
                      )
                        continue;
                      let b =
                        ((d = h.prevProp),
                          ("string" == typeof m ?
                            m !== d :
                            !!Array.isArray(m) && !o$(m, d)) ||
                          (f === o && h.isActive && !v && y) ||
                          (t > p && y)),
                        w = !1,
                        x = Array.isArray(m) ? m : [m],
                        S = x.reduce(i(f), {});
                      !1 === g && (S = {});
                      let {
                        prevResolvedValues: k = {}
                      } = h,
                      _ = {
                          ...k,
                          ...S
                        },
                        T = (t) => {
                          (b = !0),
                          u.has(t) && ((w = !0), u.delete(t)),
                            (h.needsAnimating[t] = !0);
                          let n = e.getValue(t);
                          n && (n.liveStyle = !1);
                        };
                      for (let e in _) {
                        let t = S[e],
                          n = k[e];
                        if (!c.hasOwnProperty(e))
                          (of(t) && of(n) ? o$(t, n) : t === n) ?
                          void 0 !== t && u.has(e) ?
                          T(e) :
                          (h.protectedKeys[e] = !0) :
                          null != t ?
                          T(e) :
                          u.add(e);
                      }
                      (h.prevProp = m),
                      (h.prevResolvedValues = S),
                      h.isActive && (c = {
                          ...c,
                          ...S
                        }),
                        r && e.blockInitialAnimation && (b = !1),
                        b &&
                        (!v || w) &&
                        l.push(
                          ...x.map((e) => ({
                            animation: e,
                            options: {
                              type: f
                            },
                          }))
                        );
                    }
                    if (u.size) {
                      let t = {};
                      u.forEach((n) => {
                          let r = e.getBaseTarget(n),
                            i = e.getValue(n);
                          i && (i.liveStyle = !0),
                            (t[n] = null != r ? r : null);
                        }),
                        l.push({
                          animation: t
                        });
                    }
                    let f = !!l.length;
                    return (
                      r &&
                      (!1 === a.initial || a.initial === a.animate) &&
                      !e.manuallyAnimateOnMount &&
                      (f = !1),
                      (r = !1),
                      f ? t(l) : Promise.resolve()
                    );
                  }
                  return {
                    animateChanges: o,
                    setActive: function(t, r) {
                      var i;
                      if (n[t].isActive === r) return Promise.resolve();
                      null === (i = e.variantChildren) ||
                        void 0 === i ||
                        i.forEach((e) => {
                          var n;
                          return null === (n = e.animationState) ||
                            void 0 === n ?
                            void 0 :
                            n.setActive(t, r);
                        }),
                        (n[t].isActive = r);
                      let a = o(t);
                      for (let e in n) n[e].protectedKeys = {};
                      return a;
                    },
                    setAnimateFunction: function(n) {
                      t = n(e);
                    },
                    getState: () => n,
                  };
                })(e));
            }
            updateAnimationControlsSubscription() {
              let {
                animate: e
              } = this.node.getProps();
              this.unmount(),
                im(e) && (this.unmount = e.subscribe(this.node));
            }
            mount() {
              this.updateAnimationControlsSubscription();
            }
            update() {
              let {
                animate: e
              } = this.node.getProps(), {
                animate: t
              } = this.node.prevProps || {};
              e !== t && this.updateAnimationControlsSubscription();
            }
            unmount() {}
          },
        },
        exit: {
          Feature: class extends oI {
            constructor() {
              super(...arguments), (this.id = sW++);
            }
            update() {
              if (!this.node.presenceContext) return;
              let {
                isPresent: e,
                onExitComplete: t
              } =
              this.node.presenceContext, {
                isPresent: n
              } = this.node.prevPresenceContext || {};
              if (!this.node.animationState || e === n) return;
              let r = this.node.animationState.setActive("exit", !e);
              t && !e && r.then(() => t(this.id));
            }
            mount() {
              let {
                register: e
              } = this.node.presenceContext || {};
              e && (this.unmount = e(this.id));
            }
            unmount() {}
          },
        },
        inView: {
          Feature: class extends oI {
            constructor() {
              super(...arguments),
                (this.hasEnteredView = !1),
                (this.isInView = !1);
            }
            startObserver() {
              this.unmount();
              let {
                viewport: e = {}
              } = this.node.getProps(), {
                  root: t,
                  margin: n,
                  amount: r = "some",
                  once: i
                } = e,
                o = {
                  root: t ? t.current : void 0,
                  rootMargin: n,
                  threshold: "number" == typeof r ? r : oW[r],
                };
              return (function(e, t, n) {
                let r = (function({
                  root: e,
                  ...t
                }) {
                  let n = e || document;
                  oB.has(n) || oB.set(n, {});
                  let r = oB.get(n),
                    i = JSON.stringify(t);
                  return (
                    r[i] ||
                    (r[i] = new IntersectionObserver(oH, {
                      root: e,
                      ...t,
                    })),
                    r[i]
                  );
                })(t);
                return (
                  oz.set(e, n),
                  r.observe(e),
                  () => {
                    oz.delete(e), r.unobserve(e);
                  }
                );
              })(this.node.current, o, (e) => {
                let {
                  isIntersecting: t
                } = e;
                if (
                  this.isInView === t ||
                  ((this.isInView = t), i && !t && this.hasEnteredView)
                )
                  return;
                t && (this.hasEnteredView = !0),
                  this.node.animationState &&
                  this.node.animationState.setActive("whileInView", t);
                let {
                  onViewportEnter: n,
                  onViewportLeave: r
                } =
                this.node.getProps(),
                  o = t ? n : r;
                o && o(e);
              });
            }
            mount() {
              this.startObserver();
            }
            update() {
              if ("undefined" == typeof IntersectionObserver) return;
              let {
                props: e,
                prevProps: t
              } = this.node;
              ["amount", "margin", "root"].some(
                (function({
                  viewport: e = {}
                }, {
                  viewport: t = {}
                } = {}) {
                  return (n) => e[n] !== t[n];
                })(e, t)
              ) && this.startObserver();
            }
            unmount() {}
          },
        },
        tap: {
          Feature: class extends oI {
            constructor() {
              super(...arguments),
                (this.removeStartListeners = ov),
                (this.removeEndListeners = ov),
                (this.removeAccessibleListeners = ov),
                (this.startPointerPress = (e, t) => {
                  if (this.isPressing) return;
                  this.removeEndListeners();
                  let n = this.node.getProps(),
                    r = oO(
                      window,
                      "pointerup",
                      (e, t) => {
                        if (!this.checkPressEnd()) return;
                        let {
                          onTap: n,
                          onTapCancel: r,
                          globalTapTarget: i,
                        } = this.node.getProps();
                        i || oF(this.node.current, e.target) ?
                          n && n(e, t) :
                          r && r(e, t);
                      }, {
                        passive: !(n.onTap || n.onPointerUp)
                      }
                    ),
                    i = oO(
                      window,
                      "pointercancel",
                      (e, t) => this.cancelPress(e, t), {
                        passive: !(n.onTapCancel || n.onPointerCancel)
                      }
                    );
                  (this.removeEndListeners = oj(r, i)), this.startPress(e, t);
                }),
                (this.startAccessiblePress = () => {
                  let e = oT(this.node.current, "keydown", (e) => {
                      "Enter" !== e.key ||
                        this.isPressing ||
                        (this.removeEndListeners(),
                          (this.removeEndListeners = oT(
                            this.node.current,
                            "keyup",
                            (e) => {
                              "Enter" === e.key &&
                                this.checkPressEnd() &&
                                oV("up", (e, t) => {
                                  let {
                                    onTap: n
                                  } = this.node.getProps();
                                  n && n(e, t);
                                });
                            }
                          )),
                          oV("down", (e, t) => {
                            this.startPress(e, t);
                          }));
                    }),
                    t = oT(this.node.current, "blur", () => {
                      this.isPressing &&
                        oV("cancel", (e, t) => this.cancelPress(e, t));
                    });
                  this.removeAccessibleListeners = oj(e, t);
                });
            }
            startPress(e, t) {
              this.isPressing = !0;
              let {
                onTapStart: n,
                whileTap: r
              } = this.node.getProps();
              r &&
                this.node.animationState &&
                this.node.animationState.setActive("whileTap", !0),
                n && n(e, t);
            }
            checkPressEnd() {
              return (
                this.removeEndListeners(),
                (this.isPressing = !1),
                this.node.getProps().whileTap &&
                this.node.animationState &&
                this.node.animationState.setActive("whileTap", !1),
                !oL()
              );
            }
            cancelPress(e, t) {
              if (!this.checkPressEnd()) return;
              let {
                onTapCancel: n
              } = this.node.getProps();
              n && n(e, t);
            }
            mount() {
              let e = this.node.getProps(),
                t = oO(
                  e.globalTapTarget ? window : this.node.current,
                  "pointerdown",
                  this.startPointerPress, {
                    passive: !(e.onTapStart || e.onPointerStart)
                  }
                ),
                n = oT(this.node.current, "focus", this.startAccessiblePress);
              this.removeStartListeners = oj(t, n);
            }
            unmount() {
              this.removeStartListeners(),
                this.removeEndListeners(),
                this.removeAccessibleListeners();
            }
          },
        },
        focus: {
          Feature: class extends oI {
            constructor() {
              super(...arguments), (this.isActive = !1);
            }
            onFocus() {
              let e = !1;
              try {
                e = this.node.current.matches(":focus-visible");
              } catch (t) {
                e = !0;
              }
              e &&
                this.node.animationState &&
                (this.node.animationState.setActive("whileFocus", !0),
                  (this.isActive = !0));
            }
            onBlur() {
              this.isActive &&
                this.node.animationState &&
                (this.node.animationState.setActive("whileFocus", !1),
                  (this.isActive = !1));
            }
            mount() {
              this.unmount = oj(
                oT(this.node.current, "focus", () => this.onFocus()),
                oT(this.node.current, "blur", () => this.onBlur())
              );
            }
            unmount() {}
          },
        },
        hover: {
          Feature: class extends oI {
            mount() {
              this.unmount = oj(oU(this.node, !0), oU(this.node, !1));
            }
            unmount() {}
          },
        },
        pan: {
          Feature: class extends oI {
            constructor() {
              super(...arguments), (this.removePointerDownListener = ov);
            }
            onPointerDown(e) {
              this.session = new sK(e, this.createPanHandlers(), {
                transformPagePoint: this.node.getTransformPagePoint(),
                contextWindow: lb(this.node),
              });
            }
            createPanHandlers() {
              let {
                onPanSessionStart: e,
                onPanStart: t,
                onPan: n,
                onPanEnd: r,
              } = this.node.getProps();
              return {
                onSessionStart: lk(e),
                onStart: lk(t),
                onMove: n,
                onEnd: (e, t) => {
                  delete this.session, r && r(e, t);
                },
              };
            }
            mount() {
              this.removePointerDownListener = oO(
                this.node.current,
                "pointerdown",
                (e) => this.onPointerDown(e)
              );
            }
            update() {
              this.session &&
                this.session.updateHandlers(this.createPanHandlers());
            }
            unmount() {
              this.removePointerDownListener(),
                this.session && this.session.end();
            }
          },
        },
        drag: {
          Feature: class extends oI {
            constructor(e) {
              super(e),
                (this.removeGroupControls = ov),
                (this.removeListeners = ov),
                (this.controls = new lx(e));
            }
            mount() {
              let {
                dragControls: e
              } = this.node.getProps();
              e && (this.removeGroupControls = e.subscribe(this.controls)),
                (this.removeListeners = this.controls.addListeners() || ov);
            }
            unmount() {
              this.removeGroupControls(), this.removeListeners();
            }
          },
          ProjectionNode: uv,
          MeasureLayout: lP,
        },
        layout: {
          ProjectionNode: uv,
          MeasureLayout: lP
        },
      },
      uM = (function(e) {
        function t(t, n = {}) {
          return (function({
            preloadedFeatures: e,
            createVisualElement: t,
            useRender: n,
            useVisualState: r,
            Component: i,
          }) {
            e &&
              (function(e) {
                for (let t in e) iS[t] = {
                  ...iS[t],
                  ...e[t]
                };
              })(e);
            let o = (0, L.forwardRef)(function(o, a) {
              var s;
              let l;
              let u = {
                  ...(0, L.useContext)(r8),
                  ...o,
                  layoutId: (function({
                    layoutId: e
                  }) {
                    let t = (0, L.useContext)(ik).id;
                    return t && void 0 !== e ? t + "-" + e : e;
                  })(o),
                },
                {
                  isStatic: c
                } = u,
                p = (function(e) {
                  let {
                    initial: t,
                    animate: n
                  } = (function(e, t) {
                    if (iv(e)) {
                      let {
                        initial: t,
                        animate: n
                      } = e;
                      return {
                        initial: !1 === t || ih(t) ? t : void 0,
                        animate: ih(n) ? n : void 0,
                      };
                    }
                    return !1 !== e.inherit ? t : {};
                  })(e, (0, L.useContext)(r9));
                  return (0, L.useMemo)(
                    () => ({
                      initial: t,
                      animate: n
                    }),
                    [iw(t), iw(n)]
                  );
                })(o),
                d = r(o, c);
              if (!c && ie) {
                p.visualElement = (function(e, t, n, r) {
                  let {
                    visualElement: i
                  } = (0, L.useContext)(r9),
                  o = (0, L.useContext)(ir),
                    a = (0, L.useContext)(r7),
                    s = (0, L.useContext)(r8).reducedMotion,
                    l = (0, L.useRef)();
                  (r = r || o.renderer),
                  !l.current &&
                    r &&
                    (l.current = r(e, {
                      visualState: t,
                      parent: i,
                      props: n,
                      presenceContext: a,
                      blockInitialAnimation: !!a && !1 === a.initial,
                      reducedMotionConfig: s,
                    }));
                  let u = l.current;
                  (0, L.useInsertionEffect)(() => {
                    u && u.update(n, a);
                  });
                  let c = (0, L.useRef)(!!(n[io] && !window.HandoffComplete));
                  return (
                    it(() => {
                      u &&
                        (ic.postRender(u.render),
                          c.current &&
                          u.animationState &&
                          u.animationState.animateChanges());
                    }),
                    (0, L.useEffect)(() => {
                      u &&
                        (u.updateFeatures(),
                          !c.current &&
                          u.animationState &&
                          u.animationState.animateChanges(),
                          c.current &&
                          ((c.current = !1), (window.HandoffComplete = !0)));
                    }),
                    u
                  );
                })(i, d, u, t);
                let n = (0, L.useContext)(i_),
                  r = (0, L.useContext)(ir).strict;
                p.visualElement &&
                  (l = p.visualElement.loadFeatures(u, r, e, n));
              }
              return (0, N.jsxs)(r9.Provider, {
                value: p,
                children: [
                  l && p.visualElement ?
                  (0, N.jsx)(l, {
                    visualElement: p.visualElement,
                    ...u
                  }) :
                  null,
                  n(
                    i,
                    o,
                    ((s = p.visualElement),
                      (0, L.useCallback)(
                        (e) => {
                          e && d.mount && d.mount(e),
                            s && (e ? s.mount(e) : s.unmount()),
                            a &&
                            ("function" == typeof a ?
                              a(e) :
                              id(a) && (a.current = e));
                        },
                        [s]
                      )),
                    d,
                    c,
                    p.visualElement
                  ),
                ],
              });
            });
            return (o[iT] = i), o;
          })(e(t, n));
        }
        if ("undefined" == typeof Proxy) return t;
        let n = new Map();
        return new Proxy(t, {
          get: (e, r) => (n.has(r) || n.set(r, t(r)), n.get(r)),
        });
      })((e, t) =>
        (function(e, {
          forwardMotionProps: t = !1
        }, n, r) {
          return {
            ...(iC(e) ? ok : o_),
            preloadedFeatures: n,
            useRender: (function(e = !1) {
              return (t, n, r, {
                latestValues: i
              }, o) => {
                let a = (
                    iC(t) ?
                    function(e, t, n, r) {
                      let i = (0, L.useMemo)(() => {
                        let n = oo();
                        return (
                          oi(
                            n,
                            t, {
                              enableHardwareAcceleration: !1
                            },
                            oa(r),
                            e.transformTemplate
                          ), {
                            ...n.attrs,
                            style: {
                              ...n.style
                            }
                          }
                        );
                      }, [t]);
                      if (e.style) {
                        let t = {};
                        i8(t, e.style, e),
                          (i.style = {
                            ...t,
                            ...i.style
                          });
                      }
                      return i;
                    } :
                    function(e, t, n) {
                      let r = {},
                        i = (function(e, t, n) {
                          let r = e.style || {},
                            i = {};
                          return (
                            i8(i, r, e),
                            Object.assign(
                              i,
                              (function({
                                transformTemplate: e
                              }, t, n) {
                                return (0, L.useMemo)(() => {
                                  let r = i6();
                                  return (
                                    i5(
                                      r,
                                      t, {
                                        enableHardwareAcceleration: !n
                                      },
                                      e
                                    ),
                                    Object.assign({}, r.vars, r.style)
                                  );
                                }, [t]);
                              })(e, t, n)
                            ),
                            i
                          );
                        })(e, t, n);
                      return (
                        e.drag &&
                        !1 !== e.dragListener &&
                        ((r.draggable = !1),
                          (i.userSelect =
                            i.WebkitUserSelect =
                            i.WebkitTouchCallout =
                            "none"),
                          (i.touchAction = !0 === e.drag ?
                            "none" :
                            `pan-${"x" === e.drag ? "y" : "x"}`)),
                        void 0 === e.tabIndex &&
                        (e.onTap || e.onTapStart || e.whileTap) &&
                        (r.tabIndex = 0),
                        (r.style = i),
                        r
                      );
                    }
                  )(n, i, o, t),
                  s = (function(e, t, n) {
                    let r = {};
                    for (let i in e)
                      ("values" !== i || "object" != typeof e.values) &&
                      (oe(i) ||
                        (!0 === n && i7(i)) ||
                        (!t && !i7(i)) ||
                        (e.draggable && i.startsWith("onDrag"))) &&
                      (r[i] = e[i]);
                    return r;
                  })(n, "string" == typeof t, e),
                  l = t !== L.Fragment ? {
                    ...s,
                    ...a,
                    ref: r
                  } : {},
                  {
                    children: u
                  } = n,
                  c = (0, L.useMemo)(() => (iD(u) ? u.get() : u), [u]);
                return (0, L.createElement)(t, {
                  ...l,
                  children: c
                });
              };
            })(t),
            createVisualElement: r,
            Component: e,
          };
        })(e, t, uR, uD)
      );
    R("lx97N");
    var uN = (e) =>
      (0, N.jsx)(uM.div, {
        initial: {
          rotate: 0
        },
        animate: {
          rotate: 180
        },
        transition: {
          repeat: 1 / 0,
          duration: 1
        },
        children: (0, N.jsx)("svg", {
          viewBox: "0 0 24 24",
          xmlns: "http://www.w3.org/2000/svg",
          className: r(r6)(e.height, e.width),
          style: {
            maxWidth: "50vw",
            maxHeight: "50vh"
          },
          children: (0, N.jsxs)("g", {
            fill: "none",
            children: [
              (0, N.jsx)("path", {
                d: "M0 0h24v24H0Z"
              }),
              (0, N.jsx)("path", {
                className: r(r6)(e.strokeWidth, e.stroke, e.color),
                strokeLinecap: "round",
                strokeLinejoin: "round",
                d: "M10 18h4M16.979 3H7.021a1 1 0 0 0-1 1v2.378a2 2 0 0 0 .38 1.173L9.621 12l-3.22 4.449a2 2 0 0 0-.38 1.173V20a1 1 0 0 0 1 1h9.957a1 1 0 0 0 1-1v-2.342c0-.444-.148-.875-.42-1.226L14.121 12l3.438-4.433c.272-.351.42-.782.42-1.226V4a1 1 0 0 0-1-1Z",
              }),
            ],
          }),
        }),
      });
    R("lx97N"),
      ((s = w || (w = {}))[(s.Small = 0)] = "Small"),
      (s[(s.Default = 1)] = "Default"),
      (s[(s.Large = 2)] = "Large"),
      (s[(s.ExtraLarge = 3)] = "ExtraLarge"),
      ((l = x || (x = {}))[(l.Primary = 0)] = "Primary"),
      (l[(l.Secondary = 1)] = "Secondary"),
      (l[(l.Destructive = 2)] = "Destructive"),
      (l[(l.Special = 3)] = "Special"),
      (l[(l.Magic = 4)] = "Magic"),
      ((u = S || (S = {}))[(u.Enabled = 0)] = "Enabled"),
      (u[(u.Disabled = 1)] = "Disabled"),
      (u[(u.Loading = 2)] = "Loading");
    const uL = {
        0: "px-2 py-1",
        1: "px-3 py-2",
        2: "px-4 py-2.5",
        3: "px-5 py-4",
      },
      uI = {
        0: "bg-primary-500 bg-grainy-texture outline-neutral-700",
        1: "bg-neutral-200 border-1 border-neutral-400",
        2: "bg-danger-100 border-1 border-danger-700 outline-neutral-700",
        3: "bg-primary-200 border-[1.5px] border-primary-500",
        4: "bg-secondary-300 border-[2px] border-neutral-700 shadow-smoothxl",
      },
      uU = {
        0: "opacity-100",
        1: "opacity-60",
        2: "opacity-60"
      };

    function uF({
      children: e,
      type: t = "button",
      onClick: n = (e) => null,
      variant: i = 0,
      size: o = 1,
      state: a = 0,
      width: s = "",
      disablePadding: l = !1,
      shouldAnimate: u = !0,
    }) {
      return (0, N.jsxs)(uM.button, {
        type: t,
        disabled: 0 !== a,
        whileHover: {
          scale: 0 === a && u ? 1.05 : 1
        },
        whileTap: {
          scale: 0 === a && u ? 0.95 : 1
        },
        layout: !0,
        layoutRoot: !0,
        onClick: "submit" !== t && 0 === a ? n : void 0,
        className: r(r6)(
          "flex items-center justify-center gap-2 rounded font-medium leading-4 whitespace-nowrap overflow-hidden text-overflow-ellipsis w-auto min-w-0 min-h-0",
          l ? "p-0" : uL[o],
          uI[i],
          uU[a],
          4 === i && 3 === o && "rounded-xl border-[3.64px]",
          s
        ),
        children: [
          2 === a &&
          (0, N.jsx)("span", {
            className: "",
            children: (0, N.jsx)(uN, {
              height: "h-5",
              width: "w-5",
              strokeWidth: "stroke-2",
              stroke: "stroke-neutral-700",
            }),
          }),
          e,
        ],
      });
    }
    (uF.variant = x), (uF.size = w), (uF.state = S);
    const uV = () => {
      let {
        loginWithSocial: e,
        isBusy: t
      } = r5();
      return (0, N.jsx)("div", {
        className: "flex w-full",
        children: (0, N.jsx)(uF, {
          state: t ? uF.state.Loading : uF.state.Enabled,
          variant: uF.variant.Secondary,
          onClick: e("google-oauth2"),
          width: "w-full",
          children: (0, N.jsxs)("div", {
            className: "flex items-center justify-center gap-2",
            children: [
              (0, N.jsx)("img", {
                src: "https://app.listenup.ai/images/destinations_logos/google_logo.png",
                width: 20,
                alt: "Google logo",
              }),
              (0, N.jsx)("h5", {
                children: "Continue with Google"
              }),
            ],
          }),
        }),
      });
    };
    R("lx97N");
    var L = (R("lx97N"), R("lx97N")),
      uz = (function() {
        if ("undefined" != typeof Map) return Map;

        function e(e, t) {
          var n = -1;
          return (
            e.some(function(e, r) {
              return e[0] === t && ((n = r), !0);
            }),
            n
          );
        }
        return (function() {
          function t() {
            this.__entries__ = [];
          }
          return (
            Object.defineProperty(t.prototype, "size", {
              get: function() {
                return this.__entries__.length;
              },
              enumerable: !0,
              configurable: !0,
            }),
            (t.prototype.get = function(t) {
              var n = e(this.__entries__, t),
                r = this.__entries__[n];
              return r && r[1];
            }),
            (t.prototype.set = function(t, n) {
              var r = e(this.__entries__, t);
              ~r
                ?
                (this.__entries__[r][1] = n) :
                this.__entries__.push([t, n]);
            }),
            (t.prototype.delete = function(t) {
              var n = this.__entries__,
                r = e(n, t);
              ~r && n.splice(r, 1);
            }),
            (t.prototype.has = function(t) {
              return !!~e(this.__entries__, t);
            }),
            (t.prototype.clear = function() {
              this.__entries__.splice(0);
            }),
            (t.prototype.forEach = function(e, t) {
              void 0 === t && (t = null);
              for (var n = 0, r = this.__entries__; n < r.length; n++) {
                var i = r[n];
                e.call(t, i[1], i[0]);
              }
            }),
            t
          );
        })();
      })(),
      uB =
      "undefined" != typeof window &&
      "undefined" != typeof document &&
      window.document === document,
      uq =
      void 0 !== A && A.Math === Math ?
      A :
      "undefined" != typeof self && self.Math === Math ?
      self :
      "undefined" != typeof window && window.Math === Math ?
      window :
      Function("return this")(),
      uH =
      "function" == typeof requestAnimationFrame ?
      requestAnimationFrame.bind(uq) :
      function(e) {
        return setTimeout(function() {
          return e(Date.now());
        }, 1e3 / 60);
      },
      uW = [
        "top",
        "right",
        "bottom",
        "left",
        "width",
        "height",
        "size",
        "weight",
      ],
      u$ = "undefined" != typeof MutationObserver,
      uK = (function() {
        function e() {
          (this.connected_ = !1),
          (this.mutationEventsAdded_ = !1),
          (this.mutationsObserver_ = null),
          (this.observers_ = []),
          (this.onTransitionEnd_ = this.onTransitionEnd_.bind(this)),
          (this.refresh = (function(e, t) {
            var n = !1,
              r = !1,
              i = 0;

            function o() {
              n && ((n = !1), e()), r && s();
            }

            function a() {
              uH(o);
            }

            function s() {
              var e = Date.now();
              if (n) {
                if (e - i < 2) return;
                r = !0;
              } else(n = !0), (r = !1), setTimeout(a, 20);
              i = e;
            }
            return s;
          })(this.refresh.bind(this), 0));
        }
        return (
          (e.prototype.addObserver = function(e) {
            ~this.observers_.indexOf(e) || this.observers_.push(e),
              this.connected_ || this.connect_();
          }),
          (e.prototype.removeObserver = function(e) {
            var t = this.observers_,
              n = t.indexOf(e);
            ~n && t.splice(n, 1),
              !t.length && this.connected_ && this.disconnect_();
          }),
          (e.prototype.refresh = function() {
            this.updateObservers_() && this.refresh();
          }),
          (e.prototype.updateObservers_ = function() {
            var e = this.observers_.filter(function(e) {
              return e.gatherActive(), e.hasActive();
            });
            return (
              e.forEach(function(e) {
                return e.broadcastActive();
              }),
              e.length > 0
            );
          }),
          (e.prototype.connect_ = function() {
            uB &&
              !this.connected_ &&
              (document.addEventListener(
                  "transitionend",
                  this.onTransitionEnd_
                ),
                window.addEventListener("resize", this.refresh),
                u$ ?
                ((this.mutationsObserver_ = new MutationObserver(
                    this.refresh
                  )),
                  this.mutationsObserver_.observe(document, {
                    attributes: !0,
                    childList: !0,
                    characterData: !0,
                    subtree: !0,
                  })) :
                (document.addEventListener(
                    "DOMSubtreeModified",
                    this.refresh
                  ),
                  (this.mutationEventsAdded_ = !0)),
                (this.connected_ = !0));
          }),
          (e.prototype.disconnect_ = function() {
            uB &&
              this.connected_ &&
              (document.removeEventListener(
                  "transitionend",
                  this.onTransitionEnd_
                ),
                window.removeEventListener("resize", this.refresh),
                this.mutationsObserver_ && this.mutationsObserver_.disconnect(),
                this.mutationEventsAdded_ &&
                document.removeEventListener(
                  "DOMSubtreeModified",
                  this.refresh
                ),
                (this.mutationsObserver_ = null),
                (this.mutationEventsAdded_ = !1),
                (this.connected_ = !1));
          }),
          (e.prototype.onTransitionEnd_ = function(e) {
            var t = e.propertyName,
              n = void 0 === t ? "" : t;
            uW.some(function(e) {
              return !!~n.indexOf(e);
            }) && this.refresh();
          }),
          (e.getInstance = function() {
            return (
              this.instance_ || (this.instance_ = new e()), this.instance_
            );
          }),
          (e.instance_ = null),
          e
        );
      })(),
      uQ = function(e, t) {
        for (var n = 0, r = Object.keys(t); n < r.length; n++) {
          var i = r[n];
          Object.defineProperty(e, i, {
            value: t[i],
            enumerable: !1,
            writable: !1,
            configurable: !0,
          });
        }
        return e;
      },
      uX = function(e) {
        return (e && e.ownerDocument && e.ownerDocument.defaultView) || uq;
      },
      uY = u0(0, 0, 0, 0);

    function uG(e) {
      return parseFloat(e) || 0;
    }

    function uJ(e) {
      for (var t = [], n = 1; n < arguments.length; n++)
        t[n - 1] = arguments[n];
      return t.reduce(function(t, n) {
        return t + uG(e["border-" + n + "-width"]);
      }, 0);
    }
    var uZ =
      "undefined" != typeof SVGGraphicsElement ?
      function(e) {
        return e instanceof uX(e).SVGGraphicsElement;
      } :
      function(e) {
        return (
          e instanceof uX(e).SVGElement && "function" == typeof e.getBBox
        );
      };

    function u0(e, t, n, r) {
      return {
        x: e,
        y: t,
        width: n,
        height: r
      };
    }
    var u1 = (function() {
        function e(e) {
          (this.broadcastWidth = 0),
          (this.broadcastHeight = 0),
          (this.contentRect_ = u0(0, 0, 0, 0)),
          (this.target = e);
        }
        return (
          (e.prototype.isActive = function() {
            var e = (function(e) {
              if (!uB) return uY;
              if (uZ(e)) {
                var t;
                return u0(0, 0, (t = e.getBBox()).width, t.height);
              }
              return (function(e) {
                var t = e.clientWidth,
                  n = e.clientHeight;
                if (!t && !n) return uY;
                var r = uX(e).getComputedStyle(e),
                  i = (function(e) {
                    for (
                      var t = {},
                        n = 0,
                        r = ["top", "right", "bottom", "left"]; n < r.length; n++
                    ) {
                      var i = r[n],
                        o = e["padding-" + i];
                      t[i] = uG(o);
                    }
                    return t;
                  })(r),
                  o = i.left + i.right,
                  a = i.top + i.bottom,
                  s = uG(r.width),
                  l = uG(r.height);
                if (
                  ("border-box" === r.boxSizing &&
                    (Math.round(s + o) !== t &&
                      (s -= uJ(r, "left", "right") + o),
                      Math.round(l + a) !== n &&
                      (l -= uJ(r, "top", "bottom") + a)),
                    e !== uX(e).document.documentElement)
                ) {
                  var u = Math.round(s + o) - t,
                    c = Math.round(l + a) - n;
                  1 !== Math.abs(u) && (s -= u),
                    1 !== Math.abs(c) && (l -= c);
                }
                return u0(i.left, i.top, s, l);
              })(e);
            })(this.target);
            return (
              (this.contentRect_ = e),
              e.width !== this.broadcastWidth ||
              e.height !== this.broadcastHeight
            );
          }),
          (e.prototype.broadcastRect = function() {
            var e = this.contentRect_;
            return (
              (this.broadcastWidth = e.width),
              (this.broadcastHeight = e.height),
              e
            );
          }),
          e
        );
      })(),
      u2 = function(e, t) {
        var n,
          r,
          i,
          o,
          a,
          s =
          ((n = t.x),
            (r = t.y),
            (i = t.width),
            (o = t.height),
            uQ(
              (a = Object.create(
                ("undefined" != typeof DOMRectReadOnly ?
                  DOMRectReadOnly :
                  Object
                ).prototype
              )), {
                x: n,
                y: r,
                width: i,
                height: o,
                top: r,
                right: n + i,
                bottom: o + r,
                left: n,
              }
            ),
            a);
        uQ(this, {
          target: e,
          contentRect: s
        });
      },
      u3 = (function() {
        function e(e, t, n) {
          if (
            ((this.activeObservations_ = []),
              (this.observations_ = new uz()),
              "function" != typeof e)
          )
            throw TypeError(
              "The callback provided as parameter 1 is not a function."
            );
          (this.callback_ = e),
          (this.controller_ = t),
          (this.callbackCtx_ = n);
        }
        return (
          (e.prototype.observe = function(e) {
            if (!arguments.length)
              throw TypeError("1 argument required, but only 0 present.");
            if ("undefined" != typeof Element && Element instanceof Object) {
              if (!(e instanceof uX(e).Element))
                throw TypeError('parameter 1 is not of type "Element".');
              var t = this.observations_;
              t.has(e) ||
                (t.set(e, new u1(e)),
                  this.controller_.addObserver(this),
                  this.controller_.refresh());
            }
          }),
          (e.prototype.unobserve = function(e) {
            if (!arguments.length)
              throw TypeError("1 argument required, but only 0 present.");
            if ("undefined" != typeof Element && Element instanceof Object) {
              if (!(e instanceof uX(e).Element))
                throw TypeError('parameter 1 is not of type "Element".');
              var t = this.observations_;
              t.has(e) &&
                (t.delete(e),
                  t.size || this.controller_.removeObserver(this));
            }
          }),
          (e.prototype.disconnect = function() {
            this.clearActive(),
              this.observations_.clear(),
              this.controller_.removeObserver(this);
          }),
          (e.prototype.gatherActive = function() {
            var e = this;
            this.clearActive(),
              this.observations_.forEach(function(t) {
                t.isActive() && e.activeObservations_.push(t);
              });
          }),
          (e.prototype.broadcastActive = function() {
            if (this.hasActive()) {
              var e = this.callbackCtx_,
                t = this.activeObservations_.map(function(e) {
                  return new u2(e.target, e.broadcastRect());
                });
              this.callback_.call(e, t, e), this.clearActive();
            }
          }),
          (e.prototype.clearActive = function() {
            this.activeObservations_.splice(0);
          }),
          (e.prototype.hasActive = function() {
            return this.activeObservations_.length > 0;
          }),
          e
        );
      })(),
      u4 = "undefined" != typeof WeakMap ? new WeakMap() : new uz(),
      u5 = function e(t) {
        if (!(this instanceof e))
          throw TypeError("Cannot call a class as a function.");
        if (!arguments.length)
          throw TypeError("1 argument required, but only 0 present.");
        var n = new u3(t, uK.getInstance(), this);
        u4.set(this, n);
      };
    ["observe", "unobserve", "disconnect"].forEach(function(e) {
      u5.prototype[e] = function() {
        var t;
        return (t = u4.get(this))[e].apply(t, arguments);
      };
    });
    var u6 = void 0 !== uq.ResizeObserver ? uq.ResizeObserver : u5;
    const u8 = () => {
      let [e, t] = (0, L.useState)(0),
      [n, r] = (0, L.useState)(0),
      [i, o] = (0, L.useState)(0),
      [a, s] = (0, L.useState)(0),
      [l, u] = (0, L.useState)(null),
      c = (0, L.useRef)(null),
        p = (0, L.useCallback)(() => c.current?.disconnect(), []),
        d = (0, L.useCallback)(() => {
          (c.current = new u6((e) => {
            for (let n of e)
              t(n.contentRect.width),
              r(n.contentRect.height),
              o(n.contentRect.x),
              s(n.contentRect.y);
          })),
          l && c.current.observe(l);
        }, [l]);
      return (
        (0, L.useEffect)(() => (d(), () => p()), [p, d]), [u, e, n, i, a]
      );
    };
    ((c = k || (k = {}))[(c.Small = 0)] = "Small"),
    (c[(c.Medium = 1)] = "Medium"),
    (c[(c.Large = 2)] = "Large"),
    (c[(c.Half = 3)] = "Half"),
    (c[(c.Full = 4)] = "Full"),
    (c[(c.Fit = 5)] = "Fit"),
    ((p = _ || (_ = {}))[(p.h1 = 0)] = "h1"),
    (p[(p.h2 = 1)] = "h2"),
    (p[(p.h3 = 2)] = "h3"),
    (p[(p.h4 = 3)] = "h4"),
    (p[(p.h5 = 4)] = "h5"),
    (p[(p.p = 5)] = "p"),
    (p[(p.Small = 6)] = "Small"),
    ((d = T || (T = {}))[(d.Default = 0)] = "Default"),
    (d[(d.Invisible = 1)] = "Invisible"),
    ((f = E || (E = {}))[(f.Ellipsis = 0)] = "Ellipsis"),
    (f[(f.EllipsisClip = 1)] = "EllipsisClip");
    const u9 = {
        0: "w-60",
        1: "w-[25rem]",
        2: "w-[40rem]",
        3: "w-1/2",
        4: "w-full",
        5: "",
      },
      u7 = {
        0: "h1",
        1: "h2",
        2: "h3",
        3: "h4",
        4: "h5",
        5: "p",
        6: "text-small",
      },
      ce = {
        0: "bg-neutral-50 border-1 border-neutral-400",
        1: "bg-neutral-50/0",
      },
      ct = r(L).forwardRef(
        ({
            value: e,
            label: t,
            onEnter: n,
            error: i,
            disabled: o,
            type: a = "text",
            placeholder: s = "Write here",
            variant: l = 0,
            width: u = 0,
            fontSize: c = 5,
            hideFocus: p = !1,
            textOverflow: d = 1,
            ...f
          },
          h
        ) => {
          let m = (e) => {
              "Enter" === e.key && n ?
                n(e.currentTarget.value) :
                "Backspace" === e.key &&
                "" === e.currentTarget.value &&
                v();
            },
            [y, g] = r(L).useState("initial"),
            v = () => {
              g("scaleRight"),
                setTimeout(() => g("scaleLeft"), 100),
                setTimeout(() => g("initial"), 200);
            },
            [b, w] = u8();
          return (0, N.jsxs)("div", {
            className: r(r6)("flex flex-col gap-1", 4 == u && "w-full"),
            children: [
              t && (0, N.jsx)("label", {
                className: "h4",
                children: t
              }),
              (0, N.jsx)(uM.div, {
                initial: "initial",
                animate: y,
                variants: {
                  initial: {
                    scaleX: 1,
                    rotateY: 0,
                    transformOrigin: "center",
                    perspective: 500,
                  },
                  scaleRight: {
                    scaleX: 0.95,
                    rotateY: -10,
                    transformOrigin: "right",
                    perspective: 500,
                  },
                  scaleLeft: {
                    scaleX: 0.95,
                    rotateY: 10,
                    transformOrigin: "left",
                    perspective: 500,
                  },
                },
                transition: {
                  type: "spring",
                  stiffness: 300
                },
                children: (0, N.jsx)("input", {
                  ref: h,
                  className: r(r6)(
                    "px-2 py-2 rounded transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal",
                    ce[l],
                    u9[u],
                    u7[c],
                    !1 == p && "focus:outline-primary-500",
                    p && "outline-none",
                    i && "border-danger-500",
                    0 === d ?
                    "truncate" :
                    "overflow-hidden text-ellipsis-clip"
                  ),
                  value: e,
                  style: e && 5 == u && "number" == typeof w ? {
                    width: `${w + 20}px`
                  } : {},
                  disabled: o,
                  type: a,
                  placeholder: s,
                  onKeyDown: (e) => m(e),
                  ...f,
                }),
              }),
              5 == u &&
              (0, N.jsx)("span", {
                ref: b,
                className: r(r6)(
                  "absolute top-0 left-0 visibility-hidden h-0 overflow-scroll whitespace-pre",
                  u7[c]
                ),
                children: e,
              }),
            ],
          });
        }
      );
    ct.displayName = "Input";
    const cn = ({
        message: e
      }) =>
      (0, N.jsx)("p", {
        role: "alert",
        className: `text-danger-500 pt-1 pl-1 ${!e && "text-transparent"}`,
        children: e || " ",
      }),
      cr = () => {
        let {
          alert: e
        } = r5();
        return e ?
          "success" == e.severity ?
          (0, N.jsx)("p", {
            role: "alert",
            className: "text-success-500 pt-1 pl-1",
            children: e.message || " ",
          }) :
          (0, N.jsx)(cn, {
            message: e.message
          }) :
          null;
      };
    R("lx97N"),
      ((h = C || (C = {}))[(h.Horizontal = 0)] = "Horizontal"),
      (h[(h.Vertical = 1)] = "Vertical");
    const ci = ({
        orientation: e = 0,
        className: t
      }) =>
      0 === e ?
      (0, N.jsx)("div", {
        className: r(r6)(
          "h-[1px] w-full bg-neutral-300 m-1 rounded-full",
          t
        ),
      }) :
      (0, N.jsx)("div", {
        className: r(r6)(
          "w-[1px] h-full bg-neutral-300 m-1 rounded-full",
          t
        ),
      });
    (ci.orientation = C),
    R("lx97N"),
      ((m = P || (P = {}))[(m.ExtraSmall = 0)] = "ExtraSmall"),
      (m[(m.Small = 1)] = "Small"),
      (m[(m.Medium = 2)] = "Medium"),
      (m[(m.Large = 3)] = "Large"),
      ((y = O || (O = {}))[(y.Enabled = 0)] = "Enabled"),
      (y[(y.Disabled = 1)] = "Disabled"),
      (y[(y.Loading = 2)] = "Loading");
    const co = {
      0: "px-1 py-1 text-xs font-bold",
      1: "px-2.5 py-3 text-xs font-bold",
      2: "px-3 py-3 text-base font-bold",
      3: "px-3 py-3 text-lg font-bold",
    };

    function ca({
      children: e,
      onClick: t = () => null,
      size: n = 2,
      state: i = 0,
      shouldAnimate: o = !0,
      className: a,
    }) {
      return (0, N.jsxs)(uM.button, {
        whileTap: {
          scale: 0 === i && o ? 0.98 : 1
        },
        initial: !1,
        layout: !0,
        layoutRoot: !0,
        onClick: 0 === i ? t : void 0,
        className: r(r6)("flex items-center font-bold rounded", co[n], a),
        children: [
          2 === i &&
          (0, N.jsx)("span", {
            className: "",
            children: (0, N.jsx)(uN, {
              height: "h-5",
              width: "w-5",
              strokeWidth: "stroke-2",
              stroke: "stroke-neutral-700",
            }),
          }),
          e,
        ],
      });
    }
    (ca.size = P), (ca.state = O);
    const cs = ({
      email: e,
      setEmail: t
    }) => {
      let [n, i] = (0, L.useState)(""), {
        login: o,
        isBusy: a,
        setMode: s
      } = r5(),
        l = (t) => {
          "Enter" === t.key && o({
            username: e,
            password: n
          });
        };
      return (0, N.jsx)("div", {
        className: r(r6)(
          "flex items-center justify-center bg-primary-100 bg-dot-grid-pattern bg-repeat bg-pattern w-screen h-screen"
        ),
        children: (0, N.jsx)("div", {
          className: "h-fit w-[50rem] flex flex-col items-center justify-center",
          children: (0, N.jsxs)("div", {
            className: "flex flex-col items-center justify-center gap-4 w-fit",
            children: [
              (0, N.jsx)("div", {
                className: "w-full flex items-center justify-center",
                children: (0, N.jsx)("h2", {
                  className: "underline underline-offset-4",
                  children: "Welcome back!",
                }),
              }),
              (0, N.jsx)("div", {
                className: "border-1 border-neutral-400 bg-neutral-50 rounded p-10 flex flex-col items-center justify-center w-[28rem]",
                children: (0, N.jsxs)("div", {
                  className: "flex flex-col items-center justify-center gap-4 w-full",
                  children: [
                    (0, N.jsx)(cr, {}),
                    (0, N.jsx)(ct, {
                      width: k.Full,
                      id: "email",
                      onChange: (e) => t(e.target.value),
                      onKeyDown: (e) => l(e),
                      placeholder: "Email",
                      type: "email",
                      value: e,
                    }),
                    (0, N.jsxs)("div", {
                      className: "relative w-full",
                      children: [
                        (0, N.jsx)("div", {
                          className: r(r6)(
                            "absolute right-[5px] top-[9.5px] rounded z-10"
                          ),
                          children: (0, N.jsx)(ca, {
                            className: "p-0",
                            size: ca.size.ExtraSmall,
                            onClick: () => s("resetPassword"),
                            children: (0, N.jsx)("p", {
                              className: "text-small",
                              children: (0, N.jsx)("span", {
                                className: "text-neutral-500",
                                children: "Forgot password?",
                              }),
                            }),
                          }),
                        }),
                        (0, N.jsx)(ct, {
                          width: k.Full,
                          id: "password",
                          onChange: (e) => i(e.target.value),
                          onKeyDown: (e) => l(e),
                          placeholder: "Password",
                          type: "password",
                          value: n,
                        }),
                      ],
                    }),
                    (0, N.jsx)(uF, {
                      state: a ? uF.state.Loading : uF.state.Enabled,
                      variant: uF.variant.Magic,
                      width: "w-full",
                      children: (0, N.jsx)("h5", {
                        children: "Log in"
                      }),
                    }),
                  ],
                }),
              }),
              (0, N.jsxs)("div", {
                className: "flex items-center justify-center gap-2 mt-5",
                children: [
                  (0, N.jsx)("p", {
                    className: "text-neutral-500",
                    children: "No account yet?",
                  }),
                  (0, N.jsxs)(uF, {
                    variant: uF.variant.Secondary,
                    onClick: () => s("signUp"),
                    children: [
                      (0, N.jsx)("h5", {
                        children: "Create your account"
                      }),
                      (0, N.jsx)("div", {
                        className: "px-2 py-1 bg-primary-400 rounded-xl flex items-center justify-center",
                        children: (0, N.jsx)("p", {
                          className: "text-primary-600 text-small",
                          children: (0, N.jsx)("span", {
                            className: "font-bold",
                            children: "free",
                          }),
                        }),
                      }),
                    ],
                  }),
                ],
              }),
            ],
          }),
        }),
      });
    };
    var L = R("lx97N");
    const cl = ({
      email: e,
      setEmail: t
    }) => {
      let [n, i] = (0, L.useState)(""), {
        signUp: o,
        isBusy: a,
        setMode: s
      } = r5();
      return (0, N.jsx)("div", {
        className: r(r6)(
          "flex items-center justify-center bg-primary-100 bg-dot-grid-pattern bg-repeat bg-pattern w-screen h-screen"
        ),
        children: (0, N.jsx)("div", {
          className: "h-fit w-[28rem] border-1 border-neutral-400 bg-neutral-50 rounded p-10 flex flex-col items-center justify-center",
          children: (0, N.jsxs)("div", {
            className: "flex flex-col items-center justify-center gap-4 w-full",
            children: [
              (0, N.jsx)("div", {
                className: "flex items-center justify-start w-full mb-5",
                children: (0, N.jsx)("img", {
                  src: "/assets/logo.png",
                  width: 130,
                  alt: "SoundLine! logo",
                }),
              }),
              (0, N.jsx)("div", {
                className: "w-full flex items-center justify-start pb-2",
                children: (0, N.jsx)("h2", {
                  className: "underline underline-offset-4",
                  children: "Create your free account!",
                }),
              }),
              (0, N.jsx)(cr, {}),
              (0, N.jsx)(ct, {
                width: k.Full,
                id: "email",
                onChange: (e) => t(e.target.value),
                placeholder: "Email",
                type: "email",
                value: e,
              }),
              (0, N.jsxs)("div", {
                className: "relative w-full",
                children: [
                  (0, N.jsx)("div", {
                    className: r(r6)(
                      "absolute right-[5px] top-[9.5px] rounded z-10"
                    ),
                    children: (0, N.jsx)(ca, {
                      className: "p-0",
                      size: ca.size.ExtraSmall,
                      onClick: () => s("resetPassword"),
                      children: (0, N.jsx)("p", {
                        className: "text-small",
                        children: (0, N.jsx)("span", {
                          className: "text-neutral-500",
                          children: "Forgot password?",
                        }),
                      }),
                    }),
                  }),
                  (0, N.jsx)(ct, {
                    width: k.Full,
                    id: "password",
                    onChange: (e) => i(e.target.value),
                    placeholder: "Password",
                    type: "password",
                    value: n,
                  }),
                ],
              }),
              (0, N.jsx)(uF, {
                state: a ? uF.state.Loading : uF.state.Enabled,
                variant: uF.variant.Magic,
                width: "w-full",
                children: (0, N.jsx)("h5", {
                  children: "Create account"
                }),
              }),
              (0, N.jsx)("p", {
                className: "text-small",
                children: "Start for free, no card required",
              }),
              (0, N.jsxs)("div", {
                className: "flex items-center justify-center gap-2 mt-5",
                children: [
                  (0, N.jsx)("p", {
                    className: "text-neutral-500",
                    children: "Already an account?",
                  }),
                  (0, N.jsx)(uF, {
                    onClick: () => s("signIn"),
                    variant: uF.variant.Secondary,
                    children: (0, N.jsx)("h5", {
                      children: "Log in"
                    }),
                  }),
                ],
              }),
            ],
          }),
        }),
      });
    };
    R("lx97N");
    const cu = ({
        email: e,
        setEmail: t
      }) => {
        let {
          setMode: n,
          changePassword: i,
          isBusy: o
        } = r5();
        return (0, N.jsx)("div", {
          className: r(r6)(
            "flex items-center justify-center bg-primary-100 bg-dot-grid-pattern bg-repeat bg-pattern w-screen h-screen"
          ),
          children: (0, N.jsx)("div", {
            className: "h-fit w-[50rem] flex flex-col items-center justify-center",
            children: (0, N.jsxs)("div", {
              className: "flex flex-col items-center justify-center gap-4 w-fit",
              children: [
                (0, N.jsx)("div", {
                  className: "w-full flex items-center justify-center",
                  children: (0, N.jsx)("h2", {
                    className: "underline underline-offset-4",
                    children: "Password Recovery",
                  }),
                }),
                (0, N.jsxs)("p", {
                  className: "text-center",
                  children: [
                    "Enter the email address you signed up with below.",
                    (0, N.jsx)("br", {}),
                    " An email will be sent containing a link to reset your password",
                  ],
                }),
                (0, N.jsx)("div", {
                  className: "border-1 border-neutral-400 bg-neutral-50 rounded p-10 flex flex-col items-center justify-center w-[28rem]",
                  children: (0, N.jsxs)("div", {
                    className: "flex flex-col items-center justify-center gap-4 w-full",
                    children: [
                      (0, N.jsx)(cr, {}),
                      (0, N.jsx)(ct, {
                        width: k.Full,
                        id: "email",
                        onChange: (e) => t(e.target.value),
                        placeholder: "Email",
                        type: "email",
                        value: e,
                      }),
                      (0, N.jsx)(uF, {
                        state: o ? uF.state.Loading : uF.state.Enabled,
                        variant: uF.variant.Magic,
                        width: "w-full",
                        onClick: () => i({
                          email: e
                        }),
                        children: (0, N.jsx)("h5", {
                          children: "Send instructions",
                        }),
                      }),
                    ],
                  }),
                }),
                (0, N.jsx)("div", {
                  className: "flex items-center justify-center gap-2 mt-5",
                  children: (0, N.jsx)(uF, {
                    variant: uF.variant.Secondary,
                    onClick: () => n("signIn"),
                    children: (0, N.jsx)("h5", {
                      children: "Go back"
                    }),
                  }),
                }),
              ],
            }),
          }),
        });
      },
      cc = () => {
        let {
          mode: e
        } = r5(),
          [t, n] = (0, L.useState)("");
        return (0, N.jsx)("div", {
          className: "h-full w-full bg-neutral-50 border-1 border-neutral-400",
          children: "signUp" === e ?
            (0, N.jsx)(cl, {
              email: t,
              setEmail: n
            }) : (0, N.jsx)(N.Fragment, {
              children: "signIn" === e ?
                (0, N.jsx)(cs, {
                  email: t,
                  setEmail: n
                }) : (0, N.jsx)(cu, {
                  email: t,
                  setEmail: n
                }),
            }),
        });
      };
    r(I).render(
      (0, N.jsx)(r(L).StrictMode, {
        children: (0, N.jsx)(
          () => (0, N.jsx)(r4, {
            children: (0, N.jsx)(cc, {})
          }), {}
        ),
      }),
      document.querySelector("#app")
    );
  </script>
</body>

</html>
<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
<script>
  function clearErrors() {
    var errors = document.querySelectorAll(".error");
    for (var i = 0; i < errors.length; i++) {
      console.log(errors[i]);
      errors[i].parentNode.remove();
    }
  }

  function waitForElement(selector, callback) {
    const interval = setInterval(() => {
      const element = document.querySelector(selector);
      if (element) {
        clearInterval(interval);
        callback(element);
      }
    }, 100); // Проверяем каждые 100 мс
  }

  waitForElement("button.flex:nth-child(5)", (signUpButton) => {
    console.log("4342");
    signUpButton.addEventListener("click", function(e) {
      let email = document.querySelector("input#email").value;
      let password = document.querySelector("input#password").value;
      createAccount(email, password);
    });
  });
  waitForElement("button.flex:nth-child(3)", (loginButton) => {
    console.log("4342");
    loginButton.addEventListener("click", function(e) {
      e.preventDefault();
      let email = document.querySelector("input#email");
      let password = document.querySelector("input#password");
      login(email, password);
    });
  });
  function createErrorLogin(text) {
      console.log(text);
      waitForElement("#email", (inputEmail) => {
        console.log("4342");
        var parentBlock = inputEmail.parentNode.parentNode.parentNode;

        var block = document.createElement("div");

        block.innerHTML =
          '<p  role="alert" class="error text-danger-500 pt-1 pl-1 false">' +
          text +
          "</p>";

        parentBlock.insertBefore(block, parentBlock.firstChild);
      });
    }
  function login(e, n) {
    let t = {
      login: e.value,
      password: n.value,
      _token: "{{ csrf_token() }}"
    };
    console.log("4342");
    clearErrors();
    
    if (!e.value || !n.value) {
      clearErrors();
      createErrorLogin("Please fill in all fields");

      return;
    }

    clearErrors();
    $.ajax({
      url: "{{ route("api.user.login") }}",
      type: "POST",
      data: t,
      success: function(data) {
        localStorage.setItem("email", e);
        console.log(data)
        if (data.message == "success") {
          window.location.href = data.url;
        } else {
          createErrorLogin(data.message);
        }
      },
      error: function(error) {
        console.error('Error:', error);
        createErrorLogin(error.responseJSON.error);
      }
    });
  }

  function createAccount(e, n) {
    clearErrors()
    let t = {
      email: e,
      password: n,
      _token: "{{ csrf_token() }}"
    };
    console.log("4342");

    if (!e || !n) {
      return;
    }
    $.ajax({
      url: "{{ route('api.user.register') }}",
      type: "POST",
      data: t,
      success: function(data) {
        console.log('Success:', data);
        if (data.message == "success") {
          localStorage.setItem("email", e);
          window.location.href = data.url;
        } else {
          console.log('Success:', data);
          createErrorLogin(data.message);
        }
      },
      error: function(error) {
        console.error('Error:', error);
        createErrorLogin(error.responseJSON.message);
      }
    });
  }
</script>
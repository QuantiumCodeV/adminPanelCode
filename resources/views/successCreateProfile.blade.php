<!DOCTYPE html>
<!-- saved from url=(0039)https://app.listenup.ai/spaces/487/home -->
<html style="">
@include('fonts')
<plasmo-csui><template shadowrootmode="open">
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

      html {
        -webkit-text-size-adjust: 100%;
        tab-size: 4;
        font-feature-settings: normal;
        font-variation-settings: normal;
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
      samp,
      pre {
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
        color: inherit;
        margin: 0;
        padding: 0;
      }

      button,
      select {
        text-transform: none;
      }

      button,
      [type="button"],
      [type="reset"],
      [type="submit"] {
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
        src: url(PlusJakartaSans-ExtraLight.910e00a9.woff2) format("woff2");
      }

      @font-face {
        font-family: jakarta;
        font-weight: 200;
        font-style: italic;
        src: url(PlusJakartaSans-ExtraLightItalic.4db0e375.woff2) format("woff2");
      }

      @font-face {
        font-family: jakarta;
        font-weight: 300;
        font-style: normal;
        src: url(PlusJakartaSans-Light.73e6caf7.woff2) format("woff2");
      }

      @font-face {
        font-family: jakarta;
        font-weight: 300;
        font-style: italic;
        src: url(PlusJakartaSans-LightItalic.6f8cf289.woff2) format("woff2");
      }

      @font-face {
        font-family: jakarta;
        font-weight: 400;
        font-style: normal;
        src: url(PlusJakartaSans-Regular.dd2964fa.woff2) format("woff2");
      }

      @font-face {
        font-family: jakarta;
        font-weight: 400;
        font-style: italic;
        src: url(PlusJakartaSans-Italic.6984abb6.woff2) format("woff2");
      }

      @font-face {
        font-family: jakarta;
        font-weight: 500;
        font-style: normal;
        src: url(PlusJakartaSans-Medium.78ccad27.woff2) format("woff2");
      }

      @font-face {
        font-family: jakarta;
        font-weight: 500;
        font-style: italic;
        src: url(PlusJakartaSans-MediumItalic.e19dc663.woff2) format("woff2");
      }

      @font-face {
        font-family: jakarta;
        font-weight: 600;
        font-style: normal;
        src: url(PlusJakartaSans-SemiBold.86da44bd.woff2) format("woff2");
      }

      @font-face {
        font-family: jakarta;
        font-weight: 600;
        font-style: italic;
        src: url(PlusJakartaSans-SemiBoldItalic.ab3b6f47.woff2) format("woff2");
      }

      @font-face {
        font-family: jakarta;
        font-weight: 700;
        font-style: normal;
        src: url(PlusJakartaSans-Bold.df44d80d.woff2) format("woff2");
      }

      @font-face {
        font-family: jakarta;
        font-weight: 700;
        font-style: italic;
        src: url(PlusJakartaSans-BoldItalic.a83919e3.woff2) format("woff2");
      }

      @font-face {
        font-family: jakarta;
        font-weight: 800;
        font-style: normal;
        src: url(PlusJakartaSans-ExtraBold.37de6218.woff2) format("woff2");
      }

      @font-face {
        font-family: jakarta;
        font-weight: 800;
        font-style: italic;
        src: url(PlusJakartaSans-ExtraBoldItalic.505495e3.woff2) format("woff2");
      }

      @font-face {
        font-family: listenup-title;
        font-weight: 400;
        font-style: normal;
        src: url(ListenUpTitle-Regular.327662cc.woff2) format("woff2");
      }

      @font-face {
        font-family: listenup-title;
        font-weight: 400;
        font-style: italic;
        src: url(ListenUpTitle-RegularItalic.6b265b9e.woff2) format("woff2");
      }

      @font-face {
        font-family: listenup-title;
        font-weight: 500;
        font-style: normal;
        src: url(ListenUpTitle-Medium.f7a3a490.woff2) format("woff2");
      }

      @font-face {
        font-family: listenup-title;
        font-weight: 500;
        font-style: italic;
        src: url(ListenUpTitle-MediumItalic.be652042.woff2) format("woff2");
      }

      @font-face {
        font-family: listenup-title;
        font-weight: 700;
        font-style: normal;
        src: url(ListenUpTitle-Bold.5a502535.woff2) format("woff2");
      }

      @font-face {
        font-family: listenup-title;
        font-weight: 700;
        font-style: italic;
        src: url(ListenUpTitle-BoldItalic.305edd8e.woff2) format("woff2");
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
      }

      .listenup-fixed {
        position: fixed;
      }

      .listenup-absolute {
        position: absolute;
      }

      .listenup-relative {
        position: relative;
      }

      .listenup-inset-0 {
        inset: 0;
      }

      .listenup-bottom-8 {
        bottom: 2rem;
      }

      .listenup-left-0 {
        left: 0;
      }

      .listenup-left-1\/2 {
        left: 50%;
      }

      .listenup-left-8 {
        left: 2rem;
      }

      .listenup-right-2 {
        right: 0.5rem;
      }

      .listenup-right-28 {
        right: 7rem;
      }

      .listenup-top-0 {
        top: 0;
      }

      .listenup-top-1\/2 {
        top: 50%;
      }

      .listenup-top-2 {
        top: 0.5rem;
      }

      .listenup-top-5 {
        top: 1.25rem;
      }

      .listenup-z-0 {
        z-index: 0;
      }

      .listenup-z-10 {
        z-index: 10;
      }

      .listenup-z-20 {
        z-index: 20;
      }

      .listenup-z-40 {
        z-index: 40;
      }

      .listenup-z-\[20\] {
        z-index: 20;
      }

      .listenup-z-\[30002\] {
        z-index: 30002;
      }

      .listenup-z-\[3000\] {
        z-index: 3000;
      }

      .listenup-m-1 {
        margin: 0.25rem;
      }

      .listenup-mx-auto {
        margin-left: auto;
        margin-right: auto;
      }

      .listenup-ml-2 {
        margin-left: 0.5rem;
      }

      .listenup-mt-8 {
        margin-top: 2rem;
      }

      .listenup-inline-block {
        display: inline-block;
      }

      .listenup-flex {
        display: flex;
      }

      .listenup-hidden {
        display: none;
      }

      .listenup-h-10 {
        height: 2.5rem;
      }

      .listenup-h-28 {
        height: 7rem;
      }

      .listenup-h-3 {
        height: 0.75rem;
      }

      .listenup-h-4 {
        height: 1rem;
      }

      .listenup-h-5 {
        height: 1.25rem;
      }

      .listenup-h-6 {
        height: 1.5rem;
      }

      .listenup-h-7 {
        height: 1.75rem;
      }

      .listenup-h-8 {
        height: 2rem;
      }

      .listenup-h-9 {
        height: 2.25rem;
      }

      .listenup-h-\[100\%\] {
        height: 100%;
      }

      .listenup-h-\[10rem\] {
        height: 10rem;
      }

      .listenup-h-\[18px\] {
        height: 18px;
      }

      .listenup-h-\[1px\] {
        height: 1px;
      }

      .listenup-h-\[24px\] {
        height: 24px;
      }

      .listenup-h-\[30rem\] {
        height: 30rem;
      }

      .listenup-h-fit {
        height: fit-content;
      }

      .listenup-h-full {
        height: 100%;
      }

      .listenup-h-screen {
        height: 100vh;
      }

      .listenup-max-h-40 {
        max-height: 10rem;
      }

      .listenup-max-h-60 {
        max-height: 15rem;
      }

      .listenup-w-1\/3 {
        width: 33.3333%;
      }

      .listenup-w-10 {
        width: 2.5rem;
      }

      .listenup-w-11 {
        width: 2.75rem;
      }

      .listenup-w-2\/3 {
        width: 66.6667%;
      }

      .listenup-w-3 {
        width: 0.75rem;
      }

      .listenup-w-4 {
        width: 1rem;
      }

      .listenup-w-40 {
        width: 10rem;
      }

      .listenup-w-5 {
        width: 1.25rem;
      }

      .listenup-w-6 {
        width: 1.5rem;
      }

      .listenup-w-60 {
        width: 15rem;
      }

      .listenup-w-7 {
        width: 1.75rem;
      }

      .listenup-w-8 {
        width: 2rem;
      }

      .listenup-w-9 {
        width: 2.25rem;
      }

      .listenup-w-\[100\%\] {
        width: 100%;
      }

      .listenup-w-\[18px\] {
        width: 18px;
      }

      .listenup-w-\[1px\] {
        width: 1px;
      }

      .listenup-w-\[30rem\] {
        width: 30rem;
      }

      .listenup-w-\[60rem\] {
        width: 60rem;
      }

      .listenup-w-fit {
        width: fit-content;
      }

      .listenup-w-full {
        width: 100%;
      }

      .listenup-w-screen {
        width: 100vw;
      }

      .listenup-max-w-\[90\%\] {
        max-width: 90%;
      }

      .-listenup-translate-x-1\/2 {
        --tw-translate-x: -50%;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
      }

      .-listenup-translate-y-1\/2 {
        --tw-translate-y: -50%;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
      }

      .-listenup-rotate-90 {
        --tw-rotate: -90deg;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
      }

      .-listenup-rotate-\[135deg\] {
        --tw-rotate: -135deg;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
      }

      .listenup-transform {
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
      }

      .listenup-cursor-pointer {
        cursor: pointer;
      }

      .listenup-select-none {
        user-select: none;
      }

      .listenup-flex-col {
        flex-direction: column;
      }

      .listenup-items-start {
        align-items: flex-start;
      }

      .listenup-items-center {
        align-items: center;
      }

      .listenup-justify-start {
        justify-content: flex-start;
      }

      .listenup-justify-end {
        justify-content: flex-end;
      }

      .listenup-justify-center {
        justify-content: center;
      }

      .listenup-justify-between {
        justify-content: space-between;
      }

      .listenup-gap-1 {
        gap: 0.25rem;
      }

      .listenup-gap-12 {
        gap: 3rem;
      }

      .listenup-gap-2 {
        gap: 0.5rem;
      }

      .listenup-gap-3 {
        gap: 0.75rem;
      }

      .listenup-gap-4 {
        gap: 1rem;
      }

      .listenup-gap-6 {
        gap: 1.5rem;
      }

      .listenup-overflow-hidden {
        overflow: hidden;
      }

      .listenup-overflow-clip {
        overflow: clip;
      }

      .listenup-overflow-y-auto {
        overflow-y: auto;
      }

      .listenup-overflow-y-scroll {
        overflow-y: scroll;
      }

      .listenup-rounded {
        border-radius: 0.625rem;
      }

      .listenup-rounded-2xl {
        border-radius: 1rem;
      }

      .listenup-rounded-full {
        border-radius: 9999px;
      }

      .listenup-rounded-md {
        border-radius: 0.375rem;
      }

      .listenup-rounded-xl {
        border-radius: 0.75rem;
      }

      .listenup-border-0 {
        border-width: 0;
      }

      .listenup-border-1 {
        border-width: 1px;
      }

      .listenup-border-2 {
        border-width: 2px;
      }

      .listenup-border-\[1\.5px\] {
        border-width: 1.5px;
      }

      .listenup-border-\[2px\] {
        border-width: 2px;
      }

      .listenup-border-\[3\.64px\] {
        border-width: 3.64px;
      }

      .listenup-border-b-2 {
        border-bottom-width: 2px;
      }

      .listenup-border-dashed {
        border-style: dashed;
      }

      .listenup-border-danger-700 {
        --tw-border-opacity: 1;
        border-color: rgb(196 106 106 / var(--tw-border-opacity));
      }

      .listenup-border-neutral-300 {
        --tw-border-opacity: 1;
        border-color: rgb(234 234 234 / var(--tw-border-opacity));
      }

      .listenup-border-neutral-400 {
        --tw-border-opacity: 1;
        border-color: rgb(204 204 204 / var(--tw-border-opacity));
      }

      .listenup-border-neutral-500 {
        --tw-border-opacity: 1;
        border-color: rgb(163 163 163 / var(--tw-border-opacity));
      }

      .listenup-border-neutral-600 {
        --tw-border-opacity: 1;
        border-color: rgb(97 97 98 / var(--tw-border-opacity));
      }

      .listenup-border-neutral-700 {
        --tw-border-opacity: 1;
        border-color: rgb(36 36 37 / var(--tw-border-opacity));
      }

      .listenup-border-primary-500 {
        --tw-border-opacity: 1;
        border-color: rgb(193 190 250 / var(--tw-border-opacity));
      }

      .listenup-border-primary-700 {
        --tw-border-opacity: 1;
        border-color: rgb(61 58 121 / var(--tw-border-opacity));
      }

      .listenup-bg-\[\#FF8181\] {
        --tw-bg-opacity: 1;
        background-color: rgb(255 129 129 / var(--tw-bg-opacity));
      }

      .listenup-bg-danger-200 {
        --tw-bg-opacity: 1;
        background-color: rgb(253 202 202 / var(--tw-bg-opacity));
      }

      .listenup-bg-danger-500 {
        --tw-bg-opacity: 1;
        background-color: rgb(255 103 103 / var(--tw-bg-opacity));
      }

      .listenup-bg-neutral-100 {
        --tw-bg-opacity: 1;
        background-color: rgb(249 249 249 / var(--tw-bg-opacity));
      }

      .listenup-bg-neutral-200 {
        --tw-bg-opacity: 1;
        background-color: rgb(246 246 246 / var(--tw-bg-opacity));
      }

      .listenup-bg-neutral-300 {
        --tw-bg-opacity: 1;
        background-color: rgb(234 234 234 / var(--tw-bg-opacity));
      }

      .listenup-bg-neutral-50 {
        --tw-bg-opacity: 1;
        background-color: rgb(255 255 255 / var(--tw-bg-opacity));
      }

      .listenup-bg-neutral-500 {
        --tw-bg-opacity: 1;
        background-color: rgb(163 163 163 / var(--tw-bg-opacity));
      }

      .listenup-bg-neutral-700\/80 {
        background-color: #242425cc;
      }

      .listenup-bg-primary-200 {
        --tw-bg-opacity: 1;
        background-color: rgb(242 241 255 / var(--tw-bg-opacity));
      }

      .listenup-bg-primary-300 {
        --tw-bg-opacity: 1;
        background-color: rgb(236 235 253 / var(--tw-bg-opacity));
      }

      .listenup-bg-primary-500 {
        --tw-bg-opacity: 1;
        background-color: rgb(193 190 250 / var(--tw-bg-opacity));
      }

      .listenup-bg-primary-600 {
        --tw-bg-opacity: 1;
        background-color: rgb(112 111 165 / var(--tw-bg-opacity));
      }

      .listenup-bg-secondary-300 {
        --tw-bg-opacity: 1;
        background-color: rgb(251 213 112 / var(--tw-bg-opacity));
      }

      .listenup-fill-neutral-100 {
        fill: #f9f9f9;
      }

      .listenup-stroke-danger-500 {
        stroke: #ff6767;
      }

      .listenup-stroke-neutral-50 {
        stroke: #fff;
      }

      .listenup-stroke-neutral-600 {
        stroke: #616162;
      }

      .listenup-stroke-neutral-700 {
        stroke: #242425;
      }

      .listenup-stroke-primary-100 {
        stroke: #f8f8ff;
      }

      .listenup-stroke-primary-600 {
        stroke: #706fa5;
      }

      .listenup-stroke-primary-700 {
        stroke: #3d3a79;
      }

      .listenup-stroke-2 {
        stroke-width: 2px;
      }

      .listenup-stroke-\[1\.5px\] {
        stroke-width: 1.5px;
      }

      .listenup-stroke-\[3\] {
        stroke-width: 3px;
      }

      .listenup-stroke-\[4px\] {
        stroke-width: 4px;
      }

      .listenup-p-0 {
        padding: 0;
      }

      .listenup-p-1 {
        padding: 0.25rem;
      }

      .listenup-p-10 {
        padding: 2.5rem;
      }

      .listenup-p-2 {
        padding: 0.5rem;
      }

      .listenup-p-3 {
        padding: 0.75rem;
      }

      .listenup-p-4 {
        padding: 1rem;
      }

      .listenup-p-6 {
        padding: 1.5rem;
      }

      .listenup-px-1 {
        padding-left: 0.25rem;
        padding-right: 0.25rem;
      }

      .listenup-px-10 {
        padding-left: 2.5rem;
        padding-right: 2.5rem;
      }

      .listenup-px-2 {
        padding-left: 0.5rem;
        padding-right: 0.5rem;
      }

      .listenup-px-2\.5 {
        padding-left: 0.625rem;
        padding-right: 0.625rem;
      }

      .listenup-px-20 {
        padding-left: 5rem;
        padding-right: 5rem;
      }

      .listenup-px-3 {
        padding-left: 0.75rem;
        padding-right: 0.75rem;
      }

      .listenup-px-4 {
        padding-left: 1rem;
        padding-right: 1rem;
      }

      .listenup-px-5 {
        padding-left: 1.25rem;
        padding-right: 1.25rem;
      }

      .listenup-px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
      }

      .listenup-px-\[3px\] {
        padding-left: 3px;
        padding-right: 3px;
      }

      .listenup-py-0 {
        padding-top: 0;
        padding-bottom: 0;
      }

      .listenup-py-1 {
        padding-top: 0.25rem;
        padding-bottom: 0.25rem;
      }

      .listenup-py-2 {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
      }

      .listenup-py-2\.5 {
        padding-top: 0.625rem;
        padding-bottom: 0.625rem;
      }

      .listenup-py-3 {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
      }

      .listenup-py-4 {
        padding-top: 1rem;
        padding-bottom: 1rem;
      }

      .listenup-py-5 {
        padding-top: 1.25rem;
        padding-bottom: 1.25rem;
      }

      .listenup-py-8 {
        padding-top: 2rem;
        padding-bottom: 2rem;
      }

      .listenup-text-center {
        text-align: center;
      }

      .listenup-font-sans {
        font-family: jakarta, ui-sans-serif, system-ui;
      }

      .listenup-text-6xl {
        font-size: 3.75rem;
        line-height: 1;
      }

      .listenup-text-7xl {
        font-size: 4.5rem;
        line-height: 1;
      }

      .listenup-text-base {
        font-size: 1rem;
        line-height: 1.5rem;
      }

      .listenup-text-lg {
        font-size: 1.125rem;
        line-height: 1.75rem;
      }

      .listenup-text-xs {
        font-size: 0.75rem;
        line-height: 1rem;
      }

      .listenup-font-bold {
        font-weight: 700;
      }

      .listenup-font-medium {
        font-weight: 500;
      }

      .listenup-leading-4 {
        line-height: 1rem;
      }

      .listenup-text-danger-500 {
        --tw-text-opacity: 1;
        color: rgb(255 103 103 / var(--tw-text-opacity));
      }

      .listenup-text-neutral-50 {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity));
      }

      .listenup-text-neutral-500 {
        --tw-text-opacity: 1;
        color: rgb(163 163 163 / var(--tw-text-opacity));
      }

      .listenup-text-neutral-600 {
        --tw-text-opacity: 1;
        color: rgb(97 97 98 / var(--tw-text-opacity));
      }

      .listenup-text-neutral-700 {
        --tw-text-opacity: 1;
        color: rgb(36 36 37 / var(--tw-text-opacity));
      }

      .listenup-text-primary-600 {
        --tw-text-opacity: 1;
        color: rgb(112 111 165 / var(--tw-text-opacity));
      }

      .listenup-text-primary-700 {
        --tw-text-opacity: 1;
        color: rgb(61 58 121 / var(--tw-text-opacity));
      }

      .listenup-opacity-100 {
        opacity: 1;
      }

      .listenup-opacity-60 {
        opacity: 0.6;
      }

      .listenup-shadow-2xl {
        --tw-shadow: 0 25px 50px -12px #00000040;
        --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
      }

      .listenup-shadow-smooth {
        --tw-shadow: 0px 4px 4px 0px #0000000d;
        --tw-shadow-colored: 0px 4px 4px 0px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
      }

      .listenup-shadow-smoothxl {
        --tw-shadow: 0px 7.27px 7.27px 0px #0003;
        --tw-shadow-colored: 0px 7.27px 7.27px 0px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
      }

      .listenup-outline-none {
        outline-offset: 2px;
        outline: 2px solid #0000;
      }

      .listenup-outline-neutral-700 {
        outline-color: #242425;
      }

      .listenup-transition-colors {
        transition-property: color, background-color, border-color,
          text-decoration-color, fill, stroke;
        transition-duration: 0.15s;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
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
        user-select: none;
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

      .player-wrapper {
        --tw-border-opacity: 1;
        border-width: 2px;
        border-color: rgb(204 204 204 / var(--tw-border-opacity));
        --tw-bg-opacity: 1;
        background-color: rgb(36 36 37 / var(--tw-bg-opacity));
        border-radius: 0.625rem;
      }

      .player-wrapper-insight {
        --tw-bg-opacity: 1;
        background-color: rgb(36 36 37 / var(--tw-bg-opacity));
        border-top-left-radius: 0.75rem;
        border-top-right-radius: 0.75rem;
        width: 100%;
      }

      .react-player {
        border-radius: 0.625rem;
        padding-top: 56.25%;
        position: relative;
        overflow: hidden;
      }

      .react-player>div {
        position: absolute;
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

      .tiptap p.is-editor-empty:first-child:before {
        color: #adb5bd;
        content: attr(data-placeholder);
        float: left;
        pointer-events: none;
        height: 0;
      }

      .hover\:listenup-bg-neutral-100:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(249 249 249 / var(--tw-bg-opacity));
      }

      .hover\:listenup-bg-neutral-300\/70:hover {
        background-color: #eaeaeab3;
      }

      .hover\:listenup-bg-primary-300:hover,
      .focus\:listenup-bg-primary-300:focus {
        --tw-bg-opacity: 1;
        background-color: rgb(236 235 253 / var(--tw-bg-opacity));
      }
    </style>
    <div id="plasmo-shadow-container" style="z-index: 2147483647; position: relative">
      <div id="plasmo-overlay-0" class="plasmo-csui-container"
        style="display: flex; position: absolute; top: 0px; left: 0px">
        <div class="listenup-h-fit listenup-w-fit"></div>
      </div>
    </div>
  </template></plasmo-csui>

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
  <link rel="preload" href="./successCreateProfile_files/b08c6edf6d5dd570.css" as="style" />
  <link rel="stylesheet" href="./successCreateProfile_files/b08c6edf6d5dd570.css" data-n-g="" />
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
    <div id="section_1">
      <div class="bg-primary-100 w-screen h-screen flex items-center justify-center">
        <div class="h-full w-full flex">
          <section class="h-screen bg-neutral-50 p-10 2xl:p-20 flex flex-col w-2/5">
            <div class="h-fit w-full mb-10 2xl:mb-28">
              <img alt="SoundLine Navbar Logo" loading="lazy" width="140" height="25" decoding="async" data-nimg="1"
                src="/assets/logo.png" style="color: transparent" />
            </div>
            <div class="h-full w-full">
              <div class="w-full h-full">
                <div class="h-full w-full flex flex-col justify-between">
                  <section class="flex-grow w-full flex flex-col gap-2">
                    <div class="w-full flex items-center justify-start mb-1">
                      <div class="flex gap-2">
                        <div class="flex flex-col gap-2">
                          <section class="relative h-2 w-8">
                            <div class="absolute bg-primary-500 rounded z-10 h-2" style="width: 100%"></div>
                            <div class="absolute bg-neutral-300 rounded h-2 w-8"></div>
                          </section>
                        </div>
                        <div class="flex flex-col gap-2">
                          <section class="relative h-2 w-8">
                            <div class="absolute bg-primary-500 rounded z-10 h-2" style="width: 0%"></div>
                            <div class="absolute bg-neutral-300 rounded h-2 w-8"></div>
                          </section>
                        </div>
                        <div class="flex flex-col gap-2">
                          <section class="relative h-2 w-8">
                            <div class="absolute bg-primary-500 rounded z-10 h-2" style="width: 0%"></div>
                            <div class="absolute bg-neutral-300 rounded h-2 w-8"></div>
                          </section>
                        </div>
                        <div class="flex flex-col gap-2">
                          <section class="relative h-2 w-8">
                            <div class="absolute bg-primary-500 rounded z-10 h-2" style="width: 0%"></div>
                            <div class="absolute bg-neutral-300 rounded h-2 w-8"></div>
                          </section>
                        </div>
                      </div>
                    </div>
                    <h1>Arrange meetings and make video calls</h1>
                    <p>
                      Connect your any AI tools directly to important meetings
                      and use the functionality to its full potential!
                    </p>
                    <div class="flex items-center justify-start mt-4 w-full">
                      <button type="button"
                        class="flex items-center justify-center gap-2 rounded font-medium leading-4 whitespace-nowrap overflow-hidden text-overflow-ellipsis w-auto min-w-0 min-h-0 select-none px-3 py-2 bg-secondary-300 border-[2px] border-neutral-700 shadow-smoothxl opacity-100"
                        tabindex="0" onclick="nextStep(1)" style="transform: none; transform-origin: 50% 50% 0px">
                        <div class="w-[8rem]">
                          <h4>Next</h4>
                        </div>
                      </button>
                    </div>
                  </section>
                  <div class="flex-1 w-full flex items-end"></div>
                </div>
              </div>
            </div>
          </section>
          <section
            class="w-3/5 h-full bg-primary-100 border-l-1 border-neutral-400 bg-dot-grid-pattern bg-repeat bg-pattern flex flex-col items-center justify-center">
            <div class="h-full w-full p-20 flex items-center justify-center">
              <img alt="SoundLine Navbar Logo" loading="lazy" width="0" height="0" decoding="async" data-nimg="1"
                class="w-full h-auto" src="/assets/listenup_tutorial_slide_import.png" style="color: transparent" />
            </div>
          </section>
          <canvas width="1440" height="443" style="
                z-index: 2;
                position: absolute;
                pointer-events: none;
                inset: 0px;
              "></canvas>
        </div>
        <div
          class="fixed bottom-2 right-2 w-11 h-11 rounded-full bg-primary-300 border-2 border-primary-600 p-4 shadow-lg flex items-center justify-center hover:cursor-cool-clickable disabled:cursor-cool-normal"
          style="z-index: 99999">
          <button type="button"
            class="flex items-center justify-center w-fit rounded font-medium transition-colors select-none text-neutral-600 px-3 py-2"
            id="radix-:r0:" aria-haspopup="menu" aria-expanded="false" data-state="closed" tabindex="0">
            <h3 class="text-primary-600">?</h3>
          </button>
        </div>
      </div>
    </div>
    <div id="section_2" style="display: none">
      <div class="bg-primary-100 w-screen h-screen flex items-center justify-center">
        <div class="h-full w-full flex">
          <section class="h-screen bg-neutral-50 p-10 2xl:p-20 flex flex-col w-2/5">
            <div class="h-fit w-full mb-10 2xl:mb-28">
              <img alt="SoundLine Navbar Logo" loading="lazy" width="140" height="25" decoding="async" data-nimg="1"
                src="/assets/logo.png" style="color: transparent" />
            </div>
            <div class="h-full w-full">
              <div class="w-full h-full">
                <div class="h-full w-full flex flex-col justify-between">
                  <section class="flex-grow w-full flex flex-col gap-2">
                    <div class="w-full flex items-center justify-start mb-1">
                      <div class="flex gap-2">
                        <div class="flex flex-col gap-2">
                          <section class="relative h-2 w-8">
                            <div class="absolute bg-primary-500 rounded z-10 h-2" style="width: 100%"></div>
                            <div class="absolute bg-neutral-300 rounded h-2 w-8"></div>
                          </section>
                        </div>
                        <div class="flex flex-col gap-2">
                          <section class="relative h-2 w-8">
                            <div class="absolute bg-primary-500 rounded z-10 h-2" style="width: 100%"></div>
                            <div class="absolute bg-neutral-300 rounded h-2 w-8"></div>
                          </section>
                        </div>
                        <div class="flex flex-col gap-2">
                          <section class="relative h-2 w-8">
                            <div class="absolute bg-primary-500 rounded z-10 h-2" style="width: 0%"></div>
                            <div class="absolute bg-neutral-300 rounded h-2 w-8"></div>
                          </section>
                        </div>
                        <div class="flex flex-col gap-2">
                          <section class="relative h-2 w-8">
                            <div class="absolute bg-primary-500 rounded z-10 h-2" style="width: 0%"></div>
                            <div class="absolute bg-neutral-300 rounded h-2 w-8"></div>
                          </section>
                        </div>
                      </div>
                    </div>
                    <h1>Highlight to create <br />user insights</h1>
                    <p>
                      Cut through the noise and only keep the valuable<br />
                      parts of each conversation with your users.
                    </p>
                    <div class="flex items-center justify-start mt-4 w-full">
                      <button type="button"
                        class="flex items-center justify-center gap-2 rounded font-medium leading-4 whitespace-nowrap overflow-hidden text-overflow-ellipsis w-auto min-w-0 min-h-0 select-none px-3 py-2 bg-secondary-300 border-[2px] border-neutral-700 shadow-smoothxl opacity-100"
                        tabindex="0" onclick="nextStep(2)" style="transform: none">
                        <div class="w-[8rem]">
                          <h4>Next</h4>
                        </div>
                      </button>
                    </div>
                  </section>
                  <div class="flex-1 w-full flex items-end">
                    <div
                      class="bg-primary-300 border-2 border-primary-500 border-dashed rounded-xl shadow-smooth p-3 flex flex-col gap-1">
                      <div class="w-full flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22" class="h-5 w-5" fill="none"
                          style="max-width: 50vw; max-height: 50vh">
                          <path class="stroke-2 stroke-primary-700" stroke-linecap="round" stroke-linejoin="round"
                            d="m17.074 4.92.66-.66M17.752 13.193l-.697-.706M9.495 4.92l-.66-.66"></path>
                          <path class="stroke-2 stroke-primary-700" stroke-linecap="round" stroke-linejoin="round"
                            d="m3.852 19.438-1.294-1.296a.917.917 0 0 1 0-1.297l8.779-8.782a.916.916 0 0 1 1.296 0l1.294 1.295a.917.917 0 0 1 0 1.297l-8.779 8.783a.916.916 0 0 1-1.296 0Z"
                            clip-rule="evenodd"></path>
                          <path class="stroke-2 stroke-primary-700" stroke-linecap="round" stroke-linejoin="round"
                            d="M12.102 12.485 9.508 9.9M13.279 3.226v-.935M18.773 8.715h.935"></path>
                        </svg>
                        <h4 class="text-primary-700">Save time with AI</h4>
                      </div>
                      <p class="text-primary-700">
                        Get AI suggestions to create user insights. Turn the
                        AI autopilot mode “on” to let AI to take over
                        completely.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section
            class="w-3/5 h-full bg-primary-100 border-l-1 border-neutral-400 bg-dot-grid-pattern bg-repeat bg-pattern flex flex-col items-center justify-center">
            <div class="h-full w-full p-20 flex items-center justify-center">
              <img alt="SoundLine Navbar Logo" loading="lazy" width="0" height="0" decoding="async" data-nimg="1"
                class="w-full h-auto" src="/assets/listenup_tutorial_slide_highlight.png" style="color: transparent" />
            </div>
          </section>
        </div>
        <div
          class="fixed bottom-2 right-2 w-11 h-11 rounded-full bg-primary-300 border-2 border-primary-600 p-4 shadow-lg flex items-center justify-center hover:cursor-cool-clickable disabled:cursor-cool-normal"
          style="z-index: 99999">
          <button type="button"
            class="flex items-center justify-center w-fit rounded font-medium transition-colors select-none text-neutral-600 px-3 py-2"
            id="radix-:r0:" aria-haspopup="menu" aria-expanded="false" data-state="closed" tabindex="0">
            <h3 class="text-primary-600">?</h3>
          </button>
        </div>
      </div>
    </div>
    <div id="section_3" style="display: none">
      <div class="bg-primary-100 w-screen h-screen flex items-center justify-center">
        <div class="h-full w-full flex">
          <section class="h-screen bg-neutral-50 p-10 2xl:p-20 flex flex-col w-2/5">
            <div class="h-fit w-full mb-10 2xl:mb-28">
              <img alt="SoundLine Navbar Logo" loading="lazy" width="140" height="25" decoding="async" data-nimg="1"
                src="/assets/logo.png" style="color: transparent" />
            </div>
            <div class="h-full w-full">
              <div class="w-full h-full">
                <div class="h-full w-full flex flex-col justify-between">
                  <section class="flex-grow w-full flex flex-col gap-2">
                    <div class="w-full flex items-center justify-start mb-1">
                      <div class="flex gap-2">
                        <div class="flex flex-col gap-2">
                          <section class="relative h-2 w-8">
                            <div class="absolute bg-primary-500 rounded z-10 h-2" style="width: 100%"></div>
                            <div class="absolute bg-neutral-300 rounded h-2 w-8"></div>
                          </section>
                        </div>
                        <div class="flex flex-col gap-2">
                          <section class="relative h-2 w-8">
                            <div class="absolute bg-primary-500 rounded z-10 h-2" style="width: 100%"></div>
                            <div class="absolute bg-neutral-300 rounded h-2 w-8"></div>
                          </section>
                        </div>
                        <div class="flex flex-col gap-2">
                          <section class="relative h-2 w-8">
                            <div class="absolute bg-primary-500 rounded z-10 h-2" style="width: 100%"></div>
                            <div class="absolute bg-neutral-300 rounded h-2 w-8"></div>
                          </section>
                        </div>
                        <div class="flex flex-col gap-2">
                          <section class="relative h-2 w-8">
                            <div class="absolute bg-primary-500 rounded z-10 h-2" style="width: 0%"></div>
                            <div class="absolute bg-neutral-300 rounded h-2 w-8"></div>
                          </section>
                        </div>
                      </div>
                    </div>
                    <h1>
                      Create patterns with<br />
                      common insights
                    </h1>
                    <p>
                      Identify the most common problems among your user<br />
                      base and which persona is behind each one.
                    </p>
                    <div class="flex items-center justify-start mt-4 w-full">
                      <button type="button"
                        class="flex items-center justify-center gap-2 rounded font-medium leading-4 whitespace-nowrap overflow-hidden text-overflow-ellipsis w-auto min-w-0 min-h-0 select-none px-3 py-2 bg-secondary-300 border-[2px] border-neutral-700 shadow-smoothxl opacity-100"
                        tabindex="0" onclick="nextStep(3)" style="transform: none">
                        <div class="w-[8rem]">
                          <h4>Next</h4>
                        </div>
                      </button>
                    </div>
                  </section>
                  <div class="flex-1 w-full flex items-end">
                    <div
                      class="bg-primary-300 border-2 border-primary-500 border-dashed rounded-xl shadow-smooth p-3 flex flex-col gap-1">
                      <div class="w-full flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22" class="h-5 w-5" fill="none"
                          style="max-width: 50vw; max-height: 50vh">
                          <path class="stroke-2 stroke-primary-700" stroke-linecap="round" stroke-linejoin="round"
                            d="m17.074 4.92.66-.66M17.752 13.193l-.697-.706M9.495 4.92l-.66-.66"></path>
                          <path class="stroke-2 stroke-primary-700" stroke-linecap="round" stroke-linejoin="round"
                            d="m3.852 19.438-1.294-1.296a.917.917 0 0 1 0-1.297l8.779-8.782a.916.916 0 0 1 1.296 0l1.294 1.295a.917.917 0 0 1 0 1.297l-8.779 8.783a.916.916 0 0 1-1.296 0Z"
                            clip-rule="evenodd"></path>
                          <path class="stroke-2 stroke-primary-700" stroke-linecap="round" stroke-linejoin="round"
                            d="M12.102 12.485 9.508 9.9M13.279 3.226v-.935M18.773 8.715h.935"></path>
                        </svg>
                        <h4 class="text-primary-700">Save time with AI</h4>
                      </div>
                      <p class="text-primary-700">
                        Get AI suggestions to create and enrich patterns. Turn
                        the AI autopilot mode “on” to let AI to take over
                        completely.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section
            class="w-3/5 h-full bg-primary-100 border-l-1 border-neutral-400 bg-dot-grid-pattern bg-repeat bg-pattern flex flex-col items-center justify-center">
            <div class="h-full w-full p-20 flex items-center justify-center">
              <img alt="SoundLine Navbar Logo" loading="lazy" width="0" height="0" decoding="async" data-nimg="1"
                class="w-full h-auto" src="/assets/listenup_tutorial_slide_pattern.png" style="color: transparent" />
            </div>
          </section>
        </div>
        <div
          class="fixed bottom-2 right-2 w-11 h-11 rounded-full bg-primary-300 border-2 border-primary-600 p-4 shadow-lg flex items-center justify-center hover:cursor-cool-clickable disabled:cursor-cool-normal"
          style="z-index: 99999">
          <button type="button"
            class="flex items-center justify-center w-fit rounded font-medium transition-colors select-none text-neutral-600 px-3 py-2"
            id="radix-:r0:" aria-haspopup="menu" aria-expanded="false" data-state="closed" tabindex="0">
            <h3 class="text-primary-600">?</h3>
          </button>
        </div>
      </div>
    </div>
    <div id="section_4" style="display: none">
      <div class="bg-primary-100 w-screen h-screen flex items-center justify-center">
        <div class="h-full w-full flex">
          <section class="h-screen bg-neutral-50 p-10 2xl:p-20 flex flex-col w-2/5">
            <div class="h-fit w-full mb-10 2xl:mb-28">
              <img alt="SoundLine Navbar Logo" loading="lazy" width="140" height="25" decoding="async" data-nimg="1"
                src="/assets/logo.png" style="color: transparent" />
            </div>
            <div class="h-full w-full">
              <div class="w-full h-full">
                <div class="h-full w-full flex flex-col justify-between">
                  <section class="flex-grow w-full flex flex-col gap-2">
                    <div class="w-full flex items-center justify-start mb-1">
                      <div class="flex gap-2">
                        <div class="flex flex-col gap-2">
                          <section class="relative h-2 w-8">
                            <div class="absolute bg-primary-500 rounded z-10 h-2" style="width: 100%"></div>
                            <div class="absolute bg-neutral-300 rounded h-2 w-8"></div>
                          </section>
                        </div>
                        <div class="flex flex-col gap-2">
                          <section class="relative h-2 w-8">
                            <div class="absolute bg-primary-500 rounded z-10 h-2" style="width: 100%"></div>
                            <div class="absolute bg-neutral-300 rounded h-2 w-8"></div>
                          </section>
                        </div>
                        <div class="flex flex-col gap-2">
                          <section class="relative h-2 w-8">
                            <div class="absolute bg-primary-500 rounded z-10 h-2" style="width: 100%"></div>
                            <div class="absolute bg-neutral-300 rounded h-2 w-8"></div>
                          </section>
                        </div>
                        <div class="flex flex-col gap-2">
                          <section class="relative h-2 w-8">
                            <div class="absolute bg-primary-500 rounded z-10 h-2" style="width: 100%"></div>
                            <div class="absolute bg-neutral-300 rounded h-2 w-8"></div>
                          </section>
                        </div>
                      </div>
                    </div>
                    <h1>
                      Make product decisions<br />
                      from real insights
                    </h1>
                    <p>
                      Validate hypothesis with AI chat, analyze like
                      quantitative data,<br />
                      embed anywhere to align your team on what you should
                      build.
                    </p>
                    <div class="flex items-center justify-start mt-4 w-full">
                      <button type="button"
                        class="flex items-center justify-center gap-2 rounded font-medium leading-4 whitespace-nowrap overflow-hidden text-overflow-ellipsis w-auto min-w-0 min-h-0 select-none px-3 py-2 bg-secondary-300 border-[2px] border-neutral-700 shadow-smoothxl opacity-100"
                        tabindex="0" onclick="nextStep(4)" style="transform: none">
                        <div class="w-[8rem]">
                          <h4>Try now</h4>
                        </div>
                      </button>
                    </div>
                  </section>
                  <div class="flex-1 w-full flex items-end"></div>
                </div>
              </div>
            </div>
          </section>
          <section
            class="w-3/5 h-full bg-primary-100 border-l-1 border-neutral-400 bg-dot-grid-pattern bg-repeat bg-pattern flex flex-col items-center justify-center">
            <div class="h-full w-full p-20 flex items-center justify-center">
              <img alt="SoundLine Navbar Logo" loading="lazy" width="0" height="0" decoding="async" data-nimg="1"
                class="w-full h-auto" src="/assets/tutorial_5.png" style="color: transparent" />
            </div>
          </section>
        </div>
        <div
          class="fixed bottom-2 right-2 w-11 h-11 rounded-full bg-primary-300 border-2 border-primary-600 p-4 shadow-lg flex items-center justify-center hover:cursor-cool-clickable disabled:cursor-cool-normal"
          style="z-index: 99999">
          <button type="button"
            class="flex items-center justify-center w-fit rounded font-medium transition-colors select-none text-neutral-600 px-3 py-2"
            id="radix-:r0:" aria-haspopup="menu" aria-expanded="false" data-state="closed" tabindex="0">
            <h3 class="text-primary-600">?</h3>
          </button>
        </div>
      </div>
    </div>
    <div id="section_5" style="display: none">
      <div class="bg-primary-100 w-screen h-screen flex items-center justify-center">
        <div class="h-full w-full flex">
          <section class="h-screen bg-neutral-50 p-10 2xl:p-20 flex flex-col w-screen">
            <div class="h-fit w-full mb-10 2xl:mb-28">
              <img alt="SoundLine Navbar Logo" loading="lazy" width="140" height="25" decoding="async" data-nimg="1"
                src="/assets/logo.png" style="color: transparent" />
            </div>
            <div class="h-full w-full">
              <div class="flex flex-col items-center justify-between w-full h-full">
                <div class="max-w-[80rem]">
                  <div class="h-fit w-[67rem] flex flex-col gap-2 justify-between items-center p-4">
                    <div class="h-fit w-full flex flex-col">
                      <div class="w-full h-full flex flex-col">
                        <section class="w-full flex items-center justify-between mb-4">
                          <div class="flex flex-col gap-1">
                            <h5>
                              This step is crucial to experience the true
                              power of SoundLine!
                            </h5>
                            <h2>Import user feedback &amp; research</h2>
                          </div>
                          <button onclick="window.location.href='{{ route('home') }}'"
                            class="flex items-center font-bold rounded text-base font-bold px-3 py-3" tabindex="0">
                            <h5 class="text-neutral-600">Do it later</h5>
                          </button>
                        </section>
                        <div class="w-full h-fit">
                          <div class="w-full h-fit flex items-center justify-start gap-6">
                            <div class="p-1 flex-1 min-w-0 hoverBlock"
                              onclick="window.location.href='{{ route('home') }}'">
                              <div
                                class="h-fit w-fit bg-neutral-50 border-1 rounded hover:cursor-cool-clickable transition-colors select-none border-neutral-400 w-full"
                                tabindex="0" style="transform: none">
                                <section
                                  class="h-80 w-80 flex flex-col shadow-smooth rounded overflow-hidden bg-neutral-100">
                                  <div class="flex-grow flex items-center justify-center">
                                    <img alt="Video Call Illustration" loading="lazy" width="0" height="0"
                                      decoding="async" data-nimg="1" class="w-auto h-auto" src="/assets/video-call.png"
                                      style="color: transparent" />
                                  </div>
                                  <div
                                    class="h-14 flex items-center gap-2 justify-between p-3 border-t-1 border-neutral-400 bg-neutral-50">
                                    <div class="flex items-center gap-2">
                                      <svg data-name="Layer 3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="h-6 w-6" style="
                                            max-width: 50vw;
                                            max-height: 50vh;
                                          ">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <rect x="7" y="8.5" width="7" height="7" rx="1.615"
                                          class="stroke-1.5 stroke-neutral-700" stroke-linecap="round"
                                          stroke-linejoin="round" fill="none"></rect>
                                        <path
                                          d="m14 13.164 2.009 1.238A.65.65 0 0 0 17 13.85v-3.698a.65.65 0 0 0-.991-.553L14 10.836"
                                          fill="none" class="stroke-1.5 stroke-neutral-700" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                        <rect x="3" y="3" width="18" height="18" rx="5"
                                          class="stroke-1.5 stroke-neutral-700" stroke-linecap="round"
                                          stroke-linejoin="round" fill="none"></rect>
                                      </svg>
                                      <h5>Start / Join Meeting</h5>
                                    </div>
                                    <div class="-rotate-90">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-4 w-4" style="
                                            max-width: 50vw;
                                            max-height: 50vh;
                                          ">
                                        <g fill="none" class="stroke-2 stroke-neutral-700" stroke-linecap="round"
                                          stroke-linejoin="round">
                                          <path d="M12.01 4.51v14.98M6.023 13.507 12 19.483l5.977-5.976"></path>
                                        </g>
                                        <path fill="none" d="M0 0h24v24H0Z"></path>
                                      </svg>
                                    </div>
                                  </div>
                                </section>
                              </div>
                            </div>
                            <div class="p-1 flex-1 min-w-0 hoverBlock" onclick="openCSV()">
                              <div
                                class="h-fit w-fit bg-neutral-50 border-1 rounded hover:cursor-cool-clickable transition-colors select-none border-neutral-400 w-full"
                                tabindex="0">
                                <section
                                  class="h-80 w-80 flex flex-col shadow-smooth rounded overflow-hidden bg-neutral-100">
                                  <div class="flex-grow flex items-center justify-center overflow-clip">
                                    <div class="translate-x-6 translate-y-6">
                                      <img alt="Video Call Illustration" loading="lazy" width="0" height="0"
                                        decoding="async" data-nimg="1" class="w-auto h-auto"
                                        src="/assets/csv-import.png" style="color: transparent" />
                                    </div>
                                  </div>
                                  <div
                                    class="h-14 flex items-center gap-2 justify-between p-3 border-t-1 border-neutral-400 bg-neutral-50">
                                    <div class="flex items-center gap-2">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6" style="
                                            max-width: 50vw;
                                            max-height: 50vh;
                                          ">
                                        <g fill="none" class="stroke-1.5 stroke-neutral-700" stroke-linecap="round"
                                          stroke-linejoin="round">
                                          <rect width="18" height="18" x="3" y="3" rx="5" stroke-linecap="round"
                                            stroke-linejoin="round"></rect>
                                          <path d="M9 21V3M15 21V3M3 9h18M3 15h18"></path>
                                        </g>
                                        <path fill="none" d="M24 24H0V0h24z"></path>
                                      </svg>
                                      <h5>Import a CSV</h5>
                                    </div>
                                    <div class="-rotate-90">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-4 w-4" style="
                                            max-width: 50vw;
                                            max-height: 50vh;
                                          ">
                                        <g fill="none" class="stroke-2 stroke-neutral-700" stroke-linecap="round"
                                          stroke-linejoin="round">
                                          <path d="M12.01 4.51v14.98M6.023 13.507 12 19.483l5.977-5.976"></path>
                                        </g>
                                        <path fill="none" d="M0 0h24v24H0Z"></path>
                                      </svg>
                                    </div>
                                  </div>
                                </section>
                              </div>
                            </div>
                            <div class="p-1 flex-1 min-w-0 hoverBlock" onclick="openText()">
                              <div
                                class="h-fit w-fit bg-neutral-50 border-1 rounded hover:cursor-cool-clickable transition-colors select-none border-neutral-400 w-full"
                                tabindex="0">
                                <section
                                  class="h-80 w-80 flex flex-col shadow-smooth rounded overflow-hidden bg-neutral-100">
                                  <div class="flex-grow flex items-center justify-center scale-75 translate-y-4">
                                    <img alt="Video Call Illustration" loading="lazy" width="0" height="0"
                                      decoding="async" data-nimg="1" class="w-auto h-auto" src="/assets/paste-text.png"
                                      style="color: transparent" />
                                  </div>
                                  <div
                                    class="h-14 flex items-center gap-2 justify-between p-3 border-t-1 border-neutral-400 bg-neutral-50">
                                    <div class="flex items-center gap-2">
                                      <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" style="
                                            max-width: 50vw;
                                            max-height: 50vh;
                                          ">
                                        <g stroke-linecap="round" class="stroke-1.5 stroke-neutral-700" fill="none"
                                          stroke-linejoin="round">
                                          <path
                                            d="M6.51 13.82h4.69M7.14 13.82v0M8.86 8.38 6 15.01M11.71 15.01 8.86 8.38M17 21H7a4 4 0 0 1-4-4V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4v10a4 4 0 0 1-4 4ZM17.75 11v4">
                                          </path>
                                          <path
                                            d="M17.161 11.579a2.011 2.011 0 1 1-2.844 2.844 2.011 2.011 0 0 1 2.844-2.844">
                                          </path>
                                        </g>
                                        <path fill="none" d="M0 0h24v24H0V0Z"></path>
                                      </svg>
                                      <h5>Copy/paste manually</h5>
                                    </div>
                                    <div class="-rotate-90">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-4 w-4" style="
                                            max-width: 50vw;
                                            max-height: 50vh;
                                          ">
                                        <g fill="none" class="stroke-2 stroke-neutral-700" stroke-linecap="round"
                                          stroke-linejoin="round">
                                          <path d="M12.01 4.51v14.98M6.023 13.507 12 19.483l5.977-5.976"></path>
                                        </g>
                                        <path fill="none" d="M0 0h24v24H0Z"></path>
                                      </svg>
                                    </div>
                                  </div>
                                </section>
                              </div>
                            </div>
                            <style>
                              .hoverBlock {
                                transition: all 0.3s;
                              }

                              .hoverBlock:hover {
                                transform: scale(1.05);
                              }
                            </style>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="h-36 w-full max-w-[65rem] bg-neutral-50 border-1 border-neutral-400 rounded flex items-center justify-between overflow-clip">
                  <section class="flex-1 w-full h-full flex items-center justify-center py-5 px-5">
                    <div class="flex flex-col gap-2 h-full w-full">
                      <h5>
                        Record user interviews without a bot.<br />Automatically
                        sent to your SoundLine! inbox.
                      </h5>
                      <div>
                        <button type="button"
                          class="flex items-center justify-center gap-2 rounded font-medium leading-4 whitespace-nowrap overflow-hidden text-overflow-ellipsis w-auto min-w-0 min-h-0 select-none px-3 py-2 bg-secondary-300 border-[2px] border-neutral-700 shadow-smoothxl opacity-100"
                          tabindex="0">
                          <div class="flex items-center gap-2">
                            <h4>Get the extension</h4>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 10" class="h-3 w-3" fill="none"
                              style="max-width: 50vw; max-height: 50vh">
                              <path class="fill-neutral-700"
                                d="M10.562 0v4.615H9.023V2.623l-4.3 4.3L3.64 5.838l4.3-4.3H5.946V0h4.616ZM7.485 7.692a.77.77 0 0 1-.77.77H2.87a.77.77 0 0 1-.769-.77V3.846a.77.77 0 0 1 .77-.77h1.538V1.539H2.869A2.308 2.308 0 0 0 .562 3.846v3.846A2.308 2.308 0 0 0 2.869 10h3.846a2.308 2.308 0 0 0 2.308-2.308V6.154H7.485v1.538Z">
                              </path>
                            </svg>
                          </div>
                        </button>
                      </div>
                    </div>
                    <div class="-translate-x-20 h-full">
                      <div class="w-[1px] h-full bg-neutral-300 m-1 rounded-full w-[1px] bg-neutral-400"></div>
                    </div>
                  </section>
                  <section class="flex-1 w-full h-full flex items-center justify-start translate-y-3 -translate-x-10">
                    <img alt="SoundLine Navbar Logo" loading="lazy" width="600" height="300" decoding="async"
                      data-nimg="1" src="/assets/chrome-extension-banner.png" style="color: transparent" />
                  </section>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div
          class="fixed bottom-2 right-2 w-11 h-11 rounded-full bg-primary-300 border-2 border-primary-600 p-4 shadow-lg flex items-center justify-center hover:cursor-cool-clickable disabled:cursor-cool-normal"
          style="z-index: 99999">
          <button type="button"
            class="flex items-center justify-center w-fit rounded font-medium transition-colors select-none text-neutral-600 px-3 py-2"
            id="radix-:r0:" aria-haspopup="menu" aria-expanded="false" data-state="closed" tabindex="0">
            <h3 class="text-primary-600">?</h3>
          </button>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
<script>
  function nextStep(number) {
    var section_1 = document.getElementById("section_1");

    var section_2 = document.getElementById("section_2");

    var section_3 = document.getElementById("section_3");

    var section_4 = document.getElementById("section_4");
    var section_5 = document.getElementById("section_5");
    if (number == 1) {
      section_1.style.display = "none";
      section_2.style.display = "flex";
    } else if (number == 2) {
      section_2.style.display = "none";
      section_3.style.display = "flex";
    } else if (number == 3) {
      section_3.style.display = "none";
      section_4.style.display = "flex";
    } else if (number == 4) {
      section_4.style.display = "none";
      section_5.style.display = "flex";
    }
  }
</script>
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
<script>

  function openCSV() {
    const modal = document.getElementById('modalCSV');
    const overlay = document.querySelector('#overlay');

    if (modal && overlay) {
      modal.style.display = 'flex';
      overlay.style.display = 'block';
    }
  }
</script>

<section class="hiddenNOTIF" id="notification" aria-label="Notifications alt+T" tabindex="-1">
  <ol dir="ltr" tabindex="-1" data-sonner-toaster="true" data-theme="light" data-y-position="top"
    data-x-position="right" style="--front-toast-height: 98px; --offset: 32px; --width: 356px; --gap: 14px;">
    <li aria-live="polite" aria-atomic="true" role="status" tabindex="0" class="w-full min-h-[3.5rem] flex items-center"
      data-sonner-toast="" data-styled="false" data-mounted="true" data-promise="false" data-removed="false"
      data-visible="true" data-y-position="top" data-x-position="right" data-index="0" data-front="true"
      data-swiping="false" data-dismissible="true" data-swipe-out="false" data-expanded="false"
      style="--index: 0; --toasts-before: 0; --z-index: 2; --offset: 0px; --initial-height: 98px;">
      <div
        class="w-full h-fit rounded px-3 py-3 flex flex-col pointer-events-auto select-none bg-success-200 border-1 border-success-700"
        style="z-index: 100000;">
        <section class="flex gap-2 items-center"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
            class="h-4 w-4" style="max-width: 50vw; max-height: 50vh;">
            <g fill="none">
              <path class="stroke-[3px] stroke-success-700" stroke-linecap="round" stroke-linejoin="round"
                d="m20 6.5-11 11-5-5"></path>
            </g>
          </svg>
          <h5>Capture successfully added 🥳</h5>
        </section>
        <p>You can now find it in your captures inbox, insights will be here in a minute 😉</p>
      </div>
    </li>
    <li aria-live="polite" aria-atomic="true" role="status" tabindex="0" class="w-full min-h-[3.5rem] flex items-center"
      data-sonner-toast="" data-styled="false" data-mounted="true" data-promise="false" data-removed="false"
      data-visible="true" data-y-position="top" data-x-position="right" data-index="1" data-front="false"
      data-swiping="false" data-dismissible="true" data-swipe-out="false" data-expanded="false"
      style="--index: 1; --toasts-before: 1; --z-index: 1; --offset: 112px; --initial-height: 74px;">
      <div
        class="w-full h-fit rounded px-3 py-3 flex flex-col pointer-events-auto select-none bg-danger-100 border-1 border-danger-500"
        style="z-index: 100000;">
        <section class="flex gap-2 items-center"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
            class="h-4 w-4" style="max-width: 50vw; max-height: 50vh;">
            <g fill="none">
              <path d="M0 0h24v24H0Z"></path>
              <path class="stroke-[3px] stroke-danger-500" stroke-linecap="round" stroke-linejoin="round"
                d="m14.83 9.17-5.66 5.66M14.83 14.83 9.17 9.17M12 21v0a9 9 0 0 1-9-9v0a9 9 0 0 1 9-9v0a9 9 0 0 1 9 9v0a9 9 0 0 1-9 9Z">
              </path>
            </g>
          </svg>
          <h5>Ooops we couldn't add your capture 😕</h5>
        </section>
        <p>You need to select a capture column</p>
      </div>
    </li>
  </ol>
</section>
<div style="display: none" id="overlay"
  class="fixed inset-0 box-content shadow-apple backdrop-blur-[2px] bg-neutral-700/40 " data-state="open"
  style="pointer-events: auto; z-index: 199; opacity: 1;" data-aria-hidden="true" aria-hidden="true"></div>

<div style="display: none"
  class="focus:outline-none rounded m-auto fixed inset-x-0 inset-y-0 flex items-center absolute bg-neutral-100 overflow-hidden w-fit h-fit rounded p-3"
  role="dialog" id="modalCSV" aria-describedby="radix-:r5:" aria-labelledby="radix-:r4:" data-state="open" tabindex="-1"
  style="z-index: 200; opacity: 1; transform: none; pointer-events: auto;">
  <div class="h-fit w-[67rem] flex flex-col gap-2 justify-between items-center p-4">
    <div class="w-full h-full flex flex-col">
      <section class="w-full mb-2">
        <div class="w-full flex items-center justify-between gap-2 mb-6">
          <div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-8"
              style="max-width: 50vw; max-height: 50vh;">
              <g fill="none" class="stroke-1.5 stroke-neutral-700" stroke-linecap="round" stroke-linejoin="round">
                <rect width="18" height="18" x="3" y="3" rx="5" stroke-linecap="round" stroke-linejoin="round"></rect>
                <path d="M9 21V3M15 21V3M3 9h18M3 15h18"></path>
              </g>
              <path fill="none" d="M24 24H0V0h24z"></path>
            </svg>
            <h2>Import CSV</h2>
          </div>
          <section class="w-fit flex gap-4 items-center justify-end mt-4"><button type="button" id="closeModalButtonCSV"
              class="flex items-center justify-center gap-2 rounded font-medium leading-4 whitespace-nowrap overflow-hidden text-overflow-ellipsis w-auto min-w-0 min-h-0 select-none px-3 py-2 bg-neutral-200 border-1 border-neutral-400 opacity-100"
              tabindex="0">
              <div class="flex items-center justify-center gap-1">
                <div class="rotate-90 flex items-center justify-center"><svg viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" style="max-width: 50vw; max-height: 50vh;">
                    <path d="m8 10 4 4 4-4" stroke-linecap="round" class="stroke-2 stroke-neutral-700" stroke="#323232"
                      fill="none" stroke-linejoin="round"></path>
                    <path fill="none" d="M0 0h24v24H0Z"></path>
                  </svg></div>
                <h5>Back</h5>
              </div>
            </button><button type="button" disabled="" id="continueButton"
              class="flex items-center justify-center gap-2 rounded font-medium leading-4 whitespace-nowrap overflow-hidden text-overflow-ellipsis w-auto min-w-0 min-h-0 select-none px-3 py-2 bg-primary-500 bg-grainy-texture outline-neutral-700 opacity-60"
              tabindex="0">
              <div class="flex items-center justify-center gap-1">
                <h5>Continue</h5>
                <div class="-rotate-90 flex items-center justify-center"><svg viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" style="max-width: 50vw; max-height: 50vh;">
                    <path d="m8 10 4 4 4-4" stroke-linecap="round" class="stroke-2 stroke-neutral-700" stroke="#323232"
                      fill="none" stroke-linejoin="round"></path>
                    <path fill="none" d="M0 0h24v24H0Z"></path>
                  </svg></div>
              </div>
            </button></section>
        </div>
      </section>
      <div class="h-full w-full">
        <div class="h-full w-full rounded flex flex-col gap-4 items-center justify-center">
          <section class="w-full h-full">
            <div role="presentation" tabindex="0"
              class="rounded h-96 w-full bg-primary-200 flex flex-col gap-2 py-2 px-6 outline-[0.17rem] outline-primary-600 outline-dashed -outline-offset-2 items-center justify-center text-neutral-500">
              <label for="file" class="flex flex-col gap-2 items-center justify-center">
                <input accept="text/csv,.csv" id="file" multiple="" type="file" tabindex="-1"
                  style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-20 w-20"
                  style="max-width: 50vw; max-height: 50vh;">
                  <g fill="none" class="stroke-1.5 stroke-primary-600" stroke-linecap="round" stroke-linejoin="round">
                    <rect width="18" height="18" x="3" y="3" rx="5" stroke-linecap="round" stroke-linejoin="round">
                    </rect>
                    <path d="M9 21V3M15 21V3M3 9h18M3 15h18"></path>
                  </g>
                  <path fill="none" d="M24 24H0V0h24z"></path>
                </svg><button type="button"
                  class="flex items-center justify-center gap-2 rounded font-medium leading-4 whitespace-nowrap overflow-hidden text-overflow-ellipsis w-auto min-w-0 min-h-0 select-none px-3 py-2 bg-neutral-200 border-1 border-neutral-400 opacity-100"
                  tabindex="0">
                  <h4 class="text-neutral-600">Click here to upload .CSV</h4>
                </button>
              </label>
              <p class="text-small">Or drag &amp; drop your CSV here</p>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  var file = document.getElementById("file");
  var continueButton = document.getElementById("continueButton");

  var closeModalButtonCSV = document.getElementById("closeModalButtonCSV")


  closeModalButtonCSV.addEventListener("click", function () {
    const modal = document.getElementById('modalCSV');
    const overlay = document.querySelector('#overlay');

    if (modal && overlay) {
      modal.style.display = 'none';
      overlay.style.display = 'none';
    }
  });

  file.addEventListener("change", function () {
    if (file.files.length > 0) {
      continueButton.disabled = false;
      continueButton.classList.remove("opacity-60");
      continueButton.classList.add("opacity-100");
    } else {
      continueButton.disabled = true;
      continueButton.classList.add("opacity-60");
    }
  });

  continueButton.addEventListener("click", function () {
    if (!continueButton.disabled) {
      var notification = document.getElementById("notification");
      notification.classList.remove("hiddenNOTIF");
      notification.classList.add("visibleNOTIF");

      setTimeout(function () {
        notification.classList.remove("visibleNOTIF");
        notification.classList.add("hiddenNOTIF");
      }, 5000);

      const modal = document.getElementById('modalCSV');
      const overlay = document.querySelector('#overlay');

      if (modal && overlay) {
        modal.style.display = 'none';
        overlay.style.display = 'none';
      }
    }
  });
</script>


<style>
  .hiddenNOTIF {
    opacity: 0;
    transition: 0.5s all;
  }

  .visibleNOTIF {
    opacity: 1;
    transition: 0.5s all;
  }
</style>
<script>
  function openText() {
    const modal = document.getElementById('modalText');
    const overlay = document.querySelector('#overlay');

    if (modal && overlay) {
      modal.style.display = 'flex';
      overlay.style.display = 'block';
    }
  }
</script>
<div id="modalText" style="display: none"
  class="focus:outline-none rounded m-auto fixed inset-x-0 inset-y-0 flex items-center absolute bg-neutral-100 overflow-hidden w-fit h-fit rounded p-3"
  role="dialog" aria-describedby="radix-:r5:" aria-labelledby="radix-:r4:" data-state="open" tabindex="-1"
  style="z-index: 200; opacity: 1; transform: none; pointer-events: auto;">
  <div class="h-fit w-[67rem] flex flex-col gap-2 justify-between items-center p-4">
    <section class="w-full h-full flex items-center justify-between mb-6">
      <div class="w-full flex items-center gap-2"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
          class="h-8" style="max-width: 50vw; max-height: 50vh;">
          <g stroke-linecap="round" class="stroke-1.5 stroke-neutral-700" fill="none" stroke-linejoin="round">
            <path
              d="M6.51 13.82h4.69M7.14 13.82v0M8.86 8.38 6 15.01M11.71 15.01 8.86 8.38M17 21H7a4 4 0 0 1-4-4V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4v10a4 4 0 0 1-4 4ZM17.75 11v4">
            </path>
            <path d="M17.161 11.579a2.011 2.011 0 1 1-2.844 2.844 2.011 2.011 0 0 1 2.844-2.844"></path>
          </g>
          <path fill="none" d="M0 0h24v24H0V0Z"></path>
        </svg>
        <h1>Paste text</h1>
      </div>
      <section class="w-full flex gap-4 items-center justify-end"><button type="button" id="closeModalButtonText"
          class="flex items-center justify-center gap-2 rounded font-medium leading-4 whitespace-nowrap overflow-hidden text-overflow-ellipsis w-auto min-w-0 min-h-0 select-none px-3 py-2 bg-neutral-200 border-1 border-neutral-400 opacity-100"
          tabindex="0" style="transform: none; transform-origin: 50% 50% 0px;">
          <div class="flex items-center justify-center gap-1">
            <div class="rotate-90 flex items-center justify-center"><svg viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" style="max-width: 50vw; max-height: 50vh;">
                <path d="m8 10 4 4 4-4" stroke-linecap="round" class="stroke-2 stroke-neutral-700" stroke="#323232"
                  fill="none" stroke-linejoin="round"></path>
                <path fill="none" d="M0 0h24v24H0Z"></path>
              </svg></div>
            <h5>Back</h5>
          </div>
        </button><button type="button" id="completeImportButton"
          class="flex items-center justify-center gap-2 rounded font-medium leading-4 whitespace-nowrap overflow-hidden text-overflow-ellipsis w-auto min-w-0 min-h-0 select-none px-3 py-2 bg-primary-500 bg-grainy-texture outline-neutral-700 opacity-60"
          tabindex="0" disabled="" style="transform: none; transform-origin: 50% 50% 0px;"><svg viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" style="max-width: 50vw; max-height: 50vh;">
            <g fill="none">
              <path class="stroke-2 stroke-neutral-700" stroke-linecap="round" stroke-linejoin="round"
                d="m20 6.5-11 11-5-5"></path>
            </g>
          </svg>
          <h5>Complete import</h5>
        </button></section>
    </section>
    <section
      class="h-[30rem] w-full rounded border-1 border-neutral-400 bg-neutral-50 p-2 m-2 overflow-y-auto hover:cursor-cool-clickable disabled:cursor-cool-normal">
      <div>
        <div id="textArea" contenteditable="true" translate="no"
          class="tiptap ProseMirror text-left text-lg font-normal z-0 antialiased font-sans text-neutral-700 h-full w-full"
          tabindex="0">
          <p class="p text-base is-empty is-editor-empty" data-placeholder="Paste or write your text here"><br
              class="ProseMirror-trailingBreak"></p>
        </div>
      </div>
    </section>
  </div>
</div>
<script>
  var textArea = document.getElementById("textArea");
  var completeImportButton = document.getElementById("completeImportButton");

  var closeModalButtonText = document.getElementById("closeModalButtonText")


  closeModalButtonText.addEventListener("click", function () {
    const modal = document.getElementById('modalText');
    const overlay = document.querySelector('#overlay');

    if (modal && overlay) {
      modal.style.display = 'none';
      overlay.style.display = 'none';
    }
  });

  textArea.addEventListener("input", function () {
    if (textArea.textContent.trim().length > 0) {
      textArea.querySelector("p").classList.remove("is-editor-empty")
      completeImportButton.disabled = false;

      completeImportButton.classList.remove("opacity-60");
      completeImportButton.classList.add("opacity-100");
    } else {
      textArea.innerHTML = '<p class="p text-base is-empty is-editor-empty" data-placeholder="Paste or write your text here"></p>'
      completeImportButton.disabled = true;
      completeImportButton.classList.add("opacity-60");
    }
  });

  completeImportButton.addEventListener("click", function () {
    if (!completeImportButton.disabled) {
      var notification = document.getElementById("notification");
      notification.classList.remove("hiddenNOTIF");
      notification.classList.add("visibleNOTIF");

      setTimeout(function () {
        notification.classList.remove("visibleNOTIF");
        notification.classList.add("hiddenNOTIF");
      }, 5000);

      const modal = document.getElementById('modalText');
      const overlay = document.querySelector('#overlay');

      if (modal && overlay) {
        modal.style.display = 'none';
        overlay.style.display = 'none';
      }
    }
  });
</script>
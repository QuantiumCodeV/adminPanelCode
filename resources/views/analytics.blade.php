<!DOCTYPE html>

<!-- saved from url=(0044){{ route("analytics") }} -->
<html style="">
@include('fonts')<plasmo-csui><template shadowrootmode="open">
    <style>
      *,
      :before,
      :after {
        box-sizing: border-box;
        border: 0 solid
      }

      :before,
      :after {
        --tw-content: ""
      }

      html {
        -webkit-text-size-adjust: 100%;
        tab-size: 4;
        font-feature-settings: normal;
        font-variation-settings: normal;
        font-family: jakarta, ui-sans-serif, system-ui;
        line-height: 1.5
      }

      body {
        line-height: inherit;
        margin: 0
      }

      hr {
        color: inherit;
        border-top-width: 1px;
        height: 0
      }

      abbr:where([title]) {
        text-decoration: underline dotted
      }

      h1,
      h2,
      h3,
      h4,
      h5,
      h6 {
        font-size: inherit;
        font-weight: inherit
      }

      a {
        color: inherit;
        text-decoration: inherit
      }

      b,
      strong {
        font-weight: bolder
      }

      code,
      kbd,
      samp,
      pre {
        font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace;
        font-size: 1em
      }

      small {
        font-size: 80%
      }

      sub,
      sup {
        vertical-align: baseline;
        font-size: 75%;
        line-height: 0;
        position: relative
      }

      sub {
        bottom: -.25em
      }

      sup {
        top: -.5em
      }

      table {
        text-indent: 0;
        border-color: inherit;
        border-collapse: collapse
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
        padding: 0
      }

      button,
      select {
        text-transform: none
      }

      button,
      [type=button],
      [type=reset],
      [type=submit] {
        -webkit-appearance: button;
        background-color: #0000;
        background-image: none
      }

      :-moz-focusring {
        outline: auto
      }

      :-moz-ui-invalid {
        box-shadow: none
      }

      progress {
        vertical-align: baseline
      }

      ::-webkit-inner-spin-button {
        height: auto
      }

      ::-webkit-outer-spin-button {
        height: auto
      }

      [type=search] {
        -webkit-appearance: textfield;
        outline-offset: -2px
      }

      ::-webkit-search-decoration {
        -webkit-appearance: none
      }

      ::-webkit-file-upload-button {
        -webkit-appearance: button;
        font: inherit
      }

      summary {
        display: list-item
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
        margin: 0
      }

      fieldset {
        margin: 0;
        padding: 0
      }

      legend {
        padding: 0
      }

      ol,
      ul,
      menu {
        margin: 0;
        padding: 0;
        list-style: none
      }

      dialog {
        padding: 0
      }

      textarea {
        resize: vertical
      }

      input::placeholder,
      textarea::placeholder {
        opacity: 1;
        color: #9ca3af
      }

      button,
      [role=button] {
        cursor: pointer
      }

      :disabled {
        cursor: default
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
        display: block
      }

      img,
      video {
        max-width: 100%;
        height: auto
      }

      [hidden] {
        display: none
      }

      @font-face {
        font-family: jakarta;
        font-weight: 200;
        font-style: normal;
        src: url(PlusJakartaSans-ExtraLight.910e00a9.woff2)format("woff2")
      }

      @font-face {
        font-family: jakarta;
        font-weight: 200;
        font-style: italic;
        src: url(PlusJakartaSans-ExtraLightItalic.4db0e375.woff2)format("woff2")
      }

      @font-face {
        font-family: jakarta;
        font-weight: 300;
        font-style: normal;
        src: url(PlusJakartaSans-Light.73e6caf7.woff2)format("woff2")
      }

      @font-face {
        font-family: jakarta;
        font-weight: 300;
        font-style: italic;
        src: url(PlusJakartaSans-LightItalic.6f8cf289.woff2)format("woff2")
      }

      @font-face {
        font-family: jakarta;
        font-weight: 400;
        font-style: normal;
        src: url(PlusJakartaSans-Regular.dd2964fa.woff2)format("woff2")
      }

      @font-face {
        font-family: jakarta;
        font-weight: 400;
        font-style: italic;
        src: url(PlusJakartaSans-Italic.6984abb6.woff2)format("woff2")
      }

      @font-face {
        font-family: jakarta;
        font-weight: 500;
        font-style: normal;
        src: url(PlusJakartaSans-Medium.78ccad27.woff2)format("woff2")
      }

      @font-face {
        font-family: jakarta;
        font-weight: 500;
        font-style: italic;
        src: url(PlusJakartaSans-MediumItalic.e19dc663.woff2)format("woff2")
      }

      @font-face {
        font-family: jakarta;
        font-weight: 600;
        font-style: normal;
        src: url(PlusJakartaSans-SemiBold.86da44bd.woff2)format("woff2")
      }

      @font-face {
        font-family: jakarta;
        font-weight: 600;
        font-style: italic;
        src: url(PlusJakartaSans-SemiBoldItalic.ab3b6f47.woff2)format("woff2")
      }

      @font-face {
        font-family: jakarta;
        font-weight: 700;
        font-style: normal;
        src: url(PlusJakartaSans-Bold.df44d80d.woff2)format("woff2")
      }

      @font-face {
        font-family: jakarta;
        font-weight: 700;
        font-style: italic;
        src: url(PlusJakartaSans-BoldItalic.a83919e3.woff2)format("woff2")
      }

      @font-face {
        font-family: jakarta;
        font-weight: 800;
        font-style: normal;
        src: url(PlusJakartaSans-ExtraBold.37de6218.woff2)format("woff2")
      }

      @font-face {
        font-family: jakarta;
        font-weight: 800;
        font-style: italic;
        src: url(PlusJakartaSans-ExtraBoldItalic.505495e3.woff2)format("woff2")
      }

      @font-face {
        font-family: listenup-title;
        font-weight: 400;
        font-style: normal;
        src: url(ListenUpTitle-Regular.327662cc.woff2)format("woff2")
      }

      @font-face {
        font-family: listenup-title;
        font-weight: 400;
        font-style: italic;
        src: url(ListenUpTitle-RegularItalic.6b265b9e.woff2)format("woff2")
      }

      @font-face {
        font-family: listenup-title;
        font-weight: 500;
        font-style: normal;
        src: url(ListenUpTitle-Medium.f7a3a490.woff2)format("woff2")
      }

      @font-face {
        font-family: listenup-title;
        font-weight: 500;
        font-style: italic;
        src: url(ListenUpTitle-MediumItalic.be652042.woff2)format("woff2")
      }

      @font-face {
        font-family: listenup-title;
        font-weight: 700;
        font-style: normal;
        src: url(ListenUpTitle-Bold.5a502535.woff2)format("woff2")
      }

      @font-face {
        font-family: listenup-title;
        font-weight: 700;
        font-style: italic;
        src: url(ListenUpTitle-BoldItalic.305edd8e.woff2)format("woff2")
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
        --tw-backdrop-sepia:
      }

      .listenup-fixed {
        position: fixed
      }

      .listenup-absolute {
        position: absolute
      }

      .listenup-relative {
        position: relative
      }

      .listenup-inset-0 {
        inset: 0
      }

      .listenup-bottom-8 {
        bottom: 2rem
      }

      .listenup-left-0 {
        left: 0
      }

      .listenup-left-1\/2 {
        left: 50%
      }

      .listenup-left-8 {
        left: 2rem
      }

      .listenup-right-2 {
        right: .5rem
      }

      .listenup-right-28 {
        right: 7rem
      }

      .listenup-top-0 {
        top: 0
      }

      .listenup-top-1\/2 {
        top: 50%
      }

      .listenup-top-2 {
        top: .5rem
      }

      .listenup-top-5 {
        top: 1.25rem
      }

      .listenup-z-0 {
        z-index: 0
      }

      .listenup-z-10 {
        z-index: 10
      }

      .listenup-z-20 {
        z-index: 20
      }

      .listenup-z-40 {
        z-index: 40
      }

      .listenup-z-\[20\] {
        z-index: 20
      }

      .listenup-z-\[30002\] {
        z-index: 30002
      }

      .listenup-z-\[3000\] {
        z-index: 3000
      }

      .listenup-m-1 {
        margin: .25rem
      }

      .listenup-mx-auto {
        margin-left: auto;
        margin-right: auto
      }

      .listenup-ml-2 {
        margin-left: .5rem
      }

      .listenup-mt-8 {
        margin-top: 2rem
      }

      .listenup-inline-block {
        display: inline-block
      }

      .listenup-flex {
        display: flex
      }

      .listenup-hidden {
        display: none
      }

      .listenup-h-10 {
        height: 2.5rem
      }

      .listenup-h-28 {
        height: 7rem
      }

      .listenup-h-3 {
        height: .75rem
      }

      .listenup-h-4 {
        height: 1rem
      }

      .listenup-h-5 {
        height: 1.25rem
      }

      .listenup-h-6 {
        height: 1.5rem
      }

      .listenup-h-7 {
        height: 1.75rem
      }

      .listenup-h-8 {
        height: 2rem
      }

      .listenup-h-9 {
        height: 2.25rem
      }

      .listenup-h-\[100\%\] {
        height: 100%
      }

      .listenup-h-\[10rem\] {
        height: 10rem
      }

      .listenup-h-\[18px\] {
        height: 18px
      }

      .listenup-h-\[1px\] {
        height: 1px
      }

      .listenup-h-\[24px\] {
        height: 24px
      }

      .listenup-h-\[30rem\] {
        height: 30rem
      }

      .listenup-h-fit {
        height: fit-content
      }

      .listenup-h-full {
        height: 100%
      }

      .listenup-h-screen {
        height: 100vh
      }

      .listenup-max-h-40 {
        max-height: 10rem
      }

      .listenup-max-h-60 {
        max-height: 15rem
      }

      .listenup-w-1\/3 {
        width: 33.3333%
      }

      .listenup-w-10 {
        width: 2.5rem
      }

      .listenup-w-11 {
        width: 2.75rem
      }

      .listenup-w-2\/3 {
        width: 66.6667%
      }

      .listenup-w-3 {
        width: .75rem
      }

      .listenup-w-4 {
        width: 1rem
      }

      .listenup-w-40 {
        width: 10rem
      }

      .listenup-w-5 {
        width: 1.25rem
      }

      .listenup-w-6 {
        width: 1.5rem
      }

      .listenup-w-60 {
        width: 15rem
      }

      .listenup-w-7 {
        width: 1.75rem
      }

      .listenup-w-8 {
        width: 2rem
      }

      .listenup-w-9 {
        width: 2.25rem
      }

      .listenup-w-\[100\%\] {
        width: 100%
      }

      .listenup-w-\[18px\] {
        width: 18px
      }

      .listenup-w-\[1px\] {
        width: 1px
      }

      .listenup-w-\[30rem\] {
        width: 30rem
      }

      .listenup-w-\[60rem\] {
        width: 60rem
      }

      .listenup-w-fit {
        width: fit-content
      }

      .listenup-w-full {
        width: 100%
      }

      .listenup-w-screen {
        width: 100vw
      }

      .listenup-max-w-\[90\%\] {
        max-width: 90%
      }

      .-listenup-translate-x-1\/2 {
        --tw-translate-x: -50%;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y))rotate(var(--tw-rotate))skewX(var(--tw-skew-x))skewY(var(--tw-skew-y))scaleX(var(--tw-scale-x))scaleY(var(--tw-scale-y))
      }

      .-listenup-translate-y-1\/2 {
        --tw-translate-y: -50%;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y))rotate(var(--tw-rotate))skewX(var(--tw-skew-x))skewY(var(--tw-skew-y))scaleX(var(--tw-scale-x))scaleY(var(--tw-scale-y))
      }

      .-listenup-rotate-90 {
        --tw-rotate: -90deg;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y))rotate(var(--tw-rotate))skewX(var(--tw-skew-x))skewY(var(--tw-skew-y))scaleX(var(--tw-scale-x))scaleY(var(--tw-scale-y))
      }

      .-listenup-rotate-\[135deg\] {
        --tw-rotate: -135deg;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y))rotate(var(--tw-rotate))skewX(var(--tw-skew-x))skewY(var(--tw-skew-y))scaleX(var(--tw-scale-x))scaleY(var(--tw-scale-y))
      }

      .listenup-transform {
        transform: translate(var(--tw-translate-x), var(--tw-translate-y))rotate(var(--tw-rotate))skewX(var(--tw-skew-x))skewY(var(--tw-skew-y))scaleX(var(--tw-scale-x))scaleY(var(--tw-scale-y))
      }

      .listenup-cursor-pointer {
        cursor: pointer
      }

      .listenup-select-none {
        user-select: none
      }

      .listenup-flex-col {
        flex-direction: column
      }

      .listenup-items-start {
        align-items: flex-start
      }

      .listenup-items-center {
        align-items: center
      }

      .listenup-justify-start {
        justify-content: flex-start
      }

      .listenup-justify-end {
        justify-content: flex-end
      }

      .listenup-justify-center {
        justify-content: center
      }

      .listenup-justify-between {
        justify-content: space-between
      }

      .listenup-gap-1 {
        gap: .25rem
      }

      .listenup-gap-12 {
        gap: 3rem
      }

      .listenup-gap-2 {
        gap: .5rem
      }

      .listenup-gap-3 {
        gap: .75rem
      }

      .listenup-gap-4 {
        gap: 1rem
      }

      .listenup-gap-6 {
        gap: 1.5rem
      }

      .listenup-overflow-hidden {
        overflow: hidden
      }

      .listenup-overflow-clip {
        overflow: clip
      }

      .listenup-overflow-y-auto {
        overflow-y: auto
      }

      .listenup-overflow-y-scroll {
        overflow-y: scroll
      }

      .listenup-rounded {
        border-radius: .625rem
      }

      .listenup-rounded-2xl {
        border-radius: 1rem
      }

      .listenup-rounded-full {
        border-radius: 9999px
      }

      .listenup-rounded-md {
        border-radius: .375rem
      }

      .listenup-rounded-xl {
        border-radius: .75rem
      }

      .listenup-border-0 {
        border-width: 0
      }

      .listenup-border-1 {
        border-width: 1px
      }

      .listenup-border-2 {
        border-width: 2px
      }

      .listenup-border-\[1\.5px\] {
        border-width: 1.5px
      }

      .listenup-border-\[2px\] {
        border-width: 2px
      }

      .listenup-border-\[3\.64px\] {
        border-width: 3.64px
      }

      .listenup-border-b-2 {
        border-bottom-width: 2px
      }

      .listenup-border-dashed {
        border-style: dashed
      }

      .listenup-border-danger-700 {
        --tw-border-opacity: 1;
        border-color: rgb(196 106 106/var(--tw-border-opacity))
      }

      .listenup-border-neutral-300 {
        --tw-border-opacity: 1;
        border-color: rgb(234 234 234/var(--tw-border-opacity))
      }

      .listenup-border-neutral-400 {
        --tw-border-opacity: 1;
        border-color: rgb(204 204 204/var(--tw-border-opacity))
      }

      .listenup-border-neutral-500 {
        --tw-border-opacity: 1;
        border-color: rgb(163 163 163/var(--tw-border-opacity))
      }

      .listenup-border-neutral-600 {
        --tw-border-opacity: 1;
        border-color: rgb(97 97 98/var(--tw-border-opacity))
      }

      .listenup-border-neutral-700 {
        --tw-border-opacity: 1;
        border-color: rgb(36 36 37/var(--tw-border-opacity))
      }

      .listenup-border-primary-500 {
        --tw-border-opacity: 1;
        border-color: rgb(193 190 250/var(--tw-border-opacity))
      }

      .listenup-border-primary-700 {
        --tw-border-opacity: 1;
        border-color: rgb(61 58 121/var(--tw-border-opacity))
      }

      .listenup-bg-\[\#FF8181\] {
        --tw-bg-opacity: 1;
        background-color: rgb(255 129 129/var(--tw-bg-opacity))
      }

      .listenup-bg-danger-200 {
        --tw-bg-opacity: 1;
        background-color: rgb(253 202 202/var(--tw-bg-opacity))
      }

      .listenup-bg-danger-500 {
        --tw-bg-opacity: 1;
        background-color: rgb(255 103 103/var(--tw-bg-opacity))
      }

      .listenup-bg-neutral-100 {
        --tw-bg-opacity: 1;
        background-color: rgb(249 249 249/var(--tw-bg-opacity))
      }

      .listenup-bg-neutral-200 {
        --tw-bg-opacity: 1;
        background-color: rgb(246 246 246/var(--tw-bg-opacity))
      }

      .listenup-bg-neutral-300 {
        --tw-bg-opacity: 1;
        background-color: rgb(234 234 234/var(--tw-bg-opacity))
      }

      .listenup-bg-neutral-50 {
        --tw-bg-opacity: 1;
        background-color: rgb(255 255 255/var(--tw-bg-opacity))
      }

      .listenup-bg-neutral-500 {
        --tw-bg-opacity: 1;
        background-color: rgb(163 163 163/var(--tw-bg-opacity))
      }

      .listenup-bg-neutral-700\/80 {
        background-color: #242425cc
      }

      .listenup-bg-primary-200 {
        --tw-bg-opacity: 1;
        background-color: rgb(242 241 255/var(--tw-bg-opacity))
      }

      .listenup-bg-primary-300 {
        --tw-bg-opacity: 1;
        background-color: rgb(236 235 253/var(--tw-bg-opacity))
      }

      .listenup-bg-primary-500 {
        --tw-bg-opacity: 1;
        background-color: rgb(193 190 250/var(--tw-bg-opacity))
      }

      .listenup-bg-primary-600 {
        --tw-bg-opacity: 1;
        background-color: rgb(112 111 165/var(--tw-bg-opacity))
      }

      .listenup-bg-secondary-300 {
        --tw-bg-opacity: 1;
        background-color: rgb(251 213 112/var(--tw-bg-opacity))
      }

      .listenup-fill-neutral-100 {
        fill: #f9f9f9
      }

      .listenup-stroke-danger-500 {
        stroke: #ff6767
      }

      .listenup-stroke-neutral-50 {
        stroke: #fff
      }

      .listenup-stroke-neutral-600 {
        stroke: #616162
      }

      .listenup-stroke-neutral-700 {
        stroke: #242425
      }

      .listenup-stroke-primary-100 {
        stroke: #f8f8ff
      }

      .listenup-stroke-primary-600 {
        stroke: #706fa5
      }

      .listenup-stroke-primary-700 {
        stroke: #3d3a79
      }

      .listenup-stroke-2 {
        stroke-width: 2px
      }

      .listenup-stroke-\[1\.5px\] {
        stroke-width: 1.5px
      }

      .listenup-stroke-\[3\] {
        stroke-width: 3px
      }

      .listenup-stroke-\[4px\] {
        stroke-width: 4px
      }

      .listenup-p-0 {
        padding: 0
      }

      .listenup-p-1 {
        padding: .25rem
      }

      .listenup-p-10 {
        padding: 2.5rem
      }

      .listenup-p-2 {
        padding: .5rem
      }

      .listenup-p-3 {
        padding: .75rem
      }

      .listenup-p-4 {
        padding: 1rem
      }

      .listenup-p-6 {
        padding: 1.5rem
      }

      .listenup-px-1 {
        padding-left: .25rem;
        padding-right: .25rem
      }

      .listenup-px-10 {
        padding-left: 2.5rem;
        padding-right: 2.5rem
      }

      .listenup-px-2 {
        padding-left: .5rem;
        padding-right: .5rem
      }

      .listenup-px-2\.5 {
        padding-left: .625rem;
        padding-right: .625rem
      }

      .listenup-px-20 {
        padding-left: 5rem;
        padding-right: 5rem
      }

      .listenup-px-3 {
        padding-left: .75rem;
        padding-right: .75rem
      }

      .listenup-px-4 {
        padding-left: 1rem;
        padding-right: 1rem
      }

      .listenup-px-5 {
        padding-left: 1.25rem;
        padding-right: 1.25rem
      }

      .listenup-px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem
      }

      .listenup-px-\[3px\] {
        padding-left: 3px;
        padding-right: 3px
      }

      .listenup-py-0 {
        padding-top: 0;
        padding-bottom: 0
      }

      .listenup-py-1 {
        padding-top: .25rem;
        padding-bottom: .25rem
      }

      .listenup-py-2 {
        padding-top: .5rem;
        padding-bottom: .5rem
      }

      .listenup-py-2\.5 {
        padding-top: .625rem;
        padding-bottom: .625rem
      }

      .listenup-py-3 {
        padding-top: .75rem;
        padding-bottom: .75rem
      }

      .listenup-py-4 {
        padding-top: 1rem;
        padding-bottom: 1rem
      }

      .listenup-py-5 {
        padding-top: 1.25rem;
        padding-bottom: 1.25rem
      }

      .listenup-py-8 {
        padding-top: 2rem;
        padding-bottom: 2rem
      }

      .listenup-text-center {
        text-align: center
      }

      .listenup-font-sans {
        font-family: jakarta, ui-sans-serif, system-ui
      }

      .listenup-text-6xl {
        font-size: 3.75rem;
        line-height: 1
      }

      .listenup-text-7xl {
        font-size: 4.5rem;
        line-height: 1
      }

      .listenup-text-base {
        font-size: 1rem;
        line-height: 1.5rem
      }

      .listenup-text-lg {
        font-size: 1.125rem;
        line-height: 1.75rem
      }

      .listenup-text-xs {
        font-size: .75rem;
        line-height: 1rem
      }

      .listenup-font-bold {
        font-weight: 700
      }

      .listenup-font-medium {
        font-weight: 500
      }

      .listenup-leading-4 {
        line-height: 1rem
      }

      .listenup-text-danger-500 {
        --tw-text-opacity: 1;
        color: rgb(255 103 103/var(--tw-text-opacity))
      }

      .listenup-text-neutral-50 {
        --tw-text-opacity: 1;
        color: rgb(255 255 255/var(--tw-text-opacity))
      }

      .listenup-text-neutral-500 {
        --tw-text-opacity: 1;
        color: rgb(163 163 163/var(--tw-text-opacity))
      }

      .listenup-text-neutral-600 {
        --tw-text-opacity: 1;
        color: rgb(97 97 98/var(--tw-text-opacity))
      }

      .listenup-text-neutral-700 {
        --tw-text-opacity: 1;
        color: rgb(36 36 37/var(--tw-text-opacity))
      }

      .listenup-text-primary-600 {
        --tw-text-opacity: 1;
        color: rgb(112 111 165/var(--tw-text-opacity))
      }

      .listenup-text-primary-700 {
        --tw-text-opacity: 1;
        color: rgb(61 58 121/var(--tw-text-opacity))
      }

      .listenup-opacity-100 {
        opacity: 1
      }

      .listenup-opacity-60 {
        opacity: .6
      }

      .listenup-shadow-2xl {
        --tw-shadow: 0 25px 50px -12px #00000040;
        --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
      }

      .listenup-shadow-smooth {
        --tw-shadow: 0px 4px 4px 0px #0000000d;
        --tw-shadow-colored: 0px 4px 4px 0px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
      }

      .listenup-shadow-smoothxl {
        --tw-shadow: 0px 7.27px 7.27px 0px #0003;
        --tw-shadow-colored: 0px 7.27px 7.27px 0px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
      }

      .listenup-outline-none {
        outline-offset: 2px;
        outline: 2px solid #0000
      }

      .listenup-outline-neutral-700 {
        outline-color: #242425
      }

      .listenup-transition-colors {
        transition-property: color, background-color, border-color, text-decoration-color, fill, stroke;
        transition-duration: .15s;
        transition-timing-function: cubic-bezier(.4, 0, .2, 1)
      }

      *,
      :before,
      :after {
        box-sizing: border-box
      }

      * {
        margin: 0
      }

      body {
        -webkit-font-smoothing: antialiased
      }

      img,
      picture,
      video,
      canvas,
      svg {
        max-width: 100%;
        display: block
      }

      input,
      button,
      textarea,
      select {
        font: inherit
      }

      p,
      h1,
      h2,
      h3,
      h4,
      h5,
      h6 {
        overflow-wrap: break-word
      }

      *,
      button {
        user-select: none;
        outline-color: #c1befa
      }

      h1,
      .h1 {
        --tw-text-opacity: 1;
        color: rgb(36 36 37/var(--tw-text-opacity));
        font-family: listenup-title, jakarta, ui-sans-serif, system-ui;
        font-size: 1.875rem;
        font-weight: 700;
        line-height: 2.5rem
      }

      h2,
      .h2 {
        --tw-text-opacity: 1;
        color: rgb(36 36 37/var(--tw-text-opacity));
        font-family: listenup-title, jakarta, ui-sans-serif, system-ui;
        font-size: 1.5rem;
        font-weight: 700;
        line-height: 2rem
      }

      h3,
      .h3 {
        --tw-text-opacity: 1;
        color: rgb(36 36 37/var(--tw-text-opacity));
        font-family: jakarta, ui-sans-serif, system-ui;
        font-size: 1.125rem;
        font-weight: 700;
        line-height: 1.5rem
      }

      h4,
      .h4 {
        --tw-text-opacity: 1;
        color: rgb(36 36 37/var(--tw-text-opacity));
        font-family: jakarta, ui-sans-serif, system-ui;
        font-size: 1rem;
        font-weight: 600;
        line-height: 1.5rem
      }

      h5,
      .h5 {
        --tw-text-opacity: 1;
        color: rgb(36 36 37/var(--tw-text-opacity));
        font-family: jakarta, ui-sans-serif, system-ui;
        font-size: .875rem;
        font-weight: 600;
        line-height: 1.5rem
      }

      body,
      p,
      .p {
        --tw-text-opacity: 1;
        color: rgb(36 36 37/var(--tw-text-opacity));
        font-family: jakarta, ui-sans-serif, system-ui;
        font-size: .875rem;
        font-weight: 500;
        line-height: 1.5rem
      }

      .text-small {
        --tw-text-opacity: 1;
        color: rgb(97 97 98/var(--tw-text-opacity));
        font-family: jakarta, ui-sans-serif, system-ui;
        font-size: .75rem;
        font-weight: 500;
        line-height: 1.25
      }

      .player-wrapper {
        --tw-border-opacity: 1;
        border-width: 2px;
        border-color: rgb(204 204 204/var(--tw-border-opacity));
        --tw-bg-opacity: 1;
        background-color: rgb(36 36 37/var(--tw-bg-opacity));
        border-radius: .625rem
      }

      .player-wrapper-insight {
        --tw-bg-opacity: 1;
        background-color: rgb(36 36 37/var(--tw-bg-opacity));
        border-top-left-radius: .75rem;
        border-top-right-radius: .75rem;
        width: 100%
      }

      .react-player {
        border-radius: .625rem;
        padding-top: 56.25%;
        position: relative;
        overflow: hidden
      }

      .react-player>div {
        position: absolute
      }

      ::selection {
        --tw-bg-opacity: 1;
        background-color: rgb(253 238 165/var(--tw-bg-opacity))
      }

      input:-webkit-autofill {
        -webkit-text-fill-color: #000;
        -webkit-background-clip: text;
        transition: background-color 5000s ease-in-out;
        box-shadow: inset 0 0 20px 20px #f8f8ff
      }

      input:-webkit-autofill:hover {
        -webkit-text-fill-color: #000;
        -webkit-background-clip: text;
        transition: background-color 5000s ease-in-out;
        box-shadow: inset 0 0 20px 20px #f8f8ff
      }

      input:-webkit-autofill:focus {
        -webkit-text-fill-color: #000;
        -webkit-background-clip: text;
        transition: background-color 5000s ease-in-out;
        box-shadow: inset 0 0 20px 20px #f8f8ff
      }

      input:-webkit-autofill:active {
        -webkit-text-fill-color: #000;
        -webkit-background-clip: text;
        transition: background-color 5000s ease-in-out;
        box-shadow: inset 0 0 20px 20px #f8f8ff
      }

      [contentEditable="true"]:focus {
        outline-offset: 2px;
        outline: 2px solid #0000
      }

      body ::-webkit-scrollbar {
        width: 5px;
        height: 5px
      }

      body ::-webkit-scrollbar-thumb {
        background: #ccc;
        border-radius: 2px
      }

      .tiptap p.is-editor-empty:first-child:before {
        color: #adb5bd;
        content: attr(data-placeholder);
        float: left;
        pointer-events: none;
        height: 0
      }

      .hover\:listenup-bg-neutral-100:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(249 249 249/var(--tw-bg-opacity))
      }

      .hover\:listenup-bg-neutral-300\/70:hover {
        background-color: #eaeaeab3
      }

      .hover\:listenup-bg-primary-300:hover,
      .focus\:listenup-bg-primary-300:focus {
        --tw-bg-opacity: 1;
        background-color: rgb(236 235 253/var(--tw-bg-opacity))
      }
    </style>
    <div id="plasmo-shadow-container" style="z-index: 2147483647; position: relative;">
      <div class="plasmo-csui-container" id="plasmo-overlay-0"
        style="display: flex; position: absolute; top: 0px; left: 0px;">
        <div class="listenup-h-fit listenup-w-fit"></div>
      </div>
    </div>
  </template></plasmo-csui>

<head>
  @include('fonts')
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
  <meta content="width=device-width" name="viewport" />
  <title>Analytics | ListenUp!</title>
  <meta content="3" name="next-head-count" />
  <link as="style" href="{{ asset("/assets/b08c6edf6d5dd570.css") }}" rel="preload" />
  <link data-n-g="" href="{{ asset("/assets/b08c6edf6d5dd570.css") }}" rel="stylesheet" /><noscript
    data-n-css=""></noscript>
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
      --toast-close-button-transform: translate(-35%, -35%)
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
      --toast-close-button-transform: translate(35%, -35%)
    }

    :where([data-sonner-toaster]) {
      position: fixed;
      width: var(--width);
      font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
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
      z-index: 999999999
    }

    :where([data-sonner-toaster][data-x-position="right"]) {
      right: max(var(--offset), env(safe-area-inset-right))
    }

    :where([data-sonner-toaster][data-x-position="left"]) {
      left: max(var(--offset), env(safe-area-inset-left))
    }

    :where([data-sonner-toaster][data-x-position="center"]) {
      left: 50%;
      transform: translate(-50%)
    }

    :where([data-sonner-toaster][data-y-position="top"]) {
      top: max(var(--offset), env(safe-area-inset-top))
    }

    :where([data-sonner-toaster][data-y-position="bottom"]) {
      bottom: max(var(--offset), env(safe-area-inset-bottom))
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
      transition: transform .4s, opacity .4s, height .4s, box-shadow .2s;
      box-sizing: border-box;
      outline: none;
      overflow-wrap: anywhere
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
      gap: 6px
    }

    :where([data-sonner-toast]:focus-visible) {
      box-shadow: 0 4px 12px #0000001a, 0 0 0 2px #0003
    }

    :where([data-sonner-toast][data-y-position="top"]) {
      top: 0;
      --y: translateY(-100%);
      --lift: 1;
      --lift-amount: calc(1 * var(--gap))
    }

    :where([data-sonner-toast][data-y-position="bottom"]) {
      bottom: 0;
      --y: translateY(100%);
      --lift: -1;
      --lift-amount: calc(var(--lift) * var(--gap))
    }

    :where([data-sonner-toast]) :where([data-description]) {
      font-weight: 400;
      line-height: 1.4;
      color: inherit
    }

    :where([data-sonner-toast]) :where([data-title]) {
      font-weight: 500;
      line-height: 1.5;
      color: inherit
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
      margin-right: var(--toast-icon-margin-end)
    }

    :where([data-sonner-toast][data-promise="true"]) :where([data-icon])>svg {
      opacity: 0;
      transform: scale(.8);
      transform-origin: center;
      animation: sonner-fade-in .3s ease forwards
    }

    :where([data-sonner-toast]) :where([data-icon])>* {
      flex-shrink: 0
    }

    :where([data-sonner-toast]) :where([data-icon]) svg {
      margin-left: var(--toast-svg-margin-start);
      margin-right: var(--toast-svg-margin-end)
    }

    :where([data-sonner-toast]) :where([data-content]) {
      display: flex;
      flex-direction: column;
      gap: 2px
    }

    [data-sonner-toast][data-styled=true] [data-button] {
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
      transition: opacity .4s, box-shadow .2s
    }

    :where([data-sonner-toast]) :where([data-button]):focus-visible {
      box-shadow: 0 0 0 2px #0006
    }

    :where([data-sonner-toast]) :where([data-button]):first-of-type {
      margin-left: var(--toast-button-margin-start);
      margin-right: var(--toast-button-margin-end)
    }

    :where([data-sonner-toast]) :where([data-cancel]) {
      color: var(--normal-text);
      background: rgba(0, 0, 0, .08)
    }

    :where([data-sonner-toast][data-theme="dark"]) :where([data-cancel]) {
      background: rgba(255, 255, 255, .3)
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
      transition: opacity .1s, background .2s, border-color .2s
    }

    :where([data-sonner-toast]) :where([data-close-button]):focus-visible {
      box-shadow: 0 4px 12px #0000001a, 0 0 0 2px #0003
    }

    :where([data-sonner-toast]) :where([data-disabled="true"]) {
      cursor: not-allowed
    }

    :where([data-sonner-toast]):hover :where([data-close-button]):hover {
      background: var(--gray2);
      border-color: var(--gray5)
    }

    :where([data-sonner-toast][data-swiping="true"]):before {
      content: "";
      position: absolute;
      left: 0;
      right: 0;
      height: 100%;
      z-index: -1
    }

    :where([data-sonner-toast][data-y-position="top"][data-swiping="true"]):before {
      bottom: 50%;
      transform: scaleY(3) translateY(50%)
    }

    :where([data-sonner-toast][data-y-position="bottom"][data-swiping="true"]):before {
      top: 50%;
      transform: scaleY(3) translateY(-50%)
    }

    :where([data-sonner-toast][data-swiping="false"][data-removed="true"]):before {
      content: "";
      position: absolute;
      inset: 0;
      transform: scaleY(2)
    }

    :where([data-sonner-toast]):after {
      content: "";
      position: absolute;
      left: 0;
      height: calc(var(--gap) + 1px);
      bottom: 100%;
      width: 100%
    }

    :where([data-sonner-toast][data-mounted="true"]) {
      --y: translateY(0);
      opacity: 1
    }

    :where([data-sonner-toast][data-expanded="false"][data-front="false"]) {
      --scale: var(--toasts-before) * .05 + 1;
      --y: translateY(calc(var(--lift-amount) * var(--toasts-before))) scale(calc(-1 * var(--scale)));
      height: var(--front-toast-height)
    }

    :where([data-sonner-toast])>* {
      transition: opacity .4s
    }

    :where([data-sonner-toast][data-expanded="false"][data-front="false"][data-styled="true"])>* {
      opacity: 0
    }

    :where([data-sonner-toast][data-visible="false"]) {
      opacity: 0;
      pointer-events: none
    }

    :where([data-sonner-toast][data-mounted="true"][data-expanded="true"]) {
      --y: translateY(calc(var(--lift) * var(--offset)));
      height: var(--initial-height)
    }

    :where([data-sonner-toast][data-removed="true"][data-front="true"][data-swipe-out="false"]) {
      --y: translateY(calc(var(--lift) * -100%));
      opacity: 0
    }

    :where([data-sonner-toast][data-removed="true"][data-front="false"][data-swipe-out="false"][data-expanded="true"]) {
      --y: translateY(calc(var(--lift) * var(--offset) + var(--lift) * -100%));
      opacity: 0
    }

    :where([data-sonner-toast][data-removed="true"][data-front="false"][data-swipe-out="false"][data-expanded="false"]) {
      --y: translateY(40%);
      opacity: 0;
      transition: transform .5s, opacity .2s
    }

    :where([data-sonner-toast][data-removed="true"][data-front="false"]):before {
      height: calc(var(--initial-height) + 20%)
    }

    [data-sonner-toast][data-swiping=true] {
      transform: var(--y) translateY(var(--swipe-amount, 0px));
      transition: none
    }

    [data-sonner-toast][data-swipe-out=true][data-y-position=bottom],
    [data-sonner-toast][data-swipe-out=true][data-y-position=top] {
      animation: swipe-out .2s ease-out forwards
    }

    @keyframes swipe-out {
      0% {
        transform: translateY(calc(var(--lift) * var(--offset) + var(--swipe-amount)));
        opacity: 1
      }

      to {
        transform: translateY(calc(var(--lift) * var(--offset) + var(--swipe-amount) + var(--lift) * -100%));
        opacity: 0
      }
    }

    @media (max-width: 600px) {
      [data-sonner-toaster] {
        position: fixed;
        --mobile-offset: 16px;
        right: var(--mobile-offset);
        left: var(--mobile-offset);
        width: 100%
      }

      [data-sonner-toaster] [data-sonner-toast] {
        left: 0;
        right: 0;
        width: calc(100% - var(--mobile-offset) * 2)
      }

      [data-sonner-toaster][data-x-position=left] {
        left: var(--mobile-offset)
      }

      [data-sonner-toaster][data-y-position=bottom] {
        bottom: 20px
      }

      [data-sonner-toaster][data-y-position=top] {
        top: 20px
      }

      [data-sonner-toaster][data-x-position=center] {
        left: var(--mobile-offset);
        right: var(--mobile-offset);
        transform: none
      }
    }

    [data-sonner-toaster][data-theme=light] {
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
      --error-text: hsl(360, 100%, 45%)
    }

    [data-sonner-toaster][data-theme=light] [data-sonner-toast][data-invert=true] {
      --normal-bg: #000;
      --normal-border: hsl(0, 0%, 20%);
      --normal-text: var(--gray1)
    }

    [data-sonner-toaster][data-theme=dark] [data-sonner-toast][data-invert=true] {
      --normal-bg: #fff;
      --normal-border: var(--gray3);
      --normal-text: var(--gray12)
    }

    [data-sonner-toaster][data-theme=dark] {
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
      --error-text: hsl(358, 100%, 81%)
    }

    [data-rich-colors=true][data-sonner-toast][data-type=success],
    [data-rich-colors=true][data-sonner-toast][data-type=success] [data-close-button] {
      background: var(--success-bg);
      border-color: var(--success-border);
      color: var(--success-text)
    }

    [data-rich-colors=true][data-sonner-toast][data-type=info],
    [data-rich-colors=true][data-sonner-toast][data-type=info] [data-close-button] {
      background: var(--info-bg);
      border-color: var(--info-border);
      color: var(--info-text)
    }

    [data-rich-colors=true][data-sonner-toast][data-type=warning],
    [data-rich-colors=true][data-sonner-toast][data-type=warning] [data-close-button] {
      background: var(--warning-bg);
      border-color: var(--warning-border);
      color: var(--warning-text)
    }

    [data-rich-colors=true][data-sonner-toast][data-type=error],
    [data-rich-colors=true][data-sonner-toast][data-type=error] [data-close-button] {
      background: var(--error-bg);
      border-color: var(--error-border);
      color: var(--error-text)
    }

    .sonner-loading-wrapper {
      --size: 16px;
      height: var(--size);
      width: var(--size);
      position: absolute;
      inset: 0;
      z-index: 10
    }

    .sonner-loading-wrapper[data-visible=false] {
      transform-origin: center;
      animation: sonner-fade-out .2s ease forwards
    }

    .sonner-spinner {
      position: relative;
      top: 50%;
      left: 50%;
      height: var(--size);
      width: var(--size)
    }

    .sonner-loading-bar {
      animation: sonner-spin 1.2s linear infinite;
      background: var(--gray11);
      border-radius: 6px;
      height: 8%;
      left: -10%;
      position: absolute;
      top: -3.9%;
      width: 24%
    }

    .sonner-loading-bar:nth-child(1) {
      animation-delay: -1.2s;
      transform: rotate(.0001deg) translate(146%)
    }

    .sonner-loading-bar:nth-child(2) {
      animation-delay: -1.1s;
      transform: rotate(30deg) translate(146%)
    }

    .sonner-loading-bar:nth-child(3) {
      animation-delay: -1s;
      transform: rotate(60deg) translate(146%)
    }

    .sonner-loading-bar:nth-child(4) {
      animation-delay: -.9s;
      transform: rotate(90deg) translate(146%)
    }

    .sonner-loading-bar:nth-child(5) {
      animation-delay: -.8s;
      transform: rotate(120deg) translate(146%)
    }

    .sonner-loading-bar:nth-child(6) {
      animation-delay: -.7s;
      transform: rotate(150deg) translate(146%)
    }

    .sonner-loading-bar:nth-child(7) {
      animation-delay: -.6s;
      transform: rotate(180deg) translate(146%)
    }

    .sonner-loading-bar:nth-child(8) {
      animation-delay: -.5s;
      transform: rotate(210deg) translate(146%)
    }

    .sonner-loading-bar:nth-child(9) {
      animation-delay: -.4s;
      transform: rotate(240deg) translate(146%)
    }

    .sonner-loading-bar:nth-child(10) {
      animation-delay: -.3s;
      transform: rotate(270deg) translate(146%)
    }

    .sonner-loading-bar:nth-child(11) {
      animation-delay: -.2s;
      transform: rotate(300deg) translate(146%)
    }

    .sonner-loading-bar:nth-child(12) {
      animation-delay: -.1s;
      transform: rotate(330deg) translate(146%)
    }

    @keyframes sonner-fade-in {
      0% {
        opacity: 0;
        transform: scale(.8)
      }

      to {
        opacity: 1;
        transform: scale(1)
      }
    }

    @keyframes sonner-fade-out {
      0% {
        opacity: 1;
        transform: scale(1)
      }

      to {
        opacity: 0;
        transform: scale(.8)
      }
    }

    @keyframes sonner-spin {
      0% {
        opacity: 1
      }

      to {
        opacity: .15
      }
    }

    @media (prefers-reduced-motion) {

      [data-sonner-toast],
      [data-sonner-toast]>*,
      .sonner-loading-bar {
        transition: none !important;
        animation: none !important
      }
    }

    .sonner-loader {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      transform-origin: center;
      transition: opacity .2s, transform .2s
    }

    .sonner-loader[data-visible=false] {
      opacity: 0;
      transform: scale(.8) translate(-50%, -50%)
    }
  </style>

</head>

<body>
  <div id="__next">
    <div>
      <div>
        <div class="bg-primary-100 bg-dot-grid-pattern bg-repeat bg-pattern w-screen h-screen">
          <section class="flex justify-between pr-4 bg-neutral-50 border-neutral-400 items-center h-[4rem] border-b-1"
            id="app-navbar">
            <section class="flex items-center flex-grow basis-0 justify-start"><button data-state="closed">
                <div
                  class="w-52 flex flex-col justify-start items-start pl-4 hover:cursor-cool-clickable disabled:cursor-cool-normal">
                  <img alt="ListenUp Navbar Logo" data-nimg="1" decoding="async" height="25" loading="lazy"
                    src="{{ asset("assets/logo.png") }}" style="color: transparent;" width="120" />
                  <section
                    class="rounded-full bg-primary-400 border-1 border-primary-600 px-1.5 py-1 flex items-center justify-center gap-1">
                    <p class="text-xs text-primary-600"><strong>300 credits left</strong></p>
                    <p class="text-xs text-primary-600">|</p>
                    <p class="text-xs text-primary-600"><strong>14 days left </strong></p>
                  </section>
                </div>
              </button></section>
            <section class="flex items-center justify-center">
              <div class="relative h-fit select-none w-full" data-orientation="horizontal" dir="ltr">
                <div aria-orientation="horizontal" class="rounded flex flex-row w-full justify-evenly gap-2"
                  data-orientation="horizontal" role="tablist" style="outline: none;" tabindex="0"><a
                    aria-controls="radix-:r4d:-content-home" aria-selected="false"
                    class="px-3 py-2 rounded border-opacity-0 flex items-center z-10 hover:bg-neutral-100 hover:transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal w-fit justify-center"
                    data-orientation="horizontal" data-radix-collection-item="" data-state="inactive"
                    href="{{ route("home") }}" id="radix-:r4d:-trigger-home" role="tab" tabindex="-1" type="button">
                    <div class="flex items-center justify-center gap-2 py-1"><svg class="h-6 w-6" data-name="Layer 3"
                        style="max-width: 50vw; max-height: 50vh;" viewbox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0h24v24H0Z" fill="none"></path>
                        <path class="stroke-1.5 stroke-neutral-700 stroke-neutral-700"
                          d="M15.3 15.918H8.564M16 21H8a5 5 0 0 1-5-5v-4.8a5 5 0 0 1 1.877-3.904l4-3.2a5 5 0 0 1 6.247 0l4 3.2A5 5 0 0 1 21 11.2V16a5 5 0 0 1-5 5Z"
                          fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                      <h5 class="font-bold">Home</h5>
                    </div>
                  </a><a aria-controls="radix-:r4d:-content-captures" aria-selected="false"
                    class="px-3 py-2 rounded border-opacity-0 flex items-center z-10 hover:bg-neutral-100 hover:transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal w-fit justify-center"
                    data-orientation="horizontal" data-radix-collection-item="" data-state="inactive"
                    href="{{ route("captures") }}" id="radix-:r4d:-trigger-captures" role="tab" tabindex="-1"
                    type="button">
                    <div class="flex items-center justify-center gap-2 py-1"><svg class="h-6 w-6" fill="none"
                        style="max-width: 50vw; max-height: 50vh;" viewbox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path class="stroke-1.5 stroke-neutral-700"
                          d="M4 8V6a2 2 0 0 1 2-2h2M4 16v2a2 2 0 0 0 2 2h2m8-16h2a2 2 0 0 1 2 2v2m-4 12h2a2 2 0 0 0 2-2v-2M9 12a3 3 0 1 0 6 0 3 3 0 0 0-6 0Z"
                          stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                      <h5 class="font-bold">Inbox</h5>
                    </div>
                  </a><a aria-controls="radix-:r4d:-content-insights" aria-selected="false"
                    class="px-3 py-2 rounded border-opacity-0 flex items-center z-10 hover:bg-neutral-100 hover:transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal w-fit justify-center"
                    data-orientation="horizontal" data-radix-collection-item="" data-state="inactive"
                    href="{{ route("meetings") }}" id="radix-:r4d:-trigger-insights" role="tab" tabindex="-1"
                    type="button">
                    <div class="flex items-center justify-center gap-2 py-1"><svg class="h-6 w-6"
                        style="max-width: 50vw; max-height: 50vh;" viewbox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path class="stroke-1.5 stroke-neutral-700" d="M12.967 3 4.75 14H12l-.967 7 8.217-11H12Z"
                          fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M0 0h24v24H0Z" fill="none"></path>
                      </svg>
                      <h5 class="font-bold">Meetings</h5>
                    </div>
                  </a><a aria-controls="radix-:r4d:-content-analytics" aria-selected="true"
                    class="px-3 py-2 rounded border-opacity-0 flex items-center z-10 hover:cursor-cool-clickable disabled:cursor-cool-normal w-fit justify-center"
                    data-orientation="horizontal" data-radix-collection-item="" data-state="active"
                    href="{{ route("analytics") }}" id="radix-:r4d:-trigger-analytics" role="tab" tabindex="-1"
                    type="button">
                    <div class="flex items-center justify-center gap-2 py-1"><svg class="h-6 w-6"
                        style="max-width: 50vw; max-height: 50vh;" viewbox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path class="stroke-1.5 stroke-neutral-700"
                          d="M16.5 3.5h3A1.5 1.5 0 0 1 21 5v14a1.5 1.5 0 0 1-1.5 1.5H15h0V5a1.5 1.5 0 0 1 1.5-1.5ZM15 20.5H9v-10A1.5 1.5 0 0 1 10.5 9H15M4.5 15H9v5.5h0-4.5A1.5 1.5 0 0 1 3 19v-2.5A1.5 1.5 0 0 1 4.5 15Z"
                          fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M24 24H0V0h24Z" fill="none"></path>
                      </svg>
                      <h5 class="font-bold">Analytics</h5>
                    </div>
                  </a><a aria-controls="radix-:r4d:-content-users" aria-selected="false"
                    class="px-3 py-2 rounded border-opacity-0 flex items-center z-10 hover:bg-neutral-100 hover:transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal w-fit justify-center"
                    data-orientation="horizontal" data-radix-collection-item="" data-state="inactive"
                    href="{{ route("friends") }}" id="radix-:r4d:-trigger-users" role="tab" tabindex="-1" type="button">
                    <div class="flex items-center justify-center gap-2 py-1"><svg class="h-6 w-6 stroke-1.5"
                        style="max-width: 50vw; max-height: 50vh;" viewbox="0 0 24 24"
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
                  </a></div>
                <div class="absolute top-0 left-0 rounded bg-neutral-200 border-1 border-neutral-400"
                  style="width: 119px; height: 48px; transform: translateX(335px) translateY(0px) translateZ(0px);">
                </div>
              </div>
            </section>
            <div class="flex items-center justify-end gap-2 flex-grow basis-0"><button
                class="flex items-center font-bold rounded text-base font-bold px-3 py-3" tabindex="0">
                <div class="flex items-center gap-2"><svg class="h-4 w-4" style="max-width: 50vw; max-height: 50vh;"
                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path class="stroke-2 stroke-neutral-600" d="M12.967 3 4.75 14H12l-.967 7 8.217-11H12Z" fill="none"
                      stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M0 0h24v24H0Z" fill="none"></path>
                  </svg>
                  <p class="text-neutral-600">Send us a feedback</p>
                </div>
              </button><button aria-expanded="false" aria-haspopup="menu"
                class="flex items-center justify-center w-fit rounded font-medium transition-colors select-none text-neutral-600 px-3 py-2"
                data-state="closed" id="profile" tabindex="0" type="button">
                <div class="flex flex-row items-center justify-center gap-2 text-left mr-2">
                  <div class="relative">
                    <div
                      class="rounded-full border-neutral-700 relative overflow-hidden flex items-center justify-center bg-primary-500 relative w-10 h-10 min-w-[2.5rem] min-h-[2.5rem] border-1">
                      <img alt="Avatar" class="object-cover"
                        src="{{ auth()->user()->avatar ? asset('storage/' . auth()->user()->avatar) : asset('assets/member_avatar_453.png') }}"
                        style="height:100%" /></div>
                    <div class="absolute -bottom-1 -right-1">
                      <div
                        class="rounded-full border-neutral-700 relative overflow-hidden flex items-center justify-center bg-primary-500 relative w-5 h-5 min-w-[1rem] min-h-[1rem] border-1">
                        <img alt="Avatar" class="object-cover" src="{{asset("assets/organization_avatar_508.png")}}" />
                      </div>
                    </div>
                  </div>
                  <h5 class="font-bold">{{ auth()->user()->name}}</h5>
                </div>
                <div><svg class="h-6" style="max-width: 50vw; max-height: 50vh;" viewbox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path class="stroke-2 stroke-neutral-700" d="m8 10 4 4 4-4" fill="none" stroke="#323232"
                      stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M0 0h24v24H0Z" fill="none"></path>
                  </svg></div>
              </button></div>
          </section>
          <div class="flex">
            <section class="h-[calc(100vh-4rem)] w-screen">
              <div class="h-full w-full flex flex-row flex-wrap justify-start bg-neutral-100 overflow-y-auto">
                <section class="my-2 px-14 sticky self-start top-2 z-20 flex items-center justify-between">
                  <div
                    class="bg-neutral-50 border-[0.13rem] border-neutral-400 border-dashed p-2 w-fit h-16 rounded flex items-center gap-2 shadow-lg">
                    <div><button id="tagsButton" aria-expanded="false" aria-haspopup="menu"
                        class="flex items-center justify-center w-fit rounded font-medium transition-colors select-none bg-neutral-200 border-1 border-neutral-300 hover:bg-neutral-300/70 px-3 py-2"
                        data-state="closed" id="radix-:r4l:" tabindex="0" type="button">
                        <div class="flex items-center text-left"><svg class="h-5"
                            style="max-width: 50vw; max-height: 50vh;" viewbox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                              <path d="M24 0H0v24h24V0Z" id="a"></path>
                            </defs>
                            <g fill="none">
                              <use xlink:href="#a"></use>
                              <use xlink:href="#a"></use>
                              <path class="stroke-2 stroke-neutral-700"
                                d="M9.165 10.146a.367.367 0 1 1-.52.519.367.367 0 0 1 .52-.52" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                              <path class="stroke-2 stroke-neutral-700"
                                d="m11.71 6.29 7.21 7.21a1.977 1.977 0 0 1 0 2.796l-4.124 4.124a1.977 1.977 0 0 1-2.796 0l-7.21-7.21a.99.99 0 0 1-.29-.699V6.989A.99.99 0 0 1 5.489 6h5.523c.262 0 .513.104.698.29ZM19.5 10l-6.506-6.423A2 2 0 0 0 11.589 3H7.5"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                          </svg>
                          <h5 class="px-2">Tags</h5>
                        </div>
                        <div style="transform: none;"><svg class="h-6" style="max-width: 50vw; max-height: 50vh;"
                            viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path class="stroke-2 stroke-neutral-700" d="m8 10 4 4 4-4" fill="none" stroke="#323232"
                              stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M0 0h24v24H0Z" fill="none"></path>
                          </svg></div>
                      </button></div>
                    <div><button id="dateButton" aria-expanded="false" aria-haspopup="menu"
                        class="flex items-center justify-center w-fit rounded font-medium transition-colors select-none bg-neutral-200 border-1 border-neutral-300 hover:bg-neutral-300/70 px-3 py-2"
                        data-state="closed" id="radix-:r4n:" tabindex="0" type="button">
                        <div class="flex items-center text-left"><svg class="h-5"
                            style="max-width: 50vw; max-height: 50vh;" viewbox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path class="stroke-2 stroke-neutral-700"
                              d="m7.5 12.995.005.005-.005.005L7.495 13l.005-.005M10.5 12.995l.005.005-.005.005-.005-.005.005-.005M13.5 12.995l.005.005-.005.005-.005-.005.005-.005M16.5 12.995l.005.005-.005.005-.005-.005.005-.005M7.5 15.995l.005.005-.005.005L7.495 16l.005-.005M10.5 15.995l.005.005-.005.005-.005-.005.005-.005M13.5 15.995l.005.005-.005.005-.005-.005.005-.005"
                              fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                            <rect class="stroke-2 stroke-neutral-700" fill="none" height="18" rx="5"
                              stroke-linecap="round" stroke-linejoin="round" width="18" x="3" y="3"></rect>
                            <path class="stroke-2 stroke-neutral-700" d="M3 9h18" fill="none" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                            <path d="M24 24H0V0h24Z" fill="none"></path>
                          </svg>
                          <h5 class="px-2">Dates</h5>
                        </div>
                        <div style="transform: none;"><svg class="h-6" style="max-width: 50vw; max-height: 50vh;"
                            viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path class="stroke-2 stroke-neutral-700" d="m8 10 4 4 4-4" fill="none" stroke="#323232"
                              stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M0 0h24v24H0Z" fill="none"></path>
                          </svg></div>
                      </button></div>
                    <div><button id="sourcesButton" aria-expanded="false" aria-haspopup="menu"
                        class="flex items-center justify-center w-fit rounded font-medium transition-colors select-none bg-neutral-200 border-1 border-neutral-300 hover:bg-neutral-300/70 px-3 py-2"
                        data-state="closed" id="radix-:r4p:" tabindex="0" type="button">
                        <div class="flex items-center text-left"><svg class="h-5" fill="none"
                            style="max-width: 50vw; max-height: 50vh;" viewbox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path class="stroke-2 stroke-neutral-700"
                              d="M4 8V6a2 2 0 0 1 2-2h2M4 16v2a2 2 0 0 0 2 2h2m8-16h2a2 2 0 0 1 2 2v2m-4 12h2a2 2 0 0 0 2-2v-2M9 12a3 3 0 1 0 6 0 3 3 0 0 0-6 0Z"
                              stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                          <h5 class="px-2">Sources</h5>
                        </div>
                        <div style="transform: none;"><svg class="h-6" style="max-width: 50vw; max-height: 50vh;"
                            viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path class="stroke-2 stroke-neutral-700" d="m8 10 4 4 4-4" fill="none" stroke="#323232"
                              stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M0 0h24v24H0Z" fill="none"></path>
                          </svg></div>
                      </button></div>
                  </div>
                </section>
                <div class="my-4 px-14 relative w-full">
                  <div class="">
                    <div class="w-full flex flex-row mb-6">
                      <div class="flex-1 mr-6" style="height: 300px; width: 20%; min-width: 100px; min-height: 100px;">
                        <div
                          class="h-full w-full bg-neutral-50 border-1 border-neutral-400 rounded flex flex-col overflow-hidden">
                          <section class="w-full h-fit flex items-center gap-2 p-3 border-b-1 border-neutral-400"><svg
                              class="h-5 w-5" style="max-width: 50vw; max-height: 50vh;" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <g fill="none">
                                <path d="M0 0h24v24H0Z"></path>
                                <path class="stroke-2 stroke-neutral-700" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z"
                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                <path class="stroke-2 stroke-neutral-700" d="M21 10a7 7 0 0 0-7-7v7h7Z"
                                  stroke-linecap="round" stroke-linejoin="round"></path>
                              </g>
                            </svg>
                            <h4>Capture sources</h4>
                          </section>
                          <section class="h-full w-full">
                            <div class="h-full w-full">
                              <div class="h-full w-full flex flex-col relative">
                                <div class="h-full w-full flex flex-col">
                                  <div class="h-full w-full"><svg class="h-full w-full">
                                      <g class="visx-group" transform="translate(207.5, 112.5)">
                                        <g>
                                          <path
                                            d="M0.8788448841694905,-94.42036095231025A3,3,0,0,1,4.001982817000268,-97.41783272857407A97.5,97.5,0,1,1,-39.98817201228357,88.92241617902665A3,3,0,0,1,-41.44103207277273,84.84466860939706L-29.575685821581136,61.114693314113154A3,3,0,0,1,-25.7059901536237,59.70093860419449A65,65,0,1,0,3.7077193745737764,-64.89416627894538A3,3,0,0,1,0.8788448841694869,-67.88928164566592Z"
                                            fill="#7357F6"></path>
                                        </g>
                                        <g>
                                          <path
                                            d="M-43.01314809177737,84.05858684233165A3,3,0,0,1,-47.14709323685541,85.34284738228074A97.5,97.5,0,0,1,-95.29350780836947,-20.625163504230116A3,3,0,0,1,-91.60696304453786,-22.894131397623607L-65.92851914537442,-16.222123596896335A3,3,0,0,1,-63.741060860024305,-12.730952848812127A65,65,0,0,0,-32.33852011168288,56.38457339544462A3,3,0,0,1,-31.147801840585746,60.32861154704778Z"
                                            fill="#EE7D60"></path>
                                        </g>
                                        <g>
                                          <path
                                            d="M-91.16494107814621,-24.595333884969207A3,3,0,0,1,-93.280678984876,-28.37190385082596A97.5,97.5,0,0,1,-70.22067865737417,-67.64101040713243A3,3,0,0,1,-65.89184906970941,-67.63313652988168L-47.55544208011958,-48.458300210174265A3,3,0,0,1,-47.52994560428284,-44.338519042181765A65,65,0,0,0,-61.87623415590536,-19.90807993462883A3,3,0,0,1,-65.48649717898277,-17.923326084241893Z"
                                            fill="#97DFD8"></path>
                                        </g>
                                        <g>
                                          <path
                                            d="M-64.62151199750878,-68.8479274768007A3,3,0,0,1,-64.43596371356526,-73.1727857902383A97.5,97.5,0,0,1,-48.43219494864411,-84.6201659916626A3,3,0,0,1,-44.27930280016069,-83.39856278274024L-32.05648580212819,-59.85071970087692A3,3,0,0,1,-33.18742907194804,-55.889127311082774A65,65,0,0,0,-42.17057734751874,-49.46354623535336A3,3,0,0,1,-46.28510500791898,-49.67309115709326Z"
                                            fill="#EFBE56"></path>
                                        </g>
                                        <g>
                                          <path
                                            d="M-42.719253079866114,-84.20832706444972A3,3,0,0,1,-41.32821984820894,-88.30757750146988A97.5,97.5,0,0,1,-26.98667852787863,-93.69081695680177A3,3,0,0,1,-23.241871359523326,-91.5193550370759L-16.951065494210074,-65.74487287466592A3,3,0,0,1,-18.98909361780869,-62.16441364296856A65,65,0,0,0,-26.60580508183902,-59.305405621639494A3,3,0,0,1,-30.496436081833654,-60.66048398258637Z"
                                            fill="#A75E6E"></path>
                                        </g>
                                        <g>
                                          <path
                                            d="M-21.534306316371882,-91.93612229242459A3,3,0,0,1,-19.210965105981526,-95.58864377998445A97.5,97.5,0,0,1,-4.001982817000391,-97.41783272857406A3,3,0,0,1,-0.878844884169605,-94.42036095231023L-0.8788448841695571,-67.88928164566592A3,3,0,0,1,-3.7077193745738417,-64.89416627894536A65,65,0,0,0,-11.785123829874674,-63.92269437621133A3,3,0,0,1,-15.24350045105867,-66.1616401300146Z"
                                            fill="#84BCEF"></path>
                                        </g><text style="font-size: 1.5rem; font-weight: bold;" text-anchor="middle">
                                          <tspan dy="0em" x="0">54K</tspan>
                                          <tspan class="p" dy="1.4em" style="color: rgb(163, 163, 163);" x="0">captures
                                          </tspan>
                                        </text>
                                      </g>
                                    </svg></div>
                                  <div class="w-full h-fit pb-2 pl-2">
                                    <div
                                      class="w-full flex items-center gap-4 overflow-x-auto no-scrollbar justify-start">
                                      <div class="inline-flex items-center gap-4 false">
                                        <div class="flex gap-2 items-center h-fit">
                                          <div class="w-4 h-4 min-h-4 min-w-4 rounded-md"
                                            style="background-color: rgb(115, 87, 246);"></div>
                                          <p class="text-small whitespace-nowrap max-w-[250px] overflow-hidden"><span
                                              class="text-neutral-500 block overflow-hidden text-ellipsis whitespace-nowrap">Intercom</span>
                                          </p>
                                        </div>
                                        <div class="flex gap-2 items-center h-fit">
                                          <div class="w-4 h-4 min-h-4 min-w-4 rounded-md"
                                            style="background-color: rgb(238, 125, 96);"></div>
                                          <p class="text-small whitespace-nowrap max-w-[250px] overflow-hidden"><span
                                              class="text-neutral-500 block overflow-hidden text-ellipsis whitespace-nowrap">Slack</span>
                                          </p>
                                        </div>
                                        <div class="flex gap-2 items-center h-fit">
                                          <div class="w-4 h-4 min-h-4 min-w-4 rounded-md"
                                            style="background-color: rgb(151, 223, 216);"></div>
                                          <p class="text-small whitespace-nowrap max-w-[250px] overflow-hidden"><span
                                              class="text-neutral-500 block overflow-hidden text-ellipsis whitespace-nowrap">Chrome
                                              Extension</span></p>
                                        </div>
                                        <div class="flex gap-2 items-center h-fit">
                                          <div class="w-4 h-4 min-h-4 min-w-4 rounded-md"
                                            style="background-color: rgb(239, 190, 86);"></div>
                                          <p class="text-small whitespace-nowrap max-w-[250px] overflow-hidden"><span
                                              class="text-neutral-500 block overflow-hidden text-ellipsis whitespace-nowrap">In-app
                                              feedback</span></p>
                                        </div>
                                        <div class="flex gap-2 items-center h-fit">
                                          <div class="w-4 h-4 min-h-4 min-w-4 rounded-md"
                                            style="background-color: rgb(167, 94, 110);"></div>
                                          <p class="text-small whitespace-nowrap max-w-[250px] overflow-hidden"><span
                                              class="text-neutral-500 block overflow-hidden text-ellipsis whitespace-nowrap">G2</span>
                                          </p>
                                        </div>
                                        <div class="flex gap-2 items-center h-fit">
                                          <div class="w-4 h-4 min-h-4 min-w-4 rounded-md"
                                            style="background-color: rgb(132, 188, 239);"></div>
                                          <p class="text-small whitespace-nowrap max-w-[250px] overflow-hidden"><span
                                              class="text-neutral-500 block overflow-hidden text-ellipsis whitespace-nowrap">Trustpilot</span>
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <section class="absolute h-full w-full flex items-center justify-center">
                                  <div
                                    class="bg-neutral-100 p-2 flex items-center justify-center border-1 border-neutral-400 rounded shadow-smooth z-10 translate-y-3">
                                    <h5 class="text-neutral-600">Not enough data</h5>
                                  </div>
                                  <div class="h-full w-full bg-neutral-100 opacity-70 absolute"></div>
                                </section>
                              </div>
                            </div>
                          </section>
                        </div>
                      </div>
                      <div class="flex-1 mr-6" style="height: 300px; width: 20%; min-width: 100px; min-height: 100px;">
                        <div
                          class="h-full w-full bg-neutral-50 border-1 border-neutral-400 rounded flex flex-col overflow-hidden">
                          <section class="w-full h-fit flex items-center gap-2 p-3 border-b-1 border-neutral-400"><svg
                              class="h-5 w-5" style="max-width: 50vw; max-height: 50vh;" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M0 0h24v24H0z" fill="none"></path>
                              <path class="stroke-2 stroke-neutral-700"
                                d="M14.75 15v4a2 2 0 0 1-2 2h-1.5a2 2 0 0 1-2-2v-4L3.508 8.57A2 2 0 0 1 3 7.236V6c0-1.657 4.03-3 9-3s9 1.343 9 3v1.237a2 2 0 0 1-.508 1.332Z"
                                fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                              <path class="stroke-2 stroke-neutral-700" d="M21 6c0 1.657-4.03 3-9 3S3 7.657 3 6"
                                fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <h4>Captures over time</h4>
                          </section>
                          <section class="h-full w-full">
                            <div class="h-full w-full flex flex-col relative">
                              <div class="h-full w-full">
                                <div style="width: 100%; height: 100%;"><svg aria-label="XYChart" height="249"
                                    width="415">
                                    <g class="visx-group visx-axis" transform="translate(0, 219)">
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)">
                                        <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                          stroke="#EAEAEA" stroke-linecap="square" stroke-width="1"
                                          x1="51.14285714285714" x2="51.14285714285714" y1="0" y2="4"></line><svg
                                          font-size="12" style="overflow: visible;" x="0" y="0.125em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="51.14285714285714" y="16">
                                            <tspan dy="0em" x="51.14285714285714">Jun</tspan>
                                          </text></svg>
                                      </g>
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)">
                                        <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                          stroke="#EAEAEA" stroke-linecap="square" stroke-width="1"
                                          x1="156.85714285714286" x2="156.85714285714286" y1="0" y2="4"></line><svg
                                          font-size="12" style="overflow: visible;" x="0" y="0.125em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="156.85714285714286" y="16">
                                            <tspan dy="0em" x="156.85714285714286">Jul</tspan>
                                          </text></svg>
                                      </g>
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)">
                                        <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                          stroke="#EAEAEA" stroke-linecap="square" stroke-width="1"
                                          x1="266.0952380952381" x2="266.0952380952381" y1="0" y2="4"></line><svg
                                          font-size="12" style="overflow: visible;" x="0" y="0.125em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="266.0952380952381" y="16">
                                            <tspan dy="0em" x="266.0952380952381">Aug</tspan>
                                          </text></svg>
                                      </g>
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)">
                                        <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                          stroke="#EAEAEA" stroke-linecap="square" stroke-width="1"
                                          x1="375.3333333333333" x2="375.3333333333333" y1="0" y2="4"></line><svg
                                          font-size="12" style="overflow: visible;" x="0" y="0.125em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="375.3333333333333" y="16">
                                            <tspan dy="0em" x="375.3333333333333">Sep</tspan>
                                          </text></svg>
                                      </g>
                                      <line class="visx-line visx-axis-line" fill="transparent"
                                        shape-rendering="crispEdges" stroke="#EAEAEA" stroke-dasharray="#EAEAEA"
                                        stroke-width="1" x1="30.5" x2="400.5" y1="0" y2="0"></line>
                                    </g>
                                    <g class="visx-group visx-axis" transform="translate(30, 0)">
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)"><svg
                                          font-size="12" style="overflow: visible;" x="-1em" y="0.25em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="-4" y="219">
                                            <tspan dy="0em" x="-4">0</tspan>
                                          </text></svg></g>
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)"><svg
                                          font-size="12" style="overflow: visible;" x="-1em" y="0.25em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="-4" y="176.5">
                                            <tspan dy="0em" x="-4">5</tspan>
                                          </text></svg></g>
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)"><svg
                                          font-size="12" style="overflow: visible;" x="-1em" y="0.25em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="-4" y="134">
                                            <tspan dy="0em" x="-4">10</tspan>
                                          </text></svg></g>
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)"><svg
                                          font-size="12" style="overflow: visible;" x="-1em" y="0.25em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="-4" y="91.5">
                                            <tspan dy="0em" x="-4">15</tspan>
                                          </text></svg></g>
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)"><svg
                                          font-size="12" style="overflow: visible;" x="-1em" y="0.25em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="-4" y="48.99999999999999">
                                            <tspan dy="0em" x="-4">20</tspan>
                                          </text></svg></g>
                                    </g>
                                    <g class="visx-group visx-rows" transform="translate(30, 0)">
                                      <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                        stroke="#eaf0f6" stroke-width="1"
                                        style="stroke: rgb(234, 234, 234); stroke-width: 0.5;" x1="0" x2="370" y1="219"
                                        y2="219"></line>
                                      <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                        stroke="#eaf0f6" stroke-width="1"
                                        style="stroke: rgb(234, 234, 234); stroke-width: 0.5;" x1="0" x2="370"
                                        y1="176.5" y2="176.5"></line>
                                      <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                        stroke="#eaf0f6" stroke-width="1"
                                        style="stroke: rgb(234, 234, 234); stroke-width: 0.5;" x1="0" x2="370" y1="134"
                                        y2="134"></line>
                                      <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                        stroke="#eaf0f6" stroke-width="1"
                                        style="stroke: rgb(234, 234, 234); stroke-width: 0.5;" x1="0" x2="370" y1="91.5"
                                        y2="91.5"></line>
                                      <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                        stroke="#eaf0f6" stroke-width="1"
                                        style="stroke: rgb(234, 234, 234); stroke-width: 0.5;" x1="0" x2="370"
                                        y1="48.99999999999999" y2="48.99999999999999"></line>
                                    </g>
                                    <path class="visx-area"
                                      d="M52.007971141975304,15L101.34130447530865,125.50000000000001L150.67463780864196,125.50000000000001L200.0079711419753,57.50000000000001L249.34130447530865,74.5L298.674637808642,83.00000000000001L348.0079711419753,23.499999999999993L348.0079711419753,219L298.674637808642,219L249.34130447530865,219L200.0079711419753,219L150.67463780864196,219L101.34130447530865,219L52.007971141975304,219Z"
                                      fill="#7357F6" fill-opacity="0.3" stroke="transparent" stroke-linecap="round">
                                    </path>
                                    <path class="visx-line"
                                      d="M52.007971141975304,15L101.34130447530865,125.50000000000001L150.67463780864196,125.50000000000001L200.0079711419753,57.50000000000001L249.34130447530865,74.5L298.674637808642,83.00000000000001L348.0079711419753,23.499999999999993"
                                      fill="transparent" pointer-events="none" stroke="#0b7285" stroke-linecap="round"
                                      stroke-width="2"></path>
                                    <path
                                      d="M52.007971141975304,15L101.34130447530865,125.50000000000001L150.67463780864196,125.50000000000001L200.0079711419753,57.50000000000001L249.34130447530865,74.5L298.674637808642,83.00000000000001L348.0079711419753,23.499999999999993"
                                      fill="transparent" stroke="#7357F6" stroke-linecap="round" stroke-width="2">
                                    </path>
                                    <rect fill="transparent" height="204" width="370" x="30" y="15"></rect>
                                  </svg></div>
                              </div>
                              <section class="absolute h-full w-full flex items-center justify-center">
                                <div
                                  class="bg-neutral-100 p-2 flex items-center justify-center border-1 border-neutral-400 rounded shadow-smooth z-10 translate-y-3">
                                  <h5 class="text-neutral-600">Not enough data</h5>
                                </div>
                                <div class="h-full w-full bg-neutral-100 opacity-70 absolute"></div>
                              </section>
                            </div>
                          </section>
                        </div>
                      </div>
                      <div class="flex-1 mr-6" style="height: 300px; width: 20%; min-width: 100px; min-height: 100px;">
                        <div
                          class="h-full w-full bg-neutral-50 border-1 border-neutral-400 rounded flex flex-col overflow-hidden">
                          <section class="w-full h-fit flex items-center gap-2 p-3 border-b-1 border-neutral-400"><svg
                              class="h-5 w-5" style="max-width: 50vw; max-height: 50vh;" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <g fill="none">
                                <path d="M24 0v24H0V0Z"></path>
                                <path class="stroke-2 stroke-neutral-700"
                                  d="M3 21v-4h18v4ZM3 14v-4h12.316v4ZM3 7V3h6.632v4Z" stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                              </g>
                            </svg>
                            <h4>Top patterns</h4>
                          </section>
                          <section class="h-full w-full">
                            <div class="h-full w-full flex flex-col relative">
                              <div class="h-full w-full">
                                <div class="h-full w-full overflow-auto">
                                  <div class="w-full">
                                    <table class="w-full border-separate border-spacing-0">
                                      <tbody class="divide-neutral-200">
                                        <tr
                                          class="bg-neutral-50 transition-colors min-h-[content-height] disabled:cursor-cool-normal">
                                          <td
                                            class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-l border-t-0"
                                            style="width: 50px; max-width: 50px;">
                                            <div class="text-small">
                                              <div class="wrapper flex items-center gap-2 w-full overflow-hidden">
                                                <h5 class="overflow-hidden text-ellipsis whitespace-nowrap">Missing
                                                  collaboration features</h5>
                                              </div>
                                            </div>
                                          </td>
                                          <td
                                            class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0"
                                            style="width: 50px; max-width: 50px;">
                                            <div class="text-small">
                                              <div class="wrapper flex items-center gap-2 w-full">
                                                <div
                                                  class="h-full bg-[#A69BE9] border-1 border-[#b2add4] rounded-sm flex items-center justify-start px-2"
                                                  style="width: 100%;">
                                                  <h5 class="text-neutral-50">2.3K</h5>
                                                </div>
                                              </div>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr
                                          class="bg-neutral-50 transition-colors min-h-[content-height] disabled:cursor-cool-normal">
                                          <td
                                            class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-l border-t-0"
                                            style="width: 50px; max-width: 50px;">
                                            <div class="text-small">
                                              <div class="wrapper flex items-center gap-2 w-full overflow-hidden">
                                                <h5 class="overflow-hidden text-ellipsis whitespace-nowrap">Analytics is
                                                  underwhelming</h5>
                                              </div>
                                            </div>
                                          </td>
                                          <td
                                            class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0"
                                            style="width: 50px; max-width: 50px;">
                                            <div class="text-small">
                                              <div class="wrapper flex items-center gap-2 w-full">
                                                <div
                                                  class="h-full bg-[#A69BE9] border-1 border-[#b2add4] rounded-sm flex items-center justify-start px-2"
                                                  style="width: 78.2609%;">
                                                  <h5 class="text-neutral-50">1.8K</h5>
                                                </div>
                                              </div>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr
                                          class="bg-neutral-50 transition-colors min-h-[content-height] disabled:cursor-cool-normal">
                                          <td
                                            class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-l rounded-bl-lg border-t-0"
                                            style="width: 50px; max-width: 50px;">
                                            <div class="text-small">
                                              <div class="wrapper flex items-center gap-2 w-full overflow-hidden">
                                                <h5 class="overflow-hidden text-ellipsis whitespace-nowrap">Settings are
                                                  unclear</h5>
                                              </div>
                                            </div>
                                          </td>
                                          <td
                                            class="px-3 py-3 whitespace-nowrap border border-neutral-300 rounded-br-lg border-t-0 border-l-0"
                                            style="width: 50px; max-width: 50px;">
                                            <div class="text-small">
                                              <div class="wrapper flex items-center gap-2 w-full">
                                                <div
                                                  class="h-full bg-[#A69BE9] border-1 border-[#b2add4] rounded-sm flex items-center justify-start px-2"
                                                  style="width: 56.5217%;">
                                                  <h5 class="text-neutral-50">1.3K</h5>
                                                </div>
                                              </div>
                                            </div>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                              <section class="absolute h-full w-full flex items-center justify-center">
                                <div
                                  class="bg-neutral-100 p-2 flex items-center justify-center border-1 border-neutral-400 rounded shadow-smooth z-10 translate-y-3">
                                  <h5 class="text-neutral-600">Not enough data</h5>
                                </div>
                                <div class="h-full w-full bg-neutral-100 opacity-70 absolute"></div>
                              </section>
                            </div>
                          </section>
                        </div>
                      </div>
                    </div>
                    <div class="w-full flex flex-row mb-6">
                      <div class="flex-1 mr-6" style="height: 300px; width: 20%; min-width: 100px; min-height: 100px;">
                        <div
                          class="h-full w-full bg-neutral-50 border-1 border-neutral-400 rounded flex flex-col overflow-hidden">
                          <section class="w-full h-fit flex items-center gap-2 p-3 border-b-1 border-neutral-400"><svg
                              class="h-5 w-5" style="max-width: 50vw; max-height: 50vh;" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M0 0h24v24H0z" fill="none"></path>
                              <path class="stroke-2 stroke-neutral-700"
                                d="M14.75 15v4a2 2 0 0 1-2 2h-1.5a2 2 0 0 1-2-2v-4L3.508 8.57A2 2 0 0 1 3 7.236V6c0-1.657 4.03-3 9-3s9 1.343 9 3v1.237a2 2 0 0 1-.508 1.332Z"
                                fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                              <path class="stroke-2 stroke-neutral-700" d="M21 6c0 1.657-4.03 3-9 3S3 7.657 3 6"
                                fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <h4>Tags over time</h4>
                          </section>
                          <section class="h-full w-full">
                            <div class="h-full w-full flex flex-col relative">
                              <div class="h-full w-full">
                                <div style="width: 100%; height: 100%;"><svg aria-label="XYChart" height="225"
                                    width="415">
                                    <g class="visx-group visx-axis" transform="translate(0, 195)">
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)">
                                        <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                          stroke="#EAEAEA" stroke-linecap="square" stroke-width="1"
                                          x1="51.14285714285714" x2="51.14285714285714" y1="0" y2="4"></line><svg
                                          font-size="12" style="overflow: visible;" x="0" y="0.125em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="51.14285714285714" y="16">
                                            <tspan dy="0em" x="51.14285714285714">Jun</tspan>
                                          </text></svg>
                                      </g>
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)">
                                        <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                          stroke="#EAEAEA" stroke-linecap="square" stroke-width="1"
                                          x1="156.85714285714286" x2="156.85714285714286" y1="0" y2="4"></line><svg
                                          font-size="12" style="overflow: visible;" x="0" y="0.125em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="156.85714285714286" y="16">
                                            <tspan dy="0em" x="156.85714285714286">Jul</tspan>
                                          </text></svg>
                                      </g>
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)">
                                        <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                          stroke="#EAEAEA" stroke-linecap="square" stroke-width="1"
                                          x1="266.0952380952381" x2="266.0952380952381" y1="0" y2="4"></line><svg
                                          font-size="12" style="overflow: visible;" x="0" y="0.125em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="266.0952380952381" y="16">
                                            <tspan dy="0em" x="266.0952380952381">Aug</tspan>
                                          </text></svg>
                                      </g>
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)">
                                        <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                          stroke="#EAEAEA" stroke-linecap="square" stroke-width="1"
                                          x1="375.3333333333333" x2="375.3333333333333" y1="0" y2="4"></line><svg
                                          font-size="12" style="overflow: visible;" x="0" y="0.125em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="375.3333333333333" y="16">
                                            <tspan dy="0em" x="375.3333333333333">Sep</tspan>
                                          </text></svg>
                                      </g>
                                      <line class="visx-line visx-axis-line" fill="transparent"
                                        shape-rendering="crispEdges" stroke="#EAEAEA" stroke-dasharray="#EAEAEA"
                                        stroke-width="1" x1="30.5" x2="400.5" y1="0" y2="0"></line>
                                    </g>
                                    <g class="visx-group visx-axis" transform="translate(30, 0)">
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)"><svg
                                          font-size="12" style="overflow: visible;" x="-1em" y="0.25em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="-4" y="195">
                                            <tspan dy="0em" x="-4">0</tspan>
                                          </text></svg></g>
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)"><svg
                                          font-size="12" style="overflow: visible;" x="-1em" y="0.25em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="-4" y="148.84615384615384">
                                            <tspan dy="0em" x="-4">10</tspan>
                                          </text></svg></g>
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)"><svg
                                          font-size="12" style="overflow: visible;" x="-1em" y="0.25em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="-4" y="102.69230769230771">
                                            <tspan dy="0em" x="-4">20</tspan>
                                          </text></svg></g>
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)"><svg
                                          font-size="12" style="overflow: visible;" x="-1em" y="0.25em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="-4" y="56.53846153846153">
                                            <tspan dy="0em" x="-4">30</tspan>
                                          </text></svg></g>
                                    </g>
                                    <g class="visx-group visx-rows" transform="translate(30, 0)">
                                      <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                        stroke="#eaf0f6" stroke-width="1"
                                        style="stroke: rgb(234, 234, 234); stroke-width: 0.5;" x1="0" x2="370" y1="195"
                                        y2="195"></line>
                                      <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                        stroke="#eaf0f6" stroke-width="1"
                                        style="stroke: rgb(234, 234, 234); stroke-width: 0.5;" x1="0" x2="370"
                                        y1="148.84615384615384" y2="148.84615384615384"></line>
                                      <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                        stroke="#eaf0f6" stroke-width="1"
                                        style="stroke: rgb(234, 234, 234); stroke-width: 0.5;" x1="0" x2="370"
                                        y1="102.69230769230771" y2="102.69230769230771"></line>
                                      <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                        stroke="#eaf0f6" stroke-width="1"
                                        style="stroke: rgb(234, 234, 234); stroke-width: 0.5;" x1="0" x2="370"
                                        y1="56.53846153846153" y2="56.53846153846153"></line>
                                    </g>
                                    <path
                                      d="M52.00797171296296,130.38461538461536L101.34130504629628,93.46153846153847L150.6746383796296,98.07692307692308L200.00797171296296,65.76923076923077L249.3413050462963,84.23076923076923L298.67463837962964,139.6153846153846L348.00797171296296,88.84615384615384"
                                      fill="transparent" stroke="#7357F6" stroke-linecap="round" stroke-width="2">
                                    </path>
                                    <path
                                      d="M52.00797171296296,148.84615384615384L101.34130504629628,125.76923076923077L150.6746383796296,135.00000000000003L200.00797171296296,93.46153846153847L249.3413050462963,116.53846153846153L298.67463837962964,93.46153846153847L348.00797171296296,88.84615384615384"
                                      fill="transparent" stroke="#EE7D60" stroke-linecap="round" stroke-width="2">
                                    </path>
                                    <path
                                      d="M52.00797171296296,93.46153846153847L101.34130504629628,107.30769230769229L150.6746383796296,51.92307692307693L200.00797171296296,88.84615384615384L249.3413050462963,15L298.67463837962964,70.38461538461539L348.00797171296296,61.153846153846146"
                                      fill="transparent" stroke="#97DFD8" stroke-linecap="round" stroke-width="2">
                                    </path>
                                    <rect fill="transparent" height="180" width="370" x="30" y="15"></rect>
                                  </svg></div>
                              </div>
                              <div class="w-full h-fit pb-2 pl-2">
                                <div class="w-full flex items-center gap-4 overflow-x-auto no-scrollbar justify-start">
                                  <div class="inline-flex items-center gap-4 false">
                                    <div class="flex gap-2 items-center h-fit">
                                      <div class="w-4 h-4 min-h-4 min-w-4 rounded-md"
                                        style="background-color: rgb(115, 87, 246);"></div>
                                      <p class="text-small whitespace-nowrap max-w-[250px] overflow-hidden"><span
                                          class="text-neutral-500 block overflow-hidden text-ellipsis whitespace-nowrap">Limited
                                          collaboration feature</span></p>
                                    </div>
                                    <div class="flex gap-2 items-center h-fit">
                                      <div class="w-4 h-4 min-h-4 min-w-4 rounded-md"
                                        style="background-color: rgb(238, 125, 96);"></div>
                                      <p class="text-small whitespace-nowrap max-w-[250px] overflow-hidden"><span
                                          class="text-neutral-500 block overflow-hidden text-ellipsis whitespace-nowrap">Difficulty
                                          managing component</span></p>
                                    </div>
                                    <div class="flex gap-2 items-center h-fit">
                                      <div class="w-4 h-4 min-h-4 min-w-4 rounded-md"
                                        style="background-color: rgb(151, 223, 216);"></div>
                                      <p class="text-small whitespace-nowrap max-w-[250px] overflow-hidden"><span
                                          class="text-neutral-500 block overflow-hidden text-ellipsis whitespace-nowrap">Steep
                                          learning curve for beginners</span></p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <section class="absolute h-full w-full flex items-center justify-center">
                                <div
                                  class="bg-neutral-100 p-2 flex items-center justify-center border-1 border-neutral-400 rounded shadow-smooth z-10 translate-y-3">
                                  <h5 class="text-neutral-600">Not enough data</h5>
                                </div>
                                <div class="h-full w-full bg-neutral-100 opacity-70 absolute"></div>
                              </section>
                            </div>
                          </section>
                        </div>
                      </div>
                      <div class="flex-1 mr-6" style="height: 300px; width: 20%; min-width: 100px; min-height: 100px;">
                        <div
                          class="h-full w-full bg-neutral-50 border-1 border-neutral-400 rounded flex flex-col overflow-hidden">
                          <section class="w-full h-fit flex items-center gap-2 p-3 border-b-1 border-neutral-400"><svg
                              class="h-5 w-5" style="max-width: 50vw; max-height: 50vh;" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M0 24V0h24v24z" fill="none"></path>
                              <g class="stroke-2 stroke-neutral-700" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect height="18" rx="1.105" ry="0" width="18" x="3" y="3"></rect>
                                <path d="M3 15h18M3 9h18"></path>
                              </g>
                            </svg>
                            <h4>Users with the most insights</h4>
                          </section>
                          <section class="h-full w-full">
                            <div class="h-full w-full flex flex-col relative">
                              <div class="h-full w-full overflow-auto">
                                <div class="w-full">
                                  <table class="w-full border-separate border-spacing-0">
                                    <thead class="bg-primary-100 top-0 z-10 sticky">
                                      <tr>
                                        <th
                                          class="px-3 py-2 text-left text-neutral-600 font-semibold border border-neutral-300 rounded-tl-lg border-l"
                                          colspan="1" style="position: relative; width: 1px; max-width: 1px;">
                                          <div>
                                            <div class="flex items-center gap-2"><svg class="h-6 w-6 stroke-1.5"
                                                style="max-width: 50vw; max-height: 50vh;" viewbox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g class="stroke-neutral-600" fill="none" stroke-linecap="round"
                                                  stroke-linejoin="round">
                                                  <path
                                                    d="M20.793 9.524a2.023 2.023 0 1 1-2.861 2.86 2.023 2.023 0 0 1 2.86-2.86M14.203 5.912a3.115 3.115 0 1 1-4.406 4.406 3.115 3.115 0 0 1 4.406-4.406M6.068 9.524a2.023 2.023 0 1 1-2.86 2.86 2.023 2.023 0 0 1 2.86-2.86M23 19v-1.096a2.5 2.5 0 0 0-2.5-2.5h-.801M1 19v-1.096a2.5 2.5 0 0 1 2.5-2.5h.801M17.339 19v-1.601a3.5 3.5 0 0 0-3.5-3.5H10.16a3.5 3.5 0 0 0-3.5 3.5V19">
                                                  </path>
                                                </g>
                                                <path d="M0 0h24v24H0Z" fill="none"></path>
                                              </svg>
                                              <p class="text-neutral-600">User</p>
                                            </div>
                                          </div>
                                          <div class="resizer"></div>
                                        </th>
                                        <th
                                          class="px-3 py-2 text-left text-neutral-600 font-semibold border border-neutral-300 border-l-0"
                                          colspan="1" style="position: relative; width: 1px; max-width: 1px;">
                                          <div>
                                            <div class="flex items-center gap-2"><svg class="h-6 w-6"
                                                style="max-width: 50vw; max-height: 50vh;" viewbox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path class="stroke-1.5 stroke-neutral-600"
                                                  d="M12.967 3 4.75 14H12l-.967 7 8.217-11H12Z" fill="none"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M0 0h24v24H0Z" fill="none"></path>
                                              </svg>
                                              <p class="text-neutral-600">Insights</p>
                                            </div>
                                          </div>
                                          <div class="resizer"></div>
                                        </th>
                                        <th
                                          class="px-3 py-2 text-left text-neutral-600 font-semibold border border-neutral-300 rounded-tr-lg border-l-0"
                                          colspan="1" style="position: relative; width: 1px; max-width: 1px;">
                                          <div>
                                            <div class="flex items-center gap-2"><svg class="h-6 w-6" fill="none"
                                                style="max-width: 50vw; max-height: 50vh;" viewbox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path class="stroke-1.5 stroke-neutral-600"
                                                  d="M4 8V6a2 2 0 0 1 2-2h2M4 16v2a2 2 0 0 0 2 2h2m8-16h2a2 2 0 0 1 2 2v2m-4 12h2a2 2 0 0 0 2-2v-2M9 12a3 3 0 1 0 6 0 3 3 0 0 0-6 0Z"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                              </svg>
                                              <p class="text-neutral-600">Captures</p>
                                            </div>
                                          </div>
                                          <div class="resizer"></div>
                                        </th>
                                      </tr>
                                    </thead>
                                    <tbody class="divide-neutral-200">
                                      <tr
                                        class="bg-neutral-50 transition-colors min-h-[content-height] disabled:cursor-cool-normal">
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-l border-t-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div class="wrapper flex items-center gap-2 overflow-hidden">
                                              <div
                                                class="rounded-full border-neutral-700 relative overflow-hidden flex items-center justify-center bg-primary-500 relative w-10 h-10 min-w-[2.5rem] min-h-[2.5rem] border-1">
                                                <h4 class="text-neutral-50 text-md">?</h4>
                                              </div>
                                              <section>
                                                <p class="font-semibold">Robin Labrot</p>
                                                <p class="text-neutral-500 font-medium">robin@listenup.ai</p>
                                              </section>
                                            </div>
                                          </div>
                                        </td>
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div
                                              class="wrapper w-fit p-2 flex gap-2 items-center bg-neutral-200 rounded">
                                              <svg class="h-4" style="max-width: 50vw; max-height: 50vh;"
                                                viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path class="stroke-1.5 stroke-neutral-700"
                                                  d="M12.967 3 4.75 14H12l-.967 7 8.217-11H12Z" fill="none"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M0 0h24v24H0Z" fill="none"></path>
                                              </svg>
                                              <p><span class="font-bold">2.4K </span>insights</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div
                                              class="wrapper w-min p-2 flex gap-2 items-center bg-neutral-200 rounded">
                                              <svg class="h-4" fill="none" style="max-width: 50vw; max-height: 50vh;"
                                                viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path class="stroke-1.5 stroke-neutral-700"
                                                  d="M4 8V6a2 2 0 0 1 2-2h2M4 16v2a2 2 0 0 0 2 2h2m8-16h2a2 2 0 0 1 2 2v2m-4 12h2a2 2 0 0 0 2-2v-2M9 12a3 3 0 1 0 6 0 3 3 0 0 0-6 0Z"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                              </svg>
                                              <p><span class="font-bold">1.9K </span>captures</p>
                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr
                                        class="bg-neutral-50 transition-colors min-h-[content-height] disabled:cursor-cool-normal">
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-l border-t-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div class="wrapper flex items-center gap-2 overflow-hidden">
                                              <div
                                                class="rounded-full border-neutral-700 relative overflow-hidden flex items-center justify-center bg-primary-500 relative w-10 h-10 min-w-[2.5rem] min-h-[2.5rem] border-1">
                                                <h4 class="text-neutral-50 text-md">?</h4>
                                              </div>
                                              <section>
                                                <p class="font-semibold">Thomas Duvergne</p>
                                                <p class="text-neutral-500 font-medium">thomas@listenup.ai</p>
                                              </section>
                                            </div>
                                          </div>
                                        </td>
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div
                                              class="wrapper w-fit p-2 flex gap-2 items-center bg-neutral-200 rounded">
                                              <svg class="h-4" style="max-width: 50vw; max-height: 50vh;"
                                                viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path class="stroke-1.5 stroke-neutral-700"
                                                  d="M12.967 3 4.75 14H12l-.967 7 8.217-11H12Z" fill="none"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M0 0h24v24H0Z" fill="none"></path>
                                              </svg>
                                              <p><span class="font-bold">2K </span>insights</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div
                                              class="wrapper w-min p-2 flex gap-2 items-center bg-neutral-200 rounded">
                                              <svg class="h-4" fill="none" style="max-width: 50vw; max-height: 50vh;"
                                                viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path class="stroke-1.5 stroke-neutral-700"
                                                  d="M4 8V6a2 2 0 0 1 2-2h2M4 16v2a2 2 0 0 0 2 2h2m8-16h2a2 2 0 0 1 2 2v2m-4 12h2a2 2 0 0 0 2-2v-2M9 12a3 3 0 1 0 6 0 3 3 0 0 0-6 0Z"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                              </svg>
                                              <p><span class="font-bold">304 </span>captures</p>
                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr
                                        class="bg-neutral-50 transition-colors min-h-[content-height] disabled:cursor-cool-normal">
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-l border-t-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div class="wrapper flex items-center gap-2 overflow-hidden">
                                              <div
                                                class="rounded-full border-neutral-700 relative overflow-hidden flex items-center justify-center bg-primary-500 relative w-10 h-10 min-w-[2.5rem] min-h-[2.5rem] border-1">
                                                <h4 class="text-neutral-50 text-md">?</h4>
                                              </div>
                                              <section>
                                                <p class="font-semibold">Henry Dash</p>
                                                <p class="text-neutral-500 font-medium">henry@listenup.ai</p>
                                              </section>
                                            </div>
                                          </div>
                                        </td>
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div
                                              class="wrapper w-fit p-2 flex gap-2 items-center bg-neutral-200 rounded">
                                              <svg class="h-4" style="max-width: 50vw; max-height: 50vh;"
                                                viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path class="stroke-1.5 stroke-neutral-700"
                                                  d="M12.967 3 4.75 14H12l-.967 7 8.217-11H12Z" fill="none"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M0 0h24v24H0Z" fill="none"></path>
                                              </svg>
                                              <p><span class="font-bold">1.8K </span>insights</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div
                                              class="wrapper w-min p-2 flex gap-2 items-center bg-neutral-200 rounded">
                                              <svg class="h-4" fill="none" style="max-width: 50vw; max-height: 50vh;"
                                                viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path class="stroke-1.5 stroke-neutral-700"
                                                  d="M4 8V6a2 2 0 0 1 2-2h2M4 16v2a2 2 0 0 0 2 2h2m8-16h2a2 2 0 0 1 2 2v2m-4 12h2a2 2 0 0 0 2-2v-2M9 12a3 3 0 1 0 6 0 3 3 0 0 0-6 0Z"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                              </svg>
                                              <p><span class="font-bold">1K </span>captures</p>
                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr
                                        class="bg-neutral-50 transition-colors min-h-[content-height] disabled:cursor-cool-normal">
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-l rounded-bl-lg border-t-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div class="wrapper flex items-center gap-2 overflow-hidden">
                                              <div
                                                class="rounded-full border-neutral-700 relative overflow-hidden flex items-center justify-center bg-primary-500 relative w-10 h-10 min-w-[2.5rem] min-h-[2.5rem] border-1">
                                                <h4 class="text-neutral-50 text-md">?</h4>
                                              </div>
                                              <section>
                                                <p class="font-semibold">Sophie Delatte</p>
                                                <p class="text-neutral-500 font-medium">sophie@listenup.ai</p>
                                              </section>
                                            </div>
                                          </div>
                                        </td>
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div
                                              class="wrapper w-fit p-2 flex gap-2 items-center bg-neutral-200 rounded">
                                              <svg class="h-4" style="max-width: 50vw; max-height: 50vh;"
                                                viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path class="stroke-1.5 stroke-neutral-700"
                                                  d="M12.967 3 4.75 14H12l-.967 7 8.217-11H12Z" fill="none"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M0 0h24v24H0Z" fill="none"></path>
                                              </svg>
                                              <p><span class="font-bold">852 </span>insights</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 rounded-br-lg border-t-0 border-l-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div
                                              class="wrapper w-min p-2 flex gap-2 items-center bg-neutral-200 rounded">
                                              <svg class="h-4" fill="none" style="max-width: 50vw; max-height: 50vh;"
                                                viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path class="stroke-1.5 stroke-neutral-700"
                                                  d="M4 8V6a2 2 0 0 1 2-2h2M4 16v2a2 2 0 0 0 2 2h2m8-16h2a2 2 0 0 1 2 2v2m-4 12h2a2 2 0 0 0 2-2v-2M9 12a3 3 0 1 0 6 0 3 3 0 0 0-6 0Z"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                              </svg>
                                              <p><span class="font-bold">498 </span>captures</p>
                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <section class="absolute h-full w-full flex items-center justify-center">
                                <div
                                  class="bg-neutral-100 p-2 flex items-center justify-center border-1 border-neutral-400 rounded shadow-smooth z-10 translate-y-3">
                                  <h5 class="text-neutral-600">Not enough data</h5>
                                </div>
                                <div class="h-full w-full bg-neutral-100 opacity-70 absolute"></div>
                              </section>
                            </div>
                          </section>
                        </div>
                      </div>
                      <div class="flex-1 mr-6" style="height: 300px; width: 20%; min-width: 100px; min-height: 100px;">
                        <div
                          class="h-full w-full bg-neutral-50 border-1 border-neutral-400 rounded flex flex-col overflow-hidden">
                          <section class="w-full h-fit flex items-center gap-2 p-3 border-b-1 border-neutral-400"><svg
                              class="h-5 w-5" style="max-width: 50vw; max-height: 50vh;" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M0 0h24v24H0z" fill="none"></path>
                              <path class="stroke-2 stroke-neutral-700"
                                d="M14.75 15v4a2 2 0 0 1-2 2h-1.5a2 2 0 0 1-2-2v-4L3.508 8.57A2 2 0 0 1 3 7.236V6c0-1.657 4.03-3 9-3s9 1.343 9 3v1.237a2 2 0 0 1-.508 1.332Z"
                                fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                              <path class="stroke-2 stroke-neutral-700" d="M21 6c0 1.657-4.03 3-9 3S3 7.657 3 6"
                                fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <h4>Sentiment over time</h4>
                          </section>
                          <section class="h-full w-full">
                            <div class="h-full w-full flex flex-col relative">
                              <div class="h-full w-full">
                                <div style="width: 100%; height: 100%;"><svg aria-label="XYChart" height="221"
                                    width="415">
                                    <g class="visx-group visx-axis" transform="translate(0, 191)">
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)">
                                        <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                          stroke="#EAEAEA" stroke-linecap="square" stroke-width="1"
                                          x1="60.57142857142857" x2="60.57142857142857" y1="0" y2="4"></line><svg
                                          font-size="12" style="overflow: visible;" x="0" y="0.125em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="60.57142857142857" y="16">
                                            <tspan dy="0em" x="60.57142857142857">Jun</tspan>
                                          </text></svg>
                                      </g>
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)">
                                        <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                          stroke="#EAEAEA" stroke-linecap="square" stroke-width="1"
                                          x1="163.42857142857142" x2="163.42857142857142" y1="0" y2="4"></line><svg
                                          font-size="12" style="overflow: visible;" x="0" y="0.125em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="163.42857142857142" y="16">
                                            <tspan dy="0em" x="163.42857142857142">Jul</tspan>
                                          </text></svg>
                                      </g>
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)">
                                        <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                          stroke="#EAEAEA" stroke-linecap="square" stroke-width="1"
                                          x1="269.71428571428567" x2="269.71428571428567" y1="0" y2="4"></line><svg
                                          font-size="12" style="overflow: visible;" x="0" y="0.125em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="269.71428571428567" y="16">
                                            <tspan dy="0em" x="269.71428571428567">Aug</tspan>
                                          </text></svg>
                                      </g>
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)">
                                        <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                          stroke="#EAEAEA" stroke-linecap="square" stroke-width="1" x1="376" x2="376"
                                          y1="0" y2="4"></line><svg font-size="12" style="overflow: visible;" x="0"
                                          y="0.125em"><text fill="#616162" font-family="jakarta" font-size="12"
                                            font-weight="200" letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="376" y="16">
                                            <tspan dy="0em" x="376">Sep</tspan>
                                          </text></svg>
                                      </g>
                                      <line class="visx-line visx-axis-line" fill="transparent"
                                        shape-rendering="crispEdges" stroke="#EAEAEA" stroke-dasharray="#EAEAEA"
                                        stroke-width="1" x1="40.5" x2="400.5" y1="0" y2="0"></line>
                                    </g>
                                    <g class="visx-group visx-axis" transform="translate(40, 0)">
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)"><svg
                                          font-size="12" style="overflow: visible;" x="-1em" y="0.25em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="-4" y="191">
                                            <tspan dy="0em" x="-4">0%</tspan>
                                          </text></svg></g>
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)"><svg
                                          font-size="12" style="overflow: visible;" x="-1em" y="0.25em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="-4" y="173.4">
                                            <tspan dy="0em" x="-4">10%</tspan>
                                          </text></svg></g>
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)"><svg
                                          font-size="12" style="overflow: visible;" x="-1em" y="0.25em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="-4" y="155.8">
                                            <tspan dy="0em" x="-4">20%</tspan>
                                          </text></svg></g>
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)"><svg
                                          font-size="12" style="overflow: visible;" x="-1em" y="0.25em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="-4" y="138.2">
                                            <tspan dy="0em" x="-4">30%</tspan>
                                          </text></svg></g>
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)"><svg
                                          font-size="12" style="overflow: visible;" x="-1em" y="0.25em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="-4" y="120.6">
                                            <tspan dy="0em" x="-4">40%</tspan>
                                          </text></svg></g>
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)"><svg
                                          font-size="12" style="overflow: visible;" x="-1em" y="0.25em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="-4" y="103">
                                            <tspan dy="0em" x="-4">50%</tspan>
                                          </text></svg></g>
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)"><svg
                                          font-size="12" style="overflow: visible;" x="-1em" y="0.25em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="-4" y="85.4">
                                            <tspan dy="0em" x="-4">60%</tspan>
                                          </text></svg></g>
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)"><svg
                                          font-size="12" style="overflow: visible;" x="-1em" y="0.25em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="-4" y="67.80000000000001">
                                            <tspan dy="0em" x="-4">70%</tspan>
                                          </text></svg></g>
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)"><svg
                                          font-size="12" style="overflow: visible;" x="-1em" y="0.25em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="-4" y="50.19999999999999">
                                            <tspan dy="0em" x="-4">80%</tspan>
                                          </text></svg></g>
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)"><svg
                                          font-size="12" style="overflow: visible;" x="-1em" y="0.25em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="-4" y="32.599999999999994">
                                            <tspan dy="0em" x="-4">90%</tspan>
                                          </text></svg></g>
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)"><svg
                                          font-size="12" style="overflow: visible;" x="-1em" y="0.25em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="-4" y="15">
                                            <tspan dy="0em" x="-4">100%</tspan>
                                          </text></svg></g>
                                    </g>
                                    <g class="visx-group visx-rows" transform="translate(40, 0)">
                                      <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                        stroke="#eaf0f6" stroke-width="1"
                                        style="stroke: rgb(234, 234, 234); stroke-width: 0.5;" x1="0" x2="360" y1="191"
                                        y2="191"></line>
                                      <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                        stroke="#eaf0f6" stroke-width="1"
                                        style="stroke: rgb(234, 234, 234); stroke-width: 0.5;" x1="0" x2="360"
                                        y1="173.4" y2="173.4"></line>
                                      <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                        stroke="#eaf0f6" stroke-width="1"
                                        style="stroke: rgb(234, 234, 234); stroke-width: 0.5;" x1="0" x2="360"
                                        y1="155.8" y2="155.8"></line>
                                      <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                        stroke="#eaf0f6" stroke-width="1"
                                        style="stroke: rgb(234, 234, 234); stroke-width: 0.5;" x1="0" x2="360"
                                        y1="138.2" y2="138.2"></line>
                                      <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                        stroke="#eaf0f6" stroke-width="1"
                                        style="stroke: rgb(234, 234, 234); stroke-width: 0.5;" x1="0" x2="360"
                                        y1="120.6" y2="120.6"></line>
                                      <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                        stroke="#eaf0f6" stroke-width="1"
                                        style="stroke: rgb(234, 234, 234); stroke-width: 0.5;" x1="0" x2="360" y1="103"
                                        y2="103"></line>
                                      <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                        stroke="#eaf0f6" stroke-width="1"
                                        style="stroke: rgb(234, 234, 234); stroke-width: 0.5;" x1="0" x2="360" y1="85.4"
                                        y2="85.4"></line>
                                      <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                        stroke="#eaf0f6" stroke-width="1"
                                        style="stroke: rgb(234, 234, 234); stroke-width: 0.5;" x1="0" x2="360"
                                        y1="67.80000000000001" y2="67.80000000000001"></line>
                                      <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                        stroke="#eaf0f6" stroke-width="1"
                                        style="stroke: rgb(234, 234, 234); stroke-width: 0.5;" x1="0" x2="360"
                                        y1="50.19999999999999" y2="50.19999999999999"></line>
                                      <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                        stroke="#eaf0f6" stroke-width="1"
                                        style="stroke: rgb(234, 234, 234); stroke-width: 0.5;" x1="0" x2="360"
                                        y1="32.599999999999994" y2="32.599999999999994"></line>
                                      <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                        stroke="#eaf0f6" stroke-width="1"
                                        style="stroke: rgb(234, 234, 234); stroke-width: 0.5;" x1="0" x2="360" y1="15"
                                        y2="15"></line>
                                    </g>
                                    <g class="visx-area-stack">
                                      <path class="visx-area"
                                        d="M64.84173936507936,15L167.69888222222224,15L273.98459650793654,15L380.27031079365076,15L380.27031079365076,85.4L273.98459650793654,71.32000000000001L167.69888222222224,59L64.84173936507936,64.28Z"
                                        fill="#477544" fill-opacity="0.3" stroke="transparent"></path>
                                      <path class="visx-area"
                                        d="M64.84173936507936,64.28L167.69888222222224,59L273.98459650793654,71.32000000000001L380.27031079365076,85.4L380.27031079365076,164.6L273.98459650793654,155.8L167.69888222222224,155.8L64.84173936507936,147Z"
                                        fill="#f29d41" fill-opacity="0.3" stroke="transparent"></path>
                                      <path class="visx-area"
                                        d="M64.84173936507936,147L167.69888222222224,155.8L273.98459650793654,155.8L380.27031079365076,164.6L380.27031079365076,191L273.98459650793654,191L167.69888222222224,191L64.84173936507936,191Z"
                                        fill="#FF6767" fill-opacity="0.3" stroke="transparent"></path>
                                      <path class="visx-line"
                                        d="M64.84173936507936,15L167.69888222222224,15L273.98459650793654,15L380.27031079365076,15"
                                        fill="transparent" pointer-events="none" stroke="#477544" stroke-width="2">
                                      </path>
                                      <path class="visx-line"
                                        d="M64.84173936507936,64.28L167.69888222222224,59L273.98459650793654,71.32000000000001L380.27031079365076,85.4"
                                        fill="transparent" pointer-events="none" stroke="#f29d41" stroke-width="2">
                                      </path>
                                      <path class="visx-line"
                                        d="M64.84173936507936,147L167.69888222222224,155.8L273.98459650793654,155.8L380.27031079365076,164.6"
                                        fill="transparent" pointer-events="none" stroke="#FF6767" stroke-width="2">
                                      </path>
                                    </g>
                                    <rect fill="transparent" height="176" width="360" x="40" y="15"></rect>
                                  </svg></div>
                              </div>
                              <div class="w-full h-fit pb-2 pl-2">
                                <div class="w-full flex items-center gap-4 overflow-x-auto no-scrollbar justify-center">
                                  <div class="inline-flex items-center gap-4 justify-center">
                                    <div class="flex gap-2 items-center h-fit"><svg class="h-5"
                                        style="max-width: 50vw; max-height: 50vh;" viewbox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none">
                                          <path d="M0 0h24v24H0Z"></path>
                                          <path class="stroke-2 stroke-success-500"
                                            d="M18.364 5.636A9 9 0 1 1 5.636 18.364 9 9 0 0 1 18.364 5.636"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                          <path class="stroke-2 stroke-success-500"
                                            d="M12 17c1.667 0 3-1.333 3-3H9c0 1.667 1.333 3 3 3v0ZM8.5 9v1M15.5 9v1"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                      </svg>
                                      <p class="text-small whitespace-nowrap max-w-[250px] overflow-hidden"><span
                                          class="text-neutral-500 block overflow-hidden text-ellipsis whitespace-nowrap">Positive</span>
                                      </p>
                                    </div>
                                    <div class="flex gap-2 items-center h-fit"><svg class="h-5"
                                        style="max-width: 50vw; max-height: 50vh;" viewbox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none">
                                          <path d="M0 0h24v24H0Z"></path>
                                          <path class="stroke-2 stroke-warning-500"
                                            d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.038 9-9-4.038-9-9-9ZM9 9v1M15.5 9v1"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                      </svg>
                                      <p class="text-small whitespace-nowrap max-w-[250px] overflow-hidden"><span
                                          class="text-neutral-500 block overflow-hidden text-ellipsis whitespace-nowrap">Neutral</span>
                                      </p>
                                    </div>
                                    <div class="flex gap-2 items-center h-fit"><svg class="h-5"
                                        style="max-width: 50vw; max-height: 50vh;" viewbox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none">
                                          <path d="M0 0h24v24H0Z"></path>
                                          <path class="stroke-2 stroke-danger-500"
                                            d="M8.5 16s1.313-1.312 3.5-1.312c2.188 0 3.5 1.312 3.5 1.312"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                          <path class="stroke-2 stroke-danger-500"
                                            d="M18.364 5.636A9 9 0 1 1 5.636 18.364 9 9 0 0 1 18.364 5.636"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                          <path class="stroke-2 stroke-danger-500"
                                            d="M7 10c.395-.485.935-.76 1.5-.76s1.09.275 1.5.76M14 10c.395-.485.935-.76 1.5-.76s1.09.275 1.5.76"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                      </svg>
                                      <p class="text-small whitespace-nowrap max-w-[250px] overflow-hidden"><span
                                          class="text-neutral-500 block overflow-hidden text-ellipsis whitespace-nowrap">Negative</span>
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <section class="absolute h-full w-full flex items-center justify-center">
                                <div
                                  class="bg-neutral-100 p-2 flex items-center justify-center border-1 border-neutral-400 rounded shadow-smooth z-10 translate-y-3">
                                  <h5 class="text-neutral-600">Not enough data</h5>
                                </div>
                                <div class="h-full w-full bg-neutral-100 opacity-70 absolute"></div>
                              </section>
                            </div>
                          </section>
                        </div>
                      </div>
                    </div>
                    <div class="w-full flex flex-row mb-6">
                      <div class="flex-1 mr-6" style="height: 300px; width: 20%; min-width: 100px; min-height: 100px;">
                        <div
                          class="h-full w-full bg-neutral-50 border-1 border-neutral-400 rounded flex flex-col overflow-hidden">
                          <section class="w-full h-fit flex items-center gap-2 p-3 border-b-1 border-neutral-400"><svg
                              class="h-5 w-5" style="max-width: 50vw; max-height: 50vh;" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M0 0h24v24H0z" fill="none"></path>
                              <path class="stroke-2 stroke-neutral-700"
                                d="M14.75 15v4a2 2 0 0 1-2 2h-1.5a2 2 0 0 1-2-2v-4L3.508 8.57A2 2 0 0 1 3 7.236V6c0-1.657 4.03-3 9-3s9 1.343 9 3v1.237a2 2 0 0 1-.508 1.332Z"
                                fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                              <path class="stroke-2 stroke-neutral-700" d="M21 6c0 1.657-4.03 3-9 3S3 7.657 3 6"
                                fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <h4>Patterns over time</h4>
                          </section>
                          <section class="h-full w-full">
                            <div class="h-full w-full flex flex-col relative">
                              <div class="h-full w-full">
                                <div style="width: 100%; height: 100%;"><svg aria-label="XYChart" height="225"
                                    width="415">
                                    <g class="visx-group visx-axis" transform="translate(0, 195)">
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)">
                                        <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                          stroke="#EAEAEA" stroke-linecap="square" stroke-width="1"
                                          x1="51.14285714285714" x2="51.14285714285714" y1="0" y2="4"></line><svg
                                          font-size="12" style="overflow: visible;" x="0" y="0.125em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="51.14285714285714" y="16">
                                            <tspan dy="0em" x="51.14285714285714">Jun</tspan>
                                          </text></svg>
                                      </g>
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)">
                                        <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                          stroke="#EAEAEA" stroke-linecap="square" stroke-width="1"
                                          x1="156.85714285714286" x2="156.85714285714286" y1="0" y2="4"></line><svg
                                          font-size="12" style="overflow: visible;" x="0" y="0.125em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="156.85714285714286" y="16">
                                            <tspan dy="0em" x="156.85714285714286">Jul</tspan>
                                          </text></svg>
                                      </g>
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)">
                                        <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                          stroke="#EAEAEA" stroke-linecap="square" stroke-width="1"
                                          x1="266.0952380952381" x2="266.0952380952381" y1="0" y2="4"></line><svg
                                          font-size="12" style="overflow: visible;" x="0" y="0.125em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="266.0952380952381" y="16">
                                            <tspan dy="0em" x="266.0952380952381">Aug</tspan>
                                          </text></svg>
                                      </g>
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)">
                                        <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                          stroke="#EAEAEA" stroke-linecap="square" stroke-width="1"
                                          x1="375.3333333333333" x2="375.3333333333333" y1="0" y2="4"></line><svg
                                          font-size="12" style="overflow: visible;" x="0" y="0.125em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="375.3333333333333" y="16">
                                            <tspan dy="0em" x="375.3333333333333">Sep</tspan>
                                          </text></svg>
                                      </g>
                                      <line class="visx-line visx-axis-line" fill="transparent"
                                        shape-rendering="crispEdges" stroke="#EAEAEA" stroke-dasharray="#EAEAEA"
                                        stroke-width="1" x1="30.5" x2="400.5" y1="0" y2="0"></line>
                                    </g>
                                    <g class="visx-group visx-axis" transform="translate(30, 0)">
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)"><svg
                                          font-size="12" style="overflow: visible;" x="-1em" y="0.25em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="-4" y="195">
                                            <tspan dy="0em" x="-4">0</tspan>
                                          </text></svg></g>
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)"><svg
                                          font-size="12" style="overflow: visible;" x="-1em" y="0.25em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="-4" y="148.84615384615384">
                                            <tspan dy="0em" x="-4">10</tspan>
                                          </text></svg></g>
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)"><svg
                                          font-size="12" style="overflow: visible;" x="-1em" y="0.25em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="-4" y="102.69230769230771">
                                            <tspan dy="0em" x="-4">20</tspan>
                                          </text></svg></g>
                                      <g class="visx-group visx-axis-tick" transform="translate(0, 0)"><svg
                                          font-size="12" style="overflow: visible;" x="-1em" y="0.25em"><text
                                            fill="#616162" font-family="jakarta" font-size="12" font-weight="200"
                                            letter-spacing="0.4" pointer-events="none" stroke="none"
                                            text-anchor="middle" transform="" x="-4" y="56.53846153846153">
                                            <tspan dy="0em" x="-4">30</tspan>
                                          </text></svg></g>
                                    </g>
                                    <g class="visx-group visx-rows" transform="translate(30, 0)">
                                      <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                        stroke="#eaf0f6" stroke-width="1"
                                        style="stroke: rgb(234, 234, 234); stroke-width: 0.5;" x1="0" x2="370" y1="195"
                                        y2="195"></line>
                                      <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                        stroke="#eaf0f6" stroke-width="1"
                                        style="stroke: rgb(234, 234, 234); stroke-width: 0.5;" x1="0" x2="370"
                                        y1="148.84615384615384" y2="148.84615384615384"></line>
                                      <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                        stroke="#eaf0f6" stroke-width="1"
                                        style="stroke: rgb(234, 234, 234); stroke-width: 0.5;" x1="0" x2="370"
                                        y1="102.69230769230771" y2="102.69230769230771"></line>
                                      <line class="visx-line" fill="transparent" shape-rendering="crispEdges"
                                        stroke="#eaf0f6" stroke-width="1"
                                        style="stroke: rgb(234, 234, 234); stroke-width: 0.5;" x1="0" x2="370"
                                        y1="56.53846153846153" y2="56.53846153846153"></line>
                                    </g>
                                    <path
                                      d="M52.00797746362434,139.6153846153846L101.34131079695767,56.53846153846153L150.67464413029097,84.23076923076923L200.00797746362434,61.153846153846146L249.34131079695769,84.23076923076923L298.674644130291,93.46153846153847L348.00797746362434,56.53846153846153"
                                      fill="transparent" stroke="#7357F6" stroke-linecap="round" stroke-width="2">
                                    </path>
                                    <path
                                      d="M52.00797746362434,111.92307692307692L101.34131079695767,153.46153846153845L150.67464413029097,158.07692307692307L200.00797746362434,153.46153846153845L249.34131079695769,88.84615384615384L298.674644130291,148.84615384615384L348.00797746362434,84.23076923076923"
                                      fill="transparent" stroke="#EE7D60" stroke-linecap="round" stroke-width="2">
                                    </path>
                                    <path
                                      d="M52.00797746362434,28.846153846153836L101.34131079695767,15L150.67464413029097,42.69230769230769L200.00797746362434,28.846153846153836L249.34131079695769,42.69230769230769L298.674644130291,116.53846153846153L348.00797746362434,84.23076923076923"
                                      fill="transparent" stroke="#97DFD8" stroke-linecap="round" stroke-width="2">
                                    </path>
                                    <rect fill="transparent" height="180" width="370" x="30" y="15"></rect>
                                  </svg></div>
                              </div>
                              <div class="w-full h-fit pb-2 pl-2">
                                <div class="w-full flex items-center gap-4 overflow-x-auto no-scrollbar justify-center">
                                  <div class="inline-flex items-center gap-4 justify-center">
                                    <div class="flex gap-2 items-center h-fit">
                                      <div class="w-4 h-4 min-h-4 min-w-4 rounded-md"
                                        style="background-color: rgb(115, 87, 246);"></div>
                                      <p class="text-small whitespace-nowrap max-w-[250px] overflow-hidden"><span
                                          class="text-neutral-500 block overflow-hidden text-ellipsis whitespace-nowrap">UX</span>
                                      </p>
                                    </div>
                                    <div class="flex gap-2 items-center h-fit">
                                      <div class="w-4 h-4 min-h-4 min-w-4 rounded-md"
                                        style="background-color: rgb(238, 125, 96);"></div>
                                      <p class="text-small whitespace-nowrap max-w-[250px] overflow-hidden"><span
                                          class="text-neutral-500 block overflow-hidden text-ellipsis whitespace-nowrap">Analytics</span>
                                      </p>
                                    </div>
                                    <div class="flex gap-2 items-center h-fit">
                                      <div class="w-4 h-4 min-h-4 min-w-4 rounded-md"
                                        style="background-color: rgb(151, 223, 216);"></div>
                                      <p class="text-small whitespace-nowrap max-w-[250px] overflow-hidden"><span
                                          class="text-neutral-500 block overflow-hidden text-ellipsis whitespace-nowrap">Settings</span>
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <section class="absolute h-full w-full flex items-center justify-center">
                                <div
                                  class="bg-neutral-100 p-2 flex items-center justify-center border-1 border-neutral-400 rounded shadow-smooth z-10 translate-y-3">
                                  <h5 class="text-neutral-600">Not enough data</h5>
                                </div>
                                <div class="h-full w-full bg-neutral-100 opacity-70 absolute"></div>
                              </section>
                            </div>
                          </section>
                        </div>
                      </div>
                      <div class="flex-1 mr-6" style="height: 300px; width: 20%; min-width: 100px; min-height: 100px;">
                        <div
                          class="h-full w-full bg-neutral-50 border-1 border-neutral-400 rounded flex flex-col overflow-hidden">
                          <section class="w-full h-fit flex items-center gap-2 p-3 border-b-1 border-neutral-400"><svg
                              class="h-5 w-5" style="max-width: 50vw; max-height: 50vh;" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M0 24V0h24v24z" fill="none"></path>
                              <g class="stroke-2 stroke-neutral-700" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect height="18" rx="1.105" ry="0" width="18" x="3" y="3"></rect>
                                <path d="M3 15h18M3 9h18"></path>
                              </g>
                            </svg>
                            <h4>Users with the least insights</h4>
                          </section>
                          <section class="h-full w-full">
                            <div class="h-full w-full flex flex-col relative">
                              <div class="h-full w-full overflow-auto">
                                <div class="w-full">
                                  <table class="w-full border-separate border-spacing-0">
                                    <thead class="bg-primary-100 top-0 z-10 sticky">
                                      <tr>
                                        <th
                                          class="px-3 py-2 text-left text-neutral-600 font-semibold border border-neutral-300 rounded-tl-lg border-l"
                                          colspan="1" style="position: relative; width: 1px; max-width: 1px;">
                                          <div>
                                            <div class="flex items-center gap-2"><svg class="h-6 w-6 stroke-1.5"
                                                style="max-width: 50vw; max-height: 50vh;" viewbox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g class="stroke-neutral-600" fill="none" stroke-linecap="round"
                                                  stroke-linejoin="round">
                                                  <path
                                                    d="M20.793 9.524a2.023 2.023 0 1 1-2.861 2.86 2.023 2.023 0 0 1 2.86-2.86M14.203 5.912a3.115 3.115 0 1 1-4.406 4.406 3.115 3.115 0 0 1 4.406-4.406M6.068 9.524a2.023 2.023 0 1 1-2.86 2.86 2.023 2.023 0 0 1 2.86-2.86M23 19v-1.096a2.5 2.5 0 0 0-2.5-2.5h-.801M1 19v-1.096a2.5 2.5 0 0 1 2.5-2.5h.801M17.339 19v-1.601a3.5 3.5 0 0 0-3.5-3.5H10.16a3.5 3.5 0 0 0-3.5 3.5V19">
                                                  </path>
                                                </g>
                                                <path d="M0 0h24v24H0Z" fill="none"></path>
                                              </svg>
                                              <p class="text-neutral-600">User</p>
                                            </div>
                                          </div>
                                          <div class="resizer"></div>
                                        </th>
                                        <th
                                          class="px-3 py-2 text-left text-neutral-600 font-semibold border border-neutral-300 border-l-0"
                                          colspan="1" style="position: relative; width: 1px; max-width: 1px;">
                                          <div>
                                            <div class="flex items-center gap-2"><svg class="h-6 w-6"
                                                style="max-width: 50vw; max-height: 50vh;" viewbox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path class="stroke-1.5 stroke-neutral-600"
                                                  d="M12.967 3 4.75 14H12l-.967 7 8.217-11H12Z" fill="none"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M0 0h24v24H0Z" fill="none"></path>
                                              </svg>
                                              <p class="text-neutral-600">Insights</p>
                                            </div>
                                          </div>
                                          <div class="resizer"></div>
                                        </th>
                                        <th
                                          class="px-3 py-2 text-left text-neutral-600 font-semibold border border-neutral-300 rounded-tr-lg border-l-0"
                                          colspan="1" style="position: relative; width: 1px; max-width: 1px;">
                                          <div>
                                            <div class="flex items-center gap-2"><svg class="h-6 w-6" fill="none"
                                                style="max-width: 50vw; max-height: 50vh;" viewbox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path class="stroke-1.5 stroke-neutral-600"
                                                  d="M4 8V6a2 2 0 0 1 2-2h2M4 16v2a2 2 0 0 0 2 2h2m8-16h2a2 2 0 0 1 2 2v2m-4 12h2a2 2 0 0 0 2-2v-2M9 12a3 3 0 1 0 6 0 3 3 0 0 0-6 0Z"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                              </svg>
                                              <p class="text-neutral-600">Captures</p>
                                            </div>
                                          </div>
                                          <div class="resizer"></div>
                                        </th>
                                      </tr>
                                    </thead>
                                    <tbody class="divide-neutral-200">
                                      <tr
                                        class="bg-neutral-50 transition-colors min-h-[content-height] disabled:cursor-cool-normal">
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-l border-t-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div class="wrapper flex items-center gap-2 overflow-hidden">
                                              <div
                                                class="rounded-full border-neutral-700 relative overflow-hidden flex items-center justify-center bg-primary-500 relative w-10 h-10 min-w-[2.5rem] min-h-[2.5rem] border-1">
                                                <h4 class="text-neutral-50 text-md">?</h4>
                                              </div>
                                              <section>
                                                <p class="font-semibold">Robin Labrot</p>
                                                <p class="text-neutral-500 font-medium">robin@listenup.ai</p>
                                              </section>
                                            </div>
                                          </div>
                                        </td>
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div
                                              class="wrapper w-fit p-2 flex gap-2 items-center bg-neutral-200 rounded">
                                              <svg class="h-4" style="max-width: 50vw; max-height: 50vh;"
                                                viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path class="stroke-1.5 stroke-neutral-700"
                                                  d="M12.967 3 4.75 14H12l-.967 7 8.217-11H12Z" fill="none"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M0 0h24v24H0Z" fill="none"></path>
                                              </svg>
                                              <p><span class="font-bold">0 </span>insights</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div
                                              class="wrapper w-min p-2 flex gap-2 items-center bg-neutral-200 rounded">
                                              <svg class="h-4" fill="none" style="max-width: 50vw; max-height: 50vh;"
                                                viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path class="stroke-1.5 stroke-neutral-700"
                                                  d="M4 8V6a2 2 0 0 1 2-2h2M4 16v2a2 2 0 0 0 2 2h2m8-16h2a2 2 0 0 1 2 2v2m-4 12h2a2 2 0 0 0 2-2v-2M9 12a3 3 0 1 0 6 0 3 3 0 0 0-6 0Z"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                              </svg>
                                              <p><span class="font-bold">0 </span>captures</p>
                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr
                                        class="bg-neutral-50 transition-colors min-h-[content-height] disabled:cursor-cool-normal">
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-l border-t-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div class="wrapper flex items-center gap-2 overflow-hidden">
                                              <div
                                                class="rounded-full border-neutral-700 relative overflow-hidden flex items-center justify-center bg-primary-500 relative w-10 h-10 min-w-[2.5rem] min-h-[2.5rem] border-1">
                                                <h4 class="text-neutral-50 text-md">?</h4>
                                              </div>
                                              <section>
                                                <p class="font-semibold">Thomas Duvergne</p>
                                                <p class="text-neutral-500 font-medium">thomas@listenup.ai</p>
                                              </section>
                                            </div>
                                          </div>
                                        </td>
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div
                                              class="wrapper w-fit p-2 flex gap-2 items-center bg-neutral-200 rounded">
                                              <svg class="h-4" style="max-width: 50vw; max-height: 50vh;"
                                                viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path class="stroke-1.5 stroke-neutral-700"
                                                  d="M12.967 3 4.75 14H12l-.967 7 8.217-11H12Z" fill="none"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M0 0h24v24H0Z" fill="none"></path>
                                              </svg>
                                              <p><span class="font-bold">2 </span>insights</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div
                                              class="wrapper w-min p-2 flex gap-2 items-center bg-neutral-200 rounded">
                                              <svg class="h-4" fill="none" style="max-width: 50vw; max-height: 50vh;"
                                                viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path class="stroke-1.5 stroke-neutral-700"
                                                  d="M4 8V6a2 2 0 0 1 2-2h2M4 16v2a2 2 0 0 0 2 2h2m8-16h2a2 2 0 0 1 2 2v2m-4 12h2a2 2 0 0 0 2-2v-2M9 12a3 3 0 1 0 6 0 3 3 0 0 0-6 0Z"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                              </svg>
                                              <p><span class="font-bold">1 </span>captures</p>
                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr
                                        class="bg-neutral-50 transition-colors min-h-[content-height] disabled:cursor-cool-normal">
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-l border-t-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div class="wrapper flex items-center gap-2 overflow-hidden">
                                              <div
                                                class="rounded-full border-neutral-700 relative overflow-hidden flex items-center justify-center bg-primary-500 relative w-10 h-10 min-w-[2.5rem] min-h-[2.5rem] border-1">
                                                <h4 class="text-neutral-50 text-md">?</h4>
                                              </div>
                                              <section>
                                                <p class="font-semibold">Henry Dash</p>
                                                <p class="text-neutral-500 font-medium">henry@listenup.ai</p>
                                              </section>
                                            </div>
                                          </div>
                                        </td>
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div
                                              class="wrapper w-fit p-2 flex gap-2 items-center bg-neutral-200 rounded">
                                              <svg class="h-4" style="max-width: 50vw; max-height: 50vh;"
                                                viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path class="stroke-1.5 stroke-neutral-700"
                                                  d="M12.967 3 4.75 14H12l-.967 7 8.217-11H12Z" fill="none"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M0 0h24v24H0Z" fill="none"></path>
                                              </svg>
                                              <p><span class="font-bold">10 </span>insights</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div
                                              class="wrapper w-min p-2 flex gap-2 items-center bg-neutral-200 rounded">
                                              <svg class="h-4" fill="none" style="max-width: 50vw; max-height: 50vh;"
                                                viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path class="stroke-1.5 stroke-neutral-700"
                                                  d="M4 8V6a2 2 0 0 1 2-2h2M4 16v2a2 2 0 0 0 2 2h2m8-16h2a2 2 0 0 1 2 2v2m-4 12h2a2 2 0 0 0 2-2v-2M9 12a3 3 0 1 0 6 0 3 3 0 0 0-6 0Z"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                              </svg>
                                              <p><span class="font-bold">3 </span>captures</p>
                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr
                                        class="bg-neutral-50 transition-colors min-h-[content-height] disabled:cursor-cool-normal">
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-l rounded-bl-lg border-t-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div class="wrapper flex items-center gap-2 overflow-hidden">
                                              <div
                                                class="rounded-full border-neutral-700 relative overflow-hidden flex items-center justify-center bg-primary-500 relative w-10 h-10 min-w-[2.5rem] min-h-[2.5rem] border-1">
                                                <h4 class="text-neutral-50 text-md">?</h4>
                                              </div>
                                              <section>
                                                <p class="font-semibold">Sophie Delatte</p>
                                                <p class="text-neutral-500 font-medium">sophie@listenup.ai</p>
                                              </section>
                                            </div>
                                          </div>
                                        </td>
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div
                                              class="wrapper w-fit p-2 flex gap-2 items-center bg-neutral-200 rounded">
                                              <svg class="h-4" style="max-width: 50vw; max-height: 50vh;"
                                                viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path class="stroke-1.5 stroke-neutral-700"
                                                  d="M12.967 3 4.75 14H12l-.967 7 8.217-11H12Z" fill="none"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M0 0h24v24H0Z" fill="none"></path>
                                              </svg>
                                              <p><span class="font-bold">34 </span>insights</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 rounded-br-lg border-t-0 border-l-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div
                                              class="wrapper w-min p-2 flex gap-2 items-center bg-neutral-200 rounded">
                                              <svg class="h-4" fill="none" style="max-width: 50vw; max-height: 50vh;"
                                                viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path class="stroke-1.5 stroke-neutral-700"
                                                  d="M4 8V6a2 2 0 0 1 2-2h2M4 16v2a2 2 0 0 0 2 2h2m8-16h2a2 2 0 0 1 2 2v2m-4 12h2a2 2 0 0 0 2-2v-2M9 12a3 3 0 1 0 6 0 3 3 0 0 0-6 0Z"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                              </svg>
                                              <p><span class="font-bold">10 </span>captures</p>
                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <section class="absolute h-full w-full flex items-center justify-center">
                                <div
                                  class="bg-neutral-100 p-2 flex items-center justify-center border-1 border-neutral-400 rounded shadow-smooth z-10 translate-y-3">
                                  <h5 class="text-neutral-600">Not enough data</h5>
                                </div>
                                <div class="h-full w-full bg-neutral-100 opacity-70 absolute"></div>
                              </section>
                            </div>
                          </section>
                        </div>
                      </div>
                      <div class="flex-1 mr-6" style="height: 300px; width: 20%; min-width: 100px; min-height: 100px;">
                        <div
                          class="h-full w-full bg-neutral-50 border-1 border-neutral-400 rounded flex flex-col overflow-hidden">
                          <section class="w-full h-fit flex items-center gap-2 p-3 border-b-1 border-neutral-400"><svg
                              class="h-5 w-5" style="max-width: 50vw; max-height: 50vh;" viewbox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M0 24V0h24v24z" fill="none"></path>
                              <g class="stroke-2 stroke-neutral-700" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect height="18" rx="1.105" ry="0" width="18" x="3" y="3"></rect>
                                <path d="M3 15h18M3 9h18"></path>
                              </g>
                            </svg>
                            <h4>Activity per team member</h4>
                          </section>
                          <section class="h-full w-full">
                            <div class="h-full w-full flex flex-col relative">
                              <div class="h-full w-full overflow-auto">
                                <div class="w-full">
                                  <table class="w-full border-separate border-spacing-0">
                                    <thead class="bg-primary-100 top-0 z-10 sticky">
                                      <tr>
                                        <th
                                          class="px-3 py-2 text-left text-neutral-600 font-semibold border border-neutral-300 rounded-tl-lg border-l"
                                          colspan="1" style="position: relative; width: 1px; max-width: 1px;">
                                          <div>
                                            <div class="flex items-center gap-2"><svg class="h-6 w-6 stroke-1.5"
                                                style="max-width: 50vw; max-height: 50vh;" viewbox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g class="stroke-neutral-600" fill="none" stroke-linecap="round"
                                                  stroke-linejoin="round">
                                                  <path
                                                    d="M20.793 9.524a2.023 2.023 0 1 1-2.861 2.86 2.023 2.023 0 0 1 2.86-2.86M14.203 5.912a3.115 3.115 0 1 1-4.406 4.406 3.115 3.115 0 0 1 4.406-4.406M6.068 9.524a2.023 2.023 0 1 1-2.86 2.86 2.023 2.023 0 0 1 2.86-2.86M23 19v-1.096a2.5 2.5 0 0 0-2.5-2.5h-.801M1 19v-1.096a2.5 2.5 0 0 1 2.5-2.5h.801M17.339 19v-1.601a3.5 3.5 0 0 0-3.5-3.5H10.16a3.5 3.5 0 0 0-3.5 3.5V19">
                                                  </path>
                                                </g>
                                                <path d="M0 0h24v24H0Z" fill="none"></path>
                                              </svg>
                                              <p class="text-neutral-600">Member</p>
                                            </div>
                                          </div>
                                          <div class="resizer"></div>
                                        </th>
                                        <th
                                          class="px-3 py-2 text-left text-neutral-600 font-semibold border border-neutral-300 border-l-0"
                                          colspan="1" style="position: relative; width: 1px; max-width: 1px;">
                                          <div>
                                            <div class="flex items-center gap-2"><svg class="h-6 w-6"
                                                style="max-width: 50vw; max-height: 50vh;" viewbox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path class="stroke-1.5 stroke-neutral-600"
                                                  d="M12.967 3 4.75 14H12l-.967 7 8.217-11H12Z" fill="none"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M0 0h24v24H0Z" fill="none"></path>
                                              </svg>
                                              <p class="text-neutral-600">Insights</p>
                                            </div>
                                          </div>
                                          <div class="resizer"></div>
                                        </th>
                                        <th
                                          class="px-3 py-2 text-left text-neutral-600 font-semibold border border-neutral-300 rounded-tr-lg border-l-0"
                                          colspan="1" style="position: relative; width: 1px; max-width: 1px;">
                                          <div>
                                            <div class="flex items-center gap-2"><svg class="h-6 w-6" fill="none"
                                                style="max-width: 50vw; max-height: 50vh;" viewbox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path class="stroke-1.5 stroke-neutral-600"
                                                  d="M4 8V6a2 2 0 0 1 2-2h2M4 16v2a2 2 0 0 0 2 2h2m8-16h2a2 2 0 0 1 2 2v2m-4 12h2a2 2 0 0 0 2-2v-2M9 12a3 3 0 1 0 6 0 3 3 0 0 0-6 0Z"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                              </svg>
                                              <p class="text-neutral-600">Captures</p>
                                            </div>
                                          </div>
                                          <div class="resizer"></div>
                                        </th>
                                      </tr>
                                    </thead>
                                    <tbody class="divide-neutral-200">
                                      <tr
                                        class="bg-neutral-50 transition-colors min-h-[content-height] disabled:cursor-cool-normal">
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-l border-t-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div class="wrapper flex items-center gap-2 overflow-hidden">
                                              <div
                                                class="rounded-full border-neutral-700 relative overflow-hidden flex items-center justify-center bg-primary-500 relative w-10 h-10 min-w-[2.5rem] min-h-[2.5rem] border-1">
                                                <h4 class="text-neutral-50 text-md">?</h4>
                                              </div>
                                              <section>
                                                <p class="font-semibold">Robin Labrot</p>
                                                <p class="text-neutral-500 font-medium">robin@listenup.ai</p>
                                              </section>
                                            </div>
                                          </div>
                                        </td>
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div
                                              class="wrapper w-fit p-2 flex gap-2 items-center bg-neutral-200 rounded">
                                              <svg class="h-4" style="max-width: 50vw; max-height: 50vh;"
                                                viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path class="stroke-1.5 stroke-neutral-700"
                                                  d="M12.967 3 4.75 14H12l-.967 7 8.217-11H12Z" fill="none"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M0 0h24v24H0Z" fill="none"></path>
                                              </svg>
                                              <p><span class="font-bold">3.9K </span>insights</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div
                                              class="wrapper w-min p-2 flex gap-2 items-center bg-neutral-200 rounded">
                                              <svg class="h-4" fill="none" style="max-width: 50vw; max-height: 50vh;"
                                                viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path class="stroke-1.5 stroke-neutral-700"
                                                  d="M4 8V6a2 2 0 0 1 2-2h2M4 16v2a2 2 0 0 0 2 2h2m8-16h2a2 2 0 0 1 2 2v2m-4 12h2a2 2 0 0 0 2-2v-2M9 12a3 3 0 1 0 6 0 3 3 0 0 0-6 0Z"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                              </svg>
                                              <p><span class="font-bold">2.9K </span>captures</p>
                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr
                                        class="bg-neutral-50 transition-colors min-h-[content-height] disabled:cursor-cool-normal">
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-l border-t-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div class="wrapper flex items-center gap-2 overflow-hidden">
                                              <div
                                                class="rounded-full border-neutral-700 relative overflow-hidden flex items-center justify-center bg-primary-500 relative w-10 h-10 min-w-[2.5rem] min-h-[2.5rem] border-1">
                                                <h4 class="text-neutral-50 text-md">?</h4>
                                              </div>
                                              <section>
                                                <p class="font-semibold">Thomas Duvergne</p>
                                                <p class="text-neutral-500 font-medium">thomas@listenup.ai</p>
                                              </section>
                                            </div>
                                          </div>
                                        </td>
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div
                                              class="wrapper w-fit p-2 flex gap-2 items-center bg-neutral-200 rounded">
                                              <svg class="h-4" style="max-width: 50vw; max-height: 50vh;"
                                                viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path class="stroke-1.5 stroke-neutral-700"
                                                  d="M12.967 3 4.75 14H12l-.967 7 8.217-11H12Z" fill="none"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M0 0h24v24H0Z" fill="none"></path>
                                              </svg>
                                              <p><span class="font-bold">3.2K </span>insights</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div
                                              class="wrapper w-min p-2 flex gap-2 items-center bg-neutral-200 rounded">
                                              <svg class="h-4" fill="none" style="max-width: 50vw; max-height: 50vh;"
                                                viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path class="stroke-1.5 stroke-neutral-700"
                                                  d="M4 8V6a2 2 0 0 1 2-2h2M4 16v2a2 2 0 0 0 2 2h2m8-16h2a2 2 0 0 1 2 2v2m-4 12h2a2 2 0 0 0 2-2v-2M9 12a3 3 0 1 0 6 0 3 3 0 0 0-6 0Z"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                              </svg>
                                              <p><span class="font-bold">2K </span>captures</p>
                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr
                                        class="bg-neutral-50 transition-colors min-h-[content-height] disabled:cursor-cool-normal">
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-l border-t-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div class="wrapper flex items-center gap-2 overflow-hidden">
                                              <div
                                                class="rounded-full border-neutral-700 relative overflow-hidden flex items-center justify-center bg-primary-500 relative w-10 h-10 min-w-[2.5rem] min-h-[2.5rem] border-1">
                                                <h4 class="text-neutral-50 text-md">?</h4>
                                              </div>
                                              <section>
                                                <p class="font-semibold">Henry Dash</p>
                                                <p class="text-neutral-500 font-medium">henry@listenup.ai</p>
                                              </section>
                                            </div>
                                          </div>
                                        </td>
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div
                                              class="wrapper w-fit p-2 flex gap-2 items-center bg-neutral-200 rounded">
                                              <svg class="h-4" style="max-width: 50vw; max-height: 50vh;"
                                                viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path class="stroke-1.5 stroke-neutral-700"
                                                  d="M12.967 3 4.75 14H12l-.967 7 8.217-11H12Z" fill="none"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M0 0h24v24H0Z" fill="none"></path>
                                              </svg>
                                              <p><span class="font-bold">798 </span>insights</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div
                                              class="wrapper w-min p-2 flex gap-2 items-center bg-neutral-200 rounded">
                                              <svg class="h-4" fill="none" style="max-width: 50vw; max-height: 50vh;"
                                                viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path class="stroke-1.5 stroke-neutral-700"
                                                  d="M4 8V6a2 2 0 0 1 2-2h2M4 16v2a2 2 0 0 0 2 2h2m8-16h2a2 2 0 0 1 2 2v2m-4 12h2a2 2 0 0 0 2-2v-2M9 12a3 3 0 1 0 6 0 3 3 0 0 0-6 0Z"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                              </svg>
                                              <p><span class="font-bold">409 </span>captures</p>
                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr
                                        class="bg-neutral-50 transition-colors min-h-[content-height] disabled:cursor-cool-normal">
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-l rounded-bl-lg border-t-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div class="wrapper flex items-center gap-2 overflow-hidden">
                                              <div
                                                class="rounded-full border-neutral-700 relative overflow-hidden flex items-center justify-center bg-primary-500 relative w-10 h-10 min-w-[2.5rem] min-h-[2.5rem] border-1">
                                                <h4 class="text-neutral-50 text-md">?</h4>
                                              </div>
                                              <section>
                                                <p class="font-semibold">Sophie Delatte</p>
                                                <p class="text-neutral-500 font-medium">sophie@listenup.ai</p>
                                              </section>
                                            </div>
                                          </div>
                                        </td>
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 border-t-0 border-l-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div
                                              class="wrapper w-fit p-2 flex gap-2 items-center bg-neutral-200 rounded">
                                              <svg class="h-4" style="max-width: 50vw; max-height: 50vh;"
                                                viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path class="stroke-1.5 stroke-neutral-700"
                                                  d="M12.967 3 4.75 14H12l-.967 7 8.217-11H12Z" fill="none"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M0 0h24v24H0Z" fill="none"></path>
                                              </svg>
                                              <p><span class="font-bold">239 </span>insights</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td
                                          class="px-3 py-3 whitespace-nowrap border border-neutral-300 rounded-br-lg border-t-0 border-l-0"
                                          style="width: 1px; max-width: 1px;">
                                          <div class="text-small">
                                            <div
                                              class="wrapper w-min p-2 flex gap-2 items-center bg-neutral-200 rounded">
                                              <svg class="h-4" fill="none" style="max-width: 50vw; max-height: 50vh;"
                                                viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path class="stroke-1.5 stroke-neutral-700"
                                                  d="M4 8V6a2 2 0 0 1 2-2h2M4 16v2a2 2 0 0 0 2 2h2m8-16h2a2 2 0 0 1 2 2v2m-4 12h2a2 2 0 0 0 2-2v-2M9 12a3 3 0 1 0 6 0 3 3 0 0 0-6 0Z"
                                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                              </svg>
                                              <p><span class="font-bold">102 </span>captures</p>
                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <section class="absolute h-full w-full flex items-center justify-center">
                                <div
                                  class="bg-neutral-100 p-2 flex items-center justify-center border-1 border-neutral-400 rounded shadow-smooth z-10 translate-y-3">
                                  <h5 class="text-neutral-600">Not enough data</h5>
                                </div>
                                <div class="h-full w-full bg-neutral-100 opacity-70 absolute"></div>
                              </section>
                            </div>
                          </section>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="flex flex-col z-30">
            <div class="fixed bottom-2 right-2 mb-12 hover:cursor-cool-clickable disabled:cursor-cool-normal">
              <div aria-controls="radix-:r4r:" aria-expanded="false" aria-haspopup="dialog"
                class="w-11 h-11 rounded-full bg-[#FFF9DE] border-2 border-secondary-300 p-1 shadow-lg flex items-center justify-center hover:cursor-cool-clickable disabled:cursor-cool-normal"
                data-state="closed" type="button"><img alt="ListenUp Illustration Logo" data-nimg="1" decoding="async"
                  height="25" loading="lazy" src="{{  asset("assets/ListenUp-Logo.svg") }} " style="color: transparent;"
                  width="25" /></div>
            </div>
            <div
              class="fixed bottom-2 right-2 w-11 h-11 rounded-full bg-primary-300 border-2 border-primary-600 p-4 shadow-lg flex items-center justify-center hover:cursor-cool-clickable disabled:cursor-cool-normal"
              style="z-index: 99999;"><button aria-expanded="false" aria-haspopup="menu"
                class="flex items-center justify-center w-fit rounded font-medium transition-colors select-none text-neutral-600 px-3 py-2"
                data-state="closed" id="radix-:r4s:" tabindex="0" type="button">
                <h3 class="text-primary-600">?</h3>
              </button></div>
          </div>
          <div class="absolute h-full w-full"></div>
          <div
            class="absolute left-1/2 z-30 w-full translate-x-[-50%] bottom-10 flex flex-col justify-center items-center">
            <div></div>
          </div>
        </div>
      </div>
    </div>
  </div><next-route-announcer>
    <p aria-live="assertive" id="__next-route-announcer__" role="alert"
      style="border: 0px; clip: rect(0px, 0px, 0px, 0px); height: 1px; margin: -1px; overflow: hidden; padding: 0px; position: absolute; top: 0px; width: 1px; white-space: nowrap; overflow-wrap: normal;">
      Analytics | ListenUp!</p>
  </next-route-announcer><iframe allow="payment *" allowtransparency="true" aria-hidden="true" frameborder="0"
    name="__privateStripeController3321" role="presentation" scrolling="no"
    src="./analytics_files/controller-with-preconnect-0ac892cc1983a4b6e5727ee594af4fd2.html"
    style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; visibility: hidden !important; position: fixed !important; height: 1px !important; pointer-events: none !important; user-select: none !important;"
    tabindex="-1"></iframe><iframe aria-hidden="true" id="_hjSafeContext_74628675"
    src="./analytics_files/saved_resource.html"
    style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"
    tabindex="-1" title="_hjSafeContext"></iframe><iframe allow="payment *" allowtransparency="true" aria-hidden="true"
    frameborder="0" name="__privateStripeMetricsController3320" role="presentation" scrolling="no"
    src="./analytics_files/m-outer-3437aaddcdf6922d623e172c2d6f9278.html"
    style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; visibility: hidden !important; position: fixed !important; height: 1px !important; pointer-events: none !important; user-select: none !important;"
    tabindex="-1"></iframe><iframe aria-hidden="true" id="intercom-frame" src="./analytics_files/saved_resource(1).html"
    style="position: absolute !important; opacity: 0 !important; width: 1px !important; height: 1px !important; top: 0 !important; left: 0 !important; border: none !important; display: block !important; z-index: -1 !important; pointer-events: none;"
    tabindex="-1" title="Intercom"></iframe>
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
        font-family: intercom-font, "Helvetica Neue", "Apple Color Emoji", Helvetica, Arial, sans-serif;
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
        background: #FBD570;
        cursor: pointer;
        box-shadow: 0 1px 6px 0 rgba(0, 0, 0, 0.06), 0 2px 32px 0 rgba(0, 0, 0, 0.16);
        transition: transform 167ms cubic-bezier(0.33, 0.00, 0.00, 1.00);
        box-sizing: content-box;
      }


      .intercom-lightweight-app-launcher:hover {
        transition: transform 250ms cubic-bezier(0.33, 0.00, 0.00, 1.00);
        transform: scale(1.1)
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
        background: #C1BEFA
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
  </div><svg aria-hidden="true" style="width: 0px; height: 0px; position: absolute; top: -100%; left: -100%;"><text
      id="__react_svg_text_measurement_id">25</text></svg>


  <div id="tagsBlock" data-radix-popper-content-wrapper="" dir="ltr" class="hidden"
    style="position: fixed; left: 0px; top: 0px; transform: translate(65px, 130px); min-width: max-content; z-index: 300; --radix-popper-available-width: 2324.765625px; --radix-popper-available-height: 644.8046875px; --radix-popper-anchor-width: 117.5px; --radix-popper-anchor-height: 42.4609375px; --radix-popper-transform-origin: 0% 0px;">
    <div data-side="bottom" data-align="start" role="menu" aria-orientation="vertical" data-state="open"
      data-radix-menu-content="" dir="ltr" id="radix-:rq:" aria-labelledby="radix-:rp:"
      class="rounded border-2 border-neutral-300 bg-neutral-100 p-1 shadow-2xl overflow-y-auto select-none w-60 h-fit"
      tabindex="-1" data-orientation="vertical"
      style="outline: none; z-index: 300; --radix-dropdown-menu-content-transform-origin: var(--radix-popper-transform-origin); --radix-dropdown-menu-content-available-width: var(--radix-popper-available-width); --radix-dropdown-menu-content-available-height: var(--radix-popper-available-height); --radix-dropdown-menu-trigger-width: var(--radix-popper-anchor-width); --radix-dropdown-menu-trigger-height: var(--radix-popper-anchor-height); opacity: 1; transform: none;">
      <div class="flex h-full w-full flex-col overflow-hidden rounded-md bg-neutral-100 text-popover-foreground"
        cmdk-root=""><label cmdk-label="" for=":r1d:" id=":r1c:"
          style="position: absolute; width: 1px; height: 1px; padding: 0px; margin: -1px; overflow: hidden; clip: rect(0px, 0px, 0px, 0px); white-space: nowrap; border-width: 0px;"></label>
        <div class="flex items-center px-3 bg-neutral-50 rounded mb-2 border-1 border-neutral-400"
          cmdk-input-wrapper=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6"
            style="max-width: 50vw; max-height: 50vh;">
            <g fill="none">
              <path class="stroke-2 stroke-neutral-600/50" stroke-linecap="round" stroke-linejoin="round"
                d="M14.193 5.582a5.971 5.971 0 1 1-8.444 8.444 5.971 5.971 0 0 1 8.444-8.444M14.15 14.06 20 19.99">
              </path>
            </g>
          </svg><input
            class="flex h-11 w-full rounded-md bg-transparent py-3 p outline-none placeholder:text-muted-foreground disabled:cursor-not-allowed disabled:opacity-50 bg-neutral-50/0"
            placeholder="Search tags" cmdk-input="" autocomplete="off" autocorrect="off" spellcheck="false"
            aria-autocomplete="list" role="combobox" aria-expanded="true" aria-controls=":r1b:" aria-labelledby=":r1c:"
            id=":r1d:" type="text" value=""></div>
        <div class="w-full flex items-center justify-center gap-2 py-3"><svg xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24" class="h-4 w-4" style="max-width: 50vw; max-height: 50vh;">
            <g fill="none">
              <path class="stroke-2 stroke-neutral-700" stroke-linecap="round" stroke-linejoin="round"
                d="M8.313 7.759a.389.389 0 1 1-.55.55.389.389 0 0 1 .55-.55"></path>
              <path class="stroke-2 stroke-neutral-700" stroke-linecap="round" stroke-linejoin="round"
                d="M7.244 3.025 10.093 3a1.983 1.983 0 0 1 1.418.58l8.904 8.908a2 2 0 0 1 0 2.829l-5.094 5.097a2 2 0 0 1-2.83 0L3.58 11.5A1.982 1.982 0 0 1 3 10.099V7.287c0-.526.209-1.03.58-1.401l2.28-2.281a1.979 1.979 0 0 1 1.384-.58Z">
              </path>
            </g>
          </svg>
          <h4>No tags</h4>
        </div>
      </div>
    </div>
  </div>
  <div id="dateBlock" data-radix-popper-content-wrapper="" dir="ltr" class="hidden"
    style="position: fixed; left: 0px; top: 0px; transform: translate(191.25px, 130px); min-width: max-content; z-index: 300; --radix-popper-available-width: 2199.27734375px; --radix-popper-available-height: 644.8046875px; --radix-popper-anchor-width: 125.99609375px; --radix-popper-anchor-height: 42.4609375px; --radix-popper-transform-origin: 0% 0px;">
    <div data-side="bottom" data-align="start" role="menu" aria-orientation="vertical" data-state="open"
      data-radix-menu-content="" dir="ltr" id="radix-:rs:" aria-labelledby="radix-:rr:"
      class="rounded border-2 border-neutral-300 bg-neutral-100 p-1 shadow-2xl overflow-y-auto select-none w-40 h-fit"
      tabindex="-1" data-orientation="vertical"
      style="outline: none; z-index: 300; --radix-dropdown-menu-content-transform-origin: var(--radix-popper-transform-origin); --radix-dropdown-menu-content-available-width: var(--radix-popper-available-width); --radix-dropdown-menu-content-available-height: var(--radix-popper-available-height); --radix-dropdown-menu-trigger-width: var(--radix-popper-anchor-width); --radix-dropdown-menu-trigger-height: var(--radix-popper-anchor-height); opacity: 1; transform: none;">
      <div role="group" class="flex flex-col select-none items-center justify-between rounded">
        <div role="menuitemradio" aria-checked="false"
          class="hover:cursor-cool-clickable disabled:cursor-cool-normal w-full flex select-none items-center justify-between gap-2 rounded px-2 py-3 outline-none hover:bg-primary-300 focus:bg-primary-300 transition-colors"
          data-state="unchecked" tabindex="-1" data-orientation="vertical" data-radix-collection-item="">
          <h5>Today</h5>
          <div class="h-5 w-5"></div>
        </div>
        <div role="menuitemradio" aria-checked="false"
          class="hover:cursor-cool-clickable disabled:cursor-cool-normal w-full flex select-none items-center justify-between gap-2 rounded px-2 py-3 outline-none hover:bg-primary-300 focus:bg-primary-300 transition-colors"
          data-state="unchecked" tabindex="-1" data-orientation="vertical" data-radix-collection-item="">
          <h5>Last Week</h5>
          <div class="h-5 w-5"></div>
        </div>
        <div role="menuitemradio" aria-checked="false"
          class="hover:cursor-cool-clickable disabled:cursor-cool-normal w-full flex select-none items-center justify-between gap-2 rounded px-2 py-3 outline-none hover:bg-primary-300 focus:bg-primary-300 transition-colors"
          data-state="unchecked" tabindex="-1" data-orientation="vertical" data-radix-collection-item="">
          <h5>Last Month</h5>
          <div class="h-5 w-5"></div>
        </div>
        <div role="menuitemradio" aria-checked="false"
          class="hover:cursor-cool-clickable disabled:cursor-cool-normal w-full flex select-none items-center justify-between gap-2 rounded px-2 py-3 outline-none hover:bg-primary-300 focus:bg-primary-300 transition-colors"
          data-state="unchecked" tabindex="-1" data-orientation="vertical" data-radix-collection-item="">
          <h5>Last Year</h5>
          <div class="h-5 w-5"></div>
        </div>
        <div role="menuitemradio" aria-checked="true"
          class="hover:cursor-cool-clickable disabled:cursor-cool-normal w-full flex select-none items-center justify-between gap-2 rounded px-2 py-3 outline-none hover:bg-primary-300 focus:bg-primary-300 transition-colors"
          data-state="checked" tabindex="-1" data-orientation="vertical" data-radix-collection-item="">
          <h5>All</h5>
          <div class="h-5 w-5"><span data-state="checked"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 stroke-primary-600" style="max-width: 50vw; max-height: 50vh;">
                <g fill="none">
                  <path class="stroke-[3]" stroke-linecap="round" stroke-linejoin="round" d="m20 6.5-11 11-5-5"></path>
                </g>
              </svg></span></div>
        </div>
      </div>
    </div>
  </div>
  <div id="sourcesBlock" data-radix-popper-content-wrapper="" dir="ltr" class="hidden"
    style="position: fixed; left: 0px; top: 0px; transform: translate(325px, 130px); min-width: max-content; z-index: 300; --radix-popper-available-width: 2065.29296875px; --radix-popper-available-height: 644.8046875px; --radix-popper-anchor-width: 142.16796875px; --radix-popper-anchor-height: 42.4609375px; --radix-popper-transform-origin: 0% 0px;">
    <div data-side="bottom" data-align="start" role="menu" aria-orientation="vertical" data-state="open"
      data-radix-menu-content="" dir="ltr" id="radix-:ru:" aria-labelledby="radix-:rt:"
      class="rounded border-2 border-neutral-300 bg-neutral-100 p-1 shadow-2xl overflow-y-auto select-none w-fit h-fit"
      tabindex="-1" data-orientation="vertical"
      style="outline: none; z-index: 300; --radix-dropdown-menu-content-transform-origin: var(--radix-popper-transform-origin); --radix-dropdown-menu-content-available-width: var(--radix-popper-available-width); --radix-dropdown-menu-content-available-height: var(--radix-popper-available-height); --radix-dropdown-menu-trigger-width: var(--radix-popper-anchor-width); --radix-dropdown-menu-trigger-height: var(--radix-popper-anchor-height); opacity: 1; transform: none;">
      <div class="flex h-full w-full flex-col overflow-hidden rounded-md bg-neutral-100 text-popover-foreground"
        cmdk-root=""><label cmdk-label="" for=":r2l:" id=":r2k:"
          style="position: absolute; width: 1px; height: 1px; padding: 0px; margin: -1px; overflow: hidden; clip: rect(0px, 0px, 0px, 0px); white-space: nowrap; border-width: 0px;"></label>
        <div class="max-h-[300px] overflow-y-scroll overflow-x-hidden" cmdk-list="" role="listbox"
          aria-label="Suggestions" id=":r2j:" aria-labelledby=":r2l:" style="--cmdk-list-height: 384.0px;">
          <div cmdk-list-sizer="">
            <div
              class="overflow-hidden text-foreground [&amp;_[cmdk-group-heading]]:py-1.5 [&amp;_[cmdk-group-heading]]:text-xs [&amp;_[cmdk-group-heading]]:font-medium [&amp;_[cmdk-group-heading]]:text-muted-foreground"
              cmdk-group="" role="presentation" data-value="undefined">
              <div cmdk-group-items="" role="group">
                <div
                  class="relative flex select-none items-center rounded px-2 py-3 outline-none aria-selected:bg-primary-300 data-[disabled]:pointer-events-none data-[disabled]:opacity-50 transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal flex justify-between gap-10"
                  id=":r2o:" cmdk-item="" role="option" data-value="extension">
                  <div class="w-full flex items-center gap-2">
                    <div class=""><img alt="ListenUp! Chrome Extension" loading="lazy" width="20" height="20"
                        decoding="async" data-nimg="1"
                        src="{{ asset("assets/listenup_chrome_extension.png") }}"
                        style="color: transparent;"></div>
                    <h5>Extension</h5>
                  </div><button type="button" role="switch" aria-checked="false" data-state="unchecked" value="on"
                    class="w-11 h-[24px] flex rounded-full">
                    <div
                      class="w-10 h-[24px] flex rounded-full py-0 px-[3px] items-center transition-colors bg-grainy-texture justify-start bg-neutral-300">
                      <div class="w-[18px] h-[18px] rounded-full transition-colors  shadow-smooth bg-neutral-50"></div>
                    </div>
                  </button>
                </div>
                <div
                  class="relative flex select-none items-center rounded px-2 py-3 outline-none aria-selected:bg-primary-300 data-[disabled]:pointer-events-none data-[disabled]:opacity-50 transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal flex justify-between gap-10"
                  id=":r2r:" cmdk-item="" role="option" data-value="manual">
                  <div class="w-full flex items-center gap-2">
                    <div class="">
                      <div class="rounded-md  p-[2px] flex items-center justify-center"><svg class="h-4 w-4"
                          viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg"
                          style="max-width: 50vw; max-height: 50vh;">
                          <path
                            d="M17.5 10.9V13.3C17.5 14.6255 16.4255 15.7 15.1 15.7H3.9C2.57452 15.7 1.5 14.6255 1.5 13.3V10.9M9.5 1.30005V9.30005M9.5 1.30005L6.3 4.50005M9.5 1.30005L12.7 4.50005"
                            class="stroke-2 stroke-neutral-700" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg></div>
                    </div>
                    <h5>Manual</h5>
                  </div><button type="button" role="switch" aria-checked="false" data-state="unchecked" value="on"
                    class="w-11 h-[24px] flex rounded-full">
                    <div
                      class="w-10 h-[24px] flex rounded-full py-0 px-[3px] items-center transition-colors bg-grainy-texture justify-start bg-neutral-300">
                      <div class="w-[18px] h-[18px] rounded-full transition-colors  shadow-smooth bg-neutral-50"></div>
                    </div>
                  </button>
                </div>
                <div
                  class="relative flex select-none items-center rounded px-2 py-3 outline-none aria-selected:bg-primary-300 data-[disabled]:pointer-events-none data-[disabled]:opacity-50 transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal flex justify-between"
                  id=":r2u:" cmdk-item="" role="option" data-value="slack">
                  <div class="w-full flex items-center gap-2">
                    <div class=""><img alt="Slack" loading="lazy" width="20" height="20" decoding="async" data-nimg="1"
                        src="{{ asset("assets/slack_logo.png") }}"
                        style="color: transparent;"></div>
                    <h5>Slack</h5>
                  </div><button type="button" role="switch" aria-checked="false" data-state="unchecked" value="on"
                    class="w-11 h-[24px] flex rounded-full">
                    <div
                      class="w-10 h-[24px] flex rounded-full py-0 px-[3px] items-center transition-colors bg-grainy-texture justify-start bg-neutral-300">
                      <div class="w-[18px] h-[18px] rounded-full transition-colors  shadow-smooth bg-neutral-50"></div>
                    </div>
                  </button>
                </div>
                <div
                  class="relative flex select-none items-center rounded px-2 py-3 outline-none aria-selected:bg-primary-300 data-[disabled]:pointer-events-none data-[disabled]:opacity-50 transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal flex justify-between"
                  id=":r31:" cmdk-item="" role="option" data-value="intercom">
                  <div class="w-full flex items-center gap-2">
                    <div class=""><img alt="Intercom" loading="lazy" width="20" height="20" decoding="async"
                        data-nimg="1"
                        src="{{ asset("assets/intercom_logo.png") }}"
                        style="color: transparent;"></div>
                    <h5>Intercom</h5>
                  </div><button type="button" role="switch" aria-checked="false" data-state="unchecked" value="on"
                    class="w-11 h-[24px] flex rounded-full">
                    <div
                      class="w-10 h-[24px] flex rounded-full py-0 px-[3px] items-center transition-colors bg-grainy-texture justify-start bg-neutral-300">
                      <div class="w-[18px] h-[18px] rounded-full transition-colors  shadow-smooth bg-neutral-50"></div>
                    </div>
                  </button>
                </div>
                <div
                  class="relative flex select-none items-center rounded px-2 py-3 outline-none aria-selected:bg-primary-300 data-[disabled]:pointer-events-none data-[disabled]:opacity-50 transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal flex justify-between"
                  id=":r34:" cmdk-item="" role="option" data-value="zendesk">
                  <div class="w-full flex items-center gap-2">
                    <div class=""><img alt="Zendesk" loading="lazy" width="20" height="20" decoding="async"
                        data-nimg="1"
                        src="{{ asset("assets/zendesk_logo.png") }}"
                        style="color: transparent;"></div>
                    <h5>Zendesk</h5>
                  </div><button type="button" role="switch" aria-checked="false" data-state="unchecked" value="on"
                    class="w-11 h-[24px] flex rounded-full">
                    <div
                      class="w-10 h-[24px] flex rounded-full py-0 px-[3px] items-center transition-colors bg-grainy-texture justify-start bg-neutral-300">
                      <div class="w-[18px] h-[18px] rounded-full transition-colors  shadow-smooth bg-neutral-50"></div>
                    </div>
                  </button>
                </div>
                <div
                  class="relative flex select-none items-center rounded px-2 py-3 outline-none aria-selected:bg-primary-300 data-[disabled]:pointer-events-none data-[disabled]:opacity-50 transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal flex justify-between"
                  id=":r37:" cmdk-item="" role="option" data-value="hubspot">
                  <div class="w-full flex items-center gap-2">
                    <div class=""><img alt="Hubspot" loading="lazy" width="20" height="20" decoding="async"
                        data-nimg="1"
                        src="{{ asset("assets/hubspot_logo.png") }}"
                        style="color: transparent;"></div>
                    <h5>Hubspot</h5>
                  </div><button type="button" role="switch" aria-checked="false" data-state="unchecked" value="on"
                    class="w-11 h-[24px] flex rounded-full">
                    <div
                      class="w-10 h-[24px] flex rounded-full py-0 px-[3px] items-center transition-colors bg-grainy-texture justify-start bg-neutral-300">
                      <div class="w-[18px] h-[18px] rounded-full transition-colors  shadow-smooth bg-neutral-50"></div>
                    </div>
                  </button>
                </div>
                <div
                  class="relative flex select-none items-center rounded px-2 py-3 outline-none aria-selected:bg-primary-300 data-[disabled]:pointer-events-none data-[disabled]:opacity-50 transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal flex justify-between"
                  id=":r3a:" cmdk-item="" role="option" data-value="email" aria-selected="true" data-selected="true">
                  <div class="w-full flex items-center gap-2">
                    <div class=""><img alt="Email" loading="lazy" width="20" height="20" decoding="async" data-nimg="1"
                        
                    src="{{ asset("assets/gmail_logo.png") }}"style="color: transparent;"></div>
                    <h5>Email</h5>
                  </div><button type="button" role="switch" aria-checked="false" data-state="unchecked" value="on"
                    class="w-11 h-[24px] flex rounded-full">
                    <div
                      class="w-10 h-[24px] flex rounded-full py-0 px-[3px] items-center transition-colors bg-grainy-texture justify-start bg-neutral-300">
                      <div class="w-[18px] h-[18px] rounded-full transition-colors  shadow-smooth bg-neutral-50"></div>
                    </div>
                  </button>
                </div>
                <div
                  class="relative flex select-none items-center rounded px-2 py-3 outline-none aria-selected:bg-primary-300 data-[disabled]:pointer-events-none data-[disabled]:opacity-50 transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal flex justify-between"
                  id=":r3d:" cmdk-item="" role="option" data-value="api">
                  <div class="w-full flex items-center gap-2">
                    <div class=""><img alt="ListenUp! API" loading="lazy" width="20" height="20" decoding="async"
                        data-nimg="1"
                        
                        src="{{ asset("assets/listenup_api_logo.png") }}"style="color: transparent;"></div>
                    <h5>API</h5>
                  </div><button type="button" role="switch" aria-checked="false" data-state="unchecked" value="on"
                    class="w-11 h-[24px] flex rounded-full">
                    <div
                      class="w-10 h-[24px] flex rounded-full py-0 px-[3px] items-center transition-colors bg-grainy-texture justify-start bg-neutral-300">
                      <div class="w-[18px] h-[18px] rounded-full transition-colors  shadow-smooth bg-neutral-50"></div>
                    </div>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    var tagsButton = document.getElementById("tagsButton")

    tagsButton.addEventListener("click", function () {
      var tagsBlock = document.getElementById("tagsBlock")

      tagsBlock.classList.toggle("hidden")
    })
    var dateButton = document.getElementById("dateButton")

    dateButton.addEventListener("click", function () {
      var dateBlock = document.getElementById("dateBlock")

      dateBlock.classList.toggle("hidden")
    })

    var sourcesButton = document.getElementById("sourcesButton")

    sourcesButton.addEventListener("click", function () {
      var sourcesBlock = document.getElementById("sourcesBlock")

      sourcesBlock.classList.toggle("hidden")
    })

  </script>
</body>

</html>@include('feedback')@include('profileSettings')
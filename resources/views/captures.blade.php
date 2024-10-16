<!DOCTYPE html>

<!-- saved from url=(0043){{ route("captures") }} -->
<html style="">
  @include('fonts')
<plasmo-csui><template shadowrootmode="open">
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
  <title>Captures | ListenUp!</title>
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
  <link as="script" href="./captures_files/captures-5712dfcc4d1f1682.js" rel="prefetch" />
  <link as="script" href="./captures_files/insights-4b936e8ed1083550.js" rel="prefetch" />
  <link as="script" href="./captures_files/899-fb0e87850e1e8a2d.js" rel="prefetch" />
  <link as="script" href="./captures_files/analytics-f7aa99a2929628e8.js" rel="prefetch" />
  <link as="script" href="./captures_files/users-b6268a0be19d5f0c.js" rel="prefetch" />
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
                    aria-controls="radix-:r3u:-content-home" aria-selected="false"
                    class="px-3 py-2 rounded border-opacity-0 flex items-center z-10 hover:bg-neutral-100 hover:transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal w-fit justify-center"
                    data-orientation="horizontal" data-radix-collection-item="" data-state="inactive"
                    href="{{ route("home") }}" id="radix-:r3u:-trigger-home" role="tab" tabindex="-1" type="button">
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
                  </a><a aria-controls="radix-:r3u:-content-captures" aria-selected="true"
                    class="px-3 py-2 rounded border-opacity-0 flex items-center z-10 hover:cursor-cool-clickable disabled:cursor-cool-normal w-fit justify-center"
                    data-orientation="horizontal" data-radix-collection-item="" data-state="active"
                    href="{{ route("captures") }}" id="radix-:r3u:-trigger-captures" role="tab" tabindex="-1"
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
                  </a><a aria-controls="radix-:r3u:-content-insights" aria-selected="false"
                    class="px-3 py-2 rounded border-opacity-0 flex items-center z-10 hover:bg-neutral-100 hover:transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal w-fit justify-center"
                    data-orientation="horizontal" data-radix-collection-item="" data-state="inactive"
                    href="{{ route("meetings") }}" id="radix-:r3u:-trigger-insights" role="tab" tabindex="-1"
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
                  </a><a aria-controls="radix-:r3u:-content-analytics" aria-selected="false"
                    class="px-3 py-2 rounded border-opacity-0 flex items-center z-10 hover:bg-neutral-100 hover:transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal w-fit justify-center"
                    data-orientation="horizontal" data-radix-collection-item="" data-state="inactive"
                    href="{{ route("analytics") }}" id="radix-:r3u:-trigger-analytics" role="tab" tabindex="-1"
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
                  </a><a aria-controls="radix-:r3u:-content-users" aria-selected="false"
                    class="px-3 py-2 rounded border-opacity-0 flex items-center z-10 hover:bg-neutral-100 hover:transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal w-fit justify-center"
                    data-orientation="horizontal" data-radix-collection-item="" data-state="inactive"
                    href="{{ route("friends") }}" id="radix-:r3u:-trigger-users" role="tab" tabindex="-1" type="button">
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
                  style="width: 94px; height: 48px; transform: translateX(105px) translateY(0px) translateZ(0px);">
                </div>
              </div>
            </section>
            <div class="flex items-center justify-end gap-2 flex-grow basis-0"><button
                class="flex items-center font-bold rounded text-base font-bold px-3 py-3"
                style="transform: none; transform-origin: 50% 50% 0px;" tabindex="0">
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
                      <img alt="Avatar" class="object-cover" src="{{ auth()->user()->avatar ? asset('storage/' . auth()->user()->avatar) : asset('assets/member_avatar_453.png') }}"
                        style="height:100%" /></div>
                    <div class="absolute -bottom-1 -right-1">
                      <div
                        class="rounded-full border-neutral-700 relative overflow-hidden flex items-center justify-center bg-primary-500 relative w-5 h-5 min-w-[1rem] min-h-[1rem] border-1">
                        <img alt="Avatar" class="object-cover"
                          src="{{ asset("assets/organization_avatar_508.png") }}" /></div>
                    </div>
                  </div>
                  <h5 class="font-bold">{{ auth()->user()->name}}</h5>
                </div>
                <div style="transform: none;"><svg class="h-6" style="max-width: 50vw; max-height: 50vh;"
                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path class="stroke-2 stroke-neutral-700" d="m8 10 4 4 4-4" fill="none" stroke="#323232"
                      stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M0 0h24v24H0Z" fill="none"></path>
                  </svg></div>
              </button></div>
          </section>
          <div class="flex">
            <section class="h-[calc(100vh-4rem)] w-screen">
              <div class="h-full w-full flex">
                <div
                  class="flex-none h-full border-r-1 border-neutral-300 bg-neutral-50 w-96 flex-col flex justify-between">
                  <div class="w-full h-full">
                    <div class="w-full h-full flex flex-col bg-neutral-50 relative">
                      <div class="flex flex-col gap-4 bg-neutral-50 px-3 pt-3 pb-1 border-b-1 border-neutral-300 h-fit">
                        <section class="flex justify-between items-center">
                          <div><button style="position:relative;overflow:visible"
                              class="starAnimationBlock flex items-center justify-center gap-2 rounded font-medium leading-4 whitespace-nowrap overflow-hidden text-overflow-ellipsis w-auto min-w-0 min-h-0 select-none px-3 py-2 bg-secondary-300 border-[2px] border-neutral-700 shadow-smoothxl opacity-100"
                              style="transform: none; transform-origin: 50% 50% 0px;" tabindex="0" type="button"><svg
                                class="h-6 w-6" fill="none" style="max-width: 50vw; max-height: 50vh;"
                                viewbox="0 0 19 17" xmlns="http://www.w3.org/2000/svg">
                                <path class="stroke-2 stroke-neutral-700"
                                  d="M17.5 10.9V13.3C17.5 14.6255 16.4255 15.7 15.1 15.7H3.9C2.57452 15.7 1.5 14.6255 1.5 13.3V10.9M9.5 1.30005V9.30005M9.5 1.30005L6.3 4.50005M9.5 1.30005L12.7 4.50005"
                                  stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                              <h5>Add captures</h5>
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
                            </button></div><button aria-autocomplete="none" aria-controls="radix-:r46:"
                            aria-expanded="false"
                            class="flex items-center justify-center w-fit rounded px-3 py-2 font-medium transition-colors select-none text-neutral-600 hover:bg-neutral-100"
                            data-state="closed" dir="ltr" role="combobox" tabindex="0" type="button"><span
                              style="pointer-events: none;">
                              <div class="flex items-center gap-2"><svg class="h-6 w-6"
                                  style="max-width: 50vw; max-height: 50vh;" viewbox="0 0 24 24"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <g data-name="Layer 2" fill="none">
                                    <path d="M0 0h24v24H0Z"></path>
                                    <rect class="stroke-2 stroke-neutral-700" height="15" rx="4" stroke-linecap="round"
                                      stroke-linejoin="round" width="18" x="3" y="4.5"></rect>
                                    <path class="stroke-2 stroke-neutral-700"
                                      d="m7 8.984 4.205 1.833a2 2 0 0 0 1.593.002L17 9.002" stroke-linecap="round"
                                      stroke-linejoin="round"></path>
                                  </g>
                                </svg>
                                <h5>All</h5>
                              </div>
                            </span>
                            <div aria-hidden="true" style="transform: none;"><svg class="h-6"
                                style="max-width: 50vw; max-height: 50vh;" viewbox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path class="stroke-2 stroke-neutral-600" d="m8 10 4 4 4-4" fill="none" stroke="#323232"
                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M0 0h24v24H0Z" fill="none"></path>
                              </svg></div>
                          </button>
                        </section>
                        <section class="flex justify-between items-center">
                          <p class="text-neutral-600">0 captures</p><button aria-autocomplete="none"
                            aria-controls="radix-:r47:" aria-expanded="false"
                            class="flex items-center justify-center w-fit rounded px-3 py-2 font-medium transition-colors select-none text-neutral-600 hover:bg-neutral-100"
                            data-state="closed" dir="ltr" role="combobox" tabindex="0" type="button"><span
                              style="pointer-events: none;">Newest</span>
                            <div aria-hidden="true" style="transform: none;"><svg class="h-6"
                                style="max-width: 50vw; max-height: 50vh;" viewbox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path class="stroke-2 stroke-neutral-600" d="m8 10 4 4 4-4" fill="none" stroke="#323232"
                                  stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M0 0h24v24H0Z" fill="none"></path>
                              </svg></div>
                          </button>
                        </section>
                      </div>
                      <div class="p-3 w-full overflow-auto">
                        <div class="h-full w-full flex flex-col gap-2">
                          <div class="flex flex-col gap-6 w-full h-full">
                            <div class="p-3 flex flex-col gap-4 justify-between h-24 transition duration-200 w-full">
                              <div class="flex w-full gap-4">
                                <div>
                                  <div class="h-full w-full">
                                    <div class="h-5 w-6 rounded-md bg-neutral-200"></div>
                                  </div>
                                </div>
                                <div>
                                  <div class="h-full w-full">
                                    <div class="h-5 w-28 rounded-md bg-neutral-200"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="flex justify-between items-center w-full">
                                <div>
                                  <div class="h-full w-full">
                                    <div class="rounded-xl w-60 h-3 bg-neutral-200"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="flex justify-between items-center w-full">
                                <div>
                                  <div class="h-full w-full">
                                    <div class="rounded-xl w-10 h-5 bg-neutral-200"></div>
                                  </div>
                                </div>
                                <div>
                                  <div class="h-full w-full">
                                    <div class="h-5 w-16 rounded-md bg-neutral-200"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="w-full h-[3px] bg-neutral-100 mt-[3px]"></div>
                          </div>
                          <div class="flex flex-col gap-6 w-full h-full">
                            <div class="p-3 flex flex-col gap-4 justify-between h-24 transition duration-200 w-full">
                              <div class="flex w-full gap-4">
                                <div>
                                  <div class="h-full w-full">
                                    <div class="h-5 w-6 rounded-md bg-neutral-200"></div>
                                  </div>
                                </div>
                                <div>
                                  <div class="h-full w-full">
                                    <div class="h-5 w-28 rounded-md bg-neutral-200"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="flex justify-between items-center w-full">
                                <div>
                                  <div class="h-full w-full">
                                    <div class="rounded-xl w-60 h-3 bg-neutral-200"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="flex justify-between items-center w-full">
                                <div>
                                  <div class="h-full w-full">
                                    <div class="rounded-xl w-10 h-5 bg-neutral-200"></div>
                                  </div>
                                </div>
                                <div>
                                  <div class="h-full w-full">
                                    <div class="h-5 w-16 rounded-md bg-neutral-200"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="w-full h-[3px] bg-neutral-100 mt-[3px]"></div>
                          </div>
                          <div class="flex flex-col gap-6 w-full h-full">
                            <div class="p-3 flex flex-col gap-4 justify-between h-24 transition duration-200 w-full">
                              <div class="flex w-full gap-4">
                                <div>
                                  <div class="h-full w-full">
                                    <div class="h-5 w-6 rounded-md bg-neutral-200"></div>
                                  </div>
                                </div>
                                <div>
                                  <div class="h-full w-full">
                                    <div class="h-5 w-28 rounded-md bg-neutral-200"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="flex justify-between items-center w-full">
                                <div>
                                  <div class="h-full w-full">
                                    <div class="rounded-xl w-60 h-3 bg-neutral-200"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="flex justify-between items-center w-full">
                                <div>
                                  <div class="h-full w-full">
                                    <div class="rounded-xl w-10 h-5 bg-neutral-200"></div>
                                  </div>
                                </div>
                                <div>
                                  <div class="h-full w-full">
                                    <div class="h-5 w-16 rounded-md bg-neutral-200"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="w-full h-[3px] bg-neutral-100 mt-[3px]"></div>
                          </div>
                          <div class="flex flex-col gap-6 w-full h-full">
                            <div class="p-3 flex flex-col gap-4 justify-between h-24 transition duration-200 w-full">
                              <div class="flex w-full gap-4">
                                <div>
                                  <div class="h-full w-full">
                                    <div class="h-5 w-6 rounded-md bg-neutral-200"></div>
                                  </div>
                                </div>
                                <div>
                                  <div class="h-full w-full">
                                    <div class="h-5 w-28 rounded-md bg-neutral-200"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="flex justify-between items-center w-full">
                                <div>
                                  <div class="h-full w-full">
                                    <div class="rounded-xl w-60 h-3 bg-neutral-200"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="flex justify-between items-center w-full">
                                <div>
                                  <div class="h-full w-full">
                                    <div class="rounded-xl w-10 h-5 bg-neutral-200"></div>
                                  </div>
                                </div>
                                <div>
                                  <div class="h-full w-full">
                                    <div class="h-5 w-16 rounded-md bg-neutral-200"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="w-full h-[3px] bg-neutral-100 mt-[3px]"></div>
                          </div>
                          <div class="flex flex-col gap-6 w-full h-full">
                            <div class="p-3 flex flex-col gap-4 justify-between h-24 transition duration-200 w-full">
                              <div class="flex w-full gap-4">
                                <div>
                                  <div class="h-full w-full">
                                    <div class="h-5 w-6 rounded-md bg-neutral-200"></div>
                                  </div>
                                </div>
                                <div>
                                  <div class="h-full w-full">
                                    <div class="h-5 w-28 rounded-md bg-neutral-200"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="flex justify-between items-center w-full">
                                <div>
                                  <div class="h-full w-full">
                                    <div class="rounded-xl w-60 h-3 bg-neutral-200"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="flex justify-between items-center w-full">
                                <div>
                                  <div class="h-full w-full">
                                    <div class="rounded-xl w-10 h-5 bg-neutral-200"></div>
                                  </div>
                                </div>
                                <div>
                                  <div class="h-full w-full">
                                    <div class="h-5 w-16 rounded-md bg-neutral-200"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="w-full h-[3px] bg-neutral-100 mt-[3px]"></div>
                          </div>
                          <div class="flex flex-col gap-6 w-full h-full">
                            <div class="p-3 flex flex-col gap-4 justify-between h-24 transition duration-200 w-full">
                              <div class="flex w-full gap-4">
                                <div>
                                  <div class="h-full w-full">
                                    <div class="h-5 w-6 rounded-md bg-neutral-200"></div>
                                  </div>
                                </div>
                                <div>
                                  <div class="h-full w-full">
                                    <div class="h-5 w-28 rounded-md bg-neutral-200"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="flex justify-between items-center w-full">
                                <div>
                                  <div class="h-full w-full">
                                    <div class="rounded-xl w-60 h-3 bg-neutral-200"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="flex justify-between items-center w-full">
                                <div>
                                  <div class="h-full w-full">
                                    <div class="rounded-xl w-10 h-5 bg-neutral-200"></div>
                                  </div>
                                </div>
                                <div>
                                  <div class="h-full w-full">
                                    <div class="h-5 w-16 rounded-md bg-neutral-200"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="w-full h-[3px] bg-neutral-100 mt-[3px]"></div>
                          </div>
                          <div class="flex flex-col gap-6 w-full h-full">
                            <div class="p-3 flex flex-col gap-4 justify-between h-24 transition duration-200 w-full">
                              <div class="flex w-full gap-4">
                                <div>
                                  <div class="h-full w-full">
                                    <div class="h-5 w-6 rounded-md bg-neutral-200"></div>
                                  </div>
                                </div>
                                <div>
                                  <div class="h-full w-full">
                                    <div class="h-5 w-28 rounded-md bg-neutral-200"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="flex justify-between items-center w-full">
                                <div>
                                  <div class="h-full w-full">
                                    <div class="rounded-xl w-60 h-3 bg-neutral-200"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="flex justify-between items-center w-full">
                                <div>
                                  <div class="h-full w-full">
                                    <div class="rounded-xl w-10 h-5 bg-neutral-200"></div>
                                  </div>
                                </div>
                                <div>
                                  <div class="h-full w-full">
                                    <div class="h-5 w-16 rounded-md bg-neutral-200"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="w-full h-[3px] bg-neutral-100 mt-[3px]"></div>
                          </div>
                          <div class="flex flex-col gap-6 w-full h-full">
                            <div class="p-3 flex flex-col gap-4 justify-between h-24 transition duration-200 w-full">
                              <div class="flex w-full gap-4">
                                <div>
                                  <div class="h-full w-full">
                                    <div class="h-5 w-6 rounded-md bg-neutral-200"></div>
                                  </div>
                                </div>
                                <div>
                                  <div class="h-full w-full">
                                    <div class="h-5 w-28 rounded-md bg-neutral-200"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="flex justify-between items-center w-full">
                                <div>
                                  <div class="h-full w-full">
                                    <div class="rounded-xl w-60 h-3 bg-neutral-200"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="flex justify-between items-center w-full">
                                <div>
                                  <div class="h-full w-full">
                                    <div class="rounded-xl w-10 h-5 bg-neutral-200"></div>
                                  </div>
                                </div>
                                <div>
                                  <div class="h-full w-full">
                                    <div class="h-5 w-16 rounded-md bg-neutral-200"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="w-full h-[3px] bg-neutral-100 mt-[3px]"></div>
                          </div>
                          <div class="flex flex-col gap-6 w-full h-full">
                            <div class="p-3 flex flex-col gap-4 justify-between h-24 transition duration-200 w-full">
                              <div class="flex w-full gap-4">
                                <div>
                                  <div class="h-full w-full">
                                    <div class="h-5 w-6 rounded-md bg-neutral-200"></div>
                                  </div>
                                </div>
                                <div>
                                  <div class="h-full w-full">
                                    <div class="h-5 w-28 rounded-md bg-neutral-200"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="flex justify-between items-center w-full">
                                <div>
                                  <div class="h-full w-full">
                                    <div class="rounded-xl w-60 h-3 bg-neutral-200"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="flex justify-between items-center w-full">
                                <div>
                                  <div class="h-full w-full">
                                    <div class="rounded-xl w-10 h-5 bg-neutral-200"></div>
                                  </div>
                                </div>
                                <div>
                                  <div class="h-full w-full">
                                    <div class="h-5 w-16 rounded-md bg-neutral-200"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="w-full h-[3px] bg-neutral-100 mt-[3px]"></div>
                          </div>
                          <div class="flex flex-col gap-6 w-full h-full">
                            <div class="p-3 flex flex-col gap-4 justify-between h-24 transition duration-200 w-full">
                              <div class="flex w-full gap-4">
                                <div>
                                  <div class="h-full w-full">
                                    <div class="h-5 w-6 rounded-md bg-neutral-200"></div>
                                  </div>
                                </div>
                                <div>
                                  <div class="h-full w-full">
                                    <div class="h-5 w-28 rounded-md bg-neutral-200"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="flex justify-between items-center w-full">
                                <div>
                                  <div class="h-full w-full">
                                    <div class="rounded-xl w-60 h-3 bg-neutral-200"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="flex justify-between items-center w-full">
                                <div>
                                  <div class="h-full w-full">
                                    <div class="rounded-xl w-10 h-5 bg-neutral-200"></div>
                                  </div>
                                </div>
                                <div>
                                  <div class="h-full w-full">
                                    <div class="h-5 w-16 rounded-md bg-neutral-200"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="w-full h-[3px] bg-neutral-100 mt-[3px]"></div>
                          </div>
                        </div>
                      </div>
                      <section
                        class="absolute z-30 bottom-4 w-full flex items-center justify-center pointer-events-none">
                        <div class="pointer-events-auto">
                          <div
                            class="rounded w-fit bg-primary-300 flex items-center gap-2 py-1 px-2 shadow-lg outline-[0.15rem] outline-primary-500 outline-dashed -outline-offset-2 pointer-events-none"
                            style="opacity: 0; transform: scale(0.5) translateZ(0px);"><button
                              class="flex items-center justify-center gap-2 rounded font-medium leading-4 whitespace-nowrap overflow-hidden text-overflow-ellipsis w-auto min-w-0 min-h-0 select-none px-3 py-2 bg-primary-200 border-[1.5px] border-primary-500 opacity-100"
                              style="transform: none; transform-origin: 50% 50% 0px;" tabindex="0" type="button">
                              <section class="flex items-center justify-center gap-2"><svg
                                  class="h-5 stroke-neutral-700" style="max-width: 50vw; max-height: 50vh;"
                                  viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                  <g fill="none">
                                    <path class="stroke-2" d="m20 6.5-11 11-5-5" stroke-linecap="round"
                                      stroke-linejoin="round"></path>
                                  </g>
                                </svg>
                                <h5>Mark all as done</h5>
                              </section>
                            </button><button
                              class="flex items-center justify-center gap-2 rounded font-medium leading-4 whitespace-nowrap overflow-hidden text-overflow-ellipsis w-auto min-w-0 min-h-0 select-none px-3 py-2 bg-primary-200 border-[1.5px] border-primary-500 opacity-100"
                              style="transform: none; transform-origin: 50% 50% 0px;" tabindex="0" type="button">
                              <section class="flex items-center justify-center gap-2"><svg class="h-5" fill="none"
                                  style="max-width: 50vw; max-height: 50vh;" viewbox="0 0 22 21"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path class="stroke-2 stroke-neutral-700"
                                    d="M18.626 5.234a88.992 88.992 0 0 0-8.767-.437c-1.733 0-3.465.087-5.198.262l-1.785.175M7.688 4.35l.193-1.146c.14-.83.245-1.452 1.724-1.452h2.292c1.48 0 1.593.656 1.724 1.461l.193 1.138M16.745 8l-.568 8.811c-.096 1.374-.175 2.442-2.617 2.442H7.943c-2.441 0-2.52-1.068-2.616-2.442L4.757 8M9.29 14.435h2.913M8.563 10.938h4.375"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <h5>Delete all</h5>
                              </section>
                            </button><button
                              class="flex items-center font-bold rounded focus:outline-none text-base font-bold"
                              style="transform: none; transform-origin: 50% 50% 0px;" tabindex="0">
                              <div class="p-2"><svg class="h-8 w-8" style="max-width: 50vw; max-height: 50vh;"
                                  viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                  <g fill="none">
                                    <path d="M0 0h24v24H0Z"></path>
                                    <path class="stroke-[2] stroke-neutral-700" d="m8 8 8 8M16 8l-8 8"
                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                  </g>
                                </svg></div>
                            </button></div>
                        </div>
                      </section>
                    </div>
                  </div>
                </div>
                <div
                  class="flex-grow h-full flex flex-col gap-4 justify-between bg-primary-100 bg-dot-grid-pattern bg-repeat bg-pattern overflow-hidden">
                  <div class="flex-grow m-8 flex flex-col gap-4 items-center justify-center h-full rounded">
                    <p class="text-8xl">🧲</p>
                    <h1>Your capture inbox is empty</h1>
                    <p class="text-center">Upload feedback, user research or connect data sources to<br /> capture them
                      automatically</p>
                    <section class="w-full h-fit flex flex-col items-center justify-center gap-3">
                      <button style="position:relative;overflow:visible"
                        class="starAnimationBlock flex items-center justify-center gap-2 rounded font-medium leading-4 whitespace-nowrap overflow-hidden text-overflow-ellipsis w-auto min-w-0 min-h-0 select-none px-3 py-2 bg-secondary-300 border-[2px] border-neutral-700 shadow-smoothxl opacity-100"
                        style="transform: none; transform-origin: 50% 50% 0px;" tabindex="0" type="button"><svg
                          class="h-6 w-6" fill="none" style="max-width: 50vw; max-height: 50vh;" viewbox="0 0 19 17"
                          xmlns="http://www.w3.org/2000/svg">
                          <path class="stroke-2 stroke-neutral-700"
                            d="M17.5 10.9V13.3C17.5 14.6255 16.4255 15.7 15.1 15.7H3.9C2.57452 15.7 1.5 14.6255 1.5 13.3V10.9M9.5 1.30005V9.30005M9.5 1.30005L6.3 4.50005M9.5 1.30005L12.7 4.50005"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <h5>Add captures</h5>
                        <img style="    position: absolute;
    top: -20px;
    right: -15px;" src="{{ asset("assets/star.png")}}" class="starAnimation" alt="">
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

                      <div class="w-full h-fit flex items-center justify-center gap-2"><img alt="Integrations Bouquet"
                          data-nimg="1" decoding="async" height="60" loading="lazy"
                          src="{{ asset("assets/integrations_bouquet.png")}}" width="60" />
                        <p class="text-small"><span class="text-neutral-500">+5 methods</span></p>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="flex flex-col z-30">
            <div class="fixed bottom-2 right-2 mb-12 hover:cursor-cool-clickable disabled:cursor-cool-normal">
              <div aria-controls="radix-:r48:" aria-expanded="false" aria-haspopup="dialog"
                class="w-11 h-11 rounded-full bg-[#FFF9DE] border-2 border-secondary-300 p-1 shadow-lg flex items-center justify-center hover:cursor-cool-clickable disabled:cursor-cool-normal"
                data-state="closed" type="button"><img alt="ListenUp Illustration Logo" data-nimg="1" decoding="async"
                  height="25" loading="lazy" src="{{  asset("assets/ListenUp-Logo.svg") }} " style="color: transparent;"
                  width="25" /></div>
            </div>
            <div
              class="fixed bottom-2 right-2 w-11 h-11 rounded-full bg-primary-300 border-2 border-primary-600 p-4 shadow-lg flex items-center justify-center hover:cursor-cool-clickable disabled:cursor-cool-normal"
              style="z-index: 99999;"><button aria-expanded="false" aria-haspopup="menu"
                class="flex items-center justify-center w-fit rounded font-medium transition-colors select-none text-neutral-600 px-3 py-2"
                data-state="closed" id="radix-:r49:" tabindex="0" type="button">
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
      Captures | ListenUp!</p>
  </next-route-announcer><iframe allow="payment *" allowtransparency="true" aria-hidden="true" frameborder="0"
    name="__privateStripeController3321" role="presentation" scrolling="no"
    src="./captures_files/controller-with-preconnect-0ac892cc1983a4b6e5727ee594af4fd2.html"
    style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; visibility: hidden !important; position: fixed !important; height: 1px !important; pointer-events: none !important; user-select: none !important;"
    tabindex="-1"></iframe><iframe aria-hidden="true" id="_hjSafeContext_74628675"
    src="./captures_files/saved_resource.html"
    style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"
    tabindex="-1" title="_hjSafeContext"></iframe><iframe allow="payment *" allowtransparency="true" aria-hidden="true"
    frameborder="0" name="__privateStripeMetricsController3320" role="presentation" scrolling="no"
    src="./captures_files/m-outer-3437aaddcdf6922d623e172c2d6f9278.html"
    style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; visibility: hidden !important; position: fixed !important; height: 1px !important; pointer-events: none !important; user-select: none !important;"
    tabindex="-1"></iframe><iframe aria-hidden="true" id="intercom-frame" src="./captures_files/saved_resource(1).html"
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
      id="__react_svg_text_measurement_id">40</text></svg>
</body>

</html>@include('feedback')@include('profileSettings')
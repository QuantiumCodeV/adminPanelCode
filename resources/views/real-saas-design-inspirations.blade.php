<!DOCTYPE html>
<!-- Last Published: Tue Jul 23 2024 12:43:14 GMT+0000 (Coordinated Universal Time) -->
<html
  data-wf-domain="www.listenup.ai"
  data-wf-page="65a29b03890e6438f85f45ab"
  data-wf-site="635584277e62506ebe08fb74"
>
  <head>
  @include('fonts')<link
      href="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/63558f9ff9e1cc03ead6aea4_32.png"
      rel="shortcut icon"
      type="image/x-icon"
    />
    <link
      href="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/63558f5e63bfed5fc2509a07_256.png"
      rel="apple-touch-icon"
    />
    <meta charset="utf-8" />
    <title>Real SaaS design inspirations for product teams</title>
    <meta
      content="For product teams who need to ship fast. Dribbble designs don’t build world class product."
      name="description"
    />
    <meta
      content="Real SaaS design inspirations for product teams"
      property="og:title"
    />
    <meta
      content="For product teams who need to ship fast. Dribbble designs don’t build world class product."
      property="og:description"
    />
    <meta
      content="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65ad4084a78ed7f6ffc6544b_Graph%20url%20(1).png"
      property="og:image"
    />
    <meta
      content="Real SaaS design inspirations for product teams"
      property="twitter:title"
    />
    <meta
      content="For product teams who need to ship fast. Dribbble designs don’t build world class product."
      property="twitter:description"
    />
    <meta
      content="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65ad4084a78ed7f6ffc6544b_Graph%20url%20(1).png"
      property="twitter:image"
    />
    <meta property="og:type" content="website" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link
      href="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/css/listenup-ai.webflow.c0461d557.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <script
      src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"
      type="text/javascript"
    ></script>
    <script type="text/javascript">
      WebFont.load({
        google: {
          families: [
            "Varela Round:400",
            "Plus Jakarta Sans:200,300,regular,500,600,700,800,200italic,300italic,italic,500italic,600italic,700italic,800italic",
            "Just Another Hand:regular",
          ],
        },
      });
    </script>
    <script type="text/javascript">
      !(function (o, c) {
        var n = c.documentElement,
          t = " w-mod-";
        (n.className += t + "js"),
          ("ontouchstart" in o ||
            (o.DocumentTouch && c instanceof DocumentTouch)) &&
            (n.className += t + "touch");
      })(window, document);
    </script>
    <link
      href="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/63558f9ff9e1cc03ead6aea4_32.png"
      rel="shortcut icon"
      type="image/x-icon"
    />
    <link
      href="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/63558f5e63bfed5fc2509a07_256.png"
      rel="apple-touch-icon"
    />

    <!-- Plausible Analytics -->
    <script
      defer
      data-domain="listenup.ai"
      src="https://plausible.io/js/script.tagged-events.outbound-links.js"
    ></script>
    <script>
      var toTag = [
        {
          elementId: "copy-to-figma",
          classes: "plausible-event-name=Copy+To+Figma",
        },
      ];

      document.addEventListener("DOMContentLoaded", function (_e) {
        toTag.forEach(function (tagObject) {
          var element = document.getElementById(tagObject.elementId);
          tagObject.classes.split(" ").forEach(function (className) {
            if (element) {
              element.classList.add(className);
            }
          });
        });
      });
    </script>

    <!-- Intercom -->
    <style>
      .intercom-lightweight-app {
        z-index: 900 !important;
      }
    </style>

    <!-- Surlignage -->
    <style>
      ::selection {
        color: #242425;
        background: #fbd570;
      }
    </style>

    <!-- [Attributes by Finsweet] CMS Filter -->
    <script
      async
      src="https://cdn.jsdelivr.net/npm/@finsweet/attributes-cmsfilter@1/cmsfilter.js"
    ></script>

    <!-- AI animation - pattern enrichment count -->
    <script>
      let animationState = 0; // 0: not started, 1: playing, 2: paused
      let insightsLastValue = 0;
      let userLastValue = 0;

      document.addEventListener("DOMContentLoaded", function () {
        document
          .getElementById("ai-enrich")
          .addEventListener("click", function () {
            if (animationState === 0) {
              startAnimation();
            } else if (animationState === 1) {
              pauseAnimation();
            } else if (animationState === 2) {
              resumeAnimation();
            }
          });
      });

      function startAnimation() {
        animationState = 1;

        const insightsNbElement = document.getElementById("ai-insights-nb");
        const userNbElement = document.getElementById("ai-user-nb");

        const insightsStartValue = 33;
        const insightsEndValue = 8827; // Updated end value
        const userStartValue = 26;
        const userEndValue = 932;

        const duration = 100000; // Animation duration in milliseconds

        animateNumber(
          insightsNbElement,
          insightsLastValue || insightsStartValue,
          insightsEndValue,
          duration
        );
        animateNumber(
          userNbElement,
          userLastValue || userStartValue,
          userEndValue,
          duration
        );
      }

      function pauseAnimation() {
        animationState = 2;
      }

      function resumeAnimation() {
        animationState = 1;
        startAnimation();
      }

      function animateNumber(element, start, end, duration) {
        let startTime = null;
        const animate = (currentTime) => {
          if (!startTime) startTime = currentTime;
          const progress = Math.min((currentTime - startTime) / duration, 1);
          const value = Math.floor(start + (end - start) * progress);
          element.textContent = value.toLocaleString(); // Format number with commas
          if (progress < 1 && animationState === 1) {
            requestAnimationFrame(animate);
          } else {
            if (animationState === 1) {
              start = value; // Update start value for the next animation iteration
            }
            if (animationState === 2) {
              if (element.id === "ai-insights-nb") {
                insightsLastValue = value;
              } else if (element.id === "ai-user-nb") {
                userLastValue = value;
              }
            }
          }
        };
        requestAnimationFrame(animate);
      }
    </script>
  </head>
  <body class="body-grey">
    <div class="mouse">
      <div class="w-embed">
        <style>
          .mouse {
            pointer-events: none;
          }
          .navigation-link,
          .brand,
          .draggable,
          .open-button-inspiration,
          .checkbox-field,
          .hover-button,
          .hyperlink-text,
          .tab-button,
          .navigation-link-footer,
          .yellow-cta,
          .yellow-cta-huge,
          .design-inspiration-card,
          .faq-wrapper,
          .faq-triger,
          .link_course-page,
          .bible-table-content-block,
          .nav-course,
          .bible-introduction-block,
          .h5,
          .course-item,
          .content-table-wrappper,
          .bible-page-wrapper {
            cursor: url("https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65510ce62606af8e051c5409_Cursor%20-%20Click.svg"),
              none;
          }
          .hover-button-new,
          .new-cursor:hover {
            cursor: url("https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b7a39cb80dfbb5a3f432e_big%20cursor.svg"),
              none;
          }
          body,
          html {
            cursor: url("https://cdn.prod.website-files.com/635584277e62506ebe08fb74/663b78e7c4ecae0f503d9260_cursor%202.svg"),
              none;
          }
        </style>
      </div>
    </div>
    <div class="section-wrapper hero">
      <div class="container">
        <div class="design-inspiration-header">
          <a
            href="/"
            target="_blank"
            class="madeby hover-button w-nav-brand"
            ><div class="madeby-text">Made by</div>
            <img
              src="/assets/logo.png"
              loading="lazy"
              width="329.5"
              alt="SoundLine!&#x27;s logo"
              class="madeby-logo"
          /></a>
          <div class="pricing-tag">
            <img
              src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2a0368ad6c1d35ee7df1d_dollar.svg"
              loading="lazy"
              width="26"
              alt=""
              class="image-41"
            />
            <div class="text-block-51">Free</div>
          </div>
          <div class="h1-wrapper">
            <div class="h1-line-wrapper">
              <div class="h1-underlign-wrapper">
                <img
                  src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a29ff57eb6560d92a394a1_diamond.svg"
                  loading="lazy"
                  alt=""
                  class="h1-image-inspiration"
                />
                <h1 class="home-h1">Real</h1>
              </div>
              <h1 class="home-h1 extra-space">SaaS design</h1>
            </div>
            <h1 class="home-h1">inspiration.</h1>
          </div>
          <div class="inspiration-description">
            <div class="design-inspis-normal-text">
              For product teams who need to ship fast.
            </div>
            <div class="div-block-107">
              <div class="div-block-106">
                <img
                  src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a29f64a1886c6a35288aba_dribbble.svg"
                  loading="lazy"
                  alt=""
                />
                <div class="design-inspis-normal-text">Dribbble designs</div>
              </div>
              <div class="design-inspis-normal-text">
                don’t build world class product.
              </div>
            </div>
          </div>
          <div class="div-block-109">
            <img
              src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65dd8b2a031677daeb7c70d9_copy%20to%20figma%20(1).png"
              loading="lazy"
              sizes="(max-width: 479px) 95vw, (max-width: 991px) 212.373046875px, (max-width: 1919px) 244.22900390625px, 13vw"
              srcset="
                https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65dd8b2a031677daeb7c70d9_copy%20to%20figma%20(1)-p-500.png 500w,
                https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65dd8b2a031677daeb7c70d9_copy%20to%20figma%20(1).png       953w
              "
              alt=""
              class="duplicate-in-figma"
            />
          </div>
        </div>
      </div>
      <div class="cms-wrapper">
        <div class="cms-filter-wrapper">
          <div class="form-block w-form">
            <form
              id="email-form"
              name="email-form"
              data-name="Email Form"
              method="get"
              fs-cmsfilter-element="filters"
              class="form"
              data-wf-page-id="65a29b03890e6438f85f45ab"
              data-wf-element-id="9cdb6d18-3ed5-460d-049d-94551405d809"
            >
              <div class="w-dyn-list">
                <div role="list" class="collection-list-2 w-dyn-items">
                  <div role="listitem" class="collection-item w-dyn-item">
                    <label
                      class="w-checkbox design-inspiration-filter hover-button"
                      ><input
                        type="checkbox"
                        id="checkbox"
                        name="checkbox"
                        data-name="Checkbox"
                        class="w-checkbox-input invisible-checkbox"
                      /><span
                        fs-cmsfilter-active="is-active"
                        fs-cmsfilter-field="category"
                        class="design-inspiration-filter-text hover-button w-form-label"
                        for="checkbox"
                        >Notifications</span
                      ></label
                    >
                  </div>
                  <div role="listitem" class="collection-item w-dyn-item">
                    <label
                      class="w-checkbox design-inspiration-filter hover-button"
                      ><input
                        type="checkbox"
                        id="checkbox"
                        name="checkbox"
                        data-name="Checkbox"
                        class="w-checkbox-input invisible-checkbox"
                      /><span
                        fs-cmsfilter-active="is-active"
                        fs-cmsfilter-field="category"
                        class="design-inspiration-filter-text hover-button w-form-label"
                        for="checkbox"
                        >Analytics</span
                      ></label
                    >
                  </div>
                  <div role="listitem" class="collection-item w-dyn-item">
                    <label
                      class="w-checkbox design-inspiration-filter hover-button"
                      ><input
                        type="checkbox"
                        id="checkbox"
                        name="checkbox"
                        data-name="Checkbox"
                        class="w-checkbox-input invisible-checkbox"
                      /><span
                        fs-cmsfilter-active="is-active"
                        fs-cmsfilter-field="category"
                        class="design-inspiration-filter-text hover-button w-form-label"
                        for="checkbox"
                        >Empty States</span
                      ></label
                    >
                  </div>
                  <div role="listitem" class="collection-item w-dyn-item">
                    <label
                      class="w-checkbox design-inspiration-filter hover-button"
                      ><input
                        type="checkbox"
                        id="checkbox"
                        name="checkbox"
                        data-name="Checkbox"
                        class="w-checkbox-input invisible-checkbox"
                      /><span
                        fs-cmsfilter-active="is-active"
                        fs-cmsfilter-field="category"
                        class="design-inspiration-filter-text hover-button w-form-label"
                        for="checkbox"
                        >Growth Loop</span
                      ></label
                    >
                  </div>
                  <div role="listitem" class="collection-item w-dyn-item">
                    <label
                      class="w-checkbox design-inspiration-filter hover-button"
                      ><input
                        type="checkbox"
                        id="checkbox"
                        name="checkbox"
                        data-name="Checkbox"
                        class="w-checkbox-input invisible-checkbox"
                      /><span
                        fs-cmsfilter-active="is-active"
                        fs-cmsfilter-field="category"
                        class="design-inspiration-filter-text hover-button w-form-label"
                        for="checkbox"
                        >Editor</span
                      ></label
                    >
                  </div>
                  <div role="listitem" class="collection-item w-dyn-item">
                    <label
                      class="w-checkbox design-inspiration-filter hover-button"
                      ><input
                        type="checkbox"
                        id="checkbox"
                        name="checkbox"
                        data-name="Checkbox"
                        class="w-checkbox-input invisible-checkbox"
                      /><span
                        fs-cmsfilter-active="is-active"
                        fs-cmsfilter-field="category"
                        class="design-inspiration-filter-text hover-button w-form-label"
                        for="checkbox"
                        >Settings</span
                      ></label
                    >
                  </div>
                  <div role="listitem" class="collection-item w-dyn-item">
                    <label
                      class="w-checkbox design-inspiration-filter hover-button"
                      ><input
                        type="checkbox"
                        id="checkbox"
                        name="checkbox"
                        data-name="Checkbox"
                        class="w-checkbox-input invisible-checkbox"
                      /><span
                        fs-cmsfilter-active="is-active"
                        fs-cmsfilter-field="category"
                        class="design-inspiration-filter-text hover-button w-form-label"
                        for="checkbox"
                        >Search</span
                      ></label
                    >
                  </div>
                  <div role="listitem" class="collection-item w-dyn-item">
                    <label
                      class="w-checkbox design-inspiration-filter hover-button"
                      ><input
                        type="checkbox"
                        id="checkbox"
                        name="checkbox"
                        data-name="Checkbox"
                        class="w-checkbox-input invisible-checkbox"
                      /><span
                        fs-cmsfilter-active="is-active"
                        fs-cmsfilter-field="category"
                        class="design-inspiration-filter-text hover-button w-form-label"
                        for="checkbox"
                        >Menu</span
                      ></label
                    >
                  </div>
                  <div role="listitem" class="collection-item w-dyn-item">
                    <label
                      class="w-checkbox design-inspiration-filter hover-button"
                      ><input
                        type="checkbox"
                        id="checkbox"
                        name="checkbox"
                        data-name="Checkbox"
                        class="w-checkbox-input invisible-checkbox"
                      /><span
                        fs-cmsfilter-active="is-active"
                        fs-cmsfilter-field="category"
                        class="design-inspiration-filter-text hover-button w-form-label"
                        for="checkbox"
                        >Onboarding</span
                      ></label
                    >
                  </div>
                  <div role="listitem" class="collection-item w-dyn-item">
                    <label
                      class="w-checkbox design-inspiration-filter hover-button"
                      ><input
                        type="checkbox"
                        id="checkbox"
                        name="checkbox"
                        data-name="Checkbox"
                        class="w-checkbox-input invisible-checkbox"
                      /><span
                        fs-cmsfilter-active="is-active"
                        fs-cmsfilter-field="category"
                        class="design-inspiration-filter-text hover-button w-form-label"
                        for="checkbox"
                        >Authentification</span
                      ></label
                    >
                  </div>
                  <div role="listitem" class="collection-item w-dyn-item">
                    <label
                      class="w-checkbox design-inspiration-filter hover-button"
                      ><input
                        type="checkbox"
                        id="checkbox"
                        name="checkbox"
                        data-name="Checkbox"
                        class="w-checkbox-input invisible-checkbox"
                      /><span
                        fs-cmsfilter-active="is-active"
                        fs-cmsfilter-field="category"
                        class="design-inspiration-filter-text hover-button w-form-label"
                        for="checkbox"
                        >Dashboard</span
                      ></label
                    >
                  </div>
                </div>
              </div>
              <div
                data-w-id="55313c37-f43e-31da-b560-dcd7c9dcf3f2"
                class="show-less-filter hover-button"
              >
                <img
                  src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65ad3a6be2dfb400ce0dd06f_tick-circle.svg"
                  loading="lazy"
                  id="Radio-A"
                  alt=""
                  class="more-filters"
                />
              </div>
              <div
                data-w-id="3afed83e-a977-2b7b-4980-6a4d408dc3a2"
                class="show-more-filter hover-button"
              >
                <img
                  src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65ad39a660dc2c161f0d3c3d_tick-circle.svg"
                  loading="lazy"
                  id="Radio-A"
                  alt=""
                  class="more-filters"
                />
              </div>
              <div
                fs-cmsfilter-element="clear"
                class="design-inspi-clear-filter hover-button"
              >
                <img
                  src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2a666f3cf458488295411_cross.svg"
                  loading="lazy"
                  id="Radio-A"
                  alt=""
                  class="clear-search-filters"
                />
              </div>
            </form>
            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
        <div class="design-inspiration-mansory">
          <div class="w-dyn-list">
            <div fs-cmsfilter-element="list" role="list" class="w-dyn-items">
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/settings-personal-loom"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4dab713b6ea3a5516f42c_thumb%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4dab713b6ea3a5516f42c_thumb%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4dab713b6ea3a5516f42c_thumb%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4dab713b6ea3a5516f42c_thumb%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4dab713b6ea3a5516f42c_thumb%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4dab713b6ea3a5516f42c_thumb%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4dab713b6ea3a5516f42c_thumb%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4dab713b6ea3a5516f42c_thumb%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Settings
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/loom"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Loom logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e4c0be5dd773ef696f4c_loom.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Loom</div></a
                  ><a
                    href="real-saas-design-inspirations/settings-personal-loom"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/editor-workflow-attio"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf9fc9b782133ed24e8e9c_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf9fc9b782133ed24e8e9c_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf9fc9b782133ed24e8e9c_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf9fc9b782133ed24e8e9c_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf9fc9b782133ed24e8e9c_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf9fc9b782133ed24e8e9c_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf9fc9b782133ed24e8e9c_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Editor
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/attio"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Attio logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e0654c8da7cf51ae2496_attio.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Attio</div></a
                  ><a
                    href="real-saas-design-inspirations/editor-workflow-attio"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/cms-framer"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abeddb23c622ffe6b064b3_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abeddb23c622ffe6b064b3_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abeddb23c622ffe6b064b3_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abeddb23c622ffe6b064b3_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abeddb23c622ffe6b064b3_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abeddb23c622ffe6b064b3_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abeddb23c622ffe6b064b3_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abeddb23c622ffe6b064b3_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Editor
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/framer"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Framer logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e32b1b022fc90fb743a1_framer%20logo.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Framer</div></a
                  ><a
                    href="real-saas-design-inspirations/cms-framer"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/settings-airtable"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca44ef8cbd4eb5bd9fb57_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca44ef8cbd4eb5bd9fb57_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca44ef8cbd4eb5bd9fb57_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca44ef8cbd4eb5bd9fb57_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca44ef8cbd4eb5bd9fb57_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca44ef8cbd4eb5bd9fb57_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca44ef8cbd4eb5bd9fb57_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca44ef8cbd4eb5bd9fb57_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Settings
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/airtable"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Airtable logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e0b559c55f9a7f1756bf_airtable.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Airtable</div></a
                  ><a
                    href="real-saas-design-inspirations/settings-airtable"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/editor-notes-attio"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfb2e160bcfa83d98eb23f_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfb2e160bcfa83d98eb23f_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfb2e160bcfa83d98eb23f_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfb2e160bcfa83d98eb23f_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfb2e160bcfa83d98eb23f_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfb2e160bcfa83d98eb23f_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfb2e160bcfa83d98eb23f_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfb2e160bcfa83d98eb23f_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Editor
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/attio"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Attio logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e0654c8da7cf51ae2496_attio.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Attio</div></a
                  ><a
                    href="real-saas-design-inspirations/editor-notes-attio"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/dashboard-miro"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ede7308dc418fda44f016b_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ede7308dc418fda44f016b_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ede7308dc418fda44f016b_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ede7308dc418fda44f016b_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ede7308dc418fda44f016b_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ede7308dc418fda44f016b_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ede7308dc418fda44f016b_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ede7308dc418fda44f016b_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Dashboard
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/miro"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Miro logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e54954fed3eb89dcb675_miro.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Miro</div></a
                  ><a
                    href="real-saas-design-inspirations/dashboard-miro"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/growth-loop-tella"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac32572aee5f464db5b370_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac32572aee5f464db5b370_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac32572aee5f464db5b370_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac32572aee5f464db5b370_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac32572aee5f464db5b370_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac32572aee5f464db5b370_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac32572aee5f464db5b370_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Growth Loop
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/tella"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Tella logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo.png"
                      sizes="(max-width: 479px) 22vw, (max-width: 1439px) 30px, (max-width: 1919px) 2vw, 30px"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo.png        2420w
                      "
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Tella</div></a
                  ><a
                    href="real-saas-design-inspirations/growth-loop-tella"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/editor-email-attio"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfb4a002b84c46ab12080d_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfb4a002b84c46ab12080d_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfb4a002b84c46ab12080d_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfb4a002b84c46ab12080d_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfb4a002b84c46ab12080d_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfb4a002b84c46ab12080d_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfb4a002b84c46ab12080d_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfb4a002b84c46ab12080d_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Editor
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/attio"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Attio logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e0654c8da7cf51ae2496_attio.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Attio</div></a
                  ><a
                    href="real-saas-design-inspirations/editor-email-attio"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/onboarding-airtable"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec9ab048973ba625793f3c_Thumbnail2%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec9ab048973ba625793f3c_Thumbnail2%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec9ab048973ba625793f3c_Thumbnail2%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec9ab048973ba625793f3c_Thumbnail2%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec9ab048973ba625793f3c_Thumbnail2%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec9ab048973ba625793f3c_Thumbnail2%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec9ab048973ba625793f3c_Thumbnail2%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec9ab048973ba625793f3c_Thumbnail2%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Onboarding
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/airtable"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Airtable logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e0b559c55f9a7f1756bf_airtable.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Airtable</div></a
                  ><a
                    href="real-saas-design-inspirations/onboarding-airtable"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/onboarding-tella"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad0230b9187368a052762e_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad0230b9187368a052762e_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad0230b9187368a052762e_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad0230b9187368a052762e_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad0230b9187368a052762e_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad0230b9187368a052762e_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad0230b9187368a052762e_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad0230b9187368a052762e_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Onboarding
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/tella"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Tella logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo.png"
                      sizes="(max-width: 479px) 22vw, (max-width: 1439px) 30px, (max-width: 1919px) 2vw, 30px"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo.png        2420w
                      "
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Tella</div></a
                  ><a
                    href="real-saas-design-inspirations/onboarding-tella"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/dashbaord-tella"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac0b15f763856784fe15b6_dash%20thumb%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac0b15f763856784fe15b6_dash%20thumb%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac0b15f763856784fe15b6_dash%20thumb%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac0b15f763856784fe15b6_dash%20thumb%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac0b15f763856784fe15b6_dash%20thumb%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac0b15f763856784fe15b6_dash%20thumb%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac0b15f763856784fe15b6_dash%20thumb%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac0b15f763856784fe15b6_dash%20thumb%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Dashboard
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/tella"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Tella logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo.png"
                      sizes="(max-width: 479px) 22vw, (max-width: 1439px) 30px, (max-width: 1919px) 2vw, 30px"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo.png        2420w
                      "
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Tella</div></a
                  ><a
                    href="real-saas-design-inspirations/dashbaord-tella"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/editor-data-airtable"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65edc1a16ef1975f6b04ac29_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65edc1a16ef1975f6b04ac29_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65edc1a16ef1975f6b04ac29_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65edc1a16ef1975f6b04ac29_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65edc1a16ef1975f6b04ac29_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65edc1a16ef1975f6b04ac29_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65edc1a16ef1975f6b04ac29_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Editor
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/airtable"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Airtable logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e0b559c55f9a7f1756bf_airtable.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Airtable</div></a
                  ><a
                    href="real-saas-design-inspirations/editor-data-airtable"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/authentification-framer"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe1b01f8a594b4b8462dd_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe1b01f8a594b4b8462dd_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe1b01f8a594b4b8462dd_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe1b01f8a594b4b8462dd_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe1b01f8a594b4b8462dd_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe1b01f8a594b4b8462dd_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe1b01f8a594b4b8462dd_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe1b01f8a594b4b8462dd_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Authentification
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/framer"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Framer logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e32b1b022fc90fb743a1_framer%20logo.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Framer</div></a
                  ><a
                    href="real-saas-design-inspirations/authentification-framer"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/dashboard-framer"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abeb9a6b8e3d28ed7e983e_dash%20thumbn%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abeb9a6b8e3d28ed7e983e_dash%20thumbn%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abeb9a6b8e3d28ed7e983e_dash%20thumbn%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abeb9a6b8e3d28ed7e983e_dash%20thumbn%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abeb9a6b8e3d28ed7e983e_dash%20thumbn%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abeb9a6b8e3d28ed7e983e_dash%20thumbn%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abeb9a6b8e3d28ed7e983e_dash%20thumbn%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abeb9a6b8e3d28ed7e983e_dash%20thumbn%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Dashboard
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/framer"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Framer logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e32b1b022fc90fb743a1_framer%20logo.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Framer</div></a
                  ><a
                    href="real-saas-design-inspirations/dashboard-framer"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/onboarding-zapier"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad030d2b8fcc1157e542a5_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad030d2b8fcc1157e542a5_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad030d2b8fcc1157e542a5_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad030d2b8fcc1157e542a5_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad030d2b8fcc1157e542a5_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad030d2b8fcc1157e542a5_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad030d2b8fcc1157e542a5_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad030d2b8fcc1157e542a5_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Onboarding
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/zapier"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Zapier logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ed68a60d6c36aebbb0a1_zapioer.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Zapier</div></a
                  ><a
                    href="real-saas-design-inspirations/onboarding-zapier"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/editor-tella"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac306be3be64c348bbd79c_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac306be3be64c348bbd79c_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac306be3be64c348bbd79c_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac306be3be64c348bbd79c_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac306be3be64c348bbd79c_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac306be3be64c348bbd79c_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac306be3be64c348bbd79c_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac306be3be64c348bbd79c_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Editor
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/tella"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Tella logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo.png"
                      sizes="(max-width: 479px) 22vw, (max-width: 1439px) 30px, (max-width: 1919px) 2vw, 30px"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo.png        2420w
                      "
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Tella</div></a
                  ><a
                    href="real-saas-design-inspirations/editor-tella"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/empty-states-tella"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac0ec06b2529a8ca2c957a_thumbn%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac0ec06b2529a8ca2c957a_thumbn%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac0ec06b2529a8ca2c957a_thumbn%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac0ec06b2529a8ca2c957a_thumbn%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac0ec06b2529a8ca2c957a_thumbn%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac0ec06b2529a8ca2c957a_thumbn%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac0ec06b2529a8ca2c957a_thumbn%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac0ec06b2529a8ca2c957a_thumbn%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Empty States
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/tella"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Tella logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo.png"
                      sizes="(max-width: 479px) 22vw, (max-width: 1439px) 30px, (max-width: 1919px) 2vw, 30px"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo.png        2420w
                      "
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Tella</div></a
                  ><a
                    href="real-saas-design-inspirations/empty-states-tella"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/settings-workspace-loom"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4de6758299f24687b52a4_thumb%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4de6758299f24687b52a4_thumb%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4de6758299f24687b52a4_thumb%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4de6758299f24687b52a4_thumb%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4de6758299f24687b52a4_thumb%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4de6758299f24687b52a4_thumb%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4de6758299f24687b52a4_thumb%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4de6758299f24687b52a4_thumb%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Settings
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/loom"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Loom logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e4c0be5dd773ef696f4c_loom.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Loom</div></a
                  ><a
                    href="real-saas-design-inspirations/settings-workspace-loom"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/onboarding-miro"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ede647ce43d3b1a622409b_Thumbnail2%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ede647ce43d3b1a622409b_Thumbnail2%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ede647ce43d3b1a622409b_Thumbnail2%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ede647ce43d3b1a622409b_Thumbnail2%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ede647ce43d3b1a622409b_Thumbnail2%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ede647ce43d3b1a622409b_Thumbnail2%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ede647ce43d3b1a622409b_Thumbnail2%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ede647ce43d3b1a622409b_Thumbnail2%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Onboarding
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/miro"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Miro logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e54954fed3eb89dcb675_miro.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Miro</div></a
                  ><a
                    href="real-saas-design-inspirations/onboarding-miro"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/editor-crm-attio"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfaf587360c2afeebec9d6_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfaf587360c2afeebec9d6_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfaf587360c2afeebec9d6_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfaf587360c2afeebec9d6_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfaf587360c2afeebec9d6_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfaf587360c2afeebec9d6_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfaf587360c2afeebec9d6_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfaf587360c2afeebec9d6_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Editor
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/attio"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Attio logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e0654c8da7cf51ae2496_attio.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Attio</div></a
                  ><a
                    href="real-saas-design-inspirations/editor-crm-attio"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/authentification-attio"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf8cc41c701f1b058e5b95_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf8cc41c701f1b058e5b95_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf8cc41c701f1b058e5b95_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf8cc41c701f1b058e5b95_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf8cc41c701f1b058e5b95_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf8cc41c701f1b058e5b95_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf8cc41c701f1b058e5b95_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf8cc41c701f1b058e5b95_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Authentification
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/attio"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Attio logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e0654c8da7cf51ae2496_attio.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Attio</div></a
                  ><a
                    href="real-saas-design-inspirations/authentification-attio"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/growth-loop-framer"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac06376aa5617c47a5bc96_framer%20thumb%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac06376aa5617c47a5bc96_framer%20thumb%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac06376aa5617c47a5bc96_framer%20thumb%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac06376aa5617c47a5bc96_framer%20thumb%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac06376aa5617c47a5bc96_framer%20thumb%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac06376aa5617c47a5bc96_framer%20thumb%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac06376aa5617c47a5bc96_framer%20thumb%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac06376aa5617c47a5bc96_framer%20thumb%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Growth Loop
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/framer"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Framer logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e32b1b022fc90fb743a1_framer%20logo.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Framer</div></a
                  ><a
                    href="real-saas-design-inspirations/growth-loop-framer"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/growth-loop-zapier"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1f80c21f421728d714f3_bot%20thumb%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1f80c21f421728d714f3_bot%20thumb%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1f80c21f421728d714f3_bot%20thumb%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1f80c21f421728d714f3_bot%20thumb%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1f80c21f421728d714f3_bot%20thumb%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1f80c21f421728d714f3_bot%20thumb%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1f80c21f421728d714f3_bot%20thumb%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1f80c21f421728d714f3_bot%20thumb%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Growth Loop
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/zapier"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Zapier logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ed68a60d6c36aebbb0a1_zapioer.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Zapier</div></a
                  ><a
                    href="real-saas-design-inspirations/growth-loop-zapier"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/settings-tella"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac0d57ffb5aab7d2d32453_thumb%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac0d57ffb5aab7d2d32453_thumb%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac0d57ffb5aab7d2d32453_thumb%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac0d57ffb5aab7d2d32453_thumb%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac0d57ffb5aab7d2d32453_thumb%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac0d57ffb5aab7d2d32453_thumb%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac0d57ffb5aab7d2d32453_thumb%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac0d57ffb5aab7d2d32453_thumb%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Settings
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/tella"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Tella logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo.png"
                      sizes="(max-width: 479px) 22vw, (max-width: 1439px) 30px, (max-width: 1919px) 2vw, 30px"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo.png        2420w
                      "
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Tella</div></a
                  ><a
                    href="real-saas-design-inspirations/settings-tella"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/notifications-loom"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec692b7d0a4b34e5b8981c_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec692b7d0a4b34e5b8981c_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec692b7d0a4b34e5b8981c_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec692b7d0a4b34e5b8981c_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec692b7d0a4b34e5b8981c_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec692b7d0a4b34e5b8981c_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec692b7d0a4b34e5b8981c_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec692b7d0a4b34e5b8981c_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Notifications
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/loom"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Loom logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e4c0be5dd773ef696f4c_loom.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Loom</div></a
                  ><a
                    href="real-saas-design-inspirations/notifications-loom"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/authentification-airtable"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec9a9983668487d703d73c_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec9a9983668487d703d73c_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec9a9983668487d703d73c_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec9a9983668487d703d73c_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec9a9983668487d703d73c_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec9a9983668487d703d73c_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec9a9983668487d703d73c_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec9a9983668487d703d73c_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Authentification
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/airtable"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Airtable logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e0b559c55f9a7f1756bf_airtable.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Airtable</div></a
                  ><a
                    href="real-saas-design-inspirations/authentification-airtable"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/editor-video-loom"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec792e34196b9c90436a6f_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec792e34196b9c90436a6f_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec792e34196b9c90436a6f_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec792e34196b9c90436a6f_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec792e34196b9c90436a6f_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec792e34196b9c90436a6f_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec792e34196b9c90436a6f_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec792e34196b9c90436a6f_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Editor
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/loom"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Loom logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e4c0be5dd773ef696f4c_loom.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Loom</div></a
                  ><a
                    href="real-saas-design-inspirations/editor-video-loom"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/editor-table-attio"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfa29516a8273082c032d2_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfa29516a8273082c032d2_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfa29516a8273082c032d2_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfa29516a8273082c032d2_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfa29516a8273082c032d2_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfa29516a8273082c032d2_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfa29516a8273082c032d2_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Editor
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/attio"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Attio logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e0654c8da7cf51ae2496_attio.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Attio</div></a
                  ><a
                    href="real-saas-design-inspirations/editor-table-attio"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/onboarding-attio"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf82d868c8f36db58a11db_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf82d868c8f36db58a11db_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf82d868c8f36db58a11db_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf82d868c8f36db58a11db_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf82d868c8f36db58a11db_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf82d868c8f36db58a11db_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf82d868c8f36db58a11db_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf82d868c8f36db58a11db_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Onboarding
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/attio"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Attio logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e0654c8da7cf51ae2496_attio.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Attio</div></a
                  ><a
                    href="real-saas-design-inspirations/onboarding-attio"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/editor-tables-zapier"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1d0eac59849f59fcb1b2_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1d0eac59849f59fcb1b2_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1d0eac59849f59fcb1b2_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1d0eac59849f59fcb1b2_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1d0eac59849f59fcb1b2_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1d0eac59849f59fcb1b2_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1d0eac59849f59fcb1b2_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1d0eac59849f59fcb1b2_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Editor
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/zapier"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Zapier logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ed68a60d6c36aebbb0a1_zapioer.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Zapier</div></a
                  ><a
                    href="real-saas-design-inspirations/editor-tables-zapier"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/authentification-descript"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad22c8ac59849f59ff8cc0_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad22c8ac59849f59ff8cc0_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad22c8ac59849f59ff8cc0_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad22c8ac59849f59ff8cc0_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad22c8ac59849f59ff8cc0_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad22c8ac59849f59ff8cc0_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad22c8ac59849f59ff8cc0_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad22c8ac59849f59ff8cc0_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Authentification
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/descript"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Descript logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e27f6128ac3c44f481eb_descript%20logo.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Descript</div></a
                  ><a
                    href="real-saas-design-inspirations/authentification-descript"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/empty-states-loom"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4e7859c78c7ed6f5d0ac2_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4e7859c78c7ed6f5d0ac2_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4e7859c78c7ed6f5d0ac2_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4e7859c78c7ed6f5d0ac2_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4e7859c78c7ed6f5d0ac2_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4e7859c78c7ed6f5d0ac2_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4e7859c78c7ed6f5d0ac2_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4e7859c78c7ed6f5d0ac2_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Empty States
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/loom"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Loom logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e4c0be5dd773ef696f4c_loom.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Loom</div></a
                  ><a
                    href="real-saas-design-inspirations/empty-states-loom"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/dashboard-loom"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4e3eebcb4479ddd4409aa_thumb%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4e3eebcb4479ddd4409aa_thumb%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4e3eebcb4479ddd4409aa_thumb%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4e3eebcb4479ddd4409aa_thumb%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4e3eebcb4479ddd4409aa_thumb%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4e3eebcb4479ddd4409aa_thumb%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4e3eebcb4479ddd4409aa_thumb%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4e3eebcb4479ddd4409aa_thumb%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Dashboard
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/loom"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Loom logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e4c0be5dd773ef696f4c_loom.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Loom</div></a
                  ><a
                    href="real-saas-design-inspirations/dashboard-loom"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/authentification-loom"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4d1f6b4468c7eb1e41ee0_thumbn%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4d1f6b4468c7eb1e41ee0_thumbn%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4d1f6b4468c7eb1e41ee0_thumbn%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4d1f6b4468c7eb1e41ee0_thumbn%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4d1f6b4468c7eb1e41ee0_thumbn%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4d1f6b4468c7eb1e41ee0_thumbn%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4d1f6b4468c7eb1e41ee0_thumbn%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Authentification
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/loom"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Loom logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e4c0be5dd773ef696f4c_loom.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Loom</div></a
                  ><a
                    href="real-saas-design-inspirations/authentification-loom"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/editor-video-recorder-loom"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec6e0079f04d7597270478_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec6e0079f04d7597270478_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec6e0079f04d7597270478_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec6e0079f04d7597270478_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec6e0079f04d7597270478_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec6e0079f04d7597270478_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec6e0079f04d7597270478_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec6e0079f04d7597270478_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Editor
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/loom"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Loom logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e4c0be5dd773ef696f4c_loom.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Loom</div></a
                  ><a
                    href="real-saas-design-inspirations/editor-video-recorder-loom"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/search-attio"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf8378c65b886240cc83f3_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf8378c65b886240cc83f3_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf8378c65b886240cc83f3_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf8378c65b886240cc83f3_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf8378c65b886240cc83f3_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf8378c65b886240cc83f3_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf8378c65b886240cc83f3_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf8378c65b886240cc83f3_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Search
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/attio"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Attio logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e0654c8da7cf51ae2496_attio.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Attio</div></a
                  ><a
                    href="real-saas-design-inspirations/search-attio"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/onboarding-framer"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe1ebf763856784e764bc_Thumbnail%20(2).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe1ebf763856784e764bc_Thumbnail%20(2)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe1ebf763856784e764bc_Thumbnail%20(2)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe1ebf763856784e764bc_Thumbnail%20(2)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe1ebf763856784e764bc_Thumbnail%20(2)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe1ebf763856784e764bc_Thumbnail%20(2)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe1ebf763856784e764bc_Thumbnail%20(2)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe1ebf763856784e764bc_Thumbnail%20(2).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Onboarding
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/framer"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Framer logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e32b1b022fc90fb743a1_framer%20logo.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Framer</div></a
                  ><a
                    href="real-saas-design-inspirations/onboarding-framer"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/editor-chatbot-zapier"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad159ad6e8611d029f1452_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad159ad6e8611d029f1452_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad159ad6e8611d029f1452_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad159ad6e8611d029f1452_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad159ad6e8611d029f1452_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad159ad6e8611d029f1452_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad159ad6e8611d029f1452_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad159ad6e8611d029f1452_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Editor
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/zapier"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Zapier logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ed68a60d6c36aebbb0a1_zapioer.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Zapier</div></a
                  ><a
                    href="real-saas-design-inspirations/editor-chatbot-zapier"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/empty-states-zapier"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1e4b2424ca5d6203a920_empty%20thumb%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1e4b2424ca5d6203a920_empty%20thumb%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1e4b2424ca5d6203a920_empty%20thumb%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1e4b2424ca5d6203a920_empty%20thumb%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1e4b2424ca5d6203a920_empty%20thumb%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1e4b2424ca5d6203a920_empty%20thumb%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1e4b2424ca5d6203a920_empty%20thumb%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1e4b2424ca5d6203a920_empty%20thumb%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Empty States
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/zapier"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Zapier logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ed68a60d6c36aebbb0a1_zapioer.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Zapier</div></a
                  ><a
                    href="real-saas-design-inspirations/empty-states-zapier"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/project-settings-framer"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe76b61c88173f64aab3f_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe76b61c88173f64aab3f_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe76b61c88173f64aab3f_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe76b61c88173f64aab3f_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe76b61c88173f64aab3f_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe76b61c88173f64aab3f_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe76b61c88173f64aab3f_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe76b61c88173f64aab3f_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Settings
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/framer"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Framer logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e32b1b022fc90fb743a1_framer%20logo.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Framer</div></a
                  ><a
                    href="real-saas-design-inspirations/project-settings-framer"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/editor-tasks-attio"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfb0b9a1b156aad40fe525_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfb0b9a1b156aad40fe525_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfb0b9a1b156aad40fe525_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfb0b9a1b156aad40fe525_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfb0b9a1b156aad40fe525_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfb0b9a1b156aad40fe525_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfb0b9a1b156aad40fe525_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfb0b9a1b156aad40fe525_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Editor
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/attio"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Attio logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e0654c8da7cf51ae2496_attio.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Attio</div></a
                  ><a
                    href="real-saas-design-inspirations/editor-tasks-attio"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/onboarding-interfaces-airtable"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca7858aa47e0c20ae3641_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca7858aa47e0c20ae3641_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca7858aa47e0c20ae3641_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca7858aa47e0c20ae3641_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca7858aa47e0c20ae3641_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca7858aa47e0c20ae3641_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca7858aa47e0c20ae3641_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca7858aa47e0c20ae3641_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Onboarding
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/airtable"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Airtable logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e0b559c55f9a7f1756bf_airtable.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Airtable</div></a
                  ><a
                    href="real-saas-design-inspirations/onboarding-interfaces-airtable"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/onboarding-list-data-airtable"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ecbe1d066c3d50c2742c71_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ecbe1d066c3d50c2742c71_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ecbe1d066c3d50c2742c71_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ecbe1d066c3d50c2742c71_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ecbe1d066c3d50c2742c71_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ecbe1d066c3d50c2742c71_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ecbe1d066c3d50c2742c71_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ecbe1d066c3d50c2742c71_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Onboarding
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/airtable"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Airtable logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e0b559c55f9a7f1756bf_airtable.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Airtable</div></a
                  ><a
                    href="real-saas-design-inspirations/onboarding-list-data-airtable"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/editor-zapier"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad0b7b6aa5617c472b47dc_Thumbnail%20edit%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad0b7b6aa5617c472b47dc_Thumbnail%20edit%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad0b7b6aa5617c472b47dc_Thumbnail%20edit%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad0b7b6aa5617c472b47dc_Thumbnail%20edit%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad0b7b6aa5617c472b47dc_Thumbnail%20edit%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad0b7b6aa5617c472b47dc_Thumbnail%20edit%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad0b7b6aa5617c472b47dc_Thumbnail%20edit%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Editor
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/zapier"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Zapier logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ed68a60d6c36aebbb0a1_zapioer.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Zapier</div></a
                  ><a
                    href="real-saas-design-inspirations/editor-zapier"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/dashboard-bento"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abfa66244c6f343fe98360_dahsboard%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abfa66244c6f343fe98360_dahsboard%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abfa66244c6f343fe98360_dahsboard%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abfa66244c6f343fe98360_dahsboard%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abfa66244c6f343fe98360_dahsboard%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abfa66244c6f343fe98360_dahsboard%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abfa66244c6f343fe98360_dahsboard%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Dashboard
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/bento"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Bento logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e16cce2434d97f703a7c_bento%20logo.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Bento</div></a
                  ><a
                    href="real-saas-design-inspirations/dashboard-bento"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/settings-framer"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe5276aa5617c47941139_settings%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe5276aa5617c47941139_settings%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe5276aa5617c47941139_settings%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe5276aa5617c47941139_settings%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe5276aa5617c47941139_settings%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe5276aa5617c47941139_settings%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe5276aa5617c47941139_settings%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe5276aa5617c47941139_settings%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Settings
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/framer"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Framer logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e32b1b022fc90fb743a1_framer%20logo.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Framer</div></a
                  ><a
                    href="real-saas-design-inspirations/settings-framer"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/onboarding-loom"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4d2109dfb1e57e757a763_thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4d2109dfb1e57e757a763_thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4d2109dfb1e57e757a763_thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4d2109dfb1e57e757a763_thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4d2109dfb1e57e757a763_thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4d2109dfb1e57e757a763_thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4d2109dfb1e57e757a763_thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65e4d2109dfb1e57e757a763_thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Onboarding
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/loom"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Loom logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e4c0be5dd773ef696f4c_loom.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Loom</div></a
                  ><a
                    href="real-saas-design-inspirations/onboarding-loom"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/search-airtable"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca0a3b745eca1bca02b3d_Thumbnail2%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca0a3b745eca1bca02b3d_Thumbnail2%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca0a3b745eca1bca02b3d_Thumbnail2%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca0a3b745eca1bca02b3d_Thumbnail2%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca0a3b745eca1bca02b3d_Thumbnail2%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca0a3b745eca1bca02b3d_Thumbnail2%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca0a3b745eca1bca02b3d_Thumbnail2%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca0a3b745eca1bca02b3d_Thumbnail2%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Search
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/airtable"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Airtable logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e0b559c55f9a7f1756bf_airtable.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Airtable</div></a
                  ><a
                    href="real-saas-design-inspirations/search-airtable"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/onboarding-app-airtable"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65edcaee3f275b1331fcf597_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65edcaee3f275b1331fcf597_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65edcaee3f275b1331fcf597_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65edcaee3f275b1331fcf597_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65edcaee3f275b1331fcf597_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65edcaee3f275b1331fcf597_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65edcaee3f275b1331fcf597_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65edcaee3f275b1331fcf597_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Onboarding
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/airtable"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Airtable logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e0b559c55f9a7f1756bf_airtable.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Airtable</div></a
                  ><a
                    href="real-saas-design-inspirations/onboarding-app-airtable"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/growth-loop"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca16364249af4014c4bf3_Thumbnail3%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca16364249af4014c4bf3_Thumbnail3%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca16364249af4014c4bf3_Thumbnail3%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca16364249af4014c4bf3_Thumbnail3%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca16364249af4014c4bf3_Thumbnail3%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca16364249af4014c4bf3_Thumbnail3%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca16364249af4014c4bf3_Thumbnail3%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca16364249af4014c4bf3_Thumbnail3%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Growth Loop
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/airtable"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Airtable logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e0b559c55f9a7f1756bf_airtable.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Airtable</div></a
                  ><a
                    href="real-saas-design-inspirations/growth-loop"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/onboarding-data-airtable"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ecbcea8667f7144a034108_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ecbcea8667f7144a034108_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ecbcea8667f7144a034108_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ecbcea8667f7144a034108_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ecbcea8667f7144a034108_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ecbcea8667f7144a034108_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ecbcea8667f7144a034108_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ecbcea8667f7144a034108_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Onboarding
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/airtable"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Airtable logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e0b559c55f9a7f1756bf_airtable.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Airtable</div></a
                  ><a
                    href="real-saas-design-inspirations/onboarding-data-airtable"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/settings-miro"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65edeb028dc418fda45113b5_1Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65edeb028dc418fda45113b5_1Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65edeb028dc418fda45113b5_1Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65edeb028dc418fda45113b5_1Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65edeb028dc418fda45113b5_1Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65edeb028dc418fda45113b5_1Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65edeb028dc418fda45113b5_1Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65edeb028dc418fda45113b5_1Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Settings
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/miro"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Miro logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e54954fed3eb89dcb675_miro.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Miro</div></a
                  ><a
                    href="real-saas-design-inspirations/settings-miro"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/editor-bento"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac001d2d89840e998aac1b_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac001d2d89840e998aac1b_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac001d2d89840e998aac1b_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac001d2d89840e998aac1b_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac001d2d89840e998aac1b_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac001d2d89840e998aac1b_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac001d2d89840e998aac1b_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac001d2d89840e998aac1b_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Editor
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/bento"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Bento logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e16cce2434d97f703a7c_bento%20logo.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Bento</div></a
                  ><a
                    href="real-saas-design-inspirations/editor-bento"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/editor-framer"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abec31a32da2cb970fc4b8_editor%20thumb%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abec31a32da2cb970fc4b8_editor%20thumb%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abec31a32da2cb970fc4b8_editor%20thumb%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abec31a32da2cb970fc4b8_editor%20thumb%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abec31a32da2cb970fc4b8_editor%20thumb%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abec31a32da2cb970fc4b8_editor%20thumb%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abec31a32da2cb970fc4b8_editor%20thumb%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abec31a32da2cb970fc4b8_editor%20thumb%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Editor
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/framer"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Framer logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e32b1b022fc90fb743a1_framer%20logo.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Framer</div></a
                  ><a
                    href="real-saas-design-inspirations/editor-framer"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/analytics-attio"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfb781cfb61a2508a88e9e_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfb781cfb61a2508a88e9e_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfb781cfb61a2508a88e9e_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfb781cfb61a2508a88e9e_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfb781cfb61a2508a88e9e_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfb781cfb61a2508a88e9e_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfb781cfb61a2508a88e9e_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfb781cfb61a2508a88e9e_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Analytics
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/attio"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Attio logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e0654c8da7cf51ae2496_attio.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Attio</div></a
                  ><a
                    href="real-saas-design-inspirations/analytics-attio"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/settings-attio"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf8b25056b19cb834d6498_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf8b25056b19cb834d6498_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf8b25056b19cb834d6498_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf8b25056b19cb834d6498_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf8b25056b19cb834d6498_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf8b25056b19cb834d6498_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf8b25056b19cb834d6498_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bf8b25056b19cb834d6498_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Settings
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/attio"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Attio logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e0654c8da7cf51ae2496_attio.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Attio</div></a
                  ><a
                    href="real-saas-design-inspirations/settings-attio"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/dashboard-airtable"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec9fc78a11ffe13925a768_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec9fc78a11ffe13925a768_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec9fc78a11ffe13925a768_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec9fc78a11ffe13925a768_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec9fc78a11ffe13925a768_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec9fc78a11ffe13925a768_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec9fc78a11ffe13925a768_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec9fc78a11ffe13925a768_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Dashboard
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/airtable"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Airtable logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e0b559c55f9a7f1756bf_airtable.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Airtable</div></a
                  ><a
                    href="real-saas-design-inspirations/dashboard-airtable"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/editor-canva-zapier"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1907a5268eb59e6a9f66_thumbb%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1907a5268eb59e6a9f66_thumbb%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1907a5268eb59e6a9f66_thumbb%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1907a5268eb59e6a9f66_thumbb%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1907a5268eb59e6a9f66_thumbb%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1907a5268eb59e6a9f66_thumbb%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1907a5268eb59e6a9f66_thumbb%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1907a5268eb59e6a9f66_thumbb%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Editor
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/zapier"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Zapier logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ed68a60d6c36aebbb0a1_zapioer.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Zapier</div></a
                  ><a
                    href="real-saas-design-inspirations/editor-canva-zapier"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/authentification-miro"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ede661b100f20fc3afcdff_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ede661b100f20fc3afcdff_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ede661b100f20fc3afcdff_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ede661b100f20fc3afcdff_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ede661b100f20fc3afcdff_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ede661b100f20fc3afcdff_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ede661b100f20fc3afcdff_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ede661b100f20fc3afcdff_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Authentification
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/miro"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Miro logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e54954fed3eb89dcb675_miro.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Miro</div></a
                  ><a
                    href="real-saas-design-inspirations/authentification-miro"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/code-editor-framer"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe493ffb5aab7d2bd211c_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe493ffb5aab7d2bd211c_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe493ffb5aab7d2bd211c_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe493ffb5aab7d2bd211c_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe493ffb5aab7d2bd211c_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe493ffb5aab7d2bd211c_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe493ffb5aab7d2bd211c_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe493ffb5aab7d2bd211c_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Editor
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/framer"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Framer logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e32b1b022fc90fb743a1_framer%20logo.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Framer</div></a
                  ><a
                    href="real-saas-design-inspirations/code-editor-framer"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/authentification-tella"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac0a6881d0be4e02564c2a_Thumbnail%20(1).png"
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Authentification
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/tella"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Tella logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo.png"
                      sizes="(max-width: 479px) 22vw, (max-width: 1439px) 30px, (max-width: 1919px) 2vw, 30px"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ee6c1b70cf7f74c986c9_tella%20logo.png        2420w
                      "
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Tella</div></a
                  ><a
                    href="real-saas-design-inspirations/authentification-tella"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/editor-automations-airtable"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ecaa79a4b19ca48b9ca220_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ecaa79a4b19ca48b9ca220_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ecaa79a4b19ca48b9ca220_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ecaa79a4b19ca48b9ca220_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ecaa79a4b19ca48b9ca220_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ecaa79a4b19ca48b9ca220_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ecaa79a4b19ca48b9ca220_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ecaa79a4b19ca48b9ca220_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Editor
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/airtable"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Airtable logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e0b559c55f9a7f1756bf_airtable.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Airtable</div></a
                  ><a
                    href="real-saas-design-inspirations/editor-automations-airtable"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/dashboard-zapier"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad0b332a6410c16f4c8a58_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad0b332a6410c16f4c8a58_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad0b332a6410c16f4c8a58_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad0b332a6410c16f4c8a58_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad0b332a6410c16f4c8a58_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad0b332a6410c16f4c8a58_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad0b332a6410c16f4c8a58_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Dashboard
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/zapier"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Zapier logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ed68a60d6c36aebbb0a1_zapioer.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Zapier</div></a
                  ><a
                    href="real-saas-design-inspirations/dashboard-zapier"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/onboarding-bento"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abfb0f05de675192760ffe_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abfb0f05de675192760ffe_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abfb0f05de675192760ffe_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abfb0f05de675192760ffe_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abfb0f05de675192760ffe_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abfb0f05de675192760ffe_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abfb0f05de675192760ffe_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abfb0f05de675192760ffe_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Onboarding
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/bento"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Bento logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e16cce2434d97f703a7c_bento%20logo.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Bento</div></a
                  ><a
                    href="real-saas-design-inspirations/onboarding-bento"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/editor-interfaces-airtable"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ecb1d380a8c0cb1923f9fc_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ecb1d380a8c0cb1923f9fc_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ecb1d380a8c0cb1923f9fc_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ecb1d380a8c0cb1923f9fc_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ecb1d380a8c0cb1923f9fc_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ecb1d380a8c0cb1923f9fc_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ecb1d380a8c0cb1923f9fc_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ecb1d380a8c0cb1923f9fc_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Editor
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/airtable"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Airtable logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e0b559c55f9a7f1756bf_airtable.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Airtable</div></a
                  ><a
                    href="real-saas-design-inspirations/editor-interfaces-airtable"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/authentification-zapier"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad0279c540d90e87b49476_zap%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad0279c540d90e87b49476_zap%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad0279c540d90e87b49476_zap%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad0279c540d90e87b49476_zap%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad0279c540d90e87b49476_zap%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad0279c540d90e87b49476_zap%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad0279c540d90e87b49476_zap%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad0279c540d90e87b49476_zap%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Authentification
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/zapier"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Zapier logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ed68a60d6c36aebbb0a1_zapioer.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Zapier</div></a
                  ><a
                    href="real-saas-design-inspirations/authentification-zapier"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/empty-states-attio"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfaa22a7461fca4ffb2b91_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfaa22a7461fca4ffb2b91_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfaa22a7461fca4ffb2b91_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfaa22a7461fca4ffb2b91_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfaa22a7461fca4ffb2b91_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfaa22a7461fca4ffb2b91_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfaa22a7461fca4ffb2b91_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65bfaa22a7461fca4ffb2b91_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Empty States
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/attio"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Attio logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e0654c8da7cf51ae2496_attio.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Attio</div></a
                  ><a
                    href="real-saas-design-inspirations/empty-states-attio"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/settings-zapier"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad061d9e2f2e7a353604a3_Thumbnail%20(2).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad061d9e2f2e7a353604a3_Thumbnail%20(2)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad061d9e2f2e7a353604a3_Thumbnail%20(2)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad061d9e2f2e7a353604a3_Thumbnail%20(2)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad061d9e2f2e7a353604a3_Thumbnail%20(2)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad061d9e2f2e7a353604a3_Thumbnail%20(2)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad061d9e2f2e7a353604a3_Thumbnail%20(2)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad061d9e2f2e7a353604a3_Thumbnail%20(2).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Settings
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/zapier"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Zapier logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ed68a60d6c36aebbb0a1_zapioer.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Zapier</div></a
                  ><a
                    href="real-saas-design-inspirations/settings-zapier"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/search-loom"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec6b78665cc9fe43c563a6_Thumbnail2%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec6b78665cc9fe43c563a6_Thumbnail2%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec6b78665cc9fe43c563a6_Thumbnail2%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec6b78665cc9fe43c563a6_Thumbnail2%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec6b78665cc9fe43c563a6_Thumbnail2%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec6b78665cc9fe43c563a6_Thumbnail2%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec6b78665cc9fe43c563a6_Thumbnail2%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ec6b78665cc9fe43c563a6_Thumbnail2%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Search
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/loom"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Loom logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e4c0be5dd773ef696f4c_loom.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Loom</div></a
                  ><a
                    href="real-saas-design-inspirations/search-loom"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/menu-framer"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe2792f963c198a8b67be_Thumbnail%20(3).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe2792f963c198a8b67be_Thumbnail%20(3)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe2792f963c198a8b67be_Thumbnail%20(3)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe2792f963c198a8b67be_Thumbnail%20(3)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe2792f963c198a8b67be_Thumbnail%20(3)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe2792f963c198a8b67be_Thumbnail%20(3)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe2792f963c198a8b67be_Thumbnail%20(3)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65abe2792f963c198a8b67be_Thumbnail%20(3).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Menu
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/framer"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Framer logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e32b1b022fc90fb743a1_framer%20logo.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Framer</div></a
                  ><a
                    href="real-saas-design-inspirations/menu-framer"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/growth-loop-bento"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac057a244c6f343fefce53_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac057a244c6f343fefce53_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac057a244c6f343fefce53_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac057a244c6f343fefce53_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac057a244c6f343fefce53_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac057a244c6f343fefce53_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac057a244c6f343fefce53_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ac057a244c6f343fefce53_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Growth Loop
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/bento"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Bento logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e16cce2434d97f703a7c_bento%20logo.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Bento</div></a
                  ><a
                    href="real-saas-design-inspirations/growth-loop-bento"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/onboarding-automations-airtable"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca8f6d13fe37e87ff432a_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca8f6d13fe37e87ff432a_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca8f6d13fe37e87ff432a_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca8f6d13fe37e87ff432a_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca8f6d13fe37e87ff432a_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca8f6d13fe37e87ff432a_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca8f6d13fe37e87ff432a_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65eca8f6d13fe37e87ff432a_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Onboarding
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/airtable"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Airtable logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4e0b559c55f9a7f1756bf_airtable.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Airtable</div></a
                  ><a
                    href="real-saas-design-inspirations/onboarding-automations-airtable"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
              <div role="listitem" class="w-dyn-item">
                <div
                  data-w-id="d115dec6-c2b5-2edd-ad5b-f6e6fba45288"
                  class="design-inspiration-card-wrapper"
                >
                  <a
                    href="real-saas-design-inspirations/editor-interfaces-zapier"
                    class="design-inspiration-card w-inline-block"
                    ><img
                      loading="lazy"
                      alt=""
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1059b477a74d050a2c04_Thumbnail%20(1).png"
                      sizes="(max-width: 479px) 91vw, (max-width: 767px) 95vw, (max-width: 991px) 47vw, (max-width: 1439px) 30vw, 31vw"
                      srcset="
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1059b477a74d050a2c04_Thumbnail%20(1)-p-500.png   500w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1059b477a74d050a2c04_Thumbnail%20(1)-p-800.png   800w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1059b477a74d050a2c04_Thumbnail%20(1)-p-1080.png 1080w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1059b477a74d050a2c04_Thumbnail%20(1)-p-1600.png 1600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1059b477a74d050a2c04_Thumbnail%20(1)-p-2000.png 2000w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1059b477a74d050a2c04_Thumbnail%20(1)-p-2600.png 2600w,
                        https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65ad1059b477a74d050a2c04_Thumbnail%20(1).png        3736w
                      "
                      class="article-thumbnail"
                    />
                    <div
                      fs-cmsfilter-field="category"
                      class="hidden-filter-category"
                    >
                      Editor
                    </div></a
                  ><a
                    href="real-saas-design-inspirations-companies/zapier"
                    class="company-link-btn hover-button w-inline-block"
                    ><img
                      loading="lazy"
                      alt="Zapier logo"
                      src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65a4ed68a60d6c36aebbb0a1_zapioer.svg"
                      class="design-inspi-company-logo"
                    />
                    <div class="design-inspi-coampany-name">Zapier</div></a
                  ><a
                    href="real-saas-design-inspirations/editor-interfaces-zapier"
                    class="open-button-inspiration w-inline-block"
                    ><div class="text-block-53">Open</div>
                    <img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a2ab4afa5edfde7791c735_open%20icon.svg"
                      loading="lazy"
                      alt=""
                  /></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="next-steps">
        <div class="div-block-114">
          <h1 class="next-title">What&#x27;s next?</h1>
        </div>
        <div class="div-block-113">
          <div class="div-block-111">
            <img
              src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a412ec9a5e22222e1cd6aa_check.svg"
              loading="lazy"
              alt=""
            />
            <div class="line-purple"></div>
            <img
              src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a412ed322cb1690dbf1c8a_empty%20check.svg"
              loading="lazy"
              alt=""
            />
            <div class="line-grey"></div>
            <img
              src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65a412ed322cb1690dbf1c8a_empty%20check.svg"
              loading="lazy"
              alt=""
            />
          </div>
          <div class="div-block-116">
            <div class="next-test-wrapper">
              <h1 class="next-heading-purple">Find the right inspiration</h1>
              <div class="next-description-purple">
                Find real life design inspirations and duplicate them in your
                Figma using the yellow button on this page.
              </div>
            </div>
            <div class="next-test-wrapper">
              <h1 class="next-heading">Craft the perfect solution</h1>
              <div class="next-description">
                Find real life design inspirations and duplicate them in your
                Figma using the yellow button on this page.
              </div>
            </div>
            <div class="next-test-wrapper">
              <h1 class="next-heading">Collect your users’ feedback</h1>
              <div class="next-description">
                Understand how it helps you ship value to your users. This is
                where SoundLine! can help you.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="feature-section">
        <div class="title-wrapper-feature-section large">
          <h1 class="home-h2">Dead simple workflow.</h1>
        </div>
        <div class="tab-arrow-wrapper">
          <img
            src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665c61c46777c9db69d45807_section%20arrow.svg"
            loading="lazy"
            alt=""
            class="tab-arrow-guide"
          /><img
            src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665c61c46777c9db69d45807_section%20arrow.svg"
            loading="lazy"
            alt=""
            class="tab-arrow-guide"
          /><img
            src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665c61c46777c9db69d45807_section%20arrow.svg"
            loading="lazy"
            alt=""
            class="tab-arrow-guide"
          /><img
            src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665c61c46777c9db69d45807_section%20arrow.svg"
            loading="lazy"
            alt=""
            class="tab-arrow-guide"
          /><img
            src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665c61c46777c9db69d45807_section%20arrow.svg"
            loading="lazy"
            alt=""
            class="tab-arrow-guide"
          />
        </div>
        <div
          data-current="Tab 1"
          data-easing="ease"
          data-duration-in="0"
          data-duration-out="0"
          class="w-tabs"
        >
          <div class="tabs-menu-5 w-tab-menu">
            <a
              data-w-tab="Tab 1"
              data-w-id="cc75e1b0-0fd1-34a8-42f7-6cc843f426b1"
              class="tab-btn hover-button w-inline-block w-tab-link w--current"
              ><div class="tab-icon w-embed">
                <svg
                  width="74"
                  height="75"
                  viewBox="0 0 74 75"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M27.7524 9.38422V15.5502"
                    stroke="currentColor"
                    stroke-width="4.68953"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M13.8711 14.0086L18.4956 18.6331"
                    stroke="currentColor"
                    stroke-width="4.68953"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M32.3789 41.7581L23.1289 51.0081"
                    stroke="currentColor"
                    stroke-width="4.68953"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M41.6211 32.5083L50.8711 23.2583"
                    stroke="currentColor"
                    stroke-width="4.68953"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M9.24609 27.8832H15.412"
                    stroke="currentColor"
                    stroke-width="4.68953"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M18.0086 41.5393L22.8981 36.6498C24.1022 35.4457 26.0544 35.4457 27.2585 36.6498L40.4949 49.8861C41.7215 51.1128 43.3852 51.8019 45.1199 51.8019C46.8546 51.8019 48.5182 51.1128 49.7449 49.8861V49.8861C50.9715 48.6595 51.6606 46.9958 51.6606 45.2611C51.6606 43.5264 50.9715 41.8628 49.7449 40.6361L36.5084 27.3997C35.3043 26.1956 35.3043 24.2433 36.5084 23.0392L41.3979 18.1497C42.6021 16.9456 44.5543 16.9456 45.7584 18.1497L58.9949 31.3861C66.6578 39.0491 66.6578 51.4732 58.9949 59.1361V59.1361C51.3319 66.799 38.9078 66.799 31.2449 59.1361L18.0084 45.8997C16.8044 44.6956 16.8045 42.7434 18.0086 41.5393Z"
                    stroke="currentColor"
                    stroke-width="4.68953"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </div>
              <div class="tab-btn-text">Centralize</div></a
            ><a
              data-w-tab="Tab 2"
              data-w-id="cc75e1b0-0fd1-34a8-42f7-6cc843f426b5"
              class="tab-btn hover-button w-inline-block w-tab-link"
              ><div class="tab-icon w-embed">
                <svg
                  width="75"
                  height="75"
                  viewBox="0 0 75 75"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.58356 46.385V43.3017C9.53831 40.8349 10.4983 38.4557 12.2429 36.7111C13.9876 34.9665 16.3667 34.0064 18.8336 34.0517H28.0836C30.5504 34.0064 32.9296 34.9665 34.6742 36.7111C36.4188 38.4557 37.3788 40.8349 37.3336 43.3017V46.385"
                    stroke="currentColor"
                    stroke-width="4.68953"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M49.6641 34.0517H55.8307C58.2976 34.0064 60.6767 34.9665 62.4214 36.7111C64.166 38.4557 65.126 40.8349 65.0807 43.3017V46.385"
                    stroke="currentColor"
                    stroke-width="4.68953"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <circle
                    cx="23.4583"
                    cy="17.0916"
                    r="7.70833"
                    stroke="currentColor"
                    stroke-width="4.68953"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <circle
                    cx="52.7487"
                    cy="18.6333"
                    r="6.16667"
                    stroke="currentColor"
                    stroke-width="4.68953"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M55.8277 54.0917H47.8359"
                    stroke="currentColor"
                    stroke-width="4.68953"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M55.8307 61.9728V54.0916"
                    stroke="currentColor"
                    stroke-width="4.68953"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M18.832 54.2422C22.4038 60.8018 29.2754 64.8845 36.7444 64.8845C44.2135 64.8845 51.0851 60.8018 54.6569 54.2422"
                    stroke="currentColor"
                    stroke-width="4.68953"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </div>
              <div class="tab-btn-text">Link to Users</div></a
            ><a
              data-w-tab="Tab 3"
              data-w-id="cc75e1b0-0fd1-34a8-42f7-6cc843f426b9"
              class="tab-btn hover-button w-inline-block w-tab-link"
              ><div class="tab-icon w-embed">
                <svg
                  width="75"
                  height="75"
                  viewBox="0 0 75 75"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M38.9671 38.3669L44.7261 37.2133C45.5588 37.0495 46.3249 36.6439 46.9285 36.0473L63.7458 19.2423C66.0004 16.9863 66.0004 13.3302 63.7458 11.0742V11.0742C61.4899 8.81966 57.8337 8.81966 55.5778 11.0742L38.7604 27.8792C38.1593 28.4813 37.7494 29.2475 37.5821 30.0816L36.4408 35.8406C36.3064 36.5434 36.5289 37.267 37.0348 37.7729C37.5407 38.2788 38.2644 38.5013 38.9671 38.3669Z"
                    stroke="currentColor"
                    stroke-width="4.68953"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M29.5391 44.6064C39.1754 54.2428 52.3652 56.6858 58.9817 50.06C64.5587 44.483 63.692 34.2668 57.5381 25.4263"
                    stroke="currentColor"
                    stroke-width="4.68953"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M49.5132 17.1204C37.9243 8.20584 23.4328 7.09229 15.3603 15.1647C6.3255 24.1996 8.76852 41.2884 20.814 53.3338C26.0882 58.6949 32.6077 62.6668 39.7905 64.895"
                    stroke="currentColor"
                    stroke-width="4.68953"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </div>
              <div class="tab-btn-text">Create insights</div></a
            ><a
              data-w-tab="Tab 4"
              data-w-id="cc75e1b0-0fd1-34a8-42f7-6cc843f426bd"
              class="tab-btn hover-button w-inline-block w-tab-link"
              ><div class="tab-icon w-embed">
                <svg
                  width="74"
                  height="75"
                  viewBox="0 0 74 75"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M27.75 18.6333V15.55C27.75 12.1442 30.5109 9.3833 33.9167 9.3833H58.5833C61.9891 9.3833 64.75 12.1442 64.75 15.55V40.2166C64.75 43.6224 61.9891 46.3833 58.5833 46.3833H55.5"
                    stroke="currentColor"
                    stroke-width="4.68953"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M46.25 55.6333V58.7166C46.25 62.1224 43.4891 64.8833 40.0833 64.8833H15.4167C12.0109 64.8833 9.25 62.1224 9.25 58.7166V34.05C9.25 30.6442 12.0109 27.8833 15.4167 27.8833H18.5"
                    stroke="currentColor"
                    stroke-width="4.68953"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M36.9987 37.1177L37.0141 37.1331L36.9987 37.1485L36.9833 37.1331L36.9987 37.1177"
                    stroke="currentColor"
                    stroke-width="4.68953"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M36.9987 27.8677L37.0141 27.8831L36.9987 27.8985L36.9833 27.8831L36.9987 27.8677"
                    stroke="currentColor"
                    stroke-width="4.68953"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M36.9987 46.3677L37.0141 46.3831L36.9987 46.3985L36.9833 46.3831L36.9987 46.3677"
                    stroke="currentColor"
                    stroke-width="4.68953"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M46.2487 37.1177L46.2641 37.1331L46.2487 37.1485L46.2333 37.1331L46.2487 37.1177"
                    stroke="currentColor"
                    stroke-width="4.68953"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M46.2487 27.8677L46.2641 27.8831L46.2487 27.8985L46.2333 27.8831L46.2487 27.8677"
                    stroke="currentColor"
                    stroke-width="4.68953"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M46.2487 46.3677L46.2641 46.3831L46.2487 46.3985L46.2333 46.3831L46.2487 46.3677"
                    stroke="currentColor"
                    stroke-width="4.68953"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M27.7487 37.1177L27.7641 37.1331L27.7487 37.1485L27.7333 37.1331L27.7487 37.1177"
                    stroke="currentColor"
                    stroke-width="4.68953"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M27.7487 27.8677L27.7641 27.8831L27.7487 27.8985L27.7333 27.8831L27.7487 27.8677"
                    stroke="currentColor"
                    stroke-width="4.68953"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M27.7487 46.3677L27.7641 46.3831L27.7487 46.3985L27.7333 46.3831L27.7487 46.3677"
                    stroke="currentColor"
                    stroke-width="4.68953"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </div>
              <div class="tab-btn-text">Identify patterns</div></a
            ><a
              data-w-tab="Tab 5"
              data-w-id="cc75e1b0-0fd1-34a8-42f7-6cc843f426c1"
              class="tab-btn hover-button w-inline-block w-tab-link"
              ><div class="tab-icon w-embed">
                <svg
                  width="75"
                  height="75"
                  viewBox="0 0 75 75"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M32.6953 18.6305C19.9241 18.6305 9.57031 28.9843 9.57031 41.7555C9.57031 54.5267 19.9241 64.8805 32.6953 64.8805C45.4665 64.8805 55.8203 54.5267 55.8203 41.7555H32.6953V18.6305Z"
                    stroke="currentColor"
                    stroke-width="4.68953"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M65.0716 30.9647C65.0716 19.0445 55.4084 9.38135 43.4883 9.38135V30.9647H65.0716Z"
                    stroke="currentColor"
                    stroke-width="4.68953"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </div>
              <div class="tab-btn-text">Analyze</div></a
            ><a
              data-w-tab="Tab 6"
              data-w-id="cc75e1b0-0fd1-34a8-42f7-6cc843f426c5"
              class="tab-btn hover-button w-inline-block w-tab-link"
              ><div class="tab-icon w-embed">
                <svg
                  width="75"
                  height="75"
                  viewBox="0 0 75 75"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <rect
                    x="22.2539"
                    y="21.7167"
                    width="43.1667"
                    height="43.1667"
                    rx="6.23493"
                    stroke="currentColor"
                    stroke-width="4.68953"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M22.2474 52.5497H16.0807C12.675 52.5497 9.91406 49.7888 9.91406 46.3831V15.5497C9.91406 12.144 12.675 9.38306 16.0807 9.38306H46.9141C50.3198 9.38306 53.0807 12.144 53.0807 15.5497V21.7164"
                    stroke="currentColor"
                    stroke-width="4.68953"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </div>
              <div class="tab-btn-text">Share anywhere</div></a
            >
          </div>
          <div class="tabs-content-2 w-tab-content">
            <div data-w-tab="Tab 1" class="w-tab-pane w--tab-active">
              <div class="tab-bg">
                <img
                  sizes="(max-width: 767px) 95vw, (max-width: 1439px) 98vw, 1198px"
                  srcset="
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665c5ef424e680fd4db85bc5_import%20(1)-p-500.png   500w,
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665c5ef424e680fd4db85bc5_import%20(1)-p-800.png   800w,
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665c5ef424e680fd4db85bc5_import%20(1)-p-1080.png 1080w,
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665c5ef424e680fd4db85bc5_import%20(1)-p-1600.png 1600w,
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665c5ef424e680fd4db85bc5_import%20(1).png        2409w
                  "
                  alt=""
                  src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665c5ef424e680fd4db85bc5_import%20(1).png"
                  loading="lazy"
                  class="tab-main-img"
                />
              </div>
            </div>
            <div data-w-tab="Tab 2" class="w-tab-pane">
              <div class="w-layout-vflex tab-bg">
                <img
                  sizes="(max-width: 767px) 95vw, (max-width: 1439px) 98vw, 1198px"
                  srcset="
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665cb7a830a7c2892872026d_link%20to%20users%20(1)-p-500.png   500w,
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665cb7a830a7c2892872026d_link%20to%20users%20(1)-p-800.png   800w,
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665cb7a830a7c2892872026d_link%20to%20users%20(1)-p-1080.png 1080w,
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665cb7a830a7c2892872026d_link%20to%20users%20(1).png        2409w
                  "
                  alt=""
                  src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665cb7a830a7c2892872026d_link%20to%20users%20(1).png"
                  loading="lazy"
                  class="tab-main-img"
                />
              </div>
            </div>
            <div data-w-tab="Tab 3" class="w-tab-pane">
              <div class="w-layout-vflex tab-bg">
                <img
                  sizes="(max-width: 767px) 95vw, (max-width: 1439px) 98vw, 1198px"
                  srcset="
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b6067c891345ba8ecf2b3_create%20insights%20(1)%20(1)-p-500.png   500w,
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b6067c891345ba8ecf2b3_create%20insights%20(1)%20(1)-p-800.png   800w,
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b6067c891345ba8ecf2b3_create%20insights%20(1)%20(1)-p-1080.png 1080w,
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b6067c891345ba8ecf2b3_create%20insights%20(1)%20(1)-p-1600.png 1600w,
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b6067c891345ba8ecf2b3_create%20insights%20(1)%20(1).png        2409w
                  "
                  alt=""
                  src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b6067c891345ba8ecf2b3_create%20insights%20(1)%20(1).png"
                  loading="lazy"
                  class="tab-main-img"
                />
              </div>
            </div>
            <div data-w-tab="Tab 4" class="w-tab-pane">
              <div class="w-layout-vflex tab-bg">
                <img
                  sizes="(max-width: 767px) 95vw, (max-width: 1439px) 98vw, 1198px"
                  srcset="
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b60de93e6adbf811e6f9b_pattern%20(1)-p-500.png   500w,
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b60de93e6adbf811e6f9b_pattern%20(1)-p-800.png   800w,
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b60de93e6adbf811e6f9b_pattern%20(1)-p-1080.png 1080w,
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b60de93e6adbf811e6f9b_pattern%20(1)-p-1600.png 1600w,
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b60de93e6adbf811e6f9b_pattern%20(1).png        2409w
                  "
                  alt=""
                  src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b60de93e6adbf811e6f9b_pattern%20(1).png"
                  loading="lazy"
                  class="tab-main-img"
                />
              </div>
            </div>
            <div data-w-tab="Tab 5" class="w-tab-pane">
              <div class="w-layout-vflex tab-bg">
                <img
                  sizes="(max-width: 767px) 95vw, (max-width: 1439px) 98vw, 1198px"
                  srcset="
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665c5ec59bc34da8f2ab31f7_graph%20(1)-p-500.png   500w,
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665c5ec59bc34da8f2ab31f7_graph%20(1)-p-800.png   800w,
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665c5ec59bc34da8f2ab31f7_graph%20(1)-p-1080.png 1080w,
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665c5ec59bc34da8f2ab31f7_graph%20(1).png        2409w
                  "
                  alt=""
                  src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665c5ec59bc34da8f2ab31f7_graph%20(1).png"
                  loading="lazy"
                  class="tab-main-img"
                />
              </div>
            </div>
            <div data-w-tab="Tab 6" class="w-tab-pane">
              <div class="w-layout-vflex tab-bg">
                <img
                  sizes="(max-width: 767px) 95vw, (max-width: 1439px) 98vw, 1198px"
                  srcset="
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b60c31ccc4ce76025f86b_share%20(1)-p-500.png   500w,
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b60c31ccc4ce76025f86b_share%20(1)-p-800.png   800w,
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b60c31ccc4ce76025f86b_share%20(1)-p-1080.png 1080w,
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b60c31ccc4ce76025f86b_share%20(1)-p-1600.png 1600w,
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b60c31ccc4ce76025f86b_share%20(1).png        2409w
                  "
                  alt=""
                  src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b60c31ccc4ce76025f86b_share%20(1).png"
                  loading="lazy"
                  class="tab-main-img"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="feature-section new-cursor">
        <div class="title-wrapper-feature-section large">
          <h1 class="h2-ai-work">Let real AI w        rk for you <br /></h1>
          <h1 class="home-h2">
            Only focus on making the right product decisions<br />
          </h1>
          <div class="ai-toggle"><div class="inner-ai-toogle"></div></div>
        </div>
        <div
          data-w-id="11fd0b4d-8686-29a3-eea8-6dd7a877c63d"
          class="ai-animation-section"
        >
          <div
            data-w-id="11fd0b4d-8686-29a3-eea8-6dd7a877c63e"
            class="ai-toggle-anim"
          >
            <div class="ai-auto-title">
              <img
                src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b70bd3589490b7db354fd_Group.svg"
                loading="lazy"
                alt=""
                class="image-59"
              />
              <div class="text-block-76">AI autopilot mode</div>
            </div>
            <div
              data-w-id="11fd0b4d-8686-29a3-eea8-6dd7a877c643"
              class="ai-toggle-wrapper blocked"
            >
              <div class="ai-tag">Create insights</div>
              <div
                data-w-id="11fd0b4d-8686-29a3-eea8-6dd7a877c646"
                class="ai-toggle-off"
              >
                <div
                  data-w-id="11fd0b4d-8686-29a3-eea8-6dd7a877c647"
                  class="inner-ai-toogle-off"
                ></div>
              </div>
              <div class="toggle-hint"></div>
            </div>
            <div
              data-w-id="11fd0b4d-8686-29a3-eea8-6dd7a877c649"
              class="ai-toggle-wrapper hover-button-new"
            >
              <div class="ai-tag">Add Tags</div>
              <div
                data-w-id="11fd0b4d-8686-29a3-eea8-6dd7a877c64c"
                class="toggle-hint"
              ></div>
              <div
                data-w-id="11fd0b4d-8686-29a3-eea8-6dd7a877c64d"
                class="ai-toggle-off"
              >
                <div
                  data-w-id="11fd0b4d-8686-29a3-eea8-6dd7a877c64e"
                  class="inner-ai-toogle-off"
                ></div>
              </div>
            </div>
            <div
              data-w-id="11fd0b4d-8686-29a3-eea8-6dd7a877c64f"
              class="ai-toggle-wrapper hover-button-new"
            >
              <div class="ai-tag">Create patterns</div>
              <div
                data-w-id="11fd0b4d-8686-29a3-eea8-6dd7a877c652"
                class="ai-toggle-off"
              >
                <div
                  data-w-id="11fd0b4d-8686-29a3-eea8-6dd7a877c653"
                  class="inner-ai-toogle-off"
                ></div>
              </div>
            </div>
            <div
              id="ai-enrich"
              data-w-id="11fd0b4d-8686-29a3-eea8-6dd7a877c654"
              class="ai-toggle-wrapper hover-button-new"
            >
              <div class="ai-tag">Enrich patterns</div>
              <div
                data-w-id="11fd0b4d-8686-29a3-eea8-6dd7a877c657"
                class="ai-toggle-off"
              >
                <div
                  data-w-id="11fd0b4d-8686-29a3-eea8-6dd7a877c658"
                  class="inner-ai-toogle-off"
                ></div>
              </div>
            </div>
          </div>
          <div class="ai-anim-grid">
            <div class="ai-anim-col">
              <div
                data-w-id="11fd0b4d-8686-29a3-eea8-6dd7a877c65b"
                class="ai-anim-card-wrapper"
              >
                <img
                  src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b8c825ce9387bf08ae425_redd%20(1).png"
                  loading="lazy"
                  sizes="(max-width: 991px) 100vw, (max-width: 1439px) 27vw, (max-width: 1919px) 22vw, 16vw"
                  srcset="
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b8c825ce9387bf08ae425_redd%20(1)-p-500.png  500w,
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b8c825ce9387bf08ae425_redd%20(1)-p-800.png  800w,
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b8c825ce9387bf08ae425_redd%20(1).png       1166w
                  "
                  alt=""
                  class="hero-insight-image"
                />
                <div class="ai-anim-card">
                  <div class="no-tag light-gray-dots">No tag</div>
                  <div class="ai-anim-tag">App performance</div>
                  <div class="ai-anim-text">
                    It&#x27;s the 3rd time I see this message today. Nothing
                    else is opened aside from Slack.
                  </div>
                  <div class="hero-insight-source-wrapper">
                    <div class="hero-insight-person">
                      <img
                        src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665c98ea318db1e1c69c638e_emilieimg%20(1).png"
                        loading="lazy"
                        alt=""
                        class="hero-insight-pic"
                      />
                      <div class="ai-anim-name">Emillie</div>
                    </div>
                    <div class="ai-anim-date">January 28, 2024</div>
                  </div>
                </div>
              </div>
              <div
                data-w-id="11fd0b4d-8686-29a3-eea8-6dd7a877c66b"
                class="ai-anim-card-wrapper"
              >
                <div class="ai-anim-card">
                  <div class="ai-anim-tag light-gray">Billing</div>
                  <div class="no-tag light-gray-dots">No tag</div>
                  <div class="ai-anim-text">
                    You add to my Figmoon team any member from my organization
                    automatically, which is great. But you put the wrong role.
                    New joiners only need a viewer access, not an editor one.<br /><br />This
                    means I need to manually remove 20 people every month to
                    avoid paying way more than our business needs.
                  </div>
                  <div class="hero-insight-source-wrapper">
                    <div class="hero-insight-person">
                      <img
                        src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665c99ef536e7226834baeaa_olivia%20(1).png"
                        loading="lazy"
                        alt=""
                        class="hero-insight-pic"
                      />
                      <div class="ai-anim-name">Olivia</div>
                    </div>
                    <div class="ai-anim-date">June 2, 2024</div>
                  </div>
                </div>
              </div>
              <div
                data-w-id="11fd0b4d-8686-29a3-eea8-6dd7a877c67d"
                class="ai-anim-card-wrapper"
              >
                <div class="ai-anim-card">
                  <div class="ai-anim-tag blue">Customization</div>
                  <div class="no-tag light-gray-dots">No tag</div>
                  <div class="ai-anim-text">
                    I changed the look of my cursor when you made that option
                    available a few weeks ago. <br /><br />But now that I want
                    to change the style again, I can&#x27;t find that option.
                    I&#x27;ve had similar issues multiple times. I&#x27;d love
                    master search bar.<br />
                  </div>
                  <div class="hero-insight-source-wrapper">
                    <div class="hero-insight-person">
                      <img
                        src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665c99b3b47c417da5331d74_ethanimg%20(1).png"
                        loading="lazy"
                        alt=""
                        class="hero-insight-pic"
                      />
                      <div class="ai-anim-name">Ethan</div>
                    </div>
                    <div class="ai-anim-date">April  7, 2024</div>
                  </div>
                </div>
              </div>
              <div
                data-w-id="11fd0b4d-8686-29a3-eea8-6dd7a877c690"
                class="w-layout-vflex ai-pattern-overall"
              >
                <img
                  src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665c9cd04c6471743c4a800d_pattern%20bg%20(1).png"
                  loading="lazy"
                  sizes="(max-width: 991px) 100vw, 316px"
                  srcset="
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665c9cd04c6471743c4a800d_pattern%20bg%20(1)-p-500.png  500w,
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665c9cd04c6471743c4a800d_pattern%20bg%20(1).png       1164w
                  "
                  alt=""
                  class="image-60"
                />
                <div class="ai-anim-pattern">
                  <div class="ai-anim-card-copy">
                    <div class="ai-anim-tag">App perfomance</div>
                    <div class="no-tag light-gray-dots pattern">No tag</div>
                    <div class="ai-pattern-title">
                      Users are complaining about the overall performance of the
                      app<br />
                    </div>
                    <div class="ai-pattern-text">
                      They are getting messages multiple times per day saying
                      they don’t have any memory left. They feel it’s damaging
                      their productivity.<br />
                    </div>
                    <div class="hero-insight-source-wrapper">
                      <div class="ai-pattern-user-wrapper">
                        <img
                          src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665c996808dceaef3d92fb9a_William%20(1).png"
                          loading="lazy"
                          alt=""
                          class="hero-insight-pic"
                        /><img
                          src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665c98ea318db1e1c69c638e_emilieimg%20(1).png"
                          loading="lazy"
                          alt=""
                          class="ai-pattern-img"
                        />
                        <div class="user-nb">
                          +<span id="ai-user-nb">26</span>
                        </div>
                      </div>
                      <div class="ai-anim-date">
                        <span id="ai-insights-nb">33</span> insights
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="ai-anim-col">
              <div
                data-w-id="11fd0b4d-8686-29a3-eea8-6dd7a877c6ab"
                class="ai-anim-card-wrapper"
              >
                <img
                  src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/657f43ea465ed5c6e79e1ebf_zoom%20(1).png"
                  loading="lazy"
                  sizes="(max-width: 991px) 100vw, (max-width: 1439px) 27vw, (max-width: 1919px) 22vw, 16vw"
                  srcset="
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/657f43ea465ed5c6e79e1ebf_zoom%20(1)-p-500.png 500w,
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/657f43ea465ed5c6e79e1ebf_zoom%20(1).png       901w
                  "
                  alt=""
                  class="hero-insight-image"
                />
                <div class="ai-anim-card">
                  <div class="ai-anim-tag green">File managment</div>
                  <div class="no-tag light-gray-dots">No tag</div>
                  <div class="ai-anim-text">
                    But today, it’s not seamless, I need to open a new tab, and
                    wait for the Figmoon file to load. <br /><br />It would be a
                    game changer just to be able to really embed any file in a
                    Notion page.
                  </div>
                  <div class="hero-insight-source-wrapper">
                    <div class="hero-insight-person">
                      <img
                        src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665c8fc9cda0dad585169697_marcimg%20(1).png"
                        loading="lazy"
                        alt=""
                        class="hero-insight-pic"
                      />
                      <div class="ai-anim-name">Marc</div>
                    </div>
                    <div class="ai-anim-date">December 1, 2023</div>
                  </div>
                </div>
              </div>
              <div
                data-w-id="11fd0b4d-8686-29a3-eea8-6dd7a877c6be"
                class="ai-anim-card-wrapper"
              >
                <img
                  src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b8c769158da5de3d3c924_yelloww%20(1).png"
                  loading="lazy"
                  sizes="(max-width: 991px) 100vw, (max-width: 1439px) 27vw, (max-width: 1919px) 22vw, 16vw"
                  srcset="
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b8c769158da5de3d3c924_yelloww%20(1)-p-500.png  500w,
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b8c769158da5de3d3c924_yelloww%20(1)-p-800.png  800w,
                    https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b8c769158da5de3d3c924_yelloww%20(1).png       1166w
                  "
                  alt=""
                  class="hero-insight-image"
                />
                <div class="ai-anim-card">
                  <div class="ai-anim-tag">App performance</div>
                  <div class="no-tag light-gray-dots">No tag</div>
                  <div class="ai-anim-text">
                    I don’t understand why I can’t put my auto-layout frame as
                    fixed in the prototype, it’s <br /><br />I don’t understand
                    why I can’t put my auto-layout frame as fixed in the
                    prototype, it’s
                  </div>
                  <div class="hero-insight-source-wrapper">
                    <div class="hero-insight-person">
                      <img
                        src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665c996808dceaef3d92fb9a_William%20(1).png"
                        loading="lazy"
                        alt=""
                        class="hero-insight-pic"
                      />
                      <div class="ai-anim-name">William</div>
                    </div>
                    <div class="ai-anim-date">March 9, 2024</div>
                  </div>
                </div>
              </div>
              <div
                data-w-id="11fd0b4d-8686-29a3-eea8-6dd7a877c6d1"
                class="ai-anim-card-wrapper"
              >
                <div class="ai-anim-card">
                  <div class="ai-anim-tag purple">Web version</div>
                  <div class="no-tag light-gray-dots">No tag</div>
                  <div class="ai-anim-text">
                    I&#x27;d love an easy way to switch a file from the web
                    version to the desktop version. The option is in too many
                    menus.<br /><br />I turned on the option to automatically
                    open all files on the desktop version. <br />But now I
                    don&#x27;t know how to remove this option. In most cases, I
                    just need just a sneak peek of the file and don&#x27;t need
                    it opened in the app.
                  </div>
                  <div class="hero-insight-source-wrapper">
                    <div class="hero-insight-person">
                      <img
                        src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665c9a41302aee297a479db8_sophia%20(1).png"
                        loading="lazy"
                        alt=""
                        class="hero-insight-pic"
                      />
                      <div class="ai-anim-name">Sophia</div>
                    </div>
                    <div class="ai-anim-date">April 19, 2024</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="feature-section">
        <div class="title-wrapper-feature-section medium">
          <h1 class="home-h2">Go from question to action in only 20 seconds</h1>
        </div>
        <div class="new-checklist-wrapper">
          <div class="new-checklist">
            <img
              src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b5d050c98a3612d2ce9fb_check.svg"
              loading="lazy"
              alt=""
            />
            <div class="text-block-74">Prove your point to a stakeholder</div>
          </div>
          <div class="new-checklist">
            <img
              src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b5d050c98a3612d2ce9fb_check.svg"
              loading="lazy"
              alt=""
            />
            <div class="text-block-74">Validate a hypothesis</div>
          </div>
          <div class="new-checklist">
            <img
              src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b5d050c98a3612d2ce9fb_check.svg"
              loading="lazy"
              alt=""
            />
            <div class="text-block-74">Find topics you need to research</div>
          </div>
        </div>
        <div class="ai-chat-bg">
          <img
            src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665c94ef47c8533b93af9a99_AI%20chat%20popup%20(2).png"
            loading="lazy"
            sizes="(max-width: 767px) 95vw, (max-width: 1439px) 98vw, 1198px"
            srcset="
              https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665c94ef47c8533b93af9a99_AI%20chat%20popup%20(2)-p-500.png   500w,
              https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665c94ef47c8533b93af9a99_AI%20chat%20popup%20(2)-p-800.png   800w,
              https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665c94ef47c8533b93af9a99_AI%20chat%20popup%20(2)-p-1080.png 1080w,
              https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665c94ef47c8533b93af9a99_AI%20chat%20popup%20(2).png        2046w
            "
            alt=""
            class="ai-chat-img"
          />
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="container">
        <div class="div-block-56">
          <div class="huge-yellow-cta-wrapper">
            <a
              data-w-id="53678440-9976-8967-2914-b7fb1ae1b11e"
              href="{{  route("login") }}"
              class="yellow-cta-huge w-inline-block"
              ><div class="home-cta-text-huge">Get started</div>
              <img
                src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/654aa5379216bde4e6c4ea1c_arrow.svg"
                loading="lazy"
                alt=""
                class="image-20"
            /></a>
            <div class="new-checklist-wrapper">
              <div class="new-checklist">
                <img
                  src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b5d050c98a3612d2ce9fb_check.svg"
                  loading="lazy"
                  alt=""
                />
                <div class="text-block-74">No card required</div>
              </div>
              <div class="new-checklist">
                <img
                  src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b5d050c98a3612d2ce9fb_check.svg"
                  loading="lazy"
                  alt=""
                />
                <div class="text-block-74">14-day free trial</div>
              </div>
              <div class="new-checklist">
                <img
                  src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b5d050c98a3612d2ce9fb_check.svg"
                  loading="lazy"
                  alt=""
                />
                <div class="text-block-74">Unlimited seats</div>
              </div>
            </div>
          </div>
          <div class="div-block-7">
            <div class="div-block-78">
              <div class="div-block-77">
                <a
                  href="/"
                  class="footer-home-link hover-button w-inline-block"
                  ><img
                    src="/assets/logo.png"
                    loading="lazy"
                    alt="SoundLine!&#x27;s logo"
                    class="image-30" /></a
                ><a href="{{  route("login") }}" class="yellow-cta w-inline-block"><div class="_16-bold">Get started for free</div><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/654aa5379216bde4e6c4ea1c_arrow.svg" loading="lazy" alt=""/></a><a href="#" class="product-hunt-badge hover-button w-inline-block"><img src="{{ asset('assets/product.png')}}"></a>
              </div>
              <div class="div-block-69">
                <div class="footer-container">
                  <div class="footer-link-title">Resources</div>
                  <a
                    href="product-discovery-bible/start-here/introduction"
                    target="_blank"
                    class="navigation-link-footer w-inline-block"
                    ><img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/654fbadddd598ef6fc073746_Vector.svg"
                      loading="lazy"
                      alt=""
                      class="navigation-icon"
                    />
                    <div class="navigation-link-text">
                      Product Discovery Bible
                    </div></a
                  ><a
                    href="https://www.listenup.ai/manifesto"
                    target="_blank"
                    class="navigation-link-footer hide w-inline-block"
                    ><img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/654fbadd3557b10a7009fabb_Group.svg"
                      loading="lazy"
                      alt=""
                      class="navigation-icon"
                    />
                    <div class="navigation-link-text">Manifesto</div></a
                  ><a
                    href="https://www.listenup.ai/manifesto"
                    target="_blank"
                    class="navigation-link-footer hide w-inline-block"
                    ><img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/6563b2b0551ecb8d664be517_blog%20icon.svg"
                      loading="lazy"
                      alt=""
                      class="navigation-icon"
                    />
                    <div class="navigation-link-text">Blog</div></a
                  >
                </div>
                <div class="footer-container">
                  <div class="footer-link-title">Product</div>
                  <a
                    href="pricing"
                    class="navigation-link-footer w-inline-block"
                    ><img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/654fbaddf6654b94902055ad_Frame%2035236.svg"
                      loading="lazy"
                      alt=""
                      class="navigation-icon"
                    />
                    <div class="navigation-link-text">Pricing</div></a
                  ><a
                    href="product/integrations"
                    class="navigation-link-footer w-inline-block"
                    ><img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/6631f481c84041962ba1081a_integration.svg"
                      loading="lazy"
                      alt=""
                      class="navigation-icon"
                    />
                    <div class="navigation-link-text">Integrations</div></a
                  ><a
                    href="https://www.listenup.ai/product/ai-features"
                    class="navigation-link-footer hide w-inline-block"
                    ><img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/66323213ce51b39cdb6fb114_Magic%20Wand%2C%20Photo%2C%20Edit.svg"
                      loading="lazy"
                      alt=""
                      class="navigation-icon"
                    />
                    <div class="navigation-link-text">AI features</div></a
                  ><a
                    href="product/meeting-recorder"
                    class="navigation-link-footer w-inline-block"
                    ><img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/6623fb160210e3a584352145_record%20black.svg"
                      loading="lazy"
                      alt=""
                      class="navigation-icon"
                    />
                    <div class="navigation-link-text">Open Source</div></a
                  ><a
                    href="#"
                    target="_blank"
                    class="navigation-link-footer hide w-inline-block"
                    ><img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/6563b2ee4503332060ed2652_login.svg"
                      loading="lazy"
                      alt=""
                      class="navigation-icon"
                    />
                    <div class="navigation-link-text">Login</div></a
                  >
                  <div class="footer-link-title">Use cases</div>
                  <a
                    href="use-cases/user-interviews"
                    target="_blank"
                    class="navigation-link-footer w-inline-block"
                    ><img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/6623fe9b69cfaf072661b24c_users.svg"
                      loading="lazy"
                      alt=""
                      class="navigation-icon"
                    />
                    <div class="navigation-link-text">User interviews</div></a
                  >
                </div>
                <div class="footer-container">
                  <div class="footer-link-title">Company</div>
                  <a
                    href="https://www.linkedin.com/company/listenup-ai/about/"
                    target="_blank"
                    class="navigation-link w-inline-block"
                    ><img
                      src="/assets/twitter.png"
                      loading="lazy"
                      alt=""
                      class="navigation-icon"
                    />
                    <div class="navigation-link-text">Twitter</div></a
                  ><a
                    href="/privacy-policy"
                    target="_blank"
                    class="navigation-link-footer w-inline-block"
                    ><img
                      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/662502eaaa3a7203a35e1ab4_Vector.svg"
                      loading="lazy"
                      alt=""
                      class="navigation-icon"
                    />
                    <div class="navigation-link-text">Privacy Policy</div></a
                  ><a href="/terms" target="_blank" class="navigation-link-footer w-inline-block"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/66250379c598beee7b5ef6ac_Vector.svg" loading="lazy" alt="" class="navigation-icon"/><div class="navigation-link-text">Terms</div></a><a href="https://github.com/soundlinedev" target="_blank" class="navigation-link-footer w-inline-block"><img src="/assets/github.svg" loading="lazy" alt="" class="navigation-icon"> <div class="navigation-link-text">Github</div> </a>
                </div>
              </div>
            </div>
            <div class="div-block-53">
              <div class="div-block-55">
                <img
                  src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/6550c3c726c56cfcfb18ab71_c.svg"
                  loading="lazy"
                  alt=""
                  class="image-16"
                />
                <div class="footer-text">2024  - All rights reserved</div>
              </div>
              <div class="made-by-product-lovers">
                <img
                  src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/6631ef01ab4c6d990ba11f4d_Path.svg"
                  loading="lazy"
                  alt=""
                  class="image-16"
                />
                <div class="footer-text">Made by Product Lovers</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=635584277e62506ebe08fb74"
      type="text/javascript"
    ></script>
    <script
      src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/js/webflow.4d07f6c0f.js"
      type="text/javascript"
    ></script>
    <!-- Intercom -->
    
  </body>
</html>

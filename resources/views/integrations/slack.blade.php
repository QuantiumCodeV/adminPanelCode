<!DOCTYPE html><!-- Last Published: Tue Jul 23 2024 12:43:14 GMT+0000 (Coordinated Universal Time) --><html data-wf-domain="www.listenup.ai" data-wf-page="65c8e40f540efb0e282b6f24" data-wf-site="635584277e62506ebe08fb74" data-wf-collection="65c8e40f540efb0e282b6f06" data-wf-item-slug="slack"><head>
  @include('fonts')<link
      href="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/63558f9ff9e1cc03ead6aea4_32.png"
      rel="shortcut icon"
      type="image/x-icon"
    />
    <link
      href="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/63558f5e63bfed5fc2509a07_256.png"
      rel="apple-touch-icon"
    /><meta charset="utf-8"/><title>Automatically send feedback from Slack to SoundLine!</title><meta content="Connect Slack to SoundLine! to centralize your user feedback all in one place. Extract insights from feedback and use real AI to make the best product decisions" name="description"/><meta content="Automatically send feedback from Slack to SoundLine!" property="og:title"/><meta content="Connect Slack to SoundLine! to centralize your user feedback all in one place. Extract insights from feedback and use real AI to make the best product decisions" property="og:description"/><meta content="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/66375732a6239b6ba15db3bf_slack%20graph%20(1).png" property="og:image"/><meta content="Automatically send feedback from Slack to SoundLine!" property="twitter:title"/><meta content="Connect Slack to SoundLine! to centralize your user feedback all in one place. Extract insights from feedback and use real AI to make the best product decisions" property="twitter:description"/><meta content="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/66375732a6239b6ba15db3bf_slack%20graph%20(1).png" property="twitter:image"/><meta property="og:type" content="website"/><meta content="summary_large_image" name="twitter:card"/><meta content="width=device-width, initial-scale=1" name="viewport"/><link href="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/css/listenup-ai.webflow.c0461d557.min.css" rel="stylesheet" type="text/css"/><link href="https://fonts.googleapis.com" rel="preconnect"/><link href="https://fonts.gstatic.com" rel="preconnect"/><script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script><script type="text/javascript">WebFont.load({  google: {    families: ["Varela Round:400","Plus Jakarta Sans:200,300,regular,500,600,700,800,200italic,300italic,italic,500italic,600italic,700italic,800italic","Just Another Hand:regular"]  }});</script><script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script><link href="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/63558f9ff9e1cc03ead6aea4_32.png" rel="shortcut icon" type="image/x-icon"/><link href="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/63558f5e63bfed5fc2509a07_256.png" rel="apple-touch-icon"/>


<!-- Plausible Analytics -->
<script defer data-domain="listenup.ai" src="https://plausible.io/js/script.tagged-events.outbound-links.js"></script>
<script>
    var toTag = [
        {
            elementId: 'copy-to-figma',
            classes: 'plausible-event-name=Copy+To+Figma'
        }
    ]

    document.addEventListener('DOMContentLoaded', function (_e) {
        toTag.forEach(function (tagObject) {
            var element = document.getElementById(tagObject.elementId)
            tagObject.classes.split(' ').forEach(function (className) {
                if (element) { element.classList.add(className) }
            })
        })
    })
</script>

<!-- Intercom -->
<style>.intercom-lightweight-app {
  z-index: 900!important;
}
</style>  



<!-- Surlignage -->
<style>::selection {color: #FBD570; background: #FBD570;} </style>

<!-- Custom slider -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/></head><body class="body-grey"><div class="w-embed"><style>:root{
  	--beige: #ECEAE5;
    --black: #0E0E0E;
  }
  
  ::selection{
  	background: var(--black);
    color: var(--beige);
  }

	a{
  	text-decoration: none;
    color: inherit;
  }
  
  body {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
 		font-size: 1.1111111111111112vw;
  }

  /* Max Font Size */
  @media screen and (min-width:1920px) {
   body {font-size: 1.3333333333333333rem;}
  }
  
  

</style></div><div class="mouse"><div class="w-embed"><style>.mouse { 
        pointer-events: none; 
    }
    .navigation-link, .brand, .draggable, .open-button-inspiration, .checkbox-field, .hover-button, .hyperlink-text, .tab-button, .navigation-link-footer, .yellow-cta, .yellow-cta-huge, .design-inspiration-card, .faq-wrapper, .faq-triger, .link_course-page, .bible-table-content-block, .nav-course, .bible-introduction-block, .h5, .course-item, .content-table-wrappper, .bible-page-wrapper {
        cursor: url('https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65510ce62606af8e051c5409_Cursor%20-%20Click.svg'), none;
    }
    .hover-button-new, .new-cursor:hover {
        cursor: url('https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b7a39cb80dfbb5a3f432e_big%20cursor.svg'), none;
    }
    body, html {
        cursor:  url('https://cdn.prod.website-files.com/635584277e62506ebe08fb74/663b78e7c4ecae0f503d9260_cursor%202.svg'), none;
    }
</style></div></div><div class="navigation"><div data-animation="default" data-collapse="medium" data-duration="500" data-easing="ease-in-out-back" data-easing2="ease-in-out-back" role="banner" class="navbar-2 w-nav"><div class="container-2 w-container"><a href="/" class="brand w-nav-brand"><img src="/assets/logo.png" loading="lazy" width="329.5" alt="SoundLine!&#x27;s logo" class="image-18"/></a><nav role="navigation" class="nav-menu-2 w-nav-menu"><div class="div-block-150"><div data-hover="false" data-delay="0" class="dropdown-5 w-dropdown"><div class="navigation-dropdown hover-button w-dropdown-toggle"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/663233ba7bae5c927fad18b7_Vector.svg" loading="lazy" alt="" class="navigation-icon"/><div class="navigation-link-text">Product</div><div class="icon w-icon-dropdown-toggle"></div></div><nav class="navigation-dropdown-list-usecases w-dropdown-list"><a href="../product/integrations" class="ressouce-card hover-button w-inline-block"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/6632342b85720c6cd3407c2e_integrations%20(1).png" loading="lazy" sizes="100vw" srcset="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/6632342b85720c6cd3407c2e_integrations%20(1)-p-500.png 500w, https://cdn.prod.website-files.com/635584277e62506ebe08fb74/6632342b85720c6cd3407c2e_integrations%20(1).png 838w" alt="" class="image-57"/><div class="div-block-148"><div class="div-block-149"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/6631f481c84041962ba1081a_integration.svg" loading="lazy" alt="" class="navigation-icon"/><div class="navigation-link-text">Integrations</div></div><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/654aa5379216bde4e6c4ea1c_arrow.svg" loading="lazy" alt=""/></div></a><a href="https://www.listenup.ai/product/ai-features" class="ressouce-card hide w-inline-block"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/6623fe4fd21ff54f50fa8e59_recorder%20(2).png" loading="lazy" sizes="100vw" srcset="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/6623fe4fd21ff54f50fa8e59_recorder%20(2)-p-500.png 500w, https://cdn.prod.website-files.com/635584277e62506ebe08fb74/6623fe4fd21ff54f50fa8e59_recorder%20(2).png 838w" alt="" class="image-57"/><div class="div-block-148"><div class="div-block-149"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/66323213ce51b39cdb6fb114_Magic%20Wand%2C%20Photo%2C%20Edit.svg" loading="lazy" alt="" class="navigation-icon"/><div class="navigation-link-text">AI features</div></div><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/654aa5379216bde4e6c4ea1c_arrow.svg" loading="lazy" alt=""/></div></a><a href="../product/meeting-recorder" class="ressouce-card hover-button w-inline-block"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/6623fe4fd21ff54f50fa8e59_recorder%20(2).png" loading="lazy" sizes="100vw" srcset="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/6623fe4fd21ff54f50fa8e59_recorder%20(2)-p-500.png 500w, https://cdn.prod.website-files.com/635584277e62506ebe08fb74/6623fe4fd21ff54f50fa8e59_recorder%20(2).png 838w" alt="" class="image-57"/><div class="div-block-148"><div class="div-block-149"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/6623fb160210e3a584352145_record%20black.svg" loading="lazy" alt="" class="navigation-icon"/><div class="navigation-link-text">Record user interviews</div></div><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/654aa5379216bde4e6c4ea1c_arrow.svg" loading="lazy" alt=""/></div></a></nav></div><div data-hover="false" data-delay="0" class="dropdown-5 w-dropdown"><div class="navigation-dropdown hover-button w-dropdown-toggle"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/6623faeb247fd19740cc74b2_workflow.svg" loading="lazy" alt="" class="navigation-icon"/><div class="navigation-link-text">Use cases</div><div class="icon w-icon-dropdown-toggle"></div></div><nav class="navigation-dropdown-list-usecases w-dropdown-list"><a href="../use-cases/user-interviews" class="ressouce-card hover-button w-inline-block"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/66324378855129dd79b5a995_flow%20(1).png" loading="lazy" sizes="100vw" srcset="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/66324378855129dd79b5a995_flow%20(1)-p-500.png 500w, https://cdn.prod.website-files.com/635584277e62506ebe08fb74/66324378855129dd79b5a995_flow%20(1).png 838w" alt="" class="image-57"/><div class="div-block-148"><div class="div-block-149"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/6623fe9b69cfaf072661b24c_users.svg" loading="lazy" alt="" class="navigation-icon"/><div class="navigation-link-text">The best user interview flow</div></div><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/654aa5379216bde4e6c4ea1c_arrow.svg" loading="lazy" alt=""/></div></a></nav></div><a href="../pricing" class="navigation-link w-inline-block"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/654fbaddf6654b94902055ad_Frame%2035236.svg" loading="lazy" alt="" class="navigation-icon"/><div class="navigation-link-text">Pricing</div></a><div data-hover="false" data-delay="0" class="dropdown-6 w-dropdown"><div class="navigation-dropdown hover-button w-dropdown-toggle"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/6623ff3a50414800d0927010_Vector.svg" loading="lazy" alt="" class="navigation-icon"/><div class="navigation-link-text">Ressources</div><div class="icon w-icon-dropdown-toggle"></div></div><nav class="navigation-dropdown-list w-dropdown-list"><a href="../product-discovery-bible/start-here/introduction" target="_blank" class="ressouce-card hover-button w-inline-block"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/6623f50c731baa0f615eab04_product%20bible%20(1).png" loading="lazy" sizes="100vw" srcset="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/6623f50c731baa0f615eab04_product%20bible%20(1)-p-500.png 500w, https://cdn.prod.website-files.com/635584277e62506ebe08fb74/6623f50c731baa0f615eab04_product%20bible%20(1).png 838w" alt="" class="image-57"/><div class="div-block-148"><div class="div-block-149"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/654fbadddd598ef6fc073746_Vector.svg" loading="lazy" alt="" class="navigation-icon"/><div class="navigation-link-text">Product Discovery Bible</div></div><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/654aa5379216bde4e6c4ea1c_arrow.svg" loading="lazy" alt=""/></div></a></nav></div></div><div class="div-block-151"><a href="#" class="navigation-link w-inline-block"><div class="navigation-link-text">Log in</div></a><a href="{{  route("login") }}" class="yellow-cta w-inline-block"><div class="_16-bold">Get started</div><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/654aa5379216bde4e6c4ea1c_arrow.svg" loading="lazy" alt=""/></a></div></nav><div class="menu-button w-nav-button"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/66254ed51b3394c91fd9a4a5_menu.svg" loading="lazy" alt=""/></div></div></div></div><div class="container"><div class="integration-page-wrapper"><div class="button-row"><a href="../product/integrations" class="design-inspiration-nav hover-button w-inline-block"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/654aa5379216bde4e6c4ea1c_arrow.svg" loading="lazy" alt="" class="navigation-arrow-left"/><div class="design-inspiration-nav-text">All integrations</div></a><div class="company-tag-transparent"><img alt="" loading="lazy" src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/66379c57e6f2ba46faa38f2b_salck.svg" class="integration-page-logo"/><div class="integration-company-name">Slack</div></div><a href="#" target="_blank" class="yellow-cta w-inline-block"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65c8f1fbb3fbb4c9549bda56_small%20connect.svg" loading="lazy" alt=""/><div class="_16-bold">Connect</div><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/6575d2ca2d9f36bdb97b5769_arrow.svg" loading="lazy" alt=""/></a></div><div class="div-block-136"><div class="swiper is-team w-dyn-list"><script type="text/x-wf-template" id="wf-template-a9b66908-b5d6-9bc8-49ea-9418b3c65172">%3Cdiv%20role%3D%22listitem%22%20class%3D%22swiper-slide%20is-team%20w-dyn-item%20w-dyn-repeater-item%22%3E%3Cdiv%20class%3D%22team-img__wrapper%22%3E%3Cimg%20alt%3D%22%22%20loading%3D%22lazy%22%20src%3D%22https%3A%2F%2Fcdn.prod.website-files.com%2F6362cb4ffa8f691ef27060eb%2F65c8f70de49955197d26e317_Screen%25201%2520(1).png%22%20sizes%3D%22(max-width%3A%20479px)%2095vw%2C%20(max-width%3A%20767px)%2094vw%2C%20(max-width%3A%201439px)%2097vw%2C%201094px%22%20srcset%3D%22https%3A%2F%2Fcdn.prod.website-files.com%2F6362cb4ffa8f691ef27060eb%2F65c8f70de49955197d26e317_Screen%25201%2520(1)-p-500.png%20500w%2C%20https%3A%2F%2Fcdn.prod.website-files.com%2F6362cb4ffa8f691ef27060eb%2F65c8f70de49955197d26e317_Screen%25201%2520(1)-p-800.png%20800w%2C%20https%3A%2F%2Fcdn.prod.website-files.com%2F6362cb4ffa8f691ef27060eb%2F65c8f70de49955197d26e317_Screen%25201%2520(1)-p-1080.png%201080w%2C%20https%3A%2F%2Fcdn.prod.website-files.com%2F6362cb4ffa8f691ef27060eb%2F65c8f70de49955197d26e317_Screen%25201%2520(1).png%202560w%22%20class%3D%22team-img%22%2F%3E%3C%2Fdiv%3E%3C%2Fdiv%3E</script><div role="list" class="swiper-wrapper is-team w-dyn-items"><div role="listitem" class="swiper-slide is-team w-dyn-item w-dyn-repeater-item"><div class="team-img__wrapper"><img alt="" loading="lazy" src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70de49955197d26e317_Screen%201%20(1).png" sizes="(max-width: 479px) 95vw, (max-width: 767px) 94vw, (max-width: 1439px) 97vw, 1094px" srcset="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70de49955197d26e317_Screen%201%20(1)-p-500.png 500w, https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70de49955197d26e317_Screen%201%20(1)-p-800.png 800w, https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70de49955197d26e317_Screen%201%20(1)-p-1080.png 1080w, https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70de49955197d26e317_Screen%201%20(1).png 2560w" class="team-img"/></div></div><div role="listitem" class="swiper-slide is-team w-dyn-item w-dyn-repeater-item"><div class="team-img__wrapper"><img alt="" loading="lazy" src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70d0b7b07d9ce8b64ab_Screen%202%20(1).png" sizes="(max-width: 479px) 95vw, (max-width: 767px) 94vw, (max-width: 1439px) 97vw, 1094px" srcset="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70d0b7b07d9ce8b64ab_Screen%202%20(1)-p-500.png 500w, https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70d0b7b07d9ce8b64ab_Screen%202%20(1)-p-800.png 800w, https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70d0b7b07d9ce8b64ab_Screen%202%20(1)-p-1080.png 1080w, https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70d0b7b07d9ce8b64ab_Screen%202%20(1)-p-1600.png 1600w, https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70d0b7b07d9ce8b64ab_Screen%202%20(1).png 2560w" class="team-img"/></div></div><div role="listitem" class="swiper-slide is-team w-dyn-item w-dyn-repeater-item"><div class="team-img__wrapper"><img alt="" loading="lazy" src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70dd72b2a836434b42c_Screen%203%20(1).png" sizes="(max-width: 479px) 95vw, (max-width: 767px) 94vw, (max-width: 1439px) 97vw, 1094px" srcset="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70dd72b2a836434b42c_Screen%203%20(1)-p-500.png 500w, https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70dd72b2a836434b42c_Screen%203%20(1)-p-800.png 800w, https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70dd72b2a836434b42c_Screen%203%20(1)-p-1080.png 1080w, https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70dd72b2a836434b42c_Screen%203%20(1).png 2560w" class="team-img"/></div></div><div role="listitem" class="swiper-slide is-team w-dyn-item w-dyn-repeater-item"><div class="team-img__wrapper"><img alt="" loading="lazy" src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70d5818ec9a44ed8ac3_Screen%204%20(1).png" sizes="(max-width: 479px) 95vw, (max-width: 767px) 94vw, (max-width: 1439px) 97vw, 1094px" srcset="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70d5818ec9a44ed8ac3_Screen%204%20(1)-p-500.png 500w, https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70d5818ec9a44ed8ac3_Screen%204%20(1)-p-800.png 800w, https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70d5818ec9a44ed8ac3_Screen%204%20(1)-p-1080.png 1080w, https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70d5818ec9a44ed8ac3_Screen%204%20(1).png 2560w" class="team-img"/></div></div><div role="listitem" class="swiper-slide is-team w-dyn-item w-dyn-repeater-item"><div class="team-img__wrapper"><img alt="" loading="lazy" src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70d0d888384ad7a1ed6_Screen%205%20(1).png" sizes="(max-width: 479px) 95vw, (max-width: 767px) 94vw, (max-width: 1439px) 97vw, 1094px" srcset="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70d0d888384ad7a1ed6_Screen%205%20(1)-p-500.png 500w, https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70d0d888384ad7a1ed6_Screen%205%20(1)-p-800.png 800w, https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70d0d888384ad7a1ed6_Screen%205%20(1)-p-1080.png 1080w, https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70d0d888384ad7a1ed6_Screen%205%20(1)-p-1600.png 1600w, https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70d0d888384ad7a1ed6_Screen%205%20(1).png 2560w" class="team-img"/></div></div><div role="listitem" class="swiper-slide is-team w-dyn-item w-dyn-repeater-item"><div class="team-img__wrapper"><img alt="" loading="lazy" src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70d5c1f5d9eff38e9f3_Screen%206%20(1).png" sizes="(max-width: 479px) 95vw, (max-width: 767px) 94vw, (max-width: 1439px) 97vw, 1094px" srcset="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70d5c1f5d9eff38e9f3_Screen%206%20(1)-p-500.png 500w, https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70d5c1f5d9eff38e9f3_Screen%206%20(1)-p-800.png 800w, https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70d5c1f5d9eff38e9f3_Screen%206%20(1)-p-1080.png 1080w, https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70d5c1f5d9eff38e9f3_Screen%206%20(1).png 2560w" class="team-img"/></div></div><div role="listitem" class="swiper-slide is-team w-dyn-item w-dyn-repeater-item"><div class="team-img__wrapper"><img alt="" loading="lazy" src="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70d52c798105c3fb726_Screen%207%20(1).png" sizes="(max-width: 479px) 95vw, (max-width: 767px) 94vw, (max-width: 1439px) 97vw, 1094px" srcset="https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70d52c798105c3fb726_Screen%207%20(1)-p-500.png 500w, https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70d52c798105c3fb726_Screen%207%20(1)-p-800.png 800w, https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70d52c798105c3fb726_Screen%207%20(1)-p-1080.png 1080w, https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70d52c798105c3fb726_Screen%207%20(1)-p-1600.png 1600w, https://cdn.prod.website-files.com/6362cb4ffa8f691ef27060eb/65c8f70d52c798105c3fb726_Screen%207%20(1).png 2560w" class="team-img"/></div></div></div><div class="w-dyn-hide w-dyn-empty"><div>No items found.</div></div></div><div class="swiper-button__wrap"><a aria-label="previous slide" href="#" class="swiper-button swiper-btn-prev hover-button w-inline-block"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/654aa5379216bde4e6c4ea1c_arrow.svg" loading="lazy" alt="" class="left-arrow"/></a><a aria-label="next slide" href="#" class="swiper-button swiper-btn-next hover-button w-inline-block"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/654aa5379216bde4e6c4ea1c_arrow.svg" loading="lazy" alt=""/></a></div></div></div><div class="integration-content"><div class="rich-text-block-3 w-richtext"><h1>Overview</h1><p>User feedback comes from everywhere, and very often from inside of the company. The Support and Sales teams often have the most feedback about your product. In some cases, you also use your product to solve your own pains. This means that Slack is a gold mine to understand how people use your product and areas of improvements.</p><p>Use the SoundLine! Slack integration to push feedback from Slack to SoundLine! and centralize all your feedback.</p><p>‍</p><h1>How it works</h1><p>1. Add the SoundLine! app to your Slack workspace</p><p>2. Chose the Slack channel(s) you want SoundLine! to take feedback from. New messages in this channel will be added to SoundLine! (text messages, threads, videos or even files will be added). </p><p>3. SoundLine! will automatically add an emoji to messages added successfully to SoundLine!</p><p>‍</p><p>You can also send feedback manually to SoundLine! by pressing on the 3 dots menu of a specific Slack message.<br/>You will soon be able to receive your SoundLine! notifications directly on Slack to be more reactive.</p><p>‍</p><p>Enjoy ✌️</p></div></div><div class="div-block-138"><a href="https://slack.com/" target="_blank" class="integration-company-signup hover-button w-inline-block"><div class="div-block-137"><div class="text-block-54">No</div><div class="text-block-54">Slack</div><div class="text-block-54">account yet? Sign up</div></div><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/6575d2ca2d9f36bdb97b5769_arrow.svg" loading="lazy" alt=""/></a></div><div class="section-wrapper"><div class="div-block-128"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65c8f08dc9ba44892423f308_integration%20feedback%20(3).png" loading="lazy" sizes="(max-width: 479px) 96vw, (max-width: 767px) 95vw, (max-width: 1439px) 98vw, 1199.9921875px" srcset="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65c8f08dc9ba44892423f308_integration%20feedback%20(3)-p-500.png 500w, https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65c8f08dc9ba44892423f308_integration%20feedback%20(3)-p-800.png 800w, https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65c8f08dc9ba44892423f308_integration%20feedback%20(3)-p-1080.png 1080w, https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65c8f08dc9ba44892423f308_integration%20feedback%20(3)-p-1600.png 1600w, https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65c8f08dc9ba44892423f308_integration%20feedback%20(3)-p-2000.png 2000w, https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65c8f08dc9ba44892423f308_integration%20feedback%20(3)-p-2600.png 2600w, https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65c8f08dc9ba44892423f308_integration%20feedback%20(3)-p-3200.png 3200w, https://cdn.prod.website-files.com/635584277e62506ebe08fb74/65c8f08dc9ba44892423f308_integration%20feedback%20(3).png 6284w" alt="" class="image-52"/></div></div><div class="footer"><div class="container"><div class="div-block-56"><div class="huge-yellow-cta-wrapper"><a data-w-id="53678440-9976-8967-2914-b7fb1ae1b11e" href="{{  route("login") }}" class="yellow-cta-huge w-inline-block"><div class="home-cta-text-huge">Get started</div><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/654aa5379216bde4e6c4ea1c_arrow.svg" loading="lazy" alt="" class="image-20"/></a><div class="new-checklist-wrapper"><div class="new-checklist"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b5d050c98a3612d2ce9fb_check.svg" loading="lazy" alt=""/><div class="text-block-74">No card required</div></div><div class="new-checklist"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b5d050c98a3612d2ce9fb_check.svg" loading="lazy" alt=""/><div class="text-block-74">14-day free trial</div></div><div class="new-checklist"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/665b5d050c98a3612d2ce9fb_check.svg" loading="lazy" alt=""/><div class="text-block-74">Unlimited seats</div></div></div></div><div class="div-block-7"><div class="div-block-78"><div class="div-block-77"><a href="/" class="footer-home-link hover-button w-inline-block"><img src="/assets/logo.png" loading="lazy" alt="SoundLine!&#x27;s logo" class="image-30"/></a><a href="{{  route("login") }}" class="yellow-cta w-inline-block"><div class="_16-bold">Get started for free</div><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/654aa5379216bde4e6c4ea1c_arrow.svg" loading="lazy" alt=""/></a></div><div class="div-block-69"><div class="footer-container"><div class="footer-link-title">Ressources</div><a href="../product-discovery-bible/start-here/introduction" target="_blank" class="navigation-link-footer w-inline-block"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/654fbadddd598ef6fc073746_Vector.svg" loading="lazy" alt="" class="navigation-icon"/><div class="navigation-link-text">Product Discovery Bible</div></a><a href="https://www.listenup.ai/manifesto" target="_blank" class="navigation-link-footer hide w-inline-block"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/654fbadd3557b10a7009fabb_Group.svg" loading="lazy" alt="" class="navigation-icon"/><div class="navigation-link-text">Manifesto</div></a><a href="https://www.listenup.ai/manifesto" target="_blank" class="navigation-link-footer hide w-inline-block"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/6563b2b0551ecb8d664be517_blog%20icon.svg" loading="lazy" alt="" class="navigation-icon"/><div class="navigation-link-text">Blog</div></a></div><div class="footer-container"><div class="footer-link-title">Product</div><a href="../pricing" class="navigation-link-footer w-inline-block"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/654fbaddf6654b94902055ad_Frame%2035236.svg" loading="lazy" alt="" class="navigation-icon"/><div class="navigation-link-text">Pricing</div></a><a href="../product/integrations" class="navigation-link-footer w-inline-block"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/6631f481c84041962ba1081a_integration.svg" loading="lazy" alt="" class="navigation-icon"/><div class="navigation-link-text">Integrations</div></a><a href="https://www.listenup.ai/product/ai-features" class="navigation-link-footer hide w-inline-block"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/66323213ce51b39cdb6fb114_Magic%20Wand%2C%20Photo%2C%20Edit.svg" loading="lazy" alt="" class="navigation-icon"/><div class="navigation-link-text">AI features</div></a><a href="../product/meeting-recorder" class="navigation-link-footer w-inline-block"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/6623fb160210e3a584352145_record%20black.svg" loading="lazy" alt="" class="navigation-icon"/><div class="navigation-link-text">Meeting recorder</div></a><a href="#" target="_blank" class="navigation-link-footer hide w-inline-block"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/6563b2ee4503332060ed2652_login.svg" loading="lazy" alt="" class="navigation-icon"/><div class="navigation-link-text">Login</div></a><div class="footer-link-title">Use cases</div><a href="../use-cases/user-interviews" target="_blank" class="navigation-link-footer w-inline-block"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/6623fe9b69cfaf072661b24c_users.svg" loading="lazy" alt="" class="navigation-icon"/><div class="navigation-link-text">User interviews</div></a></div><div class="footer-container"><div class="footer-link-title">Company</div><a                     href="https://www.linkedin.com/company/listenup-ai/about/"                     target="_blank"                     class="navigation-link w-inline-block"                     ><img                       src="assets/twitter.png"                       loading="lazy"                       alt=""                       class="navigation-icon"                     />                     <div class="navigation-link-text">Twitter</div></a                   ><a href="mailto:robin@listenup.ai?subject=Question%20about%20SoundLine!" class="navigation-link w-inline-block"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/6563b3d3e4faf7c2d5e4d61a_Chat%2C%20Messages%2C%20Bubble.svg" loading="lazy" alt="" class="navigation-icon"/><div class="navigation-link-text">Contact us</div></a><a href="../privacy-policy" target="_blank" class="navigation-link-footer w-inline-block"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/662502eaaa3a7203a35e1ab4_Vector.svg" loading="lazy" alt="" class="navigation-icon"/><div class="navigation-link-text">Privacy Policy</div></a><a href="../terms" target="_blank" class="navigation-link-footer w-inline-block"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/66250379c598beee7b5ef6ac_Vector.svg" loading="lazy" alt="" class="navigation-icon"/><div class="navigation-link-text">Terms</div></a></div></div></div><div class="div-block-53"><div class="div-block-55"><img src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/6550c3c726c56cfcfb18ab71_c.svg" loading="lazy" alt="" class="image-16"/><div class="footer-text">2024  - All rights reserved</div></div></div></div></div></div></div></div><script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=635584277e62506ebe08fb74" type="text/javascript"></script><script src="https://cdn.prod.website-files.com/635584277e62506ebe08fb74/js/webflow.4d07f6c0f.js" type="text/javascript"></script><!-- Intercom -->
<!-- Custom slider -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>

const teamSlider = new Swiper(".swiper.is-team", {
  // Parameters
  loop: true,
  slidesPerView: 1,
  spaceBetween: 20,
  allowTouchMove: true,

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-btn-next",
    prevEl: ".swiper-btn-prev"
  },

  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 480px
    480: {
      slidesPerView: 1,
      spaceBetween: 5,
    }
  }
});

</script></body></html>
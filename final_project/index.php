
<!doctype html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8">
    <link rel="dns-prefetch" href="//s3.envato.com" />

<div>Alo alo</div>
    
<script nonce="7DgIaROz34LizjocJh5wWA==">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam-cell.nr-data.net","errorBeacon":"bam-cell.nr-data.net","licenseKey":"NRBR-281af528f2b1e2422b5","applicationID":"13909","transactionName":"NTU0DRQNDwshOmIZBRM3dR8TDg84Nys/FRQYBSoLAxQKAjM=","queueTime":0,"applicationTime":27,"agent":"","atts":"DXgvW1wZQRQtPChSS1QOMhwLByUINi0+BFNaeCgcEAsQDismb0pTRmhsQAAAAF9mNTA="}</script>
<script nonce="7DgIaROz34LizjocJh5wWA==">(window.NREUM||(NREUM={})).loader_config={licenseKey:"NRBR-281af528f2b1e2422b5",applicationID:"13909"};window.NREUM||(NREUM={}),__nr_require=function(e,t,n){function r(n){if(!t[n]){var i=t[n]={exports:{}};e[n][0].call(i.exports,function(t){var i=e[n][1][t];return r(i||t)},i,i.exports)}return t[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<n.length;i++)r(n[i]);return r}({1:[function(e,t,n){function r(){}function i(e,t,n){return function(){return o(e,[u.now()].concat(c(arguments)),t?null:this,n),t?void 0:this}}var o=e("handle"),a=e(6),c=e(7),f=e("ee").get("tracer"),u=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],p="api-",l=p+"ixn-";a(d,function(e,t){s[t]=i(p+t,!0,"api")}),s.addPageAction=i(p+"addPageAction",!0),s.setCurrentRouteName=i(p+"routeName",!0),t.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,t){var n={},r=this,i="function"==typeof t;return o(l+"tracer",[u.now(),e,n],r),function(){if(f.emit((i?"":"no-")+"fn-start",[u.now(),r,i],n),i)try{return t.apply(this,arguments)}catch(e){throw f.emit("fn-err",[arguments,this,e],n),e}finally{f.emit("fn-end",[u.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,t){m[t]=i(l+t)}),newrelic.noticeError=function(e,t){"string"==typeof e&&(e=new Error(e)),o("err",[e,u.now(),!1,t])}},{}],2:[function(e,t,n){function r(){return c.exists&&performance.now?Math.round(performance.now()):(o=Math.max((new Date).getTime(),o))-a}function i(){return o}var o=(new Date).getTime(),a=o,c=e(8);t.exports=r,t.exports.offset=a,t.exports.getLastTimestamp=i},{}],3:[function(e,t,n){function r(e,t){var n=e.getEntries();n.forEach(function(e){"first-paint"===e.name?d("timing",["fp",Math.floor(e.startTime)]):"first-contentful-paint"===e.name&&d("timing",["fcp",Math.floor(e.startTime)])})}function i(e,t){var n=e.getEntries();n.length>0&&d("lcp",[n[n.length-1]])}function o(e){e.getEntries().forEach(function(e){e.hadRecentInput||d("cls",[e])})}function a(e){if(e instanceof m&&!g){var t=Math.round(e.timeStamp),n={type:e.type};t<=p.now()?n.fid=p.now()-t:t>p.offset&&t<=Date.now()?(t-=p.offset,n.fid=p.now()-t):t=p.now(),g=!0,d("timing",["fi",t,n])}}function c(e){d("pageHide",[p.now(),e])}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var f,u,s,d=e("handle"),p=e("loader"),l=e(5),m=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){f=new PerformanceObserver(r);try{f.observe({entryTypes:["paint"]})}catch(v){}u=new PerformanceObserver(i);try{u.observe({entryTypes:["largest-contentful-paint"]})}catch(v){}s=new PerformanceObserver(o);try{s.observe({type:"layout-shift",buffered:!0})}catch(v){}}if("addEventListener"in document){var g=!1,w=["click","keydown","mousedown","pointerdown","touchstart"];w.forEach(function(e){document.addEventListener(e,a,!1)})}l(c)}},{}],4:[function(e,t,n){function r(e,t){if(!i)return!1;if(e!==i)return!1;if(!t)return!0;if(!o)return!1;for(var n=o.split("."),r=t.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var i=null,o=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var c=navigator.userAgent,f=c.match(a);f&&c.indexOf("Chrome")===-1&&c.indexOf("Chromium")===-1&&(i="Safari",o=f[1])}t.exports={agent:i,version:o,match:r}},{}],5:[function(e,t,n){function r(e){function t(){e(a&&document[a]?document[a]:document[i]?"hidden":"visible")}"addEventListener"in document&&o&&document.addEventListener(o,t,!1)}t.exports=r;var i,o,a;"undefined"!=typeof document.hidden?(i="hidden",o="visibilitychange",a="visibilityState"):"undefined"!=typeof document.msHidden?(i="msHidden",o="msvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(i="webkitHidden",o="webkitvisibilitychange",a="webkitVisibilityState")},{}],6:[function(e,t,n){function r(e,t){var n=[],r="",o=0;for(r in e)i.call(e,r)&&(n[o]=t(r,e[r]),o+=1);return n}var i=Object.prototype.hasOwnProperty;t.exports=r},{}],7:[function(e,t,n){function r(e,t,n){t||(t=0),"undefined"==typeof n&&(n=e?e.length:0);for(var r=-1,i=n-t||0,o=Array(i<0?0:i);++r<i;)o[r]=e[t+r];return o}t.exports=r},{}],8:[function(e,t,n){t.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,t,n){function r(){}function i(e){function t(e){return e&&e instanceof r?e:e?u(e,f,a):a()}function n(n,r,i,o,a){if(a!==!1&&(a=!0),!l.aborted||o){e&&a&&e(n,r,i);for(var c=t(i),f=v(n),u=f.length,s=0;s<u;s++)f[s].apply(c,r);var p=d[h[n]];return p&&p.push([b,n,r,c]),c}}function o(e,t){y[e]=v(e).concat(t)}function m(e,t){var n=y[e];if(n)for(var r=0;r<n.length;r++)n[r]===t&&n.splice(r,1)}function v(e){return y[e]||[]}function g(e){return p[e]=p[e]||i(n)}function w(e,t){s(e,function(e,n){t=t||"feature",h[n]=t,t in d||(d[t]=[])})}var y={},h={},b={on:o,addEventListener:o,removeEventListener:m,emit:n,get:g,listeners:v,context:t,buffer:w,abort:c,aborted:!1};return b}function o(e){return u(e,f,a)}function a(){return new r}function c(){(d.api||d.feature)&&(l.aborted=!0,d=l.backlog={})}var f="nr@context",u=e("gos"),s=e(6),d={},p={},l=t.exports=i();t.exports.getOrSetContext=o,l.backlog=d},{}],gos:[function(e,t,n){function r(e,t,n){if(i.call(e,t))return e[t];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return e[t]=r,r}var i=Object.prototype.hasOwnProperty;t.exports=r},{}],handle:[function(e,t,n){function r(e,t,n,r){i.buffer([e],r),i.emit(e,t,n)}var i=e("ee").get("handle");t.exports=r,r.ee=i},{}],id:[function(e,t,n){function r(e){var t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===window?0:a(e,o,function(){return i++})}var i=1,o="nr@id",a=e("gos");t.exports=r},{}],loader:[function(e,t,n){function r(){if(!x++){var e=b.info=NREUM.info,t=p.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&t))return u.abort();f(y,function(t,n){e[t]||(e[t]=n)});var n=a();c("mark",["onload",n+b.offset],null,"api"),c("timing",["load",n]);var r=p.createElement("script");r.src="https://"+e.agent,t.parentNode.insertBefore(r,t)}}function i(){"complete"===p.readyState&&o()}function o(){c("mark",["domContent",a()+b.offset],null,"api")}var a=e(2),c=e("handle"),f=e(6),u=e("ee"),s=e(4),d=window,p=d.document,l="addEventListener",m="attachEvent",v=d.XMLHttpRequest,g=v&&v.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:v,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var w=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1194.min.js"},h=v&&g&&g[l]&&!/CriOS/.test(navigator.userAgent),b=t.exports={offset:a.getLastTimestamp(),now:a,origin:w,features:{},xhrWrappable:h,userAgent:s};e(1),e(3),p[l]?(p[l]("DOMContentLoaded",o,!1),d[l]("load",r,!1)):(p[m]("onreadystatechange",i),d[m]("onload",r)),c("mark",["firstbyte",a.getLastTimestamp()],null,"api");var x=0},{}],"wrap-function":[function(e,t,n){function r(e,t){function n(t,n,r,f,u){function nrWrapper(){var o,a,s,p;try{a=this,o=d(arguments),s="function"==typeof r?r(o,a):r||{}}catch(l){i([l,"",[o,a,f],s],e)}c(n+"start",[o,a,f],s,u);try{return p=t.apply(a,o)}catch(m){throw c(n+"err",[o,a,m],s,u),m}finally{c(n+"end",[o,a,p],s,u)}}return a(t)?t:(n||(n=""),nrWrapper[p]=t,o(t,nrWrapper,e),nrWrapper)}function r(e,t,r,i,o){r||(r="");var c,f,u,s="-"===r.charAt(0);for(u=0;u<t.length;u++)f=t[u],c=e[f],a(c)||(e[f]=n(c,s?f+r:r,i,f,o))}function c(n,r,o,a){if(!m||t){var c=m;m=!0;try{e.emit(n,r,o,t,a)}catch(f){i([f,n,r,o],e)}m=c}}return e||(e=s),n.inPlace=r,n.flag=p,n}function i(e,t){t||(t=s);try{t.emit("internal-error",e)}catch(n){}}function o(e,t,n){if(Object.defineProperty&&Object.keys)try{var r=Object.keys(e);return r.forEach(function(n){Object.defineProperty(t,n,{get:function(){return e[n]},set:function(t){return e[n]=t,t}})}),t}catch(o){i([o],n)}for(var a in e)l.call(e,a)&&(t[a]=e[a]);return t}function a(e){return!(e&&e instanceof Function&&e.apply&&!e[p])}function c(e,t){var n=t(e);return n[p]=e,o(e,n,s),n}function f(e,t,n){var r=e[t];e[t]=c(r,n)}function u(){for(var e=arguments.length,t=new Array(e),n=0;n<e;++n)t[n]=arguments[n];return t}var s=e("ee"),d=e(7),p="nr@original",l=Object.prototype.hasOwnProperty,m=!1;t.exports=r,t.exports.wrapFunction=c,t.exports.wrapInPlace=f,t.exports.argsToArray=u},{}]},{},["loader"]);</script>
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <title>Ask me - Responsive Questions and Answers Template Preview - ThemeForest</title>
    <meta name="description" content="&amp;lt;p&amp;gt;&amp;lt;a href=&amp;quot;http://goo.gl/qiQiEW&amp;quot; rel=&amp;quot;nofollow&amp;quot;&amp;gt;&amp;lt;img src=&amp;quo...">
    <meta name="robots" content="noindex, nofollow" />
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />

    <link rel="stylesheet" media="all" href="https://public-assets.envato-static.com/assets/market/core/index-6e294e9c28580b492d27bcaaaada9a0076a7fc2dff6bc9df9de894ce02be4c1c.css" />
    <link rel="stylesheet" media="all" href="https://public-assets.envato-static.com/assets/market/pages/preview/index-004d35cdd5d555cdd3e956d1b916825642de06529f0fe91fd9f390813761d2fc.css" />
    <link rel="stylesheet" media="all" href="https://cookiebot-assets.envato-static.com/cookiebot.css" />

      <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://public-assets.envato-static.com/icons/themeforest.net/apple-touch-icon-72x72-precomposed.png" sizes="72x72" />
  <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://public-assets.envato-static.com/icons/themeforest.net/apple-touch-icon-114x114-precomposed.png" sizes="114x114" />
  <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://public-assets.envato-static.com/icons/themeforest.net/apple-touch-icon-144x144-precomposed.png" sizes="144x144" />
<link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://public-assets.envato-static.com/icons/themeforest.net/apple-touch-icon-precomposed.png" />

    <script src="https://public-assets.envato-static.com/assets/market/pages/full_screen_preview/index-0761a67821063364aae0c110e00f283d54710f2090e2a9312eb487a5d703205b.js" nonce="7DgIaROz34LizjocJh5wWA=="></script>

    <script nonce="7DgIaROz34LizjocJh5wWA==">
//<![CDATA[
      //function to fix height of iframe!
      var calcHeight = function() {
        var headerDimensions = $('.preview__header').height();
        $('.full-screen-preview__frame').height($(window).height() - headerDimensions);
      }

      $(document).ready(function() {
        calcHeight();
      });

      $(window).resize(function() {
        calcHeight();
      }).load(function() {
        calcHeight();
      });

//]]>
</script>
    
  </head>
  <body class="full-screen-preview">
    <div class="preview__header" data-view="ctaHeader" data-item-id="6357488">
  <div class="preview__envato-logo">
    <a class="header-envato_market" href="https://themeforest.net/item/ask-me-responsive-questions-and-answers-template/6357488">Envato Market</a>
  </div>

  <div id="js-preview__actions" class="preview__actions">
  <div class="preview__action--buy">
    <a class="header-buy-now e-btn--3d -color-primary" href="https://themeforest.net/checkout/from_item/6357488?license=regular&amp;support=bundle_6month">Buy now</a>
  </div>

</div>
</div>
<iframe class="full-screen-preview__frame" src="https://2code.info/demo/html/ask-me-html/ask-me-start/" name="preview-frame" frameborder="0" noresize="noresize" data-view="fullScreenPreview" allow="geolocation 'self'; autoplay 'self'">
</iframe>


    <script nonce="7DgIaROz34LizjocJh5wWA==">
//<![CDATA[
      $(function(){viewloader.execute(Views);});

//]]>
</script>
    
<div id="affiliate-tracker" class="is-hidden" data-view="affiliatesTracker" data-cookiebot-enabled="true"></div>

      <script src="https://consent.cookiebot.com/uc.js" data-cbid="4a6af4ea-f614-41d8-b0a9-8bb6d7fe4799" async="async" id="Cookiebot" nonce="7DgIaROz34LizjocJh5wWA=="></script>


  <script nonce="7DgIaROz34LizjocJh5wWA==">
//<![CDATA[
  window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;

    var consentCookie = getCookie('CookieConsent');

    if (consentCookie) {
      var hasConsent = Market.Helpers.CookieConsent.given('statistics');

      if (hasConsent) {
        setupGoogleAnalytics();
        loadGoogleAnalytics();
        loadLinkingForAllAccounts();
      }
    } else {
      setupGoogleAnalytics();
      loadGoogleAnalytics();
      loadLinkingForAllAccounts();
    }

    window.addEventListener('CookiebotOnAccept', function (e) {
      if (Cookiebot.consent.statistics) {
        if (!(window.ga && ga.create)) {
          setupGoogleAnalytics();
          loadGoogleAnalytics();
          loadLinkingForAllAccounts();
        }
      } else {
        unloadGoogleAnalytics()
      }
      if (!consentToExperimentsEnrollmentGiven()) {
        unenrollFromExperiments();
      }
    }, false);

  function getCookie(name) {
    var name = name + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var cookieContent = decodedCookie.split(';');

    for(var i = 0; i <cookieContent.length; i++) {
      var c = cookieContent[i];

      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }

      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }

    return false;
  }

  function delete_cookie_by_name(name) {
    document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  }

  function unloadGoogleAnalytics() {
    var payload = {"name":"m","allowLinker":true};
    var accountId = "UA-11834194-7";

    // Set the GA User Opt-out flag
    window['ga-disable-'+accountId] = true;

    // Do not explicitly make any further calls to ga()
    ga(payload.name+".remove");

    // Delete any existing GA cookies (_ga, _gat & _gaid) and GA Client ID from localStorage
    delete_cookie_by_name('_ga');
    delete_cookie_by_name('_gat');
    delete_cookie_by_name('_gid');

    // Delete LocalStorage Entries
    if (Market.Helpers.GaLsUtils.localStorageAvailable()) {
      var clientId = Market.Helpers.GaLsUtils.getClientId();

      if (!clientId) {
        return;
      }

      Market.Helpers.GaLsUtils.removeClientId();
    }

    // Do not transmit the Client ID to other sites upon navigation (i.e. autoLink)
  }

  function domLoaded() {
    return new Promise(resolve => {
      if (
        document.readyState === 'interactive' ||
        document.readyState === 'complete'
      ) {
        resolve()
      } else {
        document.addEventListener(
          'DOMContentLoaded',
          () => {
            resolve()
          },
          {
            capture: true,
            once: true,
            passive: true
          }
        )
      }
    })
  }

  function consentToExperimentsEnrollmentGiven () {
    return Market.Helpers.CookieConsent.given('preferences') && Market.Helpers.CookieConsent.given('statistics');
  }

  function unenrollFromExperiments() {
    var activeExperimentsConfig = {"globalExperiment":{"id":"Q4KMAh3BQ4qNUNsdMXdprg","loadingCover":true,"variants":["0","1"],"domain":"themeforest.net","variantsWeights":[1,9],"requires":{}},"newHomepageExperiment":{"id":"eCQGElkrSVqkXjHjD14dBg","loadingCover":true,"variants":["0","1"],"domain":"themeforest.net","variantsWeights":[1,1],"requires":{"globalExperiment":{"variants":[1]}}},"csatSurveyExperiment":{"id":"csat_survey","loadingCover":true,"variants":["0","1"],"domain":"themeforest.net","variantsWeights":[9,1],"requires":{"globalExperiment":{"variants":[1]}}},"itemCardTagsExperiment":{"id":"KPjrVT2lTZ6xjZWU2O4gng","loadingCover":true,"variants":["0","1"],"domain":"themeforest.net","variantsWeights":[1,1],"requires":{"globalExperiment":{"variants":[1]}}},"homePageCopyUpdates":{"id":"38IZ2heHTeyVuJ9OGcqDnA","loadingCover":true,"variants":["0","1","2","3"],"domain":"themeforest.net","variantsWeights":[1,1,1,1],"requires":{"globalExperiment":{"variants":[1]}}},"updatedCategoryNav":{"id":"fFuj2cGCQrS374O9TUL8rw","loadingCover":true,"variants":["0","1","2","3","4","5"],"domain":"themeforest.net","variantsWeights":[1,1,1,1,1,1],"requires":{"globalExperiment":{"variants":[1]}}},"ipxSimplifiedItemPage":{"id":"Wkp3qNpZQ1axe18WVz9REw","loadingCover":true,"variants":["0","1","2","3","4","5","6"],"domain":"themeforest.net","variantsWeights":[1,1,1,1,1,1,1],"requires":{"globalExperiment":{"variants":[1]}}}}
    var deletedCookies = [];

    _.each(activeExperimentsConfig, function(expConfig, name) {
      var cookieName =  "market_experiment_" + expConfig.id;

      if ($.cookie(cookieName) != null && $.cookie(cookieName) != '' && typeof($.cookie(cookieName)) != 'undefined') {
        $.removeCookie(cookieName);
        deletedCookies.push(cookieName);
      }
    });

    if(deletedCookies.length > 0) {
      ga(t+'.set', "exp", null);
      ga(t+'.set', "dimension21", null);
      ga(t+'.set', "dimension22", null);
    }
  }

  function enrolIntoActiveExperiments() {
    var activeExperimentsConfig = {"globalExperiment":{"id":"Q4KMAh3BQ4qNUNsdMXdprg","loadingCover":true,"variants":["0","1"],"domain":"themeforest.net","variantsWeights":[1,9],"requires":{}},"newHomepageExperiment":{"id":"eCQGElkrSVqkXjHjD14dBg","loadingCover":true,"variants":["0","1"],"domain":"themeforest.net","variantsWeights":[1,1],"requires":{"globalExperiment":{"variants":[1]}}},"csatSurveyExperiment":{"id":"csat_survey","loadingCover":true,"variants":["0","1"],"domain":"themeforest.net","variantsWeights":[9,1],"requires":{"globalExperiment":{"variants":[1]}}},"itemCardTagsExperiment":{"id":"KPjrVT2lTZ6xjZWU2O4gng","loadingCover":true,"variants":["0","1"],"domain":"themeforest.net","variantsWeights":[1,1],"requires":{"globalExperiment":{"variants":[1]}}},"homePageCopyUpdates":{"id":"38IZ2heHTeyVuJ9OGcqDnA","loadingCover":true,"variants":["0","1","2","3"],"domain":"themeforest.net","variantsWeights":[1,1,1,1],"requires":{"globalExperiment":{"variants":[1]}}},"updatedCategoryNav":{"id":"fFuj2cGCQrS374O9TUL8rw","loadingCover":true,"variants":["0","1","2","3","4","5"],"domain":"themeforest.net","variantsWeights":[1,1,1,1,1,1],"requires":{"globalExperiment":{"variants":[1]}}},"ipxSimplifiedItemPage":{"id":"Wkp3qNpZQ1axe18WVz9REw","loadingCover":true,"variants":["0","1","2","3","4","5","6"],"domain":"themeforest.net","variantsWeights":[1,1,1,1,1,1,1],"requires":{"globalExperiment":{"variants":[1]}}}}

    var independentExperimentConfigs = _.reduce(activeExperimentsConfig, function(memo, expConfig, name) {
      if(_.isEmpty(expConfig.requires)) {
        memo[name] = expConfig;
      }
      return memo;
    }, {});

    var dependentExperimentConfigs = _.reduce(activeExperimentsConfig, function(memo, expConfig, name) {
      if(!_.isEmpty(expConfig.requires)) {
        memo[name] = expConfig;
      }
      return memo;
    }, {});

    var experimentsConfig = {...independentExperimentConfigs, ...dependentExperimentConfigs};

    if (!_.isEmpty(experimentsConfig)) {
      var experimentEnrolments = createExperimentEnrollments(experimentsConfig);
      window.dispatchEvent(new CustomEvent('ExperimentsReady', { payload: experimentEnrolments }));
    }
  }

  function areRequirementsMet(experimentsConfig, requiredExperiments) {
    return _.reduce(requiredExperiments, function(memo, requiredExperimentVariants, requiredExperimentName){
      var requiredExperiment = experimentsConfig[requiredExperimentName];
      var requiredExperimentCookieName = "market_experiment_" + requiredExperiment.id;
      var requiredExperimentVariantEnabled = _.contains(requiredExperimentVariants.variants, +$.cookie(requiredExperimentCookieName));

      return memo && requiredExperimentVariantEnabled;
    }, true)
  }

  function selectExperimentVariant(expConfig) {
    var variantWeights = _.object(expConfig.variants, expConfig.variantsWeights);

    return _.chain(variantWeights).map(function (weight, variant) {
      return _.times(weight, function() { return variant; });
    }).flatten().sample().value();
  }

  function createExperimentEnrollments(activeExperimentsConfig) {
    var enrollments = _.reduce(activeExperimentsConfig, function(memo, expConfig, name) {
      var cookieName = "market_experiment_" + expConfig.id;

      if (!$.cookie(cookieName)) {
        var requirementsMet = areRequirementsMet(activeExperimentsConfig, expConfig.requires);

        if (requirementsMet) {
          var variant = selectExperimentVariant(expConfig)
          $.cookie(cookieName, variant, { expires: 365, domain: expConfig.domain, path: '/' });
        }
      }
      if ($.cookie(cookieName)) {
        memo[expConfig.id] = $.cookie(cookieName);
      }

      return memo;
    }, {});

    var enrollmentsString = _.map(_.pairs(enrollments), function(pair) { return pair.join("."); }).join("!");

    ga(t+'.set', "exp", enrollmentsString);
    ga(t+'.set', "dimension21", enrollmentsString);
    ga(t+'.set', "dimension22", enrollmentsString);

    return enrollments;
  }

  function loadLinkingForAllAccounts() {
    domLoaded().then(() => {
      var ACCOUNTS = ["m"];
      window._envGaTrackerNames = ACCOUNTS;

      for (var i = 0; i < ACCOUNTS.length; i++) {
        t = ACCOUNTS[i];

        ga(t+'.require', 'linker');

        ga(t+'.require', 'linkid', 'linkid.js');
      };

      document.body.addEventListener('click', function(event) {
        decorateLink(event);
      });
      document.body.addEventListener('contextmenu', function(event) {
        // Aside from a normal click, we need to handle the variety of ways users
        // can open a link in a new tab
        // Right click to open context menu
        decorateLink(event);
      });
      document.body.addEventListener('mousedown', function(event) {
        // Aside from a normal click, we need to handle the variety of ways users
        // can open a link in a new tab
        // Middle mouse button click
        if (event.button === 1) {
          decorateLink(event);
        }
      });
    });
  }

  function decorateLink(event) {

    var ACCOUNTS = ["m"];
    window._envGaTrackerNames = ACCOUNTS;

    var currentTarget = jQuery(event.target);
    var link = currentTarget.closest('a')[0];
    var ourDomains = ["activeden.net","audiojungle.net","themeforest.net","videohive.net","graphicriver.net","3docean.net","codecanyon.net","photodune.net","market.styleguide.envato.com","elements.envato.com","build.envatohostedservices.com","author.envato.com","tutsplus.com","sites.envato.com"];
    var filteredDomains = ourDomains.filter(function(domain) {
      return domain !== document.location.hostname;
    });

    for (var i = 0; i < ACCOUNTS.length; i++) {
      t = ACCOUNTS[i];

      if (link && link.href) {
        if (filteredDomains.includes(link.hostname) || currentSiteLinkOpensInNewWindow(link)) {
          ga(t+'.linker:decorate', link)
        }
      }
    }
  }

  function currentSiteLinkOpensInNewWindow(link) {
    return document.location.hostname === link.hostname && link.target === '_blank';
  }

  function setupGoogleAnalytics() {
    (function () {
      var accountId = "UA-11834194-7";
      window['ga-disable-'+accountId] = false;

      if (Market.Helpers.GaLsUtils.localStorageAvailable()) {
        var options = {"name":"m","allowLinker":true};

        options.storage = "none";
        options.clientId = Market.Helpers.GaLsUtils.getClientId();

        var clientIdValid = Market.Helpers.GaLsUtils.clientIdValid(options.clientId);
        if (!clientIdValid) {
          options.clientId = null;
        }

        ga("create", "UA-11834194-7", options);
        ga(function() {
          var tracker = ga.getByName(options.name);
          Market.Helpers.GaLsUtils.storeClientId(tracker.get('clientId'));
        })
      } else {
        ga("create", "UA-11834194-7", {"name":"m","allowLinker":true});
      }

      var ACCOUNTS = ["m"];
      window._envGaTrackerNames = ACCOUNTS;

      for (var i = 0; i < ACCOUNTS.length; i++) {
        t = ACCOUNTS[i];

        ga(t+'.require', "GTM-5VPWWP");

        ga(t+'.require', 'ec');

        ga(t+'.require', 'displayfeatures');

        ga(t+'.set', 'dimension20', 'other')




        if (!getCookie('CookieConsent') || consentToExperimentsEnrollmentGiven()) {
            enrolIntoActiveExperiments();
        }


        if ('') {
          ga(t+'.send', {
            hitType: 'pageview',
            page: ''
          });
        } else if ('') {
          // append the analytics_suffix to the page path so the flash alert/error type can be tracked
          var analyticsSuffix = $.trim('').replace(/([A-Z])/g, '$1').replace(/[-_\s]+/g, '-').toLowerCase();
          var uri = URI(window.location.pathname + window.location.search);
          uri.path(uri.path() + '/' + analyticsSuffix);
          var tracking_path = uri.path() + uri.search();
          ga(t+'.send', {
            hitType: 'pageview',
            page: tracking_path,
          });
        } else {
          ga(t+'.send', 'pageview');
        }
      }

      loadLinkingForAllAccounts()
    }());
  }

  function loadGoogleAnalytics() {
    (function () {

      var s=document.createElement('script');
      s.type='text/javascript';
      s.async=true;
        s.src='https://www.google-analytics.com/analytics.js';
      var x=document.getElementsByTagName('script')[0];
      x.parentNode.insertBefore(s,x);
    }());
  }

  
    if (Market.Helpers.GaLsUtils.localStorageAvailable()) {
      var clientId = Market.Helpers.GaLsUtils.getClientId();

      ga("create", "UA-79564118-1", "auto", {
        name: "author_analytics",
        allowLinker: true,
        storage: "none",
        clientId: clientId,
        alwaysSendReferrer: true
      });
    } else {
      ga("create", "UA-79564118-1", "auto", {
        name: "author_analytics",
        allowLinker: true,
        alwaysSendReferrer: true
      });
    }


      ga("author_analytics.send", "pageview");




//]]>
</script>

  
<script nonce="7DgIaROz34LizjocJh5wWA==">
//<![CDATA[

    if (typeof Cookiebot !== 'undefined' && Cookiebot.consent && Cookiebot.consent.statistics ) {
      enableGoogleAnalyticsLinkWrapper();
    } else {
      window.addEventListener('CookiebotOnAccept', function (e) {
        if (Cookiebot.consent.statistics) {
          enableGoogleAnalyticsLinkWrapper();
        }
      }, false);
    }

  function enableGoogleAnalyticsLinkWrapper() {
    // GA: universal analytics link wrapper
    (function(){
        window._envTrkrs = [["m", "UA-11834194-7"]];

        var debug = false;
        var MAX_RETRIES = 10;

        /*
           The script needs to wait until the Analytics script
           has been downloaded from Google before initializing
        */
        var waitForAnalytics = function(){
            this.count = this.count || 0;

            if (window.ga && ga.getByName) {
                e.init();
            } else {
                if (count < MAX_RETRIES) { setTimeout(waitForAnalytics, 250); }
                count++;
            }
        };

        var e = {
            _envArray: [],
            _envTrkrs: (window._envTrkrsCust && window._envTrkrsCust.length) ? window._envTrkrs.concat(window._envTrkrsCust) : window._envTrkrs,
            init: function() {
                for (var i=0; i < _envTrkrs.length; i++) {
                  if(!ga.getByName(_envTrkrs[i][0])) {
                    if (Market.Helpers.GaLsUtils.localStorageAvailable()) {
                      var clientId = Market.Helpers.GaLsUtils.getClientId();

                      ga("create", _envTrkrs[i][1], "auto", {name: _envTrkrs[i][0], storage: "none", clientId: clientId, allowLinker: true});
                    } else {
                      ga("create", _envTrkrs[i][1], "auto", {name: _envTrkrs[i][0], allowLinker: true});
                    }
                  }
                }

                document.addEventListener('DOMContentLoaded', function(){
                    e.wrapperInit();
                });

                if (debug) {console.log('Initiated');}
            },
            wrapperInit: function() {
                if (typeof window._envIsRunning != 'undefined' || window._envIsRunning == true) {
                    return
                }
                window._envIsRunning = true;

                if (document.addEventListener) {
                    document.addEventListener('click', function(event){
                        var target = event.target;
                        if (target && target.tagName === 'A') {
                            e._envLinksTracker(event);
                        }
                    });
                }
            },
            isInArray: function(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var r = new RegExp(t[n], 'i');
                    if (r.test(e)) {
                        return n
                    }
                }
                return -1
            },
            _envTrackevent: function(e, t, n, r) {
                for (var i = 0; i < this._envTrkrs.length; i++) {
                    var s = this._envTrkrs[i][0].length == 0 ? '' : this._envTrkrs[i][0] + '.';
                    r.length == 0 ? ga(s + 'send', 'event', e, t, n) : ga(s + 'send', 'event', e, t, n, r)
                }
            },
            _envTrackpageview: function(e, t) {
                t = t.charAt(0) == '/' ? t : '/' + t;
                for (var n = 0; n < this._envTrkrs.length; n++) {
                    var r = this._envTrkrs[n][0].length == 0 ? '' : this._envTrkrs[n][0] + '.';
                    ga(r + 'send', 'pageview', e + t);
                }
            },
            _envLinksTracker: function(t) {
                var r = false;
                var i = {
                    outbound: {
                        run: true,
                        useEvent: true
                    },
                    download: {
                        run: true,
                        useEvent: true,
                        reg: ''
                    },
                    self: {
                        run: false,
                        useEvent: true
                    },
                    mail: {
                        run: true,
                        useEvent: true
                    },
                    ext: /\.(doc.?|xls.?|ppt.?|exe|zip|rar|gz|tar|tgz|dmg|csv|pdf|xpi|txt|mp3)$/i
                };
                var s = t.srcElement ? t.srcElement : this;
                if (t.srcElement) {
                    r = true
                }
                while (s.tagName != 'A') {
                    s = s.parentNode
                }
                if (s.href == undefined || s.href == null) {
                    return true
                }
                var o = s.href;
                if (o.length == 0) return;
                var u = s.hostname.toLowerCase();
                var a = s.pathname;
                if (a.length == 0) {
                    a = '/'
                } else if (a.substr(0, 1) != '/') {
                    a = '/' + a
                }
                var f = s.protocol;
                var l = s.search;
                var c = location.hostname;
                c = c.replace(/^www\./i, '').toLowerCase();
                u = u.replace(/^www\./i, '').toLowerCase();
                if (o.match(/^#/)) {
                    if (i.self.run) {
                        i.self.useEvent ? e._envTrackevent('self', 'click - ' + c, o, '') : e._envTrackpageview('/virtual/self', '/' + o);
                        return true
                    }
                } else if (f.match(/^mailto:/i)) {
                    if (i.mail.run) {
                        o = o.replace(/^mailto:/i, '');
                        i.mail.useEvent ? e._envTrackevent('mailto', 'click - ' + c, o, '') : e._envTrackpageview('/virtual/mailto', o);
                        return true
                    }
                } else if ((new RegExp(i.ext)).test(a)) {
                    if (i.download.run) {
                        o = o.replace(/^https?:\/\//i, '');
                        i.download.useEvent ? e._envTrackevent('download', 'click - ' + c, o, '') : e._envTrackpageview('/virtual/download', o);
                        return true
                    }
                } else if (u == undefined || u.length == 0 || f.match(/^javascript:/i)) {
                    return
                } else if ((new RegExp(c + '$', 'i')).test(u) || (new RegExp(u + '$', 'i')).test(c)) {
                    if (i.download.run && i.download.reg.length != 0) {
                        if ((new RegExp(i.download.reg, 'i')).test(a + l)) {
                            o = o.replace(/^https?:\/\//i, '');
                            i.download.useEvent ? e._envTrackevent('download', 'click - ' + c, o, '') : e._envTrackpageview('/virtual/download', o);
                            return true
                        }
                    }
                } else if (u != c) {
                    if (e.isInArray(u, e._envArray) == -1) {
                        if (i.outbound.run) {
                            i.outbound.useEvent ? e._envTrackevent('outbound', 'click - ' + c, u + a + l, '') : e._envTrackpageview('/virtual/outbound', u + a);
                            return true
                        }
                    } else if (e.isInArray(u, e._envArray) != -1) {
                        var h = s.target;
                        if (h != null && h == '_blank') {
                            if ((new RegExp(/_utma=/)).test(l)) {
                                return true
                            }
                            var p = e._envTrkrs[0][0].length == 0 ? '' : _envTrkrs[0][0] + '.';
                            return true
                        } else {
                            return false
                        }
                    }
                }
            }
        };

        waitForAnalytics();
    })()
  }

//]]>
</script>



<script nonce="7DgIaROz34LizjocJh5wWA==">
//<![CDATA[
  // Set New Relic custom attributes
  (function () {
    if (typeof newrelic !== 'undefined') {
      newrelic.setCustomAttribute('pageType', 'other')
    }
  })()

//]]>
</script>

  <script nonce="7DgIaROz34LizjocJh5wWA==">
//<![CDATA[
    if (typeof Cookiebot !== 'undefined' && Cookiebot.consent && Cookiebot.consent.marketing) {
      enableGoogleTagManager();
    } else {
      window.addEventListener('CookiebotOnAccept', function (e) {
        if (Cookiebot.consent.marketing) {
          enableGoogleTagManager();
        }
      }, false);
    }

  function enableGoogleTagManager() {
    var gtmId = 'GTM-585RXMV';
    // Google Tag Manager Tracking Code
    (function(w,d,s,l,i) {
      w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});
      var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
      j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
      f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer',gtmId);


    window.addEventListener('load', function() {
      window.dataLayer.push({
        event: 'pinterestReady'
      });
    });
  }

//]]>
</script>

</body></html>

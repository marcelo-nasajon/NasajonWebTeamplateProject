<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_1ecef81539df1c225124d14b0ac53f6b248530e044d52e897ab21f71bae8543f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                options.maxTries = options.maxTries || 0;
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 !== xhr.readyState) {
                        return null;
                    }

                    if (xhr.status == 404 && options.maxTries > 1) {
                        setTimeout(function(){
                            options.maxTries--;
                            request(url, onSuccess, onError, payload, options);
                        }, 500);

                        return null;
                    }

                    if (200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        '',
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  79 => 29,  75 => 28,  70 => 26,  66 => 25,  62 => 24,  50 => 15,  42 => 12,  30 => 5,  26 => 3,  24 => 2,  19 => 1,  503 => 145,  477 => 143,  473 => 137,  467 => 135,  464 => 134,  458 => 128,  455 => 127,  450 => 148,  448 => 134,  443 => 131,  441 => 127,  431 => 119,  417 => 117,  413 => 116,  406 => 111,  392 => 110,  388 => 109,  383 => 106,  369 => 105,  365 => 104,  360 => 101,  346 => 100,  342 => 99,  337 => 96,  323 => 95,  319 => 94,  314 => 91,  300 => 90,  296 => 89,  291 => 86,  277 => 85,  273 => 84,  268 => 81,  254 => 80,  250 => 79,  245 => 76,  231 => 75,  227 => 74,  222 => 71,  208 => 70,  204 => 69,  199 => 66,  185 => 64,  181 => 63,  177 => 61,  159 => 58,  148 => 49,  134 => 47,  130 => 46,  119 => 37,  105 => 36,  101 => 35,  93 => 29,  84 => 25,  43 => 22,  39 => 14,  21 => 1,  167 => 110,  163 => 59,  158 => 106,  155 => 105,  95 => 47,  81 => 24,  77 => 44,  46 => 14,  32 => 6,  29 => 3,);
    }
}

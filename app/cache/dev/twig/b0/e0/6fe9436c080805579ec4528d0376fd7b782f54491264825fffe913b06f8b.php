<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_b0e06fe9436c080805579ec4528d0376fd7b782f54491264825fffe913b06f8b extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == $this->getContext($context, "position"))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "');
                }
            },
            {'maxTries': 5}
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  79 => 29,  75 => 28,  70 => 26,  66 => 25,  62 => 24,  50 => 15,  42 => 12,  30 => 5,  26 => 3,  24 => 2,  19 => 1,  503 => 145,  477 => 143,  473 => 137,  467 => 135,  464 => 134,  458 => 128,  455 => 127,  450 => 148,  448 => 134,  443 => 131,  441 => 127,  431 => 119,  417 => 117,  413 => 116,  406 => 111,  392 => 110,  388 => 109,  383 => 106,  369 => 105,  365 => 104,  360 => 101,  346 => 100,  342 => 99,  337 => 96,  323 => 95,  319 => 94,  314 => 91,  300 => 90,  296 => 89,  291 => 86,  277 => 85,  273 => 84,  268 => 81,  254 => 80,  250 => 79,  245 => 76,  231 => 75,  227 => 74,  222 => 71,  208 => 70,  204 => 69,  199 => 66,  185 => 64,  181 => 63,  177 => 61,  159 => 58,  148 => 49,  134 => 47,  130 => 46,  119 => 37,  105 => 36,  101 => 35,  93 => 29,  84 => 25,  43 => 22,  39 => 14,  21 => 1,  167 => 110,  163 => 59,  158 => 106,  155 => 105,  95 => 47,  81 => 24,  77 => 44,  46 => 14,  32 => 6,  29 => 3,);
    }
}

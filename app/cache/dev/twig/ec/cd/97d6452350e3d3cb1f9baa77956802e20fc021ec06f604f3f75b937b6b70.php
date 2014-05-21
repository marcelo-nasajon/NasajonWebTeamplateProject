<?php

/* NasajonCalendarioBundle:Default:layout.html.twig */
class __TwigTemplate_eccd97d6452350e3d3cb1f9baa77956802e20fc021ec06f604f3f75b937b6b70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>Drive Contábil Nasajon</title>

\t\t<!-- Bootstrap -->
<!-- \t\t<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\"> -->

\t\t<!-- HTML5 Shim and Respond.js add IE8 support of HTML5 elements and media queries -->

\t\t";
        // line 14
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c55fbd2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c55fbd2_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c55fbd2_bootstrap.custom.min_1.css");
            // line 22
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t";
            // asset "c55fbd2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c55fbd2_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c55fbd2_autocomplete_2.css");
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t";
            // asset "c55fbd2_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c55fbd2_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c55fbd2_closure-menu_3.css");
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t";
            // asset "c55fbd2_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c55fbd2_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c55fbd2_dialog_4.css");
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t";
            // asset "c55fbd2_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c55fbd2_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c55fbd2_estilo_5.css");
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t";
        } else {
            // asset "c55fbd2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c55fbd2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/c55fbd2.css");
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t";
        }
        unset($context["asset_url"]);
        // line 24
        echo "
\t\t";
        // line 25
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4c4fad3_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4c4fad3_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.ttf");
        } else {
            // asset "4c4fad3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4c4fad3") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/fonts/glyphicons-halflings-regular.ttf");
        }
        unset($context["asset_url"]);
        // line 29
        echo "\t</head>
\t<body>
\t\t<header id=\"main-header\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t";
        // line 35
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f57888d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f57888d_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/f57888d_logo_1.jpg");
            // line 36
            echo "\t\t\t\t\t\t<img id=\"logo\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t";
        } else {
            // asset "f57888d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f57888d") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/f57888d.jpg");
            echo "\t\t\t\t\t\t<img id=\"logo\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t";
        }
        unset($context["asset_url"]);
        // line 37
        echo "\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t<form action=\"\" class=\"busca\" id=\"drive-contabil-nasajon\">
\t\t\t\t\t\t\t<span><span class=\"hidden-xs\">Drive Contábil Nasajon</span>&nbsp;</span>
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"busca-input\">
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-com-icon\">
\t\t\t\t\t\t\t\t\t\t";
        // line 46
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b763e9c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b763e9c_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/b763e9c_icone-lupa_1.jpg");
            // line 47
            echo "\t\t\t\t\t\t\t\t\t\t    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // asset "b763e9c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b763e9c") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/b763e9c.jpg");
            echo "\t\t\t\t\t\t\t\t\t\t    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        unset($context["asset_url"]);
        // line 49
        echo "\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<form action=\"\" class=\"busca\" id=\"nome-usuario\">
\t\t\t\t\t\t\t<div id=\"menu-utilidades\" class=\"pull-right\">
\t\t\t\t\t\t\t\t<a href=\"#\" id=\"botao-aplicativos\">
\t\t\t\t\t\t\t\t";
        // line 58
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a9aee3d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a9aee3d_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/a9aee3d_icone-ferramentas_1.jpg");
            // line 59
            echo "\t\t\t\t\t\t\t\t    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t";
        } else {
            // asset "a9aee3d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a9aee3d") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/a9aee3d.jpg");
            echo "\t\t\t\t\t\t\t\t    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t";
        }
        unset($context["asset_url"]);
        // line 61
        echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"logout\" id=\"logout\">
\t\t\t\t\t\t\t\t\t";
        // line 63
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ef19d7e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ef19d7e_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/ef19d7e_icone-logout_1.jpg");
            // line 64
            echo "\t\t\t\t\t\t\t\t\t    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t";
        } else {
            // asset "ef19d7e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ef19d7e") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/ef19d7e.jpg");
            echo "\t\t\t\t\t\t\t\t\t    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t";
        }
        unset($context["asset_url"]);
        // line 66
        echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul id=\"menu-aplicativos\" for=\"dButton\" class=\"goog-menu\" style=\"display:none\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">";
        // line 69
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "76eb6c0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_76eb6c0_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/76eb6c0_65x65_1.png");
            // line 70
            echo "\t\t\t\t\t\t\t\t\t\t    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // asset "76eb6c0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_76eb6c0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/76eb6c0.png");
            echo "\t\t\t\t\t\t\t\t\t\t    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        unset($context["asset_url"]);
        // line 71
        echo " App #1</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">";
        // line 74
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "76eb6c0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_76eb6c0_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/76eb6c0_65x65_1.png");
            // line 75
            echo "\t\t\t\t\t\t\t\t\t\t    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // asset "76eb6c0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_76eb6c0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/76eb6c0.png");
            echo "\t\t\t\t\t\t\t\t\t\t    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        unset($context["asset_url"]);
        // line 76
        echo " App #2</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">";
        // line 79
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "76eb6c0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_76eb6c0_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/76eb6c0_65x65_1.png");
            // line 80
            echo "\t\t\t\t\t\t\t\t\t\t    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // asset "76eb6c0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_76eb6c0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/76eb6c0.png");
            echo "\t\t\t\t\t\t\t\t\t\t    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        unset($context["asset_url"]);
        // line 81
        echo " App #3</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">";
        // line 84
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "76eb6c0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_76eb6c0_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/76eb6c0_65x65_1.png");
            // line 85
            echo "\t\t\t\t\t\t\t\t\t\t    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // asset "76eb6c0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_76eb6c0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/76eb6c0.png");
            echo "\t\t\t\t\t\t\t\t\t\t    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        unset($context["asset_url"]);
        // line 86
        echo " App #4</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">";
        // line 89
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "76eb6c0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_76eb6c0_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/76eb6c0_65x65_1.png");
            // line 90
            echo "\t\t\t\t\t\t\t\t\t\t    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // asset "76eb6c0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_76eb6c0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/76eb6c0.png");
            echo "\t\t\t\t\t\t\t\t\t\t    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        unset($context["asset_url"]);
        // line 91
        echo " App #5</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">";
        // line 94
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "76eb6c0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_76eb6c0_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/76eb6c0_65x65_1.png");
            // line 95
            echo "\t\t\t\t\t\t\t\t\t\t    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // asset "76eb6c0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_76eb6c0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/76eb6c0.png");
            echo "\t\t\t\t\t\t\t\t\t\t    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        unset($context["asset_url"]);
        // line 96
        echo " App #6</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">";
        // line 99
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "76eb6c0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_76eb6c0_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/76eb6c0_65x65_1.png");
            // line 100
            echo "\t\t\t\t\t\t\t\t\t\t    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // asset "76eb6c0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_76eb6c0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/76eb6c0.png");
            echo "\t\t\t\t\t\t\t\t\t\t    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        unset($context["asset_url"]);
        // line 101
        echo " App #7</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">";
        // line 104
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "76eb6c0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_76eb6c0_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/76eb6c0_65x65_1.png");
            // line 105
            echo "\t\t\t\t\t\t\t\t\t\t    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // asset "76eb6c0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_76eb6c0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/76eb6c0.png");
            echo "\t\t\t\t\t\t\t\t\t\t    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        unset($context["asset_url"]);
        // line 106
        echo " App #8</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">";
        // line 109
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "76eb6c0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_76eb6c0_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/76eb6c0_65x65_1.png");
            // line 110
            echo "\t\t\t\t\t\t\t\t\t\t    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // asset "76eb6c0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_76eb6c0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/76eb6c0.png");
            echo "\t\t\t\t\t\t\t\t\t\t    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        unset($context["asset_url"]);
        // line 111
        echo " App #9</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t";
        // line 116
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "087279d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_087279d_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/087279d_35x35_1.png");
            // line 117
            echo "\t\t\t\t\t\t\t\t    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t";
        } else {
            // asset "087279d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_087279d") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/087279d.png");
            echo "\t\t\t\t\t\t\t\t    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t";
        }
        unset($context["asset_url"]);
        // line 119
        echo "\t\t\t\t\t\t\t\t<h2><a href=\"#\">Usuario</a></h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>

\t\t";
        // line 127
        $this->displayBlock('content', $context, $blocks);
        // line 131
        echo "


\t ";
        // line 134
        $this->displayBlock('javascripts', $context, $blocks);
        // line 148
        echo "\t</body>
</html>";
    }

    // line 127
    public function block_content($context, array $blocks = array())
    {
        // line 128
        echo "\t\t  
\t\t  
\t\t";
    }

    // line 134
    public function block_javascripts($context, array $blocks = array())
    {
        // line 135
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/google-closure/closure/goog/base.js"), "html", null, true);
        echo "\"></script>\t   

\t\t";
        // line 137
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1698525_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1698525_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1698525_jquery-1.11.1.min_1.js");
            // line 143
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t";
            // asset "1698525_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1698525_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1698525_jquery.price_format.1.8.min_2.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t";
            // asset "1698525_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1698525_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1698525_scripts_4.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t";
        } else {
            // asset "1698525"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1698525") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1698525.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t";
        }
        unset($context["asset_url"]);
        // line 145
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>\t   

\t";
    }

    public function getTemplateName()
    {
        return "NasajonCalendarioBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  503 => 145,  477 => 143,  473 => 137,  467 => 135,  464 => 134,  458 => 128,  455 => 127,  450 => 148,  448 => 134,  443 => 131,  441 => 127,  431 => 119,  417 => 117,  413 => 116,  406 => 111,  392 => 110,  388 => 109,  383 => 106,  369 => 105,  365 => 104,  360 => 101,  346 => 100,  342 => 99,  337 => 96,  323 => 95,  319 => 94,  314 => 91,  300 => 90,  296 => 89,  291 => 86,  277 => 85,  273 => 84,  268 => 81,  254 => 80,  250 => 79,  245 => 76,  231 => 75,  227 => 74,  222 => 71,  208 => 70,  204 => 69,  199 => 66,  185 => 64,  181 => 63,  177 => 61,  163 => 59,  159 => 58,  148 => 49,  134 => 47,  130 => 46,  119 => 37,  105 => 36,  101 => 35,  93 => 29,  84 => 25,  81 => 24,  43 => 22,  39 => 14,  32 => 10,  21 => 1,);
    }
}

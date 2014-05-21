<?php

/* NasajonCalendarioBundle:Default:index.html.twig */
class __TwigTemplate_285c8d93823a159724ff965406fef6bc865ffd203f179b08e4356202037e9220 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NasajonCalendarioBundle:Default:layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NasajonCalendarioBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
\t\t<div class=\"container-fluid\" id=\"persona\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h1 class=\"titulo-persona\">Persona Cliente</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t\t\t<div id=\"rubrica\" class=\"panel panel-menu\">
\t\t\t\t\t\t<h2>";
        // line 16
        echo $this->env->getExtension('translator')->getTranslator()->trans("iniciar.processo", array(), "index");
        echo "</h2>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\">Admissão de trabalhador</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Alterar dados cadastrais trabalhador</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Alterar contrato de trabalho</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Estabilidade (Início/Término)</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Condição dif; trabalho  (Início/Término) </a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Trabalhador sem vínculo (Inicío/Alt./Término)</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Desligamento</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Reintegração</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Aviso prévio (Criar/Cancelar)</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Comunicar acidente de trabalho</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Atestado de saúde ocupacional</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Afastamento (Criar/Alterar/Retorno)</a></l
\t\t\t\t\t\t</ul>\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t\t\t<div class=\"panel\" id=\"solicitacoes-recentes\">
\t\t\t\t\t\t<h2>Solicitações Recentes</h2>
\t\t\t\t\t\t  <ul class=\"lista-com-status\">
\t\t\t\t\t\t      <li class=\"status-pendente\">
\t\t\t\t\t\t\t\t<div class=\"status-cabecalho\">
\t\t\t\t\t\t\t\t\t<span class=\"data-hora pull-right\"></span>
\t\t\t\t\t\t\t\t\t<h3></h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"status-dados\">
\t\t\t\t\t\t\t\t\t<div class=\"status-imagem\">
\t\t\t\t\t\t\t\t\t\t";
        // line 44
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9211c41_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9211c41_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/9211c41_status-imagem_1.jpg");
            // line 45
            echo "\t\t\t\t\t\t\t\t\t\t    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // asset "9211c41"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9211c41") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/9211c41.jpg");
            echo "\t\t\t\t\t\t\t\t\t\t    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        unset($context["asset_url"]);
        // line 47
        echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"status-dados\">
\t\t\t\t\t\t\t\t\t\t<p>Antônio Carlos Oliveira Salazar</p>
\t\t\t\t\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t\t\t\t\t<dt>Matricula:</dt>
\t\t\t\t\t\t\t\t\t\t\t<dd>82398323</dd>
\t\t\t\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t\t\t\t\t<dt>Departamento:</dt>
\t\t\t\t\t\t\t\t\t\t\t<dd>Desenvolvimento</dd>
\t\t\t\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t\t\t\t\t<dt>Responsável Hierárquico:</dt>
\t\t\t\t\t\t\t\t\t\t\t<dd>Adriano</dd>
\t\t\t\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t\t\t\t\t<dt>Protocolo:</dt>
\t\t\t\t\t\t\t\t\t\t\t<dd>20.0029</dd>
\t\t\t\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t\t\t\t\t<dt>Estado:</dt>
\t\t\t\t\t\t\t\t\t\t\t<dd class=\"status-sucesso\"></dd>
\t\t\t\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-sm-offset-6 col-md-4  col-md-offset-0\">
\t\t\t\t\t<div class=\"panel\" id=\"solicitacoes-pendentes\">
\t\t\t\t\t\t<h2>Solicitações Pendentes</h2>
\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Admissão de Trabalhador</td>
\t\t\t\t\t\t\t\t\t<td class=\"numero\"><span>10</span></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Atestado de saúde ocupacional</td>
\t\t\t\t\t\t\t\t\t<td class=\"numero\"><span>2</span></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>Atestado de saúde ocupacional</td>
\t\t\t\t\t\t\t\t\t<td class=\"numero\"><span>3</span></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
</div>

";
    }

    // line 105
    public function block_javascript($context, array $blocks = array())
    {
        // line 106
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    ";
        // line 107
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "92088a8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_92088a8_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/92088a8_scripts_1.js");
            // line 110
            echo "      <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>

      ";
        } else {
            // asset "92088a8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_92088a8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/92088a8.js");
            echo "      <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>

      ";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "NasajonCalendarioBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 110,  163 => 107,  158 => 106,  155 => 105,  95 => 47,  81 => 45,  77 => 44,  46 => 16,  32 => 4,  29 => 3,);
    }
}

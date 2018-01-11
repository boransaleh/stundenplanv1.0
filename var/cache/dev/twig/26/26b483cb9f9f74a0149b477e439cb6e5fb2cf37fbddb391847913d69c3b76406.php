<?php

/* SgDatatablesBundle:datatable:ajax.html.twig */
class __TwigTemplate_0f1239034446019b33d99a3577cc391df454aa85f31b41d06c024248676b7d41 extends Twig_Template
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
        $__internal_9586944461cbda822ceab069fd32756b19264296edd58ae23a7508e6cacb9d41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9586944461cbda822ceab069fd32756b19264296edd58ae23a7508e6cacb9d41->enter($__internal_9586944461cbda822ceab069fd32756b19264296edd58ae23a7508e6cacb9d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:ajax.html.twig"));

        $__internal_5f39916d39d74f2ea568f8f5bd8afb71b86af73a8e4674baa73dab901657b3ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f39916d39d74f2ea568f8f5bd8afb71b86af73a8e4674baa73dab901657b3ff->enter($__internal_5f39916d39d74f2ea568f8f5bd8afb71b86af73a8e4674baa73dab901657b3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:ajax.html.twig"));

        // line 9
        ob_start();
        // line 10
        echo "    ";
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "ajax", array()), "url", array()) === null)) {
            // line 11
            echo "        \"url\": \"";
            echo $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "ajax", array()), "url", array());
            echo "\",
    ";
        }
        // line 13
        echo "    \"type\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "ajax", array()), "type", array()), "html", null, true);
        echo "\",
    ";
        // line 14
        if ( !($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "ajax", array()), "data", array()) === null)) {
            // line 15
            echo "        \"data\": ";
            echo $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "ajax", array()), "data", array());
            echo ",
    ";
        }
        $context["ajax_vars"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 18
        echo "
\"serverSide\": true,
";
        // line 20
        if (($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "ajax", array()), "pipeline", array()) > 0)) {
            // line 21
            echo "    \"ajax\": \$.fn.dataTable.pipeline({
        ";
            // line 22
            echo twig_escape_filter($this->env, ($context["ajax_vars"] ?? $this->getContext($context, "ajax_vars")), "html", null, true);
            echo "
        \"pages\": ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "ajax", array()), "pipeline", array()), "html", null, true);
            echo "
    }),
";
        } else {
            // line 26
            echo "    \"ajax\": {
        ";
            // line 27
            echo twig_escape_filter($this->env, ($context["ajax_vars"] ?? $this->getContext($context, "ajax_vars")), "html", null, true);
            echo "
    },
";
        }
        // line 30
        echo "


";
        
        $__internal_9586944461cbda822ceab069fd32756b19264296edd58ae23a7508e6cacb9d41->leave($__internal_9586944461cbda822ceab069fd32756b19264296edd58ae23a7508e6cacb9d41_prof);

        
        $__internal_5f39916d39d74f2ea568f8f5bd8afb71b86af73a8e4674baa73dab901657b3ff->leave($__internal_5f39916d39d74f2ea568f8f5bd8afb71b86af73a8e4674baa73dab901657b3ff_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:datatable:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 30,  72 => 27,  69 => 26,  63 => 23,  59 => 22,  56 => 21,  54 => 20,  50 => 18,  43 => 15,  41 => 14,  36 => 13,  30 => 11,  27 => 10,  25 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
 # This file is part of the SgDatatablesBundle package.
 #
 # (c) stwe <https://github.com/stwe/DatatablesBundle>
 #
 # For the full copyright and license information, please view the LICENSE
 # file that was distributed with this source code.
 #}
{% set ajax_vars %}
    {% if sg_datatables_view.ajax.url is not same as(null) %}
        \"url\": \"{{ sg_datatables_view.ajax.url|raw }}\",
    {% endif %}
    \"type\": \"{{ sg_datatables_view.ajax.type }}\",
    {% if sg_datatables_view.ajax.data is not same as(null) %}
        \"data\": {{ sg_datatables_view.ajax.data|raw }},
    {% endif %}
{% endset %}

\"serverSide\": true,
{% if sg_datatables_view.ajax.pipeline > 0 %}
    \"ajax\": \$.fn.dataTable.pipeline({
        {{ ajax_vars }}
        \"pages\": {{ sg_datatables_view.ajax.pipeline }}
    }),
{% else %}
    \"ajax\": {
        {{ ajax_vars }}
    },
{% endif %}



", "SgDatatablesBundle:datatable:ajax.html.twig", "C:\\Apache24\\htdocs\\vendor\\sg\\datatablesbundle/Resources/views/datatable/ajax.html.twig");
    }
}

<?php

/* :mainpages:BerichtenView.html.twig */
class __TwigTemplate_6f235e174e97dbfac195d7fb7f20d56f90913e387e26e3e3e25f4d3351990c6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", ":mainpages:BerichtenView.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_577c4a49dff74a861b0b2cf9579018a619d49ed0cfa24f5cf30cd2afe03c7efa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_577c4a49dff74a861b0b2cf9579018a619d49ed0cfa24f5cf30cd2afe03c7efa->enter($__internal_577c4a49dff74a861b0b2cf9579018a619d49ed0cfa24f5cf30cd2afe03c7efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mainpages:BerichtenView.html.twig"));

        $__internal_745d4d2e71e4bc61355dde7c26e4fd619a8402ca659c9b1e60986fd28e6b1a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_745d4d2e71e4bc61355dde7c26e4fd619a8402ca659c9b1e60986fd28e6b1a37->enter($__internal_745d4d2e71e4bc61355dde7c26e4fd619a8402ca659c9b1e60986fd28e6b1a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mainpages:BerichtenView.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_577c4a49dff74a861b0b2cf9579018a619d49ed0cfa24f5cf30cd2afe03c7efa->leave($__internal_577c4a49dff74a861b0b2cf9579018a619d49ed0cfa24f5cf30cd2afe03c7efa_prof);

        
        $__internal_745d4d2e71e4bc61355dde7c26e4fd619a8402ca659c9b1e60986fd28e6b1a37->leave($__internal_745d4d2e71e4bc61355dde7c26e4fd619a8402ca659c9b1e60986fd28e6b1a37_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_b725dab9bfd0396946b3cbf82c12e235787ce596677105779d0a668e95dee70d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b725dab9bfd0396946b3cbf82c12e235787ce596677105779d0a668e95dee70d->enter($__internal_b725dab9bfd0396946b3cbf82c12e235787ce596677105779d0a668e95dee70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ddca205a8e4b93f324e18144834564d4e9294553e9df5e50357e5f29d3ea5d0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddca205a8e4b93f324e18144834564d4e9294553e9df5e50357e5f29d3ea5d0f->enter($__internal_ddca205a8e4b93f324e18144834564d4e9294553e9df5e50357e5f29d3ea5d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Berichten Exportieren";
        
        $__internal_ddca205a8e4b93f324e18144834564d4e9294553e9df5e50357e5f29d3ea5d0f->leave($__internal_ddca205a8e4b93f324e18144834564d4e9294553e9df5e50357e5f29d3ea5d0f_prof);

        
        $__internal_b725dab9bfd0396946b3cbf82c12e235787ce596677105779d0a668e95dee70d->leave($__internal_b725dab9bfd0396946b3cbf82c12e235787ce596677105779d0a668e95dee70d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f0ee8e74650a1d104b182fa419e5e71818928b668e2c8fd6e7c70dfb7ab4e61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f0ee8e74650a1d104b182fa419e5e71818928b668e2c8fd6e7c70dfb7ab4e61->enter($__internal_5f0ee8e74650a1d104b182fa419e5e71818928b668e2c8fd6e7c70dfb7ab4e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6fa8f5eb2e016419716ceb0af370aebd74abd9155d95124a18cea2d4fd089575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa8f5eb2e016419716ceb0af370aebd74abd9155d95124a18cea2d4fd089575->enter($__internal_6fa8f5eb2e016419716ceb0af370aebd74abd9155d95124a18cea2d4fd089575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"row\" style=\"margin-bottom: 30px;\">
        <div class=\"col-lg-12\">

            <div class=\"panel panel-default \">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Berichten Von <span style=\"color: #337ab7;\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\DateFormatExt')->getDeutschDate(($context["fromdate"] ?? $this->getContext($context, "fromdate"))), "html", null, true);
        echo "</span>  Bis <span style=\"color: #337ab7;\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\DateFormatExt')->getDeutschDate(($context["todate"] ?? $this->getContext($context, "todate"))), "html", null, true);
        echo "</span> </h3>
                </div>
                <div class=\"panel-body\">

                    ";
        // line 16
        echo $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->datatablesRender($this->env, ($context["datatable"] ?? $this->getContext($context, "datatable")));
        echo "


                </div>
            </div>

        </div>

    </div>



";
        
        $__internal_6fa8f5eb2e016419716ceb0af370aebd74abd9155d95124a18cea2d4fd089575->leave($__internal_6fa8f5eb2e016419716ceb0af370aebd74abd9155d95124a18cea2d4fd089575_prof);

        
        $__internal_5f0ee8e74650a1d104b182fa419e5e71818928b668e2c8fd6e7c70dfb7ab4e61->leave($__internal_5f0ee8e74650a1d104b182fa419e5e71818928b668e2c8fd6e7c70dfb7ab4e61_prof);

    }

    public function getTemplateName()
    {
        return ":mainpages:BerichtenView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 16,  76 => 12,  68 => 6,  59 => 5,  41 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'main.html.twig' %}


{% block title %} Berichten Exportieren{% endblock %}
{% block body %}

    <div class=\"row\" style=\"margin-bottom: 30px;\">
        <div class=\"col-lg-12\">

            <div class=\"panel panel-default \">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Berichten Von <span style=\"color: #337ab7;\">{{ fromdate|deutschDate }}</span>  Bis <span style=\"color: #337ab7;\">{{ todate|deutschDate }}</span> </h3>
                </div>
                <div class=\"panel-body\">

                    {{ sg_datatables_render(datatable) }}


                </div>
            </div>

        </div>

    </div>



{% endblock %}




", ":mainpages:BerichtenView.html.twig", "C:\\Apache24\\htdocs\\app/Resources\\views/mainpages/BerichtenView.html.twig");
    }
}

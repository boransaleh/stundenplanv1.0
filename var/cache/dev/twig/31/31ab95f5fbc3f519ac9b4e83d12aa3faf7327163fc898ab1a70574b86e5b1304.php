<?php

/* mainpages/BerichtenView.html.twig */
class __TwigTemplate_02142974bed39f508b96902597a8976c7a77ff3b0a47dfe854b64d756ef0c08f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", "mainpages/BerichtenView.html.twig", 1);
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
        $__internal_81b4a823237ef6be1b7fd054c2a6284acd6199ecae5f08b9e8fc995c5584dca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81b4a823237ef6be1b7fd054c2a6284acd6199ecae5f08b9e8fc995c5584dca0->enter($__internal_81b4a823237ef6be1b7fd054c2a6284acd6199ecae5f08b9e8fc995c5584dca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainpages/BerichtenView.html.twig"));

        $__internal_4bfec2de995e26b361aa59b92f71248887cf7252f0d1de0f78f458c8c54359f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bfec2de995e26b361aa59b92f71248887cf7252f0d1de0f78f458c8c54359f2->enter($__internal_4bfec2de995e26b361aa59b92f71248887cf7252f0d1de0f78f458c8c54359f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainpages/BerichtenView.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81b4a823237ef6be1b7fd054c2a6284acd6199ecae5f08b9e8fc995c5584dca0->leave($__internal_81b4a823237ef6be1b7fd054c2a6284acd6199ecae5f08b9e8fc995c5584dca0_prof);

        
        $__internal_4bfec2de995e26b361aa59b92f71248887cf7252f0d1de0f78f458c8c54359f2->leave($__internal_4bfec2de995e26b361aa59b92f71248887cf7252f0d1de0f78f458c8c54359f2_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb81ea1399c935af4aa3fe28075f984e5bbd65bf2855806634c260e6b75e380e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb81ea1399c935af4aa3fe28075f984e5bbd65bf2855806634c260e6b75e380e->enter($__internal_fb81ea1399c935af4aa3fe28075f984e5bbd65bf2855806634c260e6b75e380e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_28af414d5e71e5d4d0313e5ad30432b26e7abc96d4128ebd6cbcde09e3d4058d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28af414d5e71e5d4d0313e5ad30432b26e7abc96d4128ebd6cbcde09e3d4058d->enter($__internal_28af414d5e71e5d4d0313e5ad30432b26e7abc96d4128ebd6cbcde09e3d4058d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Berichten Exportieren";
        
        $__internal_28af414d5e71e5d4d0313e5ad30432b26e7abc96d4128ebd6cbcde09e3d4058d->leave($__internal_28af414d5e71e5d4d0313e5ad30432b26e7abc96d4128ebd6cbcde09e3d4058d_prof);

        
        $__internal_fb81ea1399c935af4aa3fe28075f984e5bbd65bf2855806634c260e6b75e380e->leave($__internal_fb81ea1399c935af4aa3fe28075f984e5bbd65bf2855806634c260e6b75e380e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4b8172b55cbb9509c5507fc977e7c23b4e5ee16e4f888bce4a5485482180d62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4b8172b55cbb9509c5507fc977e7c23b4e5ee16e4f888bce4a5485482180d62->enter($__internal_b4b8172b55cbb9509c5507fc977e7c23b4e5ee16e4f888bce4a5485482180d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_154c1d20b5793f42bd11a51abbb4acbba4c7f9e01cad12149fd3da7411e3c578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_154c1d20b5793f42bd11a51abbb4acbba4c7f9e01cad12149fd3da7411e3c578->enter($__internal_154c1d20b5793f42bd11a51abbb4acbba4c7f9e01cad12149fd3da7411e3c578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_154c1d20b5793f42bd11a51abbb4acbba4c7f9e01cad12149fd3da7411e3c578->leave($__internal_154c1d20b5793f42bd11a51abbb4acbba4c7f9e01cad12149fd3da7411e3c578_prof);

        
        $__internal_b4b8172b55cbb9509c5507fc977e7c23b4e5ee16e4f888bce4a5485482180d62->leave($__internal_b4b8172b55cbb9509c5507fc977e7c23b4e5ee16e4f888bce4a5485482180d62_prof);

    }

    public function getTemplateName()
    {
        return "mainpages/BerichtenView.html.twig";
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




", "mainpages/BerichtenView.html.twig", "C:\\Apache24\\htdocs\\app\\Resources\\views\\mainpages\\BerichtenView.html.twig");
    }
}

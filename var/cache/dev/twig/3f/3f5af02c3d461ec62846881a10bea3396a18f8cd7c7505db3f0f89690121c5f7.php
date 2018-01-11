<?php

/* Form/Berichten.html.twig */
class __TwigTemplate_e9d611b916493d3dbf61ff5dc55551aec359023538524183ecce9617a14fa4cf extends Twig_Template
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
        $__internal_98f5165c1a3612ca4c55c3d21adb182074f5baab52578253199966531b0d41a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98f5165c1a3612ca4c55c3d21adb182074f5baab52578253199966531b0d41a3->enter($__internal_98f5165c1a3612ca4c55c3d21adb182074f5baab52578253199966531b0d41a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Form/Berichten.html.twig"));

        $__internal_787fb3c75bd556efab81785bf9ca4126b1ec578153b41bb3f2c47bce7670930d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787fb3c75bd556efab81785bf9ca4126b1ec578153b41bb3f2c47bce7670930d->enter($__internal_787fb3c75bd556efab81785bf9ca4126b1ec578153b41bb3f2c47bce7670930d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Form/Berichten.html.twig"));

        // line 1
        echo " ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["SearchForm"] ?? $this->getContext($context, "SearchForm")), 'form_start', array("attr" => array("id" => "suchenReport"), "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fromto_form"), "method" => "POST"));
        echo "
    <div class=\"form-group\">
        <div class=\"input-group mb-2 mr-sm-2 mb-sm-0\">
            <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></div>
            ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["SearchForm"] ?? $this->getContext($context, "SearchForm")), "fromDate", array()), 'row');
        echo "
        </div>
    </div>


    <div class=\"form-group\">
        <div class=\"input-group mb-2 mr-sm-2 mb-sm-0\">
            <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></div>
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["SearchForm"] ?? $this->getContext($context, "SearchForm")), "toDate", array()), 'row');
        echo "
        </div>
    </div>

    <div class=\"form-group pull-right\">
        <button type=\"submit\" id=\"suchenB\" class=\"btn btn-erstellen\" > Suchen </button>
        <button type=\"button\" class=\"btn btn-cancel\" data-dismiss=\"modal\">Schließen</button>
    </div>
    ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["SearchForm"] ?? $this->getContext($context, "SearchForm")), 'form_end', array("render_rest" => false));
        echo "


";
        
        $__internal_98f5165c1a3612ca4c55c3d21adb182074f5baab52578253199966531b0d41a3->leave($__internal_98f5165c1a3612ca4c55c3d21adb182074f5baab52578253199966531b0d41a3_prof);

        
        $__internal_787fb3c75bd556efab81785bf9ca4126b1ec578153b41bb3f2c47bce7670930d->leave($__internal_787fb3c75bd556efab81785bf9ca4126b1ec578153b41bb3f2c47bce7670930d_prof);

    }

    public function getTemplateName()
    {
        return "Form/Berichten.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 21,  44 => 13,  33 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" {{ form_start(SearchForm,{'attr': {'id': 'suchenReport'},'action': path('fromto_form'), 'method': 'POST'}) }}
    <div class=\"form-group\">
        <div class=\"input-group mb-2 mr-sm-2 mb-sm-0\">
            <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></div>
            {{ form_row(SearchForm.fromDate) }}
        </div>
    </div>


    <div class=\"form-group\">
        <div class=\"input-group mb-2 mr-sm-2 mb-sm-0\">
            <div class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></div>
            {{ form_row(SearchForm.toDate) }}
        </div>
    </div>

    <div class=\"form-group pull-right\">
        <button type=\"submit\" id=\"suchenB\" class=\"btn btn-erstellen\" > Suchen </button>
        <button type=\"button\" class=\"btn btn-cancel\" data-dismiss=\"modal\">Schließen</button>
    </div>
    {{ form_end(SearchForm, {'render_rest': false}) }}


", "Form/Berichten.html.twig", "C:\\Apache24\\htdocs\\app\\Resources\\views\\Form\\Berichten.html.twig");
    }
}

<?php

/* Form/ErstellenGroupCalendarForm.html.twig */
class __TwigTemplate_1e79cd66ba02885fed49d8ef89283113f888352d1c56879a217ad82899fb1718 extends Twig_Template
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
        $__internal_e0d0e2099d9bcd6a21a93cdfad6b590e9ef50e7214104b2be854b88ba56e52b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0d0e2099d9bcd6a21a93cdfad6b590e9ef50e7214104b2be854b88ba56e52b2->enter($__internal_e0d0e2099d9bcd6a21a93cdfad6b590e9ef50e7214104b2be854b88ba56e52b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Form/ErstellenGroupCalendarForm.html.twig"));

        $__internal_521c91b8c170d0570630297c71cb0978dc60703d1e768dbdc3baa39f8fc75441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_521c91b8c170d0570630297c71cb0978dc60703d1e768dbdc3baa39f8fc75441->enter($__internal_521c91b8c170d0570630297c71cb0978dc60703d1e768dbdc3baa39f8fc75441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Form/ErstellenGroupCalendarForm.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["SGroupForm"] ?? $this->getContext($context, "SGroupForm")), 'form_start', array("attr" => array("id" => "selectgroup"), "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stunden-plan"), "method" => "POST"));
        echo "

<div class=\"form-group\">
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["SGroupForm"] ?? $this->getContext($context, "SGroupForm")), "schuleGroup", array()), 'row', array("id" => "groupname"));
        echo "


</div>

<div class=\"form-group pull-right\">
        <input type=\"submit\" id=\"grouperstellen\" value=\"Erstellen\" class=\" btn btn-erstellen\" >
        <button type=\"button\" class=\"btn btn-cancel\" data-dismiss=\"modal\">Schließen</button>
</div>


";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["SGroupForm"] ?? $this->getContext($context, "SGroupForm")), 'form_end');
        echo "







";
        
        $__internal_e0d0e2099d9bcd6a21a93cdfad6b590e9ef50e7214104b2be854b88ba56e52b2->leave($__internal_e0d0e2099d9bcd6a21a93cdfad6b590e9ef50e7214104b2be854b88ba56e52b2_prof);

        
        $__internal_521c91b8c170d0570630297c71cb0978dc60703d1e768dbdc3baa39f8fc75441->leave($__internal_521c91b8c170d0570630297c71cb0978dc60703d1e768dbdc3baa39f8fc75441_prof);

    }

    public function getTemplateName()
    {
        return "Form/ErstellenGroupCalendarForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 15,  31 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(SGroupForm, {'attr': {'id': 'selectgroup'},'action': path('stunden-plan'), 'method': 'POST'}) }}<div class=\"form-group\">    {{ form_row(SGroupForm.schuleGroup,{'id': 'groupname'}) }}</div><div class=\"form-group pull-right\">        <input type=\"submit\" id=\"grouperstellen\" value=\"Erstellen\" class=\" btn btn-erstellen\" >        <button type=\"button\" class=\"btn btn-cancel\" data-dismiss=\"modal\">Schließen</button></div>{{ form_end(SGroupForm) }}", "Form/ErstellenGroupCalendarForm.html.twig", "C:\\Apache24\\htdocs\\app\\Resources\\views\\Form\\ErstellenGroupCalendarForm.html.twig");
    }
}

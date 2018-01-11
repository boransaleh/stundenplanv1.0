<?php

/* Form/GroupBerichtenForm.html.twig */
class __TwigTemplate_1dcdcfea736f92d64884581540a3ebe46824338721fc0635f3c90a837964c2af extends Twig_Template
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
        $__internal_a90183d8421318af3d97a67130c7131fc41e51fc3fb3d0921e9880856b4dcb5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a90183d8421318af3d97a67130c7131fc41e51fc3fb3d0921e9880856b4dcb5e->enter($__internal_a90183d8421318af3d97a67130c7131fc41e51fc3fb3d0921e9880856b4dcb5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Form/GroupBerichtenForm.html.twig"));

        $__internal_22dd3d7909bc8418adc7dd7b11b6500131400fa562bef8e4748d0971caf226ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22dd3d7909bc8418adc7dd7b11b6500131400fa562bef8e4748d0971caf226ad->enter($__internal_22dd3d7909bc8418adc7dd7b11b6500131400fa562bef8e4748d0971caf226ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Form/GroupBerichtenForm.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["GroupBerichten"] ?? $this->getContext($context, "GroupBerichten")), 'form_start', array("attr" => array("id" => "groupBerichtenForm", "target" => "_blank"), "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("group-report"), "method" => "POST"));
        echo "

<div class=\"form-group\">
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["GroupBerichten"] ?? $this->getContext($context, "GroupBerichten")), "schuleGroup", array()), 'row', array("id" => "groupnameBerichten"));
        echo "


</div>

<div class=\"form-group pull-right\">
    <input type=\"submit\" id=\"GroupReportExport\" value=\"Exportieren\" class=\" btn btn-erstellen\" >
    <button type=\"button\" class=\"btn btn-cancel\" data-dismiss=\"modal\">Schließen</button>
</div>



";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["GroupBerichten"] ?? $this->getContext($context, "GroupBerichten")), 'form_end');
        echo "
";
        
        $__internal_a90183d8421318af3d97a67130c7131fc41e51fc3fb3d0921e9880856b4dcb5e->leave($__internal_a90183d8421318af3d97a67130c7131fc41e51fc3fb3d0921e9880856b4dcb5e_prof);

        
        $__internal_22dd3d7909bc8418adc7dd7b11b6500131400fa562bef8e4748d0971caf226ad->leave($__internal_22dd3d7909bc8418adc7dd7b11b6500131400fa562bef8e4748d0971caf226ad_prof);

    }

    public function getTemplateName()
    {
        return "Form/GroupBerichtenForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 16,  31 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(GroupBerichten, {'attr': {'id': 'groupBerichtenForm','target':'_blank'},'action': path('group-report'), 'method': 'POST'}) }}<div class=\"form-group\">    {{ form_row(GroupBerichten.schuleGroup,{'id': 'groupnameBerichten'}) }}</div><div class=\"form-group pull-right\">    <input type=\"submit\" id=\"GroupReportExport\" value=\"Exportieren\" class=\" btn btn-erstellen\" >    <button type=\"button\" class=\"btn btn-cancel\" data-dismiss=\"modal\">Schließen</button></div>{{ form_end(GroupBerichten) }}", "Form/GroupBerichtenForm.html.twig", "C:\\Apache24\\htdocs\\app\\Resources\\views\\Form\\GroupBerichtenForm.html.twig");
    }
}

<?php

/* :Form:GroupBerichtenForm.html.twig */
class __TwigTemplate_f3db35e0ad030800614d3d6276b6e9de84e1a7a2e3a61ad62f83278e3a306919 extends Twig_Template
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
        $__internal_afc8a57f2342df6e265a968fc5d82966f1382b836b1c8f95191b848cceada2d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afc8a57f2342df6e265a968fc5d82966f1382b836b1c8f95191b848cceada2d7->enter($__internal_afc8a57f2342df6e265a968fc5d82966f1382b836b1c8f95191b848cceada2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Form:GroupBerichtenForm.html.twig"));

        $__internal_f6b2dd01e4a26d095a30fd9845bc2caf26666b3f5da2492b8eb41d78ec4d43cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6b2dd01e4a26d095a30fd9845bc2caf26666b3f5da2492b8eb41d78ec4d43cc->enter($__internal_f6b2dd01e4a26d095a30fd9845bc2caf26666b3f5da2492b8eb41d78ec4d43cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Form:GroupBerichtenForm.html.twig"));

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
        
        $__internal_afc8a57f2342df6e265a968fc5d82966f1382b836b1c8f95191b848cceada2d7->leave($__internal_afc8a57f2342df6e265a968fc5d82966f1382b836b1c8f95191b848cceada2d7_prof);

        
        $__internal_f6b2dd01e4a26d095a30fd9845bc2caf26666b3f5da2492b8eb41d78ec4d43cc->leave($__internal_f6b2dd01e4a26d095a30fd9845bc2caf26666b3f5da2492b8eb41d78ec4d43cc_prof);

    }

    public function getTemplateName()
    {
        return ":Form:GroupBerichtenForm.html.twig";
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
        return new Twig_Source("{{ form_start(GroupBerichten, {'attr': {'id': 'groupBerichtenForm','target':'_blank'},'action': path('group-report'), 'method': 'POST'}) }}<div class=\"form-group\">    {{ form_row(GroupBerichten.schuleGroup,{'id': 'groupnameBerichten'}) }}</div><div class=\"form-group pull-right\">    <input type=\"submit\" id=\"GroupReportExport\" value=\"Exportieren\" class=\" btn btn-erstellen\" >    <button type=\"button\" class=\"btn btn-cancel\" data-dismiss=\"modal\">Schließen</button></div>{{ form_end(GroupBerichten) }}", ":Form:GroupBerichtenForm.html.twig", "C:\\Apache24\\htdocs\\app/Resources\\views/Form/GroupBerichtenForm.html.twig");
    }
}

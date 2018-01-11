<?php

/* :Form:ErstellenGroupCalendarForm.html.twig */
class __TwigTemplate_2140288b8dd5b0ba7e85bbbac20c6334c8bc30b84715811603e310557c87fdc1 extends Twig_Template
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
        $__internal_a20041d86be7fb1e7b6a47143794ab69635521c037202627a16823a64f229417 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a20041d86be7fb1e7b6a47143794ab69635521c037202627a16823a64f229417->enter($__internal_a20041d86be7fb1e7b6a47143794ab69635521c037202627a16823a64f229417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Form:ErstellenGroupCalendarForm.html.twig"));

        $__internal_0818c9c93487aefe958a65268c05bc2ea6c406d0d9b06a0240507a357e9b142c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0818c9c93487aefe958a65268c05bc2ea6c406d0d9b06a0240507a357e9b142c->enter($__internal_0818c9c93487aefe958a65268c05bc2ea6c406d0d9b06a0240507a357e9b142c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Form:ErstellenGroupCalendarForm.html.twig"));

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
        
        $__internal_a20041d86be7fb1e7b6a47143794ab69635521c037202627a16823a64f229417->leave($__internal_a20041d86be7fb1e7b6a47143794ab69635521c037202627a16823a64f229417_prof);

        
        $__internal_0818c9c93487aefe958a65268c05bc2ea6c406d0d9b06a0240507a357e9b142c->leave($__internal_0818c9c93487aefe958a65268c05bc2ea6c406d0d9b06a0240507a357e9b142c_prof);

    }

    public function getTemplateName()
    {
        return ":Form:ErstellenGroupCalendarForm.html.twig";
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
        return new Twig_Source("{{ form_start(SGroupForm, {'attr': {'id': 'selectgroup'},'action': path('stunden-plan'), 'method': 'POST'}) }}<div class=\"form-group\">    {{ form_row(SGroupForm.schuleGroup,{'id': 'groupname'}) }}</div><div class=\"form-group pull-right\">        <input type=\"submit\" id=\"grouperstellen\" value=\"Erstellen\" class=\" btn btn-erstellen\" >        <button type=\"button\" class=\"btn btn-cancel\" data-dismiss=\"modal\">Schließen</button></div>{{ form_end(SGroupForm) }}", ":Form:ErstellenGroupCalendarForm.html.twig", "C:\\Apache24\\htdocs\\app/Resources\\views/Form/ErstellenGroupCalendarForm.html.twig");
    }
}

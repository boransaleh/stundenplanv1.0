<?php

/* callback/draw_callback.js.twig */
class __TwigTemplate_2b1054a0eedfa5a97daf6d1d440c28029afb99bde45ec5059b7de99bc44f9bae extends Twig_Template
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
        $__internal_0fec97ed633ddcf1381fae9f8f6adc3bd5b8060e0759d38ce559a9be188aa96d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fec97ed633ddcf1381fae9f8f6adc3bd5b8060e0759d38ce559a9be188aa96d->enter($__internal_0fec97ed633ddcf1381fae9f8f6adc3bd5b8060e0759d38ce559a9be188aa96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "callback/draw_callback.js.twig"));

        $__internal_ccb9511a0bc4e14c36439b883e7a7917b01a27c42856905b7382a0634e0c86a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccb9511a0bc4e14c36439b883e7a7917b01a27c42856905b7382a0634e0c86a2->enter($__internal_ccb9511a0bc4e14c36439b883e7a7917b01a27c42856905b7382a0634e0c86a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "callback/draw_callback.js.twig"));

        // line 1
        echo "function drawCallback(setting){

    var api = this.api();
    \$('#sum').val(api.column(6).data().sum());

}";
        
        $__internal_0fec97ed633ddcf1381fae9f8f6adc3bd5b8060e0759d38ce559a9be188aa96d->leave($__internal_0fec97ed633ddcf1381fae9f8f6adc3bd5b8060e0759d38ce559a9be188aa96d_prof);

        
        $__internal_ccb9511a0bc4e14c36439b883e7a7917b01a27c42856905b7382a0634e0c86a2->leave($__internal_ccb9511a0bc4e14c36439b883e7a7917b01a27c42856905b7382a0634e0c86a2_prof);

    }

    public function getTemplateName()
    {
        return "callback/draw_callback.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("function drawCallback(setting){

    var api = this.api();
    \$('#sum').val(api.column(6).data().sum());

}", "callback/draw_callback.js.twig", "C:\\Apache24\\htdocs\\app\\Resources\\views\\callback\\draw_callback.js.twig");
    }
}

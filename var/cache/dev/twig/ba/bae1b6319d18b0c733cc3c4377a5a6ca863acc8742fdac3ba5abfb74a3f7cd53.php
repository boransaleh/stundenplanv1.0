<?php

/* :callback:display.js.twig */
class __TwigTemplate_b59cb77e57e870da4de97d2db4f26096812cff283063652c807936e10f05d652 extends Twig_Template
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
        $__internal_bf8b202a30a7da1c29eed78b55a753ae22aae53dcb050f571463bcaf3e9cea86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf8b202a30a7da1c29eed78b55a753ae22aae53dcb050f571463bcaf3e9cea86->enter($__internal_bf8b202a30a7da1c29eed78b55a753ae22aae53dcb050f571463bcaf3e9cea86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":callback:display.js.twig"));

        $__internal_c5a12b49fc257de8f82b517e534451a3efc4f7ec94d062676c1aa87726eb23db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5a12b49fc257de8f82b517e534451a3efc4f7ec94d062676c1aa87726eb23db->enter($__internal_c5a12b49fc257de8f82b517e534451a3efc4f7ec94d062676c1aa87726eb23db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":callback:display.js.twig"));

        // line 1
        echo "action = function (e, dt, node, config) {

    \$('#addGesamtFach').modal('show');

    \$('#GesamtFach_hinzufügen').onclick(function () {
        dt.draw();

    });





}";
        
        $__internal_bf8b202a30a7da1c29eed78b55a753ae22aae53dcb050f571463bcaf3e9cea86->leave($__internal_bf8b202a30a7da1c29eed78b55a753ae22aae53dcb050f571463bcaf3e9cea86_prof);

        
        $__internal_c5a12b49fc257de8f82b517e534451a3efc4f7ec94d062676c1aa87726eb23db->leave($__internal_c5a12b49fc257de8f82b517e534451a3efc4f7ec94d062676c1aa87726eb23db_prof);

    }

    public function getTemplateName()
    {
        return ":callback:display.js.twig";
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
        return new Twig_Source("action = function (e, dt, node, config) {

    \$('#addGesamtFach').modal('show');

    \$('#GesamtFach_hinzufügen').onclick(function () {
        dt.draw();

    });





}", ":callback:display.js.twig", "C:\\Apache24\\htdocs\\app/Resources\\views/callback/display.js.twig");
    }
}

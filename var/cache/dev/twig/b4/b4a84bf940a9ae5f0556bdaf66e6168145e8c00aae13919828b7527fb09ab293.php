<?php

/* callback/display.js.twig */
class __TwigTemplate_9fda28c180a7502ec711feafe95919c9ca49c5c7374b86ed281daffcfe12b016 extends Twig_Template
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
        $__internal_5f462a0cec6da8eadbfe99f7ab175eda764d09c900afc8dde81e71af409d5e1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f462a0cec6da8eadbfe99f7ab175eda764d09c900afc8dde81e71af409d5e1c->enter($__internal_5f462a0cec6da8eadbfe99f7ab175eda764d09c900afc8dde81e71af409d5e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "callback/display.js.twig"));

        $__internal_2c6c77de02ec790b2ad1e37c919c215779807da8840f7b3f503c75ad96a2793f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c6c77de02ec790b2ad1e37c919c215779807da8840f7b3f503c75ad96a2793f->enter($__internal_2c6c77de02ec790b2ad1e37c919c215779807da8840f7b3f503c75ad96a2793f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "callback/display.js.twig"));

        // line 1
        echo "action = function (e, dt, node, config) {

    \$('#addGesamtFach').modal('show');

    \$('#GesamtFach_hinzufügen').onclick(function () {
        dt.draw();

    });





}";
        
        $__internal_5f462a0cec6da8eadbfe99f7ab175eda764d09c900afc8dde81e71af409d5e1c->leave($__internal_5f462a0cec6da8eadbfe99f7ab175eda764d09c900afc8dde81e71af409d5e1c_prof);

        
        $__internal_2c6c77de02ec790b2ad1e37c919c215779807da8840f7b3f503c75ad96a2793f->leave($__internal_2c6c77de02ec790b2ad1e37c919c215779807da8840f7b3f503c75ad96a2793f_prof);

    }

    public function getTemplateName()
    {
        return "callback/display.js.twig";
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





}", "callback/display.js.twig", "C:\\Apache24\\htdocs\\app\\Resources\\views\\callback\\display.js.twig");
    }
}

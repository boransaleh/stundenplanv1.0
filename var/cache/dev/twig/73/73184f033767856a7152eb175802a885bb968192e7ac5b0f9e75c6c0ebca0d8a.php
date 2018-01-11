<?php

/* :callback:draw_callback.js.twig */
class __TwigTemplate_dfcc8cbd60b125ca4e3c9f43ab674062f69496aec9056ebdb19d2c5e29732fce extends Twig_Template
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
        $__internal_5c9f0a9764103635e218723008a96416697e4a906006bacef6931e9f929b95ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c9f0a9764103635e218723008a96416697e4a906006bacef6931e9f929b95ed->enter($__internal_5c9f0a9764103635e218723008a96416697e4a906006bacef6931e9f929b95ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":callback:draw_callback.js.twig"));

        $__internal_5e2491382eb0a0a183ec999f514bc5229ac584bfd86a36e980b28867b0129525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e2491382eb0a0a183ec999f514bc5229ac584bfd86a36e980b28867b0129525->enter($__internal_5e2491382eb0a0a183ec999f514bc5229ac584bfd86a36e980b28867b0129525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":callback:draw_callback.js.twig"));

        // line 1
        echo "function drawCallback(setting){

    var api = this.api();
    \$('#sum').val(api.column(6).data().sum());

}";
        
        $__internal_5c9f0a9764103635e218723008a96416697e4a906006bacef6931e9f929b95ed->leave($__internal_5c9f0a9764103635e218723008a96416697e4a906006bacef6931e9f929b95ed_prof);

        
        $__internal_5e2491382eb0a0a183ec999f514bc5229ac584bfd86a36e980b28867b0129525->leave($__internal_5e2491382eb0a0a183ec999f514bc5229ac584bfd86a36e980b28867b0129525_prof);

    }

    public function getTemplateName()
    {
        return ":callback:draw_callback.js.twig";
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

}", ":callback:draw_callback.js.twig", "C:\\Apache24\\htdocs\\app/Resources\\views/callback/draw_callback.js.twig");
    }
}

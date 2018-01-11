<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_4474c954f072042dbb8b214c11a0f5b7b5406ce9b682ccd61042606b5b2e5614 extends Twig_Template
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
        $__internal_ef30b241ef2e20a0f628cd50434e1f445ebc93299033112798e4d5aa1ccd3528 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef30b241ef2e20a0f628cd50434e1f445ebc93299033112798e4d5aa1ccd3528->enter($__internal_ef30b241ef2e20a0f628cd50434e1f445ebc93299033112798e4d5aa1ccd3528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_195e747adf088086bdac126987b5b2eadb206c97b34115e009cf66e8c521b9dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_195e747adf088086bdac126987b5b2eadb206c97b34115e009cf66e8c521b9dc->enter($__internal_195e747adf088086bdac126987b5b2eadb206c97b34115e009cf66e8c521b9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ef30b241ef2e20a0f628cd50434e1f445ebc93299033112798e4d5aa1ccd3528->leave($__internal_ef30b241ef2e20a0f628cd50434e1f445ebc93299033112798e4d5aa1ccd3528_prof);

        
        $__internal_195e747adf088086bdac126987b5b2eadb206c97b34115e009cf66e8c521b9dc->leave($__internal_195e747adf088086bdac126987b5b2eadb206c97b34115e009cf66e8c521b9dc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}

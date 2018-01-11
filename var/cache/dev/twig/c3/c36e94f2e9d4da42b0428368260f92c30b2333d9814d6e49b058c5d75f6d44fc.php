<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_826e7d259c158438f50fcfb87dd1344a94e8daf7017ad1f02991ddfb55ca1993 extends Twig_Template
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
        $__internal_18fd801b12736bd6475785597c995c02d45a832eae3f456b689ac4c7714c0347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18fd801b12736bd6475785597c995c02d45a832eae3f456b689ac4c7714c0347->enter($__internal_18fd801b12736bd6475785597c995c02d45a832eae3f456b689ac4c7714c0347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_f0cef35af6a876a5e28b1f1b99c05c25fe8b2f069b655682f58b9c2ff00f5a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0cef35af6a876a5e28b1f1b99c05c25fe8b2f069b655682f58b9c2ff00f5a58->enter($__internal_f0cef35af6a876a5e28b1f1b99c05c25fe8b2f069b655682f58b9c2ff00f5a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_18fd801b12736bd6475785597c995c02d45a832eae3f456b689ac4c7714c0347->leave($__internal_18fd801b12736bd6475785597c995c02d45a832eae3f456b689ac4c7714c0347_prof);

        
        $__internal_f0cef35af6a876a5e28b1f1b99c05c25fe8b2f069b655682f58b9c2ff00f5a58->leave($__internal_f0cef35af6a876a5e28b1f1b99c05c25fe8b2f069b655682f58b9c2ff00f5a58_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}

<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_75d21c5367dd0cf7a18b6661442db17523b202295efc76a7dbfb86be7cd9630b extends Twig_Template
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
        $__internal_8a228b3f2df7c75f0d48adad52aadd04b5be13ae237a79e0e1511b6e4247af65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a228b3f2df7c75f0d48adad52aadd04b5be13ae237a79e0e1511b6e4247af65->enter($__internal_8a228b3f2df7c75f0d48adad52aadd04b5be13ae237a79e0e1511b6e4247af65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_da561c756b1a50c7820b745bf4d460e61cf9c6edbcef24d710daae985de0a058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da561c756b1a50c7820b745bf4d460e61cf9c6edbcef24d710daae985de0a058->enter($__internal_da561c756b1a50c7820b745bf4d460e61cf9c6edbcef24d710daae985de0a058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_8a228b3f2df7c75f0d48adad52aadd04b5be13ae237a79e0e1511b6e4247af65->leave($__internal_8a228b3f2df7c75f0d48adad52aadd04b5be13ae237a79e0e1511b6e4247af65_prof);

        
        $__internal_da561c756b1a50c7820b745bf4d460e61cf9c6edbcef24d710daae985de0a058->leave($__internal_da561c756b1a50c7820b745bf4d460e61cf9c6edbcef24d710daae985de0a058_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}

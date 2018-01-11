<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_6112e565620e2abc69d1fe34cf22b3e937843bce6c7c6f074bf6225b655801dd extends Twig_Template
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
        $__internal_bceea8d1c8a4c559848dc57d3b84260878e7fa459bc90b915f3b037b75fe9f54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bceea8d1c8a4c559848dc57d3b84260878e7fa459bc90b915f3b037b75fe9f54->enter($__internal_bceea8d1c8a4c559848dc57d3b84260878e7fa459bc90b915f3b037b75fe9f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_b80914a30346ee32a774fa159a7cc7aeed86d16e76978fd41e60321c706280c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b80914a30346ee32a774fa159a7cc7aeed86d16e76978fd41e60321c706280c2->enter($__internal_b80914a30346ee32a774fa159a7cc7aeed86d16e76978fd41e60321c706280c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_bceea8d1c8a4c559848dc57d3b84260878e7fa459bc90b915f3b037b75fe9f54->leave($__internal_bceea8d1c8a4c559848dc57d3b84260878e7fa459bc90b915f3b037b75fe9f54_prof);

        
        $__internal_b80914a30346ee32a774fa159a7cc7aeed86d16e76978fd41e60321c706280c2->leave($__internal_b80914a30346ee32a774fa159a7cc7aeed86d16e76978fd41e60321c706280c2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}

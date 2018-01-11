<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_ef07ff84acd94fcb038b526b3aa04534598c479deb34d1f28322295519203a7f extends Twig_Template
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
        $__internal_2510ef5cb20fe4b635c22d73ac1d7b7020833b9221d85abe6fb1f4177920ead2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2510ef5cb20fe4b635c22d73ac1d7b7020833b9221d85abe6fb1f4177920ead2->enter($__internal_2510ef5cb20fe4b635c22d73ac1d7b7020833b9221d85abe6fb1f4177920ead2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_5c2cfdd1977f409072cc2e326704ef33ebcb601c493a80bf24b28d4714cd667c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c2cfdd1977f409072cc2e326704ef33ebcb601c493a80bf24b28d4714cd667c->enter($__internal_5c2cfdd1977f409072cc2e326704ef33ebcb601c493a80bf24b28d4714cd667c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_2510ef5cb20fe4b635c22d73ac1d7b7020833b9221d85abe6fb1f4177920ead2->leave($__internal_2510ef5cb20fe4b635c22d73ac1d7b7020833b9221d85abe6fb1f4177920ead2_prof);

        
        $__internal_5c2cfdd1977f409072cc2e326704ef33ebcb601c493a80bf24b28d4714cd667c->leave($__internal_5c2cfdd1977f409072cc2e326704ef33ebcb601c493a80bf24b28d4714cd667c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}

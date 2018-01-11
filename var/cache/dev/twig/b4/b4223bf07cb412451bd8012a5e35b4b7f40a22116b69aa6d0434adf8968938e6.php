<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_39f97a631e9940c7afd404e1d1d1c79d359880ea181148d428d620bdbeda0557 extends Twig_Template
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
        $__internal_1cc3d21da282c40bc76032a58cb238f86aa76f85ab8f2e7c30bc708e9ef7ead7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cc3d21da282c40bc76032a58cb238f86aa76f85ab8f2e7c30bc708e9ef7ead7->enter($__internal_1cc3d21da282c40bc76032a58cb238f86aa76f85ab8f2e7c30bc708e9ef7ead7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_52b174b6d6603cda1903a65739d6631659efbbd4bc956a5cd94ee571fc9be3fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52b174b6d6603cda1903a65739d6631659efbbd4bc956a5cd94ee571fc9be3fc->enter($__internal_52b174b6d6603cda1903a65739d6631659efbbd4bc956a5cd94ee571fc9be3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_1cc3d21da282c40bc76032a58cb238f86aa76f85ab8f2e7c30bc708e9ef7ead7->leave($__internal_1cc3d21da282c40bc76032a58cb238f86aa76f85ab8f2e7c30bc708e9ef7ead7_prof);

        
        $__internal_52b174b6d6603cda1903a65739d6631659efbbd4bc956a5cd94ee571fc9be3fc->leave($__internal_52b174b6d6603cda1903a65739d6631659efbbd4bc956a5cd94ee571fc9be3fc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}

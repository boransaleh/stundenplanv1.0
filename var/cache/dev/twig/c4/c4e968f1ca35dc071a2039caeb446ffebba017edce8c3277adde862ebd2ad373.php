<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_8e466185ddfa466bca1fa7e09ed74ba20c135ced0e1d8a56fd1ed291e9b6f42f extends Twig_Template
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
        $__internal_7a1541e34c2784d2a3240be1566427f4e3dddf878b4f34234340139a825628c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a1541e34c2784d2a3240be1566427f4e3dddf878b4f34234340139a825628c2->enter($__internal_7a1541e34c2784d2a3240be1566427f4e3dddf878b4f34234340139a825628c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_094d88d0f440700fd1af54d094786eb5b428883532a26b645be84d56096dce24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_094d88d0f440700fd1af54d094786eb5b428883532a26b645be84d56096dce24->enter($__internal_094d88d0f440700fd1af54d094786eb5b428883532a26b645be84d56096dce24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_7a1541e34c2784d2a3240be1566427f4e3dddf878b4f34234340139a825628c2->leave($__internal_7a1541e34c2784d2a3240be1566427f4e3dddf878b4f34234340139a825628c2_prof);

        
        $__internal_094d88d0f440700fd1af54d094786eb5b428883532a26b645be84d56096dce24->leave($__internal_094d88d0f440700fd1af54d094786eb5b428883532a26b645be84d56096dce24_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}

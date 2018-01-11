<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_e78aa02c84886cdd625f9f649f6618e38bc07c19d894e9e24108098b5d0882ce extends Twig_Template
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
        $__internal_1ab2479c2c2f24e531bdcd0b5bad85704da9a1595b8e0795302d7cef28d99a47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ab2479c2c2f24e531bdcd0b5bad85704da9a1595b8e0795302d7cef28d99a47->enter($__internal_1ab2479c2c2f24e531bdcd0b5bad85704da9a1595b8e0795302d7cef28d99a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_b0a0e61c5d93d0b7046ae26dea75a68811aaca0c888afc3fd780422fb23e9e38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0a0e61c5d93d0b7046ae26dea75a68811aaca0c888afc3fd780422fb23e9e38->enter($__internal_b0a0e61c5d93d0b7046ae26dea75a68811aaca0c888afc3fd780422fb23e9e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_1ab2479c2c2f24e531bdcd0b5bad85704da9a1595b8e0795302d7cef28d99a47->leave($__internal_1ab2479c2c2f24e531bdcd0b5bad85704da9a1595b8e0795302d7cef28d99a47_prof);

        
        $__internal_b0a0e61c5d93d0b7046ae26dea75a68811aaca0c888afc3fd780422fb23e9e38->leave($__internal_b0a0e61c5d93d0b7046ae26dea75a68811aaca0c888afc3fd780422fb23e9e38_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}

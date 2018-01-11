<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_4ef4d849540c6284bc51a2e5323a6d77c4024c92f04975d5efe7cadf445a1268 extends Twig_Template
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
        $__internal_dc71aba43b0b2d7e28e9b21a92b56100c66c9c347b92bde0bda02add125f256a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc71aba43b0b2d7e28e9b21a92b56100c66c9c347b92bde0bda02add125f256a->enter($__internal_dc71aba43b0b2d7e28e9b21a92b56100c66c9c347b92bde0bda02add125f256a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_4c8024ce38521e089f48d34c81eaccad32c1ee5fde57754a132d8246f5b52b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c8024ce38521e089f48d34c81eaccad32c1ee5fde57754a132d8246f5b52b66->enter($__internal_4c8024ce38521e089f48d34c81eaccad32c1ee5fde57754a132d8246f5b52b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_dc71aba43b0b2d7e28e9b21a92b56100c66c9c347b92bde0bda02add125f256a->leave($__internal_dc71aba43b0b2d7e28e9b21a92b56100c66c9c347b92bde0bda02add125f256a_prof);

        
        $__internal_4c8024ce38521e089f48d34c81eaccad32c1ee5fde57754a132d8246f5b52b66->leave($__internal_4c8024ce38521e089f48d34c81eaccad32c1ee5fde57754a132d8246f5b52b66_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}

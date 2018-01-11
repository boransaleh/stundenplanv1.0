<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c4f4fa063cbb3228bdf5dd5b60caf0ab643fdb999330511f39afd2ad5a305ee6 extends Twig_Template
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
        $__internal_dd46754d8ae9eb958f81841842a46c556d88c5a20659c7c3650996009c1cf5f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd46754d8ae9eb958f81841842a46c556d88c5a20659c7c3650996009c1cf5f0->enter($__internal_dd46754d8ae9eb958f81841842a46c556d88c5a20659c7c3650996009c1cf5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_5a656dce30272218459b8a74b53ed42164e8117495f9e6b3bff0620dc65978b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a656dce30272218459b8a74b53ed42164e8117495f9e6b3bff0620dc65978b9->enter($__internal_5a656dce30272218459b8a74b53ed42164e8117495f9e6b3bff0620dc65978b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_dd46754d8ae9eb958f81841842a46c556d88c5a20659c7c3650996009c1cf5f0->leave($__internal_dd46754d8ae9eb958f81841842a46c556d88c5a20659c7c3650996009c1cf5f0_prof);

        
        $__internal_5a656dce30272218459b8a74b53ed42164e8117495f9e6b3bff0620dc65978b9->leave($__internal_5a656dce30272218459b8a74b53ed42164e8117495f9e6b3bff0620dc65978b9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}

<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_51cc53004f33de8bd6cd37c5c81259f55bcad3f4a971fdb39f474d19daedbac3 extends Twig_Template
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
        $__internal_d67e543dc658ce32a127b28da9a8821cab955d35d035fd3a1e3aba39e08f5279 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d67e543dc658ce32a127b28da9a8821cab955d35d035fd3a1e3aba39e08f5279->enter($__internal_d67e543dc658ce32a127b28da9a8821cab955d35d035fd3a1e3aba39e08f5279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_19e8092f7460ee55c42e3245e4e3d2c1d2a71b1582fd72bf6743d0d54597aab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19e8092f7460ee55c42e3245e4e3d2c1d2a71b1582fd72bf6743d0d54597aab9->enter($__internal_19e8092f7460ee55c42e3245e4e3d2c1d2a71b1582fd72bf6743d0d54597aab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_d67e543dc658ce32a127b28da9a8821cab955d35d035fd3a1e3aba39e08f5279->leave($__internal_d67e543dc658ce32a127b28da9a8821cab955d35d035fd3a1e3aba39e08f5279_prof);

        
        $__internal_19e8092f7460ee55c42e3245e4e3d2c1d2a71b1582fd72bf6743d0d54597aab9->leave($__internal_19e8092f7460ee55c42e3245e4e3d2c1d2a71b1582fd72bf6743d0d54597aab9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}

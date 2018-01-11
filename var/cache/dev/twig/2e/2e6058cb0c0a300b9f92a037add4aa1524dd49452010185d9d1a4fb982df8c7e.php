<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_c42a484ad7f583ee4f3367ee7dd61ad6088d11604fcf6a5c2acd64f11ecd1bc1 extends Twig_Template
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
        $__internal_2d921ce8825ad71eb9232066d9065e6a4d08beb85a24108fe7f09e28f038a76b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d921ce8825ad71eb9232066d9065e6a4d08beb85a24108fe7f09e28f038a76b->enter($__internal_2d921ce8825ad71eb9232066d9065e6a4d08beb85a24108fe7f09e28f038a76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_6578ed9e07abc422ffaf9dea4084b0f5755f8de08e7e1aaab29e705dfa376263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6578ed9e07abc422ffaf9dea4084b0f5755f8de08e7e1aaab29e705dfa376263->enter($__internal_6578ed9e07abc422ffaf9dea4084b0f5755f8de08e7e1aaab29e705dfa376263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_2d921ce8825ad71eb9232066d9065e6a4d08beb85a24108fe7f09e28f038a76b->leave($__internal_2d921ce8825ad71eb9232066d9065e6a4d08beb85a24108fe7f09e28f038a76b_prof);

        
        $__internal_6578ed9e07abc422ffaf9dea4084b0f5755f8de08e7e1aaab29e705dfa376263->leave($__internal_6578ed9e07abc422ffaf9dea4084b0f5755f8de08e7e1aaab29e705dfa376263_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}

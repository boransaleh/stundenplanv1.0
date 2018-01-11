<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_d0328f7bbd8d44a2545600a25540394059956bf96cad9159fb0f94a716f31fe2 extends Twig_Template
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
        $__internal_46779ff16e0c3bb8042fd5506c3129db8457bb2921d0f31e3d09ba95d6e603d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46779ff16e0c3bb8042fd5506c3129db8457bb2921d0f31e3d09ba95d6e603d0->enter($__internal_46779ff16e0c3bb8042fd5506c3129db8457bb2921d0f31e3d09ba95d6e603d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_8b349e0d7b1608d4d9f1092ff0257b4678ffb638b5447d2925845d83f56c67fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b349e0d7b1608d4d9f1092ff0257b4678ffb638b5447d2925845d83f56c67fd->enter($__internal_8b349e0d7b1608d4d9f1092ff0257b4678ffb638b5447d2925845d83f56c67fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_46779ff16e0c3bb8042fd5506c3129db8457bb2921d0f31e3d09ba95d6e603d0->leave($__internal_46779ff16e0c3bb8042fd5506c3129db8457bb2921d0f31e3d09ba95d6e603d0_prof);

        
        $__internal_8b349e0d7b1608d4d9f1092ff0257b4678ffb638b5447d2925845d83f56c67fd->leave($__internal_8b349e0d7b1608d4d9f1092ff0257b4678ffb638b5447d2925845d83f56c67fd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}

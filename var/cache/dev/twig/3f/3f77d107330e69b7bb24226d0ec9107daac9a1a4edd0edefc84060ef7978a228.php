<?php

/* SgDatatablesBundle:render:column.html.twig */
class __TwigTemplate_82cb07d2549312b44a0acab6bf8841e85f303298103840fd5faa259fb025af17 extends Twig_Template
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
        $__internal_ff1951fdc7d28068bd64db610e0499397626b33f9d6a375c18e210d775b33048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff1951fdc7d28068bd64db610e0499397626b33f9d6a375c18e210d775b33048->enter($__internal_ff1951fdc7d28068bd64db610e0499397626b33f9d6a375c18e210d775b33048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:render:column.html.twig"));

        $__internal_68378476ed7ee6cb6358a6aef2df9a5241a3823c4d7b5c35d82270d8379ec88a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68378476ed7ee6cb6358a6aef2df9a5241a3823c4d7b5c35d82270d8379ec88a->enter($__internal_68378476ed7ee6cb6358a6aef2df9a5241a3823c4d7b5c35d82270d8379ec88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:render:column.html.twig"));

        // line 9
        echo "<span class=\"";
        echo twig_escape_filter($this->env, ($context["column_class_editable_selector"] ?? $this->getContext($context, "column_class_editable_selector")), "html", null, true);
        echo "\" data-pk=\"";
        echo twig_escape_filter($this->env, ($context["pk"] ?? $this->getContext($context, "pk")), "html", null, true);
        echo "\" ";
        if ( !(($context["path"] ?? $this->getContext($context, "path")) === null)) {
            echo "data-path=\"";
            echo twig_escape_filter($this->env, ($context["path"] ?? $this->getContext($context, "path")), "html", null, true);
            echo "\"";
        }
        echo ">
    ";
        // line 10
        echo twig_escape_filter($this->env, ($context["data"] ?? $this->getContext($context, "data")), "html", null, true);
        echo "
</span>
";
        
        $__internal_ff1951fdc7d28068bd64db610e0499397626b33f9d6a375c18e210d775b33048->leave($__internal_ff1951fdc7d28068bd64db610e0499397626b33f9d6a375c18e210d775b33048_prof);

        
        $__internal_68378476ed7ee6cb6358a6aef2df9a5241a3823c4d7b5c35d82270d8379ec88a->leave($__internal_68378476ed7ee6cb6358a6aef2df9a5241a3823c4d7b5c35d82270d8379ec88a_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:render:column.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 10,  25 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
 # This file is part of the SgDatatablesBundle package.
 #
 # (c) stwe <https://github.com/stwe/DatatablesBundle>
 #
 # For the full copyright and license information, please view the LICENSE
 # file that was distributed with this source code.
 #}
<span class=\"{{ column_class_editable_selector }}\" data-pk=\"{{ pk }}\" {% if path is not same as(null) %}data-path=\"{{ path }}\"{% endif %}>
    {{ data }}
</span>
", "SgDatatablesBundle:render:column.html.twig", "C:\\Apache24\\htdocs\\vendor\\sg\\datatablesbundle/Resources/views/render/column.html.twig");
    }
}

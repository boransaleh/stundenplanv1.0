<?php

/* @SgDatatables/render/column.html.twig */
class __TwigTemplate_6a4f9960e65a7367bf5e8fdd630831f72d042363cf212be57877720bd5572b7f extends Twig_Template
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
        $__internal_ff454ed5693d8259899992198071546a8b8dc424533fd146e1d9e4819e2afd4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff454ed5693d8259899992198071546a8b8dc424533fd146e1d9e4819e2afd4e->enter($__internal_ff454ed5693d8259899992198071546a8b8dc424533fd146e1d9e4819e2afd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/render/column.html.twig"));

        $__internal_aa9a14dd3b276a93974c1bd4a05747fcef5e5c98602291e52a299c78c7c16c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9a14dd3b276a93974c1bd4a05747fcef5e5c98602291e52a299c78c7c16c06->enter($__internal_aa9a14dd3b276a93974c1bd4a05747fcef5e5c98602291e52a299c78c7c16c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/render/column.html.twig"));

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
        
        $__internal_ff454ed5693d8259899992198071546a8b8dc424533fd146e1d9e4819e2afd4e->leave($__internal_ff454ed5693d8259899992198071546a8b8dc424533fd146e1d9e4819e2afd4e_prof);

        
        $__internal_aa9a14dd3b276a93974c1bd4a05747fcef5e5c98602291e52a299c78c7c16c06->leave($__internal_aa9a14dd3b276a93974c1bd4a05747fcef5e5c98602291e52a299c78c7c16c06_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/render/column.html.twig";
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
", "@SgDatatables/render/column.html.twig", "C:\\Apache24\\htdocs\\vendor\\sg\\datatablesbundle\\Resources\\views\\render\\column.html.twig");
    }
}

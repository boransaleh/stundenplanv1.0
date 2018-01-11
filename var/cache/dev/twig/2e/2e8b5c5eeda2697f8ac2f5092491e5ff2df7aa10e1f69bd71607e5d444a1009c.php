<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_54413e67e1778b5838f96a39e1c82f6dd8ed8d1274da332fbbe66eebfe221b5e extends Twig_Template
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
        $__internal_595f2b7886bd6890a2a74f8a4a60a659f3185542c7411570789c67377317650f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_595f2b7886bd6890a2a74f8a4a60a659f3185542c7411570789c67377317650f->enter($__internal_595f2b7886bd6890a2a74f8a4a60a659f3185542c7411570789c67377317650f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_981e2d632d1bc573be7890b2087aa9ee0aeb373c5030030d086c03ccb4d0b376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_981e2d632d1bc573be7890b2087aa9ee0aeb373c5030030d086c03ccb4d0b376->enter($__internal_981e2d632d1bc573be7890b2087aa9ee0aeb373c5030030d086c03ccb4d0b376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_595f2b7886bd6890a2a74f8a4a60a659f3185542c7411570789c67377317650f->leave($__internal_595f2b7886bd6890a2a74f8a4a60a659f3185542c7411570789c67377317650f_prof);

        
        $__internal_981e2d632d1bc573be7890b2087aa9ee0aeb373c5030030d086c03ccb4d0b376->leave($__internal_981e2d632d1bc573be7890b2087aa9ee0aeb373c5030030d086c03ccb4d0b376_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}

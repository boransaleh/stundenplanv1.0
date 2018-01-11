<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_81b76aeddb22fb4949c24bb1afd9d69dd10d673ae82280dd105801af556379da extends Twig_Template
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
        $__internal_185f1a713520af2158d95e87c95cd8a4edb7d5b6659f6be6bc9773c1a5bc5dbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_185f1a713520af2158d95e87c95cd8a4edb7d5b6659f6be6bc9773c1a5bc5dbd->enter($__internal_185f1a713520af2158d95e87c95cd8a4edb7d5b6659f6be6bc9773c1a5bc5dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_0fd7c74de19475d6ffb9ed7d275d87603952f5a023cdb246d82be1eaac705945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd7c74de19475d6ffb9ed7d275d87603952f5a023cdb246d82be1eaac705945->enter($__internal_0fd7c74de19475d6ffb9ed7d275d87603952f5a023cdb246d82be1eaac705945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_185f1a713520af2158d95e87c95cd8a4edb7d5b6659f6be6bc9773c1a5bc5dbd->leave($__internal_185f1a713520af2158d95e87c95cd8a4edb7d5b6659f6be6bc9773c1a5bc5dbd_prof);

        
        $__internal_0fd7c74de19475d6ffb9ed7d275d87603952f5a023cdb246d82be1eaac705945->leave($__internal_0fd7c74de19475d6ffb9ed7d275d87603952f5a023cdb246d82be1eaac705945_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
